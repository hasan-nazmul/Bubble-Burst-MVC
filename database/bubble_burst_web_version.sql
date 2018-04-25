-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 11:58 PM
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
  `DateCreated` datetime NOT NULL,
  `Description` varchar(200) NOT NULL,
  `UserID` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`DateCreated`, `Description`, `UserID`, `FirstName`, `LastName`, `Password`) VALUES
('2018-04-20 00:00:00', 'Lorem ipsum dolor sit amet, cu sumo esse eum. Id sea alia scaevola, qui modus justo principes at. Ex euripidis torquatos persecuti per, aeque vituperata scriptorem ad per. Unum delicata ex vis.', 'alice.smith', 'Alice', 'Smith', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35'),
('0000-00-00 00:00:00', 'About me is one of the most popular personal website builders, and it’s no wonder. It has all the most important features, it’s very intuitive and looks great. Basically, it allows you to connect all ', 'bob.fancy', 'Bob', 'Fancy', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35'),
('0000-00-00 00:00:00', 'I am neither especially clever nor especially gifted. I am only very, very curious. Albert Einstein', 'nazmul.hasan', 'Nazmul', 'Hasan', 'e9cbd2ea8015a084ce9cf83a3c65b51f8fa10a39');

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
