<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Profil extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'profil/index_profil'
						);
		$this->load->view('layout/wrapper',$data);
	}
}