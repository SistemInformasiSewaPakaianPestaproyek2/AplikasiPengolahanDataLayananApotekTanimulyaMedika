<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datapasien extends CI_Controller {

    public $data = array(
                        'modul'         => 'datapasien',
                        'breadcrumb'    => 'Data Pasien',
                        'pesan'         => '',
                        'pagination'    => '',
                        'tabel_data'    => '',
                        'main_view'     => 'datapasien/datapasien',
                        'form_action'   => '',
                        'form_value'    => '',
                        );

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('datapasien_model', 'datapasien', TRUE);
    }
	
	public function index()
	{
		$this->session->unset_userdata('kode_pasien_sekarang', '');
        $this->session->unset_userdata('nama_sekarang', '');
		$this->session->unset_userdata('umur_sekarang', '');
		$this->session->unset_userdata('jenkel_sekarang', '');
		$this->session->unset_userdata('alamat_sekarang', '');
		$this->session->unset_userdata('telepon_sekarang', '');
		 // Cari semua data pasien
        $datapasien= $this->datapasien->cari_semua();

        // data ada, tampilkan
        if ($datapasien)
        {
            // buat tabel
            $tabel = $this->datapasien->buat_tabel($datapasien);
            $this->data['tabel_data'] = $tabel;
            $this->load->view('template', $this->data);
        }
        // data tidak ada
        else
        {
            $this->data['pesan'] = 'Tidak ada data pasien.';
            $this->load->view('template', $this->data);
        }
	}
	
	public function tambah()
    {
        $this->data['breadcrumb']  = 'Data Pasien > Tambah';
        $this->data['main_view']   = 'datapasien/datapasien_form';
        $this->data['form_action'] = 'datapasien/tambah';

        // submit
        if($this->input->post('submit'))
        {
            // validasi sukses
            if($this->datapasien->validasi_tambah())
            {
                if($this->datapasien->tambah())
                {
                    $this->session->set_flashdata('pesan', 'Proses tambah data berhasil.');
                    redirect('datapasien');
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
        $this->data['breadcrumb']  = 'Data Pasien > Edit';
        $this->data['main_view']   = 'datapasien/datapasien_form';
        $this->data['form_action'] = 'datapasien/edit/' . $nama;

        // pastikan kode ada
        if( ! empty($nama))
        {
            // submit
            if($this->input->post('submit'))
            {
                // validasi berhasil
                if($this->datapasien->validasi_edit() === TRUE)
                {
                    //update db
                    $this->datapasien->edit($this->session->userdata('nama_sekarang'));
                    $this->session->set_flashdata('pesan', 'Proses update data berhasil.');

                    redirect('datapasien');
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
                $datapasien = $this->datapasien->cari($nama);
                foreach($datapasien as $key => $value)
                {
                    $this->data['form_value'][$key] = $value;
                }

                // set temporary data for edit
               // $this->session->set_userdata('kode_pasien_sekarang', $datapasien->kode_pasien);
                $this->session->set_userdata('nama_sekarang', $datapasien->nama);
				$this->session->set_userdata('umur_sekarang', $datapasien->umur);
				$this->session->unset_userdata('jenkel_sekarang',$datapasien->jenkel);
				$this->session->set_userdata('alamat_sekarang', $datapasien->alamat);
				$this->session->unset_userdata('telepon_sekarang',$datapasien->telepon);
				//$this->session->set_userdata('no_telepon_sekarang', $datapasien->no telepon);


                $this->load->view('template', $this->data);
            }
        }
        // tidak ada parameter kode_pasien, kembalikan ke halaman datapasien
        else
        {
            redirect('datapasien');
        }
    }
	
	function is_kode_pasien_exist()
    {
        $kode_pasien_sekarang 	= $this->session->userdata('kode_pasien_sekarang');
        $kode_pasien_baru		= $this->input->post('kode_pasien');

    
        if ($kode_pasien_baru === $kode_pasien_sekarang)
        {
            return TRUE;
        }
        
        else
        {
            // cek database untuk kode_pasien yang sama
            $query = $this->db->get_where('data_pasien', array('kode_pasien' => $kode_pasien_baru));

            // sudah dipakai
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_kode_pasien_exist',
                                                    "Pasien dengan kode $kode_pasien_baru sudah terdaftar");
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
       /* else
        {
            // cek database untuk nama pasien yang sama
            $query = $this->db->get_where('data_pasien', array('nama' => $nama_baru));
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
   		 }*/
	}
	function is_umur_exist()
    {
		$umur_sekarang 	= $this->session->userdata('umur_sekarang');
        $umur_baru		= $this->input->post('umur');
		
		if ($umur_baru === $umur_sekarang)
        {
            return TRUE;
        }
       /* else
        {
            // cek database untuk nama kelas yang sama
            $query = $this->db->get_where('data_pasien', array('umur' => $umur_baru));
            if($query->num_rows() > 0)
            {
                $this->form_validation->set_message('is_umur_exist',
                                                    "Umur dengan  $umur_baru sudah terdaftar");
                return TRUE;}
            else
            {
                return TRUE;
            }
		}*/
	}
	function is_alamat_exist()
    {
		$alamat_sekarang 	= $this->session->userdata('alamat_sekarang');
        $alamat_baru		= $this->input->post('alamat');
		
		if ($alamat_baru === $alamat_sekarang)
        {
            return TRUE;
        }
        /*else
        {
            // cek database untuk nama kelas yang sama
            $query = $this->db->get_where('data_pasien', array('alamat' => $umur_baru));
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
        }*/
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
