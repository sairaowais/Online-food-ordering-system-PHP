<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
 
</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">

        <!-- Left Side Image -->
   <a class="navbar-brand" href="#">
    <img src="morgan.png" alt="Logo">
</a>



        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side Search -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <form class="d-flex flex-sm-row flex-column">
                <input class="form-control search-input me-sm-2" type="search" placeholder="Search">
                <button class="btn search-btn" type="submit">Search</button>
            </form>
        </div>

    </div>
</nav>



<!-- ================= SECOND NAVBAR ================= -->
<nav class="second-navbar navbar navbar-expand-lg sticky-top">
  <div class="container">

    <!-- MOBILE TOGGLE -->
    <button class="navbar-toggler ms-auto" type="button"
      data-bs-toggle="collapse" data-bs-target="#secondNav">
      ☰
    </button>

    <!-- NAV LINKS -->
    <div class="collapse navbar-collapse justify-content-center" id="secondNav">
      <ul class="navbar-nav text-center">
        
<li class="nav-item">
  <a class="nav-link" href="#">Home</a>
</li>


        <!-- DROPDOWN -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="menuDropdown"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu text-center">
            <li><a class="dropdown-item" href="#">Pizza</a></li>
            <li><a class="dropdown-item" href="#">Burger</a></li>
            <li><a class="dropdown-item" href="#">Pasta</a></li>
            <li><a class="dropdown-item" href="#">Salad</a></li>
            <li><a class="dropdown-item" href="#">Desserts</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Specials</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
    </div>

  </div>
</nav>

    
<section class="contact-page">
  <div class="container">

    <!-- HEADER -->
    <h1>Contact Us</h1>
    <p class="intro">We'd love to hear from you. Send us a message and we’ll get back to you soon.</p>

    <div class="row">

      <!-- CONTACT FORM -->
      <div class="col-md-6">
        <form class="contact-form" action="contact_process.php" method="POST">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <input type="text" name="subject" placeholder="Subject">
          <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
          <button type="submit">Send Message</button>
        </form>
      </div>

      <!-- CONTACT DETAILS -->
      <div class="col-md-6 contact-details">
        <h3>Contact Details</h3>
        <p>📍 123 Main Street, City, Country</p>
        <p>📧 ss3258882@gmail.com.com</p>
        <p>📞 +3293917930</p>

        <!-- SOCIAL LINKS -->
        <div class="social-links">
          <a href="#" target="_blank">🌐</a>
          <a href="#" target="_blank">📘</a>
          <a href="#" target="_blank">📸</a>
        </div>

        <!-- GOOGLE MAP -->
        <div class="map mt-4">
          <iframe src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- Footer Start -->
<footer class="food-footer text-white pt-4">
    <div class="container">
        <div class="row text-center text-md-start">

            <!-- About -->
            <div class="col-md-4 mb-3">
                <h5>Online Food Order</h5>
                <p>Fresh & delicious food delivered at your doorstep.</p>
            </div>

            <!-- Links -->
            <div class="col-md-4 mb-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Order</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Social Icons -->
            <div class="col-md-4 mb-3 text-center">
                <h5>Follow Us</h5>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-light">

        <div class="text-center pb-2">
            <p class="mb-0">© 2025 Online Food Order. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- Footer End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>

















</body>
</html>