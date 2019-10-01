-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 01, 2019 at 08:47 PM
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

INSERT INTO `job_posting` (`id`, `base_salary_id`, `date_posted`, `employment_type`, `hiring_organization_id`, `job_location`, `title`, `valid_through`, `thing_id`, `job_location_type`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-09-30', 0, 1, 1, 'Frontend developer', '2019-10-31 00:00:00', 13, 0, NULL, NULL),
(2, 1, '2019-10-01', 0, 1, 1, 'Full-stack developer', NULL, 14, 0, NULL, NULL);

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
(1, 'NL', 'Tilburg', 'NB', NULL, '5017HR', 'Tivolistraat 50-52', NULL, NULL);

--
-- Dumping data for table `potential_action _google`
--

INSERT INTO `potential_action _google` (`id`, `google_web_site`, `google_search_action_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

--
-- Dumping data for table `property_value`
--

INSERT INTO `property_value` (`id`, `value`, `thing_id`, `created_at`, `updated_at`) VALUES
(1, 'http://duodeka.nl/?post_type=job_listing&\r\np=3713', 15, NULL, NULL),
(2, 'http://duodeka.nl/?post_type=job_listing&\r\np=3714', 15, NULL, NULL);

--
-- Dumping data for table `property_value_specification`
--

INSERT INTO `property_value_specification` (`id`, `value_name`, `value_required`, `created_at`, `updated_at`) VALUES
(1, 'search_term_string', 1, NULL, NULL);

--
-- Dumping data for table `quantitative_value`
--

INSERT INTO `quantitative_value` (`id`, `unit_text`, `value`, `created_at`, `updated_at`) VALUES
(1, 'MONTH', 3250, NULL, NULL);

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

INSERT INTO `thing` (`id`, `alternate_name`, `description`, `name`, `url`, `identifier_id`, `created_at`, `updated_at`) VALUES
(1, 'XII', '', 'DUODEKA', 'https://duodeka.nl', NULL, NULL, NULL),
(2, '', '', '', 'https://www.linkedin.com/in/klavrijssen', NULL, NULL, NULL),
(3, '', '', '', 'https://www.linkedin.com/in/rik-van-de-looi', NULL, NULL, NULL),
(4, '', '', '', 'https://www.linkedin.com/in/daanschoofs', NULL, NULL, NULL),
(5, '', '', '', 'https://www.linkedin.com/in/dion-duimel', NULL, NULL, NULL),
(6, '', '', '', 'https://www.linkedin.com/in/david-schulpen', NULL, NULL, NULL),
(7, '', '', '', 'https://www.linkedin.com/in/emiel-popelier-870732177', NULL, NULL, NULL),
(8, '', '', '', 'https://www.linkedin.com/in/sven-zahharov-a82507158', NULL, NULL, NULL),
(9, '', '', '', 'https://www.linkedin.com/in/thijsdejong1995', NULL, NULL, NULL),
(10, '', '', '', 'https://www.linkedin.com/in/wesleyvanbergen', NULL, NULL, NULL),
(11, '', '', 'Mr. Winston', NULL, NULL, NULL, NULL),
(12, '', '', 'DUODEKA - Venture Builder | Digital Transformer', 'https://duodeka.nl', NULL, NULL, NULL),
(13, '', '&lt;p&gt;DUODEKA is a Venture Builder started by IT entrepreneurs from Tilburg. We specialize in devising, validating and developing digital products, apps and platforms.&lt;\\/p&gt;\\n&lt;p&gt;Together with entrepreneurs, we develop digital products that are marketed as a separate company.&lt;\\/p&gt;\\n&lt;p&gt;On the one hand, we devise, develop and market our own digital concepts. On the other hand, we develop digital products for SME that digitally transform a business model.&lt;\\/p&gt;\\n&lt;p&gt;To strengthen our current team, we are looking for a (English) frontend developer in Tilburg.&lt;\\/p&gt;\\n&lt;p&gt;Job description&lt;br \\/&gt;\\nAs a (English) frontend developer in Tilburg at DUODEKA you have the opportunity to participate fully in all projects; both for the customer and our own products. These are mainly developed in React or Vue.js (frontend) and Laravel or Meteor (backend).&lt;\\/p&gt;\\n&lt;p&gt;You translate the visual wishes into concrete functionality and design. You understand the flow of an application and can transform it into a perfect UX. You see that the complexity of applications nowadays is shifting more and more from the backend to the frontend and you are not afraid to take on the associated challenges.&lt;\\/p&gt;\\n&lt;p&gt;&lt;em&gt;Do you like all of this? Then read on!&lt;\\/em&gt;&lt;\\/p&gt;\\n&lt;p&gt;&lt;strong&gt;Our MoSCoW list (job requirements)&lt;\\/strong&gt;&lt;br \\/&gt;\\n&lt;em&gt;Must haves&lt;\\/em&gt;&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;Good command of the Dutch and English language&lt;\\/li&gt;\\n&lt;li&gt;Experience with frontend JavaScript frameworks (React, Vue.js)&lt;\\/li&gt;\\n&lt;li&gt;Very skilled with HTML, css \\/ sass&lt;\\/li&gt;\\n&lt;li&gt;A good eye for UI \\/ UX and Design&lt;\\/li&gt;\\n&lt;li&gt;Being able to solve problems independently&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;em&gt;Should haves&lt;\\/em&gt;&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;Experience with GIT (or other VCS)&lt;\\/li&gt;\\n&lt;li&gt;Translate customer wishes into concrete developments&lt;\\/li&gt;\\n&lt;li&gt;Understanding of commercial and business processes&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;em&gt;(very) Nice to have&lt;\\/em&gt;&lt;br \\/&gt;\\nExperience with:&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;API interfacing (GraphQL or REST)&lt;\\/li&gt;\\n&lt;li&gt;Laravel, MeteorJS&lt;\\/li&gt;\\n&lt;li&gt;SQL (MySQL) or NoSQL (MongoDB) databases&lt;\\/li&gt;\\n&lt;li&gt;Database design, application structures and design patterns&lt;\\/li&gt;\\n&lt;li&gt;Project management (tools such as JIRA)&lt;\\/li&gt;\\n&lt;li&gt;Wordpress&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;strong&gt;We offer&lt;\\/strong&gt;&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;Working in a young company consisting of digital entrepreneurs and programmers&lt;\\/li&gt;\\n&lt;li&gt;Working on custom projects and own SaaS products in the latest technologies&lt;\\/li&gt;\\n&lt;li&gt;A continuous focus on software development that supports (new) revenue models&lt;\\/li&gt;\\n&lt;li&gt;Working with ambitious colleagues who always want to learn new things&lt;\\/li&gt;\\n&lt;li&gt;Fast career opportunities as a project manager, team lead, business analyst and \\/ or product owner&lt;\\/li&gt;\\n&lt;li&gt;Lots of room for innovation, research and personal contribution&lt;\\/li&gt;\\n&lt;li&gt;Business laptop&lt;\\/li&gt;\\n&lt;li&gt;Every Friday: Vrijmibo&lt;\\/li&gt;\\n&lt;li&gt;LAN party events&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;strong&gt;Job application&lt;\\/strong&gt;&lt;br \\/&gt;\\nAre you interested in this vacancy and does the profile of (English) frontend developer in Tilburg suit you? Then we would love to hear from you. For more information you can contact Daan Schoofs via the telephone number &lt;strong&gt;06 535 869 00&lt;\\/strong&gt; or via email at &lt;strong&gt;daan@duodeka.nl&lt;\\/strong&gt;.&lt;\\/p&gt;\\n&lt;p&gt;&lt;strong&gt;About DUODEKA&lt;\\/strong&gt;&lt;br \\/&gt;\\nOur team has years of experience with web development (Laravel, Meteor, React, Vue.js) and entrepreneurship. Our team also has expertise in UX \\/ UI, sales and marketing.&lt;\\/p&gt;\\n&lt;p&gt;Do you find it cool to help companies take the next step in digital transformation and develop a new business? Then you have come to the right place. Our commercial software team mainly develops in PHP (Laravel) and Javascript (Meteor). For this we use frontend frameworks such as ReactJS and Vue.JS. Furthermore, we naturally work with programs such as JIRA, Git, Adobe XD, InVision and Visual Studio Code.&lt;\\/p&gt;\\n&lt;p&gt;If you want to know more about the projects in which you are going to work, have a look at &lt;a href=\\\"https:\\/\\/duodeka.nl\\\"&gt;https:\\/\\/duodeka.nl&lt;\\/a&gt;.&lt;\\/p&gt;\\n', 'Frontend developer in Tilburg', 'https://duodeka.nl/vacature/english-frontend-developer-in-tilburg', 2, NULL, NULL),
(14, '', '&lt;p&gt;DUODEKA is a Venture Builder started by IT entrepreneurs from Tilburg. We specialize in devising, validating and developing digital products, apps and platforms.&lt;\\/p&gt;\\n&lt;p&gt;Together with entrepreneurs, we develop digital products that are marketed as a separate company.&lt;\\/p&gt;\\n&lt;p&gt;On the one hand, we devise, develop and market our own digital concepts. On the other hand, we develop digital products for SME that digitally transform a business model.&lt;\\/p&gt;\\n&lt;p&gt;To strengthen our current team, we are looking for a (English) full-stack developer in Tilburg.&lt;\\/p&gt;\\n&lt;p&gt;&lt;strong&gt;Job description&lt;\\/strong&gt;&lt;br \\/&gt;\\nAs a (English) full-stack developer in Tilburg at DUODEKA you directly participate in a wide range of projects, including both customized assignments and our own SaaS products. You develop functionality based on the defined requirements and you are a valuable part of the development team. We mainly develop in Laravel or Meteor (backend) and React or Vue.js (frontend).&lt;\\/p&gt;\\n&lt;p&gt;In addition, we offer the opportunity to quickly grow into a management position (team lead, project manager) or to grow as a business analyst (intake, database design, requirements). In short, a lot of room for (software) development!&lt;\\/p&gt;\\n&lt;p&gt;&lt;em&gt;Do you like all\\u00a0 of this? Then read on!&lt;\\/em&gt;&lt;\\/p&gt;\\n&lt;p&gt;&lt;strong&gt;Our MoSCoW list (job requirements)&lt;\\/strong&gt;&lt;br \\/&gt;\\n&lt;em&gt;Must haves&lt;\\/em&gt;&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;Good command of the Dutch and English language&lt;\\/li&gt;\\n&lt;li&gt;A strong understanding of OOP within a modern MVC framework&lt;\\/li&gt;\\n&lt;li&gt;Experience with SQL (MySQL) or NoSQL (MongoDB) databases&lt;\\/li&gt;\\n&lt;li&gt;Experience with front-end JavaScript frameworks (React, Vue.js)&lt;\\/li&gt;\\n&lt;li&gt;Being able to solve problems independently&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;em&gt;Should haves&lt;\\/em&gt;&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;Experience with GIT (or other VCS)&lt;\\/li&gt;\\n&lt;li&gt;Experience with API interfacing (GraphQL or REST)&lt;\\/li&gt;\\n&lt;li&gt;Understanding of commercial and business processes&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;em&gt;(very) Nice to have&lt;\\/em&gt;&lt;br \\/&gt;\\nExperience with:&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;Laravel, MeteorJS&lt;\\/li&gt;\\n&lt;li&gt;Project management (tools such as JIRA)&lt;\\/li&gt;\\n&lt;li&gt;Database design, application structures and design patterns&lt;\\/li&gt;\\n&lt;li&gt;Translate customer wishes into concrete developments&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;strong&gt;We offer&lt;\\/strong&gt;&lt;\\/p&gt;\\n&lt;ul&gt;\\n&lt;li&gt;Working in a young company consisting of digital entrepreneurs and programmers&lt;\\/li&gt;\\n&lt;li&gt;Working on custom projects and own SaaS products in the latest technologies&lt;\\/li&gt;\\n&lt;li&gt;A continuous focus on software development that supports (new) revenue models&lt;\\/li&gt;\\n&lt;li&gt;Working with ambitious colleagues who always want to learn new things&lt;\\/li&gt;\\n&lt;li&gt;Fast career opportunities as a project manager, team lead, business analyst and \\/ or product owner&lt;\\/li&gt;\\n&lt;li&gt;Lots of room for innovation, research and personal contribution&lt;\\/li&gt;\\n&lt;li&gt;Business laptop&lt;\\/li&gt;\\n&lt;li&gt;Every Friday: Vrijmibo&lt;\\/li&gt;\\n&lt;li&gt;LAN party events&lt;\\/li&gt;\\n&lt;\\/ul&gt;\\n&lt;p&gt;&lt;strong&gt;Job application&lt;\\/strong&gt;&lt;br \\/&gt;\\nAre you interested in this vacancy and does the profile of (English) full-stack developer in Tilburg suit you? Then we would love to hear from you. For more information you can contact Daan Schoofs via the telephone number &lt;strong&gt;06 535 869 00&lt;\\/strong&gt; or via email at &lt;strong&gt;daan@duodeka.nl&lt;\\/strong&gt;.&lt;\\/p&gt;\\n&lt;p&gt;&lt;strong&gt;About DUODEKA&lt;\\/strong&gt;&lt;br \\/&gt;\\nOur team has years of experience with web development (Laravel, Meteor, React, Vue.js) and entrepreneurship. Our team also has expertise in UX \\/ UI, sales and marketing.&lt;\\/p&gt;\\n&lt;p&gt;Do you find it cool to help companies take the next step in digital transformation and develop a new business? Then you have come to the right place. Our commercial software team mainly develops in PHP (Laravel) and Javascript (Meteor). For this we use frontend frameworks such as ReactJS and Vue.JS. Furthermore, we naturally work with programs such as JIRA, Git, Adobe XD, InVision and Visual Studio Code.&lt;\\/p&gt;\\n&lt;p&gt;If you want to know more about the projects in which you are going to work, have a look at &lt;a href=\\\"https:\\/\\/duodeka.nl\\\"&gt;https:\\/\\/duodeka.nl&lt;\\/a&gt;.&lt;\\/p&gt;\\n', 'Full-stack developer in Tilburg', 'https://duodeka.nl/vacature/english-full-stack-developer-in-tilburg', 1, NULL, NULL),
(15, '', '', 'DUODEKA', NULL, NULL, NULL, NULL);

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
