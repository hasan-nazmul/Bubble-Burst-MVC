-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 03:35 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bubble_burst`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `DateCreated` datetime DEFAULT NULL,
  `UserID` varchar(20) NOT NULL,
  `GameID` varchar(40) NOT NULL,
  `grid_0` varchar(7) NOT NULL,
  `grid_1` varchar(7) NOT NULL,
  `grid_2` varchar(7) NOT NULL,
  `grid_3` varchar(7) NOT NULL,
  `grid_4` varchar(7) NOT NULL,
  `grid_5` varchar(7) NOT NULL,
  `grid_6` varchar(7) NOT NULL,
  `grid_7` varchar(7) NOT NULL,
  `grid_8` varchar(7) NOT NULL,
  `grid_9` varchar(7) NOT NULL,
  `grid_10` varchar(7) NOT NULL,
  `grid_11` varchar(7) NOT NULL,
  `grid_12` varchar(7) NOT NULL,
  `grid_13` varchar(7) NOT NULL,
  `grid_14` varchar(7) NOT NULL,
  `grid_15` varchar(7) NOT NULL,
  `grid_16` varchar(7) NOT NULL,
  `grid_17` varchar(7) NOT NULL,
  `grid_18` varchar(7) NOT NULL,
  `grid_19` varchar(7) NOT NULL,
  `grid_20` varchar(7) NOT NULL,
  `grid_21` varchar(7) NOT NULL,
  `grid_22` varchar(7) NOT NULL,
  `grid_23` varchar(7) NOT NULL,
  `grid_24` varchar(7) NOT NULL,
  `grid_25` varchar(7) NOT NULL,
  `grid_26` varchar(7) NOT NULL,
  `grid_27` varchar(7) NOT NULL,
  `grid_28` varchar(7) NOT NULL,
  `grid_29` varchar(7) NOT NULL,
  `grid_30` varchar(7) NOT NULL,
  `grid_31` varchar(7) NOT NULL,
  `grid_32` varchar(7) NOT NULL,
  `grid_33` varchar(7) NOT NULL,
  `grid_34` varchar(7) NOT NULL,
  `grid_35` varchar(7) NOT NULL,
  `grid_36` varchar(7) NOT NULL,
  `grid_37` varchar(7) NOT NULL,
  `grid_38` varchar(7) NOT NULL,
  `grid_39` varchar(7) NOT NULL,
  `grid_40` varchar(7) NOT NULL,
  `grid_41` varchar(7) NOT NULL,
  `grid_42` varchar(7) NOT NULL,
  `grid_43` varchar(7) NOT NULL,
  `grid_44` varchar(7) NOT NULL,
  `grid_45` varchar(7) NOT NULL,
  `grid_46` varchar(7) NOT NULL,
  `grid_47` varchar(7) NOT NULL,
  `grid_48` varchar(7) NOT NULL,
  `grid_49` varchar(7) NOT NULL,
  `grid_50` varchar(7) NOT NULL,
  `grid_51` varchar(7) NOT NULL,
  `grid_52` varchar(7) NOT NULL,
  `grid_53` varchar(7) NOT NULL,
  `grid_54` varchar(7) NOT NULL,
  `grid_55` varchar(7) NOT NULL,
  `grid_56` varchar(7) NOT NULL,
  `grid_57` varchar(7) NOT NULL,
  `grid_58` varchar(7) NOT NULL,
  `grid_59` varchar(7) NOT NULL,
  `grid_60` varchar(7) NOT NULL,
  `grid_61` varchar(7) NOT NULL,
  `grid_62` varchar(7) NOT NULL,
  `grid_63` varchar(7) NOT NULL,
  `grid_64` varchar(7) NOT NULL,
  `grid_65` varchar(7) NOT NULL,
  `grid_66` varchar(7) NOT NULL,
  `grid_67` varchar(7) NOT NULL,
  `grid_68` varchar(7) NOT NULL,
  `grid_69` varchar(7) NOT NULL,
  `grid_70` varchar(7) NOT NULL,
  `grid_71` varchar(7) NOT NULL,
  `grid_72` varchar(7) NOT NULL,
  `grid_73` varchar(7) NOT NULL,
  `grid_74` varchar(7) NOT NULL,
  `grid_75` varchar(7) NOT NULL,
  `grid_76` varchar(7) NOT NULL,
  `grid_77` varchar(7) NOT NULL,
  `grid_78` varchar(7) NOT NULL,
  `grid_79` varchar(7) NOT NULL,
  `grid_80` varchar(7) NOT NULL,
  `grid_81` varchar(7) NOT NULL,
  `grid_82` varchar(7) NOT NULL,
  `grid_83` varchar(7) NOT NULL,
  `grid_84` varchar(7) NOT NULL,
  `grid_85` varchar(7) NOT NULL,
  `grid_86` varchar(7) NOT NULL,
  `grid_87` varchar(7) NOT NULL,
  `grid_88` varchar(7) NOT NULL,
  `grid_89` varchar(7) NOT NULL,
  `grid_90` varchar(7) NOT NULL,
  `grid_91` varchar(7) NOT NULL,
  `grid_92` varchar(7) NOT NULL,
  `grid_93` varchar(7) NOT NULL,
  `grid_94` varchar(7) NOT NULL,
  `grid_95` varchar(7) NOT NULL,
  `grid_96` varchar(7) NOT NULL,
  `grid_97` varchar(7) NOT NULL,
  `grid_98` varchar(7) NOT NULL,
  `grid_99` varchar(7) NOT NULL,
  `value_0` varchar(1) NOT NULL,
  `value_1` varchar(1) NOT NULL,
  `value_2` varchar(1) NOT NULL,
  `value_3` varchar(1) NOT NULL,
  `value_4` varchar(1) NOT NULL,
  `value_5` varchar(1) NOT NULL,
  `value_6` varchar(1) NOT NULL,
  `value_7` varchar(1) NOT NULL,
  `value_8` varchar(1) NOT NULL,
  `value_9` varchar(1) NOT NULL,
  `value_10` varchar(1) NOT NULL,
  `value_11` varchar(1) NOT NULL,
  `value_12` varchar(1) NOT NULL,
  `value_13` varchar(1) NOT NULL,
  `value_14` varchar(1) NOT NULL,
  `value_15` varchar(1) NOT NULL,
  `value_16` varchar(1) NOT NULL,
  `value_17` varchar(1) NOT NULL,
  `value_18` varchar(1) NOT NULL,
  `value_19` varchar(1) NOT NULL,
  `value_20` varchar(1) NOT NULL,
  `value_21` varchar(1) NOT NULL,
  `value_22` varchar(1) NOT NULL,
  `value_23` varchar(1) NOT NULL,
  `value_24` varchar(1) NOT NULL,
  `value_25` varchar(1) NOT NULL,
  `value_26` varchar(1) NOT NULL,
  `value_27` varchar(1) NOT NULL,
  `value_28` varchar(1) NOT NULL,
  `value_29` varchar(1) NOT NULL,
  `value_30` varchar(1) NOT NULL,
  `value_31` varchar(1) NOT NULL,
  `value_32` varchar(1) NOT NULL,
  `value_33` varchar(1) NOT NULL,
  `value_34` varchar(1) NOT NULL,
  `value_35` varchar(1) NOT NULL,
  `value_36` varchar(1) NOT NULL,
  `value_37` varchar(1) NOT NULL,
  `value_38` varchar(1) NOT NULL,
  `value_39` varchar(1) NOT NULL,
  `value_40` varchar(1) NOT NULL,
  `value_41` varchar(1) NOT NULL,
  `value_42` varchar(1) NOT NULL,
  `value_43` varchar(1) NOT NULL,
  `value_44` varchar(1) NOT NULL,
  `value_45` varchar(1) NOT NULL,
  `value_46` varchar(1) NOT NULL,
  `value_47` varchar(1) NOT NULL,
  `value_48` varchar(1) NOT NULL,
  `value_49` varchar(1) NOT NULL,
  `value_50` varchar(1) NOT NULL,
  `value_51` varchar(1) NOT NULL,
  `value_52` varchar(1) NOT NULL,
  `value_53` varchar(1) NOT NULL,
  `value_54` varchar(1) NOT NULL,
  `value_55` varchar(1) NOT NULL,
  `value_56` varchar(1) NOT NULL,
  `value_57` varchar(1) NOT NULL,
  `value_58` varchar(1) NOT NULL,
  `value_59` varchar(1) NOT NULL,
  `value_60` varchar(1) NOT NULL,
  `value_61` varchar(1) NOT NULL,
  `value_62` varchar(1) NOT NULL,
  `value_63` varchar(1) NOT NULL,
  `value_64` varchar(1) NOT NULL,
  `value_65` varchar(1) NOT NULL,
  `value_66` varchar(1) NOT NULL,
  `value_67` varchar(1) NOT NULL,
  `value_68` varchar(1) NOT NULL,
  `value_69` varchar(1) NOT NULL,
  `value_70` varchar(1) NOT NULL,
  `value_71` varchar(1) NOT NULL,
  `value_72` varchar(1) NOT NULL,
  `value_73` varchar(1) NOT NULL,
  `value_74` varchar(1) NOT NULL,
  `value_75` varchar(1) NOT NULL,
  `value_76` varchar(1) NOT NULL,
  `value_77` varchar(1) NOT NULL,
  `value_78` varchar(1) NOT NULL,
  `value_79` varchar(1) NOT NULL,
  `value_80` varchar(1) NOT NULL,
  `value_81` varchar(1) NOT NULL,
  `value_82` varchar(1) NOT NULL,
  `value_83` varchar(1) NOT NULL,
  `value_84` varchar(1) NOT NULL,
  `value_85` varchar(1) NOT NULL,
  `value_86` varchar(1) NOT NULL,
  `value_87` varchar(1) NOT NULL,
  `value_88` varchar(1) NOT NULL,
  `value_89` varchar(1) NOT NULL,
  `value_90` varchar(1) NOT NULL,
  `value_91` varchar(1) NOT NULL,
  `value_92` varchar(1) NOT NULL,
  `value_93` varchar(1) NOT NULL,
  `value_94` varchar(1) NOT NULL,
  `value_95` varchar(1) NOT NULL,
  `value_96` varchar(1) NOT NULL,
  `value_97` varchar(1) NOT NULL,
  `value_98` varchar(1) NOT NULL,
  `value_99` varchar(1) NOT NULL,
  `clicked_0` varchar(1) NOT NULL,
  `clicked_1` varchar(1) NOT NULL,
  `clicked_2` varchar(1) NOT NULL,
  `clicked_3` varchar(1) NOT NULL,
  `clicked_4` varchar(1) NOT NULL,
  `clicked_5` varchar(1) NOT NULL,
  `clicked_6` varchar(1) NOT NULL,
  `clicked_7` varchar(1) NOT NULL,
  `clicked_8` varchar(1) NOT NULL,
  `clicked_9` varchar(1) NOT NULL,
  `clicked_10` varchar(1) NOT NULL,
  `clicked_11` varchar(1) NOT NULL,
  `clicked_12` varchar(1) NOT NULL,
  `clicked_13` varchar(1) NOT NULL,
  `clicked_14` varchar(1) NOT NULL,
  `clicked_15` varchar(1) NOT NULL,
  `clicked_16` varchar(1) NOT NULL,
  `clicked_17` varchar(1) NOT NULL,
  `clicked_18` varchar(1) NOT NULL,
  `clicked_19` varchar(1) NOT NULL,
  `clicked_20` varchar(1) NOT NULL,
  `clicked_21` varchar(1) NOT NULL,
  `clicked_22` varchar(1) NOT NULL,
  `clicked_23` varchar(1) NOT NULL,
  `clicked_24` varchar(1) NOT NULL,
  `clicked_25` varchar(1) NOT NULL,
  `clicked_26` varchar(1) NOT NULL,
  `clicked_27` varchar(1) NOT NULL,
  `clicked_28` varchar(1) NOT NULL,
  `clicked_29` varchar(1) NOT NULL,
  `clicked_30` varchar(1) NOT NULL,
  `clicked_31` varchar(1) NOT NULL,
  `clicked_32` varchar(1) NOT NULL,
  `clicked_33` varchar(1) NOT NULL,
  `clicked_34` varchar(1) NOT NULL,
  `clicked_35` varchar(1) NOT NULL,
  `clicked_36` varchar(1) NOT NULL,
  `clicked_37` varchar(1) NOT NULL,
  `clicked_38` varchar(1) NOT NULL,
  `clicked_39` varchar(1) NOT NULL,
  `clicked_40` varchar(1) NOT NULL,
  `clicked_41` varchar(1) NOT NULL,
  `clicked_42` varchar(1) NOT NULL,
  `clicked_43` varchar(1) NOT NULL,
  `clicked_44` varchar(1) NOT NULL,
  `clicked_45` varchar(1) NOT NULL,
  `clicked_46` varchar(1) NOT NULL,
  `clicked_47` varchar(1) NOT NULL,
  `clicked_48` varchar(1) NOT NULL,
  `clicked_49` varchar(1) NOT NULL,
  `clicked_50` varchar(1) NOT NULL,
  `clicked_51` varchar(1) NOT NULL,
  `clicked_52` varchar(1) NOT NULL,
  `clicked_53` varchar(1) NOT NULL,
  `clicked_54` varchar(1) NOT NULL,
  `clicked_55` varchar(1) NOT NULL,
  `clicked_56` varchar(1) NOT NULL,
  `clicked_57` varchar(1) NOT NULL,
  `clicked_58` varchar(1) NOT NULL,
  `clicked_59` varchar(1) NOT NULL,
  `clicked_60` varchar(1) NOT NULL,
  `clicked_61` varchar(1) NOT NULL,
  `clicked_62` varchar(1) NOT NULL,
  `clicked_63` varchar(1) NOT NULL,
  `clicked_64` varchar(1) NOT NULL,
  `clicked_65` varchar(1) NOT NULL,
  `clicked_66` varchar(1) NOT NULL,
  `clicked_67` varchar(1) NOT NULL,
  `clicked_68` varchar(1) NOT NULL,
  `clicked_69` varchar(1) NOT NULL,
  `clicked_70` varchar(1) NOT NULL,
  `clicked_71` varchar(1) NOT NULL,
  `clicked_72` varchar(1) NOT NULL,
  `clicked_73` varchar(1) NOT NULL,
  `clicked_74` varchar(1) NOT NULL,
  `clicked_75` varchar(1) NOT NULL,
  `clicked_76` varchar(1) NOT NULL,
  `clicked_77` varchar(1) NOT NULL,
  `clicked_78` varchar(1) NOT NULL,
  `clicked_79` varchar(1) NOT NULL,
  `clicked_80` varchar(1) NOT NULL,
  `clicked_81` varchar(1) NOT NULL,
  `clicked_82` varchar(1) NOT NULL,
  `clicked_83` varchar(1) NOT NULL,
  `clicked_84` varchar(1) NOT NULL,
  `clicked_85` varchar(1) NOT NULL,
  `clicked_86` varchar(1) NOT NULL,
  `clicked_87` varchar(1) NOT NULL,
  `clicked_88` varchar(1) NOT NULL,
  `clicked_89` varchar(1) NOT NULL,
  `clicked_90` varchar(1) NOT NULL,
  `clicked_91` varchar(1) NOT NULL,
  `clicked_92` varchar(1) NOT NULL,
  `clicked_93` varchar(1) NOT NULL,
  `clicked_94` varchar(1) NOT NULL,
  `clicked_95` varchar(1) NOT NULL,
  `clicked_96` varchar(1) NOT NULL,
  `clicked_97` varchar(1) NOT NULL,
  `clicked_98` varchar(1) NOT NULL,
  `clicked_99` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`DateCreated`, `UserID`, `GameID`, `grid_0`, `grid_1`, `grid_2`, `grid_3`, `grid_4`, `grid_5`, `grid_6`, `grid_7`, `grid_8`, `grid_9`, `grid_10`, `grid_11`, `grid_12`, `grid_13`, `grid_14`, `grid_15`, `grid_16`, `grid_17`, `grid_18`, `grid_19`, `grid_20`, `grid_21`, `grid_22`, `grid_23`, `grid_24`, `grid_25`, `grid_26`, `grid_27`, `grid_28`, `grid_29`, `grid_30`, `grid_31`, `grid_32`, `grid_33`, `grid_34`, `grid_35`, `grid_36`, `grid_37`, `grid_38`, `grid_39`, `grid_40`, `grid_41`, `grid_42`, `grid_43`, `grid_44`, `grid_45`, `grid_46`, `grid_47`, `grid_48`, `grid_49`, `grid_50`, `grid_51`, `grid_52`, `grid_53`, `grid_54`, `grid_55`, `grid_56`, `grid_57`, `grid_58`, `grid_59`, `grid_60`, `grid_61`, `grid_62`, `grid_63`, `grid_64`, `grid_65`, `grid_66`, `grid_67`, `grid_68`, `grid_69`, `grid_70`, `grid_71`, `grid_72`, `grid_73`, `grid_74`, `grid_75`, `grid_76`, `grid_77`, `grid_78`, `grid_79`, `grid_80`, `grid_81`, `grid_82`, `grid_83`, `grid_84`, `grid_85`, `grid_86`, `grid_87`, `grid_88`, `grid_89`, `grid_90`, `grid_91`, `grid_92`, `grid_93`, `grid_94`, `grid_95`, `grid_96`, `grid_97`, `grid_98`, `grid_99`, `value_0`, `value_1`, `value_2`, `value_3`, `value_4`, `value_5`, `value_6`, `value_7`, `value_8`, `value_9`, `value_10`, `value_11`, `value_12`, `value_13`, `value_14`, `value_15`, `value_16`, `value_17`, `value_18`, `value_19`, `value_20`, `value_21`, `value_22`, `value_23`, `value_24`, `value_25`, `value_26`, `value_27`, `value_28`, `value_29`, `value_30`, `value_31`, `value_32`, `value_33`, `value_34`, `value_35`, `value_36`, `value_37`, `value_38`, `value_39`, `value_40`, `value_41`, `value_42`, `value_43`, `value_44`, `value_45`, `value_46`, `value_47`, `value_48`, `value_49`, `value_50`, `value_51`, `value_52`, `value_53`, `value_54`, `value_55`, `value_56`, `value_57`, `value_58`, `value_59`, `value_60`, `value_61`, `value_62`, `value_63`, `value_64`, `value_65`, `value_66`, `value_67`, `value_68`, `value_69`, `value_70`, `value_71`, `value_72`, `value_73`, `value_74`, `value_75`, `value_76`, `value_77`, `value_78`, `value_79`, `value_80`, `value_81`, `value_82`, `value_83`, `value_84`, `value_85`, `value_86`, `value_87`, `value_88`, `value_89`, `value_90`, `value_91`, `value_92`, `value_93`, `value_94`, `value_95`, `value_96`, `value_97`, `value_98`, `value_99`, `clicked_0`, `clicked_1`, `clicked_2`, `clicked_3`, `clicked_4`, `clicked_5`, `clicked_6`, `clicked_7`, `clicked_8`, `clicked_9`, `clicked_10`, `clicked_11`, `clicked_12`, `clicked_13`, `clicked_14`, `clicked_15`, `clicked_16`, `clicked_17`, `clicked_18`, `clicked_19`, `clicked_20`, `clicked_21`, `clicked_22`, `clicked_23`, `clicked_24`, `clicked_25`, `clicked_26`, `clicked_27`, `clicked_28`, `clicked_29`, `clicked_30`, `clicked_31`, `clicked_32`, `clicked_33`, `clicked_34`, `clicked_35`, `clicked_36`, `clicked_37`, `clicked_38`, `clicked_39`, `clicked_40`, `clicked_41`, `clicked_42`, `clicked_43`, `clicked_44`, `clicked_45`, `clicked_46`, `clicked_47`, `clicked_48`, `clicked_49`, `clicked_50`, `clicked_51`, `clicked_52`, `clicked_53`, `clicked_54`, `clicked_55`, `clicked_56`, `clicked_57`, `clicked_58`, `clicked_59`, `clicked_60`, `clicked_61`, `clicked_62`, `clicked_63`, `clicked_64`, `clicked_65`, `clicked_66`, `clicked_67`, `clicked_68`, `clicked_69`, `clicked_70`, `clicked_71`, `clicked_72`, `clicked_73`, `clicked_74`, `clicked_75`, `clicked_76`, `clicked_77`, `clicked_78`, `clicked_79`, `clicked_80`, `clicked_81`, `clicked_82`, `clicked_83`, `clicked_84`, `clicked_85`, `clicked_86`, `clicked_87`, `clicked_88`, `clicked_89`, `clicked_90`, `clicked_91`, `clicked_92`, `clicked_93`, `clicked_94`, `clicked_95`, `clicked_96`, `clicked_97`, `clicked_98`, `clicked_99`) VALUES
('2018-04-24 00:00:00', 'alice.smith', '122846b9012c7e8caf22bfc8df566b0ba10de766', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', '38b3a06da6c8d8c4cf83b65adcd3b55c13e75206', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', '41bd83cad2e161b26497026672b25a2e833ba0bd', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', '6c1faf055c16f2750ae964546ba4cb8e26c965b6', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
('2018-04-24 00:00:00', 'alice.smith', '6deb81de64a82953eef43ac8adb1b876a8ef6231', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '', '', '1', '1', '', '1', '1', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', '8e2dfa4ccef5b4e92b5b309a2c9c7a21d59b0f5a', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '', '1', '1', '', '', '1', '', '', '1', '', '1', '1', '1', '1', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
('2018-04-24 00:00:00', 'alice.smith', '9c7a0b3770c0285151094f93ffc9ef4f87f3a9fe', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '', '', '1', '', '', '1', '', '', '', '1', '', '', '', '1', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', 'a5a424bc90ba484e06bfb7e0a8e65d215b7daea6', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '1', '1'),
('2018-04-24 00:00:00', 'alice.smith', 'ab99303e0835f303723089a99a7b12fc3f9ed046', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '1', '1', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '', '', '', '', '', '', '1', '1', '1', '1', '', '', '', '', '1', '', '1', '', '1', '1', '', '', '', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', 'c6ec2afdafd997840b5679c3b6572f86015b6f45', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '1', '1', '', '1', '1', '', '', '1', '', '', '1', '1', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', 'c9bd8fe359b493c71dde389d92a94b32a6d2bdb8', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2018-04-24 00:00:00', 'alice.smith', 'e647ace578c0a9004561e20ba99c3340ab30c532', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '', '', '', '', '', '', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
('2018-04-24 00:00:00', 'alice.smith', 'ec81688cd6de431773326c7664a5309f1814bad7', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '', '', '1', '', '1', '1', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `UserID` varchar(20) NOT NULL,
  `GameID` varchar(40) NOT NULL,
  `Lives` int(1) NOT NULL,
  `TotalMoves` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `UserID` varchar(20) NOT NULL,
  `GameID` varchar(40) NOT NULL,
  `DatePlayed` datetime DEFAULT NULL,
  `Points` int(2) NOT NULL,
  `Lives` int(2) NOT NULL,
  `Win` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Password`) VALUES
('alice.smith', 'Alice', 'Smith', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35'),
('bob.fancy', 'Bob', 'Fancy', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35'),
('david.mace', 'David', 'Mace', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
