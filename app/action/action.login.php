<?php
	
	session_start();

	$u = $_POST['username'];
	$p = $_POST['password'];


	$x = new akun($db);

	$l = $x -> login($u,$p);

	if($_SESSION['AKUN'])
	{
		header('location:index.php');
	}else{
		echo "<script>alert('gagal masuk!')</script>";
		echo '<script>window.location="login.php"</script>';
	}