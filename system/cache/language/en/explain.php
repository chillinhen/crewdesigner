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

// system/modules/core/languages/en/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][0] = 'Rich Text Editor';
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][1] = 'For more information about TinyMCE please visit <a href="http://www.tinymce.com/" title="TinyMCE by moxiecode" target="_blank">http://www.tinymce.com/</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][0] = 'Insert tags';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][1] = 'For more information on insert tags please visit <a href="https://contao.org/manual/managing-content.html#insert-tags" title="Contao online documentation" target="_blank">https://contao.org/manual/managing-content.html#insert-tags</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][0] = 'Code Editor';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][1] = 'For more information about ACE please visit <a href="http://ace.ajax.org" title="ACE (Ajax.org Cloud9 Editor)" target="_blank">http://ace.ajax.org</a>.';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][0] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][1] = 'Contao supports all date and time formats that can be parsed with the PHP date() function. However, to ensure that any input can be transformed into a UNIX timestamp, you can only use numeric date and time formats (j, d, m, n, y, Y, g, G, h, H, i, s) in the back end.<br><br><strong>You can enter variant front end formats in the site structure (website root pages).</strong><br><br><em>Here are some examples of valid date and time formats</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][0] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][1] = 'YYYY-MM-DD, international ISO-8601, e.g. 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][0] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][1] = 'MM/DD/YYYY, English format, e.g. 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][0] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][1] = 'DD.MM.YYYY, German format, e.g. 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][0] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][1] = 'YY-M-D, without leading zeros, e.g. 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][0] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][1] = 'YYYYMMDD, timestamp, e.g. 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][0] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][1] = '24 hours, minutes and seconds, e.g. 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][0] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][1] = '12 hours without leading zeros and minutes, e.g. 8:36';
$GLOBALS['TL_LANG']['XPL']['highlighter'][0][0] = 'Rich Text Editor';
$GLOBALS['TL_LANG']['XPL']['highlighter'][0][1] = 'For more information about how to configure the syntax highlighter please visit <a href="http://alexgorbatchev.com/SyntaxHighlighter/manual/configuration/#syntaxhighlighterdefaults" title="SyntaxHighlighter by Alex Gorbatchev" target="_blank">http://alexgorbatchev.com</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][0] = 'Sizes attribute';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][1] = 'The HTML attribute <code>sizes</code> defines the displayed width of the image, optionally combined with a media query. You can use any CSS value to define the width.<br><br>E.g. <code>(max-width: 600px) 100vw, 50vw</code> means the images width is 100% of the viewport for small screens and 50% of the viewport for larger screens.<br><br>And <code>(max-width: 600px) calc(100vw - 20px), 500px</code> means the images width is 20px smaller than the viewport for small screens and 500px for larger screens.<br><br>For more information about the sizes attribute please visit <a href="http://www.w3.org/html/wg/drafts/html/master/embedded-content.html#attr-img-sizes" target="_blank">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][0] = 'Pixel densities/<br>scale factors';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][1] = 'If the sizes attribute is not defined, this setting simply defines the pixel densities you want to support. The dimensions of the images are adjusted automatically. E.g. <code>1x, 1.5x, 2x</code> creates the following HTML code:<br><code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>If the sizes attribute is defined, the same image sizes get generated but width descriptors are used for the srcset attribute. E.g. a 200 pixel wide image with the densities <code>1x, 1.5x, 2x</code> creates the following HTML code:<br><code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>For more information about the srcset attribute please visit <a href="http://www.w3.org/html/wg/drafts/html/master/embedded-content.html#attr-img-srcset" target="_blank">w3.org</a>.';
