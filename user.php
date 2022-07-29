<?php
include('config.php');

if(isset($_POST['submit'])){ 

    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
  
    $query = "INSERT INTO user( name, email, username, phone, address, gender, password)
    VALUES('$name','$email','$username', '$phone', '$address', '$gender', '$password')";


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
    <title>user</title>
</head>

<body>

    <form action="registration.php" method="POST">

        <div class=" container">
            <div class="form-control">
                <label>Name</label>
                <input type="text" placeholder="Enter Name" name="name" required>
            </div>

            <div class="form-control">
                <label>Email</label>
                <input type="email" placeholder="Enter Email" name="email" required>
            </div>
            <div class="form-control">
                <label>Username</label>
                <input type="text" placeholder="Enter Username" name="username" required>
            </div>
            <div class="form-control">
                <label>Phone</label>
                <input type="number" placeholder="Enter Phone Number" name="phone" required>
            </div>
            <div class="form-control">
                <label>Address</label>
                <input type="text" placeholder="Enter Address" name="address" required>
            </div>
            <div class="form-control">
                <label>Gender</label>
                <input type="text" placeholder="Enter Gender" name="gender" required>
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" placeholder="Enter Password" name="password" id="psw" required>
            </div>
            <button type="submit" name="submit">Submit
            </button>
        </div>
</body>

</html>