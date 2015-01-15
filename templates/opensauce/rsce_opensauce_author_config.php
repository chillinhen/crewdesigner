<?php

return array(
	'label' => array(
		'Autor-Box',
		'Erzeugt eine Autor-Box mit Text, Bild und Links',
	),
	'types' => array('content', 'module'),
	'standardFields' => array('cssID', 'headline'),
	'fields' => array(
		'image' => array(
			'label' => array('Bild', ''),
			'inputType' => 'fileTree',
			'eval' => array(
				'fieldType' => 'radio',
				'filesOnly' => true,
				'extensions' => \Config::get('validImageTypes'),
			),
		),
		'size' => array(
			'label' => $GLOBALS['TL_LANG']['tl_content']['size'],
			'inputType' => 'imageSize',
			'options' => \System::getImageSizes(),
			'reference' => &$GLOBALS['TL_LANG']['MSC'],
			'eval' => array(
				'rgxp' => 'digit',
				'includeBlankOption' => true,
			),
		),
		'text' => array(
			'label' => array('Text', ''),
			'inputType' => 'textarea',
			'eval' => array('rte' => 'tinyMCE'),
		),
		'links' => array(
			'label' => array('Links', ''),
			'elementLabel' => '%s. Link',
			'inputType' => 'list',
			'fields' => array(
				'label' => array(
					'label' => array('Link-Bezeichnung', ''),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'url' => array(
					'label' => array('Link-URL', 'Beispiele: {{link_url::seitenalias}} (Alias, ID oder anderer Inserttag), http://example.com'),
					'inputType' => 'url',
					'eval' => array('tl_class' => 'w50'),
				),
				'newWindow' => array(
					'label' => $GLOBALS['TL_LANG']['MSC']['target'],
					'inputType' => 'checkbox',
					'eval' => array('tl_class' => 'clr'),
				),
				'color' => array(
					'label' => array('Link-Farbe', ''),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'clr', 'colorpicker' => true),
				),
			),
		),
	),
);
