<div class="container">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

            <!-- Tabel -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pengakuan Piutang <?= $upt ?></h3>
                    <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: D-M-Y.
                        <div class="float-right">
                            <a href="<?= site_url('timeline/sumpiutang') ?>" class="btn btn-default btn-sm">
                                <i class="fa fa-arrow-left"></i> &nbsp; Back
                            </a>
                        </div>
                    </small>

                </div><br>

                <div class="card-body table-resposive">
                    <span class="badge badge-info badge-sm">Data Piutang yang masuk minggu ini..</span>
                    <table class="table table-striped table-responsive dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pelanggan</th>
                                <th>Bisnis</th>
                                <th>PROD</th>
                                <th>BSU</th>
                                <th>Jumlah (BSU)</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($minggu as $mg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $mg->nama_pel ?></td>
                                    <td><?= $mg->bisnis ?></td>
                                    <td><?= number_format($mg->prod) ?></td>
                                    <td><?= number_format($mg->bsu) ?></td>
                                    </td>
                                    <td><?= number_format($mg->total_piutang) ?></td>
                                    <td>
                                        <?php echo date('d-m-Y', strtotime($mg->tgl));   ?></td>
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