<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


<!-- Custom CSS -->
 <link rel="stylesheet" href="CSS/header.css">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/contactus.css">

</head>
<body>
    
<?php include 'Includes/header.php'; ?>


<!----Banner section-->

<section class="page-banner">

<div class="banner-overlay"></div>

<div class="banner-content">
<h1> CONTACT US</h1>
<p>Home  ||  Contact</p>
</div>

</section>



<!-- CONTACT SECTION -->

<section class="ct-section">

<div class="ct-container">

<div class="ct-grid">

<!-- LEFT FORM -->

<div class="ct-form">

<h3>Send us a Message</h3>

<div class="ct-row">
<input type="text" placeholder="Name">
<input type="email" placeholder="Email Address">
</div>

<div class="ct-row">
<input type="text" placeholder="Location">
<input type="text" placeholder="Phone">
</div>

<textarea placeholder="Write message"></textarea>

<p>How did you hear about us?</p>
<select>
<option>-- Please Select --</option>
<option>Google</option>
<option>Facebook</option>
<option>Friend</option>
</select>

<button class="ct-btn">Send Message</button>

</div>


<!-- RIGHT CONTACT INFO -->

<div class="ct-info">

<div class="ct-info-content">

<h3>Contact Us</h3>

<!-- ADDRESS -->

<div class="ct-item">
<i class="fa fa-map-marker-alt"></i>

<div>
<h4>Office Address</h4>

<p>
Remuna Golei, Balasore, Odisha – 756019
</p>

</div>
</div>

<!-- PHONE -->

<div class="ct-item">
<i class="fa fa-phone"></i>

<div>
<h4>Phone Number</h4>
<p>+91 6370122173 </p>
</div>

</div>

<!-- EMAIL -->

<div class="ct-item">
<i class="fa fa-envelope"></i>

<div>
<h4>Email Address</h4>
<p>contact@smartproperty.co.in</p>
</div>

</div>

<!-- FOLLOW -->

<h4 class="ct-follow">Follow Us</h4>

<div class="ct-social">

<a href="#" class="ct-facebook">
<i class="fab fa-facebook-f"></i>
<span>Facebook</span>
</a>

<a href="#" class="ct-instagram">
<i class="fab fa-instagram"></i>
<span>Instagram</span>
</a>

<a href="#" class="ct-twitter">
<i class="fab fa-twitter"></i>
<span>Twitter</span>
</a>

<a href="#" class="ct-whatsapp">
<i class="fab fa-whatsapp"></i>
<span>Whatsapp</span>
</a>

</div>

</div>

</div>

</div>

</div>

</section>



<!-- MAP SECTION -->

<section class="ct-map-section">

<div class="ct-map">

<iframe 
src="https://www.google.com/maps?q=Remuna+Golei+Balasore+Odisha+756019&output=embed"
allowfullscreen=""
loading="lazy"
referrerpolicy="no-referrer-when-downgrade">
</iframe>

</div>

</section>

<!-- Footer Start -->

<?php include 'Includes/footer.php'; ?>

<!-- Footer end -->


</body>
</html>