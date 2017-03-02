<?php
	$id = base64_decode($_GET['i']);

	$x = new sopir($db);
	$c = $x -> hapus($id);

	if($c =='ok'){
		echo "<script>window.location='index.php?page=data/sopir&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/sopir&status=gagal'</script>";
	}