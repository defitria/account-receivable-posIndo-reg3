<div class="container">
    <!-- Tabel -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Filter Laporan
                <a href="<?= site_url('piutangprabu/invoice') ?>" class="float-right btn btn-default btn-sm">
                    <i class="fa fa-arrow-left"></i> &nbsp; Back
                </a>
            </h3>
        </div>

        <!-- row ketiga  -->
        <br>
        <div class="col-lg-7" id="">
            <div class="card">
                <form id="formbulan" action="<?php echo site_url('piutangprabu/print_invoice') ?>" method="POST">
                    <div class="card-body card-block">
                        <input type="hidden" name="nilaifilter" value="2">

                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-2"><label for="select" class=" form-control-label">Nama UPT</label></div>
                            <div class="col-12 col-md-10">
                                <input type="text" name="nama_upt" class="form-control form-control-sm" readonly value="Prabumulih">
                                <small class="help-block form-text"></small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-2"><label for="select" class=" form-control-label">Pilih Mitra</label></div>
                            <div class="col-12 col-md-10">
                                <select name="nama_pel" id="nama_pel" class="form-control form-control-user">
                                    <option value="">-PILIH-</option>
                                    <option value="RSUD">RSUD</option>
                                    <option value="Clipan Finance">Clipan Finance</option>
                                    <option value="Indomobil">Indomobil</option>
                                </select>
                                <small class="help-block form-text"></small>
                            </div>
                        </div>

                        <input name="valnilai" type="hidden">
                        <div class="row form-group">
                            <div id="form-tanggal" class="col col-md-2"><label for="select" class=" form-control-label">Pilih Tahun</label></div>
                            <div class="col-12 col-md-10">
                                <select name="tahun1" id="tahun1" class="form-control form-control-user">
                                    <option value="">-PILIH-</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                                <small class="help-block form-text"></small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-2">
                                <label for="select" class=" form-control-label">Periode bulan</label>
                            </div>
                            <div class="col col-md-4">
                                <select name="bulanawal" id="bulanawal" class="form-control form-control-user">
                                    <option value="">-PILIH-</option>
                                    <option value="1">JANUARI</option>
                                    <option value="2">FEBRUARI</option>
                                    <option value="3">MARET</option>
                                    <option value="4">APRIL</option>
                                    <option value="5">MEI</option>
                                    <option value="6">JUNI</option>
                                    <option value="7">JULI</option>
                                    <option value="8">AGUSTUS</option>
                                    <option value="9">SEPTEMBER</option>
                                    <option value="10">OKTOBER</option>
                                    <option value="11">NOVEMBER</option>
                                    <option value="12">DESEMBER</option>
                                </select>
                            </div>
                            <small class="help-block form-text"></small>

                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-file-download"></i> Oke</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>