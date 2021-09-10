<?php  
/*
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "register";
//$db_port = "3307";




if ($conn) {
	die ("Connection failed: ".mysqli_connect_error());
} 

if(isset($_POST['submit']))
{*/
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$category = $_POST['category'];
	$phno = $_POST['phno'];
	$college = $_POST['college'];
	$addr = $_POST['addr'];
	$city = $_POST['city'];
	$states = $_POST['states'];
	$pin = $_POST['pin'];

	if(!empty($fname)|| !empty($lname)|| !empty($email)|| !empty($gender)|| !empty($category)|| !empty($phno)|| !empty($college)|| !empty($addr)|| !empty($city)|| !empty($states)|| !empty($pin)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "database";
		$db_port = "3307";

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $db_port);

		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
		}else{
			$SELECT = "SELECT email from detail Where email = ? Limit 1";
			$INSERT = "INSERT Into detail (fname, lname, email, gender, category, phno, college, addr, city, states, pin) values(?,?,?,?,?,?,?,?,?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0){
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssssssssss",$fname,$lname,$email,$gender,$category,$phno,$college,$addr,$city,$states,$pin);
				$stmt->execute();
				echo '<script type="text/javascript">alert("New Record added Successfully!")</script>';
			} else{
				echo '<script type="text/javascript">alert("Someone already registered using this email!")</script>';
			}
			$stmt->close();
			$conn->close();		}
	}else{
		echo "All fields are required.";
		die();
	}

	/*
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into entry(fname, lname, email, gender,category, phno, college, address, city, state, pin) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssssssssssi",$fname ,$lname ,$email ,$gender ,$category ,$phno ,$college ,$address ,$city ,$state ,$pin);
		$stmt->execute();
		echo "Registration Successful...";
		$stmt->close();
		$conn->close();
	}*/

	
	/*$sql_query = "INSERT INTO entry(fname, lname, email, gender,category, phno, college, address, city, state, pin) VALUES ('$fname','$lname','$email','$gender','$category','$phno','$college','$address','$city','$state','$pin')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "New details are inserted successfully...";

	}
	else{
		echo "Error: " .$sql."".mysqli_error($conn); 
	}
	mysqli_close($conn);

}*/
?> 