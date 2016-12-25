<html>
<head>
<title>Memunculkan Table Pengunjung </title>
</head>
<body>
	<form method="post" action="<?php echo base_url()."index.php/datapasien/do_insert"?>">
	<table>
    	<tr>
        	<td>
            	Kode Daftar Pasien
            </td>
            <td>
            	<input type="text" name ="kode_pasien" />
            </td>
        </tr>
        <tr>
        	<td>
            	Nama 
            </td>
            <td>
            	<input type="text" name ="nama" />
            </td>
        </tr>
        <tr>
        	<td>
            	Umur
            </td>
            <td>
            	<input type="text" name ="umur" />
            </td>
        </tr>
        <tr>
        	<td>
            	Alamat
            </td>
            <td>
            	<textarea name ="alamat"></textarea>
            </td>
        </tr>
        <td>
        </td>
        <td>
        	<input type="submit" name="btnSubmit" value="simpan"/>
        
        	<input type="submit" name="btnSubmit" value="tampilkan data"/>
        </td>
</table></form>
</body>
</html>