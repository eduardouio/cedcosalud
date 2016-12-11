<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.1.2.344
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Contacto Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => 'gracias.html',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'citasmedicas@cedcosalud.com',
		'to' => 'citasmedicas@cedcosalud.com'
	),
	'fields' => array(
		'custom_U1146' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Nombre\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U1131' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Teléfono',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Teléfono\' is required.'
			)
		),
		'custom_U1135' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Celular',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Celular\' is required.'
			)
		),
		'custom_U1123' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Servicio Requerido',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Servicio Requerido\' is required.'
			)
		)
	)
);

process_form($form);
?>
