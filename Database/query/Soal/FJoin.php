
<?php
      require( '../../connect.php');
$sql = "SELECT DISTINCT pe.PE_NAMA as pelanggan, m.M_NAMA as menufav
        FROM pelanggan pe
        JOIN transaksi t ON pe.`PE_ID`=t.`PE_ID`
        JOIN detil_transaksi dt ON t.`T_ID`=dt.`T_ID`
        JOIN menu m ON dt.`M_ID`=m.`M_ID`
        AND pe.`PE_ID`=(SELECT pe.`PE_ID`
        FROM pelanggan pe
        JOIN transaksi t ON pe.`PE_ID`=t.`PE_ID`
        GROUP BY pe.`PE_ID`
        ORDER BY COUNT(*) DESC
        LIMIT 1)
        GROUP BY m.`M_ID`
        ORDER BY COUNT(*) DESC
        LIMIT 1;";
      $hasil = mysqli_query($sqlconnect,$sql);

      if($hasil->num_rows != 0){

        while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
          $data[] = $row;
          }     

          $hasil = ["sEcho" => 1,
          "iTotalRecords" => count($data),
          "iTotalDisplayRecords" => count($data),
          "aaData" => $data ];

      echo json_encode($hasil);
}
?>