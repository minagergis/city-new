-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2017 at 05:38 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitree_citystars`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `media` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`, `media`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'properties', NULL, NULL, '2017-05-20 17:55:22', '2017-05-20 17:55:22'),
(2, 'properties', NULL, NULL, '2017-05-20 17:56:14', '2017-05-20 17:56:14'),
(3, 'properties', NULL, NULL, '2017-05-20 17:57:02', '2017-05-20 17:57:02'),
(4, 'properties', NULL, NULL, '2017-05-20 17:57:47', '2017-05-20 17:57:47'),
(5, 'awards', NULL, NULL, '2017-05-29 14:51:25', '2017-05-29 14:51:25'),
(6, 'awards', NULL, NULL, '2017-05-29 14:52:14', '2017-05-29 14:52:14'),
(7, 'awards', NULL, NULL, '2017-05-29 14:53:13', '2017-05-29 14:53:13'),
(8, 'gallary', NULL, NULL, '2017-05-30 10:32:58', '2017-05-30 10:32:58'),
(9, 'gallary', NULL, NULL, '2017-05-30 10:33:40', '2017-05-30 10:33:40'),
(10, 'gallary', NULL, NULL, '2017-05-30 10:34:17', '2017-05-30 10:34:17'),
(11, 'gallary', NULL, NULL, '2017-05-30 10:35:01', '2017-05-30 10:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `author` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `name`, `slug`, `description`, `author`, `category_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Urban Resorts', 'urban-resorts', 'Urban Resorts', NULL, 1, 'en', NULL, NULL),
(2, 'Coastal Resorts', 'coastal-resorts', 'Coastal Resorts', NULL, 2, 'en', NULL, NULL),
(3, 'Gated Communities', 'gated-communities', 'Gated Communities', NULL, 3, 'en', NULL, NULL),
(4, 'Costal Retreats', 'costal-retreats', 'Costal Retreats', NULL, 4, 'en', NULL, NULL),
(5, 'كوستال ريتريتس', 'كوستال-ريتريتس', 'كوستال ريتريتس', NULL, 4, 'ar', NULL, NULL),
(6, 'المجتمعات المسورة', 'المجتمعات-المسورة', 'المجتمعات المسورة', NULL, 3, 'ar', NULL, NULL),
(7, 'منتجعات ساحليه', 'منتجعات-ساحليه', 'منتجعات ساحليه', NULL, 2, 'ar', NULL, NULL),
(8, 'المنتجعات الحضرية', 'المنتجعات-الحضرية', 'المنتجعات الحضرية', NULL, 1, 'ar', NULL, NULL),
(9, 'CityStars Hotel', 'CityStars-Hotel', 'Hotel Awards in 2014 InterContnental Cairo CityStars', NULL, 5, 'en', NULL, NULL),
(10, 'CityStars Properties Awards', 'CityStars-Properties-Awards', '', NULL, 6, 'en', NULL, NULL),
(11, 'CityStars Hotel', 'CityStars-Hotel-2', 'Hotels Awards in 2014 Holiday Inn Cairo CityStars', NULL, 7, 'en', NULL, NULL),
(12, 'Urban Resorts', 'urban-resorts-gallary', 'Urban Resorts', NULL, 8, 'en', NULL, NULL),
(13, 'Gated Communities', 'gated-communities-gallary', 'Gated Communities', NULL, 9, 'en', NULL, NULL),
(14, 'Coastal Resorts', 'coastal-resorts-gallary', 'Coastal Resorts', NULL, 10, 'en', NULL, NULL),
(15, 'Costal Retreats', 'coastal-retreats-gallary', 'Costal Retreats', NULL, 11, 'en', NULL, NULL),
(16, 'كوستال ريتريتس', 'صور-كوستال-ريتريتس', 'كوستال ريتريتس', NULL, 11, 'ar', NULL, NULL),
(17, 'منتجعات ساحليه', 'صور-منتجعات-ساحليه', 'منتجعات ساحليه', NULL, 10, 'ar', NULL, NULL),
(18, 'المجتمعات المسورة', 'صور-منتجعات-ساحليه', 'المجتمعات المسورة', NULL, 9, 'ar', NULL, NULL),
(19, 'المنتجعات الحضرية', 'صور-المنتجعات-الحضرية', 'المنتجعات الحضرية', NULL, 8, 'ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city_translations`
--

CREATE TABLE `city_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `obj_id` int(10) UNSIGNED NOT NULL,
  `obj_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_author_IP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_approved` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_parent` int(11) DEFAULT NULL,
  `comment_author` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `code2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `continent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `code`, `code2`, `status`, `continent`, `created_at`, `updated_at`) VALUES
(1, 'ABW', 'AW', 'active', '3', NULL, NULL),
(2, 'AFG', 'AF', 'active', '2', NULL, NULL),
(3, 'AGO', 'AO', 'active', '1', NULL, NULL),
(4, 'AIA', 'AI', 'active', '3', NULL, NULL),
(5, 'ALB', 'AL', 'active', '5', NULL, NULL),
(6, 'AND', 'AD', 'active', '5', NULL, NULL),
(7, 'ANT', 'AN', 'active', '3', NULL, NULL),
(8, 'ARE', 'AE', 'active', '2', NULL, NULL),
(9, 'ARG', 'AR', 'active', '4', NULL, NULL),
(10, 'ARM', 'AM', 'active', '2', NULL, NULL),
(11, 'ASM', 'AS', 'active', '6', NULL, NULL),
(12, 'ATA', 'AQ', 'active', '7', NULL, NULL),
(13, 'ATF', 'TF', 'active', '7', NULL, NULL),
(14, 'ATG', 'AG', 'active', '3', NULL, NULL),
(15, 'AUS', 'AU', 'active', '6', NULL, NULL),
(16, 'AUT', 'AT', 'active', '5', NULL, NULL),
(17, 'AZE', 'AZ', 'active', '2', NULL, NULL),
(18, 'BDI', 'BI', 'active', '1', NULL, NULL),
(19, 'BEL', 'BE', 'active', '5', NULL, NULL),
(20, 'BEN', 'BJ', 'active', '1', NULL, NULL),
(21, 'BFA', 'BF', 'active', '1', NULL, NULL),
(22, 'BGD', 'BD', 'active', '2', NULL, NULL),
(23, 'BGR', 'BG', 'active', '5', NULL, NULL),
(24, 'BHR', 'BH', 'active', '2', NULL, NULL),
(25, 'BHS', 'BS', 'active', '3', NULL, NULL),
(26, 'BIH', 'BA', 'active', '5', NULL, NULL),
(27, 'BLR', 'BY', 'active', '5', NULL, NULL),
(28, 'BLZ', 'BZ', 'active', '3', NULL, NULL),
(29, 'BMU', 'BM', 'active', '3', NULL, NULL),
(30, 'BOL', 'BO', 'active', '4', NULL, NULL),
(31, 'BRA', 'BR', 'active', '4', NULL, NULL),
(32, 'BRB', 'BB', 'active', '3', NULL, NULL),
(33, 'BRN', 'BN', 'active', '2', NULL, NULL),
(34, 'BTN', 'BT', 'active', '2', NULL, NULL),
(35, 'BVT', 'BV', 'active', '7', NULL, NULL),
(36, 'BWA', 'BW', 'active', '1', NULL, NULL),
(37, 'CAF', 'CF', 'active', '1', NULL, NULL),
(38, 'CAN', 'CA', 'active', '3', NULL, NULL),
(39, 'CCK', 'CC', 'active', '6', NULL, NULL),
(40, 'CHE', 'CH', 'active', '5', NULL, NULL),
(41, 'CHL', 'CL', 'active', '4', NULL, NULL),
(42, 'CHN', 'CN', 'active', '2', NULL, NULL),
(43, 'CIV', 'CI', 'active', '1', NULL, NULL),
(44, 'CMR', 'CM', 'active', '1', NULL, NULL),
(45, 'COD', 'CD', 'active', '1', NULL, NULL),
(46, 'COG', 'CG', 'active', '1', NULL, NULL),
(47, 'COK', 'CK', 'active', '6', NULL, NULL),
(48, 'COL', 'CO', 'active', '4', NULL, NULL),
(49, 'COM', 'KM', 'active', '1', NULL, NULL),
(50, 'CPV', 'CV', 'active', '1', NULL, NULL),
(51, 'CRI', 'CR', 'active', '3', NULL, NULL),
(52, 'CUB', 'CU', 'active', '3', NULL, NULL),
(53, 'CXR', 'CX', 'active', '6', NULL, NULL),
(54, 'CYM', 'KY', 'active', '3', NULL, NULL),
(55, 'CYP', 'CY', 'active', '2', NULL, NULL),
(56, 'CZE', 'CZ', 'active', '5', NULL, NULL),
(57, 'DEU', 'DE', 'active', '5', NULL, NULL),
(58, 'DJI', 'DJ', 'active', '1', NULL, NULL),
(59, 'DMA', 'DM', 'active', '3', NULL, NULL),
(60, 'DNK', 'DK', 'active', '5', NULL, NULL),
(61, 'DOM', 'DO', 'active', '3', NULL, NULL),
(62, 'DZA', 'DZ', 'active', '1', NULL, NULL),
(63, 'ECU', 'EC', 'active', '4', NULL, NULL),
(64, 'EGY', 'EG', 'active', '1', NULL, NULL),
(65, 'ERI', 'ER', 'active', '1', NULL, NULL),
(66, 'ESH', 'EH', 'active', '1', NULL, NULL),
(67, 'ESP', 'ES', 'active', '5', NULL, NULL),
(68, 'EST', 'EE', 'active', '5', NULL, NULL),
(69, 'ETH', 'ET', 'active', '1', NULL, NULL),
(70, 'FIN', 'FI', 'active', '5', NULL, NULL),
(71, 'FJI', 'FJ', 'active', '6', NULL, NULL),
(72, 'FLK', 'FK', 'active', '4', NULL, NULL),
(73, 'FRA', 'FR', 'active', '5', NULL, NULL),
(74, 'FRO', 'FO', 'active', '5', NULL, NULL),
(75, 'FSM', 'FM', 'active', '6', NULL, NULL),
(76, 'GAB', 'GA', 'active', '1', NULL, NULL),
(77, 'GBR', 'GB', 'active', '5', NULL, NULL),
(78, 'GEO', 'GE', 'active', '2', NULL, NULL),
(79, 'GHA', 'GH', 'active', '1', NULL, NULL),
(80, 'GIB', 'GI', 'active', '5', NULL, NULL),
(81, 'GIN', 'GN', 'active', '1', NULL, NULL),
(82, 'GLP', 'GP', 'active', '3', NULL, NULL),
(83, 'GMB', 'GM', 'active', '1', NULL, NULL),
(84, 'GNB', 'GW', 'active', '1', NULL, NULL),
(85, 'GNQ', 'GQ', 'active', '1', NULL, NULL),
(86, 'GRC', 'GR', 'active', '5', NULL, NULL),
(87, 'GRD', 'GD', 'active', '3', NULL, NULL),
(88, 'GRL', 'GL', 'active', '3', NULL, NULL),
(89, 'GTM', 'GT', 'active', '3', NULL, NULL),
(90, 'GUF', 'GF', 'active', '4', NULL, NULL),
(91, 'GUM', 'GU', 'active', '6', NULL, NULL),
(92, 'GUY', 'GY', 'active', '4', NULL, NULL),
(93, 'HKG', 'HK', 'active', '2', NULL, NULL),
(94, 'HMD', 'HM', 'active', '7', NULL, NULL),
(95, 'HND', 'HN', 'active', '3', NULL, NULL),
(96, 'HRV', 'HR', 'active', '5', NULL, NULL),
(97, 'HTI', 'HT', 'active', '3', NULL, NULL),
(98, 'HUN', 'HU', 'active', '5', NULL, NULL),
(99, 'IDN', 'ID', 'active', '2', NULL, NULL),
(100, 'IND', 'IN', 'active', '2', NULL, NULL),
(101, 'IOT', 'IO', 'active', '1', NULL, NULL),
(102, 'IRL', 'IE', 'active', '5', NULL, NULL),
(103, 'IRN', 'IR', 'active', '2', NULL, NULL),
(104, 'IRQ', 'IQ', 'active', '2', NULL, NULL),
(105, 'ISL', 'IS', 'active', '5', NULL, NULL),
(106, 'ISR', 'IL', 'active', '2', NULL, NULL),
(107, 'ITA', 'IT', 'active', '5', NULL, NULL),
(108, 'JAM', 'JM', 'active', '3', NULL, NULL),
(109, 'JOR', 'JO', 'active', '2', NULL, NULL),
(110, 'JPN', 'JP', 'active', '2', NULL, NULL),
(111, 'KAZ', 'KZ', 'active', '2', NULL, NULL),
(112, 'KEN', 'KE', 'active', '1', NULL, NULL),
(113, 'KGZ', 'KG', 'active', '2', NULL, NULL),
(114, 'KHM', 'KH', 'active', '2', NULL, NULL),
(115, 'KIR', 'KI', 'active', '6', NULL, NULL),
(116, 'KNA', 'KN', 'active', '3', NULL, NULL),
(117, 'KOR', 'KR', 'active', '2', NULL, NULL),
(118, 'KWT', 'KW', 'active', '2', NULL, NULL),
(119, 'LAO', 'LA', 'active', '2', NULL, NULL),
(120, 'LBN', 'LB', 'active', '2', NULL, NULL),
(121, 'LBR', 'LR', 'active', '1', NULL, NULL),
(122, 'LBY', 'LY', 'active', '1', NULL, NULL),
(123, 'LCA', 'LC', 'active', '3', NULL, NULL),
(124, 'LIE', 'LI', 'active', '5', NULL, NULL),
(125, 'LKA', 'LK', 'active', '2', NULL, NULL),
(126, 'LSO', 'LS', 'active', '1', NULL, NULL),
(127, 'LTU', 'LT', 'active', '5', NULL, NULL),
(128, 'LUX', 'LU', 'active', '5', NULL, NULL),
(129, 'LVA', 'LV', 'active', '5', NULL, NULL),
(130, 'MAC', 'MO', 'active', '2', NULL, NULL),
(131, 'MAR', 'MA', 'active', '1', NULL, NULL),
(132, 'MCO', 'MC', 'active', '5', NULL, NULL),
(133, 'MDA', 'MD', 'active', '5', NULL, NULL),
(134, 'MDG', 'MG', 'active', '1', NULL, NULL),
(135, 'MDV', 'MV', 'active', '2', NULL, NULL),
(136, 'MEX', 'MX', 'active', '3', NULL, NULL),
(137, 'MHL', 'MH', 'active', '6', NULL, NULL),
(138, 'MKD', 'MK', 'active', '5', NULL, NULL),
(139, 'MLI', 'ML', 'active', '1', NULL, NULL),
(140, 'MLT', 'MT', 'active', '5', NULL, NULL),
(141, 'MMR', 'MM', 'active', '2', NULL, NULL),
(142, 'MNG', 'MN', 'active', '2', NULL, NULL),
(143, 'MNP', 'MP', 'active', '6', NULL, NULL),
(144, 'MOZ', 'MZ', 'active', '1', NULL, NULL),
(145, 'MRT', 'MR', 'active', '1', NULL, NULL),
(146, 'MSR', 'MS', 'active', '3', NULL, NULL),
(147, 'MTQ', 'MQ', 'active', '3', NULL, NULL),
(148, 'MUS', 'MU', 'active', '1', NULL, NULL),
(149, 'MWI', 'MW', 'active', '1', NULL, NULL),
(150, 'MYS', 'MY', 'active', '2', NULL, NULL),
(151, 'MYT', 'YT', 'active', '1', NULL, NULL),
(152, 'NAM', 'NA', 'active', '1', NULL, NULL),
(153, 'NCL', 'NC', 'active', '6', NULL, NULL),
(154, 'NER', 'NE', 'active', '1', NULL, NULL),
(155, 'NFK', 'NF', 'active', '6', NULL, NULL),
(156, 'NGA', 'NG', 'active', '1', NULL, NULL),
(157, 'NIC', 'NI', 'active', '3', NULL, NULL),
(158, 'NIU', 'NU', 'active', '6', NULL, NULL),
(159, 'NLD', 'NL', 'active', '5', NULL, NULL),
(160, 'NOR', 'NO', 'active', '5', NULL, NULL),
(161, 'NPL', 'NP', 'active', '2', NULL, NULL),
(162, 'NRU', 'NR', 'active', '6', NULL, NULL),
(163, 'NZL', 'NZ', 'active', '6', NULL, NULL),
(164, 'OMN', 'OM', 'active', '2', NULL, NULL),
(165, 'PAK', 'PK', 'active', '2', NULL, NULL),
(166, 'PAN', 'PA', 'active', '3', NULL, NULL),
(167, 'PCN', 'PN', 'active', '6', NULL, NULL),
(168, 'PER', 'PE', 'active', '4', NULL, NULL),
(169, 'PHL', 'PH', 'active', '2', NULL, NULL),
(170, 'PLW', 'PW', 'active', '6', NULL, NULL),
(171, 'PNG', 'PG', 'active', '6', NULL, NULL),
(172, 'POL', 'PL', 'active', '5', NULL, NULL),
(173, 'PRI', 'PR', 'active', '3', NULL, NULL),
(174, 'PRK', 'KP', 'active', '2', NULL, NULL),
(175, 'PRT', 'PT', 'active', '5', NULL, NULL),
(176, 'PRY', 'PY', 'active', '4', NULL, NULL),
(177, 'PSE', 'PS', 'active', '2', NULL, NULL),
(178, 'PYF', 'PF', 'active', '6', NULL, NULL),
(179, 'QAT', 'QA', 'active', '2', NULL, NULL),
(180, 'REU', 'RE', 'active', '1', NULL, NULL),
(181, 'ROM', 'RO', 'active', '5', NULL, NULL),
(182, 'RUS', 'RU', 'active', '5', NULL, NULL),
(183, 'RWA', 'RW', 'active', '1', NULL, NULL),
(184, 'SAU', 'SA', 'active', '2', NULL, NULL),
(185, 'SDN', 'SD', 'active', '1', NULL, NULL),
(186, 'SEN', 'SN', 'active', '1', NULL, NULL),
(187, 'SGP', 'SG', 'active', '2', NULL, NULL),
(188, 'SGS', 'GS', 'active', '7', NULL, NULL),
(189, 'SHN', 'SH', 'active', '1', NULL, NULL),
(190, 'SJM', 'SJ', 'active', '5', NULL, NULL),
(191, 'SLB', 'SB', 'active', '6', NULL, NULL),
(192, 'SLE', 'SL', 'active', '1', NULL, NULL),
(193, 'SLV', 'SV', 'active', '3', NULL, NULL),
(194, 'SMR', 'SM', 'active', '5', NULL, NULL),
(195, 'SOM', 'SO', 'active', '1', NULL, NULL),
(196, 'SPM', 'PM', 'active', '3', NULL, NULL),
(197, 'STP', 'ST', 'active', '1', NULL, NULL),
(198, 'SUR', 'SR', 'active', '4', NULL, NULL),
(199, 'SVK', 'SK', 'active', '5', NULL, NULL),
(200, 'SVN', 'SI', 'active', '5', NULL, NULL),
(201, 'SWE', 'SE', 'active', '5', NULL, NULL),
(202, 'SWZ', 'SZ', 'active', '1', NULL, NULL),
(203, 'SYC', 'SC', 'active', '1', NULL, NULL),
(204, 'SYR', 'SY', 'active', '2', NULL, NULL),
(205, 'TCA', 'TC', 'active', '3', NULL, NULL),
(206, 'TCD', 'TD', 'active', '1', NULL, NULL),
(207, 'TGO', 'TG', 'active', '1', NULL, NULL),
(208, 'THA', 'TH', 'active', '2', NULL, NULL),
(209, 'TJK', 'TJ', 'active', '2', NULL, NULL),
(210, 'TKL', 'TK', 'active', '6', NULL, NULL),
(211, 'TKM', 'TM', 'active', '2', NULL, NULL),
(212, 'TMP', 'TP', 'active', '2', NULL, NULL),
(213, 'TON', 'TO', 'active', '6', NULL, NULL),
(214, 'TTO', 'TT', 'active', '3', NULL, NULL),
(215, 'TUN', 'TN', 'active', '1', NULL, NULL),
(216, 'TUR', 'TR', 'active', '2', NULL, NULL),
(217, 'TUV', 'TV', 'active', '6', NULL, NULL),
(218, 'TWN', 'TW', 'active', '2', NULL, NULL),
(219, 'TZA', 'TZ', 'active', '1', NULL, NULL),
(220, 'UGA', 'UG', 'active', '1', NULL, NULL),
(221, 'UKR', 'UA', 'active', '5', NULL, NULL),
(222, 'UMI', 'UM', 'active', '6', NULL, NULL),
(223, 'URY', 'UY', 'active', '4', NULL, NULL),
(224, 'USA', 'US', 'active', '3', NULL, NULL),
(225, 'UZB', 'UZ', 'active', '2', NULL, NULL),
(226, 'VAT', 'VA', 'active', '5', NULL, NULL),
(227, 'VCT', 'VC', 'active', '3', NULL, NULL),
(228, 'VEN', 'VE', 'active', '4', NULL, NULL),
(229, 'VGB', 'VG', 'active', '3', NULL, NULL),
(230, 'VIR', 'VI', 'active', '3', NULL, NULL),
(231, 'VNM', 'VN', 'active', '2', NULL, NULL),
(232, 'VUT', 'VU', 'active', '6', NULL, NULL),
(233, 'WLF', 'WF', 'active', '6', NULL, NULL),
(234, 'WSM', 'WS', 'active', '6', NULL, NULL),
(235, 'YEM', 'YE', 'active', '2', NULL, NULL),
(236, 'YUG', 'YU', 'active', '5', NULL, NULL),
(237, 'ZAF', 'ZA', 'active', '1', NULL, NULL),
(238, 'ZMB', 'ZM', 'active', '1', NULL, NULL),
(239, 'ZWE', 'ZW', 'active', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country_translations`
--

CREATE TABLE `country_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country_translations`
--

INSERT INTO `country_translations` (`id`, `name`, `country_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Aruba', 1, 'en', NULL, NULL),
(2, 'Afghanistan', 2, 'en', NULL, NULL),
(3, 'Angola', 3, 'en', NULL, NULL),
(4, 'Anguilla', 4, 'en', NULL, NULL),
(5, 'Albania', 5, 'en', NULL, NULL),
(6, 'Andorra', 6, 'en', NULL, NULL),
(7, 'Netherlands Antilles', 7, 'en', NULL, NULL),
(8, 'United Arab Emirates', 8, 'en', NULL, NULL),
(9, 'Argentina', 9, 'en', NULL, NULL),
(10, 'Armenia', 10, 'en', NULL, NULL),
(11, 'American Samoa', 11, 'en', NULL, NULL),
(12, 'Antarctica', 12, 'en', NULL, NULL),
(13, 'French Southern territories', 13, 'en', NULL, NULL),
(14, 'Antigua and Barbuda', 14, 'en', NULL, NULL),
(15, 'Australia', 15, 'en', NULL, NULL),
(16, 'Austria', 16, 'en', NULL, NULL),
(17, 'Azerbaijan', 17, 'en', NULL, NULL),
(18, 'Burundi', 18, 'en', NULL, NULL),
(19, 'Belgium', 19, 'en', NULL, NULL),
(20, 'Benin', 20, 'en', NULL, NULL),
(21, 'Burkina Faso', 21, 'en', NULL, NULL),
(22, 'Bangladesh', 22, 'en', NULL, NULL),
(23, 'Bulgaria', 23, 'en', NULL, NULL),
(24, 'Bahrain', 24, 'en', NULL, NULL),
(25, 'Bahamas', 25, 'en', NULL, NULL),
(26, 'Bosnia and Herzegovina', 26, 'en', NULL, NULL),
(27, 'Belarus', 27, 'en', NULL, NULL),
(28, 'Belize', 28, 'en', NULL, NULL),
(29, 'Bermuda', 29, 'en', NULL, NULL),
(30, 'Bolivia', 30, 'en', NULL, NULL),
(31, 'Brazil', 31, 'en', NULL, NULL),
(32, 'Barbados', 32, 'en', NULL, NULL),
(33, 'Brunei', 33, 'en', NULL, NULL),
(34, 'Bhutan', 34, 'en', NULL, NULL),
(35, 'Bouvet Island', 35, 'en', NULL, NULL),
(36, 'Botswana', 36, 'en', NULL, NULL),
(37, 'Central African Republic', 37, 'en', NULL, NULL),
(38, 'Canada', 38, 'en', NULL, NULL),
(39, 'Cocos (Keeling) Islands', 39, 'en', NULL, NULL),
(40, 'Switzerland', 40, 'en', NULL, NULL),
(41, 'Chile', 41, 'en', NULL, NULL),
(42, 'China', 42, 'en', NULL, NULL),
(43, 'Côte d’Ivoire', 43, 'en', NULL, NULL),
(44, 'Cameroon', 44, 'en', NULL, NULL),
(45, 'Congo, The Democratic Republic of the', 45, 'en', NULL, NULL),
(46, 'Congo', 46, 'en', NULL, NULL),
(47, 'Cook Islands', 47, 'en', NULL, NULL),
(48, 'Colombia', 48, 'en', NULL, NULL),
(49, 'Comoros', 49, 'en', NULL, NULL),
(50, 'Cape Verde', 50, 'en', NULL, NULL),
(51, 'Costa Rica', 51, 'en', NULL, NULL),
(52, 'Cuba', 52, 'en', NULL, NULL),
(53, 'Christmas Island', 53, 'en', NULL, NULL),
(54, 'Cayman Islands', 54, 'en', NULL, NULL),
(55, 'Cyprus', 55, 'en', NULL, NULL),
(56, 'Czech Republic', 56, 'en', NULL, NULL),
(57, 'Germany', 57, 'en', NULL, NULL),
(58, 'Djibouti', 58, 'en', NULL, NULL),
(59, 'Dominica', 59, 'en', NULL, NULL),
(60, 'Denmark', 60, 'en', NULL, NULL),
(61, 'Dominican Republic', 61, 'en', NULL, NULL),
(62, 'Algeria', 62, 'en', NULL, NULL),
(63, 'Ecuador', 63, 'en', NULL, NULL),
(64, 'Egypt', 64, 'en', NULL, NULL),
(65, 'Eritrea', 65, 'en', NULL, NULL),
(66, 'Western Sahara', 66, 'en', NULL, NULL),
(67, 'Spain', 67, 'en', NULL, NULL),
(68, 'Estonia', 68, 'en', NULL, NULL),
(69, 'Ethiopia', 69, 'en', NULL, NULL),
(70, 'Finland', 70, 'en', NULL, NULL),
(71, 'Fiji Islands', 71, 'en', NULL, NULL),
(72, 'Falkland Islands', 72, 'en', NULL, NULL),
(73, 'France', 73, 'en', NULL, NULL),
(74, 'Faroe Islands', 74, 'en', NULL, NULL),
(75, 'Micronesia, Federated States of', 75, 'en', NULL, NULL),
(76, 'Gabon', 76, 'en', NULL, NULL),
(77, 'United Kingdom', 77, 'en', NULL, NULL),
(78, 'Georgia', 78, 'en', NULL, NULL),
(79, 'Ghana', 79, 'en', NULL, NULL),
(80, 'Gibraltar', 80, 'en', NULL, NULL),
(81, 'Guinea', 81, 'en', NULL, NULL),
(82, 'Guadeloupe', 82, 'en', NULL, NULL),
(83, 'Gambia', 83, 'en', NULL, NULL),
(84, 'Guinea-Bissau', 84, 'en', NULL, NULL),
(85, 'Equatorial Guinea', 85, 'en', NULL, NULL),
(86, 'Greece', 86, 'en', NULL, NULL),
(87, 'Grenada', 87, 'en', NULL, NULL),
(88, 'Greenland', 88, 'en', NULL, NULL),
(89, 'Guatemala', 89, 'en', NULL, NULL),
(90, 'French Guiana', 90, 'en', NULL, NULL),
(91, 'Guam', 91, 'en', NULL, NULL),
(92, 'Guyana', 92, 'en', NULL, NULL),
(93, 'Hong Kong', 93, 'en', NULL, NULL),
(94, 'Heard Island and McDonald Islands', 94, 'en', NULL, NULL),
(95, 'Honduras', 95, 'en', NULL, NULL),
(96, 'Croatia', 96, 'en', NULL, NULL),
(97, 'Haiti', 97, 'en', NULL, NULL),
(98, 'Hungary', 98, 'en', NULL, NULL),
(99, 'Indonesia', 99, 'en', NULL, NULL),
(100, 'India', 100, 'en', NULL, NULL),
(101, 'British Indian Ocean Territory', 101, 'en', NULL, NULL),
(102, 'Ireland', 102, 'en', NULL, NULL),
(103, 'Iran', 103, 'en', NULL, NULL),
(104, 'Iraq', 104, 'en', NULL, NULL),
(105, 'Iceland', 105, 'en', NULL, NULL),
(106, 'Israel', 106, 'en', NULL, NULL),
(107, 'Italy', 107, 'en', NULL, NULL),
(108, 'Jamaica', 108, 'en', NULL, NULL),
(109, 'Jordan', 109, 'en', NULL, NULL),
(110, 'Japan', 110, 'en', NULL, NULL),
(111, 'Kazakstan', 111, 'en', NULL, NULL),
(112, 'Kenya', 112, 'en', NULL, NULL),
(113, 'Kyrgyzstan', 113, 'en', NULL, NULL),
(114, 'Cambodia', 114, 'en', NULL, NULL),
(115, 'Kiribati', 115, 'en', NULL, NULL),
(116, 'Saint Kitts and Nevis', 116, 'en', NULL, NULL),
(117, 'South Korea', 117, 'en', NULL, NULL),
(118, 'Kuwait', 118, 'en', NULL, NULL),
(119, 'Laos', 119, 'en', NULL, NULL),
(120, 'Lebanon', 120, 'en', NULL, NULL),
(121, 'Liberia', 121, 'en', NULL, NULL),
(122, 'Libyan Arab Jamahiriya', 122, 'en', NULL, NULL),
(123, 'Saint Lucia', 123, 'en', NULL, NULL),
(124, 'Liechtenstein', 124, 'en', NULL, NULL),
(125, 'Sri Lanka', 125, 'en', NULL, NULL),
(126, 'Lesotho', 126, 'en', NULL, NULL),
(127, 'Lithuania', 127, 'en', NULL, NULL),
(128, 'Luxembourg', 128, 'en', NULL, NULL),
(129, 'Latvia', 129, 'en', NULL, NULL),
(130, 'Macao', 130, 'en', NULL, NULL),
(131, 'Morocco', 131, 'en', NULL, NULL),
(132, 'Monaco', 132, 'en', NULL, NULL),
(133, 'Moldova', 133, 'en', NULL, NULL),
(134, 'Madagascar', 134, 'en', NULL, NULL),
(135, 'Maldives', 135, 'en', NULL, NULL),
(136, 'Mexico', 136, 'en', NULL, NULL),
(137, 'Marshall Islands', 137, 'en', NULL, NULL),
(138, 'Macedonia', 138, 'en', NULL, NULL),
(139, 'Mali', 139, 'en', NULL, NULL),
(140, 'Malta', 140, 'en', NULL, NULL),
(141, 'Myanmar', 141, 'en', NULL, NULL),
(142, 'Mongolia', 142, 'en', NULL, NULL),
(143, 'Northern Mariana Islands', 143, 'en', NULL, NULL),
(144, 'Mozambique', 144, 'en', NULL, NULL),
(145, 'Mauritania', 145, 'en', NULL, NULL),
(146, 'Montserrat', 146, 'en', NULL, NULL),
(147, 'Martinique', 147, 'en', NULL, NULL),
(148, 'Mauritius', 148, 'en', NULL, NULL),
(149, 'Malawi', 149, 'en', NULL, NULL),
(150, 'Malaysia', 150, 'en', NULL, NULL),
(151, 'Mayotte', 151, 'en', NULL, NULL),
(152, 'Namibia', 152, 'en', NULL, NULL),
(153, 'New Caledonia', 153, 'en', NULL, NULL),
(154, 'Niger', 154, 'en', NULL, NULL),
(155, 'Norfolk Island', 155, 'en', NULL, NULL),
(156, 'Nigeria', 156, 'en', NULL, NULL),
(157, 'Nicaragua', 157, 'en', NULL, NULL),
(158, 'Niue', 158, 'en', NULL, NULL),
(159, 'Netherlands', 159, 'en', NULL, NULL),
(160, 'Norway', 160, 'en', NULL, NULL),
(161, 'Nepal', 161, 'en', NULL, NULL),
(162, 'Nauru', 162, 'en', NULL, NULL),
(163, 'New Zealand', 163, 'en', NULL, NULL),
(164, 'Oman', 164, 'en', NULL, NULL),
(165, 'Pakistan', 165, 'en', NULL, NULL),
(166, 'Panama', 166, 'en', NULL, NULL),
(167, 'Pitcairn', 167, 'en', NULL, NULL),
(168, 'Peru', 168, 'en', NULL, NULL),
(169, 'Philippines', 169, 'en', NULL, NULL),
(170, 'Palau', 170, 'en', NULL, NULL),
(171, 'Papua New Guinea', 171, 'en', NULL, NULL),
(172, 'Poland', 172, 'en', NULL, NULL),
(173, 'Puerto Rico', 173, 'en', NULL, NULL),
(174, 'North Korea', 174, 'en', NULL, NULL),
(175, 'Portugal', 175, 'en', NULL, NULL),
(176, 'Paraguay', 176, 'en', NULL, NULL),
(177, 'Palestine', 177, 'en', NULL, NULL),
(178, 'French Polynesia', 178, 'en', NULL, NULL),
(179, 'Qatar', 179, 'en', NULL, NULL),
(180, 'Réunion', 180, 'en', NULL, NULL),
(181, 'Romania', 181, 'en', NULL, NULL),
(182, 'Russian Federation', 182, 'en', NULL, NULL),
(183, 'Rwanda', 183, 'en', NULL, NULL),
(184, 'Saudi Arabia', 184, 'en', NULL, NULL),
(185, 'Sudan', 185, 'en', NULL, NULL),
(186, 'Senegal', 186, 'en', NULL, NULL),
(187, 'Singapore', 187, 'en', NULL, NULL),
(188, 'South Georgia and the South Sandwich Islands', 188, 'en', NULL, NULL),
(189, 'Saint Helena', 189, 'en', NULL, NULL),
(190, 'Svalbard and Jan Mayen', 190, 'en', NULL, NULL),
(191, 'Solomon Islands', 191, 'en', NULL, NULL),
(192, 'Sierra Leone', 192, 'en', NULL, NULL),
(193, 'El Salvador', 193, 'en', NULL, NULL),
(194, 'San Marino', 194, 'en', NULL, NULL),
(195, 'Somalia', 195, 'en', NULL, NULL),
(196, 'Saint Pierre and Miquelon', 196, 'en', NULL, NULL),
(197, 'Sao Tome and Principe', 197, 'en', NULL, NULL),
(198, 'Suriname', 198, 'en', NULL, NULL),
(199, 'Slovakia', 199, 'en', NULL, NULL),
(200, 'Slovenia', 200, 'en', NULL, NULL),
(201, 'Sweden', 201, 'en', NULL, NULL),
(202, 'Swaziland', 202, 'en', NULL, NULL),
(203, 'Seychelles', 203, 'en', NULL, NULL),
(204, 'Syria', 204, 'en', NULL, NULL),
(205, 'Turks and Caicos Islands', 205, 'en', NULL, NULL),
(206, 'Chad', 206, 'en', NULL, NULL),
(207, 'Togo', 207, 'en', NULL, NULL),
(208, 'Thailand', 208, 'en', NULL, NULL),
(209, 'Tajikistan', 209, 'en', NULL, NULL),
(210, 'Tokelau', 210, 'en', NULL, NULL),
(211, 'Turkmenistan', 211, 'en', NULL, NULL),
(212, 'East Timor', 212, 'en', NULL, NULL),
(213, 'Tonga', 213, 'en', NULL, NULL),
(214, 'Trinidad and Tobago', 214, 'en', NULL, NULL),
(215, 'Tunisia', 215, 'en', NULL, NULL),
(216, 'Turkey', 216, 'en', NULL, NULL),
(217, 'Tuvalu', 217, 'en', NULL, NULL),
(218, 'Taiwan', 218, 'en', NULL, NULL),
(219, 'Tanzania', 219, 'en', NULL, NULL),
(220, 'Uganda', 220, 'en', NULL, NULL),
(221, 'Ukraine', 221, 'en', NULL, NULL),
(222, 'United States Minor Outlying Islands', 222, 'en', NULL, NULL),
(223, 'Uruguay', 223, 'en', NULL, NULL),
(224, 'United States', 224, 'en', NULL, NULL),
(225, 'Uzbekistan', 225, 'en', NULL, NULL),
(226, 'Holy See (Vatican City State)', 226, 'en', NULL, NULL),
(227, 'Saint Vincent and the Grenadines', 227, 'en', NULL, NULL),
(228, 'Venezuela', 228, 'en', NULL, NULL),
(229, 'Virgin Islands, British', 229, 'en', NULL, NULL),
(230, 'Virgin Islands, U.S.', 230, 'en', NULL, NULL),
(231, 'Vietnam', 231, 'en', NULL, NULL),
(232, 'Vanuatu', 232, 'en', NULL, NULL),
(233, 'Wallis and Futuna', 233, 'en', NULL, NULL),
(234, 'Samoa', 234, 'en', NULL, NULL),
(235, 'Yemen', 235, 'en', NULL, NULL),
(236, 'Yugoslavia', 236, 'en', NULL, NULL),
(237, 'South Africa', 237, 'en', NULL, NULL),
(238, 'Zambia', 238, 'en', NULL, NULL),
(239, 'Zimbabwe', 239, 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `locale`, `status`, `icon`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Arabic', 'ar', '1', 'EG', 0, NULL, NULL),
(2, 'English', 'en', '1', 'US', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `guid`, `type`, `name`, `mime_type`, `meta`, `created_at`, `updated_at`) VALUES
(1, '8e69be45b6d642687e8ec3d8e79a5236d160f8e1.png', 'media', 'Screenshot from 2017-05-11 11-14-13.png', 'image/png', '{"size":95606,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-21 10:48:34', '2017-05-21 10:48:34'),
(2, 'd133a39e15d01b3f5c912bd01c4cf5ee60bb7dfa.png', 'media', 'dev-mode.png', 'image/png', '{"size":303017,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-21 10:49:00', '2017-05-21 10:49:00'),
(3, '39017d345e9c9a66cb6c710959351715798a6910.png', 'media', 'Screenshot from 2017-05-09 11-08-57.png', 'image/png', '{"size":21492,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-21 10:49:13', '2017-05-21 10:49:13'),
(4, '735b99abb1678fa038dff6fae01fe123e73dcab6.jpg', 'media', '16b775ea4fec65c2f11ee028dc50bf16.jpg', 'image/jpeg', '{"size":471130,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-21 11:05:09', '2017-05-21 11:05:09'),
(5, 'c9a52beda866f24d3681a659b24c7d672ef793db.png', 'media', 'awwards-g1-1.png', 'image/png', '{"size":27027,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-29 15:24:14', '2017-05-29 15:24:14'),
(6, 'd99182bb6e23b3a8f337d7e938a84dd929150dec.png', 'media', 'awwards-g1-2.png', 'image/png', '{"size":23611,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-29 15:25:07', '2017-05-29 15:25:07'),
(7, 'fedd3f07f91e1523edbfbef5b3e102d0a092c54a.png', 'media', 'awwards-g1-3.png', 'image/png', '{"size":29981,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-29 15:26:40', '2017-05-29 15:26:40'),
(8, '621041308ee3ba38eef0f74940765ef24ab5cb0f.jpg', 'media', 'prop-inner1.jpg', 'image/jpeg', '{"size":493455,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-30 11:19:32', '2017-05-30 11:19:32'),
(9, '2519dde3c78c380fd429b58e7825a4bc6c39bb51.jpg', 'media', 'prop-inner2.jpg', 'image/jpeg', '{"size":635982,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-30 11:29:42', '2017-05-30 11:29:42'),
(10, '70739f5dcba28ffbddbd428ca1161d7396e75c99.jpg', 'media', 'prop-inner3.jpg', 'image/jpeg', '{"size":617344,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-30 11:30:39', '2017-05-30 11:30:39'),
(11, '39dbb5a4254f8410d3c2f9afc82fcb2a7efaecc0.jpg', 'media', 'prop-inner4.jpg', 'image/jpeg', '{"size":646971,"dimensions":{"large":{"width":"1078","height":"551"},"medium":{"width":"682","height":"294"},"thumbnail":{"width":"150","height":"150"}}}', '2017-05-30 11:33:06', '2017-05-30 11:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_03_10_122357_create_language_table', 1),
('2016_03_12_122058_create_locations_table', 1),
('2016_03_13_084148_create_users_table', 1),
('2016_03_13_141438_entrust_setup_tables', 1),
('2016_03_14_100000_create_password_resets_table', 1),
('2016_03_16_122124_create_category_table', 1),
('2016_03_20_120837_create_media_table', 1),
('2016_03_23_081841_create_posts_table', 1),
('2016_05_11_081841_create_comments_table', 1),
('2016_05_15_073615_create_tagged_table', 1),
('2016_05_15_073615_create_tags_table', 1),
('2016_06_01_120837_create_multiple_media_table', 1),
('2016_06_26_120837_create_settings_table', 1),
('2016_11_29_104900_create_seo_table', 1),
('2016_12_27_092915_create_web_info_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multiple_media`
--

CREATE TABLE `multiple_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `media_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `multiple_media`
--

INSERT INTO `multiple_media` (`id`, `media_id`, `post_id`, `created_at`, `updated_at`) VALUES
(13, 11, 6, NULL, NULL),
(14, 9, 6, NULL, NULL),
(15, 10, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category`, `created_at`, `updated_at`) VALUES
(1, 'admin.login', 'Admin Login', '', 'dashboard', NULL, NULL),
(2, 'comment.manage', 'Manage Comments', '', 'comment', NULL, NULL),
(3, 'settings.manage', 'Manage Settings', '', 'settings', NULL, NULL),
(4, 'post.view', 'View Post', '', 'post', NULL, NULL),
(5, 'post.add', 'Add Post', '', 'post', NULL, NULL),
(6, 'post.edit', 'Edit Post', '', 'post', NULL, NULL),
(7, 'post.delete', 'Delete Post', '', 'post', NULL, NULL),
(8, 'page.view', 'View Page', '', 'page', NULL, NULL),
(9, 'page.add', 'Add Page', '', 'page', NULL, NULL),
(10, 'page.edit', 'Edit Page', '', 'page', NULL, NULL),
(11, 'page.delete', 'Delete Page', '', 'page', NULL, NULL),
(12, 'gallery.view', 'View Gallery', '', 'gallery', NULL, NULL),
(13, 'gallery.add', 'Add Gallery', '', 'gallery', NULL, NULL),
(14, 'gallery.edit', 'Edit Gallery', '', 'gallery', NULL, NULL),
(15, 'gallery.delete', 'Delete Gallery', '', 'gallery', NULL, NULL),
(16, 'category.view', 'View Category', '', 'category', NULL, NULL),
(17, 'category.add', 'Add Category', '', 'category', NULL, NULL),
(18, 'category.edit', 'Edit Category', '', 'category', NULL, NULL),
(19, 'category.delete', 'Delete Category', '', 'category', NULL, NULL),
(20, 'user.view', 'View User', '', 'user', NULL, NULL),
(21, 'user.add', 'Add User', '', 'user', NULL, NULL),
(22, 'user.edit', 'Edit User', '', 'user', NULL, NULL),
(23, 'user.delete', 'Delete User', '', 'user', NULL, NULL),
(24, 'media.view', 'View Media', '', 'media', NULL, NULL),
(25, 'media.add', 'Add Media', '', 'media', NULL, NULL),
(26, 'media.edit', 'Edit Media', '', 'media', NULL, NULL),
(27, 'media.delete', 'Delete Media', '', 'media', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'post',
  `post_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'publish',
  `extra` text COLLATE utf8_unicode_ci,
  `comment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'open',
  `comment_count` int(11) NOT NULL DEFAULT '0',
  `media_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_type`, `post_status`, `extra`, `comment_status`, `comment_count`, `media_id`, `created_at`, `updated_at`) VALUES
(3, 'Award', 'publish', NULL, 'open', 0, 5, '2017-05-29 15:24:23', '2017-05-29 15:24:23'),
(4, 'Award', 'publish', NULL, 'open', 0, 6, '2017-05-29 15:25:21', '2017-05-29 15:25:21'),
(5, 'Award', 'publish', NULL, 'open', 0, 7, '2017-05-29 15:26:48', '2017-05-29 15:26:48'),
(6, 'Gallary', 'publish', NULL, 'open', 0, 8, '2017-05-30 11:19:50', '2017-05-30 11:20:23'),
(7, 'Gallary', 'publish', NULL, 'open', 0, 9, '2017-05-30 11:29:53', '2017-05-30 11:29:53'),
(8, 'Gallary', 'publish', NULL, 'open', 0, 10, '2017-05-30 11:30:47', '2017-05-30 11:30:47'),
(9, 'Gallary', 'publish', NULL, 'open', 0, 11, '2017-05-30 11:33:14', '2017-05-30 11:33:14'),
(10, 'Properties', 'publish', '{"prop_lat":"30.0444","prob_long":"31.23569999999995","sales":"1","facilties":["home","gym","shop","pool","drink","green"]}', 'open', 0, 10, '2017-05-30 13:04:43', '2017-05-30 13:04:43'),
(11, 'Properties', 'publish', '{"prop_lat":"30.04439767817878","prob_long":"31.236354458999585","sales":"1","facilties":["disabled","camera","stars","wifi","parking"]}', 'open', 0, 8, '2017-05-30 13:05:55', '2017-05-30 13:05:55'),
(12, 'Properties', 'publish', '{"prop_lat":"30.044938661051752","prob_long":"31.228082526397657","sales":"1","facilties":["home","gym","shop","pool","drink","green","resturant","disabled","camera","stars","wifi","parking"]}', 'open', 0, 9, '2017-05-30 13:08:39', '2017-05-30 13:08:39'),
(13, 'Properties', 'publish', '{"prop_lat":"30.04522192129173","prob_long":"31.237078655433606","sales":"1","facilties":["home","gym"]}', 'open', 0, 11, '2017-05-30 13:09:48', '2017-05-30 13:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `posts_translations`
--

CREATE TABLE `posts_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_author` int(10) UNSIGNED DEFAULT NULL,
  `post_trans_extra` text COLLATE utf8_unicode_ci,
  `post_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_translations`
--

INSERT INTO `posts_translations` (`id`, `post_title`, `post_excerpt`, `post_content`, `slug`, `post_author`, `post_trans_extra`, `post_id`, `locale`, `created_at`, `updated_at`) VALUES
(5, 'busness traveller 2014', 'busness traveller 2014', '<p>busness traveller 2014</p>', 'busness-traveller-2014', 1, NULL, 3, 'en', NULL, NULL),
(6, 'travel advisor', 'travel advisor', '<p>travel advisor</p>', 'travel-advisor', 1, NULL, 4, 'en', NULL, NULL),
(7, 'cairo 360', 'editor''s choise award winnerfor 2014 for shootgun', '<p>editor&#39;s choise award winnerfor 2014 for shootgun</p>', 'cairo-360', 1, NULL, 5, 'en', NULL, NULL),
(8, 'title 1', 'exerpt 1', '<p>exerpt 1</p>', 'title-1', 1, NULL, 6, 'en', NULL, NULL),
(9, 'عنوان 1', 'عنوان 1', '<p>عنوان 1</p>', 'عنوان-1', 1, NULL, 6, 'ar', NULL, NULL),
(10, 'title 2', 'title 2', '<p>title 2</p>', 'title-2', 1, NULL, 7, 'en', NULL, NULL),
(11, 'title 3', 'title 3', '<p>title 3</p>', 'title-3', 1, NULL, 8, 'en', NULL, NULL),
(12, 'title 4', 'title 4', '<p>title 4</p>', 'title-4', 1, NULL, 9, 'en', NULL, NULL),
(13, 'mina test 1', 'mina test 1', '<p>mina test 1</p>', 'mina-test-1', 1, '{"pro_status":"mina test 1","location":"mina test 1","topic_title_1":"mina test 1","topic_body_1":"<p>mina test 1<\\/p>\\r\\n","topic_title_2":"mina test 1","topic_body_2":"<p>mina test 1<\\/p>\\r\\n","topic_title_3":"","topic_body_3":"","topic_title_4":"","topic_body_4":"","topic_title_5":"","topic_body_5":"","topic_title_6":"","topic_body_6":""}', 10, 'en', NULL, NULL),
(14, 'mina test 2', 'mina test 2', '<p>mina test 2</p>', 'mina-test-2', 1, '{"pro_status":"mina test 2","location":"mina test 2","topic_title_1":"mina test 2","topic_body_1":"<p>mina test 2<\\/p>\\r\\n","topic_title_2":"mina test 2","topic_body_2":"","topic_title_3":"","topic_body_3":"","topic_title_4":"","topic_body_4":"","topic_title_5":"","topic_body_5":"","topic_title_6":"","topic_body_6":""}', 11, 'en', NULL, NULL),
(15, 'mina test 4', 'mina test 4', '<p>mina test 4</p>', 'mina-test-4', 1, '{"pro_status":"mina test 4","location":"mina test 4","topic_title_1":"mina test 4","topic_body_1":"<p>mina test 4<\\/p>\\r\\n","topic_title_2":"","topic_body_2":"","topic_title_3":"mina test 4","topic_body_3":"<p>mina test 4<\\/p>\\r\\n","topic_title_4":"","topic_body_4":"","topic_title_5":"","topic_body_5":"","topic_title_6":"","topic_body_6":""}', 12, 'en', NULL, NULL),
(16, 'mina test 5', 'mina test 5', '<p>mina test 5</p>', 'mina-test-5', 1, '{"pro_status":"mina test 5","location":"mina test 5","topic_title_1":"mina test 5","topic_body_1":"<p>mina test 5<\\/p>\\r\\n","topic_title_2":"","topic_body_2":"","topic_title_3":"","topic_body_3":"","topic_title_4":"","topic_body_4":"","topic_title_5":"","topic_body_5":"","topic_title_6":"","topic_body_6":""}', 13, 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(9, 3, 5, NULL, NULL),
(10, 4, 5, NULL, NULL),
(11, 5, 5, NULL, NULL),
(14, 7, 8, NULL, NULL),
(15, 8, 8, NULL, NULL),
(16, 9, 8, NULL, NULL),
(17, 6, 8, NULL, NULL),
(18, 10, 1, NULL, NULL),
(19, 11, 1, NULL, NULL),
(20, 12, 1, NULL, NULL),
(21, 13, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `title`, `desc`, `tags`, `locale`, `item_id`, `item_type`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdfsdf', 'sdfsdfsdfsd', 'sdfsdfsdf,sdfsdfsd,sdfdsf', 'en', 1, 'post', NULL, NULL),
(2, 'sdfsdfsdf', 'sdfsdfsdfsd', 'sdfsdfsdf,sdfsdfsd,sdfdsf', 'en', 1, 'post', NULL, NULL),
(3, 'sdfsdf', 'sdfsdfsdfsdf', 'dsfsdsd m,dfsdf,sdf', 'en', 2, 'post', NULL, NULL),
(4, 'sdfsdf', 'sdfsdfsdfsdf', 'dsfsdsd m,dfsdf,sdf', 'en', 2, 'post', NULL, NULL),
(5, 'sdfsdf', 'sdfsdfsdfsdf', 'dsfsdsd m,dfsdf,sdf', 'en', 2, 'post', NULL, NULL),
(6, 'sdfsdf', 'sdfsdfsdfsdf', 'dsfsdsd m,dfsdf,sdf', 'en', 2, 'post', NULL, NULL),
(7, 'sdfsdf', 'sdfsdfsdfsdf', 'dsfsdsd m,dfsdf,sdf', 'en', 2, 'post', NULL, NULL),
(8, 'ءؤرءؤرءؤ', 'ءؤرءؤءؤرءؤر ', ' ءءؤرءؤر', 'ar', 2, 'post', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `dimensions` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `name`, `password`, `job`, `mobile`, `age`, `about`, `url`, `address`, `city_id`, `country_id`, `type`, `dimensions`, `status`, `confirmation_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '$2y$10$G16Bs0EvIf2toQrHrH/6pOjvta6IZ.HuY5mF.Vt.EOoZe0yndOBha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user', '', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `socials` text COLLATE utf8_unicode_ci,
  `extras` text COLLATE utf8_unicode_ci,
  `stats` text COLLATE utf8_unicode_ci,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `web_info`
--

INSERT INTO `web_info` (`id`, `title`, `desc`, `tags`, `socials`, `extras`, `stats`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'default', 'default desc', 'web,site,tags', NULL, NULL, NULL, 'en', NULL, NULL),
(2, 'نمطي', 'وصف نمطي', 'وصف,موقع,نمطي', NULL, NULL, NULL, 'ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `city_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zone_translations`
--

CREATE TABLE `zone_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_translations_category_id_foreign` (`category_id`),
  ADD KEY `category_translations_author_index` (`author`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city_code_unique` (`code`),
  ADD KEY `city_country_id_foreign` (`country_id`);

--
-- Indexes for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city_translations_city_id_locale_unique` (`city_id`,`locale`),
  ADD KEY `city_translations_locale_index` (`locale`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_comment_author_index` (`comment_author`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_code_unique` (`code`),
  ADD UNIQUE KEY `country_code2_unique` (`code2`);

--
-- Indexes for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_translations_country_id_locale_unique` (`country_id`,`locale`),
  ADD KEY `country_translations_locale_index` (`locale`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_name_unique` (`name`),
  ADD UNIQUE KEY `language_locale_unique` (`locale`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_media`
--
ALTER TABLE `multiple_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `multiple_media_media_id_foreign` (`media_id`),
  ADD KEY `multiple_media_post_id_foreign` (`post_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_media_id_index` (`media_id`);

--
-- Indexes for table `posts_translations`
--
ALTER TABLE `posts_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_translations_slug_unique` (`slug`),
  ADD KEY `posts_translations_post_id_foreign` (`post_id`),
  ADD KEY `posts_translations_post_author_index` (`post_author`),
  ADD KEY `posts_translations_locale_index` (`locale`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_category_post_id_index` (`post_id`),
  ADD KEY `post_category_category_id_index` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Indexes for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zone_code_unique` (`code`),
  ADD KEY `zone_city_id_foreign` (`city_id`);

--
-- Indexes for table `zone_translations`
--
ALTER TABLE `zone_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zone_translations_zone_id_locale_unique` (`zone_id`,`locale`),
  ADD KEY `zone_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city_translations`
--
ALTER TABLE `city_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `country_translations`
--
ALTER TABLE `country_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `multiple_media`
--
ALTER TABLE `multiple_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `posts_translations`
--
ALTER TABLE `posts_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `web_info`
--
ALTER TABLE `web_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zone_translations`
--
ALTER TABLE `zone_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_translations_locale_foreign` FOREIGN KEY (`locale`) REFERENCES `language` (`locale`) ON DELETE SET NULL;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD CONSTRAINT `city_translations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `city_translations_locale_foreign` FOREIGN KEY (`locale`) REFERENCES `language` (`locale`) ON DELETE SET NULL;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_comment_author_foreign` FOREIGN KEY (`comment_author`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD CONSTRAINT `country_translations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `country_translations_locale_foreign` FOREIGN KEY (`locale`) REFERENCES `language` (`locale`) ON DELETE SET NULL;

--
-- Constraints for table `multiple_media`
--
ALTER TABLE `multiple_media`
  ADD CONSTRAINT `multiple_media_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `multiple_media_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `posts_translations`
--
ALTER TABLE `posts_translations`
  ADD CONSTRAINT `posts_translations_locale_foreign` FOREIGN KEY (`locale`) REFERENCES `language` (`locale`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_translations_post_author_foreign` FOREIGN KEY (`post_author`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_category_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `zone_translations`
--
ALTER TABLE `zone_translations`
  ADD CONSTRAINT `zone_translations_locale_foreign` FOREIGN KEY (`locale`) REFERENCES `language` (`locale`) ON DELETE SET NULL,
  ADD CONSTRAINT `zone_translations_zone_id_foreign` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
