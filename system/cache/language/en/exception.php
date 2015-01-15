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

// system/modules/core/languages/en/exception.xlf
$GLOBALS['TL_LANG']['XPT']['error'] = 'An error occurred';
$GLOBALS['TL_LANG']['XPT']['matter'] = 'What\'s the matter?';
$GLOBALS['TL_LANG']['XPT']['howToFix'] = 'How can I fix the issue?';
$GLOBALS['TL_LANG']['XPT']['more'] = 'Tell me more, please';
$GLOBALS['TL_LANG']['XPT']['hint'] = 'To customize this notice, create a custom template file named <em>%s</em>.';
$GLOBALS['TL_LANG']['XPT']['errorOccurred'] = 'An error occurred while executing this script. Something does not work properly.';
$GLOBALS['TL_LANG']['XPT']['errorFixOne'] = 'Open the <code>system/logs/error.log</code> file and find the associated error message (usually the last one). You can also add the following line to the local configuration file and reload this page:';
$GLOBALS['TL_LANG']['XPT']['errorFixTwo'] = 'However, please be aware that <strong>anyone</strong> will be able to see error messages on your website then!';
$GLOBALS['TL_LANG']['XPT']['errorExplain'] = 'The script execution stopped, because something does not work properly. The actual error message is hidden by this notice for security reasons and can be found in in the <code>system/logs/error.log</code> file (see above). If you do not understand the error message or do not know how to fix the problem, search the <a href="https://contao.org/faq.html" target="_blank">Contao FAQs</a> or visit the <a href="https://contao.org/support.html" target="_blank">Contao support page</a>.';
$GLOBALS['TL_LANG']['XPT']['requestToken'] = 'Invalid request token';
$GLOBALS['TL_LANG']['XPT']['invalidToken'] = 'The request token could not be verified.';
$GLOBALS['TL_LANG']['XPT']['tokenRetry'] = 'Please <a href="javascript:window.location.href=window.location.href">click this link</a> and try again. Do not use the back button of your browser.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainOne'] = 'This error occurs if there is a POST request without a valid authentication token. In Contao 2.10, the referer check has been replaced with a request token system. If the problem persists, you may be using an incompatible third-party extension or have not correctly updated your Contao installation.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainTwo'] = 'For more information, search the <a href="https://contao.org/faq.html" target="_blank">Contao FAQs</a> or visit the <a href="https://contao.org/support.html" target="_blank">Contao support page</a>.';
$GLOBALS['TL_LANG']['XPT']['incomplete'] = 'Incomplete installation';
$GLOBALS['TL_LANG']['XPT']['incompleteInstallation'] = 'The installation has not been completed, therefore Contao cannot work properly.';
$GLOBALS['TL_LANG']['XPT']['incompleteFixOne'] = 'Point your browser to the following URL:';
$GLOBALS['TL_LANG']['XPT']['installPath'] = 'path-to-installation';
$GLOBALS['TL_LANG']['XPT']['incompleteFixTwo'] = 'This will open the Contao install tool, which will guide you through the installation process.';
$GLOBALS['TL_LANG']['XPT']['incompleteExplain'] = 'For more information, please refer to the <a href="https://contao.org/manual/installation.html" target="_blank">Contao manual</a>.';
$GLOBALS['TL_LANG']['XPT']['notFound'] = 'Page not found';
$GLOBALS['TL_LANG']['XPT']['pageNotFound'] = 'The page you have requested does not exist under this domain.';
$GLOBALS['TL_LANG']['XPT']['notFoundFix'] = 'Try to <a href="%s">go to the top level</a> and use the search function (if any) to find the page you were looking for. You may also <a href="%s">contact the webmaster</a> and let him know that there is something wrong.';
$GLOBALS['TL_LANG']['XPT']['noForward'] = 'Forward page not found';
$GLOBALS['TL_LANG']['XPT']['noForwardPage'] = 'The application has been configured to forward the request to another page, however, the target page does not exist or has not been published.';
$GLOBALS['TL_LANG']['XPT']['noForwardFix'] = 'This is something that needs to be fixed by the administrator of the website. If you are a visitor, there is nothing you can do except to <a href="%s">contact the webmaster</a> to let him know that there is something wrong.';
$GLOBALS['TL_LANG']['XPT']['noRoot'] = 'No root page found';
$GLOBALS['TL_LANG']['XPT']['noRootPage'] = 'There is no website root page which matches the requested language and/or domain name.';
$GLOBALS['TL_LANG']['XPT']['noRootFix'] = 'If you have explicitly set a language, try to <a href="%s">go to the top level</a> and see whether you are being redirected. Otherwise <a href="%s">contact the webmaster</a> and let him know that there is something wrong.';
$GLOBALS['TL_LANG']['XPT']['noLayout'] = 'No layout specified';
$GLOBALS['TL_LANG']['XPT']['noLayoutSpecified'] = 'The page you have requested has not yet been associated with a page layout.';
$GLOBALS['TL_LANG']['XPT']['noLayoutFix'] = 'Make sure that you have assigned a page layout to each website root page in the site structure.';
$GLOBALS['TL_LANG']['XPT']['noLayoutExplain'] = 'For more information, please refer to the <a href="https://contao.org/manual/managing-pages.html" target="_blank">Contao manual</a>.';
$GLOBALS['TL_LANG']['XPT']['noActive'] = 'No active pages found';
$GLOBALS['TL_LANG']['XPT']['noActivePages'] = 'Your request has been mapped to a website which does not yet contain any published pages.';
$GLOBALS['TL_LANG']['XPT']['noActiveFix'] = 'Most likely, the website is still under development and will be online in a few days. If you still think that there is something wrong, <a href="%s">contact the webmaster</a> and let him know.';
$GLOBALS['TL_LANG']['XPT']['forbidden'] = 'Forbidden';
$GLOBALS['TL_LANG']['XPT']['notAuthenticated'] = 'You are either not authenticated or you are not allowed to access the requested page.';
$GLOBALS['TL_LANG']['XPT']['forbiddenFix'] = 'If you are not logged in, try to <a href="%s">go to the top level</a> and look for a login form. If there is no login form or if you are logged in already, <a href="%s">contact the webmaster</a> and let him know that there is something wrong.';
$GLOBALS['TL_LANG']['XPT']['unavailable'] = 'We\'ll be right back';
$GLOBALS['TL_LANG']['XPT']['maintenance'] = 'The website is currently down for maintenance. Please come back later.';
