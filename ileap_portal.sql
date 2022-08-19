-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 07:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ileap_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `band_master`
--

CREATE TABLE `band_master` (
  `band_id` int(11) NOT NULL,
  `band_name` varchar(250) NOT NULL,
  `band_color` varchar(250) NOT NULL,
  `band_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `band_master`
--

INSERT INTO `band_master` (`band_id`, `band_name`, `band_color`, `band_type`) VALUES
(1, 'band1', 'green', 'secnod'),
(2, 'band2', 'blue', 'primary');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_firstname` varchar(100) NOT NULL,
  `member_lastname` varchar(100) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `member_dob` varchar(50) NOT NULL,
  `member_address` varchar(200) NOT NULL,
  `member_age` varchar(25) NOT NULL,
  `member_center` varchar(100) NOT NULL,
  `member_photo` varchar(100) NOT NULL,
  `member_allergy` varchar(500) NOT NULL,
  `member_password` varchar(25) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_firstname`, `member_lastname`, `parent_email`, `member_dob`, `member_address`, `member_age`, `member_center`, `member_photo`, `member_allergy`, `member_password`, `status`) VALUES
(1, 'test', 'test', 'test@gmail.com', '2016-11-24', 'vadodara', '5', 'Center', 'member_images/Screenshot_(1)1.png', 'no', '123', 0),
(2, 'testforage', 'agecalculation', 'age@gmail.com', '2015-11-23', 'vapi', '6', 'Center', 'member_images/Screenshot_(2).png', 'No Allergy', '123456', 0),
(3, 'testfor flash', 'flash', 'vikas@gmail.com', '2015-03-13', 'goa', '7', 'Center', 'member_images/Screenshot_(7).png', 'fsdfdsfds', '555', 0),
(18, 'Ashish', 'Rajput', 'ashish@gmail.com', '1992-01-02', 'Jalgaon', '30', 'Center', 'member_images/Screenshot_(8).png', 'xassa', '123', 0),
(19, 'Dwarkesh', 'Gandhi', 'dwarkesh@gmail.com', '1993-03-14', 'vadodara', '29', 'Center', 'member_images/Screenshot_(7)3.png', 'No Allergy', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members_master`
--

CREATE TABLE `members_master` (
  `member_id` int(11) NOT NULL,
  `member_first_name` varchar(30) NOT NULL,
  `member_last_name` varchar(30) NOT NULL,
  `member_date_of_birth` varchar(30) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `home_phone_number` varchar(12) NOT NULL,
  `cell_phone_number` varchar(12) NOT NULL,
  `email_for_parent` varchar(30) NOT NULL,
  `email_for_child` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `food_allergies` varchar(250) NOT NULL,
  `special_needs_required` varchar(250) NOT NULL,
  `family_members_in_the_program` varchar(250) NOT NULL,
  `how_they_heard_about_us` varchar(250) NOT NULL,
  `referral` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_master`
--

INSERT INTO `members_master` (`member_id`, `member_first_name`, `member_last_name`, `member_date_of_birth`, `grade`, `home_phone_number`, `cell_phone_number`, `email_for_parent`, `email_for_child`, `address`, `gender`, `food_allergies`, `special_needs_required`, `family_members_in_the_program`, `how_they_heard_about_us`, `referral`) VALUES
(2, 'asp2', 'rajput2', '01/06/1992', 'a', '9638527412', '9960811224', 'aashish@gmail.com', 'aashish@gmauil.com', 'vadodara', 'make', 'no', 'no', 'no', 'facebook', 'no'),
(3, 'ashish', 'rajput', '01/06/1992', 'b', '9638527412', '9960811224', 'aashish@gmail.com', 'aashish@gmauil.com', 'vadodara', 'make', 'no', 'no', 'no', 'facebook', 'no'),
(4, 'ashishewr', 'rajput', '01/06/1992', 'b', '9638527412', '9960811224', 'aashish@gmail.com', 'aashish@gmauil.com', 'vadodara', 'make', 'no', 'no', 'no', 'facebook', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `module_master`
--

CREATE TABLE `module_master` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `club_id` int(11) NOT NULL,
  `module_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_master`
--

INSERT INTO `module_master` (`module_id`, `module_name`, `club_id`, `module_type`) VALUES
(1, 'newtest', 5, 'new'),
(3, 'module1', 1, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `roles_master`
--

CREATE TABLE `roles_master` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_type` varchar(50) NOT NULL,
  `role_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles_master`
--

INSERT INTO `roles_master` (`role_id`, `role_name`, `role_type`, `role_points`) VALUES
(3, 'rolenew', 'roletype_new', 5),
(4, 'role4', 'roletype4', 4),
(5, 'role5', 'roletype5', 5);

-- --------------------------------------------------------

--
-- Table structure for table `session_master`
--

CREATE TABLE `session_master` (
  `session_id` int(11) NOT NULL,
  `session_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session_master`
--

INSERT INTO `session_master` (`session_id`, `session_title`) VALUES
(1, 'new Session 1'),
(2, 'session2'),
(4, 'session4');

-- --------------------------------------------------------

--
-- Table structure for table `session_memberdata`
--

CREATE TABLE `session_memberdata` (
  `session_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `member_agenda` varchar(50) NOT NULL,
  `absent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `session_member_roles`
--

CREATE TABLE `session_member_roles` (
  `session_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `session_points`
--

CREATE TABLE `session_points` (
  `session_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `addedby_id` int(50) NOT NULL,
  `addedby_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `center_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `band_master`
--
ALTER TABLE `band_master`
  ADD PRIMARY KEY (`band_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_master`
--
ALTER TABLE `members_master`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `module_master`
--
ALTER TABLE `module_master`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `roles_master`
--
ALTER TABLE `roles_master`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `session_master`
--
ALTER TABLE `session_master`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `session_memberdata`
--
ALTER TABLE `session_memberdata`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `session_member_roles`
--
ALTER TABLE `session_member_roles`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `session_points`
--
ALTER TABLE `session_points`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `band_master`
--
ALTER TABLE `band_master`
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `members_master`
--
ALTER TABLE `members_master`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `module_master`
--
ALTER TABLE `module_master`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles_master`
--
ALTER TABLE `roles_master`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `session_master`
--
ALTER TABLE `session_master`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session_memberdata`
--
ALTER TABLE `session_memberdata`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_member_roles`
--
ALTER TABLE `session_member_roles`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_points`
--
ALTER TABLE `session_points`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
