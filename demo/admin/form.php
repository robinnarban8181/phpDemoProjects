<?php 
include 'dashbord.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #e2e2e2, #c9d6ff);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .register-card {
      max-width: 500px;
      width: 100%;
      padding: 30px;
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .form-label {
      font-weight: 500;
    }
    .btn-primary {
      width: 100%;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="register-card">
    <h3 class="text-center mb-4">User Registration</h3>
    <form action="adminInsert.php" method="POST" enctype="multipart/form-data">
      
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="name" id="name" required>
      </div>
      
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" class="form-control" name="content" id="content" required>
      </div>
      
      <div class="mb-3">
        <label for="image" class="form-label">Upload Profile Image</label>
     <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
      </div>

      <div class="mb-3">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control" name="position" id="position" required>
      </div>

      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

</body>
</html>
