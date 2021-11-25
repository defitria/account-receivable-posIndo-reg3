<div class="container">

    <!-- Input Data -->
    <div class="card" style="width: 750px;">
        <div class="card-header">
            <h3 class="card-title">Input Data Piutang
                <div class="float-right">
                    <a href="<?= site_url('piutangprabu') ?>" class="btn btn-default btn-sm">
                        <i class="fa fa-arrow-left"></i> &nbsp; Back
                    </a>
                </div>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <form action="<?= site_url('piutangprabu/input_act') ?>" method="POST" style="margin: 20px;">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Bisnis</label><br>
                            <select name="bisnis" id="bisnis" required class="btn-group btn btn-default">
                                <option value="">-PILIH BISNIS-</option>
                                <?php foreach ($bisnisPbm as $data) : ?>
                                    <option value="<?php echo $data->bisnis; ?>"><?php echo $data->bisnis; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <input type="text" name="bisnis" class="form-control" value=""> -->
                        </div><br>
                        <div class="col-md-6 mb-3">
                            <label>Nama Mitra</label>
                            <select name="nama_pel" id="nama_pel" required class="btn-group btn btn-default">
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
                            <label>PROD</label>
                            <input type="text" id="prod" name="prod" required class="form-control" value="">
                        </div><br>
                        <div class="col-md-6 mb-3">
                            <label>BSU<small id="nama_user" style="color: red ; margin-left: 8px;">*masukkan angka tanpa tanda baca</small></label>
                            <input type="text" id="bsu" name="bsu" required class="form-control" value="">
                        </div><br>
                    </div><br>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>JUMLAH (BSU)</label>
                            <input type="text" id="total_piutang" name="total_piutang" readonly class="form-control" value="">
                        </div><br>
                    </div>
                    <br>
                    <div class="col-md-6 mb-3">
                        <button type="submit" name="simpan" class="btn btn-primary btn-sm">
                            <i class="fa fa-paper-plane"></i>
                            Save
                        </button>
                        <button type="reset" name="reset" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i>
                            Reset
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Input Data -->
</div>
</div>