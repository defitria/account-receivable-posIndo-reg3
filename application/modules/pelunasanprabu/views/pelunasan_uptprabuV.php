<div class="">

    <!-- Tabel -->
    <div class="card" style="width: 950px;">
        <div class="card-header">
            <h3 class="card-title">Data Pelunasan</h3>
        </div>
        <div class="card-tools" style="margin-top: 25px; margin-left: 650px;">
            <form action="<?= base_url('pelunasanprabu') ?>" method="POST">
                <div class="input-group input-group-sm" style="width: 200px;">
                    &nbsp;&nbsp;<input type="text" name="keyword" class="form-control " placeholder="Keyword...">
                    <div class="input-group-append">
                        <input type="submit" name="submit" class="btn btn-primary btn-sm fas fa search" value="Cari">
                        &nbsp; &nbsp;
                        <div>
                            <a href="<?= site_url('pelunasanprabu/add_pelunasan') ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> Edit
                            </a>
                        </div>
                    </div>
                    <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: Y-M-D.</small>
                </div>
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
                                }
                                ?></td>
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
                            <td>
                                <?php if ($this->session->userdata('level') == 'Kpl Penjualan UPT Pbm') {
                                    if ($data['status'] == 0) {
                                ?>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-edit" data-id_pelunasan="<?= $data['id_pelunasan']; ?>" data-nama_pel="<?= $data['nama_pel']; ?>" data-nomor="<?= $data['nomor']; ?>" data-pelunasan="<?= $data['pelunasan']; ?>" data-deposit="<?= $data['deposit']; ?>" data-tgl_setor="<?= $data['tgl_setor']; ?>" data-status="<?= $data['status']; ?>">Edit</a>
                                    <?php } else {
                                        echo "";
                                    }
                                    ?>

                                <?php
                                } ?>

                                <?php if ($this->session->userdata('level') == 'Admin Penjualan UPT Pbm') { ?>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-del" data-id_pelunasan="<?= $data['id_pelunasan']; ?>"><i class="far fa-trash-alt"></i></a>
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
    <!-- Modal Delete -->
    <form action="<?= site_url('pelunasanprabu/delete/') ?>" method="post">
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body float-center">

                        <input type="hidden" readonly id="id_pelunasan" name="id_pelunasan">

                        <h4>Yakin hapus data ini?</h4>
                        <div class="float-right" style="margin-top: 30px;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->
</div>