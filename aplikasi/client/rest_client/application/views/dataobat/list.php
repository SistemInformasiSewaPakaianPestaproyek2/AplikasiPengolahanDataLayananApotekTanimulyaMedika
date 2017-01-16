<div class="konten">
  <div class= "artikel">
<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>KODE OBAT</th><th>NAMA OBAT</th><th>STOK AWAL</th><th>PENAMBAHAN</th><th>TOTAL</th><th>HARGA BELI</th><th>HARGA JUAL</th><th>NILAI LABA</th><th></th></tr>
    <?php
    foreach ($data_obat as $m){
        echo "<tr>
              <td>$m->kode_obat</td>
              <td>$m->nama_obat</td>
              <td>$m->stok_awal</td>
              <td>$m->penambahan</td>
              <td>$m->total</td>
              <td>$m->harga_beli</td>
              <td>$m->harga_jual</td>
              <td>$m->nilai_laba</td>
              <td>".anchor('kelola_data_obat/edit/'.$m->kode_obat,'Edit')."
                  ".anchor('kelola_data_obat/delete/'.$m->kode_obat,'Delete')."</td>
              </tr>";

        echo "<tr>
              <td>".anchor('kelola_data_obat/form_data/','Tambah')."</td>
              </tr>";
    }
  
    ?>
</table>
</div>
</div>