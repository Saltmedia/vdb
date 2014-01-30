--
-- Table structure for table `#__vdb_opportunities`
--

DROP TABLE IF EXISTS `#__vdb_opportunities`;
CREATE TABLE IF NOT EXISTS `#__vdb_opportunities` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `catid` int(2) NOT NULL,
  `orgid` int(2) NOT NULL,
  `locid` int(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `checked_out` int(11) NOT NULL,
  `ordering` int(20) NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_categories`
--

DROP TABLE IF EXISTS `#__vdb_categories`;
CREATE TABLE IF NOT EXISTS `#__vdb_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `ordering` int(10) NOT NULL,
  `published` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `#__vdb_categories`
--

INSERT INTO `#__vdb_category` (`id`, `name`, `ordering`, `published`) VALUES
(1, 'Part Time', 1, 1),
(2, 'When Available', 2, 1),
(3, 'Drop-in', 3, 1),
(4, 'Youth', 4, 1),
(5, 'As Needed', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_locations`
--

DROP TABLE IF EXISTS `#__vdb_locations`;
CREATE TABLE IF NOT EXISTS `#__vdb_locations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `ordering` int(10) NOT NULL,
  `published` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `#__vdb_locations`
--

INSERT INTO `#__vdb_locations` (`id`, `name`, `ordering`, `published`) VALUES
(1, 'Grande Prairie', 1, 1),
(2, 'Sexmith', 2, 1),
(3, 'Clairmont', 3, 1),
(4, 'Wembley', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_organizations`
--

DROP TABLE IF EXISTS `#__vdb_organizations`;
CREATE TABLE IF NOT EXISTS `#__vdb_organization` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `ordering` int(10) NOT NULL,
  `published` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_admins`
--

DROP TABLE IF EXISTS `#__vdb_admins`;
CREATE TABLE IF NOT EXISTS `#__vdb_admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(2) NOT NULL,
  `orgid` int(2) NOT NULL,
  `ordering` int(10) NOT NULL,
  `published` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
