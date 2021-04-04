<?php

session_start();
require_once("koneksi.php");
require_once("function.php");

  if (!isset($_SESSION["login"])) {
      header("location: login.php");
      exit;
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <style>
        nav {
            background-color: #487eb0;
        }

        #about {
            padding: 50px;
            background-color: #487eb0;
            color: white;
        }

        #gallery {
            padding: 70px;
        }

        #contact {
            padding: 70px;
            color: white;
            background-color: #487eb0;
        }

        footer {
            padding: 5px;
            background-color: #487eb0;
        }
    </style>

    <title>My Portfolio | Putri Alifia Azzahra</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="">
          <a class="nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Admin
          </a>
          <ul class="dropdown-menu ms-2" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="index.php">User</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Concact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#487eb0"
        fill-opacity="1"
        d="M0,288L48,250.7C96,213,192,139,288,133.3C384,128,480,192,576,229.3C672,267,768,277,864,256C960,235,1056,181,1152,170.7C1248,160,1344,192,1392,208L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>

    <section class="jumbotron text-center">
    <?php

            $sql = "SELECT * FROM profil";
            $query = mysqli_query($connect,$sql);

            while($id_profil = mysqli_fetch_array($query)) {
              echo "<img src='".$id_profil['foto_profil']."' alt='' width='260' class='rounded-circle img-thumbnail' />";
              echo "<h1 class='display-5'>".$id_profil['nama_profil']."</h1>";
              echo "<p class='lead'>".$id_profil['status']."</p>";
              echo "<a href='formeditpp.php' class='btn btn-outline-primary'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                </svg> Edit</a>";
            }		
          ?>
    </section>
    <!-- Akhir Jumbotron -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#487eb0"
        fill-opacity="1"
        d="M0,160L40,176C80,192,160,224,240,213.3C320,203,400,149,480,117.3C560,85,640,75,720,85.3C800,96,880,128,960,170.7C1040,213,1120,267,1200,245.3C1280,224,1360,128,1400,80L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2 class="mb-4">About Me</h2>
          </div>
        </div>
          <!-- About db -->
          <?php
                
                $sql = "SELECT * FROM about";
                $query = mysqli_query($connect,$sql);

                while($id_about = mysqli_fetch_array($query)){
                        echo "<div class='row justify-content-evenly fs-5 text-left' style='white-space: pre-line;'>";
                        echo "<div class='col-md'>";
                        echo "<p>". $id_about['about1'] ."</p>";
                        echo "</div>";
                        echo "<div class='col-md'>";
                        echo "<p>". $id_about['about2'] ."</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<a href='formabout.php' class='btn btn-outline-light form-control'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                          <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                          <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                          </svg> Edit</a>";
                }

            ?>
            <!-- Akhir About db -->
      </div>
    </section>
    <!-- Akhir About -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#487eb0"
        fill-opacity="1"
        d="M0,192L48,186.7C96,181,192,171,288,138.7C384,107,480,53,576,48C672,43,768,85,864,128C960,171,1056,213,1152,197.3C1248,181,1344,107,1392,69.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>

    <!-- Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Gallery</h2>
          </div>
        </div>
        <div style="overflow: auto; height: 400px; margin: 0 50px;">
          <table class="table">
            <tr>
                <th>Foto</th>
                <th>keterangan</th>
                <th>Action</th>
            </tr>
            <!-- Gallery DB -->
            <?php

            $sql = "SELECT * FROM gallery";
            $query = mysqli_query($connect,$sql);

            while($id_gallery = mysqli_fetch_array($query)) {
              echo "<tr>";
              echo "<td><img src='".$id_gallery['foto']."' width='250px'; ></td>";
              echo "<td>".$id_gallery['keterangan']."</td>";
              echo "<td>";
              echo "<a href='formeditfoto.php?id_gallery=".$id_gallery['id_gallery']."' class='mr-4'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='Green' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                      </svg></a> | ";
              echo "<a href='hapusfoto.php?id_gallery=".$id_gallery['id_gallery']."'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='Red' class='bi bi-trash' viewBox='0 0 16 16'>
                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                  </svg></a>";
              echo "</td>";
              echo "</tr>";
            }		
            ?>
            <!-- Akhir Gallery DB -->
          </table>
        </div>
        <a href="tambahfoto.php" class="btn btn-outline-primary form-control mt-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg> Tambah Foto</a>
      </div>
    </section>
    <!-- Akhir Gallery -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#487eb0"
        fill-opacity="1"
        d="M0,128L40,112C80,96,160,64,240,85.3C320,107,400,181,480,197.3C560,213,640,171,720,160C800,149,880,171,960,176C1040,181,1120,171,1200,160C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>

    <!-- Concact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Contact</h2>
          </div>
        </div>
        <div class="row justify-content-evenly">
          <div class="col-10" style="overflow: auto; height: 370px;">
          <!-- Concact DB -->
          <?php

            $sql = "SELECT * FROM concact";
            $query = mysqli_query($connect,$sql);

            while($pesan = mysqli_fetch_array($query)) {
                echo "<div class='card mb-2' style='color: black;'>";
                echo "<div class='card-header'> From : ".$pesan['email']."</div>";
                echo "<div class='card-body'>";
                echo "<h6 class='card-title'>".$pesan['nama']."</h6>";
                echo "<p class='card-text'>".$pesan['pesan']."</p>";
                echo "<a href='hapusconcact.php?pesan=".$pesan['pesan']."'class='btn btn-outline-danger' style='float: right;'>Delete</a>";
                echo "</div>";
                echo "</div>";
            }		
            ?>
            <!-- Akhir Concact DB -->
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Concact -->

    <!-- Footer -->
    <footer class="text-center text-white shadow">
      <p>Created by <a href="https://www.instagram.com/putrialifiaazzahra_/" class="text-white fw-bold">@putrialifiaazzahra</a></p>
    </footer>
    <!-- Akhir Footer -->

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
