            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Detail Data Warga | <?= $detail->nik ?></h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <a href="<?= base_url('data-warga') ?>" class="btn btn-warning btn-sm mb-2">Kembali</a>
                                    <table class="table" style="width:100%">
                                        <?php if (!empty($detail)) { ?>
                                            <tr>
                                                <td>Kartu Keluarga</td>
                                                <td> : <?= $detail->kk ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nik</td>
                                                <td> : <?= $detail->nik ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td> : <?= $detail->nama ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td> : <?= $detail->jekel ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td> : <?= $detail->agama ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Golongan Darah</td>
                                                <td> : <?= $detail->golongan_darah ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan</td>
                                                <td> : <?= $detail->pendidikan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Status Pernikahan</td>
                                                <td> : <?= $detail->status_pernikahan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan</td>
                                                <td> : <?= $detail->pekerjaan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tanggal Lahir</td>
                                                <td> : <?= $detail->tempat_lahir ?>, <?= $detail->tgl_lahir ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Rt / Rw</td>
                                                <td> : <?= $detail->rt ?> / <?= $detail->rw ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td> : <?= $detail->alamat ?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        <?php } ?>

                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive overflow-auto">
                                        <a href="<?= base_url('tambah-data-warga') ?>" class="btn btn-success btn-sm">Tambah Data Keluarga</a>
                                        <table id="data-warga" class="table table-striped table-bordered text-center overflow-auto" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kartu Keluarga</th>
                                                    <th>Nik</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;
                                                if (!empty($anggota_keluarga)) {
                                                    foreach ($anggota_keluarga as $data) { ?>
                                                        <tr>
                                                            <td><?= $n ?></td>
                                                            <td><?= $data->kk ?></td>
                                                            <td><?= $data->nik ?></td>
                                                            <td><?= $data->nama ?></td>
                                                            <td><?= $data->jekel ?></td>
                                                            <td><?= $data->agama ?></td>
                                                        </tr>
                                                    <?php $n++;
                                                    }
                                                } else {
                                                    ?>
                                                    <tr>
                                                        <td colspan="6">Data tidak ditemukan</td>
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
