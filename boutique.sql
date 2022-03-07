-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 07 mars 2022 à 08:52
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Boutiques`
--

-- --------------------------------------------------------

--
-- Structure de la table `ARTICLE`
--

CREATE TABLE `ARTICLE` (
  `ID_ARTICLE` int(11) NOT NULL,
  `ID_COMMANDE` int(11) DEFAULT NULL,
  `ID_OFFRE` int(11) NOT NULL,
  `NOM` varchar(80) DEFAULT NULL,
  `DESCRIPTION` text,
  `ASCENSION` varchar(255) DEFAULT NULL,
  `DECLINAISON` varchar(255) DEFAULT NULL,
  `PRIX` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `COMMANDE`
--

CREATE TABLE `COMMANDE` (
  `ID_COMMANDE` int(11) NOT NULL,
  `ID_PAIEMENT` int(11) DEFAULT NULL,
  `ID_UTILISATEUR` int(11) DEFAULT NULL,
  `DATE_COMMANDE` datetime DEFAULT NULL,
  `DATE_LIVRAISON` date DEFAULT NULL,
  `STATUT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `COMMENTAIRE`
--

CREATE TABLE `COMMENTAIRE` (
  `ID_COMMENTAIRE` int(11) NOT NULL,
  `ID_UTILISATEUR` int(11) NOT NULL,
  `COMMENTAIRE` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DROIT`
--

CREATE TABLE `DROIT` (
  `ID_DROIT` int(11) NOT NULL,
  `NOM` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `novastar_international_star_database`
--

CREATE TABLE `novastar_international_star_database` (
  `ID_ARTICLE` varchar(10) DEFAULT NULL,
  `COORDONNEES` varchar(31) DEFAULT NULL,
  `CONSTELLATION` varchar(16) DEFAULT NULL,
  `NOM_ARTICLE` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `novastar_international_star_database`
--

INSERT INTO `novastar_international_star_database` (`ID_ARTICLE`, `COORDONNEES`, `CONSTELLATION`, `NOM_ARTICLE`) VALUES
('ID_ARTICLE', ' COORDONNEES', 'CONSTELLATION', 'Nom'),
('', '', '', ''),
('43HAMCG4YE', 'RA 19h 57m 06s Dec -58° 54\' 5\"', 'Pavo', 'Mare'),
('VNSXMPP9GB', 'RA 07h 14m 26s Dec 24° 42\' 38\"', 'Gemini', 'Steven Smith'),
('TWJRS69YGX', 'RA 07h 45m 15s Dec -37° 58\' 6\"', 'Puppis', 'Ryan Bailey'),
('RTV4JV55UJ', 'RA 05h 42m 11s Dec -30° 32\' 8\"', 'Columba', 'Eliezer'),
('IT1H41IX6J', 'RA 16h 28m 15s Dec -58° 35\' 58\"', 'Norma', 'Augustine Tieri'),
('I9CDDBJZ9P', 'RA 21h 03m 52s Dec 41° 37\' 41\"', 'Cygnus', 'wxc&zsx'),
('CZ2A9XLAI1', 'RA 18h 42m 36s Dec -7° 4\' 23\"', 'Scutum', 'Zara Huckstep'),
('9G8A1RN3H7', 'RA 07h 44m 26s Dec 24° 23\' 53\"', 'Gemini', 'UNCLE NIU'),
('XP6AAAU36Q', 'RA 10h 16m 41s Dec 23° 25\' 1\"', 'Leo', 'Kendall D'),
('Z85W4AIF76', 'RA 20h 15m 28s Dec 47° 42\' 51\"', 'Cygnus', 'Maribel Reyes'),
('1R5HVW8TUP', 'RA 15h 51m 38s Dec -14° 8\' 0\"', 'Libra', 'Gus Somerndike'),
('WRMC4C8H6M', 'RA 14h 42m 30s Dec -64° 58\' 31\"', 'Circinus', 'BVRS'),
('61MPKVQ4SL', 'RA 10h 07m 19s Dec 16° 45\' 46\"', 'Leo', 'Abbie'),
('8DIHGUCGDZ', 'RA 08h 16m 30s Dec 9° 11\' 8\"', 'Cancer', 'Prince 1 & Prince 2'),
('HMYW72QR5G', 'RA 23h 04m 45s Dec 15° 12\' 19\"', 'Pegasus', 'Prince'),
('UJSZ8G5JVZ', 'RA 15h 49m 37s Dec -3° 25\' 49\"', 'Serpens', 'Prince\'s star'),
('XJJ12FG29T', 'RA 05h 32m 00s Dec -0° 17\' 57\"', 'Orion', 'Isabella & Paul'),
('6PQ3VWNIVJ', 'RA 02h 00m 09s Dec 3° 5\' 49\"', 'Pisces', 'Ellie Martindale'),
('RLIVRG4RTE', 'RA 22h 21m 01s Dec 46° 32\' 12\"', 'Lacerta', 'Alycia Riley'),
('6G3D84PNQU', 'RA 17h 38m 57s Dec 13° 19\' 45\"', 'Ophiucus', 'Alatqan'),
('GF6V27N8QA', 'RA 18h 26m 40s Dec 26° 26\' 57\"', 'Hercules', 'Henry & Charles'),
('I2BXW5TDEP', 'RA 17h 52m 00s Dec 46° 38\' 35\"', 'Hercules', 'Tyler & Trent'),
('P6VZGMXD7K', 'RA 18h 10m 08s Dec 16° 28\' 36\"', 'Hercules', 'Araceli'),
('I6ZFLLBTAQ', 'RA 22h 41m 27s Dec 10° 49\' 53\"', 'Pegasus', 'JR & Nana'),
('549X54C7RB', 'RA 12h 41m 30s Dec -48° 57\' 34\"', 'Centaurus', 'Mike & Dev'),
('86HZXG18PC', 'RA 19h 54m 40s Dec -61° 10\' 14\"', 'Pavo', 'Alex Sperry'),
('SMX7R9HRS7', 'RA 02h 09m 32s Dec 34° 59\' 13\"', 'Triangulum', 'Advaith Tati'),
('D8WGC4Z6JD', 'RA 01h 54m 38s Dec 20° 48\' 29\"', 'Aries', 'Riliey'),
('TTQ2Q2ZWMB', 'RA 20h 30m 57s Dec 20° 36\' 20\"', 'Delphinus', 'Snoopy'),
('EIXXI9BXWU', 'RA 12h 18m 50s Dec 75° 9\' 38\"', 'Draco', 'Dar star'),
('C6A33ZMUN4', 'RA 19h 41m 48s Dec 50° 31\' 31\"', 'Cygnus', 'Shelby & Mason'),
('XKU6BDB64F', 'RA 05h 24m 28s Dec -2° 23\' 48\"', 'Orion', 'AnnMarie & Michael'),
('8VW9GQ7JAR', 'RA 22h 41m 57s Dec 14° 30\' 59\"', 'Pegasus', 'Stella Mae Hendrix'),
('B29DJ83IVR', 'RA 20h 55m 49s Dec 47° 25\' 4\"', 'Cygnus', 'Ashley Nicole'),
('UI5ZQC7TIS', 'RA 02h 49m 59s Dec 27° 15\' 38\"', 'Aries', 'Alex W. Katz'),
('KCH32LV8BJ', 'RA 19h 58m 53s Dec -68° 45\' 43\"', 'Pavo', 'Frank Whitt'),
('9G6ZX2KNAV', 'RA 10h 59m 41s Dec 11° 42\' 20\"', 'Leo', 'Kyle Wilson'),
('8MLT9BBR6S', 'RA 13h 06m 16s Dec -48° 27\' 47\"', 'Centaurus', 'Angelica & Vincent'),
('EWKZUZGGLN', 'RA 21h 44m 29s Dec -38° 33\' 9\"', 'Grus', 'Sarafina Painley'),
('LIW3Y4I5J1', 'RA 08h 35m 15s Dec -58° 13\' 30\"', 'Carina', 'Destiny & Found'),
('8C7C5BT2E5', 'RA 22h 52m 36s Dec -7° 34\' 46\"', 'Aquarius', 'Tama'),
('VNPR2CLLV6', 'RA 06h 55m 46s Dec -22° 56\' 29\"', 'Canis Major', 'Jan Moran'),
('M58FXKAXK2', 'RA 02h 55m 48s Dec 18° 19\' 54\"', 'Aries', 'Little Bluebird'),
('T7PI3RFHND', 'RA 04h 20m 11s Dec 50° 55\' 14\"', 'Perseus', 'Rhys Miles Walker'),
('8HKJZDXHS1', 'RA 13h 25m 11s Dec -11° 9\' 41\"', 'Virgo', 'Ronnie'),
('J651XQTJAZ', 'RA 17h 19m 03s Dec -46° 38\' 2\"', 'Ara', 'Papa Constancio & Brettifer'),
('ZK8FGGDDU3', 'RA 11h 42m 05s Dec 22° 12\' 38\"', 'Leo', 'Karmyn is Beautiful'),
('8Y6236M8XH', 'RA 14h 14m 50s Dec 10° 6\' 2\"', 'Bootes', 'Linda & Heather'),
('2CUP1Z5MK7', 'RA 21h 08m 28s Dec 6° 59\' 21\"', 'Equuleus', 'Hamed Alameer'),
('SBJXV5ZBDM', 'RA 06h 20m 18s Dec -30° 3\' 47\"', 'Canis Major', 'Sondra Oswald'),
('ENZBSI5FJ2', 'RA 05h 24m 25s Dec 17° 22\' 59\"', 'Taurus', 'The Star of Daddy'),
('QVT48WV5JY', 'RA 12h 56m 30s Dec -26° 27\' 37\"', 'Hydra', 'Michelle and Bobby'),
('N3XMIGSANN', 'RA 15h 59m 53s Dec -54° 1\' 15\"', 'Norma', 'LexLaks'),
('EIIS64NYKS', 'RA 10h 53m 33s Dec -15° 26\' 44\"', 'Crater', 'Sparky'),
('JNLRVL83L8', 'RA 19h 25m 16s Dec -24° 30\' 30\"', 'Sagittarius', 'Simon Philip'),
('ZGMPC6S39N', 'RA 06h 31m 35s Dec -36° 56\' 24\"', 'Columba', 'Belia'),
('Y6IFG23GTZ', 'RA 01h 54m 38s Dec 20° 48\' 29\"', 'Aries', 'Alyssa Hosein'),
('QRWJMFPRET', 'RA 09h 45m 51s Dec 23° 46\' 27\"', 'Leo', 'Kerman Elbert Jr.'),
('V7YXKLSW71', 'RA 20h 37m 32s Dec 14° 35\' 43\"', 'Delphinus', 'Caitlyn34 & Matthew20'),
('Y37K5XSC7N', 'RA 08h 15m 15s Dec -62° 54\' 56\"', 'Carina', 'Andrea Nicole'),
('M2L4F8EHU6', 'RA 04h 50m 55s Dec -53° 27\' 41\"', 'Pictor', 'Sammy'),
('KSWTX8V5B1', 'RA 21h 28m 52s Dec 55° 25\' 6\"', 'Cepheus', 'Amelia Veiga'),
('2V788USRVD', 'RA 21h 03m 52s Dec 41° 37\' 41\"', 'Cygnus', 'Susan Thomas'),
('54BYYASS4Y', 'RA 07h 45m 18s Dec 28° 1\' 33\"', 'Gemini', 'Theresa Soto'),
('TI3N7D9TJ5', 'RA 06h 37m 24s Dec 6° 8\' 7\"', 'Monoceros', 'thea'),
('1S8BZ8UUU3', 'RA 09h 28m 29s Dec 8° 11\' 17\"', 'Leo', 'Tyler Flinn'),
('TR6NLPE6IG', 'RA 14h 47m 54s Dec -12° 50\' 22\"', 'Libra', 'Sandra Kim'),
('SW9TEBIGQU', 'RA 10h 19m 58s Dec 19° 50\' 30\"', 'Leo', 'Jazz Penney Star & Varre Ramos Star'),
('WFDIJM526D', 'RA 13h 05m 52s Dec 45° 16\' 6\"', 'Canes Venatici', 'Julio&Vane'),
('IK5GUDYXJV', 'RA 11h 38m 09s Dec 8° 53\' 3\"', 'Virgo', 'Rodrick & Lexy'),
('CYERNEEJUG', 'RA 05h 33m 37s Dec -62° 29\' 22\"', 'Dorado', 'Bethany\'s Star'),
('U1AHSWHEXN', 'RA 09h 14m 24s Dec -43° 13\' 39\"', 'Vela', 'Mickey and Goldie'),
('8X7FRWGYG3', 'RA 23h 49m 44s Dec -62° 50\' 21\"', 'Tucana', 'Nick & Mia'),
('2WSHXYUEGL', 'RA 00h 46m 32s Dec 15° 28\' 32\"', 'Pisces', 'Barbie'),
('38VFVG7G5M', 'RA 07h 01m 43s Dec -27° 56\' 4\"', 'Canis Major', 'Baby Thomas'),
('9RGWN3W12Y', 'RA 17h 56m 55s Dec -40° 18\' 20\"', 'Scorpius', 'Oakley'),
('C9CSSAM4GC', 'RA 20h 53m 18s Dec 45° 10\' 54\"', 'Cygnus', 'Cypher'),
('WHCWJ2BGC1', 'RA 15h 02m 44s Dec -3° 1\' 53\"', 'Libra', 'Amor eterno'),
('LFIEFUQ5K1', 'RA 06h 17m 33s Dec 14° 3\' 29\"', 'Orion', 'Michelle Lynn'),
('CN65J7ZULY', 'RA 05h 44m 28s Dec -20° 7\' 35\"', 'Lepus', 'Brandi Bear'),
('3RPK4VP2XH', 'RA 23h 39m 20s Dec 77° 37\' 57\"', 'Cepheus', 'anthony & abby'),
('UJMDJ5SEVH', 'RA 06h 51m 32s Dec -48° 17\' 33\"', 'Puppis', 'Lola & Addi'),
('Z4HMZ3AUTK', 'RA 17h 33m 31s Dec 57° 33\' 32\"', 'Draco', 'Mr. Jones'),
('GVB4GXMTIP', 'RA 05h 36m 02s Dec -47° 18\' 50\"', 'Pictor', 'Jade Marie'),
('GC6JCKXDZI', 'RA 17h 03m 30s Dec 35° 24\' 51\"', 'Hercules', 'Wyatt'),
('9J9C9VIFSU', 'RA 19h 55m 51s Dec 38° 29\' 12\"', 'Cygnus', 'Jane'),
('SWHC9BRY83', 'RA 17h 42m 29s Dec -39° 1\' 48\"', 'Scorpius', 'Leoni'),
('FT48HWINDA', 'RA 07h 41m 57s Dec -38° 31\' 44\"', 'Puppis', 'EBUBE NDUKA'),
('Y8IFNPDWRZ', 'RA 01h 10m 19s Dec 25° 27\' 28\"', 'Pisces', 'Oliver D. Evans'),
('1DVKGENJ2F', 'RA 16h 00m 20s Dec -22° 37\' 18\"', 'Scorpius', 'FREDERIC JOUVE'),
('5Y5BMNT8A1', 'RA 06h 37m 40s Dec -12° 59\' 6\"', 'Canis Major', 'xxii'),
('1TRW2HF1N5', 'RA 00h 39m 47s Dec 82° 29\' 38\"', 'Cepheus', 'Christa masterson'),
('MNESA3NIF3', 'RA 00h 49m 53s Dec 27° 42\' 37\"', 'Pisces', 'Chieh-yu & Hanhan'),
('HZI48X55JG', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Wera Xv'),
('TB1QGW9U8E', 'RA 23h 17m 09s Dec 3° 16\' 55\"', 'Pisces', 'Maria'),
('VJK32MHKS5', 'RA 18h 53m 02s Dec -48° 21\' 36\"', 'Telescopium', 'Tommy Caruso'),
('5MHI7DF8T9', 'RA 04h 26m 21s Dec 8° 35\' 25\"', 'Taurus', 'Niyah McIver'),
('1AVJ9HV5PK', 'RA 01h 09m 49s Dec 19° 39\' 30\"', 'Pisces', 'Colson Dean Panzer'),
('E6L8G3GS6L', 'RA 06h 54m 07s Dec -24° 11\' 2\"', 'Canis Major', 'Alani'),
('DNYFRHR4V3', 'RA 16h 49m 47s Dec -59° 2\' 29\"', 'Ara', 'Michael & Jessica'),
('B4QHPKTKG4', 'RA 12h 31m 09s Dec -57° 6\' 47\"', 'Crux', 'Robert A. Norwood & Carol Norwood'),
('7SRCAFWVZ7', 'RA 02h 49m 59s Dec 27° 15\' 38\"', 'Aries', 'Wangyunchen'),
('3YS19HWBYS', 'RA 18h 11m 13s Dec -45° 57\' 15\"', 'Telescopium', 'Bryce & Ellie'),
('N7JQ9YEU2G', 'RA 18h 04m 43s Dec 40° 5\' 3\"', 'Hercules', ''),
('K97P86HCEX', 'RA 07h 20m 07s Dec 21° 58\' 55\"', 'Gemini', 'Leah Collier'),
('J1JWIZ42G5', 'RA 15h 38m 39s Dec -29° 46\' 40\"', 'Libra', 'Jack'),
('3PMC8IETQW', 'RA 06h 37m 36s Dec 10° 51\' 11\"', 'Monoceros', 'Pete coleman'),
('GLZMCLBMZ9', 'RA 09h 08m 43s Dec -26° 46\' 4\"', 'Pyxis', 'Erika Luella Ann'),
('RZV1Q9U9XP', 'RA 01h 20m 34s Dec -3° 14\' 48\"', 'Cetus', 'LJMurphy'),
('F78X3I7QUQ', 'RA 06h 47m 23s Dec 18° 11\' 35\"', 'Gemini', 'Grandma Rose'),
('83KPX86NET', 'RA 20h 40m 45s Dec 19° 56\' 7\"', 'Delphinus', 'ZCZC'),
('5G1E4FKHFA', 'RA 16h 14m 40s Dec 33° 51\' 30\"', 'Corona Borealis', 'Maxence'),
('QS2YEQT9IB', 'RA 07h 08m 23s Dec -26° 23\' 35\"', 'Canis Major', 'Ronald Lyons'),
('69LX6C6E54', 'RA 07h 35m 21s Dec -74° 16\' 32\"', 'Volans', 'estrella'),
('DJR9Q5MJ5T', 'RA 21h 24m 07s Dec 25° 18\' 43\"', 'Vulpecula', 'Faith Nicole Oller'),
('WKM5MJ7VDZ', 'RA 16h 49m 27s Dec -15° 40\' 3\"', 'Ophiucus', 'ROBIN'),
('5TMYATQKNW', 'RA 20h 01m 15s Dec 37° 5\' 56\"', 'Cygnus', 'Liam Brock'),
('18FQITX1HK', 'RA 22h 11m 55s Dec -76° 6\' 57\"', 'Octans', 'Taymo'),
('7GWMSU4KTH', 'RA 03h 48m 20s Dec 23° 25\' 15\"', 'Taurus', 'Selah Marie'),
('99X8GUYTXH', 'RA 16h 08m 34s Dec -39° 6\' 19\"', 'Scorpius', 'Edwin Karl Harbke'),
('6PWV7AUG91', 'RA 18h 15m 57s Dec -3° 37\' 3\"', 'Serpens', 'Samhains Suffering'),
('JFDV8I5CCS', 'RA 00h 26m 12s Dec -43° 40\' 48\"', 'Phoenix', 'Rory Lynn Thompson'),
('DI7X41DH8I', 'RA 00h 40m 28s Dec -16° 31\' 0\"', 'Cetus', 'MaverickRobertEwald'),
('HNPSQVSAQR', 'RA 07h 05m 08s Dec 47° 46\' 30\"', 'Lynx', 'Deborah L. Greco'),
('31625VLKY8', 'RA 03h 08m 10s Dec 40° 57\' 20\"', 'Perseus', 'CM & SM'),
('LM3ZSG9GR7', 'RA 18h 15m 12s Dec -20° 23\' 17\"', 'Sagittarius', 'ITA.X11'),
('KEEJ9N9SYS', 'RA 18h 48m 50s Dec -43° 40\' 48\"', 'Corona Australis', 'Janet Harris'),
('ZV6IGZITFF', 'RA 02h 58m 16s Dec -40° 18\' 15\"', 'Eridanus', 'Zhang Zhuo Yu'),
('UGHFWAXVY6', 'RA 16h 14m 28s Dec -21° 6\' 27\"', 'Scorpius', 'Julia'),
('GRGBQWRJC4', 'RA 05h 02m 44s Dec -22° 47\' 42\"', 'Lepus', 'Sydney'),
('15ZBHEUHRX', 'RA 17h 14m 38s Dec 14° 23\' 25\"', 'Hercules', 'eternite Lutin'),
('ICBFL34BYM', 'RA 08h 12m 46s Dec -29° 54\' 38\"', 'Puppis', 'Karina Galvano'),
('SSC1XWTFXH', 'RA 12h 19m 02s Dec 26° 0\' 28\"', 'Coma Berenices', 'Greg'),
('33C7PBJZDR', 'RA 10h 03m 41s Dec -9° 34\' 26\"', 'Sextans', 'Anissa Shantel'),
('PW77XRKKT4', 'RA 13h 32m 05s Dec -38° 23\' 57\"', 'Centaurus', 'Erick and Lexie'),
('2NAMIBHWBV', 'RA 17h 10m 22s Dec -15° 43\' 28\"', 'Ophiucus', 'Jeremy & Kathryn'),
('AR6Q35N8EU', 'RA 02h 30m 38s Dec 19° 51\' 19\"', 'Aries', 'Eneida\'s Light'),
('BXDMNTYHGK', 'RA 17h 41m 05s Dec 24° 30\' 47\"', 'Hercules', 'Emily Linn'),
('955MNALD5N', 'RA 19h 12m 33s Dec 67° 39\' 42\"', 'Draco', 'Jack & Isley\'s Star'),
('WKU4YN8WLS', 'RA 00h 00m 23s Dec 26° 55\' 5\"', 'Pisces', 'D Shila Agnew'),
('XQW1YU895N', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Matthew Foran'),
('A5TMNPW6EQ', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
('DJQHYSC59I', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
('3EYCSWP28I', 'RA 12h 43m 04s Dec 61° 9\' 20\"', 'Ursa Major', 'Jace'),
('SSC1XWTFXH', 'RA 12h 19m 02s Dec 26° 0\' 28\"', 'Coma Berenices', 'Greg'),
('33C7PBJZDR', 'RA 10h 03m 41s Dec -9° 34\' 26\"', 'Sextans', 'Anissa Shantel'),
('PW77XRKKT4', 'RA 13h 32m 05s Dec -38° 23\' 57\"', 'Centaurus', 'Erick and Lexie'),
('2NAMIBHWBV', 'RA 17h 10m 22s Dec -15° 43\' 28\"', 'Ophiucus', 'Jeremy & Kathryn'),
('AR6Q35N8EU', 'RA 02h 30m 38s Dec 19° 51\' 19\"', 'Aries', 'Eneida\'s Light'),
('BXDMNTYHGK', 'RA 17h 41m 05s Dec 24° 30\' 47\"', 'Hercules', 'Emily Linn'),
('955MNALD5N', 'RA 19h 12m 33s Dec 67° 39\' 42\"', 'Draco', 'Jack & Isley\'s Star'),
('WKU4YN8WLS', 'RA 00h 00m 23s Dec 26° 55\' 5\"', 'Pisces', 'D Shila Agnew'),
('XQW1YU895N', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Matthew Foran'),
('A5TMNPW6EQ', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
('DJQHYSC59I', 'RA 02h 07m 10s Dec 23° 27\' 45\"', 'Aries', 'YCL'),
('3EYCSWP28I', 'RA 12h 43m 04s Dec 61° 9\' 20\"', 'Ursa Major', 'Jace'),
('Y5B7LQGNR2', 'RA 01h 31m 28s Dec 15° 20\' 44\"', 'Pisces', 'Charles'),
('CAWU3WSYL7', 'RA 16h 26m 50s Dec 2° 20\' 51\"', 'Ophiucus', 'Nancy Wilcox'),
('9M993MDHMS', 'RA 03h 06m 23s Dec 13° 11\' 13\"', 'Aries', 'Taylor Jade'),
('UXZPP5C9GY', 'RA 19h 23m 04s Dec -7° 24\' 1\"', 'Aquila', 'Nancy Wilcox'),
('AGM2VECKR5', 'RA 11h 06m 54s Dec 1° 57\' 20\"', 'Leo', 'Steve Matthews'),
('AV659AQ5HG', 'RA 17h 31m 05s Dec -60° 41\' 2\"', 'Ara', 'Kwintin Araghi'),
('BBHIER4J59', 'RA 14h 08m 27s Dec -74° 51\' 1\"', 'Apus', 'Mia Ahmani Hughes'),
('EIPDWPR4GY', 'RA 15h 32m 04s Dec -38° 37\' 23\"', 'Lupus', 'Jennifer Ann'),
('AQL5WYAZKB', 'RA 07h 34m 36s Dec 31° 53\' 18\"', 'Gemini', 'BT-7274'),
('MFDXG13VY1', 'RA 05h 55m 10s Dec 7° 24\' 24\"', 'Orion', 'Kevin McDermott'),
('BAXHC9E8X6', 'RA 16h 07m 51s Dec -24° 27\' 42\"', 'Scorpius', 'Oreos Star'),
('MG76GKXGPB', 'RA 08h 22m 31s Dec -48° 29\' 25\"', 'Vela', 'Reaith & Smigan'),
('NWNQEGDNF2', 'RA 00h 13m 44s Dec -26° 17\' 4\"', 'Sculptor', 'Harlow'),
('I4T6B684YL', 'RA 12h 57m 33s Dec -22° 45\' 14\"', 'Hydra', 'Leah Makura'),
('W9HCT8VSK8', 'RA 12h 41m 39s Dec -1° 26\' 57\"', 'Virgo', 'Johnny & Amanda'),
('DBWXHS3EVY', 'RA 16h 54m 10s Dec -1° 36\' 43\"', 'Ophiucus', 'Tammy Lee Peterson'),
('Z5YYCG12EE', 'RA 22h 23m 32s Dec -7° 11\' 39\"', 'Aquarius', 'C + M'),
('YVZFXUPVZS', 'RA 01h 12m 59s Dec 30° 3\' 51\"', 'Pisces', 'Pap Bakaitus'),
('MQS5HCU1CM', 'RA 20h 11m 18s Dec -0° 49\' 17\"', 'Aquila', 'Tatiana Verbaeys'),
('QSSD517RFI', 'RA 23h 31m 42s Dec -21° 22\' 9\"', 'Aquarius', 'STAR VISTA'),
('RVEZQQU9IR', 'RA 18h 05m 27s Dec 2° 29\' 57\"', 'Ophiucus', 'Guapo & Gordito'),
('LUIZWD8PM8', 'RA 07h 31m 25s Dec -36° 9\' 10\"', 'Puppis', 'LUNA'),
('2MMWS5JW4G', 'RA 20h 21m 00s Dec -14° 46\' 53\"', 'Capricornus', 'Shaylynn'),
('TVGU721YXT', 'RA 08h 46m 40s Dec 28° 45\' 55\"', 'Cancer', 'Victoria Escajeda'),
('5SYCQL44UG', 'RA 17h 43m 17s Dec -27° 53\' 3\"', 'Ophiucus', 'Hailey\'s Melissa'),
('25BCPB4EX4', 'RA 14h 47m 31s Dec -43° 33\' 27\"', 'Lupus', 'Ethan'),
('7DH3F4XTQP', 'RA 19h 24m 21s Dec -43° 43\' 23\"', 'Sagittarius', 'Bruce'),
('6H3DVSPQ75', 'RA 13h 06m 22s Dec 62° 2\' 30\"', 'Ursa Major', 'Jannat and Musa'),
('Y2D2X8TJ88', 'RA 09h 54m 51s Dec -50° 14\' 38\"', 'Vela', 'Michael Scott'),
('FMDW3D3FDL', 'RA 08h 29m 46s Dec 67° 17\' 51\"', 'Ursa Major', 'Alayna McGehee'),
('H1UUNYP739', 'RA 08h 28m 35s Dec -23° 4\' 18\"', 'Pyxis', ''),
('XF6HLEKWTD', 'RA 09h 00m 38s Dec 41° 46\' 58\"', 'Lynx', ''),
('7BC7A6CIYG', 'RA 03h 50m 18s Dec 25° 34\' 45\"', 'Taurus', 'Jennifer & Malitza'),
('WN71FH2KTA', 'RA 00h 09m 24s Dec -45° 44\' 51\"', 'Phoenix', 'Our love'),
('JNEDT447BP', 'RA 18h 25m 55s Dec 14° 58\' 0\"', 'Hercules', 'LIXUMIAO and XiYue'),
('D8531SEZFG', 'RA 11h 47m 54s Dec 8° 14\' 44\"', 'Virgo', 'Persephone'),
('KWAVX3PLLB', 'RA 00h 51m 33s Dec 51° 34\' 15\"', 'Cassiopeia', 'Rosie Pena Star'),
('ZM483ZHI3P', 'RA 06h 56m 32s Dec 46° 16\' 27\"', 'Auriga', 'T&M'),
('V7MXL16SS7', 'RA 00h 49m 05s Dec 57° 48\' 56\"', 'Cassiopeia', 'Bella & Fahrenheit'),
('5572M8BKM6', 'RA 23h 31m 01s Dec -6° 17\' 17\"', 'Aquarius', 'Zya Greene'),
('CKKP5F429K', 'RA 20h 11m 57s Dec -12° 23\' 33\"', 'Capricornus', 'The Nini'),
('YEYTPMK8A6', 'RA 16h 15m 26s Dec -63° 41\' 8\"', 'Triang. Australe', 'PDRB & Tar Baby'),
('23BQ83Q8GQ', 'RA 02h 38m 48s Dec 21° 57\' 41\"', 'Aries', 'MARTY'),
('1EZNENBJQD', 'RA 08h 29m 27s Dec -27° 19\' 57\"', 'Pyxis', 'Inmendham FREE'),
('3ZRRI4MCPY', 'RA 11h 03m 16s Dec -31° 57\' 38\"', 'Hydra', 'Inmendham FREE!'),
('RUPE5C1B68', 'RA 17h 22m 51s Dec -2° 23\' 17\"', 'Ophiucus', 'Kona'),
('SYVWXTKQIU', 'RA 23h 17m 09s Dec 3° 16\' 55\"', 'Pisces', 'Anna Manger'),
('NFXPZJLSKW', 'RA 09h 33m 26s Dec -22° 51\' 50\"', 'Hydra', 'sls-mpk');

-- --------------------------------------------------------

--
-- Structure de la table `OFFRE`
--

CREATE TABLE `OFFRE` (
  `ID_OFFRE` int(11) NOT NULL,
  `NOM_OFFRE` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  `PRIX` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `PAIEMENT`
--

CREATE TABLE `PAIEMENT` (
  `ID_PAIEMENT` int(11) NOT NULL,
  `NUMERO_CARTE` varchar(255) DEFAULT NULL,
  `NOM_CARTE` varchar(80) DEFAULT NULL,
  `DATE_EXPIRATION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`ID_ARTICLE`),
  ADD KEY `FK_CONCERNE` (`ID_OFFRE`),
  ADD KEY `FK_CONTENIR` (`ID_COMMANDE`);

--
-- Index pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD PRIMARY KEY (`ID_COMMANDE`),
  ADD KEY `FK_PAYER` (`ID_PAIEMENT`),
  ADD KEY `FK_RECEVOIR` (`ID_UTILISATEUR`);

--
-- Index pour la table `COMMENTAIRE`
--
ALTER TABLE `COMMENTAIRE`
  ADD PRIMARY KEY (`ID_COMMENTAIRE`),
  ADD KEY `FK_POSTER` (`ID_UTILISATEUR`);

--
-- Index pour la table `DROIT`
--
ALTER TABLE `DROIT`
  ADD PRIMARY KEY (`ID_DROIT`);

--
-- Index pour la table `OFFRE`
--
ALTER TABLE `OFFRE`
  ADD PRIMARY KEY (`ID_OFFRE`);

--
-- Index pour la table `PAIEMENT`
--
ALTER TABLE `PAIEMENT`
  ADD PRIMARY KEY (`ID_PAIEMENT`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ARTICLE`
--
ALTER TABLE `ARTICLE`
  ADD CONSTRAINT `FK_CONCERNE` FOREIGN KEY (`ID_OFFRE`) REFERENCES `OFFRE` (`ID_OFFRE`),
  ADD CONSTRAINT `FK_CONTENIR` FOREIGN KEY (`ID_COMMANDE`) REFERENCES `COMMANDE` (`ID_COMMANDE`);

--
-- Contraintes pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD CONSTRAINT `FK_PAYER` FOREIGN KEY (`ID_PAIEMENT`) REFERENCES `PAIEMENT` (`ID_PAIEMENT`),
  ADD CONSTRAINT `FK_RECEVOIR` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `UTILISATEUR` (`ID_UTILISATEUR`);

--
-- Contraintes pour la table `COMMENTAIRE`
--
ALTER TABLE `COMMENTAIRE`
  ADD CONSTRAINT `FK_POSTER` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `UTILISATEUR` (`ID_UTILISATEUR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
