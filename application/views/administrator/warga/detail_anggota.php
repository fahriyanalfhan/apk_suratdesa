            <div class="main-content container-fluid">
                <br>
                <br>
                <div class="page-title">
                    <center>
                        <h2>Data Anggota Keluarga</h2>
                        No KK : <?= $kk; ?>
                    </center>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive overflow-auto">
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
                                                foreach ($warga as $data) { ?>
                                                    <tr>
                                                        <td><?= $n ?></td>
                                                        <td><?= $data->kk ?></td>
                                                        <td><?= $data->nik ?></td>
                                                        <td><?= $data->nama ?></td>
                                                        <td><?= $data->jekel ?></td>
                                                        <td><?= $data->agama ?></td>
                                                    </tr>
                                                <?php $n++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>