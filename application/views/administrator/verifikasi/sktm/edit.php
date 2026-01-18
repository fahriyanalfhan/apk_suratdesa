            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>Edit Surat Keterangan Tidak Mampu</h4>
            	</div>
            	<a href="<?= base_url('history-surat-tidak-mampu') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<div class="table-responsive overflow-auto">
            							<table class="table" style="width:100%">
            								<form action="<?= base_url('sktm/update') ?>" method="post" enctype="multipart/form-data">
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
            										<p>Surat</p>
            										<tr>
            											<td>Menanggung beban orang</td>
            											<td>:</td>
            											<td><input type="text" class="form-control" name="tanggungan" value="<?= $data->tanggungan ?>"></td>
            										</tr>
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
            											<td> <img src="<?= base_url('./assets/file_kk/') . $data->file_kk ?>" class="img-thumbnail" style="width:20%">
            												<input type="file" name="file_kk" value="<?= set_value('file_kk') ?>" class="form-control" id="">

            											</td>
            										</tr>
            										<tr>
            											<td>Foto Rumah</td>
            											<td>:</td>
            											<td>
            												<img src="<?= base_url('./assets/file_rumah/') . $data->file_rumah ?>" class="img-thumbnail" style="width:20%">
            												<input type="file" name="file_rumah" value="<?= set_value('file_rumah') ?>" class="form-control" id="">
            											</td>
            										</tr>
            										<tr>
            											<td>Foto Surat Pengantar RT</td>
            											<td>:</td>
            											<td>
            												<img src="<?= base_url('./assets/file_kel/') . $data->file_rt ?>" class="img-thumbnail" style="width:20%">
            												<input type="file" name="file_rt" value="<?= set_value('file_rt') ?>" class="form-control" id="">
            											</td>
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