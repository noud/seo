-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 25, 2019 at 08:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schema-org`
--

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(6, NULL, NULL),
(9, NULL, NULL);

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `organization_id`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(1, 2, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(9, 2, 9, NULL, NULL),
(6, 2, 6, NULL, NULL);

--
-- Dumping data for table `founder`
--

INSERT INTO `founder` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL);

--
-- Dumping data for table `founders`
--

INSERT INTO `founders` (`id`, `organization_id`, `founder_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL);

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `logo`, `telephone`, `thing_id`, `created_at`, `updated_at`) VALUES
(1, 'http://duodeka.nl/app/uploads/2018/11/duodeka-logo-blue.png', '132032264', 1, NULL, NULL),
(2, '', '', 11, NULL, NULL);

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `given_name`, `family_name`, `email`, `telephone`, `thing_id`, `created_at`, `updated_at`) VALUES
(1, 'Koen', 'Lavrijssen', 'koen@duodeka.nl', '622783833', 2, NULL, NULL),
(2, 'Rik', 'van de Looi', 'rik@doodeka.nl', '620992844', 3, NULL, NULL),
(3, 'Daan', 'Schoofs', 'daan@duodeka.nl', '653586900', 4, NULL, NULL),
(4, 'Dion', 'Duimel', 'dion@duodeka.nl', '644810461', 5, NULL, NULL),
(5, 'David', 'Schulpen', 'david@duodeka.nl', '', 6, NULL, NULL),
(6, 'Emiel', 'Popelier', 'emiel@duodeka.nl', '651269639', 7, NULL, NULL),
(7, 'Joey', 'Maas', 'joey@duodeka.nl', '643720659', NULL, NULL, NULL),
(8, 'Sven', 'Zahharov', 'sven@duodeka.nl', '613782844', 8, NULL, NULL),
(9, 'Thijs', 'de Jong', 'thijs@mrwinston.nl', '644870767', 9, NULL, NULL),
(10, 'Wesley', 'van Bergen', 'wesley@mrwinston.nl', '642577524', 10, NULL, NULL);

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `person_id`, `roleable_id`, `roleable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'App\\Models\\Employee', NULL, NULL),
(2, 2, 2, 'App\\Models\\Employee', NULL, NULL),
(3, 1, 1, 'App\\Models\\Founder', NULL, NULL),
(4, 2, 2, 'App\\Models\\Founder', NULL, NULL),
(5, 3, 3, 'App\\Models\\Founder', NULL, NULL),
(6, 4, 4, 'App\\Models\\Founder', NULL, NULL),
(7, 6, 6, 'App\\Models\\Employee', NULL, NULL),
(8, 9, 9, 'App\\Models\\Employee', NULL, NULL);

--
-- Dumping data for table `same_as`
--

INSERT INTO `same_as` (`id`, `thing_id`, `url_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 2, 5, NULL, NULL),
(5, 3, 6, NULL, NULL),
(6, 4, 7, NULL, NULL),
(7, 5, 8, NULL, NULL),
(8, 6, 9, NULL, NULL),
(9, 7, 10, NULL, NULL),
(10, 8, 11, NULL, NULL),
(11, 9, 12, NULL, NULL),
(12, 10, 13, NULL, NULL);

--
-- Dumping data for table `thing`
--

INSERT INTO `thing` (`id`, `url_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'DUODEKA Coöperatie U.A.', NULL, NULL),
(2, NULL, '', NULL, NULL),
(3, NULL, '', NULL, NULL),
(4, NULL, '', NULL, NULL),
(5, NULL, '', NULL, NULL),
(6, NULL, '', NULL, NULL),
(7, NULL, '', NULL, NULL),
(8, NULL, '', NULL, NULL),
(9, NULL, '', NULL, NULL),
(10, NULL, '', NULL, NULL),
(11, NULL, 'Mr. Winston', NULL, NULL);

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id`, `protocol`, `host`, `port`, `uri`, `created_at`, `updated_at`) VALUES
(1, 'https', 'duodeka.nl', NULL, NULL, NULL, NULL),
(2, 'https', 'www.facebook.com', NULL, 'duodeka', NULL, NULL),
(3, 'https', 'www.instagram.com', NULL, 'duodeka', NULL, NULL),
(4, 'https', 'www.linkedin.com', NULL, 'company/duodeka', NULL, NULL),
(5, 'https', 'www.linkedin.com', NULL, 'in/klavrijssen', NULL, NULL),
(6, 'https', 'www.linkedin.com', NULL, 'in/rik-van-de-looi', NULL, NULL),
(7, 'https', 'www.linkedin.com', NULL, 'in/daanschoofs', NULL, NULL),
(8, 'https', 'www.linkedin.com', NULL, 'in/dion-duimel', NULL, NULL),
(9, 'https', 'www.linkedin.com', NULL, 'in/david-schulpen', NULL, NULL),
(10, 'https', 'www.linkedin.com', NULL, 'in/emiel-popelier-870732177', NULL, NULL),
(11, 'https', 'www.linkedin.com', NULL, 'in/sven-zahharov-a82507158', NULL, NULL),
(12, 'https', 'www.linkedin.com', NULL, 'in/thijsdejong1995', NULL, NULL),
(13, 'https', 'www.linkedin.com', NULL, 'in/wesleyvanbergen', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
