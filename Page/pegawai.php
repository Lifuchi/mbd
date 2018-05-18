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

    <!-- buat table -->
    <!-- <script type="text/javascript" src="../DataTables/datatables.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src=" https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 -->
        <script>
          $(document).ready( function () {
            $('#myTable').DataTable(  {
              "pageLength": 5
              });
        } );
      </script>
    <!-- <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/> -->
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
   

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
  <h2>Pegawai</h2>                                                                                   
  <div class="table-responsive" >          
  <table id="myTable" class="table display table-striped table-hover table-sm table-bordered">
    <thead class="thead-light ">
      <tr>
        <th>P_ID</th>
        <th>Nama</th>
        <th>EMAIL</th>
        <th>TELP</th>
        <th>JENISKELAMIN</th>
        <th>ALAMAT</th>
        <th>GAJI</th>
        <th>JABATAN</th>
      </tr>
    </thead>
    <tbody>
     
              
          <?php
                    include '../Database/connect.php';
                     $sql = "SELECT * FROM pegawai order by P_ID ";
                    $hasil = mysqli_query($sqlconnect,$sql);

                    if($hasil->num_rows != 0){

                      while ($rows = $hasil->fetch_assoc()) {
                        $P_ID = $rows['P_ID'];
                        $P_NAMA = $rows['P_NAMA'];
                        $P_EMAIL = $rows['P_EMAIL'];          
                        $P_TELP = $rows['P_TELP'];
                        $P_JENISKELAMIN = $rows['P_JENISKELAMIN'];
                        $P_ALAMAT = $rows['P_ALAMAT'];
                        $P_GAJI = $rows['P_GAJI'];
                        $P_JABATAN = $rows['P_JABATAN'];
                      echo "    <tr>
                                <td> $P_ID </td>
                                <td> $P_NAMA</td>
                                <td> $P_EMAIL</td>
                                <td>$P_TELP </td>
                                <td> $P_JENISKELAMIN</td>
                                <td> $P_ALAMAT</td> 
                                <td>  $P_GAJI</td> 
                                <td>   $P_JABATAN</td> 
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

 <div class="container" style="margin-top: 130px;" >
  <h2>Menampilkan nama pegawai bagian kasir yang memberikan pelayanan diskon, nama pelanggan dan harga setelah mendapatkan diskon(tanpa pajak)</h2>                                                                                   
  <div class="table-responsive" >          
  <table id="myTable" class="table display table-striped table-hover table-sm table-bordered">
    <thead class="thead-light ">
      <tr>

        <th>Nama Pegawai</th>
        <th>Nama Pelanggan</th>
        <th>Nama Diskon</th>
         <th>Harga</th>
      </tr>
    </thead>
    <tbody>
     
              
          <?php
                    include '../Database/connect.php';
                     $sql = "
                       SELECT p.`P_NAMA` AS pegawai, pe.`PE_NAMA` AS pelanggan ,d.`D_NAMA` as Diskon ,ROUND(SUM(me.`M_HARGA`)*(1-d.`D_BESARDISKON`) ) AS harga
                        FROM transaksi t JOIN diskon d ON t.`D_ID` = d.`D_ID`
                        JOIN melayani m ON m.`T_ID` = t.`T_ID`
                        JOIN pegawai p ON p.`P_ID` = m.`P_ID` AND p.`P_JABATAN` = 'kasir'
                        JOIN detil_transaksi dt ON dt.`T_ID` = t.`T_ID`
                        JOIN menu me ON me.`M_ID` = dt.`M_ID`
                        JOIN pelanggan pe ON pe.`PE_ID` = t.`PE_ID`
                        GROUP BY  p.`P_NAMA`, p.`P_JABATAN` , pe.`PE_NAMA`
                         
                            ";
                    $hasil = mysqli_query($sqlconnect,$sql);

                    if($hasil->num_rows != 0){

                      while ($rows = $hasil->fetch_assoc()) {
                        $P_NAMA = $rows['pegawai'];
                        $pelanggan = $rows['pelanggan'];
                        $diskon = $rows['Diskon'];
                        $harga = $rows['harga'];
                      echo "    <tr>
                   
                                <td> $P_NAMA</td>
                                <td>    $pelanggan</td> 
                                <td>   $diskon</td> 
                                <td>  $harga</td> 
                               </tr>";


                      }
                    }else{
                      echo "tidak ada hasil";
                    }     

                    mysqli_close($sqlconnect);

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
