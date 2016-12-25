<html>
<head>
<title>Memunculkan Table Pengunjung </title>
</head>
<body>
	<div class ="anggota">
	<div class="clearfix"></div>
		<div class="konten">
		<div class="posting">
	<table border ="1" style="border-collapse; width:50%;">
    	<tr style="background:gray;">
        	<th>Kode Pasien</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Action</th>
           </tr>
          <?php
		  
		  foreach($data as $d){?>
			<tr>
            	<td><?php echo $d['kode_pasien'];?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['umur'];?></td>
                <td><?php echo $d['alamat'];?></td>
               <td align="center">
               	<a href="#">Edit</a>||
                <a href="#">Delete</a>
               </td>
               </tr>
            <?php } ?>
</table>

	<a href="#">Tambah Data</a>
    </div>
    </div>
    </div>
    

</body>
</html>