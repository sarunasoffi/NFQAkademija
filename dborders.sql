-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 04:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dborders`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(11) NOT NULL,
  `order_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `first_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `place` varchar(64) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `phone_number` varchar(12) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `order_name`, `first_name`, `place`, `phone_number`, `date_time`) VALUES
(1, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Sarunas', 'Kaunas', '37022222222', '2018-02-17 13:07:50'),
(2, 'Poros fotosesija - 2 000â‚¬', 'Alona ir Tomas', 'GeguÅ¾iÅ³ gatvÄ—, Alytus', '37062221111', '2018-02-17 13:55:11'),
(3, 'Fotosesija su paÄiu Jonu - 20 000â‚¬', 'KÄ™stas', 'Torontas, Kanada', '37065111234', '2018-02-17 13:56:35'),
(4, 'GrupÄ—s fotosesija (darbo aplinkoje) - 2 000â‚¬', 'Gediminas', 'SavanoriÅ³ pr. 315, Kaunas', '37022111345', '2018-02-17 14:00:37'),
(5, 'VestuviÅ³ fotografas - 10 000â‚¬', 'GintarÄ—', 'Kaunas', '37011213333', '2018-02-17 14:49:02'),
(6, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Sarunas', 'Vilnius', '37022222222', '2018-02-17 14:57:32'),
(7, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Alona ir Tomas', 'Torontas, Kanada', '37065111234', '2018-02-17 14:59:08'),
(8, 'Fotosesija studijoje - 1 000â‚¬', 'Danielius ir Monika', 'Jurbarkas', '37021455151', '2018-02-18 15:07:01'),
(9, 'Fotosesija su paÄiu Jonu - 20 000â‚¬', 'JogailÄ—', 'JungtinÄ—s Amerikos Valstijos', '37041516131', '2018-02-18 15:12:16'),
(10, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Gediminas', 'Jurbarkas', '37022156775', '2018-02-18 15:12:39'),
(11, 'VestuviÅ³ fotografas - 10 000â‚¬', 'GintarÄ— ir Tomas', 'ÄŒeÄÄ—nija', '37094151511', '2018-02-18 15:13:03'),
(12, 'Poros fotosesija - 2 000â‚¬', 'Boni ir Klaidas', 'Teksasas, JAV', '37069696969', '2018-02-18 15:14:10'),
(13, 'Fotosesija jÅ«sÅ³ pasirinktoje vietoje - 2 000â‚¬', 'NikolÄ—', 'Å ilainiai, Kaunas', '37094165910', '2018-02-18 15:14:38'),
(14, 'Fotosesija studijoje - 1 000â‚¬', 'Juozapota', 'NeÅ¾inau', '37089419850', '2018-02-18 15:15:04'),
(15, 'Fotosesija jÅ«sÅ³ pasirinktoje vietoje - 2 000â‚¬', 'Edvinas su JÅ«rate', 'Torontas', '37084189111', '2018-02-18 15:15:32'),
(16, 'Fotosesija studijoje - 1 000â‚¬', 'Justas', 'Vilnius (darbo reikalais)', '37022222222', '2018-02-18 15:16:21'),
(17, 'Poros fotosesija - 2 000â‚¬', 'Gediminas Jaunius', 'Vilnius, Centras', '37022156787', '2018-02-18 15:16:45'),
(18, 'Poros fotosesija - 2 000â‚¬', 'Oksana Pikul', 'Kauno apylinkes teismo Kauno rumai', '37029174723', '2018-02-18 15:18:27'),
(19, 'GrupÄ—s fotosesija (darbo aplinkoje) - 2 000â‚¬', 'Jonas', 'Lietuva', '37022456771', '2018-02-18 15:21:18'),
(20, 'Fotosesija su paÄiu Jonu - 20 000â‚¬', 'Mantas Katleris', 'PanevÄ—Å¾ys', '37087378111', '2018-02-18 15:21:47'),
(21, 'Fotosesija studijoje - 1 000â‚¬', 'Aldona', 'RadviliÅ¡kis, Å½aliogi g.', '37089941981', '2018-02-18 15:37:20'),
(22, 'Poros fotosesija - 2 000â‚¬', 'Aldona ir KÄ™stis', 'Nebraska', '37025515115', '2018-02-18 15:37:45'),
(23, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Bronius', 'Å ilalÄ—, Nebroskio g. 6', '37081751111', '2018-02-18 15:38:15'),
(24, 'GrupÄ—s fotosesija (darbo aplinkoje) - 2 000â‚¬', 'Tomas', 'RadviliÅ¡kis, Lietuva', '37084141416', '2018-02-18 15:38:44'),
(25, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Petras', 'VÄ—riÅ¡kiÅ³ kaimas', '37043112949', '2018-02-18 15:39:16'),
(26, 'Fotosesija jÅ«sÅ³ pasirinktoje vietoje - 2 000â‚¬', 'Greta AnÄikauskaitÄ—', 'Vilniaus g., Å iauliai', '37084890122', '2018-02-18 15:46:58'),
(27, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Jonas', 'Kaunas', '37024166767', '2018-02-18 15:47:10'),
(28, 'VestuviÅ³ fotografas - 10 000â‚¬', 'GintarÄ— MarvikauÅ¡kytÄ—', 'Vilnius, Centras', '37084811156', '2018-02-18 15:47:57'),
(29, 'Poros fotosesija - 2 000â‚¬', 'Bronius ir Jolanta', 'Å niÅ«raiÄiÅ³ kaumas', '37082215666', '2018-02-18 15:48:30'),
(30, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Petras', 'Kaunas', '37022416161', '2018-02-18 15:48:42'),
(31, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Slapta (telefonu)', 'Vokietija, Berlynas', '37084890776', '2018-02-18 15:49:25'),
(32, 'Fotosesija jÅ«sÅ³ pasirinktoje vietoje - 2 000â‚¬', 'DomantÄ—', 'KlaipÄ—da, prie jÅ«ros', '37058018012', '2018-02-18 15:54:23'),
(33, 'Fotosesija studijoje - 1 000â‚¬', 'DÅ¾onis', 'Kur tik panorÄ—s Jonas', '37024510185', '2018-02-18 15:54:43'),
(34, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Giedrius Mazuronis', 'Vilnius', '37024151511', '2018-02-18 15:55:05'),
(35, 'GrupÄ—s fotosesija (darbo aplinkoje) - 2 000â‚¬', 'RamÅ«nas', 'Kaunas, Centras, LIDL', '37055111666', '2018-02-18 15:55:33'),
(36, 'Fotosesija su paÄiu Jonu - 20 000â‚¬', 'LaVar Ball', 'Prienai, Lietuva', '37051199333', '2018-02-18 15:56:16'),
(37, 'Fotosesija jÅ«sÅ³ pasirinktoje vietoje - 2 000â‚¬', 'VilkmergÄ—', 'KlaipÄ—da', '37083511667', '2018-02-18 15:56:58'),
(38, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Mantas Chanas', 'PanevÄ—Å¾ys', '37082215662', '2018-02-18 15:57:27'),
(39, 'Fotosesija su paÄiu Jonu - 20 000â‚¬', 'Å arÅ«nas JasikeviÄius', 'Kaunas, Å½algirio Arena', '37061910116', '2018-02-18 15:57:59'),
(40, 'GrupÄ—s fotosesija (darbo aplinkoje) - 2 000â‚¬', 'Karolis Bembis', 'Jurbarkas', '37082416787', '2018-02-18 15:59:05'),
(41, 'Poros fotosesija - 2 000â‚¬', 'Christopher Alesund', 'Sweden', '37084141555', '2018-02-18 16:04:41'),
(42, 'Fotosesija su paÄiu Jonu - 20 000â‚¬', 'Darius (paslaptis)', 'Utenos g., Utena', '37094115661', '2018-02-18 16:05:21'),
(43, 'VestuviÅ³ fotografas - 10 000â‚¬', 'DeimantÄ— RÅ«kienÄ—', 'PlungÄ—', '37044157888', '2018-02-18 16:06:35'),
(44, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Matas KentaviÄius', 'Utena', '37084167771', '2018-02-18 16:06:56'),
(45, 'Fotosesija jÅ«sÅ³ pasirinktoje vietoje - 2 000â‚¬', 'Kristina', 'LajÅ³ takas, AnykÅ¡Äiai', '37056177654', '2018-02-18 16:08:43'),
(46, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Å½ilvinas BrÅ«zga', 'Vilnius', '37065177962', '2018-02-18 16:09:04'),
(47, 'VestuviÅ³ fotografas - 10 000â‚¬', 'Valentina', 'Kaunas', '37021656611', '2018-02-18 16:10:44'),
(48, 'Fotosesija su paÄiu Jonu - 20 000â‚¬', 'Mindaugas Kuzminskas', 'Milanas, Mediolanum Forum', '37025169071', '2018-02-18 16:11:23'),
(49, 'GrupÄ—s fotosesija (darbo aplinkoje) - 2 000â‚¬', 'Kornelijus ir Kornelija', 'Vilnius, Centras', '37024167878', '2018-02-18 16:11:50'),
(50, 'Fotosesija studijoje - 1 000â‚¬', 'Jolanta', 'Jurbarkas', '37011657871', '2018-02-18 16:12:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
