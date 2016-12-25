<?php

class Popup_kartupasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->model('webmodel','',TRUE);
		//$this->load->model('datapasien_model','',TRUE);
		
	}

	public function kartu_pasien() {
	$data['detail_pasien']=$this->webmodel->detail_pasien($this->uri->segment(3));
	$this->load->view('v_popup_kartupasien',$data);
	}	
}

?>
<!-- public function surat_rujukan() {
	$data['detail_rujukan']=$this->rujukan_model->detail_rujukan($this->uri->segment(3));
	$this->load->view('v_popup_rujukan',$data);
	}
    
    ---->
