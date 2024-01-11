<?php
// koneksi ke database
$horizon = mysqli_connect("localhost", "root", "", "car");

function query($query) {
    global $horizon;
    $result = mysqli_query($horizon, $query);
    $wadah = [];
    while($row = mysqli_fetch_assoc($result)) {
        $wadah[] = $row;
    }
    return $wadah;
}

function tambah($data) {
    global $horizon;

    $car_name = $data["car_name"];
    $car_brand = $data["car_brand"];
    $car_year = $data["car_year"];
    $color = $data["color"];
    $deskripsi = ["deskripsi"];

    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO car 
            VALUES
            (NULL, '$car_name', '$car_brand', '$car_year', '$color', '$deskripsi', '$gambar')
            ";
    mysqli_query($horizon, $query);

    return mysqli_affected_rows($horizon);
}

function upload() {
    $filename = $_FILES['gambar']['name'];
    $filesize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    if($error === 4) {
        echo "<script>
                alert('anda belum mengupload gambar');
            </script>";
        return false;
    }

    $validext = ['png', 'jpeg', 'jpg', 'jfif'];
    $ext = explode('.', $filename);
    $ext = strtolower(end($ext));
    if(!in_array($ext, $validext)) {
        echo "<script>
                alert('anda perlu mengupload gambar');
            </script>";
        return false;
    }

    if($filesize>5000000) {
        echo "<script>
                alert('anda perlu mengompres ukuran gambar, tidak lebih dari 5mb');
            </script>";
        return false;
    }

    $imgname = uniqid();
    $imgname .= '.';
    $imgname .= $ext;


    move_uploaded_file($tmpname, 'img/' . $imgname);
    return $imgname;
}

function hapus($id) {
    global $horizon;
    mysqli_query($horizon, "DELETE FROM car WHERE car_id = $id");

    return mysqli_affected_rows($horizon);
}

function ubah($data) {
    global $horizon;

    $id = $data["car_id"];
    $car_name = $data["car_name"];
    $car_brand = $data["car_brand"];
    $car_year = $data["car_year"];
    $color = $data["color"];
    $deskripsi = $data["deskripsi"];
    $oldimg = $data["oldimg"];

    if($_FILES['gambar']['error'] === 4) {
        $gambar = $oldimg;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE car SET 
                car_name = '$car_name',
                car_brand = '$car_brand',
                car_year = '$car_year', 
                color = '$color', 
                deskripsi = '$deskripsi',
                gambar = '$gambar'
                WHERE car_id = $id";

    mysqli_query($horizon, $query);

    return mysqli_affected_rows($horizon);
}

function cari($keyword) {
    $query = "SELECT * FROM car WHERE 
            car_name LIKE '%$keyword%' OR
            car_brand LIKE '%$keyword%' OR
            car_year LIKE '%$keyword%' OR
            color LIKE '%$keyword%' OR 
            deskripsi LIKE '%$keyword%'
            ";
    return query($query);
}

function register($data) {
    global $horizon;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($horizon, $data["password"]);

    $check = mysqli_query($horizon, "SELECT username FROM users WHERE username = '$username'"); 
    if(mysqli_fetch_assoc($check)) {
        echo "<script> 
                alert ('Username telah digunakan');
            </script>";
            return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($horizon, "INSERT INTO users VALUES (NULL, '$username', '$password')");
    return mysqli_affected_rows($horizon);
}



?>