<?php
    
function checkLogin($connect) {
	global $connect;
    if(isset($_SESSION['username'])) {
        $id = $_SESSION['username'];
        $query = "SELECT * FROM user WHERE username = '$id' limit 1";

        $result = mysqli_query($connect,$query);
        if ($result && mysqli_num_rows($result) > 0) {
            $users = mysqli_fetch_assoc($result);
            return $users;
        }
    }
    
    // Redirect to login
    header("location: admin.php");
    die;
}

?>