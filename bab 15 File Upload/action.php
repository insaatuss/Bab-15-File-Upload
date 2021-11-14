<?php

require_once("connection.php");

//status tidak error
$error = 0;


//memvalidasi inputan
if( isset($_POST['id_barang']) ) $id_barang = $_POST['id_barang'];
else $error = 1; //status error

if( isset($_POST['nama_barang']) ) $name_barang = $_POST['nama_barang'];
else $error = 1; //status error

if( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1; //status error



if($error == 1){
    echo "Terjadi Kesalahan pada proses input data";
    exit();
}

// Mengambil data file upload
$files = $_FILES['foto'];
$path = "img/";

// Menangani file upload
if ( !empty ($files['nama_barang']) ) {
    $filepath = $path . $files["nama_barang"];
    $upload = move_uploaded_file($files["tmp_name"], $filepath);
}
else {
    $filepath = "";
    $upload = false;
}

// Menangani error saat mengupload
if ( $upload != true && $filepath != "") {
    exit("Gagal mengupload file <a href='form_barang.php'>Kembali</a>");
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = " INSERT INTO barang
        (id_barang, nama_barang, harga_barang, foto_barang)
        VALUES
        ('{$id_barang}', '{$name_barang}', '{$harga}', '{$filepath}');";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href ='index.php'>Kembali</a>";
}
else {
    header("Location: index.php");
}

?>