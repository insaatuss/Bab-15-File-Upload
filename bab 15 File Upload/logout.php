<?php
//Start session
session_start();

//Menghapus semua session yang telah diidentifikasikan
session_destroy();

//Mengarahkan menuju halaman login
header("Location: login.php");
?>