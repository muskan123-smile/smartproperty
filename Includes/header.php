<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


<!-- Custom CSS -->
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/header.css">



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

</script>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
