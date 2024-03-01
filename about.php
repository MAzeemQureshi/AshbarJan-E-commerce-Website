<?php 
$con=mysqli_connect('localhost','id18474916_root',"iamthe@Azeem323");
mysqli_select_db($con,'id18474916_ashbarjan');
?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HAND EMBROIDED DESIGNERS SUITS </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Nunito+Sans:wght@200;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="logo.png" width="80x">
		</div>
		<nav>
				<ul id="MenuItems">
				<li><a href="ashbar.php">HOME</li></a>
				<li><a href="products.php">PRODUCTS</li></a>
				<li><a href="about.php">ABOUT</li></a>
				<li><a href="contact.php">CONTACT</li></a>
				<li><a href="login.php">lOGOUT</li></a>
				</ul>
			</nav>
			<img src="menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
	</div>


<!---------- single product--------->
<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<h1>ASHBAR JAN LAHORE</h1>
			<h5>ADDRESS: </h5><small>Studio:97 K, Gulberg III, Lahore, Pakistan
			</small>
			<h5>PHONE: </h5><small>+92-300-9440566</small>
			<h5>OFFERINGS: </h5><small>Bridals, Formals, Fusion, Bespoke</small><br>
			<small>Our headquarters located in the ancient city of Lahore in Pakistan are home to our showroom, manufacturing and design facilities. 60 specialist artisans on-site co-create heritage craftsmanship mixed with contemporary design knowledge. Together, the designers and artisans, explore local roots to reinterpret and re-tell stories of South Asian identity.<br>People who have visited us observe that the tree in our courtyard is a symbol of nature standing tall and proud. That our space, even though located in the heart of the city, is as quiet as wearing noise cancelling headphones. And that the peacocks that roam the courtyard are majestic beauties that make hearts fill up with warmth, reflecting the unparalleled standards of curated design, service and experience that Zuria Dor is reputed for.<br>We invite you to come and join us and be warmly welcomed by our specialist team.</small>
		</div>
			<div class="col-2">
				<img src="10c.JPG" width="100%" id="ProductImg">
			</div>
		</div>
	</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3209.390737377548!2d74.35263173230874!3d31.545274631063027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904df757d8b89%3A0x956d82e22c2126ec!2s97%20Street%20K%2C%20Upper%20Mall%20Scheme%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1644932002975!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<div class="container">
	<div class="row">
		<div class="col-2" style="padding: 5px;">
			<img src="purse1e.JPG">
		</div>

		<div class="col-2" style="padding: 5px;">
			<img src="purse3e.JPG">
		</div>
	</div>
</div>

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Visit our Boutique</h3>
				<p>Studio:97 K, Gulberg III, Lahore, Pakistan</p>
			</div>
			<div class="footer-col-2">
				<img src="log.png" width="100px" height="100px" >
				<p>WEAR IT - LOVE IT</p>
			</div>
			<div class="footer-col-3">
				<h3>Contact Us</h3>
				<ul>
					<li>
						0323-8819474
					</li>
					<li>
						0311-4334886
					</li>
					<li>
						042-3939393
					</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow us</h3>
				<ul>
					<li>
						<a href="https://www.facebook.com/ashbarjanofficial"><i class="fa fa-facebook" st></i></a>
					</li>
					<li>
						<a href="https://instagram.com/ashbarjanofficial?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
					</li>
					<li>
						<a href="https://youtu.be/O0FJm1P8_kg"><i class="fa fa-youtube"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">Copyright 2022 - Muhammad Azeem Qureshi</p>
	</div>
</div>



<!---js for toggle menu--->
<script>
	var MenuItems= document.getElementById("MenuItems");
	MenuItems.style.maxHeight="0px";
	function menutoggle() {
		if (MenuItems.style.maxHeight=="0px") {
			MenuItems.style.maxHeight="200px";
		}
		else{
			MenuItems.style.maxHeight="0px";
		}
	}

</script>
</body>
</html>