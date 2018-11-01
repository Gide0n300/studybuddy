<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="2">
    <title></title>
  </head>
  
  <style>
  image 
  {
	  background-image: url("pic5.jpg");
	  background-color: #cccccc;
	  height: 5;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	  position: relative;
	}
  </style>
  <body onload="scrollDown()" background="pic5.jpg" class="image">
    <?php

$conn = mysqli_connect("localhost", "root", "", "loginsystem");
if (!$conn)
{
  die('Could not connect: '.mysqli_error($conn));
}

//mysqli_select_db($conn, 'IM');

$query ="SELECT * FROM messages ORDER BY timestamp ASC";
if ($result = mysqli_query($conn, $query))
{
  while ($row = mysqli_fetch_row($result))
  {
    echo "<link rel='stylesheet' type='text/css' href='styletry.css'>";
    echo "<span id='messagest'>". $row['3'].':</br> '.$row['1'].'</br></br></span>';
  }
  mysqli_free_result($result);
}
mysqli_close($conn);
     ?>
  </body>
  <script>
    scrollDown = function() {
     document.body.scrollTop = document.body.scrollHeight;
    $("window").load(scroolDown);
  </script>
</html>
