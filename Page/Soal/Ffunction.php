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

    <!-- Navigation -->
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


  <section>
    <h3 class="text-center">Total Transaksi yang telah dilayani Pegawai</h3>
    <section class="milih " style="margin-top: -90px; margin-left: 34%;" >
      <div class="container" style=" align-items: auto; text-align: auto;" >
                <form >
                    <input id="IDpegawai" class="inp" type="text" name="IDpegawai" placeholder="ID Pegawai">
                    <input class="btn btn-primary " id="submit" name="submit" type="submit"
                          ></input>
                </form>

                <?php
                  if(isset($_GET['submit'])){
                        require( '../../Database/connect.php');
                        $idpegawai = $_GET['IDpegawai'];
                        //echo $idpegawai;
                         $sql = "SELECT DISTINCT peg_trans('$idpegawai') as JumlahTransaksi FROM pegawai";
                       
                        $hasil = mysqli_query($sqlconnect,$sql);
                    
                        if($hasil->num_rows > 0){
                          while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
                            if($row['JumlahTransaksi'] > 0){
                              echo "<br>Pegawai dengan ID " .$idpegawai;
                              echo " telah melayani " .$row['JumlahTransaksi'];
                              echo " transaksi";
                            }
                            else {
                              echo "<br>Tidak ada pegawai dengan ID " .$idpegawai;
                            }  
                          }
                               
                        }else {
                          echo "Tidak ada hasil";
                        }   
                  }

               ?>
      </div>
  </section>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  </body>

  </body>

</html>
