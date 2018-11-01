<?php
  $method = $_SERVER['REQUEST_METHOD'];
  if ($method =="POST")
  {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
  }
 ?>
