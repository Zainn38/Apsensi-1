<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm">
          <div class="card-body p-4">
            <div class="text-center mb-4">
              <div class="bg-primary text-white mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                <i class="fas fa-user-shield fa-2x"></i>
              </div>
              <h2 class="fw-bold">Login Admin</h2>
              <p class="text-muted">Masukkan username dan password</p>
            </div>
            
            <form action="proses_login.php" method="post">
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text bg-light">
                    <i class="fas fa-user text-primary"></i>
                  </span>
                  <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
              </div>
              
              <div class="mb-4">
                <div class="input-group">
                  <span class="input-group-text bg-light">
                    <i class="fas fa-lock text-primary"></i>
                  </span>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary w-100 py-2 mb-3">Login</button>
              
              <div class="text-center">
                <a href="index.php" class="text-decoration-none">
                  <i class="fas fa-arrow-left me-1"></i> Kembali ke Beranda
                </a>
              </div>
            </form>
          </div>
        </div>
        
        <div class="text-center mt-4 text-muted">
          <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> Sistem Informasi Karyawan</p>
          <p class="small">All rights reserved</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>