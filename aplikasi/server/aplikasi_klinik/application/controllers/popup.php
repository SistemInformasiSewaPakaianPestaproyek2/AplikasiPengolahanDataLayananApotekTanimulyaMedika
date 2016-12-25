<?php

class Popup extends CI_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->model('rujukan_model','',TRUE);
	
		$this->load->database();
	}


	public function surat_rujukan() {
	$data['detail_rujukan']=$this->rujukan_model->detail_rujukan($this->uri->segment(3));
	$this->load->view('v_popup_rujukan',$data);
	}
	
		
	
}

?>
<!-- public function surat_rujukan() {
	$data['detail_rujukan']=$this->rujukan_model->detail_rujukan($this->uri->segment(3));
	$this->load->view('v_popup_rujukan',$data);
	}
    
    ---->
