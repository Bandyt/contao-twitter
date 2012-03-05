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
 * @package    twitter 
 * @license    LGPL 
 * @filesource
 */


/**
 * Class twitter 
 *
 * @copyright  2010 Andreas Koob 
 * @author     Andreas Koob 
 * @package    Controller
 */
class twitter extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'twitter';

	public function generate()
	{

		if (TL_MODE == 'BE')
		{

			return "Twitter Button" ;

		}

		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		$this->Template->currenturl=$this->twitter_currenturl;
		$this->Template->currenttitle=$this->twitter_currenttitle;
		$this->Template->currentlang=$this->twitter_currentlang;
		$this->Template->usevia=$this->twitter_usevia;
		$this->Template->userelated=$this->twitter_userelated;
		$this->Template->url=$this->twitter_url;
		$this->Template->text=$this->twitter_text;
		$this->Template->lang=$this->twitter_lang;
		$this->Template->via=$this->twitter_via;
		$this->Template->related=$this->twitter_related;
		switch ($this->twitter_count) {
			case 1:
				$this->Template->count="horizontal";
				break;
			case 2:
				$this->Template->count="vertical";
				break;
			case 3:
				$this->Template->count="none";
				break;
		}
	}
}

?>