<h3>REKAP SURAT KELUAR</h3>
<table id="example" class="table table-striped table-bordered bg-white">
    <thead>
        <tr>
            <th>Nama Kategori</th>
            <th>Tujuan</th>
            <th>Prihal</th>
            <th>Tanggal_surat</th>
            <th>Tanggal Jatuh Tempot</th>
            <th>Donwload </th>
            
        </tr>
    </thead>
    <tbody>
       <?php 
       $data=$this->db->get('v_keluar')->result();
       foreach ($data as $row) {
           echo "<tr>
                <td>$row->nama_kategori</td>
                <td>$row->tujuan</td>
                <td>$row->prihal</td>
                <td>$row->tanggal_surat</td>
                <td>$row->tanggal_jatuh_tempo</td>
                <td>" . anchor('Rekap_Surat_keluar/donwload/' . $row->id_surat_keluar, 'Donwload', array('class' => 'btn btn-danger btn-sm')) . "</td>    
                
            </tr>
            ";
       }
        ?>
    </tbody>
</table>  