-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 30, 2019 at 10:21 PM
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
-- Dumping data for table `job_posting`
--

INSERT INTO `job_posting` (`id`, `base_salary_id`, `date_posted`, `employment_type`, `hiring_organization_id`, `job_location`, `title`, `valid_through`, `thing_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-09-30', 0, 1, 1, 'Frontend developer', '2019-10-31 00:00:00', 13, NULL, NULL),
(2, 1, '2019-10-01', 0, 1, 1, 'Full-stack developer', NULL, 14, NULL, NULL);

--
-- Dumping data for table `monetary_amount`
--

INSERT INTO `monetary_amount` (`id`, `currency`, `value_id`, `created_at`, `updated_at`) VALUES
(1, 'EUR', 1, NULL, NULL);

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
-- Dumping data for table `potential_action _google`
--

INSERT INTO `potential_action _google` (`id`, `google_web_site`, `google_search_action_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

--
-- Dumping data for table `property_value_specification`
--

INSERT INTO `property_value_specification` (`id`, `value_name`, `value_required`, `created_at`, `updated_at`) VALUES
(1, 'search_term_string', 1, NULL, NULL);

--
-- Dumping data for table `quantitative_value`
--

INSERT INTO `quantitative_value` (`id`, `unit_text`, `value`, `created_at`, `updated_at`) VALUES
(1, 'month', 3250, NULL, NULL);

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
-- Dumping data for table `search_action_google`
--

INSERT INTO `search_action_google` (`in`, `target`, `query-input`, `created_at`, `updated_at`) VALUES
(1, 'https://duodeka.nl/?s={search_term_string}', 1, NULL, NULL);

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `thing_id`, `created_at`, `updated_at`) VALUES
(1, 12, NULL, NULL);

--
-- Dumping data for table `thing`
--

INSERT INTO `thing` (`id`, `alternate_name`, `description`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'XII', '', 'DUODEKA', 'https://duodeka.nl', NULL, NULL),
(2, '', '', '', 'https://www.linkedin.com/in/klavrijssen', NULL, NULL),
(3, '', '', '', 'https://www.linkedin.com/in/rik-van-de-looi', NULL, NULL),
(4, '', '', '', 'https://www.linkedin.com/in/daanschoofs', NULL, NULL),
(5, '', '', '', 'https://www.linkedin.com/in/dion-duimel', NULL, NULL),
(6, '', '', '', 'https://www.linkedin.com/in/david-schulpen', NULL, NULL),
(7, '', '', '', 'https://www.linkedin.com/in/emiel-popelier-870732177', NULL, NULL),
(8, '', '', '', 'https://www.linkedin.com/in/sven-zahharov-a82507158', NULL, NULL),
(9, '', '', '', 'https://www.linkedin.com/in/thijsdejong1995', NULL, NULL),
(10, '', '', '', 'https://www.linkedin.com/in/wesleyvanbergen', NULL, NULL),
(11, '', '', 'Mr. Winston', NULL, NULL, NULL),
(12, '', '', 'DUODEKA - Venture Builder | Digital Transformer', 'https://duodeka.nl', NULL, NULL),
(13, '', '<p>DUODEKA is a Venture Builder started by IT entrepreneurs from Tilburg. We specialize in devising, validating and developing digital products, apps and platforms.</p>\r\n<p>Together with entrepreneurs, we develop digital products that are marketed as a separate company.</p>\r\n<p>On the one hand, we devise, develop and market our own digital concepts. On the other hand, we develop digital products for SME that digitally transform a business model.</p>\r\n<p>To strengthen our current team, we are looking for a (English) frontend developer in Tilburg.</p>\r\n<p>Job description<br />\r\nAs a (English) frontend developer in Tilburg at DUODEKA you have the opportunity to participate fully in all projects; both for the customer and our own products. These are mainly developed in React or Vue.js (frontend) and Laravel or Meteor (backend).</p>\r\n<p>You translate the visual wishes into concrete functionality and design. You understand the flow of an application and can transform it into a perfect UX. You see that the complexity of applications nowadays is shifting more and more from the backend to the frontend and you are not afraid to take on the associated challenges.</p>\r\n<p><em>Do you like all of this? Then read on!</em></p>\r\n<p><strong>Our MoSCoW list (job requirements)</strong><br />\r\n<em>Must haves</em></p>\r\n<ul>\r\n<li>Good command of the Dutch and English language</li>\r\n<li>Experience with frontend JavaScript frameworks (React, Vue.js)</li>\r\n<li>Very skilled with HTML, css / sass</li>\r\n<li>A good eye for UI / UX and Design</li>\r\n<li>Being able to solve problems independently</li>\r\n</ul>\r\n<p><em>Should haves</em></p>\r\n<ul>\r\n<li>Experience with GIT (or other VCS)</li>\r\n<li>Translate customer wishes into concrete developments</li>\r\n<li>Understanding of commercial and business processes</li>\r\n</ul>\r\n<p><em>(very) Nice to have</em><br />\r\nExperience with:</p>\r\n<ul>\r\n<li>API interfacing (GraphQL or REST)</li>\r\n<li>Laravel, MeteorJS</li>\r\n<li>SQL (MySQL) or NoSQL (MongoDB) databases</li>\r\n<li>Database design, application structures and design patterns</li>\r\n<li>Project management (tools such as JIRA)</li>\r\n<li>WordPress</li>\r\n</ul>\r\n<p><strong>We offer</strong></p>\r\n<ul>\r\n<li>Working in a young company consisting of digital entrepreneurs and programmers</li>\r\n<li>Working on custom projects and own SaaS products in the latest technologies</li>\r\n<li>A continuous focus on software development that supports (new) revenue models</li>\r\n<li>Working with ambitious colleagues who always want to learn new things</li>\r\n<li>Fast career opportunities as a project manager, team lead, business analyst and / or product owner</li>\r\n<li>Lots of room for innovation, research and personal contribution</li>\r\n<li>Business laptop</li>\r\n<li>Every Friday: Vrijmibo</li>\r\n<li>LAN party events</li>\r\n</ul>\r\n<p><strong>Job application</strong><br />\r\nAre you interested in this vacancy and does the profile of (English) frontend developer in Tilburg suit you? Then we would love to hear from you. For more information you can contact Daan Schoofs via the telephone number <strong>06 535 869 00</strong> or via email at <strong><a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"92f6f3f3fcd2f6e7fdf6f7f9f3bcfcfe\">[email&#160;protected]</a></strong>.</p>\r\n<p><strong>About DUODEKA</strong><br />\r\nOur team has years of experience with web development (Laravel, Meteor, React, Vue.js) and entrepreneurship. Our team also has expertise in UX / UI, sales and marketing.</p>\r\n<p>Do you find it cool to help companies take the next step in digital transformation and develop a new business? Then you have come to the right place. Our commercial software team mainly develops in PHP (Laravel) and Javascript (Meteor). For this we use frontend frameworks such as ReactJS and Vue.JS. Furthermore, we naturally work with programs such as JIRA, Git, Adobe XD, InVision and Visual Studio Code.</p>\r\n<p>If you want to know more about the projects in which you are going to work, have a look at <a href=\"https://duodeka.nl\">https://duodeka.nl</a>.</p>\r\n', 'Frontend developer in Tilburg', 'https://duodeka.nl/vacature/english-frontend-developer-in-tilburg', NULL, NULL),
(14, '', '<p>DUODEKA is a Venture Builder started by IT entrepreneurs from Tilburg. We specialize in devising, validating and developing digital products, apps and platforms.</p>\r\n<p>Together with entrepreneurs, we develop digital products that are marketed as a separate company.</p>\r\n<p>On the one hand, we devise, develop and market our own digital concepts. On the other hand, we develop digital products for SME that digitally transform a business model.</p>\r\n<p>To strengthen our current team, we are looking for a (English) full-stack developer in Tilburg.</p>\r\n<p><strong>Job description</strong><br />\r\nAs a (English) full-stack developer in Tilburg at DUODEKA you directly participate in a wide range of projects, including both customized assignments and our own SaaS products. You develop functionality based on the defined requirements and you are a valuable part of the development team. We mainly develop in Laravel or Meteor (backend) and React or Vue.js (frontend).</p>\r\n<p>In addition, we offer the opportunity to quickly grow into a management position (team lead, project manager) or to grow as a business analyst (intake, database design, requirements). In short, a lot of room for (software) development!</p>\r\n<p><em>Do you like all  of this? Then read on!</em></p>\r\n<p><strong>Our MoSCoW list (job requirements)</strong><br />\r\n<em>Must haves</em></p>\r\n<ul>\r\n<li>Good command of the Dutch and English language</li>\r\n<li>A strong understanding of OOP within a modern MVC framework</li>\r\n<li>Experience with SQL (MySQL) or NoSQL (MongoDB) databases</li>\r\n<li>Experience with front-end JavaScript frameworks (React, Vue.js)</li>\r\n<li>Being able to solve problems independently</li>\r\n</ul>\r\n<p><em>Should haves</em></p>\r\n<ul>\r\n<li>Experience with GIT (or other VCS)</li>\r\n<li>Experience with API interfacing (GraphQL or REST)</li>\r\n<li>Understanding of commercial and business processes</li>\r\n</ul>\r\n<p><em>(very) Nice to have</em><br />\r\nExperience with:</p>\r\n<ul>\r\n<li>Laravel, MeteorJS</li>\r\n<li>Project management (tools such as JIRA)</li>\r\n<li>Database design, application structures and design patterns</li>\r\n<li>Translate customer wishes into concrete developments</li>\r\n</ul>\r\n<p><strong>We offer</strong></p>\r\n<ul>\r\n<li>Working in a young company consisting of digital entrepreneurs and programmers</li>\r\n<li>Working on custom projects and own SaaS products in the latest technologies</li>\r\n<li>A continuous focus on software development that supports (new) revenue models</li>\r\n<li>Working with ambitious colleagues who always want to learn new things</li>\r\n<li>Fast career opportunities as a project manager, team lead, business analyst and / or product owner</li>\r\n<li>Lots of room for innovation, research and personal contribution</li>\r\n<li>Business laptop</li>\r\n<li>Every Friday: Vrijmibo</li>\r\n<li>LAN party events</li>\r\n</ul>\r\n<p><strong>Job application</strong><br />\r\nAre you interested in this vacancy and does the profile of (English) full-stack developer in Tilburg suit you? Then we would love to hear from you. For more information you can contact Daan Schoofs via the telephone number <strong>06 535 869 00</strong> or via email at <strong><a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"543035353a1430213b30313f357a3a38\">[email&#160;protected]</a></strong>.</p>\r\n<p><strong>About DUODEKA</strong><br />\r\nOur team has years of experience with web development (Laravel, Meteor, React, Vue.js) and entrepreneurship. Our team also has expertise in UX / UI, sales and marketing.</p>\r\n<p>Do you find it cool to help companies take the next step in digital transformation and develop a new business? Then you have come to the right place. Our commercial software team mainly develops in PHP (Laravel) and Javascript (Meteor). For this we use frontend frameworks such as ReactJS and Vue.JS. Furthermore, we naturally work with programs such as JIRA, Git, Adobe XD, InVision and Visual Studio Code.</p>\r\n<p>If you want to know more about the projects in which you are going to work, have a look at <a href=\"https://duodeka.nl\">https://duodeka.nl</a>.</p>\r\n', 'Full-stack developer in Tilburg', 'https://duodeka.nl/vacature/english-full-stack-developer-in-tilburg', NULL, NULL);

--
-- Dumping data for table `web_site`
--

INSERT INTO `web_site` (`id`, `site_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

--
-- Dumping data for table `web_site_google`
--

INSERT INTO `web_site_google` (`id`, `site_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
