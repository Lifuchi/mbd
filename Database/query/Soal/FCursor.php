
<?php
      require( '../../connect.php');

if(isset($_POST['submit'])){
     $bulan = $_POST['month'] ;
     $tahun = $_POST['year'] ;    
      $sql = "Call tambah_gaji($bulan, $tahun)";
      $hasil = mysqli_query($sqlconnect,$sql);
  }

  header("location:../../../Page/Soal/KinerjaPegawai.php");             

?>