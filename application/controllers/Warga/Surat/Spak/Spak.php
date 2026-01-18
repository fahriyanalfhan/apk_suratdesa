<?php
class Spak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('M_getData');
		$this->load->model('M_surat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Surat Pegantar Akte Kelahiran',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/spak/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('ayah', 'Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('nik_ayah', 'NIK Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('te_lahir_ayah', 'Tempat Lahir Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('ta_lahir_ayah', 'Tanggal Lahir Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('ibu', 'Ibu', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('nik_ibu', 'NIK Ibu', 'required', [
			'required' => 'Nama Ibu harus diisi!'
		]);
		$this->form_validation->set_rules('te_lahir_ibu', 'Tempat Lahir Ibu', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('ta_lahir_ibu', 'Tanggal Lahir Ibu', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('no_kk', 'No KK', 'required|min_length[16]|max_length[16]', [
			'required' => 'Nomor KK harus diisi!',
			'min_length' => 'Nomor KK harus 16 digit!',
			'max_length' => 'Nomor KK harus 16 digit!'
		]);
		$this->form_validation->set_rules('nama_bayi', 'Nama', 'required', [
			'required' => 'Nama Bayi harus diisi!'
		]);
		$this->form_validation->set_rules('tempat_lahir_b', 'Tempat Lahir', 'required', [
			'required' => 'Tempat Lahir harus diisi!'
		]);
		$this->form_validation->set_rules('tanggal_lahir_b', 'Tanggal Lahir', 'required', [
			'required' => 'Tanggal Lahir harus diisi!'
		]);
		$this->form_validation->set_rules('jekel_b', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin harus diisi!'
		]);
		$this->form_validation->set_rules('agama_b', 'Agama', 'required', [
			'required' => 'Agama harus diisi!'
		]);
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', [
			'required' => 'Anak Ke harus diisi!'
		]);
		$this->form_validation->set_rules('kewarganegaraan_b', 'Kewarganegaraan', 'required', [
			'required' => 'Kewarganegaraan harus diisi!'
		]);
		$this->form_validation->set_rules('alamat_b', 'Alamat', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nama_s1', 'Nama Saksi 1', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nik_s1', 'Nik Saksi 1', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('alamat_s1', 'Alamat Saksi 1', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nama_s2', 'Nama Saksi 2', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nik_s2', 'Nik Saksi 2', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('alamat_s2', 'Alamat Saksi 2', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi !'));

		$cek = $this->M_surat->cek_spak();

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('error', 'Data tidak lengkap !');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SPAK</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {

				$ayah = $this->input->post('ayah');
				$nik_ayah = $this->input->post('nik_ayah');
				$te_lahir_ayah = $this->input->post('te_lahir_ayah');
				$ta_lahir_ayah = $this->input->post('ta_lahir_ayah');
				$ibu = $this->input->post('ibu');
				$nik_ibu = $this->input->post('nik_ibu');
				$te_lahir_ibu = $this->input->post('te_lahir_ibu');
				$ta_lahir_ibu = $this->input->post('ta_lahir_ibu');
				$no_kk = $this->input->post('no_kk');
				$nama = $this->input->post('nama_bayi');
				$jekel = $this->input->post('jekel_b');
				$tmp_lahir = $this->input->post('tempat_lahir_b');
				$tgl_lahir = $this->input->post('tanggal_lahir_b');
				$anak_ke = $this->input->post('anak_ke');
				$agama = $this->input->post('agama_b');
				$kwarga = $this->input->post('kewarganegaraan_b');
				$alamat = $this->input->post('alamat_b');
				$namas1 = $this->input->post('nama_s1');
				$niks1 = $this->input->post('nik_s1');
				$alamats1 = $this->input->post('alamat_s1');
				$namas2 = $this->input->post('nama_s2');
				$niks2 = $this->input->post('nik_s2');
				$alamats2 = $this->input->post('alamat_s2');
				$keperluan = $this->input->post('keperluan');
				$file_kk = $_FILES['file_kk']['name'];
				$file_ktp = $_FILES['file_ktp']['name'];
				$file_kel = $_FILES['file_kel']['name'];
				$file_ktp1 = $_FILES['file_ktp1']['name'];
				$file_ktp2 = $_FILES['file_ktp2']['name'];

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_kk);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filekk = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filektp = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_kel);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filekel = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp1);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filektp1 = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp2);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filektp2 = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				if ($file_kk == '' || $file_ktp == '' || $file_kel == '' || $file_ktp1 == '' || $file_ktp2 == '') {
					$this->session->set_flashdata('error', 'File tidak lengkap !');
					redirect('spak/create', 'refresh');
				} else {
					$noid = $this->M_getData->getSpakId();
					$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKPAK' . '/' . date('m') . '/' . date('Y');
					$data = array(
						'id_warga'  => $this->session->userdata('id_warga'),
						'jenis_surat'   => 'SURAT PENGANTAR AKTE KELAHIRAN',
						'nomor_surat'   => $nomor,
						'tanggal_surat' => date('d/m/Y'),
						'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
						'ayah'          =>  $ayah,
						'nik_ayah' => $nik_ayah,
						'te_lahir_ayah' => $te_lahir_ayah,
						'ta_lahir_ayah' => $ta_lahir_ayah,
						'ibu'           =>  $ibu,
						'nik_ibu' => $nik_ibu,
						'te_lahir_ibu' => $te_lahir_ibu,
						'ta_lahir_ibu' => $ta_lahir_ibu,
						'no_kk'         =>  $no_kk,
						'nama_bayi'     =>  $nama,
						'jekel_b'         =>  $jekel,
						'tempat_lahir_b'  =>  $tmp_lahir,
						'tanggal_lahir_b' =>  $tgl_lahir,
						'anak_ke'       =>  $anak_ke,
						'agama_b'         =>  $agama,
						'kewarganegaraan_b'  =>  $kwarga,
						'alamat_b'        =>  $alamat,
						'nama_s1'		=> $namas1,
						'nik_s1'		=> $niks1,
						'alamat_s1'		=> $alamats1,
						'nama_s2'		=> $namas2,
						'nik_s2'		=> $niks2,
						'alamat_s2'		=> $alamats2,
						'keperluan'     => $keperluan,
						'file_kk'       => $filekk,
						'file_ktp'      => $filektp,
						'file_kel'      => $filekel,
						'file_ktp1'      => $filektp1,
						'file_ktp2'      => $filektp2,
						'status'        => 'Menunggu Verifikasi',
						'created_at'    => date('Y-m-d H:i:s')
					);

					$config['upload_path'] = './assets/file_kk/'; //folder penyimpanana gambar
					$config['file_name'] = $filekk;
					$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_kk')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('spak/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}

					$config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
					$config['file_name'] = $filektp;
					$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_ktp')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('spak/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}

					$config['upload_path'] = './assets/file_kel/'; //folder penyimpanana gambar
					$config['file_name'] = $filekel;
					$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_kel')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('spak/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}

					$config['upload_path'] = './assets/file_ktps/'; //folder penyimpanana gambar
					$config['file_name'] = $filektp1;
					$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_ktp1')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('spak/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}

					$config['upload_path'] = './assets/file_ktps/'; //folder penyimpanana gambar
					$config['file_name'] = $filektp2;
					$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_ktp2')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('spak/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}

					$this->M_surat->spak($data);
					$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
					redirect('list-surat', 'refresh');
				}
			}
		}
	}
	public function update()
	{
		$this->form_validation->set_rules('ayah', 'Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('nik_ayah', 'NIK Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('te_lahir_ayah', 'Tempat Lahir Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('ta_lahir_ayah', 'Tanggal Lahir Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('ibu', 'Ibu', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('nik_ibu', 'NIK Ibu', 'required', [
			'required' => 'Nama Ibu harus diisi!'
		]);
		$this->form_validation->set_rules('te_lahir_ibu', 'Tempat Lahir Ibu', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('ta_lahir_ibu', 'Tanggal Lahir Ibu', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('no_kk', 'No KK', 'required|min_length[16]|max_length[16]', [
			'required' => 'Nomor KK harus diisi!',
			'min_length' => 'Nomor KK harus 16 digit!',
			'max_length' => 'Nomor KK harus 16 digit!'
		]);
		$this->form_validation->set_rules('nama_bayi', 'Nama', 'required', [
			'required' => 'Nama Bayi harus diisi!'
		]);
		$this->form_validation->set_rules('tanggal_lahir_b', 'Tanggal Lahir', 'required', [
			'required' => 'Tanggal Lahir harus diisi!'
		]);
		$this->form_validation->set_rules('jekel_b', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin harus diisi!'
		]);
		$this->form_validation->set_rules('agama_b', 'Agama', 'required', [
			'required' => 'Agama harus diisi!'
		]);
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', [
			'required' => 'Anak Ke harus diisi!'
		]);
		$this->form_validation->set_rules('kewarganegaraan_b', 'Kewarganegaraan', 'required', [
			'required' => 'Kewarganegaraan harus diisi!'
		]);
		$this->form_validation->set_rules('alamat_b', 'Alamat', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nama_s1', 'Nama Saksi 1', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nik_s1', 'Nik Saksi 1', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('alamat_s1', 'Alamat Saksi 1', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nama_s2', 'Nama Saksi 2', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('nik_s2', 'Nik Saksi 2', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('alamat_s2', 'Alamat Saksi 2', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi !'));

		$cek = $this->M_surat->cek_spak();

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('error', 'Data tidak lengkap !');
		} else {

			$ayah = $this->input->post('ayah');
			$nik_ayah = $this->input->post('nik_ayah');
			$te_lahir_ayah = $this->input->post('te_lahir_ayah');
			$ta_lahir_ayah = $this->input->post('ta_lahir_ayah');
			$ibu = $this->input->post('ibu');
			$nik_ibu = $this->input->post('nik_ibu');
			$te_lahir_ibu = $this->input->post('te_lahir_ibu');
			$ta_lahir_ibu = $this->input->post('ta_lahir_ibu');
			$no_kk = $this->input->post('no_kk');
			$nama = $this->input->post('nama_bayi');
			$jekel = $this->input->post('jekel_b');
			$tmp_lahir = $this->input->post('tempat_lahir_b');
			$tgl_lahir = $this->input->post('tanggal_lahir_b');
			$anak_ke = $this->input->post('anak_ke');
			$agama = $this->input->post('agama_b');
			$kwarga = $this->input->post('kewarganegaraan_b');
			$alamat = $this->input->post('alamat_b');
			$namas1 = $this->input->post('nama_s1');
			$niks1 = $this->input->post('nik_s1');
			$alamats1 = $this->input->post('alamat_s1');
			$namas2 = $this->input->post('nama_s2');
			$niks2 = $this->input->post('nik_s2');
			$alamats2 = $this->input->post('alamat_s2');
			$keperluan = $this->input->post('keperluan');
			$file_kk = $_FILES['file_kk']['name'];
			$file_ktp = $_FILES['file_ktp']['name'];
			$file_kel = $_FILES['file_kel']['name'];
			$file_ktp1 = $_FILES['file_ktp1']['name'];
			$file_ktp2 = $_FILES['file_ktp2']['name'];

			$date = date('Ymd-is');
			$d2 = trim($date);
			//acak nama gambar
			$extensi1 = explode('.', $file_kk);
			$extensi = strtolower(end($extensi1));
			$acak_angka =  rand(1, 999);
			$filekk = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

			$date = date('Ymd-is');
			$d2 = trim($date);
			//acak nama gambar
			$extensi1 = explode('.', $file_ktp);
			$extensi = strtolower(end($extensi1));
			$acak_angka =  rand(1, 999);
			$filektp = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

			$date = date('Ymd-is');
			$d2 = trim($date);
			//acak nama gambar
			$extensi1 = explode('.', $file_kel);
			$extensi = strtolower(end($extensi1));
			$acak_angka =  rand(1, 999);
			$filekel = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

			$date = date('Ymd-is');
			$d2 = trim($date);
			//acak nama gambar
			$extensi1 = explode('.', $file_ktp1);
			$extensi = strtolower(end($extensi1));
			$acak_angka =  rand(1, 999);
			$filektp1 = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

			$date = date('Ymd-is');
			$d2 = trim($date);
			//acak nama gambar
			$extensi1 = explode('.', $file_ktp2);
			$extensi = strtolower(end($extensi1));
			$acak_angka =  rand(1, 999);
			$filektp2 = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);


			$id = $this->input->post('id');



			$data = array(
				'id_warga'  => $this->session->userdata('id_warga'),
				'tanggal_surat' => date('d/m/Y'),
				'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
				'ayah'          =>  $ayah,
				'nik_ayah' => $nik_ayah,
				'te_lahir_ayah' => $te_lahir_ayah,
				'ta_lahir_ayah' => $ta_lahir_ayah,
				'ibu'           =>  $ibu,
				'nik_ibu' => $nik_ibu,
				'te_lahir_ibu' => $te_lahir_ibu,
				'ta_lahir_ibu' => $ta_lahir_ibu,
				'no_kk'         =>  $no_kk,
				'nama_bayi'     =>  $nama,
				'jekel_b'         =>  $jekel,
				'tempat_lahir_b'  =>  $tmp_lahir,
				'tanggal_lahir_b' =>  $tgl_lahir,
				'anak_ke'       =>  $anak_ke,
				'agama_b'         =>  $agama,
				'kewarganegaraan_b'  =>  $kwarga,
				'alamat_b'        =>  $alamat,
				'nama_s1'		=> $namas1,
				'nik_s1'		=> $niks1,
				'alamat_s1'		=> $alamats1,
				'nama_s2'		=> $namas2,
				'nik_s2'		=> $niks2,
				'alamat_s2'		=> $alamats2,
				'keperluan'     => $keperluan,
				'komentar'        => '',
				'file_kk'       => $filekk,
				'file_ktp'      => $filektp,
				'file_kel'       => $filekel,
				'file_ktp1'      => $filektp1,
				'file_ktp2'      => $filektp2,
				'status'        => 'Menunggu Verifikasi',
				'created_at'    => date('Y-m-d H:i:s')
			);

			if ($file_kk == '') {
				unset($data['file_kk']);
			}

			if ($file_ktp == '') {
				unset($data['file_ktp']);
			}

			if ($file_kel == '') {
				unset($data['file_kel']);
			}
			if ($file_ktp1 == '') {
				unset($data['file_ktp1']);
			}
			if ($file_ktp2 == '') {
				unset($data['file_ktp2']);
			}

			$config['upload_path'] = './assets/file_kk/'; //folder penyimpanana gambar
			$config['file_name'] = $filekk;
			$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
			$config['max_size'] = '3024';
			$config['remove_space'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('file_kk')) {
			} else {
				$this->upload->data();
			}

			$config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
			$config['file_name'] = $filektp;
			$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
			$config['max_size'] = '3024';
			$config['remove_space'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('file_ktp')) {
			} else {
				$this->upload->data();
			}

			$config['upload_path'] = './assets/file_kel/'; //folder penyimpanana gambar
			$config['file_name'] = $filekel;
			$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
			$config['max_size'] = '3024';
			$config['remove_space'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('file_kel')) {
			} else {
				$this->upload->data();
			}

			$config['upload_path'] = './assets/file_ktps/'; //folder penyimpanana gambar
			$config['file_name'] = $filektp1;
			$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
			$config['max_size'] = '3024';
			$config['remove_space'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('file_ktp1')) {
			} else {
				$this->upload->data();
			}

			$config['upload_path'] = './assets/file_ktps/'; //folder penyimpanana gambar
			$config['file_name'] = $filektp2;
			$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
			$config['max_size'] = '3024';
			$config['remove_space'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('file_ktp2')) {
			} else {
				$this->upload->data();
			}

			$this->M_surat->spak_update($data, $id);
			$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
			redirect('history-surat-kelahiran', 'refresh');
		}
	}
}
