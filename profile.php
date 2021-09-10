<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" type="text/css" href="admin.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
    h2{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    }
    .form{
    width: 740px;
    height: 420px;
    top: 55%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 10px;
    font-weight: bold;

}

.tflogo{
    width: 170px;
    padding: 30px;
}
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
    width: auto;
    height: auto;
    font-size: 20px;
    padding: 0px;
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



<form method="POST">
      <div class="form mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <h2>Update your Profile here! </h2><br>
      <div class="row">
      
        <div class="col">
          <label>First Name</label>
          <input type="text" class="form-control" name="fname" placeholder="First name" required>
        </div>
        <div class="col">
          <label>Last Name</label>
          <input type="text" class="form-control" name="lname" placeholder="Last name" required>
        </div>
      </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email"required>
          </div>
          <div class="form-group col-md-6">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" class="form-control">
              <option selected hidden>Select</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Others">Others</option>
            </select>
          </div>
        </div>
        <div class="form-row">
        <div class="col">
          <label>ID No.</label>
          <input type="text" class="form-control" name="idno" placeholder="ID No." required>
        </div>
          <div class="col">
            <label for="category">Department</label>
            <select id="category" name="dept" class="form-control">
              <option selected>Select</option>
              <option value="Music">Computers-589</option>
              <option value="Dance">Law-325</option>
              <option value="Fine Arts">Pharmacy-125</option>
              <option value="Theatre">Physiotherapy-006</option>
              <option value="Technical">Hotel Management-902</option>
              <option value="Hospitality">Mathematics-057</option>
              <option value="Fashion">Management-25</option>

            </select>
          </div>
          <div class="col"><label>Religion</label>
          <select name="religion" class="form-control dd" id="religion">
<option value="S">Select Religion</option>
<option value="Hindus" selected="selected">Hindus</option>
<option value="Muslims">Muslims</option>
<option value="Sikhs">Sikhs</option>
<option value="Christians">Christians</option>
<option value="Buddhists">Buddhists</option>
<option value="Jains">Jains</option>
<option value="Jews">Jews</option>
<option value="Ethnoreligionists">Ethnoreligionists</option>
<option value="Neoreligionists">Neoreligionists</option>
<option value="Spiritists">Spiritists</option>
<option value="Confucianists">Confucianists</option>
<option value="Shintoists">Shintoists</option>
<option value="Taoists">Taoists</option>
<option value="Zoroastrians">Zoroastrians</option>
<option value="Atheist">Atheist</option>
<option value="Chinese Universists">Chinese Universists</option>
</select>
          </div>
        </div>
        
        <div class="form-row">
		<div class="col-sm-6">
											<label>Blood Group</label>
											<select name="blood" class="form-control dd" id="blood_group">
<option value="S">Select</option>
<option value="O-">Blood Group O-</option>
<option value="O+">Blood Group O+</option>
<option value="A-">Blood Group A-</option>
<option value="A+">Blood Group A+</option>
<option value="B-">Blood Group B-</option>
<option value="B+">Blood Group B+</option>
<option value="AB-">Blood Group AB-</option>
<option value="AB+">Blood Group AB+</option>
</select>
											
										</div>
                                        <div class="form-group col-md-6">
            <label for="category">Category incharge of:</label>
            <select id="category" name="category" class="form-control">
              <option selected>Select</option>
              <option value="Music">Music</option>
              <option value="Dance">Dance</option>
              <option value="Fine Arts">Fine Arts</option>
              <option value="Theatre">Theatre</option>
              <option value="Technical">Technical</option>
              <option value="Hospitality">Hospitality</option>
              <option value="Fashion">Fashion</option>
              <option value="Literary">Literary</option>
              <option value="Photography">Photography</option>
            </select>
          </div>
</div>
        <div class="form-group">
          <label for="inputAddress">College/Institute</label>
          <input type="text" class="form-control" id="inputAddress" name="college" placeholder="college/institute/university">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address</label>
          <input type="text" class="form-control" id="inputAddress2" name="addr" placeholder="Address"required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="city" placeholder="City"required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" name="states" class="form-control">
              <option selected>Choose...</option>
              <option value="Haryana">Haryana</option>
              <option value="Punjab">Punjab</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Goa">Goa</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerela">Kerela</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Andra Pradesh">Andra Pradesh</option>
              <option value="Chattisgarh">Chattisgarh</option>
              <option value="Orissa">Orissa</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Bihar">Bihar</option>
              <option value="West Bengal">West Bengal</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Manipur">Manipur</option>
              <option value="Tripura">Tripura</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Telanghana">Telanghana</option>
              <option value="Jammu & Kashmir">Jammu & Kashmir</option>
              <option value="Ladakh">Ladakh</option>
              <option value="Delhi">Delhi</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Puducherry">Puducherry</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Pin Code</label>
            <input type="zip" class="form-control" id="inputZip" name="pin" placeholder="pincode" pattern="[0-9]{6}" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck"required>
            <label class="form-check-label" for="gridCheck">
              I have carefully filled this form.
            </label>
          </div>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary" value="submit">Update</button>
        
      </div>  <br>
    </form>
<!--
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
  idno
	$dept = $_POST['dept'];
	$religion = $_POST['religion'];
	$blood = $_POST['blood'];
	$category = $_POST['category'];
	$college = $_POST['college'];
	$addr = $_POST['addr'];
	$city = $_POST['city'];
	$states = $_POST['states'];
	$pin = $_POST['pin'];


-->

<?php 
$conn = mysqli_connect("localhost","root","","database","3307");
$db = mysqli_select_db($conn,'database');

if(isset($_POST['submit']))
{
    $idno = $_POST['idno'];

    $query = "UPDATE adminpanel SET fname='$_POST[fname]', lname='$_POST[lname]', email='$_POST[email]', gender='$_POST[gender]', idno='$_POST[idno]', dept='$_POST[dept]', religion='$_POST[religion]', blood='$_POST[blood]', category='$_POST[category]', college='$_POST[college]', addr='$_POST[addr]', city='$_POST[city]', states='$_POST[states]', pin='$_POST[pin]' where idno='$_POST[idno]'";
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