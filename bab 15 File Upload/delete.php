<?php
require_once("connection.php");

//Mendapatkan Data barang
if ( isset ($_GET["id_barang"]) ) $id_barang = $_GET["id_barang"];
else {
    echo "ID barang tidak ditemukan <a href='index.php'>Kembali</a>";
    exit();
}

//Query get data barang
$query = "DELETE FROM barang WHERE id_barang = '{$id_barang}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ( $result as $barang) {
    $foto = $barang["foto"];
}

if ( !is_null($foto) && !empty($foto) ) {
    $remove = unlink($foto);

    if ( $remove ) {

        // Menyiapkan Query MySQL untuk Dieksekusi
        $query = " UPDATE barang SET 
            foto = NULL
            WHERE id_barang = '{$id_barang}' ";

        // Mengeksekusi Query MySQL
        $insert = mysqli_query($mysqli, $query);
    }

}

header("Location: form_edit.php?id={$id_barang}");

?>