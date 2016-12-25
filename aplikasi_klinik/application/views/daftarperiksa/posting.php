<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" />
<div class="konten">
<?php
//$posting=posting();
if(is_array($posting)){
	$data='';
	$no=1;
	foreach($posting as $key){
		$data .= '<tr>
					<td height="20">'.$no.'</td>
					<td height="20">'.$key->kode_periksa.'</td>
					<td>'.$key->kode_pasien.'</td>
					<td>'.$key->tanggal.'</td>
					<td>
						<a href="'.base_url().'index.php/popup3/cetak_daftarperiksa/'.$key->kode_periksa.'">Baca</a> 
						
				  </tr>';
		$no++;
	}
}
?>
<style type="text/css">
table{
	border:silver 1px solid;
	color:#666666;
}
table tr td{
	padding:0 5px 0 5px;
	border-bottom:silver 1px solid;
	border-right:silver 1px solid;
}
a{
	font:normal 12px Tahoma,Verdana;
	color:blue;
	text-decoration:none;
}
a:hover{
	color:#ff9900;
}
</style>
<table width="670" cellspacing="0" cellpadding="0">
	<tr>
		<td height="25" colspan="3">DAFTAR ANTRIAN</td>
	</tr>
	<tr>
		<td height="20" width="30">No</td>
        <td height="20" width="30">Nomor Antrian</td>
		<td width="550">Kode Pasien</td>
        <td width="550">Tanggal</td>
		<td width="100">Menu</td>
	</tr>
	<?php echo $data; ?>
</table>
</div>
<?php //<h2><?php echo $breadcrumb?>
<?php //if(!empty($tabel)):?>
	<?php //echo $table; ?>
<?php //endif ?>
