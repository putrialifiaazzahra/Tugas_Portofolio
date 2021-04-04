<?php
 include 'koneksi.php';

 $sql = "SELECT * FROM profil";
 $query = mysqli_query ($connect, $sql);

 while($profil = mysqli_fetch_array($query)) {

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        .container{
            padding: 10px;
            margin-top: 4rem;
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
            color: #4b7bec;
        }
    </style>
    <title>Form Edit Foto</title>
  </head>
  <body>
  <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Edit Profile
                        <a href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#d63031" class="bi bi-x-square-fill" viewBox="0 0 16 16" style="float: right;">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                        </svg></a>
                    </div>
                    <div class="card-body">
                        <form action="editprofil.php" method="POST">
                            <div class="form-group row">
                                <div class="col">
                                    <input name="id_profil" type="hidden" class="form-control" id="id_profil" 
                                    value="<?php echo $profil['id_profil']?>">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto"><h5>Foto</h5></label>
                                <div class="col">
                                    <input name="foto_profil" type="url" class="form-control" id="foto_profil"
                                    value="<?php echo $profil['foto_profil']?>">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_profil"><h5>Nama Profile</h5></label>
                                <div class="col">
                                    <input name="nama_profil" type="text" class="form-control" id="nama_profil"
                                    value="<?php echo $profil['nama_profil']?>">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="status"><h5>Status</h5></label>
                                <div class="col">
                                    <input name="status" type="text" class="form-control" id="status"
                                    value="<?php echo $profil['status']?>">
                                </div>
                            </div>

                            <input type="submit" name="simpan" value="Update" class="btn btn-success">
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
<?php } ?>
</body>
</html>