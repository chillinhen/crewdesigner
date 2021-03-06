<?php 

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Table tl_module
 */
$GLOBALS['TL_DCA']['tl_module'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_theme',
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_module', 'checkPermission')
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('name'),
			'panelLayout'             => 'filter;sort,search,limit',
			'headerFields'            => array('name', 'author', 'tstamp'),
			'child_record_callback'   => array('tl_module', 'listModule'),
			'child_record_class'      => 'no_padding'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset()"'
			),
			'cut' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['cut'],
				'href'                => 'act=paste&amp;mode=cut',
				'icon'                => 'cut.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset()"'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_module']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('type', 'defineRoot', 'source', 'interactive', 'protected', 'reg_assignDir', 'reg_activate'),
		'default'                     => '{title_legend},name,type',
		'navigation'                  => '{title_legend},name,headline,type;{nav_legend},levelOffset,showLevel,hardLimit,showProtected;{reference_legend:hide},defineRoot;{template_legend:hide},navigationTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'customnav'                   => '{title_legend},name,headline,type;{nav_legend},pages,showProtected;{template_legend:hide},navigationTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'breadcrumb'                  => '{title_legend},name,headline,type;{nav_legend},showHidden;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'quicknav'                    => '{title_legend},name,headline,type;{nav_legend},customLabel,showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'quicklink'                   => '{title_legend},name,headline,type;{nav_legend},pages,customLabel;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'booknav'                     => '{title_legend},name,headline,type;{nav_legend},showProtected,showHidden,rootPage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'articlenav'                  => '{title_legend},name,headline,type;{config_legend},loadFirst;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'sitemap'                     => '{title_legend},name,headline,type;{nav_legend},showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},navigationTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'login'                       => '{title_legend},name,headline,type;{config_legend},autologin;{redirect_legend},jumpTo,redirectBack;{template_legend:hide},cols;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'logout'                      => '{title_legend},name,headline,type;{redirect_legend},jumpTo,redirectBack;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'personalData'                => '{title_legend},name,headline,type;{config_legend},editable;{redirect_legend},jumpTo;{template_legend:hide},memberTpl,tableless;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'registration'                => '{title_legend},name,headline,type;{config_legend},editable,newsletters,disableCaptcha;{account_legend},reg_groups,reg_allowLogin,reg_assignDir;{redirect_legend},jumpTo;{email_legend:hide},reg_activate;{template_legend:hide},memberTpl,tableless;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'lostPassword'                => '{title_legend},name,headline,type;{config_legend},reg_skipName,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},reg_jumpTo,reg_password;{template_legend:hide},customTpl,tableless;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'closeAccount'                => '{title_legend},name,headline,type;{config_legend},reg_close;{redirect_legend},jumpTo;{template_legend:hide},customTpl,tableless;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'form'                        => '{title_legend},name,headline,type;{include_legend},form;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'search'                      => '{title_legend},name,headline,type;{config_legend},queryType,fuzzy,contextLength,totalLength,perPage,searchType;{redirect_legend:hide},jumpTo;{reference_legend:hide},rootPage;{template_legend:hide},searchTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'articleList'                 => '{title_legend},name,headline,type;{config_legend},skipFirst,inColumn;{reference_legend:hide},defineRoot;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'flash'                       => '{title_legend},name,headline,type;{config_legend},size,transparent,flashvars,altContent;{source_legend},source;{interact_legend:hide},interactive;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'randomImage'                 => '{title_legend},name,headline,type;{config_legend},imgSize,useCaption,fullsize;{source_legend},multiSRC;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space',
		'html'                        => '{title_legend},name,type;{html_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests',
		'rss_reader'                  => '{title_legend},name,headline,type;{config_legend},rss_feed,numberOfItems,perPage,skipFirst,rss_cache;{template_legend:hide},rss_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'defineRoot'                  => 'rootPage',
		'source_internal'             => 'singleSRC',
		'source_external'             => 'url',
		'interactive'                 => 'flashID,flashJS',
		'protected'                   => 'groups',
		'reg_assignDir'               => 'reg_homeDir',
		'reg_activate'                => 'reg_jumpTo,reg_text'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'foreignKey'              => 'tl_theme.name',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'lazy')
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['name'],
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'headline' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['headline'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'inputUnit',
			'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
			'eval'                    => array('maxlength'=>200, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['type'],
			'default'                 => 'navigation',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 11,
			'filter'                  => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getModules'),
			'reference'               => &$GLOBALS['TL_LANG']['FMD'],
			'eval'                    => array('helpwizard'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'levelOffset' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['levelOffset'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'showLevel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showLevel'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'hardLimit' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['hardLimit'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'showProtected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showProtected'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'defineRoot' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['defineRoot'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'rootPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rootPage'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'navigationTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['navigationTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getNavigationTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'customTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['customTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getModuleTemplates'),
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'pages' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['pages'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'files'=>true, 'orderField'=>'orderPages', 'mandatory'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'orderPages' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['orderSRC'],
			'sql'                     => "blob NULL"
		),
		'showHidden' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showHidden'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'customLabel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['customLabel'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'extnd', 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'autologin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['autologin'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'jumpTo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['jumpTo'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'eager')
		),
		'redirectBack' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['redirectBack'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cols' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cols'],
			'default'                 => '2cl',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('1cl', '2cl'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'editable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['editable'],
			'exclude'                 => true,
			'inputType'               => 'checkboxWizard',
			'options_callback'        => array('tl_module', 'getEditableMemberProperties'),
			'eval'                    => array('multiple'=>true),
			'sql'                     => "blob NULL"
		),
		'memberTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['memberTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getMemberTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'tableless' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['tableless'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'form' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['form'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_form.title',
			'options_callback'        => array('tl_module', 'getForms'),
			'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'queryType' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['queryType'],
			'default'                 => 'and',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('and', 'or'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'fuzzy' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['fuzzy'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'contextLength' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['contextLength'],
			'default'                 => 48,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'totalLength' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['totalLength'],
			'default'                 => 1000,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'perPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['perPage'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'searchType' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['searchType'],
			'default'                 => 'simple',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('simple', 'advanced'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'searchTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['searchTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getSearchTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'inColumn' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['inColumn'],
			'default'                 => 'main',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getLayoutSections'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'skipFirst' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['skipFirst'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'loadFirst' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['loadFirst'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'transparent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['transparent'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'flashvars' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['flashvars'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('nospace'=>true, 'maxlength'=>255, 'tl_class'=>'long clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'altContent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['altContent'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'style'=>'height:60px', 'tl_class'=>'clr'),
			'sql'                     => "text NULL"
		),
		'source' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['source'],
			'default'                 => 'internal',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('internal', 'external'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'singleSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['singleSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'filesOnly'=>true, 'mandatory'=>true, 'tl_class'=>'clr'),
			'sql'                     => "binary(16) NULL"
		),
		'url' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['url'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'interactive' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['interactive'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'flashID' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['flashID'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'extnd', 'nospace'=>true, 'unique'=>true, 'maxlength'=>64),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'flashJS' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['flashJS'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('class'=>'monospace', 'rte'=>'ace|js'),
			'sql'                     => "text NULL"
		),
		'imgSize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['imgSize'],
			'exclude'                 => true,
			'inputType'               => 'imageSize',
			'options'                 => System::getImageSizes(),
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'useCaption' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['useCaption'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 clr'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'fullsize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['fullsize'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'multiSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['multiSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'orderSRC', 'files'=>true, 'mandatory'=>true),
			'sql'                     => "blob NULL"
		),
		'orderSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['orderSRC'],
			'sql'                     => "blob NULL"
		),
		'html' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['html'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
			'explanation'             => 'insertTags',
			'sql'                     => "text NULL"
		),
		'rss_cache' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rss_cache'],
			'default'                 => 3600,
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400),
			'eval'                    => array('tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['CACHE'],
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'rss_feed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rss_feed'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'style'=>'height:60px'),
			'sql'                     => "text NULL"
		),
		'rss_template' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['rss_template'],
			'default'                 => 'rss_default',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_module', 'getRssTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'numberOfItems' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['numberOfItems'],
			'default'                 => 3,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'disableCaptcha' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['disableCaptcha'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_groups'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('multiple'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'reg_allowLogin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_allowLogin'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_skipName' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_skipName'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_close' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_close'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('close_deactivate', 'close_delete'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'reg_assignDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_assignDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_homeDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_homeDir'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'                     => "binary(16) NULL"
		),
		'reg_activate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_activate'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'reg_jumpTo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_jumpTo'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'reg_text' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_text'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
			'load_callback' => array
			(
				array('tl_module', 'getActivationDefault')
			),
			'sql'                     => "text NULL"
		),
		'reg_password' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_password'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
			'load_callback'           => array
			(
				array('tl_module', 'getPasswordDefault')
			),
			'sql'                     => "text NULL"
		),
		'protected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['protected'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['groups'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('mandatory'=>true, 'multiple'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'guests' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['guests'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cssID' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cssID'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'space' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['space'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		)
	)
);


/**
 * Class tl_module
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    Core
 */
class tl_module extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}


	/**
	 * Check permissions to edit the table
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin)
		{
			return;
		}

		if (!$this->User->hasAccess('modules', 'themes'))
		{
			$this->log('Not enough permissions to access the modules module', __METHOD__, TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}
	}


	/**
	 * Return all front end modules as array
	 * @return array
	 */
	public function getModules()
	{
		$groups = array();

		foreach ($GLOBALS['FE_MOD'] as $k=>$v)
		{
			foreach (array_keys($v) as $kk)
			{
				$groups[$k][] = $kk;
			}
		}

		return $groups;
	}


	/**
	 * Return all editable fields of table tl_member
	 * @return array
	 */
	public function getEditableMemberProperties()
	{
		$return = array();

		System::loadLanguageFile('tl_member');
		$this->loadDataContainer('tl_member');

		foreach ($GLOBALS['TL_DCA']['tl_member']['fields'] as $k=>$v)
		{
			if ($v['eval']['feEditable'])
			{
				$return[$k] = $GLOBALS['TL_DCA']['tl_member']['fields'][$k]['label'][0];
			}
		}

		return $return;
	}


	/**
	 * Get all forms and return them as array
	 * @return array
	 */
	public function getForms()
	{
		if (!$this->User->isAdmin && !is_array($this->User->forms))
		{
			return array();
		}

		$arrForms = array();
		$objForms = $this->Database->execute("SELECT id, title FROM tl_form ORDER BY title");

		while ($objForms->next())
		{
			if ($this->User->hasAccess($objForms->id, 'forms'))
			{
				$arrForms[$objForms->id] = $objForms->title;
			}
		}

		return $arrForms;
	}


	/**
	 * Return all layout sections as array
	 * @return array
	 */
	public function getLayoutSections()
	{
		$arrCustom = array();
		$arrSections = array('header', 'left', 'right', 'main', 'footer');

		// Check for custom layout sections
		$objLayout = $this->Database->query("SELECT sections FROM tl_layout WHERE sections!=''");

		while ($objLayout->next())
		{
			$arrCustom = array_merge($arrCustom, trimsplit(',', $objLayout->sections));
		}

		$arrCustom = array_unique($arrCustom);

		// Add the custom layout sections
		if (!empty($arrCustom) && is_array($arrCustom))
		{
			$arrSections = array_merge($arrSections, $arrCustom);
		}

		return $arrSections;
	}


	/**
	 * Return all navigation templates as array
	 * @return array
	 */
	public function getNavigationTemplates()
	{
		return $this->getTemplateGroup('nav_');
	}


	/**
	 * Return all module templates as array
	 * @return array
	 */
	public function getModuleTemplates()
	{
		return $this->getTemplateGroup('mod_');
	}


	/**
	 * Return all member templates as array
	 * @return array
	 */
	public function getMemberTemplates()
	{
		return $this->getTemplateGroup('member_');
	}


	/**
	 * Return all search templates as array
	 * @return array
	 */
	public function getSearchTemplates()
	{
		return $this->getTemplateGroup('search_');
	}


	/**
	 * Return all navigation templates as array
	 * @return array
	 */
	public function getRssTemplates()
	{
		return $this->getTemplateGroup('rss_');
	}


	/**
	 * Load the default activation text
	 * @param mixed
	 * @return mixed
	 */
	public function getActivationDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = (is_array($GLOBALS['TL_LANG']['tl_module']['emailText']) ? $GLOBALS['TL_LANG']['tl_module']['emailText'][1] : $GLOBALS['TL_LANG']['tl_module']['emailText']);
		}

		return $varValue;
	}


	/**
	 * Load the default password text
	 * @param mixed
	 * @return mixed
	 */
	public function getPasswordDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = (is_array($GLOBALS['TL_LANG']['tl_module']['passwordText']) ? $GLOBALS['TL_LANG']['tl_module']['passwordText'][1] : $GLOBALS['TL_LANG']['tl_module']['passwordText']);
		}

		return $varValue;
	}


	/**
	 * List a front end module
	 * @param array
	 * @return string
	 */
	public function listModule($row)
	{
		return '<div style="float:left">'. $row['name'] .' <span style="color:#b3b3b3;padding-left:3px">['. (isset($GLOBALS['TL_LANG']['FMD'][$row['type']][0]) ? $GLOBALS['TL_LANG']['FMD'][$row['type']][0] : $row['type']) .']</span>' . "</div>\n";
	}
}


/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 * This file modifies the data container array of table tl_module.
 *
 * PHP version 5
 * @copyright  Christian Wenzel/Fred Bliss 2007 / computino.de Webservice 2008 / Magmell - Agentur für Film, Web und Print 2014
 * @author     Christian Wenzel <wenzel@saiga.de>
 * @author     Fred Bliss <fred@stevensdesign.com>
 * @author     Markus Milkereit <markus.milkereit@magmell.de>
 * @package    Boxes
 * @license    GPL
 * @filesource
 */


/**
 * Add palettes to tl_module
 */
if(VERSION >= 2.7)
{
  $GLOBALS['TL_DCA']['tl_module']['palettes']['contentbox'] = '{title_legend},name,type,headline;{expert_legend:hide},align,space,cssID';
} 
else
{
  $GLOBALS['TL_DCA']['tl_module']['palettes']['contentbox'] = 'name,type,headline;box_column;align;space,cssID';
}


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Calendar
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['calendar']    = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_startDay;{redirect_legend},jumpTo;{template_legend:hide},cal_ctemplate,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist']   = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_format,cal_ignoreDynamic,cal_order,cal_readerModule,cal_limit,perPage;{template_legend:hide},cal_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = '{title_legend},name,headline,type;{config_legend},cal_calendar;{template_legend:hide},cal_template,customTpl;{image_legend},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenu']   = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_showQuantity,cal_format,cal_startDay,cal_order;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_calendar'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_calendar'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_module_calendar', 'getCalendars'),
	'eval'                    => array('mandatory'=>true, 'multiple'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_noSpan'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_noSpan'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_startDay'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_startDay'],
	'default'                 => 1,
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(0, 1, 2, 3, 4, 5, 6),
	'reference'               => &$GLOBALS['TL_LANG']['DAYS'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_format'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_format'],
	'default'                 => 'cal_month',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getFormats'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'wizard' => array
	(
		array('tl_module_calendar', 'hideStartDay')
	),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ignoreDynamic'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_ignoreDynamic'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_order'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_order'],
	'default'                 => 'ascending',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('ascending', 'descending'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_readerModule'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_readerModule'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getReaderModules'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_limit'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_limit'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_template'],
	'default'                 => 'event_full',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getEventTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ctemplate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_ctemplate'],
	'default'                 => 'cal_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_calendar', 'getCalendarTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['cal_showQuantity'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cal_showQuantity'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);


/**
 * Add the comments template drop-down menu
 */
if (in_array('comments', ModuleLoader::getActive()))
{
	$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader']);
}


/**
 * Class tl_module_calendar
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    Calendar
 */
class tl_module_calendar extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}


	/**
	 * Get all calendars and return them as array
	 * @return array
	 */
	public function getCalendars()
	{
		if (!$this->User->isAdmin && !is_array($this->User->calendars))
		{
			return array();
		}

		$arrCalendars = array();
		$objCalendars = $this->Database->execute("SELECT id, title FROM tl_calendar ORDER BY title");

		while ($objCalendars->next())
		{
			if ($this->User->hasAccess($objCalendars->id, 'calendars'))
			{
				$arrCalendars[$objCalendars->id] = $objCalendars->title;
			}
		}

		return $arrCalendars;
	}


	/**
	 * Get all event reader modules and return them as array
	 * @return array
	 */
	public function getReaderModules()
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='eventreader' ORDER BY t.name, m.name");

		while ($objModules->next())
		{
			$arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
		}

		return $arrModules;
	}


	/**
	 * Return the calendar formats depending on the module type
	 * @param \DataContainer
	 * @return array
	 */
	public function getFormats(DataContainer $dc)
	{
		if ($dc->activeRecord->type == 'eventmenu')
		{
			return array('cal_day', 'cal_month', 'cal_year');
		}

		return array
		(
			'cal_list'     => array('cal_day', 'cal_month', 'cal_year', 'cal_all'),
			'cal_upcoming' => array('next_7', 'next_14', 'next_30', 'next_90', 'next_180', 'next_365', 'next_two', 'next_cur_month', 'next_cur_year', 'next_next_month', 'next_next_year', 'next_all'),
			'cal_past'     => array('past_7', 'past_14', 'past_30', 'past_90', 'past_180', 'past_365', 'past_two', 'past_cur_month', 'past_cur_year', 'past_prev_month', 'past_prev_year', 'past_all')
		);
	}


	/**
	 * Hide the start day drop-down if not applicable
	 * @return string
	 */
	public function hideStartDay()
	{
		return '
  <script>
    var enableStartDay = function() {
      var e1 = $("ctrl_cal_startDay").getParent("div");
      var e2 = $("ctrl_cal_order").getParent("div");
      if ($("ctrl_cal_format").value == "cal_day") {
        e1.setStyle("display", "block");
        e2.setStyle("display", "none");
	  } else {
        e1.setStyle("display", "none");
        e2.setStyle("display", "block");
	  }
    };
    window.addEvent("domready", function() {
      if ($("ctrl_cal_startDay")) {
        enableStartDay();
        $("ctrl_cal_format").addEvent("change", enableStartDay);
      }
    });
  </script>';
	}


	/**
	 * Return all event templates as array
	 * @return array
	 */
	public function getEventTemplates()
	{
		return $this->getTemplateGroup('event_');
	}


	/**
	 * Return all calendar templates as array
	 * @return array
	 */
	public function getCalendarTemplates()
	{
		return $this->getTemplateGroup('cal_');
	}
}


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Comments
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Load tl_content language file
 */
System::loadLanguageFile('tl_content');


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['comments'] = '{title_legend},name,headline,type;{comment_legend},com_order,perPage,com_moderate,com_bbcode,com_protected,com_requireLogin,com_disableCaptcha;{template_legend:hide},com_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['com_order'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_order'],
	'default'                 => 'ascending',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('ascending', 'descending'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_moderate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_moderate'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_bbcode'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_bbcode'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_requireLogin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_requireLogin'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_disableCaptcha'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_disableCaptcha'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['com_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_template'],
	'default'                 => 'com_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_comments', 'getCommentTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);


/**
 * Class tl_module
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    Comments
 */
class tl_module_comments extends Backend
{

	/**
	 * Return all navigation templates as array
	 * @return array
	 */
	public function getCommentTemplates()
	{
		return $this->getTemplateGroup('com_');
	}
}


/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2014
 */


/**
 * Add config to tl_module
 */
//$GLOBALS['TL_DCA']['tl_module']['config']['onload_callback'][] = array('tl_module_dk_csf', 'changePalette');
switch ($GLOBALS['TL_CONFIG']['dk_cfsUsageMode'])
{
	default:
	case 'basic':
		$paletteCaroufredsel = '{title_legend},name,headline,type;{caroufredsel_legend},dk_cfsCarouFredSel;{protected_legend:hide},protected;{expert_legend:hide},cssID,space';
		$paletteCaroufredsel_gallery = '{title_legend},name,headline,type;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
		$paletteCaroufredsel_background = '{title_legend},name,headline,type;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
		$paletteCaroufredsel_ticker = '{title_legend},name,headline,type;{config_legend},news_archives,numberOfItems,news_featured,perPage,skipFirst;{caroufredsel_legend},dk_cfsCarouFredSel;{template_legend:hide},news_metaFields,news_template,imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
		break;

	case 'advanced':
		$paletteCaroufredsel = '{title_legend},name,headline,type;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID,space';
		$paletteCaroufredsel_gallery = '{title_legend},name,headline,type;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_image_legend},dk_cfsImageSize,dk_cfsFullsize,dk_cfsNumberOfItems;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
		$paletteCaroufredsel_background = '{title_legend},name,headline,type;{source_legend},dk_cfsMultiSRC,dk_cfsSortBy;{caroufredsel_image_legend},dk_cfsNumberOfItems;{caroufredsel_thumbnails_legend},dk_cfsUseThumbnails;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
		$paletteCaroufredsel_ticker = '{title_legend},name,headline,type;{config_legend},news_archives,numberOfItems,news_featured,perPage,skipFirst;{caroufredsel_legend},dk_cfsCarouFredSel,dk_cfsHtmlTpl,dk_cfsCssTpl,dk_cfsJsTpl;{template_legend:hide},news_metaFields,news_template,imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
		break;
}


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'dk_cfsUseThumbnails';

$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel'] = $paletteCaroufredsel;
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_gallery'] = $paletteCaroufredsel_gallery;
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_background'] = $paletteCaroufredsel_background;
$GLOBALS['TL_DCA']['tl_module']['palettes']['caroufredsel_ticker'] = $paletteCaroufredsel_ticker;

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails'] = 'dk_cfsThumbnailSize,dk_cfsThumbnailsPosition,dk_cfsThumbnailsAlign,dk_cfsThumbnailsWidth,dk_cfsThumbnailsHeight';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsMultiSRC'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsMultiSRC'],
	'exclude'			=> true,
	'inputType'			=> 'fileTree',
	'eval'				=> array('multiple' => true, 'fieldType' => 'checkbox', 'orderField' => 'orderSRC', 'files' => true, 'isGallery' => true, 'mandatory' => true),
	'sql'				=> "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsSortBy'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsSortBy'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsImageSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsImageSize'],
	'exclude'			=> true,
	'inputType'			=> 'imageSize',
	'options'			=> $GLOBALS['TL_CROP'],
	'reference'			=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'				=> array('rgxp' => 'digit', 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsFullsize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsFullsize'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class' => 'w50 m12'),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsNumberOfItems'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsNumberOfItems'],
	'exclude'			=> true,
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsUseThumbnails'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsUseThumbnails'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('submitOnChange' => true),
	'sql'				=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsVisibleSelect'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('variable'),// 'fixed'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisibleSelect'],
	'eval'				=> array('helpwizard' => true, 'submitOnChange' => true, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailSize'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailSize'],
	'exclude'			=> true,
	'inputType'			=> 'imageSize',
	'options'			=> $GLOBALS['TL_CROP'],
	'reference'			=> &$GLOBALS['TL_LANG']['MSC'],
	'eval'				=> array('rgxp' => 'digit', 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsVisible'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsVisible'],
	'exclude'			=> true,
  	'inputType'			=> 'text',
  	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(5) unsigned NOT NULL default '5'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsPosition'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition'],
	'exclude'			=> true,
  	'inputType'			=> 'select',
	'default'			=> 'bottom',
	'options'			=> array('top', 'bottom', 'left', 'right'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsPosition'],
	'eval'				=> array('tl_class' => 'clr w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsAlign'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsAlign'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'default'			=> 'center',
	'options'			=> array('center', 'left', 'right'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsAlign'],
	'eval'				=> array('tl_class' => 'w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsWidth'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsWidth'],
	'exclude'			=> true,
	'inputType'			=> 'inputUnit',
	'options'			=> array('px', '%'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsThumbnailsHeight'] = array
(
  	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsThumbnailsHeight'],
	'exclude'			=> true,
  	'inputType'			=> 'inputUnit',
	'options'			=> array('px', '%'),
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class' => 'w50'),
	'sql'				=> "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsCarouFredSel'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsCarouFredSel'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'foreignKey'		=> 'tl_dk_caroufredsel.title',
	'eval'				=> array('includeBlankOption' => true, 'mandatory' => true, 'chosen' => true, 'submitOnChange' => true),
	'wizard'			=> array(array('tl_module_dk_csf', 'editCarouFredSel')),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsSynchronise'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsSynchronise'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_module_dk_csf', 'getCarouFredSelCarousels'),
	'eval'				=> array('includeBlankOption' => true, 'maxlength' => 255, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsHtmlTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsHtmlTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('mod_caroufredsel'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50 clr'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsCssTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsCssTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('css_caroufredsel'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsJsTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsJsTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('js_caroufredsel'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);

/*$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsNewsTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsNewsTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('news_caroufredsel'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);*/

$GLOBALS['TL_DCA']['tl_module']['fields']['dk_cfsGalleryTpl'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['dk_cfsGalleryTpl'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> function() { return Backend::getTemplateGroup('caroufredsel_gallery'); },
	'eval'				=> array('maxlength' => 255, 'tl_class' => 'w50'),
	'sql'				=> "varchar(255) NOT NULL default ''"
);


/**
 * Class tl_module_dk_csf
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class tl_module_dk_csf extends tl_module
{

	/**
	 * Change palettes on the fly
	 *
	 * @param \DataContainer
	 */
	public function changePalette(DataContainer $dc)
	{
		$obj = $this->Database
				->prepare("SELECT dk_cfsThumbnailsVisibleSelect
						   FROM   tl_module
						   WHERE  id = ? ")
				->limit(1)
				->execute($dc->id);

		if ($obj->numRows < 1)
		{
			return;
		}

		switch ($obj->dk_cfsThumbnailsVisibleSelect) {
			case 'variable':
				// only show field 'dk_cfsThumbnailSize' if field 'dk_cfsThumbnailsSelect' contains 'variable'
				$GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails'] = str_replace('dk_cfsThumbnailsVisibleSelect', 'dk_cfsThumbnailsVisibleSelect,dk_cfsThumbnailSize', $GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails']);
				break;
	
			case 'fixed':
				// only show fields 'dk_cfsThumbnailsVisible' if field 'dk_cfsThumbnailsSelect' contains 'fixed'
				$GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails'] = str_replace('dk_cfsThumbnailsVisibleSelect', 'dk_cfsThumbnailsVisibleSelect,dk_cfsThumbnailsVisible', $GLOBALS['TL_DCA']['tl_module']['subpalettes']['dk_cfsUseThumbnails']);
				break;
		}
	}


	/**
	 * Return the edit carouFredSel wizard
	 *
	 * @param \DataContainer
	 * @return string
	 */
	public function editCarouFredSel(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=caroufredsel&amp;act=edit&amp;id=' . $dc->value . '&amp;rt=' . REQUEST_TOKEN . '" title="'.sprintf(specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value).'" style="padding-left:3px">' . $this->generateImage('alias.gif', $GLOBALS['TL_LANG']['tl_content']['editalias'][0], 'style="vertical-align:top"') . '</a>';
	}


	/**
	 * Return all carouFredSel carousels on same page as array
	 *
	 * @param \DataContainer
	 * @return array
	 */
	public function getCarouFredSelCarousels(DataContainer $dc)
	{
		$carouFredSelCarousels = array();

/*		$obj = $this->Database->prepare("SELECT id " .
										"FROM tl_content " .
										"WHERE pid = ? AND id != ? AND type IN ('caroufredsel', 'caroufredsel_background', 'caroufredsel_gallery') AND dk_cfsType != 'dk_cfsStop' AND invisible != 1 ")
									->execute($dc->activeRecord->pid, $dc->activeRecord->id);

		if ($obj->numRows > 0)
		{
			while ($obj->next())
			{
				array_push($carouFredSelCarousels, $obj->id);
			}
		}*/

		return $carouFredSelCarousels;
	}
}


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Faq
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqlist']   = '{title_legend},name,headline,type;{config_legend},faq_categories,faq_readerModule;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = '{title_legend},name,headline,type;{config_legend},faq_categories;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqpage']   = '{title_legend},name,headline,type;{config_legend},faq_categories;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['faq_categories'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['faq_categories'],
	'exclude'                 => true,
	'inputType'               => 'checkboxWizard',
	'foreignKey'              => 'tl_faq_category.title',
	'eval'                    => array('multiple'=>true, 'mandatory'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['faq_readerModule'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['faq_readerModule'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_faq', 'getReaderModules'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('includeBlankOption'=>true),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);


/**
 * Add the comments template drop-down menu
 */
if (in_array('comments', ModuleLoader::getActive()))
{
	$GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader']);
}


/**
 * Class tl_module_faq
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    Faq
 */
class tl_module_faq extends Backend
{

	/**
	 * Get all FAQ reader modules and return them as array
	 * @return array
	 */
	public function getReaderModules()
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='faqreader' ORDER BY t.name, m.name");

		while ($objModules->next())
		{
			$arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
		}

		return $arrModules;
	}
}


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Listing
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['listing'] = '{title_legend},name,headline,type;{config_legend},list_table,list_fields,list_where,list_search,list_sort,perPage,list_info,list_info_where;{template_legend:hide},list_layout,list_info_layout,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['list_table'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_table'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_listing', 'getAllTables'),
	'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_fields'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_fields'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_where'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_where'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('preserveTags'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_search'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_search'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_sort'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_sort'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_info'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_info'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_where'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_info_where'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('preserveTags'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_layout'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_layout'],
	'default'                 => 'list_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_listing', 'getListTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_layout'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['list_info_layout'],
	'default'                 => 'info_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_listing', 'getInfoTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);


/**
 * Class tl_module_listing
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    Listing
 */
class tl_module_listing extends Backend
{

	/**
	 * Get all tables and return them as array
	 * @return array
	 */
	public function getAllTables()
	{
		return $this->Database->listTables();
	}


	/**
	 * Return all list templates as array
	 * @return array
	 */
	public function getListTemplates()
	{
		return $this->getTemplateGroup('list_');
	}


	/**
	 * Return all info templates as array
	 * @return array
	 */
	public function getInfoTemplates()
	{
		return $this->getTemplateGroup('info_');
	}
}


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']    = '{title_legend},name,headline,type;{config_legend},news_archives,numberOfItems,news_featured,perPage,skipFirst;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader']  = '{title_legend},name,headline,type;{config_legend},news_archives;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsarchive'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_jumpToCurrent,news_readerModule,perPage,news_format;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsmenu']    = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_format,news_startDay,news_order;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['news_archives'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_archives'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_module_news', 'getNewsArchives'),
	'eval'                    => array('multiple'=>true, 'mandatory'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_featured'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_featured'],
	'default'                 => 'all_items',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('all_items', 'featured', 'unfeatured'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_jumpToCurrent'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_jumpToCurrent'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('hide_module', 'show_current', 'all_items'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_readerModule'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_readerModule'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_news', 'getReaderModules'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_metaFields'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_metaFields'],
	'default'                 => array('date', 'author'),
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options'                 => array('date', 'author', 'comments'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('multiple'=>true),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_template'],
	'default'                 => 'news_latest',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_news', 'getNewsTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_format'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_format'],
	'default'                 => 'news_month',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('news_day', 'news_month', 'news_year'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
	'eval'                    => array('tl_class'=>'w50'),
	'wizard' => array
	(
		array('tl_module_news', 'hideStartDay')
	),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_startDay'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_startDay'],
	'default'                 => 0,
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(0, 1, 2, 3, 4, 5, 6),
	'reference'               => &$GLOBALS['TL_LANG']['DAYS'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_order'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_order'],
	'default'                 => 'descending',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('ascending', 'descending'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['news_showQuantity'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['news_showQuantity'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);


/**
 * Add the comments template drop-down menu
 */
if (in_array('comments', ModuleLoader::getActive()))
{
	$GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader'] = str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader']);
}


/**
 * Class tl_module_news
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    News
 */
class tl_module_news extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}


	/**
	 * Get all news archives and return them as array
	 * @return array
	 */
	public function getNewsArchives()
	{
		if (!$this->User->isAdmin && !is_array($this->User->news))
		{
			return array();
		}

		$arrArchives = array();
		$objArchives = $this->Database->execute("SELECT id, title FROM tl_news_archive ORDER BY title");

		while ($objArchives->next())
		{
			if ($this->User->hasAccess($objArchives->id, 'news'))
			{
				$arrArchives[$objArchives->id] = $objArchives->title;
			}
		}

		return $arrArchives;
	}


	/**
	 * Get all news reader modules and return them as array
	 * @return array
	 */
	public function getReaderModules()
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='newsreader' ORDER BY t.name, m.name");

		while ($objModules->next())
		{
			$arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
		}

		return $arrModules;
	}


	/**
	 * Hide the start day drop-down if not applicable
	 * @return string
	 */
	public function hideStartDay()
	{
		return '
  <script>
    var enableStartDay = function() {
      var e1 = $("ctrl_news_startDay").getParent("div");
      var e2 = $("ctrl_news_order").getParent("div");
      if ($("ctrl_news_format").value == "news_day") {
        e1.setStyle("display", "block");
        e2.setStyle("display", "none");
	  } else {
        e1.setStyle("display", "none");
        e2.setStyle("display", "block");
	  }
    };
    window.addEvent("domready", function() {
      if ($("ctrl_news_startDay")) {
        enableStartDay();
        $("ctrl_news_format").addEvent("change", enableStartDay);
      }
    });
  </script>';
	}


	/**
	 * Return all news templates as array
	 * @return array
	 */
	public function getNewsTemplates()
	{
		return $this->getTemplateGroup('news_');
	}
}


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Newsletter
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['personalData'] = str_replace(',editable', ',editable,newsletters', $GLOBALS['TL_DCA']['tl_module']['palettes']['personalData']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['subscribe']    = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels;{redirect_legend},jumpTo;{email_legend:hide},nl_subscribe;{template_legend:hide},nl_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['unsubscribe']  = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels;{redirect_legend},jumpTo;{email_legend:hide},nl_unsubscribe;{template_legend:hide},nl_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['nl_list']      = '{title_legend},name,headline,type;{config_legend},nl_channels;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['nl_reader']    = '{title_legend},name,headline,type;{config_legend},nl_channels;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['newsletters'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['newsletters'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_newsletter_channel.title',
	'eval'                    => array('multiple'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_channels'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_channels'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_module_newsletter', 'getChannels'),
	'eval'                    => array('multiple'=>true, 'mandatory'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_hideChannels'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_hideChannels'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_subscribe'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_subscribe'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
	'load_callback' => array
	(
		array('tl_module_newsletter', 'getSubscribeDefault')
	),
	'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_unsubscribe'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_unsubscribe'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:120px', 'decodeEntities'=>true, 'alwaysSave'=>true),
	'load_callback' => array
	(
		array('tl_module_newsletter', 'getUnsubscribeDefault')
	),
	'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['nl_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['nl_template'],
	'default'                 => 'nl_simple',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_newsletter', 'getNewsletterTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);


/**
 * Class tl_module_newsletter
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2014
 * @author     Leo Feyer <https://contao.org>
 * @package    Newsletter
 */
class tl_module_newsletter extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}


	/**
	 * Load the default subscribe text
	 * @param mixed
	 * @return mixed
	 */
	public function getSubscribeDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = $GLOBALS['TL_LANG']['tl_module']['text_subscribe'][1];
		}

		return $varValue;
	}


	/**
	 * Load the default unsubscribe text
	 * @param mixed
	 * @return mixed
	 */
	public function getUnsubscribeDefault($varValue)
	{
		if (!trim($varValue))
		{
			$varValue = $GLOBALS['TL_LANG']['tl_module']['text_unsubscribe'][1];
		}

		return $varValue;
	}


	/**
	 * Get all channels and return them as array
	 * @return array
	 */
	public function getChannels()
	{
		if (!$this->User->isAdmin && !is_array($this->User->newsletters))
		{
			return array();
		}

		$arrChannels = array();
		$objChannels = $this->Database->execute("SELECT id, title FROM tl_newsletter_channel ORDER BY title");

		while ($objChannels->next())
		{
			if ($this->User->hasAccess($objChannels->id, 'newsletters'))
			{
				$arrChannels[$objChannels->id] = $objChannels->title;
			}
		}

		return $arrChannels;
	}


	/**
	 * Return all newsletter templates as array
	 * @return array
	 */
	public function getNewsletterTemplates()
	{
		return $this->getTemplateGroup('nl_');
	}
}
