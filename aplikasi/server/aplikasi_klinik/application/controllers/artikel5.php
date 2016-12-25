<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Artikel5 extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'artikel5/index_artikel5'
						);
		$this->load->view('layout/wrapper',$data);
	}
}