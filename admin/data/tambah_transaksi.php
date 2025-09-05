<div class="row">
    <div class="white-box">
                <h3 class="box-title m-b-0">Data Transaksi</h3>
        <div class="formroles">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-3 col-md-push-2">
                        <div class="form-group">
                            <label for="email">Nama Outlet :</label> <br>
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
                    <div class="col-md-3 col-md-push-3">
                        <div class="form-group">
                            <label for="email">Tanggal :</label> <br>
                            <div class="input-group">
                                <input type="date" class="form-control" name="tgl">
                                <div class="input-group-addon"><i class="icon-calender"></i></div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Kode Invoice :</label>
                            <div class="input-group">
                                <span class="input-group-addon">KOD</span>
                                <input type="text" class="form-control" name="kode">
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-push-2">
                        <div class="form-group">
                            <label for="email">Nama Pelanggan :</label>
                            <select name="nm_mmbr" class="form-control">
                                <option>-- Pilih Pelanggan --</option>
                                <?php 
                                    $SQLi = $conn->query("SELECT*FROM tb_member");
                                    while ($vie = $SQLi->fetch_array()) {
                                    echo "<option value='$vie[id_member]'>".$vie['nama_member']."</option>";
                                    }
                                ?>          
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-push-3">
                        <div class="form-group">
                            <label for="email">Batas Waktu  :</label>
                            <div class="input-group">
                                <input type="date" class="form-control" name="bts_wkt">
                                <div class="input-group-addon"><i class="icon-calender"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Jenis Paket</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Diskon</th>
                                    <th>Biaya Tambahan</th>
                                    <th>Pajak</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <a href="?page=tambah" class="btn btn-warning btn-md" >+ Tambah Paket</a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-1 col-md-push-8">
                        <h4>Grand Total</h4>
                    </div>
                    <div class="col-md-3 col-md-push-8">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="type" class="form-control" name="grand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-md-push-8">
                        <h4>Diskon</h4>
                    </div>
                    <div class="col-md-1 col-md-push-8">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="dskn">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-push-8">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="dskn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-md-push-8">
                        <h4>Pajak</h4>
                    </div>
                    <div class="col-md-1 col-md-push-8">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="pjk">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-push-8">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="pjk">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-md-push-7">
                        <h4>Biaya Tambahan</h4>
                    </div>
                    <div class="col-md-3 col-md-push-7">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" class="form-control" name="biaya">
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-2 col-md-push-7">
                        <h4>Total Pembayaran</h4>
                    </div>
                    <div class="col-md-3 col-md-push-7">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" class="form-control" name="total">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Dibayar :</label>
                            <select class="form-control" name="dbyr">
                                <option value="Dibayar">Dibayar</option>
                                <option value="Belum_dibayar">Belum Dibayar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Tanggal Dibayar :</label> <br>
                            <div class="input-group">
                                <input type="date" class="form-control" name="tgl_dbyr">
                                <div class="input-group-addon"><i class="icon-calender"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                </div>
                <div class="row">
                   <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Catatan</label>
                            <textarea class="form-control" name="catatan"></textarea>
                        </div>
                    </div> 
                </div>
                <button type="submit" name="btn" class="btn btn-primary">Simpan</button>
                <button type="submit" name="btn" class="btn btn-primary">Simpan & Cetak</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </form>
        </div>
    </div>
</div>
<?php 
    if (isset($_POST['btn'])) {
        $a=$_POST['nm_outlet'];
        $b=$_POST['tgl'];
        $c=$_POST['nm_mmbr'];
        $d=$_POST['bts_wkt'];
        $e=$_POST['grand'];
        $f=$_POST['dskn'];
        $g=$_POST['pjk'];
        $h=$_POST['biaya'];
        $i=$_POST['total'];
        $j=$_POST['dbyr'];
        $k=$_POST['tgl_dbyr'];
        $l=$_POST['status'];
        $m=$_POST['catatan'];

        $SQL=$conn->query("INSERT INTO tb_transaksi VALUES('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')");
        printf($conn->error);
        if ($SQL) {
            echo "<script>alert('Berhasil ditambahkan!');document.location.href='?page=transaksi'</script>";
        }else{
            echo "<script>alert('Gagal ditambahkan!')</script>";
        }
    }
?>