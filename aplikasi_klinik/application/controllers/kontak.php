<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'kontak/index_kontak'
						);
		$this->load->view('layout/wrapper',$data);
	}
}