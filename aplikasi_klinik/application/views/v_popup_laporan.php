<html>
<head>
<title>Laporan Harian</title>
<style>
body{
font-family:arial;
}
</style>
</head>
<body>

<h3 align="center">KLINIK TANIMULYA MEDIKA</h3>
<p align="center">Jl. H.Gofur Kp.Rawa Tengah No.24 RT.02 RW.07 Desa. Tani Mulya Kec.Ngamprah Kab.Bandung Barat-JAWA BARAT</p>
<hr/>
<br/>
<h4 align="center">LAPORAN HARIAN</h4></p>

<br/>

<br>
<br>
<br>
<br/>




<table class="tabel_1" width="700" align="left" border="0">

<tr><td width="150">Tanggal</td><td>: Bandung,<?php echo $detail_laporan['tanggal'];?></td></tr>
<tr><td width="150">Jumlah Pasien</td><td>: <?php echo $detail_laporan['jumlah_pasien'];?></td></tr>
<tr><td width="150">Dokter</td><td>: <?php echo $detail_laporan['nama_dokter'];?></td></tr>
</table>
<br>
<table class="tabel_1" width="700" align="left" border="0">

<tr><td width="150">Detail Honor Dokter : </td>
<tr><td width="150">Jumlah Injeksi </td><td>: <?php echo $detail_laporan['jumlah_injeksi'];?> x 25000 20% = Rp. <?php echo $detail_laporan['hargainjeksi_dokter'];?></td></tr><br>
<tr><td width="150">Jumlah nebu </td><td>: <?php echo $detail_laporan['jumlah_nebu'];?> x 30000 20% = Rp. <?php echo $detail_laporan['harganebu_dokter'];?></td></tr><br>
<tr><td width="150">Jumlah Injeksi </td><td>: <?php echo $detail_laporan['jumlah_guladarah'];?> x 2000 = Rp. <?php echo $detail_laporan['hargaguladarah_dokter'];?></td></tr><br>
<tr><td width="150">Jumlah Asam Urat </td><td>: <?php echo $detail_laporan['jumlah_asamurat'];?> x 2000 = Rp. <?php echo $detail_laporan['hargaasamurat_dokter'];?></td></tr><br>
<tr><td width="150">Jumlah Kolesterol </td><td>: <?php echo $detail_laporan['jumlah_kolesterol'];?> x 2000  = Rp. <?php echo $detail_laporan['hargakolesterol_dokter'];?></td></tr><br>
<tr><td width="150">Total Honor Dokter </td><td>: <?php echo $detail_laporan['hargatotal_dokter'];?>
</td></tr>

<tr><td width="150">.</td>
<tr><td width="150">Detail Honor Petugas  </td><td>:</td>
<tr><td width="150">Jumlah Injeksi </td><td>: <?php echo $detail_laporan['jumlah_pasien'];?> x 25000 20% = Rp. <?php echo $detail_laporan['hargapasien_petugas'];?></td></tr>
<tr><td width="150">Jumlah nebu </td><td>: <?php echo $detail_laporan['jumlah_nebu'];?> x 30000 20% = Rp. <?php echo $detail_laporan['harganebu_petugas'];?></td></tr>
<tr><td width="150">Total Honor petugas </td><td>: <?php echo $detail_laporan['hargatotal_petugas'];?>

</td>
</tr>
</table>



</p>

<p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="javascript:window.print()">
Klik disini</a> untuk mencetak laporan harian.
</p>


</body>
</html>
