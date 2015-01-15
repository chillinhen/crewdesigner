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
	'sorting' => "int(10) unsigned NOT NULL default '0'",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
	'media' => "varchar(255) NOT NULL default ''",
	'sizes' => "varchar(255) NOT NULL default ''",
	'densities' => "varchar(255) NOT NULL default ''",
	'width' => "int(10) NULL",
	'height' => "int(10) NULL",
	'resizeMode' => "varchar(255) NOT NULL default ''",
	'zoom' => "int(10) NULL",
	'invisible' => "char(1) NOT NULL default ''",
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
		'table' => 'tl_image_size',
		'field' => 'id',
		'type' => 'belongsTo',
		'load' => 'lazy',
	),
);

$this->blnIsDbTable = true;
