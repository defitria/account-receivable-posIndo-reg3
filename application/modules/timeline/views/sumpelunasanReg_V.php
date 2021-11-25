<div class="container">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

            <!-- Tabel -->
            <div class="card" style="width: 650px;">
                <div class="card-header">
                    <h3 class="card-title">Pengakuan Pelunasan</h3>
                    <small id="nama_user" class="form-text" style="color: grey ; margin-left: 8px;">Format Date: D-M-Y.
                        <div class="float-right">
                            <a href="<?= site_url('dashboard') ?>" class="btn btn-default btn-sm">
                                <i class="fa fa-arrow-left"></i> &nbsp; Back
                            </a>
                        </div>
                    </small>
                </div><br>

                <div class="card-body table-resposive">
                    <form action="<?= site_url('timeline/pelunasan') ?>" method="POST">
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
                    <span class="badge badge-info badge-sm">Total Pengakuan Pelunasan hari ini.</span>
                    <br><br>
                    <table class="table table-striped table-responsive dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama UPT</th>
                                <th>Nama Mitra</th>
                                <th>Kd. Referensi</th>
                                <th>Pelunasan</th>
                                <th>Deposit</th>
                                <th>Tgl Setor</th>
                                <th>Status</th>
                                <th>Tgl</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($sumpelunasanPg as $pg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $pg->nama_upt ?></td>
                                    <td><?= $pg->nomor ?></td>
                                    <td><?= $pg->nama_pel ?></td>
                                    <td><?= $pg->kd_referensi ?></td>
                                    <td><?= number_format($pg->pelunasan) ?></td>
                                    <td><?= number_format($pg->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($pg->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($pg->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($pg->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($pg->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($pg->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanPbm as $pbm) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Pbm->nama_upt ?></td>
                                    <td><?= $Pbm->nomor ?></td>
                                    <td><?= $Pbm->nama_pel ?></td>
                                    <td><?= $Pbm->kd_referensi ?></td>
                                    <td><?= number_format($Pbm->pelunasan) ?></td>
                                    <td><?= number_format($Pbm->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Pbm->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Pbm->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Pbm->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Pbm->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Pbm->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanMe as $me) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $me->nama_upt ?></td>
                                    <td><?= $me->nomor ?></td>
                                    <td><?= $me->nama_pel ?></td>
                                    <td><?= $me->kd_referensi ?></td>
                                    <td><?= number_format($me->pelunasan) ?></td>
                                    <td><?= number_format($me->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($me->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($me->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($me->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($me->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($me->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanLt as $Lt) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Lt->nama_upt ?></td>
                                    <td><?= $Lt->nomor ?></td>
                                    <td><?= $Lt->nama_pel ?></td>
                                    <td><?= $Lt->kd_referensi ?></td>
                                    <td><?= number_format($Lt->pelunasan) ?></td>
                                    <td><?= number_format($Lt->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Lt->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Lt->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Lt->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Lt->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Lt->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanLlg as $Llg) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Llg->nama_upt ?></td>
                                    <td><?= $Llg->nomor ?></td>
                                    <td><?= $Llg->nama_pel ?></td>
                                    <td><?= $Llg->kd_referensi ?></td>
                                    <td><?= number_format($Llg->pelunasan) ?></td>
                                    <td><?= number_format($Llg->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Llg->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Llg->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Llg->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Llg->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Llg->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanBta as $Bta) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bta->nama_upt ?></td>
                                    <td><?= $Bta->nomor ?></td>
                                    <td><?= $Bta->nama_pel ?></td>
                                    <td><?= $Bta->kd_referensi ?></td>
                                    <td><?= number_format($Bta->pelunasan) ?></td>
                                    <td><?= number_format($Bta->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Bta->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Bta->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Bta->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Bta->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Bta->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanPgp as $Pgp) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Pgp->nama_upt ?></td>
                                    <td><?= $Pgp->nomor ?></td>
                                    <td><?= $Pgp->nama_pel ?></td>
                                    <td><?= $Pgp->kd_referensi ?></td>
                                    <td><?= number_format($Pgp->pelunasan) ?></td>
                                    <td><?= number_format($Pgp->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Pgp->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Pgp->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Pgp->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Pgp->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Pgp->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanTdn as $Tdn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Tdn->nama_upt ?></td>
                                    <td><?= $Tdn->nomor ?></td>
                                    <td><?= $Tdn->nama_pel ?></td>
                                    <td><?= $Tdn->kd_referensi ?></td>
                                    <td><?= number_format($Tdn->pelunasan) ?></td>
                                    <td><?= number_format($Tdn->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Tdn->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Tdn->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Tdn->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Tdn->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Tdn->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanMet as $Met) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Met->nama_upt ?></td>
                                    <td><?= $Met->nomor ?></td>
                                    <td><?= $Met->nama_pel ?></td>
                                    <td><?= $Met->kd_referensi ?></td>
                                    <td><?= number_format($Met->pelunasan) ?></td>
                                    <td><?= number_format($Met->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Met->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Met->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Met->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Met->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Met->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanKb as $Kb) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Kb->nama_upt ?></td>
                                    <td><?= $Kb->nomor ?></td>
                                    <td><?= $Kb->nama_pel ?></td>
                                    <td><?= $Kb->kd_referensi ?></td>
                                    <td><?= number_format($Kb->pelunasan) ?></td>
                                    <td><?= number_format($Kb->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Kb->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Kb->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Kb->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Kb->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Kb->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanBdl as $Bdl) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bdl->nama_upt ?></td>
                                    <td><?= $Bdl->nomor ?></td>
                                    <td><?= $Bdl->nama_pel ?></td>
                                    <td><?= $Bdl->kd_referensi ?></td>
                                    <td><?= number_format($Bdl->pelunasan) ?></td>
                                    <td><?= number_format($Bdl->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Bdl->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Bdl->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Bdl->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Bdl->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Bdl->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanJb as $Jb) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Jb->nama_upt ?></td>
                                    <td><?= $Jb->nomor ?></td>
                                    <td><?= $Jb->nama_pel ?></td>
                                    <td><?= $Jb->kd_referensi ?></td>
                                    <td><?= number_format($Jb->pelunasan) ?></td>
                                    <td><?= number_format($Jb->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Jb->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Jb->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Jb->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Jb->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Jb->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanSpn as $Spn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Spn->nama_upt ?></td>
                                    <td><?= $Spn->nomor ?></td>
                                    <td><?= $Spn->nama_pel ?></td>
                                    <td><?= $Spn->kd_referensi ?></td>
                                    <td><?= number_format($Spn->pelunasan) ?></td>
                                    <td><?= number_format($Spn->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Spn->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Spn->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Spn->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Spn->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Spn->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanMab as $Mab) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Mab->nama_upt ?></td>
                                    <td><?= $Mab->nomor ?></td>
                                    <td><?= $Mab->nama_pel ?></td>
                                    <td><?= $Mab->kd_referensi ?></td>
                                    <td><?= number_format($Mab->pelunasan) ?></td>
                                    <td><?= number_format($Mab->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Mab->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Mab->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Mab->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Mab->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Mab->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanBn as $Bn) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Bn->nama_upt ?></td>
                                    <td><?= $Bn->nomor ?></td>
                                    <td><?= $Bn->nama_pel ?></td>
                                    <td><?= $Bn->kd_referensi ?></td>
                                    <td><?= number_format($Bn->pelunasan) ?></td>
                                    <td><?= number_format($Bn->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Bn->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Bn->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Bn->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Bn->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo date('d-m-Y', strtotime($Bn->tgl)); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            foreach ($sumpelunasanCrp as $Crp) {
                            ?>
                                <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $Crp->nama_upt ?></td>
                                    <td><?= $Crp->nomor ?></td>
                                    <td><?= $Crp->nama_pel ?></td>
                                    <td><?= $Crp->kd_referensi ?></td>
                                    <td><?= number_format($Crp->pelunasan) ?></td>
                                    <td><?= number_format($Crp->deposit) ?></td>
                                    <td>
                                        <?php
                                        if ($Crp->tgl_setor == "0000-00-00 00:00:00") {
                                            echo "Belum di setor.";
                                        } else {
                                            echo date('d-m-Y', strtotime($Crp->tgl_setor));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($Crp->status == 1) { ?>
                                            <span class="badge badge-sm badge-success">Lunas</span>
                                        <?php
                                        } elseif ($Crp->status == 0) {
                                        ?>
                                            <span class="badge badge-sm badge-danger">Belum</span>
                                        <?php } ?>
                                    </td>
                                    </td>
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