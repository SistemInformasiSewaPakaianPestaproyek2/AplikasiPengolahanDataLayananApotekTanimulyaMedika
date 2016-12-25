<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Daftar extends CI_Model {
	public function GetDaftar_periksa() {
		$data=$this->db->query('select * from kelas');
		return $data->result_array();
	}
	public function InsertData($tableName,$data){
		$res=$this->db->insert($tableName, $data);
		return $res;
		}
	}