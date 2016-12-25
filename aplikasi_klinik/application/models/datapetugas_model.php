<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datapetugas_model extends CI_Model {

    public $db_tabel = 'data_petugas';

	public function __construct()
	{
        parent::__construct();
	}
	
	public function cari_semua()
	{
		return $this->db->order_by('kode_petugas','ASC')
						->get($this->db_tabel)
						->result();
	}
	
	public function buat_tabel($data)
	{
		
		$this->load->library('table');
		$tmpl = array ('row_alt_start' => '<tr class="zebra">');
		$this->table->set_template($tmpl);
		
		$this->table->set_heading('No','Kode','Nama','Tempat/tanggal lahir','Alamat','No Telepon','No STR','Jabatan','Status','Aksi');
		$no=0;
		foreach ($data as $row)
		{
		$this->table->add_row(
		++$no,
		$row->kode_petugas,
		$row->nama,
		$row->ttl,
		$row->alamat,
		$row->telepon,
		$row->strttk,
		$row->jabatan,
		$row->status,

		anchor ('datapetugas/edit/'.$row->kode_petugas,'Edit',array ('class'=>'edit'))
		
         );
	}
	
	$tabel = $this->table->generate();
	return $tabel;
	}
	public function load_form_rules_tambah()
    {
        $form_rules = array(
            /*array(
                'field' => 'kode_petugas',
                'label' => 'Kode petugas',
                'rules' => "required|numeric|exact_length[6]|is_unique[$this->db_tabel.kode_pasien]"
            ),*/
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => "required|max_length[25]|[$this->db_tabel.nama]"
            ),
			 array(
                'field' => 'ttl',
                'label' => 'Tempat/ tanggal lahir',
                'rules' => "required|max_length[40]|[$this->db_tabel.ttl]"
            ),
			 array(
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => "required|max_length[100]|[$this->db_tabel.alamat]"
            ),
			array(
                'field' => 'telepon',
                'label' => 'No Telepon',
                'rules' => "required|max_length[12]|[$this->db_tabel.telepon]"
            ),
			array(
                'field' => 'strttk',
                'label' => 'No STRTTK',
                'rules' => "required|max_length[30]|[$this->db_tabel.strttk]"
            ),
			array(
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => "required|max_length[20]|[$this->db_tabel.jabatan]"
            ),
			
			array(
               'field' => 'status',
               'label' => 'Status',
               'rules' => "required|callback_is_status_exist"
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
        $datapetugas = array(
                      //'kode_petugas' => $this->input->post('kode_petugas'),
                      'nama' => $this->input->post('nama'),
					  'ttl' => $this->input->post('ttl'),
                      'alamat' => $this->input->post('alamat'),
					  'telepon' => $this->input->post('telepon'),
					  'strttk' => $this->input->post('strttk'),
					  'jabatan' => $this->input->post('jabatan'),
					  'status'=>$this->input->post('status')
					  );
        $this->db->insert($this->db_tabel, $datapetugas);

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
	 public function cari($kode_petugas)
    {
        return $this->db->where('kode_petugas', $kode_petugas)
                        ->limit(1)
                        ->get($this->db_tabel)
                        ->row();
    }
	//FORM RULES
	public function load_form_rules_edit()
    {
        $form_rules = array(
            /*array(
                'field' => 'kode_petugas',
                'label' => 'Kode petugas',
                'rules' => "required|numeric|exact_length[6]|callback_is_kode_petugas_exist"
            ),*/
            array(
               'field' => 'nama',
                'label' => 'Nama',
                'rules' => "required|max_length[25]|callback_is_nama_exist"
            ),
			 array(
               'field' => 'ttl',
               'label' => 'Tempat/ tanggal lahir',
               'rules' => "required|max_length[40]|callback_is_ttl_exist"
            ),
			 array(
               'field' => 'alamat',
               'label' => 'Alamat',
               'rules' => "required|max_length[100]|callback_is_alamat_exist"
            ),
			array(
               'field' => 'telepon',
               'label' => 'Telepon',
               'rules' => "required|max_length[12]|callback_is_telepon_exist"
			),
			 array(
               'field' => 'strttk',
               'label' => 'No STRTTK',
               'rules' => "required|max_length[30]|callback_is_strttk_exist"
            ),
			array(
               'field' => 'jabatan',
               'label' => 'Jabatan',
               'rules' => "required|max_length[20]|callback_is_jabatan_exist"
            ),
			
			array(
               'field' => 'status',
               'label' => 'Status',
               'rules' => "required|callback_is_status_exist"
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
        $datapetugas = array(
            //'kode_petugas'=>$this->input->post('kode_petugas'),
            'nama'=>$this->input->post('nama'),
			'ttl'=>$this->input->post('ttl'),
            'alamat'=>$this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'strttk'=>$this->input->post('strttk'),
			'jabatan'=>$this->input->post('jabatan'),
			'status'=>$this->input->post('status')
        );

        // update db
        $this->db->where('nama', $nama);
		$this->db->update($this->db_tabel, $datapetugas);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
		
}