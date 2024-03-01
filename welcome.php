<?php 
$con=mysqli_connect('localhost','id18474916_root',"iamthe@Azeem323");
mysqli_select_db($con,'id18474916_ashbarjan');	
?>
<html>
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
				<li><a href="logout.php">LOGOUT</li></a>
				</ul>
			</nav>
		</div>
	</div>
</div>

<div class="categories">
	<div class="row">
		<div class="col-3">
			<h1>YOU WILL BE CONTACTED SOON</h1>
			<a href="products.php" class="btn">STORE &#8594;</a>		
		</div>
	</div>
</div>

<div class="small-container">
	<h2 class="title">Other Items</h2>

	<div class="row"> 
		<div class=col-4>
			<a href="1aproduct.php"><img src="6a.jpg">
			<h4>Enchantered BLack</h4>
			<p>Order Now</p></a>
		</div> 
		<div class=col-4>
			<a href="7a.php"><img src="7a.jpg">
			<h4>The Ivery</h4>
			<p>Order Now</p></a>
		</div> 
		<div class=col-4>
			<a href="8a.php"><img src="8a.jpg">
			<h4>The Rust</h4>
			<p>Order Now</p></a>
		</div> 
		<div class=col-4>
			<a href="5a.php"><img src="5a.jpg">
			<h4>The Rose</h4>
			<p>Order Now</p></a>
		</div>
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
