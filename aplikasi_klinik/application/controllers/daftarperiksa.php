<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Daftarperiksa extends CI_Controller {
	public $form_action ='';
	public $no='';
	
	public function index() {
		//$tampil= $this->all_model->GetDaftarPasien();
		
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'daftarperiksa/index_daftarperiksa',
					 'form_action'=>'',
					 'main_view'     => 'dataperiksa/dataperiksa',
						);
		$this->load->view('layout/wrapper',$data);
		//$this->data['form_action'] = 'daftarperiksa/tambah';
		//$this->data->hapus();
	}
	 public function __construct() {
        parent::__construct();

    	$this->load->model('daftarperiksa_model','',TRUE);
    	
	}


	
	public function daftar_periksa() {
	$data['detail_daftarperiksa']=$this->daftarperiksa_model->detail_daftarperiksa($this->uri->segment(3));
	$this->load->view('v_popup_daftarperiksa',$data);
	}
	
	
	public function hapus(){
	$waktu=1;
	$where = array("tanggal" => date('Y-m-d'),'tanggal'>1);
	$res= $this->mymodel->DeleteData('data_periksa',$where);
	if($res>=1){
		redirect('daftarperiksa');}
	}
	public function simpan(){
		//$this->hapus();
		/*$where = array('tanggal' =>  date('Y-m-d'));
		$res= $this->mymodel->DeleteData('data_periksa',$where);*/
		$kode_pasien1 = $this->daftarperiksa_model->cari_semua();

        // daftar periksa
        if($kode_pasien1)
        {
            foreach($kode_pasien1 as $row)
            {
                $this->data['option_datapasien'][$row->kode_pasien] = $row->kode_pasien;
            }
		}
        
        else
        {
            $this->data['option_datapasien']['00'] = '-';
            $this->data['pesan'] = 'Data antrian belum ada .';
            //$this->load->view('template', $this->data);
		}
		
		
		
		$kode_pasien=$_POST['kode_pasien'];
		//$tanggal=$_POST['tanggal'];
		$this->data_simpan=array (
							'kode_pasien'=>$kode_pasien,
							'tanggal' => date('Y-m-d'),
							);
		$res = $this->pendaftaran_model->tambah_data('data_periksa',$this->data_simpan);
		$no++;
		if($res>=1) {
			$data=array ('title'=>'Klinik Tanimulya Medika',
							 'isi' =>'daftar/posting'
								);
		$cetak= $this->load->view('layout/wrapper',$data);
		//$urut=$this->mymode
		//MsgBox('anda nomor urut ke-'.$urut);
		
			redirect('daftar_cetak_posting'); 
			
			}
	else {
		echo "<h2>Tambah Data Gagal</h2>";}
	}
	
	function posting()
	{
		$this->load->model('Webmodel2');
		$this->data['posting'] = $this->Webmodel2->list_posting();
		$this->load->view('daftarperiksa/posting',$this->data);
		//$this->data->no++;
	}
	
	
	
 }
