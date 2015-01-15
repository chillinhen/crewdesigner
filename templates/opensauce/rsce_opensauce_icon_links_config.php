<?php

return array(
	'label' => array(
		'Icon Links',
		'Erzeugt eine Link-Liste mit Icons',
	),
	'types' => array('content', 'module'),
	'standardFields' => array('cssID', 'headline'),
	'fields' => array(
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
				'icon' => array(
					'label' => array('Icon', ''),
					'inputType' => 'rocksolid_icon_picker',
					'eval' => array('tl_class' => '', 'iconFont' => 'files/opensauce/fonts/rocksolid-icons.svg'),
				),
				'color' => array(
					'label' => array('Icon-Farbe', ''),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'clr', 'colorpicker' => true),
				),
			),
		),
	),
);
