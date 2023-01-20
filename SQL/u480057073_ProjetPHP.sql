-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 20 jan. 2023 à 19:39
-- Version du serveur : 10.6.11-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u480057073_ProjetPHP`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `mdp`) VALUES
(1, 'Oraciel', 'vincent83.dacheville@gmail.com', 'admin123'),
(2, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `reference` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `prixPublic` float NOT NULL,
  `prixAchat` float NOT NULL,
  `image` text NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(30) NOT NULL,
  `editeur` varchar(30) NOT NULL,
  `langue` varchar(30) NOT NULL,
  `nombrePage` int(30) NOT NULL,
  `ISBN10` varchar(30) NOT NULL,
  `ISBN13` varchar(30) NOT NULL,
  `poids` float NOT NULL,
  `dimensions` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `id`, `prixPublic`, `prixAchat`, `image`, `titre`, `description`, `genre`, `editeur`, `langue`, `nombrePage`, `ISBN10`, `ISBN13`, `poids`, `dimensions`) VALUES
('Livre', 1, 6.99, 3.99, 'https://m.media-amazon.com/images/I/91t7YlWwGfL.jpg', 'One Piece T01', 'Nous sommes à l\'ère des pirates. Luffy, un garçon espiègle, rêve de devenir le roi des pirates en trouvant le “One Piece”, un fabuleux trésor. Seulement, Luffy a avalé un fruit du démon qui l\'a transformé en homme élastique. Depuis, il est capable de contorsionner son corps dans tous les sens, mais il a perdu la faculté de nager. Avec l\'aide de ses précieux amis, il va devoir affronter de redoutables pirates dans des aventures toujours plus rocambolesques.Également adapté en dessin animé pour la télévision et le cinéma, One Piece remporte un formidable succès à travers le monde. Les aventures de Luffy au chapeau de paille ont désormais gagné tous les lecteurs, qui se passionnent chaque trimestre pour les aventures exceptionnelles de leurs héros.', 'Manga', 'Glénat Manga', 'Anglais', 208, '2723488527', '978-2723488525', 200, '11.5 x 1.5 x 18 cm'),
('Livre', 3, 7.2, 4, 'https://m.media-amazon.com/images/I/81u9MRfdMBL.jpg', 'Blue Lock T01', 'Coupe du monde 2018, l’équipe de football du Japon est éliminée en huitièmes de finale... Ce nouvel échec incite l’Union japonaise de football à fonder le “Blue Lock” : un centre de formation révolutionnaire rassemblant les 300 meilleurs attaquants lycéens du pays. L’objectif du coach du Blue Lock, Jinpachi Ego, est clair : détecter l’unique attaquant qui écrasera tous ses rivaux par son talent et son hyper-individualisme ! Pour Yoichi Isagi, joueur bouillonnant encore inconnu, il n’y a pas d’alternative... S’il veut survivre au programme hautement sélectif qui l’attend, il devra abandonner le jeu collectif et se transcender pour devenir l’attaquant ultime !', 'Manga', 'Pika', 'Français', 208, '2811650253', '978-2811650254', 200, '12 x 1.6 x 18 cm'),
('Livre', 4, 12.95, 9, 'https://m.media-amazon.com/images/P/2808203470.01._SCLZZZZZZZ_SX500_.jpg', 'Thorgal - Tome 40 - Tupilaks', 'De retour dans le vaisseau de ses origines, Thorgal doit affronter Néokora, une intelligence artificielle déterminée à restaurer le règne atlante...', 'BD', 'LOMBARD', 'Français', 48, '2808203470', '978-2808203470', 370, '22.6 x 1 x 29.8 cm'),
('Livre', 5, 7.2, 4, 'https://m.media-amazon.com/images/I/81DPxg8WIjL.jpg', 'Sailor Moon T01', 'Usagi est une jeune fille de 14 ans comme tant d\'autres : elle aime dormir, jouer aux jeux vidéo, elle pleure pour un oui ou pour un non et elle ne se passionne pas pour ses études. Mais un beau jour, elle croise le chemin de Luna, un chat doué de parole qui va la transformer en une jolie justicière : Sailor Moon ! La voilà investie de plusieurs missions : elle doit identifier ses alliées, retrouver le légendaire Cristal d\'Argent et protéger une certaine princesse… tout en luttant contre de mystérieux ennemis qui sont eux aussi à la recherche du fabuleux cristal aux pouvoirs fantastiques !', 'Manga', 'Pika ', 'Français', 248, '2811607137', '978-2811607135', 210, '12 x 2 x 18 cm'),
('Livre', 6, 6.95, 3, 'https://m.media-amazon.com/images/I/812k3BWrksL.jpg', 'Death Note - Tome 1', 'Light Yagami ramasse un étrange carnet oublié dans la cour de son lycée. Selon les instructions du carnet, la personne dont le nom est écrit dans les pages du Death Note mourra dans les 40 secondes !! Quelques jours plus tard, Light fait la connaissance de l\'ancien propriétaire du carnet : Ryûk, un dieu de la mort ! Poussé par l\'ennui, il a fait entrer le carnet sur terre. Ryûk découvre alors que Light a déjà commencé à remplir son carnet...', 'Manga', 'KANA', 'Français', 210, '2505000328', '978-2505000327', 100, '12 x 1.3 x 17.6 cm'),
('Livre', 7, 6.99, 4, 'https://m.media-amazon.com/images/I/917WFqQD1mL.jpg', 'Jojo\'s - Steel Ball Run T01', '1890, en Amérique, la plus grande course du siècle, la Steel Ball Run&quot; est sur le point de commencer. Les participants doivent chevaucher de San Diego Beach à New York, ce qui équivaut à un périple de 6 000 kilomètres, sans jamais changer de monture ! À la clef pour le grand vainqueur : un prix de 50 millions de dollars ! Bien des aventuriers sont prêts à tout pour une telle somme !&quot;', 'Manga', 'Delcourt/Tonkam', 'Français', 192, '2759509567', '978-2759509560', 130, '1.2 x 1.5 x 17 cm'),
('Livre', 8, 24.9, 14, 'https://m.media-amazon.com/images/I/81HCibtdT4L.jpg', 'Goldorak', 'La guerre entre les forces de Véga et Goldorak est un lointain souvenir. Actarus et sa soeur sont repartis sur Euphor tandis qu\'Alcor et Vénusia tentent de mener une vie normale. Mais, des confins de l\'espace, surgit le plus puissant des golgoths : l\'Hydragon. Alors que le monstre de l\'ultime Division Ruine écrase les armées terriennes, les exigences des derniers représentants de Véga sidèrent la planète : sous peine d\'annihilation totale, tous les habitants du Japon ont sept jours pour quitter leur pays et laisser les envahisseurs coloniser l\'archipel. Face à cet ultimatum, il ne reste qu\'un dernier espoir... Goldorak.', 'BD', 'KANA', 'Français', 168, '2505078467', '978-2505078463', 900, '21.5 x 1.8 x 30 cm'),
('Livre', 9, 14.95, 8, 'https://m.media-amazon.com/images/I/81zlK+VcfoL.jpg', 'Walking Dead T01: Passé décomposé', 'Rick Grimes est policier et sort du coma pour découvrir avec horreur un monde où les morts ne meurent plus, mais errent à la recherche des derniers humains pour s\'en repaître. Il n\'a alors plus qu\'une idée en tête?: retrouver sa femme et son fils, en espérant qu\'ils soient rescapés de ce monde devenu fou. Un monde où plus rien ne sera jamais comme avant, et où une seule règle prévaut?: survivre à tout prix.', 'BD', 'Delcourt', 'Français', 144, '2756009121', '978-2756009124', 300, '17 x 1.2 x 26 cm'),
('Livre', 10, 11.99, 6, 'https://m.media-amazon.com/images/I/91icREIyqkL.jpg', 'Capitaine Albator - Mémoires de l\'Arcadia - Tome 1', 'Dans cette aventure inédite du Capitaine Albator, une équipe de scientifique a découvert un mausolée de Sylvidres et des informations où il est fait mention de manipulations génétiques et d\'un pouvoir destructeur terrifiant. Pouvoir capable de rendre les Sylvidres immortelles ou au contraire de provoquer leur destruction. La vague de froid extraordinaire qui frappe la planète bleue pourrait bien être liée à l\'une de ces Sylvidres mutantes. Le Capitaine Albator et son équipage parviendront-ils à élucider ce mystère et sauver la Terre de ce nouveau péril ?!', 'BD', 'KANA', 'Français', 56, '2505070512', '978-2505070511', 540, '22.5 x 1.1 x 29.8 cm'),
('Livre', 11, 39.95, 25, 'https://m.media-amazon.com/images/I/81fRZVtXupL.jpg', 'L\'histoire du monde par les cartes', 'De la formation des civilisations à la révolution numérique et aux conflits actuels en passant par les croisades, les grandes découvertes, les conquêtes napoléoniennes, les deux guerres mondiales, cet ouvrage raconte à travers près de 150 cartes expliquées et commentées plus de 10 000 ans d’histoire mondiale. \r\nLa diffusion du christianisme, les voyages de Marco Polo, la politique expansionniste des États-Unis, les complexités de la guerre froide,… Chaque événement est replacé dans un contexte géopolitique précis. Différents niveaux d’information et de nombreux schémas vous guideront à travers tous ces moments clés et indispensables pour comprendre notre monde et ses soubresauts.', 'Histoire', 'Larousse', 'Français', 360, '2035969409', '978-2035969408', 2110, '25 x 2.7 x 30 cm'),
('Livre', 12, 39.95, 25, 'https://m.media-amazon.com/images/I/81PoNX-cPjS.jpg', 'Les grandes batailles par les cartes', 'Hasting, Azincourt, Marignan, Austerlitz, Gettysburg, Verdun, Stalingrad, la guerre des Six-Jours… Des premiers grands conflits de l’Antiquité aux fronts des grandes guerres mondiales et de la décolonisation, plus de 200 cartes précises et détaillés, des documents d’archives inédits, des photographies rarement publiées, des témoignages des grands généraux et chefs de guerre… racontent et décryptent l’histoire du monde ancien, moderne et contemporain.\r\n\r\nRenversement d’alliances, tactiques militaires, positionnement des armées, jusqu’aux nouvelles façons de faire la guerre… Chaque événement est replacé dans un contexte géopolitique précis. Différents niveaux d’information et de nombreux schémas vous guideront à travers tous ces moments clés et indispensables pour comprendre notre monde et ses soubresauts.', 'Histoire', 'Larousse', 'Français', 360, '2036008178', '978-2036008175', 1800, '25.8 x 2.4 x 30.9 cm'),
('Livre', 13, 34.95, 23, 'https://m.media-amazon.com/images/I/813AhrdOpeL.jpg', 'L\'Histoire de France par les cartes', 'La France des Gaulois, le partage mérovingien, les croisades, la diffusion de l’art gothique et roman, les guerres de Religion, les guerres napoléoniennes, la Première Guerre mondiale puis la Seconde, la construction du chemin de fer, les élections… Autant d’événements qui ont modifié les frontières françaises en modelant son histoire.\r\nChaque événement est replacé dans le contexte historique et géopolitique précis, permettant de comprendre comment la France s’est constituée, ses frontières actuelles, et les grands enjeux qui se posent aujourd’hui, en Europe et dans le monde  !', 'Histoire', 'Larousse', 'Français', 256, '2036026877', '978-2036026872', 1920, '25.6 x 2.7 x 30.7 cm'),
('Livre', 14, 34.95, 24, 'https://m.media-amazon.com/images/I/7130UgixIhL.jpg', 'La Géopolitique par les cartes', 'Un ouvrage percutant, rigoureux et vivant pour comprendre ce qui se joue et se décide derrière les conflits d’aujourd’hui.\r\n \r\nDans cette nouvelle édition revue et actualisée, l’auteur propose une approche originale\r\ndes grands enjeux de notre temps, en les reliant les uns aux autres à travers la superposition de cartes de différentes régions, du plan local au plan mondial, et réciproquement.\r\n \r\nComment la Chine est-elle devenue la seconde puissance mondiale ? Comment peuvent évoluer les relations entre les États-Unis et les pays du Moyen-Orient ? L’Europe des 27 est-elle un ensemble géopolitique majeur  ? La Russie peut-elle espérer reconquérir son statut d’empire ?… Chacune de ces situations est éclaircie, commentée, analysée au regard d’une évolution dans le temps. Le lecteur peut ainsi mieux comprendre les intérêts, les points de vue et les réactions des peuples de tous ces pays et de leurs dirigeants.', 'Histoire', 'Larousse', 'Français', 256, '203602677X', '978-2036026773', 2320, '25.8 x 3 x 30.7 cm'),
('Livre', 15, 24.9, 14, 'https://m.media-amazon.com/images/I/61pHGBNl9NL.jpg', 'Dune - Tome 1 - édition collector', 'Il n\'y a pas, dans tout l\'Empire, de planète plus inhospitalière que Dune.\r\nPartout du sable, à perte de vue.\r\nUne seule richesse : l\'épice de longue vie, née du désert et que l\'univers tout entier convoite.', 'Roman', 'Robert Laffont', 'Français', 720, '2221249488', '978-2221249482', 900, '15 x 4.9 x 21.9 cm'),
('Livre', 16, 21.9, 13, 'https://m.media-amazon.com/images/I/71thtdNn3KL.jpg', 'Dune - Tome 2 : Le Messie de Dune - Édition collector', 'Douze ans après sa victoire sur Arrakis, Paul règne sur un empire meurtri par une guerre sainte qu\'il ne contrôle plus.Vénéré comme un messie par ses fidèles, il est prisonnier de ses visions, incapable de mettre fin à la violence.Quel sera le prix de la rédemption ?', 'Roman', 'Robert Laffont', 'Français', 336, '2221255720', '978-2221255728', 500, '14.7 x 3.3 x 21.9 cm'),
('Livre', 17, 23.9, 14, 'https://m.media-amazon.com/images/I/61W2TCQn8kL.jpg', 'Dune - Tome 3 : Les Enfants de Dune - Édition collector', 'Sur Dune, le temps de l\'accomplissement des anciennes prophéties est venu. La transformation écologique s\'accélère : le désert devient jardin, menaçant les vers des sables et la précieuse Épice.\r\nL\'héritage de Paul Muad\'Dib est un empire conquis, mais ébranlé par le Jihad.\r\nPour régner à leur tour sur Dune, les jumeaux Leto et Ghanima devront survivre aux complots qui les visent et à l\'Abomination qui frappe leur tante Alia.', 'Roman', 'Robert Laffont', 'Français', 546, '2221259939', '978-2221259931', 700, '14.8 x 4.4 x 21.9 cm'),
('Livre', 18, 23.9, 14, 'https://m.media-amazon.com/images/I/61xWJ0KfrxL.jpg', 'Dune - Tome 4 : L\'Empereur-Dieu de Dune - Édition collector', 'Plusieurs millénaires se sont écoulés sur Arrakis. Leto Atréides, fils de l\'Empereur Paul-Muad\'Dib, a consenti à une terrible métamorphose pour rester en vie. C\'est d\'une main de fer qu\'il dirige son empire .\r\nSiona, une Atréides elle aussi, fomente une rébellion pour mettre fin à sa tyrannie, ignorant qu\'elle fait partie intégrante des plans du despote.\r\nLe Sentier d\'Or que Leto appelle de ses voeux se paiera au prix fort.', 'Roman', 'Robert Laffont', 'Français', 550, '2221263170', '978-2221263174', 700, '14.9 x 4.3 x 21.9 cm'),
('Livre', 19, 24.9, 15, 'https://m.media-amazon.com/images/I/61TrZipluhL.jpg', 'Dune - Tome 5 : Les Hérétiques de Dune - Édition collector', 'Sur Dune, devenue Rakis, une jeune fille semble pouvoir commander aux vers géants.\r\nSur tout le pourtour de l\'Empire, les Égarés de la Grande Dispersion commencent à revenir.\r\nQue cherchent-ils ? Que fuient-ils ?', 'Roman', 'Robert Laffont', 'Français', 624, '2221264576', '978-2221264577', 510, '14.9 x 4.3 x 21.9 cm'),
('Livre', 20, 19.9, 10, 'https://m.media-amazon.com/images/I/716h4xvWNhL.jpg', 'Cuisinez bien accompagné avec ma méthode Mentor', 'Vous rêvez de cuisiner tous les jours de bons plats, pas chers, sans passer votre journée en cuisine ou au supermarché ?\r\n\r\nDécouvrez Mentor, la méthode que j\'ai créée pour vous aider au quotidien à cuisiner simplement, efficacement et de façon responsable.\r\n\r\nÀ travers 13 principes fondamentaux et ultrasimples, je vous apprends à optimiser vos courses, à ranger efficacement votre réfrigérateur et vos placards, à vous constituer un garde-manger indispensable. Vous apprendrez également à sélectionner votre matériel de cuisine et de pâtisserie, mais aussi vos aliments - frais et de saison bien sûr !\r\n\r\nPour bien manger tous les jours, pas besoin de recettes compliquées. Rien ne vaut les classiques de notre enfance. C\'est pourquoi j\'ai sélectionné pour vous mes 100 recettes préférées, grâce auxquelles vous pourrez vous faire plaisir, même si vous n\'êtes pas (encore) un as des fourneaux : gratin dauphinois, tomates farcies, navarin d\'agneau, risotto, moules marinières, soufflé au fromage, boeuf bourguignon, riz au lait, pain perdu...\r\n\r\nAlors, qu\'attendez-vous pour devenir le chef de votre cuisine ?', 'Cuisine', 'Albin Michel', 'Français', 288, '2226464549', '978-2226464545', 1510, '20 x 3.3 x 25.7 cm'),
('Livre', 21, 22.95, 13, 'https://m.media-amazon.com/images/I/71ZJdDXhlEL.jpg', 'La bible officielle du cookeo: 200 recettes incontournables pour cuisiner au quotidien', '200 recettes courtes et rapides à réaliser, avec :\r\nDes ingrédients faciles à trouver\r\nDes infos pour adapter au mieux vos menus\r\nLes modes de programmation de l’appareil visibles en un clin d’œil\r\n \r\nAvec votre cookeo, régalez-vous de l’apéro au dessert  !', 'Cuisine', 'Dessain et Tolra', 'Français', 416, '2035961025', '978-2035961020', 1800, '20.6 x 4.2 x 26.8 cm'),
('Livre', 22, 29.95, 16, 'https://m.media-amazon.com/images/I/81wlexej6zL.jpg', 'La cuisine dans Ghibli', 'Retrouvez toute la magie et l\'onirisme des films du Studio Ghibli dans 35 recettes inspirées par ses plus grands chefs-d\'oeuvre.\r\nPar les thèmes qu\'ils abordent – l\'enfance, l\'espoir pour les générations futures, le lien à la nature, l\'amour, la famille, l\'importance du souvenir –, les films Ghibli ne peuvent que nous toucher et nous émouvoir. Les scènes liées aux repas y ont une importance toute particulière ; de la tourte poisson-potiron de Kiki la petite sorcière aux hambagu de Pompoko, en passant par le banquet maudit du Voyage de Chihiro, découvrez des recettes à partager avec votre famille ou vos amis, pour créer des liens indestructibles', 'Cuisine', 'Hachette Heroes', 'Français', 144, '2017178314', '978-2017178316', 840, '21.7 x 1.8 x 29.7 cm');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `nom`, `prenom`, `email`, `mdp`) VALUES
(6, 'Pepito', 'Pepito', 'Bandito', 'Pepito@gmail.com', '$2y$10$D9dq8SyaS7kPqumreen8FuaPJd9UyORjtpw.nnF7XIkOth4ppIn3W'),
(7, 'Hafendere', 'Hafendere', 'Vincent', 'vincent.dacheville@orange.fr', '$2y$10$Ia9ebA4Ps7hQAh5J6/xe2uvOUdP9.oxczcgVhlarQTEWGz/g80o8u'),
(8, 'Az', 'chardonnens', 'meyline', 'meyline.chardo@gmail.com', '$2y$10$O47.edoyETEqDzzLykebKeWreUKg9ly.dQBuqrEn04yaOP4B3dR7G'),
(9, 'Oraciel', 'Dacheville', 'Vincent', 'vincent83.dacheville@gmail.com', '$2y$10$6EI2W2wB4MhG0zHksnVfKezhOS9G88LLyXGwx42wgX./FrusbHQlC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
