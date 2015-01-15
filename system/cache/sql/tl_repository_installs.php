<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'UTF8',
);

$this->arrFields = array
(
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
	'extension' => "varchar(32) NOT NULL default ''",
	'version' => "int(9) NOT NULL default '0'",
	'build' => "int(9) NOT NULL default '0'",
	'alpha' => "char(1) NOT NULL default ''",
	'beta' => "char(1) NOT NULL default ''",
	'rc' => "char(1) NOT NULL default ''",
	'stable' => "char(1) NOT NULL default '1'",
	'lickey' => "varchar(255) NOT NULL default ''",
	'delprot' => "char(1) NOT NULL default ''",
	'updprot' => "char(1) NOT NULL default ''",
	'error' => "char(1) NOT NULL default ''",
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
);

$this->blnIsDbTable = true;
