<?php

require_once("connection_toko.php");

// status tidak error
$error = 0;

//Memvalidasi Inputan

if ( isset($_POST['id_barang']) ) $id_barang = $_POST['id_barang'];
else $error = 1; //Status error
if ( isset($_POST['nama_barang']) ) $name_barang = $_POST['nama_barang'];
else $error = 1; //Status error
if ( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1; //Status error

if ( $error == 1 ) {
    echo "Terjadi kesalahan pada proses input data";
    exit();

}

// Mengambil data file upload
$files = $_FILES['foto'];
$path = "img/";

//Menangani file upload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];
    $upload = move_uploaded_file($files["tmp_name"], $filepath);
}
else {
    $filepath = "";
    $upload = false;
}

//Menangani error saat upload file
if ( $upload != true && $filepath = "") {
    exit("Gagal Mengupload file! <a href='form_barang.php'>Kembali</a>");
}

$query = " INSERT INTO barang
        (id_barang, barang, harga, stok, foto)
        VALUES
        ('{$id_barang}', '{$name_barang}', '{$harga}', '{$filepath}'); ";

//Mengkseksekusi MsSQL query
$insert = mysqli_query($mysqli, $query);

//Menangani ketika error pada saaat eksekusi query

if ( $insert == false ) {
    echo "Error dalam menambahkan data <a href='index.php'>Kembali</a>";
} 
else {
    header("Location: index.php");
}
?>