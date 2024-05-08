<?php
class Siswa_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function tambah_siswa($data) {
        $this->db->insert('siswa', $data);
    }

    public function get_siswa() {
        return $this->db->get('siswa')->result_array();
    }
}
?>
