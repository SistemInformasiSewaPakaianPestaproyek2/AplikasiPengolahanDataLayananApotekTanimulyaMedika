<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Artikel4 extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'artikel4/index_artikel4'
						);
		$this->load->view('layout/wrapper',$data);
	}
}