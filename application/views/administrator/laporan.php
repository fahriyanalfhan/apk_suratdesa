<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Laporan Data Surat Masuk</h3>
        <h5 class="text-subtitle text-muted text-bold">Selamat Datang di Aplikasi Pelayanan Surat </h5>
    </div>
    <section class="section">
        <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) { ?>
            <!-- <div class="row mb-2">
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>DATA USERS</h3>
                                </div>
                                <div class="card-right d-flex align-items-center p-3">
                                    <p><?= $users ?> <span>Data</span></p>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas1" style="height:100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>DATA WARGA</h3>
                                </div>
                                <div class="card-right d-flex align-items-center p-3">
                                    <p><?= $warga ?> <span>Data</span></p>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas2" style="height:100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>PERMOHONAN</h3>
                                </div>
                                <div class="card-right d-flex align-items-center p-3">
                                    <p><?= $sk + $kk + $skp + $sktm  ?> <span>Data</span></p>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="canvas3" style="height:100px !important"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <h5 class="text-white text-center"><b>DATA PERMOHONAN SURAT</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header bg-primary">
                                            <h5 class="text-dark font-bold text-center">SKTM</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center p-3 text-dark font-bold"><?= $sktm; ?></h1>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header bg-info">
                                            <h5 class="text-dark font-bold text-center">Surat Pengantar</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center p-3 text-dark font-bold"><?= $skp; ?></h1>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header bg-danger">
                                            <h5 class="text-dark font-bold text-center">Surat Ket Kematian</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center p-3 text-dark font-bold"><?= $kk; ?></h1>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header bg-warning">
                                            <h5 class="text-dark font-bold text-center">Surat Ket Kelahiran</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center p-3 text-dark font-bold"><?= $sk; ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: left;">
                            <a href="<?= base_url('printlaporan') ?>" class="btn btn-primary btn-sm" target="blank_" style="margin-left: 30px;"><i class="bi bi-printer-fill"></i></a>
                        </div>
                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive overflow-auto">
                                                <table id="verifikasi" class="table table-striped table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Jenis Surat</th>
                                                            <th>No Surat</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Surat Keterangan Pengantar -->
                                                        <?php $no = 1; ?>
                                                        <?php foreach ($skpl as $data) { ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td>Surat Keterangan Pengantar</td>
                                                                <td><?= $data->nomor_surat ?></td>
                                                                <td><?= $data->nik ?></td>
                                                                <td><?= $data->nama ?></td>
                                                                <td><?= $data->tanggal_surat ?></td>
                                                            </tr>
                                                        <?php } ?>

                                                        <!-- Surat Keterangan Tidak Mampu -->
                                                        <?php foreach ($sktml as $data) { ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td>Surat Keterangan Tidak Mampu</td>
                                                                <td><?= $data->nomor_surat ?></td>
                                                                <td><?= $data->nik ?></td>
                                                                <td><?= $data->nama ?></td>
                                                                <td><?= $data->tanggal_surat ?></td>
                                                            </tr>
                                                        <?php } ?>

                                                        <!-- Surat Keterangan Kematian -->
                                                        <?php foreach ($skkl as $data) { ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td>Surat Keterangan Kematian</td>
                                                                <td><?= $data->nomor_surat ?></td>
                                                                <td><?= $data->nik ?></td>
                                                                <td><?= $data->nama ?></td>
                                                                <td><?= $data->tanggal_surat ?></td>
                                                            </tr>
                                                        <?php } ?>

                                                        <!-- Surat Pengantar Akte Kelahiran -->
                                                        <?php foreach ($spakl as $data) { ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td>Surat Pengantar Akte Kelahiran</td>
                                                                <td><?= $data->nomor_surat ?></td>
                                                                <td><?= $data->nik ?></td>
                                                                <td><?= $data->nama ?></td>
                                                                <td><?= $data->tanggal_surat ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- <?php } else if ($this->session->userdata('role_id') == 2) { ?>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body bg-success">
                            <h4 class="font-bold text-white">SELAMAT DATANG DI APLIKASI PELAYANAN SURAT</h4>
                            <h5 class="font-bold text-white">DESA LAGADAR</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h5 class="text-dark text-center"><b>DATA PERMOHONAN SURAT</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-warning">
                                            <h5 class="text-dark font-bold text-center">MENUNGGU VERIFIKASI</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center p-3 text-dark font-bold"><?= $mvskd['jumlah'] + $mvsk['jumlah'] + $mvskk['jumlah'] + $mvskp['jumlah'] + $mvsktm['jumlah'] + $mvsku['jumlah']; ?></h1>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-success">
                                            <h5 class="text-dark font-bold text-center">PERMOHONAN DITERIMA</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center p-3 text-dark font-bold"><?= $pdskd['jumlah'] + $pdsk['jumlah'] + $pdskk['jumlah'] + $pdskp['jumlah'] + $pdsktm['jumlah'] + $pdsku['jumlah']; ?></h1>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-danger">
                                            <h5 class="text-dark font-bold text-center">PERMOHONAN DITOLAK</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center p-3 text-dark font-bold"><?= $ptskd['jumlah'] + $ptsk['jumlah'] + $ptskk['jumlah'] + $ptskp['jumlah'] + $ptsktm['jumlah'] + $ptsku['jumlah']; ?></h1>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <?php } ?>
    </section>
</div>