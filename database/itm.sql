-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 06:14 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itm`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(30) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `type`, `description`, `status`) VALUES
(2, 'Welcome Information', '			The Institute of Technology and Management (ITM, GIDA, Gorakhpur) started functioning in July 2001 under the patronage Shree Krishna Educational Society run by a group of socially oriented professionals and entrepreneurs. The Institute is located on the Gorakhpur- Lucknow National Highway at a distance of about 12 kms from Gorakhpur city which is well connected by road and rail and limited airways with all major cities of India. Initially, B.Tech in four branches namely ECE ,CSE, IT, & ME and MCA courses were started. Later on, the Institute extended its scope of teaching by opening Bachelor of Pharmacy, Master of Business Administration and B.Tech in Civil Engineering. Thus, the Institute has emerged over the years as a leading centre of education in the field of Engineering, Pharmacy and Management		', 1),
(4, 'About Us', 'The Institute of Technology and Management (ITM, GIDA, Gorakhpur) started functioning in July 2001 under the patronage of Shree Krishna Educational Society run by a group of socially oriented professionals and entrepreneurs. The Institute is located on the Gorakhpur-Lucknow National Highways at a distance of about 12 kms from Gorakhpur city which is well connected by road and rail and limited airways with all major cities of India .Initially, B.Tech in four branches namely ECE ,CSE, IT, & ME and MCA courses were started. Later on, the Institute extended its scope of teaching by opening Bachelor of Pharmacy, Master of Business Administration and B.TECH in Civil Engineering. Thus, the Institute has emerged over the years as a leading centre of education in the field of Engineering, Pharmacy and Management. The Institute is credited with well equipped labs and other infrastructure facilities such as language lab, computerized library , conference & seminar halls and hostel & residential facilities within the campus. The team of highly qualified faculty with a mix of rich experience on the part of seniors is the most valuable resource that has played a significant role in creating a distinct niche for the Institute in the map of technical education of the country.\r\n\r\nA disciplined, serene and pleasant environment envelops the campus. It blends beautifully with the green landscape, aesthetic elegance of arches and the vibrant pursuit of knowledge by the young aspirants. The academic ambience gives full scope for group activities, which are plenty, as also to individual pursuits for development on preferred tracks. The dedication and commitment with which the students and faculty have worked over the past 16 years have paid rich dividends making the institute the most preferred one among the student fraternity. The students of this institute have been consistently securing good ranks in Uttar Pradesh Technical University examinations.\r\n\r\nThey are encouraged to participate in state level and national competitions/ events and have received appreciation by winning prizes. Placement of the students has been note worthy over the year .\r\n\r\nThe Institute is approved by Govt. of U. P. and affiliated to Board of Technical Education UP.\r\n\r\nThe Institute is situated 12 Km. away from Gorakhpur on Gorakhpur-Lucknow Road at GIDA (Gorakhpur) just by the side of National Highway and is spread over an area of 35 Acres. We ( ITM ) are on the way of building technocrats dreamland providing all essential facilities required for competent technocrats.					', 1),
(5, 'Our Mission', 'â€¢	To establish the institute on the national map as an institute of excellence.					', 1),
(6, 'Our Objective', 'â€¢	To provide value based education for developing the student as a competent & responsible citizen with sufficient knowledge, right attitude & leadership quality in the respective discipline.\r\nâ€¢	Innovative teaching using state-of-art technology. \r\nâ€¢	Development of state-of-art infrastructure.\r\nâ€¢	Continuous Development of technical knowledge base faculty.\r\n					', 0),
(7, 'Our Motto', 'â€¢	To produce technically skilled man power from Easter U.P.\r\nâ€¢	To contribute in the growth of Region & Nation.\r\n				', 1),
(8, 'Why to Choose Us', 'â€¢ We provide value based education for developing the student as a competent & responsible citizen with sufficient knowledge, right attitude & leadership quality in the respective discipline.\r\nâ€¢	Innovative teaching using state-of-art technology. \r\nâ€¢	Development of state-of-art infrastructure.\r\nâ€¢	Continuous Development of technical knowledge base faculty.\r\n				', 1),
(9, 'Our Objective', 'â€¢	To improve our resources and make the best use of the infrastructure.\r\nâ€¢	To incorporate and assimilate the recent techniques of learning and teaching.\r\nâ€¢	To enhance the thinking and creative potential.\r\nâ€¢	To make the students develop self - learning process, leadership qualities, self confidence and morale.\r\n					', 1),
(10, 'Our Principals', 'To provide state of art quality technical education and ensure creative development of talents					', 1),
(11, 'Our Vision', 'To create a individual , complete in itself as\r\npossible, enabling every individual who is a part of it to meet a\r\ncompetitive and demanding world and engage with it with\r\ncapability and compassion.\r\n					', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'fateh', 'fc145e421860a3a742b82b8c2c0aa011', 1),
(2, 'umair', '9c3baee204b3d4761e2465e396174694', 1),
(3, 'roop ranjan', '4e92d7a8906a967fc82afcd4f1af8806', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumnispeak`
--

CREATE TABLE `alumnispeak` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `company` varchar(100) NOT NULL,
  `photo` varchar(999) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(5) NOT NULL,
  `community` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `affiliated` varchar(100) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `photo` varchar(999) NOT NULL,
  `status` int(5) NOT NULL,
  `shortdescription` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `photo`, `date`, `status`) VALUES
(1, 'f', '		fd			', 'sign, Abhi.jpg', '2019-03-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(5) NOT NULL,
  `course` varchar(50) NOT NULL,
  `tuition` int(20) NOT NULL,
  `security` int(20) NOT NULL,
  `examin` int(20) NOT NULL,
  `other` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `type` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `type`, `title`, `photo`, `description`, `status`) VALUES
(13, 'Campus', 'Main Building', '1.jpg', '						', 1);

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `name`, `description`, `photo`, `status`) VALUES
(24, 'Institute of Technology  & Management', 'Institute of Technology  & Management  is one of the most leading institutions of ITM Group of institutions established with the motto objective: To provide value based education for developing the student as a competent & responsible citizen with sufficient knowledge, right attitude & leadership quality in the respective discipline. It is one of the most trusted and recognized institute of Uttar Pradesh.					', '1.jpg', 1),
(25, 'ITM Polytechnic', 'ITM Polytechnic has a distinctive profile-rural in ambience but modern in its approach. Nature has blessed the college, situated on the 12 km outer from Gorakhpur City (Gorakhpur to Lucknow Highway ) with lush green surrounding and a totally unpolluted environment, the campus is just the right place for all those who want to pursue technical education and research without any distractions. At the same time it has the infrastructure and other facilities, with a Modern Polytechnic requires. The campus is situated at NH 28 with 1.5 acres of land .\r\nITM Polytechnic offers Diploma programmes in various branches of engineering i.e. Electrical, Mechanical(Auto), Mechanical(Production)and Civil.\r\n					', 'poly.jpg', 1),
(26, 'SRI KRISHNA ACADEMY', 'The Sri Krishna Academy is a six day week, non-denominational, holistic curriculum school. The entire assessable curriculum includes scholastic and key skills training spread over an 8 period timetable, from assembly at 7.55am to departures at 2:00 p.m. \r\nThis prospectus seeks to provide complete and comprehensive information about the School, what it stands for and what it strives to do for those who choose to be a part of it. \r\nInformation however, is dynamic, and will change from term to term or year to year. When the School deems it necessary, updates, add-ons or new copies of the prospectus will be provided as applicable.\r\n					', 'ska.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itmalumni`
--

CREATE TABLE `itmalumni` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `yearadmi` varchar(5) NOT NULL,
  `yearpass` varchar(5) NOT NULL,
  `courseopted` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `currorg` varchar(100) NOT NULL,
  `locorg` varchar(100) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` int(5) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `message` varchar(20000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `designation`, `message`, `photo`, `status`) VALUES
(4, 'Shri Niraj Matenhelia', 'President', 'The rapid rate of technological advancement and the information revolution have opened new series of challenges as well as opportunities. Institute of Technology & Management aims to prepare the students to be successful in the changing workplace. It aims to equip students with technical knowledge and capabilities, flexibility and an understanding of the societal context of corporate world. \r\n\r\nWe give the students support and encouragement they need to reach their full potential. Today in the era of liberalization, privatization & globalization we try to groom nourish & nurture our students in such a way that they are fully equipped to meet the global demands. We strive to give professional education a new perspective and achieve perfection in all spheres. We provide a pleasant & intellectually stimulating environment. The main reason for our tremendous performance is the faculty, which makes ITM stand out from the rest of engineering colleges and Institutes. We provide exposure to latest and advanced Techniques and system. We gave the world the best we have and the best we can. We present ITM as a modern Gurukul. \r\n\r\nI wish to assure all concerned that no efforts will be spared to bring ITM on the world map among the top Technical education Institutions\r\n\r\n					', 'nma.png', 1),
(5, 'Shri Shyam Bihari Agarwal', 'Secretary', 'â€œReal knowledgeâ€š like everything else of valueâ€š is not to be obtained easily It must be worked forâ€š studied forâ€š thought for and more than allâ€š must be prayed forâ€ \r\n\r\nThe Native American Saying goes that â€œTell me and Iâ€™ll forget. Show meâ€š and I may not rememberâ€š Involve meâ€š and Iâ€™ll understandâ€. This is more relevant in the present day academic and professional world, where the student should not be a mere blind receiver of lessonsâ€š but also have the power and ability to critically examine them in the light of facts and situationâ€š leading to creativityâ€š success and a sense of fulfillment. Plutarch had rightly remarked long ago â€œA mind is a fire to be kindledâ€š not a vessel to be filledâ€. \r\n\r\nOver the years, I have learned this: You canâ€™t hit a target you canâ€™t see. You canâ€™t accomplish wonderful things with your life if you have no idea of what they are. You must first become absolutely clear about what you want if you are serious about the unlocking the extraordinary power that lies within you. Every success comes after you have taken the time to think through what your goal would look like when it is accomplished. 					', 'sba.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(999) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `type`, `photo`, `status`) VALUES
(11, '85 Students who  Scored more than 75% in AKTU Examination-2016 ', 'Slider', '81students.JPG', 1),
(13, 'Stars of ITM recentlly placed in TCS.', 'Slider', 'IMG_20181015_140812.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `course` varchar(100) NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumnispeak`
--
ALTER TABLE `alumnispeak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itmalumni`
--
ALTER TABLE `itmalumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumnispeak`
--
ALTER TABLE `alumnispeak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `itmalumni`
--
ALTER TABLE `itmalumni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
