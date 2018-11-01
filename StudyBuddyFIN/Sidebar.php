<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styletry.css">
  </head>
<body>
	
  <div id="sidebartxt">
  
    <table>
      <thead>
        <tr>
		
          
			
            <?php
                //session_start();
                //require("back-end/logout-back-end.php");
                //include_once 'signup.php';
                //require("db/users.php");
                //require("db/chatrooms.php");
                //$objLogOut = new logout_back_end;
                //$objChatroom = new chatrooms;
                //$chatrooms = $objChatroom->getAllChatRooms();
                //$objUser = new users;
                //$users = $objUser->getAllUsers();

                  echo "</br>My name is: </br>";
                  if (isset($_SESSION['u_uid']))
                  {
                    echo $_SESSION['u_uid'];
                  }

                  echo "</br></br>USERS</br>";





              ?>
        </tr>
      </thead>
	  <style>
		.button1 
		{
			background-color: white; 
			color: black; 
			border: 2px solid #8BD2EB  ;
			font-size: 20px;
			padding: 10px 60px;
			
			
			font-family:"Comic Sans MS", cursive, sans-serif;
			font-style: italic;
		}
		
		.button1:hover 
		{
			background-color: #30BFF2;
			color: white;
		}
		
		
		</style>
      <tbody>
        <tr>
          <?php

          echo "</br>";
          $conn = mysqli_connect("localhost", "root", "", "loginsystem");
          if (!$conn)
          {
            die('Could not connect: '.mysqli_error($conn));
          }

          $query ="SELECT * FROM users";
          if ($result = mysqli_query($conn, $query))
          {
            while ($row = mysqli_fetch_row($result))
            {
              echo "<link rel='stylesheet' type='text/css' href='styletry.css'>";
              echo "<span id='messagest'>". $row['5'].'</br></br></span>';
            }
            mysqli_free_result($result);
          }
          mysqli_close($conn);

           ?>
        </tr>
      </tbody>
    </table>


  </div>
</body>
