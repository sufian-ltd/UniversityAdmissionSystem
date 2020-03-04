-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 07:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_admission_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_05_27_161445_create_results_table', 1),
(18, '2019_05_31_034721_create_students_table', 1),
(19, '2019_05_31_154252_create_universities_table', 2),
(20, '2019_06_01_030048_create_units_table', 2),
(21, '2019_06_01_032620_create_universities_table', 3),
(22, '2019_06_01_032644_create_units_table', 3),
(23, '2019_06_01_040945_create_units_table', 4),
(24, '2019_11_24_060816_add_ssc_group_to_units_table', 5),
(25, '2019_11_24_060847_add_hsc_group_to_units_table', 5),
(26, '2019_11_24_070131_add_ssc_group_to_universities_table', 6),
(27, '2019_11_24_070207_add_hsc_group_to_universities_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll_no` int(11) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` double(8,2) NOT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `roll_no`, `subject_code`, `subject_name`, `subject_type`, `gpa`, `grade`, `created_at`, `updated_at`) VALUES
(1, 108853, 1001, 'Bengali', 'Compulsory', 5.00, 'A+', NULL, NULL),
(2, 108853, 1002, 'English', 'Compulsory', 5.00, 'A+', NULL, NULL),
(3, 108853, 1003, 'Mathematics', 'Compulsory', 5.00, 'A+', NULL, NULL),
(4, 108853, 1004, 'Social Science', 'Compulsory', 5.00, 'A+', NULL, NULL),
(5, 108853, 1005, 'Religion,Islam', 'Compulsory', 5.00, 'A+', NULL, NULL),
(6, 108853, 1006, 'Physics', 'Compulsory', 5.00, 'A+', NULL, NULL),
(7, 108853, 1007, 'Chemistry', 'Compulsory', 5.00, 'A+', NULL, NULL),
(8, 108853, 1008, 'Biology', 'Compulsory', 5.00, 'A+', NULL, NULL),
(9, 108853, 1009, 'Higher Mathematics', 'Additional', 5.00, 'A+', NULL, NULL),
(10, 102441, 2001, 'Bengali', 'Compulsory', 5.00, 'A+', NULL, NULL),
(11, 102441, 2002, 'English', 'Compulsory', 5.00, 'A+', NULL, NULL),
(12, 102441, 2003, 'Mathematics', 'Compulsory', 5.00, 'A+', NULL, NULL),
(13, 102441, 2004, 'Physics', 'Compulsory', 5.00, 'A+', NULL, NULL),
(14, 102441, 2005, 'Chemistry', 'Compulsory', 5.00, 'A+', NULL, NULL),
(15, 102441, 2006, 'Biology', 'Additional', 5.00, 'A+', NULL, NULL),
(16, 219964, 1001, 'Bengali', 'Compulsory', 5.00, 'A+', NULL, NULL),
(17, 219964, 1002, 'English', 'Compulsory', 5.00, 'A+', NULL, NULL),
(18, 219964, 1003, 'Mathematics', 'Compulsory', 5.00, 'A+', NULL, NULL),
(19, 219964, 1004, 'Social Science', 'Compulsory', 5.00, 'A+', NULL, NULL),
(20, 219964, 1005, 'Religion,Islam', 'Compulsory', 5.00, 'A+', NULL, NULL),
(21, 219964, 1006, 'Physics', 'Compulsory', 5.00, 'A+', NULL, NULL),
(22, 219964, 1007, 'Chemistry', 'Compulsory', 5.00, 'A+', NULL, NULL),
(23, 219964, 1008, 'Biology', 'Compulsory', 5.00, 'A+', NULL, NULL),
(24, 219964, 1009, 'Higher Mathematics', 'Additional', 3.00, 'A+', NULL, NULL),
(25, 320075, 2001, 'Bengali', 'Compulsory', 4.00, 'A', NULL, NULL),
(26, 320075, 2002, 'English', 'Compulsory', 4.00, 'A', NULL, NULL),
(27, 320075, 2003, 'Mathematics', 'Compulsory', 4.00, 'A', NULL, NULL),
(28, 320075, 2004, 'Physics', 'Compulsory', 4.00, 'A', NULL, NULL),
(29, 320075, 2005, 'Chemistry', 'Compulsory', 4.00, 'A', NULL, NULL),
(30, 320075, 2006, 'Biology', 'Additional', 4.00, 'A', NULL, NULL),
(31, 545125, 1001, 'Bengali', 'Compulsory', 4.00, 'A', NULL, NULL),
(32, 545125, 1002, 'English', 'Compulsory', 4.00, 'A', NULL, NULL),
(33, 545125, 1003, 'Mathematics', 'Compulsory', 4.00, 'A', NULL, NULL),
(34, 545125, 1004, 'Social Science', 'Compulsory', 4.00, 'A', NULL, NULL),
(35, 545125, 1005, 'Religion,Islam', 'Compulsory', 4.00, 'A', NULL, NULL),
(36, 545125, 1006, 'Physics', 'Compulsory', 4.00, 'A', NULL, NULL),
(37, 545125, 1007, 'Chemistry', 'Compulsory', 4.00, 'A', NULL, NULL),
(38, 545125, 1008, 'Biology', 'Compulsory', 4.00, 'A', NULL, NULL),
(39, 545125, 1009, 'Higher Mathematics', 'Additional', 0.00, 'B', NULL, NULL),
(40, 121453, 2001, 'Bengali', 'Compulsory', 3.50, 'A-', NULL, NULL),
(41, 121453, 2002, 'English', 'Compulsory', 3.50, 'A-', NULL, NULL),
(42, 121453, 2003, 'Mathematics', 'Compulsory', 3.50, 'A-', NULL, NULL),
(43, 121453, 2004, 'Physics', 'Compulsory', 3.50, 'A-', NULL, NULL),
(44, 121453, 2005, 'Chemistry', 'Compulsory', 3.50, 'A-', NULL, NULL),
(45, 121453, 2006, 'Biology', 'Additional', 3.50, 'A-', NULL, NULL),
(46, 412312, 1001, 'Bengali', 'Compulsory', 3.50, 'A-', NULL, NULL),
(47, 412312, 1002, 'English', 'Compulsory', 3.50, 'A-', NULL, NULL),
(48, 412312, 1003, 'Mathematics', 'Compulsory', 3.50, 'A-', NULL, NULL),
(49, 412312, 1004, 'Social Science', 'Compulsory', 3.50, 'A-', NULL, NULL),
(50, 412312, 1005, 'Religion,Islam', 'Compulsory', 3.50, 'A-', NULL, NULL),
(51, 412312, 1006, 'Physics', 'Compulsory', 3.50, 'A-', NULL, NULL),
(52, 412312, 1007, 'Chemistry', 'Compulsory', 3.50, 'A-', NULL, NULL),
(53, 412312, 1008, 'Biology', 'Compulsory', 4.00, 'A', NULL, NULL),
(54, 412312, 1009, 'Higher Mathematics', 'Additional', 0.00, 'B', NULL, NULL),
(55, 452136, 2001, 'Bengali', 'Compulsory', 3.00, 'B', NULL, NULL),
(56, 452136, 2002, 'English', 'Compulsory', 3.00, 'B', NULL, NULL),
(57, 452136, 2003, 'Mathematics', 'Compulsory', 3.00, 'B', NULL, NULL),
(58, 452136, 2004, 'Physics', 'Compulsory', 3.00, 'B', NULL, NULL),
(59, 452136, 2005, 'Chemistry', 'Compulsory', 3.00, 'B', NULL, NULL),
(60, 452136, 2006, 'Biology', 'Additional', 3.00, 'B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `roll_no` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_hsc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` double(8,2) NOT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`roll_no`, `reg_no`, `group`, `name`, `center`, `institution`, `std_type`, `passing_year`, `ssc_hsc`, `gpa`, `grade`, `created_at`, `updated_at`) VALUES
(102441, 643395, 'Commerce', 'Sanjida Kamal Rumky', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2019', 'hsc', 5.00, 'A+', NULL, '2019-12-02 10:26:42'),
(108853, 836454, 'Commerce', 'Sanjida Kamal Rumky', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2017', 'ssc', 5.00, 'A+', NULL, NULL),
(121453, 121413, 'Science', 'Fahmida Ruba', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2019', 'hsc', 3.50, 'A-', NULL, NULL),
(219964, 947565, 'Science', 'Nadia Ayrin', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2017', 'ssc', 5.00, 'A+', NULL, NULL),
(320075, 158676, 'Science', 'Nadia Ayrin', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2019', 'hsc', 4.00, 'A', NULL, NULL),
(412312, 245434, 'Science', 'Tasnuba Nur', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2017', 'ssc', 3.50, 'A-', NULL, NULL),
(452136, 245434, 'Science', 'Tasnuba Nur', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2019', 'hsc', 3.00, 'B', NULL, NULL),
(545125, 232434, 'Science', 'Fahmida Ruba', 'Chittagong', 'BMS Girls High School & College', 'Regular', '2017', 'ssc', 4.00, 'A', NULL, NULL),
(562310, 455656, 'Science', 'Nowshin Nur', 'Dhaka', 'Dhaka College', 'Regular', '2017', 'ssc', 4.35, 'A', '2019-11-26 11:35:59', '2019-11-27 21:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uni_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_req` double(8,2) NOT NULL,
  `hsc_req` double(8,2) NOT NULL,
  `total_req` double(8,2) NOT NULL,
  `seat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ssc_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `uni_id`, `name`, `subject`, `ssc_req`, `hsc_req`, `total_req`, `seat`, `created_at`, `updated_at`, `ssc_group`, `hsc_group`) VALUES
(1, 1, 'A', 'Physics(50),Chemistry(50),Mathematics(50), Environmental Science(50)', 4.00, 3.50, 7.50, 200, NULL, NULL, '1', '1'),
(2, 1, 'B', 'English(50),Economics(50), Anthropology(50), Public Administration(50),Law(50)', 3.50, 3.00, 6.50, 250, NULL, NULL, '123', '123'),
(3, 2, 'A', 'Physics(50),Chemistry(50),Mathematics(50), Environmental Science(50)', 3.50, 3.50, 7.50, 1849, NULL, NULL, '1', '1'),
(4, 2, 'B', 'Accounting(50), Finance and Banking(50), HRM(50), Marketing(50).', 3.25, 3.25, 7.00, 510, NULL, NULL, '123', '123'),
(5, 3, 'A', 'Arts,Law,Social Science,Fine Arts,Education Research Ins', 3.00, 3.00, 8.00, 200, NULL, NULL, '3', '3'),
(6, 3, 'B', 'Business Studies, Business Administration', 3.50, 3.50, 7.50, 250, NULL, NULL, '2', '2'),
(7, 8, 'A', 'MBBS(50)', 3.50, 3.50, 7.00, 50, NULL, NULL, '123', '123'),
(9, 18, 'KA', 'CSE(100), EEE(100), ME(100), CHE(100), URP(100), NAME(100), IPE(100), CIVIL(100), PME(100)\r\n', 4.00, 4.00, 9.00, 900, NULL, NULL, '123', '123'),
(10, 19, 'A', 'CSE(100), EEE(100), ME(100), CHE(100), URP(100), NAME(100), IPE(100), CIVIL(100), PME(100), Architecture(100)', 4.00, 4.00, 9.00, 1000, NULL, NULL, '123', '123'),
(11, 20, 'A', 'English(71),Bangla(71),Economics(66), Social Science(66) ,PSS(66), PAD(66), ANP(66), SCW(66), BUS(75)', 3.00, 3.00, 6.50, 613, NULL, NULL, '123', '123'),
(12, 1, 'C', 'Accounting(50), Finance and Banking(50), HRM(50), Marketing(50)', 3.50, 3.00, 6.50, 250, NULL, NULL, '12', '12'),
(13, 1, 'D', 'Psychology(50), Archieology(50), Anatomy(50)', 3.00, 3.00, 6.00, 150, NULL, NULL, '123', '123'),
(14, 2, 'C', 'Anthropology(50), Public Administration(50), English(50),Economics(50) ', 3.50, 3.50, 7.50, 200, NULL, NULL, '2', '2'),
(15, 2, 'D', 'Bootany(50), Zoology(50), Anatomy(50)', 3.25, 3.00, 7.00, 150, NULL, NULL, '123', '123'),
(18, 3, 'C', 'Science, Biology, Agriculture, Engineering', 3.50, 3.50, 8.00, 1574, NULL, NULL, '1', '1'),
(19, 4, 'A', 'ICT(50), CSE(50), Physics(50), Math(60), Chemistry(50),Statistics(50),Pharmacy(40)', 3.00, 3.00, 6.50, 350, NULL, NULL, '1', '1'),
(20, 4, 'B', 'Bangla(60), English(60), Anthropology(60), Economics(60), PAD(60), Law(50), Journalism(50), Archaeology(50)', 3.00, 3.00, 6.00, 450, NULL, NULL, '123', '123'),
(21, 22, 'KA', 'CSE(100), EEE(100), ME(100), CHE(100), URP(100), NAME(100), IPE(100), CIVIL(100), PME(100)', 4.00, 4.00, 9.00, 900, NULL, NULL, '123', '123'),
(22, 23, 'A', 'CSE(100), EEE(100), ME(100), CHE(100), URP(100), NAME(100), IPE(100), CIVIL(100), PME(100), Architecture(100)', 4.00, 4.00, 9.00, 1000, NULL, NULL, '123', '123'),
(23, 18, 'KHA', 'CSE(100), EEE(100), ME(100), CHE(100), URP(100), NAME(100), IPE(100), CIVIL(100), PME(100), Architecture(100)', 4.00, 4.00, 9.00, 1000, NULL, NULL, '123', '123'),
(24, 22, 'KHA', 'CSE(100), EEE(100), ME(100), CHE(100), URP(100), NAME(100), IPE(100), CIVIL(100), PME(100), Architecture(100)', 4.00, 4.00, 9.00, 1000, NULL, NULL, '123', '123'),
(25, 20, 'B', 'CSE(100), CEP(50), IPE(50), CEE(50) EEE(50), FPE(60),  AGE(60), CIVIL(50), ME(35), FET(40), PME(35), GEE(50) ,Architecture(30), Chemistry(65), OCG(30),  Physics(65), Math(80), Statistics(80), SWE(50), GEB(35), BMB(40), FES(55)', 3.00, 3.00, 7.00, 990, NULL, NULL, '1', '1'),
(26, 37, 'B', 'CSE(70), ECE(70), EEE(70), FPE(60),  AGE(60), CIVIL(50), ME(50), Architecture(35), Chemistry(75), Physics(75), Math(80), Statistics(80)\r\n\r\n\r\n', 3.50, 3.50, 7.00, 775, NULL, NULL, '1', '1'),
(27, 37, 'A', 'Agriculture(375), Fisheries(110), Veterinary(100)', 3.50, 3.50, 7.00, 585, NULL, NULL, '1', '1'),
(28, 38, 'A', 'CSE(50), EEE(35), IPE(40),PME(35),CHE(40),BME(20),TE(25)', 3.50, 3.50, 8.00, 245, NULL, NULL, '1', '1'),
(29, 38, 'B', 'MB(40), FMB(40), GEBT(40), PHARMACY(40),PHYSIOTHERAPY(20), NHS(10)', 3.50, 3.50, 8.00, 190, NULL, NULL, '1', '1'),
(30, 38, 'C', 'EST(40), NFT(40), APPT(40), CDM(15), Physics(40), Chemistry(40), Math(40)', 3.50, 3.50, 8.00, 255, NULL, NULL, '1', '1'),
(31, 38, 'D', 'English(40)', 3.50, 3.50, 7.50, 40, NULL, NULL, '123', '123'),
(32, 24, 'A', 'CSE(55), ICT(55), TE(60)', 3.00, 3.00, 6.50, 170, NULL, NULL, '1', '1'),
(33, 24, 'C', 'Physics(55),Chemistry(55),Mathematics(60), Statistics(60)', 3.00, 3.00, 6.50, 230, NULL, NULL, '1', '1'),
(34, 26, 'A', 'CSE(100), EEE(100), ICE(100)', 3.00, 3.00, 6.50, 300, NULL, NULL, '1', '1'),
(35, 26, 'B', 'Physics(50),Chemistry(50),Mathematics(50), Environmental Science(50)', 3.00, 3.00, 6.50, 200, NULL, NULL, '1', '1'),
(36, 26, 'D', 'English(50),Economics(50), Anthropology(50), Public Administration(50),Law(50)', 2.50, 2.50, 6.00, 250, NULL, NULL, '123', '123'),
(37, 26, 'C', 'Accounting(50), Finance and Banking(50), HRM(50), Marketing(50)', 3.00, 3.00, 6.50, 200, NULL, NULL, '12', '12'),
(38, 39, 'A', 'Agriculture, Fisheries, Veterinary, Husbandry, Disaster Management,Land Management, NFS,CSE', 2.75, 2.75, 6.00, 300, NULL, NULL, '1', '1'),
(39, 39, 'B', 'BBA(100)', 2.75, 2.75, 6.00, 200, NULL, NULL, '12', '12'),
(40, 40, 'A', 'CSE(14), EEE(40), ETE(40), ICE(40), CIVIL(40), URP(40) ,Architecture(30)', 3.50, 3.50, 8.00, 270, NULL, NULL, '1', '1'),
(41, 40, 'B', 'English(50),Economics(50),Bangla(50),Social Science(50),PAD(50),HBS(50)', 3.00, 3.00, 7.50, 300, NULL, NULL, '123', '123'),
(42, 25, 'A', 'CSE(60), EEE(50), ETE(50), ACCHE(50), CIVIL(50), FAE(50)', 3.00, 3.00, 7.00, 440, NULL, NULL, '1', '1'),
(43, 25, 'B', 'Physics(70),Chemistry(70),Mathematics(70), Environmental Science(100), Statistics(70)', 3.00, 3.00, 6.50, 380, NULL, NULL, '1', '1'),
(44, 26, 'E', 'English(50),Economics(50), Anthropology(50), Public Administration(50),Law(50)', 2.50, 2.50, 6.00, 250, NULL, NULL, '3', '3'),
(45, 26, 'F', 'English(50),Economics(50), Anthropology(50), Public Administration(50),Law(50)', 2.50, 2.50, 6.00, 250, NULL, NULL, '2', '2'),
(46, 37, 'C', 'Accounting(70), Finance(70), Management(70), Marketing(70)', 3.50, 3.50, 7.00, 280, NULL, NULL, '12', '12'),
(47, 37, 'D', 'Engilsh(105), Economics(105), Social Science(105), Development Studies(50)', 3.50, 3.50, 7.00, 365, NULL, NULL, '123', '123'),
(48, 24, 'B', 'ESRM(55), CPS(60), FTNS(55), BGE(55), Pharmacy(35), BMB(35)', 3.00, 3.00, 6.50, 295, NULL, NULL, '1', '1'),
(49, 24, 'D', 'Accounting(30), Economics(60), Management(30)', 3.00, 3.00, 6.50, 120, NULL, NULL, '123', '123'),
(50, 38, 'E', 'PESS(25)', 3.00, 3.00, 6.50, 25, NULL, NULL, '123', '123'),
(51, 38, 'F', 'Management(35), Finance(35), Marketing(35), Accounting(50)', 3.50, 3.50, 8.00, 155, NULL, NULL, '123', '123'),
(52, 41, 'A', 'CSE(55), ICT(55), TI(60)', 3.00, 3.00, 6.50, 170, NULL, NULL, '1', '1'),
(53, 41, 'B', 'ESRM(55), CPS(60), FTMS(55), BGE(55), Phermacy(35), BMB(35)', 3.00, 3.00, 6.50, 295, NULL, NULL, '1', '1'),
(54, 41, 'C', 'Chemistry(55), Math(60), Physics(55), Statistics(60)', 3.00, 3.00, 6.50, 230, NULL, NULL, '1', '1'),
(55, 41, 'D', 'Accounting(30), Management(30), Economics(60)', 3.00, 3.00, 6.50, 120, NULL, NULL, '123', '123'),
(56, 25, 'C', 'Pharmacy(50), MBM(50), BTE(50),Phycology(100), Botany(60)', 3.00, 3.00, 6.50, 310, NULL, NULL, '1', '1'),
(57, 25, 'D', 'English(70), Bangla(90), History(200)', 3.00, 3.00, 6.50, 360, NULL, NULL, '123', '123'),
(58, 25, 'E', 'Economics(70), Social Science(100), PAD(90), International Relation(100), Political Science(200)', 3.00, 3.00, 6.50, 560, NULL, NULL, '123', '123'),
(59, 25, 'F', 'Management Studies(70), Accounting Information System(70), Marketing(70), Finance & Banking(70), Tourism & Hospital Management(70)', 3.00, 3.00, 6.50, 350, NULL, NULL, '12', '12'),
(60, 25, 'G', 'LAW(100)', 3.00, 3.00, 6.50, 100, NULL, NULL, '123', '123'),
(61, 25, 'H', 'Agriculture(100), Fisheries & Marine Science(60), LSVM(50)', 3.00, 3.00, 6.50, 210, NULL, NULL, '1', '1'),
(62, 25, 'I', 'Architecture(35)', 3.00, 3.00, 7.00, 35, NULL, NULL, '1', '1'),
(63, 2, 'B1', 'Accounting(50), Finance and Banking(50), HRM(50), Marketing(50).', 3.25, 3.25, 7.00, 200, NULL, NULL, '123', '123'),
(64, 2, 'D1', 'Bootany(50), Zoology(50), Anatomy(50)', 2.50, 2.50, 6.00, 150, NULL, NULL, '123', '123'),
(65, 4, 'C', 'Education Management(60), Accounting(60), Marketing(60), Finance(60)', 3.00, 3.00, 6.00, 240, NULL, NULL, '12', '12'),
(66, 6, 'A', 'Architecture, CSE, EEE, URP, Math, Physics, Chemistry, BTGE, Environmental Science, Fisheries, Forestry, Pharmacy, Agrt, SWE', 4.50, 4.50, 9.00, 1000, NULL, NULL, '1', '1'),
(67, 6, 'B', 'English, Bangla, History, Economics, Social Science, Journalism, Law,Education & research', 4.00, 4.00, 8.00, 1000, NULL, NULL, '123', '123'),
(68, 6, 'C', 'Business Studies, HRM', 4.00, 4.00, 8.00, 200, NULL, NULL, '12', '12'),
(69, 6, 'D', 'Drawing & Painting, Printmaking, Skulpture', 3.50, 3.50, 7.00, 200, NULL, NULL, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(11) NOT NULL,
  `min_req` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ssc_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `type`, `category`, `location`, `unit`, `min_req`, `created_at`, `updated_at`, `ssc_group`, `hsc_group`) VALUES
(1, 'Dhaka University', 'Public', 'General', 'Dhaka', 4, 6.00, NULL, NULL, '123', '123'),
(2, 'Chittagong University', 'Public', 'General', 'Chittagong', 4, 6.00, NULL, NULL, '123', '123'),
(3, 'Rajshahi University', 'Public', 'General', 'Rajshahi', 4, 6.00, NULL, NULL, '123', '123'),
(4, 'Comilla University', 'Public', 'General', 'Comilla', 2, 6.00, NULL, NULL, '123', '123'),
(6, 'Khulna University', 'Public', 'General', 'Khulna', 4, 5.00, NULL, NULL, '123', '123'),
(8, 'Medical College', 'Public', 'Medical', 'Dhaka', 1, 7.00, NULL, NULL, '1', '1'),
(18, 'Bangladesh University of Engineering Technology', 'Public', 'Engineering', 'Dhaka', 2, 9.50, NULL, NULL, '1', '1'),
(19, 'Chittagong University of Engineering Technology', 'Public', 'Engineering', 'Chittagong', 1, 9.50, NULL, NULL, '1', '1'),
(20, 'Shahajalal University of Science & Technology', 'Public', 'Technology', 'Sylhet', 2, 6.50, NULL, NULL, '123', '123'),
(22, 'Rajshahi University of Engineering Technology', 'Public', 'Engineering', 'Chittagong', 2, 9.50, NULL, NULL, '1', '1'),
(23, 'khulna University of Engineering Technology', 'Public', 'Engineering', 'Chittagong', 1, 9.50, NULL, NULL, '1', '1'),
(24, 'Mowlana Bashani University of Science & Technology', 'Public', 'Technology', 'Sylhet', 2, 6.50, NULL, NULL, '123', '123'),
(25, 'Bangabandu Sheikh Mujibur Rahman Science & Technology University', 'Public', 'Technology', 'Dhaka', 0, 7.00, NULL, NULL, '123', '123'),
(26, 'Noakhali University of Science & Technology', 'Public', 'Technology', 'Chittagong', 6, 6.50, NULL, NULL, '123', '123'),
(27, 'North South University', 'Private', 'General', 'Dhaka', 4, 6.00, NULL, NULL, '123', '123'),
(28, 'East West University', 'Private', 'General', 'Dhaka', 4, 6.00, NULL, NULL, '123', '123'),
(29, 'Eastern University', 'Private', 'General', 'Dhaka', 4, 6.00, NULL, NULL, '123', '123'),
(30, 'Islamic University of Technology', 'Private', 'Engineering', 'Dhaka', 1, 9.00, NULL, NULL, '123', '123'),
(31, 'Brack University', 'Private', 'General', 'Dhaka', 4, 7.00, NULL, NULL, '123', '123'),
(32, 'Ahsanullah University of Science Technology', 'Private', 'Technology', 'Dhaka', 1, 8.00, NULL, NULL, '123', '123'),
(33, 'Premier University', 'Private', 'General', 'Chittagong', 4, 6.00, NULL, NULL, '123', '123'),
(34, 'International Islamic University', 'Private', 'General', 'Chittagong', 4, 6.00, NULL, NULL, '123', '123'),
(35, 'Southern University', 'Private', 'General', 'Chittagong', 4, 6.00, NULL, NULL, '123', '123'),
(36, 'Port City International University', 'Private', 'General', 'Chittagong', 4, 6.00, NULL, NULL, '123', '123'),
(37, 'Hazi Mohammad Danesh Science & Technology University', 'Public', 'Technology', 'Dinajpur', 2, 7.00, NULL, NULL, '123', '123'),
(38, 'Jessore Science & Technology University(JUST)', 'Public', 'Technology', 'Jessore', 4, 6.50, NULL, NULL, '123', '123'),
(39, 'Potuakhali Science & Technology University(PSTU)', 'Public', 'Technology', 'Potuakhali', 3, 6.00, NULL, NULL, '123', '123'),
(40, 'Pabna University of Science & Technology(PUST)', 'Public', 'Technology', 'Pabna', 2, 7.00, NULL, NULL, '123', '123'),
(41, 'Rangamati Science & Technology University(RMSTU)', 'Public', 'Technology', 'Dhaka', 2, 5.50, NULL, '2019-11-29 11:39:21', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
