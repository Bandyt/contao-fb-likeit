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
 * Class fblikeit_xfbml
 *
 * @copyright  2010 Andreas Koob 
 * @author     Andreas Koob 
 * @package    Controller
 */
class fblikeit_xfbml extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'fblikeit_xfbml';

	public function generate()
	{

		if (TL_MODE == 'BE')
		{

			return "Facebook like it button - XFBML" ;

		}

		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{	
                global $objPage;
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
		
		if ($this->fblikeit_send == 1){
			$this->Template->fblikeit_send="true";
		}
		else{
			$this->Template->fblikeit_send="false";
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
		
		switch(strtolower($objPage->language))
		{
			case 'af':
				$lang='af_ZA';
				break;
			case 'ar': 
				$lang='ar_AR';
				break;
			case 'ay': 
				$lang='ay_BO';
				break;
			case 'az': 
				$lang='az_AZ';
				break;
			case 'be': 
				$lang='be_BY';
				break;
			case 'bg': 
				$lang='bg_BG';
				break;
			case 'bn': 
				$lang='bn_IN';
				break;
			case 'bs': 
				$lang='bs_BA';
				break;
			case 'ca': 
				$lang='ca_ES';
				break;
			case 'cs': 
				$lang='cs_CZ';
				break;
			case 'cy': 
				$lang='cy_GB';
				break;
			case 'da': 
				$lang='da_DK';
				break;
			case 'de': 
				$lang='de_DE';
				break;
			case 'el': 
				$lang='el_GR';
				break;
			case 'en': 
				$lang='en_US';
				break;
			case 'eo': 
				$lang='eo_EO';
				break;
			case 'es': 
				$lang='es_ES';
				break;
			case 'et': 
				$lang='et_EE';
				break;
			case 'eu': 
				$lang='eu_ES';
				break;
			case 'fa': 
				$lang='fa_IR';
				break;
			case 'fi': 
				$lang='fi_FI';
				break;
			case 'fo': 
				$lang='fo_FO';
				break;
			case 'fr': 
				$lang='fr_FR';
				break;
			case 'ga': 
				$lang='ga_IE';
				break;
			case 'gl': 
				$lang='gl_ES';
				break;
			case 'gn': 
				$lang='gn_PY';
				break;
			case 'gu': 
				$lang='gu_IN';
				break;
			case 'he': 
				$lang='he_IL';
				break;
			case 'hi': 
				$lang='hi_IN';
				break;
			case 'hr': 
				$lang='hr_HR';
				break;
			case 'hu': 
				$lang='hu_HU';
				break;
			case 'hy': 
				$lang='hy_AM';
				break;
			case 'id': 
				$lang='id_ID';
				break;
			case 'is': 
				$lang='is_IS';
				break;
			case 'it': 
				$lang='it_IT';
				break;
			case 'ja': 
				$lang='ja_JP';
				break;
			case 'jv': 
				$lang='jv_ID';
				break;
			case 'ka': 
				$lang='ka_GE';
				break;
			case 'kk': 
				$lang='kk_KZ';
				break;
			case 'km': 
				$lang='km_KH';
				break;
			case 'kn': 
				$lang='kn_IN';
				break;
			case 'ko': 
				$lang='ko_KR';
				break;
			case 'ku': 
				$lang='ku_TR';
				break;
			case 'la': 
				$lang='la_VA';
				break;
			case 'lt': 
				$lang='lt_LT';
				break;
			case 'lv': 
				$lang='lv_LV';
				break;
			case 'mg': 
				$lang='mg_MG';
				break;
			case 'mk': 
				$lang='mk_MK';
				break;
			case 'ml': 
				$lang='ml_IN';
				break;
			case 'mn': 
				$lang='mn_MN';
				break;
			case 'mr': 
				$lang='mr_IN';
				break;
			case 'ms': 
				$lang='ms_MY';
				break;
			case 'mt': 
				$lang='mt_MT';
				break;
			case 'ne': 
				$lang='ne_NP';
				break;
			case 'nl': 
				$lang='nl_NL';
				break;
			case 'no': 
				$lang='nb_NO';
				break;
			case 'pa': 
				$lang='pa_IN';
				break;
			case 'pl': 
				$lang='pl_PL';
				break;
			case 'ps': 
				$lang='ps_AF';
				break;
			case 'pt': 
				$lang='pt_PT';
				break;
			case 'qu': 
				$lang='qu_PE';
				break;
			case 'rm': 
				$lang='rm_CH';
				break;
			case 'ro': 
				$lang='ro_RO';
				break;
			case 'ru': 
				$lang='ru_RU';
				break;
			case 'sa': 
				$lang='sa_IN';
				break;
			case 'si': 
				$lang='si_SI';
				break;
			case 'sk': 
				$lang='sk_SK';
				break;
			case 'so': 
				$lang='so_SO';
				break;
			case 'sq': 
				$lang='sq_AL';
				break;
			case 'sr': 
				$lang='sr_RS';
				break;
			case 'sv': 
				$lang='sv_SE';
				break;
			case 'sw': 
				$lang='sw_KE';
				break;
			case 'ta': 
				$lang='ta_IN';
				break;
			case 'te': 
				$lang='te_IN';
				break;
			case 'tg': 
				$lang='tg_TJ';
				break;
			case 'th': 
				$lang='th_TH';
				break;
			case 'tl': 
				$lang='tl_PH';
				break;
			case 'tr': 
				$lang='tr_TR';
				break;
			case 'tt': 
				$lang='tt_RU';
				break;
			case 'uk': 
				$lang='uk_UA';
				break;
			case 'ur': 
				$lang='ur_PK';
				break;
			case 'uz': 
				$lang='uz_UZ';
				break;
			case 'vi': 
				$lang='vi_VN';
				break;
			case 'xh': 
				$lang='xh_ZA';
				break;
			case 'yi': 
				$lang='yi_DE';
				break;
			case 'zh': 
				$lang='zh_CN';
				break;
			case 'zu': 
				$lang='zu_ZA';
				break;
			default:
				$lang='en_US';
		}
		$this->Template->lang=$lang;
		$this->Template->cssclass="ce_fblikeit_xfbml";
		$this->Template->fblikeit_appid=$this->fblikeit_appid;
		$this->Template->headline=$this->headline;
	}
}

?>