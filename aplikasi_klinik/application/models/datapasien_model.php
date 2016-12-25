<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datapasien_model extends CI_Model {

    public $db_tabel = 'data_pasien';

	public function __construct()
	{
        parent::__construct();
	}
	
	public function cari_pasien()
	{
		return $this->db->order_by('nama','kode_pasien')
						->get($this->db_tabel)
						->result();
	}
	public function cari_semua()
	{
		return $this->db->order_by('kode_pasien','ASC')
						->get($this->db_tabel)
						->result();
	}
	
	public function buat_tabel($data)
	{
		
		$this->load->library('table');
		$tmpl = array ('row_alt_start' => '<tr class="zebra">');
		$this->table->set_template($tmpl);
		
		$this->table->set_heading('No','Kode','Nama','Umur','Jenis Kelamin','Alamat','No Telepon','Aksi');
		$no=0;
		foreach ($data as $row)
		{
		$this->table->add_row(
		++$no,
		$row->kode_pasien,
		$row->nama,
		$row->umur,
		$row->jenkel,
		$row->alamat,
		$row->telepon,
		anchor ('datapasien/edit/'.$row->kode_pasien,'Edit',array ('class'=>'edit')).' '.
		anchor ('popup_kartupasien/kartu_pasien/'.$row->kode_pasien,'Lihat',array ('class'=>'lihat'))
         );
	}
	
	$tabel = $this->table->generate();
	return $tabel;
	}
	public function load_form_rules_tambah()
    {
        $form_rules = array(
            /*array(
                'field' => 'kode_pasien',
                'label' => 'Kode Pasien',
                'rules' => "required|numeric|exact_length[6]|is_unique[$this->db_tabel.kode_pasien]"
            ),*/
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => "required|max_length[25]|[$this->db_tabel.nama]"
            ),
			 array(
                'field' => 'umur',
                'label' => 'Umur',
                'rules' => "required|max_length[4]|[$this->db_tabel.umur]"
            ),
			array(
                'field' => 'jenkel',
                'label' => 'Jenis Kelamin',
                'rules' => "required|[$this->db_tabel.jenkel]"
            ),
			 array(
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => "required|max_length[50]|[$this->db_tabel.alamat]"
            ),
			array(
                'field' => 'telepon',
                'label' => 'No Telepon',
                'rules' => "required|max_length[12]|[$this->db_tabel.telepon]"
            ),
        );
        return $form_rules;
    }
	public function validasi_tambah()
    {
        $form = $this->load_form_rules_tambah();
        $this->form_validation->set_rules($form);

        if ($this->form_validation->run())
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function tambah()
    {
        $datapasien = array(
                      //'kode_pasien' => $this->input->post('kode_pasien'),
                      'nama' => $this->input->post('nama'),
					  'umur' => $this->input->post('umur'),
					  'jenkel' => $this->input->post('jenkel'),
                      'alamat' => $this->input->post('alamat'),
					  'telepon' => $this->input->post('telepon'),
					  );
        $this->db->insert($this->db_tabel, $datapasien);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
		
    }
	//CARI
	 public function cari($kode_pasien)
    {
        return $this->db->where('kode_pasien', $kode_pasien)
                        ->limit(1)
                        ->get($this->db_tabel)
                        ->row();
    }
	//FORM RULES
	public function load_form_rules_edit()
    {
        $form_rules = array(
            /*array(
                'field' => 'kode_pasien',
                'label' => 'Kode Pasien',
                'rules' => "required|numeric|exact_length[6]|callback_is_kode_pasien_exist"
            ),*/
            array(
               'field' => 'nama',
                'label' => 'Nama',
                'rules' => "required|max_length[25]|callback_is_nama_exist"
            ),
			 array(
               'field' => 'umur',
               'label' => 'Umur',
               'rules' => "required|max_length[4]|callback_is_umur_exist"
			   ),
			 array(
               'field' => 'jenkel',
               'label' => 'Jenis Kelamin',
               'rules' => "required|callback_is_jenkel_exist"
            ),
			 array(
               'field' => 'alamat',
               'label' => 'Alamat',
               'rules' => "required|max_length[50]|callback_is_alamat_exist"
            ),
			 array(
               'field' => 'telepon',
               'label' => 'Telepon',
               'rules' => "required|max_length[12]|callback_is_telepon_exist"
			),
        );
        return $form_rules;
    }

	//VALIDASI EDIT
	public function validasi_edit()
    {
        $form = $this->load_form_rules_edit();
        $this->form_validation->set_rules($form);

        if ($this->form_validation->run())
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	//EDIT
	 public function edit($nama)
    {
        $datapasien = array(
            //'kode_pasien'=>$this->input->post('kode_pasien'),
            'nama'=>$this->input->post('nama'),
			'umur'=>$this->input->post('umur'),
			'jenkel' => $this->input->post('jenkel'),
            'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
        );
		

        // update db
        $this->db->where('nama', $nama);
		$this->db->update($this->db_tabel, $datapasien);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
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