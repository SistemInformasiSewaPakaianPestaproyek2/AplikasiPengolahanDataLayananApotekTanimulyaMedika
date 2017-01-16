<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Menu_utama_apoteker extends CI_Controller {
	public function index() {
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'menu_utama/menu_utama'
						);
		$this->load->view('layout/wrapper',$data);
	}
}