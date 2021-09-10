
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body{
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0px;
        }
        div.header{
            font-family: sans-serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: #204969;
            color: whitesmoke;
        }
        div.topnav button{
            background-color: #f0f0f0;
            padding: 8px 12px;
            font-size: 16px;
            font-weight: 550;
            border: 2px solid black;
            border-radius: 5px;
            float: right;
        }
        div.sidebar{
            margin: 10px;
        }
        div.logo{
            float: right;
            padding-right: 10px;
       }

       
.topnav {
  overflow: hidden;
  background-color: lightslategray;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.right{
    padding: 5px 15px;
}
.records{
    /*display: flex;
    justify-content: space-between;*/
    margin-left: 100px;
    font-family: cursive;
}

table,th,td{
    border: 2px solid blue;
    width: 1300px;
    background-color: palegoldenrod;
}
.btn{
    width: 100px;
    height: 40px;
    font-size: 20px;
    padding: 0px;
}


.pass_show{
    position: relative
} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{
    color: #333333;
} 



</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="adminPanel.php">Dashboard</a>
  <a href="msg.php">Messages</a>
  <a href="profile.php">Admin Profile</a>
  <a href="pass.php">Change Password</a>
  <div class="right">
  <form action="logout_process.php" method="POST">
    <button>LOG OUT</button></form></div>
</div>



<div class="header">
    <h1><u> Welcome to Admin Panel</u></h1>
</div><br>
    <div class="sidebar">
        <div class="logo"><a href="adminPanel.php">
        <img src="images/logo edited.png" alt="company logo"></div></a>
        <!--<ul>
            <li><a href="#"><i class="fas fa-qrcode"></i></a>Dashboard</li>
            <li><a href="#"><i class="fas fa-link"></i></a></li>
            <li><a href="#"><i class="fas fa-stream"></i></a></li>
            <li><a href="#"><i class="fas fa-calender-week"></i></a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i></a></li>
        </ul>-->
</div>


<div class="records">
<h1><u><i>Change Password: </i></u> </h1>
</div><br>



<?php /* include_once('connection.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];

    $query = mysqli_query($conn,"SELECT username, pass from accounts where username = '$username' AND pass = '$opass' ");

    $num = mysqli_fetch_array($query);

    if($num>0){
        $con = mysqli_query($conn, "UPDATE accounts set pass = '$npass' where username = '$username' ");
        $_SESSION['msg1']="Password Changed Successfully!";
    }
    else{
        $_SESSION['msg1']="Password does not match!";
    }
}

?>
<p style="color: red;"><?php echo $_SESSION['msg1'] ; ?>
<?php echo $_SESSION['msg1']=""; ?>
</p>

*/?>
<div class = "container">
	<div class="row">
		<div class="col-sm-4"><form method="POST">
            <label>Username</label>
		    <div class="form-group pass_show"> 
                <input type="text" class="form-control" name="username" placeholder="Username"> 
            </div>

		    <label>Current Password</label>
		    <div class="form-group pass_show"> 
                <input type="password" class="form-control" name="opass" placeholder="Current Password"> 
            </div> 
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="npass" class="form-control" placeholder="New Password"> 
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="cpass" class="form-control" placeholder="Confirm Password"> 
            </div> 
<br>
            <button type="submit" name="updatebtn" class="btn btn-primary" value="submit">Update</button> <br>
            </form>
            
		</div>  
	</div>
</div>

<?php
$conn = mysqli_connect("localhost","root","","database","3307");
$db = mysqli_select_db($conn,'database');

if(isset($_POST['updatebtn']))
{
    $username = $_POST['username'];

    $query = "UPDATE accounts SET pass='$_POST[npass]' where username='$_POST[username]'";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        echo '<script type="text/javascript">alert("Data Updated")</script>';
    }else{
        echo '<script type="text/javascript">alert("Data Not Updated")</script>';
    }
}
?>


</body>
</html>