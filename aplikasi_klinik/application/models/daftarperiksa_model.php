<?php
class Daftarperiksa_model extends CI_Model {

    public $db_tabel    = 'data_periksa';
    public $per_halaman = 10;
    public $offset      = 0;

    private function load_form_rules_tambah()
    {
        $form = array(
            array(
                'field' => 'kode_pasien',
                'label' => 'Kode Pasien',
                'rules' => 'required|exact_length[6]|callback_is_kode_pasien_exist'
            ),
            array(
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required|callback_is_format_tanggal|callback_is_double_entry_tambah'
            ),
         );
        return $form;
    }

    /*private function load_form_rules_edit()
    {
        $form = array(
            array(
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required|exact_length[4]|callback_is_siswa_exist'
            ),
            array(
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required|callback_is_format_tanggal|callback_is_double_entry_edit'
            ),
            array(
                'field' => 'absen',
                'label' => 'Absen',
                'rules' => 'required'
            ),
        );
        return $form;
    }*/

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

    /*public function validasi_edit()
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
    }*/

	public function cari_semua()
	{
       	return $this->db->select('data_periksa.kode_periksa,
		                          data_pasien.kode_pasien
		                          ')
                        ->from('data_periksa,
                                data_pasien
                                ')
                        ->where('data_periksa.kode_pasien = data_pasien.kode_pasien')
                        ->order_by('tanggal', 'desc')
                        ->get()
                        ->result();
	}

    public function cari($kode_periksa)
    {
        return $this->db->where('kode_periksa', $kode_periksa)
            ->limit(1)
            ->get($this->db_tabel)
            ->row();
    }
	public function hapus($tanggal){
	$where = array('tanggal' => $tanggal('curdate(),tanggal')>1);
	$res= $this->mymodel->DeleteData('data_periksa',$where);
	if($res>=1){
		redirect('daftarperiksa');}
	}

 

    public function tambah()
    {
        // cek semester yang sedang aktif
       // $smt = $this->semester->cari_semester_aktif();
       // $id_semester = $smt->id_semester;

        $daftarperiksa = array(
            'kode_pasien' => $this->input->post('kode_pasien'),
           // 'id_semester' => $id_semester,
            'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
            //'absen' => $this->input->post('absen')
        );
        $this->db->insert($this->db_tabel, $daftarperiksa);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	public function detail($kode_periksa) {
	$this->db->where('kode_periksa',$kode_periksa);	
	$sql_query=$this->db->get($this->db_tabel);	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}
	/*public function detail_rujukan($kode_rujukan) {
	$this->db->where('kode_rujukan',$kode_rujukan);
	$sql_query=$this->db->get($this->db_tabel);	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}	*/
	public function detail_periksa($kode_periksa) {
	$this->db->where('kode_periksa',$kode_periksa);
	$sql_query=$this->db->select('data_periksa.kode_periksa, data_periksa.tanggal,data_pasien.nama,data_periksa.kode_pasien')
                        ->from($this->db_tabel)
                        ->join('data_pasien', 'data_pasien.kode_pasien = data_periksa.kode_pasien')
						->get();	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}	


}
