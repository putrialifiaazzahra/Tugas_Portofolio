<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
	$id_profil = $_POST['id_profil'];
	$foto_profil = $_POST['foto_profil'];
	$nama_profil = $_POST['nama_profil'];
    $status = $_POST['status'];

	$sql = "UPDATE profil SET foto_profil='$foto_profil', nama_profil='$nama_profil', status='$status'";
	$query = mysqli_query($connect, $sql);
	if ($query) {
		header('Location: admin.php');
	}else{
		header('Location: editprofil.php?status=gagal');
	}
}
?>