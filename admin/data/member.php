<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="col-sm-6">
                <h3 class="box-title m-b-0">Data Pelanggan</h3>
            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="margin-left:500px;">+ Tambah Data</button>
            </div>
            <div class="row">
                <?php if($cek['role']=='Admin') { ?>
                <div class="white-box">
                    <!--modal-->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Data Pelanggan</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="formroles">
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Nama Pelanggan :</label>
                                                        <input type="text" class="form-control" name="nm_member">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Alamat :</label>
                                                        <input type="text" class="form-control" name="almt">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Jenis Kelamin :</label>
                                                        <select name="jns_klmn" class="form-control">
                                                        <option>L</option>
                                                        <option>P</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Telepon :</label>
                                                        <input type="text" class="form-control" name="tlp">
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
            <?php } ?>
        </div>
            <?php 
                if (isset($_POST['btn'])) {
                    $a=$_POST['nm_member'];
                    $b=$_POST['almt'];
                    $c=$_POST['jns_klmn'];
                    $d=$_POST['tlp'];

                    $SQL=$conn->query("INSERT INTO tb_member VALUES('','$a','$b','$c','$d')")or die($conn->error);
             
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
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Telepon</th>
                            <?php if($cek['role']=='Admin') { ?>
                            <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 0;
                            $q=$conn->query("SELECT*FROM tb_member ORDER BY id_member DESC");
                            while($v = $q->fetch_array()){
                        ?>
                        <tr>
                            <td><?=$no=$no+1?></td>
                            <td><?=$v['nama_member']?></td>
                            <td><?=$v['alamat']?></td>
                            <td><?=$v['jenis_kelamin']?></td>
                            <td><?=$v['tlp_member']?></td>
                            <?php if($cek['role']=='Admin') { ?>
                            <td>
                              <a href="?page=edit&ganti=edit-member&id=<?=$v['id_member']?>" class="btn btn-warning"><span class="fa fa-edit"></span></a> 
                              <a href="?page=hapus&deleting=del-member&id=<?=$v['id_member']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin dihapus?')"><span class="fa fa-trash"></span></a>   
                            </td>
                            <?php } ?>
                        </tr>
                        <?php } ?>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>