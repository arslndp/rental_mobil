<?php
defined('BASEPATH') Or exit('no direct link');

/* ---------------------------- */
class karyawan
{

	protected $db;

	function __construct($db)
	{
		$this->db = $db;
	}

		function countKaryawan()
		{
			$sql = 'SELECT * FROM tb_karyawan';
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$c = $x -> rowCount();
			if ($c) {
				return $c;
			}else{
				return 'fail';
			}
		}

		function tambah($nm,$alm,$tel,$user,$pass,$type)
		{
			$sql = 'SELECT * FROM tb_karyawan';
			$v = $this->db -> prepare($sql);
			$v -> execute();
			$rv = $v -> rowCount();

			$art = $rv+1;

			$id = 'DK'.$art;

			$q = "INSERT INTO tb_karyawan(nik , NmKaryawan , AlmtKaryawan , TelpKaryawan)
				  VALUES(?,?,?,?)";
			$x = $this->db -> prepare($q);
			$x -> execute(array($id,$nm,$alm,$tel));

			if ($x) {
				$s = "INSERT INTO tb_login(nik ,username , password , TypeUser)
					  VALUES(?,?,md5(?),?)";
				$j = $this->db -> prepare($s);
				$j -> execute(array($id,$user,$pass,$type));
				if ($j) {
					return 'ok';
				}else{
					return 'fail';
				}
			}else{
				return 'fail';
			}

		}

		function fetch()
		{
			$sql = 'SELECT tb_karyawan.* , tb_login.* 
					FROM tb_karyawan
					INNER JOIN tb_login ON tb_karyawan.nik = tb_login.nik';
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$f = $x -> fetchAll();
			return $f;
		}

		function edit($nm,$alm,$tlp,$id,$user,$pass,$type)
		{
			$sql = 'UPDATE tb_karyawan SET NmKaryawan = ? , 
										AlmtKaryawan = ? , 
										TelpKaryawan = ? 
					WHERE nik = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($nm,$alm,$tlp,$id));
			
			if($x){
				$q = "UPDATE tb_login SET username  = ?,
										  password 	= md5(?),
										  TypeUser 	= ?
					  WHERE nik = ?";
				$j = $this->db -> prepare($q);
				$j -> execute(array($user,$pass,$type,$id));
				if ($j) {
					return 'ok';
				}else{
					return 'fail';
				}
			}else{
				return 'fail';
			}
		}

		function hapus($i)
		{
			$sql ='DELETE FROM tb_karyawan WHERE nik = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($i));
			if ($x) {
			 	$q = "DELETE FROM tb_login WHERE nik = ?";
			 	$j = $this->db -> prepare($q);
			 	$j -> execute(array($i));
			 	if ($j) {
			 		return 'ok';
			 	}else{
			 		return 'fail';
			 	}
			 } else{
			 	return 'fail';
			 }
		}

}