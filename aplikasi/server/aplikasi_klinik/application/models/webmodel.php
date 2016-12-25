  <?php

class Webmodel extends CI_Model {
	 public $db_tabel = 'data_pasien';

	public function __construct()
	{
        parent::__construct();
	}
	 public function cari_semua()
    {
        return $this->db->order_by('kode_pasien', 'ASC')
                        ->get($this->db_tabel)
                        ->result();
    }
	  public function buat_tabel($data)
    {
        $this->load->library('table');

        // buat class zebra di <tr>,untuk warna selang-seling
      //  $tmpl = array('row_alt_start'  => '<tr class="zebra">');
       // $this->table->set_template($tmpl);

        /// heading tabel
        $this->table->set_heading('No', 'Kode Pasien', 'Aksi');

        $no = 0;
        foreach ($data as $row)
        {
            $this->table->add_row(
                ++$no,
                $row->kode_pasien
                //$row->kelas,
               // anchor('kelas/edit/'.$row->kode_pasien,'Edit',array('class' => 'edit')).' '.
                //anchor('kelas/hapus/'.$row->kode_pasien,'Hapus',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin akan menghapus data ini?')"))
            );
        }
        $tabel = $this->table->generate();

        return $tabel;
    }
	/* Menampilkan posting */
	function list_posting()
	{
		$query = $this->db->query('select * from data_pasien order by kode_pasien desc limit 20');
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
	}
	
	/* manampilkan posting secara detail */
	function baca_posting($id)
	{
		$query = $this->db->query('select * from data_pasien where kode_pasien="'.$id.'"');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;
	}
	
	function hapus_posting($id)
	{
		$hapus = $this->db->query('delete from posting where PID="'.$id.'"');
	}
	
	///////////////////////////////////////
	public function detail($kode_pasien) {
	$this->db->where('kode_pasien',$kode_pasien);	
	$sql_query=$this->db->get($this->db_tabel);	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}
	
	public function detail_pasien($kode_pasien) {
	$this->db->where('kode_pasien',$kode_pasien);
	$sql_query=$this->db->select('data_pasien.kode_pasien,data_pasien.nama,data_pasien.umur,data_pasien.jenkel,data_pasien.alamat,data_pasien.telepon')
                        ->from($this->db_tabel)
						->get();	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}	
}
