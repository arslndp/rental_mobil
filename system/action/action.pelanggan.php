<?php
	
class pelanggan
{

	protected $db;

	function __construct($db)
	{
		$this->db = $db;
	}

		function tambah($ktp,$nmp,$almt,$tlp)
		{
			$sql = "INSERT INTO 
					tb_pelanggan(NoKtp,NamaPel,AlamatPel,TelpPel)
					VALUES
					(?,?,?,?)";
			$x = $this->db -> prepare($sql);
			$x -> execute(array($ktp,$nmp,$almt,$tlp));
			if ($x) {
				return 'ok';
			}else{
				return 'fail';
			}
		}

		function fetch()
		{
			$sql = "SELECT tb_pelanggan.* , tb_transaksi_sewa.*
					FROM tb_pelanggan 
					INNER JOIN tb_transaksi_sewa ON tb_pelanggan.NoKtp = tb_transaksi_sewa.NoKtp
					ORDER BY tb_transaksi_sewa.TglPesan";
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$j = $x -> fetchAll();
			return $j;
		}

		function hapus($i)
		{
			$sql ='DELETE FROM tb_pelanggan WHERE NoKtp = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($i));
			if ($x) {
			 	return 'ok';
			 } else{
			 	return 'fail';
			 }
		}

		function edit($nm,$alm,$tlp,$ktp)
		{
			$sql = 'UPDATE tb_pelanggan SET NamaPel = ? , 
										AlamatPel = ? , 
										TelpPel = ? 
					WHERE NoKtp = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($nm,$alm,$tlp,$ktp));
			
			if($x){
				return 'ok';
			}else{
				return 'fail';
			}
		}

}