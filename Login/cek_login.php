<?php 
 	include 'Database/connect.php';
 
	$username = $_POST['form-username'];
	$password = md5($_POST['form-password']);

	// user: admin 
	// pass: resto2018
	 
	if("$username='admin' AND password='a2fc965467755bdb9b82c7fa9c28e79c'"){
		session_start();

		// if (!empty($_POST['remember'])) {
		// 	unset($_COOKIE['username']);
		// 	unset($_COOKIE['password']);
		// 	setcookie("username",$username,time()+ (3600 * 24));
		// 	setcookie("password",$password,time()+ (3600 * 24));
		// }

		$_SESSION['username'] = $username;
		$_SESSION['login'] = $username;
		$_SESSION['status'] = "login";
		header("location:../Page/admin.php");
		
	}else{
		echo "<script type='text/javascript'>alert('Username/Password salah')</script>";
	}

?>
