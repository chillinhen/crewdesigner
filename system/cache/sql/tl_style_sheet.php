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
	'disablePie' => "char(1) NOT NULL default ''",
	'embedImages' => "int(10) unsigned NOT NULL default '0'",
	'cc' => "varchar(32) NOT NULL default ''",
	'media' => "varchar(255) NOT NULL default ''",
	'mediaQuery' => "text NULL",
	'vars' => "text NULL",
);

$this->arrOrderFields = array
(
);

$this->arrKeys = array
(
	'id' => 'primary',
	'name' => 'unique',
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
