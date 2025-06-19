<?php
include 'config.php'; // for DB connection

if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Save image path to DB
        $sql = "INSERT INTO images (image_path) VALUES ('$image')";
        if (mysqli_query($conn, $sql)) {
            echo "Image uploaded successfully.";
        } else {
            echo "Database error.";
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>
