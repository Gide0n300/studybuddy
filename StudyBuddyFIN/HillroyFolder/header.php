<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <header>
    <nav>
      <div class="main-wrapper">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="test.php">Test</a></li>
          </ul>
          <div class="nav-login">
            <?php
                if(isset($_SESSION['u_id']))
                {
                    echo '<form action="back-end/logout-back-end.php" method="POST">
                          <button type="submit" name="submit">Logout</button>
                          </form>';
                }
                else
                {
                  echo '<form action="back-end/login-back-end.php" method="POST">
                    <input type="text" name="uid" placeholder="Username/e-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>';
                }
             ?>
          </div>
        </div>
    </nav>
  </header>
