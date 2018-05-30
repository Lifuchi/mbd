
<?php
// if(isset($_POST['save'])){
      require( '../../connect.php');
    // $mselect = $_POST['mselect'] ;
    // $tselect = $_POST['tselect'] ;    
      $sql = "call fpRifka(4, 2018)";
      $hasil = mysqli_query($sqlconnect,$sql);
  // }

  $sql = "SELECT * FROM pegawai WHERE P_JABATAN = 'koki';";
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