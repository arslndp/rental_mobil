<?php
	$x = new karyawan($db);
	$nama 		= $_POST['nama'];
	$alamat 	= $_POST['alamat'];
	$telp		= $_POST['telp'];
	$pass 		= $_POST['password'];
	$user		= $_POST['username'];
	$type 		= $_POST['type'];

	$ec = $x -> tambah($nama,$alamat,$telp,$user,$pass,$type);

	if ($ec == 'ok') {
		echo "<script>window.location='index.php?page=data/karyawan&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/karyawan&status=gagal'</script>";
	}