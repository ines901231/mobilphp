<?php 
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {

    if(tambah($_POST) >0 ) {
        echo "Data telah berhasil ditambahkan";
    } else if(tambah($_POST) ==0 ) {
        echo "Tolong tambahkan data dengan benar";
    } else {
        echo "Data tidak berhasil ditambahkan";
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
            <div class="field">
                <input type="text" name="car_name" id="car_name">
                <label for="car_name">Nama</label>
            </div>
            <div class="field">
                <input type="text" name="car_brand" id="car_brand">
                <label for="car_brand">Brand</label>
            </div>
            <div class="field">
                <input type="text" name="car_year" id="car_year">
                <label for="car_year">Tahun</label>      
            </div>
            <div class="field">
                <input type="text" name="color" id="color">
                <label for="color">Warna</label>
            </div>
            <div class="field">
                <input type="text" name="deskripsi" id="deskripsi">
                <label for="deskripsi">Deskripsi</label>
            </div>
            <div class="field2">
                <input type="file" name="gambar" id="gambar">
                <label for="gambar"></label>
            </div>
                <button class="btn" type="submit" name="submit">ADD</button>
            <div class="back">
                <a href="index.php">Kembali ke <span>daftar mobil</span></a>
            </div>
        </form>
    </div>
    
</body>
</html>