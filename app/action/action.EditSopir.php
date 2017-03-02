<?php
	
	$nm		= $_POST['nama'];
	$alm	= $_POST['alamat'];
	$tlp	= $_POST['telp'];
	$sim	= $_POST['sim'];
	$trf	= $_POST['trf'];
	$id		= $_POST['id'];

	$e = new sopir($db);
	$x = $e -> edit($nm,$alm,$tlp,$sim,$trf,$id);

	if($x == 'ok'){
		echo "<script>window.location='index.php?page=data/sopir&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/sopir&status=gagal'</script>";
	}