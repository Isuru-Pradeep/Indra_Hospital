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
    $sql = "SELECT * FROM admin WHERE User_Name='$user_name' AND Password ='$user_Password';";
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
  <a href="admin_dashboard.php">Show Admins</a>
  <a href="admin_dashboard - add_admin.php">Add Admin</a>
  <a href="admin_dashboard - drop_admin.php">Drop Admin</a>
  <a href="admin_dashboard - modify_admin.php">Modify Admin</a>

  <hr>

  <a href="admin_dashboard - show_patient.php">Show Patients</a>
  <a href="admin_dashboard - add_patient.php">Add Patient</a>
  <a href="admin_dashboard - drop_patient.php">Drop Patient</a>
  <a href="admin_dashboard - modify_patient.php">Modify Patient</a>

  <hr>

  <a href="admin_dashboard - show_doctors.php">Show Doctors</a>
  <a href="admin_dashboard - add_doctor.php">Add Doctor</a>
  <a href="admin_dashboard - drop_doctor.php">Drop Doctor</a>
  <a href="admin_dashboard - modify_doctor.php">Modify Doctor</a>

  <hr>

  <a href="admin_dashboard - show_nurse.php">Show Nurse</a>
  <a href="admin_dashboard - add_nurse.php">Add Nurse</a>
  <a href="admin_dashboard - drop_nurse.php">Drop Nurse</a>
  <a href="admin_dashboard - modify_nurse.php">Modify Nurse</a>

  <hr>

  <a href="admin_dashboard - show_receptionist.php">Show Receptionists</a>
  <a href="admin_dashboard - add_receptionist.php">Add Receptionist</a>
  <a href="admin_dashboard - drop_receptionist.php">Drop Receptionist</a>
  <a href="admin_dashboard - modify_receptionist.php">Modify Receptionist</a>

  <hr>

  <a href="admin_dashboard - show_driver.php">Show Driver</a>
  <a href="admin_dashboard - add_driver.php">Add Driver</a>
  <a href="admin_dashboard - drop_driver.php">Drop Driver</a>
  <a href="admin_dashboard - modify_driver.php">Modify Driver</a>

  <hr>

  <a href="admin_dashboard - show_cleaner.php">Show Cleaner</a>
  <a href="admin_dashboard - add_cleaner.php">Add Cleaner</a>
  <a href="admin_dashboard - drop_cleaner.php">Drop Cleaner</a>
  <a href="admin_dashboard - modify_cleaner.php">Modify Cleaner</a>

  <hr>

  <a href="admin_dashboard - show_pharmacist.php">Show Pharmacist</a>
  <a href="admin_dashboard - add_pharmacist.php">Add Pharmacist</a>
  <a href="admin_dashboard - drop_pharmacist.php">Drop Pharmacist</a>
  <a href="admin_dashboard - modify_pharmacist.php">Modify Pharmacist</a>

  <hr>

  <a href="admin_dashboard - show_departments.php">Show Departments</a>
  <a href="admin_dashboard - add_department.php">Add Department</a>
  <a href="admin_dashboard - drop_department.php">Drop Department</a>
  <a href="admin_dashboard - modify_department.php">Modify Department</a>

  <hr>

  <a href="admin_dashboard - show_vehicle.php">Show Vehicle</a>
  <a href="admin_dashboard - add_vehicle.php">Add Vehicle</a>
  <a href="admin_dashboard - drop_vehicle.php">Drop Vehicle</a>
  <a href="admin_dashboard - modify_vehicle.php">Modify Vehicle</a>

  <hr>

  <a href="admin_dashboard - show_ward.php">Show Wards</a>
  <a href="admin_dashboard - add_ward.php">Add Ward</a>
  <a href="admin_dashboard - drop_ward.php">Drop Ward</a>
  <a href="admin_dashboard - modify_ward.php">Modify Ward</a>

  <hr>

  <a href="admin_dashboard - show_drug.php">Show Drugs</a>
  <a href="admin_dashboard - add_drug.php">Add Drug</a>
  <a href="admin_dashboard - drop_drug.php">Drop Drug</a>
  <a href="admin_dashboard - modify_drug.php">Modify Drug</a>

  <a class="active" href="#home">Details</a>
  <a href="admin_dashboard - show_bill.php">Bill</a>
  <a href="admin_dashboard - show_appointment.php">Appointment</a>
  <a href="admin_dashboard - show_token.php">Token</a>
  <a href="admin_dashboard - show_prescription.php">Prescription</a>
  <a href="admin_dashboard - show_recipt.php">Recipt</a>

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
          <h2>Admin Dashboard Page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Login</li>
            <li>Admin Dashboard</li>
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
                          <h2>Add Cleaner</h2>
                        </div>

                      <form action="add_cleaner.php" method="post" role="form" class="php-email-form">
                          <div class="row">
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="UserName">User Name</label>
                             <input class="form-control" type="text" id="UserName" name="UserName">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="DepartmentID">Department ID</label>
                              <div>
                              <select id="DepartmentID" name="DepartmentID">
                              <?php
                                  $host = "localhost";
                                  $dbname = "indra_hospital";
                                  $username ="root";
                                  $password = "";

                                  $conn = mysqli_connect($host,$username,$password,$dbname);
                                  $sql = "SELECT * FROM department;";
                                  $result = mysqli_query($conn, $sql);
                                  $resultCheck = mysqli_num_rows($result);
                                  
                                      if($resultCheck > 0){
                                          
                                          while($row = mysqli_fetch_assoc($result)){
                                          echo "<option value=".$row['D_ID'].">".$row['D_Name']."</option>";
                                          }
                                      }
                                      
                              ?>
                              </select>
                              </div>
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
                              <label for="FirstDay">First Day</label>
                             <input class="form-control" type="text" id="FirstDay" name="FirstDay">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="WorkingHours">Working Hours</label>
                             <input class="form-control" type="text" id="WorkingHours" name="WorkingHours">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="Password">Password</label>
                             <input class="form-control" type="text" id="Password" name="Password">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="Birthday">Birthday</label>
                             <input class="form-control" type="text" id="Birthday" name="Birthday">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="BasicSalary">Basic Salary</label>
                             <input class="form-control" type="text" id="BasicSalary" name="BasicSalary">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="OTSalary">OT Salary</label>
                             <input class="form-control" type="text" id="OTSalary" name="OTSalary">
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                              <label for="OtherAdition">Other Adition</label>
                             <input class="form-control" type="text" id="OtherAdition" name="OtherAdition">
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