-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2015 at 10:49 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger_name` varchar(150) NOT NULL,
  `passenger_cnic` varchar(150) NOT NULL,
  `passenger_info` varchar(250) NOT NULL,
  `travel_from` varchar(150) NOT NULL,
  `travel_to` varchar(150) NOT NULL,
  `travel_date` varchar(30) NOT NULL,
  `travel_time` varchar(30) NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `passenger_name`, `passenger_cnic`, `passenger_info`, `travel_from`, `travel_to`, `travel_date`, `travel_time`, `no_of_seats`) VALUES
(46, 'Rehan Arqam', '3140423423211', 'Single', 'Multan', 'Lahore', '2015-02-16', '11:30', 1),
(47, 'Abdul Samad', '1235347675674', 'Has family', 'Multan', 'Islamabad', '2015-02-18', '09:00', 5),
(44, 'Kamran Qadir', '3450334342342', 'Non Smooker', 'Islamabad', 'Multan', '2015-02-20', '21:00', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
