-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 06:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelexperts`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `PackageId` int(11) NOT NULL,
  `PkgName` varchar(50) NOT NULL,
  `PkgStartDate` date DEFAULT NULL,
  `PkgEndDate` date DEFAULT NULL,
  `PkgDesc` varchar(50) DEFAULT NULL,
  `PkgBasePrice` decimal(19,4) NOT NULL,
  `PkgAgencyCommission` decimal(19,4) DEFAULT NULL,
  `PkgImg` varchar(200) NOT NULL,
  `PkgWeather` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`PackageId`, `PkgName`, `PkgStartDate`, `PkgEndDate`, `PkgDesc`, `PkgBasePrice`, `PkgAgencyCommission`, `PkgImg`, `PkgWeather`) VALUES
(1, 'Caribbean New Year', '2019-12-25', '2019-01-04', '8 Day All Inclusive Hawaiian Vacation', '4800.0000', '400.0000', 'http://www.liquidlifevacationrentals.com/media/5134h.jpg', '<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/19d90n155d58/hawaii/\" data-label_1=\"HAWAII\" data-label_2=\"WEATHER\" data-icons=\"Climacons\" data-theme=\"sky\" >HAWAII WEATHER</a>\r\n<script>\r\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\r\n</script>'),
(2, 'Polynesian Paradise', '2019-12-12', '2019-12-20', '8 Day All Inclusive Dubai Vacation', '3000.0000', '310.0000', 'https://d12dkjq56sjcos.cloudfront.net/pub/media/wysiwyg/dubai/06-route-detail/View-Of-Dubai-Beach-Big-Bus-Tours-01.17.jpg', '<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/25d2055d27/dubai/\" data-label_1=\"DUBAI\" data-label_2=\"WEATHER\" data-icons=\"Climacons\" data-theme=\"beige\" >DUBAI WEATHER</a>\r\n<script>\r\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\r\n</script>'),
(3, 'Asian Expedition', '2019-05-14', '2019-05-28', 'Pattaya, Thailand. Hotel and Eco Tour.', '2800.0000', '300.0000', 'http://www.carolhudson.com/img/slide-1.jpg', '<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/12d93100d88/pattaya-city/\" data-label_1=\"PATTAYA CITY\" data-label_2=\"WEATHER\" data-icons=\"Climacons\" data-theme=\"orange\" >PATTAYA CITY WEATHER</a>\r\n<script>\r\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\r\n</script>'),
(4, 'European Vacation', '2019-11-01', '2019-11-14', 'Paris Tour with Rail Pass and Travel Insurance', '3000.0000', '280.0000', 'https://www.awesomecampers.com.au/wp-content/uploads/2017/12/Awesome-Campers-Locations-Airlie-Beach.jpg', '<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/48d862d35/paris/\" data-label_1=\"PARIS\" data-label_2=\"WEATHER\" data-icons=\"Climacons\" data-theme=\"fall-leaves\" >PARIS WEATHER</a>\r\n<script>\r\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\r\n</script>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`PackageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
