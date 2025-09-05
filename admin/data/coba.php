<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="col-sm-6"> 
                <h3 class="box-title m-b-0">Data Transaksi</h3>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="margin-left:500px;">+ Tambah Data</button>
            </div>
            <div class="row">
                    <div class="white-box">
                        <!--modal-->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Data Transaksi</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="formroles">
                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Nama Outlet :</label>
                                                            <select name="nm_outlet" class="form-control">
                                                                <?php 
                                                                    $SQLi = $conn->query("SELECT*FROM tb_outlet");
                                                                    while ($vie = $SQLi->fetch_array()) {
                                                                    echo "<option value='$vie[id_outlet]'>".$vie['nama_outlet']."</option>";
                                                                    }
                                                                ?>          
                                                            </select>
                                                        </div>
                                                    </div><br>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Nama Member :</label>
                                                            <select name="nm_mmbr" class="form-control">
                                                                <?php 
                                                                    $SQLi = $conn->query("SELECT*FROM tb_member");
                                                                    while ($vie = $SQLi->fetch_array()) {
                                                                    echo "<option value='$vie[id_member]'>".$vie['nama_member']."</option>";
                                                                    }
                                                                ?>          
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Kode Invoice :</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">KOD</span>
                                                                <input type="text" class="form-control" name="kode">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Tanggal :</label>
                                                            <input type="date" class="form-control" name="tgl">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Batas Waktu  :</label>
                                                            <input type="date" class="form-control" name="bts_wkt">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Tanggal Bayar :</label>
                                                            <input type="date" class="form-control" name="tgl_byr">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Biaya Tambahan :</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">Rp.</span>
                                                                <input type="text" class="form-control" name="hrg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Diskon :</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="dskn">
                                                                <span class="input-group-addon">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Pajak :</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="pjk">
                                                                <span class="input-group-addon">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Status :</label>
                                                            <select class="form-control" name="stts">
                                                                <option value="Baru">Baru</option>
                                                                <option value="Proses">Proses</option>
                                                                <option value="Selesai">Selesai</option>
                                                                <option value="Diambil">Diambil</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Dibayar :</label>
                                                            <select class="form-control" name="dbyr">
                                                                <option value="Dibayar">Dibayar</option>
                                                                <option value="Belum_dibayar">Belum Dibayar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="email">Nama User :</label>
                                                            <select name="nm_user" class="form-control">
                                                                <?php 
                                                                    $SQLi = $conn->query("SELECT*FROM tb_user");
                                                                    while ($vie = $SQLi->fetch_array()) {
                                                                    echo "<option value='$vie[id_user]'>".$vie['nama_user']."</option>";
                                                                    }
                                                                ?>          
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="btn" class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div><!--modal-->    
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

                    $SQL=$conn->query("INSERT INTO tb_transaksi VALUES('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')");
                    printf($conn->error);
                    if ($SQL) {
                        echo "<script>alert('Berhasil ditambahkan!')</script>";
                    }else{
                        echo "<script>alert('Gagal ditambahkan!')</script>";
                    }
                }
            ?>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Outlet</th>
                            <th>Kode Invoice</th>
                            <th>Nama Member</th>
                            <th>Tanggal</th>
                            <th>Batas Waktu</th>
                            <th>Tanggal Bayar</th>
                            <th>Biaya Tambahan</th>
                            <th>Diskon</th>
                            <th>Pajak</th>
                            <th>Status</th>
                            <th>Dibayar</th>
                            <th>Nama User</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 0;
                            $q=$conn->query("SELECT*FROM tb_transaksi a, tb_outlet b, tb_member c, tb_user d WHERE a.id_outlet=b.id_outlet AND a.id_member=c.id_member AND a.id_user=d.id_user");
                            while($v = $q->fetch_array()){
                        ?>
                        <tr>
                            <td><?=$no=$no+1?></td>
                            <td><?=$v['nama_outlet']?></td>
                            <td>KOD<?=number_format($v['kode_invoice']);?></td>
                            <td><?=$v['nama_member']?></td>
                            <td><?=$v['tgl']?></td>
                            <td><?=$v['batas_waktu']?></td>
                            <td><?=$v['tgl_bayar']?></td>
                            <td>Rp .<?=number_format($v['biaya_tambahan']);?></td>
                            <td><?=$v['diskon']?>%</td>
                            <td><?=$v['pajak']?>%</td>
                            <td><?=$v['status']?></td>
                            <td><?=$v['dibayar']?></td>
                            <td><?=$v['nama_user']?></td>
                            <td>
                              <a href="?page=edit&ganti=edit-transaksi&id=<?=$v['id_transaksi']?>" class="btn btn-warning"><span class="fa fa-edit"></span></a> 
                              <a href="?page=hapus&deleting=del-transaksi&id=<?=$v['id_transaksi']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin dihapus?')"><span class="fa fa-trash"></span></a>   
                            </td>
                        </tr>
                        <?php } ?>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>