-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2017 at 07:19 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chatteit`
--
CREATE DATABASE IF NOT EXISTS `chatteit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chatteit`;

-- --------------------------------------------------------

--
-- Table structure for table `chattable`
--

CREATE TABLE IF NOT EXISTS `chattable` (
  `idchat` int(11) NOT NULL AUTO_INCREMENT,
  `usersend` varchar(200) NOT NULL,
  `userrecive` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `dateheur` varchar(200) NOT NULL,
  PRIMARY KEY (`idchat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `chattable`
--

INSERT INTO `chattable` (`idchat`, `usersend`, `userrecive`, `message`, `dateheur`) VALUES
(2, 'MNgoyind', 'SaraTN', 'Bonjour', '2017-06-13 19:53:01'),
(4, 'SaraTN', 'MNgoyind', 'salut je vais bien et toi', '2017-06-13 20:27:15'),
(5, 'MNgoyind', 'SaraTN', 'oui moi aussi je vais bien', '2017-06-13 20:34:44'),
(6, 'SaraTN', 'MNgoyind', 'ok tu fais koi', '2017-06-13 20:35:04'),
(7, 'MNgoyind', 'SaraTN', 'hmm je suis juste assis, je regarde la télé', '2017-06-13 20:37:03'),
(8, 'SaraTN', 'MNgoyind', 'ok je suis ravis', '2017-06-13 20:40:00'),
(9, 'MNgoyind', 'SaraTN', 'stp tu peux m''envoyer 1$', '2017-06-13 20:45:01'),
(10, 'MNgoyind', 'TNgoyikb', 'salut frerot', '2017-06-13 21:04:46'),
(11, 'TNgoyikb', 'MNgoyind', 'slt ca va', '2017-06-13 21:05:52'),
(12, 'MNgoyind', 'TNgoyikb', 'oui ca va et toi', '2017-06-13 21:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `emailuser` varchar(200) NOT NULL,
  `imageuser` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `priority` varchar(200) NOT NULL,
  `etatuser` varchar(200) NOT NULL,
  `dateinscript` varchar(200) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `firstname`, `lastname`, `emailuser`, `imageuser`, `username`, `password`, `priority`, `etatuser`, `dateinscript`) VALUES
(1, 'Michee', 'Ngoyi', 'micheengoyind92@gmail.com', 'avatar/3326593eb15a2b95e.jpg', 'MNgoyind', '04517e4034887c5c003f45bc0004cc56', '0', '1', '2017-06-12 16:20:58'),
(2, 'Timothee', 'Ngoyi', 'timotheengoyi@gmail.com', 'avatar/30717593ebb5f031f0.png', 'TNgoyikb', '04517e4034887c5c003f45bc0004cc56', '0', '1', '2017-06-12 17:03:43'),
(3, 'Sara', 'Ilunga', 'sarailunga@gmail.com', 'avatar/15032593ebc6b69c58.png', 'SaraTN', '04517e4034887c5c003f45bc0004cc56', '0', '0', '2017-06-12 17:08:11'),
(4, 'Tanya', 'Nbondamba', 'tanyanb@gmail.com', 'avatar/23542593ebced4689c.png', 'TNbondamba', '04517e4034887c5c003f45bc0004cc56', '0', '0', '2017-06-12 17:10:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
