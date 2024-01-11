<?php
session_start();
require 'functions.php';

if(isset($_SESSION["login"])) {
    header("Location: ../booking/index.php");
    exit;
}

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $check = mysqli_query($horizon, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($check) ===1 ) {
        $row = mysqli_fetch_assoc($check);
        if(password_verify($password, $row["password"])) {

            $_SESSION["login"] = true;

            header("Location: ../booking/index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>

        <?php if(isset($error)) : ?>
            <p>username/password salah</p>
        <?php endif; ?>

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
            <div class="forg">Forgot Password?</div>
            <input class="btn" type="submit" name="login" value="Login">
            <div class="signup">
                Don't have account? <a href="register.php">Signup</a> here!
            </div>
        </form>
    </div>
</body>
</html>