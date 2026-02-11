<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $goal = $_POST['goal'];
    $experience = $_POST['experience'];

    $dataFile = 'users.json';
    $users = [];

    if (file_exists($dataFile)) {
        $json = file_get_contents($dataFile);
        $users = json_decode($json, true);
    }

    // Prevent duplicate registration
    if (isset($users[$email])) {
        echo "User already exists!";
        exit;
    }

    // Save the new user
    $users[$email] = [
        'password' => $password,
        'goal' => $goal,
        'experience' => $experience
    ];

    file_put_contents($dataFile, json_encode($users, JSON_PRETTY_PRINT));
    header("Location: thank-you.html");
    exit;
}
?>
