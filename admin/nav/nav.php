<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="../assets/img/gambar.png" alt="user-img"></div>
                <a href="index.php" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Halo, <?=$cek['role']?>  ! <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> <?=$cek['nama_user']?></a></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                </ul>
            </div>
        </div>
        <?php if($cek['role']=='Admin') { ?>
        <ul class="nav" id="side-menu">
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li><a href="?page=dashboard" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>  
            <li> <a class="waves-effect active"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>   <span class="hide-menu">Data<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=outlet" class="waves-effect"><i data-icon="f" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Outlet</span></a>
                    </li>
                    <li>
                        <a href="?page=user" class="waves-effect"><i data-icon="m" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">User</span></a>
                    </li>
                    <li>
                        <a href="?page=paket" class="waves-effect"><i data-icon="O" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Paket</span></a>
                    </li>
                    <li>
                        <a href="?page=member" class="waves-effect"><i data-icon="q" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Member</span></a>
                    </li>
                    <li>
                        <a href="?page=transaksi" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Transaksi</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="?page=" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Laporan</span></a>
            </li>
            <li class="nav-small-cap">--- Support</li>
            <li>
                <a href="logout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a>
            </li>
            <!--<li>
                <a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a>
            </li>-->
        </ul>
        <?php } else if($cek['role']=='Kasir'){ ?>
        <ul class="nav" id="side-menu">
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li><a href="?page=dashboard" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>  
            <li> <a class="waves-effect active"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>   <span class="hide-menu">Data<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=member" class="waves-effect"><i data-icon="q" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Member</span></a>
                    </li>
                    <li>
                        <a href="?page=transaksi" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Transaksi</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="?page=" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Laporan</span></a>
            </li>
            <li class="nav-small-cap">--- Support</li>
            <li>
                <a href="logout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a>
            </li>
            <!--<li>
                <a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a>
            </li>-->
        </ul>
        <?php } else if($cek['role']=='Owner'){ ?>
        <ul class="nav" id="side-menu">
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li><a href="?page=dashboard" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>  
            <li>
                <a href="?page=" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Laporan</span></a>
            </li>
            <li class="nav-small-cap">--- Support</li>
            <li>
                <a href="logout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a>
            </li>
            <!--<li>
                <a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a>
            </li>-->
        </ul>
        <?php } ?>
    </div>
</div>
