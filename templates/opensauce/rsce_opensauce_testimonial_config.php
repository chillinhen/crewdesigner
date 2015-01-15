<?php

return array(
	'label' => array(
		'Zitat / Testimonial',
		'Erzeugt ein Zitat mit Text und Autor',
	),
	'types' => array('content'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'text' => array(
			'label' => array('Zitat-Text', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'author' => array(
			'label' => array('Autor', ''),
			'inputType' => 'text',
		),
		'authorAvatar' => array(
			'label' => array('Autor-Bild', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
	),
);
