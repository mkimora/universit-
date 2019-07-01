-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Lun 01 Juillet 2019 à 08:33
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `Batiment`
--

CREATE TABLE `Batiment` (
  `id_batiment` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Chambre`
--

CREATE TABLE `Chambre` (
  `id_chambre` int(11) NOT NULL,
  `numéro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Etudiants`
--

CREATE TABLE `Etudiants` (
  `id_etudiants` int(11) NOT NULL,
  `matricule` varchar(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Etudiants`
--

INSERT INTO `Etudiants` (`id_etudiants`, `matricule`, `nom`, `prenom`, `email`, `telephone`, `date_naissance`) VALUES
(1, 'AB1', 'Ndiaye', 'Khadija', 'khadija@gmail.com', 774998663, '2019-06-03'),
(2, 'AB2', 'Mboup', 'Birame', 'birame@gmail.com', 774998663, '2019-06-19'),
(4, 'AB3', 'Ndao', 'Ibrahima', 'ibou@ibou.com', 778083808, '1995-01-10'),
(5, 'AB4', 'Ndiaye', 'Mama GuissÃ©', 'guissendiaye24@gmail.com', 777451471, '1997-06-24'),
(6, 'AB5', 'Niasse', 'Baye', 'baye@gmail.com', 777899663, '1998-11-22'),
(7, 'AB6', 'Ngom', 'Junior Laye', 'junior@gmail.com', 774566868, '1995-08-05'),
(8, 'AB7', 'Jean Marie', 'Gomis', 'jean@gmail.com', 776544849, '1995-01-25'),
(9, 'AB8', 'Camara', 'Babacar', 'babacamara91@gmail.com', 774566995, '1993-04-09');

-- --------------------------------------------------------

--
-- Structure de la table `Etudiants_boursiers`
--

CREATE TABLE `Etudiants_boursiers` (
  `id_matricule_eb` int(11) NOT NULL,
  `id_bourse_eb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Etudiants_loges_boursiers`
--

CREATE TABLE `Etudiants_loges_boursiers` (
  `id_matricule_elb` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `nom_batiment` varchar(255) NOT NULL,
  `numero_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Etudiants_non_boursiers`
--

CREATE TABLE `Etudiants_non_boursiers` (
  `id_matricule_enb` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Etudiants_non_boursiers`
--

INSERT INTO `Etudiants_non_boursiers` (`id_matricule_enb`, `adresse`) VALUES
(1, 'Dieuppeul 2'),
(2, 'Niarry Tally ');

-- --------------------------------------------------------

--
-- Structure de la table `Type`
--

CREATE TABLE `Type` (
  `id_bourse` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Batiment`
--
ALTER TABLE `Batiment`
  ADD PRIMARY KEY (`id_batiment`);

--
-- Index pour la table `Chambre`
--
ALTER TABLE `Chambre`
  ADD PRIMARY KEY (`id_chambre`);

--
-- Index pour la table `Etudiants`
--
ALTER TABLE `Etudiants`
  ADD PRIMARY KEY (`id_etudiants`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- Index pour la table `Etudiants_boursiers`
--
ALTER TABLE `Etudiants_boursiers`
  ADD PRIMARY KEY (`id_matricule_eb`),
  ADD KEY `id_bourse_eb` (`id_bourse_eb`);

--
-- Index pour la table `Etudiants_loges_boursiers`
--
ALTER TABLE `Etudiants_loges_boursiers`
  ADD PRIMARY KEY (`id_matricule_elb`),
  ADD KEY `id_chambre` (`id_chambre`);

--
-- Index pour la table `Etudiants_non_boursiers`
--
ALTER TABLE `Etudiants_non_boursiers`
  ADD PRIMARY KEY (`id_matricule_enb`);

--
-- Index pour la table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`id_bourse`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Batiment`
--
ALTER TABLE `Batiment`
  MODIFY `id_batiment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Chambre`
--
ALTER TABLE `Chambre`
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Etudiants`
--
ALTER TABLE `Etudiants`
  MODIFY `id_etudiants` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `Etudiants_boursiers`
--
ALTER TABLE `Etudiants_boursiers`
  MODIFY `id_matricule_eb` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Etudiants_loges_boursiers`
--
ALTER TABLE `Etudiants_loges_boursiers`
  MODIFY `id_matricule_elb` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Etudiants_non_boursiers`
--
ALTER TABLE `Etudiants_non_boursiers`
  MODIFY `id_matricule_enb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Type`
--
ALTER TABLE `Type`
  MODIFY `id_bourse` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Etudiants_loges_boursiers`
--
ALTER TABLE `Etudiants_loges_boursiers`
  ADD CONSTRAINT `Etudiants_loges_boursiers_ibfk_1` FOREIGN KEY (`id_chambre`) REFERENCES `Chambre` (`id_chambre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
