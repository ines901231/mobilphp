<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["car_id"];

if(hapus($id) >0 ) {
    echo "<script> 
            alert('Data telah berhasil dihapus');
            document.location.href = 'index.php';
         </script>";
} else {
    echo "<script> 
            alert('Data tidak berhasil dihapus');
            document.location.href = 'index.php';
         </script>";
}

?>