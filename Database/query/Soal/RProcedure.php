<?php
if(isset($_POST['hapus'])){
    require( '../../connect.php');
	$sql = "CALL nomer3();";
	$hasil = mysqli_query($sqlconnect,$sql);
      if($hasil->num_rows > 0){

            echo "<script type='text/javascript'>alert('Dihapus')</script>";

        	}else{
        		echo "tidak ada";	
            
        	}
  exit();
}
?>