<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
	
	$about1 = $_POST['about1'];
	$about2 = $_POST['about2'];

	$sql = "UPDATE about SET about1='$about1', about2='$about2'";
	$query = mysqli_query($connect, $sql);
	if ($query) {
		header('Location: admin.php');
	}else{
		header('Location: editabout.php?status=gagal');
	}
}
?>