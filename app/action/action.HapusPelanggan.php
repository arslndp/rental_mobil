<?php
	$id = base64_decode($_GET['i']);

	$x = new pelanggan($db);
	$c = $x -> hapus($id);

	if($c =='ok'){
		echo "<script>window.location='index.php?page=data/pelanggan&status=sukses'</script>";
	}else{
		echo "<script>window.location='index.php?page=data/pelanggan&status=gagal'</script>";
	}