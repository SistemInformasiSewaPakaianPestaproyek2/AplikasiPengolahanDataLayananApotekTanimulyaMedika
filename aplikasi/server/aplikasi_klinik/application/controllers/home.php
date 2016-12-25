<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('webmodel3','daftar',TRUE);
		}
	public function index() {
		$this->data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'home/index_home'
						);
		
		$this->load->model('Webmodel3');
		/*$this->data['posting'] = $this->Webmodel3->list_posting();
		
		$this->session->unset_userdata('kode_dokter_sekarang','');
		
		$daftar=$this->daftar->cari_semua();*/
		
		//$this->load->view('home/index_home', $this->data);
		$this->posting();
		$this->load->view('layout/wrapper',$this->data);
	}
function posting()
{
	$this->load->model('Webmodel3');
	$this->data['posting'] = $this->Webmodel3->list_posting();
	
}
}