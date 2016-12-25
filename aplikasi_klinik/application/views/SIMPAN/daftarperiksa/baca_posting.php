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
if(is_array($baca)){
	foreach($baca as $key){
		echo '<h3 class="kode_pasien">'. $key->kode_pasien.'</h3>';
		echo $key->nama;
		echo '<p class="alamat">'. $key->alamat.'</p>';
		echo '<p class="umur">'. $key->umur.'</p>';
		}
}
?>
<div id="bottom_link">
    <?php echo anchor('#','Download', array('class' => 'add')) ?>
</div>
