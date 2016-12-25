<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Daftar_cetak_posting extends CI_Controller {
	
	 public $data = array(
                        'modul'         => 'daftar',
                        'breadcrumb'    => 'Daftar',
                        'pesan'         => '',
                        'pagination'    => '',
                        'tabel_data'    => '',
                        'main_view'     => 'daftar/posting',
                        'form_action'   => '',
                        'form_value'    => '',
						'option_datapasien'=>'',
                        );
						
	 public function __construct()
	{
		parent::__construct();		
		$this->load->model('webmodel2', 'daftar', TRUE);
		//$this->load->model('datapasien', 'datapasien', TRUE);
    }
	public function index() {
		//$tampil= $this->all_model->GetDaftarPasien();
		
		$this->data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'daftarperiksa/posting'
						);
		$this->load->model('Webmodel2');
		/*$datapasien=$this->daftar->cari_semua();
		if($datapasien)
		{
			foreach($datapasien as $row)
			{
$this->data['option_datapasien'][$row->kode_pasien] = $row->nama;
				}
				if($this->input->post('submit'))
				{
					
					}
			}*/
		$this->data['posting'] = $this->Webmodel2->list_posting();
		$this->load->view('layout/wrapper',$this->data);
		$this->session->unset_userdata('kode_pasien_sekarang', '');
       // $this->session->unset_userdata('kelas_sekarang', '');

        // Cari semua data kelas
        $daftar = $this->daftar->cari_semua();

        // data kelas ada, tampilkan
        if ($daftar)
        {
            // buat tabel
            $tabel = $this->daftar->buat_tabel($daftar);
            $this->data['tabel_data'] = $tabel;
           // $this->load->view('template', $this->data);
        }
        // data kelas tidak ada
        else
        {
            $this->data['pesan'] = 'Tidak ada data kelas.';
           // $this->load->view('template', $this->data);
        }
	}
	 
	/*public function simpan(){
		$nama=$_POST['nama'];
		$umur=$_POST['umur'];
		$alamat=$_POST['alamat'];
		$data_simpan=array (
							'nama'=>$nama,
							'umur'=>$umur,
							'alamat'=>$alamat);
		$res = $this->pendaftaran_model->tambah_data('data_pasien',$data_simpan);
		if($res>=1) {
		
			redirect('daftar/posting'); 
			}
	else {
		echo "<h2>Tambah Data Gagal</h2>";}
	}*/
	function posting()
	{
		$this->load->model('Webmodel2');
		$this->data['posting'] = $this->Webmodel2->list_posting();
		//$this->load->view('daftar/posting',$this->data);
		//$this->load->view('layout/wrapper',$this->data);
	}
	public function cetak_daftarperiksa() {
	$data['detail_periksa']=$this->daftarperiksa_model->detail_periksa($this->uri->segment(3));
	$this->load->view('v_popup_daftarperiksa',$data);
	}
	
	function baca($id=false)
	{
		$this->data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'daftarperiksa/baca_posting'
						);
		$this->load->model('Webmodel2');
		if($id){
			$this->data['baca'] = $this->Webmodel2->baca_posting($id);
		}
		else{
			$this->data['baca'] = 'Tidak ada data untuk ditampilkan';
		}
		$this->load->view('layout/wrapper',$this->data);
		//$this->load->view('daftar/baca_posting',$data);
	}
	
	function hapus($id=false)
	{
		$this->load->model('Webmodel2');
		if($id){
			$this->Webmodel->hapus_posting($id);
		}
		//setelah menghapus kembalikan ke halaman sebelumnya
		redirect(base_url().'index.php/home/posting');
	}
}
