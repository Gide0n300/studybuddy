<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Hillroy Smith">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Studdy Buddy Homepage">
<meta name="keywords" content="tutoring, students, study buddy">
<link rel="stylesheet" type="text/css" href="styletaak1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


<div id="bannertext">
<div class="a"
<h1><font color="#30BFF2" ><b><center>Study Buddy</b></font></center></h1>
</div>

</div>

<div class="b"
<h2><font color="#30BFF2"><b><center>Profile Update</b></font></center></h2>
</div>

<div>

<div class="banner">
<div id="bannertext">

</div>

</head>
<body background="pic5.jpg">



<div class="banner">
<div id="bannertext">
<!--                                                                              -->

<?php
	include_once 'updatetestbackend.php';
?>

<div>


<div>
<form class="container" method="post">
<!--                 -->
<input type="text" name="currentname" value="<?php echo $row['user_first'] ?>" placeholder="enter current name" class="searchbar"><br><br>
<input type="text" name="currentpassword" value="<?php echo $row['user_pwd'] ?>" placeholder="enter current password" class="searchbar"><br><br>
<!--                 -->

<div>
<label for="id">ID:</label>
<input type="text" id="id" name="id" value="<?php echo $row['user_id'] ?>" readonly>
</div>

<div>
<label for="fnm">First Name:</label>
<input type="text" id="fnm" name="fnm" placeholder="first name" value="<?php echo $row['user_first'] ?>">
</div>
<div>
<label for="lnm">Last Name:</label>
<input type="text" id="lnm" name="lnm" value="<?php echo $row['user_last'] ?>">
</div>

<div>
<label for="em">Email:</label>
<input type="email" id="em" name="em" value="<?php echo $row['user_email'] ?>">
</div>

<div>
<label for="unm">User Name:</label>
<input type="text" id="unm" name="unm" value="<?php echo $row['user_uid'] ?>">
</div>

<div>
<label for="pwd">Password:</label>
<input type="text" id="pwd" name="pwd" value="<?php echo $row['user_pwd'] ?>">
</div>

<div>
<label for="tel">Phone:</label>
<input type="text" id="tel" name="tel" value="<?php echo $row['user_phone'] ?>">
</div>

<div>
<label for="bio">Biography:</label>
<textarea id="bio" name="bio"><?php echo $row['user_bio'] ?></textarea>
</div>

<div>
<label for="sub1">Subject 1:</label>
<input type="text" id="sub1" name="sub1" value="<?php echo $row['user_sub1'] ?>">
</div>

<div>
<label for="sub2">Subject 2:</label>
<input type="text" id="sub2" name="sub2" value="<?php echo $row['user_sub2'] ?>">
</div>

<div>
<label for="sub3">Subject 3:</label>
<input type="text" id="sub3" name="sub3" value="<?php echo $row['user_sub3'] ?>">
</div>

<div>
<label for="price">Price:</label>
<input type="text" id="price" name="price" value="<?php echo $row['user_price'] ?>">
</div>

<button type="submit" name="update">Update</button>
</form>
</div>


 


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 40%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #30BFF2  ;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #ccc;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
div.a {
    font-size: 70px;
}
div.b {
    font-size: 50px;
}

</style>                                                                           -->
</body>
</html>