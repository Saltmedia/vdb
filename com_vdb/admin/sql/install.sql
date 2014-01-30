--
-- Table structure for table `#__sponsorwall`
--

DROP TABLE IF EXISTS `#__sponsorwall`;
CREATE TABLE IF NOT EXISTS `#__sponsorwall` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `catid` int(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `click` int(10) NOT NULL,
  `checked_out` int(11) NOT NULL,
  `ordering` int(20) NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `#__sponsorwall`
--

INSERT INTO `#__sponsorwall` (`id`, `catid`, `title`, `desc`, `url`, `image`, `link`, `click`, `checked_out`, `ordering`, `published`) VALUES
(1, 1, 'Facebook', 'The biggest social network in the world.', 'http://www.facebook.com/', 'facebook.png', '', 0, 0, 1, 1),
(2, 1, 'Adobe', 'The leading software developer targeted at web designers and developers.', 'http://www.adobe.com/', 'adobe.png', '1', 0, 1, 2, 1),
(3, 1, 'Microsoft', 'One of the top software companies of the world.', 'http://www.microsoft.com/', 'microsoft.png', '', 0, 0, 3, 1),
(4, 1, 'Sony', 'A global multibillion electronics and entertainment company', 'http://www.sony.com/', 'sony.png', '', 0, 0, 4, 1),
(5, 1, 'Dell', 'One of the biggest computer developers and assemblers.', 'http://www.dell.com/', 'dell.png', '', 0, 0, 5, 1),
(6, 1, 'Ebay', 'The biggest online auction and shopping websites.', 'http://www.ebay.com/', 'ebay.png', '', 0, 0, 6, 1),
(7, 1, 'Google', 'The company that redefined web search.', 'http://www.google.com/', 'google.png', '', 0, 0, 7, 1),
(8, 1, 'EA', 'The biggest computer game manufacturer.', 'http://www.ea.com/', 'ea.png', '', 0, 0, 8, 1),
(9, 1, 'Yahoo', 'The most popular network of social media portals and services.', 'http://www.yahoo.com/', 'yahoo.png', '', 0, 0, 9, 1),
(10, 1, 'Cisco', 'The biggest networking and communications technology manufacturer.', 'http://www.cisco.com/', 'cisco.png', '', 0, 0, 10, 1),
(11, 1, 'Vimeo', 'A popular video-centric social networking site.', 'http://www.vimeo.com/', 'vimeo.png', '', 0, 0, 11, 1),
(12, 1, 'Canon', 'Imaging and optical technology manufacturer.', 'http://www.canon.com/', 'canon.png', '', 0, 0, 12, 1),
(13, 1, 'Night Club', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.pulseinfotech.com', '1_1.jpg', '', 0, 0, 13, 1),
(14, 1, 'Umbrella', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.pulseinfotech.com', '2.jpg', '', 0, 0, 14, 1),
(15, 1, 'Maximum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.pulseinfotech.com', '3.jpg', '', 0, 0, 15, 1),
(16, 1, 'Litle Blackbird', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.pulseinfotech.com', '4.jpg', '', 0, 0, 16, 1),
(17, 1, 'Infinity Crime', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.pulseinfotech.com', '5.jpg', '', 0, 0, 17, 1),
(18, 1, 'Indacy', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.pulseinfotech.com', '6.jpg', '', 0, 0, 18, 1),
(19, 1, 'Moon Baloon', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.pulseinfotech.com', '7.jpg', '', 0, 0, 19, 1),
(20, 2, 'Demo 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_1.jpg', '', 0, 0, 1, 1),
(21, 2, 'Demo 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_2.jpg', '', 0, 0, 2, 1),
(22, 2, 'Demo 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_3.jpg', '', 0, 0, 3, 1),
(23, 2, 'Demo 4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_4.jpg', '', 0, 0, 4, 1),
(24, 2, 'Demo 5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_5.jpg', '', 0, 0, 5, 1),
(25, 2, 'Demo 6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_6.jpg', '', 0, 0, 6, 1),
(26, 2, 'Demo 7', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_7.jpg', '', 0, 0, 7, 1),
(27, 2, 'Demo 8', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_8.jpg', '', 0, 0, 8, 1),
(28, 2, 'Demo 9', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_9.jpg', '', 0, 0, 9, 1),
(29, 2, 'Demo 10', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_10.jpg', '', 0, 0, 10, 1),
(30, 3, 'Demo 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_9.jpg', '', 0, 0, 1, 1),
(31, 3, 'Demo 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_10.jpg', '', 0, 0, 2, 1),
(34, 3, 'Demo 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_8.JPG', '', 0, 0, 3, 1),
(35, 3, 'Demo 4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_7.jpg', '', 0, 0, 4, 1),
(36, 3, 'Demo 5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_6.jpg', '', 0, 0, 5, 1),
(37, 3, 'Demo 6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_5.jpg', '', 0, 0, 6, 1),
(38, 3, 'Demo 7', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_4.jpg', '', 0, 0, 7, 1),
(39, 3, 'Demo 8', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_3.jpg', '', 0, 0, 8, 1),
(40, 3, 'Demo 9', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_2.jpg', '', 0, 0, 9, 1),
(41, 3, 'Demo 10', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_1.jpg', '', 0, 0, 10, 1),
(43, 4, 'Demo 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_1.jpg', '', 0, 0, 1, 1),
(53, 2, 'Demo 11', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_11.jpg', '', 0, 0, 11, 1),
(44, 4, 'Demo 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_9.jpg', '', 0, 0, 2, 1),
(45, 4, 'Demo 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_8.jpg', '', 0, 0, 3, 1),
(46, 4, 'Demo 4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_7.jpg', '', 0, 0, 4, 1),
(47, 4, 'Demo 5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_6.jpg', '', 0, 0, 5, 1),
(48, 4, 'Demo 6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_5.jpg', '', 0, 0, 6, 1),
(49, 4, 'Demo 7', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_4.jpg', '', 0, 0, 7, 1),
(50, 4, 'Demo 8', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_3.jpg', '', 0, 0, 8, 1),
(51, 4, 'Demo 9', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_2.jpg', '', 0, 0, 9, 1),
(52, 4, 'Demo 10', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_10.jpg', '', 0, 0, 10, 1),
(54, 2, 'Demo 12', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_12.jpg', '', 0, 0, 12, 1),
(55, 2, 'Demo 13', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_13.jpg', '', 0, 0, 13, 1),
(56, 2, 'Demo 14', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_14.jpg', '', 0, 0, 14, 1),
(57, 2, 'Demo 15', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_15.jpg', '', 0, 0, 15, 1),
(58, 2, 'Demo 16', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_16.jpg', '', 0, 0, 16, 1),
(59, 2, 'Demo 17', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_17.jpg', '', 0, 0, 17, 1),
(60, 2, 'Demo 18', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_18.jpg', '', 0, 0, 18, 1),
(61, 2, 'Demo 19', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_19.jpg', '', 0, 0, 19, 1),
(62, 2, 'Demo 20', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '2_20.jpg', '', 0, 0, 20, 1),
(63, 1, 'Demo 20', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'http://www.google.com', '1_5.jpg', '', 0, 0, 20, 1),
(64, 4, 'Demo 11', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_11.jpg', '', 0, 0, 11, 1),
(65, 4, 'Demo 12', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_12.jpg', '', 0, 0, 12, 1),
(66, 4, 'Demo 13', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_13.jpg', '', 0, 0, 13, 1),
(67, 4, 'Demo 14', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_10.jpg', '', 0, 0, 14, 1),
(68, 4, 'Demo 15', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_15.jpg', '', 0, 0, 15, 1),
(69, 4, 'Demo 16', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_16.jpg', '', 0, 0, 16, 1),
(70, 4, 'Demo 17', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_17.jpg', '', 0, 0, 17, 1),
(71, 4, 'Demo 18', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_18.jpg', '', 0, 0, 18, 1),
(72, 4, 'Demo 19', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_19.jpg', '', 0, 0, 19, 1),
(73, 4, 'Demo 20', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4_20.jpg', '', 0, 0, 20, 1),
(74, 3, 'Demo 11', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', 'canon.png', '', 0, 0, 11, 1),
(75, 3, 'Demo 12', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', 'ea.png', '', 0, 0, 12, 1),
(76, 3, 'Demo 13', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '7.jpg', '', 0, 0, 13, 1),
(77, 3, 'Demo 14', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '4.jpg', '', 0, 0, 14, 1),
(78, 3, 'Demo 15', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3.jpg', '', 0, 0, 15, 1),
(79, 3, 'Demo 16', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '2.jpg', '', 0, 0, 16, 1),
(80, 3, 'Demo 17', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '5.jpg', '', 0, 0, 17, 1),
(81, 3, 'Demo 18', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '6.jpg', '', 0, 0, 18, 1),
(82, 3, 'Demo 19', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '3_1.jpg', '', 0, 0, 19, 1),
(83, 3, 'Demo 20', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://www.google.com', '1_5.jpg', '', 0, 0, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `#__sponsorwall_category`
--

DROP TABLE IF EXISTS `#__sponsorwall_category`;
CREATE TABLE IF NOT EXISTS `#__sponsorwall_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `ordering` int(10) NOT NULL,
  `published` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `#__sponsorwall_category`
--

INSERT INTO `#__sponsorwall_category` (`id`, `name`, `desc`, `image`, `ordering`, `published`) VALUES
(1, 'Software Sponsor', 'Software Sponsor Description', '1.jpg', 1, 1),
(2, 'Food Sponsors', 'Food Sponsors', '2.jpg', 2, 1),
(3, 'Technology Sponsor', 'Technology Sponsor Description', '3.jpg', 3, 1),
(4, 'Brand Ambassador', 'Brand Ambassador Description', '4.jpg', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `#__sponsorwall_config`
--

DROP TABLE IF EXISTS `#__sponsorwall_config`;
CREATE TABLE IF NOT EXISTS `#__sponsorwall_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jquery_load` tinyint(1) NOT NULL,
  `jquery_conflict` tinyint(1) NOT NULL,
  `category_status` int(10) NOT NULL,
  `cat_desc_status` tinyint(1) NOT NULL,
  `default_category` int(10) NOT NULL,
  `cat_section_height` varchar(50) NOT NULL,
  `cat_img_width` varchar(50) NOT NULL,
  `cat_img_height` varchar(50) NOT NULL,
  `category_gap` varchar(15) NOT NULL,
  `cat_section_background_color` varchar(50) NOT NULL,
  `cat_section_title_background_color` varchar(50) NOT NULL,
  `cat_sec_title_font_color` varchar(50) NOT NULL,
  `cat_section_title` varchar(100) NOT NULL,
  `cat_section_box_background_color` varchar(50) NOT NULL,
  `dist_cat_sec` varchar(15) NOT NULL,
  `upper_block_width` int(25) NOT NULL,
  `upper_block_height` int(25) NOT NULL,
  `img_width` int(55) NOT NULL,
  `img_height` int(55) NOT NULL,
  `wall_gap` varchar(60) NOT NULL,
  `wall_movement` varchar(60) NOT NULL,
  `caption_background_color` varchar(10) NOT NULL,
  `cat_sec_title_font_size` varchar(60) NOT NULL,
  `margin_bet_title_desc` varchar(60) NOT NULL,
  `caption_desc_color` varchar(10) NOT NULL,
  `desc_font_size` varchar(60) NOT NULL,
  `margin_bet_desc_link` varchar(60) NOT NULL,
  `caption_link_color` varchar(10) NOT NULL,
  `link_font_size` varchar(60) NOT NULL,
  `link_open_type` int(25) NOT NULL,
  `link_or_click` int(25) NOT NULL,
  `link_word` varchar(255) NOT NULL,
  `wall_per_page` varchar(2) NOT NULL,
  `border_status` int(10) NOT NULL,
  `border_color` varchar(20) NOT NULL,
  `default_category_module` varchar(10) NOT NULL,
  `general_font_family` varchar(50) NOT NULL,
  `wall_border_size` varchar(10) NOT NULL,
  `wall_border_color` varchar(10) NOT NULL,
  `wall_sec_title_bg_color` varchar(30) NOT NULL,
  `wall_sec_title_font_color` varchar(30) NOT NULL,
  `wall_sec_title_font_size` varchar(10) NOT NULL,
  `cat_name_font_color` varchar(30) NOT NULL,
  `cat_name_font_size` varchar(10) NOT NULL,
  `wall_name_font_size` varchar(20) NOT NULL,
  `wall_name_font_color` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `#__sponsorwall_config`
--

INSERT INTO `#__sponsorwall_config` (`id`, `jquery_load`, `jquery_conflict`, `category_status`, `cat_desc_status`, `default_category`, `cat_section_height`, `cat_img_width`, `cat_img_height`, `category_gap`, `cat_section_background_color`, `cat_section_title_background_color`, `cat_sec_title_font_color`, `cat_section_title`, `cat_section_box_background_color`, `dist_cat_sec`, `upper_block_width`, `upper_block_height`, `img_width`, `img_height`, `wall_gap`, `wall_movement`, `caption_background_color`, `cat_sec_title_font_size`, `margin_bet_title_desc`, `caption_desc_color`, `desc_font_size`, `margin_bet_desc_link`, `caption_link_color`, `link_font_size`, `link_open_type`, `link_or_click`, `link_word`, `wall_per_page`, `border_status`, `border_color`, `default_category_module`, `general_font_family`, `wall_border_size`, `wall_border_color`, `wall_sec_title_bg_color`, `wall_sec_title_font_color`, `wall_sec_title_font_size`, `cat_name_font_color`, `cat_name_font_size`, `wall_name_font_size`, `wall_name_font_color`) VALUES
(1, 1, 0, 1, 0, 1, '195', '140', '140', '5', '#C0C0C0', '#000000', '#EEEBF5', 'SPONSOR CATEGORY', '#EEEEEE', '20', 168, 168, 168, 168, '11', 'right', '#C0C0C0', '15', '8', '#000', '14', '8', '#0000FF', '13', 0, 1, 'Click Here', '12', 1, '#000000', '0', '''Century Gothic''                                  ', '1', '#808080', '#000000', '#C0C0C0', '15', '#045922', '15', '15', '#000');

