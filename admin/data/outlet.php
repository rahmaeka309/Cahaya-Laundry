<div class="row">
    <div class="col-sm-12">
        <div class="white-box"> 
            <div class="col-sm-6">
                <h3 class="box-title m-b-0">Data Outlet</h3>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="margin-left:500px;">+ Tambah Data</button>
            </div>
            <div class="row">
                <div class="white-box">
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Data Outlet</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="formroles">
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Nama Outlet :</label>
                                                        <input type="text" class="form-control" name="nm_outlet">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Alamat :</label>
                                                        <input type="text" class="form-control" name="almt">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Telepon :</label>
                                                        <input type="text" class="form-control" name="tlpn">
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
                    $b=$_POST['almt'];
                    $c=$_POST['tlpn'];

                    $SQL=$conn->query("INSERT INTO tb_outlet VALUES('','$a','$b','$c')")or die($conn->error);
             
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
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 0;
                            $q=$conn->query("SELECT*FROM tb_outlet ORDER BY id_outlet DESC");
                            while($v = $q->fetch_array()){
                        ?>
                        <tr>
                            <td><?=$no=$no+1?></td>
                            <td><?=$v['nama_outlet']?></td>
                            <td><?=$v['alamat']?></td>
                            <td><?=$v['tlp_outlet']?></td>
                            <td>
                              <a href="?page=edit&ganti=edit-outlet&id=<?=$v['id_outlet']?>" class="btn btn-warning"><span class="fa fa-edit"></span></a> 
                              <a href="?page=hapus&deleting=del-outlet&id=<?=$v['id_outlet']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin dihapus?')"><span class="fa fa-trash"></span></a>   
                            </td>
                        </tr>
                        <?php } ?>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>