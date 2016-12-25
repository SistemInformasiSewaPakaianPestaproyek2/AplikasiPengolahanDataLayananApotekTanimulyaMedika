<html>
	<head>
    	<title><?php echo $judul;?></title>
        </head>
        <body>
        <h1> Tambah Data Pasien </h1>
        <form action="simpan_datapasien" method="post">
        	<table>
            	<tr>
                	<td>Nama </td>
                    <td><input type="text" name="nama"/></td>
                 </tr>
                 <tr>
                 	<td>Umur </td>
                    <td><input type="text" name="umur"/></td>
                 </tr>
                 <tr>
                 	<td>Alamat</td>
                    <td><textarea name="alamat" style="height:: 80px;"></textarea></td>
                 </tr>
                 <tr>
                 	<td></td>
                    <td><input type="submit" value="Simpan"/></td>
                 </tr>
             </table>
          </form>
          

          
                
          </body>
          </html>