<?php session_start();

include('login_php.php');

if(isset($_POST['submit']));
{
    $user_unsafe = $_POST['username'];
    $pass_unsafe = $_POST['pass'];

    $user = mysqli_real_escape_string($con,$user_unsafe);
    $pass = mysqli_real_escape_string($con,$pass_unsafe);

    $query = mysqli_query($con, "select * from accounts where username='$user' and pass='$pass'") or die(mysqli_error($con));
    $row=mysqli_fetch_array($query);

    $name=$row['username'];
    $counter=mysqli_num_rows($query);
    $id=$row['id'];

    if($counter ==0)
    {
        echo "<script type='text/javascript'>alert('Invalid Username or Password!');
        document.location='login.php'</script>";
    }
    else{
        //$_SESSION['id']=$id;
        $_SESSION['username']=$name;

        echo "<script type='text/javascript'>document.location= 'adminPanel.php' </script>";

    }


}

?>