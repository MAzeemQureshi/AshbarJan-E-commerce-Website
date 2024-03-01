<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$to="azeemjamil.s@gmail.com";


$con=mysqli_connect('localhost','id18474916_root',"iamthe@Azeem323");
mysqli_select_db($con,'id18474916_ashbarjan');
if ($con->connect_error) {
	
}else{
	$stmt=$con->prepare("insert into contactusform(name,email,subject,message)values(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$email,$subject,$message);
	$stmt->execute();
	$stmt->close();
	$con->close();
}

$email_from="Ashbarjan's Ask me a Question";
$email_subject="Contct Us or Query";
$email_body="Username: $name.\n ".
			"User Email: $email.\n".
			"User subject: $subject.\n ".
			"User message: $message.\n ";

$headers="From: $email_from \r\n";
$headers="Reply-To: $email \r\n";
if ($email!=NULL) {
	mail($to, $email_subject, $email_body, $headers);
}
header('location:welcome.php');
?>