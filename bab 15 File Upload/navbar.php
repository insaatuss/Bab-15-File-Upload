<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="#">
                <p>insaatuss.</p>
            </a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collaplse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Daftar Barang</a>
                    </li>
                    <?php if( $sessionStatus == false ) : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login Admin</a>
                    </li>
                    <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">Log Out</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>

</nav>