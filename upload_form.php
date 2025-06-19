<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Image</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h3>Upload Image</h3>
  <form action="upload_process.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <input type="file" name="image" class="form-control" required>
    </div>
    <button type="submit" name="upload" class="btn btn-primary">Upload</button>
  </form>
</body>
</html>
