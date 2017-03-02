<?php
defined('BASEPATH') Or exit('no direct link');

class akun
{
	protected $db;

	function __construct($db)
	{
		$this->db = $db;
	}

		function login($u,$p)
		{
			$sql = 'SELECT tb_karyawan.* , tb_login.*
					FROM tb_login
					INNER JOIN tb_karyawan ON tb_login.nik = tb_karyawan.nik
					WHERE tb_login.username = ?
					AND tb_login.password = md5(?)';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($u,$p));
			$r = $x ->rowCount();

			if($r == '1')
			{
				session_start();
				$f = $x -> fetch();
				$_SESSION['AKUN'] = $f;
				return $_SESSION['AKUN'];
			}else{
				return 'fail';
			}
		}

		function daftar($u,$p,$e,$a,$n)
		{
			/* ------------------------------------------------------------------- */
			$date_join = date('Y-m-d H:i:S');
			$sql = 'INSERT INTO tb_akun(nama_akun,date_join,email,alamat,no_phone)
					VALUES(?,?,?,?,?)';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($u,$date_join,$e,$a,$n));
			/* ------------------------------------------------------------------- */
			$q = "SELECT * FROM tb_akun WHERE username = ?";
			$xj = $this->db -> prepare($q);
			$xj -> execute(array($u));
			$fj = $xj-> fetch();
			/* ------------------------------------------------------------------- */
			if($x)
			{
				$sql_i = "INSERT INTO tb_login(id_akun,username,password,date_login)
						  VALUES(?,?,md5(?),?)";
				$xi = $this->db -> prepare($sql_i);
				$xi -> execute(array($fj['id_akun'],$u,$p,$date_join));
				if ($xi) {
					return 'ok';
				}else{
					return 'fail2';
				}
			}
			else{
				return 'fail';
			}
			/* ------------------------------------------------------------------- */
		}
}