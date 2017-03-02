<?php
	$x = new sopir($db);
	$nama 		= $_POST['nama'];
	$alamat 	= $_POST['alamat'];
	$telp		= $_POST['telp'];
	$noSim		= $_POST['sim'];
	$tarif 		= $_POST['tarif'];

	$ec = $x -> tambah($nama,$alamat,$telp,$noSim,$tarif);

	if ($ec == 'ok') {
		echo "<script>window.location='index.php?page=data/sopir&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/sopir&status=gagal'</script>";
	}