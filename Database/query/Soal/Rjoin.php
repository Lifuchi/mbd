
<?php
      require( '../../connect.php');
$sql = "SELECT p.`P_NAMA` AS pegawai, pe.`PE_NAMA` AS pelanggan, t.`T_ID` ,d.`D_NAMA` AS Diskon ,ROUND(SUM(me.`M_HARGA`*dt.`DT_JUMLAH`)*(1-d.`D_BESARDISKON`))  AS harga
FROM transaksi t JOIN diskon d ON t.`D_ID` = d.`D_ID`
JOIN melayani m ON m.`T_ID` = t.`T_ID`
JOIN pegawai p ON p.`P_ID` = m.`P_ID` AND p.`P_JABATAN` = 'kasir'
JOIN detil_transaksi dt ON dt.`T_ID` = t.`T_ID`
JOIN menu me ON me.`M_ID` = dt.`M_ID`
JOIN pelanggan pe ON pe.`PE_ID` = t.`PE_ID`
GROUP BY  p.`P_NAMA`, p.`P_JABATAN` , pe.`PE_NAMA`;
";
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