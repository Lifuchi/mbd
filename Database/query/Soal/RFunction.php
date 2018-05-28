<?php

if(isset($_POST['save'])){
    require( '../../connect.php');
    $notransaksi = $_POST['name'] ;
	$sql = "SELECT DISTINCT nomer2($notransaksi) AS biaya FROM transaksi t;";
	$hasil = mysqli_query($sqlconnect,$sql);
      if($hasil->num_rows > 0){
        while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
          $data = $row['biaya'];
           echo  " Rp " . $row['biaya']; 
          }
          // $hasil = ["sEcho" => 1,
          // "iTotalRecords" => count($data),
          // "iTotalDisplayRecords" => count($data),
          // "aaData" => $data ];
          // echo json_encode($hasil);

        	}else{
        		echo "tidak ada";	
        	}
  exit();
}
?>