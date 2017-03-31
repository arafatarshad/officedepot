-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 04:55 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_depot`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(155) DEFAULT NULL,
  `description` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`) VALUES
(1, 'Office Supplies', NULL, NULL),
(2, 'Writing Instruments', NULL, NULL),
(3, 'Paper & Mailing', NULL, NULL),
(4, 'Ink & Toner', NULL, NULL),
(5, 'Technology', NULL, NULL),
(6, 'Furniture', NULL, NULL),
(7, 'Cleaning & Catering', NULL, NULL),
(8, 'Services ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text,
  `description` text,
  `valid` int(11) DEFAULT '1',
  `sub_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `image`, `description`, `valid`, `sub_category_id`) VALUES
(143, 'Calculators', NULL, NULL, 1, 1),
(144, 'Desk Organisation', NULL, NULL, 1, 1),
(145, 'Diaries, Calendars & Planners', NULL, NULL, 1, 1),
(146, 'Glue & Sticky Tape', NULL, NULL, 1, 1),
(147, 'Notepads & Accounting Books', NULL, NULL, 1, 1),
(148, 'Paperclips & Pins', NULL, NULL, 1, 1),
(149, 'Post it Notes & Index Flags', NULL, NULL, 1, 1),
(150, 'Staplers & Hole Punchers', NULL, NULL, 1, 1),
(151, 'Time System Machines', NULL, NULL, 1, 1),
(152, 'Trimmers, Guillotines & Scissors', NULL, NULL, 1, 1),
(153, 'Box Files', NULL, NULL, 1, 2),
(154, 'Dividers & Indices', NULL, NULL, 1, 2),
(155, 'Lever Arch Files & Accessories', NULL, NULL, 1, 2),
(156, 'Organisation Folders', NULL, NULL, 1, 2),
(157, 'Notepads', NULL, NULL, 1, 3),
(158, 'Hardback notebooks', NULL, NULL, 1, 3),
(159, 'Wire-bound Notebooks', NULL, NULL, 1, 3),
(160, 'Signature books', NULL, NULL, 1, 3),
(161, 'Coloured Sticky Notes', NULL, NULL, 1, 4),
(162, 'Index flag dispensers', NULL, NULL, 1, 4),
(163, 'Index flags', NULL, NULL, 1, 4),
(164, 'Post-it Super Sticky Notes', NULL, NULL, 1, 4),
(165, 'Recycled Sticky Notes', NULL, NULL, 1, 4),
(166, 'Sticky Note Cubes', NULL, NULL, 1, 4),
(167, 'Sticky Note Dispensers', NULL, NULL, 1, 4),
(168, 'Yellow Sticky Notes', NULL, NULL, 1, 4),
(169, 'Z-Notes', NULL, NULL, 1, 4),
(170, 'Business Card Holders', NULL, NULL, 1, 5),
(171, 'Card Index Boxes & Accessories', NULL, NULL, 1, 5),
(172, 'Desk Mats', NULL, NULL, 1, 5),
(173, 'Desk Organisers & Accessories', NULL, NULL, 1, 5),
(174, 'Clear tape', NULL, NULL, 1, 6),
(175, 'Glue rollers', NULL, NULL, 1, 6),
(176, 'Glue sticks', NULL, NULL, 1, 6),
(177, 'Glue strips', NULL, NULL, 1, 6),
(178, 'Stick Ballpoint Pens', NULL, NULL, 1, 7),
(179, 'Retractable Ballpoint Pens', NULL, NULL, 1, 7),
(180, 'Permanent markers', NULL, NULL, 1, 8),
(181, 'Whiteboard markers', NULL, NULL, 1, 8),
(182, 'Flip chart markers', NULL, NULL, 1, 8),
(183, 'Special Markers', NULL, NULL, 1, 8),
(184, 'Fine Liners', NULL, NULL, 1, 9),
(185, 'Gel rollerballs', NULL, NULL, 1, 9),
(186, 'Liquid rollerballs', NULL, NULL, 1, 9),
(187, 'Correction fluid', NULL, NULL, 1, 10),
(188, 'Correction rollers', NULL, NULL, 1, 10),
(189, 'Highliters', NULL, NULL, 1, 11),
(190, 'Pencils', NULL, NULL, 1, 12),
(191, 'Coloured Pencils', NULL, NULL, 1, 12),
(192, 'Felt tip pens', NULL, NULL, 1, 12),
(193, 'Crayons', NULL, NULL, 1, 12),
(194, 'Ballpoint Pens', NULL, NULL, 1, 13),
(195, 'Fountain Pens', NULL, NULL, 1, 13),
(196, 'Rollerball pens', NULL, NULL, 1, 13),
(197, 'Drawing Sets', NULL, NULL, 1, 14),
(198, 'Erasers', NULL, NULL, 1, 14),
(199, 'Painting', NULL, NULL, 1, 14),
(200, 'Pencil Sharpeners', NULL, NULL, 1, 14),
(201, 'Paints & Brushes', NULL, NULL, 1, 15),
(202, 'Crafts', NULL, NULL, 1, 15),
(203, 'Clay & decorative items', NULL, NULL, 1, 15),
(204, 'All kinds of Paper for printer and copier', NULL, NULL, 1, 16),
(205, 'Coloured Paper', NULL, NULL, 1, 16),
(206, 'Speciality Paper', NULL, NULL, 1, 16),
(207, 'Photo paper', NULL, NULL, 1, 16),
(208, 'White Business Envelopes', NULL, NULL, 1, 17),
(209, 'Brown Business Envelopes', NULL, NULL, 1, 17),
(210, 'Protective Envelopes', NULL, NULL, 1, 17),
(211, 'Coloured Envelopes', NULL, NULL, 1, 17),
(212, 'Labels & Forms', NULL, NULL, 1, 18),
(213, 'Personalised Stationery', NULL, NULL, 1, 18),
(214, 'Promotional Products', NULL, NULL, 1, 18),
(215, 'Personalised Seals &Stamps', NULL, NULL, 1, 19),
(216, 'Ready Made Seals &Stamps', NULL, NULL, 1, 19),
(217, 'Photocopiers', NULL, NULL, 1, 20),
(218, '', NULL, NULL, 1, 21),
(219, '', NULL, NULL, 1, 22),
(220, '', NULL, NULL, 1, 23),
(221, '', NULL, NULL, 1, 24),
(222, '', NULL, NULL, 1, 25),
(223, '', NULL, NULL, 1, 26),
(224, '', NULL, NULL, 1, 27),
(225, '', NULL, NULL, 1, 28),
(226, '', NULL, NULL, 1, 29),
(227, '', NULL, NULL, 1, 30),
(228, '', NULL, NULL, 1, 31),
(229, '', NULL, NULL, 1, 32),
(230, '', NULL, NULL, 1, 33),
(231, 'Clocks', NULL, NULL, 1, 34),
(232, 'Office Desk Lamps', NULL, NULL, 1, 34),
(233, 'Screens', NULL, NULL, 1, 34),
(234, 'Office Chair Back Rests', NULL, NULL, 1, 34),
(235, 'Artificial Plants', NULL, NULL, 1, 34),
(236, 'Heaters', NULL, NULL, 1, 34),
(237, '', NULL, NULL, 1, 35),
(238, '', NULL, NULL, 1, 36),
(239, '', NULL, NULL, 1, 37),
(240, 'Office Cleaning & Janitorial Supplies', NULL, NULL, 1, 38),
(241, 'Bathroom Supplies & Accessories', NULL, NULL, 1, 38),
(242, 'Commercial Waste Disposal Units', NULL, NULL, 1, 38),
(243, 'Hand Soap & Soap Dispensers', NULL, NULL, 1, 39),
(244, 'Hand Towels & Hand Driers', NULL, NULL, 1, 39),
(245, 'Hygiene Paper', NULL, NULL, 1, 39),
(246, 'Alarm & surveillance equipment', NULL, NULL, 1, 40),
(247, 'Fire Protection', NULL, NULL, 1, 40),
(248, 'First Aid Kits', NULL, NULL, 1, 40),
(249, 'Air Fresheners', NULL, NULL, 1, 41),
(250, 'Bleach & Disinfectants', NULL, NULL, 1, 41),
(251, 'Brooms & brushes', NULL, NULL, 1, 41),
(252, 'Ashtrays', NULL, NULL, 1, 42),
(253, 'Cigarette bins', NULL, NULL, 1, 42),
(254, 'Refuse Sacks & Bin Liners', NULL, NULL, 1, 42),
(255, 'Waste Bins', NULL, NULL, 1, 42),
(256, 'Safety', NULL, NULL, 1, 43),
(257, 'Footwear', NULL, NULL, 1, 43),
(258, 'Healthcare', NULL, NULL, 1, 43),
(259, 'Wholesale Coffee, Tea & Hot Drinks', NULL, NULL, 1, 44),
(260, 'Wholesale Soft Drinks & Water', NULL, NULL, 1, 44),
(261, 'Tea & Coffee Condiments', NULL, NULL, 1, 44),
(262, 'Catering Services', NULL, NULL, 1, 44),
(263, 'Cups & Tableware', NULL, NULL, 1, 44),
(264, 'Disposable Cups & Tableware', NULL, NULL, 1, 44),
(265, 'Coffee Machines', NULL, NULL, 1, 45),
(266, 'Kitchen Appliances', NULL, NULL, 1, 45),
(267, 'Kitchen roll', NULL, NULL, 1, 45),
(268, 'Bottled & Canned Drinks', NULL, NULL, 1, 46),
(269, 'Cordial & Juice', NULL, NULL, 1, 46),
(270, 'Water Bottles', NULL, NULL, 1, 46),
(271, 'Coffee', NULL, NULL, 1, 47),
(272, 'Hot Chocolate', NULL, NULL, 1, 47),
(273, 'Tea', NULL, NULL, 1, 47),
(274, 'Milk & Cream', NULL, NULL, 1, 48),
(275, 'Sugar', NULL, NULL, 1, 48),
(276, 'Sweetener', NULL, NULL, 1, 48),
(277, 'Man guarding', NULL, NULL, 1, 49),
(278, 'Cash In Transit', NULL, NULL, 1, 49),
(279, 'Customized Meals', NULL, NULL, 1, 50),
(280, 'Cleaning', NULL, NULL, 1, 51),
(281, 'Maintenance', NULL, NULL, 1, 51),
(282, 'International ', NULL, NULL, 1, 52),
(283, 'Domestic', NULL, NULL, 1, 52),
(284, 'Customized', NULL, NULL, 1, 52);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` text,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `description`, `image`, `category_id`) VALUES
(1, 'Desktop Essentials', NULL, NULL, 1),
(2, 'Storage & Archiving', NULL, NULL, 1),
(3, 'Notepads & Accounting Books', NULL, NULL, 1),
(4, 'Sticky Notes & Flags', NULL, NULL, 1),
(5, 'Desk Organisation', NULL, NULL, 1),
(6, 'Glue & Sticky Tapes', NULL, NULL, 1),
(7, 'Ballpoint Pen', NULL, NULL, 2),
(8, 'Marker Pen', NULL, NULL, 2),
(9, 'Roller ball &Fine liner Pens', NULL, NULL, 2),
(10, 'Correction Products ', NULL, NULL, 2),
(11, 'Highliters', NULL, NULL, 2),
(12, 'Pencils & Colouring', NULL, NULL, 2),
(13, 'Executive Writing ', NULL, NULL, 2),
(14, 'Drawing & Drafting ', NULL, NULL, 2),
(15, 'Art & Craft Supplies ', NULL, NULL, 2),
(16, 'Paper', NULL, NULL, 3),
(17, 'Envelopes ', NULL, NULL, 3),
(18, 'Personalising', NULL, NULL, 3),
(19, 'Office Seals & Stamps ', NULL, NULL, 3),
(20, 'Photocopiers', NULL, NULL, 4),
(21, 'PCs, Laptops & Tablets ', NULL, NULL, 5),
(22, 'Computer Accessories ', NULL, NULL, 5),
(23, 'Monitors & Web Cam', NULL, NULL, 5),
(24, 'Printers', NULL, NULL, 5),
(25, 'Shredders', NULL, NULL, 5),
(26, 'Phones & Accessories ', NULL, NULL, 5),
(27, 'Meeting & Presentation ', NULL, NULL, 5),
(28, 'Batteries', NULL, NULL, 5),
(29, 'Home Entertainment ', NULL, NULL, 5),
(30, 'Cameras & Camcorders ', NULL, NULL, 5),
(31, 'Computer Games ', NULL, NULL, 5),
(32, 'Money Handling Machines ', NULL, NULL, 5),
(33, 'Office Chairs & Seating', NULL, NULL, 6),
(34, 'Office Accessories ', NULL, NULL, 6),
(35, 'Office Storage Solutions ', NULL, NULL, 6),
(36, 'Desks & Tables ', NULL, NULL, 6),
(37, 'Reception Furniture ', NULL, NULL, 6),
(38, 'Cleaning & Protecting ', NULL, NULL, 7),
(39, 'Bathroom Supplies ', NULL, NULL, 7),
(40, 'Health & Safety ', NULL, NULL, 7),
(41, 'Office Cleaning & Janitorial Supplies ', NULL, NULL, 7),
(42, 'Waste Disposal Units ', NULL, NULL, 7),
(43, 'Work wear & Personal Protection', NULL, NULL, 7),
(44, 'Eating & Drinking ', NULL, NULL, 7),
(45, 'Catering Supplies ', NULL, NULL, 7),
(46, 'Kitchen Equipment ', NULL, NULL, 7),
(47, 'Soft Drinks & Water', NULL, NULL, 7),
(48, 'Tea, Coffee & Hot Chocolate ', NULL, NULL, 7),
(49, 'Tea & Coffee Condiments ', NULL, NULL, 7),
(50, 'Security Services ', NULL, NULL, 8),
(51, 'Office Meal Service', NULL, NULL, 8),
(52, 'House keeping', NULL, NULL, 8),
(53, 'Courier Service', NULL, NULL, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`,`sub_category_id`),
  ADD KEY `fk_item_sub_category1_idx` (`sub_category_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`,`category_id`),
  ADD KEY `fk_sub_category_category_idx` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `fk_sub_category_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
