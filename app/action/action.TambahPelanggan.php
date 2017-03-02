<?php
/* ------------------------------------------- */
$ktp  = $_POST['ktp'];
$nama = $_POST['nama'];
$almt = $_POST['almt'];
$tlp  = $_POST['telp'];
$npt  = $_POST['npt'];
$nik  = $_SESSION['AKUN']['nik'];
$ids  = $_POST['ids'];
$tgpe = date('Y-m-d');
$tgpi = $_POST['thpi'].'-'.$_POST['bpi'].'-'.$_POST['tpi']; //
//$bpi  = $_POST['bpi']; // #
//$thpi = $_POST['thpi']; // #
$jmpi = $_POST['jpi'];
$tkr  = $_POST['thrk'].'-'.$_POST['brk'].'-'.$_POST['tgrk']; //
//$brk  = $_POST['brk']; // #
//$thrk = $_POST['thrk']; // #
$jkr  = $_POST['jkr'];
$kimp = $_POST['kmpi'];
$bbpi = $_POST['bbmpi'];
$komp = $_POST['kompi'];

/* -------------------------------------------- */



/* -------------------------------------------- */
$x = new pelanggan($db);
$j = $x -> tambah($ktp,$nama,$almt,$tlp);

$k = new transaksi($db);
$c = $k -> tambah($ktp,$npt,$nik,$ids,$tgpe,$tgpi,$jmpi,$tkr,$jkr,$kimp,$bbpi,$komp);

if ($c == 'ok') {
	echo "<script>window.location='index.php?page=data/pelanggan&status=sukses'</script>";
	echo "ok";
}else{
	echo "fail";
	echo "<script>window.location='index.php?page=data/pelanggan&status=gagal'</script>";
}