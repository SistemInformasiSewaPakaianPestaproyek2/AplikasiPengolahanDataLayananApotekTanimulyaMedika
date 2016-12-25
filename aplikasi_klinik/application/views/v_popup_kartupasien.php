<html>
<head>
<title>Cetak Kartu Pasien</title>
<style>
body{
font-family:arial;
}
</style>
</head>
<body>



<table class="tabel_1" width="500" align="center" bgcolor="#80FFBF">

<tr><td width="150" colspan="2" align="center">KLINIK TANIMULYA MEDIKA</td></tr>
<tr><td width="150" colspan="2" align="center"><p><font size="2">Jl. H.Gofur Kp.Rawa Tengah No.24 RT.02 RW.07 Desa. Tani Mulya Kec.Ngamprah</font></td></tr>
<tr><td></td></tr>
<tr><td width="150" colspan="2" align="center">KARTU PASIEN</td>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td width="150">Kode Pasien</td><td>:<?php echo $detail_pasien['kode_pasien'];?></td></tr>

<tr><td width="150">Nama</td><td>: <?php echo $detail_pasien['nama'];?></td></tr>
<tr><td width="150">Umur</td><td>: <?php echo $detail_pasien['umur'];?></td></tr>
<tr><td width="150">Alamat</td><td>: <?php echo $detail_pasien['alamat'];?></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td width="150" colspan="2" align="right">Tiap berobat kartu ini harap dibawa</td>
</table>

<p><a href="javascript:window.print()">
Klik disini</a> untuk mencetak kartu.
<p>
