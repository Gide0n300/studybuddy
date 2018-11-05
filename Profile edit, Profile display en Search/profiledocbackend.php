<?php
	$conn = mysqli_connect("localhost","root", "", "loginsystem");
	if($conn-> connect_error){
		die("Connection failed:". $conn-> connect_error);
	}
	//
	if(isset($_GET['id'])){
		require_once 'mysqli_connect.php';
		$id = mysqli_real_escape_string($conn, $_GET['id']);
	
		$sql3 = "SELECT user_bio FROM users WHERE user_id= $id";
	$result = $conn-> query($sql3);
	
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			echo "<p>". $row["user_bio"]."</p>";		
		}
		echo "";
	}
	else{
		echo "0 result";
	}
	$conn-> close();
	}
	
?>
	
	