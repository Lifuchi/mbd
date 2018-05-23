<?php 
 	include 'connect.php';
 
	$username = 'admin'
	$password = 'a2fc965467755bdb9b82c7fa9c28e79c';
	 
	$login = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($login);
	 
	if($cek == 1){
		session_start();

		if (!empty($_POST['remember'])) {
			unset($_COOKIE['username']);
			unset($_COOKIE['password']);
			setcookie("username",$username,time()+ (3600 * 24));
			setcookie("password",$password,time()+ (3600 * 24));
		}

		$_SESSION['username'] = $username;
		$_SESSION['login'] = $username;
		$_SESSION['status'] = "login";
		header("location:Page/admin.php");
		
	}else{
		echo "<script type='text/javascript'>alert('Username/Password salah')</script>";
	}

?>
