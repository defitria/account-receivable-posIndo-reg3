<div class="container">
    <div class="container-fluid">

        <div class="card" style="width: 700px;">
            <div class="card-header">
                <h3 class="card-title">Data Invoice</h3>
            </div><br>
            <div class="float-right">
                <div class="card-tools">
                    <form action="<?= base_url('piutangprabu/invoice') ?>" method="POST">
                        <div class="input-group input-group-sm float-right" style="width: 300px;">
                            &nbsp;&nbsp;<input type="text" name="keyword" class="form-control " placeholder="Keyword...">
                            <div class="input-group-append">
                                <input type="submit" name="submit" class="btn btn-primary btn-sm fas fa search" value="Cari">
                                &nbsp; &nbsp;
                                <div>
                                    <a href="<?= site_url('piutangprabu/add_invoice') ?>" class="btn btn-primary btn-sm">
                                        Tambah
                                    </a>
                                </div><br>
                                <div style="margin-right: 20px; margin-left: 10px;">
                                    <a href="<?= site_url('piutangprabu/filter_invoice/') ?>" class="btn btn-info btn-sm">
                                        Cetak
                                    </a>
                                </div>
                            </div>
                            <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: Y-M-D.</small>
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
                        <small id="nama_user" class="form-text" style="color: grey ;">Hasil: <?= $total_rows ?></small>
                    <?php } ?>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Invoice</th>
                            <th>Nama Pelanggan</th>
                            <th>Lampiran</th>
                            <th>Perihal</th>
                            <th>Tanggal</th>
                            <th></th>
                            <th></th>
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
                                <td>
                                    <?php if ($this->session->userdata('level') == 'Manager Penjualan UPT Pbm') { ?>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-hapus" data-id="<?= $data['id']; ?>" data-nama_pel="<?= $data['nama_pel']; ?>" data-nomor="<?= $data['nomor']; ?>" data-lampiran="<?= $data['lampiran']; ?>" data-perihal="<?= $data['perihal']; ?>"><i class="far fa-trash-alt"></i></a>
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
        <div>
            <form action="<?= site_url('piutangprabu/delete_invoice/') ?>" method="post">
                <div class="modal fade" id="deleteInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <input type="hidden" id="invoice_id" name="id">

                                <div class="form-line">
                                    <label>Nomor</label>
                                    <input type="text" readonly class="form-control-plaintext" id="invoice_nomor" name="nomor">
                                </div><br>

                                <div class="form-line">
                                    <label>Nama Mitra</label>
                                    <input type="text" readonly class="form-control-plaintext" id="invoice_nama_pel" name="nama_pel">
                                </div><br>

                                <div class="form-line">
                                    <label>Lampiran</label>
                                    <input type="text" readonly class="form-control-plaintext" id="invoice_lampiran" name="lampiran">
                                </div><br>

                                <div class="form-line">
                                    <label>Perihal</label>
                                    <input type="text" readonly class="form-control-plaintext" id="invoice_perihal" name="perihal">
                                </div><br>

                            </div>
                            <div class="modal-body float-right">
                                <h4>Yakin hapus data ini?</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        <!-- End Modal Angsur Product-->
    </div>
</div>
</div>
</div>