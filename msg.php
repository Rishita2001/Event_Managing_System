<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
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
            width: 1100px;
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
<h1><u><i>Messages from Viewers: </i></u> </h1>

<?php 
$conn = mysqli_connect("localhost","root","","database","3307");
$query="SELECT * from msg";
$query_run = mysqli_query($conn,$query);
?>

<table>
    <tr>
        <th> S.No. </th>
        <th> Name </th>
        <th> Email </th>
        <th> Messages </th>
    </tr>

    <?php
    if(mysqli_num_rows($query_run)>0 )
    {
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
    <tr>
        <th><?php echo $row['id']; ?></th>
        <th><?php echo $row['names']; ?></th>
        <th><?php echo $row['email']; ?></th>
        <th><?php echo $row['messages']; ?></th>
    </tr>
    <?php 
        }
    }else{
        echo "No Record Found";
    }
    ?>

</table>

</div>
</body>
</html>