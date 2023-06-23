<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Admin Dashboard</title>
  <style>
    body {
      padding: 20px;
    }
    
    .sidebar {
      width: 200px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #f8f9fa;
    }
    
    .content {
      margin-left: 200px;
    }
  </style>
   @livewireStyles()
  @powerGridStyles()
</head>
<body>
  <div class="sidebar">
    <!-- Sidebar -->
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <!-- Add more sidebar items here -->
    </ul>
  </div>
  <div class="content">
    <!-- Content -->
    <livewire:bookings-table/>
    <!-- Add your content here -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   @livewireScripts()
  @powerGridScripts()
</body>
</html>
