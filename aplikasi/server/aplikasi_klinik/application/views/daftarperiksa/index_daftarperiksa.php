<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" />
<div class="konten">
<h3>Daftar Periksa</h3>
        <form name="form2" method="POST" action="<?php echo base_url()."index.php/daftarperiksa/simpan";?>">
            <p>
              <label for="nama">Kode         :</label> <input type="text" name="kode_pasien"></p>
            <p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Daftar">
            </p>
            
            <p>
             <!-- <a href="daftarperiksa">Batal</a>-->
            </p>
            <p><b>
                *** Catatan<br>
            	Pastikan anda sudah mendaftar terlebih dahulu.<br>
            	Jika belum mendaftar pilih menu DAFTAR pada web.</b>
            </p>
<?php
/*if(is_array($posting)){
	$data='';
	$no=1;
	foreach($posting as $key){
		$data .= '<tr>
					<td height="20">'.$no.'</td>
					<td>'.$key->kode_periksa.'</td>
					<td>'.$key->kode_pasien.'</td>
					<td>'.$key->tanggal.'</td>
					<td>
						<a href="'.base_url().'index.php/daftar_cetak/baca/'.$key->kode_periksa.'">Baca</a> 
						
				  </tr>';
		$no++;
	}
}
?>

<table width="670" cellspacing="0" cellpadding="0">
	<tr>
		<td height="25" colspan="3">DAFTAR PASIEN</td>
	</tr>
	<tr>
		<td height="20" width="30">No</td>
        <td width="550">Kode Periksa</td>
		<td width="550">Kode Pasien</td>
        <td width="550">Nama</td>
		<td width="100">Menu</td>
	</tr>
	<?php echo $data; ?>
</table>
</div>
<?php if (! empty($tabel_data)) : ?>
<?php echo $tabel_data; ?>    
<?php endif */?>