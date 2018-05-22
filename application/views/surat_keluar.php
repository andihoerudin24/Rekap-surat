<?php  
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
}
?>
<h2>Form Surat Keluar</h2>
<?php echo form_open_multipart('Surat_keluar/add') ?>    
<table border="0" cellpadding="5" cellspacing="0" height="500px">
        <tbody>
            <tr>
                <td>No</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="no"  size="20" maxlength="50" required="required" /></td>
            </tr>
            <tr>
                <td>Untuk</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="tujuan"  size="20" maxlength="50" required="required" /></td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="prihal" size="20" maxlength="100" required="required" /></td>
            </tr>
            <tr>
                <td>Tanggal Surat</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_surat">
                </td>
            </tr>
            
            <tr>
                <td>Tanggal Keluar</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_keluar">
                </td>
            </tr>
            <tr>
                <td>Tanggal Jatuh Tempo Surat</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_jatuh_tempo">  
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                     <?php echo cmb_dinamis('kategori','kategori_surat','nama_kategori','id_kategori'); ?>
                </td>
            </tr>
            <tr>
                <td>upload surat</td>
                <td>:</td>
                <td><input type="file" class="form-control"  name="userfile">  
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><textarea name="keterangan" class="texteditor" /></textarea></td>
            </tr>


            <tr>
                <td align="center" class="daftar" colspan="3"><button type="submit" name="submit" class="btn btn-info">SIMPAN</button></td>
            </tr>
        </tbody>
    </table>
<?php echo form_close()  ?>
