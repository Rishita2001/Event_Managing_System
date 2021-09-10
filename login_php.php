<?php

$con = mysqli_connect("localhost","root", "", "database", "3307");
 if(mysqli_connect_errno()){
	echo "Cannot Connect". mysqli_connect_error();
 }
/*
$username = filter_input(INPUT_POST,'username');
$pass = filter_input(INPUT_POST,'pass');
if(!empty($username)){
	if(!empty($pass)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "database";
		$db_port = "3307";

		$conn = new mysqli($host, $dbusername,$dbpassword, $dbname, $db_port);

		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else{
			$sql = "INSERT INTO accounts (username, pass) values ('$username','$pass')";
			if($conn->query($sql)){
				echo "New record is inserted";
			}
			else{
				echo "Error: ".$sql ."<br>".$conn->error;
			}
			$conn->close();
		}

	}
	else{
		echo "Password should not be empty";
		die();
	}
}
else{
	echo "Password should not be empty";
	die();
}

*/




if(isset($_POST['updatebtn'])){
	$username = $_POST[''];
}

?>


