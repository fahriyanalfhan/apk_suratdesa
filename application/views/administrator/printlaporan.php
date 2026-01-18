<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
    <link rel="shortcut icon" href="<?= base_url() ?>./assets/logo/logo.png" type="image/x-icon">
</head>


<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <center>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>./assets/logo/logo.png" width="100px" height="130px">
                        </td>
                        <td>
                            <center>
                                <strong>
                                    <h5><b>PEMERINTAHAN KABUPATEN BANDUNG</b></h5>
                                    <h5><b>KECAMATAN MARGAASIH</b></h5>
                                    <h5><b>KANTOR DESA LAGADAR</b></h5>
                                    <small>Alamat : Jl.Cagak No.62, Ds.Lagadar, Kec.Margaasih, Kab.Bandung 40216, Telp. (022) 667729</small>
                                </strong>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
            <hr>
            <h5 class="text-dark text-center"><b>LAPORAN DATA PERMOHONAN SURAT</b></h5>
            <div class="text-surat">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Surat</th>
                                                    <th>No Surat</th>
                                                    <th>NIK</th>
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
        <br>
        <div class="kades float-end">
            <span class="mb-n2">Lagadar, <?= date('d M Y') ?></span>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hormat kami
            <p>Admin KAUR Umum</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&</p>
            <p>Admin KASI Pelayanan</p><br>
        </div>
    </div>
    </div>
    </div>
    <script>
        window.print();
    </script>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>