<?php
	$id = base64_decode($_GET['i']);

	$x = new karyawan($db);
	$c = $x -> hapus($id);

	if($c =='ok'){
		echo "<script>window.location='index.php?page=data/karyawan&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/karyawan&status=gagal'</script>";
	}