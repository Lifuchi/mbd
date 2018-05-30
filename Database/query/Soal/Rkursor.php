
<?php
      require( '../../connect.php');

if(isset($_POST['save'])){
     $mselect = $_POST['mselect'] ;
     $tselect = $_POST['tselect'] ;    
      $sql = "call fpRifka( $mselect, $tselect)";
      $hasil = mysqli_query($sqlconnect,$sql);
  }

  header("location:../../../Page/Soal/KinerjaPegawai.php");             

?>