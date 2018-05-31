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


  <section class="bg-light">
    <div class="text-center"><h2>PENAMBAHAN GAJI</h2>
            <p class="text-muted">Penambahan gaji sebesar 5% kepada pegawai yang telah melayani transaksi lebih dari 30 kali pada bulan dan tahun tertentu
            </p>
          </div>
<section class="milih " style="margin-top: -90px; margin-left: 340px;" >
  <div class="container" >
            <form action="../../Database/query/Soal/FCursor.php" method="POST">
                <div class="row ">
                      <div class="col-md-5  " >
                          <select class="form-control" id='month' name="month">
                          <option value=''>--Select Month--</option>
                          <option value='1'>January</option>
                          <option value='2'>February</option>
                          <option value='3'>March</option>
                          <option value='4'>April</option>
                          <option value='5'>May</option>
                          <option value='6'>June</option>
                          <option value='7'>July</option>
                          <option value='8'>August</option>
                          <option value='9'>September</option>
                          <option value='10'>October</option>
                          <option value='11'>November</option>
                          <option value='12'>December</option>
                          </select> 
                        </div>
                        <div class="col-md-5  ">
                          <select id='year' name="year" class="form-control">
                          <option value=''>--Select Year--</option>
                          <option value='2017'>2017</option>
                          <option value='2018'>2018</option>
                          </select> 
                        </div>
                        <div class="col-md-2 ">
                            <input class="btn btn-primary " id="submit" name="submit" type="submit"></input>
                        </div>
              </div>
            </form>
              <div>
            </div>
    </div>
  </section>

<section>
<div class="text-center"><h2>PEMOTONGAN GAJI </h2>
            <p class="text-muted">Untuk pegawai yang melakukan transaksi kurang dari 10 <br>
                sesuai bulan dan tahun tertentu
            </p>
          </div>
<section class="milih " style="margin-top: -90px; margin-left: 340px;" >
  <div class="container" >
    <!-- <div class="row "> -->
            <form action="../../Database/query/Soal/RKursor.php" method="POST">
                <div class="row ">
                      <div class="col-md-5  " >
                          <select class="form-control" id='gMonth' name="mselect">
                          <option value=''>--Select Month--</option>
                          <option value='1'>January</option>
                          <option value='2'>February</option>
                          <option value='3'>March</option>
                          <option value='4'>April</option>
                          <option value='5'>May</option>
                          <option value='6'>June</option>
                          <option value='7'>July</option>
                          <option value='8'>August</option>
                          <option value='9'>September</option>
                          <option value='10'>October</option>
                          <option value='11'>November</option>
                          <option value='12'>December</option>
                          </select> 
                        </div>
                        <div class="col-md-5  ">
                          <select id='gYears' name="tselect" class="form-control">
                          <option value=''>--Select Year--</option>
                          <option value='2017'>2017</option>
                          <option value='2018'>2018</option>
                          </select> 
                        </div>
                        <div class="col-md-2 ">
                            <input class="btn btn-primary " id="save" name="save" type="submit"
                          ></input>
                        </div>
              </div>
            </form>
              <div>
            </div>
    <!-- </div> -->
    </div>

    <?php
      require( '../../Database/connect.php');

    if(isset($_POST['submit'])){
         $bulan = $_POST['month'] ;
         $tahun = $_POST['year'] ;    
          $sql = "Call tambah_gaji($bulan, $tahun)";
          $hasil = mysqli_query($sqlconnect,$sql);
      }

      // header("location:../../../Page/Soal/KinerjaPegawai.php");             

?>
  
  </section>
<!-- SOAL JOIN -->
  <section class="bg-light">
    <div class="container">
     <h3 class="text-center text-uppercase">kasir yang memberikan pelayanan diskon</h3>
      <div >          
          <table id="my-example" class="table table-hover">
            <thead >
              <tr>
                <th>Nama Pegawai</th>
                <th>Nama Pelanggan</th>
                <th>Diskon</th>
                <th>Harga(tanpa pajak)</th>
              </tr>
            </thead>

          </table>
    </div>
    </div>

<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').dataTable({
        "sAjaxSource": "../../Database/query/Soal/Rjoin.php",
        "aoColumns": [
              { mData: 'pegawai' } ,
              { mData: 'pelanggan' },
              { mData: 'Diskon' },
              { mData: 'harga' }
            ]
      });
      // $('#my-example2').dataTable({
      //   "sAjaxSource": "../../Database/query/Soal/Rkursor2.php",
      //   "aoColumns": [
      //         { mData: 'P_ID' },
      //         { mData: 'P_NAMA' },
      //         { mData: 'P_EMAIL'},
      //         { mData: 'P_TELP'},
      //         { mData: 'P_JENISKELAMIN'},
      //         { mData: 'P_GAJI'},
      //         { mData: 'P_JABATAN'}
      //       ]
      // });   
  });
</script>


 </div>

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