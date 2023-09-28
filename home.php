<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Angeles City Vet </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logomini.png" rel="icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="assets/css/errorLogin.css" rel="stylesheet">

  <!--Login css file assets-->
  <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/fav.jpg">


  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-right">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Angeles CityVet<span><img src="assets/img/logomini.png" alt="mini logo"></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">HOME</a></li>
          <li><a href="#faq">FAQ </a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#gallery">GALLERY</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main">

  <!-- ======= Hero Login Section ======= -->
 <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container ">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-6 order-1 order-lg-2 text-center text-lg-start">
                <img src="assets/img/logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>

            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <p data-aos="fade-up" style="font-size: 3rem; color: var(--color-default)">Compassionate Hearts, Safe Paws: <br>Providing Loving Homes for Dogs<i class="fa fa-paw" style="color: #ce1212" aria-hidden="true"></i></p>
                <p data-aos="fade-up" data-aos-delay="100">Join us in our mission to make every adoption story a tale of love, happiness, and secure paws. Because when technology meets compassion, hearts – both human and canine – find their forever homes.</p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="btn-login" data-bs-toggle="modal" data-bs-target="#loginModal" >Adopt now!</a>
                </div>
            </div>
        </div>
    </div>

    <!--Login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="d-flex align-items-center mb-3 pb-1">
        <strong><h3>CityVet<span><img src="assets/img/logomini.png" alt="mini logo" style="width: 15%; height: auto;"></span></h3>
        </strong>
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
          <!-- login form fields -->
          <form method="POST" action="#" >
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="u_name" />
                    <label class="form-label"  for="form2Example17">Username </label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="p_word"/>
                    <label class="form-label"  for="form2Example27 required=">Password </label>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn-login" type="submit" name ="btn-log" >Login</button>
                  </div>
                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2">Don't have an account? <a href="#!" 
                  data-bs-toggle="modal" data-bs-target="#registerModal"
                      style="color: #393f81;">Register here</a></p>
                </form>
      </div>
    </div>
  </div>
</div>
    
     <!--Registration modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="d-flex align-items-center mb-3 pb-1">
                    <strong><h3>CityVet<span><img src="assets/img/logomini.png" alt="mini logo" style="width: 15%; height: auto;"></span></h3>
                      </strong>
                  </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">  
          <!-- Registration form fields -->
<form method="post" action="#">
    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register account</h5>

    <div class="form-outline mb-4">
        <input type="text" name="firstname"  class="form-control form-control-md" placeholder="First name" required ="">
    </div>

    <div class="form-outline mb-4">
        <input type="text" name="middlename" class="form-control form-control-md" placeholder="Middle name"  required ="">
    </div>

    <div class="form-outline mb-4">
        <input type="text" name="lastname" class="form-control form-control-md"placeholder="Last name" require ="">
    </div>

    <div class="form-outline mb-4">
        <input type="number" name="age"  class="form-control form-control-md" placeholder="Age" required ="">
    </div>

    <div class="form-outline mb-4">
    <label for="birthday" class="form-label">Birthday</label>
        <input type="date" name="birthday" class="form-control form-control-md" required ="">
    </div>

    <div class="form-outline mb-4">
    <label for="sex" class="form-label">Sex</label>
        <select name="sex"class="form-select form-select-md" required="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <div class="form-outline mb-4">
        <input type="text" name="address"  class="form-control form-control-md" placeholder="Address" required ="">
    </div>

    <div class="form-outline mb-4">
        <input type="text" name="username" class="form-control form-control-md" placeholder="Username" required ="">
    </div>

    <div class="form-outline mb-4">
        <input type="password" name="password"  class="form-control form-control-md" placeholder="Password" required ="">
    </div>

    <div class="form-check mb-4">
        <input type="checkbox" name="owns_dog" class="form-check-input"  id="ownsDog" style="background-color: white; border-color: red;" onclick="toggleBackgroundColor()" />
        <label class="form-check-label" for="owns_dog">I currently own a dog</label>
    </div>

    <div class="pt-1 mb-4">
        <button class="btn-login" name="btn_reg" type="submit">Register now!</button>
    </div>
</form>

      </div>
    </div>
  </div>
</div>



</section>

      <!-- End Hero Section -->


     <!-- ======= Why Us Section ======= -->
     <section id="faq" class="why-us">
      <div class="section-header">
        <h2>FAQ</h2>
        <p>Frequently Asked <span>Questions</span></p>
      </div>

    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="why-box">
            <h3>Why Angeles City Vet?</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
            </p>
            <div class="text-center">
              <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div><!-- End Why Box -->

        <div class="col-lg-8 d-flex align-items-center">
          <div class="row gy-4">

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-clipboard-data"></i>
                <h4>Corporis voluptates officia eiusmod</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-gem"></i>
                <h4>Ullamco laboris ladore pan</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-inboxes"></i>
                <h4>Labore consequatur incidid dolore</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->

                <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/gallery/aboutimage.jpg); background-size: cover;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Contact us!</h4>
              <p>+63 XXX XXXX XXX</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/gallery/dog.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Rescued Dogs</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Shelters for Dogs</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Turn Overed Dogs</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Adoption and<span> Vaccination</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery1.jpg"><img src="assets/img/gallery/gallery1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery2.jpg"><img src="assets/img/gallery/gallery2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery3.jpg"><img src="assets/img/gallery/gallery3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery4.jpg"><img src="assets/img/gallery/gallery4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/g (3).jpg"><img src="assets/img/gallery/g (3).jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/g (1).jpg"><img src="assets/img/gallery/g (1).jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/g (7).jpg"><img src="assets/img/gallery/g (7).jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/g (6).jpg"><img src="assets/img/gallery/g (6).jpg" class="img-fluid" alt=""></a></div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->
            
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.8681505322775!2d120.60521707426608!3d15.165583985390464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396edf7f1f8bfe5%3A0x2264b47412ddd267!2sVeterinary%20Office%20-%20Lungsod%20ng%20Angeles!5e0!3m2!1sen!2sph!4v1693555743628!5m2!1sen!2sph"style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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

<!--js for check box-->
  <script>
  function toggleBackgroundColor() {
    var checkbox = document.getElementById("ownsDog");
    if (checkbox.checked) {
      checkbox.style.backgroundColor = "red";
    } else {
      checkbox.style.backgroundColor = "white";
    }
  }
</script>
<!--css for scrollbar in the modal register-->

<style>
  /* Add custom CSS for modal scrollbar */
  .modal-body {
    max-height: 70vh; /* Adjust the maximum height as needed */
    overflow-y: auto;
  }
</style>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://kit.fontawesome.com/d4873500b0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.7.0/js/bootstrap.min.js"></script>
 

</body>
<?php
if (isset($_POST["btn_reg"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin_acc";
    
    // Get user input
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    $bday = $_POST['birthday'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];
    $owns_dog = isset($_POST['owns_dog']) ? 1 : 0;
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
  // Use prepared statements to prevent SQL injection
  $sql_check_username = "SELECT * FROM users_tbl WHERE username = ?";
  $stmt_check_username = $conn->prepare($sql_check_username);
  $stmt_check_username->bind_param("s", $user_name);
  $stmt_check_username->execute();
  $result_check_username = $stmt_check_username->get_result();
  
  if ($result_check_username->num_rows > 0) {
      // Username already exists, display an error message
      echo "<script>alert('Error: Username already exists. Please sign up again.')</script>";
  } else {
      // Insert a new record using prepared statement
      $sql_insert_user = "INSERT INTO users_tbl (first_name, middle_name, last_name, age, birthday, sex, address, username, password, owns_dog) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt_insert_user = $conn->prepare($sql_insert_user);
      $stmt_insert_user->bind_param("ssssssssss", $fname, $mname,$lname, $age, $bday, $sex, $address, $user_name, $pass_word, $owns_dog);
      
      if ($stmt_insert_user->execute()) {
          // User created successfully, display an alert
          echo '<script>alert("User created successfully.");</script>';
          header("Location: clientadopt.php");
      } else {
          echo "Error: " . $stmt_insert_user->error;
      }
  }
  
  // Close the database connection
  $conn->close();
    
   
}
?>

<?php
if (isset($_POST["btn-log"])) {
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
    $user = $_POST["u_name"];
    $pass = $_POST["p_word"];

    // SQL query to retrieve username and password data from users_tbl based on user input
    $sql = "SELECT * FROM users_tbl WHERE username='$user' AND password='$pass'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Valid credentials
        echo "<script>alert('pakyu')</script>";
        header('Location: http://localhost/Capstone/clientadopt.php');
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password. Please try again.')</script>";
        
      }

    $conn->close();
}
?>


</html>