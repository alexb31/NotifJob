-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Avril 2017 à 13:47
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `competences` varchar(255) NOT NULL,
  `etudes` varchar(255) NOT NULL,
  `experiences` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `lien-linkedin` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  `telephone` int(12) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `candidats`
--

INSERT INTO `candidats` (`id`, `email`, `prenom`, `nom`, `competences`, `etudes`, `experiences`, `cv`, `lien-linkedin`, `mdp`, `age`, `password`, `status`, `telephone`, `created`) VALUES
(56, 'alexandrebornstein@gmail.com', 'Alex', 'Born', '', '', '', '', '', 'a', '', '', b'0', 0, '0000-00-00 00:00:00'),
(55, 'alexandrebornstein@gmail.com', 'rg', 'rgb', '', '', '', '', '', 'a', '', '', b'0', 0, '0000-00-00 00:00:00'),
(54, 'alexandrebornstein@gmail.com', 'alex', 'bor', '', '', '', '', '', 'a', '', '', b'0', 0, '0000-00-00 00:00:00'),
(53, 'alexandrebornstein@gmail.com', 'fbdb', 'fdbdb', '', '', '', '', '', 'aa', '', '', b'0', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_publication` date NOT NULL,
  `competences` varchar(255) NOT NULL,
  `experiences` varchar(255) NOT NULL,
  `lien_offre` varchar(255) NOT NULL,
  `etudes` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `offres`
--

INSERT INTO `offres` (`id`, `intitule`, `description`, `lieu`, `type`, `date_debut`, `date_publication`, `competences`, `experiences`, `lien_offre`, `etudes`, `email`) VALUES
(7, 'La base', 'Trkl', '', '', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(5, 'dfbdbdfb', '<p>\r\n	tdntene</p>\r\n', 'paris', '', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(6, 'rgbrdb', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(8, 'Test Admin', '<p>\r\n	Test Admin</p>\r\n', 'Test Admin', 'Test Admin', '0000-00-00', '0000-00-00', 'Test Admin', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `id_offre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `choice1`, `choice2`, `choice3`, `answer`, `id_offre`) VALUES
(1, 'Quelle fonction retourne le nombre de secondes écoulées depuis le 1er janvier 1970 ?\n\n', 'timestamp', 'mktime', 'microtime\n', 'time', 0),
(2, 'Par défaut, dans quel ordre de priorité sont affectées les variables envoyées par HTTP ?\n\n', 'get, cookie, post', 'post, get, cookie', 'post,cookie, get\n', 'get, post, cookie', 0),
(3, 'Quelle fonction retire un élément de la fin d\'un tableau ?\r\n\r\n', 'array_splice()', 'array_pad()\r\n', 'array_shift()\r\n', 'array_pop()\r\n', 0),
(4, 'Quelle fonction permet d\'effacer un fichier ?\r\n\r\n', 'delete()\r\n', 'remove()\r\n', 'clearfile()', 'unlink()', 0),
(5, 'Quelle fonction permet d\'effacer un fichier ?\r\n\r\n', 'delete()\r\n', 'remove()\r\n', 'clearfile()', 'unlink()', 0);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experiences` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `name`, `email`, `skills`, `experiences`, `birthday`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(30, 'alex', 'born', 'alexandrebornstein@gmail.com', 'des chiens', 'des chiens', '2017-01-02', '0cc175b9c0f1b6a831c399e269772661', 'Male', '000', '2017-04-27 19:16:36', '2017-04-27 19:16:36', '1'),
(31, 'pierre', 'born', 'alexandrebornstein@gmail.fr', 'des chiens', 'des chiens', '2017-01-02', '0cc175b9c0f1b6a831c399e269772661', 'Male', '000', '2017-04-27 19:17:00', '2017-04-27 19:17:00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experiences` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users_admin`
--

INSERT INTO `users_admin` (`id`, `fname`, `name`, `email`, `skills`, `experiences`, `birthday`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(30, 'alex', 'born', 'alexandrebornstein@gmail.com', 'des chiens', 'des chiens', '2017-01-02', '0cc175b9c0f1b6a831c399e269772661', 'Male', '000', '2017-04-27 19:16:36', '2017-04-27 19:16:36', '1'),
(31, 'pierre', 'born', 'alexandrebornstein@gmail.fr', 'des chiens', 'des chiens', '2017-01-02', '0cc175b9c0f1b6a831c399e269772661', 'Male', '000', '2017-04-27 19:17:00', '2017-04-27 19:17:00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `users_candidatures`
--

CREATE TABLE `users_candidatures` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idOffre` int(11) NOT NULL,
  `resultats` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_candidatures`
--
ALTER TABLE `users_candidatures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `users_candidatures`
--
ALTER TABLE `users_candidatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
