<?php
require_once("connection.php");

//Mengecek dan mendapatkan data session
require_once("session_check.php");

$query = "SELECT * FROM barang";
$result = mysqli_query($mysqli, $query);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database Toko</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<script type="text/javascript">
		function confirm_delete() {
			return confirm("Anda Yakin?");
		}
	</script>
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
						<a href="#" class="nav-link" aria-current="page">Daftar Barang</a>
					</li>
					<?php if ($sessionStatus == false) : ?>

					<li class="nav-item">
						<a href="login.php" class="nav-link" aria-current="page">Login Admin</a>
					</li>

					<?php  else : ?>

					<li class="nav-item">
						<a href="logout.php" class="nav-link" aria-current="page">Log Out <?=$sessionName?></a>
					</li>

					<?php endif; ?>

				</ul>
			</div>
		</div>
	</nav>

	<div id="barang-list">
		<div class="container">

			<?php if ($sessionStatus) : ?>

			<div class="rom mb-4">
				<div class="col">
					<h2>DAFTAR BARANG</h2>
				</div>
				<div class="col text-end">
					<a href="form_barang.php" class="btn btn-primary" role="button">Tambah Barang</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
								<tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">ID Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
						</thead>
						<tbody>
							<?php
							$i = 1;

							foreach ($result as $barang) {

								if ( $barang['foto'] == null || empty ($barang["foto"]) ) {
									$barang['foto'] = 'img/topi.jpg';
								}


								echo '<tr>
									<th scope="row">' . $i++. '</th>
									<td><img src="' . $barang["foto"] . '"</td>
									<td>' . $barang["id_barang"] . '</td>
									<td>' . $barang["nama_barang"] . '</td>
									<td>' . $barang["harga"] . '</td>
									<td>

										<a href="form_edit_toko.php?id_barang=' . $barang["id_barang"] .
																"&harga=" . $barang["harga"] .
																"&foto=" . $barang["foto"] .
																"&nama_barang=" . $barang["nama_barang"] .'">Edit</a>
										<a href="delete.php?id_barang=' . $barang["id_barang"] . '" onclick="return confirm_delete()"">Delete</a>

									</td>                             
								</tr>';

							}

						?>
						</tbody>
					</table>
				</div>
			</div>
		<?php else : ?>
		<div class="row">
                    <div class="col center">
                        <h2>Login Terlebih Dahulu!</h2>
                    </div>
                </div>

		<?php endif; ?>
		</div>
	</div>
</body>
</html>