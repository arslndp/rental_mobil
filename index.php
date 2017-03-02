<?php

	session_start();

/* ---------------------------------------------------- */
	define('BASEPATH', 'system/');
/* ---------------------------------------------------- */


/* ---------------------------------------------------- */

	require 'system/lib/lib.env.php';

	require 'system/action/action.akun.php';

	require 'system/action/action.karyawan.php';

	require 'system/action/action.sopir.php';

	require 'system/action/action.mobil.php';

	require 'system/action/action.pelanggan.php';

	require 'system/action/action.transaksi.php';

	require 'system/db/db.config.php';

/* ---------------------------------------------------- */
	
	if($_SESSION['AKUN'])
	{

		/* ---------------------------------------------------- */

			include 'app/view/blade.header.php';

		/* ---------------------------------------------------- */


			if(!empty($_GET['page']))
			{

				include 'app/page/'.$_GET['page'].'/index.php';

			}else{

				if( ! empty($_GET['action']))
				{
					include 'app/action/action.'.$_GET['action'].'.php';
				}else{
					include 'app/view/blade.home.php';
				}

			}

		/* ---------------------------------------------------- */

			include 'app/view/blade.footer.php';

		/* ---------------------------------------------------- */
	}else{

		echo "<script>window.location='login.php'</script>";

	}