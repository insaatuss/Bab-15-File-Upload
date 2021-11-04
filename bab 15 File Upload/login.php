<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Admin</title>
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
						<a href="index.php" class="nav-link" aria-current="page">Daftar Siswa</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div id="form" class="pt-5">

		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col col-8 p-4 bg-light">

				<h2 class="mb-4">Login Admin</h2>

					<form method="POST" action="action_login.php">
						<div class="form-group mb-2">
							<label for="email">e-mail</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Masukkan e-mail" required>
						</div>

						<div class="form-group mb-2">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" required>
						</div>

						<input type="submit" value="Masuk" name="submit" class="btn btn-primary">

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>