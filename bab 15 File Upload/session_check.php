<?php
//start session
session_start();

//Mengecek dan mendapatkan SESSION status
if(isset($_SESSION["status"])) $sessionStatus = $_SESSION["status"];
else $sessionStatus = false;

//Menegecek dan  mendapatkan data nama
if(isset($_SESSION["name"])) $sessionName = $_SESSION["name"];
else $sessionName = "";

//Menegecek dan  mendapatkan data email
if(isset($_SESSION["email"])) $sessionEmail = $_SESSION["email"];
else $sessionEmail = "";

?>