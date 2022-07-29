<?php
include('connection.php');

if(isset($_POST['submit'])){ 

   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'] ;
    $query = "INSERT INTO register( email, password, repeat_password)
    VALUES('$email', '$password', '$repeat_password')";


 $run = mysqli_query($conn, $query) or die(mysqli_error());
 if($run){
    echo "submission successful";
 }else{
    echo "not successfully submitted";
 }
 

}

?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="registration.css" type="text/css">
    </head>

    <body>
        <div class=" container">

            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>

            <form action="" method="POST">

                <div class=" container">
                    <div class="form-control">
                        <label>Email</label>
                        <input type="text" placeholder="Enter Email" name="email"  required>
                    </div>
                    <div class="form-control">
                        <label>Password</label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                    </div>
                    <div class="form-control">
                        <label>Repeat Password</label>
                        <input type="password" placeholder="Repeat Password" name="repeat_password">
                    </div>
                </div>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" name=submit class="registerbtn">Submit</button>


                <div class="container signin">
                    <p>Already have an account? <a href="#">Sign in</a>.</p>
                </div>
        </div>
        </form>
        </div>
    </body>
    </html>