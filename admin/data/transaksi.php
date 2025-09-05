<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="col-sm-6"> 
                <h3 class="box-title m-b-0">Data Transaksi</h3>
            </div>
            <div class="col-sm-6">
                <a href="?page=tambah" class="btn btn-info btn-md" style="margin-left:500px; margin-bottom: 5px;">+ Tambah Data</a>
            </div>
            <div class="row"></div>
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
                            $q=$conn->query("SELECT*FROM tb_transaksi a, tb_outlet b, tb_member c, tb_user d WHERE a.id_outlet=b.id_outlet AND a.id_member=c.id_member AND a.id_user=d.id_user ORDER BY id_transaksi DESC");
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