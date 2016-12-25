<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetDaftar_periksa(){
		$data = $this->db->query('select * from t_daftar_periksa');
		return $data->result_array();
	}
	public function GetDaftarPasien($where=""){
		$tampil = $this->db->query('select*from data_pasien '.$where);
		return $tampil->result_array();
		}
	public function GetDataDokter(){
		$data = $this->db->query('select * from t_datadokter');
		return $data->result_array();
		}
	public function GetDataPetugas(){
		$data = $this->db->query('select * from t_datapetugas');
		return $data->result_array();
		}
	public function GetJumlahPengunjung(){
		$data = $this->db->query('select * from jml_pengunjung');
		return $data->result_array();
		}
	public function GetRekamMedis(){
		$data = $this->db->query('select * from rekam_medis');
		return $data->result_array();
		}
	public function InsertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
		}
	public function UpdateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
		}
	public function DeleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
		}
}

