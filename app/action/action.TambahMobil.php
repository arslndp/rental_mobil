<?php 

//  Data Mobil
/* ----------------------- */

	$npt = $_POST['npt'];
	$thn = $_POST['thn'];
	$tpj = $_POST['tpj'];
	$sts = $_POST['stat'];
	$typ = $_POST['type'];
	$mrk = $_POST['mrk'];

/* ----------------------- */

// Data Pemilik
/* ------------------------ */
	
	$nmpk = $_POST['nmpk'];
	$ampk = $_POST['ampk'];
	$tepk = $_POST['tepk'];

/* ------------------------ */

$rnt = 'N';
$f = new mobil($db);
$x = $f -> tambah($npt,$typ,$mrk,$thn,$tpj,$rnt,$nmpk,$ampk,$tepk);

if ($x == 'ok') {
		echo "<script>window.location='index.php?page=data/mobil&status=sukses'</script>";
}else{
		echo "<script>window.location='index.php?page=data/mobil&status=gagal'</script>";
}