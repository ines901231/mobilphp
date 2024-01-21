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
    <title>Select Payment Method</title>
    <link rel="stylesheet" href="cssreset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <div class="container4">
        <div class="titl4">
            <h3>Pricing</h3>
        </div>
        <table>
            <tr>
                <th>Brands</th>
                <th>1 Day(s)</th>
                <th>3 Day(s)</th>
                <th>1 Week</th>
                <th>Available</th> 
            </tr>
            <tr>
                <td><img src="./icon/alfa.png" alt=""></td>
                <td>Rp 5.095.250</td>
                <td>Rp 15.285.750</td>
                <td>Rp 35.666.750</td>
                <td>Yes</td>
            </tr>
            <tr class="abu">
                <td><img src="./icon/audi.png" alt=""></td>
                <td>Rp 14.200.000</td>
                <td>Rp 42.600.000</td>
                <td>Rp 99.400.000</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><img src="./icon/chev.png" alt=""></td>
                <td>Rp 16.000.000</td>
                <td>Rp 48.000.000</td>
                <td>Rp 112.000.000</td>
                <td>Yes</td>
            </tr>
            <tr class="abu">
                <td><img src="./icon/merc.png" alt=""></td>
                <td>Rp 10.300.000</td>
                <td>Rp 30.900.000</td>
                <td>Rp 72.100.000</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><img src="./icon/niss.png" alt=""></td>
                <td>Rp 22.250.000</td>
                <td>Rp 66.750.000</td>
                <td>Rp 155.750.000</td>
                <td>Yes</td>
            </tr>
            <tr class="abu">
                <td><img src="./icon/pors.png" alt=""></td>
                <td>Rp 27.500.000</td>
                <td>Rp 82.500.000</td>
                <td>Rp 192.500.000</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><img src="./icon/toyo.png" alt=""></td>
                <td>Rp 9.841.000</td>
                <td>Rp 29.523.000</td>
                <td>Rp 68.887.000</td>
                <td>Yes</td>
            </tr>

        </table>
    </div>
    <div class="accept">
        <p>Decided? Click <a href="https://linktr.ee/dewede06" target="_blank">Here</a> to order!</p>
    </div>
</body>
</html>