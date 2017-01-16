<?php
Class Kelola_daftar_obat extends CI_Controller{
   
   // var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/aplikasi_klinik/index.php";
    }
    
    // menampilkan data mahasiswa
    function index(){
       $data=array ('title'=>'Klinik Tanimulya Medika',
                   'isi' =>'dataobat/list'
                    );
        $data['data_obat'] = json_decode($this->curl->simple_get($this->API.'/data_obat'));
       // $this->load->view('resep/list',$data);
       // $this->load->view('template', $data);
        $this->load->view('layout/wrapper',$data);
    }
    
    // insert data mahasiswa
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode_resep'       =>  $this->input->post('kode_resep'),
                'kode_pasien'      =>  $this->input->post('kode_pasien'),
                'kode_dokter'      =>  $this->input->post('kode_dokter'),
                'tanggal'          =>  $this->input->post('tanggal'),
                'id_obat'          =>  $this->input->post('id_obat'),
                'qty'              =>  $this->input->post('qty'),
                'dosis'            =>  $this->input->post('dosis'),
                'aturan_pakai'     =>  $this->input->post('aturan_pakai'),
                'keterangan'       =>  $this->input->post('keterangan'));
            $insert =  $this->curl->simple_post($this->API.'/resep', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('kelola_data_resep');
          }
       /* }elseif{
            $data['kode_pasien'] = json_decode($this->curl->simple_get($this->API.'/kode_pasien'));
            $this->load->view('resep/create',$data);
        }elseif{
            $data['kode_dokter'] = json_decode($this->curl->simple_get($this->API.'/kode_dokter'));
            $this->load->view('resep/create',$data);
        }else{
            $data['id_obat'] = json_decode($this->curl->simple_get($this->API.'/id_obat'));
            $this->load->view('id_obat/create',$data);
        }*/
    }
    
    // edit data mahasiswa
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'id_jurusan'=>  $this->input->post('jurusan'),
                'alamat'    =>  $this->input->post('alamat'));
            $update =  $this->curl->simple_put($this->API.'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('mahasiswa');
        }else{
            $data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
            $params = array('nim'=>  $this->uri->segment(3));
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
            $this->load->view('mahasiswa/edit',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($nim){
        if(empty($nim)){
            redirect('mahasiswa');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/mahasiswa', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('mahasiswa');
        }
    }
}