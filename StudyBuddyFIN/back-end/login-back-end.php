<?php
session_start();

 //if(isset($_POST['submit']))/*Check if submit button is clicked*/
// {
    //include 'dbh-back-end.php';/*include database connection*/
    $conn = mysqli_connect("localhost", "root", "", "loginsystem");
    if(!$conn)
    {
      die('Could not connect '.$conn->connect_error);
    }
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "GET")
    {
      $sql = "SELECT * FROM users";
      $result = mysqli_query($conn,$sql);
      $rows = array();
      if(mysqli_num_rows($result)>0)
      {
        while ($r = mysqli_fetch_assoc($result))
        {
          array_push($rows,$r);
        }
        print json_encode($rows);
      }
      else
      {
        echo "No data";
      }

    }
    elseif ($method =="POST")
    {
      $uid = mysqli_real_escape_string($conn,$_POST['user_uid']);/*Inputs*/
      $pwd = mysqli_real_escape_string($conn,$_POST['user_pwd']);/*mysqli_real_escape_string prevents users from entering malicious code*/
      /*Error handelers
      Check if inputs are empty*/
      if(empty($uid)|| empty($pwd))
      {
      //  header("Location: ../index.php?login=empty");
      //  exit();
      $awe['failed'] = 'Fields empty';
      echo json_encode($awe);
      }
      else
        {
          $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email='$uid'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);/*Checks how many rows there is in the db using the $result ($conn, $sql) parameters */
          if ($resultCheck < 1)
          {
            //header("Location: ../index.php?login=error");
          //  exit();
          $awe['failed'] = 'invalid username';
          echo json_encode($awe);
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
              //  header("Location: ../index.php?login=error");
              //  exit();
              $awe['failed'] = 'invalid password';
              echo json_encode($awe);
              }
              elseif($hashedPwdCheck == true)
              {
                //Login in the user here
                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_first'] = $row['user_first'];
                $_SESSION['u_last'] = $row['user_last'];
                $_SESSION['u_email'] = $row['user_email'];
                $_SESSION['u_uid'] = $row['user_uid'];
              //  header("Location: ../index.php?login=success");

              //header('Refresh: 1; url=http://localhost/studybuddy/back-end/login-back-end.php');
               $json['success'] = 'Welcome ' .$uid;
               echo json_encode($json);
              // header('Content-Type: application/json');
              // header("Location: ../index.php?login=success");
                mysqli_close($conn);

                exit();

              }
              else
              {
                $awe['failed'] = 'Did not work';
                echo json_encode($awe);
                mysqli_close($conn);

                exit();
              }
          }
      }
    }
  }
// }
    //else
    //{
      //header("Location: ../index.php?login=error");

    //}
 ?>
