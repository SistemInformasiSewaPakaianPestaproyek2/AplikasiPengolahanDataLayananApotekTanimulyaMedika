<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" />
<div class="konten">
		<h3>Pendaftaran</h3>
        <form name="form2" method="POST" action="<?php echo base_url()."index.php/daftar/simpan";?>">
            <p>
              <label for="nama">Nama    :</label> <input type="text" name="nama"></p>
            <p>
              <label for="umur">Umur  :</label>
              <input type="text" name="umur">
            </p>
            <p>
              <label for="jenkel">Jenis Kelamin  :</label>
              <input type="radio" name="jenkel" value="Laki-laki">Laki-laki
              <input type="radio" name="jenkel" value="Perempuan" />Perempuan
            </p>
            <p>
              <label for="alamat">Alamat :</label>
              <input type="text" name="alamat">
            </p>
            <p>
              <label for="telepon">No telepon :</label>
              <input type="text" name="telepon">
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Daftar">
            </p>
            <p>
              <a href="daftar">Batal</a>
            </p>
		

</div>