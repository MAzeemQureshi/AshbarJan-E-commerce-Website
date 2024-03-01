<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$article=$_POST['article'];
$to="azeemjamil.s@gmail.com";

$con=mysqli_connect('localhost','id18474916_root',"iamthe@Azeem323");
mysqli_select_db($con,'id18474916_ashbarjan');
if ($con->connect_error) {
	
}else{
	$stmt=$con->prepare("insert into contactform(name,email,phone,article)values(?,?,?,?)");
	$stmt->bind_param("ssis",$name,$email,$phone,$article);
	$stmt->execute();
	$stmt->close();
	$con->close();
}

$email_from="AshbarJan Appointments";
$email_subject="New Appointment";
$email_body="Username: $name.\n ".
			"User Email: $email.\n".
			"User Phone Number: $phone.\n ".
			"User article: $article.\n ";

$headers="From: $email_from \r\n";
$headers="Reply-To: $email \r\n";
if ($email!=NULL) {
	mail($to, $email_subject, $email_body, $headers);
}
header('location:welcome.php');
	?>