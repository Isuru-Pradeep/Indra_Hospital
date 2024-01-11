<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indra Hospital-Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<!-- sidebar css file -->
<link href="assets/css/sidebar.css" rel="stylesheet">
</head>
<body>


</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">pradeepisuru31@gmail.com</a>
        <i class="bi bi-phone"></i> +94 76 666 456 2
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/isuru.pradeep.370/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Indra Hospital</a></h1>
      <a href="index.php" class="logo me-auto"><img src="assets/img/apple-touch-icon.png" alt="indra_hospital_logo" class="img-fluid"></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">


        <div class="d-flex justify-content-between align-items-center">
          <h2>Register Dashboard Page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Login</li>
            <li>Register Dashboard</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">

        <span>
          <!-- ====== Dashboard Section ======= -->
          <section id="appointment" class="appointment section-bg">
             <div class="container">
                <div class="section-title">
                  <!-- ====== Login Section ======= -->
                    <section id="appointment" class="appointment section-bg">
                      <div class="container">

                        <div class="section-title">
                          <h2>Register Patient</h2>
                        </div>

                      <form action="register_patient.php" method="post" role="form" class="php-email-form">
                          <div class="row">
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="UserName">User Name</label>
                             <input class="form-control" type="text" id="UserName" name="UserName">
                            </div>
                          
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="FirstName">First Name</label>
                             <input class="form-control" type="text" id="FirstName" name="FirstName">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="LastName">Last Name</label>
                             <input class="form-control" type="text" id="LastName" name="LastName">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="Password">Password</label>
                             <input class="form-control" type="text" id="Password" name="Password">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="Birthday">Birthday</label>
                             <input class="form-control" type="date" id="Birthday" name="Birthday">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="email">Email</label>
                             <input class="form-control" type="text" id="email" name="email">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="sex">Sex</label>
                             <input class="form-control" type="text" id="sex" name="sex">
                            </div>

                          <div class="text-center"><button type="submit">Submit</button></div>
                        </form>

                      </div>
                    </section>
                    <!-- End Login Section -->
                               </div>
              </div>
              </div>
            </div>
          </section><!-- End Dashboard Section -->
        </span>
          
      </div>

    </section>

      <!-- ======= Footer ======= -->
  <footer id="footer" class="d-flex align-items-center fixed-bottom" style="position: fixed; left: 0; bottom: 0; width: 100%;">
    
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Indra Hospital</span></strong>. All Rights Reserved
        </div>
     </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <p>Designed by Isuru Pradeep</p>
      </div>
    </div>
  </footer><!-- End Footer -->

  </main><!-- End #main -



</div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>