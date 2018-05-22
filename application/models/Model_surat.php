<?php  
Class Model_surat extends CI_Model{
    
    
    function add($uploads){
        $no= $this->input->post('no');
        $asal_surat= $this->input->post('asal_surat');
        $prihal= $this->input->post('prihal');
        $tgl_surat= $this->input->post('tgl_surat');
        $tempo_surat= $this->input->post('tgl_jatuh_tempo');
        $kategori= $this->input->post('kategori');
        $keterangan= $this->input->post('keterangan');
       
   $data=array(
       'no'=>$no,
       'Asal_surat'=>$asal_surat,
       'prihal'=>$prihal,
       'Tanggal_surat'=>$tgl_surat,
       'Tempo_surat'=>$tempo_surat,
       'id_kategori'=>$kategori,
       'isi_surat'=>$uploads,
       'keterangan'=>$keterangan,
       );
       $this->db->insert('surat_masuk',$data);   
    }
}


?>