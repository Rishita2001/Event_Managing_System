<?php  
	$names = $_POST['names'];
	$email = $_POST['email'];
	$messages = $_POST['messages'];
	

	if(!empty($names)|| !empty($email)|| !empty($messages)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "database";
		$db_port = "3307";

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $db_port);

		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
		}else{
			$SELECT = "SELECT email from msg Where email = ? Limit 1";
			$INSERT = "INSERT Into msg (names, email, messages) values(?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0){
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sss",$names, $email, $messages);
				$stmt->execute();
				echo "New record inserted successfully!";
			} else{
				echo "Someone already registered using this email!";
			}
			$stmt->close();
			$conn->close();		}
	}else{
		echo "All fields are required.";
		die();
	}

?> 