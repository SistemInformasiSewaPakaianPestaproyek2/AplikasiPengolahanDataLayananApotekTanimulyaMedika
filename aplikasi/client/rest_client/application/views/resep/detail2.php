<?php echo form_open('kelola_data_obat/edit');?>
<?php echo form_hidden('id_obat',$data_obat[0]->id_obat);?>
 
<table>
    <tr><td>KODE OBAT</td><td><?php echo form_input('id_obat',$data_obat[0]->id_obat,"disabled");?></td></tr>
    <tr><td>NAMA  OBAT</td><td><?php echo form_input('nama_obat',$data_obat[0]->nama_obat);?></td></tr>
    <tr><td>STOK AWAL</td><td><?php echo form_input('stok_awal',$data_obat[0]->stok_awal);?></td></tr>
    <tr><td>PENAMBAHAN</td><td><?php echo form_input('penambahan',$data_obat[0]->penambahan);?></td></tr>
    <tr><td>TOTAL</td><td><?php echo form_input('total',$data_obat[0]->total);?></td></tr>
    <tr><td>HARGA BELI</td><td><?php echo form_input(' harga_beli',$data_obat[0]->harga_beli);?></td></tr>
    <tr><td>HARGA JUAL</td><td><?php echo form_input('harga_jual',$data_obat[0]->harga_jual);?></td></tr>
    <tr><td>NILAI LABA</td><td><?php echo form_input('nilai_laba',$data_obat[0]->nilai_laba);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kelola_data_obat','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>