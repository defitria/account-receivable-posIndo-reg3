<div class="container">
    <div class="container-fluid">
        <div class="block-header">
            <!-- <br>
            <h4 class="text-center">DATA PIUTANG</h4><br>
            <hr> -->

            <!-- Tabel -->
            <br>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laporan Piutang</h3>
                    <div class="float-right">
                    </div><br>
                    <div class="card-body table-resposive">
                        <table class="table table-striped table-responsive dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama UPT</th>
                                    <th>Bisnis</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Saldo Awal Bulan</th>
                                    <th>Penambahan</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($query as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_upt'] ?></td>
                                        <td><?= $data['bisnis'] ?></td>
                                        <td><?= $data['nama_pel'] ?></td>
                                        <td><?= number_format($data['saldo_awal_bulan']) ?></td>
                                        <td><?= number_format($data['penambahan']) ?></td>
                                        <td><?= $data['tgl'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Akhir Tabel -->
            </div>
        </div>
    </div>
</div>