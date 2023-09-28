<?php
if (isset($_POST["login"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin_acc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the username and password from the user input using $_POST
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // SQL query to retrieve username and password data from admin_tbl based on user input
    $sql = "SELECT * FROM admin_tbl WHERE username='$user' AND password='$pass'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Valid credentials
        header('Location: adminHome.php');
    } else {
        // Invalid credentials
        header("Location: adminLogin.php?error= Incorrect Username or  Password ");
        header('refresh:2; url=adminLogin.php');
    }

    $conn->close();
}
?>

      
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Login - CityVet Angeles City</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logomini.png" rel="icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template CSS File -->
  <link href="assets/css/errorLogin.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/admin.css" />
  <!--Login css file assets-->>
  <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/fav.jpg">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-right">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Angeles CityVet<span><img src="assets/img/logomini.png" alt="mini logo"></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#">Login</a></li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main">

<!-- ======= Login Section ======= -->
<section class="login">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <p id="login"> <span>Admin</span> Login </p>
    </div>
    <section class="vh-100 d-flex justify-content-center align-items-center" style="background-color: #cccccc; border-radius: 1rem;">
      <div class="col-md-6 col-lg-7">
        <div class="card" style="border-radius: 1rem;">
          <div class="card-body p-4 p-lg-5 text-black">
            <form method="post">
              <div class="d-flex align-items-center mb-3 pb-1">
                <i class="fas fa-cubes fa-2x me-3" style="color: #fff;"></i>
              </div>
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign in</h3>
              <div class="form-outline mb-4">
                <input   type="text" name="username" id="form2Example17" class="form-control form-control-lg" />
                <label class="form-label"  for="form2Example17">Username <i class="fa-solid fa-user-tie" style="color: #ce1010;"></i></label>
              </div>
              <div class="form-outline mb-4">
                <input  type="password" name="password"  id="form2Example27" class="form-control form-control-lg" />
                <label class="form-label"  for="form2Example27 required=">Password <i class="fa-solid fa-key" style="color: #ce1010;"></i></label>
              </div>
              <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
              <div class="pt-1 mb-4">
                <button type="submit" class="btn-att" name="login" href="#">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
<!-- End Book A Table Section -->
    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Angeles CityVet</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://kit.fontawesome.com/d4873500b0.js" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Link to Bootstrap JS and jQuery (required for the navbar toggler) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

<script>
  // Add a click event listener to the navigation links to apply the "active" class
  const navLinks = document.querySelectorAll('.navbar .nav-link');
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      navLinks.forEach(l => l.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>

</body>

				
	 
</html>