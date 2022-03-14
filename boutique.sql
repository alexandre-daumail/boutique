-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 mars 2022 à 09:11
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `reference` varchar(10) DEFAULT NULL,
  `COORDONNEES` varchar(31) DEFAULT NULL,
  `CONSTELLATION` varchar(16) DEFAULT NULL,
  `NOM_ARTICLE` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stars`
--

INSERT INTO `stars` (`id`, `reference`, `COORDONNEES`, `CONSTELLATION`, `NOM_ARTICLE`) VALUES
(1, '43HAMCG4YE', 'RA 19h 57m 06s Dec -58° 54\' 5\"', 'Pavo', 'Mare'),
(2, 'VNSXMPP9GB', 'RA 07h 14m 26s Dec 24° 42\' 38\"', 'Gemini', 'Steven Smith'),
(3, 'TWJRS69YGX', 'RA 07h 45m 15s Dec -37° 58\' 6\"', 'Puppis', 'Ryan Bailey'),
(4, 'RTV4JV55UJ', 'RA 05h 42m 11s Dec -30° 32\' 8\"', 'Columba', 'Eliezer'),
(5, 'IT1H41IX6J', 'RA 16h 28m 15s Dec -58° 35\' 58\"', 'Norma', 'Augustine Tieri'),
(6, 'I9CDDBJZ9P', 'RA 21h 03m 52s Dec 41° 37\' 41\"', 'Cygnus', 'wxc&zsx'),
(7, 'CZ2A9XLAI1', 'RA 18h 42m 36s Dec -7° 4\' 23\"', 'Scutum', 'Zara Huckstep'),
(8, '9G8A1RN3H7', 'RA 07h 44m 26s Dec 24° 23\' 53\"', 'Gemini', 'UNCLE NIU'),
(9, 'XP6AAAU36Q', 'RA 10h 16m 41s Dec 23° 25\' 1\"', 'Leo', 'Kendall D'),
(10, 'Z85W4AIF76', 'RA 20h 15m 28s Dec 47° 42\' 51\"', 'Cygnus', 'Maribel Reyes'),
(11, '1R5HVW8TUP', 'RA 15h 51m 38s Dec -14° 8\' 0\"', 'Libra', 'Gus Somerndike'),
(12, 'WRMC4C8H6M', 'RA 14h 42m 30s Dec -64° 58\' 31\"', 'Circinus', 'BVRS'),
(13, '61MPKVQ4SL', 'RA 10h 07m 19s Dec 16° 45\' 46\"', 'Leo', 'Abbie'),
(14, '8DIHGUCGDZ', 'RA 08h 16m 30s Dec 9° 11\' 8\"', 'Cancer', 'Prince 1 & Prince 2'),
(15, 'HMYW72QR5G', 'RA 23h 04m 45s Dec 15° 12\' 19\"', 'Pegasus', 'Prince'),
(16, 'UJSZ8G5JVZ', 'RA 15h 49m 37s Dec -3° 25\' 49\"', 'Serpens', 'Prince\'s star'),
(17, 'XJJ12FG29T', 'RA 05h 32m 00s Dec -0° 17\' 57\"', 'Orion', 'Isabella & Paul'),
(18, '6PQ3VWNIVJ', 'RA 02h 00m 09s Dec 3° 5\' 49\"', 'Pisces', 'Ellie Martindale'),
(19, 'RLIVRG4RTE', 'RA 22h 21m 01s Dec 46° 32\' 12\"', 'Lacerta', 'Alycia Riley'),
(20, '6G3D84PNQU', 'RA 17h 38m 57s Dec 13° 19\' 45\"', 'Ophiucus', 'Alatqan'),
(21, 'GF6V27N8QA', 'RA 18h 26m 40s Dec 26° 26\' 57\"', 'Hercules', 'Henry & Charles'),
(22, 'I2BXW5TDEP', 'RA 17h 52m 00s Dec 46° 38\' 35\"', 'Hercules', 'Tyler & Trent'),
(23, 'P6VZGMXD7K', 'RA 18h 10m 08s Dec 16° 28\' 36\"', 'Hercules', 'Araceli'),
(24, 'I6ZFLLBTAQ', 'RA 22h 41m 27s Dec 10° 49\' 53\"', 'Pegasus', 'JR & Nana'),
(25, '549X54C7RB', 'RA 12h 41m 30s Dec -48° 57\' 34\"', 'Centaurus', 'Mike & Dev'),
(26, '86HZXG18PC', 'RA 19h 54m 40s Dec -61° 10\' 14\"', 'Pavo', 'Alex Sperry'),
(27, 'SMX7R9HRS7', 'RA 02h 09m 32s Dec 34° 59\' 13\"', 'Triangulum', 'Advaith Tati'),
(28, 'D8WGC4Z6JD', 'RA 01h 54m 38s Dec 20° 48\' 29\"', 'Aries', 'Riliey'),
(29, 'TTQ2Q2ZWMB', 'RA 20h 30m 57s Dec 20° 36\' 20\"', 'Delphinus', 'Snoopy'),
(30, 'EIXXI9BXWU', 'RA 12h 18m 50s Dec 75° 9\' 38\"', 'Draco', 'Dar star'),
(31, 'C6A33ZMUN4', 'RA 19h 41m 48s Dec 50° 31\' 31\"', 'Cygnus', 'Shelby & Mason'),
(32, 'XKU6BDB64F', 'RA 05h 24m 28s Dec -2° 23\' 48\"', 'Orion', 'AnnMarie & Michael'),
(33, '8VW9GQ7JAR', 'RA 22h 41m 57s Dec 14° 30\' 59\"', 'Pegasus', 'Stella Mae Hendrix'),
(34, 'B29DJ83IVR', 'RA 20h 55m 49s Dec 47° 25\' 4\"', 'Cygnus', 'Ashley Nicole'),
(35, 'UI5ZQC7TIS', 'RA 02h 49m 59s Dec 27° 15\' 38\"', 'Aries', 'Alex W. Katz'),
(36, 'KCH32LV8BJ', 'RA 19h 58m 53s Dec -68° 45\' 43\"', 'Pavo', 'Frank Whitt'),
(37, '9G6ZX2KNAV', 'RA 10h 59m 41s Dec 11° 42\' 20\"', 'Leo', 'Kyle Wilson'),
(38, '8MLT9BBR6S', 'RA 13h 06m 16s Dec -48° 27\' 47\"', 'Centaurus', 'Angelica & Vincent'),
(39, 'EWKZUZGGLN', 'RA 21h 44m 29s Dec -38° 33\' 9\"', 'Grus', 'Sarafina Painley'),
(40, 'LIW3Y4I5J1', 'RA 08h 35m 15s Dec -58° 13\' 30\"', 'Carina', 'Destiny & Found'),
(41, '8C7C5BT2E5', 'RA 22h 52m 36s Dec -7° 34\' 46\"', 'Aquarius', 'Tama'),
(42, 'VNPR2CLLV6', 'RA 06h 55m 46s Dec -22° 56\' 29\"', 'Canis Major', 'Jan Moran'),
(43, 'M58FXKAXK2', 'RA 02h 55m 48s Dec 18° 19\' 54\"', 'Aries', 'Little Bluebird'),
(44, 'T7PI3RFHND', 'RA 04h 20m 11s Dec 50° 55\' 14\"', 'Perseus', 'Rhys Miles Walker'),
(45, '8HKJZDXHS1', 'RA 13h 25m 11s Dec -11° 9\' 41\"', 'Virgo', 'Ronnie'),
(46, 'J651XQTJAZ', 'RA 17h 19m 03s Dec -46° 38\' 2\"', 'Ara', 'Papa Constancio & Brettifer'),
(47, 'ZK8FGGDDU3', 'RA 11h 42m 05s Dec 22° 12\' 38\"', 'Leo', 'Karmyn is Beautiful'),
(48, '8Y6236M8XH', 'RA 14h 14m 50s Dec 10° 6\' 2\"', 'Bootes', 'Linda & Heather'),
(49, '2CUP1Z5MK7', 'RA 21h 08m 28s Dec 6° 59\' 21\"', 'Equuleus', 'Hamed Alameer'),
(50, 'SBJXV5ZBDM', 'RA 06h 20m 18s Dec -30° 3\' 47\"', 'Canis Major', 'Sondra Oswald'),
(51, 'ENZBSI5FJ2', 'RA 05h 24m 25s Dec 17° 22\' 59\"', 'Taurus', 'The Star of Daddy'),
(52, 'QVT48WV5JY', 'RA 12h 56m 30s Dec -26° 27\' 37\"', 'Hydra', 'Michelle and Bobby'),
(53, 'N3XMIGSANN', 'RA 15h 59m 53s Dec -54° 1\' 15\"', 'Norma', 'LexLaks'),
(54, 'EIIS64NYKS', 'RA 10h 53m 33s Dec -15° 26\' 44\"', 'Crater', 'Sparky'),
(55, 'JNLRVL83L8', 'RA 19h 25m 16s Dec -24° 30\' 30\"', 'Sagittarius', 'Simon Philip'),
(56, 'ZGMPC6S39N', 'RA 06h 31m 35s Dec -36° 56\' 24\"', 'Columba', 'Belia'),
(57, 'Y6IFG23GTZ', 'RA 01h 54m 38s Dec 20° 48\' 29\"', 'Aries', 'Alyssa Hosein'),
(58, 'QRWJMFPRET', 'RA 09h 45m 51s Dec 23° 46\' 27\"', 'Leo', 'Kerman Elbert Jr.'),
(59, 'V7YXKLSW71', 'RA 20h 37m 32s Dec 14° 35\' 43\"', 'Delphinus', 'Caitlyn34 & Matthew20'),
(60, 'Y37K5XSC7N', 'RA 08h 15m 15s Dec -62° 54\' 56\"', 'Carina', 'Andrea Nicole'),
(61, 'M2L4F8EHU6', 'RA 04h 50m 55s Dec -53° 27\' 41\"', 'Pictor', 'Sammy'),
(62, 'KSWTX8V5B1', 'RA 21h 28m 52s Dec 55° 25\' 6\"', 'Cepheus', 'Amelia Veiga'),
(63, '2V788USRVD', 'RA 21h 03m 52s Dec 41° 37\' 41\"', 'Cygnus', 'Susan Thomas'),
(64, '54BYYASS4Y', 'RA 07h 45m 18s Dec 28° 1\' 33\"', 'Gemini', 'Theresa Soto'),
(65, 'TI3N7D9TJ5', 'RA 06h 37m 24s Dec 6° 8\' 7\"', 'Monoceros', 'thea'),
(66, '1S8BZ8UUU3', 'RA 09h 28m 29s Dec 8° 11\' 17\"', 'Leo', 'Tyler Flinn'),
(67, 'TR6NLPE6IG', 'RA 14h 47m 54s Dec -12° 50\' 22\"', 'Libra', 'Sandra Kim'),
(68, 'SW9TEBIGQU', 'RA 10h 19m 58s Dec 19° 50\' 30\"', 'Leo', 'Jazz Penney Star & Varre Ramos Star'),
(69, 'WFDIJM526D', 'RA 13h 05m 52s Dec 45° 16\' 6\"', 'Canes Venatici', 'Julio&Vane'),
(70, 'IK5GUDYXJV', 'RA 11h 38m 09s Dec 8° 53\' 3\"', 'Virgo', 'Rodrick & Lexy'),
(71, 'CYERNEEJUG', 'RA 05h 33m 37s Dec -62° 29\' 22\"', 'Dorado', 'Bethany\'s Star'),
(72, 'U1AHSWHEXN', 'RA 09h 14m 24s Dec -43° 13\' 39\"', 'Vela', 'Mickey and Goldie'),
(73, '8X7FRWGYG3', 'RA 23h 49m 44s Dec -62° 50\' 21\"', 'Tucana', 'Nick & Mia'),
(74, '2WSHXYUEGL', 'RA 00h 46m 32s Dec 15° 28\' 32\"', 'Pisces', 'Barbie'),
(75, '38VFVG7G5M', 'RA 07h 01m 43s Dec -27° 56\' 4\"', 'Canis Major', 'Baby Thomas'),
(76, '9RGWN3W12Y', 'RA 17h 56m 55s Dec -40° 18\' 20\"', 'Scorpius', 'Oakley'),
(77, 'C9CSSAM4GC', 'RA 20h 53m 18s Dec 45° 10\' 54\"', 'Cygnus', 'Cypher'),
(78, 'WHCWJ2BGC1', 'RA 15h 02m 44s Dec -3° 1\' 53\"', 'Libra', 'Amor eterno'),
(79, 'LFIEFUQ5K1', 'RA 06h 17m 33s Dec 14° 3\' 29\"', 'Orion', 'Michelle Lynn'),
(80, 'CN65J7ZULY', 'RA 05h 44m 28s Dec -20° 7\' 35\"', 'Lepus', 'Brandi Bear'),
(81, '3RPK4VP2XH', 'RA 23h 39m 20s Dec 77° 37\' 57\"', 'Cepheus', 'anthony & abby'),
(82, 'UJMDJ5SEVH', 'RA 06h 51m 32s Dec -48° 17\' 33\"', 'Puppis', 'Lola & Addi'),
(83, 'Z4HMZ3AUTK', 'RA 17h 33m 31s Dec 57° 33\' 32\"', 'Draco', 'Mr. Jones'),
(84, 'GVB4GXMTIP', 'RA 05h 36m 02s Dec -47° 18\' 50\"', 'Pictor', 'Jade Marie'),
(85, 'GC6JCKXDZI', 'RA 17h 03m 30s Dec 35° 24\' 51\"', 'Hercules', 'Wyatt'),
(86, '9J9C9VIFSU', 'RA 19h 55m 51s Dec 38° 29\' 12\"', 'Cygnus', 'Jane'),
(87, 'SWHC9BRY83', 'RA 17h 42m 29s Dec -39° 1\' 48\"', 'Scorpius', 'Leoni'),
(88, 'FT48HWINDA', 'RA 07h 41m 57s Dec -38° 31\' 44\"', 'Puppis', 'EBUBE NDUKA'),
(89, 'Y8IFNPDWRZ', 'RA 01h 10m 19s Dec 25° 27\' 28\"', 'Pisces', 'Oliver D. Evans'),
(90, '1DVKGENJ2F', 'RA 16h 00m 20s Dec -22° 37\' 18\"', 'Scorpius', 'FREDERIC JOUVE'),
(91, '5Y5BMNT8A1', 'RA 06h 37m 40s Dec -12° 59\' 6\"', 'Canis Major', 'xxii'),
(92, '1TRW2HF1N5', 'RA 00h 39m 47s Dec 82° 29\' 38\"', 'Cepheus', 'Christa masterson'),
(93, 'MNESA3NIF3', 'RA 00h 49m 53s Dec 27° 42\' 37\"', 'Pisces', 'Chieh-yu & Hanhan'),
(94, 'HZI48X55JG', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Wera Xv'),
(95, 'TB1QGW9U8E', 'RA 23h 17m 09s Dec 3° 16\' 55\"', 'Pisces', 'Maria'),
(96, 'VJK32MHKS5', 'RA 18h 53m 02s Dec -48° 21\' 36\"', 'Telescopium', 'Tommy Caruso'),
(97, '5MHI7DF8T9', 'RA 04h 26m 21s Dec 8° 35\' 25\"', 'Taurus', 'Niyah McIver'),
(98, '1AVJ9HV5PK', 'RA 01h 09m 49s Dec 19° 39\' 30\"', 'Pisces', 'Colson Dean Panzer'),
(99, 'E6L8G3GS6L', 'RA 06h 54m 07s Dec -24° 11\' 2\"', 'Canis Major', 'Alani'),
(100, 'DNYFRHR4V3', 'RA 16h 49m 47s Dec -59° 2\' 29\"', 'Ara', 'Michael & Jessica'),
(101, 'B4QHPKTKG4', 'RA 12h 31m 09s Dec -57° 6\' 47\"', 'Crux', 'Robert A. Norwood & Carol Norwood'),
(102, '7SRCAFWVZ7', 'RA 02h 49m 59s Dec 27° 15\' 38\"', 'Aries', 'Wangyunchen'),
(103, '3YS19HWBYS', 'RA 18h 11m 13s Dec -45° 57\' 15\"', 'Telescopium', 'Bryce & Ellie'),
(104, 'N7JQ9YEU2G', 'RA 18h 04m 43s Dec 40° 5\' 3\"', 'Hercules', ''),
(105, 'K97P86HCEX', 'RA 07h 20m 07s Dec 21° 58\' 55\"', 'Gemini', 'Leah Collier'),
(106, 'J1JWIZ42G5', 'RA 15h 38m 39s Dec -29° 46\' 40\"', 'Libra', 'Jack'),
(107, '3PMC8IETQW', 'RA 06h 37m 36s Dec 10° 51\' 11\"', 'Monoceros', 'Pete coleman'),
(108, 'GLZMCLBMZ9', 'RA 09h 08m 43s Dec -26° 46\' 4\"', 'Pyxis', 'Erika Luella Ann'),
(109, 'RZV1Q9U9XP', 'RA 01h 20m 34s Dec -3° 14\' 48\"', 'Cetus', 'LJMurphy'),
(110, 'F78X3I7QUQ', 'RA 06h 47m 23s Dec 18° 11\' 35\"', 'Gemini', 'Grandma Rose'),
(111, '83KPX86NET', 'RA 20h 40m 45s Dec 19° 56\' 7\"', 'Delphinus', 'ZCZC'),
(112, '5G1E4FKHFA', 'RA 16h 14m 40s Dec 33° 51\' 30\"', 'Corona Borealis', 'Maxence'),
(113, 'QS2YEQT9IB', 'RA 07h 08m 23s Dec -26° 23\' 35\"', 'Canis Major', 'Ronald Lyons'),
(114, '69LX6C6E54', 'RA 07h 35m 21s Dec -74° 16\' 32\"', 'Volans', 'estrella'),
(115, 'DJR9Q5MJ5T', 'RA 21h 24m 07s Dec 25° 18\' 43\"', 'Vulpecula', 'Faith Nicole Oller'),
(116, 'WKM5MJ7VDZ', 'RA 16h 49m 27s Dec -15° 40\' 3\"', 'Ophiucus', 'ROBIN'),
(117, '5TMYATQKNW', 'RA 20h 01m 15s Dec 37° 5\' 56\"', 'Cygnus', 'Liam Brock'),
(118, '18FQITX1HK', 'RA 22h 11m 55s Dec -76° 6\' 57\"', 'Octans', 'Taymo'),
(119, '7GWMSU4KTH', 'RA 03h 48m 20s Dec 23° 25\' 15\"', 'Taurus', 'Selah Marie'),
(120, '99X8GUYTXH', 'RA 16h 08m 34s Dec -39° 6\' 19\"', 'Scorpius', 'Edwin Karl Harbke'),
(121, '6PWV7AUG91', 'RA 18h 15m 57s Dec -3° 37\' 3\"', 'Serpens', 'Samhains Suffering'),
(122, 'JFDV8I5CCS', 'RA 00h 26m 12s Dec -43° 40\' 48\"', 'Phoenix', 'Rory Lynn Thompson'),
(123, 'DI7X41DH8I', 'RA 00h 40m 28s Dec -16° 31\' 0\"', 'Cetus', 'MaverickRobertEwald'),
(124, 'HNPSQVSAQR', 'RA 07h 05m 08s Dec 47° 46\' 30\"', 'Lynx', 'Deborah L. Greco'),
(125, '31625VLKY8', 'RA 03h 08m 10s Dec 40° 57\' 20\"', 'Perseus', 'CM & SM'),
(126, 'LM3ZSG9GR7', 'RA 18h 15m 12s Dec -20° 23\' 17\"', 'Sagittarius', 'ITA.X11'),
(127, 'KEEJ9N9SYS', 'RA 18h 48m 50s Dec -43° 40\' 48\"', 'Corona Australis', 'Janet Harris'),
(128, 'ZV6IGZITFF', 'RA 02h 58m 16s Dec -40° 18\' 15\"', 'Eridanus', 'Zhang Zhuo Yu'),
(129, 'UGHFWAXVY6', 'RA 16h 14m 28s Dec -21° 6\' 27\"', 'Scorpius', 'Julia'),
(130, 'GRGBQWRJC4', 'RA 05h 02m 44s Dec -22° 47\' 42\"', 'Lepus', 'Sydney'),
(131, '15ZBHEUHRX', 'RA 17h 14m 38s Dec 14° 23\' 25\"', 'Hercules', 'eternite Lutin'),
(132, 'ICBFL34BYM', 'RA 08h 12m 46s Dec -29° 54\' 38\"', 'Puppis', 'Karina Galvano'),
(133, 'SSC1XWTFXH', 'RA 12h 19m 02s Dec 26° 0\' 28\"', 'Coma Berenices', 'Greg'),
(134, '33C7PBJZDR', 'RA 10h 03m 41s Dec -9° 34\' 26\"', 'Sextans', 'Anissa Shantel'),
(135, 'PW77XRKKT4', 'RA 13h 32m 05s Dec -38° 23\' 57\"', 'Centaurus', 'Erick and Lexie'),
(136, '2NAMIBHWBV', 'RA 17h 10m 22s Dec -15° 43\' 28\"', 'Ophiucus', 'Jeremy & Kathryn'),
(137, 'AR6Q35N8EU', 'RA 02h 30m 38s Dec 19° 51\' 19\"', 'Aries', 'Eneida\'s Light'),
(138, 'BXDMNTYHGK', 'RA 17h 41m 05s Dec 24° 30\' 47\"', 'Hercules', 'Emily Linn'),
(139, '955MNALD5N', 'RA 19h 12m 33s Dec 67° 39\' 42\"', 'Draco', 'Jack & Isley\'s Star'),
(140, 'WKU4YN8WLS', 'RA 00h 00m 23s Dec 26° 55\' 5\"', 'Pisces', 'D Shila Agnew'),
(141, 'XQW1YU895N', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Matthew Foran'),
(142, 'A5TMNPW6EQ', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
(143, 'DJQHYSC59I', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
(144, '3EYCSWP28I', 'RA 12h 43m 04s Dec 61° 9\' 20\"', 'Ursa Major', 'Jace'),
(145, 'SSC1XWTFXH', 'RA 12h 19m 02s Dec 26° 0\' 28\"', 'Coma Berenices', 'Greg'),
(146, '33C7PBJZDR', 'RA 10h 03m 41s Dec -9° 34\' 26\"', 'Sextans', 'Anissa Shantel'),
(147, 'PW77XRKKT4', 'RA 13h 32m 05s Dec -38° 23\' 57\"', 'Centaurus', 'Erick and Lexie'),
(148, '2NAMIBHWBV', 'RA 17h 10m 22s Dec -15° 43\' 28\"', 'Ophiucus', 'Jeremy & Kathryn'),
(149, 'AR6Q35N8EU', 'RA 02h 30m 38s Dec 19° 51\' 19\"', 'Aries', 'Eneida\'s Light'),
(150, 'BXDMNTYHGK', 'RA 17h 41m 05s Dec 24° 30\' 47\"', 'Hercules', 'Emily Linn'),
(151, '955MNALD5N', 'RA 19h 12m 33s Dec 67° 39\' 42\"', 'Draco', 'Jack & Isley\'s Star'),
(152, 'WKU4YN8WLS', 'RA 00h 00m 23s Dec 26° 55\' 5\"', 'Pisces', 'D Shila Agnew'),
(153, 'XQW1YU895N', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Matthew Foran'),
(154, 'A5TMNPW6EQ', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
(155, 'DJQHYSC59I', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
(156, '3EYCSWP28I', 'RA 12h 43m 04s Dec 61° 9\' 20\"', 'Ursa Major', 'Jace'),
(157, 'Y5B7LQGNR2', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Charles'),
(158, 'CAWU3WSYL7', 'RA 16h 26m 50s Dec 2° 20\' 51\"', 'Ophiucus', 'Nancy Wilcox'),
(159, '9M993MDHMS', 'RA 03h 06m 23s Dec 13° 11\' 13\"', 'Aries', 'Taylor Jade'),
(160, 'UXZPP5C9GY', 'RA 19h 23m 04s Dec -7° 24\' 1\"', 'Aquila', 'Nancy Wilcox'),
(161, 'AGM2VECKR5', 'RA 11h 06m 54s Dec 1° 57\' 20\"', 'Leo', 'Steve Matthews'),
(162, 'AV659AQ5HG', 'RA 17h 31m 05s Dec -60° 41\' 2\"', 'Ara', 'Kwintin Araghi'),
(163, 'BBHIER4J59', 'RA 14h 08m 27s Dec -74° 51\' 1\"', 'Apus', 'Mia Ahmani Hughes'),
(164, 'EIPDWPR4GY', 'RA 15h 32m 04s Dec -38° 37\' 23\"', 'Lupus', 'Jennifer Ann'),
(165, 'AQL5WYAZKB', 'RA 07h 34m 36s Dec 31° 53\' 18\"', 'Gemini', 'BT-7274'),
(166, 'MFDXG13VY1', 'RA 05h 55m 10s Dec 7° 24\' 24\"', 'Orion', 'Kevin McDermott'),
(167, 'BAXHC9E8X6', 'RA 16h 07m 51s Dec -24° 27\' 42\"', 'Scorpius', 'Oreos Star'),
(168, 'MG76GKXGPB', 'RA 08h 22m 31s Dec -48° 29\' 25\"', 'Vela', 'Reaith & Smigan'),
(169, 'NWNQEGDNF2', 'RA 00h 13m 44s Dec -26° 17\' 4\"', 'Sculptor', 'Harlow'),
(170, 'I4T6B684YL', 'RA 12h 57m 33s Dec -22° 45\' 14\"', 'Hydra', 'Leah Makura'),
(171, 'W9HCT8VSK8', 'RA 12h 41m 39s Dec -1° 26\' 57\"', 'Virgo', 'Johnny & Amanda'),
(172, 'DBWXHS3EVY', 'RA 16h 54m 10s Dec -1° 36\' 43\"', 'Ophiucus', 'Tammy Lee Peterson'),
(173, 'Z5YYCG12EE', 'RA 22h 23m 32s Dec -7° 11\' 39\"', 'Aquarius', 'C + M'),
(174, 'YVZFXUPVZS', 'RA 01h 12m 59s Dec 30° 3\' 51\"', 'Pisces', 'Pap Bakaitus'),
(175, 'MQS5HCU1CM', 'RA 20h 11m 18s Dec -0° 49\' 17\"', 'Aquila', 'Tatiana Verbaeys'),
(176, 'QSSD517RFI', 'RA 23h 31m 42s Dec -21° 22\' 9\"', 'Aquarius', 'STAR VISTA'),
(177, 'RVEZQQU9IR', 'RA 18h 05m 27s Dec 2° 29\' 57\"', 'Ophiucus', 'Guapo & Gordito'),
(178, 'LUIZWD8PM8', 'RA 07h 31m 25s Dec -36° 9\' 10\"', 'Puppis', 'LUNA'),
(179, '2MMWS5JW4G', 'RA 20h 21m 00s Dec -14° 46\' 53\"', 'Capricornus', 'Shaylynn'),
(180, 'TVGU721YXT', 'RA 08h 46m 40s Dec 28° 45\' 55\"', 'Cancer', 'Victoria Escajeda'),
(181, '5SYCQL44UG', 'RA 17h 43m 17s Dec -27° 53\' 3\"', 'Ophiucus', 'Hailey\'s Melissa'),
(182, '25BCPB4EX4', 'RA 14h 47m 31s Dec -43° 33\' 27\"', 'Lupus', 'Ethan'),
(183, '7DH3F4XTQP', 'RA 19h 24m 21s Dec -43° 43\' 23\"', 'Sagittarius', 'Bruce'),
(184, '6H3DVSPQ75', 'RA 13h 06m 22s Dec 62° 2\' 30\"', 'Ursa Major', 'Jannat and Musa'),
(185, 'Y2D2X8TJ88', 'RA 09h 54m 51s Dec -50° 14\' 38\"', 'Vela', 'Michael Scott'),
(186, 'FMDW3D3FDL', 'RA 08h 29m 46s Dec 67° 17\' 51\"', 'Ursa Major', 'Alayna McGehee'),
(187, 'H1UUNYP739', 'RA 08h 28m 35s Dec -23° 4\' 18\"', 'Pyxis', ''),
(188, 'XF6HLEKWTD', 'RA 09h 00m 38s Dec 41° 46\' 58\"', 'Lynx', ''),
(189, '7BC7A6CIYG', 'RA 03h 50m 18s Dec 25° 34\' 45\"', 'Taurus', 'Jennifer & Malitza'),
(190, 'WN71FH2KTA', 'RA 00h 09m 24s Dec -45° 44\' 51\"', 'Phoenix', 'Our love'),
(191, 'JNEDT447BP', 'RA 18h 25m 55s Dec 14° 58\' 0\"', 'Hercules', 'LIXUMIAO and XiYue'),
(192, 'D8531SEZFG', 'RA 11h 47m 54s Dec 8° 14\' 44\"', 'Virgo', 'Persephone'),
(193, 'KWAVX3PLLB', 'RA 00h 51m 33s Dec 51° 34\' 15\"', 'Cassiopeia', 'Rosie Pena Star'),
(194, 'ZM483ZHI3P', 'RA 06h 56m 32s Dec 46° 16\' 27\"', 'Auriga', 'T&M'),
(195, 'V7MXL16SS7', 'RA 00h 49m 05s Dec 57° 48\' 56\"', 'Cassiopeia', 'Bella & Fahrenheit'),
(196, '5572M8BKM6', 'RA 23h 31m 01s Dec -6° 17\' 17\"', 'Aquarius', 'Zya Greene'),
(197, 'CKKP5F429K', 'RA 20h 11m 57s Dec -12° 23\' 33\"', 'Capricornus', 'The Nini'),
(198, 'YEYTPMK8A6', 'RA 16h 15m 26s Dec -63° 41\' 8\"', 'Triang. Australe', 'PDRB & Tar Baby'),
(199, '23BQ83Q8GQ', 'RA 02h 38m 48s Dec 21° 57\' 41\"', 'Aries', 'MARTY'),
(200, '1EZNENBJQD', 'RA 08h 29m 27s Dec -27° 19\' 57\"', 'Pyxis', 'Inmendham FREE'),
(201, '3ZRRI4MCPY', 'RA 11h 03m 16s Dec -31° 57\' 38\"', 'Hydra', 'Inmendham FREE!'),
(202, 'RUPE5C1B68', 'RA 17h 22m 51s Dec -2° 23\' 17\"', 'Ophiucus', 'Kona'),
(203, 'SYVWXTKQIU', 'RA 23h 17m 09s Dec 3° 16\' 55\"', 'Pisces', 'Anna Manger'),
(204, 'NFXPZJLSKW', 'RA 09h 33m 26s Dec -22° 51\' 50\"', 'Hydra', 'sls-mpk');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `civilité` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
