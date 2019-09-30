-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 27, 2019 at 08:32 PM
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
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL);

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `organization_id`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(1, 2, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(9, 2, 9, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(10, 2, 10, NULL, NULL),
(5, 1, 5, NULL, NULL);

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

INSERT INTO `organization` (`id`, `address_id`, `email`, `legal_name`, `location_id`, `logo`, `telephone`, `thing_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'info@duodeka.nl', 'DUODEKA Coöperatie U.A.', 1, 'http://duodeka.nl/app/uploads/2018/11/duodeka-logo-blue.png', '132032264', 1, NULL, NULL),
(2, 0, NULL, '', 0, '', '', 11, NULL, NULL);

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `additional_name`, `address_id`, `email`, `family_name`, `given_name`, `telephone`, `thing_id`, `created_at`, `updated_at`) VALUES
(1, '', 0, 'koen@duodeka.nl', 'Lavrijssen', 'Koen', '622783833', 2, NULL, NULL),
(2, 'van de', 0, 'rik@doodeka.nl', 'Looi', 'Rik', '620992844', 3, NULL, NULL),
(3, '', 0, 'daan@duodeka.nl', 'Schoofs', 'Daan', '653586900', 4, NULL, NULL),
(4, '', 0, 'dion@duodeka.nl', 'Duimel', 'Dion', '644810461', 5, NULL, NULL),
(5, '', 0, 'david@duodeka.nl', 'Schulpen', 'David', '', 6, NULL, NULL),
(6, '', 0, 'emiel@duodeka.nl', 'Popelier', 'Emiel', '651269639', 7, NULL, NULL),
(7, '', 0, 'joey@duodeka.nl', 'Maas', 'Joey', '643720659', NULL, NULL, NULL),
(8, '', 0, 'sven@duodeka.nl', 'Zahharov', 'Sven', '613782844', 8, NULL, NULL),
(9, 'de', 0, 'thijs@mrwinston.nl', 'Jong', 'Thijs', '644870767', 9, NULL, NULL),
(10, 'van', 0, 'wesley@mrwinston.nl', 'Bergen', 'Wesley', '642577524', 10, NULL, NULL);

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `address_id`, `geo_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL);

--
-- Dumping data for table `postal_address`
--

INSERT INTO `postal_address` (`id`, `address_country`, `address_locality`, `address_region`, `post_office_box_number`, `postal_code`, `street_address`, `created_at`, `updated_at`) VALUES
(1, 'NL', 'Tilburg', NULL, NULL, '5017HR', 'Tivolistraat 50-52', NULL, NULL);

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
(8, 9, 9, 'App\\Models\\Employee', NULL, NULL),
(9, 7, 7, 'App\\Models\\Employee', NULL, NULL),
(10, 8, 8, 'App\\Models\\Employee', NULL, NULL),
(11, 10, 10, 'App\\Models\\Employee', NULL, NULL),
(12, 5, 5, 'App\\Models\\Employee', NULL, NULL);

--
-- Dumping data for table `same_as`
--

INSERT INTO `same_as` (`id`, `thing_id`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://www.facebook.com/duodeka', NULL, NULL),
(2, 1, 'https://www.instagram.com/duodeka', NULL, NULL),
(3, 1, 'https://www.linkedin.com/company/duodeka', NULL, NULL);

--
-- Dumping data for table `thing`
--

INSERT INTO `thing` (`id`, `alternate_name`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'XII', 'DUODEKA', 'https://duodeka.nl', NULL, NULL),
(2, '', '', 'https://www.linkedin.com/in/klavrijssen', NULL, NULL),
(3, '', '', 'https://www.linkedin.com/in/rik-van-de-looi', NULL, NULL),
(4, '', '', 'https://www.linkedin.com/in/daanschoofs', NULL, NULL),
(5, '', '', 'https://www.linkedin.com/in/dion-duimel', NULL, NULL),
(6, '', '', 'https://www.linkedin.com/in/david-schulpen', NULL, NULL),
(7, '', '', 'https://www.linkedin.com/in/emiel-popelier-870732177', NULL, NULL),
(8, '', '', 'https://www.linkedin.com/in/sven-zahharov-a82507158', NULL, NULL),
(9, '', '', 'https://www.linkedin.com/in/thijsdejong1995', NULL, NULL),
(10, '', '', 'https://www.linkedin.com/in/wesleyvanbergen', NULL, NULL),
(11, '', 'Mr. Winston', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
