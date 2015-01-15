<?php

return array(
	'label' => array(
		'Navigations-Suche',
		'Suchformular für die Hauptnavigation',
	),
	'types' => array('module'),
	'standardFields' => array('cssID'),
	'fields' => array(
		'search' => array(
			'label' => array('Weiterleitungsseite', 'Wählen Sie die Suchseite aus.'),
			'inputType' => 'pageTree',
		),
		'placeholder' => array(
			'label' => array('Suchfeld-Bezeichnung', 'Bezeichnung des Suchfeldes rechts oben.'),
			'inputType' => 'text',
			'eval' => array('tl_class' => 'w50'),
		),
		'label' => array(
			'label' => array('Button-Bezeichnung', 'Bezeichnung des Such-Buttons.'),
			'inputType' => 'text',
			'eval' => array('tl_class' => 'w50'),
		),
	),
);
