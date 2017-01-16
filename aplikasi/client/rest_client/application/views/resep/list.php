<div class="konten">
  <div class= "artikel">
<?php echo $this->session->flashdata('pesan'); ?>
<table><td>
<table>
    <tr><th>KODE RESEP</th><th>NAMA PASIEN</th><th>NAMA DOKTER</th><th>KODE OBAT</th><th>JENIS</th><th>QTY</th><th>DOSIS</th><th>ATURAN PAKAI</th><th>KETERANGAN</th><th>TANGGAL</th><th></th></tr>
    <?php
    foreach ($kelola_resep as $m){
        echo "<tr>
              <td>$m->kode_resep</td>
              <td>$m->nama_pasien</td>
              <td>$m->nama_dokter</td>
              <td>$m->nama_obat</td>
              <td>$m->jenis</td>
              <td>$m->qty</td>
              <td>$m->dosis</td>
              <td>$m->aturan_pakai</td>
              <td>$m->keterangan</td>
              <td>$m->tanggal</td>
              <td>".anchor('resep/edit/'.$m->kode_resep,'Lihat')."</td>
              </tr>";
        //echo ".anchor('mahasiswa/edit/','Tambah').";
             
    }
  
    ?>
         <tr><th>
              <input type="text" name="nama_obat"></th><th><input type="submit" name="submit2" id="submit2" value="SEARCH">
            </th></tr></table>
</div>
</div>