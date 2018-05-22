<?php

Class Model_surat_keluar extends CI_Model {

    function add($uploads) {
        $no = $this->input->post('no');
        $tujuan = $this->input->post('tujuan');
        $prihal = $this->input->post('prihal');
        $tgl_surat = $this->input->post('tgl_surat');
        $tgl_keluar = $this->input->post('tgl_keluar');
        $tempo_surat = $this->input->post('tgl_jatuh_tempo');
        $kategori = $this->input->post('kategori');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'No' => $no,
            'prihal' => $prihal,
            'tujuan'=>$tujuan,
            'tanggal_surat' => $tgl_surat,
            'tanggal_keluar' =>$tgl_keluar,
            'tanggal_jatuh_tempo' => $tempo_surat,
            'id_kategori' => $kategori,
            'isi_surat' => $uploads,
            'keterangan' => $keterangan,
        );
        $this->db->insert('surat_keluar',$data);
    }

}

?>