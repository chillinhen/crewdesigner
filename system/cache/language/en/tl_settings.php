<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2005-2014 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/en/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

// system/modules/core/languages/en/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Website title';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Please enter the title of the website.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-mail address of the system administrator';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Auto-generated messages like subscription confirmation e-mails will be sent to this address.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Date format';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'The date format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Time format';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'The time format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Date and time format';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'The date and time format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Time zone';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Please select the server time zone.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Relative path to the Contao directory';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'The relative path to the Contao directory is usually set automatically by the install tool.';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Character set';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'It is recommended to use UTF-8, so special characters are displayed correctly.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Disable the command scheduler';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Disable the periodic command scheduler and execute the cron.php script by a real cron job (which you have to set up manually).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Minify the markup';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Minify the HTML markup before it is sent to the browser.';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Compress scripts';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Create a compressed version of the combined CSS and JavaScript files. Requires adjustments of the .htaccess file.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Items per page';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Here you can define the number of items per page in the back end.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Maximum items per page';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'This overall limit takes effect if a user chooses the "show all records" option.';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][0] = 'Exclude folders from synchronization';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][1] = 'Here you can enter a comma separated list of folders which will be exempt from the files synchronization (e.g. <em>attachments,music_academy</em>). Note that excluded resources cannot be used in e.g. image or download elements!';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Do not collapse elements';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Do not collapse elements in the back end preview.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'URL suffix';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'The URL suffix will be added to the URI string to simulate static documents.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Cache mode';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Here you can select the cache mode.';
$GLOBALS['TL_LANG']['tl_settings']['proxyServerIps'][0] = 'Trusted proxy servers';
$GLOBALS['TL_LANG']['tl_settings']['proxyServerIps'][1] = 'Here you can enter a comma separated list of trusted proxy server IP addresses.';
$GLOBALS['TL_LANG']['tl_settings']['sslProxyDomain'][0] = 'SSL proxy domain';
$GLOBALS['TL_LANG']['tl_settings']['sslProxyDomain'][1] = 'If your website is available via an SSL proxy server, please enter its domain here (e.g. <em>sslsites.de</em>).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Anonymize IP addresses';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Anonymize any IP address that is stored in the database, except in the <em>tl_session</em> table (the IP address is bound to the session for security reasons).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Anonymize Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Anonymize the IP addresses that are sent to Google Analytics.';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'Rewrite URLs';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Make Contao generate static URLs without the index.php fragment. This feature requires "mod_rewrite", renaming the ".htaccess.default" file to ".htaccess" and adjusting the RewriteBase as necessary.';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Add the language to the URL';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Add the language string as first URL parameter (e.g. <em>http://example.com/en/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Do not redirect empty URLs';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'For an empty URL display the website instead of redirecting to the language root page (not recommended).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Enable auto_item';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Skip the <em>items/</em> or <em>events/</em> fragment in the URL and automatically discover the item based on the <em>auto_item</em> parameter.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Disable page alias usage';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Use the numeric ID of a page or article instead of its alias.';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][0] = 'Enable folder URLs';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][1] = 'Here you can enable folder-style page aliases like <em>docs/install/download.html</em> instead of <em>docs-install-download.html</em>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Allowed HTML tags';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Here you can enter a list of allowed HTML tags that will not be stripped.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Enable debug mode';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Print certain runtime information like database queries to the screen.';
$GLOBALS['TL_LANG']['tl_settings']['maintenanceMode'][0] = 'Maintenance mode';
$GLOBALS['TL_LANG']['tl_settings']['maintenanceMode'][1] = 'Send a 503 HTTP header and show a maintenance page in the front end.';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][0] = 'Bypass the internal cache';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][1] = 'Do not use the internal cache files (e.g. useful when developing extensions).';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Disable request tokens';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Do not check the request token when a form is submitted. Attention: potential security risk!';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Account locking time';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'An account will be locked if a wrong password is entered three times in a row.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Display error messages';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Print error messages to the screen (not recommended for productional sites).';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Log error messages';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Write error messages to the error log file (<em>system/logs/error.log</em>).';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Run in safe mode';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Run Contao in safe mode and load only core modules.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Disable IP check';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Do not bind sessions to IP addresses. Choosing this option is a potential security risk!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Download file types';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Here you can enter a comma separated list of downloadable file types.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Image file types';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Here you can enter a comma separated list of file types that can be handled by the image class.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Editable file types';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Here you can enter a comma separated list of file types that can be edited in the source editor.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Template file types';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Here you can enter a comma separated list of supported template file types.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Maximum front end width';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'If the width of an image or movie exceeds this value, it will be adjusted automatically.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'JPG thumbnail quality';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Here you can enter the JPG thumbnail quality in percent.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maximum GD image width';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Here you can enter the maximum image width that the GD library shall try to handle.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maximum GD image height';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Here you can enter the maximum image height that the GD library shall try to handle.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Files directory';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Here you can set the relative path to the Contao files directory.';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Upload file types';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Here you can enter a comma separated list of uploadable file types.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Simultaneous file uploads';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Here you can enter the maximum number of simultaneous file uploads.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maximum upload file size';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Here you can enter the maximum upload file size in bytes (1 MB = 1000 kB = 1000000 byte).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maximum image width';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Here you can enter the maximum width for image uploads in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maximum image height';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Here you can enter the maximum height for image uploads in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Enable searching';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Index pages so they can be searched.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Index protected pages';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Use this option carefully and always exclude personalized pages from being indexed!';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Send e-mails via SMTP';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Use an SMTP server instead of the PHP mail() function to send e-mails.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'SMTP hostname';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Please enter the host name of the SMTP server.';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'SMTP username';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Here you can enter the SMTP username.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'SMTP password';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Here you can enter the SMTP password.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'SMTP encryption';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Here you can choose an encryption method (SSL or TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'SMTP port number';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Please enter the port number of the SMTP server.';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Inactive extensions';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Here you can deactivate unneeded extensions.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Storage time for undo steps';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Here you can enter the storage time for undo steps in seconds (24 hours = 86400 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Storage time for versions';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Here you can enter the storage time for different versions of a record in seconds (90 days = 7776000 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Storage time for log entries';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Here you can enter the storage time for log entries in seconds (14 days = 1209600 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Session timeout';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Here you can enter the maximum lifetime of a session in seconds (60 minutes = 3600 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Auto login period';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Here you can set the front end auto login period (90 days = 7776000 seconds).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Default page owner';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Here you can select a user as the default owner of a page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Default page group';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Here you can select a group as the default owner of a page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Default access rights';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Please assign the default access rights for pages and articles.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'Live Update URL';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Here you can enter the Live Update URL.';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Website title';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Date and time';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Global configuration';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Back end configuration';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Front end configuration';
$GLOBALS['TL_LANG']['tl_settings']['proxy_legend'] = 'Proxy configuration';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Privacy settings';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Security settings';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Files and images';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Upload settings';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Search engine settings';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'SMTP configuration';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Inactive extensions';
$GLOBALS['TL_LANG']['tl_settings']['cron_legend'] = 'Command scheduler';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Timeout values';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Default access rights';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Live Update';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Static resources';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Edit the local configuration';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Use the server and the browser cache';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Use only the server cache';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Use only the browser cache';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Disable caching';


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
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['caroufredsel_legend']	= 'carouFredSel settings';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode'][0] = 'Konfigurations-Modus';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode'][1] = 'Bestimmt welche Einstellungen für das Karussell und die zugehörigen Inhalts-Elemente/Module zur Verfügung stehen.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'][0] = 'carouFredSel-Startmethode';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode'][1] = 'Falls die Elemente keine feste Größe haben kommt es unter Webkit-Browsern unter Umständen dazu, daß diese nicht korrekt dargestellt werden. Es hilft dann das JavaScript zu einem anderen Zeitpunkt zu starten.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize'][0] = 'Verhalten bei Größenänderung des Fensters';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize'][1] = 'Bestimmt, wie auf das "onWindowResize"-Event reagiert wird. Bei jeder Änderung der Fenstergröße wird dieses mehrfach ausgelößt. Dies kann in Abhängigkeit der hinterlegten Funktion und der Menge an Karussells auf der Seite zu zähem/langsamen reagieren führen. Über die Parameter kann das Aufrufverhalten gesteuert werden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTransition'][0] = 'CSS3 Transitions verwenden';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTransition'][1] = 'Anstelle der jQuery-Animationen werden CSS3 Transitions verwendet. Es wird das jQuery Plugin "jQuery.transit.min.js" eingebunden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsImageLoader'][0] = 'Image Loader verwenden';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsImageLoader'][1] = 'Bilder im Karussell werden erst nach ihrem vollständigen Laden sanft eingeblendet. Es wird das jQuery Plugin "jquery.krioImageLoader.js" eingebunden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsDebug'][0] = 'Debugmodus aktivieren';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsDebug'][1] = 'Ist der Debugmodus aktiv werden Debug-Informationen in die Konsole geschrieben.';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['basic'][0] = 'basic';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['basic'][1] = 'Um die Komplexität zu verringern und mehr Übersichtlichkeit zu erhalten stehen nur die am häufigsten verwendeten Einstellungen zur Verfügung.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['advanced'][0] = 'advanced';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['advanced'][1] = 'Alle Einstellungen stehen zur Verfügung.';

$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onDocumentReady'][0] = 'onDocumentReady';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onDocumentReady'][1] = 'Das Karussell wird initialisiert, sobald das HTML-Dokument geladen und der DOM aufgebaut wurde. Es sind noch nicht alle Inhalte geladen. Webkit-Browser liefern bei nicht/teilweise geladenen Bildern falsche Größen.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onWindowLoad'][0] = 'onWindowLoad';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['onWindowLoad'][1] = 'Das Karussell wird initialisiert, nachdem ALLE Elemente der Seite geladen wurden. Dies kann unter Umständen länger dauern und zum sichtbareren Aufbau der Seite führen, da die Inhalte vor der Initialisierung schon dargestellt werden.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['readyLoad'][0] = 'readyLoad';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsTriggerMode']['readyLoad'][1] = 'Diese Erweiterung ist eine Kombination der beiden anderen Modi. Das Karussell wird wie bei onDocumentReady initialisiert und danach kontinuierlich erneut bis nach onWindowLoad. Es wird das jQuery Plugin "jquery.readyLoad.js" eingebunden.';

$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['throttle'][0] = 'throttle';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['throttle'][1] = 'Die Funktion wird in regelmäßigen Intervallen (alle 200 Millisekunden) aufgerufen.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['debounce'][0] = 'debounce';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsOnWindowResize']['debounce'][1] = 'Die Funktion wird einmalig (nach 300 Millisekunden) aufgerufen.';

// system/modules/repository/languages/en/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['repository_wsdl'][0] = 'Extension repository URL';
$GLOBALS['TL_LANG']['tl_settings']['repository_wsdl'][1] = 'Here you can enter the URL of the extension repository WSDL file.';
$GLOBALS['TL_LANG']['tl_settings']['repository_languages'][0] = 'Fallback languages';
$GLOBALS['TL_LANG']['tl_settings']['repository_languages'][1] = 'Here you can enter a comma separated list of ISO language codes to be used if an extension description is not available in the current back end language.';
$GLOBALS['TL_LANG']['tl_settings']['repository_listsize'][0] = 'Extensions per page';
$GLOBALS['TL_LANG']['tl_settings']['repository_listsize'][1] = 'Here you can define the number of extensions per page.';
$GLOBALS['TL_LANG']['tl_settings']['repository_unsafe_catalog'][0] = 'Show incompatible extensions';
$GLOBALS['TL_LANG']['tl_settings']['repository_unsafe_catalog'][1] = 'Show incompatible extensions in the extension catalog. Note that installing incompatible extensions can break your Contao installation!';
$GLOBALS['TL_LANG']['tl_settings']['repository_legend'] = 'Extension repository';
