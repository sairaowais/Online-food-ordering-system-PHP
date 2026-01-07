
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Pink Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="practice.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
 


</head>
<body>


<!-- ================= SECOND NAVBAR ================= -->
<nav class="second-navbar navbar navbar-expand-lg">

  <div class="container-fluid1">

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





<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="burgar.WEBP" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="ch_tikka.WEBP" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tikka.WEBP" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-----end crousals-------->

<!-----start banner div -------->

<!-- PROMO BANNER -->
<div class="container my-5">
  <div class="promo-banner row align-items-center" id="pr">

    <!-- LEFT CONTENT -->
    <div class="col-lg-7 col-md-8  col-12 banner-text">
      <h2>Sign up for free delivery on your first order !!</h2>
      <button class="btn signup-btn mt-3">Sign Up</button>
    </div>

    <!-- RIGHT LOGO -->
    <div class="col-lg-5 col-md-4  col-12 text-center">
      <img src="morgan.png" alt="Banner Logo" class="banner-logo">
    </div>

  </div>
</div>

<!-----end banner div -------->



<!-----start cards with pics -------->
<!----- card 1 -------->

<div class="cards_div">
<div class="row row-cols-1 row-cols-md-3 g-0">
  <div class="col">
    <div class="card">
      <img src="biryani.WEBP" class="card-img-top" alt="...">
      <div class="card-body">

  <h4 class="res-name"> Spicy Chiken Biryani </h4>

  <div class="rating">
    ⭐ 4.8 <span>(5500+)</span>
  </div>

  <div class="details">
    <span>⏱ 30–40 min</span>
    <span>$$ · Fast Food</span>
  </div>

  <div class="price">
    from Rs.300 with Saver
  </div>

</div>

    </div>
  </div>

 <!----- card 2 -------->
  <div class="col">
    <div class="card">
      <img src="chiken_karahi.WEBP" class="card-img-top" alt="...">
      <div class="card-body">

  <h4 class="res-name"> Chiken karahi</h4>

  <div class="rating">
    ⭐ 4.8 <span>(5500+)</span>
  </div>

  <div class="details">
    <span>⏱ 30–45 min</span>
    <span>$$ · Fast Food</span>
  </div>

  <div class="price">
    from Rs.1000 with Saver
  </div>

</div>

    </div>
  </div>

 <!----- card 3 -------->

<div class="col">
    <div class="card">
      <img src="daalmakhni.WEBP" class="card-img-top" alt="...">
      <div class="card-body">

  <h4 class="res-name"> Dalmakhni </h4>

  <div class="rating">
    ⭐ 4.8 <span>(4500+)</span>
  </div>

  <div class="details">
    <span>⏱ 25–35 min</span>
    <span>$$ · Fast Food</span>
  </div>

  <div class="price">
    from Rs.350 with Saver
  </div>

</div>

    </div>
  </div>
  
<!----- card 4 -------->

  <div class="col">
    <div class="card">
      <img src="peshawarikabab.WEBP" class="card-img-top" alt="...">
     <div class="card-body">

  <h4 class="res-name"> Pishawari kabab </h4>

  <div class="rating">
    ⭐ 4.8 <span>(3500+)</span>
  </div>

  <div class="details">
    <span>⏱ 20–35 min</span>
    <span>$$ · Fast Food</span>
  </div>

  <div class="price">
    from Rs.650 with Saver
  </div>

</div>

    </div>
  </div>

  <!----- card 5 -------->
  
  <div class="col">
    <div class="card">
      <img src="mutton_karahi.WEBP" class="card-img-top" alt="...">
<div class="card-body">

  <h4 class="res-name"> Mutton karahi </h4>

  <div class="rating">
    ⭐ 4.8 <span>(5000+)</span>
  </div>

  <div class="details">
    <span>⏱ 30–40 min</span>
    <span>$$ · Fast Food</span>
  </div>

  <div class="price">
    from Rs.800 with Saver
  </div>

</div>

    </div>
  </div>

<!----- card 6 -------->
  
  <div class="col">
    <div class="card">
      <img src="tawa_chikken_naan.WEBP" class="card-img-top" alt="...">
<div class="card-body">

  <h4 class="res-name"> Tawa Chiken Naan </h4>

  <div class="rating">
    ⭐ 4.8 <span>(4000+)</span>
  </div>

  <div class="details">
    <span>⏱ 40–50 min</span>
    <span>$$ · Fast Food</span>
  </div>

  <div class="price">
    from Rs.700 with Saver
  </div>

</div>

    </div>
  </div>

</div>

<!-----end cards -------->

<!-----parent div deals -------->

<!-- Discount Banner + Food Cards Section -->
<div class="container my-5">

  <!-- Discount Banner -->
  <div class="discount-banner_text-center">
    <h1>🎉 Flat 30% OFF 🎉</h1>
    <p>Order your favourite food now!</p>
    <button class="btn btn-light btn-lg mt-2">Order Now</button>
  </div><br>

  <div class="heading1"> 
 <h2 class="text-center pb2"> <b> Best Ramzan deals – for sehri and iftari available for delivery</b> </h2>
</div>
 <!-- Food Images Section -->
  <div class="row mt-4 g-3">

    <div class="col-6 col-md-3">
      <div class="card food-card">
        <img src="cup_cake.WEBP" class="card-img-top" alt="cup_cake">
        <div class="card-body text-center">
        <p>Cup cake  </p>
          
        </div>
      </div>
    </div>


  <div class="col-6 col-md-3">
      <div class="card food-card">
        <img src="meal.webp" class="card-img-top" alt="meal">
        <div class="card-body text-center">
           <p> Meal </p>
        </div>
      </div>
    </div>


    <div class="col-6 col-md-3">
      <div class="card food-card">
        <img src="roll_platter.jpg" class="card-img-top" alt="roll_platter">
        <div class="card-body text-center">
           <p> Roll platter </p>
         
        </div>
      </div>
    </div>

  

    <div class="col-6 col-md-3">
      <div class="card food-card">
        <img src="orange_juice.webp" class="card-img-top" alt="orange_juice">
        <div class="card-body text-center">
           <p> Orange juice </p>
        </div>
      </div>
    </div>

  </div>
</div>



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

</body>
</html>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
