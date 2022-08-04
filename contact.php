

<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){ 

    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $message = $_POST['message'];

$query = "INSERT INTO contact( name, email, message)
VALUES('$name', '$email', '$message')";

$run = mysqli_query($conn, $query) or die(mysqli_error());
if($run){
echo "Thanks for contacting us. We will get back you!";
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
    <title>Contact </title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Contact Us Now</h3>
            <input type="text" name="name" placeholder="Enter Name" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="text" name="message" placeholder="Message" class="comment" required>
            <input type="submit" name="submit" value="Submit" class="form-btn">
            <p>already have an account? <a href="login.php">login now</a></p>
        

        </form>
    </div>


</body>

</html>