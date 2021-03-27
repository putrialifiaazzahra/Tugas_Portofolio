<?php
include 'koneksi.php';

if(isset($_GET['pesan'])) {
	header('Location: admin.php');
}

$pesan = $_GET['pesan'];

$sql = "DELETE FROM concact WHERE pesan='$pesan'";
$query = mysqli_query($connect, $sql);

if ($query) {
	header('Location: admin.php');
}else{
	header('Location: hapus.php?status=gagal');
}
?>