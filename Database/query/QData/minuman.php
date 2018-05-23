<?php
      require( '../../connect.php');
       $sql = "SELECT M_NAMA, M_HARGA FROM menu where M_ID = 'MI%'";
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