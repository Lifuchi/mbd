<?php
if(isset($_POST['hapus'])){
    require( '../../connect.php');
	$sql = "CALL nomer3();";
	$hasil = mysqli_query($sqlconnect,$sql);
      if(mysqli_affected_rows($hasil) > 0){

            echo "<script type='text/javascript'>alert('Dihapus')
            window.location.replace(\"../../../Page/Soal/Rview.php\");</script>";

        	}else{
             echo "<script type='text/javascript'>alert('Tidak ada data');
             window.location.replace(\"../../../Page/Soal/Rview.php\");</script>";

        	}


  exit();
}
?>