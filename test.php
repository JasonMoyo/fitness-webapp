<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set file name and content
$file = "test_output.txt";
$content = "Hello! PHP is writing to this file.\n";

// Try to write to the file
if (file_put_contents($file, $content, FILE_APPEND)) {
    echo "Success: File written!";
} else {
    echo "ERROR: Could not write to file.";
}
?>
