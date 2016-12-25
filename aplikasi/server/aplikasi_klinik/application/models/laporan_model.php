<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    public $db_tabel = 'pembukuan, data_periksa';
	

	public function __construct()
	{
        parent::__construct();
	}
	public function cari_semua()
	{
           
		return $this->db->select('pembukuan.jumlah_pasien, pembukuan.tanggal, pembukuan.jumlah_injeksi,pembukuan.jumlah_nebu,pembukuan.jumlah_guladarah, pembukuan.jumlah_asamurat,pembukuan.jumlah_kolesterol,pembukuan.hargapasien_dokter, pembukuan.hargainjeksi_dokter, pembukuan.harganebu_dokter,pembukuan.hargaguladarah_dokter, pembukuan.hargaasamurat_dokter, pembukuan.hargakolesterol_dokter, pembukuan.hargatotal_dokter, pembukuan.hargapasien_petugas, pembukuan.harganebu_petugas, pembukuan.hargatotal_petugas, data_dokter.nama_dokter')
                        //->from($this->db_tabel)
                       	->where('data_dokter.kode_dokter = pembukuan.kode_dokter')
                       // ->limit($this->per_halaman, $this->offset)
                        ->group_by('tanggal')
						->get('pembukuan, data_dokter')
						->result();
	}
	/*public function cari_semua()
	{
		return $this->db->group_by('tanggal')
						->get($this->db_tabel)
						->result();
	}*/
	
	public function cari_bulan()
	{
           
		return $this->db->select('pembukuan2.jumlah_pasien, pembukuan2.tanggal, pembukuan2.jumlah_injeksi,pembukuan2.jumlah_nebu,pembukuan2.jumlah_guladarah, pembukuan2.jumlah_asamurat,pembukuan2.jumlah_kolesterol,pembukuan2.hargapasien_dokter, pembukuan2.hargainjeksi_dokter, pembukuan2.harganebu_dokter,pembukuan2.hargaguladarah_dokter, pembukuan2.hargaasamurat_dokter, pembukuan2.hargakolesterol_dokter, pembukuan2.hargatotal_dokter, pembukuan2.hargapasien_petugas, pembukuan2.harganebu_petugas, pembukuan2.hargatotal_petugas, data_dokter.nama_dokter')
                        //->from($this->db_tabel)
                       	->where('data_dokter.kode_dokter = pembukuan2.kode_dokter')
                       // ->limit($this->per_halaman, $this->offset)
                        ->group_by('tanggal')
						->get('pembukuan2, data_dokter')
						->result();
	}
	
	public function buat_tabel($data)
	{
		
            
		$this->load->library('table');
		$tmpl = array ('row_alt_start' => '<tr class="zebra">');
		$this->table->set_template($tmpl);
		
		$this->table->set_heading('No','Tanggal','Jumlah Pasien','Jumlah Injeksi','Jumlah Nebu','Jumlah Gula Darah','Jumlah Asam Urat','Jumlah Kolesterol','Biaya Dokter','Total Honor Dokter','Honor Petugas','Biaya Nebu','Total Honor Petugas','Nama Dokter','Aksi');
		//'Biaya Injeksi','Biaya Nebu','Biaya Gula Darah','Biaya Asam Urat','Biaya Kolesterol',
		$no=0;
		foreach ($data as $row)
		{
		$hari_array = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        $hr = date('w', strtotime($row->tanggal));
        $hari = $hari_array[$hr];
		$tgl = date('d-m-Y', strtotime($row->tanggal));
        $hr_tgl = "$tgl";
        
		$this->table->add_row(
		++$no,
		$tgl,
		$row->jumlah_pasien,
		$row->jumlah_injeksi,
		$row->jumlah_nebu,
		$row->jumlah_guladarah,
		$row->jumlah_asamurat,
		$row->jumlah_kolesterol,
		$row->hargapasien_dokter,
		//$row->hargainjeksi_dokter,
		//$row->harganebu_dokter,
		//$row->hargaguladarah_dokter,
		//$row->hargaasamurat_dokter,
		//$row->hargakolesterol_dokter,
		$row->hargatotal_dokter,
		$row->hargapasien_petugas,
		$row->harganebu_petugas,
		$row->hargatotal_petugas,
		$row->nama_dokter,
		anchor('popup_laporan/laporan/'.$row->tanggal,'Lihat',array('class'=>'lihat'))
	
		
         );
	}
	
	$tabel = $this->table->generate();
	return $tabel;
	}
	public function detail($tanggal) {
	$this->db->where('tanggal',$tanggal);	
	$sql_query=$this->db->get($this->db_tabel);	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}
	
	public function detail_laporan($tanggal) {
	$this->db->where('tanggal',$tanggal);
	$sql_query=$this->db->select('pembukuan.jumlah_pasien, pembukuan.tanggal, pembukuan.jumlah_injeksi,pembukuan.jumlah_nebu,pembukuan.jumlah_guladarah, pembukuan.jumlah_asamurat,pembukuan.jumlah_kolesterol,pembukuan.hargapasien_dokter, pembukuan.hargainjeksi_dokter, pembukuan.harganebu_dokter,pembukuan.hargaguladarah_dokter, pembukuan.hargaasamurat_dokter, pembukuan.hargakolesterol_dokter, pembukuan.hargatotal_dokter, pembukuan.hargapasien_petugas, pembukuan.harganebu_petugas, pembukuan.hargatotal_petugas, data_dokter.nama_dokter')
                        ->from('pembukuan,data_dokter')
						->where('data_dokter.kode_dokter = pembukuan.kode_dokter')
                      
					   	->get();
                   
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}	
	
	public function kosongkan(){
	$data=$this->db->truncate('data_periksa');
						
						return $data;
						
	return $data;
	}
}