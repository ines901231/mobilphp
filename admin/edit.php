<?php 
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["car_id"];

$m = query("SELECT * FROM car WHERE car_id = $id")[0];

if (isset($_POST["submit"])) {

    if(ubah($_POST) >0 ) {
        echo "Data telah berhasil diubah";
    } else if(ubah($_POST) ==0 ) {
        echo "Tolong ubah data";
    } else {
        echo "Data tidak berhasil diubah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="addedit.css">
</head>
<body>

    <!-- <h1>Tambah data mobil</h1> -->

    <div class="center">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="car_id" value="<?= $m["car_id"]; ?>">
            <input type="hidden" name="oldimg" value="<?= $m["gambar"]; ?>">
            <div class="field">
                <input type="text" name="car_name" id="car_name" value="<?= $m["car_name"]; ?>">
                <label for="car_name">Nama</label>
            </div>
            <div class="field">
                <input type="text" name="car_brand" id="car_brand" value="<?= $m["car_brand"]; ?>">
                <label for="car_brand">Brand</label>
            </div>
            <div class="field">
                <input type="text" name="car_year" id="car_year" value="<?= $m["car_year"]; ?>">
                <label for="car_year">Tahun</label>      
            </div>
            <div class="field">
                <input type="text" name="color" id="color" value="<?= $m["color"]; ?>">
                <label for="color">Warna</label>
            </div>
            <div class="field">
                <input type="text" name="deskripsi" id="deskripsi" value="<?= $m["deskripsi"]; ?>">
                <label for="deskripsi">Deskripsi</label>
            </div>
            <div class="field2">
                <label for="gambar">Gambar</label>
                <img src="img/<?= $m["gambar"]; ?>" alt="" width="100">
                <br>
                <br>
                <input type="file" name="gambar" id="gambar">
            </div>
                <button class="btn" type="submit" name="submit">UPLOAD</button>
            <div class="back">
                <a href="index.php">Kembali ke <span>daftar mobil</span></a>
            </div>
        </form>
    </div>
    
</body>
</html>