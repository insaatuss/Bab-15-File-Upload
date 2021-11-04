<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
    <!-- memanggil bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Memanggil css external -->
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <!-- Header -->
    <?php
    require('navbar.php');
    ?>
   <div id="form" class="pt-5">

        <div class="container">

            <div class="row d-flex justify-content-center">

                <div class="col col-8 p-4 bg-light">

                    <form action="action_register.php" method="POST">

                        <div class="form-group mb-2">
                            <label for="email">Alamat Email</label>
                            <input name="email" id="email" class="form-control" type="email" placeholder="Alamat Email" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Nama Lengkap</label>
                            <input name="name" id="name" class="form-control" type="text" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="passwod">Password</label>
                            <input name="password" id="password" class="form-control" type="password" placeholder="Password" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="password">Konfirmasi Password</label>
                            <input name="re-password" id="re-password" class="form-control" type="password" placeholder=" Ulangi Password" required>
                        </div>

                        <input name="submit" type="submit" value="Kirim" class="btn btn-primary ">

                    </form>

                </div>

            </div>

        </div>

    </div>
    
</body>
</html>