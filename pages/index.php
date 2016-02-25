<?php
session_start();
if(isset($_SESSION['login']))
{

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<html lang="en">

<head>
<link href='abc.jpg' rel='shortcut icon' />
<style type="text/css">
    
    table  .ringkas
    {
        border-top: 1px solid #ccc;
        border-left: 1px solid #ccc;
    }
    table th .ringkas, table td.ringkas
    {
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        padding: 5px 10px;
    }
    table th .ringkas
    {
        background: #ddd;
    }

    table
    {}
    table th,tr,td
    {}




#autocomplete
 {
 position:relative;
 }
 #nak
 {
 width:200px;
 }
 #autocomplete span
 {
 width:500px;
 max-height:250px;
 border: 1px solid#ccc;
 background:#fff;
 overflow:hidden;
 overflow: scroll;
 padding:0;
 position:absolute;
 left:0;
 top:23px;
 z-index:10;
 }
 #autocomplete ul
 {
 padding:0;
 margin:0;
 }
 #autocomplete li
 {
 list-style:none;
 height:15px;
 padding:0 0 10px 10px;
 cursor:pointer;
 }
 #autocomplete li:hover
 {
 background:#eee;
 }




</style> 




   
<script type="text/javascript" src='jquery-2.1.4.min.js'></script>

<script type="text/javascript">
    $(document).ready(function(){
        var batas=10, hal=1,posisi=(hal-1)*batas+1;
        var jml = $('tr').length-1;
        var text= '';
        
        $('table').after('<center><a href="#" class="prev">Sebelumnya</a> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;<a href="#" class="next">Selanjutnya</a></center>');
        
        function tampilData(){
        if(hal<=1)$('.prev').hide();
        else $('.prev').show();
        
        if(hal >= jml/batas) $('.next').hide();
        else $('.next').show();
        $('tr').hide();
        for (i=posisi;i<=batas*hal;i++){
        $('tr').each(function(){
        if($('tr').index(this)==i || $('tr').index(this)==0)
        $(this).show();
        });
        }
        $('.ket').text(hal +' '+jml+' '+posisi);
        }
        
        tampilData();
        
        $('.next').click(function(){
        hal+=1;
        posisi=(hal-1) * batas +1;
        tampilData();
        });
        $('.prev').click(function(){
        hal-=1;
        posisi=(hal-1) * batas +1;
        tampilData();
        }); 
        
    }); 
        
    
    </script>

    



    <script type="text/javascript">
    $('document').ready(function()
    {
        $('#nak').attr('autocomplete','off');
        $('#nak').after('<span></span>');
        $('#autocomplete span').hide();
        $('#nak').keyup(function(e){
            var kata = $(this).val();
            var nak = $(this);
            
            $('#autocomplete span').show().html('<img src="img/loading.gif">');
            if(kata.length == 0)
            {
                $('#autocomplete span').hide();
            }
        
        $.ajax
        (
            {
                type : "POST",
                url : "autocompletenak.php",
                data : "kata="+kata,
                success : function(data)
                {
                    $('#autocomplete span').html(data);
                    $('#autocomplete li').click(function(e)
                    {
                        var ul = $(this).parent();
                        ul.parent().hide;
                        nak.val($(this).text());
                    });
                }
            }
        );
    });
    
    $(window).click(function()
    {
        $('#autocomplete span').hide();
    });
    });
    </script>




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

        <nav class="navbar navbar-default navbar-static-top" role="navigation">

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>Selamat datang, <b> <?php echo $_SESSION['nama']; ?> </b><i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="?id=10"><i class="fa fa-user fa-fw"></i> Edit Profil</a>
                            </li>
                            
                            <li><a href="?id=25"><i class="fa fa-cog fa-fw"></i> Tutorial</a>
                            </li>
                            
                            <?php

                            if ($_SESSION['level']=='admin')
                            {

                            ?>
                            <li><a href="?id=101"><i class="fa fa-share fa-fw"></i> Input Uang</a>
                            </li>
                            <li><a href="?id=16"><i class="fa fa-share fa-fw"></i> Tambah Bendahara</a>
                            </li>
                            <li><a href="?id=26"><i class="fa fa-share fa-fw"></i> Tambah User</a>
                            </li>
                            <li><a href="?id=100"><i class="fa fa-trash fa-fw"></i> Hapus Semua Data</a>
                            </li>

                            <?php
                            }
                            else
                            {}
                            ?>

                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="?id=1"><i class="fa fa-share fa-fw"></i><b> Input Absensi</b></a>
                        </li>
                        <li>
                            <a href="?id=18"><i class="fa fa-share fa-fw"></i><b> Input Kuasa Yang Hadir</b></a>
                        </li>
                        <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i><b> Data Anggota</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="?id=3"><i class="fa fa-book fa-fw"></i><b> Lihat Data Anggota</b></a>
                                </li>
                                <li>
                                <a href="?id=8"><i class="fa fa-upload fa-fw"></i><b> Upload Data Anggota</b></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?id=7"><i class="fa fa-file fa-fw"></i><b> Laporan Kehadiran</b></a>
                        </li>
                         <li>
                            <a href="?id=12"><i class="fa fa-print fa-fw"></i><b> Cetak Bukti Pembayaran</b></a>
                        </li>
                        <li>
                            <a href="?id=21"><i class="fa fa-print fa-fw"></i><b> Cetak Kupon (Khusus Kuasa Yang Hadir)</b></a>
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