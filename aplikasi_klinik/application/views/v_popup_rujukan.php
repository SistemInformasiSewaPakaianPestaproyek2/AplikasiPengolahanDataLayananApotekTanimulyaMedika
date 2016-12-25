<html>
<head>
<title>Surat Rujukan</title>
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
<h4 align="center">SURAT RUJUKAN

<br/>
Nomor : <?php echo $detail_rujukan['kode_rujukan'];?></h4>
<br>
<br>
<br>
<br>
<br/>
<?php
// mengambil tgl berita acara dari field tgl_berita_acara
// memecahnya dengan fungsi explode berdasarkan tanda - (strip)
// disimpan dalam variabel $parameter
$parameter=explode('-',$detail_rujukan['tanggal']);
$tahun=$parameter[0];
$bulan=$parameter[1];
//untuk tanggal dibawah  10 maka dibuang nol nya  
if(substr($parameter[2],0,1)==0) {$tanggal=substr($parameter[2],1,1);} else {$tanggal=$parameter[2];}
?>
<!--<p>Pada hari ini <?php echo nama_hari($bulan,$tanggal,$tahun);?>, tanggal <?php echo terbilang($tanggal);?> bulan  <?php echo bulan_indonesia($bulan);?> tahun <?php echo terbilang($tahun);?> yang bertanda tangan dibawah ini :</p>-->
<p align="right">Bandung <?php echo $detail_rujukan ['tanggal'];?><br><br></p>
<table class="tabel_1" width="700" align="center">
<p>T.S Yth.<br><?php echo $detail_rujukan ['kepada'];?>
<!--<tr><td width="150">Nama Lengkap</td><td>:<?php echo $detail_rujukan['nama_dokter'];?></td></tr>-->
<!--<tr><td>Jabatan</td><td>: DOKTER UMUM</td></tr>-->
</table>

<p>Mohon konsult dan pengobatan/perawatan selajutnya dari O.S. :</p>

<table class="tabel_1" width="700" align="center" border="0">

<tr><td width="150">Nama Lengkap</td><td>: <?php echo $detail_rujukan['nama'];?></td></tr>
<tr><td width="150">Umur</td><td>: <?php echo $detail_rujukan['umur'];?></td></tr>

</table>
<!--<tr><td width="150">Alamat</td><td>: <?php echo $detail_rujukan['alamat'];?></td></tr>-->
<p> Dengan keluhan/kemungkinan : <?php echo $detail_rujukan['keluhan'];?> </p>
<p>Telah/belum saya beri obat : <?php echo $detail_rujukan['sudahbelum'];?><br>
<br>
<br>
<br>
<br></p>
<!--<tr><td width="150">Keluhan</td><td>: <?php echo $detail_rujukan['keluhan'];?></td></tr>-->


<p>Demikian Surat Rujukan ini dibuat untuk digunakan seperlunya.</p>
<p>Terimakasih
<br>
<br>
<br>
<br>
<br>
</p>


<p align="right">Bandung, <?php echo $detail_rujukan['tanggal']?><br/>
</p>
<br/>
<br/>
<br>
<br>
<p align="right"><b><?php echo $detail_rujukan['nama_dokter'];?><br/>
</b></p>


<p><a href="javascript:window.print()">
Klik disini</a> untuk mencetak halaman
<p>
<!--<?php
$link_download=($download_pdf == TRUE)?'':anchor(base_url().'popup/surat_rujukan/true/','Download Pdf');

?>-->
<body>
</html>
