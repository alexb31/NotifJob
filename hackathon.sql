-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 11:26 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidats`
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
-- Dumping data for table `candidats`
--

INSERT INTO `candidats` (`id`, `email`, `prenom`, `nom`, `competences`, `etudes`, `experiences`, `cv`, `lien-linkedin`, `mdp`, `age`, `password`, `status`, `telephone`, `created`) VALUES
(56, 'alexandrebornstein@gmail.com', 'Alex', 'Born', '', '', '', '', '', 'a', '', '', b'0', 0, '0000-00-00 00:00:00'),
(55, 'alexandrebornstein@gmail.com', 'rg', 'rgb', '', '', '', '', '', 'a', '', '', b'0', 0, '0000-00-00 00:00:00'),
(54, 'alexandrebornstein@gmail.com', 'alex', 'bor', '', '', '', '', '', 'a', '', '', b'0', 0, '0000-00-00 00:00:00'),
(53, 'alexandrebornstein@gmail.com', 'fbdb', 'fdbdb', '', '', '', '', '', 'aa', '', '', b'0', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `offres`
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
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`id`, `intitule`, `description`, `lieu`, `type`, `date_debut`, `date_publication`, `competences`, `experiences`, `lien_offre`, `etudes`, `email`) VALUES
(7, 'Ingénieur Développement Java/JEE H/F', 'Au sein de l\'équipe DEMATERIALISATION constituée de 10 personnes environ, et de l\'équipe de production constituée de 5 personnes, votre expérience de développement Java/J2EE, vous permettra d\'assurer les missions suivantes :\r\n• Développement Java/J2EE à partir de dossiers de spécifications pour s\'interfacer avec la GED Alfresco\r\n• Tests et qualification des développements\r\n\r\nDomaine d\'application :\r\n• Gestion électronique de documents, plateforme collaborative, workflows, signature électronique, pour les collectivités locales.', 'Montpelier', 'CDI', '2017-05-10', '2017-04-10', '• Connaissances requises : ? Architecture Web, Java 6, J2EE, javascript avancé, html 5, css 3, jQuery, Spring, Hibernate ? Outils de développement: Eclipse, SVN', '• 2 années d\'expériences environ seraient un plus', '', '• Bac + 5 ', ''),
(5, 'Administrateur Bases de données H/F', 'Rattaché à une équipe en charge de la gestion des Infrastructures, du réseau, des applications, vos activités sont :\r\n\r\n- le maintien en condition opérationnelle des bases de données.\r\n\r\n- contrôler l\'intégrité et la sécurisation des données,\r\n\r\n- résoudre les incidents majeurs,\r\n\r\n- administrer la gestion des données : espace disque, autorisation d\'accès, sauvegarde des données restauration des données, optimisation des données\r\n\r\n- supporter techniquement l\'exploitation sur la gestion des données,\r\n\r\n- contribuer aux montées de versions et à la reprise des données sur un existant,\r\n\r\n- assurer la mise en production des différentes installations, planifier la montée en charge, tester le bon fonctionnement lors des phases de recette technique\r\n\r\n- assurer la maintenance corrective et évolutive des SGBD en place', 'paris', 'CDI', '0000-00-00', '0000-00-00', 'Oracle, MySql, PostGreSql, Sql Server, Sybase', '4 ans d\'expériences en tant qu\'Administrateurs Bases de données', '', '', ''),
(6, 'Ingénieur système Linux/Unix H/F', 'Dans le cadre du développement de l\'agence de Toulouse, nous recherchons un Ingénieur système Linux/Unix H/F sur Toulouse.\r\nDescriptif :\r\nRattaché à une équipe en charge des activités d\'intégration et de gestion des évolutions du SI (autour de la gestion des changements et des Mises en Production), vos activités sont :\r\n- Préparer l\'intégration des composants et applications dans un environnement de production (nouvelles applications ou mise à jour des applications existantes) principalement sur des systèmes Linux et Unix\r\n- Réaliser des instructions techniques avec analyse d\'impact et découpage unitaires des actions à réaliser incluant une évaluation des charges et contraintes de traitement\r\n- Apporter une analyse technique avancée avec un regard critique des solutions proposées\r\n- Réaliser les packages de déploiements\r\n- Tester les évolutions sur les environnements hors production\r\n- Mener des tests d\'exploitabilité pour garantir que les évolutions peuvent être prise en charge par les équipes en charge de l\'exploitation et administration récurrente et identifier les configurations à risque\r\n- Apporter le support aux exploitants et administrateurs dans les phases de MEP (Mise En Production) sur les environnements de production\r\n- Etre un référent technique sur les projets les plus conséquents\r\n- Mettre à jour, voir rédiger les procédures d\'exploitation pour les équipes d\'administration et exploitation\r\n- Contribuer au respect du processus de gestion des changements et MEP du client', 'Toulouse', 'CDI', '2017-05-10', '2017-04-10', '- Base de données (Oracle, SQL Server, PostGre, MySQL) - Solution de Virtualisation (VMWare) - Stockage NAS & SAN (EMC) - Sauvegarde (NetBackup)', 'vous avez 5 à 10 ans d\'expérience sur une fonction similaire', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
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
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `choice1`, `choice2`, `choice3`, `answer`, `id_offre`) VALUES
(1, 'De quelle couleur est la couleur bleu ?', 'Rouge', 'Vert', 'Noir', 'Bleu', 0),
(2, '1 + 1', '3', '6', '11', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `name`, `email`, `skills`, `experiences`, `birthday`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(30, 'alex', 'born', 'alexandrebornstein@gmail.com', 'des chiens', 'des chiens', '2017-01-02', '0cc175b9c0f1b6a831c399e269772661', 'Male', '000', '2017-04-27 19:16:36', '2017-04-27 19:16:36', '1'),
(31, 'pierre', 'born', 'alexandrebornstein@gmail.fr', 'des chiens', 'des chiens', '2017-01-02', '0cc175b9c0f1b6a831c399e269772661', 'Male', '000', '2017-04-27 19:17:00', '2017-04-27 19:17:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_candidatures`
--

CREATE TABLE `users_candidatures` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idOffre` int(11) NOT NULL,
  `resultats` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_candidatures`
--
ALTER TABLE `users_candidatures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users_candidatures`
--
ALTER TABLE `users_candidatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;