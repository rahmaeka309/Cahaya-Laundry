<?php 
  include '../lib/koneksi.php';  
  $username=$_POST['username'];
  $password=$_POST['password'];
    $sql=$conn->query("SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    $row=$sql->num_rows;
    $cek=$sql->fetch_array();
      if ($row>0) {
        session_start();
        $_SESSION['username']=$cek['username'];
        echo "<script>document.location.href='http://localhost/laundry/admin/'</script>";
      }else{
        echo "<script>alert('Anda Gagal Masuk!');document.location.href='http://localhost/laundry/admin/login.php'</script>";
      }
?>