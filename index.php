  <?php
session_start();
include ("koneksi.php");

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan</title>
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <!-- Main Card -->
        <div class="card border-0 shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row g-0">
              <!-- Logo Side -->
              <div class="col-md-6 p-4 text-center d-flex align-items-center justify-content-center">
                <div>
                  <img src="img/logokpu.jpg" alt="Logo" class="img-fluid rounded mb-4" style="max-height: 200px;">
                  <h3 class="text-gray fw-bold">Komisi Pemilihan Umum Lamongan</h3>
                </div>
              </div>
              
              <!-- Login Side -->
              <div class="col-md-6 p-4 d-flex align-items-center">
                <div class="w-100 px-3">
                  <h2 class="text-center fw-bold mb-4">Login Sebagai</h2>
                  
                  <div class="mb-4">
                    <div class="card border-0 shadow-sm mb-4">
                      <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                          <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; min-width: 60px;">
                            <i class="fas fa-user-shield text-white fa-2x"></i>
                          </div>
                          <div class="ms-3">
                            <h4 class="card-title fw-bold mb-2">Admin</h4>
                            <p class="card-text text-muted mb-0">Login sebagai administrator sistem</p>
                          </div>
                        </div>
                        <div class="mt-3">
                          <a href="login.php" class="btn btn-warning w-100 py-2 fw-bold">
                            <i class="fas fa-sign-in-alt me-2"></i>Login Admin
                          </a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="card border-0 shadow-sm">
                      <div class="card-body p-4">
                        <div class="d-flex align-items-center">
                          <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; min-width: 60px;">
                            <i class="fas fa-users text-white fa-2x"></i>
                          </div>
                          <div class="ms-3">
                            <h4 class="card-title fw-bold mb-2">Karyawan</h4>
                            <p class="card-text text-muted mb-0">Login sebagai karyawan</p>
                          </div>
                        </div>
                        <div class="mt-3">
                          <a href="karyawan/login_karyawan.php" class="btn btn-primary w-100 py-2 fw-bold">
                            <i class="fas fa-sign-in-alt me-2"></i>Login Karyawan
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="text-center mt-5">
                    <p class="text-muted mb-0">Copyright &copy; <script>document.write(new Date().getFullYear());</script> kab-lamongan.kpu.go.id</p>
                    <p class="text-muted mb-0">All rights reserved</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>