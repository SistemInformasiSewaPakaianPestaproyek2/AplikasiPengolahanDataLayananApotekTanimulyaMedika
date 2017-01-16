<div class="konten">
  <div class= "artikel">
<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>KODE OBAT</th><th>NAMA OBAT</th><th>STOK AWAL</th><th>PENAMBAHAN</th><th>TOTAL</th><th>HARGA BELI</th><th>HARGA JUAL</th><th>NILAI LABA</th><th></th></tr>
    <?php
    foreach ($bpjs as $m){
        echo "<tr>
              <td>$m->kode_pendaftaran</td>
              <td>$m->kode_bpjs</td>
              <td>$m->nama_pasien</td>
              <td>$m->umur_pasien</td>
              <td>$m->jenkel_pasien</td>
              <td>$m->alamat_pasien</td>
              <td>$m->telepon_pasien</td>
              <td>".anchor('kelola_bpjs/edit/'.$m->kode_pendaftaran,'Edit')."
                  ".anchor('kelola_bpjs/delete/'.$m->kode_pendaftaran,'Delete')."</td>
              </tr>";

        echo "<tr>
              <td>".anchor('kelola_bpjs/form_data/','DAFTAR')."</td>
              </tr>";
    }
  
    ?>
    
</table>
</div>
</div>