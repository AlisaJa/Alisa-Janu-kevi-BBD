-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2018 m. Geg 30 d. 23:11
-- Server version: 10.2.13-MariaDB-10.2.13+maria~xenial-log
-- PHP Version: 5.6.34-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramanauskaite_alisa`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `darbo_grafikas`
--

CREATE TABLE `darbo_grafikas` (
  `tabel_nr_id` int(11) NOT NULL,
  `dg_id` int(11) NOT NULL,
  `dg_pav` varchar(50) NOT NULL,
  `darb_dat_nuo` date NOT NULL,
  `darbo_data_iki` date NOT NULL,
  `laikas_nuo` time NOT NULL,
  `laikas_iki` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `darbo_grafikas`
--

INSERT INTO `darbo_grafikas` (`tabel_nr_id`, `dg_id`, `dg_pav`, `darb_dat_nuo`, `darbo_data_iki`, `laikas_nuo`, `laikas_iki`) VALUES
(2, 1, 'Gruodis_A2', '2017-12-11', '2017-12-15', '09:00:00', '18:00:00'),
(1, 5, 'Admin-geg-1', '2018-05-14', '2018-05-18', '09:00:00', '18:00:00'),
(1, 3, 'Gruodis_A1', '2017-12-18', '2017-12-22', '09:00:00', '18:00:00'),
(2, 4, 'Gruodis_A2', '2017-12-27', '2017-12-29', '09:00:00', '18:00:00'),
(3, 4, 'Gruodis_KI3', '2017-12-04', '2017-12-09', '09:00:00', '18:00:00'),
(3, 6, 'Gruodis_KI3', '2017-12-18', '2017-12-22', '09:00:00', '18:00:00'),
(4, 7, 'Gruodis_KI4', '2017-12-11', '2017-12-15', '09:00:00', '18:00:00'),
(4, 8, 'Gruodis_KI4', '2017-12-27', '2017-12-29', '09:00:00', '18:00:00'),
(5, 10, 'Gruodis_MAN5', '2017-12-18', '2017-12-22', '09:00:00', '18:00:00'),
(6, 11, 'Gruodis_MAN6', '2017-12-11', '2017-12-15', '09:00:00', '18:00:00'),
(6, 12, 'Gruodis_MAN6', '2017-12-27', '2017-12-29', '09:00:00', '18:00:00'),
(7, 35, 'Kovas_V7', '2018-03-26', '2018-03-30', '09:00:00', '18:00:00'),
(7, 36, 'Balandis_V7', '2018-04-09', '2018-04-13', '09:00:00', '20:00:00'),
(8, 37, 'Balandis_V8', '2018-04-03', '2018-04-06', '09:00:00', '18:00:00'),
(8, 38, 'Balandis_V8', '2018-04-16', '2018-04-20', '09:00:00', '18:00:00'),
(9, 17, 'Gruodis_KO99', '2017-12-04', '2017-12-08', '09:00:00', '18:00:00'),
(9, 18, 'Gruodis_KO9', '2017-12-18', '2017-12-22', '09:00:00', '18:00:00'),
(10, 19, 'Gruodis_KO10', '2017-12-11', '2017-12-15', '09:00:00', '18:00:00'),
(10, 20, 'Gruodis_KO10', '2017-12-27', '2017-12-29', '09:00:00', '18:00:00'),
(11, 21, 'Gruodis_MAS11', '2017-12-11', '2017-12-15', '08:00:00', '19:00:00'),
(11, 22, 'Gruodis_MAS11', '2017-12-18', '2017-12-22', '09:00:00', '18:00:00'),
(12, 23, 'Gruodis_MAS12', '2017-12-11', '2017-12-15', '09:00:00', '18:00:00'),
(12, 24, 'Gruodis_MAS12', '2017-12-27', '2017-12-29', '09:00:00', '18:00:00'),
(3, 25, 'Kovas_KI3', '2018-03-19', '2018-03-23', '09:00:00', '18:00:00'),
(3, 26, 'Balandis_KI3', '2018-04-03', '2018-04-06', '09:00:00', '18:00:00'),
(4, 27, 'Kovas_KI4', '2018-03-26', '2018-03-30', '09:00:00', '18:00:00'),
(4, 28, 'Balandis_KI4', '2018-04-09', '2018-04-13', '09:00:00', '18:00:00'),
(5, 29, 'Kovas_MAN5', '2018-03-26', '2018-03-30', '09:00:00', '18:00:00'),
(5, 30, 'Balandis_MAN5', '2018-04-09', '2018-04-13', '09:00:00', '20:00:00'),
(6, 31, 'Balandis_MAN6', '2018-04-03', '2018-04-06', '09:00:00', '18:00:00'),
(6, 32, 'Balandis_MAN6', '2018-04-16', '2018-04-20', '09:00:00', '18:00:00'),
(3, 33, 'Balandis_KI3', '2018-04-16', '2018-04-20', '09:00:00', '18:00:00'),
(4, 34, 'Kovas_KI4', '2018-04-23', '2018-04-27', '09:00:00', '18:00:00'),
(7, 39, 'Balandis_V7', '2018-04-23', '2018-04-27', '09:00:00', '18:00:00'),
(9, 40, 'Kovas_KO9', '2018-03-26', '2018-03-30', '09:00:00', '18:00:00'),
(9, 41, 'Balandis_KO9', '2018-04-09', '2018-04-13', '09:00:00', '18:00:00'),
(10, 42, 'Balandis_KO10', '2018-04-03', '2018-04-06', '09:00:00', '18:00:00'),
(10, 43, 'Balandis_KO10', '2018-04-16', '2018-04-20', '09:00:00', '18:00:00'),
(9, 44, 'Balandis_KO9', '2018-04-23', '2018-04-27', '09:00:00', '18:00:00'),
(10, 45, 'Gegužė_KO10', '2018-04-30', '2018-05-04', '09:00:00', '18:00:00'),
(1, 4, 'Balandis_KI3', '2018-04-23', '2018-04-27', '09:00:00', '18:00:00'),
(2, 5, 'Admin-geg-2', '2018-05-07', '2018-05-11', '09:00:00', '18:00:00'),
(1, 9, 'Admin-liep-1', '2018-07-02', '2018-07-06', '09:00:00', '18:00:00'),
(1, 8, 'Admin-bir-1', '2018-06-18', '2018-06-22', '09:00:00', '18:00:00'),
(1, 7, 'Admin-bir-1', '2018-06-04', '2018-06-08', '09:00:00', '18:00:00'),
(1, 6, 'Admin-geg-1', '2018-05-21', '2018-05-25', '09:00:00', '18:00:00'),
(5, 33, 'Man-birz-5', '2018-06-04', '2018-06-08', '09:00:00', '18:00:00'),
(5, 32, 'Man-geg-5', '2018-05-21', '2018-05-25', '09:00:00', '18:00:00'),
(5, 31, 'Man-geg-5', '2018-05-14', '2018-05-18', '09:00:00', '18:00:00'),
(4, 38, 'Kirp-geg-4', '2018-05-07', '2018-05-11', '09:00:00', '18:00:00'),
(4, 37, 'Kirp-birz-4', '2018-06-11', '2018-06-15', '09:00:00', '18:00:00'),
(4, 36, 'Kirp-birz-4', '2018-06-25', '2018-06-29', '09:00:00', '18:00:00'),
(4, 35, 'Kirp-geg-4', '2018-05-28', '2018-06-01', '09:00:00', '18:00:00'),
(3, 38, 'Kirp-geg-3', '2018-05-14', '2018-05-18', '09:00:00', '18:00:00'),
(3, 37, 'Kirp-geg-3', '2018-05-21', '2018-05-25', '09:00:00', '18:00:00'),
(3, 36, 'Kirp-birz-3', '2018-06-04', '2018-06-08', '09:00:00', '18:00:00'),
(3, 35, 'Kirp-birz-3', '2018-06-18', '2018-06-22', '09:00:00', '18:00:00'),
(3, 34, 'Kirp-liep-3', '2018-07-02', '2018-07-06', '09:00:00', '18:00:00'),
(2, 9, 'Admin-geg-2', '2018-05-28', '2018-06-01', '09:00:00', '18:00:00'),
(5, 36, 'test22', '2018-05-23', '2018-05-24', '08:00:00', '08:00:00'),
(2, 8, 'Admin-bir-2', '2018-06-25', '2018-06-29', '09:00:00', '18:00:00'),
(2, 7, 'Admin-bir-2', '2018-06-11', '2018-06-15', '09:00:00', '18:00:00'),
(5, 34, 'Man-birz-5', '2018-06-18', '2018-06-22', '09:00:00', '18:00:00'),
(5, 35, 'Man-liep-5', '2018-07-02', '2018-07-06', '09:00:00', '18:00:00'),
(6, 33, 'Man-geg-6', '2018-05-07', '2018-05-11', '09:00:00', '18:00:00'),
(6, 34, 'Man-geg-6', '2018-05-28', '2018-06-01', '09:00:00', '18:00:00'),
(6, 35, 'Man-birz-6', '2018-06-25', '2018-06-29', '09:00:00', '18:00:00'),
(6, 36, 'Man-geg-6', '2018-06-11', '2018-06-15', '09:00:00', '18:00:00'),
(7, 40, 'Viz-geg-7', '2018-05-14', '2018-05-18', '09:00:00', '18:00:00'),
(7, 41, 'Viz-geg-7', '2018-05-21', '2018-05-25', '09:00:00', '18:00:00'),
(7, 42, 'Viz-birz-7', '2018-06-04', '2018-06-08', '09:00:00', '18:00:00'),
(7, 43, 'Viz-birz-7', '2018-06-18', '2018-06-22', '09:00:00', '18:00:00'),
(7, 44, 'Viz-liep-7', '2018-07-02', '2018-07-06', '09:00:00', '18:00:00'),
(8, 39, 'Viz-geg-8', '2018-05-07', '2018-05-11', '09:00:00', '18:00:00'),
(8, 40, 'Viz-geg-8', '2018-05-28', '2018-06-01', '09:00:00', '18:00:00'),
(8, 41, 'Viz-birz-8', '2018-06-25', '2018-06-29', '09:00:00', '18:00:00'),
(8, 42, 'Viz-birz-8', '2018-06-11', '2018-06-15', '09:00:00', '18:00:00'),
(9, 45, 'Kosm-geg-9', '2018-05-14', '2018-05-18', '09:00:00', '18:00:00'),
(9, 46, 'Kosm-geg-9', '2018-05-21', '2018-05-25', '09:00:00', '18:00:00'),
(9, 47, 'Kosm-birz-9', '2018-06-04', '2018-06-08', '09:00:00', '18:00:00'),
(9, 48, 'Kosm-birz-9', '2018-06-18', '2018-06-22', '09:00:00', '18:00:00'),
(9, 49, 'Kosm-liep-9', '2018-07-02', '2018-07-06', '09:00:00', '18:00:00'),
(10, 46, 'Kosm-geg-10', '2018-05-07', '2018-05-11', '09:00:00', '18:00:00'),
(10, 47, 'Kosm-birz-10', '2018-06-11', '2018-06-15', '09:00:00', '18:00:00'),
(10, 48, 'Kosm-birz-10', '2018-06-25', '2018-06-29', '09:00:00', '18:00:00'),
(10, 49, 'Kosm-geg-10', '2018-05-28', '2018-06-01', '09:00:00', '18:00:00'),
(11, 23, 'Mas-geg-11', '2018-05-14', '2018-05-18', '09:00:00', '18:00:00'),
(11, 24, 'Mas-geg-11', '2018-05-21', '2018-05-25', '09:00:00', '18:00:00'),
(11, 25, 'Mas-birz-11', '2018-06-04', '2018-06-08', '09:00:00', '18:00:00'),
(11, 26, 'Mas-birz-11', '2018-06-18', '2018-06-22', '09:00:00', '18:00:00'),
(11, 27, 'Mas-liep-11', '2018-07-02', '2018-07-06', '09:00:00', '18:00:00'),
(12, 25, 'Mas-geg-12', '2018-05-07', '2018-05-11', '09:00:00', '18:00:00'),
(12, 26, 'Mas-birz-12', '2018-06-11', '2018-06-15', '09:00:00', '18:00:00'),
(12, 27, 'Mas-birz-12', '2018-06-25', '2018-06-29', '09:00:00', '18:00:00'),
(12, 28, 'Mas-geg-12', '2018-05-28', '2018-06-01', '09:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `darbuotojas`
--

CREATE TABLE `darbuotojas` (
  `tabel_nr_id` int(11) NOT NULL,
  `pareigos` varchar(100) NOT NULL,
  `vard` varchar(25) NOT NULL,
  `pav` varchar(50) NOT NULL,
  `asm_k` decimal(11,0) NOT NULL,
  `tel_nr` decimal(9,0) NOT NULL,
  `adr` varchar(100) DEFAULT NULL,
  `slapt` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `darbuotojas`
--

INSERT INTO `darbuotojas` (`tabel_nr_id`, `pareigos`, `vard`, `pav`, `asm_k`, `tel_nr`, `adr`, `slapt`) VALUES
(1, 'Administratorė', 'Kornelija', 'Šneiderytė', '49506120000', '864687617', 'Saulėtekio al.18', 'korne'),
(2, 'Administratorė', 'Gabrielė', 'Valaikaitė', '49510181414', '867879711', 'Saulėtekio al. 19-406', '2'),
(3, 'Kirpėja', 'Emilija', 'Serapinaitė', '49406060202', '861471475', 'Vilniaus g. 5', ''),
(4, 'Kirpėjas', 'Evaldas', 'Daškevičius', '49508171231', '867874579', 'Saulėtekio al. 11', ''),
(5, 'Manikiūrininkė', 'Kristina', 'Bartoševičiūtė', '49410112525', '864512489', 'Naujininkų g. 20', '5'),
(6, 'Manikiūrininkė', 'Emilė', 'Briedytė', '49511112222', '862512145', 'Šaltinių g. 47', ''),
(7, 'Vizažistas', 'Karolis', 'Drungilas', '39407121414', '861425367', NULL, ''),
(8, 'Vizažistė', 'Lina', 'Kavaliauskaitė', '4951213333', '867979475', NULL, ''),
(9, 'Kosmetologė', 'Viktorija', 'Žvirblytė', '49509185555', '867945121', NULL, ''),
(10, 'Kosmetologė', 'Natalija', 'Januškevič', '49512140306', '860773181', NULL, ''),
(11, 'Masažistas', 'Deividas', 'Stančikas', '49509251212', '861412157', NULL, ''),
(12, 'Masažistas', 'Gytis', 'Sakalis', '49411295656', '869594124', NULL, '');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `nuolaida`
--

CREATE TABLE `nuolaida` (
  `nuol_id` int(11) NOT NULL,
  `nuol_pav` varchar(50) NOT NULL,
  `suma` decimal(8,2) NOT NULL,
  `rusis` varchar(25) DEFAULT NULL,
  `nuol_data_nuo` date NOT NULL,
  `nuol_data_iki` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `nuolaida`
--

INSERT INTO `nuolaida` (`nuol_id`, `nuol_pav`, `suma`, `rusis`, `nuol_data_nuo`, `nuol_data_iki`) VALUES
(6, 'SpecialGeguze', '5.00', 'speciali nuolaida', '2018-05-14', '2018-05-25'),
(2, 'Testavimas', '2.00', 'Testavimas', '2018-05-13', '2018-05-19'),
(4, 'wonderland', '5.00', 'daugkartine', '2018-05-20', '2018-06-01'),
(5, 'NustebinkSave', '10.00', 'daugkartine', '2018-05-06', '2018-05-11');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `paslauga`
--

CREATE TABLE `paslauga` (
  `pas_id` int(11) NOT NULL,
  `kat_id` int(11) NOT NULL,
  `pasl_pav` varchar(100) NOT NULL,
  `trukme` time NOT NULL,
  `kaina` decimal(8,2) NOT NULL,
  `apras` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `paslauga`
--

INSERT INTO `paslauga` (`pas_id`, `kat_id`, `pasl_pav`, `trukme`, `kaina`, `apras`) VALUES
(1, 1, 'Moteriškas kirpimas', '01:00:00', '20.00', NULL),
(2, 1, 'Vyriškas kirpimas', '00:45:00', '15.00', NULL),
(3, 1, 'Vaikiškas kirpimas', '00:45:00', '10.00', NULL),
(4, 1, 'Sušukavimas', '01:00:00', '15.00', NULL),
(5, 1, 'Cheminis sušukavimas', '02:00:00', '40.00', NULL),
(6, 1, 'Plaukų dažymas', '01:30:00', '40.00', NULL),
(7, 2, 'Klasikinis manikiūras', '01:00:00', '12.00', NULL),
(8, 2, 'Ilgalaikis manikiūras', '01:30:00', '15.00', NULL),
(9, 2, 'Nagų lakavimas', '00:45:00', '5.00', NULL),
(10, 2, 'Pedikiūras', '01:30:00', '15.00', NULL),
(11, 2, 'Ilgalaikis pedikiūras', '02:00:00', '25.00', NULL),
(12, 3, 'Dieninis makiažas', '01:00:00', '20.00', NULL),
(13, 3, 'Vakarinis makiažas', '01:00:00', '25.00', NULL),
(14, 3, 'Proginis makiažas', '01:00:00', '30.00', NULL),
(15, 4, 'Antakių korekcija ir dažymas', '00:30:00', '10.00', NULL),
(16, 4, 'Antakių korekcija', '00:15:00', '5.00', NULL),
(17, 4, 'Antakių dažymas', '00:20:00', '5.00', NULL),
(18, 4, 'Blakstienų dažymas', '00:20:00', '5.00', NULL),
(19, 4, 'Antakių HENA SPA procedūra', '01:00:00', '35.00', NULL),
(20, 4, 'Cheminis blakstienų rietimas', '01:00:00', '40.00', NULL),
(21, 5, 'Antakių permamentinis makiažas', '02:00:00', '180.00', NULL),
(22, 5, 'Vokų permamentinis makiažas', '02:00:00', '150.00', NULL),
(23, 5, 'Lūpų permamentinis makiažas', '02:00:00', '200.00', NULL),
(24, 5, 'Antakiai „Microblading 6D“', '01:30:00', '150.00', NULL),
(25, 5, 'Permamentinio makiažo korekcija', '01:00:00', '60.00', NULL),
(26, 6, 'Veido depiliacija', '00:30:00', '10.00', NULL),
(27, 6, 'Pažastų depiliacija', '00:30:00', '10.00', NULL),
(28, 6, 'Rankų depiliacija', '00:45:00', '15.00', NULL),
(29, 6, 'Blauzdų depiliacija', '00:45:00', '15.00', NULL),
(30, 6, 'Visų kojų depiliacija', '01:00:00', '30.00', NULL),
(31, 6, 'Bikinio depiliacija', '00:45:00', '25.00', NULL),
(32, 7, 'Anticeliulitinis masažas', '01:00:00', '30.00', NULL),
(33, 7, 'Intensyvus nugaros masažas', '01:00:00', '30.00', NULL),
(34, 7, 'Atpalaiduojantis nugaros masažas', '01:00:00', '25.00', NULL),
(35, 7, 'Klasikinis viso kūno masažas', '02:00:00', '60.00', NULL),
(37, 7, 'Klasikinis kojų masažas', '00:45:00', '25.00', NULL),
(38, 7, 'Klasikinis rankų masažas', '00:30:00', '20.00', NULL);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `paslaug_kat`
--

CREATE TABLE `paslaug_kat` (
  `kat_id` int(11) NOT NULL,
  `pasl_kat_pav` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `paslaug_kat`
--

INSERT INTO `paslaug_kat` (`kat_id`, `pasl_kat_pav`) VALUES
(1, 'Plaukų priežiūra'),
(2, 'Nagų priežiūra'),
(3, 'Makiažas'),
(4, 'Antakių ir blakstienų priežiūra'),
(5, 'Ilgalaikis makiažas'),
(6, 'Depiliacija'),
(7, 'Masažai');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `registracija`
--

CREATE TABLE `registracija` (
  `reg_id` int(11) NOT NULL,
  `nuol_id` int(11) DEFAULT NULL,
  `pas_id` int(11) NOT NULL,
  `tabel_nr_id` int(11) DEFAULT NULL,
  `pateik_data` datetime DEFAULT NULL,
  `atlik_data` datetime NOT NULL,
  `busena` varchar(10) NOT NULL,
  `kl_vard` varchar(25) NOT NULL,
  `kl_pav` varchar(50) NOT NULL,
  `kl_tel_nr` decimal(9,0) NOT NULL,
  `el_past` varchar(50) NOT NULL,
  `pastab` text DEFAULT NULL,
  `uzsk_suma` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `registracija`
--

INSERT INTO `registracija` (`reg_id`, `nuol_id`, `pas_id`, `tabel_nr_id`, `pateik_data`, `atlik_data`, `busena`, `kl_vard`, `kl_pav`, `kl_tel_nr`, `el_past`, `pastab`, `uzsk_suma`) VALUES
(116, 2, 3, 4, '2018-05-17 01:29:02', '2018-06-01 15:00:00', '2', 'Markas', 'Salotenis', '865555555', 'markas.salota@gmail.com', '', '8.00'),
(115, 0, 1, 3, '2018-05-17 12:05:13', '2018-05-17 09:00:00', '0', 'Testavimas', 'Testavimas', '860773181', 'alisajanuskevic@gmail.com', '', '20.00'),
(114, 0, 34, 11, '2018-05-16 11:53:20', '2018-05-23 15:00:00', '0', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '25.00'),
(111, 0, 8, 5, '2018-05-15 05:00:02', '2018-05-16 13:30:00', '0', 'Gabrielė', 'Pavardė', '869052449', 'g.valaikaite@gmail.com', '', '15.00'),
(113, 0, 7, 5, '2018-05-16 12:49:56', '2018-05-18 16:00:00', '0', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '12.00'),
(40, 0, 1, 3, '2018-03-22 01:47:54', '2018-03-22 10:00:00', '2', 'Alisa', 'Januskevic', '860773181', 'alisajanuskevic@gmail.com', '', '0.00'),
(121, 2, 16, 9, '2018-05-18 03:06:36', '2018-05-24 15:45:00', '0', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '3.00'),
(43, 0, 1, 4, '2018-03-25 03:26:30', '2018-03-26 15:00:00', '1', 'Alisa', 'Januskevic', '860773181', 'alisajanuskevic@gmail.com', '', '0.00'),
(120, 0, 33, 12, '2018-05-18 10:30:39', '2018-05-31 17:00:00', '2', 'Natalija', 'Januškevič', '869800093', 'najanu_99@yahoo.com', '', '30.00'),
(42, 0, 2, 4, '2018-03-24 12:04:39', '2018-03-26 15:45:00', '2', 'Dominykas', 'Šulčius', '860773181', 'alisajanuskevic@gmail.com', '', '0.00'),
(72, 0, 1, 4, '2018-04-09 05:52:27', '2018-04-24 15:00:00', '0', 'Natalija', 'Januškevič', '869800093', 'najanu_99@yahoo.com', '', '0.00'),
(73, 0, 1, 4, '2018-04-09 05:59:14', '2018-04-11 11:00:00', '0', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '0.00'),
(108, 1, 14, 8, '2018-05-13 05:31:08', '2018-05-28 16:00:00', '0', 'Viktorija', 'Kvaraciejute', '878452369', 'vika@gmail.com', '', '25.00'),
(107, 0, 30, 9, '2018-05-13 05:30:28', '2018-05-22 14:00:00', '0', 'Gintarė', 'Jarulytė', '878283812', 'ginte@gmail.com', '', '30.00'),
(65, 0, 8, 5, '2018-04-09 05:36:06', '2018-04-12 15:00:00', '0', 'Natalija', 'Januškevič', '869800093', 'najanu_99@yahoo.com', '', '0.00'),
(117, 2, 11, 6, '2018-05-17 01:31:55', '2018-06-11 13:00:00', '2', 'Marija', 'Ivanauskaitė', '865519313', 'emile.briedyte@gmail.com', '', '23.00'),
(118, 2, 4, 4, '2018-05-17 01:34:01', '2018-05-31 11:00:00', '0', 'Kiesha', 'Kiesha', '862273385', 'kestutis.jakseboga@stud.vgtu.lt', '', '13.00'),
(119, 0, 23, 2, '2018-05-17 02:14:59', '2018-06-01 17:00:00', '0', 'Alfonsas', 'Alfonsauskas', '860201202', 'meh@meh.lt', '', '200.00'),
(88, 0, 1, 4, '2018-04-10 05:29:23', '2018-04-13 13:00:00', '1', 'Alisa', 'Januskevic', '855215214', 'alisajanuskevic@gmail.com', '', '20.00'),
(89, 1, 1, 3, '2018-04-11 04:21:01', '2018-04-18 14:00:00', '1', 'Alisa', 'Januškevič', '855215214', 'alisajanuskevic@gmail.com', '', '15.00'),
(90, 1, 1, 4, '2018-04-22 04:49:15', '2018-04-26 14:00:00', '0', 'Alisa', 'Januškevič', '111111111', 'kursinis@gmail.com', '', '15.00'),
(92, 0, 2, 3, '2018-05-03 05:10:24', '2018-05-04 09:00:00', '0', 'Simona', 'Ramanauskaite', '861437184', 'mima112it@gmail.com', '', '15.00'),
(94, 0, 1, 3, '2018-05-08 11:33:17', '2018-05-09 11:00:00', '0', 'Alisa', 'Januškevič', '111111111', 'alisajanuskevic@gmail.com', '', '20.00'),
(95, 0, 1, 3, '2018-05-08 12:26:36', '2018-05-08 14:00:00', '0', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '20.00'),
(96, 0, 2, 4, '2018-05-08 12:27:43', '2018-05-17 10:30:00', '1', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '15.00'),
(97, 0, 1, 4, '2018-05-08 01:11:01', '2018-05-28 10:00:00', '1', 'Alisa', 'Januškevič', '111111111', 'alisajanuskevic@gmail.com', '', '20.00'),
(99, 1, 7, 5, '2018-05-11 10:38:15', '2018-05-18 14:00:00', '1', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '7.00'),
(100, 1, 1, 3, '2018-05-11 03:35:18', '2018-05-24 16:00:00', '0', 'Alisa', 'Januškevič', '860773181', 'alisajanuskevic@gmail.com', '', '15.00'),
(101, 0, 32, 2, '2018-05-13 05:21:14', '2018-05-29 17:00:00', '0', 'Laima', 'Petrienėne', '868582817', 'laima@gmail.com', '', '30.00'),
(102, 0, 27, 9, '2018-05-13 05:22:00', '2018-05-23 10:00:00', '0', 'Monika', 'Betrikė', '871114598', 'monikute@gmail.com', '', '10.00'),
(104, 0, 13, 7, '2018-05-13 05:24:39', '2018-05-18 16:00:00', '0', 'Marina', 'Taputienė', '875912145', 'marina.taputiene@gmail.com', 'Makiažo tema: vestuvėms', '25.00'),
(105, 0, 34, 11, '2018-05-13 05:25:41', '2018-05-21 09:00:00', '0', 'Petras', 'Nausėda', '847596251', 'nauseda@gmail.com', '', '25.00'),
(106, 0, 25, 10, '2018-05-13 05:26:45', '2018-05-30 14:00:00', '0', 'Karina', 'Vysockaja', '875625124', 'karinute@gmail.com', '', '60.00');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `suteikia`
--

CREATE TABLE `suteikia` (
  `tabel_nr_id` int(11) NOT NULL,
  `pas_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `suteikia`
--

INSERT INTO `suteikia` (`tabel_nr_id`, `pas_id`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(3, 6),
(4, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(7, 12),
(7, 13),
(7, 14),
(8, 12),
(8, 13),
(8, 14),
(9, 15),
(9, 16),
(9, 17),
(9, 18),
(9, 19),
(9, 20),
(9, 21),
(9, 22),
(9, 23),
(9, 24),
(9, 25),
(9, 26),
(9, 27),
(9, 28),
(9, 29),
(9, 30),
(9, 31),
(10, 15),
(10, 16),
(10, 17),
(10, 18),
(10, 19),
(10, 20),
(10, 21),
(10, 22),
(10, 23),
(10, 24),
(10, 25),
(10, 26),
(10, 27),
(10, 28),
(10, 29),
(10, 30),
(10, 31),
(11, 32),
(11, 33),
(11, 34),
(11, 35),
(11, 37),
(11, 38),
(12, 32),
(12, 33),
(12, 34),
(12, 35),
(12, 37),
(12, 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darbo_grafikas`
--
ALTER TABLE `darbo_grafikas`
  ADD PRIMARY KEY (`tabel_nr_id`,`dg_id`);

--
-- Indexes for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  ADD PRIMARY KEY (`tabel_nr_id`);

--
-- Indexes for table `nuolaida`
--
ALTER TABLE `nuolaida`
  ADD PRIMARY KEY (`nuol_id`);

--
-- Indexes for table `paslauga`
--
ALTER TABLE `paslauga`
  ADD PRIMARY KEY (`pas_id`);

--
-- Indexes for table `paslaug_kat`
--
ALTER TABLE `paslaug_kat`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darbo_grafikas`
--
ALTER TABLE `darbo_grafikas`
  MODIFY `dg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  MODIFY `tabel_nr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `nuolaida`
--
ALTER TABLE `nuolaida`
  MODIFY `nuol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `paslauga`
--
ALTER TABLE `paslauga`
  MODIFY `pas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `paslaug_kat`
--
ALTER TABLE `paslaug_kat`
  MODIFY `kat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
