<div class="container">
    <div class="row">
        <div class="col-md-auto col-sm-auto mx-auto">
            <div class="card pt-2">
                <div class="card-body">
                    <div class="text-center mb-2">
                        <img src="<?= base_url() ?>./assets/logo/logo.png" height="100" class='mb-3'>
                        <!-- <h3>Sign In</h3> -->
                        <h5><strong>APLIKASI PELAYANAN ADMINISTRASI KEPENDUDUKAN</strong></h5>
                        <h6><strong>DESA LAGADAR</strong></h6>
                    </div>
                    <div class="clearfix">
                        <a href="<?= base_url('login') ?>" type="button" class="btn btn-danger float-left">Kembali</a>
                    </div><br>
                    <h5 class="text-center"><strong>Track Surat</strong></h5>
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
                                                        <th>Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php $all_data = array_merge($skpl, $sktml, $skkl, $spakl);
                                                    if (!empty($all_data))
                                                        foreach ($all_data as $data) { ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $data->jenis_surat ?></td>
                                                            <td><?= $data->nomor_surat ?></td>
                                                            <td>
                                                                <?php
                                                                if ($data->status == 'Menunggu Verifikasi') {
                                                                    echo '<span class="badge bg-warning">Menunggu Verifikasi</span>';
                                                                } else if ($data->status == 'Terverifikasi') {
                                                                    echo '<span class="badge bg-primary">Data Tervalidasi Admin</span>';
                                                                } else if ($data->status == 'Diterima') {
                                                                    echo '<span class="badge bg-success">Diterima</span><br>';
                                                                } else if ($data->status == 'Ditolak') {
                                                                    echo '<span class="badge bg-danger">Ditolak</span>';
                                                                }
                                                                ?>
                                                            </td>
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
        </div>
    </div>
</div>