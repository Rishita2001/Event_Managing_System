<?php

session_start();
if(empty($_SESSION['username'])):
    header('Location:login.php');
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
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

<div class="records">
<h1><u><i>Event Records:</i></u> </h1> 
<div class="container">
    <form action="#" method="POST">
        <label for="category">Select the Category: </label>
        <select id="category" name="category" class="btn">
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
        <!--<input type="text" class="btn" name="id" placeholder="Enter the category: ">-->
        <input type="submit" class="btn" name="search" value=" SEARCH ">
    </form> <br><br>
    <table>
        <tr>
            <th>First Name </th>
            <th>Last Name </th>
            <th>Email </th>
            <th>Gender </th>
            <th>Category </th>
            <th>Phone Number </th>
            <th>College/Institute </th>
            <th>Address </th>
            <th>City </th>
            <th>State </th>
            <th>Pin Code </th>
        </tr>
    
    <?php
    $connection = mysqli_connect("localhost","root","","database","3307");
    $db = mysqli_select_db($connection,'database');

    if(isset($_POST['search']))
    {
        $category = $_POST['category'];

        $query = "SELECT * FROM detail where category='$category'";
        $query_run = mysqli_query($connection,$query);

        while($row = mysqli_fetch_array($query_run))
        {
            $category = $row['category'];
            ?>
            
            <tr>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['lname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['category'] ?></td>
                <td><?php echo $row['phno'] ?></td>
                <td><?php echo $row['college'] ?></td>
                <td><?php echo $row['addr'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['states'] ?></td>
                <td><?php echo $row['pin'] ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table><br>

</div>

</div>

</body>
</html>