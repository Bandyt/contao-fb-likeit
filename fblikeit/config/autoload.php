<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Fblikeit
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'fblikeit'           => 'system/modules/fblikeit/fblikeit.php',
	'fblikeit_xfbml'     => 'system/modules/fblikeit/fblikeit_xfbml.php',
	'mod_fblikeit'       => 'system/modules/fblikeit/mod_fblikeit.php',
	'mod_fblikeit_xfbml' => 'system/modules/fblikeit/mod_fblikeit_xfbml.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'fblikeit'       => 'system/modules/fblikeit/templates',
	'fblikeit_xfbml' => 'system/modules/fblikeit/templates',
));
