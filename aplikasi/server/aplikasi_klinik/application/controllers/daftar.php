<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Daftar extends CI_Controller {
	public function index() {
	
		
		$data=array ('title'=>'Klinik Tanimulya Medika',
					 'isi' =>'daftar/index_daftar'
						);
		$this->load->view('layout/wrapper',$data);
	}
	public function simpan(){
		$nama=$_POST['nama'];
		$umur=$_POST['umur'];
		$jenkel=$_POST['jenkel'];
		$alamat=$_POST['alamat'];
		$telepon=$_POST['telepon'];
		$this->data_simpan=array (
							'nama'=>$nama,
							'umur'=>$umur,
							'jenkel'=>$jenkel,
							'alamat'=>$alamat,
							'telepon'=>$telepon);
		$res = $this->pendaftaran_model->tambah_data('data_pasien',$this->data_simpan);
		if($res>=1) {
			/*$data=array ('title'=>'Klinik Tanimulya Medika',
							 'isi' =>'daftar/posting'
								);
		$cetak= $this->load->view('layout/wrapper',$data);*/
		//$urut=$this->mymode
		//MsgBox('anda nomor urut ke-'.$urut);
		
			redirect('daftar_cetak'); 
			}
	else {
		echo "<h2>Tambah Data Gagal</h2>";}
	}
	function posting()
	{
		$this->load->model('Webmodel');
		$this->data['posting'] = $this->Webmodel->list_posting();
		$this->load->view('daftar/posting',$this->data);
	}
	
	function baca($id=false)
	{
		$this->load->model('Webmodel');
		if($id){
			$data['baca'] = $this->Webmodel->baca_posting($id);
		}
		else{
			$data['baca'] = 'Tidak ada data untuk ditampilkan';
		}
		$this->load->view('daftar/baca_posting',$data);
	}
	
	function hapus($id=false)
	{
		$this->load->model('Webmodel');
		if($id){
			$this->Webmodel->hapus_posting($id);
		}
		//setelah menghapus kembalikan ke halaman sebelumnya
		redirect(base_url().'index.php/home/posting');
	}
}
