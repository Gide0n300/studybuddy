<?php

$mysqli = new mysqli('localhost','root','', 'loginsystem');
$query = $mysqli->query("select * from users");
$row = $query->fetch_assoc();


if(isset($_POST['update'])){
	
	 $currentname = $_POST['currentname'];
	 $currentpassword = $_POST['currentpassword'];
	
	$id = $_POST['id'];
	$fnm = $_POST['fnm'];
	$lnm = $_POST['lnm'];
	$em = $_POST['em'];
	$unm = $_POST['unm'];
	$pwd = $_POST['pwd'];
	$tel = $_POST['tel'];
	$bio = $_POST['bio'];
	$sub1 = $_POST['sub1'];
	$sub2 = $_POST['sub2'];
	$sub3 = $_POST['sub3'];
	$price = $_POST['price'];
	
	$result = $mysqli->query("update users set user_first='$fnm',user_last='$lnm',user_email='$em',user_uid='$unm',user_pwd='$pwd',user_phone='$tel',user_bio='$bio',user_sub1='$sub1',user_sub2='$sub2',user_sub3='$sub3',user_price='$price' where user_first ='$currentname' AND user_pwd='$currentpassword'");
	if($result){		
?>

<div>

<strong>Success!</strong>data updated.
</div>


<?php 
}else{
?>

<strong>Failed!</strong>data not updated.

<?php 
}
}
?>