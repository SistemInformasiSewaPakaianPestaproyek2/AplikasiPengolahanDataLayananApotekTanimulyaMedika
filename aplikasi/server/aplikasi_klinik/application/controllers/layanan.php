<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Layanan extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'layanan/index_layanan'
						);
		$this->load->view('layout/wrapper',$data);
	}
}