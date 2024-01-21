<?php
require 'functions.php';

    if (isset($_POST["register"])) {
        if (register($_POST) > 0 ) {
            echo "<script> 
                    alert ('Data anda telah didaftarkan!');
                    window.location.href = 'login.php';
                </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="account.css">
    <script src="confirm.js"></script>
</head>
<body>
    
    <div class="center">
        <h1>Register</h1>
        <form action="" method="post">
            <div class="field">
                <input type="text" name="username" id="username" required>
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="field">
                <input type="password" name="password" id="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <div class="field">
                <input type="password" id="confirm_password" required>
                <span></span>
                <label for="password">Confirm Password</label>
            </div>
            <input class="btn" type="submit" name="register" value="Register">
            <div class="signup">
                Already have account? <a href="login.php">Login</a> here!
            </div>
        </form>
    </div>

</body>
</html>