<?php header('Access-Control-Allow-Origin: *'); ?>
<?php header('Access-Control-Allow-Header: Origin, X-Requested-With, Content-Type, Accept'); ?>
<?php header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT'); ?>
<?php
	
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "testing");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $first_name = isset($_POST['firstname']) ?
	mysqli_real_escape_string($link, $_POST['firstname']) : "";
    $last_name = isset($_POST['lastname']) ?
	mysqli_real_escape_string($link, $_POST['lastname']) : "";
    $email_address = isset($_POST['email']) ?
	mysqli_real_escape_string($link, $_POST['email']) : "";
	$message = isset($_POST['message']) ?
	mysqli_real_escape_string($link, $_POST['message']) : "";
	

    // attempt insert query execution
    $sql = "INSERT INTO contactus (Name, Email, Message) VALUES ('$first_name', '$email_address', '$message')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	
	
	
	$json = array($first_name, $email_address, $message);
	echo json_encode($json);

    // close connection
    mysqli_close($link);
?>