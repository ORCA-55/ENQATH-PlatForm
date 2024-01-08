-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 04:36 PM
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
-- Database: `enqath`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(2) NOT NULL,
  `a_name` varchar(40) NOT NULL,
  `a_email` varchar(40) NOT NULL,
  `a_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_name`, `a_email`, `a_pass`) VALUES
(1, 'سام اليافعي', 'admin@gmail.com', '1357913579');

-- --------------------------------------------------------

--
-- Table structure for table `available_donors`
--

CREATE TABLE `available_donors` (
  `u_id` int(8) NOT NULL,
  `bld_id` tinyint(1) NOT NULL,
  `u_city` tinyint(2) NOT NULL,
  `d_status` tinyint(1) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `available_donors`
--

INSERT INTO `available_donors` (`u_id`, `bld_id`, `u_city`, `d_status`, `c_at`) VALUES
(34, 2, 5, 0, '2023-11-08 21:39:23'),
(13, 2, 7, 0, '2023-11-15 06:15:43'),
(15, 3, 1, 0, '2023-11-15 06:16:50'),
(16, 2, 7, 0, '2023-11-15 06:17:17'),
(17, 7, 4, 0, '2023-11-15 06:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `bb_accounts`
--

CREATE TABLE `bb_accounts` (
  `ba_id` smallint(4) NOT NULL,
  `ba_name` varchar(50) NOT NULL,
  `ba_ident` varchar(20) NOT NULL,
  `ba_num` varchar(20) NOT NULL,
  `ba_email` varchar(50) NOT NULL,
  `ba_pass` varchar(40) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bb_accounts`
--

INSERT INTO `bb_accounts` (`ba_id`, `ba_name`, `ba_ident`, `ba_num`, `ba_email`, `ba_pass`, `c_at`) VALUES
(3, 'عبد الرحمن الجهوري', '2134567855', '77869574', 'aly@gmail.com', '1qaz', '2023-11-15 06:11:40'),
(4, 'عبد الوهاب الأنصاري', '2145867954', '735866008', 'abdul23@gmail.com', '1576387', '2023-10-31 06:59:46'),
(5, 'رامي الأحمدي', '258324312564', '715964344', 'ramialahmdy@gmail.com', '348722876', '2023-11-08 22:08:16'),
(6, 'سعيد يوسف', '2168774324', '77664532', 'saeed@gmail.com', '1234567', '2023-11-15 14:26:26'),
(8, 'مراد أحمد', '213345675543', '776865554', 'morad@gmail.com', '11111111', '2023-11-10 13:44:34'),
(9, 'وليد أحمد', '215546677890', '776686954', 'waleedahmed3@hotmail.com', '666876954', '2023-11-10 13:43:05'),
(10, 'طه محمد ', '45737685493', '776855432', 'taha23@gmail.com', '564481e4', '2023-11-09 16:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `bld_groups`
--

CREATE TABLE `bld_groups` (
  `bld_id` tinyint(2) NOT NULL,
  `grp_name` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bld_groups`
--

INSERT INTO `bld_groups` (`bld_id`, `grp_name`) VALUES
(1, 'A+'),
(2, 'B+'),
(3, 'O+'),
(4, 'AB+'),
(5, 'A-'),
(6, 'B-'),
(7, 'O-'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `bld_req_archive`
--

CREATE TABLE `bld_req_archive` (
  `arch_id` int(7) NOT NULL,
  `ho_id` smallint(4) NOT NULL,
  `bp_id` mediumint(5) NOT NULL,
  `ha_id` smallint(4) NOT NULL,
  `h_id` smallint(4) NOT NULL,
  `bld_id` tinyint(1) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bld_req_archive`
--

INSERT INTO `bld_req_archive` (`arch_id`, `ho_id`, `bp_id`, `ha_id`, `h_id`, `bld_id`, `c_at`) VALUES
(1, 3, 4, 2, 3, 4, '2023-11-13 14:29:32'),
(2, 4, 5, 2, 3, 5, '2023-11-13 17:11:36'),
(3, 5, 11, 2, 3, 4, '2023-11-14 19:07:02'),
(4, 6, 12, 1, 1, 4, '2023-11-15 06:35:49'),
(5, 7, 13, 1, 1, 4, '2023-11-15 09:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `blood_inventory`
--

CREATE TABLE `blood_inventory` (
  `bp_id` mediumint(5) NOT NULL,
  `ba_id` smallint(4) NOT NULL,
  `bld_id` tinyint(1) NOT NULL,
  `c_id` tinyint(2) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_inventory`
--

INSERT INTO `blood_inventory` (`bp_id`, `ba_id`, `bld_id`, `c_id`, `c_at`) VALUES
(10, 6, 7, 4, '2023-11-14 15:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `camp_donors`
--

CREATE TABLE `camp_donors` (
  `cd_id` smallint(4) NOT NULL,
  `u_id` int(8) NOT NULL,
  `ch_id` smallint(4) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `camp_donors`
--

INSERT INTO `camp_donors` (`cd_id`, `u_id`, `ch_id`, `amount`, `c_at`) VALUES
(1, 14, 5, 5169, '2023-11-13 15:07:35'),
(2, 14, 5, 100000, '2023-11-13 15:10:37'),
(3, 42, 7, 100000, '2023-11-13 17:14:22'),
(4, 14, 5, 100000, '2023-11-14 19:09:15'),
(5, 14, 9, 200000, '2023-11-15 06:43:00'),
(6, 14, 10, 10000, '2023-11-15 06:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `camp_volunteers`
--

CREATE TABLE `camp_volunteers` (
  `cv_id` smallint(4) NOT NULL,
  `u_id` int(8) NOT NULL,
  `vol_id` smallint(4) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `camp_volunteers`
--

INSERT INTO `camp_volunteers` (`cv_id`, `u_id`, `vol_id`, `c_at`) VALUES
(1, 14, 15, '2023-11-13 15:03:31'),
(2, 14, 6, '2023-11-13 15:03:55'),
(3, 42, 9, '2023-11-13 17:13:13'),
(4, 14, 1, '2023-11-14 19:09:54'),
(5, 14, 11, '2023-11-15 06:40:33'),
(6, 14, 7, '2023-11-15 06:40:52'),
(7, 14, 6, '2023-11-15 06:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `char_camp`
--

CREATE TABLE `char_camp` (
  `ch_id` smallint(4) NOT NULL,
  `ch_name` varchar(100) NOT NULL,
  `ch_city` tinyint(2) NOT NULL,
  `ch_goal` decimal(10,0) NOT NULL,
  `ch_raised` decimal(10,0) NOT NULL DEFAULT 0,
  `ch_founder` varchar(70) NOT NULL,
  `ch_details` varchar(20000) NOT NULL,
  `ch_status` tinyint(1) NOT NULL DEFAULT 1,
  `ch_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `char_camp`
--

INSERT INTO `char_camp` (`ch_id`, `ch_name`, `ch_city`, `ch_goal`, `ch_raised`, `ch_founder`, `ch_details`, `ch_status`, `ch_date`) VALUES
(1, 'توفير 500 حقيبة مدرسية للطلاب', 19, 6500000, 0, 'منصة إنقاذ', 'حملة من قبل منصة إنقاذ  للطلاب والطالبات في مدارس محافظة المهره من أجل دعم عملية التعليم  ومساعدتهم بتوفير إحتياجاتهم الأساسية للتعليم', 1, '2023-09-20'),
(3, 'سلل غذائية', 8, 3000000, 0, 'منصة إنقاذ', 'سلل غذائية توزع للعوائل الفقيرة في محافظة الحديدة', 1, '2023-10-31'),
(4, 'مشروع علاج مرضى السرطان', 4, 1500000000, 0, 'منصة إنقاذ', 'مشروع علاج مرضى السرطان في عدة مستشفيات في محافظة حضروت', 1, '2023-11-02'),
(5, 'حملة تبرع لفلسطين', 1, 60000000, 205169, 'منصة إنقاذ', 'حملة للتبرع لفلسطين ', 1, '2023-11-06'),
(6, 'تأثيث فصول دراسية', 9, 4000000, 0, 'وزارة التعليم', 'حملة لتأثيث الفصول الدراسية في محافظة الجوف تنظمها وزارة التعليم', 1, '2023-11-08'),
(7, 'دعم المراكز الإسلامية', 21, 5600000, 100000, 'منصة إنقاذ', 'حملة لدعم المراكز الإسلامية في شبوة', 1, '2023-11-08'),
(8, 'وجبات غذائية لطلاب المدارس', 3, 7000000, 0, 'وزارة التعليم', 'حملة تم تنظيمها من وزارة التربية والتعليم  ومنصة إنقاذ لتوفير الوجبات الغذائية للطلاب المحتاجين في مدارس محافظة أبين', 1, '2023-11-08'),
(9, 'بئر يدوي بمضخة عمق 20 متر', 2, 10000000, 200000, 'مؤسسة هارون الجهوري', 'حملة تنظمها مؤسسة هارون الجهوري الخيرية لحفرة 5 آبار في محافظة لحج \r\n\r\n\r\n\r\n\r\n', 1, '2023-11-08'),
(10, 'مشروع حلقات تحفيظ القرآن', 7, 3000000, 10000, 'منصة إنقاذ', 'مشروع حلقات تحفيظ القرآن للأطفال بادر الان وساهم في تعليم آية من كتاب الله صدقة عنك وعن والديك وقال رسول الله صلى الله عليه و سلم ( خَيْرُكُمْ مَن تَعَلَّمَ القُرْآنَ وعَلَّمَهُ ) فبين هذا الحديث أن خير الناس من تعلم القرآن حفظا و أحكاما و تلاوة و علّم هذا العلم غيره و هذه الخيرية مطلقة لأنها متعلقة بكلام الله و خير الكلام كلام الله ', 1, '2023-11-08'),
(11, 'مشروع دار الأيتام', 14, 6000000, 0, 'دار الأيتام في مأرب', 'تنمية روح التعاون والتعاضد والعطاء بين أفراد المجتمع. تنشئة وتربية الأيتام التربية السليمة. ورفع مستوى الطلبة الأكاديمي والمهني.', 1, '2023-11-08'),
(12, 'عمرة ودعوة', 11, 4500000, 0, 'وزارة الأوقاف و الإرشاد', 'مشروع يهدف لإقامة رحلة عمرة دعوية للشباب وطلاب العلم في ذمار يتخللها دروس دعوية مع ثلة من العلماء والمشايخ.', 1, '2023-11-08'),
(13, 'مشروع الكلمة الطيبة ', 1, 2000000, 0, 'وزارة الأوقاف و الإرشاد', 'يهتم هذا المشروع اهتماماً كبيراً بالدعوة إلى الله تعالى، وطباعة الكتب والمؤلفات الدعوية، لرفع وعي المسلمين وغيرهم بهذا الدين العظيم ورسوله الكريم صلى الله عليه وسلم، وليظل هذا المشروع صدقة جارية للمتبرع الكريم بطباعة كتاب تورث ويجري ثوابها له إلى ما شاء الله.\r\n\r\nقال تعالى\"وَمَنْ أَحْسَنُ قَوْلاً مِمَّنْ دَعَا إِلَى اللَّهِ وَعَمِلَ صَالِحاً وَقَالَ إِنَّنِي مِنَ الْمُسْلِمِينَ', 1, '2023-11-08'),
(14, 'سقيا ماء للنازحين', 2, 2300000, 0, 'منصة إنقاذ', 'حملة سقيا ماء لمخيمات النازحين في مناطقة لحج والمناطق المجاورة\r\n', 1, '2023-11-08'),
(15, 'مشروع تفريج كربة', 19, 75000000, 0, 'منصة إنقاذ', 'قال رسول الله ﷺ \"من فرَّج عن مسلم كربة من كرب الدنيا فرَّج الله عنه كربة من كربات يوم القيامة\"، نسعى من خلال هذا المشروع إلى تفريج كربة أسر متعففة من خلال توفير سكن مناسب لها تشعر من خلاله بالأمان والخصوصية ويوفر لها حياة كريمة، ولا تخفى أهمية السكن في بناء الأسرة الصالحة.', 1, '2023-11-08'),
(16, 'بناء منازل الفقراء', 1, 40000000, 0, 'وزارة التعليم', '1- تخفيف المعاناة عن كاهل الفقراء. 2- توفير سكن آمن للفقراء خاصة الأرامل و الأيتام. 3- تحقيق روح التكافل و التعاون بين المسلمين.', 1, '2023-11-08'),
(17, 'سقيا ماء', 1, 5000000, 0, 'مؤسسة هارون الجهوري', 'وضع برادات بالشوارع العامة في مدينة عدن', 1, '2023-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `c_id` tinyint(2) NOT NULL,
  `c_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`c_id`, `c_name`) VALUES
(1, 'عدن'),
(2, 'لحج'),
(3, 'أبين'),
(4, 'حضرموت'),
(5, 'صنعاء'),
(6, 'عمران'),
(7, 'البيضاء'),
(8, 'الحديدة'),
(9, 'الجوف'),
(10, 'المحويت'),
(11, 'ذمار'),
(12, 'حجة'),
(13, 'إب'),
(14, 'مأرب'),
(15, 'ريمة'),
(16, 'صعدة'),
(17, 'تعز'),
(18, 'الضالع'),
(19, 'المهرة'),
(20, 'سقطرى'),
(21, 'شبوة');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(4) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `f_name`, `l_name`, `email`, `msg`) VALUES
(1, 'عبد الله ', 'أحمد', 'moh@gmail.com', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `h_id` smallint(4) NOT NULL,
  `h_city` tinyint(2) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`h_id`, `h_city`, `h_name`, `c_at`) VALUES
(1, 1, 'مستشفى السلام', '2023-09-21 05:22:18'),
(2, 18, 'مستشفى النصر', '2023-11-10 13:10:08'),
(3, 1, 'مستشفى عدن الألماني', '2023-09-22 01:48:27'),
(4, 1, 'مستشفى النقيب', '2023-11-08 16:50:07'),
(5, 5, 'مستشفى السعودي الألماني', '2023-10-31 06:29:34'),
(6, 1, 'مستشفى  الوالي', '2023-11-01 01:31:22'),
(7, 2, 'مستشفى لحج', '2023-11-02 07:20:37'),
(8, 5, 'مستشفى الثورة', '2023-11-08 19:46:44'),
(9, 17, 'مستشفى الرازي', '2023-11-08 19:47:38'),
(10, 17, 'مستشفى التعاون الدولي', '2023-11-08 19:48:16'),
(11, 4, 'مستشفى الريان', '2023-11-08 19:49:18'),
(12, 4, 'مستشفى الثقافة الطبي', '2023-11-08 19:49:42'),
(13, 13, 'مستشفى السعيد', '2023-11-08 19:50:22'),
(14, 13, 'مستشفى الورد الأبيض', '2023-11-08 19:50:42'),
(15, 1, 'مستشفى آزال', '2023-11-08 19:58:06'),
(16, 3, 'مستشفى زنجبار', '2023-11-08 19:58:52'),
(17, 4, 'مستشفى البرج الاستشاري', '2023-11-08 20:00:03'),
(18, 19, 'مستشفى الغيضة المركزي', '2023-11-08 20:00:33'),
(19, 8, 'مستشفى السلخانة', '2023-11-08 20:01:31'),
(20, 9, 'مستشفى الجوف العام', '2023-11-08 20:03:06'),
(21, 11, 'مستشفى دار الشفاء', '2023-11-08 20:07:55'),
(22, 11, 'مستشفى ذمار العام', '2023-11-08 20:12:10'),
(23, 18, 'مستشفى الرفاعي', '2023-11-08 20:14:24'),
(25, 2, 'مستشفى الحكمة', '2023-11-13 15:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals_orders`
--

CREATE TABLE `hospitals_orders` (
  `ho_id` smallint(4) NOT NULL,
  `bp_id` mediumint(5) NOT NULL,
  `ha_id` smallint(4) NOT NULL,
  `h_id` smallint(4) NOT NULL,
  `bld_id` tinyint(1) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospitals_orders`
--

INSERT INTO `hospitals_orders` (`ho_id`, `bp_id`, `ha_id`, `h_id`, `bld_id`, `c_at`) VALUES
(1, 1, 4, 4, 3, '2023-11-10 14:14:23'),
(2, 2, 1, 1, 3, '2023-11-10 14:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `hos_emp_acc`
--

CREATE TABLE `hos_emp_acc` (
  `ha_id` smallint(4) NOT NULL,
  `h_id` smallint(4) NOT NULL,
  `ha_name` varchar(50) NOT NULL,
  `ha_email` varchar(50) NOT NULL,
  `ha_pass` varchar(40) NOT NULL,
  `ha_gender` tinyint(1) NOT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hos_emp_acc`
--

INSERT INTO `hos_emp_acc` (`ha_id`, `h_id`, `ha_name`, `ha_email`, `ha_pass`, `ha_gender`, `c_at`) VALUES
(1, 1, 'عبد الله اليافعي', 'abd@gmail.com', '1234567', 1, '2023-10-02 01:37:31'),
(2, 3, 'احمد محمد', 'ahmed@gmail.com', '11111111', 1, '2023-11-10 13:48:28'),
(3, 20, 'مبارك أحمد', 'mobarkahmed443@gmail.com', '554857Aa2', 1, '2023-11-10 13:11:31'),
(4, 4, 'يوسف عبد القوي صالح', 'yu348@gmail.com', '36476', 1, '2023-11-01 00:55:26'),
(6, 7, 'فارس هرهرة', 'fares@gmail.com', '34725876', 1, '2023-11-02 07:21:34'),
(7, 16, 'منير أحمد', 'moner34@gmail.com', '6684A834', 1, '2023-11-10 13:11:59'),
(8, 6, 'هيثم الناصري', 'hytham@gmail.com', 'ahjks2673', 1, '2023-11-02 07:32:53'),
(9, 9, 'هيثم قاسم', 'haytham@gmail.com', 'Am337564', 1, '2023-11-08 20:48:48'),
(10, 17, 'صالح عبدالقوي', 'saleh353@gmail.com', '66776677a', 1, '2023-11-08 21:43:44'),
(11, 11, 'مهند العمري', 'mohand32@gmail.com', '5456Ab45434', 1, '2023-11-08 21:45:01'),
(14, 25, 'عارف قاسم', 'erqroh@gmail.com', '123321', 1, '2023-11-13 15:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(8) NOT NULL,
  `u_name` varchar(60) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_pass` varchar(40) NOT NULL,
  `u_ident` varchar(20) NOT NULL,
  `u_f_num` varchar(20) NOT NULL,
  `u_s_num` varchar(20) DEFAULT NULL,
  `u_city` tinyint(2) NOT NULL,
  `u_district` varchar(40) NOT NULL,
  `u_gender` tinyint(1) NOT NULL,
  `bld_id` tinyint(1) NOT NULL,
  `u_status` tinyint(1) NOT NULL,
  `u_dob` date NOT NULL,
  `l_d_d` date DEFAULT NULL,
  `c_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_pass`, `u_ident`, `u_f_num`, `u_s_num`, `u_city`, `u_district`, `u_gender`, `bld_id`, `u_status`, `u_dob`, `l_d_d`, `c_at`) VALUES
(13, 'ناصر', 'naser@gmail.com', '12345678', '6787658765443', '778654321', '78976543', 7, 'المنصورة', 1, 2, 0, '2023-09-21', '2023-09-13', '2023-11-15 06:15:43'),
(14, 'سام فيصل', 'sam@gmail.com', '1234567', '346425849863', '8765435', '3456854', 1, 'المنصورة', 1, 4, 2, '2008-05-21', '2021-01-06', '2023-11-15 09:11:13'),
(15, 'سالم المفلحي', 'salemalmflhy@gmail.com', '1234', '987654221232', '786543', '57687', 1, 'المنصورة', 1, 3, 0, '2002-04-05', '2021-09-13', '2023-11-15 06:16:50'),
(16, 'محمد الحازمي', 'mohamed77@gmail.com', '77777777', '78968575', '73687695', '78976543', 7, '', 1, 2, 0, '2023-11-14', '2023-11-30', '2023-11-15 06:17:17'),
(17, ' سعيد الحازمي', 'sayedhazmi@gmail.com', '5555', '78968575', '73687695', '78976543', 4, 'الوادي', 1, 7, 0, '2023-11-14', '2023-11-30', '2023-11-15 06:18:11'),
(18, 'وليد اليزيدي', 'waled@gmail.com', '123456', '68768576', '8678676', '05678666976', 2, 'يافع', 1, 2, 2, '2003-01-16', '0000-00-00', '2023-11-10 15:16:50'),
(19, 'عارف قاسم', 'arifqaseem@gmail.com', '88888888', '21475684', '7685765', '787977897', 2, 'يافع', 1, 3, 1, '2023-11-16', '0000-00-00', '2023-11-09 23:47:35'),
(28, 'محمد اليزيدي', 'mohyzed30@gmail.com', '987987', '346425848765', '711345567', '778767678', 13, 'الوادي', 1, 4, 1, '2023-11-23', '0000-00-00', '2023-11-08 18:28:07'),
(29, 'محمد البيشي', 'moh@gmail.com', '999xsa$', '889754321222', '778765312', '734432112', 5, 'لم يحدد', 1, 4, 1, '2023-11-09', '0000-00-00', '2023-11-08 18:23:54'),
(30, 'عبد الملك السروري', 'abdlumalik@gmail.com', '123456', '68746776', '77686575', '7686766', 1, 'المنصورة', 1, 3, 2, '2009-05-06', '2023-03-06', '2023-11-10 13:45:28'),
(31, 'عبد الله الجهوري', 'abdullahalghory@gmail.com', '78695AF#', '5674869', '775843523', '715869999', 1, 'المدينة التقنية', 1, 3, 1, '2000-06-08', '2022-06-08', '2023-11-08 17:35:53'),
(32, 'مدين فضل بن جوهر', 'madyn@gmail.com', '66587asdv6', '865764', '776685746', '77584663', 1, 'المنصورة', 1, 2, 1, '2002-01-29', '2022-06-08', '2023-11-08 17:51:44'),
(33, 'شادي لؤي', 'shady35@gmail.com', '7678A4578', '876654', '73667685`', '73465877', 4, 'القطن', 1, 3, 2, '2001-02-08', '0000-00-00', '2023-11-10 13:45:19'),
(34, 'عمار ياسر', 'ammar397@hotmail.com', '66877753sd', '8765947', '778865862', '71334251', 5, 'ارحب', 1, 2, 0, '2002-04-30', '0000-00-00', '2023-11-08 21:39:23'),
(35, 'طلال احمد', 'talalahmed34@gmail.com', '567df478', '786544444432', '778695843`', '735566742', 19, 'حوف', 1, 5, 1, '1980-11-20', '2021-01-22', '2023-11-08 18:33:55'),
(36, 'روان السالم', 'rawansalem493@gmail.com', '887657866', '667876654', '77686555', '73565543', 3, 'لم يحدد', 0, 3, 1, '2002-03-03', '0000-00-00', '2023-11-08 18:28:36'),
(37, 'فاطمة الأشبح', 'fatimah4409@gmail.com', '7768gg53', '679583334564', '776757865', '77658777', 11, 'لم يحدد', 0, 3, 1, '2002-01-08', '2023-03-23', '2023-11-08 18:28:30'),
(38, 'سوسن البريكي', 'sawsan223@gmail.com', '6675847', '667855778932', '776888695', '713556879', 9, 'لم يحدد', 0, 6, 1, '1998-01-08', '0000-00-00', '2023-11-08 18:28:24'),
(39, 'نواف وهيب', 'nawafwheeb34@gmail.com', 'XA4587388', '899998765437', '734432112', '778988879', 17, 'شرعب', 1, 2, 1, '1996-01-17', '0000-00-00', '2023-11-09 23:49:34'),
(40, 'تقي احمد', 'taqi20@gmai.com', '44556677', '4636434453222', '737865899', '713543211', 1, 'الإنشاءات', 1, 3, 2, '2004-07-16', '0000-00-00', '2023-11-09 15:37:29'),
(41, 'خالد وليد', 'khalid@gmail.com', '112211', '111111', '7753', '', 1, 'ؤؤ', 1, 1, 1, '2004-06-13', '0000-00-00', '2023-11-15 06:19:42'),
(42, 'سلطان محمد', 'a1h@gmail.com', '123', '211112211', '7784444', '', 1, 'المنصورة', 1, 5, 2, '2004-06-13', '0000-00-00', '2023-11-13 17:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `vol_camp`
--

CREATE TABLE `vol_camp` (
  `vol_id` smallint(4) NOT NULL,
  `vol_name` varchar(100) NOT NULL,
  `vol_city` tinyint(2) NOT NULL,
  `vol_location` varchar(150) NOT NULL,
  `vol_details` varchar(500) NOT NULL,
  `vol_founder` varchar(50) NOT NULL,
  `vol_date` date NOT NULL,
  `vol_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vol_camp`
--

INSERT INTO `vol_camp` (`vol_id`, `vol_name`, `vol_city`, `vol_location`, `vol_details`, `vol_founder`, `vol_date`, `vol_status`) VALUES
(1, 'تنظيف شارع عام', 1, 'شارع التسعين', 'تقام هذه الحملة من قبل  منصة إنقاذ لذلك للمحافظة على البيئة والاهتمام بنظافة الشوارع العامة والمعروفة في عدن ', 'بلدية العاصمة', '2023-10-11', 1),
(6, ' دروسًا خصوصية للأطفال في المدرسة', 1, 'المنصورة\r\n', 'أعطِ دروسًا خصوصية للأطفال في المدرسة في المواد التي تتقنها', 'وزارة التربيه و التعليم', '2023-12-27', 1),
(7, 'قدّم ألعابًا للاطفال ', 21, 'شبوة', 'قدّم ألعابًا للاطفال المرضى في المستشفيات.', 'مستشفى عتق', '2023-12-06', 1),
(8, 'تجميع ملابس الأطفال', 4, 'المكلا', 'قم بتجميع ملابس الأطفال وأعد استصلاحها ثمّ تبرّع بها للآباء المحتاجين.', 'منصة إنقاذ', '2023-12-07', 1),
(9, 'نظّم مسابقة أولمبياد صغيرة لأطفال الحيّ.', 21, 'عتق', 'نظّم مسابقة أولمبياد صغيرة لأطفال الحيّ.', 'منصة إنقاذ', '2023-11-29', 1),
(10, 'تطوّع في الجمعيات الخيرية', 5, 'جميعة الهدى', 'تطوّع في الجمعيات الخيرية التي تقدّم الطعام للفقراء أو ابدأ بمشروعك الخاص لإطعامهم.', 'منصة إنقاذ', '2023-11-21', 1),
(11, 'تطوّع لإصلاح منزل', 6, 'بيت عذاقة', 'تطوّع لإصلاح منزل أحد الفقراء أو تجديد ملجأ في عمران', 'منصة إنقاذ', '2023-11-26', 1),
(12, 'تبرّع بعدّة للإسعافات الأولية', 15, 'مديرية السلفية', 'تبرّع بعدّة للإسعافات الأولية وقدّمها للملاجئ أو دور الرعاية.', 'منصة إنقاذ', '2023-11-27', 1),
(13, 'دهن المقاعد في حديقة عامة ', 4, 'شبام', 'تطوّع لدهن المقاعد في حديقة عامة في شبام', 'منصة إنقاذ', '2023-11-27', 1),
(14, 'ازرع أشجارًا ', 4, 'القطن', 'ازرع أشجارًا ونباتات في الأراضي العامة الخالية. في منطقة القطن', 'منصة إنقاذ', '2023-11-29', 1),
(15, ' تثبيت الأضواء في الشوارع المعتمة', 1, 'خور مكسر', 'حملة لتثبيت المزيد من الأضواء في الشوارع المعتمة في منقطة الخور في عدن', 'منصة إنقاذ', '2023-11-28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `available_donors`
--
ALTER TABLE `available_donors`
  ADD KEY `u_id` (`u_id`),
  ADD KEY `bld_id` (`bld_id`),
  ADD KEY `u_city` (`u_city`);

--
-- Indexes for table `bb_accounts`
--
ALTER TABLE `bb_accounts`
  ADD PRIMARY KEY (`ba_id`);

--
-- Indexes for table `bld_groups`
--
ALTER TABLE `bld_groups`
  ADD PRIMARY KEY (`bld_id`);

--
-- Indexes for table `bld_req_archive`
--
ALTER TABLE `bld_req_archive`
  ADD PRIMARY KEY (`arch_id`),
  ADD KEY `ha_id` (`ha_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `bld_id` (`bld_id`);

--
-- Indexes for table `blood_inventory`
--
ALTER TABLE `blood_inventory`
  ADD PRIMARY KEY (`bp_id`),
  ADD KEY `ba_id` (`ba_id`),
  ADD KEY `bld_id` (`bld_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `camp_donors`
--
ALTER TABLE `camp_donors`
  ADD PRIMARY KEY (`cd_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `ch_id` (`ch_id`);

--
-- Indexes for table `camp_volunteers`
--
ALTER TABLE `camp_volunteers`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `vol_id` (`vol_id`);

--
-- Indexes for table `char_camp`
--
ALTER TABLE `char_camp`
  ADD PRIMARY KEY (`ch_id`),
  ADD KEY `ch_city` (`ch_city`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `h_city` (`h_city`);

--
-- Indexes for table `hospitals_orders`
--
ALTER TABLE `hospitals_orders`
  ADD PRIMARY KEY (`ho_id`),
  ADD KEY `bp_id` (`bp_id`),
  ADD KEY `ha_id` (`ha_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `bld_id` (`bld_id`);

--
-- Indexes for table `hos_emp_acc`
--
ALTER TABLE `hos_emp_acc`
  ADD PRIMARY KEY (`ha_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_city` (`u_city`),
  ADD KEY `bld_id` (`bld_id`);

--
-- Indexes for table `vol_camp`
--
ALTER TABLE `vol_camp`
  ADD PRIMARY KEY (`vol_id`),
  ADD KEY `vol_city` (`vol_city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bb_accounts`
--
ALTER TABLE `bb_accounts`
  MODIFY `ba_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bld_groups`
--
ALTER TABLE `bld_groups`
  MODIFY `bld_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bld_req_archive`
--
ALTER TABLE `bld_req_archive`
  MODIFY `arch_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blood_inventory`
--
ALTER TABLE `blood_inventory`
  MODIFY `bp_id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `camp_donors`
--
ALTER TABLE `camp_donors`
  MODIFY `cd_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `camp_volunteers`
--
ALTER TABLE `camp_volunteers`
  MODIFY `cv_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `char_camp`
--
ALTER TABLE `char_camp`
  MODIFY `ch_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `c_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `h_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hospitals_orders`
--
ALTER TABLE `hospitals_orders`
  MODIFY `ho_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hos_emp_acc`
--
ALTER TABLE `hos_emp_acc`
  MODIFY `ha_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `vol_camp`
--
ALTER TABLE `vol_camp`
  MODIFY `vol_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `available_donors`
--
ALTER TABLE `available_donors`
  ADD CONSTRAINT `available_donors_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `available_donors_ibfk_2` FOREIGN KEY (`bld_id`) REFERENCES `bld_groups` (`bld_id`),
  ADD CONSTRAINT `available_donors_ibfk_3` FOREIGN KEY (`u_city`) REFERENCES `cities` (`c_id`);

--
-- Constraints for table `bld_req_archive`
--
ALTER TABLE `bld_req_archive`
  ADD CONSTRAINT `bld_req_archive_ibfk_1` FOREIGN KEY (`ha_id`) REFERENCES `hos_emp_acc` (`ha_id`),
  ADD CONSTRAINT `bld_req_archive_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hospitals` (`h_id`),
  ADD CONSTRAINT `bld_req_archive_ibfk_3` FOREIGN KEY (`bld_id`) REFERENCES `bld_groups` (`bld_id`);

--
-- Constraints for table `blood_inventory`
--
ALTER TABLE `blood_inventory`
  ADD CONSTRAINT `blood_inventory_ibfk_1` FOREIGN KEY (`ba_id`) REFERENCES `bb_accounts` (`ba_id`),
  ADD CONSTRAINT `blood_inventory_ibfk_2` FOREIGN KEY (`bld_id`) REFERENCES `bld_groups` (`bld_id`),
  ADD CONSTRAINT `blood_inventory_ibfk_3` FOREIGN KEY (`c_id`) REFERENCES `cities` (`c_id`);

--
-- Constraints for table `camp_donors`
--
ALTER TABLE `camp_donors`
  ADD CONSTRAINT `camp_donors_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camp_donors_ibfk_2` FOREIGN KEY (`ch_id`) REFERENCES `char_camp` (`ch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `camp_volunteers`
--
ALTER TABLE `camp_volunteers`
  ADD CONSTRAINT `camp_volunteers_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `camp_volunteers_ibfk_2` FOREIGN KEY (`vol_id`) REFERENCES `vol_camp` (`vol_id`);

--
-- Constraints for table `char_camp`
--
ALTER TABLE `char_camp`
  ADD CONSTRAINT `char_camp_ibfk_1` FOREIGN KEY (`ch_city`) REFERENCES `cities` (`c_id`);

--
-- Constraints for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD CONSTRAINT `hospitals_ibfk_1` FOREIGN KEY (`h_city`) REFERENCES `cities` (`c_id`);

--
-- Constraints for table `hospitals_orders`
--
ALTER TABLE `hospitals_orders`
  ADD CONSTRAINT `hospitals_orders_ibfk_2` FOREIGN KEY (`ha_id`) REFERENCES `hos_emp_acc` (`ha_id`),
  ADD CONSTRAINT `hospitals_orders_ibfk_3` FOREIGN KEY (`h_id`) REFERENCES `hospitals` (`h_id`),
  ADD CONSTRAINT `hospitals_orders_ibfk_4` FOREIGN KEY (`bld_id`) REFERENCES `bld_groups` (`bld_id`);

--
-- Constraints for table `hos_emp_acc`
--
ALTER TABLE `hos_emp_acc`
  ADD CONSTRAINT `hos_emp_acc_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hospitals` (`h_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`u_city`) REFERENCES `cities` (`c_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`bld_id`) REFERENCES `bld_groups` (`bld_id`);

--
-- Constraints for table `vol_camp`
--
ALTER TABLE `vol_camp`
  ADD CONSTRAINT `vol_camp_ibfk_1` FOREIGN KEY (`vol_city`) REFERENCES `cities` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
