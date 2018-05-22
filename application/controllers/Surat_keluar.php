<?php   
Class Surat_Keluar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->Model('Model_surat_keluar');
    }
            function index(){
        $this->template->load('template','surat_keluar');
    }
    
    function add(){
        if (isset($_POST['submit'])) {
            $uploads= $this->upload_surat();
            $this->Model_surat_keluar->add($uploads);
           
            echo $this->session->set_flashdata('Berhasil','Surat Berhasil Keluar....');
            redirect('Surat_Keluar');
        } else {
                $this->template->load('template','surat_masuk');
        }
    }
    
    function upload_surat() {
        $config['upload_path'] = './upload/keluar';
        $config['allowed_types'] = 'pdf|docx|jpg|png';
        $config['max_size'] = 8000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}


?>