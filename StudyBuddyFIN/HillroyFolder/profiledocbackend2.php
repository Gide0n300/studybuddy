<?php
	$conn = mysqli_connect("localhost","root", "", "loginsystem");
	if($conn-> connect_error){
		die("Connection failed:". $conn-> connect_error);
	}
	//
	if(isset($_GET['id'])){
		require_once 'mysqli_connect.php';
		$id = mysqli_real_escape_string($conn, $_GET['id']);
	
		$sql4 = "SELECT * FROM users WHERE user_id= $id";
	$result = $conn-> query($sql4);
	
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			echo "<p> Tutor Name: ". $row["user_first"]."</p>";
			echo "<p> Subject 1: ". $row["user_sub1"]."</p>";
			echo "<p> Subject 2: ". $row["user_sub2"]."</p>";
			echo "<p> Subject 3: ". $row["user_sub3"]."</p>";
			echo "<p> Price per session: R". $row["user_price"]."</p>";
		}
		echo "";
	}
	else{
		echo "0 result";
	}
	$conn-> close();
	}
	?>