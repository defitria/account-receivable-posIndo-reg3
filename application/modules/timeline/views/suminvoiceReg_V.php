<div class="container">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

            <!-- Tabel -->
            <div class="card" style="width: 650px;">
                <div class="card-header">
                    <h3 class="card-title">Invoice</h3>
                    <small id="nama_user" class="form-text" style="color: grey;">Format Date: D-M-Y.
                        <div class="float-right">
                            <a href="<?= site_url('dashboard') ?>" class="btn btn-default btn-sm">
                                <i class="fa fa-arrow-left"></i> &nbsp; Back
                            </a>
                        </div>
                    </small>
                </div><br>

                <div class="card-body table-resposive">
                    <form action="<?= site_url('timeline/invoice') ?>" method="POST">
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
                    <span class="badge badge-info badge-sm">Invoice hari ini.</span>
                    <br><br>
                    <table class="table table-striped table-responsive dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama UPT</th>
                                <th>Nomor</th>
                                <th>Nama Mitra</th>
                                <th>Perihal</th>
                                <th>Tgl</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($suminvoicePg as $pg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $pg->nama_upt ?></td>
                                    <td><?= $pg->nomor ?></td>
                                    <td><?= $pg->nama_pel ?></td>
                                    <td><?= $pg->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($pg->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoicePbm as $pbm) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Pbm->nama_upt ?></td>
                                    <td><?= $Pbm->nomor ?></td>
                                    <td><?= $Pbm->nama_pel ?></td>
                                    <td><?= $Pbm->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Pbm->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceMe as $me) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $me->nama_upt ?></td>
                                    <td><?= $me->nomor ?></td>
                                    <td><?= $me->nama_pel ?></td>
                                    <td><?= $me->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($me->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceLt as $Lt) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Lt->nama_upt ?></td>
                                    <td><?= $Lt->nomor ?></td>
                                    <td><?= $Lt->nama_pel ?></td>
                                    <td><?= $Lt->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Lt->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceLlg as $Llg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Llg->nama_upt ?></td>
                                    <td><?= $Llg->nomor ?></td>
                                    <td><?= $Llg->nama_pel ?></td>
                                    <td><?= $Llg->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Llg->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceBta as $Bta) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bta->nama_upt ?></td>
                                    <td><?= $Bta->nomor ?></td>
                                    <td><?= $Bta->nama_pel ?></td>
                                    <td><?= $Bta->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Bta->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoicePgp as $Pgp) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Pgp->nama_upt ?></td>
                                    <td><?= $Pgp->nomor ?></td>
                                    <td><?= $Pgp->nama_pel ?></td>
                                    <td><?= $Pgp->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Pgp->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceTdn as $Tdn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Tdn->nama_upt ?></td>
                                    <td><?= $Tdn->nomor ?></td>
                                    <td><?= $Tdn->nama_pel ?></td>
                                    <td><?= $Tdn->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Tdn->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceMet as $Met) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Met->nama_upt ?></td>
                                    <td><?= $Met->nomor ?></td>
                                    <td><?= $Met->nama_pel ?></td>
                                    <td><?= $Met->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Met->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceKb as $Kb) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Kb->nama_upt ?></td>
                                    <td><?= $Kb->nomor ?></td>
                                    <td><?= $Kb->nama_pel ?></td>
                                    <td><?= $Kb->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Kb->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceBdl as $Bdl) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bdl->nama_upt ?></td>
                                    <td><?= $Bdl->nomor ?></td>
                                    <td><?= $Bdl->nama_pel ?></td>
                                    <td><?= $Bdl->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Bdl->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceJb as $Jb) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Jb->nama_upt ?></td>
                                    <td><?= $Jb->nomor ?></td>
                                    <td><?= $Jb->nama_pel ?></td>
                                    <td><?= $Jb->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Jb->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceSpn as $Spn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Spn->nama_upt ?></td>
                                    <td><?= $Spn->nomor ?></td>
                                    <td><?= $Spn->nama_pel ?></td>
                                    <td><?= $Spn->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Spn->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceMab as $Mab) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Mab->nama_upt ?></td>
                                    <td><?= $Mab->nomor ?></td>
                                    <td><?= $Mab->nama_pel ?></td>
                                    <td><?= $Mab->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Mab->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceBn as $Bn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bn->nama_upt ?></td>
                                    <td><?= $Bn->nomor ?></td>
                                    <td><?= $Bn->nama_pel ?></td>
                                    <td><?= $Bn->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Bn->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($suminvoiceCrp as $Crp) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Crp->nama_upt ?></td>
                                    <td><?= $Crp->nomor ?></td>
                                    <td><?= $Crp->nama_pel ?></td>
                                    <td><?= $Crp->perihal ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($Crp->tgl)); ?></td>
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