<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datadokter extends CI_Controller {

    public $data = array(
                        'modul'         => 'datadokter',
                        'breadcrumb'    => 'Data Dokter',
                        'pesan'         => '',
                        'pagination'    => '',
                        'tabel_data'    => '',
                        'main_view'     => 'datadokter/datadokter',
                        'form_action'   => '',
                        'form_value'    => '',
                        );

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('datadokter_model', 'datadokter', TRUE);
    }
	
	public function index()
	{
		//$this->session->unset_userdata('kode_dokter_sekarang', '');
        $this->session->unset_userdata('nama_dokter_sekarang', '');
		$this->session->unset_userdata('ttl_sekarang', '');
		$this->session->unset_userdata('alamat_sekarang', '');
		$this->session->unset_userdata('str_sekarang', '');
		$this->session->unset_userdata('telp_sekarang', '');
		//JABATAN
		$this->session->unset_userdata('jabatan_sekarang', '');
		///
		$this->session->unset_userdata('jadwal_sekarang', '');
		//STATUS
		$this->session->unset_userdata('status_sekarang', '');
		
		 // Cari semua data pasien
        $datadokter= $this->datadokter->cari_semua();

        // data kelas ada, tampilkan
        if ($datadokter)
        {
            // buat tabel
            $tabel = $this->datadokter->buat_tabel($datadokter);
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
	
	public function tambah()
    {
        $this->data['breadcrumb']  = 'Data Dokter > Tambah';
        $this->data['main_view']   = 'datadokter/datadokter_form';
        $this->data['form_action'] = 'datadokter/tambah';

        // submit
        if($this->input->post('submit'))
        {
            // validasi sukses
            if($this->datadokter->validasi_tambah())
            {
                if($this->datadokter->tambah())
                {
                    $this->session->set_flashdata('pesan', 'Proses tambah data berhasil.');
                    redirect('datadokter');
                }
                else
                {
                    $this->data['pesan'] = 'Proses tambah data gagal.';
                    $this->load->view('template', $this->data);
                }
            }
            // validasi gagal
            else
            {
                $this->load->view('template', $this->data);
            }
        }
        // no submit
        else
        {
            $this->load->view('template', $this->data);
        }
    }
	
	 public function edit($nama = NULL)
    {
        $this->data['breadcrumb']  = 'Data Dokter > Edit';
        $this->data['main_view']   = 'datadokter/datadokter_form';
        $this->data['form_action'] = 'datadokter/edit/' . $nama;

     
        if( ! empty($nama))
        {
            // submit
            if($this->input->post('submit'))
            {
                // validasi berhasil
                if($this->datadokter->validasi_edit() === TRUE)
                {
                    //update db
                    $this->datadokter->edit($this->session->userdata('nama_dokter_sekarang'));
                    $this->session->set_flashdata('pesan', 'Proses update data berhasil.');

                    redirect('datadokter');
                }
                // validasi gagal
                else
                {
                    $this->load->view('template', $this->data);
                }
            }
            // tidak disubmit, form pertama kali dimuat
            else
            {
                // ambil data dari database, $form_value sebagai nilai dafault form
                $datadokter = $this->datadokter->cari($nama);
                foreach($datadokter as $key => $value)
                {
                    $this->data['form_value'][$key] = $value;
                }

                // set temporary data for edit
                $this->session->set_userdata('kode_dokter_sekarang', $datadokter->kode_dokter);
                $this->session->set_userdata('nama_dokter_sekarang', $datadokter->nama_dokter);
				$this->session->set_userdata('ttl_sekarang', $datadokter->ttl);
				$this->session->set_userdata('alamat_sekarang', $datadokter->alamat);
				$this->session->set_userdata('str', $datadokter->str);
				$this->session->set_userdata('telp', $datadokter->telp);
				
				$this->session->set_userdata('jabatan', $datadokter->jabatan);
				$this->session->set_userdata('jadwal', $datadokter->jadwal);
				
				$this->session->set_userdata('status', $datadokter->status);



                $this->load->view('template', $this->data);
            }
        }
        // tidak ada parameter kode_dokter, kembalikan ke halaman datadokter
        else
        {
            redirect('datadokter');
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
        
        else
        {
            // cek database untuk kode_dokter yang sama
            $query = $this->db->get_where('data_dokter', array('kode_dokter' => $kode_dokter_baru));

            // kode sudah dipakai
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_kode_dokter_exist',
                                                    "Dokter dengan kode $kode_dokter_baru sudah terdaftar");
                return FALSE;
            }
            // kode_pasien belum dipakai, OK
            else
            {
                return TRUE;
            }
        }
    }

	
	
	
	function is_nama_dokter_exist()
    {
        $nama_dokter_sekarang 	= $this->session->userdata('nama_dokter_sekarang');
        $nama_dokter_baru		= $this->input->post('nama_dokter');
		

        if ($nama_dokter_baru === $nama_dokter_sekarang)
        {
            return TRUE;
        }
        else
        {
            // cek database untuk nama dokter yang sama
            $query = $this->db->get_where('data_dokter', array('nama_dokter' => $nama_dokter_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_nama_dokter_exist',
                                                    "Nama dengan nama $nama_dokter_baru sudah terdaftar");
                return TRUE;
            }
            else
            {
                return TRUE;
			}
   		 }
	}
	function is_ttl_exist()
    {
		$ttl_sekarang 	= $this->session->userdata('ttl_sekarang');
        $ttl_baru		= $this->input->post('ttl');
		
		if ($ttl_baru === $ttl_sekarang)
        {
            return TRUE;
        }
        else
        {
            // cek database untuk nama kelas yang sama
            $query = $this->db->get_where('data_dokter', array('ttl' => $ttl_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_ttl_exist',
                                                    "Tempat/tanggal lahir dengan  $ttl_baru sudah terdaftar");
                return TRUE;}
            else
            {
                return TRUE;
            }
		}
	}
	function is_alamat_exist()
    {
		$alamat_sekarang 	= $this->session->userdata('alamat_sekarang');
        $alamat_baru		= $this->input->post('alamat');
		
		if ($alamat_baru === $alamat_sekarang)
        {
            return TRUE;
        }
        else
        {
          
            $query = $this->db->get_where('data_dokter', array('alamat' => $umur_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_alamat_exist',
                                                    "Alamat dengan  $alamat_baru sudah terdaftar");
                return TRUE;
            }
            else
            {
                return TRUE;
            }
        }
	}
	
	function is_str_exist()
    {
		$str_sekarang 	= $this->session->userdata('str_sekarang');
        $str_baru		= $this->input->post('str');
		
		if ($str_baru === $str_sekarang)
        {
            return TRUE;
        }
        else
        {
          
            $query = $this->db->get_where('data_dokter', array('str' => $str_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_str_exist',
                                                    "No STR dengan  $str_baru sudah terdaftar");
                return TRUE;
            }
            else
            {
                return TRUE;
            }
        }
	}
	
	function is_telp_exist()
    {
		$telp_sekarang 	= $this->session->userdata('telp_sekarang');
        $telp_baru		= $this->input->post('telp');
		
		if ($telp_baru === $telp_sekarang)
        {
            return TRUE;
        }
        else
        {
          
            $query = $this->db->get_where('data_dokter', array('str' => $telp_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_telp_exist',
                                                    "No Telepon dengan  $telp_baru sudah terdaftar");
                return TRUE;
            }
            else
            {
                return TRUE;
            }
        }
	}
	
	function is_jadwal_exist()
    {
		$jadwal_sekarang 	= $this->session->userdata('jadwal_sekarang');
        $jadwal_baru		= $this->input->post('jadwal');
		
		if ($jadwal_baru === $jadwal_sekarang)
        {
            return TRUE;
        }
        else
        {
          
            $query = $this->db->get_where('data_dokter', array('jadwal' => $jadwal_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_jadwal_exist',
                                                    "Jadwal dengan $jadwal_baru sudah terdaftar");
                return TRUE;
            }
            else
            {
                return TRUE;
            }
        }
	}
	
	// proses HAPUS
	public function hapus($kode_dokter = NULL)
    {
        
        if( ! empty($kode_dokter))
        {
            if($this->datadokter->hapus($kode_dokter))
            {
                $this->session->set_flashdata('pesan', 'Proses hapus data berhasil.');
                redirect('datadokter');
            }
            else
            {
                $this->session->set_flashdata('pesan', 'Proses hapus data gagal.');
                redirect('datadokter');
            }
        }
        else
        {
            $this->session->set_flashdata('pesan', 'Proses hapus data gagal.');
            redirect('datadokter');
        }
    }
	
}
