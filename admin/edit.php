<?php 
  $a = $_GET['ganti'];
  $b  = $_GET['id'];
    switch($a){
      case"edit-outlet";
        $SQL = $conn->query("SELECT*FROM tb_outlet WHERE id_outlet = $b");
        $v = $SQL -> fetch_array();
    ?>
<!-- ===EDIT DATA OUTLET === -->
<div class="white-box">
    <h3 class="box-title m-b-0">Data Outlet</h3>
    <div class="row">
        <div class="white-box">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        	<input type="hidden" name="id_outlet" value="<?=$v['id_outlet'];?>">
                            <label for="email">Nama Outlet :</label>
                            <input type="text" class="form-control" name="nm_outlet" value="<?=$v['nama_outlet'];?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Alamat :</label>
                            <input type="text" class="form-control" name="almt" value="<?=$v['alamat'];?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Telepon :</label>
                            <input type="text" class="form-control" name="tlpn" value="<?=$v['tlp_outlet'];?>">
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 25px;">
                        <button type="submit" name="btn" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div> 
                </div>
            </form>                
        </div>
    </div>
</div>
<?php
 if(isset($_POST['btn'])){
    $a=$_POST['nm_outlet'];
    $b=$_POST['almt'];
    $c=$_POST['tlpn'];
    $SQLi=$conn->query("UPDATE tb_outlet SET nama_outlet='$a', alamat='$b', tlp_outlet='$c' WHERE id_outlet='$_POST[id_outlet]'") or die($conn->error) ;
    
  if($SQLi){
    echo"<script>alert('Berhasil diubah!');document.location.href='?page=outlet'</script>";
  }else{
    echo"<script>alert('Gagal mengubah!');document.location.href='?page=outlet'</script>";
  }
}
		break;
		case"edit-paket";
		        $SQL = $conn->query("SELECT*FROM tb_paket WHERE id_paket = $b");
		        $v = $SQL -> fetch_array();
?>
<!-- === EDIT DATA PAKET === -->
<div class="white-box">
    <h3 class="box-title m-b-0">Data Paket</h3>
    <div class="row">
        <div class="white-box">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="hidden" name="id_paket" value="<?=$v['id_paket'];?>">
                            <label for="email">Nama Outlet :</label>
                            <select name="nm_outlet" class="form-control" value="<?=$v['id_outlet'];?>">
                                <?php 
                                    $SQLi = $conn->query("SELECT*FROM tb_outlet");
                                    while ($vie = $SQLi->fetch_array()) {
                                    echo "<option value='$vie[id_outlet]'>".$vie['nama_outlet']."</option>";
                                    }
                                ?>          
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Jenis :</label>
                            <select name="jns" class="form-control" value="<?=$v['jenis'];?>">
                                <option><?=$v['jenis'];?></option>
                                <option>Kiloan</option>
                                <option>Selimut</option>
                                <option>Bed Cover</option>
                                <option>Kaos</option>
                                <option>Lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Nama Paket :</label>
                            <input type="text" class="form-control" name="nm_paket" value="<?=$v['nama_paket'];?>">
                    	</div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Harga :</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" class="form-control" name="hrg" value="<?=$v['harga'];?>">
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 25px;">
                        <button type="submit" name="btn" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<?php
 if(isset($_POST['btn'])){
    $a=$_POST['nm_outlet'];
    $b=$_POST['jns'];
    $c=$_POST['nm_paket'];
    $d=$_POST['hrg'];
    $SQLi=$conn->query("UPDATE tb_paket SET id_outlet='$a', jenis='$b', nama_paket='$c', harga='$d' WHERE id_paket='$_POST[id_paket]'") or die($conn->error) ;
    
  if($SQLi){
    echo"<script>alert('Berhasil diubah!');document.location.href='?page=paket'</script>";
  }else{
    echo"<script>alert('Gagal mengubah!');document.location.href='?page=paket'</script>";
  }
}
        break;
        case"edit-member";
            $SQL = $conn->query("SELECT*FROM tb_member WHERE id_member = $b");
            $v = $SQL -> fetch_array();
?>
<!-- === EDIT DATA PASOK === -->
<div class="white-box"> 
    <h3 class="box-title m-b-0">Data Member</h3>
    <div class="row">
        <div class="white-box">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="hidden" name="id_member" value="<?=$v['id_member'];?>">
                            <label for="email">Nama Member :</label>
                            <input type="text" class="form-control" name="nm_member" value="<?=$v['nama_member'];?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Alamat :</label>
                            <input type="text" class="form-control" name="almt" value="<?=$v['alamat'];?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Jenis Kelamin :</label>
                            <input type="text" class="form-control" name="jns_klmn" value="<?=$v['jenis_kelamin'];?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Telepon :</label>
                            <input type="text" class="form-control" name="tlp" value="<?=$v['tlp_member'];?>">
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 25px;">
                        <button type="submit" name="btn" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<?php
 if(isset($_POST['btn'])){
    $a=$_POST['nm_member'];
    $b=$_POST['almt'];
    $c=$_POST['jns_klmn'];
    $d=$_POST['tlp'];
    $SQLi=$conn->query("UPDATE tb_member SET nama_member='$a', alamat='$b', jenis_kelamin='$c', tlp_member='$d' WHERE id_member='$_POST[id_member]'") or die($conn->error) ;
    
  if($SQLi){
    echo"<script>alert('Berhasil diubah!');document.location.href='?page=member'</script>";
  }else{
    echo"<script>alert('Gagal mengubah!');document.location.href='?page=member'</script>";
  }
}
break;
case"edit-user";
    $SQL = $conn->query("SELECT*FROM tb_user WHERE id_user = $b");
    $v = $SQL -> fetch_array();
?>
<!-- === EDIT DATA USER === -->
<div class="white-box"> 
    <h3 class="box-title m-b-0">Data User</h3>
    <div class="row">
        <div class="white-box">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="hidden" name="id_user" value="<?=$v['id_user'];?>">
                            <label for="email">Nama User :</label>
                            <input type="text" class="form-control" name="nm" value="<?=$v['nama_user'];?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Username :</label>
                            <input type="text" class="form-control" name="usernm" value="<?=$v['username'];?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Password :</label>
                            <input type="text" class="form-control" name="pass" value="<?=$v['password'];?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Nama Outlet :</label>
                            <select name="outlet" class="form-control" value="<?=$v['id_outlet'];?>">
                                <?php 
                                    $SQLi = $conn->query("SELECT*FROM tb_outlet");
                                    while ($vie = $SQLi->fetch_array()) {
                                    echo "<option value='$vie[id_outlet]'>".$vie['nama_outlet']."</option>";
                                    }
                                ?>          
                            </select>
                        </div>
                    </div>                            
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="email">Role/Akses :</label>
                            <input type="text" class="form-control" name="role" value="<?=$v['role'];?>">
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 25px;">
                        <button type="submit" name="btn" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<?php
 if(isset($_POST['btn'])){
    $a=$_POST['nm'];
    $b=$_POST['usernm'];
    $c=$_POST['pass'];
    $d=$_POST['outlet'];
    $e=$_POST['role'];
    $SQLi=$conn->query("UPDATE tb_user SET nama_user='$a', username='$b', password='$c', id_outlet='$d', role='$d' WHERE id_user='$_POST[id_user]'") or die($conn->error) ;
    
  if($SQLi){
    echo"<script>alert('Berhasil diubah!');document.location.href='?page=user'</script>";
  }else{
    echo"<script>alert('Gagal mengubah!');document.location.href='?page=user'</script>";
  }
}
    break;
    case"edit-transaksi";
        $SQL = $conn->query("SELECT*FROM tb_transaksi WHERE id_transaksi = $b");
        $v = $SQL -> fetch_array();
?>
<!-- === EDIT DATA TRANSAKSI === -->
<div class="white-box"> 
    <h3 class="box-title m-b-0">Data Transaksi</h3>
    <div class="row">
        <div class="white-box">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Nama Outlet :</label>
                            <input type="hidden" name="id_transaksi" value="<?=$v['id_transaksi'];?>">
                            <select name="nm_outlet" class="form-control" value="<?=$v['id_outlet'];?>">
                                <?php 
                                    $SQLi = $conn->query("SELECT*FROM tb_outlet");
                                    while ($vie = $SQLi->fetch_array()) {
                                    echo "<option value='$vie[id_outlet]'>".$vie['nama_outlet']."</option>";
                                    }
                                ?>          
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Kode Invoice :</label>
                            <div class="input-group">
                                <span class="input-group-addon">KOD</span>
                                <input type="text" class="form-control" name="kode" value="<?=$v['kode_invoice'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Nama Member :</label>
                            <select name="nm_mmbr" class="form-control" value="<?=$v['id_member'];?>">
                                <?php 
                                    $SQLi = $conn->query("SELECT*FROM tb_member");
                                    while ($vie = $SQLi->fetch_array()) {
                                    echo "<option value='$vie[id_member]'>".$vie['nama_member']."</option>";
                                    }
                                ?>          
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Tanggal :</label>
                            <input type="date" class="form-control" name="tgl" value="<?=$v['tgl'];?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Batas Waktu  :</label>
                            <input type="date" class="form-control" name="bts_wkt" value="<?=$v['batas_waktu'];?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Tanggal Bayar :</label>
                            <input type="date" class="form-control" name="tgl_byr" value="<?=$v['tgl_bayar'];?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Biaya Tambahan :</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" class="form-control" name="hrg" value="<?=$v['biaya_tambahan'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="email">Diskon :</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="dskn" value="<?=$v['diskon'];?>">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="email">Pajak :</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="pjk" value="<?=$v['pajak'];?>">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Status :</label>
                            <select class="form-control" name="stts" value="<?=$v['status'];?>">
                                <option value="Baru">Baru</option>
                                <option value="Proses">Proses</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Diambil">Diambil</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Dibayar :</label>
                            <select class="form-control" name="dbyr" value="<?=$v['dibayar'];?>">
                                <option value="Dibayar">Dibayar</option>
                                <option value="Belum_dibayar">Belum Dibayar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Nama User :</label>
                            <select name="nm_user" class="form-control" value="<?=$v['id_user'];?>">
                                <?php 
                                    $SQLi = $conn->query("SELECT*FROM tb_user");
                                    while ($vie = $SQLi->fetch_array()) {
                                    echo "<option value='$vie[id_user]'>".$vie['nama_user']."</option>";
                                    }
                                ?>          
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 25px;">
                        <button type="submit" name="btn" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<?php 
    if (isset($_POST['btn'])) {
        $a=$_POST['nm_outlet'];
        $b=$_POST['kode'];
        $c=$_POST['nm_mmbr'];
        $d=$_POST['tgl'];
        $e=$_POST['bts_wkt'];
        $f=$_POST['tgl_byr'];
        $g=$_POST['hrg'];
        $h=$_POST['dskn'];
        $i=$_POST['pjk'];
        $j=$_POST['stts'];
        $k=$_POST['dbyr'];
        $l=$_POST['nm_user'];

        $SQLi=$conn->query("UPDATE tb_transaksi SET id_outlet='$a', kode_invoice='$b', id_member='$c', tgl='$d', batas_waktu='$e', tgl_bayar='$f', biaya_tambahan='$g', diskon='$h', pajak='$i', status='$j', dibayar='$k', id_user='$l' WHERE id_transaksi='$_POST[id_transaksi]'") or die($conn->error) ;
    
    if($SQLi){
        echo"<script>alert('Berhasil diubah!');document.location.href='?page=transaksi'</script>";
    }else{
        echo"<script>alert('Gagal mengubah!');document.location.href='?page=transaksi'</script>";
    }
}
break;           
}

?>    