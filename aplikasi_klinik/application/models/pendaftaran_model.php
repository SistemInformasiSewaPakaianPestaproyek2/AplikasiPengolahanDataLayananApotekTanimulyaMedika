<?php if (! defined('BASEPATH'))
		exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {
	public function GetTampil_data() {
		$data = $this->db->query('select * from data_pasien');
		return $data->result_array();
	}
	public function tambah_data($tableName,$data) {
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
}
		