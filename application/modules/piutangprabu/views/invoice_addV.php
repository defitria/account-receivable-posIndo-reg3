<div class="container">
    <br>

    <!-- Input Data -->
    <div class="card" style="width: 700px;">
        <div class="card-header">
            <h3 class="card-title">Input Data Invoice</h3>
            <div class="float-right">
                <a href="<?= site_url('piutangprabu/invoice') ?>" class="btn btn-default btn-sm">
                    <i class="fa fa-arrow-left"></i> &nbsp; Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="<?= site_url('piutangprabu/save_invoice') ?>" method="POST" style="margin: 10px;">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Nomor Surat</label>
                        <input type="text" name="nomor" required class="form-control" value="" style="width: 300px;">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Nama Mitra</label>
                        <select name="nama_pel" id="nama_pel" required class="btn-group btn btn-default" style="width: 150px;">
                            <option value="">-PILIH MITRA-</option>
                            <?php foreach ($mitraPbm as $data) : ?>
                                <option value="<?php echo $data->nama_pel; ?>"><?php echo $data->nama_pel; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>
                </div><br>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Lampiran</label>
                        <input type="text" name="lampiran" required class="form-control" value="" style="width: 300px;">
                    </div><br>
                    <div class="col-md-6 mb-3">
                        <label>Perihal</label>
                        <input type="text" id="perihal" name="perihal" required class="form-control" value="" style="width: 300px;">
                    </div><br>
                </div><br>
                <div class="form-group">
                    <button type="submit" name="print" class="btn btn-primary btn-sm">
                        <i class="far fa-save"></i>
                        Save
                    </button>
                    <button type="reset" name="reset" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i>
                        Reset
                    </button>
                </div>
            </form>

        </div>
    </div>
    <!-- Input Data -->
</div>
</div>