<div class="container">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

            <!-- Tabel -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pengakuan Pelunasan <?= $upt ?></h3>
                    <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: D-M-Y.
                        <div class="float-right">
                            <a href="<?= site_url('timeline/sumpelunasan') ?>" class="btn btn-default btn-sm">
                                <i class="fa fa-arrow-left"></i> &nbsp; Back
                            </a>
                        </div>
                    </small>

                </div><br>

                <div class="card-body table-resposive">
                    <span class="badge badge-info badge-sm">Data Pelunasan yang masuk bulan ini..</span>
                    <table class="table table-striped table-responsive dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nomor Invoice</th>
                                <th>Nama Pelanggan</th>
                                <th>Kd. Referensi</th>
                                <th>Pelunasan</th>
                                <th>Deposit (BSU)</th>
                                <th>Tgl Setor</th>
                                <th>Tgl Input</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($bulan as $bln) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $bln->nomor ?></td>
                                    <td><?= $bln->nama_pel ?></td>
                                    <td>
                                        <?php if ($bln->kd_referensi == "") {
                                            echo "Belum ada.";
                                        } else {
                                            echo $bln->kd_referensi;
                                        } ?>
                                    </td>
                                    <td>
                                        <?php if ($bln->pelunasan == "LUNAS") {
                                            echo "LUNAS";
                                        } else {
                                            echo number_format($bln->pelunasan);
                                        } ?>
                                    </td>
                                    <td><?= number_format($bln->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($bln->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($bln->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo date('d-m-Y', strtotime($bln->tgl)); ?>
                                    </td>
                                    <td>
                                        <?php if ($bln->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($bln->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
                <!-- Akhir Tabel -->

            </div>
        </div>
    </div>
</div>