CREATE TABLE `@shuipfcms@@zhubiao@` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `catid` smallint(5) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` varchar(255) NOT NULL default '',
  `style` varchar(24) NOT NULL default '',
  `thumb` varchar(255) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `tags` varchar(255) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `posid` tinyint(1) unsigned NOT NULL default '0',
  `url` varchar(255) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL default '0',
  `status` tinyint(2) unsigned NOT NULL default '1',
  `sysadd` tinyint(1) unsigned NOT NULL default '0',
  `islink` tinyint(1) unsigned NOT NULL default '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL default '0',
  `updatetime` int(10) unsigned NOT NULL default '0',
  `views` int(11) NOT NULL DEFAULT '0' COMMENT '点击总数',
  `yesterdayviews` int(11) NOT NULL DEFAULT '0' COMMENT '最日',
  `dayviews` int(10) NOT NULL DEFAULT '0' COMMENT '今日点击数',
  `weekviews` int(10) NOT NULL DEFAULT '0' COMMENT '本周访问数',
  `monthviews` int(10) NOT NULL DEFAULT '0' COMMENT '本月访问',
  `viewsupdatetime` int(10) NOT NULL DEFAULT '0' COMMENT '点击数更新时间',
  PRIMARY KEY  (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`weekviews`,`views`,`dayviews`,`monthviews`,`status`,`id`),
  KEY `thumb` (`thumb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;