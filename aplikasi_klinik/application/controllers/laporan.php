<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public $data = array(
                        'modul'         => 'laporan',
                        'breadcrumb'    => 'Laporan',
                        'pesan'         => '',
                        'pagination'    => '',
                        'tabel_data'    => '',
                        'main_view'     => 'laporan/laporan',
                        'form_action'   => '',
                        'form_value'    => '',
                        );

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('laporan_model', 'laporan', TRUE);
    }
	
	public function index()
	{
		//$this->session->unset_userdata('kode_dokter_sekarang', '');
       // $this->session->unset_userdata('nama_dokter_sekarang', '');
		//$this->session->unset_userdata('ttl_sekarang', '');
		//$this->session->unset_userdata('alamat_sekarang', '');
		//$this->session->unset_userdata('str_sekarang', '');
		//$this->session->unset_userdata('telp_sekarang', '');
		//$this->session->unset_userdata('jadwal_sekarang', '');
		 // Cari semua data pasien
        $laporan= $this->laporan->cari_semua();

        // data kelas ada, tampilkan
        if ($laporan)
        {
            // buat tabel
            $tabel = $this->laporan->buat_tabel($laporan);
            $this->data['tabel_data'] = $tabel;
            $this->load->view('template', $this->data);
        }
        // data kelas tidak ada
        else
        {
            $this->data['pesan'] = 'Tidak ada data dokter.';
            $this->load->view('template', $this->data);
        }
	}
	
	public function kosongkan(){
	$data=$this->db->truncate('data_periksa');
						
						return $data;
	
}

public function bulan()
	{
		
		 // Cari semua data pasien
        $laporan= $this->laporan->cari_bulan();

        // data kelas ada, tampilkan
        if ($laporan)
        {
            // buat tabel
            $tabel = $this->laporan->buat_tabel($laporan);
            $this->data['tabel_data'] = $tabel;
            $this->load->view('template', $this->data);
        }
        // data kelas tidak ada
        else
        {
            $this->data['pesan'] = 'Tidak ada data dokter.';
            $this->load->view('template', $this->data);
        }
	}

}