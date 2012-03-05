-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

CREATE TABLE `tl_module` (
  `twitter_currenturl` char(1) NOT NULL default '',
  `twitter_url` blob NULL,
  `twitter_count` char(1) NOT NULL default '1',
  `twitter_usevia` char(1) NOT NULL default '',
  `twitter_via` varchar(255) NOT NULL default '',
  `twitter_userelated` char(1) NOT NULL default '',
  `twitter_related` varchar(255) NOT NULL default '',
  `twitter_currenttitle` char(1) NOT NULL default '',
  `twitter_text` varchar(255) NOT NULL default '',
  `twitter_useshorturl` blob NULL,
  `twitter_longurl` blob NULL,
  `twitter_currentlang` char(1) NOT NULL default '',
  `twitter_lang` varchar(10) NOT NULL default ''
) ENGINE=MyISAM default CHARSET=utf8;

CREATE TABLE `tl_content` (
  `twitter_currenturl` char(1) NOT NULL default '',
  `twitter_url` blob NULL,
  `twitter_count` char(1) NOT NULL default '1',
  `twitter_usevia` char(1) NOT NULL default '',
  `twitter_via` varchar(255) NOT NULL default '',
  `twitter_userelated` char(1) NOT NULL default '',
  `twitter_related` varchar(255) NOT NULL default '',
  `twitter_currenttitle` char(1) NOT NULL default '',
  `twitter_text` varchar(255) NOT NULL default '',
  `twitter_useshorturl` blob NULL,
  `twitter_longurl` blob NULL,
  `twitter_currentlang` char(1) NOT NULL default '',
  `twitter_lang` varchar(10) NOT NULL default ''
) ENGINE=MyISAM default CHARSET=utf8;