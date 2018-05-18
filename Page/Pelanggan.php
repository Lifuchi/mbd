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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Restoran</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php">MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pegawai.php">PEGAWAI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pelanggan.php">PELANGGAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="# ">OBJECT DATABASE</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container" style="margin-top: 130px;" >
  <h2>Pelanggan</h2>                                                                                   
  <div class="table-responsive" >          
  <table id="myTable" class="table display table-striped table-hover table-sm table-bordered">
    <thead class="thead-light ">
      <tr>
        <th>PE_ID</th>
        <th>PE_NAMA</th>
        <th>PE_JENISKELAMINL</th>
        <th>PE_TGLLAHIR</th>
        <th>PE_ALAMAT</th>
        <th>PE_TELP</th>
      </tr>
    </thead>
    <tbody>
     
              
          <?php
                    include '../Database/connect.php';
                     $sql = "SELECT * FROM pelanggan order by PE_ID ";
                    $hasil = mysqli_query($sqlconnect,$sql);

                    if($hasil->num_rows != 0){

                      while ($rows = $hasil->fetch_assoc()) {
                        $PE_ID = $rows['PE_ID'];
                        $PE_NAMA = $rows['PE_NAMA'];
                        $PE_JENISKELAMIN = $rows['PE_JENISKELAMIN'];
                        $PE_TGL = $rows['PE_TGLLAHIR'];      
                        $PE_ALAMAT = $rows['PE_ALAMAT'];
                        $PE_TELP = $rows['PE_TELP'];
    
                      echo "    <tr>
                                <td> $PE_ID </td>
                                <td> $PE_NAMA</td>
                                <td> $PE_JENISKELAMIN</td>                                 
                                <td>  $PE_TGL</td>                                        
                                <td> $PE_ALAMAT</td>                  
                                <td>$PE_TELP </td>



 
                               </tr>";


                      }
                    }else{
                      echo "tidak ada hasil";
                    }     

          ?>


    </tbody>
  </table>
  </div>
</div>

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
