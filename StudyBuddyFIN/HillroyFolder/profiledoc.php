<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Hillroy Smith">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <title>Tutor Profile for User</title>
    <link rel="stylesheet" href="./styletaak1.css">
  </head>
  <body background="pic5.jpg">
   
  <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-blue w3-card w3-left-align w3-large">
    <a href="Home.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="About.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    <a href="HillroyFolder/updatetestfrontend.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Profile</a>

    <a href="contactUs.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
	<a href="ChatroomTry.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Chatroom</a>
	<a href="HillroyFolder/Hometaak.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Find demi</a>

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
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">
		  
		  
		  
		  </span> Studdy Buddies </h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
			<li><a href="updatetestfrontend.php">update profile</a></li>
	

            <li class="current"><a href="about.html">About</a></li>
			
			
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>
		<!-- code line 1 kom hierso maar doen niks-->
		</h1>    <!--werk nie-->
        <form>
          <p><img src="img/profileimage.png" style=";width:80px;height:100px;"></p>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
	  
	 
	  
        <article id="main-col">
          <h1 class="titlename"> <?php echo 'Biography'?></h1>
          <p>  </p>
          <h1 class="dark">		
			<?php
			include_once 'profiledocbackend.php';
			?>

			
          </h1>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Tutoring Information</h3>
			<?php
			include_once 'profiledocbackend2.php';
			?>
			<!--
            <p>Tutor Module: ITRW 123</p>
			<p>Year: Academically 3rd year</p>
			<p>Session Cost: R100</p>
			<p>Studies: Information Technology</p>
			<p>?Name?</p> -->
			
			<button type="submit" name="chatroom" class="button_1" onclick="location.href='../ChatroomTry.php'">Book Appointment</button>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p class="footer1">GASHT group, Gestig en ontwerp &copy; 2018</p>
    </footer>
  </body>
</html>
