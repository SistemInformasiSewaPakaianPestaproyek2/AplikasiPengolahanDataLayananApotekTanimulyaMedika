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
<h1>Login </h1>
<?php echo form_open("auth/cek_login"); ?>
		<p><b><font size="3">Username : <br>
		<input type="text" name="username" size="20">
		</p>
		<p>Password : <br>
		<input type="password" name="password"></p>
		<p>
        <input type="submit" name="submit" id="submit" value="O K"/>  
            
			 <?php echo anchor('home','BATAL', array('class' => 'cancel')) ?>
		</p>
           
		<?php echo form_close(); ?>
</body>
</html