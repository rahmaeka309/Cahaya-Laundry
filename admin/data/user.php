<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="col-sm-6"> 
                <h3 class="box-title m-b-0">Data User</h3>
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
                                    <h4 class="modal-title">Data User</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="formroles">
                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Nama User :</label>
                                                        <input type="text" class="form-control" name="nm">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Username :</label>
                                                        <input type="text" class="form-control" name="usernm">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Password :</label>
                                                        <input type="text" class="form-control" name="pass">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Nama Outlet :</label>
                                                        <select name="outlet" class="form-control">
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
                                                        <label for="email">Role/Akses :</label>
                                                        <select name="role" class="form-control">
                                                            <option>-- Pilih Akses --</option>
                                                            <option>Admin</option>
                                                            <option>Kasir</option>
                                                            <option>Owner</option>
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
                    $a=$_POST['nm'];
                    $b=$_POST['usernm'];
                    $c=$_POST['pass'];
                    $d=$_POST['outlet'];
                    $e=$_POST['role'];

                    $SQL=$conn->query("INSERT INTO tb_user VALUES('','$a','$b','$c','$d','$e')") or die($conn->error);
             
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
                            <th>Nama User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Outlet</th>
                            <th>Role/Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 0;
                            $q=$conn->query("SELECT*FROM tb_user a, tb_outlet b WHERE a.id_outlet=b.id_outlet  ORDER BY id_user DESC");
                            while($v = $q->fetch_array()){
                        ?>
                        <tr>
                            <td><?=$no=$no+1?></td>
                            <td><?=$v['nama_user']?></td>
                            <td><?=$v['username']?></td>
                            <td><?=$v['password']?></td>
                            <td><?=$v['nama_outlet']?></td>
                            <td><?=$v['role']?></td>
                            <td>
                              <a href="?page=edit&ganti=edit-user&id=<?=$v['id_user']?>" class="btn btn-warning"><span class="fa fa-edit"></span></a> 
                              <a href="?page=hapus&deleting=del-user&id=<?=$v['id_user']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin dihapus?')"><span class="fa fa-trash"></span></a>   
                            </td>
                        </tr>
                        <?php } ?>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>