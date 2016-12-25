<ul id="menu_tab">	
	<li id="tab_pasien"><?php echo anchor('datapasien', 'Data Pasien');?></li>
	<li id="tab_dokter"><?php echo anchor('datadokter', 'Data Dokter Umum');?></li>
    <li id="tab_dokter"><?php echo anchor('datadokteranak', 'Data Dokter Anak');?></li>
	<li id="tab_petugas"><?php echo anchor('datapetugas', 'Data Petugas');?></li>
	<li id="tab_pembukuan"><?php echo anchor('laporan', 'Laporan');?></li>
	<li id="tab_logout"><?php echo anchor('login/logout', 'Logout', array('onclick' => "return confirm('Anda yakin akan logout?')"));?></li>
</ul>

<!--anchor('modul-modul yang ada di controller','Nama buat di navigasi') --!>
