<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" />
<div class="konten">
<h3>Data Obat</h3>
        <form name="form2" method="POST" action="<?php echo base_url()."index.php/kelola_bpjs/create";?>">
            <p>
              <table><tr><td>
              <label for="nama">Kode Pendaftaran :</label> <input type="text" name="kode_bpjs1"></td></p>
            <p>
                <p><tr><td>
              <label for="nama">Kode BPJS         :</label> <input type="text" name="kode_bpjs"></td></tr></p>
            <p>
                <p><tr><td>
              <label for="nama">Kode Pasien    :</label> <input type="text" name="kode_pasien"></td></tr></p>
            <p><tr><td>
              <input type="submit" name="submit" id="submit" value="Simpan"></td></tr>
            </p>
            </table>
            <p>
             <!-- <a href="daftarperiksa">Batal</a>-->
            </p>
            <p><b>
                *** Catatan<br>
            	Pastikan anda sudah mendaftar terlebih dahulu.<br>
            	Jika belum mendaftar pilih menu DAFTAR pada web.</b>
            </p>
<?php