<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
  </head>
  <body>
  <header>
    <nav>
      <div class="main-wrapper">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="test.php">Test</a></li>
          </ul>

          <script>
                $(document).ready(function()
                {
                  //$ .get("http://localhost/studybuddy/back-end/login-back-end.php",function(data,status)
                  $.get("http://localhost/studybuddy/back-end/login-back-end.php",function(data,status)
                  {
                    console.log(data);
                    var obj = JSON.parse(JSON.stringify(data));
                    //var obj = data;
                    /*for(var i = 0; i < obj.length; i++)
                    {
                      var loginstuff = "User id :" + obj[i].user_id+
                                        "First :" + obj[i].user_first +
                                        "Last :" + obj[i].user_last +
                                        "email :" + obj[i].user_email +
                                        "phone :" + obj[i].user_phone +
                                        "Username :" + obj[i].user_uid +
                                        "pwd:" + obj[i].user_pwd+
                                        "demi :" + obj[i].user_demi;
                      loginstuff="<li>"+loginstuff+"</li>";
                      $("#myloginstuff").append(loginstuff);
                    }*/


                  });
                   $("#lsubmit").click(function()
                    {
                        var username =$("#luid").val();
                        var password =$("#lpwd").val();
                        var users = {
                            user_uid:username,
                            user_pwd:password
                        };
                        $.post("http://localhost/studybuddy/back-end/login-back-end.php",users,function(data)
                        {
                          console.log(data);
                        });
                    });
                });
            </script>

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
                  echo '<form>
                    <input type="text" id="luid" name="uid" placeholder="Username/e-mail">
                    <input type="password" id="lpwd" name="pwd" placeholder="Password">
                      <input type="button" id="lsubmit" value="login"</>
                    </form>
                    <a href="signup.php">Sign up</a>
                    ';

                }
             ?>

          </div>
        </div>
    </nav>

  </header>
  <footer>

  </footer>
