-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 07:07 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jancid`
--

-- --------------------------------------------------------

--
-- Table structure for table `caretakers`
--

CREATE TABLE `caretakers` (
  `name` text NOT NULL,
  `id` varchar(257) NOT NULL,
  `password` varchar(257) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caretakers`
--

INSERT INTO `caretakers` (`name`, `id`, `password`, `phone`) VALUES
('kioko jiko', '33530300', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko muinde', '33540300', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '333333', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '212121', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '34563456', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko muinde', '232323', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '4535363', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '3454363', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('charles kyalo', '33540311', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '628093423999127', '7694f4a66316e53c8cdd9d9954bd611d', '0720055506'),
('kioko jiko', 'ppoppo', 'b2ca678b4c936f905fb82f2733f5297f', '0720055506'),
('kioko maneno', '33540312', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('kioko maneno', '33540323', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('kioko maneno', '33540343', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('kioko maneno', '', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('kioko maneno', '', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('kioko maneno', '33540312mk', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('kioko maneno', '12389789', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('dan onsinyo', '32323235', 'fcea920f7412b5da7be0cf42b8c93759', '0718270803'),
('owino gakii', '32132111', 'fcea920f7412b5da7be0cf42b8c93759', '0712345367');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `room` int(11) NOT NULL,
  `state` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`room`, `state`, `description`) VALUES
(65, 'good', '</td>\r\n</tr>\r\n<tr><br/>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n</form>\r\n\r\n</center>\r\n\r\n</body>\r\n</head>\r\n'),
(34, 'good', 'no bulb baby\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tenhistory`
--

CREATE TABLE `tenhistory` (
  `name` text NOT NULL,
  `id` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `relative` text NOT NULL,
  `relphone` varchar(10) NOT NULL,
  `comments` text NOT NULL,
  `previous` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='history';

--
-- Dumping data for table `tenhistory`
--

INSERT INTO `tenhistory` (`name`, `id`, `room`, `phone`, `relative`, `relphone`, `comments`, `previous`) VALUES
('', 0, 56, '0', '', '0', '', ''),
('', 0, 56, '0', '', '0', '', ''),
('', 0, 56, '0', '', '0', '', ''),
('', 0, 56, '0', '', '0', '', ''),
('', 0, 0, '0', '', '0', '', ''),
('', 0, 0, '0', '', '0', '', ''),
('', 0, 0, '0', '', '0', '', ''),
('', 0, 0, '0', '', '0', '', ''),
('', 0, 0, '0', '', '0', '', ''),
('', 0, 0, '0', '', '0', '', ''),
('kioko muinde', 33540311, 46, '720055506', '', '0', '', ''),
('kioko maneno', 33540312, 12, '712345678', '', '0', '', ''),
('kioko maneno', 33540312, 12, '712345678', 'kioko', '712345676', '', ''),
('kioko jiko', 0, 33, '<br />\r\n<b', '<br />\r\n<b>Notice</b>:  Undefined index: relative in <b>C:xampphtdocsjancid	enantc1.php</b> on line <b>103</b><br />\r\n', '', '', ''),
('kioko jiko', 0, 34, '<br />\r\n<b', '<br />\r\n<b>Notice</b>:  Undefined index: relative in <b>C:xampphtdocsjancid	enantc1.php</b> on line <b>103</b><br />\r\n', '<br />\r\n<b', '', ''),
('danny mwaitu', 0, 12, '0712344655', 'kioko', '0712345667', '', ''),
('kioko maneno', 0, 23, '0789324551', 'kioko', '0789321432', '', ''),
('kioko maneno', 0, 23, '0789324551', 'kioko', 'jana', 'none', ''),
('kioko maneno', 12341234, 23, '0789324551', 'kioko', '0789321432', '', ''),
('baby love', 21212121, 14, '0712321245', 'kioko', '0733425213', '<br />\r\n<b>Notice</b>:  Undefined index: comments in <b>C:xampphtdocsjanciddelete1.php</b> on line <b>100</b><br />\r\n', ''),
('baby love', 21212122, 14, '0712321250', 'kioko', '0733425233', '<br />\r\n<b>Notice</b>:  Undefined index: comments in <b>C:xampphtdocsjanciddelete1.php</b> on line <b>100</b><br />\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `teninsert`
--

CREATE TABLE `teninsert` (
  `name` text NOT NULL,
  `id` text NOT NULL,
  `room` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `relative` text NOT NULL,
  `relphone` varchar(11) NOT NULL,
  `previous` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teninsert`
--

INSERT INTO `teninsert` (`name`, `id`, `room`, `phone`, `relative`, `relphone`, `previous`, `comments`) VALUES
('moyo safi', '33214321', '12', '0708230987', 'kioko', '0764321234', 'selegei', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `vishistory`
--

CREATE TABLE `vishistory` (
  `name` text NOT NULL,
  `id` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `relationship` text NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vishistory`
--

INSERT INTO `vishistory` (`name`, `id`, `room`, `duration`, `relationship`, `phone`) VALUES
('<br />\r\n<b>Notice</b>:  Undefined index: name in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>79</b><br />\r\n', 2147483647, 65, 2, '<br />\r\n<b>Notice</b>:  Undefined index: relationship in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>82</b><br />\r\n', ' '),
('<br />\r\n<b>Notice</b>:  Undefined index: name in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>79</b><br />\r\n', 32456751, 12, 12, '<br />\r\n<b>Notice</b>:  Undefined index: relationship in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>82</b><br />\r\n', '0712435657'),
('<br />\r\n<b>Notice</b>:  Undefined index: name in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>79</b><br />\r\n', 0, 0, 0, '<br />\r\n<b>Notice</b>:  Undefined index: relationship in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>82</b><br />\r\n', ' '),
('<br />\r\n<b>Notice</b>:  Undefined index: name in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>79</b><br />\r\n', 0, 0, 0, '<br />\r\n<b>Notice</b>:  Undefined index: relationship in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>82</b><br />\r\n', ' '),
('<br />\r\n<b>Notice</b>:  Undefined index: name in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>79</b><br />\r\n', 23423412, 34, 2, '<br />\r\n<b>Notice</b>:  Undefined index: relationship in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>82</b><br />\r\n', ' '),
('<br />\r\n<b>Notice</b>:  Undefined index: name in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>79</b><br />\r\n', 33540987, 23, 3, '<br />\r\n<b>Notice</b>:  Undefined index: relationship in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>82</b><br />\r\n', '0712529637'),
('<br />\r\n<b>Notice</b>:  Undefined index: name in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>79</b><br />\r\n', 33540344, 12, 2, '<br />\r\n<b>Notice</b>:  Undefined index: relationship in <b>C:xampphtdocsjancidvisitors1.php</b> on line <b>82</b><br />\r\n', '0712345679'),
('narejemo', 33540987, 34, 2, 'cousin', '0712345654'),
('kioko maneno', 54679087, 23, 2, 'cousin', '0718436432'),
('ty dolla', 34234255, 12, 3, 'brother', '0712432123'),
('ty dolla', 34234255, 12, 3, 'brother', '0712432123'),
('ty dolla', 34234255, 12, 3, 'brother', '0712432123'),
('ty dolla', 34234255, 12, 3, 'brother', '0712432123');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `name` text NOT NULL,
  `id` text NOT NULL,
  `room` text NOT NULL,
  `duration` text NOT NULL,
  `relationship` text NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`name`, `id`, `room`, `duration`, `relationship`, `phone`) VALUES
('ty dolla', '32413411', '12', '3', 'brother', '07321456'),
('', '', '', '', '', ''),
('kioko jiko', '543', '', '', '', ''),
('kioko muinde', '628093423999127', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `watchman`
--

CREATE TABLE `watchman` (
  `name` text NOT NULL,
  `id` varchar(257) NOT NULL,
  `password` varchar(257) NOT NULL,
  `pno` varchar(257) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchman`
--

INSERT INTO `watchman` (`name`, `id`, `password`, `pno`) VALUES
('kioko muinde', '33540300', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '33540311', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko jiko', '33555555', 'fcea920f7412b5da7be0cf42b8c93759', '0720055506'),
('kioko maneno', '33540316', 'fcea920f7412b5da7be0cf42b8c93759', '0712345678'),
('junior', '32432123', 'fcea920f7412b5da7be0cf42b8c93759', '0712345653');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
