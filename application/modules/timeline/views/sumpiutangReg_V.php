<div class="container">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

            <!-- Tabel -->
            <div class="card" style="width: 650px;">
                <div class="card-header">
                    <h3 class="card-title">Pengakuan Piutang Seluruh UPT</h3>
                    <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: D-M-Y.
                        <div class="float-right">
                            <a href="<?= site_url('dashboard') ?>" class="btn btn-default btn-sm">
                                <i class="fa fa-arrow-left"></i> &nbsp; Back
                            </a>
                        </div>
                    </small>
                </div><br>

                <div class="card-body table-resposive">
                    <form action="<?= site_url('timeline/piutang') ?>" method="POST">
                        <select name="upt" id="upt" class="btn btn-default btn-sm" style="border: 1px solid grey;">
                            <option value="">-PILIH UPT-</option>
                            <?php foreach ($filterupt as $fupt) : ?>
                                <option value="<?php echo $fupt->nama_upt; ?>"><?php echo $fupt->nama_upt; ?></option>
                            <?php endforeach; ?>
                        </select> &nbsp;

                        <select name="view" id="view" class="btn btn-default btn-sm" style="border: 1px solid grey;">
                            <option value="">-PILIH VIEW-</option>
                            <option value="hari">Hari Ini</option>
                            <option value="minggu">Minggu Ini</option>
                            <option value="bulan">Bulan Ini</option>
                        </select> &nbsp;
                        <button type="submit" name="submit" class="btn btn-primary btn-sm"> Cari </button>
                    </form>
                    <br>
                    <span class="badge badge-info badge-sm">Total Pengakuan Piutang hari ini.</span>
                    <br><br>
                    <table class="table table-striped table-responsive dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama UPT</th>
                                <th>Prod</th>
                                <th>Jumlah (BSU)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($sumpiutangPg as $pg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $pg->nama_upt ?></td>
                                    <td><?= number_format($pg->prod) ?></td>
                                    </td>
                                    <td><?= number_format($pg->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangPbm as $pbm) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $pbm->nama_upt ?></td>
                                    <td><?= number_format($pbm->prod) ?></td>
                                    </td>
                                    <td><?= number_format($pbm->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangMe as $me) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $me->nama_upt ?></td>
                                    <td><?= number_format($me->prod) ?></td>
                                    </td>
                                    <td><?= number_format($me->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangLt as $Lt) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Lt->nama_upt ?></td>
                                    <td><?= number_format($Lt->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Lt->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangLlg as $Llg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Llg->nama_upt ?></td>
                                    <td><?= number_format($Llg->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Llg->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangBta as $Bta) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bta->nama_upt ?></td>
                                    <td><?= number_format($Bta->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Bta->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangPgp as $Pgp) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Pgp->nama_upt ?></td>
                                    <td><?= number_format($Pgp->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Pgp->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangTdn as $Tdn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Tdn->nama_upt ?></td>
                                    <td><?= number_format($Tdn->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Tdn->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangMet as $Met) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Met->nama_upt ?></td>
                                    <td><?= number_format($Met->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Met->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangKb as $Kb) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Kb->nama_upt ?></td>
                                    <td><?= number_format($Kb->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Kb->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangBdl as $Bdl) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bdl->nama_upt ?></td>
                                    <td><?= number_format($Bdl->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Bdl->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangJb as $Jb) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Jb->nama_upt ?></td>
                                    <td><?= number_format($Jb->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Jb->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangSpn as $Spn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Spn->nama_upt ?></td>
                                    <td><?= number_format($Spn->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Spn->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangMab as $Mab) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Mab->nama_upt ?></td>
                                    <td><?= number_format($Mab->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Mab->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangBn as $Bn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bn->nama_upt ?></td>
                                    <td><?= number_format($Bn->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Bn->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpiutangCrp as $Crp) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Crp->nama_upt ?></td>
                                    <td><?= number_format($Crp->prod) ?></td>
                                    </td>
                                    <td><?= number_format($Crp->total_piutang) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
                <!-- Akhir Tabel -->
            </div>
        </div>
    </div>
</div>