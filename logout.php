<?php 

session_start();

require_once("koneksi.php");

$_SESSION = [];
session_unset();

session_destroy();

header("location: login.php");

?>