-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2018 at 04:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FineArts`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `artId` int(11) NOT NULL,
  `itemName` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'noName',
  `price` int(11) NOT NULL DEFAULT '0',
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'modern',
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`artId`, `itemName`, `price`, `owner`, `imageURL`, `author`, `category`, `description`) VALUES
(2, 'Love By the Lake', 2300, 'reeyaapatil@gmail.com', 'image2.jpg', 'Rajesh Aurora', 'misc', 'The sense of space created within an abstract painting by Wassily Kandinsky comes from the colors he chose as much as the shapes. Often the color of a work has changed over time.'),
(4, 'Errie Pierrie', 1200, 'reeyaapatil@gmail.com', 'modern1.jpg', 'Valentina Tereshkova', 'modern', 'The rest of the painting is covered with a strange light blue, organic background with shades of white, blue, yellow, and red. The streaks of blue, yellow and white at the background appear like water running down the entrance of the cave. The red and yellow colors appear to be from the reflection of the sun\'s rays against the water running down the entrance of the cave. The illusion of water running down the entrance of the cave is enhanced by the curvy shapes of the blue streaks of color at the background.'),
(5, 'Hungama', 1300, 'reeyaapatil@gmail.com', 'modern2.jpg', 'Valentina Tereshkova', 'modern', 'The sense of space created within an abstract painting by Wassily Kandinsky comes from the colors he chose as much as the shapes. Often the color of a work has changed over time.'),
(6, 'Abstract Art', 4567, 'reeyaapatil@gmail.com', 'modern3.jpg', 'Rajesh Aurora', 'modern', 'fsdghj'),
(7, 'Visualize', 3440, 'reeyaapatil@gmail.com', 'modern4.jpg', 'Valentina Tereshkova', 'modern', 'The rest of the painting is covered with a strange light blue, organic background with shades of white, blue, yellow, and red. The streaks of blue, yellow and white at the background appear like water running down the entrance of the cave. The red and yellow colors appear to be from the reflection of the sun\'s rays against the water running down the entrance of the cave. The illusion of water running down the entrance of the cave is enhanced by the curvy shapes of the blue streaks of color at the background.'),
(8, 'That is Right!', 990, 'someone@gmail.com', 'modern5.jpg', 'Valentina Tereshkova', 'modern', 'The sense of space created within an abstract painting by Wassily Kandinsky comes from the colors he chose as much as the shapes. Often the color of a work has changed over time.'),
(9, 'Forever', 3456, 'reeyaapatil@gmail.com', 'modern6.jpg', 'Valentina Tereshkova', 'popart', 'The sense of space created within an abstract painting by Wassily Kandinsky comes from the colors he chose as much as the shapes. Often the color of a work has changed over time.'),
(10, 'To be or not to be', 1250, 'reeyaapatil@gmail.com', 'modern7.jpg', 'Rajesh Aurora', 'modern', 'The sense of space created within an abstract painting by Wassily Kandinsky comes from the colors he chose as much as the shapes. Often the color of a work has changed over time.'),
(14, 'Inside', 8670, 'reeyaapatil@gmail.com', 'popart12.jpeg', 'Valentina Tereshkova', 'modern', 'The rest of the painting is covered with a strange light blue, organic background with shades of white, blue, yellow, and red. The streaks of blue, yellow and white at the background appear like water running down the entrance of the cave. The red and yellow colors appear to be from the reflection of the sun\'s rays against the water running down the entrance of the cave. The illusion of water running down the entrance of the cave is enhanced by the curvy shapes of the blue streaks of color at the background.'),
(17, 'Street Walk', 800, 'reeyaapatil@gmail.com', 'images-2.jpeg', 'Valentina Tereshkova', 'misc', 'The sense of space created within an abstract painting by Wassily Kandinsky comes from the colors he chose as much as the shapes. Often the color of a work has changed over time.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`firstName`, `lastName`, `email`, `password`, `createdAt`) VALUES
('a', 'a', 'a', 'a', '0000-00-00'),
('b', 'b', 'b', 'b', '0000-00-00'),
('c', 'c', 'c', 'c', '0000-00-00'),
('d', 'd', 'd', 'd', '0000-00-00'),
('e', 'e', 'e', 'e', '0000-00-00'),
('reeyaa', 'patil', 'reeyaapatil@gmail.com', 'reeyaa123', '2018-12-11'),
('z', 'z', 'z', 'z', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`artId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `artId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
