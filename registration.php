<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css" type="text/css">
</head>
<form action="" method=" POST">
    <div class=" container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <label for="psw-repeat">Repeat Password</label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>
    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>

<body>

</body>

</html>