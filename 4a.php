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
			<img src="4c.JPG" width="100%" id="ProductImg">
				<div class="small-img-row">
					<div class="small-img-col">
					<img src="4b.JPG" width="100%" class="small-img">
					</div>
					
					<div class="small-img-col">
					<img src="4a.JPG" width="100%" class="small-img">
					</div>
					
					<div class="small-img-col">
					<img src="4d.JPG" width="100%" class="small-img">
					</div>
					
					<div class="small-img-col">
					<img src="purse3e.JPG" width="100%" class="small-img">
					</div>
				
				</div>
			</div>
		<div class="col-2">
			<p></p>
			<h1>The Ruby Bridal</h1>
			<h3>Shirt</h3><br><p>Ruby Shirt in Organza with the plain slip and heavily worked belt</p><br>
			<h3>WORK</h3><br><p>Resham, colored and gold Sequins, 3D Detailing, Dabka, pita, Nakshi Gota Embroidery and pearls. Worked Neckline at the back</p><br>
			<h3>LOWER</h3><br><p>Velvet Lehnga with Heavily worked border</p><br>
			<h3>Dupatta</h3><br><p>Zari Net dupatta with heavily 4 sided embroideery border with the spray</p><br><h3>2nd Dupatta</h3><p>green Dupatta in Organza, 4 sided border and light gota spray</p>
			<br>
			<form id="contact-form" method="post" action="message.php">
					    	<h3>CONTACT US TO PURCHASE</h3>
				          	<input type="text" name="name" placeholder="Name" required><br>
				          	<input type="text" name="email" placeholder="Email" required><br>
				          	<input type="text" name="phone" placeholder="Phone Number" required><br>
				          	<input type="text" name="article" placeholder="Article Name" required><br>
				        	<button type="submit" class="btn">Send Message</button>
				        	<span></span>
				      	</form>
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


<!---js for product image change --->

<script >
	var ProductImg=document.getElementById("ProductImg");
	var SmallImg=document.getElementsByClassName("small-img");
		SmallImg[0].onclick = function() {
		ProductImg.src =  SmallImg[0].src;
	}
		SmallImg[1].onclick = function() {
		ProductImg.src =  SmallImg[1].src;
	}
		SmallImg[2].onclick = function() {
		ProductImg.src =  SmallImg[2].src;
	}
		SmallImg[3].onclick = function() {
		ProductImg.src =  SmallImg[3].src;
	}
</script>
</body>
</html>