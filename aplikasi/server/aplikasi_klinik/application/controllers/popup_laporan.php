<?php

class Popup_laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->model('laporan_model','',TRUE);
	
		$this->load->database();
	}


	public function laporan() {
	$data['detail_laporan']=$this->laporan_model->detail_laporan($this->uri->segment(3));
	$this->load->view('v_popup_laporan',$data);
	}
	
		
	
}

?>
<!-- public function surat_rujukan() {
	$data['detail_rujukan']=$this->rujukan_model->detail_rujukan($this->uri->segment(3));
	$this->load->view('v_popup_rujukan',$data);
	}
    
    ---->
