<?php
if(isset($_GET['submit-search'])){
    require( '../../connect.php');
    $notransaksi = $_GET['username'] ;
	$sql = "SELECT DISTINCT nomer2($notransaksi) AS biaya FROM transaksi t;";
	$hasil = mysqli_query($sqlconnect,$sql);
      if($hasil->num_rows != 0){

        while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
          $data = $row['biaya'];
           echo $row['biaya']; 

          }
          // $hasil = ["sEcho" => 1,
          // "iTotalRecords" => count($data),
          // "iTotalDisplayRecords" => count($data),
          // "aaData" => $data ];
          // echo json_encode($hasil);

	}else{
		echo "tidak ada";	
	}
}
?>