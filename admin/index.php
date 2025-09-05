<?php include"../lib/koneksi.php"; 
error_reporting(0);
session_start();
  if(!isset($_SESSION['username'])){
    echo "<script>document.location.href='login.php'</script>";
  }else{
    $SQL=$conn->query("SELECT*FROM tb_user WHERE username='$_SESSION[username]'");
    $cek=$SQL->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/gambar.png">
    <title>Aplikasi Laundry</title>
    <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="../assets/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="index.php">
                        <div><img src="../assets/img/tulisan.png" alt="user-img" style="width: 200px; height: 60px; padding: 10px;"></div>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <?php include"nav/nav.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
                <?php include "incl.php"; ?>
            </div>
            <footer class="footer text-center"> 2020 &copy; Cahaya Laundry by Rahma Eka Putri </footer>
        </div>
    </div>
</body>
    <script src="../assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/custom.min.js"></script>
    <script src="../assets/js/dashboard1.js"></script>
    <script src="../assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="../assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
</html>
<?php
}
?>