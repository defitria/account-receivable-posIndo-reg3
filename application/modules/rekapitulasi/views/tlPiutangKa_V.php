<div class="container">
    <!-- <div class="container-fluid">
        <div class="block-header"> -->
    <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

    <!-- Tabel -->
    <div class="card" style="width: 700px;">
        <div class="card-header">
            <h3 class="card-title">Pengakuan Piutang</h3>
        </div><br>
        <div class="card-tools" style="margin-left: 450px;">
            <form action="<?= base_url('rekapitulasi/timeline_piutang') ?>" method="POST">
                <div class="input-group input-group-sm" style="width: 200px; border: solid 0.5px grey;">
                    &nbsp;&nbsp;<input type="text" name="keyword" class="form-control " placeholder="Keyword...">
                    <div class="input-group-append">
                        <input type="submit" name="submit" class="btn btn-primary btn-sm fas fa search" value="Cari">
                    </div>
                </div>
                <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px; margin-top: -10px;">Format Date: Y-M-D.</small>
            </form>
        </div>
        <div class="card-body table-resposive" style="margin-top: -20px;">
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
                        <th>Nama Pelanggan</th>
                        <th>Bisnis</th>
                        <th>PROD</th>
                        <th>BSU</th>
                        <th>Jumlah (BSU)</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($row as $data) {
                    ?>
                        <tr>
                            <td><?= ++$start ?></td>
                            <td><?= $data['nama_pel'] ?></td>
                            <td><?= $data['bisnis'] ?></td>
                            <td><?= number_format($data['prod']) ?></td>
                            <td><?= number_format($data['bsu']) ?></td>
                            <td><?= number_format($data['total_piutang']) ?></td>
                            <td>
                                <?php echo date('d-m-Y', strtotime($data['tgl']));   ?></td>
                            <td>
                                <?php if ($this->session->userdata('level') == 'Admin Penjualan UPT Pbm') { ?>
                                    <a href="<?= site_url('piutangprabu/delete_piutang/' . $data['id']) ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>
                                    </a> &nbsp;
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
    </div>
    <!-- Akhir Tabel -->
    <!-- </div>
    </div> -->
</div>
</div>