-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- --------------------------------------------------------

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `fblikeit_href` varchar(255) NOT NULL default '', 
  `fblikeit_width` int(10) NOT NULL default '0',
  `fblikeit_height` int(10) NOT NULL default '0',
  `fblikeit_faces` char(1) NOT NULL default '',
  `fblikeit_layout` varchar(255) NOT NULL default '',
  `fblikeit_verb` varchar(255) NOT NULL default '',
  `fblikeit_font` varchar(255) NOT NULL default '',
  `fblikeit_color` varchar(255) NOT NULL default '',
  `fblikeit_send` char(1) NOT NULL default '',
  `fblikeit_appid` varchar(255) NOT NULL default ''
) ENGINE=MyISAM default CHARSET=utf8;

CREATE TABLE `tl_module` (
  `fblikeit_href` varchar(255) NOT NULL default '', 
  `fblikeit_width` int(10) NOT NULL default '0',
  `fblikeit_height` int(10) NOT NULL default '0',
  `fblikeit_faces` char(1) NOT NULL default '',
  `fblikeit_layout` varchar(255) NOT NULL default '',
  `fblikeit_verb` varchar(255) NOT NULL default '',
  `fblikeit_font` varchar(255) NOT NULL default '',
  `fblikeit_color` varchar(255) NOT NULL default '',
  `fblikeit_send` char(1) NOT NULL default '',
  `fblikeit_appid` varchar(255) NOT NULL default ''
) ENGINE=MyISAM default CHARSET=utf8;