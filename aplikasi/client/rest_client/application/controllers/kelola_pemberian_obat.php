<?php
Class Kelola_pemberian_obat extends CI_Controller{
    
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
                     'isi' =>'datapemberian/list',
                        );
         $data['pemberian_obat'] = json_decode($this->curl->simple_get($this->API.'/pemberian_obat'));
        $this->load->view('layout/wrapper',$data);
    }
    function form_data(){
        $data=array ('title'=>'Klinik Tanimulya Medika',
                   'isi' =>'dataobat/form'
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
                'kode_obat'     =>  $this->input->post('kode_obat'),
                'nama_obat'     =>  $this->input->post('nama_obat'),
                'stok_awal'     =>  $this->input->post('stok_awal'),
                'penambahan'    =>  $this->input->post('penambahan'),
                'total'         =>  $this->input->post('total'),
                'harga_beli'    =>  $this->input->post('harga_beli'),
                'harga_jual'    =>  $this->input->post('harga_jual'),
                'nilai_laba'    =>  $this->input->post('nilai_laba')
                );
            $insert =  $this->curl->simple_post($this->API.'/data_obat', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('kelola_data_obat');
        }else{
            $data['data_obat'] = json_decode($this->curl->simple_get($this->API.'/data_obat'));
            $this->load->view('dataobat/form',$data);
        }
    }
    
    // edit data mahasiswa
    function edit(){
         $data=array ('title'=>'Klinik Tanimulya Medika',
                   'isi' =>'dataobat/edit'
                    );
        if(isset($_POST['submit'])){
             $data = array(
                'kode_obat'     =>  $this->input->post('kode_obat'),
                'nama_obat'     =>  $this->input->post('nama_obat'),
                'stok_awal'     =>  $this->input->post('stok_awal'),
                'penambahan'    =>  $this->input->post('penambahan'),
                'total'         =>  $this->input->post('total'),
                'harga_beli'    =>  $this->input->post('harga_beli'),
                'harga_jual'    =>  $this->input->post('harga_jual'),
                'nilai_laba'    =>  $this->input->post('nilai_laba')
                );
            $update =  $this->curl->simple_put($this->API.'/data_obat', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('kelola_daftar_obat');
        }else{
         // $data['nama_obat'] = json_decode($this->curl->simple_get($this->API.'/nama_obat'));
            //$data['stok_awal'] = json_decode($this->curl->simple_get($this->API.'/stok_awal'));
            //$data['penambahan'] = json_decode($this->curl->simple_get($this->API.'/penambahan'));
            //$data['total'] = json_decode($this->curl->simple_get($this->API.'/total'));
            //$data['harga_beli'] = json_decode($this->curl->simple_get($this->API.'/harga_beli'));
            //$data['harga_jual'] = json_decode($this->curl->simple_get($this->API.'/harga_jual'));
            //$data['nilai_laba'] = json_decode($this->curl->simple_get($this->API.'/nilai_laba'));
            $params = array('kode_obat'=>  $this->uri->segment(8));
            $data['data_obat'] = json_decode($this->curl->simple_get($this->API.'/data_obat',$params));
            $this->load->view('layout/wrapper',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($kode_obat){
        if(empty($kode_obat)){
            redirect('data_obat');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/data_obat', array('kode_obat'=>$kode_obat), array(CURLOPT_BUFFERSIZE => 10)); 
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