
<?php
      require( '../../connect.php');
$sql = "CREATE OR REPLACE VIEW pemasukan AS
(SELECT MONTH(t.`T_TGLTRANSAKSI`) AS 'bulan', YEAR(t.`T_TGLTRANSAKSI`) AS 'tahun',
  SUM(CASE WHEN t.d_id IS NULL THEN dt.dt_jumlah*m.`M_HARGA` 
  WHEN t.d_id IS NOT NULL THEN dt.dt_jumlah*m.`M_HARGA`*(1-d.d_besardiskon) ELSE 0 END) AS 'pemasukan'
FROM TRANSAKSI t
LEFT JOIN DISKON d ON t.`D_ID` = d.`D_ID`
LEFT JOIN DETIL_TRANSAKSI dt ON t.`T_ID` = dt.`T_ID`
LEFT JOIN MENU m ON dt.`M_ID` = m.`M_ID`
GROUP BY MONTH(t.`T_TGLTRANSAKSI`), YEAR(t.`T_TGLTRANSAKSI`));";
      $hasil2 = mysqli_query($sqlconnect,$sql);
$sql1 = "SELECT * from pemasukan";
 $hasil = mysqli_query($sqlconnect,$sql1);
      if($hasil->num_rows > 0){

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