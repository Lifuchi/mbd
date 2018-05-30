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
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


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

<!-- Rifka View -->

<div class="text-center" style="margin-top: 130px;"><h2>Menu yang pernah dipesan</h2></div>
<section class="milih " style="margin-top: -90px; margin-left: 70px;" >
  <div class="container" >
    <!-- <div class="row "> -->
            <form action="Rview.php">
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
                            <input class="btn btn-primary " id="submit" name="submit" type="submit"
                          ></input>
                        </div>
              </div>
            </form>
    <!-- </div> -->
  </div>

  <br>
  <br>

    <ul class="content-all" id="ca">
  <?php
if(isset($_GET['submit'])){
      require( '../../Database/connect.php');
      $tsearch = $_GET['tselect'];
      $msearch = $_GET['mselect'] ;
       $sql = "CREATE OR REPLACE VIEW nomer1 AS 
        SELECT m.M_ID , m.M_NAMA 
        FROM transaksi t JOIN detil_transaksi dt ON t.T_ID = dt.T_ID AND MONTH(t.T_TGLTRANSAKSI) = $msearch AND YEAR(t.T_TGLTRANSAKSI) = $tsearch
        JOIN menu m ON m.M_ID = DT.M_ID; ";
      
      $hasils = mysqli_query($sqlconnect,$sql);

      $sql = "SELECT distinct * from nomer1;";

      $hasil = mysqli_query($sqlconnect,$sql);
  
      if($hasil->num_rows != 0){

        while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
          $dataID = $row['M_ID'];
          $dataNM = $row['M_NAMA'];
          echo "<li>
                  <img class='pap' src='../../img/menu/$dataID.jpg' alt='makanan' height='100px' width='200px'>
                  <div class='tes1'></div>
                  <div class='tes2'></div>
                  <div class='tes3'></div>  
                  <div class='tes4'><h2>$dataNM</h2></div> 
                  </li>";
          }     
  }else {
    echo "tidak ada hasil";
  }   
}

 ?>
    </ul>
  </section>

<section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Log Menu</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>

<div class="row text-center" >
  <div class="col-lg-12 text-center">
    <div class="intro-heading text-uppercase" style="top: 100px"></div>
       <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3" style="font-size: 20px">
          <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Edit</button>
        </a> 
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4" style="font-size: 20px">
             <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Special Hapus</button>
        </a> 
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5" style="font-size: 20px">
             <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Tambah</button>
        </a>
  </div>
</div>

        <div class="container" style="margin-top: 100px;" >                                                                          
  <div >        
  <table id="my-example">
    <thead >
      <tr>
        <th>No</th>
        <th>M_ID</th>
        <th>HARGA BARU</th>
        <th>HARGA LAMA</th>
        <th>WAKTU</th>
        <th>INFO</th>
      </tr>
    </thead>
  </table>
  </div>
</div>



</section>



<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').dataTable({
        "bProcessing": true, 
        "sPaginationType": "full_numbers",
        "sAjaxSource": "../../Database/query/Soal/RTrigger2.php",
        "aoColumns": [
              { mData: 'Nomer' } ,
              { mData: 'M_ID' },
              { mData: 'M_HARGAB' },
              { mData: 'M_HARGAL' },
              { mData: 'waktu' },
              { mData: 'info' }              
            ]
    });  
  });
</script>


<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Edit</h2>        
                  <p class="text-muted">Masukkan Nomer Menu dan Harga Baru</p>
               <div class="mencari">
                <form method="POST" action="../../Database/query/Soal/RTrigger.php" >
                    <input id="menuid" class="inp" type="text" name="menuid" placeholder="M_ID">
                    <input id="harga" class="inp" type="text" name="harga" placeholder="M_HARGA">
                    <button  id="submit-search" type="submit" name="submit-search" > update </button>
                    <div id="responses" class="responses"></div>
                </form>
              </div>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

<!-- hapus special -->
       <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- <div class="close-modal" data-dismiss="modal"> -->
            <!-- <div class="lr"> -->
              <!-- <div class="rl"></div> -->
            <!-- </div> -->
          <!-- </div> -->
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Special Delete</h2>
                  <p class="item-intro text-muted">Tombol ini untuk menghapus SATU menu yang tidak pernah dibeli oleh pelanggan!(kalau tidak ada , tidak akan terhapus apapun)</p>
                  <p>Hasil Penghapusan akan muncul pada log menu </p>
                    <form method="POST" action="../../Database/query/Soal/RProcedure.php" >
                    <button class="btn btn-primary" id="hapus" name="hapus" type="submit"> SPECIAL DELETE </button> 
                    </form>
         
                </div>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Tambah</h2>        
                  <p class="text-muted">Menambahkan menu baru</p>
               <div class="mencari">
                <form method="POST" action="../../Database/query/Soal/FTrigger.php" >
                    <input id="menuid" class="inp" type="text" name="menuid" placeholder="ID Menu">
                    <input id="nama" class="inp" type="text" name="nama" placeholder="Nama Menu"><br><br>
                    <input id="jenis" class="inp" type="text" name="jenis" placeholder="Jenis Menu">
                    <input id="harga" class="inp" type="text" name="harga" placeholder="Harga Menu"><br><br>
                    <button  id="submit-add" type="submit" name="submit-add" > Add </button>
                    <div id="responses" class="responses"></div>
                </form>
              </div>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

 
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
