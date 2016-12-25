<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Artikel1 extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'artikel1/index_artikel1'
						);
		$this->load->view('layout/wrapper',$data);
	}
}