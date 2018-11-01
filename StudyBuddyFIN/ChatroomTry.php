
<?php
session_start();
//require("index.hph")

//echo $_POST['username'];
//$_SESSION['u_uid'];
?>

<html lang="en" dir="ltr">


  <head>
    <meta charset="utf-8">
    <title> Charoom???</title>
	
    <link rel="stylesheet" type="text/css" href="styletry.css">
  </head>
  <style>
    frame{background-color: #30BFF2}
    frame{border-radius: 0%}
  </style>

    <FRAMESET cols="200,*">
      <FRAME src="Sidebar.php">
	  
        <FRAMESET rows="*,200">
          <FRAME src="Messages.php">
          <FRAME src="NewMessage.php">
        </FRAMESET>
    </FRAMESET>

	<footer>
		
	</footer>
</html>
