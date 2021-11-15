<?php

require_once("connection_toko.php");

//Mendapatkan data barang
if ( isset($_GET["id_barang"]) ) $id_barang = $_GET["id_barang"];
else {
    echo "Id Barang Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

// Query get data barang
$query = "SELECT * FROM toko WHERE id_barang = '{$id_barang}'";

//Eksekusi barang
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ($result as $barang) {
    $foto = $barang["foto"];
}

if ( !is_null($foto) && !empty($foto) ) {
    $remove = unlink($foto);

    if ( $remove ) {
        //Menyiapkan Query mysql untuk di eksekusi
        $query = " UPDATE barang SET
                foto = NULL
                WHERE id_barang = '{$id_barang}'";

        // Mengeksekusi mysql query
        $insert = mysqli_query($mysqli, $query);

    }

} 

header ("Location: 'form_edit.php?id_barang={$id_barang}'");


?>