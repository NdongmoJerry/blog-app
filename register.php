<?php
include('config.php');

if(isset($_POST['submit'])){ 
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'] ;

    $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {
         $error[] =  'user already exist!';

    }else{  
    if($pass != $cpass){
            $error[] = 'password not matched!';
  }else{
    $query = "INSERT INTO register( name, email, password, user_type)
    VALUES('$name', '$email', '$pass', '$user_type')";
        }

 $run = mysqli_query($conn, $query) or die(mysqli_error());
 header('location:login.php');
 if($run){
    echo "submission successful";
 }else{
    echo "not successfully submitted";
 }
}

}

?>


<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>

    <body>
        <div class="form-container">
            <form action="" method="post">
                <h3>Register Now</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                         echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>

                <input type="text" name="name" placeholder="Enter Name" required>
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
                <select name="user_type">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
                <input type="submit" name="submit" value="Register now" class="form-btn">
                <p>already have an account? <a href="login.php">login now</a></p>

            </form>
        </div>
    </body>

    </html>