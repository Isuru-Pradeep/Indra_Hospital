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
    $sql = "SELECT * FROM patient WHERE User_Name='$user_name' AND Password ='$user_Password';";
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
          <h2>Patient Dashboard Page</h2>
          <p>Hello <b><?= htmlspecialchars($_SESSION["First_Name"]." ".$_SESSION["Last_Name"])?></b> !</p>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Login</li>
            <li>Patient Dashboard</li>
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
                  <!-- Admin details talbe -->
                  <div>
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Your Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Patient ID</th>
                                            <th>User Name</th>
                                            <th>APPOINTMENT ID</th>
                                            <th>Ward ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Password</th>
                                            <th>Birthday</th>
                                            <th>email</th>
                                            <th>sex</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      <?php
                                      
                                        $user_name=$_SESSION["User_Name"];

                                        $host = "localhost";
                                        $dbname = "indra_hospital";
                                        $username ="root";
                                        $password = "";

                                        $conn = mysqli_connect($host,$username,$password,$dbname);
                                        $sql = "SELECT * FROM patient WHERE User_Name='$user_name';";
                                        $result = mysqli_query($conn, $sql);
                                        $resultCheck = mysqli_num_rows($result);

                                        if($resultCheck > 0){
                                          while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td>".$row['P_ID']."</td>";
                                            echo "<td>".$row['User_Name']."</td>";
                                            echo "<td>".$row['APPOINTMENT_ID']."</td>";
                                            echo "<td>".$row['Ward_ID']."</td>";
                                            echo "<td>".$row['First_Name']."</td>";
                                            echo "<td>".$row['Last_Name']."</td>";
                                            echo "<td>".$row['Password']."</td>";
                                            echo "<td>".$row['Birthday']."</td>";
                                            echo "<td>".$row['email']."</td>";
                                            echo "<td>".$row['sex']."</td>";
                                            echo "</tr>";
                                          }
                                        }
                                      
                                        
                                      ?>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of admin details table -->


                <div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Appointments Details Data Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>APPOINTMENT ID </th>
                                            <th>User Name</th>
                                            <th>Doctor ID</th>
                                            <th>Receptionist ID</th>
                                            <th>Decription</th>
                                            <th>Time</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                      <th>APPOINTMENT ID </th>
                                      <th>User Name</th>
                                      <th>Doctor ID</th>
                                      <th>Receptionist ID</th>
                                      <th>Decription</th>
                                      <th>Time</th>
                                      <th>Date</th>  
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                        $host = "localhost";
                                        $dbname = "indra_hospital";
                                        $username ="root";
                                        $password = "";

                                        $conn = mysqli_connect($host,$username,$password,$dbname);
                                        $sql = "SELECT * FROM appointment WHERE User_Name='$user_name';";
                                        $result = mysqli_query($conn, $sql);
                                        $resultCheck = mysqli_num_rows($result);

                                        if($resultCheck > 0){
                                          while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td>".$row['APPOINTMENT_ID']."</td>";
                                            echo "<td>".$row['User_Name']."</td>";
                                            echo "<td>".$row['DOC_EMP_ID']."</td>";
                                            echo "<td>".$row['RECEI_EMP_ID']."</td>";
                                            echo "<td>".$row['Decription']."</td>";
                                            echo "<td>".$row['Time']."</td>";
                                            echo "<td>".$row['Date']."</td>";
                                            echo "</tr>";
                                          }
                                        }
                                      
                                        
                                      ?>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bill Details Data Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Bill ID</th>
                                            <th>Employee ID</th>
                                            <th>Patient ID</th>
                                            <th>Patient Name</th>
                                            <th>Time</th>
                                            <th>Date</th>
                                            <th>Doctor Charge</th>
                                            <th>Hopital Charge</th>
                                            <th>Drug Charge</th>
                                            <th>Tax</th>
                                            <th>Discount</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      <?php
                                        $host = "localhost";
                                        $dbname = "indra_hospital";
                                        $username ="root";
                                        $password = "";
                                        
                                        $user_id=$_SESSION["P_ID"];
                                        $user_id=intval($user_id);

                                        $conn = mysqli_connect($host,$username,$password,$dbname);
                                        $sql = "SELECT * FROM bill WHERE P_ID=$user_id;";
                                        $result = mysqli_query($conn, $sql);
                                        $resultCheck = mysqli_num_rows($result);

                                        

                                        if($resultCheck > 0){
                                          while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td>".$row['Bill_ID']."</td>";
                                            echo "<td>".$row['E_ID']."</td>";
                                            echo "<td>".$row['P_ID']."</td>";
                                            echo "<td>".$row['Patient_Name']."</td>";
                                            echo "<td>".$row['Time']."</td>";
                                            echo "<td>".$row['Date']."</td>";
                                            echo "<td>".$row['Doctor_Charge']."</td>";
                                            echo "<td>".$row['Hopital_Charge']."</td>";
                                            echo "<td>".$row['Drug_Charge']."</td>";
                                            echo "<td>".$row['Tax']."</td>";
                                            echo "<td>".$row['Discount']."</td>";
                                            echo "</tr>";
                                          }
                                        }
                                      
                                        
                                      ?>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>