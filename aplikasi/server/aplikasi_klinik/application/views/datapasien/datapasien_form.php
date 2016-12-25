<?php
$form = array(
    /*'kode_pasien' => array(
                        'name'=>'kode_pasien',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('kode_pasien', isset($form_value['kode_pasien']) ? $form_value['kode_pasien'] : '')
                  ),*/
    'nama'    => array(
                        'name'=>'nama',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('nama', isset($form_value['nama']) ? $form_value['nama'] : '')
                  ),
	 'umur'    => array(
                        'name'=>'umur',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('umur', isset($form_value['umur']) ? $form_value['umur'] : '')
                  ),
	'jenkel'    => array(
                        'name'=>'jenkel',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('jenkel', isset($form_value['jenkel']) ? $form_value['jenkel'] : '')
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
        <?php echo form_label('Kode Pasien', 'kode_pasien'); ?>
        <?php echo form_input($form['kode_pasien']); ?>
	</p>
	<?php echo form_error('kode_pasien', '<p class="field_error">', '</p>');?>-->
	
	<p>
        <?php echo form_label('Nama ', 'nama'); ?>
        <?php echo form_input($form['nama']); ?>
	</p>
	<?php echo form_error('nama', '<p class="field_error">', '</p>');?>	
    
    <p>
        <?php echo form_label('Umur ', 'umur'); ?>
        <?php echo form_input($form['umur']); ?>
	</p>
	<?php echo form_error('umur', '<p class="field_error">', '</p>');?>	
    
    <!--JENKEL-->
	<p>
    	<?php echo form_label ('Jenis Kelamin','jenkel'); ?>
        <?php echo form_radio ('jenkel','Perempuan', set_radio ('jenkel','Perempuan',isset ($form_value['jenkel']) && $form_value['jenkel'] == 'Perempuan' ? TRUE : FALSE )); ?> (Perempuan)
        
   
    	
        <?php echo form_radio ('jenkel','Laki-laki', set_radio ('jenkel','Laki-laki',isset ($form_value['jenkel']) && $form_value['jenkel'] == 'Laki-laki' ? TRUE : FALSE )); ?> (Laki-laki)
 	</p>
    
    <?php echo form_error ('jenkel','<p class="field_error">', '</p>');?>
<!--END JENKEL-->
    
    
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
        <?php echo form_submit($form['submit']); ?>
        <?php echo anchor('datapasien','Batal', array('class' => 'cancel')) ?>
	</p>
<?php echo form_close(); ?>
<!-- form end -->
