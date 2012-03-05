<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @package    fblikeit
 * @license    LGPL
 * @filesource
 */


/**
 * Add palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['fblikeit'] = '{type_legend},type,headline;{fblikeit_settings},fblikeit_href,fblikeit_faces,fblikeit_layout,fblikeit_verb,fblikeit_font,fblikeit_color,fblikeit_width,fblikeit_height';
$GLOBALS['TL_DCA']['tl_content']['palettes']['fblikeit_xfbml'] = '{type_legend},type,headline;{fblikeit_settings},fblikeit_appid,fblikeit_href,fblikeit_faces,fblikeit_layout,fblikeit_verb,fblikeit_font,fblikeit_color,fblikeit_send,fblikeit_width';


/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_href'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_href'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false,'maxlenght'=>255)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_faces'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_faces'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('mandatory'=>false),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_width'],
	'exclude'                 => false,
	'inputType'               => 'text',
	'default'				  => '100',
	'eval'                    => array('mandatory'=>true,'rgxp'=>digit,'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_height'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_height'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'default'				  => '35',
	'eval'                    => array('mandatory'=>true,'rgxp'=>digit,'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_layout'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_layout'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('standard','button_count','box_count'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_layout']['reference'],
	'eval'                    => array('mandatory'=>true,'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_verb'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_verb'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('like','recommend'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_verb']['reference'],
	'eval'                    => array('mandatory'=>true,'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_font'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_font'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('arial','lucida grande','segoe ui','tahoma','trebuchet ms','verdana'),
	'eval'                    => array('mandatory'=>false,'tl_class'=>'w50','includeBlankOption'=>true),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_color'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('light','dark'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_color']['reference'],
	'eval'                    => array('mandatory'=>true,'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_appid'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_appid'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false,'maxlenght'=>255,'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['fblikeit_send'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fblikeit_send'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('mandatory'=>false,'tl_class'=>'w50')
);

?>