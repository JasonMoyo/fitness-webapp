<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['auth-email'];
    $password = $_POST['auth-password'];

    $dataFile = 'users.json';

    if (!file_exists($dataFile)) {
        echo "No users registered.";
        exit;
    }

    $json = file_get_contents($dataFile);
    $users = json_decode($json, true);

    if (isset($users[$email])) {
        $stored = $users[$email];

        // For older plain text users, allow fallback (not secure—remove this in production)
        $valid = is_array($stored) 
            ? password_verify($password, $stored['password']) 
            : ($stored === $password);

        if ($valid) {
            $_SESSION['email'] = $email;
            $_SESSION['goal'] = $stored['goal'] ?? '';
            $_SESSION['experience'] = $stored['experience'] ?? '';
            header("Location: welcome.php");
            exit;
        }
    }

    echo "Invalid email or password.";
}
?>
