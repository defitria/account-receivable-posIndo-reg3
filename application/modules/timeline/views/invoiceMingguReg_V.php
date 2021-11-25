<div class="container">
    <div class="container-fluid">
        <div class="block-header">

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
                    <span class="badge badge-info badge-sm">Invoice minggu ini..</span>
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
                            foreach ($minggu as $mg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $mg->nomor ?></td>
                                    <td><?= $mg->nama_pel ?></td>
                                    <td><?= $mg->lampiran ?></td>
                                    <td><?= $mg->perihal ?></td>
                                    <td>
                                        <?php if ($mg->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($mg->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum Lunas</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php echo date('d-m-Y', strtotime($mg->tgl)); ?>
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