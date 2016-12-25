<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1>Daftar Data Pasien</h1>
    <table border="1">
    	<thead>
        <tr>
        	<th>Nama </th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
       </tr>
       </thead>
       <tbody>
       <?php
				foreach ($daftar_datapasien as $datapasien){
					?>
                <tr>
                	<td><?php echo $datapasien->nama; ?></td>
                    <td><?php echo $datapasien->umur; ?></td>
                    <td><?php echo $datapasien->alamat; ?></td>
                    <td><?php echo '<a href="'.base_url().'index.php/datapasien_controller/delete_datapasien/'.$datapasien->kode_pasien.'" onclick="return confirm(\'Anda yakin akan menghapusnya ? '.$datapasien->nama.'?\')">Delete</a>'?></td>
                    </tr>
                    <?php } ?>
                   </tbody>
                  
                    </table>
       </table>
</body>
</html>
       
       