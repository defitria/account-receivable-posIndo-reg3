<div class="container">
    <br>

    <!-- Input Data -->
    <div class="card" style="width: 600px;">
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
            </div>
        </div>
    </div>
    <!-- Input Data -->
</div>
</div>