<?php
session_start();
  if(isset($_POST['submit']))/*Check if submit button is clicked*/
  {
    include 'dbh-back-end.php';/*include database connection*/
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);/*Inputs*/
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);/*mysqli_real_escape_string prevents users from entering malicious code*/
    /*Error handelers
    Check if inputs are empty*/
    if(empty($uid)|| empty($pwd))
    {
      header("Location: ../index.php?login=empty");
      exit();
    }
    else
      {
        $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);/*Checks how many rows there is in the db using the $result ($conn, $sql) parameters */
        if ($resultCheck < 1)
        {
          header("Location: ../index.php?login=error");
          exit();
        }
        else
        {
          if ($row = mysqli_fetch_assoc($result))
          {
            //echo $row['user_uid'];
            //De-hashing the PASSWORD
            $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
            if($hashedPwdCheck == false)
            {
              header("Location: ../index.php?login=error");
              exit();
            }
            elseif($hashedPwdCheck == true)
            {
              //Login in the user here
              $_SESSION['u_id'] = $row['user_id'];
              $_SESSION['u_first'] = $row['user_first'];
              $_SESSION['u_last'] = $row['user_last'];
              $_SESSION['u_email'] = $row['user_email'];
              $_SESSION['u_uid'] = $row['user_uid'];
              header("Location: ../index.php?login=success");
              exit();
            }
          }
      }
    }
  }
    else
    {
      header("Location: ../index.php?login=error");
      exit();
    }
 ?>
