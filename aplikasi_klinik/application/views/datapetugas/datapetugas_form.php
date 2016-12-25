<?php
$form = array(
   /* 'kode_petugas' => array(
                        'name'=>'kode_petugas',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('kode_petugas', isset($form_value['kode_petugas']) ? $form_value['kode_petugas'] : '')
                  ),*/
    'nama'    => array(
                        'name'=>'nama',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('nama', isset($form_value['nama']) ? $form_value['nama'] : '')
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
	 'telepon'    => array(
                        'name'=>'telepon',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('telepon', isset($form_value['telepon']) ? $form_value['telepon'] : '')
                  ),							
	 'strttk'    => array(
                        'name'=>'strttk',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('umur', isset($form_value['strttk']) ? $form_value['strttk'] : '')
                  ),
	'jabatan'    => array(
                        'name'=>'jabatan',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('jabatan', isset($form_value['jabatan']) ? $form_value['jabatan'] : '')
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
        <?php echo form_label('Kode petugas', 'kode_petugas'); ?>
        <?php echo form_input($form['kode_petugas']); ?>
	</p>
	<?php echo form_error('kode_petugas', '<p class="field_error">', '</p>');?>-->
	
	<p>
        <?php echo form_label('Nama ', 'nama'); ?>
        <?php echo form_input($form['nama']); ?>
	</p>
	<?php echo form_error('nama', '<p class="field_error">', '</p>');?>	
    
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
        <?php echo form_label('No Telepon ', 'telepon'); ?>
        <?php echo form_input($form['telepon']); ?>
	</p>
	<?php echo form_error('telepon', '<p class="field_error">', '</p>');?>	
    
	<p>
        <?php echo form_label('No STRTTK ', 'strttk'); ?>
        <?php echo form_input($form['strttk']); ?>
	</p>
	<?php echo form_error('strttk', '<p class="field_error">', '</p>');?>	

<p>
        <?php echo form_label('Jabatan ', 'jabatan'); ?>
        <?php echo form_input($form['jabatan']); ?>
	</p>
	<?php echo form_error('jabatan', '<p class="field_error">', '</p>');?>	

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
        <?php echo anchor('datapetugas','Batal', array('class' => 'cancel')) ?>
	</p>
<?php echo form_close(); ?>
<!-- form end -->
