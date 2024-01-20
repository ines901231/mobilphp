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
    <title>Customer's Best Shot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssreset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="script.js"></script>
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

    <div class="container3">
        <div class="heading3">
            <h3>Photo <span>Gallery</span></h3>
        </div>
        <div class="box">

            <div class="dream hidden">
                <img src="./pict/1.png" alt="">
                <img src="./pict/2.png" alt="">
                <img src="./pict/3.png" alt="">
                <img src="./pict/4.png" alt="">
            </div>

            <div class="dream hidden">
                <img src="./pict/5.png" alt="">
                <img src="./pict/6.png" alt="">
                <img src="./pict/7.png" alt="">
            </div>

            <div class="dream hidden">
                <img src="./pict/8.png" alt="">
                <img src="./pict/10.png" alt="">
                <img src="./pict/11.png" alt="">
            </div>

        </div>
    </div>
    
</body>
</html>