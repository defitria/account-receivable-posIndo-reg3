<div class="container">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

            <!-- Tabel -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoice <?= $upt ?></h3>
                    <small id="nama_user" class="form-text" style="color: grey ;">Format Date: D-M-Y.
                        <div class="float-right">
                            <a href="<?= site_url('timeline/suminvoice') ?>" class="btn btn-default btn-sm">
                                <i class="fa fa-arrow-left"></i> &nbsp; Back
                            </a>
                        </div>
                    </small>

                </div><br>

                <div class="card-body table-resposive">
                    <span class="badge badge-info badge-sm">Invoice hari ini..</span>
                    <table class="table table-striped table-responsive dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nomor Invoice</th>
                                <th>Nama Pelanggan</th>
                                <th>Lampiran</th>
                                <th>Perihal</th>
                                <th>Status</th>
                                <th>Tgl</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($hari as $hr) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $hr->nomor ?></td>
                                    <td><?= $hr->nama_pel ?></td>
                                    <td><?= $hr->lampiran ?></td>
                                    <td><?= $hr->perihal ?></td>
                                    <td>
                                        <?php if ($hr->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($hr->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum Lunas</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php echo date('d-m-Y', strtotime($hr->tgl)); ?>
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