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

<!-- Custom CSS -->
<link rel="stylesheet" href="../CSS/style.css">

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
<img src="../Assets/images/logo.png" class="site-logo">
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
<a class="nav-link" href="#">PROPERTIES</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">PROJECT</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">ABOUT</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">CONTACT</a>
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
<option>Gomti Nagar</option>
<option>Hazratganj</option>
<option>Aliganj</option>
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


<button class="filter">gomtinagar</button>
<button class="filter">Hinjewadi</button>
<button class="filter">Kilimani</button>
<button class="filter">Pune</button>
<button class="filter">Sarjapur Road</button>

</div>

</div>
</section>
<!-- Explore Projects Section End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


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



</script>

</body>
</html>