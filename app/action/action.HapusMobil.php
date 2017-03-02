<?php
	$id = base64_decode($_GET['i']);

	$x = new mobil($db);
	$c = $x -> hapus($id);

	if($c =='ok'){
		echo "<script>window.location='index.php?page=data/mobil&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/mobil&status=gagal'</script>";
	}