<?php

return array(
	'label' => array(
		'Highlight Box',
		'Zentrierte Überschrift mit zentriertem Button',
	),
	'types' => array('content'),
	'standardFields' => array('cssID', 'headline'),
	'fields' => array(
		'linkLabel' => array(
			'label' => array('Link-Text', ''),
			'inputType' => 'text',
			'eval' => array('tl_class' => 'long'),
		),
		'linkUrl' => array(
			'label' => array('Link-URL', 'Beispiele: {{link_url::seitenalias}} (Alias, ID oder anderer Inserttag), http://example.com'),
			'inputType' => 'url',
			'eval' => array('tl_class' => 'w50'),
		),
		'newWindow' => array(
			'label' => $GLOBALS['TL_LANG']['MSC']['target'],
			'inputType' => 'checkbox',
			'eval' => array('tl_class' => 'w50 m12'),
		),
	),
);
