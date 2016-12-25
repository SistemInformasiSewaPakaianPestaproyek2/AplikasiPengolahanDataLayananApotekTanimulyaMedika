<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rujukan extends CI_Controller
{
    public $data = array(
                        'modul'         => 'rujukan',
                        'breadcrumb'    => 'Rujukan',
                        'pesan'         => '',
                        'pagination'    => '',
                        'tabel_data'    => '',
                        'main_view'     => 'rujukan/rujukan',
                        'form_action'   => '',
                        'form_value'    => '',
                        'option_datapasien'  => '',
						'option_datadokter'  => '',
                         );

 public function __construct()
	{
		parent::__construct();		
		$this->load->model('Rujukan_model', 'rujukan', TRUE);
		$this->load->model('Datapasien_model', 'datapasien', TRUE);
		$this->load->model('Datadoktersemua_model', 'datadokter', TRUE);
		
	}
	
	 public function index($offset = 0)
	{
        // hapus data temporary proses update
        $this->session->unset_userdata('kode_rujukan_sekarang', '');

        // cari data 
        $rujukan = $this->rujukan->cari_semua($offset);

        
        if ($rujukan)
        {
            $tabel = $this->rujukan->buat_tabel($rujukan);
            $this->data['tabel_data'] = $tabel;

            
            $this->data['pagination'] = $this->rujukan->paging(site_url('rujukan/halaman'));
        }
        // tidak ada data 
        else
        {
            $this->data['pesan'] = 'Tidak ada data rujukan.';
        }
        $this->load->view('templated', $this->data);
	}
	
	public function tambah()
    {
        $this->data['breadcrumb']  = 'Rujukan > Tambah';
        $this->data['main_view']   = 'rujukan/rujukan_form';
        $this->data['form_action'] = 'rujukan/tambah';

        
        $kode_pasien = $this->datapasien->cari_semua();
        if($kode_pasien)
        {
            foreach($kode_pasien as $row)
            {
                $this->data['option_datapasien'][$row->kode_pasien] = $row->kode_pasien;
            }
        }
		
		 else
        {
            $this->data['option_datapasien']['00'] = '-';
            $this->data['pesan'] = 'Data pasien tidak tersedia. Silahkan isi dahulu data pasien.';
            //$this->load->view('templated', $this->data);
        }
		
		 $kode_dokter = $this->datadokter->cari_semua();

        // data ada
        if($kode_dokter)
        {
            foreach($kode_dokter as $row)
            {
                $this->data['option_datadokter'][$row->kode_dokter] = $row->nama_dokter;
            }
        }
		
		else
        {
            $this->data['option_datadokter']['00'] = '-';
            $this->data['pesan'] = 'Data Dokter tidak tersedia. Silahkan isi dahulu data dokter';
            //$this->load->view('template', $this->data);
        }
		
		// if submit
        if($this->input->post('submit'))
        {
            // validasi sukses
            if($this->rujukan->validasi_tambah())
            {
                if($this->rujukan->tambah())
                {
                    $this->session->set_flashdata('pesan', 'Proses tambah data berhasil.');
                    redirect('rujukan');
                }
                else
                {
                    $this->data['pesan'] = 'Proses tambah data gagal.';
                    $this->load->view('templated', $this->data);
                }
            }
			
			else
            {
                $this->load->view('templated', $this->data);
            }
        }

		else
        {
            $this->load->view('templated', $this->data);
        }
    }
	
	public function edit($kode_rujukan = NULL)
    {
        $this->data['breadcrumb']  = 'Rujukan > Edit';
        $this->data['main_view']   = 'rujukan/rujukan_form';
        $this->data['form_action'] = 'rujukan/edit/' . $kode_rujukan;

        
        $kode_pasien = $this->datapasien->cari_semua();
        foreach($kode_pasien as $row)
        {
            $this->data['option_datapasien'][$row->kode_pasien] = $row->kode_pasien;
        }
		
		$kode_dokter = $this->datadokter->cari_semua();
		
        foreach($kode_dokter as $row)
        {
            $this->data['option_datadokter'][$row->kode_dokter] = $row->nama_dokter;
        }

        
        if( ! empty($kode_rujukan))
        {
            // submit
            if($this->input->post('submit'))
            {
                // validasi berhasil
                if($this->rujukan->validasi_edit() === TRUE)
                {
                    //update db
                    $this->rujukan->edit($this->session->userdata('kode_rujukan_sekarang'));
					//$this->rujukan->edit($this->session->userdata('tanggal_sekarang'));
					//$this->rujukan->edit($this->session->userdata('kepada_sekarang'));
					//$this->rujukan->edit($this->session->userdata('kode_pasien_sekarang'));
					//$this->rujukan->edit($this->session->userdata('keluhan_sekarang'));
					//$this->rujukan->edit($this->session->userdata('sudahbelum_sekarang'));
					//$this->rujukan->edit($this->session->userdata('kode_dokter_sekarang'));
					
                    $this->session->set_flashdata('pesan', 'Proses update data telah berhasil');

                    redirect('rujukan');
                }
                // validasi gagal
                else
                {
                    $this->load->view('templated', $this->data);
                }

            }
            // tidak disubmit, form pertama kali dimuat
            else
            {
                // ambil data dari database, $form_value sebagai nilai default form
                $rujukan = $this->rujukan->cari($kode_rujukan);
                foreach($rujukan as $key => $value)
                {
                    $this->data['form_value'][$key] = $value;
                }

                // set temporary data untuk edit
                $this->session->set_userdata('kode_rujukan_sekarang', $rujukan->kode_rujukan);

                $this->load->view('templated', $this->data);
            }
        }
        // tidak ada parameter $nis di URL, kembalikan ke halaman siswa
        else
        {
            redirect('rujukan');
        }
    }
	
	function is_kode_rujukan_exist()
    {
        $kode_rujukan_sekarang 	= $this->session->userdata('kode_rujukan_sekarang');
        $kode_rujukan_baru		= $this->input->post('kode_rujukan');

    
        if ($kode_rujukan_baru === $kode_rujukan_sekarang)
        {
            return TRUE;
        }
        
        else
        {
            // cek database untuk kode_rujukan yang sama
            $query = $this->db->get_where('rujukan', array('kode_rujukan' => $kode_rujukan_baru));

            // sudah dipakai
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_kode_rujukan_exist',
                                                    "Rujukan dengan kode $kode_rujukan_baru sudah terdaftar");
                return FALSE;
            }
            // kode_pasien belum dipakai, OK
            else
            {
                return TRUE;
            }
        }
    }
	
	function is_tanggal_exist()
    {
        $tanggal_sekarang 	= $this->session->userdata('tanggal_sekarang');
        $tanggal_baru		= $this->input->post('tanggal');

    
        if ($tanggal_baru === $tanggal_sekarang)
        {
            return TRUE;
        }
        
	}
	
	function is_kepada_exist()
    {
        $kepada_sekarang 	= $this->session->userdata('kepada_sekarang');
        $kepada_baru		= $this->input->post('kepada');

    
        if ($kepada_baru === $kepada_sekarang)
        {
            return TRUE;
        }
        
	}
	
	/*function is_nama_exist()
    {
        $nama_sekarang 	= $this->session->userdata('nama_sekarang');
        $nama_baru		= $this->input->post('nama');

    
        if ($kode_kepada_baru === $kode_kepada_sekarang)
        {
            return TRUE;
        }
        
	}*/
	
	function is_kode_pasien_exist()
    {
        $kode_pasien_sekarang 	= $this->session->userdata('kode_pasien_sekarang');
        $kode_pasien_baru		= $this->input->post('kode_pasien');

    
        if ($kode_pasien_baru === $kode_pasien_sekarang)
        {
            return TRUE;
        }
        
	}
	
	function is_keluhan_exist()
    {
        $keluhan_sekarang 	= $this->session->userdata('keluhan_sekarang');
        $keluhan_baru		= $this->input->post('keluhan');

    
        if ($keluhan_baru === $keluhan_sekarang)
        {
            return TRUE;
        }
        
	}
	
	
	function is_sudahbelum_exist()
    {
        $sudahbelum_sekarang 	= $this->session->userdata('sudahbelum_sekarang');
        $sudahbelum_baru		= $this->input->post('sudahbelum');

    
        if ($sudahbelum_baru === $sudahbelum_sekarang)
        {
            return TRUE;
        }
        
	}
	
	function is_kode_dokter_exist()
    {
        $kode_dokter_sekarang 	= $this->session->userdata('kode_dokter_sekarang');
        $kode_dokter_baru		= $this->input->post('kode_dokter');

    
        if ($kode_dokter_baru === $kode_dokter_sekarang)
        {
            return TRUE;
        }
        
	}
	
	public function is_format_tanggal($str)
    {
        if( ! preg_match('/(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-([0-9]{4})/', $str))
        {
            $this->form_validation->set_message('is_format_tanggal', 'Format tanggal tidak valid. (dd-mm-yyyy)');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
	
	//DOUBLE ENTRY
	public function is_double_entry_tambah()
	{
		$kode_pasien = $this->input->post('kode_pasien');
		$tanggal = date('Y-m-d',strtotime($this->input->post('tanggal')));
		$kepada = $this->input->post('kepada');
		$keluhan = $this->input->post('keluhan');
		$kode_dokter  = $this->input->post('kode_dokter');
		
		//cek di database
		$this->db->where ('kode_pasien', $kode_pasien)
				 ->where ('tanggal', $tanggal)
				 ->where ('kepada', $kepada)
				 ->where ('keluhan', $keluhan)
				 ->where ('kode_dokter', $kode_dokter);
		$query = $this->db->get('rujukan')->num_rows();
		
		if ($query > 0)
		{
			$this->form_validation->set_message('is_double_entry_tambah','Data Pasien ini sudah tercatat pada tanggal ' . $this->input->post('tanggal'));
		return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
		
	public function hapus ($kode_rujukan = NULL)
	{
		if ( ! empty($kode_rujukan))
		{
			if($this->rujukan->hapus($kode_rujukan))
		{
		$this->session->set_flashdata('pesan','Proses hapus data rujukan berhasil.');
		redirect('rujukan');
		}
		else
		{
		$this->session->set_flashdata('pesan','Proses hapus data rujukan gagal.');
		redirect ('rujukan');
			
		}
		}
	}
	
	//DOWNLOAD
	
	function download()
	{
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
		$query =$this->db->query("select * from rujukan")->result();
		$data['hasil'] = $query;
		//LOAD VIEW "pdf_report"untuk menampilkan hasilnya
		$this->load->view('page_rujukan',$data);
	}
}
/*function download()
	{
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
		$query =$this->db->select('rujukan.kode_rujukan, rujukan.tanggal,rujukan.keluhan,rujukan.kepada,data_pasien.kode_pasien,data_pasien.nama,data_pasien.umur,data_pasien.alamat,')
                        //->from($this->db_tabel)
                 		->join('data_pasien', 'data_pasien.kode_pasien = rujukan.kode_pasien')
						//->join('data_dokter', 'data_dokter.kode_dokter = rujukan.kode_dokter')
						->get();	
						
	
			
			
			
		$this->data['hasil'] = $this->query;
		//LOAD VIEW "pdf_report"untuk menampilkan hasilnya
		$this->load->view('page_rujukan',$data);
	}	
}
		$data['hasil'] = $this->query;
		//LOAD VIEW "pdf_report"untuk menampilkan hasilnya
		$this->load->view('page_rujukan',$data);
	*/


