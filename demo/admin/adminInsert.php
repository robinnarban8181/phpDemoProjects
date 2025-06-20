<?php
include 'config.php';

$name = $_POST['name'];
$content = $_POST['content'];
$position = $_POST['position'];

// Handle Image Upload
$filename = $_FILES["image"]["name"] ?? '';
$tempName = $_FILES["image"]["tmp_name"] ?? '';

$folder = "img/" . $filename;

// Only move file if it exists
if (!empty($filename)) {
    move_uploaded_file($tempName, $folder);
}

// Insert into Database
$conn->query("INSERT INTO admin (name, content, position, image) VALUES ('$name', '$content', '$position', '$filename')");

// Redirect
header("Location: dashbord.php");
?>
