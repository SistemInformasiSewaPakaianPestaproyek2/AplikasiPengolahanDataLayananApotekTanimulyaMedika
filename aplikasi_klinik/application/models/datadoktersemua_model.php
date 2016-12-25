<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datadoktersemua_model extends CI_Model {

    public $db_tabel = 'data_dokter';
	public $jabatan='Dokter Umum';

	public function __construct()
	{
        parent::__construct();
	}
	
	public function cari_semua()
	{
		return $this->db->order_by('kode_dokter','ASC')
						->get($this->db_tabel)
						->result();
	
	}
	
	public function buat_tabel($data)
	{
		
		$this->load->library('table');
		$tmpl = array ('row_alt_start' => '<tr class="zebra">');
		$this->table->set_template($tmpl);
		
		$this->table->set_heading('No','Kode','Nama','Tempat/tanggal lahir','Alamat','No STR','No Telepon','Jabatan','Jadwal','Status','Aksi');
		$no=0;
		foreach ($data as $row)
		{
		$this->table->add_row(
		++$no,
		$row->kode_dokter,
		$row->nama_dokter,
		$row->ttl,
		$row->alamat,
		$row->str,
		$row->telp,
		$row->jabatan,
		$row->jadwal,
		$row->status,
		anchor ('datadokter/edit/'.$row->kode_dokter,'Edit',array ('class'=>'edit'))
		//anchor('datadokter/hapus/'.$row->kode_dokter,'Hapus',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin akan menghapus data ini?')"))
		
         );
	}
	
	$tabel = $this->table->generate();
	return $tabel;
	}
	public function load_form_rules_tambah()
    {
        $form_rules = array(
            /*array(
                'field' => 'kode_dokter',
                'label' => 'Kode Dokter',
                'rules' => "required|numeric|exact_length[6]|is_unique[$this->db_tabel.kode_pasien]"
            ),*/
            array(
                'field' => 'nama_dokter',
                'label' => 'Nama',
                'rules' => "required|max_length[25]|[$this->db_tabel.nama_dokter]"
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
                'field' => 'str',
                'label' => 'No STR',
                'rules' => "required|max_length[30]|[$this->db_tabel.str]"
            ),
			array(
                'field' => 'telp',
                'label' => 'No Telepon',
                'rules' => "required|max_length[30]|[$this->db_tabel.telp]"
            ),
			array(
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => "required|[$this->db_tabel.jabatan]"
            ),
			array(
                'field' => 'jadwal',
                'label' => 'Jadwal',
                'rules' => "required|[$this->db_tabel.jadwal]"
            ),
			
			//STATUS
			
			array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => "required|[$this->db_tabel.status]"
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
        $datadokter = array(
                      //'kode_dokter' => $this->input->post('kode_dokter'),
                      'nama_dokter' => $this->input->post('nama_dokter'),
					  'ttl' => $this->input->post('ttl'),
                      'alamat' => $this->input->post('alamat'),
					  'str' => $this->input->post('str'),
					  'telp' => $this->input->post('telp'),
					  'jabatan' => $this->input->post('jabatan'),
					  'jadwal' => $this->input->post('jadwal'),
					  'status' => $this->input->post('status'),
					  );
        $this->db->insert($this->db_tabel, $datadokter);

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
	 public function cari($kode_dokter)
    {
        return $this->db->where('kode_dokter', $kode_dokter)
                        ->limit(1)
                        ->get($this->db_tabel)
                        ->row();
    }
	//FORM RULES
	public function load_form_rules_edit()
    {
        $form_rules = array(
            /*array(
                'field' => 'kode_dokter',
                'label' => 'Kode Dokter',
                'rules' => "required|numeric|exact_length[6]|callback_is_kode_dokter_exist"
            ),*/
            array(
               'field' => 'nama_dokter',
                'label' => 'Nama',
                'rules' => "required|max_length[25]|callback_is_nama_dokter_exist"
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
               'field' => 'str',
               'label' => 'No STR',
               'rules' => "required|max_length[30]|callback_is_str_exist"
            ),
			array(
               'field' => 'telp',
               'label' => 'No Telepon',
               'rules' => "required|max_length[12]|callback_is_telp_exist"
            ),
			array(
               'field' => 'jabatan',
               'label' => 'Jabatan',
               'rules' => "required|callback_is_telp_exist"
            ),
			array(
               'field' => 'jadwal',
               'label' => 'Jadwal',
               'rules' => "required|max_length[20]|callback_is_jadwal_exist"
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
	 public function edit($nama_dokter)
    {
        $datadokter = array(
            //'kode_dokter'=>$this->input->post('kode_dokter'),
            'nama_dokter'=>$this->input->post('nama_dokter'),
			'ttl'=>$this->input->post('ttl'),
            'alamat'=>$this->input->post('alamat'),
			'str'=>$this->input->post('str'),
			'telp'=>$this->input->post('telp'),
			'jabatan'=>$this->input->post('jabatan'),
			'jadwal'=>$this->input->post('jadwal'),
			'status'=>$this->input->post('status'),
        );

        // update db
        $this->db->where('nama_dokter', $nama_dokter);
		$this->db->update($this->db_tabel, $datadokter);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	public function hapus($kode_dokter)
    {
        $this->db->where('kode_dokter', $kode_dokter)->delete($this->db_tabel);

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