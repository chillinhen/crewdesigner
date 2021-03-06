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
	'title' => "varchar(255) NOT NULL default ''",
	'url' => "varchar(255) NOT NULL default ''",
	'text' => "mediumtext NULL",
	'filesize' => "double unsigned NOT NULL default '0'",
	'checksum' => "varchar(32) NOT NULL default ''",
	'protected' => "char(1) NOT NULL default ''",
	'groups' => "blob NULL",
	'language' => "varchar(5) NOT NULL default ''",
);

$this->arrOrderFields = array
(
);

$this->arrKeys = array
(
	'id' => 'primary',
	'pid' => 'index',
	'url' => 'index',
	'text' => 'fulltext',
);

$this->arrRelations = array
(
);

$this->blnIsDbTable = true;
