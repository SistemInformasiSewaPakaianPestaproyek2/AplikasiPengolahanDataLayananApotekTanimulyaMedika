<?php echo form_open('kelola_stok_obat/edit');?>
<?php echo form_hidden('kode_obat',$data_stok[0]->kode_obat);?>
 
<table>
    <tr><td>KODE OBAT</td><td><?php echo form_input('kode_obat',$data_stok[0]->kode_obat,"disabled");?></td></tr>
    <tr><td>STOK OBAT</td><td><?php echo form_input('stok_akhir',$data_stok[0]->stok_akhir);?></td></tr>
    <tr><td>HARGA JUAL</td><td><?php echo form_input('harga_jual_akhir',$data_stok[0]->harga_jual_akhir);?></td></tr>
    <tr><td>NILAI LABA</td><td><?php echo form_input('nilai_laba_akhir',$data_stok[0]->nilai_laba_akhir);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Print');?>
        <?php echo anchor('kelola_data_obat','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
