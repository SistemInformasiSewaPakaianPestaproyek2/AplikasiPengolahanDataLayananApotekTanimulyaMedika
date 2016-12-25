<html>
<head>
<title>Memunculkan Table Pengunjung </title>
</head>
<body>
<div class "anggota">
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
		  
		  foreach($tampil as $d){?>
			<tr>
            	<td><?php echo $d['kode_pasien'];?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['umur'];?></td>
                <td><?php echo $d['alamat'];?></td>
               <td align="center">
               	<a href="<?php echo base_url()."index.php/tambah_pasien/edit_data/".$d['kode_pasien'];?>">Edit</a>||
                <a href="<?php echo base_url()."index.php/tambah_pasien/do_delete/".$d['kode_pasien'];?>">Delete</a>
               </td>
               </tr>
            <?php } ?>
</table>

	<a href="<?php echo base_url()."index.php/tambah_pasien/";?>">Tambah Data</a>
    </div>
    </div>
    </div>

</body>
</html>