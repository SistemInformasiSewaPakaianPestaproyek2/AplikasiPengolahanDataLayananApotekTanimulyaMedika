<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rujukan_model extends CI_Model {

    public $db_tabel    = 'rujukan';
    public $per_halaman = 10;
    public $offset      = 0;

    // rules form validasi, proses TAMBAH
    private function load_form_rules_tambah()
    {
        $form = array(
                       /*array(
                            'field' => 'kode_rujukan',
                            'label' => 'Kode Rujukan',
                            'rules' => "required|exact_length[6]|numeric|is_unique[$this->db_tabel.kode_rujukan]"
                        ),*/
                        array(
                            'field' => 'tanggal',
                            'label' => 'Tanggal',
                            'rules' => 'required|callback_is_format_tanggal'
                        ),
						  array(
                            'field' => 'kepada',
                            'label' => 'Kepada',
                            'rules' => 'required'
                        ),
						  array(
                            'field' => 'kode_pasien',
                            'label' => 'Kode Pasien',
                            'rules' => 'required'
						 
                        ),
						  array(
                            'field' => 'keluhan',
                            'label' => 'Keluhan',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'sudahbelum',
                            'label' => 'Diberi Obat',
                            'rules' => 'required'
                        ),
						array(
                            'field' => 'kode_dokter',
                            'label' => 'Kode Dokter',
                            'rules' => 'required'
                        ),
           
        );
        return $form;
    }

    // rules form validasi, proses EDIT
    private function load_form_rules_edit()
    {
        $form = array(
                       /* array(
                            'field' => 'kode_rujukan',
                            'label' => 'Kode Rujukan',
                            'rules' => "required|exact_length[6]|numeric|is_unique[$this->db_tabel.kode_rujukan]"
                        ),*/
                        array(
                            'field' => 'tanggal',
                            'label' => 'Tanggal',
                            'rules' => "required|callback_is_tanggal_exist"
                        ),
						  array(
                            'field' => 'kepada',
                            'label' => 'Kepada',
                            'rules' => "required|callback_is_kepada_exist"
                        ),
						  array(
                            'field' => 'kode_pasien',
                            'label' => 'Kode Pasien',
                            'rules' => "required|callback_is_kode_pasien_exist"
                        ),
						  array(
                            'field' => 'keluhan',
                            'label' => 'Keluhan',
                            'rules' => "required|callback_is_keluhan_exist"
                        ),
                         array(
                            'field' => 'sudahbelum',
                            'label' => 'Diberi Obat',
                            'rules' => "required|callback_is_sudahbelum_exist"
                        ),
						array(
                            'field' => 'kode_dokter',
                            'label' => 'Kode Dokter',
                            'rules' => "required|callback_is_kode_dokter_exist"
                        ),
           
        );
        return $form;
    }

    // jalankan proses validasi, untuk operasi TAMBAH
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

    // jalankan proses validasi, untuk operasi EDIT
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

    public function cari_semua($offset)
	{
             
		if (is_null($offset) || empty($offset))
        {
            $this->offset = 0;
        }
        else
        {
            $this->offset = ($offset * $this->per_halaman) - $this->per_halaman;
        }		
        // $offset end

        return $this->db->select('rujukan.kode_rujukan,rujukan.tanggal,rujukan.kepada,rujukan.keluhan,rujukan.sudahbelum,data_pasien.kode_pasien,data_pasien.nama,data_pasien.umur,data_pasien.alamat,data_dokter.nama_dokter')
                        ->from($this->db_tabel)
                        ->join('data_pasien', 'data_pasien.kode_pasien = rujukan.kode_pasien')
						->join('data_dokter', 'data_dokter.kode_dokter = rujukan.kode_dokter')
                        //->limit($this->per_halaman, $this->offset)
                        ->order_by('kode_rujukan', 'ASC')
                        ->get()
                        ->result();
	}

    public function cari($kode_rujukan)
    {
        return $this->db->where('kode_rujukan', $kode_rujukan)
            ->limit(1)
            ->get($this->db_tabel)
            ->row();
    }

    public function buat_tabel($data)
    {
        $this->load->library('table');

        $tmpl = array('row_alt_start'  => '<tr class="zebra">');
        $this->table->set_template($tmpl);

        // heading tabel
        $this->table->set_heading('No', 'Kode Rujukan', 'Tanggal', 'Alamat Tujuan', 'Nama','Umur','Alamat','Keluhan','Diberi Obat','Nama Dokter','Aksi');

        // no urut data
        $no = 0 + $this->offset;
		
		

        foreach ($data as $row)
        {
			
            $hari_array = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
            $hr = date('w', strtotime($row->tanggal));
            $hari = $hari_array[$hr];
            $tgl = date('d-m-Y', strtotime($row->tanggal));
            $hr_tgl = "$hari, $tgl";
			
            $this->table->add_row(
                ++$no,
                $row->kode_rujukan,
                $tgl,
                $row->kepada,
				$row->nama,
				$row->umur,
				$row->alamat,
				$row->keluhan,
				$row->sudahbelum,
				$row->nama_dokter,
                anchor('rujukan/edit/'.$row->kode_rujukan,'Edit',array('class' => 'edit')).' '.
				anchor('popup/surat_rujukan/'.$row->kode_rujukan,'Lihat',array('class' => 'lihat'))
               // anchor('rujukan/hapus/'.$row->kode_rujukan,'Hapus',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin akan menghapus data ini?')"))
            );
        }
        $tabel = $this->table->generate();

        return $tabel;
    }

    public function paging($base_url)
    {
        $this->load->library('pagination');
        $config = array(
            'base_url'         => $base_url,
            'total_rows'       => $this->hitung_semua(),
            'per_page'         => $this->per_halaman,
            'num_links'        => 4,			
			'use_page_numbers' => TRUE,
            'first_link'       => '&#124;&lt; First',
            'last_link'        => 'Last &gt;&#124;',
            'next_link'        => 'Next &gt;',
            'prev_link'        => '&lt; Prev',
        );
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }

    public function hitung_semua()
    {
        return $this->db->count_all($this->db_tabel);
    }

    public function tambah()
    {
        $rujukan = array(
            'kode_rujukan' => $this->input->post('kode_rujukan'),
			'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
			'kepada' => $this->input->post('kepada'),
			'kode_pasien' => $this->input->post('kode_pasien'),
			'keluhan' => $this->input->post('keluhan'),
			'sudahbelum' => $this->input->post('sudahbelum'),
            'kode_dokter' => $this->input->post('kode_dokter')
        );
        $this->db->insert($this->db_tabel, $rujukan);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

   public function edit($kode_rujukan)
    {
        $rujukan = array(
           // 'kode_rujukan' => $this->input->post('kode_rujukan'),
			'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
			'kepada' => $this->input->post('kepada'),
			'kode_pasien' => $this->input->post('kode_pasien'),
			'keluhan' => $this->input->post('keluhan'),
			'sudahbelum' => $this->input->post('sudahbelum'),
            'kode_dokter' => $this->input->post('kode_dokter')
        );

        // update db
        $this->db->where('kode_rujukan', $kode_rujukan);
        $this->db->update($this->db_tabel, $rujukan);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function detail($kode_rujukan) {
	$this->db->where('kode_rujukan',$kode_rujukan);	
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
	public function detail_rujukan($kode_rujukan) {
	$this->db->where('kode_rujukan',$kode_rujukan);
	$sql_query=$this->db->select('rujukan.kode_rujukan, rujukan.tanggal,rujukan.keluhan,rujukan.sudahbelum,rujukan.kepada,data_pasien.kode_pasien,data_pasien.nama,data_pasien.umur,data_pasien.alamat,data_dokter.nama_dokter')
                        ->from($this->db_tabel)
                        ->join('data_pasien', 'data_pasien.kode_pasien = rujukan.kode_pasien')
						->join('data_dokter', 'data_dokter.kode_dokter = rujukan.kode_dokter')
						->get();	
			if($sql_query->num_rows()==1){
				return $sql_query->row_array();
			}
	}	
    public function hapus($kode_rujukan)
    {
        $this->db->where('kode_rujukan', $kode_rujukan)->delete($this->db_tabel);

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
