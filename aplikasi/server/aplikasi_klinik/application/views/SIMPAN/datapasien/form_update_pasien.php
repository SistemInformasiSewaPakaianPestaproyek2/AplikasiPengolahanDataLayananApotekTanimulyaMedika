<html>
<head>
<title>Memunculkan Table Pengunjung </title>
</head>
<body>
	<form method="post" action="<?php echo base_url()."index.php/tambah_pasien/";?>">
	<table>
    	<tr>
        	<td>
            	Kode Daftar Pasien
            </td>
            <td>
            	<input type="text" name ="kode_pasien1" value ="<?php echo $kode_pasien1;?>"/>
            </td>
        </tr>
        <tr>
        	<td>
            	Nama 
            </td>
            <td>
            	<input type="text" name ="nama_pasien" value ="<?php echo $nama_pasien;?>"/>
            </td>
        </tr>
        <tr>
        	<td>
            	Umur
            </td>
            <td>
            	<input type="text" name ="umur_pasien" value ="<?php echo $umur_pasien;?>"/>
            </td>
        </tr>
        <tr>
        	<td>
            	Alamat
            </td>
            <td>
            	<textarea name ="alamat_pasien" /><?php echo $alamat_pasien?></textarea></td>
            </td>
        </tr>
        <td>
        </td>
        <td>
        	<input type="submit" name="btnSubmit" value="simpan"/>
        </td>
</table></form>
</body>
</html>