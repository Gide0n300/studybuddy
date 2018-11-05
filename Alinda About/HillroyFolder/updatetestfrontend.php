<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Hillroy Smith">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Studdy Buddy Homepage">
<meta name="keywords" content="tutoring, students, study buddy">
<link rel="stylesheet" type="text/css" href="styletaak1.css">
<name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 40%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #30BFF2  ;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #ccc;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
div.a {
    font-size: 60px;
}
div.b {
    font-size: 40px;
}

</style>

<div id="bannertext">
<p></p>
<p>.</p>

<div class="a">
<h1><center> STUDY BUDDY  </center> </h1>
</div>
<p><center> Your solution to better academical results</center> </p>
</div>




<div>

<div class="banner">
<div id="bannertext">
 
	
</div>

</head>
<body background="pic5.jpg"><center>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-blue w3-card w3-left-align w3-large">
    <a href="../Home.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="../About.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    <a href="HillroyFolder/updatetestfrontend.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Profile</a>
    <a href="../contactUs.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
	<a href="../ChatroomTry.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Chatroom</a>
	<a href="Hometaak.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Find demi</a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>


<div class="banner">
<div id="bannertext">
<!--                                                                              -->

<?php
	include_once 'updatetestbackend.php';
?>

<div>


<div>
<form class="container" method="post">
<!-------------------------------------------->
<label  for="currentname">Current Name:</label>
</br>
<input align="center" type="text" name="currentname" value="<?php echo $row['user_first'] ?>" placeholder="enter current name" class="searchbar"><br><br>

<label for="currentpassword"><center>Current Password:</center></label>
</br>
<input type="text" name="currentpassword" value="<?php echo $row['user_pwd'] ?>" placeholder="enter current password" class="searchbar"><br><br>
<!-------------------------------------------->

<div>
<label for="id"><center>ID:</center></label>
</br>
<input type="text" id="id" name="id" value="" disabled <?php echo $row['user_id'] ?>" readonly>
</div>

<div>
<label for="fnm">First Name:</label>
</div>
<div>
<input type="text" id="fnm" name="fnm" placeholder="first name" value="<?php echo $row['user_first'] ?>">
</div>
<div>
<label for="lnm">Last Name:</label>
</br>
<input type="text" id="lnm" name="lnm" value="<?php echo $row['user_last'] ?>">
</div>

<div>
<label for="em">Email:</label>
</br>
<input type="email" id="em" name="em" value="<?php echo $row['user_email'] ?>">
</div>

<div>
<label for="unm">User Name:</label>
</br>
<input type="text" id="unm" name="unm" value="<?php echo $row['user_uid'] ?>">
</div>

<div>
<label for="pwd">Password:</label>
</br>
<input type="text" id="pwd" name="pwd" value="<?php echo $row['user_pwd'] ?>">
</div>

<div>
<label for="tel">Phone:</label>
</br>
<input type="text" id="tel" name="tel" value="<?php echo $row['user_phone'] ?>">
</div>

<div>
<label for="bio">Biography:</label>
</br>
<textarea id="bio" name="bio"><?php echo $row['user_bio'] ?></textarea>
</div>

<div>
<label for="sub1">Subject 1:</label>
</br>
<input type="text" id="sub1" name="sub1" value="<?php echo $row['user_sub1'] ?>">
</div>

<div>
<label for="sub2">Subject 2:</label>
</br>
<input type="text" id="sub2" name="sub2" value="<?php echo $row['user_sub2'] ?>">
</div>

<div>
<label for="sub3">Subject 3:</label>
</br>
<input type="text" id="sub3" name="sub3" value="<?php echo $row['user_sub3'] ?>">
</div>

<div>
<label for="price">Price:</label>
</br>
<input type="text" id="price" name="price" value="<?php echo $row['user_price'] ?>">
</div>

<button type="submit" name="update">Update</button>
</form>
</div>


<!--                                                                              -->
</center>
</body>
</html>