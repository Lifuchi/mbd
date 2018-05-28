<?php

if(isset($_POST['submit-search'])){
  require( '../../connect.php');
  $nomenu = $_POST['menuid'] ;
  $noharga = $_POST['harga'];
	$sql = "UPDATE MENU SET M_HARGA='$noharga' WHERE M_ID='$nomenu';";
	$hasil = mysqli_query($sqlconnect,$sql);
  header("location:../../../Page/Soal/Rview.php");
  exit;
}
?>