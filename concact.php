<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];

    if(empty($nama) || empty($email) || empty($pesan))
    {
        header('location: index.php?error');
    }else {
        $sql = "INSERT INTO concact (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
        $query = mysqli_query($connect,$sql);
        
        header('location: index.php?success');
    }
    

	// $sql = "INSERT INTO concact (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    // $query = mysqli_query($connect,$sql);
    // if ($query) {
    //     header('location: index.php');
    // }else{
    //     header('location: concact.php?status=gagal');
    // }
}
?>