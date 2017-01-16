<?php echo form_open('kelola_bpjs/edit');?>
<?php echo form_hidden('kode_pendaftaran',$bpjs[0]->kode_pendaftaran);?>
 
<table>
    <tr><td>KODE PENDAFTARAN</td><td><?php echo form_input('kode_pendaftaran',$bpjs[0]->kode_pendaftaran,"disabled");?></td></tr>
    <tr><td>KODE PASIEN</td><td><?php echo form_input('kode_pasien',$bpjs[0]->nama_pasien, "disabled");?></td></tr>
    <tr><td>KODE BPJS</td><td><?php echo form_input('kode_bpjs',$bpjs[0]->kode_bpjs);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kelola_bpjs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>