<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Defined Electronics</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>


<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <a href="index.html"><img src="assets/img/User.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
        <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li class="drop-down"><a href=""><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            <ul>
              <li><a href="#">Your Account</a></li>
              <li><a href="#">Your Orders</a></li>
              <li><a href="#">Your Wishlist</a></li>
              <li><a href="#">Account Settings</a></li>
              <li><a href="#">Customer Service</a></li>
              <li><a href="reset-password.php">Reset password</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><strong>Customize your own phone</strong></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Customize Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
<form action = 'processorder.php' method = 'post'>
    <section class="inner-page pt-4">
      <div class="container">
        <p>
          Select Smartphone type:
          <select name="sptype" >
    <option disabled selected>-- Select Smartphone type --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT sp_type From smartphonetype");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['sp_type'] ."'>" .$data['sp_type'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        
        <p>
          Select Processor:
          <select name="spcpu">
    <option disabled selected>-- Select Processor --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT processor_name From cpu");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['processor_name'] ."'>" .$data['processor_name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Display size:<select name="spdisplaysize">
    <option disabled selected>-- Select Display size --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT display_size From displaysize");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['display_size'] ."'>" .$data['display_size'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Display type:<select name="spdisplaytype">
    <option disabled selected>-- Select Display type --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT display_type From displaytype");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['display_type'] ."'>" .$data['display_type'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Operating System:<select name="os">
    <option disabled selected>-- Select Operating System --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT operating_system From os");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['operating_system'] ."'>" .$data['operating_system'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select number of Front Camera's:<select name="frontcam">
    <option disabled selected>-- Select Number of Front Camera's --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT f_n_cam From fcam");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['f_n_cam'] ."'>" .$data['f_n_cam'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select number of Rear Camera's: <select name="rearcam">
    <option disabled selected>-- Select Number of Rear Camera's --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT r_n_cam From rcam");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['r_n_cam'] ."'>" .$data['r_n_cam'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Speaker type:<select name="speaker">
    <option disabled selected>-- Select Speaker type --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT speaker_type From speaker");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['speaker_type'] ."'>" .$data['speaker_type'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Security and Biometrics:<select name="biometric">
    <option disabled selected>-- Select Security type --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT security_type From security");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['security_type'] ."'>" .$data['security_type'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Ram:<select name="ram">
    <option disabled selected>-- Select Ram --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT ram_n From ram");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['ram_n'] ."'>" .$data['ram_n'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Internal Storage:<select name="storage">
    <option disabled selected>-- Select Internal Storage --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT i_s From storage");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['i_s'] ."'>" .$data['i_s'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Battery Capacity:<select name="battery">
    <option disabled selected>-- Select Battery Capacity --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT b_cap From battery");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['b_cap'] ."'>" .$data['b_cap'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Color:<select name="color">
    <option disabled selected>-- Select Color --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT color From color");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['color'] ."'>" .$data['color'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Designs:<select name="design">
    <option disabled selected>-- Select Design --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT design From design");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['design'] ."'>" .$data['design'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        <p>
          Select Body Type:<select name="bodytype">
    <option disabled selected>-- Select Body type --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($link, "SELECT b_type From body");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['b_type'] ."'>" .$data['b_type'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        </p>
        
      </div>
      <div id = 'new' align = 'center' margin-bottom= '50px'>
      <button type="submit" name="submit">Submit</button>
        
      </div>
    </section>
</form>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>User Defined</h3>
            <p>Our vision is to provide a smooth selection experience for the user when he chooses to purchase a mobile phone, with user prefered specifications. We have a wide range of specifications with more 10,000+ combinations, so select your desired one and order today.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              User Defined Electronics <br>
              Andhra Pradesh, IN 522502<br>
              India <br>
              <strong>Phone:</strong> +91 9100910000<br>
              <strong>Email:</strong> info@userdefined.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>For regular updates and new information on our latest products and services, please subscribe to our news letter.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>User Defined Electronics</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="">Team UDE</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>