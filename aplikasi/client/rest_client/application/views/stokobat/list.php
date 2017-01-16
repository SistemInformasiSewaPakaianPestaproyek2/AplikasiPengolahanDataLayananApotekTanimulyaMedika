<div class="konten">
  <div class= "artikel">
<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>KODE OBAT</th><th>STOK OBAT</th><th>HARGA STOK OBAT</th><th>NILAI LABA</th><th></th></tr>
    <?php
    foreach ($data_stok as $m){
        echo "<tr>
              <td>$m->kode_obat</td>
              <td>$m->stok_akhir</td>
              <td>$m->harga_jual_akhir</td>
              <td>$m->nilai_laba_akhir</td>
              <td>".anchor('kelola_stok_obat/edit/'.$m->kode_obat,'Baca')."
              </tr>";
    }
  
    ?>
</table>
</div>
</div>