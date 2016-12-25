<?php
$form = array(
    'nama' => array(
        'name'=>'nama',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('nama', isset($form_value['nama']) ? $form_value['nama'] : '')
    ), 
	
    'alamat'    => array(
        'name'=>'alamat',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('alamat', isset($form_value['alamat']) ? $form_value['alamat'] : '')
    ),
    'anamanesa' => array(
        'name'=>'anamnesa',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('anamnesa', isset($form_value['anamnesa']) ? $form_value['anamnesa'] : '')
    ),
	'terapi' => array(
        'name'=>'terapi',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('terapi', isset($form_value['terapi']) ? $form_value['terapi'] : '')
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
<?php if (! empty($pesan)) : ?>
    <div class="pesan">
        <?php echo $pesan; ?>
    </div>
<?php endif ?>
<!-- pesan end -->

<!-- form start -->
<?php echo form_open($form_action); ?>
	

	<p>
        <?php echo form_label('Nama', 'kode_pasien'); ?>
        <?php echo form_dropdown('kode_pasien', $option_nama, set_value('kode_pasien', isset($form_value['kode_pasien']) ? $form_value['kode_pasien'] : '')); ?>
	</p>
	<?php echo form_error('kode_pasien', '<p class="field_error">', '</p>');?>
    
    <p>
        <?php echo form_label('Alamat', 'kode_pasien'); ?>
        <?php echo form_input($form['kode_pasien']); ?>
    </p>
    
	<?php echo form_error('kode_pasien', '<p class="field_error">', '</p>');?>
    
    <p>
        <?php echo form_label('Anamnesa', 'anamnesa'); ?>
        <?php echo form_input($form['anamnesa']); ?>
    </p>
    
	<?php echo form_error('anamanesa', '<p class="field_error">', '</p>');?>
    
    <p>
        <?php echo form_label('Terapi', 'terapi'); ?>
        <?php echo form_input($form['terapi']); ?>
    </p>
    
	<?php echo form_error('terapi', '<p class="field_error">', '</p>');?>
    

	<p>
		<?php echo form_submit($form['submit']); ?>
        <?php echo anchor('rekammedis','Batal', array('class' => 'cancel')) ?>
	</p>
<?php echo form_close(); ?>
<p>
    <?php echo form_label('Pasien Libur', 'libur'); ?>
    <?php echo form_checkbox('libur', '1', set_checkbox('libur', '1',isset($form_value['libur']) && $form_value['libur'] == '1' ? TRUE : FALSE)); ?>
    <?php echo form_label('Pasien Biasa', 'biasa'); ?>
    <?php echo form_checkbox('biasa', '1', set_checkbox('biasa', '1',isset($form_value['biasa']) && $form_value['biasa'] == '1' ? TRUE : FALSE)); ?>
    <?php echo form_label('Pasien Panggilan', 'panggilan'); ?>
    <?php echo form_checkbox('panggilan', '1', set_checkbox('panggilan', '1',isset($form_value['panggilan']) && $form_value['panggilan'] == '1' ? TRUE : FALSE)); ?>
    <?php echo form_label('Pasien Tindakan', 'tindakan'); ?>
    <?php echo form_checkbox('tindakan', '1', set_checkbox('tindakan', '1',isset($form_value['tindakan']) && $form_value['tindakan'] == '1' ? TRUE : FALSE)); ?>
</p>
<?php echo form_error('rekammedis', '<p class="field_error">', '</p>');?>

