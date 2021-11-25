<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--<link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">-->
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!--<script src="" type="text/javascript"></script>-->

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" ></script>-->

<body onload="window.print()">
    <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
    <div>

        <div id="content-wrapper" style="margin-top:50px">

            <div class="container-fluid">

                <!-- DataTables Example -->
                <div class=" mb-3" id="cardbayar">
                    <div class="card-body card-block">
                        <div class="float-left">
                            <img src="<?= base_url('') ?>/images/posindo1.png" style="width: 90px;">
                        </div>
                        <div class="float-right">
                            <p style="font-family: sans-serif; font-size: 12px;">
                                <?php
                                $blnsk = date('m');
                                $bln4 = date('m', strtotime('-1 month', strtotime($blnsk)));

                                echo $bln4 ?>
                                PT. POS Indonesia (Persero)<br>
                                SLPK Kantor Pos Palembang<br>
                                Jl. Merdeka No. 03 Palembang 30132<br>
                                Telepon : 0711-320725<br>
                            </p>
                        </div>
                        <br><br> <br>
                        <hr style="border: 1px solid grey;">
                        <div class="float-left">
                            <p style="font-family: sans-serif; font-size: 12px;">
                                Nomor &nbsp; : &nbsp; <?= $datainvoice->nomor  ?><br>
                                Lampiran &nbsp; : &nbsp; <?= $datainvoice->lampiran  ?><br>
                                Perihal &nbsp; : &nbsp; <?= $datainvoice->perihal  ?><br>
                            </p>
                        </div>
                        <div class="float-right" style="margin-right: 80px;">
                            <p style="font-family: sans-serif; font-size: 12px;">
                                <?php $tgl = date('d F y'); ?>
                                Palembang, <?= $tgl ?><br>
                                Kepada Yth. <br>
                                <?= $datainvoice->nama_pel ?><br><br>
                                Palembang<br>
                            </p>
                        </div>
                        <br><br><br>
                        <br><br><br>

                        <div>
                            <p style="font-family: sans-serif; font-size: 12px;">
                                Bersama ini disampaikan tagihan biaya pengiriman untuk kantor saudara sebagai berikut:<br><br>
                                Rincian Transaksi:<br><br>
                                <?php
                                $blnsk = date('F Y');
                                $blnsb = date('F Y', strtotime('-1 month', strtotime($blnsk))); ?>
                                1. Bulan Berjalan (<?= $blnsb ?>)
                            </p>
                            <?php
                            foreach ($datasurat as $row) {
                            ?>
                                <table class="table table-bordered table-sm" id="tabelbayar" style="padding: 50px; font-family: sans-serif; font-size: 12px; margin-left:20px; width: 400px;">
                                    <tr>
                                        <td><?php if ($row->bisnis == "") {
                                                echo "SURAT";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->bisnis;
                                            } ?></td>
                                        <td><?php if ($row->prod == "") {
                                                echo "-";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->prod;
                                            } ?></td>
                                        <td><?php if ($row->jumlah == "") {
                                                echo "-";
                                            } elseif ($row->jumlah != "") {
                                                echo number_format($row->jumlah);
                                            } ?></td>
                                    </tr>
                                <?php }
                                ?>
                                <?php
                                foreach ($datapaket as $row) { ?>
                                    <tr>
                                        <td><?php if ($row->bisnis == "") {
                                                echo "PAKET";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->bisnis;
                                            } ?></td>
                                        <td><?php if ($row->prod == "") {
                                                echo "-";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->prod;
                                            } ?></td>
                                        <td><?php if ($row->jumlah == "") {
                                                echo "-";
                                            } elseif ($row->jumlah != "") {
                                                echo number_format($row->jumlah);
                                            } ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                foreach ($datainlogistik as $row) : ?>
                                    <tr>
                                        <td><?php if ($row->bisnis == "") {
                                                echo "Inlogistik";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->bisnis;
                                            } ?></td>
                                        <td><?php if ($row->prod == "") {
                                                echo "-";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->prod;
                                            } ?></td>
                                        <td><?php if ($row->jumlah == "") {
                                                echo "-";
                                            } elseif ($row->jumlah != "") {
                                                echo number_format($row->jumlah);
                                            } ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <?php
                                foreach ($datakargopos as $row) : ?>
                                    <tr>
                                        <td><?php if ($row->bisnis == "") {
                                                echo "Kargo Pos";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->bisnis;
                                            } ?></td>
                                        <td><?php if ($row->prod == "") {
                                                echo "-";
                                            } elseif ($row->bisnis != "") {
                                                echo $row->prod;
                                            } ?></td>
                                        <td><?php if ($row->jumlah == "") {
                                                echo "-";
                                            } elseif ($row->jumlah != "") {
                                                echo number_format($row->jumlah);
                                            } ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <?php
                                foreach ($datasum as $row) : ?>
                                    <tr style="font-weight: bold;">
                                        <td>Sub Total</td>
                                        <td><?= $row->prod ?></td>
                                        <td><?= number_format($row->total) ?></td>
                                    </tr>
                                </table>
                            <?php endforeach ?>
                        </div>
                        <div>
                            <?php
                            if ($pelunasan['status'] == '0') { ?>
                                <p style="font-family: sans-serif; font-size: 12px;">
                                    2. Bulan lalu yang belum dilunasi
                                <table class="table table-bordered table-sm" id="tabelbayar" style="padding: 50px; font-family: sans-serif; font-size: 12px; margin-left:20px; width: 400px;">
                                    <tr style="font-weight: bold;">
                                        <td>Tagihan yang belum dilunasi</td>
                                        <td>BSU</td>
                                        <td>Denda 2% </td>
                                        <td>Jumlah</td>
                                    </tr>
                                    <?php foreach ($piutangBln2 as $dt) { ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $blnsk = date('F Y');
                                                $bln2 = date('F Y', strtotime('-2 month', strtotime($blnsk)));
                                                echo $bln2;
                                                ?>
                                            </td>
                                            <td>
                                                <?php $jml1 = ($dt->jumlah1) - $pelunasanBln2['pelunasan'];
                                                echo number_format($jml1); ?>
                                            </td>
                                            <td><?php $dnd1 = (($dt->jumlah1 - $pelunasanBln2['pelunasan']) * 0.02);
                                                echo number_format($dnd1) ?> </td>
                                            <td><?php $ttl1 = ($dt->jumlah1 - $pelunasanBln2['pelunasan']) + (($dt->jumlah1 - $pelunasanBln2['pelunasan']) * 0.02);
                                                echo number_format($ttl1) ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php foreach ($piutangBln3 as $dt) { ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $blnsk = date('F Y');
                                                $bln3 = date('F Y', strtotime('-3 month', strtotime($blnsk)));
                                                echo $bln3;
                                                ?>
                                            </td>
                                            <td>
                                                <?php $jml2 = ($dt->jumlah2) - $pelunasanBln3['pelunasan'];
                                                echo number_format($jml2); ?>
                                            </td>
                                            <td><?php $dnd2 = (($dt->jumlah2 - $pelunasanBln3['pelunasan']) * 0.02);
                                                echo number_format($dnd2) ?> </td>
                                            <td><?php $ttl2 = ($dt->jumlah2 - $pelunasanBln3['pelunasan']) + (($dt->jumlah2 - $pelunasanBln3['pelunasan']) * 0.02);
                                                echo number_format($ttl2) ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php foreach ($piutangBln4 as $dt) { ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $blnsk = date('F Y');
                                                $bln4 = date('F Y', strtotime('-4 month', strtotime($blnsk)));
                                                echo $bln4;
                                                ?>
                                            </td>
                                            <td>
                                                <?php $jml3 = ($dt->jumlah3) - $pelunasanBln4['pelunasan'];
                                                echo number_format($jml3); ?>
                                            </td>
                                            <td><?php $dnd3 = (($dt->jumlah3 - $pelunasanBln4['pelunasan']) * 0.02);
                                                echo number_format($dnd3) ?> </td>
                                            <td><?php $ttl3 = ($dt->jumlah3 - $pelunasanBln4['pelunasan']) + (($dt->jumlah3 - $pelunasanBln4['pelunasan']) * 0.02);
                                                echo number_format($ttl3) ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php foreach ($piutangBln5 as $dt) { ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $blnsk = date('F Y');
                                                $bln5 = date('F Y', strtotime('-5 month', strtotime($blnsk)));
                                                echo $bln5;
                                                ?>
                                            </td>
                                            <td>
                                                <?php $jml4 = ($dt->jumlah4) - $pelunasanBln5['pelunasan'];
                                                echo number_format($jml4); ?>
                                            </td>
                                            <td><?php $dnd4 = (($dt->jumlah4 - $pelunasanBln5['pelunasan']) * 0.02);
                                                echo number_format($dnd4) ?> </td>
                                            <td><?php $ttl4 = ($dt->jumlah4 - $pelunasanBln5['pelunasan']) + (($dt->jumlah4 - $pelunasanBln5['pelunasan']) * 0.02);
                                                echo number_format($ttl4) ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php foreach ($piutangBln6 as $dt) { ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $blnsk = date('F Y');
                                                $bln6 = date('F Y', strtotime('-6 month', strtotime($blnsk)));
                                                echo $bln6;
                                                ?>
                                            </td>
                                            <td>
                                                <?php $jml5 = ($dt->jumlah5) - $pelunasanBln6['pelunasan'];
                                                echo number_format($jml5); ?>
                                            </td>
                                            <td><?php $dnd5 = (($dt->jumlah5 - $pelunasanBln6['pelunasan']) * 0.02);
                                                echo number_format($dnd5) ?> </td>
                                            <td><?php $ttl5 = ($dt->jumlah5 - $pelunasanBln6['pelunasan']) + (($dt->jumlah5 - $pelunasanBln6['pelunasan']) * 0.02);
                                                echo number_format($ttl5) ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php foreach ($piutangBln7 as $dt) { ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $blnsk = date('F Y');
                                                $bln7 = date('F Y', strtotime('-7 month', strtotime($blnsk)));
                                                echo $bln7;
                                                ?>
                                            </td>
                                            <td>
                                                <?php $jml6 = ($dt->jumlah6) - $pelunasanBln7['pelunasan'];
                                                echo number_format($jml6); ?>
                                            </td>
                                            <td><?php $dnd6 = (($dt->jumlah6 - $pelunasanBln7['pelunasan']) * 0.02);
                                                echo number_format($dnd6) ?> </td>
                                            <td><?php $ttl6 = ($dt->jumlah6 - $pelunasanBln7['pelunasan']) + (($dt->jumlah6 - $pelunasanBln7['pelunasan']) * 0.02);
                                                echo number_format($ttl6) ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    $grandTotal = 0;
                                    $grandDenda = 0;
                                    $grandJumlah = 0;
                                    foreach ($piutangBln2 as $row1) {
                                        foreach ($piutangBln3 as $row2) {
                                            foreach ($piutangBln4 as $row3) {
                                                foreach ($piutangBln5 as $row4) {
                                                    foreach ($piutangBln6 as $row5) {
                                                        foreach ($piutangBln7 as $row6) {
                                    ?>
                                                            <tr style="font-weight: bold;">
                                                                <td>Sub Total</td>
                                                                <td><?php
                                                                    $grandJumlah = (($row1->jumlah1 - $pelunasanBln2['pelunasan']) + ($row2->jumlah2 - $pelunasanBln3['pelunasan']) + ($row3->jumlah3 - $pelunasanBln4['pelunasan']) + ($row4->jumlah4 - $pelunasanBln5['pelunasan']) + ($row5->jumlah5 - $pelunasanBln6['pelunasan']) + ($row6->jumlah6 - $pelunasanBln7['pelunasan']));

                                                                    echo number_format($grandJumlah);
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    $grandDenda = (($row1->jumlah1 - $pelunasanBln2['pelunasan']) * 0.02) + (($row2->jumlah2 - $pelunasanBln3['pelunasan']) * 0.02) + (($row3->jumlah3 - $pelunasanBln4['pelunasan']) * 0.02) + (($row4->jumlah4 - $pelunasanBln5['pelunasan']) * 0.02) + (($row5->jumlah5 - $pelunasanBln6['pelunasan']) * 0.02) + (($row6->jumlah6 - $pelunasanBln7['pelunasan']) * 0.02);

                                                                    echo number_format($grandDenda);
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    $grandTotal = (($row1->jumlah1 - $pelunasanBln2['pelunasan']) + (($row1->jumlah1 - $pelunasanBln2['pelunasan']) * 0.02) + ($row2->jumlah2 - $pelunasanBln3['pelunasan']) + (($row2->jumlah2 - $pelunasanBln3['pelunasan']) * 0.02) + ($row3->jumlah3 - $pelunasanBln4['pelunasan']) + (($row3->jumlah3 - $pelunasanBln4['pelunasan']) * 0.02) + ($row4->jumlah4 - $pelunasanBln5['pelunasan']) + (($row4->jumlah4 - $pelunasanBln5['pelunasan']) * 0.02) + ($row5->jumlah5 - $pelunasanBln6['pelunasan']) + (($row5->jumlah5 - $pelunasanBln6['pelunasan']) * 0.02) + ($row6->jumlah6 - $pelunasanBln7['pelunasan']) + (($row6->jumlah6 - $pelunasanBln7['pelunasan']) * 0.02));

                                                                    echo number_format($grandTotal);
                                                                    ?>
                                                                </td>
                                                            </tr>
                                </table>
        <?php
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
        ?>
        </table>
        <b style="font-family: sans-serif; font-size: 12px;"> Deposit : Rp. <?= number_format($pelunasan['deposit']) ?></b><br>
        <?php
                                $Total = 0;
                                foreach ($datasum as $rowsum) {
                                    foreach ($piutangBln2 as $row1) {
                                        foreach ($piutangBln3 as $row2) {
                                            foreach ($piutangBln4 as $row3) {
                                                foreach ($piutangBln5 as $row4) {
                                                    foreach ($piutangBln6 as $row5) {
                                                        foreach ($piutangBln7 as $row6) {
                                                            $Total = ($rowsum->total + (($row1->jumlah1 - $pelunasanBln2['pelunasan']) + (($row1->jumlah1 - $pelunasanBln2['pelunasan']) * 0.02)) + (($row2->jumlah2 - $pelunasanBln3['pelunasan']) + (($row2->jumlah2 - $pelunasanBln3['pelunasan']) * 0.02)) + (($row3->jumlah3 - $pelunasanBln4['pelunasan']) + (($row3->jumlah3 - $pelunasanBln4['pelunasan']) * 0.02)) + (($row4->jumlah4 - $pelunasanBln5['pelunasan']) + (($row4->jumlah4 - $pelunasanBln5['pelunasan']) * 0.02)) + (($row5->jumlah5 - $pelunasanBln6['pelunasan']) + (($row5->jumlah5 - $pelunasanBln6['pelunasan']) * 0.02)) + (($row6->jumlah6 - $pelunasanBln7['pelunasan']) + (($row6->jumlah6 - $pelunasanBln7['pelunasan']) * 0.02))) - $pelunasan['deposit'];
        ?>
                                    <b style="font-family: sans-serif; font-size: 12px;"> Total : Rp. <?= number_format($Total) ?></b><br>
                                    <b style="font-family: sans-serif; font-size: 12px;"> Terbilang : <?= terbilang($Total) ?> Rupiah
                                    </b>
        <?php

                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
        ?>
        </p>
    <?php } elseif ($pelunasan['status'] == '1') { ?>
        <b style="font-family: sans-serif; font-size: 12px;"> Deposit : Rp. <?= number_format($pelunasan['deposit']) ?></b><br>
        <?php
                                $Total = 0;
                                foreach ($datasum as $rowsum) {

                                    $Total = ($rowsum->total) - $pelunasan['deposit'];
        ?>
            <b style="font-family: sans-serif; font-size: 12px;"> Total : Rp. <?= number_format($Total) ?></b><br>
            <b style="font-family: sans-serif; font-size: 12px;"> Terbilang : <?= terbilang($Total) ?> Rupiah
            </b>
        <?php

                                }
        ?>
        </p>
    <?php
                            }
    ?>
                        </div>
                        <br><br>
                        <div>
                            <p style="font-family: sans-serif; font-size: 12px;">
                                Mohon pembayaran dilakukan tepat waktu, sesuai dengan Perjanjian Kerjasama (PKS) yang telah disepakati, jika terjadi keterlambatan atas pembayaran, maka akan dikenakan denda sesuai dengan ketentuan yang berlaku. Pembayaran dapat dilakukan melalui Bank BRI dengan Nomor <b> Virtual Account : 107551000021471. atau melaui Bank BRI Cabang Palembang Kapt. A. Rivai, No : 0059-01-000370-5, a.n. Kantor Pos II Palembang.</b><br><br>
                                Cat : harap konfirmasi kepada kami jika sudah pernah dilakukan pelunasan dengan melampirkan bukti transfer/pembayaran.<br><br>
                                CP : Winda Selly Dorkas 0822 80632462 WA : 0822 8063 2462<br>
                                Salam Hormat,
                            </p>
                        </div><br>


                        <div class="float-right" style="font-family: sans-serif; font-size: 12px; margin-right: 200px;">
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select">Manajer&nbsp;Akuntansi</label></div>
                            </div>
                            <br><br><br>
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select" class="">HARDIANSYAH</label>
                                </div>
                            </div>
                            <div>
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-3"><label for="select">Nippos.991407179</label></div>
                                </div>
                            </div>
                        </div>

                        <div class="float-right" style="font-family: sans-serif; font-size: 12px; margin-right: 200px;">
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select">Manajer&nbsp;Penjualan</label></div>
                            </div>
                            <br><br><br>
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select" class="">PARIDU</label>
                                </div>
                            </div>
                            <div>
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-3"><label for="select">Nippos.984397589</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="float-right" style="font-family: sans-serif; font-size: 12px; margin-right: 200px;">
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select">Kepala&nbsp;Kantor</label></div>
                            </div>
                            <br><br><br>
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select" class="">RISDAYATI</label>
                                </div>
                            </div>
                            <div>
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-3"><label for="select">Nippos.968355432</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="content-wrapper" class="container-fluid" style="margin-top: 50px;">
                    <div style="page-break-before: always;">
                        <div class="float-left">
                            <img src="<?= base_url('') ?>/images/posindo1.png" style="width: 90px;">
                        </div>
                        <div class="float-right">
                            <p style="font-family: sans-serif; font-size: 12px;">
                                PT. POS Indonesia (Persero)<br>
                                SLPK Kantor Pos Palembang<br>
                                Jl. Merdeka No. 03 Palembang 30132<br>
                                Telepon : 0711-320725<br>
                            </p>
                        </div>
                        <br><br><br><br>
                        <hr style="border: 1px solid grey;">
                        <center style="font-weight: bold; font-size:14px; font-family: sans-serif;">K W I T A N S I</center>
                        <hr style="border: 1px solid grey;">
                        <p style="font-family: sans-serif; font-size: 12px;">
                            Sudah diterima dari : <?= $datainvoice->nama_pel ?>
                        </p>
                        <?php foreach ($datasum as $row) : ?>
                            <p style="font-family: sans-serif; font-size: 12px;"> Besar Uang : <b style="font-family: sans-serif; font-size: 12px;"><?= terbilang($row->total) ?> Rupiah</b>
                            </p>
                        <?php endforeach ?>
                        <?php
                        $blnsk = date('F Y');
                        $blnsb = date('F Y', strtotime('-1 month', strtotime($blnsk))); ?>
                        <p style="font-family: sans-serif; font-size: 12px;">
                            Keperluan : Pembayaran biaya pengiriman barang.<br>
                            &emsp;&emsp;&emsp;&emsp;&emsp; Bulan Periodik : <?= $blnsb ?> dengan rincian sbb :
                        </p>

                        <?php
                        foreach ($datasurat as $row) : ?>
                            <table class="table table-bordered table-sm" id="tabelbayar" style="padding: 50px; font-family: sans-serif; font-size: 12px; margin-left:60px; width: 400px;">
                                <tr>
                                    <td>Jenis Kiriman / Service</td>
                                    <td>Jml Kiriman</td>
                                    <td>Biaya (Rp)</td>
                                </tr>
                                <tr>
                                    <td><?php if ($row->bisnis == "") {
                                            echo "SURAT";
                                        } elseif ($row->bisnis != "") {
                                            echo $row->bisnis;
                                        } ?></td>
                                    <td><?php if ($row->prod == "") {
                                            echo "-";
                                        } elseif ($row->bisnis != "") {
                                            echo $row->prod;
                                        } ?></td>
                                    <td><?php if ($row->jumlah == "") {
                                            echo "-";
                                        } elseif ($row->jumlah != "") {
                                            echo number_format($row->jumlah);
                                        } ?></td>
                                </tr>
                            <?php endforeach ?>
                            <?php
                            foreach ($datapaket as $row) : ?>
                                <tr>
                                    <td><?php if ($row->bisnis == "") {
                                            echo "PAKET";
                                        } elseif ($row->bisnis != "") {
                                            echo $row->bisnis;
                                        } ?></td>
                                    <td><?php if ($row->prod == "") {
                                            echo "-";
                                        } elseif ($row->bisnis != "") {
                                            echo $row->prod;
                                        } ?></td>
                                    <td><?php if ($row->jumlah == "") {
                                            echo "-";
                                        } elseif ($row->jumlah != "") {
                                            echo number_format($row->jumlah);
                                        } ?></td>
                                </tr>
                            <?php endforeach ?>
                            <?php
                            foreach ($datasum as $row) : ?>
                                <tr>
                                    <td>Total Biaya</td>
                                    <td><?= $row->prod ?></td>
                                    <td><?= number_format($row->total) ?></td>
                                </tr>
                            </table>
                            <b style="font-family: sans-serif; font-size: 12px;"> Terbilang : <?= terbilang($row->total) ?> Rupiah
                            </b>
                        <?php endforeach ?>
                    </div>
                    <br>

                    <div class="float-right" style="font-family: sans-serif; font-size: 12px; margin-right: 200px;">
                        <?php
                        $blnsk = date('d F Y');
                        ?>
                        Palembang, <?= $blnsk ?>
                    </div><br>

                    <div class=" float-left" style="font-family: sans-serif; font-size: 12px; margin-right: 100px;">
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3"><label for="select">Disetujui,</label></div>
                        </div>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3"><label for="select"></label></div>
                        </div>
                        <br><br><br>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3"><label for="select" class=""></label>
                            </div>
                        </div>
                        <div>
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select"></label></div>
                            </div>
                        </div>
                    </div>

                    <div class="float-left" style="font-family: sans-serif; font-size: 12px;">
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3"><label for="select">Dibayarkan,</label></div>
                        </div>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3"><label for="select"></label></div>
                        </div>
                        <br><br><br>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3"><label for="select" class=""></label>
                            </div>
                        </div>
                        <div>
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3"><label for="select"></label></div>
                            </div>
                        </div>
                    </div>
                    <div class="float-left" style="font-family: sans-serif; font-size: 12px; margin-left: 100px;">
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3">Diterima&nbsp;Oleh,</div>
                        </div>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3">Kepala&nbsp;Kantor</div>
                        </div>
                        <br><br><br><br>
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-3">RISDAYATI
                            </div>
                        </div>
                        <div>
                            <div class="row form-group">
                                <div id="form-tanggal" class="col col-md-3">Nippos.968355432</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>