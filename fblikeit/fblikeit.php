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
 * @package    fblikeit 
 * @license    LGPL 
 * @filesource
 */


/**
 * Class fblikeit 
 *
 * @copyright  2010 Andreas Koob 
 * @author     Andreas Koob 
 * @package    Controller
 */
class fblikeit extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'fblikeit';

	public function generate()
	{

		if (TL_MODE == 'BE')
		{

			return "Facebook like it button" ;

		}

		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{		
		if($this->fblikeit_href == ""){
			$href=$this->Environment->url . $this->Environment->requestUri;
		}
		else{
			$href=$this->fblikeit_href;
		}
		
		$this->Template->fblikeit_href=urlencode($href);
		
		if ($this->fblikeit_faces == 1){
			$this->Template->fblikeit_faces="true";
		}
		else{
			$this->Template->fblikeit_faces="false";
		}
		
		$this->Template->fblikeit_width=$this->fblikeit_width;
		$this->Template->fblikeit_height=$this->fblikeit_height;
		
		if ($this->fblikeit_layout==""){
			$this->Template->fblikeit_layout="standard";
		}
		else{
			$this->Template->fblikeit_layout=urlencode($this->fblikeit_layout);
		}
		
		if ($this->fblikeit_verb==""){
			$this->Template->fblikeit_verb="like";
		}
		else{
			$this->Template->fblikeit_verb=urlencode($this->fblikeit_verb);
		}
		
		if ($this->fblikeit_color==""){
			$this->Template->fblikeit_color="light";
		}
		else{
			$this->Template->fblikeit_color=urlencode($this->fblikeit_color);
		}
		if ($this->fblikeit_font==""){
			$this->Template->fblikeit_font="";
		}
		else{
			$this->Template->fblikeit_font=urlencode($this->fblikeit_font);
		}
		$this->Template->cssclass="ce_fblikeit";
		$this->Template->headline=$this->headline;
	}
}

?>