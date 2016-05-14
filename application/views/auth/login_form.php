<head>
	
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/formulario.css"/>
	
</head>

<?php

$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = '* Correo o Apodo';
} else if ($login_by_username) {
	$login_label = '* Apodo';
} else {
	$login_label = '* Correo';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<h2>Iniciar Sesión</h2>

<?php echo form_open($this->uri->uri_string()); ?>

<p></strong>los campos con * son obligatorios</strong></p>

<table>
	<tr>
		<td><?php echo form_label($login_label, $login['id']); ?></td>
		<td><?php echo form_input($login); ?></td>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td><?php echo form_label('* Contraseña', $password['id']); ?></td>
		<td><?php echo form_password($password); ?></td>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
		<td>&nbsp</td>
	</tr>

	<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Ingrese las letras tal y como aparecen:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('* Código confirmación', $captcha['id']); ?></td>
		<td><?php echo form_input($captcha); ?></td>
		<td>&nbsp</td>
		
	</tr>
	<tr>
		<td>&nbsp</td>
		<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
		<td>&nbsp</td>
	</tr>
	<?php }
	} ?>

	<tr>
		<td colspan="3">
			<?php echo form_checkbox($remember); ?>
			<?php echo form_label('No volver a pedir estos datos', $remember['id']); ?>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
			<?php echo form_submit('submit', 'Iniciar'); ?>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
			
			<?php echo anchor('/auth/forgot_password/', 'Olvide mi contraseña'); ?>
		</td>
		
		<td colspan="3">
			<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Registrarse'); ?>

		</td>
	</tr>
	
</table>

			
<?php echo form_close(); ?>