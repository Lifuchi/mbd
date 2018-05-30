<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restoran</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

      <?php 
      session_start();
       if(isset($_SESSION['login'])){
       }else if(empty($_SESSION['login'])){
        header("Location: index.php");
        exit();
       }
    ?>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Restoran</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">TEAM</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">PELANGGAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">MENU</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link js-scroll-trigger dropdown-toggle dropdown-toggle-split " data-toggle="dropdown" href="# ">Data<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" style="font-size: 12px" href="Page/Data/pegawai.php">Pegawai</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="Page/Data/Pelanggan.php">Pelanggan</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="Page/Data/melayani.php">Melayani</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="Page/Data/menu.php">Menu</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="Page/Data/transaksi.php">Transaksi</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="Page/Data/detil_transaksi.php">Detil Transaksi</a></li>
                  <li><a class="dropdown-item" style="font-size: 12px" href="Page/Data/diskon.php">Diskon</a></li>
               </ul>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php ">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Selamat Datang di Restoran!</div>
          <div class="intro-heading text-uppercase"></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Tambah transaksi</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Menu</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <a href="Page/makanan.php">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>

              <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading">Makanan</h4>
            <p class="text-muted">Berbagai macam makanan dengan khas rasa Indonesia</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <a href="Page/minuman.php">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-coffee fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading">Minuman</h4>
            <p class="text-muted">Aneka minuman dengan kesegaran yang dapat dirasakan</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <a href="Page/snack.php">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading">Snack</h4>
            <p class="text-muted">Jajanan ringan yang dapat dinikmati bersama teman maupun keluarga</p>
          </div>
        </div>
        <div class="row text-center" >
          <div class="col-lg-12 text-center">
            <div class="intro-heading text-uppercase" style="top: 20px"></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="Page/Soal/Rview.php">Menu Lainnya</a>
          </div>
        </div>

      </div>
    </section>

       <section id="finance" class="bg-dark">
     <!--  <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Pelanggan</h2>
            <h3 class="section-subheading text-muted">Terima kasih atas kesetiaan ANDA</h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Finish</h4>
              <p class="text-muted">Identity</p>
            </div>
          </div>
        <div class="row text-center" >
          <div class="col-lg-12 text-center">
            <div class="intro-heading text-uppercase" style="top: 20px"></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="Page/Soal/Rview.php">Pembayaran</a>
          </div>
        </div>

      </div> -->
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12 text-center" style="color: white;">
            <h2 class="section-heading text-uppercase">Finansial</h2>
            <h3 class="section-subheading text-muted">Mencatat total bayar dan diskon</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-sm-6  portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3" style="font-size: 20px">
             <h2>Pembayaran</h2>
            </a>
          </div>
          <div class="col-sm-6  portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4" style="font-size: 20px">
             <h2>Special Diskon</h2>
            </a>
          </div>
          
      </div>
    </section>

    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Team Kami</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row ">
          <div class="col-sm-6 ">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/fadilla.jpg" alt="">
              <h4>Fadilla Sukma Alfiani</h4>
              <p class="text-muted"></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://instagram.com/fadillasa">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://facebook.com/fadillasukmaalfiani">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
              
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Rifka Annisa</h4>
              <p class="text-muted"></p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://instagram.com/hitori124">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://facebook.com/Yatogami.Risa">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                </li>
              </ul>
            </div>
          </div>
        </div>       
      </div>
    </section>

    <section id="finance" class="bg-dark">

      <div class="row text-center">          
          <div class="col-sm-6  portfolio-item">
              <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="Page/Soal/Fview.php">Total Pemasukan</a>
          </div>
          <div class="col-sm-6  portfolio-item">
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="Page/Soal/KinerjaPegawai.php">Kinerja Pegawai</a>
          </div>
          <div class="col-sm-6  portfolio-item">
            <br>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="Page/Soal/FFunction.php">Jumlah Transaksi oleh Pegawai</a>
          </div>   
          <div class="col-sm-6  portfolio-item">
            <br>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="Page/Soal/FJoin.php">Pelanggan Favorit beserta Menunya</a>
          </div>       
      </div>      
    </section>


    <!-- Clients -->
  

    <!-- Contact -->
 

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <span class="copyright">Copyright &copy; Restoran Website 2018</span>
          </div>
               
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

<!-- Pembayaran FUNCTION-->
  <!-- Modal 3 -->

<!--   <script>
 
function loaddata()
{
     var name=document.getElementById( "username" );
    if(name)
    {
     $.ajax({
      type: 'get',
      url : 'Database/query/Soal/RFunction.php' , 
      data : {
          user_name:name,
        },
      success: function(response){
       $('#response').text('name : ' + response);
             }
         });
       });
  });
}
}
  </script>  -->
  <!-- <<?php // include('Database/query/Soal/RFunction.php'); ?> -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div> -->
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Pembayaran</h2>        
                  <p class="text-muted">Masukkan Nomer Transaksi</p>

<!-- action='Database/query/Soal/RFunction.php' -->
               <section class="mencari">
                <form >
                    <input id="pelanggan" class="inp" type="text" name="pelanggan" placeholder="search">
                    <button  id="submit-search" type="button" name="submit-search" > Search </button>
                    <div id="responses" class="responses"></div>
                </form>
              </section>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Special Diskon</h2>  
                  <p>Diskon spesial sebesar 20% bagi pelanggan yang melakukan transaksi di hari ulang tahunnya</p> 
               <section class="mencari">
                <form >
                    <input id="IDtransaksi" class="inp" type="text" name="IDtransaksi" placeholder="ID Transaksi">
                    <button  id="submit" type="button" name="submit" > Search </button>
                    <div id="respon" class="respon"></div>
                </form>
               </section>
            <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project
            </button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   

    <!-- <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Jumlah Trans</h2>  
               <section class="mencari">
                <form >
                    <input id="IDpegawai" class="inp" type="text" name="IDpegawai" placeholder="ID Pegawai">
                    <button  id="submitt" type="button" name="submit" > Search </button>
                    <div id="responn" class="respon"></div>
                </form>
               </section>
            <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project
            </button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>  
        $(document).ready(function(){
   
         $(document).on('click', '#submit-search', function(){
            
           var name = $('#pelanggan').val();
          // var comment = $('#comment').val(); 
           $.ajax({
            url: 'Database/query/Soal/RFunction.php',
            type: 'POST',
            data: {
              'save': 1,
              'name': name,
            },
            success: function(response){
              // alert(name);
              $('#pelanggan').val('');
              $('#responses').html(response)
            }

          });
         });
        });


        $(document).ready(function(){
   
         $(document).on('click', '#submit', function(){
            
           var id = $('#IDtransaksi').val();
           $.ajax({
            url: 'Database/query/Soal/FProcedure.php',
            type: 'POST',
            data: {
              'key': 1,
              'id': id,
            },
            success: function(response){
              $('#IDtransaksi').val('');
              $('#respon').html(response)
            }

          });
         });
        });

        // $(document).ready(function(){
   
        //  $(document).on('click', '#submitt', function(){
            
        //    var id = $('#IDpegawai').val();
        //    $.ajax({
        //     url: 'Database/query/Soal/FFunction.php',
        //     type: 'POST',
        //     data: {
        //       'key': 1,
        //       'id': id,
        //     },
        //     success: function(response){
        //       $('#IDpegawai').val('');
        //       $('#responn').html(response)
        //     }

        //   });
        //  });
        // });
    </script> 

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

</html>
