<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Artikel3 extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'artikel3/index_artikel3'
						);
		$this->load->view('layout/wrapper',$data);
	}
}