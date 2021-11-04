<?php
require_once("connection.php");

//Mendapatkan data ID Barang
if( isset($_POST["id_barang"])) $id_barang = $_POST["id_barang"];
else{
    echo "ID Brang tidak ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

//Query Get Data Barang
$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";

//Eksekusi Query
$result = mysqli_query($mysqli, $query);


foreach( $result as $barang){

    $id_barang = $barang["id_barang"];
    $nama_barang = $barang["nama_barang"];
    $harga = $barang["harga"];

    if( isset($_POST['id_barang'])) $id_barang = $_POST['id_barang'];

    if( isset($_POST['nama_barang'])) $nama_barang = $_POST['nama_barang'];

    if( isset($_POST['harga'])) $harga = $_POST['harga'];

    //Menyiapkan Query MySQL untuk dieksekusi
    $query ="UPDATE barang SET
    id_barang ='{$id_barang}',
    nama_barang ='{$nama_barang}',
    harga ='{$harga}'
    WHERE id_barang = '{$id_barang}'";

    //Mengeksekusi MySQL Query
    $update = mysqli_query($mysqli, $query);

    
    if( $update == false){
        echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
    } else{
        header("Location: index.php");
    }
}

?>