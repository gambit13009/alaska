-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 05 fév. 2020 à 10:10
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP : 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id11658300_alaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `alias_user` varchar(255) NOT NULL,
  `id_post` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_date` date NOT NULL,
  `report` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `alias_user`, `id_post`, `comment_text`, `comment_date`, `report`) VALUES
(1, 'alias', 5, 'test', '2019-08-23', '0'),
(2, 'alias', 4, 'bon article', '2019-08-23', '0'),
(3, 'alias', 3, 'intéressant ', '2019-08-23', '0'),
(4, 'test', 3, 'bien', '2019-08-29', '0'),
(5, 'test', 5, 'test', '2019-10-30', '0'),
(6, 'test', 5, 'test comment', '2019-10-30', '0'),
(8, 'test', 2, 'très bien', '2019-11-06', '0'),
(12, 'cdsc', 1, 'sdcscds', '2019-11-27', '1'),
(14, 'alias', 2, 'ok', '2019-11-27', '1'),
(28, 'test', 1, 'very good', '2019-12-18', '0'),
(29, 'alias', 1, 'test...', '2019-12-18', '0'),
(38, 'alias', 1, 'intéressant', '2019-12-23', '0'),
(39, 'test', 2, 'à vérifier', '2019-12-23', '0'),
(40, 'test', 3, 'à tester', '2019-12-23', '0'),
(41, 'alias', 1, 'test...', '2019-12-23', '0');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `message`, `creation_date`) VALUES
(1, 'Article 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique arcu ac congue vehicula. Donec tortor ligula, consectetur quis hendrerit id, bibendum gravida urna. Cras imperdiet turpis quis magna egestas efficitur. Aenean arcu elit, rhoncus non tellus pharetra, condimentum commodo ligula. Nam id magna neque. Integer id nibh egestas, rhoncus risus a, gravida orci. Phasellus tincidunt posuere odio, ut vulputate ipsum vehicula nec. Nulla maximus sit amet libero at auctor. Nunc ex metus, tincidunt non placerat eu, pretium nec turpis. Fusce a mattis justo. Mauris lobortis consectetur nulla sed eleifend.', '2019-08-07'),
(2, 'Article 2', 'Maecenas congue justo eget eros efficitur congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ultrices, lorem at malesuada sodales, diam erat sagittis neque, id eleifend purus dui sed odio. Mauris viverra facilisis scelerisque. Nullam eget elit pulvinar, fermentum justo et, lacinia sem. Donec sit amet ligula eu orci egestas hendrerit. Donec dignissim tempor diam, at cursus enim tempor tristique. Integer pharetra odio quis libero condimentum viverra eu vel nisi.', '2019-08-07'),
(3, 'Article 3', 'Sed vitae venenatis metus, in condimentum nisi. Etiam finibus tortor sit amet lacus hendrerit commodo. Donec finibus accumsan rhoncus. Nulla maximus gravida lectus vitae imperdiet. Suspendisse aliquet metus ullamcorper, suscipit justo ut, malesuada neque. Aenean vitae sapien ipsum. Sed aliquet elementum tempus.', '2019-08-07'),
(4, 'Article 4', 'Etiam nec sem a leo interdum convallis ut eget eros. Quisque viverra id odio et facilisis. Nullam laoreet pharetra lacus, in fermentum dui tristique ut. Nam tristique ornare est, vel tincidunt elit aliquam ut. Nullam a libero non sapien pharetra auctor. Pellentesque volutpat, quam non posuere pharetra, diam tortor commodo eros, nec aliquam dui leo ut lectus. Nullam vitae orci nulla. Quisque scelerisque ut augue mollis hendrerit. Duis tristique mollis dolor sit amet laoreet. Praesent vitae ligula erat. Fusce maximus nibh at tortor placerat, dictum vulputate libero faucibus. Vivamus lorem arcu, sollicitudin eget elit eu, posuere gravida nulla. Quisque condimentum ultricies dui ac sodales. Donec vel dignissim ante, sit amet tincidunt erat.', '2019-08-07'),
(5, 'Article 5', 'Aliquam aliquet eget nisi non dapibus. Sed aliquet facilisis nisl, eu placerat metus consequat non. Curabitur lacinia diam sit amet orci dictum hendrerit. Vivamus eu ullamcorper tellus. Mauris pulvinar a elit sed maximus. Phasellus quis scelerisque est. Cras pellentesque magna odio, eget fringilla elit ultrices vitae. Quisque quam felis, placerat ut tellus id, maximus porttitor mauris. Nulla sit amet orci vitae ante efficitur vulputate id eget lectus. Aliquam erat volutpat. Fusce vel feugiat risus, eget tempus est. Nunc scelerisque diam in euismod sodales. Sed nec pretium tortor. Etiam a elementum turpis. Donec posuere massa eget erat bibendum, non viverra ex accumsan.', '2019-08-07');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'jerome.david@cegetel.net', '47f08626d1159109a470273aba9adb36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
