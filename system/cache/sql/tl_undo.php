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
	'fromTable' => "varchar(255) NOT NULL default ''",
	'query' => "text NULL",
	'affectedRows' => "smallint(5) unsigned NOT NULL default '0'",
	'data' => "mediumblob NULL",
);

$this->arrOrderFields = array
(
);

$this->arrKeys = array
(
	'id' => 'primary',
);

$this->arrRelations = array
(
	'pid' => array
	(
		'table' => 'tl_user',
		'field' => 'id',
		'type' => 'belongsTo',
		'load' => 'lazy',
	),
);

$this->blnIsDbTable = true;
