<?php

$this->arrMeta = array
(
	'engine' => 'MyISAM',
	'charset' => 'DEFAULT',
);

$this->arrFields = array
(
	'type' => "varchar(32) NOT NULL default 'text'",
	'title' => "varchar(255) NOT NULL default ''",
	'headline' => "varchar(255) NOT NULL default ''",
	'modul_id' => "int(5) unsigned NOT NULL default '0'",
	'content' => "text NULL",
	'addImage' => "char(1) NOT NULL default ''",
	'singleSRC' => "binary(16) NULL",
	'multiSRC' => "blob NULL",
	'perRow' => "smallint(5) unsigned NOT NULL default '0'",
	'perPage' => "smallint(5) unsigned NOT NULL default '0'",
	'sortBy' => "varchar(32) NOT NULL default ''",
	'galleryTpl' => "varchar(64) NOT NULL default ''",
	'alt' => "varchar(255) NOT NULL default ''",
	'size' => "varchar(255) NOT NULL default ''",
	'caption' => "varchar(255) NOT NULL default ''",
	'floating' => "varchar(32) NOT NULL default ''",
	'imagemargin' => "varchar(255) NOT NULL default ''",
	'fullsize' => "char(1) NOT NULL default ''",
	'imageUrl' => "varchar(255) NOT NULL default ''",
	'cteAlias' => "int(10) unsigned NOT NULL default '0'",
	'articleAlias' => "int(10) unsigned NOT NULL default '0'",
	'module' => "int(10) unsigned NOT NULL default '0'",
	'reversePages' => "char(1) NOT NULL default ''",
	'inheritPages' => "char(1) NOT NULL default ''",
	'pages' => "text NULL",
	'position' => "int(4) NOT NULL default '0'",
	'space' => "varchar(255) NOT NULL default ''",
	'cssID' => "varchar(255) NOT NULL default ''",
	'published' => "char(1) NOT NULL default '1'",
	'start' => "varchar(10) NOT NULL default ''",
	'stop' => "varchar(10) NOT NULL default ''",
	'id' => "int(10) unsigned NOT NULL auto_increment",
	'sorting' => "int(10) unsigned NOT NULL default '0'",
	'pid' => "int(10) unsigned NOT NULL default '0'",
	'tstamp' => "int(10) unsigned NOT NULL default '0'",
	'addEnclosure' => "char(1) NOT NULL default ''",
	'enclosure' => "varchar(255) NOT NULL default ''",
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
