<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: ../admin/login.php");
    exit;
}

require '../admin/functions.php';
$mobil = query("SELECT * FROM car");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>With The Best Brands</title>
    <link rel="stylesheet" href="cssreset.css">
    <link rel="stylesheet" href="style.css">
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
            <li><a class="logot" href="../admin/logout.php">Log Out</a></li>
        </ul>
    </nav>

    <div class="container2">

        <?php $i=1 ?>
        <?php foreach($mobil as $row) : ?>
            <div class="card2 hidden">
                <img class="cardimage" src="../admin/img/<?= $row["gambar"] ?>" alt="">
                <h2><?= $row["car_name"] ?></h2>
                <p><?= $row["deskripsi"] ?></p>
                <a href="../payment/index.php" target="_blank">BOOK NOW</a>
            </div>
        <?php $i++ ?>
        <?php endforeach; ?>

        <!-- <div class="card2 hidden">
            <div class="cardimage slk55"></div>
            <h2>SLK 55 AMG</h2>
            <p>Mercedes-Benz SLK 55 AMG is a high-performance roadster featuring a powerful V8 engine, sleek design, and luxurious interior, offering an exhilarating blend of style and performance.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div>
        <div class="card2 hidden">
            <div class="cardimage giulia"></div>
            <h2>Giulia Quadrifoglio</h2>
            <p>Alfa Romeo Giulia Quadrifoglio is an exhilarating sports sedan by Alfa Romeo, featuring a potent V6 engine, dynamic Italian design, and a luxurious interior for a thrilling driving experience.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div>
        <div class="card2 hidden">
            <div class="cardimage gt86"></div>
            <h2>GT86</h2>
            <p>Toyota GT86 is a sleek and agile sports car, known for its rear-wheel-drive dynamics, boxer engine, and precise handling, offering enthusiasts an engaging and exhilarating driving experience.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div>
        <div class="card2 hidden">
            <div class="cardimage tts"></div>
            <h2>TTS Coupé</h2>
            <p>Audi TTS Coupé is a high-performance luxury sports car, featuring a turbocharged engine, Quattro all-wheel drive, cutting-edge technology, and a stylish design for an exhilarating driving experience.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div>
        <div class="card2 hidden">
            <div class="cardimage fair"></div>
            <h2>Fairlady Z</h2>
            <p>Nissan Fairlady Z, also known as the Nissan 370Z, is a sporty coupe by Nissan with a potent engine, sleek design, and engaging performance, offering driving enthusiasts excitement on wheels.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div>
        <div class="card2 hidden">
            <div class="cardimage cayman"></div>
            <h2>718 Cayman GTS</h2>
            <p>Porsche 718 Cayman GTS is a high-performance sports car, with a powerful flat-four engine, impeccable handling, and a sleek design, delivering an exhilarating and refined driving experience.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div>
        <div class="card2 hidden">
            <div class="cardimage c8"></div>
            <h2>C8 Corvette Stingray</h2>
            <p>Chevrolet Corvette Stingray C8 is a striking sports car by General Motors, featuring a mid-engine design, potent V8 power, and advanced technology, delivering an exciting and dynamic driving experience.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div>
        <div class="card2 hidden">
            <div class="cardimage carrera"></div>
            <h2>911 Carrera S</h2>
            <p>Porsche 911 Carrera S, an iconic sports car, blends timeless design with formidable performance, powered by a potent engine, advanced technology, and precise handling for an exhilarating driving experience.</p>
            <a href="../payment/index.php" target="_blank">BOOK NOW</a>
        </div> -->

    <!-- <script type="text/javascript">
        var marker = document.querySelector('marker');
        var item = document.querySelector('nav ul li a');

        function indicator(e) {
            marker.style.left = e.offsetLeft+"px";
            marker.style.width = e.offsetWidth+"px";
        }

        item.foreach(Link => {
            link.addEventListener('click', (e) => {
                indicator(e.target);
            })
        })
    </script> -->

    </div>
    <div class="kembali">
            <a href="../admin/index.php">here</a>
    </div>
</body>
</html>