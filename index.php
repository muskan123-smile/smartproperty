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
 <link rel="stylesheet" href="CSS/header.css">
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
<a class="nav-link active" href="index.php">HOME</a>
</li>

<!-- PROPERTIES DROPDOWN -->

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
PROPERTIES
</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item" href="#">Rent</a>
</li>

<li>
<a class="dropdown-item" href="#">Sell</a>
</li>

</ul>
</li>

<li class="nav-item">
<a class="nav-link" href="#">PROJECT</a>
</li>

<li class="nav-item">
<a class="nav-link" href="aboutus.php">ABOUT</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contactus.php">CONTACT</a>
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

<!-- Featured Property Section Start-->

<section class="fp-section">

<h2 class="fp-title">FEATURED PROJECT</h2>

<div class="fp-wrapper">

<div class="fp-card">

<div class="fp-image">

<span class="fp-badge">FEATURED</span>

<img src="Assets/images/plot8.png" alt="project">

<div class="fp-price">
₹ 6,07,20,00,00 - ₹ 10,35,60,00,00
</div>

</div>

<div class="fp-content">

<h3 class="fp-name">VTP Aethereus</h3>

<p class="fp-location">
<i class="fa fa-map-marker"></i> 37
</p>

<div class="fp-details">

<div class="fp-row">
<span>Project Type:</span>
<strong>12</strong>
</div>

<div class="fp-row">
<span>Launch Date:</span>
<strong><i class="fa fa-calendar"></i> 01-01-2020</strong>
</div>

<div class="fp-row">
<span>Possession Date:</span>
<strong><i class="fa fa-calendar"></i> 01-01-2020</strong>
</div>

</div>

</div>

</div>

</div>

</section>

<!-- Featured Property Section End-->


<!-- Card section start-->

<section class="fp-section">

<div class="fp-container">

<h2 class="fp-title">FEATURED PROPERTIES</h2>

<div class="fp-grid">

<!-- CARD -->
<div class="fp-card">

<div class="fp-img">

<img src="Assets/images/plot7.png" alt="property">

<span class="fp-featured">FEATURED</span>
<span class="fp-rent">RENT</span>

<div class="fp-price">₹ 36,000</div>

</div>

<div class="fp-content">

<h3>2 BHK Flat for Rent in Godrej 24 Hinjewadi</h3>

<p class="fp-location">
<i class="fa fa-map-marker-alt"></i> Pune , Maharashtra
</p>

<div class="fp-info">

<span><i class="fa fa-building"></i> Residential</span>
<span><i class="fa fa-home"></i> Flat / Apartments</span>
<span><i class="fa fa-map-pin"></i> 411045</span>

</div>

</div>

</div>
<!-- CARD END -->

<!-- CARD -->
<div class="fp-card">

<div class="fp-img">

<img src="Assets/images/plot6.png" alt="property">

<span class="fp-featured">FEATURED</span>
<span class="fp-rent">RENT</span>

<div class="fp-price">₹ 36,000</div>

</div>

<div class="fp-content">

<h3>2 BHK Flat for Rent in Godrej 24 Hinjewadi</h3>

<p class="fp-location">
<i class="fa fa-map-marker-alt"></i> Pune , Maharashtra
</p>

<div class="fp-info">

<span><i class="fa fa-building"></i> Residential</span>
<span><i class="fa fa-home"></i> Flat / Apartments</span>
<span><i class="fa fa-map-pin"></i> 411045</span>

</div>

</div>

</div>
<!-- CARD END -->

<!-- CARD -->
<div class="fp-card">

<div class="fp-img">

<img src="Assets/images/plot4.png" alt="property">

<span class="fp-featured">FEATURED</span>
<span class="fp-rent">RENT</span>

<div class="fp-price">₹ 36,000</div>

</div>

<div class="fp-content">

<h3>2 BHK Flat for Rent in Godrej 24 Hinjewadi</h3>

<p class="fp-location">
<i class="fa fa-map-marker-alt"></i> Pune , Maharashtra
</p>

<div class="fp-info">

<span><i class="fa fa-building"></i> Residential</span>
<span><i class="fa fa-home"></i> Flat / Apartments</span>
<span><i class="fa fa-map-pin"></i> 411045</span>

</div>

</div>

</div>
<!-- CARD END -->

<!-- CARD -->
<div class="fp-card">

<div class="fp-img">

<img src="Assets/images/plot3.png" alt="property">

<span class="fp-featured">FEATURED</span>
<span class="fp-rent">RENT</span>

<div class="fp-price">₹ 36,000</div>

</div>

<div class="fp-content">

<h3>2 BHK Flat for Rent in Godrej 24 Hinjewadi</h3>

<p class="fp-location">
<i class="fa fa-map-marker-alt"></i> Pune , Maharashtra
</p>

<div class="fp-info">

<span><i class="fa fa-building"></i> Residential</span>
<span><i class="fa fa-home"></i> Flat / Apartments</span>
<span><i class="fa fa-map-pin"></i> 411045</span>

</div>

</div>

</div>
<!-- CARD END -->

<!-- CARD -->
<div class="fp-card">

<div class="fp-img">

<img src="Assets/images/plot2.png" alt="property">

<span class="fp-featured">FEATURED</span>
<span class="fp-rent">RENT</span>

<div class="fp-price">₹ 36,000</div>

</div>

<div class="fp-content">

<h3>2 BHK Flat for Rent in Godrej 24 Hinjewadi</h3>

<p class="fp-location">
<i class="fa fa-map-marker-alt"></i> Pune , Maharashtra
</p>

<div class="fp-info">

<span><i class="fa fa-building"></i> Residential</span>
<span><i class="fa fa-home"></i> Flat / Apartments</span>
<span><i class="fa fa-map-pin"></i> 411045</span>

</div>

</div>

</div>
<!-- CARD END -->

<!-- CARD -->
<div class="fp-card">

<div class="fp-img">

<img src="Assets/images/plot1.png" alt="property">

<span class="fp-featured">FEATURED</span>
<span class="fp-rent">RENT</span>

<div class="fp-price">₹ 36,000</div>

</div>

<div class="fp-content">

<h3>2 BHK Flat for Rent in Godrej 24 Hinjewadi</h3>

<p class="fp-location">
<i class="fa fa-map-marker-alt"></i> Pune , Maharashtra
</p>

<div class="fp-info">

<span><i class="fa fa-building"></i> Residential</span>
<span><i class="fa fa-home"></i> Flat / Apartments</span>
<span><i class="fa fa-map-pin"></i> 411045</span>

</div>

</div>

</div>
<!-- CARD END -->

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



<section class="real-slider-section">

<div class="container">

<div class="swiper realSlider">

<div class="swiper-wrapper">

<!-- CARD -->
<div class="swiper-slide">

<div class="real-card">

<div class="real-img">
<img src="Assets/images/plot1.png">
<div class="real-price">₹32K /month</div>
</div>

<div class="real-content">
<h3>3 BHK Flat for Rent</h3>
<p>📍 Balasore</p>
<p>📐 860 Sqft</p>
</div>

</div>

</div>


<div class="swiper-slide">

<div class="real-card">

<div class="real-img">
<img src="Assets/images/plot2.png">
<div class="real-price">₹75L</div>
</div>

<div class="real-content">
<h3>2 BHK Flat for Sale</h3>
<p>📍 Balasore</p>
<p>📐 698 Sqft</p>
</div>

</div>

</div>


<div class="swiper-slide">

<div class="real-card">

<div class="real-img">
<img src="Assets/images/plot3.png">
<div class="real-price">₹85L</div>
</div>

<div class="real-content">
<h3>Luxury Apartment</h3>
<p>📍 Balasore</p>
<p>📐 900 Sqft</p>
</div>

</div>

</div>


<div class="swiper-slide">

<div class="real-card">

<div class="real-img">
<img src="Assets/images/plot1.png">
<div class="real-price">₹32K /month</div>
</div>

<div class="real-content">
<h3>3 BHK Flat for Rent</h3>
<p>📍 Balasore</p>
<p>📐 860 Sqft</p>
</div>

</div>

</div>

</div>

<div class="swiper-button-next real-next"></div>
<div class="swiper-button-prev real-prev"></div>

</div>

</div>

</section>


<!-- Slider card end -->






<!-- Slider card Start-->
<section class="recent-property-slider">

<div class="container">

<h2 class="recent-title">RECENTLY PROPERTIES</h2>

<div class="swiper recentSwiper">

<div class="swiper-wrapper">

<!-- CARD 1 -->
<div class="swiper-slide">

<div class="recent-card">

<div class="recent-img">

<img src="Assets/images/plot1.png">

<span class="recent-tag rent">RENT</span>

<div class="recent-overlay"></div>

</div>

<div class="recent-content">

<h3>3 BHK FLAT FOR RENT IN VT..</h3>

<p class="recent-location">
<i class="fa-solid fa-location-dot"></i> Pune, Maharashtra
</p>

<div class="recent-info">

<span><i class="fa-solid fa-building"></i> Residential</span>

<span><i class="fa-solid fa-house"></i> Flat / Apartments</span>

</div>

</div>

</div>

</div>


<!-- CARD 2 -->
<div class="swiper-slide">

<div class="recent-card">

<div class="recent-img">

<img src="Assets/images/plot2.png">

<span class="recent-tag buy">BUY</span>

<div class="recent-overlay"></div>

</div>

<div class="recent-content">

<h3>2 BHK FURNISHED FLAT FOR ..</h3>

<p class="recent-location">
<i class="fa-solid fa-location-dot"></i> Pune, Maharashtra
</p>

<div class="recent-info">

<span><i class="fa-solid fa-building"></i> Residential</span>

<span><i class="fa-solid fa-house"></i> Flat / Apartments</span>

</div>

</div>

</div>

</div>


<!-- CARD 3 -->
<div class="swiper-slide">

<div class="recent-card">

<div class="recent-img">

<img src="Assets/images/plot3.png">

<span class="recent-tag buy">BUY</span>

<div class="recent-overlay"></div>

</div>

<div class="recent-content">

<h3>2 BHK FLAT FOR SALE IN RA..</h3>

<p class="recent-location">
<i class="fa-solid fa-location-dot"></i> Maharashtra
</p>

<div class="recent-info">

<span><i class="fa-solid fa-building"></i> Residential</span>

<span><i class="fa-solid fa-house"></i> Flat / Apartments</span>

</div>

</div>

</div>

</div>


<!-- CARD 4 -->
<div class="swiper-slide">

<div class="recent-card">

<div class="recent-img">

<img src="Assets/images/plot2.png">

<span class="recent-tag buy">BUY</span>

<div class="recent-overlay"></div>

</div>

<div class="recent-content">

<h3>2 BHK FURNISHED FLAT FOR ..</h3>

<p class="recent-location">
<i class="fa-solid fa-location-dot"></i> Pune, Maharashtra
</p>

<div class="recent-info">

<span><i class="fa-solid fa-building"></i> Residential</span>

<span><i class="fa-solid fa-house"></i> Flat / Apartments</span>

</div>

</div>

</div>

</div>

</div>

<div class="swiper-button-next recent-next"></div>
<div class="swiper-button-prev recent-prev"></div>

</div>

</div>

</section>

 <!--Slider card end -->


 <section class="expertise">

<div class="expertise-container">

<div class="expertise-left">

<h2>OVER 10 YEARS OF<br>EXPERTISE</h2>

<p>
A decade of excellence in real estate. Trust our
proven experience to guide you in finding the
perfect property with ease and confidence.
</p>

</div>


<div class="expertise-right">

<div class="exp-card">
<div class="exp-icon"><i class="fa-solid fa-house"></i></div>
<h3>2</h3>
<p>Listings For Rent</p>
</div>

<div class="exp-card">
<div class="exp-icon"><i class="fa-solid fa-tag"></i></div>
<h3>3</h3>
<p>Listings For Sale</p>
</div>

<div class="exp-card">
<div class="exp-icon"><i class="fa-solid fa-building"></i></div>
<h3>2</h3>
<p>Listings For Project</p>
</div>

<div class="exp-card">
<div class="exp-icon"><i class="fa-solid fa-user"></i></div>
<h3>1</h3>
<p>Agents</p>
</div>

</div>

</div>

</section>


<!-- Footer Start -->

<?php include 'Includes/footer.php'; ?>

<!-- Footer end -->

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

/* SLIDER CARD SECTION START

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




 SLIDER CARD SECTION END */




/* slider card*/
var swiper = new Swiper(".realSlider", {

slidesPerView: 3,
spaceBetween: 25,
loop: true,
speed: 800,

navigation: {
nextEl: ".real-next",
prevEl: ".real-prev",
},

breakpoints: {

0: {
slidesPerView: 1,
spaceBetween: 15
},

576: {
slidesPerView: 1,
spaceBetween: 20
},

768: {
slidesPerView: 2,
spaceBetween: 20
},

992: {
slidesPerView: 2,
spaceBetween: 25
},

1200: {
slidesPerView: 3,
spaceBetween: 25
}

}

});

/* recent slider*/

var recentSwiper = new Swiper(".recentSwiper", {

slidesPerView: 3,
spaceBetween: 25,
loop: true,
speed: 800,

navigation: {
nextEl: ".recent-next",
prevEl: ".recent-prev",
},

breakpoints: {

0: {
slidesPerView: 1,
spaceBetween: 15
},

576: {
slidesPerView: 1,
spaceBetween: 20
},

768: {
slidesPerView: 2,
spaceBetween: 20
},

992: {
slidesPerView: 2,
spaceBetween: 25
},

1200: {
slidesPerView: 3,
spaceBetween: 30
}

}

});


/* blue part*/

const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {

counter.innerText = '0';

const updateCounter = () => {

const target = +counter.getAttribute('data-target');

const c = +counter.innerText;

const increment = target / 200;

if(c < target){

counter.innerText = `${Math.ceil(c + increment)}`;
setTimeout(updateCounter,10);

}else{

counter.innerText = target;

}

};

updateCounter();

});



</script>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>