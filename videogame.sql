-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 04 avr. 2022 à 19:00
-- Version du serveur : 10.5.15-MariaDB-0+deb11u1
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `videogame`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` text DEFAULT NULL,
  `acheteur_id` int(11) NOT NULL,
  `vendeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(1, 'Actions'),
(2, 'Sport'),
(3, 'Aventure'),
(4, 'Simulation'),
(5, 'Stratégie'),
(7, 'Tir');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `edition`
--

CREATE TABLE `edition` (
  `id` int(11) NOT NULL,
  `editeur` varchar(250) NOT NULL,
  `pegi` int(11) DEFAULT NULL,
  `img_p` text NOT NULL,
  `description` text DEFAULT NULL,
  `img_g` text NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `edition`
--

INSERT INTO `edition` (`id`, `editeur`, `pegi`, `img_p`, `description`, `img_g`, `categorie_id`) VALUES
(1, 'Mario', 18, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', NULL, '0', 1),
(2, 'FIFA 18', 12, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', NULL, '0', 1),
(3, 'GTA 5', 18, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', NULL, 'https://www.rockstarmag.fr/wp-content/uploads/2022/03/artwork-gta-v-next-gen-ps5-xbox-series-x-s.jpg', 1),
(4, 'GTA 2', 18, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', NULL, '0', 1),
(5, 'GTA 4', 18, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', NULL, '0', 1),
(6, 'GTA 2', 18, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', NULL, '0', 1),
(7, 'GTA 4', 18, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', 'Grand Theft Auto, souvent abrégé GTA, est une série de jeux vidéo créée par David Jones et Mike Dailly, puis par les frères Dan et Sam Houser, Leslie Benzies et Aaron Garbut. Apparue en 1997', '0', 1),
(8, 'GTA 1', 18, 'https://m.media-amazon.com/images/I/71HnC1aLKsL._AC_SX385_.jpg', 'Grand Theft Auto, souvent abrégé GTA, est une série de jeux vidéo créée par David Jones et Mike Dailly, puis par les frères Dan et Sam Houser, Leslie Benzies et Aaron Garbut. Apparue en 1997', '0', 1),
(10, 'Ghost of Tsushima', 16, 'https://m.media-amazon.com/images/I/71Uggk1wf3L._AC_SX385_.jpg', 'Ghost of Tsushima est un jeu vidéo d\'action en monde ouvert développé par Sucker Punch et édité par Sony,', '../img/upload/2022_03_311648748108jpg', 1),
(12, 'Jump Force', 12, 'https://jaba.sn/mesentrants/2020/02/207481784.jpeg', 'Jump Force est un jeu vidéo de combat développé par Spike Chunsoft et édité par Bandai Namco Entertainment', '../img/upload/2022_03_311648748474jpg', 1),
(13, 'FIFA 22', 18, 'https://m.media-amazon.com/images/I/810RQy7+VKL._AC_SX385_.jpg', 'FIFA 22 est un jeu vidéo de simulation de football publié par Electronic Arts. Il s\'agit du 29ᵉ volet de cette série FIFA avec une petite modification', '../img/upload/2022_04_021648932620jpg', 2),
(14, 'Far Cry 6', 18, 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dwa71257b1/images/high-res/106104.jpg?sw=480&sh=480&sm=fit', 'Far Cry 6 est un jeu vidéo de tir à la première personne, d\'action-aventure développé par le studio Ubisoft Toronto et édité par Ubisoft', '../img/upload/2022_04_031649010510jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `lien` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `id` int(11) NOT NULL,
  `etat` varchar(250) NOT NULL,
  `prix` int(11) NOT NULL,
  `edition_id` int(11) NOT NULL,
  `vendeur_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `plateforme_id` int(11) NOT NULL,
  `support_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`id`, `etat`, `prix`, `edition_id`, `vendeur_id`, `description`, `plateforme_id`, `support_id`) VALUES
(1, 'Neuf', 59, 3, 17, 'tres bon jeux', 2, 1),
(2, 'Neuf', 1, 1, 41, 'Description', 1, 1),
(3, 'Neuf', 12, 1, 25, 'n@gmail.com', 1, 1),
(4, 'Neuf', 4000, 3, 25, 'oui..', 2, 3),
(9, 'Neuf', 69, 13, 17, 'tres bon jeux', 1, 1),
(13, 'Neuf', 79, 14, 17, 'tres bon jeux', 1, 1),
(14, 'Neuf', 79, 10, 17, 'tres bon jeux', 1, 1),
(15, 'Neuf', 30, 3, 17, 'bon jeux', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `plateforme`
--

CREATE TABLE `plateforme` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plateforme`
--

INSERT INTO `plateforme` (`id`, `nom`) VALUES
(1, 'PS4'),
(3, 'PS3'),
(4, 'PS5'),
(5, 'Xbox One'),
(6, 'Xbox 360'),
(7, 'Xbox Series X'),
(8, 'Nintendo Switch'),
(9, 'Pc');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nom`) VALUES
(1, 'Client'),
(2, 'Vendeur'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `support`
--

INSERT INTO `support` (`id`, `nom`) VALUES
(1, 'CDs'),
(2, 'Cartouche'),
(3, 'Code');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `jeu_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `type_transaction` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `password`, `role_id`) VALUES
(1, 'ngbehin', 'marc', 'rikemarcdevy.ngbehin@hetic.net', '3f196cfb6c4cffe3002c0495a1bc822521b6aa36', 1),
(2, 'ngbehin', 'marc', 'dossoflflgmlghmg@gmail.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', 1),
(3, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(4, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(5, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(6, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(7, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(8, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(9, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(10, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(11, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(12, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(13, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(14, 'BETITO', 'NINON', 'marctutu@gmail.com', '58ad983135fe15c5a8e2e15fb5b501aedcf70dc2', 1),
(15, 'ngbehin', 'marc', 'mauclair@gmail.com', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 1),
(16, 'ngbehin', 'marc', 'mauclair@gmail.com', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 1),
(17, 'ngbehin', 'marc', 'rikemarcdevy.ngbehin@hetic.net', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 1),
(18, 'ngbehin', 'marc', 'rikemarcdevy.ngbeh@hetic.net', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 1),
(19, 'ngbehin', 'marc', 'rikevy.ngbehin@hetic.net', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 1),
(20, 'ngbehin', 'marc', 'rikemy.ngbehin@hetic.net', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 1),
(21, 'Kaminski', 'Benjamin', 'wlps@hotmail.fr', '2da572288964d6db7c75faca4887bd0249d6209a', 1),
(22, 'ngbehin', 'marc', 'naim@gmail.com', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 1),
(23, 'ngbehin', 'marc', 'mauclaire@gmail.com', '161fd322fde916aa8bc88eea5d1a63d93bc81876', 2),
(24, 'Naim', 'Lawani', 'naimlawani01@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 2),
(25, 'Imr', 'Conte', 'n@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 3),
(26, 'good', 'gooo', 'naimaddd@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(28, 'Imrane', 'Lawani', 'admin@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(29, 'Admin', 'Vendeur', 'vendeur@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `edition`
--
ALTER TABLE `edition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plateforme`
--
ALTER TABLE `plateforme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `edition`
--
ALTER TABLE `edition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `plateforme`
--
ALTER TABLE `plateforme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
