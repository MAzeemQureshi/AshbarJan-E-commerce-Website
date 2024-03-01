<?php 
$con=mysqli_connect('localhost','id18474916_root',"iamthe@Azeem323");
mysqli_select_db($con,'id18474916_ashbarjan');
?><html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> ASHBAR JAN HAND DESIGNERS SUITS </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Nunito+Sans:wght@200;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

</head>
<body>

<div class="header">
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
				<li><a href="logout.php">LOGOUT</li></a>
				</ul>
			</nav>
			<img src="menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	</div>
</div>

<div class="categories">
	<div class="small-container">
	<div class="row">
		<div class="col-2">
			<h2>CONTACT US</h2>
			<p>Phone-number: +92-300-9440566</p>
			<p>E-mail: ashbarjan83@gmail.com</p>
		</div>
		<div class="col-2">
			<h2>VISIT US</h2>
			<p>Studio:97 K, Gulberg III, Lahore, Pakistan</p>
		</div>
		
	</div>
	<div class="row">
		<form id="contact-form" method="post" action="contactusconnect.php" >
					    	<br><h2 class="title">ENTER YOUR INFORMATION</h2>
				          	<input type="text" name="name" placeholder="Name" required ><br>
				          	<input type="text" name="email" placeholder="Email" required>
				          	<input type="text" name="subject" placeholder="Subject" required>
				          	<input type="text" name="message" placeholder="Your Review" required>
				        	<button type="submit" class="btn">Submit</button>
				        	<span></span>
				      	</form>
		</div>
	</div>
</div>





<!--- footer--->
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