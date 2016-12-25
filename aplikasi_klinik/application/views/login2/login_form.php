<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/reset.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css');?>" />
        <title>Login</title>
    </head>

<body>
<div id="login_box">
	
	<h1>Login Dokter</h1>
	
	<?php
		$attributes = array('name' => 'login_form', 'id' => 'login_form');
		echo form_open('login2', $attributes);
	?>

    <!-- pesan start -->
    <?php if (! empty($pesan)) : ?>
        <p id="message">
            <?php echo $pesan; ?>
        </p>
    <?php endif ?>
    <!-- pesan end -->
		
		<p>
			<label for="username">Username:</label>
			<input type="text" name="username" size="20" class="form_field" value="<?php echo set_value('username');?>">
		</p>
		<?php echo form_error('username', '<p class="field_error">', '</p>');?>
		
		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" size="20" class="form_field" value="<?php echo set_value('password');?>">
		</p>
		<?php echo form_error('password', '<p class="field_error">', '</p>');?>
		
		<p>
			 <input type="submit" name="submit" id="submit" value="O K"/>
             <?php echo anchor('home','BATAL', array('class' => 'cancel')) ?>
		</p>
	</form>
</div>
</body>
</html>