<div class="">

    <!-- Tabel -->
    <div class="card" style="width: 850px;">
        <div class="card-header">
            <h3 class="card-title">Data Pelunasan</h3>
        </div>
        <div class="card-tools" style="margin-top: 25px; margin-left: 550px;">
            <form action="<?= base_url('rekapitulasi/timeline_pelunasan') ?>" method="POST">
                <div class="input-group input-group-sm" style="width: 250px; border: solid 0.5px grey;">
                    &nbsp;&nbsp;<input type="text" name="keyword" class="form-control " placeholder="Keyword...">
                    <div class="input-group-append">
                        <input type="submit" name="submit" class="btn btn-primary btn-sm fas fa search" value="Cari">
                    </div>
                </div>
                <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px; margin-top: -20px; margin-bottom: 20px;">Format Date: Y-M-D.</small>
            </form>
        </div>
        <div class="card-body" style="margin-top: -50px;">
            <table class="table table-striped table-responsive dataTable js-exportable">
                <?php
                if (empty($row)) {
                    echo "
                                <small class='form-text' style='color: red ;'>Data tidak ditemukan...</small>
                                ";
                } else {
                ?>
                    <small id="nama_user" class="form-text" style="color: grey ;">Hasil: <?= $total_rows ?></small>
                <?php } ?>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No. Invoice</th>
                        <th>Nama Pelanggan</th>
                        <th>Kd. Referensi</th>
                        <th>Pelunasan (BSU)</th>
                        <th>Deposit (BSU)</th>
                        <th>Tanggal Setor</th>
                        <th>Tanggal Input</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($row as $data) {
                    ?>
                        <tr>
                            <td><?= ++$start ?></td>
                            <td><?= $data['nomor'] ?></td>
                            <td><?= $data['nama_pel'] ?></td>
                            <td><?php
                                if ($data['kd_referensi'] == "") {
                                    echo "Belum ada.";
                                } else {
                                    echo $data['kd_referensi'];
                                } ?></td>
                            <td><?php if ($data['pelunasan'] == "LUNAS") {
                                    echo "LUNAS";
                                } else {
                                    echo number_format($data['pelunasan']);
                                } ?></td>
                            <td><?= number_format($data['deposit']) ?></td>
                            <td><?php
                                if ($data['tgl_setor'] == "0000-00-00 00:00:00") {
                                    echo "Belum di setor.";
                                } else {
                                    echo date('d-m-Y', strtotime($data['tgl_setor']));
                                } ?></td>
                            <td><?php echo date('d-m-Y', strtotime($data['tgl'])); ?></td>
                            <td>
                                <?php if ($data['status'] == 1) { ?>
                                    <span class="badge badge-sm badge-success">Lunas</span>
                                <?php
                                } elseif ($data['status'] == 0) {
                                ?>
                                    <span class="badge badge-sm badge-danger">Belum</span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table><br>
            <?= $this->pagination->create_links(); ?>
        </div><br>
    </div>
    <!-- Akhir Tabel -->
</div>