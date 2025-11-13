-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2025 at 09:07 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `japji_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(2, 'Delicious Sandwich Combos', 'Looking for a meal that’s quick, satisfying, and full of flavor? Our Delicious Sandwich Combos are the perfect choice! Each combo includes a freshly made sandwich paired with a drink of your choice—at a special price designed to make your meal both delicious and affordable. From classic favorites like grilled cheese and chicken mayo to exciting new flavors like spicy paneer tikka, cheesy mushroom, and loaded club sandwiches.', 'sandwich.jpg', '2025-10-26 07:07:41'),
(3, 'Refreshing Summer Drinks', 'Beat the heat with our range of refreshing drinks! From chilled fruit smoothies to fresh lemonades and iced teas, we’ve got you covered. Try our popular mango delight, watermelon splash, and strawberry shake. Each drink is freshly prepared with real fruits, ensuring taste and health in every sip.', 'drinks.jpg', '2025-10-26 07:07:41'),
(4, 'Homemade Pasta Specials', 'Indulge in our Homemade Pasta Specials made with authentic Italian flavors! Choose from creamy Alfredo, tangy Arrabbiata, or classic Bolognese pasta. Each dish is freshly cooked with rich sauces and soft pasta that melts in your mouth. Perfect for lunch or dinner cravings!', 'pasta.jpg', '2025-10-26 07:07:41'),
(5, 'Sweet Desserts to Make Your Day', 'Craving something sweet? Our dessert menu is a dream come true! From creamy cheesecakes to warm chocolate brownies and soft donuts, we have something for every mood. Don’t forget to try our bestseller—Choco Lava Cake, filled with gooey molten chocolate inside!', 'dessert.jpg', '2025-10-26 07:07:41'),
(6, 'Healthy Salad Bowls', 'Eating healthy doesn’t have to be boring! Our salad bowls combine fresh veggies, grains, and proteins into one delicious meal. Try our Greek Salad, Caesar Bowl, or Protein Power Mix. Each bowl is colorful, nutritious, and satisfying.', 'salad.jpg', '2025-10-26 07:07:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
