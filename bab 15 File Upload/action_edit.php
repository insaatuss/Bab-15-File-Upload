<?php
require_once("connection.php");

//Mendapatkan data ID Barang
if( isset($_POST["id_barang"])) $id_barang = $_POST["id_barang"];
else{
    echo "ID Barang tidak ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

//Query Get Data Barang
$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";

//Eksekusi Query
$result = mysqli_query($mysqli, $query);


foreach( $result as $barang){
    $foto = $barang['foto'];
}

    $id_barang = $barang["id_barang"];
    $name_barang = $barang["nama_barang"];
    $harga = $barang["harga"];

    if( isset($_POST['id_barang'])) $id_barang = $_POST['id_barang'];

    if( isset($_POST['nama_barang'])) $name_barang = $_POST['nama_barang'];

    if( isset($_POST['harga'])) $harga = $_POST['harga'];


//mengambil data upload
$files = $_FILES['foto'];
$path = "img/";

//menangani file upload
if (!empty ($files['nama_barang']) ) {
    $filepath = $path . $files["nama_barang"];

    $upload = move_uploaded_file($files["tmp_name"], $filepath );

    if ($upload) {
        unlink($foto);
    }
}
else {
    $filepath = $foto;
    $upload = false;
}

//menangani error saat upload
if ($upload != true && $filepath != $foto) {
    exit ("Gagal mengupload foto <a href='index.php'>Kembali</a>");
}

    //Menyiapkan Query MySQL untuk dieksekusi
    $query ="UPDATE barang SET
    id_barang ='{$id_barang}',
    nama_barang ='{$name_barang}',
    harga ='{$harga}',
    foto = '{$filepath}'
    WHERE id_barang = '{$id_barang}'";

    //Mengeksekusi MySQL Query
    $insert = mysqli_query($mysqli, $query);

    
    if( $insert == false){
        echo "Error dalam mengubah data. <a href='form_edit.php'>Kembali</a>";
    } else{
        header("Location: index.php");
    }


?>