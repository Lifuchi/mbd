<?php 
// if(isset($_POST['logout'])){
// 	$_SESSION = array();
// 	session_destroy();
// 	header("Location: index.php");
// 	exit();
// }

session_start();
unset($_SESSION['login']);
header("Location: index.php");

?>

