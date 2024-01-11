<?php
  session_start();
  if(!isset($_SESSION["User_Name"])){

    header('Location: index.php');
    exit();
  }
  else{
    $user_name=$_SESSION["User_Name"];
    $user_Password=$_SESSION["Password"];

    $host = "localhost";
    $dbname = "indra_hospital";
    $username ="root";
    $password = "";

    $conn = mysqli_connect($host,$username,$password,$dbname);
    $sql = "SELECT * FROM receiptionist WHERE User_Name='$user_name' AND Password ='$user_Password';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    


    if($resultCheck!=1){
      session_destroy();
      header('Location: index.php');
      exit();
    }
  }
  ?>
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

<div class="sidebar">

   <a href="#NULL"> </a>
  <a href="#NULL"> </a>
  <a href="#NULL"> </a>

  <a class="active" href="#home">Dashboard</a>
  <a href="receptionist_dashboard.php">Show Patients</a>
  <a href="receptionist_dashboard - add_patient.php">Add Patient</a>
  <a href="receptionist_dashboard - modify_patient.php">Modify Patient</a>

  <hr>

  <a href="receptionist_dashboard - show_bill.php">Show Bill</a>
  <a href="receptionist_dashboard - make_bill.php">Make Bill</a>

  <hr>

  <a href="receptionist_dashboard - show_appointment.php">Show Appointment</a>
  <a href="receptionist_dashboard - make_appointment.php">Make Appointment</a>

  <hr>

  <a href="receptionist_dashboard - show_token.php">Token</a>

  <hr>

  <a href="receptionist_dashboard - show_recipt.php">Recipt</a>

  <a class="active" href="#home">Details</a>

  <a href="receptionist_dashboard - show_doctors.php">Show Doctors</a>

  <hr>

  <a href="receptionist_dashboard - show_nurse.php">Show Nurse</a>

  <hr>


  <a href="receptionist_dashboard - show_departments.php">Show Departments</a>


  <hr>

  <a href="receptionist_dashboard - show_vehicle.php">Show Vehicle</a>


  <hr>

  <a href="receptionist_dashboard - show_ward.php">Show Wards</a>


  <hr>


  <a href="#NULL"> </a>
  <a href="#NULL"> </a>
  <a href="#NULL"> </a>
  

</div>

<div class="content">

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
      <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Log out</span></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">


        <div class="d-flex justify-content-between align-items-center">
          <h2>Receptionist Dashboard Page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Login</li>
            <li>Receptionist Dashboard</li>
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
                          <h2>Make Appointment</h2>
                        </div>

                      <form action="make_appointment.php" method="post" role="form" class="php-email-form">
                          <div class="row">
                              <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="User_Name">Patient</label>
                              <div>
                              <select id="User_Name" name="User_Name">
                              <?php
                                  $host = "localhost";
                                  $dbname = "indra_hospital";
                                  $username ="root";
                                  $password = "";

                                  $conn = mysqli_connect($host,$username,$password,$dbname);
                                  $sql = "SELECT * FROM patient;";
                                  $result = mysqli_query($conn, $sql);
                                  $resultCheck = mysqli_num_rows($result);
                                  
                                      if($resultCheck > 0){
                                          while($row = mysqli_fetch_assoc($result)){
                                          echo "<option value=".$row['User_Name'].">User name :- ".$row['User_Name']."  Patient name :- ".$row['First_Name']." ".$row['Last_Name']."</option>";
                                          }
                                      }
                                      
                              ?>
                              </select>
                              </div>
                            </div>

                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="E_ID">Assign Doctor</label>
                              <div>
                              <select id="E_ID" name="E_ID">
                              <?php
                                  $host = "localhost";
                                  $dbname = "indra_hospital";
                                  $username ="root";
                                  $password = "";

                                  $conn = mysqli_connect($host,$username,$password,$dbname);
                                  $sql = "SELECT * FROM doctor;";
                                  $result = mysqli_query($conn, $sql);
                                  $resultCheck = mysqli_num_rows($result);
                                  
                                      if($resultCheck > 0){
                                          while($row = mysqli_fetch_assoc($result)){
                                          echo "<option value=".$row['E_ID'].">Doctor ID :- ".$row['E_ID']."  Doctor's name :- ".$row['First_Name']." ".$row['Last_Name']."</option>";
                                          }
                                      }
                                      
                              ?>
                              </select>
                              </div>
                            </div>

                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="R_E_ID">Receptionist</label>
                              <div>
                              <select id="R_E_ID" name="R_E_ID">
                              <?php
                                  $host = "localhost";
                                  $dbname = "indra_hospital";
                                  $username ="root";
                                  $password = "";

                                  $conn = mysqli_connect($host,$username,$password,$dbname);
                                  $sql = "SELECT * FROM receiptionist;";
                                  $result = mysqli_query($conn, $sql);
                                  $resultCheck = mysqli_num_rows($result);
                                  
                                      if($resultCheck > 0){
                                          while($row = mysqli_fetch_assoc($result)){
                                          echo "<option value=".$row['E_ID'].">Receiptionist ID :- ".$row['E_ID']."  Doctor's name :- ".$row['First_Name']." ".$row['Last_Name']."</option>";
                                          }
                                      }
                                      
                              ?>
                              </select>
                              </div>
                            </div>

                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="Decription">Decription</label>
                              <input class="form-control" type="text" id="Decription" name="Decription">
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

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer" class="d-flex align-items-center fixed-bottom">
    
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