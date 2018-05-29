<?php

if(isset($_POST['key'])){
    //echo "1";
    require( '../../connect.php');
    $idtransaksi = $_POST['id'] ;
    //echo $idtransaksi;
	$sql = "CALL total_bayar($idtransaksi)";
	$hasil = mysqli_query($sqlconnect,$sql);
      if($hasil->num_rows > 0){
        while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
          // $data = $row['TotalBayar'];
           echo  " Rp " . $row['TotalBayar']; 
          }
      }else{
        echo "Tidak ada hasil";	
      }
  exit();
}
?>