<?php  

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dept = $_POST['dept'];
	$religion = $_POST['religion'];
	$blood = $_POST['blood'];
	$category = $_POST['category'];
	$college = $_POST['college'];
	$addr = $_POST['addr'];
	$city = $_POST['city'];
	$states = $_POST['states'];
	$pin = $_POST['pin'];

	if(!empty($fname)|| !empty($lname)|| !empty($email)|| !empty($gender)|| !empty($dept)|| !empty($religion)|| !empty($blood)|| !empty($category)|| !empty($college)|| !empty($addr)|| !empty($city)|| !empty($states)|| !empty($pin)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "database";
		$db_port = "3307";

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $db_port);

		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
		}else{
			$SELECT = "SELECT email from adminpanel Where email = ? Limit 1";
			$INSERT = "INSERT Into adminpanel (fname, lname, email, gender, dept, religion, blood, category, college, addr, city, states, pin) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0){
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssssssssssss",$fname,$lname,$email,$gender,$dept, $religion, $blood ,$category ,$college,$addr,$city,$states,$pin);
				$stmt->execute();
				echo "New record updated successfully!";
			} else{
				echo "New record updated successfully!";
			}
			$stmt->close();
			$conn->close();		}
	}else{
		echo "All fields are required.";
		die();
	}

	
?> 