<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Twitter
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'twitter'    => 'system/modules/twitter/twitter.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'twitter' => 'system/modules/twitter/templates',
));
