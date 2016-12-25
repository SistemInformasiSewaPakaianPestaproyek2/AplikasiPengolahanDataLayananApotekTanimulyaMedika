<?php

class Popup3 extends CI_Controller {

    public function __construct() {
        parent::__construct();

    	//$this->load->model('rujukan_model','',TRUE);
		$this->load->model('daftarperiksa_model','',TRUE);
	}


	
	public function cetak_daftarperiksa() {
	$data['detail_periksa']=$this->daftarperiksa_model->detail_periksa($this->uri->segment(3));
	$this->load->view('v_popup_daftarperiksa',$data);
	}
	
	/*public function daftarperiksa() {
	$data['detail_daftar_periksa']=$this->daftarperiksa_model->detail_laporan($this->uri->segment(3));
	$this->load->view('v_popup_laporan',$data);
	}*/
}

?>