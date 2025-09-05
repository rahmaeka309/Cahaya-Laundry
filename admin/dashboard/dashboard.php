<div class="row">
    <?php if($cek['role']=='Admin') { ?>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php 
            $a=$conn->query("SELECT*FROM tb_member");
            $member=$a->num_rows;
        ?>
        <div class="white-box">
            <h3 class="box-title">JUMLAH PELANGGAN</h3>
            <ul class="list-inline two-part">
                <li><i class="icon-people text-info"></i></li>
                <li class="text-right"><span class="counter"><?=$member?></span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php 
            $a=$conn->query("SELECT*FROM tb_outlet");
            $outlet=$a->num_rows;
        ?>
        <div class="white-box">
            <h3 class="box-title">JUMLAH OUTLET</h3>
            <ul class="list-inline two-part">
                <li><i class="icon-folder text-purple"></i></li>
                <li class="text-right"><span class="counter"><?=$outlet?></span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php 
            $a=$conn->query("SELECT*FROM tb_paket");
            $paket=$a->num_rows;
        ?>
        <div class="white-box">
            <h3 class="box-title">JUMLAH PAKET</h3>
            <ul class="list-inline two-part">
                <li><i class="icon-folder-alt text-danger"></i></li>
                <li class="text-right"><span class="counter"><?=$paket?></span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php 
            $a=$conn->query("SELECT*FROM tb_transaksi");
            $transaksi=$a->num_rows;
        ?>
        <div class="white-box">
            <h3 class="box-title">JUMLAH TRANSAKSI</h3>
            <ul class="list-inline two-part">
                <li><i class="ti-wallet text-success"></i></li>
                <li class="text-right"><span class="counter"><?=$transaksi?></span></li>
            </ul>
        </div>
    </div>
    <?php } else if($cek['role']=='Kasir'){ ?>
    <h1 style="text-align: center;">Selamat Datang,<?=$cek['nama_user']?></h1>
    <h3 style="text-align: center;">Anda login sebagai Kasir :)</h3>
    <?php } else if($cek['role']=='Owner') { ?>
    <h1 style="text-align: center;">Selamat Datang,<?=$cek['nama_user']?></h1>
    <h3 style="text-align: center;">Anda login sebagai Owner :)</h3>
    <?php } ?>
</div>