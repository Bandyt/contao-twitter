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
 * @package    twitter
 * @license    LGPL
 * @filesource
 */


/**
 * Add palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'twitter_currenturl';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'twitter_currenttitle';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'twitter_currentlang';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'twitter_usevia';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'twitter_userelated';

$GLOBALS['TL_DCA']['tl_content']['palettes']['twitter'] = '{type_legend},type,headline;{twitter_seturl},twitter_currenturl;{twitter_settext},twitter_currenttitle;{twitter_setcount},twitter_count;{twitter_setlanguage},twitter_currentlang;{twitter_setaccounts},twitter_usevia,twitter_userelated;';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['twitter_currenturl'] = 'twitter_url';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['twitter_currenttitle'] = 'twitter_text';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['twitter_currentlang'] = 'twitter_lang';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['twitter_usevia'] = 'twitter_via';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['twitter_userelated'] = 'twitter_related';
/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_currenturl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_currenturl'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_url'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_url'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false,'maxlenght'=>255)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_currenttitle'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_currenttitle'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_text'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false,'maxlenght'=>255)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_count'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_count'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('1','2','3'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['twitter_count']['reference'],
	'eval'                    => array('mandatory'=>false),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_currentlang'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_currentlang'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_lang'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_lang'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('en','de','fr','es','ja'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['twitter_lang']['reference'],
	'eval'                    => array('mandatory'=>false),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_usevia'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_usevia'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_via'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_via'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false,'maxlenght'=>255)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_userelated'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_userelated'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['twitter_related'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_related'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false,'maxlenght'=>255)
);



?>