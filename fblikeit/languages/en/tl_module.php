<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Language
 * @license    LGPL 
 * @filesource
 */
$GLOBALS['TL_LANG']['tl_module']['fblikeit_settings'] = 'Settings';
$GLOBALS['TL_LANG']['tl_module']['fblikeit_href'] = array('Link reference','Reference for the link in the news feed item in Facebook. Leave empty for current adress.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_width'] = array('Width','Width of the like button element.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_height'] = array('Height','Height of the like button element.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_faces'] = array('Show faces','Show the faces of Facebook friends also liking this content.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_layout'] = array('Layout','Select the layout you want to use.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_verb'] = array('Verb','Select the verb you want your users to use.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_font'] = array('Font','Select the font you want to use. Leave blank for default font.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_color'] = array('Color Scheme','Select the color schema of your like button.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_appid'] = array('Application ID','The Facebook application ID. Leave empty, if not existing.');
$GLOBALS['TL_LANG']['tl_module']['fblikeit_send'] = array('Send button','Check to display the send button.');

$GLOBALS['TL_LANG']['tl_module']['fblikeit_layout']['reference']['standard'] = 'Standard';
$GLOBALS['TL_LANG']['tl_module']['fblikeit_layout']['reference']['button_count'] = 'Button counter';
$GLOBALS['TL_LANG']['tl_module']['fblikeit_layout']['reference']['box_count'] = 'Box counter';

$GLOBALS['TL_LANG']['tl_module']['fblikeit_verb']['reference']['like'] = 'like';
$GLOBALS['TL_LANG']['tl_module']['fblikeit_verb']['reference']['recommend'] = 'recommend';

$GLOBALS['TL_LANG']['tl_module']['fblikeit_color']['reference']['light'] = 'light';
$GLOBALS['TL_LANG']['tl_module']['fblikeit_color']['reference']['dark'] = 'dark';
?>