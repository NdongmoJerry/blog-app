<?php
include('config.php');

if(isset($_POST['login'])){ 

    $name = $_POST['username'] ;
    $password = $_POST['password'];
  
    $query = "INSERT INTO login( username,  password)
    VALUES('$username', '$password')";


 $run = mysqli_query($conn, $query) or die(mysqli_error());
 if($run){
    echo "submission successful";
 }else{
    echo "not successfully submitted";
 }
 

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
<a href="logout.php">Logout</a>
    <form action=" #" method="post">
        <div class="container">
            <div class="form-control">
                <label for=" name">Username</label>
                <input type="text" placeholder="Enter Username" name="username" required>
            </div>
            <div class="form-control">
                <label for="psw"> Password</label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <div class="form-control">
                <button type="submit" name="login">Login</button>
            </div>
            <div class="form-control">
                <label>
                <a href="registration.php">Click to Login</a>
                </label>
            </div>
        </div>
        <div class="container">
            <span class="psw">Forgot <a href="">password?</a></span>
        </div>
    </form>
</body>

</html>