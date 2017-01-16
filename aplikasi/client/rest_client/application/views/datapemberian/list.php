<div class="konten">
  <div class= "artikel">
<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>KODE PEMBERIAN</th><th>KODE PASIEN</th><th>KODE DOKTER</th><th>KODE RESEP</th><th>KODE PEMBELIAN</th><th>KODE JENIS</th><th>KODE DETAIL</th><th>KODE OBAT</th><th>TANGGAL</th><th></th></tr>
    <?php
    foreach ($pemberian_obat as $m){
        echo "<tr>
              <td>$m->kode_pemberian</td>
              <td>$m->kode_pasien</td>
              <td>$m->kode_dokter</td>
              <td>$m->kode_resep</td>
              <td>$m->kode_pembelian</td>
              <td>$m->kode_jenis</td>
              <td>$m->kode_detail</td>
              <td>$m->kode_obat</td>
              <td>$m->tanggal</td>
              <td>".anchor('kelola_data_pemberian/edit/'.$m->kode_pemberian,'Edit')."
                  ".anchor('kelola_data_pemberian/delete/'.$m->kode_pemberian,'Delete')."</td>
              </tr>";
    }
  
    ?>
    <tr><th>
             <input type="submit" name="submit2" id="submit2" value="Tambah"></th><th><input type="submit" name="submit2" id="submit2" value="Salinan Resep"></th>
</table>
</div>
</div>