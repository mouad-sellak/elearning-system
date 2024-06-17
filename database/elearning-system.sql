-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 juin 2024 à 16:42
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elearning-system`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` int(11) NOT NULL,
  `equipe_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `fichier_ppt` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `quiz_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ppt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id`, `nom`, `description`, `ppt`) VALUES
(2, 'Administration', 'Gerer le site', ''),
(3, 'AVPS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum aliquam quam, quis laoreet neque luctus ac. Fusce sed lectus auctor, dapibus purus vel, ullamcorper turpis.', 'elearning-system/public/images/equipes/avps.ppt');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `activite_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `reponse` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `retours_consultant`
--

CREATE TABLE `retours_consultant` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `activite_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `equipe_id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `equipe_id`, `nom`, `prenom`, `email`, `telephone`, `role`, `login`, `password`) VALUES
(1, 2, 'Meriame ', 'Damej', 'meriame@g.com', '0745362320', 'Consultant', 'meryem', '202cb962ac59075b964b07152d234b70'),
(2, 2, 'Wiam ', 'Harmali', 'wiam@g.com', '0654324587', 'Consultant', 'wiam', '202cb962ac59075b964b07152d234b70'),
(4, 3, 'Hamza ', 'fettouh', 'hamza@g.com', '0643234567', 'Consultant', 'hamza', '202cb962ac59075b964b07152d234b70'),
(14, 3, 'Laymy ', 'Abdessalam ', 'laymy@gmail.com', '0643456732', 'Consultant', 'abdessalam', '202cb962ac59075b964b07152d234b70'),
(15, 2, 'Touria ', 'Touria', 'touria@g.com', '0745362320', 'Consultant', 'touria', '202cb962ac59075b964b07152d234b70'),
(20, 2, 'Sara ', 'Kourri ', 'sara@g.com', '0745362320', 'Administrateur', 'sara-kourri ', '202cb962ac59075b964b07152d234b70'),
(21, 2, 'Sara ', 'Mountadar ', 'sara-m@g.com', '0745362320', 'Formateur', 'sara-mountadar', '202cb962ac59075b964b07152d234b70'),
(22, 2, 'Badreddine ', ' El khaer ', 'badreddine@g.com', '0745362320', 'Administrateur', 'badreddine', '202cb962ac59075b964b07152d234b70'),
(23, 2, 'Hiba  ', 'Baqua ', 'hiba@g.com', '0745362320', 'Formateur', 'hiba', '202cb962ac59075b964b07152d234b70');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe_id` (`equipe_id`);

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activite_id` (`activite_id`);

--
-- Index pour la table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Index pour la table `retours_consultant`
--
ALTER TABLE `retours_consultant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `activite_id` (`activite_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe_id` (`equipe_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `retours_consultant`
--
ALTER TABLE `retours_consultant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `activites_ibfk_1` FOREIGN KEY (`equipe_id`) REFERENCES `equipes` (`id`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`);

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`);

--
-- Contraintes pour la table `responses`
--
ALTER TABLE `responses`
  ADD CONSTRAINT `responses_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Contraintes pour la table `retours_consultant`
--
ALTER TABLE `retours_consultant`
  ADD CONSTRAINT `retours_consultant_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `retours_consultant_ibfk_2` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`equipe_id`) REFERENCES `equipes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
