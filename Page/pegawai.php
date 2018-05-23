<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restoran</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">Restoran</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#services">MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php#team">TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pegawai.php">PEGAWAI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pelanggan.php">PELANGGAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../Login/login.php">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-default navbar-fixed-top my-navbar" style="margin-bottom: 0px; z-index: 5">
  <a class="navbar-brand" href="#">HelpYow</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Cleaner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Technician</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login">Join Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
{{--     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" placeholder="Search" type="text">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>

  -->

  <div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

<?php
          include '../Database/connect.php';
           $sql = "SELECT * FROM pegawai ";
          $hasil = mysqli_query($sqlconnect,$sql);

          if($hasil->num_rows != 0){

            while ($rows = $hasil->fetch_assoc()) {
              $nama = $rows['NAMA'];
              $GAMBAR = $rows['GAMBAR'];
              $link = $rows['LINK'];
            echo "    <li>
                  <a href='pMi/$link'>
                  <img class='pap' src='pMi/Minuman/$GAMBAR' alt='makanan' height='100px' width='200px'>
                  <div class='tes1'></div>
                  <div class='tes2'></div>
                  <div class='tes3'></div>  
                  <div class='tes4'>
                    <h2>$nama</h2>
                  </div> 
                  </a>
                  </li>";

            }
          }else{
            echo "tidak ada hasil";
          }     

?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../endor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>

  </body>

</html>
