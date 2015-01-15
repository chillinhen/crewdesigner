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
	'name' => "varchar(255) NOT NULL default ''",
	'sessionID' => "varchar(128) NOT NULL default ''",
	'hash' => "varchar(40) NULL",
	'ip' => "varchar(64) NOT NULL default ''",
	'su' => "char(1) NOT NULL default ''",
);

$this->arrOrderFields = array
(
);

$this->arrKeys = array
(
	'id' => 'primary',
	'pid' => 'index',
	'hash' => 'unique',
);

$this->arrRelations = array
(
);

$this->blnIsDbTable = true;
