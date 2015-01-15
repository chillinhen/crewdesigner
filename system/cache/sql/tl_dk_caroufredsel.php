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
	'title' => "varchar(255) NOT NULL default ''",
	'usePlay' => "char(1) NOT NULL default ''",
	'carouselType' => "varchar(32) NOT NULL default ''",
	'direction' => "varchar(32) NOT NULL default ''",
	'scrollItems' => "smallint(5) unsigned NOT NULL default '0'",
	'scrollQueue' => "varchar(32) NOT NULL default ''",
	'autoPlay' => "char(1) NOT NULL default ''",
	'autoTimeoutDuration' => "int(10) NOT NULL default '2500'",
	'autoDelay' => "int(10) NOT NULL default '0'",
	'scrollPauseOnHover' => "varchar(32) NOT NULL default ''",
	'autoProgress' => "varchar(32) NOT NULL default ''",
	'autoProgressInterval' => "int(10) NOT NULL default '50'",
	'useTransitions' => "char(1) NOT NULL default ''",
	'scrollFx' => "varchar(32) NOT NULL default ''",
	'scrollEasing' => "varchar(32) NOT NULL default ''",
	'scrollDuration' => "int(10) NOT NULL default '500'",
	'useGeneralSize' => "char(1) NOT NULL default ''",
	'widthSelect' => "varchar(32) NOT NULL default ''",
	'width' => "varchar(64) NOT NULL default ''",
	'heightSelect' => "varchar(32) NOT NULL default ''",
	'height' => "varchar(64) NOT NULL default ''",
	'padding' => "varchar(128) NOT NULL default ''",
	'align' => "varchar(32) NOT NULL default ''",
	'useItemsSize' => "char(1) NOT NULL default ''",
	'itemsWidthSelect' => "varchar(32) NOT NULL default ''",
	'itemsWidth' => "varchar(64) NOT NULL default ''",
	'itemsHeightSelect' => "varchar(32) NOT NULL default ''",
	'itemsHeight' => "varchar(64) NOT NULL default ''",
	'useItemsGeneral' => "char(1) NOT NULL default ''",
	'responsive' => "char(1) NOT NULL default ''",
	'cookie' => "char(1) NOT NULL default ''",
	'itemsVisibleSelect' => "varchar(32) NOT NULL default ''",
	'itemsVisible' => "smallint(5) unsigned NOT NULL default '0'",
	'itemsVisibleMin' => "smallint(5) unsigned NOT NULL default '0'",
	'itemsVisibleMax' => "smallint(5) unsigned NOT NULL default '0'",
	'itemsStart' => "smallint(5) NOT NULL default '0'",
	'itemsStartRnd' => "char(1) NOT NULL default ''",
	'useNavigation' => "char(1) NOT NULL default ''",
	'prevKey' => "varchar(32) NOT NULL default ''",
	'nextKey' => "varchar(32) NOT NULL default ''",
	'swipeOnTouch' => "char(1) NOT NULL default ''",
	'swipeOnMouse' => "char(1) NOT NULL default ''",
	'mousewheel' => "char(1) NOT NULL default ''",
	'navigation' => "char(1) NOT NULL default ''",
	'autoButton' => "char(1) NOT NULL default ''",
	'pagination' => "char(1) NOT NULL default ''",
	'paginationKeys' => "char(1) NOT NULL default ''",
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
