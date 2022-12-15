-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 15 déc. 2022 à 08:55
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appdevsecu`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `Id_Message` int(11) NOT NULL AUTO_INCREMENT,
  `contenu_message` text,
  `date_Creation` datetime DEFAULT NULL,
  `expediteur` varchar(250) DEFAULT NULL,
  `Id_Sujet` int(11) NOT NULL,
  `Id_Createur` int(11) NOT NULL,
  PRIMARY KEY (`Id_Message`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`Id_Message`, `contenu_message`, `date_Creation`, `expediteur`, `Id_Sujet`, `Id_Createur`) VALUES
(105, '&lt;p&gt;dsqdsqdsq&lt;/p&gt;', '2022-12-13 14:32:04', 'Anthony', 26, 2),
(106, '&lt;p&gt;vcxvsdq fl,ezkpf&lt;/p&gt;<br />\r\n&lt;p&gt;^s fqsdg&lt;/p&gt;<br />\r\n&lt;p&gt;zqrp&amp;nbsp;&lt;/p&gt;<br />\r\n&lt;p&gt;grzq&lt;/p&gt;<br />\r\n&lt;p&gt;gpqs&lt;/p&gt;<br />\r\n&lt;p&gt;goqerpotkz;&lt;/p&gt;', '2022-12-13 14:34:17', 'Anthony', 26, 2),
(135, '<p>qzdqzd</p>', '2022-12-15 08:45:39', '\'\'<script> alert(\'sefsef\')</script>', 20, 2),
(136, '<p>d</p>', '2022-12-15 08:52:57', '\"<script>document.body.bgColor=\"red\";</script>', 56, 32),
(123, '<p><strong>douze </strong><em>jcrois</em></p>', '2022-12-13 15:31:28', 'Bot1524855', 19, 26),
(124, '<p><strong>testestes</strong></p>', '2022-12-13 15:33:00', 'DaronneMatthis', 34, 25),
(92, '', '2022-12-13 10:43:17', 'JeanMouloud', 24, 19),
(107, '&lt;p&gt;grsqgrqg&lt;/p&gt;', '2022-12-13 14:35:53', 'Anthony', 26, 2),
(108, '&lt;p&gt;fsdqfdsqfsdqf&lt;/p&gt;', '2022-12-13 14:37:40', 'Anthony', 26, 2),
(109, '&lt;p&gt;vcxvxvcxvxcwv&lt;/p&gt;', '2022-12-13 14:37:56', 'Anthony', 26, 2),
(110, '&lt;p&gt;gfsdgdsfgdsf&lt;/p&gt;', '2022-12-13 14:40:03', 'Anthony', 26, 2),
(132, '<p>\'\'\'\'</p>', '2022-12-15 08:42:31', 'admin', 19, 27),
(133, '<p>\'\'\'\'</p>', '2022-12-15 08:42:38', 'admin', 20, 27),
(134, '<p>\'&lt;/p&gt;&lt;script&gt;alert(\"sf\")&lt;/script&gt;</p>', '2022-12-15 08:43:26', 'admin', 20, 27),
(130, '<p>feur</p>', '2022-12-15 08:33:14', 'admin', 20, 27),
(131, '<p>oui</p>', '2022-12-15 08:36:14', 'admin', 48, 27),
(126, '&lt;p&gt;&lt;strong&gt;testest&lt;/strong&gt;&lt;/p&gt;', '2022-12-13 15:37:56', 'DaronneMatthis', 37, 25),
(118, '<p><em><strong>khhjkug</strong></em></p>', '2022-12-13 15:04:21', 'Anthony', 26, 2),
(137, '<p>dd</p>', '2022-12-15 08:53:14', '\"<script>document.body.bgColor=\"red\";</script>', 20, 32),
(120, '<p>tetetet<strong>tretreter</strong><em>tretretertre</em></p>', '2022-12-13 15:25:20', 'Anthony', 30, 2),
(121, '<p>&lt;script&gt;alert(\'ok\');&lt;/script&gt;</p>', '2022-12-13 15:25:37', 'Anthony', 30, 2),
(138, '<p>tetetete</p>', '2022-12-15 08:53:27', '\"<script>document.body.bgColor=\"red\";</script>', 20, 32),
(139, '<p>\'&lt;script&gt;document.body.bgColor=\"red\";&lt;/script&gt;</p>', '2022-12-15 08:54:39', '\"<script>document.body.bgColor=\"red\";</script>', 20, 32),
(140, '<p>d</p>', '2022-12-15 08:54:47', '\"<script>document.body.bgColor=\"red\";</script>', 56, 32);

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `Id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(250) DEFAULT NULL,
  `createur` varchar(250) DEFAULT NULL,
  `date_Creation` datetime DEFAULT NULL,
  `Id_Createur` int(11) NOT NULL,
  PRIMARY KEY (`Id_sujet`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`Id_sujet`, `libelle`, `createur`, `date_Creation`, `Id_Createur`) VALUES
(20, 'J\'aimerais donner a la SPA comment faire', 'Anthony', '2022-12-13 09:30:33', 2),
(19, 'Combien de temps un marathon ?', 'Anthony', '2022-12-13 09:30:18', 2),
(22, 'Prono psg-bayern', 'JeanMouloud', '2022-12-13 10:03:15', 19),
(44, '<p>javascript:alert(\"sfe\")</p>', 'admin', '2022-12-15 08:34:49', 27),
(43, '<p>javascript:alert(\"sfe\")\'</p>', 'admin', '2022-12-15 08:34:45', 27),
(41, '<p>\'&lt;script&gt;alert(\'fdp\')&lt;/script</p>', 'admin', '2022-12-15 08:34:20', 27),
(42, '<p>javascript:alert(1)</p>', 'hpigeon', '2022-12-15 08:34:41', 28),
(40, '<p>test</p>', 'hpigeon', '2022-12-15 08:34:09', 28),
(39, '<p>\'&lt;script&gt;alert(\'fdp\')&lt;/script</p>', 'admin', '2022-12-15 08:34:09', 27),
(45, '<p><strong>javascript:alert(\"sfe\")</strong></p>', 'admin', '2022-12-15 08:34:55', 27),
(46, '<p>&lt;/p&gt;javascript:alert(\"sfe\")</p>', 'admin', '2022-12-15 08:35:42', 27),
(47, '<p>\'&lt;/p&gt;javascript:alert(\"sfe\")</p>', 'admin', '2022-12-15 08:35:51', 27),
(48, '<p>\'\'\'&gt;&gt;&gt;&gt;&gt;&gt;Q&gt;qdqrsbsdsbrgnjfsbwgn!klg&lt;!nqeklvnqEL&gt;gfnqeignq&lt;nglkqJMFL&ugrave;qzf6qe54g</p>\r\n<p>6&lt;s5g4&lt;s6h5q&lt;/p&gt;javascript:alert(\"sfe\")</p>', 'admin', '2022-12-15 08:36:04', 27),
(49, '<p>&amp;&eacute;\"\'(-&egrave;_&ccedil;&agrave;&ccedil;_&egrave;-(\'\"&eacute;\"\'(-&egrave;_&ccedil;_&egrave;-(\'\"&eacute;\"\'(-&egrave;_&ccedil;</p>', 'admin', '2022-12-15 08:36:23', 27),
(50, '<p>765+gs6+rg41s6r+g41sr+6g41s6+g41s6e+g416e+s4se4se6g6s+1e316sge6645dhr51gseetsuo_zt\'y_&ccedil;\'(z_\"(&ccedil;&ccedil;a_&ccedil;&eacute;\"a&eacute;_u&agrave;\'e&eacute;</p>', 'admin', '2022-12-15 08:36:36', 27),
(51, '<p><br><br><br><br><br><br><br><br></p>\r\n<p>tuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu</p>', 'admin', '2022-12-15 08:37:55', 27),
(52, '<p><br><br><br><br><br><br><br><br><br></p>\r\n<p><br><br><br><br><br><br><br><br><br></p>', 'admin', '2022-12-15 08:38:35', 27),
(53, '<p></p>\r\n<p></p>', 'admin', '2022-12-15 08:39:06', 27),
(54, '<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>', 'admin', '2022-12-15 08:39:13', 27),
(55, '<p>qzdqzd</p>', '\'\'<script> alert(\'Bah alors les gars ?\')</script>', '2022-12-15 08:46:46', 26),
(56, '<p>d</p>', '\"<script>document.body.bgColor=\"red\";</script>', '2022-12-15 08:52:47', 32);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `inscriptionDate` datetime NOT NULL,
  `password` varchar(250) NOT NULL,
  `photoProfil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_User`, `role`, `username`, `inscriptionDate`, `password`, `photoProfil`) VALUES
(2, 'admin', '\'\'&lt;script&gt; alert(\'sefsef\')&lt;/script&gt;', '2022-12-12 09:32:07', '$2y$10$PCFXm3/wMl6rNDAnmr/x6.nKvK8DYCRaENeiP5d4Pzgw4fMaGg6eC', '2.png'),
(21, 'utilisateur', 'Françis', '2022-12-13 13:05:55', '$2y$10$efsnLoBjM8WKwkI3e7CSbec8yPzMT/agrQD0V22gjQ.c1rDgRzBLa', NULL),
(19, 'utilisateur', 'admin', '2022-12-13 10:02:19', '$2y$10$BmCfRPuy3u/Nx7JZcsyOYuBds2RZbJn67k16DhPu38PeEpyezL1aO', '19.jpg'),
(25, 'utilisateur', 'DaronneMatthis', '2022-12-13 15:28:27', '$2y$10$t6MMPa2ZmVHtVfILHz9DOeXtaHhNU5i9XCfrZcTbpo8pkYubAQRO.', '25.jpg'),
(24, 'utilisateur', 'Pierre-Hugue', '2022-12-13 15:27:27', '$2y$10$rY.A9jq4OeWDDP4yC8.XJOws5gwl7QEK4/De5o1nSLzoIL7lzAm/i', NULL),
(26, 'utilisateur', '\'&lt;script&gt;document.td.bgColor=”red”;&lt;/script&gt;', '2022-12-13 15:29:35', '$2y$10$xVVkWb7cc8sREXoB5oP/oeK9Xfwx/309dbqWFuUQnWwPpdNE1FBjC', '26.jpg'),
(27, 'utilisateur', 'admin', '2022-12-15 08:31:11', '$2y$10$NqYBNTaA8r4pf8CHRZuZB.NgxC712NH6koto2UHrxIpUE8tPl47b6', '27.jpeg'),
(28, 'utilisateur', '&lt;script&gt;alert(’XSS’)&lt;/script&gt;', '2022-12-15 08:34:00', '$2y$10$wadRZFEv87.4jkvLQ9jt/O6GWjZBYO2vpp.pBv3nfAZ3oX1GNo6LS', '28.png'),
(29, 'utilisateur', '#jaVasCript:/*-/*`/*\\`/*\'/*&quot;/**/(/* */oNcliCk=alert(5397) )//%0D%0A%0d%0a//&lt;/stYle/&lt;/titLe/&lt;/teXtarEa/&lt;/scRipt/--!&gt;\\x3csVg/&lt;sVg/oNloAd=alert(5397)//&gt;\\x3e', '2022-12-15 08:39:59', '$2y$10$2ra/Ss3LRl3rUjSSOISgYuZvJMBjalvGI37K/WVnANVODlQFvz6CS', NULL),
(30, 'utilisateur', '?name=abc#&lt;img src=&quot;random.gif&quot; onerror=alert(5397)&gt;', '2022-12-15 08:40:03', '$2y$10$55NyMzyqr3QQ.LHhF0Wu/.3H11KNT2YMHRw9jpscpkJyFoWVBGE9O', NULL),
(31, 'utilisateur', '#javascript:alert(5397)', '2022-12-15 08:40:23', '$2y$10$32iPDF4T3P1ypGuZgbSCy.fnAJ0pCtZZfn5piaqN0K88MgFu2XLly', NULL),
(32, 'utilisateur', 'te', '2022-12-15 08:46:10', '$2y$10$F5VtAUMs6sP/d3VegppiKOMreaDETKzQ0eb3Oc6IO/GlitoXV2tK.', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
