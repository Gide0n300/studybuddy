<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor="#B7DBE8">
    <?php
    session_start();

    if (isset($_POST['message']))
    {
      $conn = mysqli_connect("localhost", "root", "", "IM");
      if (!$conn)
      {
        die('Could not connect: '.mysqli_error($conn));
      }

      $message = mysqli_real_escape_string($conn, $_POST['message']);
      $username = mysqli_real_escape_string($conn, $_SESSION['username']);

      $sql = "INSERT INTO messages (message, username) VALUES ('$message', '$username')";

    $result = mysqli_query($conn, $sql);

      mysqli_close($conn);
    }
     ?>
		<style>

		.button1
		{
			background-color: white;
			color: black;
			border: 2px solid #8BD2EB  ;
			font-size: 30px;
			padding: 5px 60px;

			font-family:"Comic Sans MS", cursive, sans-serif;
			font-style: italic;
		}

		.button1:hover
		{
			background-color: #30BFF2;
			color: white;
		}


		</style>


     <link rel='stylesheet' type='text/css' href='styletry.css'>

	 <form action='NewMessage.php' method = 'post'>

	 <div>
	 <input id='btnsend' type='submit' name='Send' value="Send" class= "button1" >
	 </div>

	 <div>
	 <p>
	 </p>
	 </div>

	 <div>
     <textarea id= 'newmessagetext' name='message' rows='6' cols='80'></textarea>
	</div>

    </form>
  </body>
</html>
