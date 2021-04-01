<?php

require_once("config.php");

if(isset($_POST['simpan'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO user (username, nama, email, password) 
            VALUES (:username, :nama, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":nama" => $nama,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Input Registrasi</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- Style -->
    <style>
        .container{
            padding: 10px;
            margin-top: 3rem;
        }
        .card{
            box-shadow: -8px 12px 18px 0 rgb(25, 42, 70, 0.13);
            margin-bottom: 2.2rem;
            border-radius: 2px;
            padding: 20px;
        }
        .card h3{
            text-align: center;
            font-weight: 500;
            color: #009432;
        }
    </style>
  </head>

  <body>
  
    <!-- Form input Registrasi -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-5">REGISTRASI</h3>
                        <form action="" method="POST">
                            
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Username" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" />
                            </div>

                            <input type="submit" class="btn btn-success form-control" name="simpan" value="Sign Up" />

                            <p class="mt-2">Sudah punya akun? <a href="login.php">Login Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

