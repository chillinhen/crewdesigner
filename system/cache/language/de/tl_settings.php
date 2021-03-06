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
 * @link https://www.transifex.com/projects/p/contao/language/de/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

// system/modules/core/languages/de/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Titel der Webseite';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Bitte geben Sie den Titel der Webseite ein.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-Mail-Adresse des Systemadministrators';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Automatisch erstellte Mitteilungen wie z.B. Kommentar-Benachrichtigungen werden an diese Adresse versendet.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Datumsformat';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Der Datumsformat-String wird mit der PHP-Funktion date() geparst.';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Zeitformat';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Der Zeitformat-String wird mit der PHP-Funktion date() geparst.';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Datums- und Zeitformat';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Der Datums- und Zeitformat-String wird mit der PHP-Funktion date() geparst.';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Zeitzone';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Bitte wählen Sie die Zeitzone des Servers aus.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Relativer Pfad zum Contao-Verzeichnis';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Der relative Pfad zum Contao-Verzeichnis wird normalerweise automatisch im Installtool gesetzt.';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Zeichensatz';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Damit Sonderzeichen richtig dargestellt werden, wird die Verwendung von UTF-8 empfohlen.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Den Command-Scheduler deaktivieren';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Den Periodic Command Scheduler deaktivieren und das cron.php-Skript mittels eines echten Cronjobs (den Sie selbst einrichten müssen) ausführen.';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Markup komprimieren';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Das HTML-Markup vor dem Senden an den Browser komprimieren.';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Skripte komprimieren';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Eine komprimierte Version der kombinierten CSS- bzw. JavaScript-Dateien erstellen. Erfordert die Anpassung der .htaccess-Datei.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Datensätze pro Seite';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Hier können Sie die Anzahl der Datensätze pro Seite im Backend festlegen.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Maximum Datensätze pro Seite';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Hier legen Sie fest, wie viele Datensätze maximal angezeigt werden, wenn ein Benutzer die Option "alle Datensätze anzeigen" auswählt.';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][0] = 'Nicht zu synchronisierende Ordner';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][1] = 'Hier können Sie eine kommagetrennte Liste von Ordnern eingeben, die von der Dateisynchronisation ausgenommen werden (z.B. <em>attachments,music_academy</em>). Beachten Sie, dass ausgenommene Ressourcen nicht in z.B. Bild- oder Download-Elementen verfügbar sind!';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Elemente nicht verkürzen';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Elemente in der Backend-Vorschau nicht verkürzen.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'URL-Suffix';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'Das URL-Suffix wird der URL angehängt, um statische Dokumente zu simulieren.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Cache-Modus';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Hier können Sie den Cache-Modus festlegen.';
$GLOBALS['TL_LANG']['tl_settings']['proxyServerIps'][0] = 'Vertrauenswürdige Proxyserver';
$GLOBALS['TL_LANG']['tl_settings']['proxyServerIps'][1] = 'Hier können Sie eine kommagetrennte Liste vertrauenswürdiger Proxyserver-IP-Adressen eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['sslProxyDomain'][0] = 'SSL-Proxy-Domain';
$GLOBALS['TL_LANG']['tl_settings']['sslProxyDomain'][1] = 'Wenn Ihre Webseite über einen SSL-Proxyserver erreichbar ist, geben Sie hier dessen Domainnamen ein (z.B. <em>sslsites.de</em>).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'IP-Adressen anonymisieren';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Alle IP-Adressen anonymisieren, die in der Datenbank gespeichert werden, außer die der Tabelle <em>tl_session</em> (die IP-Adresse ist aus Sicherheitsgründen an die Session gebunden).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Google Analytics anonymisieren';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Alle IP-Adressen anonymisieren, die an Google Analytics geschickt werden.';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'URLs umschreiben';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Statische URLs ohne das index.php-Fragment erzeugen. Für diese Funktion muss "mod_rewrite" verfügbar sein sowie die Datei ".htaccess.default" in ".htaccess" umbenannt und gegebenenfalls die RewriteBase angepasst werden.';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Die Sprache zur URL hinzufügen';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Die Sprache als ersten Parameter zur URL hinzufügen (z.B. <em>http://example.com/de/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Leere URLs nicht umleiten';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'Bei einer leeren URL die Webseite anzeigen anstatt auf den Startpunkt der Sprache weiterzuleiten (nicht empfohlen).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Auto_item aktivieren';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Das <em>items/</em>- bzw. <em>events/</em>-Fragment in der URL auslassen und den Beitrag automatisch anhand des <em>auto_item</em>-Parameters erkennen.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Keine Seitenaliase verwenden';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Die numerische ID einer Seite oder eines Artikels anstelle des Alias verwenden.';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][0] = 'Ordner-URLs verwenden';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][1] = 'Hier können Sie Ordnerstrukturen in Seitenaliasen aktivieren (z.B. <em>docs/install/download.html</em> anstatt <em>docs-install-download.html</em>).';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Erlaubte HTML-Tags';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Hier können Sie eine Liste erlaubter HTML-Tags eingeben, die nicht entfernt werden sollen.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Debugmodus aktivieren';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Bestimmte Laufzeitinformationen wie z.B. Datenbankabfragen auf dem Bildschirm ausgeben.';
$GLOBALS['TL_LANG']['tl_settings']['maintenanceMode'][0] = 'Wartungsmodus';
$GLOBALS['TL_LANG']['tl_settings']['maintenanceMode'][1] = 'Sendet einen 503er HTTP-Header und gibt eine Wartungsseite im Frontend aus.';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][0] = 'Internen Cache umgehen';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][1] = 'Die internen Cache-Dateien ignorieren (z.B. nützlich bei der Extension-Entwicklung).';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Anfrage-Tokens deaktivieren';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Das Anfrage-Token beim Absenden eines Formulars nicht prüfen. Warnung: potentielles Sicherheitsrisiko!';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Wartezeit bei gesperrtem Konto';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Ein Konto wird gesperrt, wenn drei Mal hintereinander ein falsches Passwort eingegeben wird.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Fehlermeldungen anzeigen';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Fehlermeldungen auf dem Bildschirm ausgeben (nicht empfohlen für produktive Seiten).';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Fehlermeldungen protokollieren';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Fehlermeldungen in die Fehler-Logdatei (<em>system/logs/error.log</em>) schreiben.';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Abgesicherter Modus';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Contao im abgesicherten Modus betreiben und nur Core-Module laden.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'IP-Prüfung deaktivieren';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Benutzersitzungen nicht an IP-Adressen binden. Warnung: potentielles Sicherheitsrisiko!';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Erlaubte Download-Dateitypen';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die über Contao heruntergeladen werden dürfen.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Unterstützte Bildformate';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die von der Bild-Klasse verarbeitet werden können.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Editierbare Dateien';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die mit dem Quelltexteditor bearbeitet werden dürfen.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Unterstützte Templateformate';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Hier können Sie eine kommagetrennte Liste von unterstützten Template-Dateitypen eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Maximale Frontend-Breite';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Wenn die Breite eines Bildes oder Films diesen Wert übersteigt, wird sie automatisch angepasst.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'JPG-Qualität';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Hier können Sie die Qualität der JPG-Vorschaubilder in Prozent eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maximale GD-Bildbreite';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Hier können Sie die maximale Bildbreite eingeben, die die GD Library zu verarbeiten versuchen soll.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maximale GD-Bildhöhe';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Hier können Sie die maximale Bildhöhe eingeben, die die GD Library zu verarbeiten versuchen soll.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Files-Verzeichnis';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Hier können Sie den relativen Pfad zum Contao Files-Verzeichnis eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Erlaubte Upload-Dateitypen';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Hier können Sie eine kommagetrennte Liste von Dateitypen eingeben, die über Contao hochgeladen werden dürfen.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Simultane Datei-Uploads';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Hier können Sie die maximale Anzahl simultaner Datei-Uploads festlegen.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maximale Upload-Dateigröße';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Hier können Sie die maximale Upload-Dateigröße in Bytes eingeben (1 MB = 1000 kB = 1000000 Byte).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maximale Bildbreite';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Hier können Sie die maximale Breite für Bild-Uploads in Pixeln festlegen.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maximale Bildhöhe';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Hier können Sie die maximale Höhe für Bild-Uploads in Pixeln festlegen.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Suche aktivieren';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Seiten indizieren, damit sie durchsucht werden können.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Geschützte Seiten indizieren';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Nutzen Sie diese Option sorgfältig und schließen Sie personalisierte Seiten grundsätzlich von der Indizierung aus!';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'E-Mails via SMTP versenden';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Einen SMTP-Server statt der PHP-Funktion mail() für den E-Mail-Versand verwenden.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'SMTP-Hostname';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Bitte geben Sie den Hostnamen des SMTP-Servers ein.';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'SMTP-Benutzername';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Hier können Sie den SMTP-Benutzernamen eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'SMTP-Passwort';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Hier können Sie das SMTP-Passwort eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'SMTP-Verschlüsselung';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Hier können Sie eine Verschlüsselungsmethode auswählen (SSL oder TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'SMTP-Portnummer';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Bitte geben Sie die Portnummer des SMTP-Servers ein.';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Inaktive Erweiterungen';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Hier können Sie nicht benötigte Erweiterungen deaktivieren.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Speicherzeit für Undo-Schritte';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Hier können Sie die Speicherzeit für Undo-Schritte in Sekunden eingeben (24 Stunden = 86400 Sekunden).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Speicherzeit für Versionen';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Hier können Sie die Speicherzeit für verschiedene Versionen eines Datensatzes in Sekunden eingeben (90 Tage = 7776000 Sekunden).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Speicherzeit für Log-Einträge';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Hier können Sie die Speicherzeit für Log-Einträge in Sekunden eingeben (14 Tage = 1209600 Sekunden).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Verfallszeit einer Session';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Hier können Sie die Verfallszeit einer Session in Sekunden eingeben (60 Minuten = 3600 Sekunden).';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Autologin-Zeitraum';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Hier können Sie den Autologin-Zeitraum für das Frontend festlegen (90 Tage = 7776000 Sekunden).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Standardbesitzer';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Bitte wählen Sie einen Benutzer als Standardbesitzer einer Seite aus.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Standardgruppe';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Bitte wählen Sie eine Gruppe als Standardbesitzer einer Seite aus.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Standardzugriffsrechte';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Bitte legen Sie die Standardzugriffsrechte für Seiten und Artikel fest.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'Live Update-URL';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Hier können Sie die Live Update-URL eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Titel der Webseite';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Datum und Zeit';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Globale Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Backend-Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Frontend-Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['proxy_legend'] = 'Proxy-Konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Datenschutz-Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Sicherheitseinstellungen';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Dateien und Bilder';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Datei-Uploads';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Website-Suche';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'SMTP-Einstellungen';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Inaktive Erweiterungen';
$GLOBALS['TL_LANG']['tl_settings']['cron_legend'] = 'Command-Scheduler';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Speicherzeiten';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Standard-Zugriffsrechte';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Live Update';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Statische Ressourcen';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Die lokale Konfiguration bearbeiten';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Den Server- und den Browsercache verwenden';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Nur den Servercache verwenden';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Nur den Browsercache verwenden';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Cache deaktivieren';


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
$GLOBALS['TL_LANG']['tl_settings']['caroufredsel_legend'] = 'carouFredSel-Einstellungen';


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
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['basic'][0] = 'einfach';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['basic'][1] = 'Um die Komplexität zu verringern und mehr Übersichtlichkeit zu erhalten stehen nur die am häufigsten verwendeten Einstellungen zur Verfügung.';
$GLOBALS['TL_LANG']['tl_settings']['dk_cfsUsageMode']['advanced'][0] = 'erweitert';
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

// system/modules/repository/languages/de/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['repository_wsdl'][0] = 'Extension Repository-URL';
$GLOBALS['TL_LANG']['tl_settings']['repository_wsdl'][1] = 'Hier können Sie die URL der Extension Repository WSDL-Datei eingeben.';
$GLOBALS['TL_LANG']['tl_settings']['repository_languages'][0] = 'Fallback-Sprachen';
$GLOBALS['TL_LANG']['tl_settings']['repository_languages'][1] = 'Hier können Sie eine kommagetrennte Liste von ISO-Sprachcodes eingeben, die angezeigt werden, wenn eine Erweiterung nicht in der aktuellen Backendsprache verfügbar ist.';
$GLOBALS['TL_LANG']['tl_settings']['repository_listsize'][0] = 'Erweiterungen pro Seite';
$GLOBALS['TL_LANG']['tl_settings']['repository_listsize'][1] = 'Hier können Sie die Anzahl an Erweiterungen pro Seite festlegen.';
$GLOBALS['TL_LANG']['tl_settings']['repository_unsafe_catalog'][0] = 'Inkompatible Erweiterungen anzeigen';
$GLOBALS['TL_LANG']['tl_settings']['repository_unsafe_catalog'][1] = 'Inkompatible Erweiterungen im Erweiterungskatalog anzeigen. Beachten Sie, dass inkompatible Erweiterungen Ihre Contao-Installation beschädigen können!';
$GLOBALS['TL_LANG']['tl_settings']['repository_legend'] = 'Extension Repository';
