            <div class="main-content container-fluid">
                <div class="page-title">
                    <h4>Edit Surat Surat Pengantar Akte Kelahiran</h4>
                </div>
                <a href="<?= base_url('history-surat-kelahiran') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive overflow-auto">
                                        <form action="<?= base_url('spak/update') ?>" method="post" enctype="multipart/form-data">
                                            <table class="table" style="width:100%">
                                                <?php foreach ($datas as $data) { ?>
                                                    <input type="hidden" name="id" value="<?= $data->id; ?>">
                                                    <tr>
                                                        <td>Nik</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nik" value="<?= $data->nik ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="jekel" value="<?= $data->jekel ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agama</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="agama" value="<?= $data->agama ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>TTL</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="tempat_lahir" value="<?= $data->tempat_lahir ?>" readonly> <input type="date" class="form-control" name="tgl_lahir" value="<?= $data->tgl_lahir ?>" readonly> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perkerjaan</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="pekerjaan" value="<?= $data->pekerjaan ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Pernikahan</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="status_pernikahan" value="<?= $data->status_pernikahan ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rt</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="rt" value="<?= $data->rt ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rw</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="rw" value="<?= $data->rw ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="alamat" value="<?= $data->alamat ?>" readonly></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Ayah</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="ayah" value="<?= $data->ayah ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIK Ayah</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nik_ayah" value="<?= $data->nik_ayah ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir Ayah</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="te_lahir_ayah" value="<?= $data->te_lahir_ayah ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir Ayah</td>
                                                        <td>:</td>
                                                        <td><input type="date" class="form-control" name="ta_lahir_ayah" value="<?= $data->ta_lahir_ayah ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ibu</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="ibu" value="<?= $data->ibu ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIK Ibu</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nik_ibu" value="<?= $data->nik_ibu ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir Ibu</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="te_lahir_ibu" value="<?= $data->te_lahir_ibu ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir Ibu</td>
                                                        <td>:</td>
                                                        <td><input type="date" class="form-control" name="ta_lahir_ibu" value="<?= $data->ta_lahir_ibu ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Kk</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="no_kk" value="<?= $data->no_kk ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Nama Bayi</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nama_bayi" value="<?= $data->nama_bayi ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="jekel_b" value="<?= $data->jekel_b ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Anak Ke</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="anak_ke" value="<?= $data->anak_ke ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="tempat_lahir_b" value="<?= $data->tempat_lahir_b ?>"></td>

                                                    </tr>

                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <td>:</td>
                                                        <td><input type="date" class="form-control" name="tanggal_lahir_b" value="<?= $data->tanggal_lahir_b ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Agama</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="agama_b" value="<?= $data->agama_b ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Kewarganegaraan</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="kewarganegaraan_b" value="<?= $data->kewarganegaraan_b ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="alamat_b" value="<?= $data->alamat_b ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Saksi 1</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nama_s1" value="<?= $data->nama_s1 ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nik Saksi 1</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nik_s1" value="<?= $data->nik_s1 ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Saksi 1</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="alamat_s1" value="<?= $data->alamat_s1 ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Saksi 2</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nama_s2" value="<?= $data->nama_s2 ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nik Saksi 2</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="nik_s2" value="<?= $data->nik_s2 ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Saksi 2</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="alamat_s2" value="<?= $data->alamat_s2 ?>"></td>
                                                    </tr>
                                                    <p>Surat</p>
                                                    <tr>
                                                        <td>Keperluan</td>
                                                        <td>:</td>
                                                        <td><input type="text" class="form-control" name="keperluan" value="<?= $data->keperluan ?>"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>File KTP</td>
                                                        <td>:</td>
                                                        <td>
                                                            <img src="<?= base_url('./assets/file_ktp/') . $data->file_ktp ?>" class="img-thumbnail" style="width:20%">
                                                            <input type="file" name="file_ktp" value="<?= set_value('file_ktp') ?>" class="form-control" id="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File KK</td>
                                                        <td>: </td>
                                                        <td>
                                                            <img src="<?= base_url('./assets/file_kk/') . $data->file_kk ?>" class="img-thumbnail" style="width:20%">
                                                            <input type="file" name="file_kk" value="<?= set_value('file_kk') ?>" class="form-control" id="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File Surat Kelahiran RS/Bidan</td>
                                                        <td>: </td>
                                                        <td>
                                                            <img src="<?= base_url('./assets/file_kel/') . $data->file_kel ?>" class="img-thumbnail" style="width:20%">
                                                            <input type="file" name="file_kel" value="<?= set_value('file_kel') ?>" class="form-control" id="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File KTP Sanksi 1</td>
                                                        <td>: </td>
                                                        <td>
                                                            <img src="<?= base_url('./assets/file_ktps/') . $data->file_ktp1 ?>" class="img-thumbnail" style="width:20%">
                                                            <input type="file" name="file_ktp1" value="<?= set_value('file_ktp1') ?>" class="form-control" id="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File KTP Sanksi 2</td>
                                                        <td>: </td>
                                                        <td>
                                                            <img src="<?= base_url('./assets/file_ktps/') . $data->file_ktp2 ?>" class="img-thumbnail" style="width:20%">
                                                            <input type="file" name="file_ktp2" value="<?= set_value('file_ktp2') ?>" class="form-control" id="">
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table> <button class="btn btn-block btn-primary btn-sm" type="submit"><b>Update Pengajuan Surat</b> <i class="bi bi-edit"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>