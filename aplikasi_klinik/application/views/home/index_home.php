<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" />
<div class="konten">
<!--<div class="slider">-->
	<img src="<?php echo base_url(); ?>assets/images/gbr2.png">
</div>

	<!--konten bagian bawah-->
<div class "anggota">
<div class="clearfix"></div>
	<div class="konten">
		<div class="anggota">
			<div class="ringkasan">
			<h3>Jadwal Praktek Dokter</h3>
			<div class="ringkasan">
			
			 <?php if (is_array($posting)) {
			 $data='';
			 foreach($posting as $key) {
				$data .= '<tr>
							<td>'.$key->nama_dokter.'</td>
							<td>'.$key->jabatan.'</td>
							<td>'.$key->jadwal.'</td>
							</tr>';
							}
					}
					?>
			<table width="500" cellspacing="0" cellpadding ="0">
				<tr>
					<td height="25" width="20"><b>Nama Dokter</b></td>
					<td height="25" width="20"><b>Jabatan</b></td>
					<td height="25" width="20"><b>Jadwal</b></td>
					
					</tr>
					<?php echo $data; ?>
			</table>
			<table width="500" cellspacing="0" cellpadding ="0">
			<tr height="25" width="20">*Jadwal Praktek sewaktu-waktu dapat berubah</tr>
			
			</table>
			</table>
			<table width="500" cellspacing="0" cellpadding ="0">
			
			<tr height="25" width="20">**Praktek dimulai dari jam 09.00-21.00 WIB</tr>
			</table>
			</div>
			</div>
		</div>
	<div class="posting">
	<h3>Artikel Kesehatan</h3>
	<ul>
		<li><img src="<?php echo base_url(); ?>assets/images/ak259.jpg"><a href=<?php echo "http://localhost/aplikasi_klinik/index.php/artikel1";?>>10 Langkah untuk Menghindari Risiko Serangan Asam Urat</a></img></li>
		<li><img src="<?php echo base_url(); ?>assets/images/ak251.jpg"><a href=<?php echo "http://localhost/aplikasi_klinik/index.php/artikel2";?>>Asam Urat Dapat Disembuhkan dengan Mengatur Pola Makan</a></img></li>
        <li><img src="<?php echo base_url(); ?>assets/images/ak248.jpg"><a href=<?php echo "http://localhost/aplikasi_klinik/index.php/artikel3";?>>Menjaga Ginjal Tetap Sehat</a></img></li>
        <li><img src="<?php echo base_url(); ?>assets/images/ak301.jpg"><a href=<?php echo "http://localhost/aplikasi_klinik/index.php/artikel4";?>>Kenali Lemak dan Kolesterol Lebih Dekat</a></img></li>
        <li><img src="<?php echo base_url(); ?>assets/images/ak2.jpg"><a href=<?php echo "http://localhost/aplikasi_klinik/index.php/artikel5";?>>Kesadaran Melakukan Medical Check Up</a></img></li>
        
	</div>	
	</ul>
<p>&nbsp;</p>
	<p>
	</p>
		</div>
	</div>
