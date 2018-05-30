<?php

if(isset($_POST['submit-add'])){
  require( '../../connect.php');
  $id = $_POST['menuid'] ;
   $nama = $_POST['nama'] ;
  $jenis = $_POST['jenis'];
  $harga = $_POST['harga'];
	$sql = "INSERT INTO MENU VALUES ('$id', '$nama', '$jenis', $harga);";
	$hasil = mysqli_query($sqlconnect,$sql);
  header("location:../../../Page/Soal/Rview.php");
  exit;
}
?>