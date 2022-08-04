<?php
include('config.php');
session_start();
if(isset($_POST['submit'])){ 
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'] ;

   
$select = " SELECT * FROM register WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0) {
   $_SESSION ['email'] = $email;

   header('location:home.php');
}else{
    $error[] = 'incorrect email or password';
}
}

?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>

    <body>
        <div class="form-container">
            <form action="" method="POST">
                <h3>Login Now</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                         echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>

                <input type="email" placeholder="Enter Email" name="email" required>
                <input type="password" placeholder="Enter Password" name="password" required>
                <input type="submit" value="Login now" class="form-btn" name=" submit">
                <p>don't have an account? <a href="register.php">Register Now</a>.</p>
            </form>
        </div>
    </body>

    </html>