<?php

return array(
	'label' => array(
		'Icon Boxen',
		'Erzeugt nebeneinander dargestellte Boxen mit Icons',
	),
	'types' => array('content'),
	'standardFields' => array('cssID', 'headline', 'columns'),
	'fields' => array(
		'boxes' => array(
			'label' => array('Boxen', ''),
			'elementLabel' => '%s. Box',
			'inputType' => 'list',
			'fields' => array(
				'icon' => array(
					'label' => array('Icon', ''),
					'inputType' => 'rocksolid_icon_picker',
					'eval' => array('tl_class' => '', 'iconFont' => 'files/opensauce/fonts/rocksolid-icons.svg'),
				),
				'headline' => array(
					'label' => array('Überschrift', ''),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'long'),
				),
				'text' => array(
					'label' => array('Text', ''),
					'inputType' => 'textarea',
					'eval' => array('rte' => 'tinyMCE'),
				),
				'url' => array(
					'label' => array('Link-URL', 'Beispiele: {{link_url::seitenalias}} (Alias, ID oder anderer Inserttag), http://example.com'),
					'inputType' => 'url',
					'eval' => array('tl_class' => 'w50'),
				),
				'linkLabel' => array(
					'label' => array('Link-Bezeichnung', ''),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'newWindow' => array(
					'label' => $GLOBALS['TL_LANG']['MSC']['target'],
					'inputType' => 'checkbox',
					'eval' => array('tl_class' => 'clr'),
				),
			),
		),
	),
);
