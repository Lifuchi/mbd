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
                  <li><a class="dropdown-item" style="font-size: 12px" href="pegawai.php">Pegawai</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="Pelanggan.php">Pelanggan</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="melayani.php">Melayani</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="menu.php">Menu</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="transaksi.php">Transaksi</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="detil_transaksi.php">Detil Transaksi</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="diskon.php">diskon</a></li>                  
               </ul>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../logout.php ">LOGOUT</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container" style="margin-top: 100px;" >
  <h2>Transaksi</h2>                                                                                   
  <div >          
  <table id="my-example">
    <thead >
      <tr>
        <th>T_ID</th>
        <th>D_ID</th>
        <th>PE_ID</th>
        <th>T_TGLTRANSAKSI</th>
        <th>T_MEJA</th>
      </tr>
    </thead>

  </table>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').dataTable({
        "bProcessing": true,
        "sAjaxSource": "../../Database/query/QData/transaksi.php",
        "aoColumns": [
              { mData: 'T_ID' },
              { mData: 'D_ID' },
              { mData: 'PE_ID'},
              { mData: 'T_TGLTRANSAKSI'},
              { mData: 'T_MEJA'}
            ]
      });  
  });
</script>

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
