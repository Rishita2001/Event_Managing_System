
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Log in</title>
    <style>
    div.top{
            font-family: sans-serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: #204969;
            color: whitesmoke;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="top"></div>
    <div class="logo">
    <img src="images/tflogo.png" alt="logo" class="tflogo"></div>
    <div class="loginbox">
    <img src="images/pic20.webp" alt="login" class="avatar">
        <h1>Login Here</h1>


        <form action="login_process.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password"required>
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot password?</a><br> 
            <a href="#">Don't have an account?</a>
        </form>




   



</body>
</html>
