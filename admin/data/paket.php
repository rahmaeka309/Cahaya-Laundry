<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="col-sm-6"> 
                <h3 class="box-title m-b-0">Data Paket</h3>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="margin-left:500px;">+ Tambah Data</button>
            </div>
            <div class="row">
                    <div class="white-box">
                        <!--modal-->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Data Paket</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="formroles">
                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Nama Outlet :</label>
                                                            <select name="nm_outlet" class="form-control">
                                                                <option>-- Pilih Outlet --</option>
                                                                <?php 
                                                                    $SQLi = $conn->query("SELECT*FROM tb_outlet");
                                                                    while ($vie = $SQLi->fetch_array()) {
                                                                    echo "<option value='$vie[id_outlet]'>".$vie['nama_outlet']."</option>";
                                                                    }
                                                                ?>          
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Jenis Paket :</label>
                                                            <select name="jns" class="form-control">
                                                                <option>-- Pilih Jenis Paket --</option>
                                                                <option>Kiloan</option>
                                                                <option>Selimut</option>
                                                                <option>Bed Cover</option>
                                                                <option>Kaos</option>
                                                                <option>Lain</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Nama Paket :</label>
                                                            <input type="text" class="form-control" name="nm_paket">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Harga :</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">Rp.</span>
                                                                <input type="text" class="form-control" name="hrg">
                                                            </div>    
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
                    $b=$_POST['jns'];
                    $c=$_POST['nm_paket'];
                    $d=$_POST['hrg'];

                    $SQL=$conn->query("INSERT INTO tb_paket VALUES('','$a','$b','$c','$d')");
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
                            <th>Jenis</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 0;
                            $q=$conn->query("SELECT*FROM tb_paket a, tb_outlet b WHERE a.id_outlet=b.id_outlet ORDER BY id_paket DESC");
                            while($v = $q->fetch_array()){
                        ?>
                        <tr>
                            <td><?=$no=$no+1?></td>
                            <td><?=$v['nama_outlet']?></td>
                            <td><?=$v['jenis']?></td>
                            <td><?=$v['nama_paket']?></td>
                            <td>Rp. <?=number_format($v['harga']);?></td>
                            <td>
                              <a href="?page=edit&ganti=edit-paket&id=<?=$v['id_paket']?>" class="btn btn-warning"><span class="fa fa-edit"></span></a> 
                              <a href="?page=hapus&deleting=del-paket&id=<?=$v['id_paket']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin dihapus?')"><span class="fa fa-trash"></span></a>   
                            </td>
                        </tr>
                        <?php } ?>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>