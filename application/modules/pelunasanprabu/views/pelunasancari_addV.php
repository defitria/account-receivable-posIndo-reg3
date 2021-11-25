<div class="container">
    <br>

    <!-- Input Data -->
    <div class="card" style="width: 650px;">
        <div class="card-header">
            <h3 class="card-title">Edit Data Pelunasan
                <div class="float-right">
                    <a href="<?= site_url('pelunasanprabu') ?>" class="btn btn-default btn-sm">
                        <i class="fa fa-arrow-left"></i> &nbsp; Back
                    </a>
                </div>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form method="get" action="<?php echo base_url("pelunasanprabu/pencarian/") ?>">
                        <div class="col-md-6 mb-3">
                            <label>Nama Mitra</label>
                            <select name="nama_pel" id="nama_pel" class="btn-group btn btn-default">
                                <option value="">-PILIH MITRA-</option>
                                <?php foreach ($mitraPbm as $data) : ?>
                                    <option value="<?php echo $data->nama_pel; ?>"><?php echo $data->nama_pel; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-sm" value="Cari Invoice">
                            <br>
                        </div>
                    </form>

                </div>
                <div class="table-responsive" style="margin: 10px;">
                    <table class="table">
                        <tr>
                            <th>Nama Mitra</th>
                            <th>Nomor Invoice</th>
                            <th>Tanggal Invoice</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <?php foreach ($pel as $data) { ?>
                            <tr>
                                <td><?= $data->nama_pel; ?></td>
                                <td><?= $data->nomor; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($data->tgl)); ?></td>
                                <td>
                                    <?php if ($data->status == 1) { ?>
                                        <span class="badge badge-sm badge-success">Lunas</span>
                                    <?php
                                    } elseif ($data->status == 0) {
                                    ?>
                                        <span class="badge badge-sm badge-danger">Belum</span>
                                    <?php } ?>
                                </td>
                                <?php if ($data->status == 0) { ?>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-lunas" data-id_pelunasan="<?= $data->id_pelunasan; ?>" data-nama_pel="<?= $data->nama_pel; ?>" data-nomor="<?= $data->nomor; ?>" data-kd_referensi="<?= $data->kd_referensi; ?>" data-pelunasan="<?= $data->pelunasan; ?>" data-deposit="<?= $data->deposit; ?>" data-tgl_setor="<?= $data->tgl_setor; ?>" data-status="<?= $data->status; ?>">Lunas</a>



                                        <a href="javascript:void(0);" class="btn btn-info btn-sm btn-angsur" data-id_pelunasan="<?= $data->id_pelunasan; ?>" data-nama_pel="<?= $data->nama_pel; ?>" data-nomor="<?= $data->nomor; ?>" data-kd_referensi="<?= $data->kd_referensi; ?>" data-pelunasan="<?= $data->pelunasan; ?>" data-deposit="<?= $data->deposit; ?>" data-tgl_setor="<?= $data->tgl_setor; ?>" data-status="<?= $data->status; ?>">Angsur</a>

                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Lunas Product-->
    <form action="<?= site_url('pelunasanprabu/update/') ?>" method="post">
        <div class="modal fade" id="lunasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cash</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="dt_id" class="product_id" name="id">
                        <input type="hidden" class="form-control" id="dt_nama" name="nama_pel">
                        <input type="hidden" class="form-control" id="status" name="status" value="1">
                        <input type="hidden" class="form-control" id="pel_bln" name="pel_bln" value="">

                        <div class="form-line">
                            <label>No. Invoice</label>
                            <input type="text" readonly class="form-control-plaintext" id="dt_nomor" name="nomor">
                        </div><br>

                        <div class="form-line">
                            <label>Kd. Referensi</label>
                            <input type="text" class="form-control" id="dt_kd_referensi" name="kd_referensi">
                        </div><br>

                        <div class="form-line">
                            <label>Tanggal Setor</label>
                            <input type="date" required class="form-control" id="dt_tgl_setor" name="tgl_setor">
                        </div><br>

                        <div class="form-line">
                            <label>Deposit (BSU)<small id="nama_user" style="color: red ; margin-left: 8px;">*masukkan angka tanpa tanda baca</small></label>
                            <input type="text" class="form-control" id="dt_deposit" name="deposit">
                        </div><br>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="lunas" value="Simpan">

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Lunas Product-->
    <!-- Modal Angsur Product-->
    <form action="<?= site_url('pelunasanprabu/update/') ?>" method="post">
        <div class="modal fade" id="angsurModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Angsuran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="angsur_id" class="product_id" name="id">
                        <input type="hidden" class="form-control" id="angsur_nama" name="nama_pel">
                        <input type="hidden" class="form-control" id="status" name="status" value="0">
                        <input type="hidden" class="form-control" id="pel_bln" name="pel_bln" value="">

                        <div class="form-line">
                            <label>No. Invoice</label>
                            <input type="text" readonly class="form-control-plaintext" id="angsur_nomor" name="nomor">
                        </div><br>

                        <div class="form-line">
                            <label>Kd. Referensi</label>
                            <input type="text" class="form-control" id="angsur_kd_referensi" name="kd_referensi">
                        </div><br>

                        <div class="form-line">
                            <label>Pelunasan (BSU)<small id="nama_user" style="color: red ; margin-left: 8px;">*masukkan angka tanpa tanda baca</small></label>
                            <input type="text" required class="form-control" id="angsur_pelunasan" name="pelunasan">
                        </div><br>

                        <div class="form-line">
                            <label>Deposit (BSU)<small id="nama_user" style="color: red ; margin-left: 8px;">*masukkan angka tanpa tanda baca</small></label>
                            <input type="text" class="form-control" id="angsur_deposit" name="deposit">
                        </div><br>

                        <div class="form-line">
                            <label>Tanggal Setor</label>
                            <input type="date" required class="form-control" id="angsur_tgl_setor" name="tgl_setor">
                        </div><br>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="update" value="Simpan">

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Angsur Product-->
</div>
</div>