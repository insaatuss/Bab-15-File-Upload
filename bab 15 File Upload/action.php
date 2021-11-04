<?php

require_once("connection.php");

//status tidak error
$error = 0;


//memvalidasi inputan
if( isset($_POST['id_barang']) ) $id_barang = $_POST['id_barang'];
else $error = 1; //status error

if( isset($_POST['nama_barang']) ) $nama_barang = $_POST['nama_barang'];
else $error = 1; //status error

if( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1; //status error



if($error == 1){
    echo "Terjadi Kesalahan pada proses input data";
    exit();
}

//Menyiapkan Query MySQL untuk dieksekusi
$query = "INSERT INTO barang(id_barang, nama_barang, harga)
VALUES
('{$id_barang}','{$nama_barang}','{$harga}');";

//Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);



if( $insert == false ){
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
}else{
    header("Location: index.php");
}

?>