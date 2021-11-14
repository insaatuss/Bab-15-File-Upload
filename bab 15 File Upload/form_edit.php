<?php

require_once("connection.php");

//Status tidak error
$error = 0;


// Mendapatkan data Kode Barang
if ( isset($_GET["id_barang"]) ) $id_barang = $_GET["id_barang"];
else echo "Kode barang tidak ditemukan! <a href='index.php'>Kembali</a>";

$query = " SELECT * FROM barang WHERE id_barang = '{$id_barang}'";

$result = mysqli_query( $mysqli, $query);

foreach ( $result as $barang) {

    $foto = $barang["foto"];
    $id_barang = $barang["id_barang"];
    $name_barang = $barang["nama_barang"];
    $harga = $barang["harga_barang"];

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Toko</title>
    <!-- memanggil bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Memanggil css external -->
    <link href="style.css" rel="stylesheet" />
</head>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Form</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<!-- Navbar-brand -->
			<a href="#" class="navbar-brand">
				<p>insaatuss.</p>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar Collapse -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a href="index.php" class="nav-link" aria-current="page">Daftar Barang</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="form" class="pt-5">

		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col col-8 p-4 bg-light">

				<form action="action_edit.php" method="POST" enctype="multipart/form-data">

					<?php if ( !is_null($foto) && !empty($foto)) : ?>
						
						<div class="form-group mb-2">
							<img src="<?=$foto?>" alt="" class="preview">
							<a href="delete.php?id=<?=$id_barang?>">Delete</a>
						</div>
						
					<?php endif; ?>

						<div class="form-group mb-2">
                            <label for="foto">Foto</label>
                            <input name="foto" id="foto" class="form-control" type="file" >
                        </div>

						<div class="form-group mb-2">
							<label for="ID_barang">ID Barang</label>
							<input type="text" id="ID_barang" name="ID_barang" class="form-control" placeholder="Ex: ID001" required>
						</div>

						<div class="form-group mb-2">
							<label for="name">Nama Barang</label>
							<input type="text" id="name" class="form-control" name="name" placeholder="Masukkan Nama Barang" required>
						</div>

						<div class="form-group mb-2">
							<label for="harga">Harga</label>
							<input type="number" id="harga" name="harga" class="form-control" placeholder="ex: 65000" required>
						</div>

						<input type="submit" value="kirim" name="submit" class="btn btn-primary">

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>