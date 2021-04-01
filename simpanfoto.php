<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
$id_gallery = $_POST['id_gallery'];
$foto = $_POST['foto'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO gallery (id_gallery, foto, keterangan) VALUES ('$id_gallery', '$foto', '$keterangan')";
$query = mysqli_query($connect, $sql);
if ($query) {
	header('Location: admin.php');
}else{
	header('Location: simpanfoto.php?status=gagal');
}
}
?>