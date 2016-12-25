<html>
<head>
<title>Cetak Nomor Antrian</title>
<style>
body{
font-family:arial;
}
</style>
</head>
<body>

<h4 align="center">Cetak Nomor Antrian</h4>


<table class="tabel_1" width="500" align="center" bgcolor="#80FFBF">

<tr><td width="150" colspan="2" align="center">KLINIK TANIMULYA MEDIKA</td></tr>
<tr><td width="150" colspan="2" align="center"><p><font size="2">Jl. H.Gofur Kp.Rawa Tengah No.24 RT.02 RW.07 Desa. Tani Mulya Kec.Ngamprah</font></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td width="150">Tanggal</td><td>: <?php echo $detail_periksa['tanggal'];?></td></tr>
<tr><td width="150">Kode Pasien</td><td>: <?php echo $detail_periksa['kode_pasien'];?></td></tr>
<tr><td width="150">Nama</td><td>: <?php echo $detail_periksa['nama'];?></td></tr>
<tr><td width="150">Nomor Antrian</td><td>: <?php echo $detail_periksa['kode_periksa'];?></td></tr>
</table>

<p><a href="javascript:window.print()">
Klik disini </a> untuk mencetak nomor antrian.
<br/>
<br/>
<br>
<br>
</b></p>
<body>
</html>
