<?php
class Rekap_Surat_keluar extends CI_Controller{
    
    function index(){
        $this->template->load('template','rekap_keluar');
    }
    
    
    function donwload() {
        $this->load->helper('download');
        $id = $this->uri->segment(3);
        $data = $this->db->get_where('v_keluar', array('id_surat_keluar' => $id))->result();
        foreach ($data as $row) {
            //$nama = $row->nama_surat;
            $nama_file = $row->isi_surat;
        }
        force_download('upload/keluar/'.$nama_file, NULL);
    }
}




?>