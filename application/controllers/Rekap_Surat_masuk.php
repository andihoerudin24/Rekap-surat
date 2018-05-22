<?php
class Rekap_Surat_masuk extends CI_Controller{
    
    function index(){
        $this->template->load('template','rekap_masuk');
    }
    
    
    function donwload() {
        $this->load->helper('download');
        $id = $this->uri->segment(3);
        $data = $this->db->get_where('v_masuk', array('id_surat_masuk' => $id))->result();
        foreach ($data as $row) {
            //$nama = $row->nama_surat;
            $nama_file = $row->isi_surat;
        }
        force_download('upload/'.$nama_file, NULL);
    }
}




?>