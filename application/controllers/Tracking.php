<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Administrator/M_verifikasi');
    }

    public function index()
    {
        $data = array(
            'title' => 'Tracking Surat',
            'skpl'   => $this->M_verifikasi->getSkp(),
            'sktml'  => $this->M_verifikasi->getSktm(),
            'skkl'   => $this->M_verifikasi->getSkk(),
            'spakl'  => $this->M_verifikasi->getSpak()
        );

        $this->load->view('auth/layout/header', $data);
        $this->load->view('auth/tracking/tracking', $data);
        $this->load->view('auth/layout/footer', $data);
    }
}
