<table id="example" class="table table-striped table-bordered bg-white">
    <thead>
        <tr>
            <th>Nama Kategori</th>
            <th>Asal Surat</th>
            <th>Prihal</th>
            <th>Tanggal_surat</th>
            <th>Tempo Surat</th>
            <th>Donwload </th>
            
        </tr>
    </thead>
    <tbody>
       <?php 
       $data=$this->db->get('v_masuk')->result();
       foreach ($data as $row) {
           echo "<tr>
                <td>$row->nama_kategori</td>
                <td>$row->Asal_surat</td>
                <td>$row->Prihal</td>
                <td>$row->Tanggal_surat</td>
                <td>$row->Tempo_surat</td>
                <td>" . anchor('Rekap_Surat_masuk/donwload/' . $row->id_surat_masuk, 'Donwload', array('class' => 'btn btn-danger btn-sm')) . "</td>    
                
            </tr>
            ";
       }
        ?>
    </tbody>
</table>  