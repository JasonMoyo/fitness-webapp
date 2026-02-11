<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!$name || !$email || !$message) {
        echo "All fields are required.";
        exit;
    }

    $testimonial = [
        'name' => $name,
        'email' => $email,
        'message' => $message,
        'timestamp' => date('Y-m-d H:i:s')
    ];

    $file = 'testimonials.json';
    $testimonials = [];

    if (file_exists($file)) {
        $json = file_get_contents($file);
        $testimonials = json_decode($json, true);
    }

    $testimonials[] = $testimonial;

    file_put_contents($file, json_encode($testimonials, JSON_PRETTY_PRINT));

    header("Location: thank-you.html");
    exit;
}
?>
