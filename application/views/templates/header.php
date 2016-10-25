<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Kawasan Transmigrasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('welcome/') ?>">Sistem Informasi Kawasan Transmigrasi</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">                                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      
                        <li>
                            <a href="<?php echo site_url('login/') ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo site_url("Welcome/") ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Kawasan/");?>">Kawasan</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Ktm/");?>">KTM</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Uptd/") ?>"> UPT</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Kependudukan/") ?>">Kependudukan</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Penduduk_pendidikan_formal/") ?>"><i class="fa fa-fw fa-pencil"></i> Penduduk Pendidikan Formal</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Pemberdayaan_lokasi/") ?>"><i class="fa fa-fw fa-pencil"></i> Pemberdayaan Lokasi</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Riwayat_penempatan/") ?>"><i class="fa fa-fw fa-pencil"></i> Riwayat Penempatan</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-pencil"></i> Fasilitas Lingkungan Kehidupan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo site_url('FasilitasKehidupan/kpt') ?>">Kondisi Prasarana Transportasi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('FasilitasKehidupan/kst') ?>">Kondisi Sarana Transportasi Dan Ongkos Angkut</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("FasilitasUmum/") ?>"></i> Fasilitas Umum</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("FasilitasPendidikan/") ?>"></i> Fasilitas Pendidikan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("KaplingS/") ?>"></i> Pengkaplingan Dan Sertifikasi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("MasalahStatus/") ?>"></i> Masalah Status Lahan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-pencil"></i> Potensi Usaha Tanaman Pangan dan Hortikultura <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="<?php echo site_url('Putp/') ?>">Potensi Usaha Tanaman Pangan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Hortikultura/') ?>">Tanaman Hortikultura (Semusim)</a>
                            </li>
                        </ul>
                        
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-pencil"></i> Potensi Usaha Tanaman Tahunan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="<?php echo site_url('TanamanTahunan/') ?>">Tanaman Tahunan (Perkebunan dan Hortikultura)</a>
                            </li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="<?php echo site_url('PotensiPeternakan/') ?>"><i class="fa fa-pencil"></i> Potensi Usaha Peternakan</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('PotensiPerikanan/') ?>"> <i class="fa fa-pencil"></i> Potensi Usaha Perikanan</a>
                    </li>                    
                    <li>
                        <a href="<?php echo site_url('PengusahaanUsaha/') ?>"> <i class="fa fa-pencil"></i> Pengusahaan Lahan Usaha</a>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-pencil"></i> Kelembagaan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="<?php echo site_url('JenisKelembagaanEkonomi/') ?>">Jenis Kelembagaan Ekonomi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('PemasaranProduksi/') ?>">Pemasaran Produksi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('PelakuKelembagaanEkonomi/') ?>">Pelaku Kelembagaan Ekonomi</a>
                            </li>
                        </ul>                        
                    </li>    
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo6"><i class="fa fa-pencil"></i> Pendidikan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo6" class="collapse">
                            <li>
                                <a href="<?php echo site_url('Pussd/') ?>">Penduduk Usia Sekolah Yang Sedang Bersekolah</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Tgpf/') ?>">Tenaga Guru Pendidikan Formal</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Smpf/') ?>">Status Murid Pendidikan Formal</a>
                            </li>
                        </ul>                        
                    </li>                
                    <li>                        
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo7"><i class="fa fa-pencil"></i> Keluarga Berencana dan Kesehatan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo7" class="collapse">
                            <li>
                                <a href="<?php echo site_url('Jpst/') ?>">Jenis Penyakit dan Jumlah Warga Yang Sakit Setahun Terakhir</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Jtak/') ?>">Jenis Tenaga Medis dan Aktivitas Kunjungan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Kpks/') ?>">Kegiatan Pelayanan Keluarga Sejahtera</a>
                            </li>
                        </ul>                        
                    </li>                    
                    <li>                        
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo8"><i class="fa fa-pencil"></i> Keagamaan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo8" class="collapse">
                            <li>
                                <a href="<?php echo site_url('Jpa/') ?>">Jumlah Pemeluk Agama</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('KAgama/') ?>">Kegiatan Keagamaan</a>
                            </li>
                        </ul>                        
                    </li>
                    <li>                        
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo9"><i class="fa fa-pencil"></i> Kesenian & Olahraga <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo9" class="collapse">
                            <li>
                                <a href="<?php echo site_url('Kesenian/') ?>">Kesenian</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Olahraga/') ?>">Olahraga</a>
                            </li>
                        </ul>                        
                    </li>
                    <li>                        
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo10"><i class="fa fa-pencil"></i> Managemen Pelayanan Transmigrasi <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo10" class="collapse">
                            <li>
                                <a href="<?php echo site_url('Ppd/') ?>">Perangkat Pemerintah Desa</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Ld/') ?>">Lembaga Desa</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Mpt/') ?>">Manajemen Pelayanan Transmigrasi</a>
                            </li>
                        </ul>                                            
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 500px;">

                
