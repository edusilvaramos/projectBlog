-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2025 at 09:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `billets_blog`
--

CREATE TABLE `billets_blog` (
  `ID` int(11) NOT NULL,
  `titre` varchar(120) NOT NULL,
  `contenu` text NOT NULL,
  `date_billet` datetime DEFAULT NULL,
  `categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billets_blog`
--

INSERT INTO `billets_blog` (`ID`, `titre`, `contenu`, `date_billet`, `categorie`) VALUES
(15, 'teste foto 3', 'teste foto 3', '2025-01-17 10:48:00', 'livres'),
(16, 'teste foto 4', 'teste foto 4', '2025-01-17 10:53:00', 'cuisine'),
(18, 'teste foto 5', 'teste foto 5', '2025-01-17 11:01:00', 'jeux'),
(19, 'teste foto 5', 'teste foto 5', '2025-01-17 11:03:00', 'jeux'),
(20, 'teste foto 0,1', 'teste foto 0,1', '2025-01-17 11:20:00', 'jeux'),
(21, 'teste foto 0,2', 'teste foto 0,2', '2025-01-17 11:22:00', 'jeux'),
(22, 'teste foto 0,2', 'teste foto 0,2', '2025-01-17 11:23:00', 'jeux'),
(23, 'teste foto 0,3', 'teste foto 0,3', '2025-01-17 11:23:00', 'jeux'),
(24, 'teste image 55', 'teste image 55', '2025-01-17 12:14:00', 'sante'),
(25, 'teste image 66', 'teste image 66', '2025-01-17 12:16:00', 'livres'),
(26, 'fileName 2024', 'fileName 2024fileName 2024fileName 2024fileName 2024fileName 2024', '2025-01-17 12:18:00', 'livres'),
(27, 'teste image bg', 'teste image bg', '2025-01-17 14:25:00', 'jeux'),
(28, 'erg', 'srfbvrstbdsrb', '2025-01-17 14:39:00', 'livres');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires_blog`
--

CREATE TABLE `commentaires_blog` (
  `ID_comment` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commentaires_blog`
--

INSERT INTO `commentaires_blog` (`ID_comment`, `nom`, `comment`, `date_comment`, `ID`) VALUES
(37, 'taste fileName 2024', 'tste fileName 2024', '2025-01-17 11:20:16', 26);

-- --------------------------------------------------------

--
-- Table structure for table `images_blog`
--

CREATE TABLE `images_blog` (
  `id` int(11) NOT NULL,
  `billet_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images_blog`
--

INSERT INTO `images_blog` (`id`, `billet_id`, `image_path`) VALUES
(2, 20, '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/components/image/Screenshot 2025-01-17 at 10.13.44.png'),
(3, 21, '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/components/image/Screenshot 2025-01-17 at 10.04.40.png'),
(4, 22, '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/components/image/Screenshot 2025-01-17 at 10.04.40.png'),
(5, 23, 'Screenshot 2025-01-17 at 11.23.15.png'),
(6, 25, '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/components/image/Screenshot 2025-01-17 at 12.16.32.png'),
(7, 26, 'Screenshot 2025-01-17 at 12.18.05.png'),
(8, 27, 'Screenshot 2025-01-17 at 14.25.20.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billets_blog`
--
ALTER TABLE `billets_blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `commentaires_blog`
--
ALTER TABLE `commentaires_blog`
  ADD PRIMARY KEY (`ID_comment`),
  ADD KEY `fk_billet` (`ID`);

--
-- Indexes for table `images_blog`
--
ALTER TABLE `images_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billet_id` (`billet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billets_blog`
--
ALTER TABLE `billets_blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `commentaires_blog`
--
ALTER TABLE `commentaires_blog`
  MODIFY `ID_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `images_blog`
--
ALTER TABLE `images_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaires_blog`
--
ALTER TABLE `commentaires_blog`
  ADD CONSTRAINT `fk_billet` FOREIGN KEY (`ID`) REFERENCES `billets_blog` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `images_blog`
--
ALTER TABLE `images_blog`
  ADD CONSTRAINT `images_blog_ibfk_1` FOREIGN KEY (`billet_id`) REFERENCES `billets_blog` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
