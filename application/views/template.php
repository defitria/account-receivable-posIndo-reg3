<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>POS Indonesia</title>
    <!-- Jquery -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->
    <script src="<?php echo base_url('plugins/jquery/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
    <!-- Favicon-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>plugins/fontawesome-free/css/all.min.css" />
    <link rel="icon" href="<?php echo base_url('') ?>favicon.ico" type="image/x-icon">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="<?php echo base_url('') ?>dist/css/adminlte.min.css" /> -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>plugins/daterangepicker/daterangepicker.css" />
    <!--  -->
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>plugins/summernote/summernote-bs4.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <!-- <link href="<?php echo base_url('') ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('') ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('') ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url('') ?>plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('') ?>css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('') ?>css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a> -->
                <a href="javascript:void(0);" class="bars"></a>

                <a class="navbar-brand" href="<?= site_url('dashboard') ?>">POS Indonesia</a>
            </div>
        </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <br>
                    <img src="<?php echo base_url('') ?>images/user.png" width="48" height="48" alt="User" />
                    <small id="nama_user" class="form-text" style="color: white;">
                        <?php
                        echo $this->session->userdata('level');
                        ?>
                    </small>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?= site_url('dashboard') ?>" class="">
                            <i class="fa fa-home"></i>&nbsp;&nbsp;
                            <b>Home</b>
                        </a>
                    </li>

                    <?php if ($this->session->userdata('level') == "Admin Penjualan UPT Pbm") { ?>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fas fa-stream"></i> &nbsp;&nbsp;
                                <b>
                                    Transaksi
                                </b>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?= site_url('piutangprabu') ?>">
                                        <i class="fa fa-clipboard"></i>&nbsp;&nbsp;
                                        <b>Piutang</b>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= site_url('pelunasanprabu') ?>">
                                        <i class="fa fa-clipboard-check"></i>&nbsp;&nbsp;
                                        <b>Pelunasan</b>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>

                    <?php if ($this->session->userdata('level') == "Manager Penjualan UPT Pbm") { ?>
                        <li>
                            <a href="<?= site_url('piutangprabu/invoice') ?>" class="">
                                <i class="fa fa-barcode"></i>&nbsp;&nbsp;
                                <b>Invoice</b>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fas fa-stream"></i> &nbsp;&nbsp;
                                <b>
                                    Transaksi
                                </b>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?= site_url('rekapitulasi/timeline_piutang') ?>">
                                        <i class="fa fa-clipboard"></i>&nbsp;&nbsp;
                                        <b>Pengakuan Piutang</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('rekapitulasi/timeline_pelunasan') ?>">
                                        <i class="fa fa-clipboard-check"></i>&nbsp;&nbsp;
                                        <b>Pengakuan Pelunasan</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('rekapitulasi/laporanfilter') ?>">
                                        <i class="fas fa-newspaper"></i>&nbsp;&nbsp;
                                        <b>Laporan</b>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fa fa-user-friends"></i> &nbsp;&nbsp;
                                <b>
                                    Mitra
                                </b>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-user-circle"></i>&nbsp;&nbsp;
                                        <b>Profil Mitra</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-map-marker-alt"></i>&nbsp;&nbsp;
                                        <b>Lokasi Mitra</b>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    <?php } ?>

                    <?php if ($this->session->userdata('level') == "Ka UPT Pbm") { ?>
                        <li>
                            <a href="<?= site_url('rekapitulasi/invoice') ?>" class="">
                                <i class="fa fa-barcode"></i>&nbsp;&nbsp;
                                <b>Invoice</b>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fas fa-stream"></i> &nbsp;&nbsp;
                                <b>
                                    Transaksi
                                </b>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?= site_url('rekapitulasi/pengakuan_piutang') ?>">
                                        <i class="fa fa-clipboard"></i>&nbsp;&nbsp;
                                        <b>Pengakuan Piutang</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('rekapitulasi/pengakuan_pelunasan') ?>">
                                        <i class="fa fa-clipboard-check"></i>&nbsp;&nbsp;
                                        <b>Pengakuan Pelunasan</b>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fa fa-user-friends"></i> &nbsp;&nbsp;
                                <b>
                                    Mitra
                                </b>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-user-circle"></i>&nbsp;&nbsp;
                                        <b>Profil Mitra</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-map-marker-alt"></i>&nbsp;&nbsp;
                                        <b>Lokasi Mitra</b>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>

                    <?php if (($this->session->userdata('level') == "Manager Regional 3") | ($this->session->userdata('level') == "Deputi Regional 3") | ($this->session->userdata('level') == "Ka Regional 3")) { ?>

                        <li>
                            <a href="<?= site_url('timeline/suminvoice') ?>">
                                <i class="fa fa-clipboard"></i>&nbsp;&nbsp;
                                <b>Invoice</b>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fas fa-stream"></i> &nbsp;&nbsp;
                                <b>
                                    Transaksi
                                </b>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="<?= site_url('timeline/sumpiutang') ?>">
                                        <i class="fa fa-clipboard"></i>&nbsp;&nbsp;
                                        <b>Pengakuan Piutang</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('timeline/sumpelunasan') ?>">
                                        <i class="fa fa-clipboard-check"></i>&nbsp;&nbsp;
                                        <b>Pengakuan Pelunasan</b>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="fa fa-user-friends"></i> &nbsp;&nbsp;
                                <b>
                                    Mitra
                                </b>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-user-circle"></i>&nbsp;&nbsp;
                                        <b>Profil Mitra</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-map-marker-alt"></i>&nbsp;&nbsp;
                                        <b>Lokasi Mitra</b>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>

                    <li>
                        <a href="<?= site_url('auth/logout') ?>" class="">
                            <i class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;
                            <b>Logout</b>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->

            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">POS Indonesia</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
        <!-- <div class="container-fluid"> -->
        <div class="block-header">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php echo $contents ?>
            </div>
        </div>
        </div>
    </section>


    <!-- Menampilkan Tanggal -->
    <script type="text/javascript">
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = m + "/" + y; //Full date Bulan/tanggal/tahun
    </script>
    <!-- Akhir Menampilkan Tanggal -->
    <!-- Hitung Total Piutang Otomatis -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#total_piutang, #bsu, #dd").keyup(function() {
                var total_piutang = $("#total_piutang").val();
                var bsu = $("#bsu").val();

                var total_piutang = parseInt(bsu) + 0;
                $("#total_piutang").val(total_piutang);
            });
        });
    </script>
    <!-- Akhir Hitung Total Piutang Otomatis -->
    <!-- Hitung Saldo Akhir Otomatis -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#total_piutang, #kas, #pajak").keyup(function() {
                var total_piutang = $("#total_piutang").val();
                var kas = $("#kas").val();
                var pajak = $("#pajak").val();

                var saldo_akhir = parseInt(total_piutang) - (parseInt(kas) + parseInt(pajak));
                $("#saldo_akhir").val(saldo_akhir);
            });
        });
    </script>
    <!-- Akhir Hitung Saldo  Akhir Otomatis -->

    <script type="text/javascript">
        /*digunakan untuk menyembunyikan form tanggal, bulan dan tahun saat halaman di load */
        $(document).ready(function() {

            $("#tanggalfilter").hide();
            $("#tahunfilter").hide();
            $("#bulanfilter").hide();
            $("#cardbayar").hide();

        });

        /*digunakan untuk menampilkan form tanggal, bulan dan tahun*/

        function prosesPeriode() {
            var periode = $("[name='periode']").val();

            if (periode == "tanggal") {
                $("#btnproses").hide();
                $("#tanggalfilter").show();
                $("[name='valnilai']").val('tanggal');

            } else if (periode == "bulan") {
                $("#btnproses").hide();
                $("[name='valnilai']").val('bulan');
                $("#bulanfilter").show();

            } else if (periode == "tahun") {
                $("#btnproses").hide();
                $("[name='valnilai']").val('tahun');
                $("#tahunfilter").show();
            }
        }

        /*digunakan untuk menytembunyikan form tanggal, bulan dan tahun*/

        function prosesReset() {
            $("#btnproses").show();

            $("#tanggalfilter").hide();
            $("#tahunfilter").hide();
            $("#bulanfilter").hide();
            $("#cardbayar").hide();

            $("#periode").val('');
            $("#tanggalawal").val('');
            $("#tanggalakhir").val('');
            $("#tahun1").val('');
            $("#bulanawal").val('');
            $("#bulanakhir").val('');
            $("#tahun2").val('');
            $("#targetbayar").empty();

        }
    </script>

    <script type="text/javascript">
        /*digunakan untuk menyembunyikan form tanggal, bulan dan tahun saat halaman di load */
        $(document).ready(function() {

            $("#hasilfilter").hide();
            // $("#tahunfilter").hide();
            // $("#bulanfilter").hide();
            // $("#cardbayar").hide();

        });

        /*digunakan untuk menampilkan form tanggal, bulan dan tahun*/

        function prosesPeriode() {
            var periode = $("[name='nama_pel']").val();

            if (periode == "tanggal") {
                $("#btnproses").hide();
                $("#tanggalfilter").show();
                $("[name='valnilai']").val('tanggal');

            } else if (periode == "bulan") {
                $("#btnproses").hide();
                $("[name='valnilai']").val('bulan');
                $("#bulanfilter").show();

            } else if (periode == "tahun") {
                $("#btnproses").hide();
                $("[name='valnilai']").val('tahun');
                $("#tahunfilter").show();
            }
        }

        /*digunakan untuk menytembunyikan form tanggal, bulan dan tahun*/

        function prosesReset() {
            $("#btnproses").show();

            $("#tanggalfilter").hide();
            $("#tahunfilter").hide();
            $("#bulanfilter").hide();
            $("#cardbayar").hide();

            $("#periode").val('');
            $("#tanggalawal").val('');
            $("#tanggalakhir").val('');
            $("#tahun1").val('');
            $("#bulanawal").val('');
            $("#bulanakhir").val('');
            $("#tahun2").val('');
            $("#targetbayar").empty();

        }
    </script>

    <script>
        $(document).ready(function() {
            $("#formLunas").hide();
            $("#formAngsur").hide();
        });

        $(document).ready(function() {

            $("#lunas").click(function() {
                $("#formLunas").toggle("slow");
            })

        });

        $(document).ready(function() {

            $("#angsur").click(function() {
                $("#formAngsur").toggle("slow");
            })

        });
    </script>
    <!-- End -->
    <!-- Modal Lunas -->
    <script>
        $(document).ready(function() {

            // get Input Product
            $('.btn-lunas').click(function() {
                // get data from button edit
                const id_pelunasan = $(this).data('id_pelunasan');
                const nama_pel = $(this).data('nama_pel');
                const nomor = $(this).data('nomor');
                const kd_referensi = $(this).data('kd_referensi');
                const pelunasan = $(this).data('pelunasan');
                const deposit = $(this).data('deposit');
                const tgl_setor = $(this).data('tgl_setor');
                const status = $(this).data('status');
                // Set data to Form Edit

                $('#dt_id').val(id_pelunasan);
                $('#dt_nama').val(nama_pel);
                $('#dt_nomor').val(nomor);
                $('#dt_kd_referensi').val(kd_referensi);
                $('#dt_pelunasan').val(pelunasan);
                $('#dt_deposit').val(deposit);
                $('#dt_status').val(status);
                // Call Modal Edit
                $('#lunasModal').modal('show');
                // $('#editModal').show('1000');
            });
        });
    </script>
    <!-- End Modal Lunas -->
    <!-- Modal Angsur -->
    <script>
        $(document).ready(function() {

            // get Angsur Data
            $('.btn-angsur').click(function() {
                // get data from button edit
                const id_pelunasan = $(this).data('id_pelunasan');
                const nama_pel = $(this).data('nama_pel');
                const nomor = $(this).data('nomor');
                const kd_referensi = $(this).data('kd_referensi');
                const pelunasan = $(this).data('pelunasan');
                const deposit = $(this).data('deposit');
                const tgl_setor = $(this).data('tgl_setor');
                const status = $(this).data('status');
                // Set data to Form Edit

                $('#angsur_id').val(id_pelunasan);
                $('#angsur_nama').val(nama_pel);
                $('#angsur_nomor').val(nomor);
                $('#angsur_kd_referensi').val(kd_referensi);
                $('#angsur_pelunasan').val(pelunasan);
                $('#angsur_deposit').val(deposit);
                $('#angsur_status').val(status);
                // Call Modal Edit
                $('#angsurModal').modal('show');
                // $('#editModal').show('1000');
            });
        });
    </script>
    <!-- End Modal Input -->
    <!-- Modal Delete Piutang -->
    <script>
        $(document).ready(function() {

            // get Delete Invoice
            $('.btn-hapus').click(function() {
                // get data from button edit
                const id = $(this).data('id');
                const nama_pel = $(this).data('nama_pel');
                const nomor = $(this).data('nomor');
                const lampiran = $(this).data('lampiran');
                const perihal = $(this).data('perihal');
                // Set data to Form Edit
                $('#invoice_id').val(id);
                $('#invoice_nama_pel').val(nama_pel);
                $('#invoice_nomor').val(nomor);
                $('#invoice_perihal').val(perihal);
                $('#invoice_lampiran').val(lampiran);
                // Call Modal Edit
                $('#deleteInvoiceModal').modal('show');
            });

            // get Delete Product
            $('.btn-delete').click(function() {
                // get data from button delete
                const id = $(this).data('id');

                // Set data to Form delete
                $('#piutang_id').val(id);

                // Call Modal delete
                $('#deleteModal').modal('show');
            });

            // get Delete Product
            $('.btn-del').click(function() {
                // get data from button delete
                const id_pelunasan = $(this).data('id_pelunasan');

                // Set data to Form delete
                $('#id_pelunasan').val(id_pelunasan);

                // Call Modal delete
                $('#delModal').modal('show');
            });

        });
    </script>
    <!-- End Modal Delete Invoice -->
    <!-- Sort Data By Date -->
    <script src="<?php echo base_url('plugins/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
    <!-- Sort by Date -->

    <!-- End of Sort Data by Date -->
    <!-- Jquery Core Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= base_url('') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('') ?>plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url('') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('') ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('') ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('') ?>plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url('') ?>plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url('') ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url('') ?>plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url('') ?>plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url('') ?>plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url('') ?>plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url('') ?>plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('') ?>plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url('') ?>plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url('') ?>plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('') ?>js/admin.js"></script>
    <script src="<?php echo base_url('') ?>js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('') ?>js/demo.js"></script>

    <script src="<?php echo base_url('') ?>js/jquery.mask.min.js"></script>

    <!-- <script>
        $(document).ready(function() {

            // get Edit Product
            $('.btn-edit').on('click', function() {
                // // get data from button edit
                // const id_pelunasan = $(this).data('id_pelunasan');
                // const nama_pel = $(this).data('nama_pel');
                // const nomor = $(this).data('nomor');
                // const pelunasan = $(this).data('pelunasan');
                // // Set data to Form Edit
                // $('.product_id').val(id_pelunasan);
                // $('.product_name').val(nama_pel);
                // $('.product_price').val(nomor);
                // $('.product_category').val(pelunasan);
                // Call Modal Edit
                $('#editModal').modal('show');
            });
        });
    </script> -->
</body>

</html>