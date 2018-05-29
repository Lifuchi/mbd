<?php

if(isset($_POST['key'])){
    echo "1";
    require( '../../connect.php');
    $idpegawai = $_POST['id'] ;
    //echo $idtransaksi;
	$sql = "SELECT DISTINCT peg_trans('$idpegawai') as JumlahTransaksi FROM pegawai";
	$hasil = mysqli_query($sqlconnect,$sql);
      if($hasil->num_rows > 0){
        while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
           echo $row['JumlahTransaksi']; 
          }
      }else{
        echo "Tidak ada hasil";	
      }
  exit();
}
?>