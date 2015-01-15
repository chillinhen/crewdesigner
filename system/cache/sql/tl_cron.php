<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'UTF8',
);

$this->arrFields = array
(
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'name' => "varchar(32) NULL",
	'value' => "varchar(32) NOT NULL default ''",
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
);

$this->blnIsDbTable = true;
