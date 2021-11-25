<div class="container">
    <div class="container-fluid">

        <div class="card" style="width: 750px;">
            <div class="card-header">
                <h3 class="card-title">Data Invoice</h3>
            </div><br>
            <div class="float-right">
                <div class="card-tools" style="margin-right: 20px;">
                    <form action="<?= base_url('rekapitulasi/invoice') ?>" method="POST">
                        <div class="input-group input-group-sm float-right" style="width: 200px; border: solid 0.5px grey;">
                            &nbsp;&nbsp;<input type="text" name="keyword" class="form-control " placeholder="Keyword...">
                            <div class="input-group-append">
                                <input type="submit" name="submit" class="btn btn-primary btn-sm fas fa search" value="Cari">
                            </div><br>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body table-resposive" style="margin-top: -50px;">
                <table class="table table-striped table-responsive dataTable js-exportable">
                    <?php
                    if (empty($row)) {
                        echo "
                        <small class='form-text' style='color: red ;'>Data tidak ditemukan...</small>
                        ";
                    } else {
                    ?>
                        <div class="" style="margin-top: 20px; margin-left: 505px;">
                            <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: Y-M-D.</small>
                        </div>
                        <div class="float-left" style="margin-bottom: 10px;">
                            <small id="nama_user" class="form-text" style="color: grey ;">Hasil: <?= $total_rows ?></small>
                        </div>

                    <?php } ?>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Invoice</th>
                            <th>Nama Pelanggan</th>
                            <th>Lampiran</th>
                            <th>Perihal</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($row as $data) {
                        ?>
                            <tr>
                                <td><?= ++$start ?></td>
                                <td><?= $data['nomor'] ?></td>
                                <td><?= $data['nama_pel'] ?></td>
                                <td><?= $data['lampiran'] ?></td>
                                <td><?= $data['perihal'] ?></td>
                                <td><?php echo date('d-m-Y', strtotime($data['tgl'])); ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
        <!-- Akhir Tabel -->
    </div>
</div>
</div>
</div>