<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Desa Negara Ratu Wates</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Negara Ratu Wates</span>-Lampung</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-left">
            <li class="nav-item">
              <a class="nav-link" href="Beranda.php">Beranda</a>
            </li><li class="nav-item active ">
              <a class="nav-link" href="Artikel.php">Berita Terkini</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="PetaDesa.php">Peta Desa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Riwayat.php">Riwayat</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="Beranda.php">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita Terkini</li>
          </ol>
          </nav>
        <h1 class="font-weight-normal">Berita Terkini</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  
<div class="page-section">
  <h1 class="text-center wow fadeInUp">News</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "webta";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          $sql = "SELECT * FROM webta"; 
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) { //perulangan
              $No = 1;
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { //looping
          ?>

            <div class="col-sm-6 py-3" ng-controller="ListaComprasController">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#"><?php echo $row['Tipe'] ?> </a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="Gambar/<?php echo $row['Gambar']?>" alt="">
                  </a>
                </div>
                <!-- <tr ng-repeat="item in itens | filter:search" class="comprado-{{ item.comprado }}"> -->
                <div class="body" ng-repeat="filter:search">
                  <h5 class="post-title"><a href="blog-details.php? idn=<?php echo $row['id'] ?> "> <?php echo $row['Nama_berita'] ?> </a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="Gambar/<?php echo $row['Gambar']?>" alt="">
                      </div>
                      <span><?php echo $row['Nama_upload'] ?> </span>
                    </div>
                    <span class="mai-time"></span> <?php echo $row['Waktu'] ?>
                  </div>
                </div>
              </div>
            </div>    
            </tr>
        
          <?php
            }
          }
          ?>

<div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter" ng-model="search">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
            <div class="sidebar-block">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="categories">
                <li><a href="#">Food <span>12</span></a></li>
                <li><a href="#">Dish <span>22</span></a></li>
                <li><a href="#">Desserts <span>37</span></a></li>
                <li><a href="#">Drinks <span>42</span></a></li>
                <li><a href="#">Ocassion <span>14</span></a></li>
              </ul>
            </div>
              <div class="sidebar-block">
                <h3 class="sidebar-title">Recent Blog</h3>
                <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "webta";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM webta ORDER BY Waktu DESC LIMIT 3"; 
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0 ) { //perulangan
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) { //looping
            ?>
                <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="Gambar/<?php echo $row['Gambar']?>" alt="">
                  </a>
                  <div class="content">
                    <h5 class="post-title"><a href="blog-details.php? idn=<?php echo $row['id'] ?>"><?php echo $row['Nama_berita']?></a></h5>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> <?php echo $row['Waktu'] ?></a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
                </div> 
                <?php
                }
              }
            ?>
              </div>
            <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <footer class="page-footer">
   
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Hubungi Kami</h5>
          <p class="footer-link mt-2">Desa Negara Ratu Wates, Tegineneng, Pesawaran, Lampung.</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Media Sosial Kami</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script>
   function ListaComprasController($scope) {
    
    $scope.item = {};
    $scope.itens = [
        {produto: 'Leite', quantidade: 2, comprado: false},
        {produto: 'Cerveja', quantidade: 12, comprado: false}
        {}
    ];

    }
</script>
  
</body>
</html>