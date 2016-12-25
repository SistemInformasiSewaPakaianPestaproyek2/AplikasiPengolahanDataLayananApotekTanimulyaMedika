<?php
$form = array(
   /* 'kode_dokter' => array(
                        'name'=>'kode_pdokter',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('kode_dokter', isset($form_value['kode_dokter']) ? $form_value['kode_dokter'] : '')
                  ),*/
    'nama_dokter'    => array(
                        'name'=>'nama_dokter',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('nama_dokter', isset($form_value['nama_dokter']) ? $form_value['nama_dokter'] : '')
                  ),
	 'ttl'    => array(
                        'name'=>'ttl',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('umur', isset($form_value['ttl']) ? $form_value['ttl'] : '')
                  ),
	 'alamat'    => array(
                        'name'=>'alamat',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('alamat', isset($form_value['alamat']) ? $form_value['alamat'] : '')
                  ),		
	 'str'    => array(
                        'name'=>'str',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('umur', isset($form_value['str']) ? $form_value['str'] : '')
                  ),
	'telp'    => array(
                        'name'=>'telp',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('telp', isset($form_value['telp']) ? $form_value['telp'] : '')
                  ),
	'jabatan'    => array(
                        'name'=>'jabatan',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('jabatan', isset($form_value['jabatan']) ? $form_value['jabatan'] : '')
                  ),  			  
	 'jadwal'  => array(
                        'name'=>'jadwal',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('jadwal', isset($form_value['jadwal']) ? $form_value['jadwal'] : '')
                  ),	
				  		  		  			  	
    'submit'   => array(
                        'name'=>'submit',
                        'id'=>'submit',
                        'value'=>'Simpan'
                  )
    );
?>
<h2><?php echo $breadcrumb ?></h2>

<!-- pesan start -->
<?php $flash_pesan = $this->session->flashdata('pesan')?>
<?php if (! empty($flash_pesan)) : ?>
    <div class="pesan">
        <?php echo $flash_pesan; ?>
    </div>
<?php endif ?>
<!-- pesan end -->

<!-- form start -->
<?php echo form_open($form_action); ?>
	<!--<p>
        <?php echo form_label('Kode Dokter', 'kode_dokter'); ?>
        <?php echo form_input($form['kode_dokter']); ?>
	</p>
	<?php echo form_error('kode_dokter', '<p class="field_error">', '</p>');?>-->
	
	<p>
        <?php echo form_label('Nama ', 'nama_dokter'); ?>
        <?php echo form_input($form['nama_dokter']); ?>
	</p>
	<?php echo form_error('nama_dokter', '<p class="field_error">', '</p>');?>	
    
    <p>
        <?php echo form_label('Tempat/ tanggal lahir ', 'ttl'); ?>
        <?php echo form_input($form['ttl']); ?>
	</p>
	<?php echo form_error('ttl', '<p class="field_error">', '</p>');?>	
    
    <p>
        <?php echo form_label('Alamat ', 'alamat'); ?>
        <?php echo form_input($form['alamat']); ?>
	</p>
	<?php echo form_error('alamat', '<p class="field_error">', '</p>');?>	

	<p>
        <?php echo form_label('No STR ', 'str'); ?>
        <?php echo form_input($form['str']); ?>
	</p>
	<?php echo form_error('str', '<p class="field_error">', '</p>');?>	
    
     <p>
        <?php echo form_label('No Telp ', 'telp'); ?>
        <?php echo form_input($form['telp']); ?>
	</p>
	<?php echo form_error('telp', '<p class="field_error">', '</p>');?>	
    
<!--JABATAN-->
	<p>
    	<?php echo form_label ('Jabatan','jabatan'); ?>
        <?php echo form_radio ('jabatan','Dokter Umum', set_radio ('jabatan','Dokter Umum',isset ($form_value['jabatan']) && $form_value['jabatan'] == 'Dokter Umum' ? TRUE : FALSE )); ?> (Dokter Umum)
        
        <?php echo form_radio ('jabatan','Dokter Anak', set_radio ('jabatan','Dokter Anak',isset ($form_value['jabatan']) && $form_value['jabatan'] == 'Dokter Anak' ? TRUE : FALSE )); ?> (Dokter Anak)
 	</p>
    
    <?php echo form_error ('jabatan','<p class="field_error">', '</p>');?>
<!--END JABATAN-->        


    <p>
        <?php echo form_label('Jadwal ', 'jadwal'); ?>
        <?php echo form_input($form['jadwal']); ?>
	</p>
	<?php echo form_error('jadwal', '<p class="field_error">', '</p>');?>	


<!--STATUS-->
	<p>
    	<?php echo form_label ('Status','status'); ?>
        <?php echo form_radio ('status','Aktif', set_radio ('status','Aktif',isset ($form_value['status']) && $form_value['status'] == 'Aktif' ? TRUE : FALSE )); ?> (Aktif)
        
        <?php echo form_radio ('status','Non Aktif', set_radio ('status','Non Aktif',isset ($form_value['status']) && $form_value['status'] == 'Non Aktif' ? TRUE : FALSE )); ?> (Non Aktif)
 	</p>
    
    <?php echo form_error ('status','<p class="field_error">', '</p>');?>
<!--END STATUS-->        
	<p>
        <?php echo form_submit($form['submit']); ?>
        <?php echo anchor('datadokteranak','Batal', array('class' => 'cancel')) ?>
	</p>
<?php echo form_close(); ?>
<!-- form end -->
