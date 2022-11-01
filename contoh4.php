<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="bootstrap5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="gayac4.css">
    <style type="text/css">
      .keatasdikit{
        margin-top: -120px;
      }
    </style>

</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" aria-label="Tenth navbar example">
    <div class="container">
      <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="row collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <div class="col-4">
          <h3 class="text-white">SAMSUNG BANJARMAISN</h3>
        </div>
        <div class="col-8">
          <div class="row row-cols-1">
            <div class="col">
              <form class="d-flex">
                <input class="form-control m-2 " type="search" placeholder="Cari Barang" aria-label="Search"  >
                <button class="btn btn-outline-light m-2" type="submit">Cari</button>
              </form>
            </div>
            <div class="col">
        <ul class="navbar-nav">
          <li class="nav-item px-4">
            <a class="nav-link fs-6 active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link fs-6" href="#">Link</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link fs-6" href="#">Link</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link fs-6" href="#">Link</a>
          </li>
          <li class="nav-item px-4">
            <a class="nav-link fs-6" href="#">Link</a>
          </li>
          <li class="nav-item px-4 dropdown">
            <a class="nav-link fs-6 dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row flex-lg-row-reverse">
      <div class="col-lg-6 px-0">
        <img src="foto/mw3.png" width="100%" height="300">
      </div>
      
    <div class="col-lg-3 embed-responsive embed-responsive-21by9">
      <!-- 21 by 9 itu ukuran map yg tampil -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63730.132164975475!2d114.5591928748283!3d-3.317220831764808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4209aa1eec961%3A0x26030bfcc09204d2!2sBanjarmasin%2C%20Kota%20Banjarmasin%2C%20Kalimantan%20Selatan!5e0!3m2!1sid!2sid!4v1656560039985!5m2!1sid!2sid" width="100%" height="300" style="border:2; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

      <div class="col-lg-3 bg-dark text-white text-end py-3">
        <h3 class="fw-bold">PESAN SEKARANG</h3>
        <div class="btn btn-outline-primary fs-3">0812-3456-7890</div><br>
        <hr>
        <h5>atau kunjungi toko kami di</h5>
        <div class="btn btn-primary">Jln. Trans Kalimantan Km. 18</div>
      </div>

    </div>
  </div>

  <!-- ISI -->
  <div class="container">
    <br><br>

    

      <a href="crud/tambah.php" class="btn btn-primary">Tambah Data</a>

        <!-- PERULANGAN ISI DATA -->
        <div class="row">

            <?php $i = 1;  ?>
            <?php
            include_once("crud/koneksi.php");
 
            $result = mysqli_query($mysqli, "SELECT * FROM crud ORDER BY id DESC");
            ?>

            <div class="row">
                <?php $i = 1;  ?>
                <?php while ($semuadata = mysqli_fetch_array($result)) : ?>

            <div class="col-lg-3 col-sm-6 col-6 p-3">
              <div class="card">
                
                <img src="foto/<?php echo $semuadata["data5"]; ?>" class="bd-placeholder-img card-img-top" width="100%" height="100%" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false" >
                <div class="card-body">
                  <h5 class="card-title"><?php echo $semuadata["data1"]; ?></h5>
                  <p class="card-text"><?php echo $semuadata["data2"]; ?></p>
                  <a href="#" class="btn btn-primary">Rp <?php echo $semuadata["data3"]; ?></a>
                  <small class="px-3">stok <?php echo $semuadata["data4"]; ?></small>
                </div>
              </div>
            </div>

                <?php $i++; ?>
                <?php endwhile; ?> 

            </div>

                <!-- HALAMAN -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

        </div>


  <!-- container -->
  </div>

  
<br><br><br><br><br>
<footer class="blog-footer bg-dark text-white py-4 " style="padding:1px 16px;">
  <div class="container">
    <div class="row">
          <div class="px-5 pb-4 col-lg-6 col-sm-12 text-center">
            <h4 class="fw-bold">Alamat</h4>
            Desa Andaman 1 - Jalan Trans Kalimantan Km.18 <br> Kabupaten Barito Kuala - Kecamatan Anjir Pasar <br> Provinsi Kalimantan Selatan - Kota Banjarmasin <br> POS 70565
          </div>
          <div class=" col-lg-2 col-4 text-start">
            <h4 class="fw-bold">Pintasan</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Home</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Kontak</a></li>
              <li><a href="#">Disclaimer</a></li>
            </ol>
          </div>
          <div class=" col-lg-2 col-4 text-start">
            <h4 class="fw-bold">Lainnya</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Kebijakan Privasi</a></li>
              <li><a href="#">Syarat & Ketentuan</a></li>
              <li><a href="#">Sitemap</a></li>
            </ol>
          </div>
          <div class=" col-lg-2 col-4">
            <a href="#" class="btn btn-primary text-white">Kembali ke atas</a>
          </div>
    </div>
  </div>
  <br>
  <div class="text-center">&copy; copyright diBJMcom 2022</div>
  <hr>

</footer>
    <script src="bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>