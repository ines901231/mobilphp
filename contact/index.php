<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: ../admin/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Our Website Great Again!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssreset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
</head>
<body>
    <nav class="header"> 
        <input type="checkbox" id="check">
        <label for="check" class="checkbut">
            <i class="fa fa-bars"></i>
        </label>
        <a href="../landing2/index.html"><img class="forza" src="forza.png" alt=""></a>
        <ul>
            <li><a href="../booking/index.php">Book a Car</a></li>
            <li><a href="../gallery/index.php">Gallery</a></li>
            <li><a href="../payment/index.php">Pricing</a></li>
            <li><a href="../contact/index.php">Feedback</a></li>
        </ul>
    </nav>

    <div class="container5">
        <h3>Send Us Feedback!</h3>
        <div class="feedback">
            <form action="">
                <input type="text" class="input" placeholder="Name">
                <input type="email" class="input" placeholder="Email">
                <input type="text" class="input" placeholder="Subject">
                <textarea type="text" class="input areatext" placeholder="Type your message"></textarea>
                <button onclick="myFunction()" type="button" class="btn">SEND!</button>
            </form>
        </div>
    </div>
    


</body>
</html>