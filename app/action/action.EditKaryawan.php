<?php
	$nm		= $_POST['nama'];
	$alm	= $_POST['alamat'];
	$tlp	= $_POST['telp'];
	$id		= $_POST['id'];
	$user 	= $_POST['username'];
	$pass 	= $_POST['password'];
	$type 	= $_POST['type'];

	$e = new karyawan($db);
	$x = $e -> edit($nm,$alm,$tlp,$id,$user,$pass,$type);

	if($x == 'ok'){
		echo "<script>window.location='index.php?page=data/karyawan&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/karyawan&status=gagal'</script>";
	}