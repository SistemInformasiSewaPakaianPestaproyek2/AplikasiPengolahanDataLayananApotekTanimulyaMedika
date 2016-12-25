<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datapetugas extends CI_Controller {

    public $data = array(
                        'modul'         => 'datapetugas',
                        'breadcrumb'    => 'Data Petugas',
                        'pesan'         => '',
                        'pagination'    => '',
                        'tabel_data'    => '',
                        'main_view'     => 'datapetugas/datapetugas',
                        'form_action'   => '',
                        'form_value'    => '',
                        );

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('datapetugas_model', 'datapetugas', TRUE);
    }
	
	public function index()
	{
		//$this->session->unset_userdata('kode_petugas_sekarang', '');
        $this->session->unset_userdata('nama_sekarang', '');
		$this->session->unset_userdata('ttl_sekarang', '');
		$this->session->unset_userdata('alamat_sekarang', '');
		$this->session->unset_userdata('telepon_sekarang', '');
		$this->session->unset_userdata('strttk_sekarang', '');
		$this->session->unset_userdata('jabatan_sekarang', '');
		
		//STATUS
		$this->session->unset_userdata('status_sekarang', '');
		
		 // Cari semua data petugas
        $datapetugas= $this->datapetugas->cari_semua();

        // data kelas ada, tampilkan
        if ($datapetugas)
        {
            // buat tabel
            $tabel = $this->datapetugas->buat_tabel($datapetugas);
            $this->data['tabel_data'] = $tabel;
            $this->load->view('template', $this->data);
        }
        // datatidak ada
        else
        {
            $this->data['pesan'] = 'Tidak ada data petugas.';
            $this->load->view('template', $this->data);
        }
	}
	
	public function tambah()
    {
        $this->data['breadcrumb']  = 'Data Petugas > Tambah';
        $this->data['main_view']   = 'datapetugas/datapetugas_form';
        $this->data['form_action'] = 'datapetugas/tambah';

        // submit
        if($this->input->post('submit'))
        {
            // validasi sukses
            if($this->datapetugas->validasi_tambah())
            {
                if($this->datapetugas->tambah())
                {
                    $this->session->set_flashdata('pesan', 'Proses tambah data berhasil.');
                    redirect('datapetugas');
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
        $this->data['breadcrumb']  = 'Data Petugas > Edit';
        $this->data['main_view']   = 'datapetugas/datapetugas_form';
        $this->data['form_action'] = 'datapetugas/edit/' . $nama;

        // pastikan id_kelas ada
        if( ! empty($nama))
        {
            // submit
            if($this->input->post('submit'))
            {
                // validasi berhasil
                if($this->datapetugas->validasi_edit() === TRUE)
                {
                    //update db
                    $this->datapetugas->edit($this->session->userdata('nama_sekarang'));
                    $this->session->set_flashdata('pesan', 'Proses update data berhasil.');

                    redirect('datapetugas');
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
                $datapetugas = $this->datapetugas->cari($nama);
                foreach($datapetugas as $key => $value)
                {
                    $this->data['form_value'][$key] = $value;
                }

                // set temporary data for edit
                //$this->session->set_userdata('kode_petugas_sekarang', $datapetugas->kode_petugas);
                $this->session->set_userdata('nama_sekarang', $datapetugas->nama);
				$this->session->set_userdata('ttl_sekarang', $datapetugas->ttl);
				$this->session->set_userdata('alamat_sekarang', $datapetugas->alamat);
				$this->session->unset_userdata('telepon_sekarang',$datapetugas->telepon);
				$this->session->set_userdata('strttk', $datapetugas->strttk);
				$this->session->set_userdata('jabatan', $datapetugas->jabatan);
				
				$this->session->set_userdata('status', $datapetugas->status);


                $this->load->view('template', $this->data);
            }
        }
        // tidak ada parameter kode_petugas, kembalikan ke halaman datapetugas
        else
        {
            redirect('datapetugas');
        }
    }
	
	function is_kode_petugas_exist()
    {
        $kode_petugas_sekarang 	= $this->session->userdata('kode_petugas_sekarang');
        $kode_petugas_baru		= $this->input->post('kode_petugas');

    
        if ($kode_petugas_baru === $kode_petugas_sekarang)
        {
            return TRUE;
        }
        
        else
        {
            // cek database untuk kode_petugas yang sama
            $query = $this->db->get_where('data_petugas', array('kode_petugas' => $kode_petugas_baru));

            // kode sudah dipakai
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_kode_petugas_exist',
                                                    "Petugas dengan kode $kode_petugas_baru sudah terdaftar");
                return FALSE;
            }
            // kode_pasien belum dipakai, OK
            else
            {
                return TRUE;
            }
        }
    }

	
	
	
	function is_nama_exist()
    {
        $nama_sekarang 	= $this->session->userdata('nama_sekarang');
        $nama_baru		= $this->input->post('nama');
		

        if ($nama_baru === $nama_sekarang)
        {
            return TRUE;
        }
        else
        {
            // cek database untuk nama petugas yang sama
            $query = $this->db->get_where('data_petugas', array('nama' => $nama_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_nama_exist',
                                                    "Nama dengan nama $nama_baru sudah terdaftar");
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
            $query = $this->db->get_where('data_petugas', array('ttl' => $ttl_baru));
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
          
            $query = $this->db->get_where('data_petugas', array('alamat' => $umur_baru));
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
		$str_sekarang 	= $this->session->userdata('strttk_sekarang');
        $str_baru		= $this->input->post('strttk');
		
		if ($str_baru === $str_sekarang)
        {
            return TRUE;
        }
        else
        {
          
            $query = $this->db->get_where('data_petugas', array('strttk' => $strttk_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_strttk_exist',
                                                    "No STRTTK dengan  $strttk_baru sudah terdaftar");
                return TRUE;
            }
            else
            {
                return TRUE;
            }
        }
	}
	
	function is_jabatan_exist()
    {
		$jabatan_sekarang 	= $this->session->userdata('jabatan_sekarang');
        $jabatan_baru		= $this->input->post('jabatan');
		
		if ($jabatan_baru === $jabatan_sekarang)
        {
            return TRUE;
        }
	}
	
	function is_telepon_exist()
    {
		$telepon_sekarang 	= $this->session->userdata('telepon_sekarang');
        $telepon_baru		= $this->input->post('telepon');
		
		if ($telepon_baru === $telepon_sekarang)
        {
            return TRUE;
        }
	}
	
	
}
