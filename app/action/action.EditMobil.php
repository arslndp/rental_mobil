<?php

$plt = $_POST['plt'];
$thn = $_POST['thn'];
$tpj = $_POST['tpj'];
$sts = $_POST['stat'];
$typmbl = $_POST['type'];
$mrk = $_POST['mrk'];

$x = new mobil($db);
$e = $x -> edit($mrk,$typmbl,$thn,$tpj,$stat,$plt);

if ($e) 
{
	echo "<script>window.location='index.php?page=data/mobil&status=sukses'</script>";	
}
else
{
	echo "<script>window.location='index.php?page=data/mobil&status=gagal'</script>";
}