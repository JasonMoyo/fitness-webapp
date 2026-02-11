<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['class-name'] ?? 'N/A';
    $email = $_POST['class-email'] ?? 'N/A';
    $date = $_POST['class-date'] ?? 'N/A';
    $type = $_POST['class-type'] ?? 'N/A';

    $data = "Full Name: $name\nEmail: $email\nPreferred Date: $date\nClass Type: $type\n\n";

    if (file_put_contents("class_bookings.txt", $data, FILE_APPEND)) {
        echo "✅ Class booking saved!";
    } else {
        echo "❌ Failed to save booking.";
    }
} else {
    echo "Invalid request.";
}
?>
