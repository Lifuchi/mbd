<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restoran</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../css/agency.css" rel="stylesheet">

    <!-- datables -->
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>



  </head>

  <body id="page-top">

    <?php 
      session_start();
       if(isset($_SESSION['login'])){
       }else if(empty($_SESSION['login'])){
        header("Location: ../../index.php");
        exit();
       }
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../../home.php#page-top">Restoran</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../home.php#services">MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../home.php#team">TEAM</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">PELANGGAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">MENU</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link js-scroll-trigger dropdown-toggle dropdown-toggle-split " data-toggle="dropdown" href="# ">Data <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" style="font-size: 12px" href="../Data/pegawai.php">Pegawai</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="../Data/Pelanggan.php">Pelanggan</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="../Data/melayani.php">Melayani</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="../Data/menu.php">Menu</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="../Data/transaksi.php">Transaksi</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="../Data/detil_transaksi.php">Detil Transaksi</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="../Data/diskon.php">diskon</a></li>                  
               </ul>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../logout.php ">LOGOUT</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="text-center" style="margin-top: 100px;"><h2>Total Transaksi yang telah dilayani Pegawai</h2></div>
<section class="milih">
  <div class="container" >
    <div class="row">
        <form method="GET" action='Ffunction.php' >
            <input onkeyup="loaddata();" id="username" class="inp" type="text" name="username" placeholder="search">
            <button  id="submitId" type="submitId " name="submit-search" > Search </button>
            <div id="response"></div>
        </form>
    </div>
  </div>

    <ul class="content-all" id="ca">
      <?php
        if(isset($_GET['submit-search'])){
            require( '../../connect.php');
            $idpeg = $_GET['username'] ;
          $sql = "SELECT DISTINCT peg_trans($idpeg) AS 'Jumlah Transaksi' FROM transaksi t;";
          //belummm


          $hasil = mysqli_query($sqlconnect,$sql);
              if($hasil->num_rows != 0){

                while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
                  $data = $row['jumlah'];
                   echo $row['jumlah']; 

                  }
          }else{
            echo "tidak ada"; 
          }
        }
        ?>
    </ul>
  </section>
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="../../vendor/jquery/jquery.min.js"></script> -->
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script src="../../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/agency.min.js"></script>

  </body>

</html>
