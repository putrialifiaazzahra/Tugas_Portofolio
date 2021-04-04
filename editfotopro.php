<?php
include 'koneksi.php';

	if(isset($_POST['simpan'])) {
		$id_gallery = $_POST['id_gallery'];
		$foto = $_POST['foto'];
		$keterangan = $_POST['keterangan'];

		$sql = "UPDATE gallery SET foto='$foto', keterangan='$keterangan' WHERE id_gallery='$id_gallery'";
		$query = mysqli_query($connect, $sql);
		if ($query) {
			header('Location: admin.php');
		}else{
			header('Location: editfotopro.php?status=gagal');
		}
	}
?>