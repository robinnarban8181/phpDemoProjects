<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

// Handle image upload
$imageName = '';
if (!empty($_FILES['img']['name'])) {
    $imageName = basename($_FILES['img']['name']);
    $imageTmp = $_FILES['img']['tmp_name'];
    $targetDir = "uploads/" . $imageName;

    // Create 'uploads/' directory if it doesn't exist
    if (!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }

    move_uploaded_file($imageTmp, $targetDir);
}

// Insert into database
$sql = "INSERT INTO user (name, email, mobile, address, image, created_at)
        VALUES ('$name', '$email', '$mobile', '$address', '$imageName', NOW())";

$conn->query($sql);
header("Location: index.php");
?>
