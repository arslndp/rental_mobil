<?php
	$nm		= $_POST['nama'];
	$alm	= $_POST['alamat'];
	$tlp	= $_POST['telp'];
	$id		= $_POST['id'];

	$e = new pelanggan($db);
	$x = $e -> edit($nm,$alm,$tlp,$id);

	if($x == 'ok'){
		echo "<script>window.location='index.php?page=data/pelanggan&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/pelanggan&status=gagal'</script>";
	}