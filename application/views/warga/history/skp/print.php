<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
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

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong>
                        <p>Nomor : <?= $d->nomor_surat ?></p>
                    </span>
                <?php } ?>
            </div>
            <div class="text-surat">
                <p>Kepala Desa Lagadar Kecamatan Margaasih Kabupaten Bandung, dengan ini menerangkan bahwa : </p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                            <td><?= $d->nik ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>: </td>
                            <td><?= $d->pekerjaan ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: </td>
                            <td><?= $d->agama ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat ?>, Rt: <?= $d->rt ?>/Rw: <?= $d->rw ?>, Kecamatan Margaasih, Kabupaten Bandung Jawa Barat.</td>
                        </tr>
                        <tr>
                            <td>Berlaku Mulai</td>
                            <td>: </td>
                            <td>Tgl <small><span class="fw-bold"><?= $d->tanggal_surat ?></span> s/d <small class="fw-bold"><?= $d->tanggal_kadaluarsa ?></small></small></td>
                        </tr>

                    <?php } ?>
                </table>
                <br>
                <p>Memang benar yang namanya tersebut Penduduk dan Berdomisili di Desa Lagadar, Kecamatan Margaasih, Kabupaten Bandung</p>
                <p>Surat Pengantar ini diberikan untuk keperluan mengurus/mengambil : </p>
                <center>
                    <p><b>"<?= $d->keperluan ?>"</b></p>
                </center>
                <p>Dengan demikian surat keterangan ini kami buat untuk dipergunakan sebagaimana mestinya.</p>
                <br>
                <div class="kades float-end">
                    <span class="mb-n2">Lagadar, <?= date('d M Y') ?></span>
                    <p>a.n Kepala Desa Lagadar</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sekretaris Desa</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U.b</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kasi Pelayanan</p>
                    <!-- <img src="<?= base_url('./assets/ttd/ttd.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;"> -->
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