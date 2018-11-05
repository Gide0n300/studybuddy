<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Hillroy Smith">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Studdy Buddy Homepage">
<meta name="keywords" content="tutoring, students, study buddy">
<link rel="stylesheet" type="text/css" href="styletaak1.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-blue w3-card w3-left-align w3-large">
    <a href="../Home.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="../About.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    <a href="updatetestfrontend.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>
    <a href="../contactUs.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
	<a href="../ChatroomTry.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Chatroom</a>
	<a href="HillroyFolder/Hometaak.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Find demi</a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>



<header>
<div class="banner">
<div id="bannertext">
<p></p>
<p></p>
<h1><center> STUDY BUDDY  </center></h1>
<p> Your solution to better academical results </p>
</div>
<nav>

<?php
// Start the session
session_start();
?>

<?php
	//echo $_POST['subject1'];
	?>

<form action="Hometaakbackend.php" method="post">
</form>
</nav>
</div>
<div>

 <form action="Hometaak.php" method="post">
 <input type="text" name="valueToSearch" placeholder="user / subject / price" class="searchbar"><br><br>
	<input type="submit" name="search" value="Search" class="button_3"><br><br>           
              </form>
	
</div>

</header>

<div>



</div>
 <h1 class="page-title">Different Tutors Handling Searched Module</h1>
 
<div class="box1">

<title>Table with database</title>
	<style type="text/css">
	table{
		border-collapse:collapse;
		width: 100%;
		color: #30BFF2;
		font-family: monospace;
		font-size: 18px;
		text-align: center;
	}
	th{
		background-color:#30BFF2;
		color: white;
	}
	tr:nth-child(even) {background-color:#f2f2f2}
	</style>

	<?php
include_once 'Hometaakbackend.php';
?>
	
	<table>
	<tr>
		<th>Username</th>
		<th>Subject 1</th>
		<th>Subject 2</th>
		<th>Subject 3</th>
		<th>Price</th>
	</tr>
	
		<?php
				include_once  'Hometaakbackend2.php';
				?>
	
	</table>

</div>

<div>
<p class="box2"> Studdy Buddy will help you get those grades you always wanted. Make us of out fast and simple Tutor sharing platform so you can get ahead. 1. Simple navigate via the search button 2. Select your prefered Tutor from our list 3. Make your booking </p>
</div>
</body>
</html>
