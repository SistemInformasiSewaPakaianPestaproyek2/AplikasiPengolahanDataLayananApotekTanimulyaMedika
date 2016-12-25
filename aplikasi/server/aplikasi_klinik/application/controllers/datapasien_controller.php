<?php
class Datapasien_controller extends CI_Controller {
	function __Construct()
	{
		parent ::__construct();
		$this->load->view('datapasien',$data);
		$this->load->view('daftar_datapasien',$data);
	}
	
	function datapasien()
	{
		$data['judul']='Insert Data Pasien';
		$this->load->view('datapasien',$data);
		
		$this->load->model('datapasien_model');
		$data['judul'] = 'Menampilkan data dari database';
		$data['daftar_datapasien'] =$this->datapasien_model->get_datapasien_all();
		$this->load->view('daftar_datapasien',$data);
		
	}
	
	function simpan_datapasien()
	{
		$this->load->model('datapasien_model');
		$this->datapasien_model->simpan_datapasien();
		$data['notifikasi'] = 'Data berhasil disimpan';
		$data['judul']='insert data berhasil';
		$this->load->view('notifikasi',$data);
	}
	
	function delete_datapasien($kode_pasien)
	{
		$this->load->model('datapasien_model');
		$nama=$this->datapasien_model->delete_datapasien($kode_pasien);
		redirect('datapasien_controller/datapasien');
	
}
}