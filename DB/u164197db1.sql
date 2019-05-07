-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 07. Mai 2019 um 19:23
-- Server-Version: 5.7.22-22-log
-- PHP-Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `u164197db1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `a_assets`
--

CREATE TABLE `a_assets` (
  `a_id` int(11) NOT NULL,
  `a_p_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `b_brands`
--

CREATE TABLE `b_brands` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `b_brands`
--

INSERT INTO `b_brands` (`b_id`, `b_name`) VALUES
(1, 'OTHER'),
(2, 'Acne Studios'),
(3, 'Adidas'),
(4, 'Adidas Originals'),
(5, 'Ai Riders'),
(6, 'Alberta Ferretti'),
(7, 'Alessandro Dell\'Acqua'),
(8, 'Alexander Mcqueen'),
(9, 'Alexander Wang'),
(10, 'Alice+olivia'),
(11, 'Alysi'),
(12, 'Alyx'),
(13, 'Amen'),
(14, 'Ami Alexandre Mattiussi'),
(15, 'Antonio Marras'),
(16, 'Armani Collezioni'),
(17, 'Armani Exchange'),
(18, 'Armani Giorgio'),
(19, 'Armani Jeans'),
(20, 'Atlantic Stars'),
(21, 'Bacon'),
(22, 'Balenciaga'),
(23, 'Bally'),
(24, 'Bally Shok-1'),
(25, 'Balmain'),
(26, 'Balmain For Beyoncé'),
(27, 'Barba Napoli'),
(28, 'Barbour'),
(29, 'Bd Baggies'),
(30, 'Belstaff'),
(31, 'Berwick'),
(32, 'Billieblush'),
(33, 'Billionaire'),
(34, 'Billybandit'),
(35, 'Black Coral'),
(36, 'Blauer'),
(37, 'Blugirl'),
(38, 'Blumarine'),
(39, 'Boglioli'),
(40, 'Bonpoint'),
(41, 'Bottega Veneta'),
(42, 'Boutique Moschino'),
(43, 'Boy London'),
(44, 'Brian Dales'),
(45, 'Brian Dales Camicie'),
(46, 'Briglia'),
(47, 'Brooks Brothers'),
(48, 'Brooksfield'),
(49, 'Burberry'),
(50, 'C.p. Company'),
(51, 'C2h4'),
(52, 'Calvin Klein'),
(53, 'Canadian'),
(54, 'Capucci'),
(55, 'Carhartt'),
(56, 'Cavalli Roberto'),
(57, 'Chiara Ferragni'),
(58, 'Chloé'),
(59, 'Champion'),
(60, 'Circolo 1901'),
(61, 'Citizens Of Humanity'),
(62, 'Coach'),
(63, 'Colmar'),
(64, 'Comme Des Garcons'),
(65, 'Corneliani'),
(66, 'Courrèges'),
(67, 'Cruciani'),
(68, 'Current Elliott'),
(69, 'Daniele Alessandrini'),
(70, 'Danilo Paura'),
(71, 'Danilo Paura X Kappa'),
(72, 'Delan'),
(73, 'Della Ciana'),
(74, 'Department 5'),
(75, 'Diadora Heritage'),
(76, 'Diesel'),
(77, 'Diesel Black Gold'),
(78, 'Dima Leu'),
(79, 'Dkny'),
(80, 'Dolce & Gabbana'),
(81, 'Don\'T Cry'),
(82, 'Dondup'),
(83, 'Douuod'),
(84, 'Drumohr'),
(85, 'Dsquared2'),
(86, 'Dsquared2 Junior'),
(87, 'Ea7'),
(88, 'Eleventy'),
(89, 'Elisabetta Franchi'),
(90, 'Emilio Pucci'),
(91, 'Emporio Armani'),
(92, 'Engineered Garments'),
(93, 'Entre Amis'),
(94, 'Ermanno Ermanno Scervino'),
(95, 'Ermanno Gallamini'),
(96, 'Ermanno Scervino'),
(97, 'Ermenegildo Zegna'),
(98, 'Esemplare'),
(99, 'Essentiel Antwerp'),
(100, 'Etro'),
(101, 'European Culture'),
(102, 'Fabiana Filippi'),
(103, 'Faith Connexion'),
(104, 'Fausto Puglisi'),
(105, 'Fay'),
(106, 'Federica Tosi'),
(107, 'Fendi'),
(108, 'Ferragamo Salvatore'),
(109, 'Ferragni Chiara'),
(110, 'Fila'),
(111, 'Fiorucci'),
(112, 'Forte Forte'),
(113, 'Frankie Morello'),
(114, 'Fred Perry'),
(115, 'Freedomday'),
(116, 'Gaelle Bonheur'),
(117, 'Gallo'),
(118, 'Gammon'),
(119, 'Gcds'),
(120, 'Geo'),
(121, 'Giada Benincasa'),
(122, 'Gianluca Capannolo'),
(123, 'Giorgio Armani'),
(124, 'Giulia Rositani'),
(125, 'Giuseppe Di Morabito'),
(126, 'Givenchy'),
(127, 'Gold Hawk'),
(128, 'Golden Goose'),
(129, 'Gran Sasso'),
(130, 'Gucci'),
(131, 'Guglielminotti'),
(132, 'Hanita'),
(133, 'Harris Wharf London'),
(134, 'Helmut Lang'),
(135, 'Henri Lloyd'),
(136, 'Hermès'),
(137, 'Hydrogen'),
(138, 'Iceberg'),
(139, 'Il Gufo'),
(140, 'Incotex'),
(141, 'Invicta'),
(142, 'Inès & Maréchal'),
(143, 'Isabel Marant Etoile'),
(144, 'Isaia'),
(145, 'Issey Miyake'),
(146, 'J Brand'),
(147, 'Jacob Cohen'),
(148, 'Jeckerson'),
(149, 'Jeremy Scott'),
(150, 'Jil Sander'),
(151, 'Junya Watanabe'),
(152, 'Just Cavalli'),
(153, 'Jw Anderson'),
(154, 'K-way'),
(155, 'Kappa Kontroll'),
(156, 'Karl Lagerfeld'),
(157, 'Kenzo'),
(158, 'Kenzo Junior'),
(159, 'Ki6'),
(160, 'L.b.m. 1911'),
(161, 'Lacoste'),
(162, 'Lanvin'),
(163, 'Lardini'),
(164, 'Linea Rossa'),
(165, 'Louis Vuitton'),
(166, 'Low Brand'),
(167, 'M.i.h Jeans'),
(168, 'M1992'),
(169, 'Maison Clochard'),
(170, 'Maison Kitsuné'),
(171, 'Maison Margiela'),
(172, 'Maliparmi'),
(173, 'Manila Grace'),
(174, 'Manuel Ritz'),
(175, 'Marc Ellis'),
(176, 'Marc Jacobs'),
(177, 'Marcelo Burlon'),
(178, 'Marco Bologna'),
(179, 'Marco Rambaldi'),
(180, 'Marester'),
(181, 'Maria Lucia Hohan'),
(182, 'Marina Rinaldi'),
(183, 'Marni'),
(184, 'Matchless'),
(185, 'Maurizio Pecoraro'),
(186, 'Max Mara'),
(187, 'Mc2 Saint Barth'),
(188, 'Michael Coal'),
(189, 'Michael Kors'),
(190, 'Missoni'),
(191, 'Miu Miu'),
(192, 'Moncler'),
(193, 'Monnalisa'),
(194, 'Moschino'),
(195, 'Moschino Couture'),
(196, 'Moschino Kid'),
(197, 'Moschino Love'),
(198, 'Moschino Underwear'),
(199, 'Msgm'),
(200, 'Museum'),
(201, 'N° 21'),
(202, 'N.o.w. Cashmere'),
(203, 'Napapijri'),
(204, 'Neil Barrett'),
(205, 'Nemen'),
(206, 'New Era'),
(207, 'Ni Ma Bi'),
(208, 'Nuur'),
(209, 'Oakley By Samuel Ross'),
(210, 'Oamc'),
(211, 'Off'),
(212, 'Off White'),
(213, 'Omc'),
(214, 'Osvaldo Bruni'),
(215, 'Our Legacy'),
(216, 'P.a.m.'),
(217, 'Paciotti'),
(218, 'Paciotti 4us'),
(219, 'Paco Rabanne'),
(220, 'Paolo Pecora'),
(221, 'Parosh'),
(222, 'Patrizia Pepe'),
(223, 'Paul Smith London'),
(224, 'Peserico'),
(225, 'Peuterey'),
(226, 'Philipp Plein'),
(227, 'Philosophy Di Lorenzo Serafini'),
(228, 'Piccione Piccione'),
(229, 'Pinko'),
(230, 'Pleasures'),
(231, 'Plein Sport'),
(232, 'Polo Ralph Lauren'),
(233, 'Polo Ralph Lauren Boy'),
(234, 'Polo Ralph Lauren Girl'),
(235, 'Polo Ralph Lauren Infant'),
(236, 'Polo Ralph Lauren Kid'),
(237, 'Polo Ralph Lauren Toddler'),
(238, 'Pomikaki'),
(239, 'Prada'),
(240, 'Pt'),
(241, 'Puglisi Fausto'),
(242, 'QuickSilver'),
(243, 'R13'),
(244, 'Raf Simons'),
(245, 'Re-hash'),
(246, 'Red Valentino'),
(247, 'Refrigiwear'),
(248, 'Rhea Costa'),
(249, 'Riccardo Comi'),
(250, 'Rick Owens'),
(251, 'Roberto Cavalli'),
(252, 'Rochas'),
(253, 'Rossignol'),
(254, 'Roy Rogers'),
(255, 'Rta'),
(256, 'S.w.o.r.d.'),
(257, 'Sacai'),
(258, 'Safira'),
(259, 'Saint Laurent'),
(260, 'Salvatore Ferragamo'),
(261, 'Santoni'),
(262, 'Save The Duck'),
(263, 'Self-portrait'),
(264, 'Simonetta'),
(265, 'Simonetta Ravizza'),
(266, 'Siviglia'),
(267, 'Siviglia White'),
(268, 'Sold Out'),
(269, 'Sottomettimi'),
(270, 'Space'),
(271, 'Stella Jean'),
(272, 'Stella McCartney'),
(273, 'Still Good'),
(274, 'Stone Island'),
(275, 'Stone Island Shadow Project'),
(276, 'Sunnei'),
(277, 'Supreme'),
(278, 'Tagliatore'),
(279, 'The North Face'),
(280, 'Theory'),
(281, 'Thom Browne'),
(282, 'Thrasher'),
(283, 'Tod\'S'),
(284, 'Tom Ford'),
(285, 'Top Gun'),
(286, 'Tory Burch'),
(287, 'True Royal'),
(288, 'Twinset'),
(289, 'Ultrachic'),
(290, 'Undercover'),
(291, 'Valentino'),
(292, 'Vans'),
(293, 'Versace'),
(294, 'Versace Collection'),
(295, 'Versace Young'),
(296, 'Versus'),
(297, 'Vivetta'),
(298, 'Woolrich'),
(299, 'Y-3'),
(300, 'Z Zegna'),
(301, 'Zadig & Voltaire'),
(302, 'Zanone'),
(303, 'Zegna Ermenegildo'),
(304, 'Zimmerman');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ca_categories`
--

CREATE TABLE `ca_categories` (
  `ca_id` int(11) NOT NULL,
  `ca_name` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `ca_categories`
--

INSERT INTO `ca_categories` (`ca_id`, `ca_name`) VALUES
(2, 'andere Kategorie'),
(3, 'Jacke'),
(4, 'T-Shirt'),
(5, 'Pullover'),
(6, 'Hose(lang)'),
(7, 'Hose(kurz)'),
(8, 'Hemd'),
(9, 'Weste'),
(10, 'Hoodie'),
(11, 'Mantel'),
(12, 'Bluse'),
(13, 'Gürtel'),
(14, 'Badehose');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `col_colors`
--

CREATE TABLE `col_colors` (
  `col_id` int(11) NOT NULL,
  `col_name` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `col_colors`
--

INSERT INTO `col_colors` (`col_id`, `col_name`) VALUES
(2, 'Andere Farbe'),
(3, 'Weiss'),
(4, 'Schwarz'),
(5, 'Rot'),
(6, 'Gelb'),
(7, 'Blau'),
(8, 'Gruen'),
(9, 'Violett'),
(10, 'Orange');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `con_conditions`
--

CREATE TABLE `con_conditions` (
  `con_id` int(11) NOT NULL,
  `con_description` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `con_conditions`
--

INSERT INTO `con_conditions` (`con_id`, `con_description`) VALUES
(1, 'Anderer Zustand'),
(2, 'Neu'),
(3, 'Orginalverpackt'),
(4, 'Wie Neu'),
(5, 'Leichte Abnutzungen'),
(6, 'Gebraucht'),
(7, 'Kaputt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `f_favorites`
--

CREATE TABLE `f_favorites` (
  `f_u_user` int(11) NOT NULL,
  `f_p_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `f_favorites`
--

INSERT INTO `f_favorites` (`f_u_user`, `f_p_post`) VALUES
(4, 4),
(9, 4),
(10, 4),
(12, 4),
(16, 4),
(1, 5),
(4, 5),
(9, 5),
(14, 5),
(12, 7),
(1, 8),
(9, 8),
(12, 8),
(1, 9),
(10, 9),
(12, 9),
(12, 10),
(12, 12),
(10, 18),
(9, 22),
(9, 24),
(9, 25),
(2, 34),
(9, 34),
(1, 37),
(16, 37),
(12, 38),
(16, 38);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `g_genders`
--

CREATE TABLE `g_genders` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `g_genders`
--

INSERT INTO `g_genders` (`g_id`, `g_name`) VALUES
(1, 'unisex'),
(2, 'Herren'),
(3, 'Frauen'),
(4, 'Kinder');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `p_post`
--

CREATE TABLE `p_post` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(40) COLLATE utf8_bin NOT NULL,
  `p_price` smallint(5) NOT NULL,
  `p_image` varchar(60) COLLATE utf8_bin NOT NULL,
  `p_description` varchar(250) COLLATE utf8_bin NOT NULL,
  `p_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_u_user` int(11) NOT NULL,
  `p_col_color` int(11) NOT NULL,
  `p_b_brand` int(11) NOT NULL,
  `p_g_gender` int(11) NOT NULL,
  `p_con_condition` int(11) NOT NULL,
  `p_ca_category` int(11) NOT NULL,
  `p_s_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `p_post`
--

INSERT INTO `p_post` (`p_id`, `p_title`, `p_price`, `p_image`, `p_description`, `p_createtime`, `p_u_user`, `p_col_color`, `p_b_brand`, `p_g_gender`, `p_con_condition`, `p_ca_category`, `p_s_size`) VALUES
(4, 'Adidas Hoodie', 10, '4.jpg', 'Wie neu', '2019-01-17 12:33:32', 2, 4, 3, 2, 2, 10, 109),
(5, 'Moncler Jacke', 600, '5.jpeg', 'Ich verkaufe eine neuwertige Moncler Maya Jacke.', '2019-01-17 12:39:57', 1, 4, 192, 2, 4, 3, 109),
(7, 'Champion Sweater', 50, '7.jpg', 'Blauer Chmapion Sweater, fast wie neu', '2019-01-17 12:52:35', 4, 7, 59, 2, 4, 10, 18),
(8, 'Fila Sweater', 80, '8.jpg', 'Grauer Fila Sweater', '2019-01-17 12:54:09', 4, 7, 110, 2, 6, 10, 19),
(9, 'Clavin Klein Badehose', 60, '9.jpg', 'CK Badehose, original verpackt', '2019-01-17 12:59:19', 4, 3, 52, 2, 3, 14, 20),
(10, 'Stone Island Jacke', 90, '10.jpg', 'Gebrauchte Jacke', '2019-01-17 13:02:12', 4, 2, 274, 2, 6, 3, 18),
(11, 'rotes Hemd', 25, '11.jpg', 'rotes Hemd, innen schwarz, eng geschnitten', '2019-01-17 13:02:50', 6, 5, 1, 2, 2, 8, 26),
(12, 'schwarze Hose', 13, '12.jpg', 'schwarze Hose, slim fit', '2019-01-17 13:21:53', 6, 4, 1, 2, 4, 6, 25),
(13, 'Ferragamo GÃ¼rtel', 150, '13.jpeg', 'Verkaufe leicht gebrauchten Salvatore Ferragamo GÃ¼rtel.', '2019-01-17 13:22:23', 1, 4, 108, 1, 5, 13, 107),
(14, 'Snowboardjacke', 40, '14.jpg', 'Snowboardjacke ind Schwarz, WeiÃŸ und Grau', '2019-01-17 13:32:53', 6, 4, 1, 3, 3, 3, 25),
(15, 'Badehose', 5, '15.jpg', 'blaue Badehose fÃ¼r Herren, einmal getragen', '2019-01-17 13:39:23', 6, 7, 1, 2, 5, 14, 77),
(18, 'Thrasher Hoodie', 65, '18.jpg', 'Schwarzer Hooide, paar mal getragen', '2019-01-17 13:41:28', 4, 4, 282, 1, 4, 10, 17),
(19, 'LV Schal', 150, '19.jpeg', 'Frauen Loui Vuitton Schal. Oft getragen, aber kaum Abnutzungen.', '2019-01-17 13:42:29', 8, 4, 165, 3, 6, 2, 108),
(20, 'Bluse', 14, '20.jpeg', 'violette Bluse, wurde zweimal getragen ', '2019-01-17 13:42:58', 6, 9, 1, 3, 5, 12, 17),
(21, 'Valentino Hoodie', 300, '21.jpg', 'Rot, schwarz Camoflash Hoodie, original Verpackt', '2019-01-17 13:43:02', 4, 2, 291, 2, 3, 10, 19),
(22, 'Gucci Schuhe', 135, '22.jpg', 'Gucci Schuhe, oft getragen', '2019-01-17 13:46:29', 4, 3, 130, 1, 5, 2, 64),
(23, 'Mantel', 30, '23.jpg', 'grauer Frauenmantel', '2019-01-17 13:46:56', 6, 2, 1, 3, 6, 11, 110),
(24, 'Bikini', 15, '24.jpg', 'schwarzer Bikini', '2019-01-17 13:50:06', 6, 4, 1, 3, 5, 2, 18),
(25, 'Supreme x LV Hoodie', 2700, '25.jpg', '1 mal getragen', '2019-01-17 13:51:34', 4, 5, 277, 1, 2, 10, 110),
(28, 'Sportschuh', 50, '28.jpg', 'Sneaker Sportschuh', '2019-01-17 13:55:14', 6, 2, 1, 1, 3, 2, 66),
(33, 'Boxershort', 4, '33.jpg', 'blaue Herrenboxershort', '2019-01-17 13:57:01', 6, 7, 1, 2, 4, 2, 25),
(34, 'Wolljacke', 50, '34.jpg', 'neue Wolljacke', '2019-01-17 13:57:25', 2, 4, 6, 2, 2, 12, 16),
(36, 'Spengergassen T-Shirt', 5000, '36.jpg', 'Offizielles T-Shirt der HTL Spengergasse(Unbezahlbar)', '2019-01-17 14:08:44', 9, 3, 224, 2, 4, 4, 12),
(37, 'SchÃ¼ler Manuel', 99, '37.jpg', 'Ganz brauchbar', '2019-01-17 14:17:29', 10, 7, 1, 2, 6, 14, 15),
(38, 'Jovic ', 999, '38.png', 'verkaufe einen Jovic', '2019-01-17 14:31:09', 12, 8, 17, 1, 2, 9, 17),
(40, 'Pick n\' Mix Website', 1, '40.png', 'lol man', '2019-03-19 16:38:02', 12, 3, 2, 2, 3, 8, 17);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sca_SizeCategories`
--

CREATE TABLE `sca_SizeCategories` (
  `s_sizes_s_id` int(11) NOT NULL,
  `ca_categories_ca_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `s_sizes`
--

CREATE TABLE `s_sizes` (
  `s_id` int(11) NOT NULL,
  `s_unittype` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `s_value` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `s_g_genders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `s_sizes`
--

INSERT INTO `s_sizes` (`s_id`, `s_unittype`, `s_value`, `s_g_genders`) VALUES
(2, 'US', '4/6', 2),
(3, 'US', '8/10', 2),
(4, 'US', '12/16', 2),
(5, 'US', '18/20', 2),
(6, 'US', '22/24', 2),
(7, 'US', '26/28', 2),
(8, 'US', '30/32', 2),
(9, 'UK', '6/8', 2),
(10, 'UK', '10/12', 2),
(11, 'UK', '14/16', 2),
(12, 'UK', '18/20', 2),
(13, 'UK', '22/24', 2),
(14, 'UK', '26/28', 2),
(15, 'UK', '30/32', 2),
(16, 'EU', '32/34', 2),
(17, 'EU', '36/38', 2),
(18, 'EU', '40/42', 2),
(19, 'EU', '44/46', 2),
(20, 'EU', '48/50', 2),
(21, 'EU', '52/54', 2),
(22, 'EU', '56/58', 2),
(23, 'International', 'XS', 2),
(24, 'International', 'S', 2),
(25, 'International', 'M', 2),
(26, 'International', 'L', 2),
(27, 'International', 'XL', 2),
(28, 'International', 'XXL', 2),
(29, 'International', '3XL', 2),
(30, 'US', '2', 3),
(31, 'US', '4', 3),
(32, 'US', '6', 3),
(33, 'US', '8', 3),
(34, 'US', '10', 3),
(35, 'US', '12', 3),
(36, 'US', '14', 3),
(37, 'US', '16', 3),
(38, 'US', '18', 3),
(39, 'US', '20', 3),
(40, 'US', '22', 3),
(41, 'US', '24', 3),
(42, 'US', '26', 3),
(43, 'US', '28', 3),
(44, 'UK', '2', 3),
(45, 'UK', '4', 3),
(46, 'UK', '6', 3),
(47, 'UK', '8', 3),
(48, 'UK', '10', 3),
(49, 'UK', '12', 3),
(50, 'UK', '14', 3),
(51, 'UK', '16', 3),
(52, 'UK', '18', 3),
(53, 'UK', '20', 3),
(54, 'UK', '22', 3),
(55, 'UK', '24', 3),
(56, 'UK', '26', 3),
(57, 'UK', '28', 3),
(58, 'EU', '30', 3),
(59, 'EU', '32', 3),
(60, 'EU', '34', 3),
(61, 'EU', '36', 3),
(62, 'EU', '38', 3),
(63, 'EU', '40', 3),
(64, 'EU', '42', 3),
(65, 'EU', '44', 3),
(66, 'EU', '46', 3),
(67, 'EU', '48', 3),
(68, 'EU', '50', 3),
(69, 'EU', '52', 3),
(70, 'EU', '54', 3),
(71, 'EU', '56', 3),
(72, 'International', '3XS', 3),
(73, 'International', 'XXS', 3),
(74, 'International', 'XS', 3),
(75, 'International', 'S', 3),
(76, 'International', 'M', 3),
(77, 'International', 'L', 3),
(78, 'International', 'XL', 3),
(79, 'International', '2XL', 3),
(80, 'International', '3XL', 3),
(81, 'International', '4XL', 3),
(82, 'International', '5XL', 3),
(83, 'International', '6XL', 3),
(84, 'International', '7XL', 3),
(85, 'International', '8XL', 3),
(86, 'US', '5/6', 4),
(87, 'US', '6/7', 4),
(88, 'US', '7/10', 4),
(89, 'US', '10/11', 4),
(90, 'US', '14', 4),
(91, 'UK', '4/6', 4),
(92, 'UK', '6/7', 4),
(93, 'UK', '7/9', 4),
(94, 'UK', '9/11', 4),
(95, 'UK', '11/12', 4),
(96, 'EU', '104/110', 4),
(97, 'EU', '116', 4),
(98, 'EU', '122/128', 4),
(99, 'EU', '134/140', 4),
(100, 'EU', '146', 4),
(101, 'EU', '152', 4),
(102, 'EU', '158', 4),
(103, 'EU', '164', 4),
(104, 'EU', '170', 4),
(105, 'EU', '176', 4),
(106, 'EU', '182', 4),
(107, 'International', 'S', 4),
(108, 'International', 'S/M', 4),
(109, 'International', 'M', 4),
(110, 'International', 'L', 4),
(111, 'International', 'XL', 4),
(549, '-', 'andere Groesse', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `u_users`
--

CREATE TABLE `u_users` (
  `u_id` int(11) NOT NULL,
  `u_username` varchar(16) COLLATE utf8_bin NOT NULL,
  `u_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `u_pwd` varchar(96) COLLATE utf8_bin NOT NULL,
  `u_surname` varchar(35) COLLATE utf8_bin NOT NULL,
  `u_forename` varchar(35) COLLATE utf8_bin NOT NULL,
  `u_zipcode` varchar(10) COLLATE utf8_bin NOT NULL,
  `u_image` varchar(20) COLLATE utf8_bin DEFAULT 'defaultUser.png',
  `u_phonenumber` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `u_description` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `u_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `u_users`
--

INSERT INTO `u_users` (`u_id`, `u_username`, `u_email`, `u_pwd`, `u_surname`, `u_forename`, `u_zipcode`, `u_image`, `u_phonenumber`, `u_description`, `u_createtime`) VALUES
(1, 'admin', 'manu.koellner@aon.at', '7ed8c2c790aa83d6c3e404b5368f6832c18d46a0e98b9c7a7a5e3ef823e2c9f0e310abbf6f7ea9d9d883ccb64ec2736a', 'KÃ¶llner', 'Manuel', '1200', '1.png', '+436763084990', 'das bin ich', '2019-01-17 11:10:56'),
(2, 'Flodeplay', 'Flodeplay@gmail.com', '8cafed2235386cc5855e75f0d34f103ccc183912e5f02446b77c66539f776e4bf2bf87339b4518a7cb1c2441c568b0f8', 'Parfuss', 'florian', '1140', 'defaultUser.png', '+436604472855', 'das bin ich', '2019-01-17 11:29:56'),
(3, 'MÃ¤x', 'BRU18461@spengergasse.at', '484fc3d1b0a547559758c927832ff2173674814164ea16236cb86fceca856511f48c1932bb09f3e5769f0ea03e070cc9', 'Bruckner', 'Max', '1230', 'defaultUser.png', '+4369919565003', NULL, '2019-01-17 11:34:19'),
(4, 'Max', 'katzen@spengergasse.at', '402fe6099c29bfced85d0a8cdf5ae0e480182b5ba5d4c97dbd58f17853c07cb6a7bfa989f62ed2b5daabf8148fc93a2f', 'Koellner', 'Max', '1230', '4.jpg', '+43 699 198765938', 'ich mag Katzen', '2019-01-17 12:47:30'),
(5, 'Ralph1234', 'Ralph@spengergasse.at', '8cafed2235386cc5855e75f0d34f103ccc183912e5f02446b77c66539f776e4bf2bf87339b4518a7cb1c2441c568b0f8', 'Pichler', 'Ralph', '1140', 'defaultUser.png', 'Wien', NULL, '2019-01-17 12:48:42'),
(6, 'Michi', 'michael.czipke@outlook.com', '6ce66b3aa63c4fb01c8730d1461e441cdc6e12b1fba323f503ac9556e54c56bef1fdb3cd4cdf0209211d5d8cbd2a818d', 'Czipke', 'Michael', '1110', '6.jpeg', '0676 694 8407', '16 and single', '2019-01-17 13:00:34'),
(7, 'Simon', 'Simon@spengergasse.at', '8cafed2235386cc5855e75f0d34f103ccc183912e5f02446b77c66539f776e4bf2bf87339b4518a7cb1c2441c568b0f8', 'Morawek', 'Simon', '1150', 'defaultUser.png', '+436604472855', NULL, '2019-01-17 13:00:47'),
(8, 'ManuelK', 'koe18463@spengergasse.at', '539dcb7a76217a0caea1598e47fb78a06c86dca3e5b078700fd18e7e7f7040921f8d9d0f1dd72a32c86d38c6443cb724', 'KÃ¶llner', 'Manuel', '1200', '8.jpeg', '+436763084990', NULL, '2019-01-17 13:38:34'),
(9, 'LilLano', 'LilLano@wlanRouter.com', '826227b9dfb593ae4ddbd3f5b7e24b6cb92e342c951cce56546fa68a2e56557b5ebac824a5e778438a7f35c985dfe082', 'Lano', 'Lil', '2500', '9.jpg', '0394204920', NULL, '2019-01-17 13:58:36'),
(10, 'divi4711', 'divi@divjak.com', '8cafed2235386cc5855e75f0d34f103ccc183912e5f02446b77c66539f776e4bf2bf87339b4518a7cb1c2441c568b0f8', 'Divjak', 'Josef', '1220', 'defaultUser.png', '4711', 'Gggg', '2019-01-17 14:13:50'),
(11, 'Marko', 'marko@a1.net', '8cafed2235386cc5855e75f0d34f103ccc183912e5f02446b77c66539f776e4bf2bf87339b4518a7cb1c2441c568b0f8', 'Cvejic', 'Marko', '1010', 'defaultUser.png', '12345678', NULL, '2019-01-17 14:18:32'),
(12, 'majmuntoni', 'davidjovic300@gmail.com', '25421d7c7e6fd6aa71f707353cc3408fa1fb316e698136553b0e03eea875a7808670e168300482228307a09504d7fdd4', 'invalidName', 'davidjovic300@gmail.com', '1130', 'defaultUser.png', '872378203', NULL, '2019-01-17 14:27:21'),
(13, 'Davidjovic', 'davidjovic0@hotmail.com', '4f37a477be9ff51690dad70907aa8838fc17437570a77c84594006ecafbede7de7f5959406e7bdc6f9bb912c7be31466', 'Jovic', 'David', '', 'defaultUser.png', '', NULL, '2019-01-20 19:34:56'),
(14, 'Lehrer1', 'Lehrer1@Spengergasse.at', '8cafed2235386cc5855e75f0d34f103ccc183912e5f02446b77c66539f776e4bf2bf87339b4518a7cb1c2441c568b0f8', 'Tschernko', 'Thomas', '1140', 'defaultUser.png', '+436604472855', NULL, '2019-01-22 08:16:01'),
(15, 'NikiFisch', 'fischniki@mail.com', '9432cc5a3970edb5bf15e068f63bc2fecca8c4e078fb958c8f61c39c0f131a61d25c6c673d179a2e1e048070e03b0c04', 'Fisch', 'Niki', '2345', 'defaultUser.png', '066412880122', NULL, '2019-01-25 08:30:43'),
(16, 'ABCABC', 'a.a@a.com', 'dc63df55205fc957534d443937d21604c36f7fe3f51cc905351243ebbe43231c2104d9ccff1dc522a6fbbaef9dcb8bc5', 'ABC', 'ABC', '1010', 'defaultUser.png', '11234567890ÃŸ0987642', NULL, '2019-01-25 08:32:47');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `a_assets`
--
ALTER TABLE `a_assets`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `fk_a_assets_p_post1_idx` (`a_p_post`);

--
-- Indizes für die Tabelle `b_brands`
--
ALTER TABLE `b_brands`
  ADD PRIMARY KEY (`b_id`);

--
-- Indizes für die Tabelle `ca_categories`
--
ALTER TABLE `ca_categories`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indizes für die Tabelle `col_colors`
--
ALTER TABLE `col_colors`
  ADD PRIMARY KEY (`col_id`);

--
-- Indizes für die Tabelle `con_conditions`
--
ALTER TABLE `con_conditions`
  ADD PRIMARY KEY (`con_id`);

--
-- Indizes für die Tabelle `f_favorites`
--
ALTER TABLE `f_favorites`
  ADD PRIMARY KEY (`f_u_user`,`f_p_post`),
  ADD KEY `fk_u_users_has_p_post_p_post1_idx` (`f_p_post`),
  ADD KEY `fk_u_users_has_p_post_u_users1_idx` (`f_u_user`);

--
-- Indizes für die Tabelle `g_genders`
--
ALTER TABLE `g_genders`
  ADD PRIMARY KEY (`g_id`);

--
-- Indizes für die Tabelle `p_post`
--
ALTER TABLE `p_post`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fk_p_post_u_users_idx` (`p_u_user`),
  ADD KEY `fk_p_post_co_color1_idx` (`p_col_color`),
  ADD KEY `fk_p_post_b_brands1_idx` (`p_b_brand`),
  ADD KEY `fk_p_post_g_genders1_idx` (`p_g_gender`),
  ADD KEY `fk_p_post_ca_categories1_idx` (`p_ca_category`),
  ADD KEY `fk_p_post_con_condition1_idx` (`p_con_condition`),
  ADD KEY `fk_p_post_s_sizes1_idx` (`p_s_size`);

--
-- Indizes für die Tabelle `sca_SizeCategories`
--
ALTER TABLE `sca_SizeCategories`
  ADD PRIMARY KEY (`s_sizes_s_id`,`ca_categories_ca_id`),
  ADD KEY `fk_s_sizes_has_ca_categories_ca_categories1_idx` (`ca_categories_ca_id`),
  ADD KEY `fk_s_sizes_has_ca_categories_s_sizes1_idx` (`s_sizes_s_id`);

--
-- Indizes für die Tabelle `s_sizes`
--
ALTER TABLE `s_sizes`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `fk_s_sizes_g_genders1_idx` (`s_g_genders`);

--
-- Indizes für die Tabelle `u_users`
--
ALTER TABLE `u_users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_username_UNIQUE` (`u_username`),
  ADD UNIQUE KEY `u_e-mail_UNIQUE` (`u_email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `b_brands`
--
ALTER TABLE `b_brands`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT für Tabelle `ca_categories`
--
ALTER TABLE `ca_categories`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `col_colors`
--
ALTER TABLE `col_colors`
  MODIFY `col_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `con_conditions`
--
ALTER TABLE `con_conditions`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `g_genders`
--
ALTER TABLE `g_genders`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `p_post`
--
ALTER TABLE `p_post`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT für Tabelle `s_sizes`
--
ALTER TABLE `s_sizes`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- AUTO_INCREMENT für Tabelle `u_users`
--
ALTER TABLE `u_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `a_assets`
--
ALTER TABLE `a_assets`
  ADD CONSTRAINT `fk_a_assets_p_post1` FOREIGN KEY (`a_p_post`) REFERENCES `p_post` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `f_favorites`
--
ALTER TABLE `f_favorites`
  ADD CONSTRAINT `fk_u_users_has_p_post_p_post1` FOREIGN KEY (`f_p_post`) REFERENCES `p_post` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_u_users_has_p_post_u_users1` FOREIGN KEY (`f_u_user`) REFERENCES `u_users` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `p_post`
--
ALTER TABLE `p_post`
  ADD CONSTRAINT `fk_p_post_b_brands1` FOREIGN KEY (`p_b_brand`) REFERENCES `b_brands` (`b_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_p_post_ca_categories1` FOREIGN KEY (`p_ca_category`) REFERENCES `ca_categories` (`ca_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_p_post_co_color1` FOREIGN KEY (`p_col_color`) REFERENCES `col_colors` (`col_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_p_post_con_condition1` FOREIGN KEY (`p_con_condition`) REFERENCES `con_conditions` (`con_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_p_post_g_genders1` FOREIGN KEY (`p_g_gender`) REFERENCES `g_genders` (`g_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_p_post_s_sizes1` FOREIGN KEY (`p_s_size`) REFERENCES `s_sizes` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_p_u_user` FOREIGN KEY (`p_u_user`) REFERENCES `u_users` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `sca_SizeCategories`
--
ALTER TABLE `sca_SizeCategories`
  ADD CONSTRAINT `fk_s_sizes_has_ca_categories_ca_categories1` FOREIGN KEY (`ca_categories_ca_id`) REFERENCES `ca_categories` (`ca_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_s_sizes_has_ca_categories_s_sizes1` FOREIGN KEY (`s_sizes_s_id`) REFERENCES `s_sizes` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `s_sizes`
--
ALTER TABLE `s_sizes`
  ADD CONSTRAINT `fk_s_sizes_g_genders1` FOREIGN KEY (`s_g_genders`) REFERENCES `g_genders` (`g_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
