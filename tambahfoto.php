<?php
 include 'koneksi.php';

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
    <title>Input Foto</title>
  </head>
  <body>
  <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Input Foto
                        <a href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#d63031" class="bi bi-x-square-fill" viewBox="0 0 16 16" style="float: right;">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                        </svg></a>
                    </div>
                    <div class="card-body">
                        <form action="simpanfoto.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="foto"><h5>Id Foto</h5></label>
                                <div class="col">
                                    <input name="id_gallery" type="text" class="form-control" id="id_gallery">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto"><h5>Foto</h5></label>
                                <div class="col">
                                    <input name="foto" type="url" class="form-control" id="foto" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="keterangan"><h5>Keterangan</h5></label>
                                <div class="col">
                                    <input name="keterangan" type="text" class="form-control" id="keterangan">
                                </div>
                            </div>

                            <input type="submit" name="simpan" value="Tambah" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>