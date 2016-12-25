<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" />
<div class="konten">
<?php
	$form =array(
	'tanggal' =>array(
			'name'	 =>'tanggal',
			'size'	 =>'30',
			'class'	 =>'form_field',
			'value'	 =>set_value('tanggal', isset($form_value['tanggal'])? $form_value['tanggal']:'')));?>
		<h3>Pendaftaran</h3>
        <form name="form2" method="POST" action="<?php echo base_url()."index.php/daftar/simpan";?>">
            <p>
              <label for="nama">Kode         :</label> <input type="text" name="kode_pasien"></p>
            <p>
              
              <?php echo form_label('Tanggal(dd-mm-yyyy)','tanggal');?>
            <?php echo form_input($form['tanggal']);?>
            <a href="javascript:void(0);"onclick="displayDatePicker('tanggal');"><img src="<?php echo base_url('assets/images/icon_calendar.png');?>"alt="calendar" border="0"></a>
       </p>
        <?php echo form_error('tanggal','<p class="field_error">','</p>');?>
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Daftar">
            </p>
		

</div>
<!-- <?php echo form_label('Tanggal(dd-mm-yyyy)','tanggal');?>
            <?php echo form_input($form['tanggal']);?>
            <a href="javascript:void(0);"onclick="displayDatePicker('tanggal');"><img src="<?php echo base_url('assets/images/icon_calendar.png');?>"alt="calendar" border="0"></a>
       </p>
        <?php echo form_error('tanggal','<p class="field_error">','</p>');?> -->