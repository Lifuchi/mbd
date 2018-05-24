<?php
      require( '../../Database/connect.php');
      $tsearch = $_GET['tselect'];
      $msearch = $_GET['mselect'] ;
       $sql = "CREATE OR REPLACE VIEW nomer1 AS 
        SELECT m.M_ID , m.M_NAMA 
        FROM transaksi t JOIN detil_transaksi dt ON t.T_ID = dt.T_ID AND MONTH(t.T_TGLTRANSAKSI) = $msearch AND YEAR(t.T_TGLTRANSAKSI) = $tsearch
        JOIN menu m ON m.M_ID = DT.M_ID; ";
      
      $hasils = mysqli_query($sqlconnect,$sql);

      $sql = "SELECT distinct * from nomer1;";

      $hasil = mysqli_query($sqlconnect,$sql);
     header("location:../../../Page/Soal/Rview.php");

?>