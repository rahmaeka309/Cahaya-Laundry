<?php 
	$a=$_GET['deleting'];
	$b=$_GET['id'];
	switch ($a) {
		case "del-outlet";
			$sql=$conn->query("DELETE FROM tb_outlet WHERE id_outlet='$b'") or die($conn->error);
			if($sql){
				echo "<script>alert('Data Berhasil di Hapus');
				document.location.href='?page=outlet'</script>";
			}else{
				echo "Gagal";
			}
		break;
		case "del-paket";
			$sql=$conn->query("DELETE FROM tb_paket WHERE id_paket='$b'") or die($conn->error);
			if($sql){
				echo "<script>alert('Data Berhasil di Hapus');
				document.location.href='?page=paket'</script>";
			}else{
				echo "Gagal";
			}
		break;
		case "del-member";
			$sql=$conn->query("DELETE FROM tb_member WHERE id_member='$b'") or die($conn->error);
			if($sql){
				echo "<script>alert('Data Berhasil di Hapus');
				document.location.href='?page=member'</script>";
			}else{
				echo "Gagal";
			}
		break;
		case "del-user";
			$sql=$conn->query("DELETE FROM tb_user WHERE id_user='$b'") or die($conn->error);
			if($sql){
				echo "<script>alert('Data Berhasil di Hapus');
				document.location.href='?page=user'</script>";
			}else{
				echo "Gagal";
			}
		break;
		case "del-transaksi";
			$sql=$conn->query("DELETE FROM tb_transaksi WHERE id_transaksi='$b'") or die($conn->error);
			if($sql){
				echo "<script>alert('Data Berhasil di Hapus');
				document.location.href='?page=transaksi'</script>";
			}else{
				echo "Gagal";
			}
		break;
	}
 ?>