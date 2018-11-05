<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styletry.css">
  </head>
<body>
  <div id="sidebartxt">
    <p><?php session_start(); ?></p>
    <p><?php echo "My name is: </br>"; ?></p>
    <p><?php echo $_SESSION['username']; ?></p>
  </div>
</body>
