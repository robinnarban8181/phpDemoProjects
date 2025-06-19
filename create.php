<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add User</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header bg-primary text-white text-center">
            <h4>Add New User</h4>
          </div>
          <div class="card-body">
            <form action="store.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required>
              </div>

              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile No:</label>
                <input type="text" name="mobile" class="form-control" id="mobile" required>
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" class="form-control" id="address" required>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-success w-100">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional for interactive elements) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
