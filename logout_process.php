<?php

session_start();
if(empty($_SESSION['username'])):
    header('Location:login.php');
endif;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width: 350px; margin: auto; height: 500px; margin-top:300px;">

    <?php
    include('login_php.php');
    session_destroy();
    echo '<meta http-equiv="refresh" content="2;url=login.php"';
    echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
    echo '<span class="itext">Logging out please wait!...</span>';


    ?>
    </div>
</body>
</html>