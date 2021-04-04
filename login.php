<?php 

require_once("koneksi.php");
require_once("function.php");
session_start();

    if (isset($_SESSION['login'])) {
        header("location: admin.php");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if (!empty($username) &&  !empty($password) && !is_numeric($username)) {
            // Read to database
            $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($connect, $query);
            
            if (mysqli_num_rows($result) === 1) {
                $users = mysqli_fetch_assoc($result);
                if ($users['password']) {
                    $_SESSION['login'] = $users['username'];
                    header("location: admin.php");
                    die;
                }
            }
        } else {
            header("location: login.php");
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Account</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Style -->
    <style>
    .container {
        padding: 10px;
        margin-top: 6.5rem;
    }

    .card {
        box-shadow: -8px 12px 18px 0 rgb(25, 42, 70, 0.13);
        margin-bottom: 2.2rem;
        border-radius: 2px;
        padding: 20px;
    }

    .card h3 {
        text-align: center;
        font-weight: 500;
        color: #4b7bec;
    }
    </style>

</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-5">LOGIN</h3>
                        <?php
                            if(isset($_GET['pesan']) == "gagal") {
                                echo "<script>
                                    alert('Username atau Password Salah! Silahkan Coba Lagi')
                                </script>";
                            }
                            ?>
                        <form action="" method="POST">

                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username"
                                    placeholder="Username atau Email" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" />
                            </div>

                            <input type="submit" class="btn btn-primary form-control" name="login" value="Login" />

                            <p class="mt-2">New Account? <a href="registrasi.php">Create Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
</html>