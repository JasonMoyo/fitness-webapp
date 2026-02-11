<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'] ?? 'N/A';
    $email = $_POST['email'] ?? 'N/A';
    $phone = $_POST['phone'] ?? 'N/A';
    $dob = $_POST['dob'] ?? 'N/A';
    $gender = $_POST['gender'] ?? 'N/A';
    $goal = $_POST['goal'] ?? 'N/A';
    $experience = $_POST['experience'] ?? 'N/A';

    // Prepare data to be written to the file
    $data = "Name: $name\nEmail: $email\nPhone: $phone\nDOB: $dob\nGender: $gender\nGoal: $goal\nExperience: $experience\n\n";

    // Absolute file path
    $filePath = 'C:/xampp/htdocs/fitness-site/joinus_submissions.txt'; // Adjust path if necessary

    // Attempt to write to the file
    if (file_put_contents($filePath, $data, FILE_APPEND)) {
        echo "✅ Data successfully saved to the text file!";
    } else {
        echo "❌ Failed to write to the text file. Check file permissions!";
    }
} else {
    echo "Invalid request method.";
}
?>
