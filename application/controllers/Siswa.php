<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('siswa_model');
    }

    public function index() {
        $this->load->view('input_siswa');
    }

    public function submit() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );

        $this->siswa_model->tambah_siswa($data);
        redirect('siswa/view_data');
    }

    public function view_data() {
        $data['siswa'] = $this->siswa_model->get_siswa();
        $this->load->view('view_siswa', $data);
    }
}
?>
