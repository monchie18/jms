<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JMS | LOGIN FORM </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-image">
<div class="overlay"></div>
   <form method="POST" action="login.php" >
    <div class="row justify-content-center align-items-center" style="height:100vh">
      <div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card gold-border-card">
        <div class="card-body">
            <div class="crown-wrapper" id="crownWrapper">
              <!-- Crown SVG with Gold Gradient -->
              <svg width="45" height="45" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="goldGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#ffd700; stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#ffcc00; stop-opacity:1" />
                  </linearGradient>
                </defs>
                <rect width="48" height="48" fill="white" fill-opacity="0.01" />
                <circle cx="24" cy="24" r="20" fill="none" stroke="url(#goldGradient)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M13 29V19L19 22L24 15L29 22L35 19V29H13Z" fill="none" stroke="url(#goldGradient)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <!-- Stars will be inserted here via JavaScript -->
            </div>
            <h3 class="text-center">Login</h3>
            <div class="form-group">
              <input type="text" class="form-control"  name="username" placeholder="Username" required>
            </div>
            <div class="form-group mt-2">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <br>
             <button class="Btn">
    <span class="btn-txt">Login</span>
  </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="script.js"></script>
</body>
</html>
