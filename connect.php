<?php 
 if(isset($_POST['fname'])&& 
 isset($_POST['lname'])&&
 isset($_POST['email'])&&
 isset($_POST['gender'])&&
 isset($_POST['phno'])&&
 isset($_POST['college'])&&
 isset($_POST['address'])&&
 isset($_POST['city'])&&
 isset($_POST['state'])&&
 isset($_POST['pin'])){
	include 'db_conn.php';

	function validate($data){
    	$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$email = validate($_POST['email']);
	$gender = validate($_POST['gender']);
	$phno = validate($_POST['phno']);
	$college = validate($_POST['college']);
	$address = validate($_POST['address']);
	$city = validate($_POST['city']);
	$state = validate($_POST['state']);
	$pin = validate($_POST['pin']);

	echo $fname;




 } else {
	header("Location: form.html");
 }
	/*$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$category=$_POST['category'];
	$phno=$_POST['phno'];
	$college=$_POST['college'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];

	//Database connection

	$conn=new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into details(fname, lname, email, gender, category, phno, college, address, city, state, pin) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssssi",$fname,$lname,$email,$gender,$category,$phno,$college,$address,$city,$state,$pin);
		$stmt->execute();
		echo "registration successfully...";
		$stmt->close();
		$conn->close();
	}
 
?>*/


?>