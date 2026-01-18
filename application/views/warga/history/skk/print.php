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
                <p>Kepala Desa Lagadar Kecamatan Margaasih Kabupaten Bandung dengan ini menerangkan bahwa :</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><span class="fw-bold"><?= $d->nama_alm ?></span></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                            <td><?= $d->nik_a ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d->jekel_a ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat_a ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Telah meninggal dunia pada:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Hari/Jam</td>
                            <td>: </td>
                            <td><?= $d->hari ?> / <?= $d->jam_meninggal ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>: </td>
                            <td><?= $d->tanggal_meninggal ?></td>
                        </tr>
                        <tr>
                            <td>Di</td>
                            <td>: </td>
                            <td><?= $d->tempat_meninggal ?></td>
                        </tr>
                        <tr>
                            <td>Di sebabkan karena</td>
                            <td>: </td>
                            <td><?= $d->sebab_meninggal ?></td>
                        </tr>
                    <?php } ?>
                </table>

                <br>
                <p style="text-align: justify;">
                    Demikian surat kematian ini dibuat dengan sebenarnya.
                </p>
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