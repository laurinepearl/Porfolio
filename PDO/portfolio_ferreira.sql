-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 jan. 2022 à 13:01
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_ferreira`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `id_accueil` int(11) NOT NULL AUTO_INCREMENT,
  `FR` mediumtext NOT NULL,
  `EN` mediumtext NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id_accueil`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`id_accueil`, `FR`, `EN`, `menu_id`) VALUES
(1, 'Bonjour,', 'Hello,', 1),
(2, 'Je suis Laurine', 'I am Laurine', 1),
(3, 'Etudiante à la Licence Professionnelle IMAPP.', 'Student at the vocational degree IMAPP.\r\n', 1),
(4, 'Télécharger mon CV', 'download resume', 1),
(5, 'Bonjour, je m\'appelle Laurine Ferreira, j\'ai 21 ans et j\'habite à Nice. Passionnée d\'art depuis toujours, j\'ai trouvé ma voie dans le monde du design et du web. Je fais mes études à la LP IMApp à Nice(informatique multimédia appliquée) et je recherche un stage de 12 semaines (minimum) dans le web design particulièrement.', 'Hello, my name is Laurine Ferreira, I am 21 years old and I live in Nice. Always passionate about art, I found my way in the world of design and the web. I\'m studying at LP IMAPP in Nice (applied multimedia computing) and I\'m looking for a 12-week internship (minimum) in web design in particular.', 1),
(6, 'A propos de moi', 'About me', 1),
(7, 'langues', 'language', 1);

-- --------------------------------------------------------

--
-- Structure de la table `aproposdemoi`
--

DROP TABLE IF EXISTS `aproposdemoi`;
CREATE TABLE IF NOT EXISTS `aproposdemoi` (
  `id_aproposmoi` int(11) NOT NULL AUTO_INCREMENT,
  `FR` tinytext NOT NULL,
  `EN` tinytext NOT NULL,
  PRIMARY KEY (`id_aproposmoi`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `aproposdemoi`
--

INSERT INTO `aproposdemoi` (`id_aproposmoi`, `FR`, `EN`) VALUES
(1, 'A Propos de Moi', 'About Me'),
(2, 'Mes passions, mes compétences, mes expériences, mes diplômes.', 'My passions, my skills, my experiences, my degrees.\r\n\r\n\r\n'),
(3, 'MES PASSIONS', 'MY PASSIONS'),
(4, 'MES COMPETENCES', 'MY SKILLS'),
(5, 'MES EXPERIENCES', 'MY EXPERIENCES'),
(6, 'MES DIPLOMES', 'MY DEGREE'),
(7, 'DESSIN', 'DRAWING'),
(8, 'PHOTOGRAPHIE', 'PHOTOGRPAHY'),
(9, 'MYTHOLOGIE', 'MYTHOLOGY');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `id_login` text NOT NULL,
  `mdp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id_login`, `mdp`) VALUES
('laurine007', '$2y$10$dMb4K6HowMVSCEmShWe6XeMyJ1frJOTrG1IfBGmGLzT1VkhUndtqO');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `id_contrat` int(11) NOT NULL AUTO_INCREMENT,
  `FR` tinytext NOT NULL,
  `EN` tinytext NOT NULL,
  PRIMARY KEY (`id_contrat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contrat`
--

INSERT INTO `contrat` (`id_contrat`, `FR`, `EN`) VALUES
(1, 'Emploi en CDD', 'Fixed-term contract'),
(2, 'Stage', 'Internship'),
(3, 'Job saisonnier', 'Summer job');

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

DROP TABLE IF EXISTS `diplome`;
CREATE TABLE IF NOT EXISTS `diplome` (
  `id_diplome` int(11) NOT NULL AUTO_INCREMENT,
  `FR` tinytext NOT NULL,
  `EN` tinytext NOT NULL,
  `ecole_id` int(11) NOT NULL,
  PRIMARY KEY (`id_diplome`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplome`
--

INSERT INTO `diplome` (`id_diplome`, `FR`, `EN`, `ecole_id`) VALUES
(1, 'Licence Professionnelle IMAPP (en cours d\'apprentissage) ', 'Vocational degree IMAPP (in the learning process) ', 1),
(2, 'BTS MUC ', 'Advanced technician\'s certificate MUC', 2),
(3, 'BAC ES ', 'Baccalaureate ES ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `id_ecole` int(11) NOT NULL AUTO_INCREMENT,
  `FR` tinytext NOT NULL,
  `EN` tinytext NOT NULL,
  PRIMARY KEY (`id_ecole`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id_ecole`, `FR`, `EN`) VALUES
(1, 'Université Carlone - Nice', 'University Carlone - Nice'),
(2, 'Lycée Auguste Renoir - Nice', 'High School Auguste Renoir - Nice'),
(3, 'Lycée Guillaume Apollinaire - Nice', 'High School Guillaume Apollinaire - Nice');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id_experience` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise` tinytext NOT NULL,
  `lieu` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  `contrat_id` int(11) NOT NULL,
  PRIMARY KEY (`id_experience`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `entreprise`, `lieu`, `date`, `contrat_id`) VALUES
(1, 'Jennyfer', 'Nice', '2020/2021', 1),
(2, 'Jennyfer', 'Nice', '2018/2020', 2),
(3, 'Tally Weijl', 'Nice', '2019/2019', 3);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `images`) VALUES
(1, 'https://i.goopics.net/iflp7u.jpg'),
(2, '../adobe/Illustrator/jauge_html'),
(3, '../adobe/Illustrator/jauge_css'),
(4, '../adobe/Illustrator/jauge_php_js'),
(5, '../adobe/Illustrator/jauge_gantt'),
(6, '../adobe/Illustrator/jauge_adobe'),
(7, '../adobe/Illustrator/ecriture.svg'),
(8, '../adobe/Illustrator/perroquet.svg'),
(9, '../adobe/Illustrator/plantes.svg'),
(10, '../adobe/Photoshop/reine.jpg'),
(11, '../adobe/Photoshop/reine_original.jpg'),
(12, '../adobe/Photoshop/image_surrealiste.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `FR` tinytext NOT NULL,
  `EN` tinytext NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `FR`, `EN`) VALUES
(1, 'Accueil', 'Home'),
(2, 'A propos de moi', 'About me'),
(3, 'Réalisations', 'Works'),
(4, 'Contact', 'Contact');

-- --------------------------------------------------------

--
-- Structure de la table `missionxdiplome`
--

DROP TABLE IF EXISTS `missionxdiplome`;
CREATE TABLE IF NOT EXISTS `missionxdiplome` (
  `id_mission` int(11) NOT NULL AUTO_INCREMENT,
  `FR` tinytext NOT NULL,
  `EN` tinytext NOT NULL,
  `diplome_id` int(11) NOT NULL,
  `ecole_id` int(11) NOT NULL,
  PRIMARY KEY (`id_mission`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `missionxdiplome`
--

INSERT INTO `missionxdiplome` (`id_mission`, `FR`, `EN`, `diplome_id`, `ecole_id`) VALUES
(1, 'La création en PHP de sites respectueux des directives du W3C et du Droit international', 'The creation in PHP of sites that respect W3C guidelines and international law', 1, 1),
(2, 'Le design de sites ergonomiques, la gestion de leur développement et leur intégration (AxureRP, HTML/CSS, Sass, Twig)', 'The design of ergonomic sites, the management of their development and their integration (AxureRP, HTML / CSS, Sass, Twig)', 1, 1),
(3, 'La conception et la création de bases de données MySQL.', 'The design and creation of MySQL databases', 1, 1),
(4, 'L\'usage et l\'adaptation de scripts JavaScript/Ajax.', 'The use and adaptation of JavaScript/Ajax scripts.', 1, 1),
(5, 'La création et la retouche d\'images.', 'Creating and editing images.', 1, 1),
(6, 'L\'usage de CMS et de frameworks (JQuery, Bootstrap, Symfony).', 'Use of CMS and frameworks (JQuery, Bootstrap, Symfony).', 1, 1),
(7, 'le développement et la gestion de la relation commerciale.', 'the development and management of the commercial relationship.', 2, 2),
(8, 'Management des unités commerciales.', 'Management of commercial units.', 2, 2),
(9, 'l’animation et la dynamisation de l’offre commerciale.', 'animation and dynamisation of the commercial offer.\r\n\r\n\r\n', 2, 2),
(10, 'communication.', 'communication.', 2, 2),
(11, 'Droit et Economie.', 'Law and Economics.', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `missionxexperience`
--

DROP TABLE IF EXISTS `missionxexperience`;
CREATE TABLE IF NOT EXISTS `missionxexperience` (
  `id_mission` int(11) NOT NULL AUTO_INCREMENT,
  `FR` tinytext NOT NULL,
  `EN` tinytext NOT NULL,
  `experience_id` int(11) NOT NULL,
  `contrat_id` int(11) NOT NULL,
  PRIMARY KEY (`id_mission`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `missionxexperience`
--

INSERT INTO `missionxexperience` (`id_mission`, `FR`, `EN`, `experience_id`, `contrat_id`) VALUES
(1, 'Gestion d’une équipe (2-3 pers) et organisation des missions.', 'Managing a team (2-3 people) and organizing mission.', 1, 1),
(2, 'Élaborer le merchandising. ', 'Develop the merchandising.', 1, 1),
(3, 'Accueil et conseils clients', 'Reception and customer advice.', 1, 1),
(4, 'Polyvalence des missions (caisse ; colis ; réassort ; rangement...).', 'Versatility of task (checkout, package, restock, tidying...).', 1, 1),
(5, 'Gérer l’ouverture et la fermeture du magasin (gérer les comptes des caisses..).', 'Manage the opening and closing of the store (manage cash register accounts...).', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `id_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom` char(100) NOT NULL,
  `email` char(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reception`
--

INSERT INTO `reception` (`id_time`, `nom`, `email`, `message`) VALUES
('2022-01-03 16:31:03', 'Laurine', 'email@email.com', 'message'),
('2022-01-03 16:32:35', 'ffff', 'jean.dupont@gmail.fr', 'fffffff'),
('2022-01-03 16:35:06', 'aaa', 'jean.dupont@gmail.fr', 'sdsddssdsd'),
('2022-01-03 17:02:00', 'laurine', 'jean.dupont@gmail.fr', 'Salutn c\'est bonsdqsdqsdqsdqsd'),
('2022-01-04 14:22:16', 'laurine', 'dsfsdfsdfsdfsdf@gjgjgj', 'bjgvjg'),
('2022-01-06 13:29:27', 'laurine', 'jean.dupont@gmail.fr', 'lll'),
('2022-01-13 11:55:30', 'LAURINE', 'laurine@hotmail.fr', 'SALUT'),
('2022-01-13 12:01:58', 'laurine', 'laurine@hotmail.fr', 'hi'),
('2022-01-13 12:42:31', 'laure', 'laurine@hotmail.fr', 'hi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
