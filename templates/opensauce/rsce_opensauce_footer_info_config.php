<?php

return array(
	'label' => array(
		'Open Sauce Footer-Copyright',
		'Copyright Text in der Fußzeile',
	),
	'types' => array('module'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'text' => array(
			'label' => array('Copyright-Text', ''),
			'inputType' => 'text',
			'eval' => array('tl_class' => 'long'),
		),
		'license' => array(
			'label' => array(
				'Copyright-Link entfernen',
				'Der Copyright-Hinweis darf nur mit entsprechender Lizenz entfernt werden.'
			),
			'inputType' => 'checkbox',
		),
	),
);
