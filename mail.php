<?php

/*if(isset($_POST['submit']))
{
	
}*/

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n Phone: $phone \n Email: $email \n Message: $message";
$recipient = "its.pickle.rick404@gmail.com";
$subject = "Contact Form";
$header = "From: ".$email;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($recipient, $subject, $formcontent, $header) or die("Error!");
//header("Locatio: index.html?mailsend");

echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

/* Send Information to database*/
$connection = mysqli_connect('localhost', 'root', '', 'contactforminfo');
if (!$connection)
{
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'demo');
if (!$select_db)
{
    die("Database Selection Failed" . mysqli_error($connection));
}

$query = "INSERT INTO `contact` (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone' , '$subject', '$message')";
$result = mysqli_query($connection, $query);
?>
