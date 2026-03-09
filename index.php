<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Real Estate website</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


<!-- Custom CSS -->
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/footer.css">


</head>

<body>

<!-- TOPBAR -->

<div class="topbar">
<div class="container d-flex justify-content-between">

<div>
<span><i class="fa-solid fa-phone"></i> +91 6370122173</span>
<span><i class="fa-solid fa-envelope"></i> contact@smartproperty.co.in</span>
</div>

<div>
<a href="#"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
<a href="#"><i class="fa-solid fa-user-plus"></i> Register</a>
</div>

</div>
</div>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg main-navbar">

<div class="container">

<a class="navbar-brand" href="#">
<img src="Assets/images/logo.png" class="site-logo">
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav mx-auto">

<li class="nav-item">
<a class="nav-link active" href="#">HOME</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">ABOUT</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">PROJECT</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">PROPERTIES</a>
</li>

<!----
<li class="nav-item">
<a class="nav-link" href="#">ALL PROPERTIES</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">SELL PROPERTIES</a>
</li> ---->

<li class="nav-item">
<a class="nav-link" href="#">CONTACT</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">BLOG</a>
</li>

</ul>

<button class="property-btn">
<i class="fa-solid fa-plus"></i> SUBMIT PROPERTY
</button>

</div>
</div>
</nav>


<!-- HERO SECTION -->

<section class="hero">



<div class="hero-overlay"></div>

<div class="hero-content">

<h1>FIND YOUR DREAM PROPERTIES</h1>
<p>Find new & featured property located in your local city.</p>

<div class="search-box">

<div class="search-tabs">

<span class="active" onclick="setTab(this)">For Sale</span>
<span onclick="setTab(this)">For Rent</span>
<span onclick="setTab(this)">Projects</span>
<span onclick="setTab(this)">Commercial</span>
<span onclick="setTab(this)">Plots</span>

</div>

<div class="search-row">

<input type="text" placeholder="Search property...">

<button class="toggle-btn" onclick="toggleSearch()">-</button>

<button class="search-btn">
<i class="fa-solid fa-magnifying-glass"></i> SEARCH
</button>

</div>

<div class="advance" id="advance">

<div class="type-btns">
<button>Agricultural</button>
<button>Commercial</button>
<button>Residential</button>
</div>

<div class="dropdowns">

<select>
<option>Select City</option>
<option>Lucknow</option>
<option>Delhi</option>
<option>Noida</option>
</select>

<select>
<option>Select Location</option>
<option>.....</option>
<option>......</option>
<option>.....</option>
</select>

</div>

</div>

</div>

</div>

</section>

<!-- Welcome Section Start -->

<section class="promo-bar">
  <div class="promo-container">
    <p>
      Welcome to <strong>Smart Property</strong>: Realstate, Check Our Best Deals. or Call us at
    </p>

    <a href="tel:1325902" class="promo-phone">+91 6370122173</a>
  </div>
</section>

<!-- Welcome Section End -->


<!-- Explore Projects Section Start -->

<section class="explore-projects">

<div class="container">

<h2 class="section-title">EXPLORE PROJECTS</h2>

<div class="location-filters">

<button class="filter active default">All Locations</button>
<button class="filter"> Bhimpura</button>
<button class="filter">Gourpur</button>
<button class="filter">Remuna</button>
<button class="filter">Balasore</button>
<button class="filter">Dadhibaman Nagar</button>
<button class="filter"> Mitrapur</button>
<button class="filter">Odisa</button>




</div>

</div>
</section>
<!-- Explore Projects Section End -->

<!-- Best seller section start-->

<section class="best-sellers">

<div class="container">

<div class="row align-items-center">

<!-- LEFT BOX -->

<div class="col-lg-4 mb-4">

<div class="seller-box">

<h2>Best Sellers in Balasore</h2>

<p>
The latest residential offerings from the best builders in balasore,
handpicked by our experts and backed by our widely acclaimed
transaction and financial services.
</p>

<a href="#" class="view-btn">
View All <i class="fa-solid fa-arrow-right"></i>
</a>

</div>

</div>


<!-- PROPERTY CARDS -->

<div class="col-lg-8">

<div class="row g-4">

<div class="col-md-6 col-lg-4">
</div>


<div class="col-md-6 col-lg-4">

<div class="prooperty-card">

<img src="Assets/images/logo.png" class="property-logo">

<h5>location?</h5>

<p><i class="fa-solid fa-location-dot"></i>location?</p>

<span class="bhk">3,4 BHK</span>

</div>

</div>




</div>

</div>

</div>

</div>

</section>

<!-- Best seller section end-->

<!-- Card section start-->

<section class="featured-properties">

<div class="container-fluid">

<h2 class="section-text">FEATURED PROPERTIES</h2>

<div class="row g-4">

<!-- Card 1 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/logoo.png" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge rent">RENT</span>

<div class="price">₹25,000</div>
</div>

<div class="property-content">
<h3>2 BHK Flat for Rent in ?</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

<!-- Card 2 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/property2.jpg" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge rent">RENT</span>

<div class="price">₹32,000</div>
</div>

<div class="property-content">
<h3>3 BHK Flat for Rent in VTP</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

<!-- Card 3 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/property3.jpg" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge buy">BUY</span>

<div class="price">₹85,00,000</div>
</div>

<div class="property-content">
<h3>2 BHK Furnished Flat for Sale</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

<!-- Card 4 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/property4.jpg" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge buy">BUY</span>

<div class="price">₹65,00,000</div>
</div>

<div class="property-content">
<h3>Luxury 3 BHK Apartment</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

</div>


<!-- Second Row -->
<div class="row g-4 mt-4">

<!-- Card 5 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/logoo.png" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge rent">RENT</span>

<div class="price">₹25,000</div>
</div>

<div class="property-content">
<h3>2 BHK Flat for Rent in ?</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

<!-- Card 6 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/property2.jpg" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge rent">RENT</span>

<div class="price">₹32,000</div>
</div>

<div class="property-content">
<h3>3 BHK Flat for Rent in ?</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

<!-- Card 7 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/property3.jpg" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge buy">BUY</span>

<div class="price">₹85,00,000</div>
</div>

<div class="property-content">
<h3>2 BHK Furnished Flat for Sale</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

<!-- Card 8 -->
<div class="col-lg-3 col-md-6">
<div class="property-card">

<div class="property-image">
<img src="Assets/images/property4.jpg" class="img-fluid">

<span class="property-badge featured">FEATURED</span>
<span class="property-badge buy">BUY</span>

<div class="price">₹65,00,000</div>
</div>

<div class="property-content">
<h3>Luxury 3 BHK Apartment</h3>
<p class="location">📍 ......</p>

<div class="property-info">
<span>🏢 Residential</span>
<span>🏠 Flat / Apartments</span>
</div>
</div>

</div>
</div>

</div>

</div>

</section>
<!-- card section end -->


<!-- find your perfect home  -->

<section class="home-hero">

<div class="home-hero-overlay"></div>

<div class="container home-hero-container">

<div class="home-hero-text">

<h1>FIND YOUR PERFECT HOME TODAY!</h1>

<p>
Browse exclusive listings, find your dream home, and move in with ease.
From budget-friendly apartments to luxury villas, we have it all!
</p>

<div class="home-hero-features">

<div class="home-feature">
<i class="fa-solid fa-building"></i>
<div>
<h4>Trusted By Thousands</h4>
<p>Thousands have found their dream homes with us.</p>
</div>
</div>

<div class="home-feature">
<i class="fa-solid fa-house"></i>
<div>
<h4>Financing Made Easy</h4>
<p>Our hassle-free financing options make home ownership easy.</p>
</div>
</div>

<div class="home-feature">
<i class="fa-solid fa-city"></i>
<div>
<h4>Wide Range Of Properties</h4>
<p>From budget homes to luxury estates.</p>
</div>
</div>

</div>

</div>

<div class="home-hero-agent">
<img src="Assets/images/logo.png">
</div>

</div>

</section>
<!-- find your perfect home end  -->


<!-- Rent Section start  -->

<section class="rent-section">

<div class="container">

<h2>PROPERTIES <span>FOR RENT</span> IN BALASORE</h2>

<div class="rent-tabs">

<a href="#" class="active">Most Popular</a>
<a href="#">By Budget</a>
<a href="#">By Property Type</a>

</div>

<div class="rent-cards">

<a href="#" class="rent-card">
<h3>PG </h3>
<p>for Rent</p>
</a>

<a href="#" class="rent-card">
<h3>Flats</h3>
<p>for Rent </p>
</a>

<a href="#" class="rent-card">
<h3>Residential Properties</h3>
<p>for Rent </p>
</a>

<a href="#" class="rent-card">
<h3>Commercial Properties</h3>
<p>for Rent </p>
</a>

</div>

</div>

</section>

<!-- Rent Section end-->

<!-- Slider card Start-->
<div class="container mt-5">

<div class="swiper property-slider">

<div class="swiper-wrapper">

<!-- CARD 1 -->
<div class="swiper-slide">
<div class="card property-card">

<img src="Assets/images/logo.png" class="card-img-top">

<div class="card-body">

<h5>2 BHK Furnished Flat</h5>

<p>📍 Pune</p>

<p>690 Sqft</p>

<h6 class="price">₹ 85L</h6>

</div>

</div>
</div>

<!-- CARD 2 -->

<div class="swiper-slide">
<div class="card property-card">

<img src="Assets/images/logo.png" class="card-img-top">

<div class="card-body">

<h5>2 BHK Flat</h5>

<p>📍 Ravet Pune</p>

<p>698 Sqft</p>

<h6 class="price">₹ 75L</h6>

</div>

</div>
</div>

<!-- CARD 3 -->

<div class="swiper-slide">
<div class="card property-card">

<img src="Assets/images/hero.jpg" class="card-img-top">

<div class="card-body">

<h5>Residential Plot</h5>

<p>📍 Rajajipuram</p>

<p>441 Sqft</p>

<h6 class="price">₹ 2.3L</h6>

</div>

</div>
</div>

</div>

</div>

</div>

<!-- Slider card end -->






<!-- Slider card Start-->
<section class="property-slider">

<div class="container">

<h2 class="slider-title">RECENTLY PROPERTIES</h2>

<div class="swiper propertySwiper">

<div class="swiper-wrapper">

<div class="swiper-slide">
<div class="property-card">
<img src="Assets/images/hero.jpg">
<h3>Luxury Apartment</h3>
<p>... • ₹25,000 / month</p>
</div>
</div>

<div class="swiper-slide">
<div class="property-card">
<img src="Assets/images/hero.jpg">
<h3>Modern Flat</h3>
<p>... • ₹18,000 / month</p>
</div>
</div>

<div class="swiper-slide">
<div class="property-card">
<img src="Assets/images/logo.png">
<h3>Office Space</h3>
<p>... • ₹40,000 / month</p>
</div>
</div>

<div class="swiper-slide">
<div class="property-card">
<img src="Assets/images/logo.png">
<h3>PG Accommodation</h3>
<p>... • ₹8,000 / month</p>
</div>
</div>

</div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>

</div>

</section>

<!-- Slider card end -->



<!-- Footer Start -->

<?php include 'Includes/footer.php'; ?>

<!-- Footer end -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<script>

/* TOPBAR HIDE ON SCROLL */

window.addEventListener("scroll", function(){

let topbar = document.querySelector(".topbar");
let navbar = document.querySelector(".main-navbar");

if(window.scrollY > 50){

topbar.style.display="none";
navbar.classList.add("navbar-fixed");

}else{

topbar.style.display="block";
navbar.classList.remove("navbar-fixed");

}

});


/* ADVANCE SEARCH TOGGLE */

function toggleSearch(){

let box = document.getElementById("advance");
let btn = document.querySelector(".toggle-btn");

if(box.style.display === "none"){

box.style.display = "block";
btn.innerHTML = "-";

}else{

box.style.display = "none";
btn.innerHTML = "+";

}

}


/* SEARCH TAB ACTIVE */

function setTab(el){

let tabs = document.querySelectorAll(".search-tabs span");

tabs.forEach(function(tab){
tab.classList.remove("active");
});

el.classList.add("active");

}

/* explore property section*/

const filters = document.querySelectorAll(".filter");

filters.forEach(btn => {

btn.addEventListener("click", () => {

filters.forEach(b => {
if(!b.classList.contains("default")){
b.classList.remove("active");
}
});

btn.classList.add("active");

});

});

/* explore property end*/

/* rent section*/

const rentTabs = document.querySelectorAll(".rent-tabs a");

rentTabs.forEach(tab => {

tab.addEventListener("click", function(e){

e.preventDefault();

rentTabs.forEach(t => t.classList.remove("active"));

this.classList.add("active");

});

});

/* rent section end*/

/* SLIDER CARD SECTION START*/

var swiper = new Swiper(".propertySwiper", {
slidesPerView: 3,
spaceBetween: 30,
loop: true,

navigation: {
nextEl: ".swiper-button-next",
prevEl: ".swiper-button-prev",
},

breakpoints: {

0:{
slidesPerView:1
},

768:{
slidesPerView:2
},

1024:{
slidesPerView:3
}

}

});




/* SLIDER CARD SECTION END */


var swiper = new Swiper(".property-slider", {

slidesPerView:3,
spaceBetween:20,

loop:true,

autoplay:{
delay:3000,
},

breakpoints:{

0:{
slidesPerView:1
},

768:{
slidesPerView:2
},

1024:{
slidesPerView:3
}

}

});



</script>
<script src="script.js"></script>

</body>


</html>