<?php
include "koneksi.php";
?>


<!DOCTYPE html>
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
            padding: 100px;
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
              User
          </a>
          <ul class="dropdown-menu ms-2" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="admin.php">Admin</a></li>
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
      <img src="icon pp.png" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-5">Putri Alifia Azzahra</h1>
      <p class="lead">Student</p>
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
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-evenly fs-5">
          <div class="col-md">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta omnis animi, excepturi nostrum, culpa aliquam quam necessitatibus sequi tenetur ex qui consectetur enim hic deserunt unde tempore non incidunt?</p>
          </div>
          <div class="col-md">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut praesentium dolorum excepturi voluptate corporis, aspernatur voluptates provident aliquid illum vel suscipit eligendi rerum, maxime ad magnam voluptas tempore
              necessitatibus itaque laudantium, libero nesciunt tempora laborum pariatur in? Saepe, assumenda dolore?
            </p>
          </div>
        </div>
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
        <div class="row justify-content-evenly">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/pict1.png" class="card-img-top" alt="Project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/pict2.png" class="card-img-top" alt="Project 2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/pict3.png" class="card-img-top" alt="Project 3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
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
          <div class="col-md-6">
            <?php
              $email = "";
              if(isset($_GET['error'])) 
              {
                $email = " Gagal Terkirim! ";
                echo '<div class="alert alert-danger">'.$email.'</div>';
              }
            ?>
            <form action="concact.php" method="POST">
              <div class="form-group">
                <label>Nama Lengkap *</label>
                <input type="text" class="form-control" name="nama"/>
              </div>
              <div class="form-group">
                <label>Email *</label>
                <input type="text" class="form-control" name="email" />
              </div>
              <div class="form-group">
                <label>Pesan *</label>
                <textarea class="form-control" rows="5" name="pesan"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-success mt-2">Kirim</button>
            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
