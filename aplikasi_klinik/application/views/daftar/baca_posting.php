<html>
<body>
<?php /*<style type="text/css">
	h3.judul{
		display:block;
		line-height:40px;
		border-bottom:silver 2px double;
	}
	p.penulis,p.tanggal{
		display:block;
		line-height:20px;
		border-bottom:silver 2px solid;
	}
</style>*/?>
<?php
echo '<h3> KARTU PASIEN </h3>';
if(is_array($baca)){
	foreach($baca as $key){
		echo '<h3>Data Anda  ';
		echo '<h4>','Kode Pasien :'. $key->kode_pasien.'</h4>';
		echo '<h4>Nama :  '. $key->nama;
		echo '<p>','Alamat :  '. $key->alamat.'</p>';
		echo '<p>','Umur :  '. $key->umur.'</p>';
		}
}
?>
<div id="bottom_link">
    <?php echo anchor('#','Download', array('class' => 'add')) ?>
</div>
</body>

