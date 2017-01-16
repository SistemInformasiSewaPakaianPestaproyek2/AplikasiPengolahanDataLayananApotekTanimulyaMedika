<?php
Class Kelola_bpjs extends CI_Controller{
    
   // var $API ="";
    public $form_action ='';
    public $no='';
    
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/aplikasi_klinik/index.php";
    }
    
    // menampilkan data mahasiswa
    function index(){
        $data=array ('title'=>'Klinik Tanimulya Medika',
                     'isi' =>'databpjs/list'
                        );
         $data['bpjs'] = json_decode($this->curl->simple_get($this->API.'/data_bpjs'));
        $this->load->view('layout/wrapper',$data);
    }
    function form_data(){
        $data=array ('title'=>'Klinik Tanimulya Medika',
                   'isi' =>'databpjs/form'
                    );
        //$data['data_obat'] = json_decode($this->curl->simple_get($this->API.'/data_obat'));
       // $this->load->view('resep/list',$data);
       // $this->load->view('template', $data);
        $this->load->view('layout/wrapper',$data);
    }
    
    // insert data mahasiswa
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode_bpjs1'      =>  $this->input->post('kode_bpjs1'),
                'kode_bpjs'     =>  $this->input->post('kode_bpjs'),
                'kode_pasien'     =>  $this->input->post('kode_pasien'),
                );
            $insert =  $this->curl->simple_post($this->API.'/data_bpjs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('kelola_bpjs');
        }else{
            $data['bpjs'] = json_decode($this->curl->simple_get($this->API.'/data_bpjs'));
            $this->load->view('dataobat/form',$data);
        }
    }
    
    // edit data mahasiswa
    function edit(){
         $data=array ('title'=>'Klinik Tanimulya Medika',
                   'isi' =>'databpjs/edit'
                    );
        if(isset($_POST['submit'])){
             $data = array(
                'kode_pendaftaran'      =>  $this->input->post('kode_bpjs1'),
                'kode_bpjs'     =>  $this->input->post('kode_bpjs'),
                'nama_pasien'     =>  $this->input->post('kode_pasien'),
                );
            $update =  $this->curl->simple_put($this->API.'/data_bpjs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Kelola_bpjs');
        }else{
         // $data['nama_obat'] = json_decode($this->curl->simple_get($this->API.'/nama_obat'));
            //$data['stok_awal'] = json_decode($this->curl->simple_get($this->API.'/stok_awal'));
            //$data['penambahan'] = json_decode($this->curl->simple_get($this->API.'/penambahan'));
            //$data['total'] = json_decode($this->curl->simple_get($this->API.'/total'));
            //$data['harga_beli'] = json_decode($this->curl->simple_get($this->API.'/harga_beli'));
            //$data['harga_jual'] = json_decode($this->curl->simple_get($this->API.'/harga_jual'));
            //$data['nilai_laba'] = json_decode($this->curl->simple_get($this->API.'/nilai_laba'));
            $params = array('kode_bpjs1'=>  $this->uri->segment(8));
            $data['bpjs'] = json_decode($this->curl->simple_get($this->API.'/data_bpjs',$params));
            $this->load->view('layout/wrapper',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($kode_bpjs1){
        if(empty($kode_bpjs1)){
            redirect('Kelola_bpjs');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/data_bpjs', array('kode_bpjs1'=>$kode_bpjs1), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('kelola_data_obat');
        }
    }
}