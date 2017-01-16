<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" />
<div class="konten">
<h3>Data Obat</h3>
        <form name="form2" method="POST" action="<?php echo base_url()."index.php/kelola_data_obat/create";?>">
            <p>
              <table><tr><td>
              <label for="nama">Kode :</label> <input type="text" name="kode_obat"></td></p>
            <p>
                <p><tr><td>
              <label for="nama">Nama         :</label> <input type="text" name="nama_obat"></td></tr></p>
            <p>
                <p><tr><td>
              <label for="nama">Stok Awal    :</label> <input type="text" name="stok_awal"></td></tr></p>
            <p>
                <p><tr><td>
              <label for="nama">Penambahan   :</label> <input type="text" name="penambahan"></td></tr></p>
            <p>
                <p><tr><td>
              <label for="nama">Total         :</label> <input type="text" name="total"></td></tr></p>
            <p>
                <p><tr><td>
              <label for="nama">Harga Beli    :</label> <input type="text" name="harga_beli"></td></tr></p>
            <p>
                <p><tr><td>
              <label for="nama">Harga Jual    :</label> <input type="text" name="harga_jual"></td></tr></p>
            <p>
                <p><tr><td>
              <label for="nama">Nilai Laba    :</label> <input type="text" name="nilai_laba"></td></tr></p>
            <p>
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