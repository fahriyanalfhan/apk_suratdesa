            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>Edit Surat Keterangan Kematian</h4>
            	</div>
            	<a href="<?= base_url('history-surat-kematian') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<div class="table-responsive overflow-auto">
            							<h6>Data Pemohon :</h6>
            							<form action="<?= base_url('skk/update') ?>" method="post" enctype="multipart/form-data">
            								<table class="table" style="width:100%">
            									<?php foreach ($datas as $data) { ?>
            										<input type="hidden" name="id" value="<?= $data->id; ?>">

            										<tr>
            											<td>Nik</td>
            											<td>:</td>
            											<td><?= $data->nik ?></td>
            										</tr>
            										<tr>
            											<td>Nama</td>
            											<td>:</td>
            											<td><?= $data->nama ?></td>
            										</tr>
            										<tr>
            											<td>Rt</td>
            											<td>:</td>
            											<td><?= $data->rt ?></td>
            										</tr>
            										<tr>
            											<td>Rw</td>
            											<td>:</td>
            											<td><?= $data->rw ?></td>
            										</tr>
            										<tr>
            											<td>Alamat</td>
            											<td>:</td>
            											<td><?= $data->alamat ?></td>
            										</tr>
            										<p>Surat</p>
            										<tr>
            											<td>Keperluan</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="keperluan" value="<?= $data->keperluan ?>" readonly></td>
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
            											<td> <img src="<?= base_url('./assets/file_kk/') . $data->file_kk ?>" class="img-thumbnail" style="width:20%">
            												<input type="file" name="file_kk" value="<?= set_value('file_kk') ?>" class="form-control" id="">
            											</td>
            										</tr>
            										<tr>
            											<td>File Surat Kematian RS/RT</td>
            											<td>: </td>
            											<td> <img src="<?= base_url('./assets/file_kem/') . $data->file_kem ?>" class="img-thumbnail" style="width:20%">
            												<input type="file" name="file_kem" value="<?= set_value('file_kem') ?>" class="form-control" id="">
            											</td>
            										</tr>
            									<?php } ?>
            								</table>
            								<h6>Data Almarhum / Almarhumah</h6>
            								<table class="table" style="width:100%">
            									<?php foreach ($datas as $data) { ?>
            										<tr>
            											<td>Nama Pemohon</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" readonly></td>
            										</tr>
            										<tr>
            											<td>NIK</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="nik_a" value="<?= $data->nik_a ?>" readonly></td>
            										</tr>
            										<tr>
            											<td>Alamat</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="alamat" value="<?= $data->alamat ?>" readonly></td>
            										</tr>
            										<tr>
            											<td>Hubungan keluarga</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="hubungan" value="<?= $data->hubungan ?>"></td>
            										</tr>
            										<tr>
            											<td>Nama Alm/h</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="nama_alm" value="<?= $data->nama_alm ?>"></td>
            										</tr>
            										<tr>
            											<td>Bin/i</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="bin" value="<?= $data->bin ?>"></td>
            										</tr>
            										<tr>
            											<td>Nik</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="nik" value="<?= $data->nik ?>"></td>
            										</tr>
            										<tr>
            											<td>Jenis Kelamin</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="jekel_a" value="<?= $data->jekel_a ?>"></td>
            										</tr>
            										<tr>
            											<td>TTL</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="tempat_lahir_a" value="<?= $data->tempat_lahir_a ?>">, <input type="text" class="form-control" name="tanggal_lahir_a" value="<?= $data->tanggal_lahir_a ?>"></td>
            										</tr>
            										<tr>
            											<td>Kewarganegaraan</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="kewarganegaraan_a" value="<?= $data->kewarganegaraan_a ?>"></td>
            										</tr>
            										<tr>
            											<td>Status Pernikahan</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="status_perkawinan_a" value="<?= $data->status_perkawinan_a ?>"></td>
            										</tr>
            										<tr>
            											<td>Pekerjaan</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="pekerjaan_a" value="<?= $data->pekerjaan_a ?>"></td>
            										</tr>
            										<tr>
            											<td>Alamat</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="alamat_a" value="<?= $data->alamat_a ?>"></td>
            										</tr>
            										<tr>
            											<td>Hari Meninggal</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="hari" value="<?= $data->hari ?>"></td>
            										</tr>
            										<tr>
            											<td>Tanggal Meninggal</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="tanggal_meninggal" value="<?= $data->tanggal_meninggal ?>"></td>
            										</tr>
            										<tr>
            											<td>Jam Meninggal</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="jam_meninggal" value="<?= $data->jam_meninggal ?>"></td>
            										</tr>
            										<tr>
            											<td>Tempat Meninggal</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="tempat_meninggal" value="<?= $data->tempat_meninggal ?>"></td>
            										</tr>
            										<tr>
            											<td>Tempat Pemakaman</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="tempat_pemakaman" value="<?= $data->tempat_pemakaman ?>"></td>
            										</tr>
            										<tr>
            											<td>Sebab Meninggal</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="sebab_meninggal" value="<?= $data->sebab_meninggal ?>"></td>
            										</tr>
            									<?php } ?>
            								</table>
            								<button class="btn btn-block btn-primary btn-sm" type="submit"><b>Update Pengajuan Surat</b> <i class="bi bi-edit"></i></button>
            							</form>
            						</div>
            					</div>
            				</div>

            			</div>
            		</div>
            	</section>
            </div>