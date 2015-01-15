<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'UTF8',
);

$this->arrFields = array
(
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'pid' => "int(10) unsigned NOT NULL default '0'",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
	'name' => "varchar(64) NULL",
	'sizes' => "varchar(255) NOT NULL default ''",
	'densities' => "varchar(255) NOT NULL default ''",
	'width' => "int(10) NULL",
	'height' => "int(10) NULL",
	'resizeMode' => "varchar(255) NOT NULL default ''",
	'zoom' => "int(10) NULL",
);

$this->arrOrderFields = array
(
);

$this->arrKeys = array
(
	'id' => 'primary',
	'pid' => 'index',
);

$this->arrRelations = array
(
	'pid' => array
	(
		'table' => 'tl_theme',
		'field' => 'id',
		'type' => 'belongsTo',
		'load' => 'lazy',
	),
);

$this->blnIsDbTable = true;
