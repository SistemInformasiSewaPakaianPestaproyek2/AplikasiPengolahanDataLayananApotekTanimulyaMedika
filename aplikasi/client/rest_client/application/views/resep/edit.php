<?php echo form_open('resep/edit');?>
<?php echo form_hidden('kode_resep',$resep[0]->kode_resep);?>
 
<table>
    <tr><td>KODE RESEP/td><td><?php echo form_input('',$mahasiswa[0]->nim,"disabled");?></td></tr>
    <tr><td>NAMA PASIEN</td><td><?php echo form_input('nama',$mahasiswa[0]->nama);?></td></tr>
    <tr><td>NAMA </td><td>
            <select name="jurusan">
            <?php
            foreach ($jurusan as $j){
                echo "<option value='$j->id_jurusan' ";
                echo $mahasiswa[0]->id_jurusan==$j->id_jurusan?'selected':'';
                echo ">$j->nama_jurusan</option>";
            }
            ?>
            </select>
        </td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$mahasiswa[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>