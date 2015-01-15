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
	'filename' => "varchar(255) NOT NULL default ''",
	'filetype' => "char(1) NOT NULL default 'F'",
	'flag' => "char(1) NOT NULL default ''",
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
);

$this->blnIsDbTable = true;
