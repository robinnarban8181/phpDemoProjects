<?php
include 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM user WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
    <h2>Edit User</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        Name: <input type="text" name="name" value="<?= $row['name'] ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= $row['email'] ?>" required><br><br>
        Mobile No: <input type="text" name="mobile" value="<?= $row['mobile'] ?>" required><br><br>
        Address: <input type="text" name="address" value="<?= $row['address'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
