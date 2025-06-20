<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      height: 100vh;
      background:rgb(46, 2, 242);
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 1rem;
      width: 220px;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 10px 20px;
      text-decoration: none;
    }
    .dropdown-item{
        color:black;
    }
   
    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
      }
     
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <nav class="sidebar">
    <h4 class="text-center mb-4">Admin Panel</h4>
 <div class="dropdown mt-2 px-3">
      <button class="btn btn-dark dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        About US
      </button>
      <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
         <li><a class="dropdown-item" href="form.php" style="color:black;"> About content</a></li>
        <li><a class="dropdown-item" href="mission.php" style="color:black;"> OUR Mission</a></li>
        <li><a class="dropdown-item" href="solution.php" style="color:black;">OUR Solution</a></li>
        <li><a class="dropdown-item" href="support.php" style="color:black;">Support</a></li>
      </ul>
    </div>
  </nav>

  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>