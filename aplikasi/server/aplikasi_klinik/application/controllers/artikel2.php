<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Artikel2 extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'artikel2/index_artikel2'
						);
		$this->load->view('layout/wrapper',$data);
	}
}