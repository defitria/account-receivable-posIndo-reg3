<div class="container">
    <br>

    <!-- Input Data -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Piutang</h3>
            <div class="float-right">
                <a href="<?= site_url('piutangprabu') ?>" class="btn btn-default btn-sm">
                    <i class="fa fa-arrow-left"></i> &nbsp; Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <?php foreach ($piutang as $data) { ?>
                        <form action="<?= site_url('PiutangPrabu/update') ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id" class="form-control" value="<?= $data->id ?>">
                            </div>
                            <div class="form-line">
                                <label>Nama Mitra</label>
                                <input type="text" name="nama_pel" class="form-control" value="<?= $data->nama_pel ?>">
                            </div><br>
                            <div class="form-line">
                                <label>Bisnis</label>
                                <input type="text" id="bisnis" name="bisnis" class="form-control" value="<?= $data->bisnis ?>">
                            </div><br>
                            <div class="form-line">
                                <label>PROD</label>
                                <input type="text" id="prod" name="prod" class="form-control" value="<?= $data->prod ?>">
                            </div><br>
                            <div class="form-line">
                                <label>BSU</label>
                                <input type="text" id="bsu" name="bsu" class="form-control" value="<?= $data->bsu ?>">
                            </div><br>
                            <div class="form-line">
                                <label>Jumlah (BSU)</label>
                                <input type="text" id="total_piutang" name="total_piutang" class="form-control" value="<?= $data->total_piutang ?>">
                            </div><br><br>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary btn-sm">
                                    <i class="far fa-save"></i>&nbsp;
                                    Simpan
                                </button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Input Data -->
</div>
</div>