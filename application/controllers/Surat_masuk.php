<?php   
Class Surat_masuk extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->Model('Model_surat');
    }
            function index(){
        $this->template->load('template','surat_masuk');
    }
    
    function add(){
        if (isset($_POST['submit'])) {
            $uploads= $this->upload_surat();
            $this->Model_surat->add($uploads);
            echo $this->session->set_flashdata('Berhasil','Surat Berhasil Direkap....');
            redirect('Surat_masuk');
        } else {
                $this->template->load('template','surat_masuk');
        }
    }
    
    function upload_surat() {
        $config['upload_path'] = './upload';
        $config['allowed_types'] = 'pdf|docx|jpg|png';
        $config['max_size'] = 8000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}


?>