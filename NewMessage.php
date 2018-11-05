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

echo "<html>";
echo "<head></head><body>";
echo "<link rel='stylesheet' type='text/css' href='styletry.css'>";
echo "<form action='NewMessage.php' method = 'post'>";
echo "<textarea id= 'newmessagetext' name='message' rows='3' cols='50'></textarea>";
echo "<input id='btnsend' type='submit' name='Send'/>";
echo "</form>";

echo "</body></html>";
 ?>
