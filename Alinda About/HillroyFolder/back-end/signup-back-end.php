<?php /*Handels the data that the user types into the form and tell the database what to do with it*/
if(isset($_POST['submit']))/*This keeps a user from typing in the url .../back-end-includes/signup-inc.php and accessing data that must be protected. The user must click the button for the code to work*/
{
  include_once 'dbh-back-end.php';

  $first = mysqli_real_escape_string($conn,$_POST['first']);/*Getting the actual data from the signup form.FIRST name in signup form*/
  $last = mysqli_real_escape_string($conn,$_POST['last']);/*mysqli_real_escape_string prevents users from entring code as a security measure, it will only be read as a string*/
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $phone = mysqli_real_escape_string($conn,$_POST['phone']);
  $uid = mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
  $confirmpwd = mysqli_real_escape_string($conn,$_POST['confirmpwd']);
  $demi = mysqli_real_escape_string($conn,$_POST['demi']);

  /*Error handelers*/
  /*Check for empyt fields*/
  if (empty($first)|| empty($last)|| empty($email)||empty($phone)|| empty($uid)|| empty($pwd)) /*Note to self it is always good to check for errors first and then check for success*/
  {
    header("Location: ../signup.php?signup=empty");/*If the user typed the address into the url it would send them back to the sign up page*/
    exit();
  }
  else
  {
    /*Check if input char is valid*/
    if(!preg_match("/^[a-zA-Z\s-]*$/",$first) ||!preg_match("/^[a-zA-Z\s-]*$/",$last))
    {
      header("Location: ../signup.php?signup=invalid");
      exit();
    }
    else
    {
      /*Check if email is invalid*/
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        header("Location: ../signup.php?signup=email");
        exit();
      }

      else
      {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone))
        {
          header("Location: ../signup.php?signup=phone");
          exit();
        }
        else
        {

        /*Check if username is already taken*/
          $sql = "SELECT * FROM users WHERE user_uid='$uid'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0)
          {
            header("Location: ../signup.php?signup=usernametaken");
            exit();
          }
          else

          {
            if($pwd !== $confirmpwd)
            {
              header("Location: ../signup.php?signup=password_not_match");
              exit();
            }
            else
            {
            $demi = $demi['demi'] == '1' ? 1 : 0;
            /*Hashing the password so that you can not even see it in the database*/
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            /*Insert user into the database*/
            $sql = "INSERT INTO users (user_first, user_last, user_email, user_phone, user_uid, user_pwd,user_demi) VALUES ('$first','$last','$email','$phone','$uid','$hashedPwd', '$demi');";
            //$result = mysqli_query($conn, $sql);
            mysqli_query($conn, $sql);
            header("Location: ../signup.php?signup=success");
            exit();
          }
         }
        }
     }
    }
  }
}
else
{
  header("Location: ../signup.php");/*If the user typed the address into the url it would send them back to the sign up page*/
  exit();/*prevents code to run after the exit() statement*/
}
 ?>
