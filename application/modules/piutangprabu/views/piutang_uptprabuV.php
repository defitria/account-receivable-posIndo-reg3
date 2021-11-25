<div class="container">
    <!-- <div class="container-fluid">
        <div class="block-header"> -->
    <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

    <!-- Tabel -->
    <div class="card" style="width: 750px;">
        <div class="card-header">
            <h3 class="card-title">Data Piutang</h3>
        </div><br>
        <div class="float-right" style="margin-left: 450px;">
            <div class="card-tools">
                <form action="<?= base_url('piutangprabu') ?>" method="POST">
                    <div class="input-group input-group-sm" style="width: 250px;">
                        &nbsp;&nbsp;<input type="text" name="keyword" class="form-control " placeholder="Keyword...">
                        <div class="input-group-append">
                            <input type="submit" name="submit" class="btn btn-primary btn-sm fas fa search" value="Cari">
                            &nbsp; &nbsp;
                            <div>
                                <a href="<?= site_url('piutangprabu/input') ?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div> &emsp;
                        </div>
                        <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: Y-M-D.</small>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body" style="margin-top: -40px;">
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
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-delete" data-id="<?= $data['id']; ?>"><i class="far fa-trash-alt"></i></a>
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
    <!-- Modal Delete -->
    <form action="<?= site_url('piutangprabu/delete_piutang/') ?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body float-center">

                        <input type="hidden" id="piutang_id" name="id">

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
</div>