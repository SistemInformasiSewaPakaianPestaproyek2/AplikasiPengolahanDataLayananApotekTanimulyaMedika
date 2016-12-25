<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login2 extends CI_Controller
{
    public $data = array('pesan'=> '');

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('Login2_model', 'login2', TRUE);
	}

	public function index()
    {
		// status user login = BENAR, pindah ke halaman absen
        if ($this->session->userdata('login2') == TRUE)
        {
			redirect('rekammedis');
		}
        // status login salah, tampilkan form login
        else
        {
            // validasi sukses
            if($this->login2->validasi())
            {
                // cek di database sukses
                if($this->login2->cek_user())
                {
                    redirect('rekammedis');
                }
                // cek database gagal
                else
                {
                    $this->data['pesan'] = 'Username atau Password salah.';
                    $this->load->view('login2/login_form', $this->data);
                }
            }
            // validasi gagal
            else
            {
                $this->load->view('login2/login_form', $this->data);
            }
		}
	}

	public function logout()
	{
        $this->login2->logout();
		redirect('home');
	}
}
