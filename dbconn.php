<?php  

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","register");

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);


if (!$conn) {
	echo "Connection failed!";
	exit(); 
}
?>