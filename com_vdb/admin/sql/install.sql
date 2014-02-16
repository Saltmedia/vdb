--
-- Table structure for table `#__vdb_opportunities`
--

DROP TABLE IF EXISTS `#__vdb_opportunities`;
CREATE TABLE IF NOT EXISTS `#__vdb_opportunities` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `causeid` int(2) NOT NULL,
  `orgid` int(2) NOT NULL,
  `locid` int(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_cause_categories`
--

DROP TABLE IF EXISTS `#__vdb_cause_categories`;
CREATE TABLE IF NOT EXISTS `#__vdb_cause_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


--
-- Dumping data for table `#__vdb_cause_categories`
--

INSERT INTO `#__vdb_cause_categories` (`id`, `name`, `image`) VALUES
(1, 'Art and Culture', 'path/to/image.jpg'),
(2, 'Animals & Environment', 'path/to/image.jpg'),
(3, 'Humanitarian Aid', 'path/to/image.jpg'),
(4, 'Youth & Education', 'path/to/image.jpg'),
(5, 'Social Services & Justice', 'path/to/image.jpg'),
(6, 'Health & Wellness', 'path/to/image.jpg'),
(7, 'Other', 'path/to/image.jpg');


-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_causes`
--

DROP TABLE IF EXISTS `#__vdb_causes`;
CREATE TABLE IF NOT EXISTS `#__vdb_causes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `causecatid` int(2) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


--
-- Dumping data for table `#__vdb_causes`
--

INSERT INTO `#__vdb_causes` (`id`, `causecatid`, `name`) VALUES
(1, 1, 'Art & Culture'),
(2, 1, 'Museums & Heritage'),
(3, 2, 'Animal Welfare'),
(4, 2, 'Environment & Conservation'),
(5, 3, 'Disaster Relief'),
(6, 3, 'Emergency Response'),
(7, 4, 'Education'),
(8, 4, 'Mentoring & Advocacy'),
(9, 4, 'Young People'),
(10, 5, 'Community Service'),
(11, 5, 'Family Support'),
(12, 5, 'Homeless'),
(13, 5, 'Human Rights'),
(14, 5, 'Aboriginal Canadians'),
(15, 5, 'Migrant Support'),
(16, 5, 'Seniors'),
(17, 5, 'Veteran & Ex-Service Community'),
(18, 6, 'Disability Services'),
(19, 6, 'Drug & Alcohol Support'),
(20, 6, 'Health'),
(21, 6, 'Recreation'),
(22, 6, 'Sport'),
(23, 7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_locations`
--

DROP TABLE IF EXISTS `#__vdb_locations`;
CREATE TABLE IF NOT EXISTS `#__vdb_locations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `ordering` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `#__vdb_locations`
--

INSERT INTO `#__vdb_locations` (`id`, `name`, `ordering`) VALUES
(1, 'Grande Prairie', 1),
(2, 'Sexmith', 2),
(3, 'Clairmont', 3),
(4, 'Beaverlodge', 4),
(5, 'Wembley', 5),
(6, 'Hythe', 6),
(7, 'La Glace', 7),
(8, 'Bezanson', 8);

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_organizations`
--

DROP TABLE IF EXISTS `#__vdb_organizations`;
CREATE TABLE IF NOT EXISTS `#__vdb_organizations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `causeid` int(10) NOT NULL,
  `locationid` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(100) NOT NULL,
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
  `published` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_skill_categories`
--

DROP TABLE IF EXISTS `#__vdb_skill_categories`;
CREATE TABLE IF NOT EXISTS `#__vdb_skill_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


--
-- Dumping data for table `#__vdb_skill_categories`
--

INSERT INTO `#__vdb_skill_categories` (`id`, `name`, `image`) VALUES
(1, 'Administrative & Clerical', 'path/to/image.jpg'),
(2, 'Animals & Environment', 'path/to/image.jpg'),
(3, 'Arts', 'path/to/image.jpg'),
(4, 'Children & Family', 'path/to/image.jpg'),
(5, 'Disaster Relief', 'path/to/image.jpg'),
(6, 'Education & Sports', 'path/to/image.jpg'),
(7, 'Engineering', 'path/to/image.jpg'),
(8, 'Finance', 'path/to/image.jpg'),
(9, 'Food Service & Events', 'path/to/image.jpg'),
(10, 'HR', 'path/to/image.jpg'),
(11, 'Healthcare', 'path/to/image.jpg'),
(12, 'IT Infrastructure & Software', 'path/to/image.jpg'),
(13, 'Interactive & Website', 'path/to/image.jpg'),
(14, 'Legal', 'path/to/image.jpg'),
(15, 'Logistics, Supply Chain & Transportation', 'path/to/image.jpg'),
(16, 'Marketing', 'path/to/image.jpg'),
(17, 'Real Estate, Facilities & Construction', 'path/to/image.jpg'),
(18, 'Sales & Fundraising', 'path/to/image.jpg'),
(19, 'Strategy Development & Business Planning', 'path/to/image.jpg');


-- --------------------------------------------------------

--
-- Table structure for table `#__vdb_skills`
--

DROP TABLE IF EXISTS `#__vdb_skills`;
CREATE TABLE IF NOT EXISTS `#__vdb_skills` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `skillcatid` int(2) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


--
-- Dumping data for table `#__vdb_skills`
--

INSERT INTO `#__vdb_skills` (`id`, `skillcatid`, `name`) VALUES
(1, 1, 'Office Reception'),
(2, 1, 'Office Management'),
(3, 1, 'Executive Admin'),
(4, 2, 'Veterinary'),
(5, 2, 'Animal Welfare'),
(6, 2, 'Habitat Restoration'),
(7, 2, 'Environmental Policy'),
(8, 2, 'Environmental Education'),
(9, 2, 'Pollution Prevention'),
(10, 2, 'Farming'),
(11, 3, 'Visual Arts'),
(12, 3, 'Music Arts'),
(13, 3, 'Dance'),
(14, 3, 'Theater Arts'),
(15, 3, 'Crafts'),
(16, 3, 'Photography'),
(17, 3, 'Exhibition Arts'),
(18, 4, 'Youth Services'),
(19, 4, 'Family Therapy'),
(20, 4, 'Child Welfare'),
(21, 4, 'Childcare'),
(22, 4, 'Elder care'),
(23, 4, 'Crisis Intervention'),
(24, 5, 'Disaster Cleanup'),
(25, 5, 'Disaster Relief Care & Shelters'),
(26, 5, 'Disaster Relief Call Center'),
(27, 5, 'Safety & Disaster Education'),
(28, 5, 'Search & Rescue'),
(29, 6, 'General Education'),
(30, 6, 'Tutoring'),
(31, 6, 'Mentoring'),
(32, 6, 'Literacy/Reading'),
(33, 6, 'Math/Science Instruction'),
(34, 6, 'Teaching/Instruction'),
(35, 6, 'Financial Literacy'),
(36, 6, 'Library Sciences'),
(37, 6, 'English as a Secondary Language'),
(38, 6, 'Sports Coaching'),
(39, 6, 'Youth Activities Management'),
(40, 7, 'System Engineering'),
(41, 7, 'Mechanical Engineering'),
(42, 7, 'Civil Engineering'),
(43, 7, 'Chemical Engineering'),
(44, 8, 'Financial Auditing'),
(45, 8, 'Financial Planning'),
(46, 8, 'Budgeting'),
(47, 8, 'Reporting & Dashboards'),
(48, 8, 'Cost Analysis'),
(49, 8, 'Tax Prep'),
(50, 8, 'Accounting'),
(51, 8, 'Bookkeeping'),
(52, 9, 'Cooking/Catering'),
(53, 9, 'Event Design & Planning'),
(54, 9, 'Event Management'),
(55, 9, 'Food & Beverage Services'),
(56, 10, 'Human Resources Strategy'),
(57, 10, 'Organization Design'),
(58, 10, 'Human Resources Recruitment'),
(59, 10, 'Human Resources Diversity'),
(60, 10, 'Performance Management'),
(61, 10, 'Human Resources Information Systems'),
(62, 10, 'Human Resources Legal Compliance'),
(63, 10, 'Compensation'),
(64, 10, 'Human Resources Training & Development'),
(65, 11, 'Mental Health'),
(66, 11, 'Dental'),
(67, 11, 'First Aid/CPR'),
(68, 11, 'Nursing'),
(69, 11, 'Physician'),
(70, 11, 'Physician Assistant'),
(71, 11, 'Children Medical Services'),
(72, 11, 'Massage Therapy'),
(73, 11, 'EMT'),
(74, 12, 'ERP/CRM'),
(75, 12, 'Software Engineering'),
(76, 12, 'IT Strategy'),
(77, 12, 'IT Management'),
(78, 12, 'Network Administration'),
(79, 12, 'IT Help Desk'),
(80, 13, 'Online Flash/Video Production'),
(81, 13, 'Information Architecture'),
(82, 13, 'Website Programming'),
(83, 13, 'E-commerce'),
(84, 13, 'Website Project Management'),
(85, 13, 'Web Design'),
(86, 14, 'Legal General'),
(87, 14, 'Intellectual Property'),
(88, 14, 'Employment Law'),
(89, 14, 'Tax Law'),
(90, 14, 'Family Law'),
(91, 14, 'Mergers & Acquisitions'),
(92, 14, 'Litigation'),
(93, 14, 'Paralegal'),
(94, 14, 'Contract Negotiations'),
(95, 14, 'Advocacy'),
(96, 15, 'Truck Driving'),
(97, 15, 'Bus/Van Driving'),
(98, 15, 'Transportation Management'),
(99, 15, 'Supply Chain Logistics'),
(101, 15, 'Warehousing'),
(102, 15, 'Warehouse Equipment Operations'),
(103, 15, 'Inventory Management'),
(104, 15, 'Supply Chain'),
(105, 16, 'Marketing & Communications'),
(106, 16, 'Marketing Strategy & Planning'),
(107, 16, 'Public Relations'),
(108, 16, 'Brand Development & Messaging'),
(109, 16, 'Interactive/Social Media/SEO'),
(110, 16, 'Sales/Marketing'),
(111, 16, 'Graphic Design/Print'),
(112, 16, 'Graphic Design/Visual Identity'),
(113, 16, 'Technical Writing'),
(114, 16, 'Copywriting/Copyediting '),
(115, 17, 'Building Architecture'),
(116, 17, 'Facilities Management'),
(117, 17, 'Interior Design'),
(118, 17, 'Renovation'),
(119, 17, 'Real Estate & Leasing'),
(120, 17, 'Landscaping'),
(121, 17, 'Construction'),
(122, 18, 'Sales Process'),
(123, 18, 'Sales Coaching & Training'),
(124, 18, 'Business Development & Sales Management'),
(125, 18, 'Customer Acquisition'),
(126, 19, 'Strategic Planning'),
(127, 19, 'Capacity Planning'),
(128, 19, 'SWAT/GAP Analysis'),
(129, 19, 'Business Planning'),
(130, 19, 'Product Development'),
(131, 19, 'Market Research'),
(132, 19, 'Business Analysis');

-- --------------------------------------------------------

--
