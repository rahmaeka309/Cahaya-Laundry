<?php 
	session_start();
	if (isset($_SESSION['username'])){
		session_destroy();
		?>
		<script>alert('Anda Berhasil Keluar');document.location.href='http://localhost/laundry/admin/login.php';</script>
		<?php
	}
?>