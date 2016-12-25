<?php
$form = array(
    /*'kode_rujukan' => array(
        'name'=>'kode_rujukan',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('kode_rujukan', isset($form_value['kode_rujukan']) ? $form_value['kode_rujukan'] : '')
    ),*/
    'tanggal'    => array(
        'name'=>'tanggal',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('tanggal', isset($form_value['tanggal']) ? $form_value['tanggal'] : ''),
		'onclick' => "displayDatePicker('tanggal')"
    ),
	'kepada'    => array(
        'name'=>'kepada',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('kepada', isset($form_value['kepada']) ? $form_value['kepada'] : '')
    ),
	'keluhan'    => array(
        'name'=>'keluhan',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('keluhan', isset($form_value['keluhan']) ? $form_value['keluhan'] : '')
    ),  
    'sudahbelum'    => array(
        'name'=>'sudahbelum',
        'size'=>'30',
        'class'=>'form_field',
        'value'=>set_value('sudahbelum', isset($form_value['sudahbelum']) ? $form_value['sudahbelum'] : '')
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
<!--
	<p>
        <?php echo form_label('Kode Rujukan', 'kode_rujukan'); ?>
        <?php echo form_input($form['kode_rujukan']); ?>
	</p>
	<?php echo form_error('kode_rujukan', '<p class="field_error">', '</p>');?>
	-->
    <p>
        <?php echo form_label('Tanggal', 'tanggal'); ?>
        <?php echo form_input($form['tanggal']); ?>
        <a href="javascript:void(0);" onclick="displayDatePicker('tanggal');"><img src="<?php echo base_url('assets/images/icon_calendar.png'); ?>" alt="calendar" border="0"></a>
	</p>
	<?php echo form_error('tanggal', '<p class="field_error">', '</p>');?>
	
    <p>
        <?php echo form_label('Dirujuk Ke', 'kepada'); ?>
        <?php echo form_input($form['kepada']); ?>
	</p>
	<?php echo form_error('kepada', '<p class="field_error">', '</p>');?>
	
     <p>
        <?php echo form_label('Kode Pasien', 'kode_pasien'); ?>
        <?php echo form_dropdown('kode_pasien', $option_datapasien, set_value('kode_pasien', isset($form_value['kode_pasien']) ? $form_value['kode_pasien'] : '')); ?>
	</p>
	<?php echo form_error('kode_pasien', '<p class="field_error">', '</p>');?>
    
	 <p>
        <?php echo form_label('Keluhan', 'keluhan'); ?>
        <?php echo form_input($form['keluhan']); ?>
	</p>
	<?php echo form_error('keluhan', '<p class="field_error">', '</p>');?>
	
	<p>
        <?php echo form_label('Telah diberi obat/belum', 'sudahbelum'); ?>
        <?php echo form_input($form['sudahbelum']); ?>
	</p>
	<?php echo form_error('sudahbelum', '<p class="field_error">', '</p>');?>
    
    <p>
        <?php echo form_label('Nama Dokter', 'kode_dokter'); ?>
        <?php echo form_dropdown('kode_dokter', $option_datadokter, set_value('kode_dokter', isset($form_value['kode_dokter']) ? $form_value['kode_dokter'] : '')); ?>
	</p>
	<?php echo form_error('kode_dokter', '<p class="field_error">', '</p>');?>
	
    <p>
		<?php echo form_submit($form['submit']); ?>
        <?php echo anchor('rujukan','Batal', array('class' => 'cancel')) ?>
	</p>
<?php echo form_close(); ?>