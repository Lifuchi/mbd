<?php 
 	include '../Database/connect.php';
	session_start();

	$username = $_POST['form-username'];
	$password = md5($_POST['form-password']); 
// AND $password='a2fc965467755bdb9b82c7fa9c28e79c'
	// user: admin 
	// pass: resto2018
	if(isset($_POST['login'])){
			if(isset($_POST['form-username'])){
					if( $username=='admin' and  $password=='a2fc965467755bdb9b82c7fa9c28e79c' ){

							
							// if (!empty($_POST['remember'])) {
							// 	unset($_COOKIE['username']);
							// 	unset($_COOKIE['password']);
							// 	setcookie("username",$username,time()+ (3600 * 24));
							// 	setcookie("password",$password,time()+ (3600 * 24));
							// }

							$_SESSION['username'] = $username;
							$_SESSION['login'] = $username;
							$_SESSION['status'] = "login";
							header("location:../index.php");
				}else{
					echo "<script type='text/javascript'>alert('Username/Password salah')</script>";
					
					header("location:login.php");
				}
	}
}

?>
