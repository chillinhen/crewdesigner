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
 * Back end modules
 */
$GLOBALS['BE_MOD'] = array
(
	// Content modules
	'content' => array
	(
		'article' => array
		(
			'tables'      => array('tl_article', 'tl_content'),
			'table'       => array('TableWizard', 'importTable'),
			'list'        => array('ListWizard', 'importList')
		),
		'form' => array
		(
			'tables'      => array('tl_form', 'tl_form_field')
		)
	),

	// Design modules
	'design' => array
	(
		'themes' => array
		(
			'tables'      => array('tl_theme', 'tl_module', 'tl_style_sheet', 'tl_style', 'tl_layout', 'tl_image_size', 'tl_image_size_item'),
			'importTheme' => array('Theme', 'importTheme'),
			'exportTheme' => array('Theme', 'exportTheme'),
			'import'      => array('StyleSheets', 'importStyleSheet'),
			'export'      => array('StyleSheets', 'exportStyleSheet')
		),
		'page' => array
		(
			'tables'      => array('tl_page')
		),
		'tpl_editor' => array
		(
			'tables'      => array('tl_templates'),
			'new_tpl'     => array('tl_templates', 'addNewTemplate')
		)
	),

	// Account modules
	'accounts' => array
	(
		'member' => array
		(
			'tables'      => array('tl_member')
		),
		'mgroup' => array
		(
			'tables'      => array('tl_member_group')
		),
		'user' => array
		(
			'tables'      => array('tl_user')
		),
		'group' => array
		(
			'tables'      => array('tl_user_group')
		)
	),

	// System modules
	'system' => array
	(
		'files' => array
		(
			'tables'      => array('tl_files')
		),
		'log' => array
		(
			'tables'      => array('tl_log')
		),
		'settings' => array
		(
			'tables'      => array('tl_settings')
		),
		'maintenance' => array
		(
			'callback'    => 'ModuleMaintenance'
		),
		'undo' => array
		(
			'tables'      => array('tl_undo')
		)
	)
);


/**
 * Front end modules
 */
$GLOBALS['FE_MOD'] = array
(
	'navigationMenu' => array
	(
		'navigation'     => 'ModuleNavigation',
		'customnav'      => 'ModuleCustomnav',
		'breadcrumb'     => 'ModuleBreadcrumb',
		'quicknav'       => 'ModuleQuicknav',
		'quicklink'      => 'ModuleQuicklink',
		'booknav'        => 'ModuleBooknav',
		'articlenav'     => 'ModuleArticlenav',
		'sitemap'        => 'ModuleSitemap'
	),
	'user' => array
	(
		'login'          => 'ModuleLogin',
		'logout'         => 'ModuleLogout',
		'personalData'   => 'ModulePersonalData',
		'registration'   => 'ModuleRegistration',
		'lostPassword'   => 'ModulePassword',
		'closeAccount'   => 'ModuleCloseAccount'
	),
	'application' => array
	(
		'form'           => 'Form',
		'search'         => 'ModuleSearch'
	),
	'miscellaneous' => array
	(
		'flash'          => 'ModuleFlash',
		'articleList'    => 'ModuleArticleList',
		'randomImage'    => 'ModuleRandomImage',
		'html'           => 'ModuleHtml',
		'rss_reader'     => 'ModuleRssReader'
	)
);


/**
 * Content elements
 */
$GLOBALS['TL_CTE'] = array
(
	'texts' => array
	(
		'headline'        => 'ContentHeadline',
		'text'            => 'ContentText',
		'html'            => 'ContentHtml',
		'list'            => 'ContentList',
		'table'           => 'ContentTable',
		'code'            => 'ContentCode',
		'markdown'        => 'ContentMarkdown'
	),
	'accordion' => array
	(
		'accordionSingle' => 'ContentAccordion',
		'accordionStart'  => 'ContentAccordionStart',
		'accordionStop'   => 'ContentAccordionStop'
	),
	'slider' => array
	(
		'sliderStart'     => 'ContentSliderStart',
		'sliderStop'      => 'ContentSliderStop'
	),
	'links' => array
	(
		'hyperlink'       => 'ContentHyperlink',
		'toplink'         => 'ContentToplink'
	),
	'media' => array
	(
		'image'           => 'ContentImage',
		'gallery'         => 'ContentGallery',
		'player'          => 'ContentMedia',
		'youtube'         => 'ContentYouTube'
	),
	'files' => array
	(
		'download'        => 'ContentDownload',
		'downloads'       => 'ContentDownloads'
	),
	'includes' => array
	(
		'article'         => 'ContentArticle',
		'alias'           => 'ContentAlias',
		'form'            => 'Form',
		'module'          => 'ContentModule',
		'teaser'          => 'ContentTeaser'
	)
);


/**
 * Back end form fields
 */
$GLOBALS['BE_FFL'] = array
(
	'text'           => 'TextField',
	'password'       => 'Password',
	'textStore'      => 'TextStore',
	'textarea'       => 'TextArea',
	'select'         => 'SelectMenu',
	'checkbox'       => 'CheckBox',
	'checkboxWizard' => 'CheckBoxWizard',
	'radio'          => 'RadioButton',
	'radioTable'     => 'RadioTable',
	'inputUnit'      => 'InputUnit',
	'trbl'           => 'TrblField',
	'chmod'          => 'ChmodTable',
	'pageTree'       => 'PageTree',
	'pageSelector'   => 'PageSelector',
	'fileTree'       => 'FileTree',
	'fileSelector'   => 'FileSelector',
	'fileUpload'     => 'Upload',
	'tableWizard'    => 'TableWizard',
	'listWizard'     => 'ListWizard',
	'optionWizard'   => 'OptionWizard',
	'moduleWizard'   => 'ModuleWizard',
	'keyValueWizard' => 'KeyValueWizard',
	'imageSize'      => 'ImageSize',
	'timePeriod'     => 'TimePeriod',
	'metaWizard'     => 'MetaWizard'
);


/**
 * Front end form fields
 */
$GLOBALS['TL_FFL'] = array
(
	'headline'    => 'FormHeadline',
	'explanation' => 'FormExplanation',
	'html'        => 'FormHtml',
	'fieldset'    => 'FormFieldset',
	'text'        => 'FormTextField',
	'password'    => 'FormPassword',
	'textarea'    => 'FormTextArea',
	'select'      => 'FormSelectMenu',
	'radio'       => 'FormRadioButton',
	'checkbox'    => 'FormCheckBox',
	'upload'      => 'FormFileUpload',
	'hidden'      => 'FormHidden',
	'captcha'     => 'FormCaptcha',
	'submit'      => 'FormSubmit'
);


/**
 * Page types
 */
$GLOBALS['TL_PTY'] = array
(
	'regular'   => 'PageRegular',
	'forward'   => 'PageForward',
	'redirect'  => 'PageRedirect',
	'root'      => 'PageRoot',
	'error_403' => 'PageError403',
	'error_404' => 'PageError404'
);


/**
 * Maintenance
 */
$GLOBALS['TL_MAINTENANCE'] = array
(
	'LiveUpdate',
	'RebuildIndex',
	'PurgeData'
);


/**
 * Purge jobs
 */
$GLOBALS['TL_PURGE'] = array
(
	'tables' => array
	(
		'index' => array
		(
			'callback' => array('Automator', 'purgeSearchTables'),
			'affected' => array('tl_search', 'tl_search_index')
		),
		'undo' => array
		(
			'callback' => array('Automator', 'purgeUndoTable'),
			'affected' => array('tl_undo')
		),
		'versions' => array
		(
			'callback' => array('Automator', 'purgeVersionTable'),
			'affected' => array('tl_version')
		),
		'log' => array
		(
			'callback' => array('Automator', 'purgeSystemLog'),
			'affected' => array('tl_log')
		)
	),
	'folders' => array
	(
		'images' => array
		(
			'callback' => array('Automator', 'purgeImageCache'),
			'affected' => array('assets/images')
		),
		'scripts' => array
		(
			'callback' => array('Automator', 'purgeScriptCache'),
			'affected' => array('assets/js', 'assets/css')
		),
		'pages' => array
		(
			'callback' => array('Automator', 'purgePageCache'),
			'affected' => array('system/cache/html')
		),
		'search' => array
		(
			'callback' => array('Automator', 'purgeSearchCache'),
			'affected' => array('system/cache/search')
		),
		'internal' => array
		(
			'callback' => array('Automator', 'purgeInternalCache'),
			'affected' => array('system/cache/config', 'system/cache/dca', 'system/cache/language', 'system/cache/sql')
		),
		'temp' => array
		(
			'callback' => array('Automator', 'purgeTempFolder'),
			'affected' => array('system/tmp')
		)
	),
	'custom' => array
	(
		'xml' => array
		(
			'callback' => array('Automator', 'generateXmlFiles')
		)
	)
);


/**
 * Image crop modes
 */
$GLOBALS['TL_CROP'] = array
(
	'relative' => array
	(
		'proportional', 'box'
	),
	'exact' => array
	(
		'crop',
		'left_top',    'center_top',    'right_top',
		'left_center', 'center_center', 'right_center',
		'left_bottom', 'center_bottom', 'right_bottom'
	)
);


/**
 * Cron jobs
 */
$GLOBALS['TL_CRON'] = array
(
	'monthly' => array
	(
		array('Automator', 'purgeImageCache')
	),
	'weekly' => array
	(
		array('Automator', 'generateSitemap'),
		array('Automator', 'purgeScriptCache'),
		array('Automator', 'purgeSearchCache')
	),
	'daily' => array
	(
		array('Automator', 'rotateLogs'),
		array('Automator', 'purgeTempFolder'),
		array('Automator', 'checkForUpdates')
	),
	'hourly' => array(),
	'minutely' => array()
);


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS'] = array
(
	'getSystemMessages' => array
	(
		array('Messages', 'versionCheck'),
		array('Messages', 'lastLogin'),
		array('Messages', 'topLevelRoot'),
		array('Messages', 'languageFallback')
	)
);


/**
 * Register the auto_item keywords
 */
$GLOBALS['TL_AUTO_ITEM'] = array('items', 'events');


/**
 * Do not index a page if one of the following parameters is set
 */
$GLOBALS['TL_NOINDEX_KEYS'] = array('id', 'file', 'token', 'day', 'month', 'year', 'page', 'PHPSESSID');


/**
 * Register the supported CSS units
 */
$GLOBALS['TL_CSS_UNITS'] = array('px', '%', 'em', 'rem', 'vw', 'vh', 'vmin', 'vmax', 'ex', 'pt', 'pc', 'in', 'cm', 'mm');


/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS'] = array
(
	'start' => array
	(
		'accordionStart',
		'sliderStart'
	),
	'stop' => array
	(
		'accordionStop',
		'sliderStop'
	),
	'single' => array
	(
		'accordionSingle'
	),
	'separator' => array()
);


/**
 * Asset versions
 */
$GLOBALS['TL_ASSETS'] = array
(
	'ACE'          => '1.1.6',
	'CSS3PIE'      => '1.0.0',
	'DROPZONE'     => '3.8.5',
	'HIGHLIGHTER'  => '3.0.83',
	'HTML5SHIV'    => '3.7.0',
	'RESPIMAGE'    => '0.9.6',
	'SWIPE'        => '2.0',
	'JQUERY'       => '1.11.0',
	'JQUERY_UI'    => '1.10.4',
	'COLORBOX'     => '1.5.8',
	'MEDIAELEMENT' => '2.14.2',
	'TABLESORTER'  => '2.0.5',
	'MOOTOOLS'     => '1.5.1',
	'COLORPICKER'  => '1.4',
	'DATEPICKER'   => '2.2.0',
	'MEDIABOX'     => '1.4.6',
	'SIMPLEMODAL'  => '1.2',
	'SLIMBOX'      => '1.8'
);


/**
 * Other global arrays
 */
$GLOBALS['TL_MODELS'] = array();
$GLOBALS['TL_PERMISSIONS'] = array();


/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2011-2013
 * @author     Cliff Parnitzky
 * @package    EfgMemberSelect
 * @license    LGPL
 * @filesource
 */

/**
 * Front end form fields
 */
$GLOBALS['TL_FFL']['efgMemberSelect'] = 'FormMemberSelectMenu';
$GLOBALS['TL_FFL']['efgMemberHidden'] = 'FormMemberHiddenField';

/**
 * Back end form fields
 */
$GLOBALS['BE_FFL']['efgMemberSelect'] = 'FormMemberSelectMenu';

/**
 * Adding field type to storabel fields.
 */
$GLOBALS['EFG']['storable_fields'][] = 'efgMemberSelect';

/**
 * Adding hook for replacing the insert tags with values
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('EfgMemberSelectInsertTag', 'replaceEfgMemberSelectInsertTags');
 if(!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * associategroups
 * for Contao CMS
 * 
 * @copyright	backboneIT | Oliver Hoff 2013
 * @copyright	Andreas Schempp 2010-2013
 * @author		Oliver Hoff <oliver@hofff.com>
 * @author		Andreas Schempp <andreas@schempp.ch>
 * @license		http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['TL_HOOKS']['createNewUser'][] = array('AssociateGroups', 'createNewUser');

$GLOBALS['BE_MOD']['accounts']['member']['sync_tl_member_to_group']
	= array('AssociateGroups', 'syncMemberToGroup');
$GLOBALS['BE_MOD']['accounts']['user']['sync_tl_user_to_group']
	= array('AssociateGroups', 'syncUserToGroup');

TL_MODE == 'BE' && $GLOBALS['TL_CSS'][] = 'system/modules/associategroups/html/backend.css';


/**
 * Extension for: TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 * This is the Content Boxes configuration file.
 *
 * PHP version 5
 * @copyright  Christian Wenzel/Fred Bliss 2007 / computino.de Webservice 2008
 * @author     Christian Wenzel <wenzel@saiga.de>
 * @author     Fred Bliss <fred@stevensdesign.com>
 * @author     Markus Milkereit <markus@computino.de>
 * @package    Boxes 
 * @license    GPL 
 * @filesource
 */

/**
 * -------------------------------------------------------------------------
 * Box CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_Boxes_CTE'] = array
(
	'texts' => array
	(
		'headline'  => 'Magmell\Boxes\BoxesContentHeadline',
		'text'      => 'Magmell\Boxes\BoxesContentText',
		// 'html'      => 'BoxesContentHtml', // TODO implement class
	),
	'images' => array
	(
		// 'image'     => 'BoxesContentImage', // TODO implement class
		'gallery'   => 'Magmell\Boxes\BoxesContentGallery'
	),
	'files' => array
	(
		// 'download'  => 'BoxesContentDownload', // TODO implement class
		// 'downloads' => 'BoxesContentDownloads' // TODO implement class
	),
	'includes' => array
	(
		'article'   => 'Magmell\Boxes\BoxesContentArticle',
		// 'alias'     => 'BoxesContentAlias', // TODO implement class
		'module'    => 'Magmell\Boxes\BoxesContentModule',
	)
);

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['BE_MOD']['content'], sizeof($GLOBALS['BE_MOD']['content']), array('contentbox' => array
(
    'tables' 	 => array('tl_boxen'),
    'icon'   	 => 'system/modules/boxes/assets/icon.gif',
)
));

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */ 
array_insert($GLOBALS['FE_MOD']['miscellaneous'],0, array
(
  'contentbox' => 'Magmell\Boxes\ModuleBoxes'
));


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
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'calendar' => array
	(
		'tables'      => array('tl_calendar', 'tl_calendar_events', 'tl_calendar_feed', 'tl_content'),
		'icon'        => 'system/modules/calendar/assets/icon.gif',
		'table'       => array('TableWizard', 'importTable'),
		'list'        => array('ListWizard', 'importList')
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'events' => array
	(
		'calendar'    => 'ModuleCalendar',
		'eventreader' => 'ModuleEventReader',
		'eventlist'   => 'ModuleEventlist',
		'eventmenu'   => 'ModuleEventMenu'
	)
));


/**
 * Cron jobs
 */
$GLOBALS['TL_CRON']['daily'][] = array('Calendar', 'generateFeeds');


/**
 * Register hook to add news items to the indexer
 */
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('Calendar', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Calendar', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('Calendar', 'generateFeeds');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'calendars';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarp';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeedp';


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
 * Add content element
 */
$GLOBALS['TL_CTE']['includes']['comments'] = 'ContentComments';


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['application']['comments'] = 'ModuleComments';


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 5, array
(
	'comments' => array
	(
		'tables'     => array('tl_comments'),
		'icon'       => 'system/modules/comments/assets/icon.gif',
		'stylesheet' => 'system/modules/comments/assets/style.css'
	)
));


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Devtools
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['devtools'] = array
(
	'autoload' => array
	(
		'callback'   => 'ModuleAutoload',
		'icon'       => 'system/modules/devtools/assets/autoload.gif'
	),
	'extension' => array
	(
		'tables'     => array('tl_extension'),
		'create'     => array('ModuleExtension', 'generate'),
		'icon'       => 'system/modules/devtools/assets/extension.gif'
	),
	'labels' => array
	(
		'callback'   => 'ModuleLabels',
		'icon'       => 'system/modules/devtools/assets/labels.gif',
		'stylesheet' => 'system/modules/devtools/assets/labels.css'
	)
);
 

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
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD'], 3, array
(
	'content' => array
	(
		'caroufredsel' => array
		(
			'tables' => array('tl_dk_caroufredsel', 'tl_content'),
			'icon' => 'system/modules/dk_caroufredsel/assets/images/caroufredsel.png',
		)
	)
));


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['caroufredsel_category'] = array(
	'caroufredsel' => 'carouFredSel\ModuleCarouFredSel',
	'caroufredsel_gallery' => 'carouFredSel\ModuleCarouFredSelGallery',
	'caroufredsel_background' => 'carouFredSel\ModuleCarouFredSelBackground',
	'caroufredsel_ticker' => 'carouFredSel\ModuleCarouFredSelTicker'
);


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['caroufredsel_category'] = array(
	'caroufredsel_gallery' => 'carouFredSel\ContentCarouFredSelGallery',
	'caroufredsel_background' => 'carouFredSel\ContentCarouFredSelBackground',
	'caroufredsel_start'	 => 'carouFredSel\ContentCarouFredSelStart',
	'caroufredsel_stop' => 'carouFredSel\ContentCarouFredSelStop'
);


/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'caroufredsel_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'caroufredsel_stop';


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_dk_caroufredsel'] = 'carouFredSel\CarouFredSelModel';
 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   masonry
 * @author    Dirk Klemmt
 * @license   MIT
 * @copyright Dirk Klemmt 2013-2014
 */


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['masonry_category'] = array(
	'masonry_gallery'	=> 'masonry\ContentMasonryGallery',
	'masonry_start'		=> 'masonry\ContentMasonryStart',
	'masonry_stop'		=> 'masonry\ContentMasonryStop'
);


/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'masonry_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'masonry_stop';


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
 * Add back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 2, array
(
	'faq' => array
	(
		'tables' => array('tl_faq_category', 'tl_faq'),
		'icon'   => 'system/modules/faq/assets/icon.gif'
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 3, array
(
	'faq' => array
	(
		'faqlist'   => 'ModuleFaqList',
		'faqreader' => 'ModuleFaqReader',
		'faqpage'   => 'ModuleFaqPage'
	)
));


/**
 * Register hooks
 */
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('ModuleFaq', 'getSearchablePages');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'faqs';
$GLOBALS['TL_PERMISSIONS'][] = 'faqp';


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
 * Front end module
 */
$GLOBALS['FE_MOD']['application']['listing'] = 'ModuleListing';


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
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'news' => array
	(
		'tables'      => array('tl_news_archive', 'tl_news', 'tl_news_feed', 'tl_content'),
		'icon'        => 'system/modules/news/assets/icon.gif',
		'table'       => array('TableWizard', 'importTable'),
		'list'        => array('ListWizard', 'importList')
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'news' => array
	(
		'newslist'    => 'ModuleNewsList',
		'newsreader'  => 'ModuleNewsReader',
		'newsarchive' => 'ModuleNewsArchive',
		'newsmenu'    => 'ModuleNewsMenu'
	)
));


/**
 * Cron jobs
 */
$GLOBALS['TL_CRON']['daily'][] = array('News', 'generateFeeds');


/**
 * Register hook to add news items to the indexer
 */
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('News', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('News', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('News', 'generateFeeds');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'news';
$GLOBALS['TL_PERMISSIONS'][] = 'newp';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeedp';


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
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 4, array
(
	'newsletter' => array
	(
		'tables'     => array('tl_newsletter_channel', 'tl_newsletter', 'tl_newsletter_recipients'),
		'send'       => array('Newsletter', 'send'),
		'import'     => array('Newsletter', 'importRecipients'),
		'icon'       => 'system/modules/newsletter/assets/icon.gif',
		'stylesheet' => 'system/modules/newsletter/assets/style.css'
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'newsletter' => array
	(
		'subscribe'   => 'ModuleSubscribe',
		'unsubscribe' => 'ModuleUnsubscribe',
		'nl_list'     => 'ModuleNewsletterList',
		'nl_reader'   => 'ModuleNewsletterReader'
	)
));


/**
 * Register hooks
 */
$GLOBALS['TL_HOOKS']['createNewUser'][] = array('Newsletter', 'createNewUser');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array('Newsletter', 'activateAccount');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Newsletter', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['closeAccount'][] = array('Newsletter', 'removeSubscriptions');


/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'newsletters';
$GLOBALS['TL_PERMISSIONS'][] = 'newsletterp';


/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   Repository
 * @author    Peter Koch, IBK Software AG
 * @license   See accompaning file LICENSE.txt
 * @copyright Peter Koch 2008-2010
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['system']['repository_catalog'] = array
(
	'callback'   => 'RepositoryCatalog',
	'icon'       => 'system/modules/repository/themes/default/images/catalog16.png',
	'stylesheet' => 'system/modules/repository/themes/default/backend.css'
);

$GLOBALS['BE_MOD']['system']['repository_manager'] = array
(
	'callback'   => 'RepositoryManager',
	'icon'       => 'system/modules/repository/themes/default/images/install16.png',
	'stylesheet' => 'system/modules/repository/themes/default/backend.css'
);
