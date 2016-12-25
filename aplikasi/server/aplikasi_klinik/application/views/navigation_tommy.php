<ul id="menu_tab">	
	<li id="tab_pasien"><?php echo anchor('rekammedistommy', 'Rekam Medis');?></li>
	<li id="tab_dokter"><?php echo anchor('rujukan', 'Rujukan');?></li>
	<li id="tab_logout"><?php echo anchor('login2/logout', 'Logout', array('onclick' => "return confirm('Anda yakin akan logout?')"));?></li>
</ul>

<!--anchor('modul-modul yang ada di controller','Nama buat di navigasi') --!>