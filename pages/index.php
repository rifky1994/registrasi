<?php
session_start();
if(isset($_SESSION['login']))
{

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<html lang="en">

<head>

    <link href='less/icon.png' rel='shortcut icon'>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Kopegtel Registrasi</title>

    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['nama']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="?id=10"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><br><br></li>
                        <li>
                            <a href="?id=1"><i class="fa fa-dashboard fa-fw"></i> Absensi</a>
                        </li>
                        <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Anggota<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="?id=3">Lihat Data Anggota</a>
                                </li>
                                <li>
                                <a href="?id=8">Upload Data Anggota</a>
                                </li>
                                <li>
                                <a href="?id=9">Ekspor Data Anggota</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?id=7"><i class="fa fa-dashboard fa-fw"></i> Laporan Kehadiran</a>
                        </li>
                         <li>
                            <a href="?id=12"><i class="fa fa-dashboard fa-fw"></i>Cetak Bukti Pembayaran</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <?php
            include 'switch.php';
            ?>
        </div>

    </div>

    

</body>

</html>
<?php
    }
    else
    {
        include "login.html";   
    }
?>