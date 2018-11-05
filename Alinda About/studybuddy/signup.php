<?php
    include_once 'header.php';
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

   </body>
  <script>
        $(document).ready(function()
        {
          //$ .get("http://localhost/studybuddy/back-end/login-back-end.php",function(data,status)
          $.get("http://localhost/studybuddy/back-end/signup-back-end.php",function(data,status)
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
          $("#submit").click(function()
            {

              var ufirst =$("#first").val();
              var ulast =$("#last").val();
              var uemail =$("#email").val();
              var uphone =$("#phone").val();
              var username =$("#uid").val();
              var upwd =$("#pwd").val();
              var ucpwd =$("#confirmpwd").val();// class="signup-form" action="back-end/signup-back-end.php" method="POST"
              //var udemi =$("#demi").val();
              var udemi = $("input:radio[name=rdemi]:checked").val();
              var users = {
                    user_first:ufirst,
                    user_last:ulast,
                    user_email:uemail,
                    user_phone:uphone,
                    user_uid:username,
                    user_pwd:upwd,
                    user_confirmpwd:ucpwd,
                    user_demi:udemi

                };
                $.post("http://localhost/studybuddy/back-end/signup-back-end.php",users,function(data)
                {
                  console.log(data);
                });
            });
        });
    </script>
    <section class="main-container">
        <div class="main-wrapper">
              <h2>Sign up</h2>
              <form class="signup-form"><!--The POST method hides the password in the url?-->
                <input type="text" id="first"  placeholder="First name">
                <input type="text" id="last" placeholder="Last name">
                <input type="text" id="email" placeholder="E-mail">
                <input type="text" id="phone" placeholder="Phone number (xxx-xxx-xxxx)">
                <input type="text" id="uid" placeholder="Username">
                <input type="password" id="pwd" placeholder="Password">
                <input type="password" id="confirmpwd" placeholder="Confirm Password">
                <label class="container">Student
                <input type="radio" checked="checked" id="student" name="rdemi" value="0">
                <span class="checkmark"></span>
              </label>
                <label class="container">Demi
                <input type="radio" checked="checked" id="demi" name="rdemi" value="1">
                <span class="checkmark"></span>
              </label><br>
                <input type="button" id="submit" value="Save user"</>
                <button type="reset" name="reset">Reset</button>
                <button formaction="index.php">Cancel</button>
              </form>
        </div>
    </section>
