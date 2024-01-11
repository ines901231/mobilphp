<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mobil = query("SELECT * FROM car");

if(isset($_POST["cari"])) {
    $mobil = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="utama.css">
</head>
<body>
    
    <div class="logot">
        <a href="../booking/index.php">Logout</a>
    </div>
    
    <h1>Daftar mobil</h1>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" id="" placeholder="Type here" autofocus autocomplete="off">
        <button type="submit" name="cari">Search</button>
    </form>

    <br><br><br>
    <div class="edd">
        <a href="add.php">Tambah mobil ke database</a>
    </div>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Action</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Brand</th>
            <th>Tahun</th>
            <th>Warna</th>
            <th>Deskripsi</th>
        </tr>
    <?php $i=1 ?>
    <?php foreach($mobil as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?car_id=<?= $row["car_id"]; ?>">EDIT</a> /
                <a href="hapus.php?car_id=<?= $row["car_id"]; ?>" onclick="return confirm('yay or nay');">DELETE</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" width="100"></td>
            <td><?= $row["car_name"] ?></td>
            <td><?= $row["car_brand"] ?></td>
            <td><?= $row["car_year"] ?></td>
            <td><?= $row["color"] ?></td>
            <td><?= $row["deskripsi"] ?></td>
        </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    </table>

</body>
</html>