<?php
if(isset($_POST["submit"])) {
    if($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        header("Location: index.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    
    <div class="center">
        <h1>Admin Login</h1>
        <?php if(isset($error)) : ?>
            <p>username/password salah</p>
        <?php endif; ?>
            <form action="" method="post">
                <div class="field">
                    <input type="text" name="username" id="username" required autocomplete="off">
                    <span></span>
                    <label for="username">Username</label>
                </div>
                <div class="field">
                    <input type="password" name="password" id="password" required>
                    <span></span>
                    <label for="password">Password</label>
                </div>
                <div class="forg">Forgot Password?</div>
                <input class="btn" type="submit" name="submit" value="Login">
                <div class="signup">
                    Already have account? <a href="login.php">Login</a> here!
                </div>
            </form>
    </div>

</body>
</html>