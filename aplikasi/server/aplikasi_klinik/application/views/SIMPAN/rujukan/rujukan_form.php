<?php
$form = array(
    'kode_rujukan' => array(
                        'name'=>'kode_rujukan',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('kode_rujukan', isset($form_value['kode_rujukan']) ? $form_value['kode_rujukan'] : '')
                  ),
	 'tanggal'    => array(
                        'name'=>'tanggal',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('tanggal', isset($form_value['tanggal']) ? $form_value['tanggal'] : '')
                  ),
	 'kepada'    => array(
                        'name'=>'kepada',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('kepada', isset($form_value['kepada']) ? $form_value['kepada'] : '')
                  ),
	 'kode_pasien'    => array(
                        'name'=>'kode_pasien',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('kode_pasien', isset($form_value['kode_pasien']) ? $form_value['kode_pasien'] : '')
                  ),		
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
                        'value'=>set_value('telp', isset($form_value['umur']) ? $form_value['umur'] : '')
                  ),			  			  
	 'alamat'  => array(
                        'name'=>'alamat',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('alamat', isset($form_value['alamat']) ? $form_value['alamat'] : '')
                  ),
	'keluhan'  => array(
                        'name'=>'keluhan',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('keluhan', isset($form_value['keluhan']) ? $form_value['keluhan'] : '')
                  ),
	'kode_dokter'    => array(
                        'name'=>'kode_dokter',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('kode_dokter', isset($form_value['kode_dokter']) ? $form_value['kode_dokter'] : '')
                  ),		
	'nama_dokter'  => array(
                        'name'=>'nama_dokter',
                        'size'=>'30',
                        'class'=>'form_field',
                        'value'=>set_value('nama_dokter', isset($form_value['nama_dokter']) ? $form_value['nama_dokter'] : '')
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
        <?php echo form_label('Kode Rujukan', 'kode_rujukan'); ?>
        <?php echo form_input($form['kode_rujukan']); ?>
	</p>
	<?php echo form_error('kode_rujukan', '<p class="field_error">', '</p>');?>
	-->
	<p>
        <?php echo form_label('Tanggal ', 'tanggal'); ?>
        <?php echo form_input($form['tanggal']); ?>
	</p>
	<?php echo form_error('tanggal', '<p class="field_error">', '</p>');?>	
    
    <p>
        <?php echo form_label('Alamat Tujuan ', 'kepada'); ?>
        <?php echo form_input($form['kepada']); ?>
	</p>
	<?php echo form_error('kepada', '<p class="field_error">', '</p>');?>	
    
    <p>
        <?php echo form_label('Kode Pasien ','kode_pasien'); ?>
        <?php echo form_input($form['kode_pasien']); ?>
	</p>
	<?php echo form_error('kode_pasien', '<p class="field_error">', '</p>');?>	

	<p>
        <?php echo form_label('Keluhan ', 'keluhan'); ?>
        <?php echo form_input($form['keluhan']); ?>
	</p>
	<?php echo form_error('keluhan', '<p class="field_error">', '</p>');?>	
    
     <p>
        <?php echo form_label('Kode Dokter ', 'kode_dokter'); ?>
        <?php echo form_input($form['kode_dokter']); ?>
	</p>
	<?php echo form_error('kode_dokter', '<p class="field_error">', '</p>');?>	
    	

	<p>
        <?php echo form_submit($form['submit']); ?>
        <?php echo anchor('rujukan','Batal', array('class' => 'cancel')) ?>
	</p>
<?php echo form_close(); ?>
<!-- form end -->
