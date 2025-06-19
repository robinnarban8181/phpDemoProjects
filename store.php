<?php
// Include database connection
include 'config.php';

// Only proceed if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and clean form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $address = htmlspecialchars(trim($_POST['address']));

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO user (name, email, mobile, address) VALUES (?, ?, ?, ?)");

    // Bind parameters (4 strings)
    $stmt->bind_param("ssss", $name, $email, $mobile, $address);

    // Execute and redirect if successful
    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        // Show error if query fails
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
