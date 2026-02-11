<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['member-name'] ?? 'N/A';
    $email = $_POST['member-email'] ?? 'N/A';
    $phone = $_POST['member-phone'] ?? 'N/A';
    $plan = $_POST['selected-plan'] ?? 'N/A';

    $data = "Full Name: $name\nEmail: $email\nPhone: $phone\nSelected Plan: $plan\n\n";

    if (file_put_contents("membership_requests.txt", $data, FILE_APPEND)) {
        echo "✅ Membership request saved!";
    } else {
        echo "❌ Failed to save membership request.";
    }
} else {
    echo "Invalid request.";
}
?>
