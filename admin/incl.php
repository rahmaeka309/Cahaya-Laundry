<?php
$a = $_GET['page'];
switch ($a) {
	case 'nav':
		include"nav/nav.php";
		break;
	case 'dashboard':
		include"dashboard/dashboard.php";
		break;
	case 'outlet':
		include"data/outlet.php";
		break;
	case 'user':
		include"data/user.php";
		break;
	case 'paket':
		include"data/paket.php";
		break;
	case 'member':
		include"data/member.php";
		break;
	case 'transaksi':
		include"data/transaksi.php";
		break;
	case 'hapus':
		include"hapus.php";
		break;
	case 'edit':
		include"edit.php";
		break;
	case 'tambah':
		include"data/tambah_transaksi.php";
		break;		
	default;
		include"dashboard/dashboard.php";
		break;
	}
?>