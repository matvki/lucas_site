-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `projet` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projet` (`projet`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`projet`) REFERENCES `projets` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `image` (`id`, `name`, `projet`) VALUES
(1,	'typo1.png',	4),
(2,	'typo2.png',	4),
(3,	'lavande.jpg',	1),
(4,	'rhododendron.jpg',	1),
(5,	'ronce.jpg',	1),
(6,	'pot.jpg',	1),
(7,	'motif.jpg',	5),
(8,	'brandingMellifère.jpg',	1),
(10,	'dg2.jpg',	2),
(11,	'toteVue.jpg',	2),
(12,	'mockup.jpg',	5);

DROP TABLE IF EXISTS `projets`;
CREATE TABLE `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nameE` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `projets` (`id`, `name`, `nameE`, `picture`, `class`) VALUES
(1,	'Branding Mellifère',	'Branding Mellifère',	'brandingMellifère.jpg',	'branding'),
(2,	'Vues d\'en face',	'Vues d\'en face',	'vuesEnFace.jpg',	'vues'),
(3,	'Jaquette DVD',	'DVD cover',	'jaquetteDVD.jpg',	'jaquette'),
(4,	'Typographie au Trait',	'Line Typography',	'typographieAuTrait.jpg',	'typo'),
(5,	'Motif évolutif',	'Evolutionary pattern',	'motifEvolutif.jpg',	'motif'),
(6,	'Mais encore...',	'And also...',	'fourreTout.jpg',	'mais');

DROP TABLE IF EXISTS `text`;
CREATE TABLE `text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext NOT NULL,
  `textE` longtext NOT NULL,
  `projet` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projet` (`projet`),
  CONSTRAINT `text_ibfk_1` FOREIGN KEY (`projet`) REFERENCES `projets` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `text` (`id`, `text`, `textE`, `projet`) VALUES
(1,	'Création de l\'identité visuelle et de ses déclinaisons mises en place sur plusieurs points de contact. Le client est un apiculteur ayant fait le constat de l\'impact de son métier sur l\'environnement.\r\nIl a fait le choix de vivre auprès de ses ruches et des les faire transhumer pour produire un miel monofloral de saison dans le respect de la nature et du rythme de production des abeilles. Il s\'agit de mettre en valeur le produit en imprimant l\'étiquette à même le pot en monochrome. La transparence du contenant permet une fausse bichromie, liant le miel à l\'étiquette. L\'identité quand à elle, est constituée d\'une typographie sans sérif renforcé par l\'utilisation des textures.\r\n',	'Creation of the visual identity and its declensions implemented place on several points of contact.\r\nThe client is a beekeeper who has observed the impact of its work on the environment. He has chosen to live with his beehives and to make them transhumance to produce a monofloral seasonal honey in the respect for nature and the rhythm of production of the bees. It is a question of highlighting the product by printing the label at even the pot in monochrome. The transparency of the container allows a false two-color process, linking the honey to the label. The identity, on the other hand, is made up of a typography without serif reinforced by the use of textures.\r\n',	1),
(2,	'Réalisation d’une affiche et de ses déclinaisons pour la vingtième édition du Festival international du film LGBT+. La vingtième édition est un anniversaire majeur, il est important pour moi de le marquer graphiquement également. Le choix de n\'utiliser que de la typographie et du noir et blanc permet de mieux véhiculer le message notamment grâce au manifeste inclus dans l\'affiche qui s\'adresse au spectateur. Le dessin relâché et libéré vient contraster avec une composition plus sobre et structurée laissant libre court à l’interprétation de cette forme. La construction de l\'affiche permet également une grande possibilité de déclinaison en gardant une cohérence de l\'ensemble grâce à la structure de la composition.',	'Realization of a poster and its declensions for the twentieth edition of the International LGBT+ Film Festival. The twentieth edition is a major anniversary, it is important for me to mark it graphically as well. The choice to use only typography and black and white allows to better convey the message, in particular thanks to the manifesto included in the poster addressed to the spectator. The relaxed and liberated drawing contrasts with a more sober and structured composition leaving free rein to the interpretation of this form. The construction of the poster also allows for a great possibility of declination while keeping a coherence of the whole thanks to the structure of the composition.',	2),
(3,	'Réalisation d’une collection de jaquette de DVD pour Kino Resort, un éditeur de séries B. L\'utilisateur a à sa disposition un feutre pour personnaliser le DVD ainsi qu\'un sachet de stickers en lien avec le film pour personnaliser sa couverture. Le contraste entre l\'aspect brillant des stickers et le caractère brut de la couverture dont le texte est imprimé à même la texture permet de mettre en valeur ce parallèle.',	'Creation of a DVD cover collection for Kino Resort, a B series publisher. The user has at his disposal a felt-tip pen to personalize the DVD as well as a bag of stickers related to the film to personalize its cover. The contrast between the glossy aspect of the stickers and the raw character of the cover, whose text is printed directly on the texture, highlights this parallel.',	3),
(4,	'Sur les pas des premières typographies numériques, mon travail s’inspire également de l’architecture. Deux traits s\'entremêlent pour former le dessin de la lettre. Leurs croisement permettent ainsi la création de fausses courbes à l\'image des grilles de pixels de Matthew Carter et son travail pour les annuaires.',	'In the footsteps of the first digital typefaces, my work is also inspired by architecture. Two strokes intertwine to form the drawing of the letter. Their crossing thus allows the creation of false curves in the image of Matthew Carter\'s pixel grids and his work for the directories.',	4),
(5,	'Il s\'agit de créer une lé de tapisserie contenant un motif. Le carnet permet de retranscrire le processus de création. Des inspirations, en passant par le motif unique ainsi que les recherches autour de l\'évolution de celui-ci.',	'It is a question of creating a strip of tapestry containing a pattern. The notebook makes it possible to retranscribe the process of creation. Inspirations, through the pattern as well as the research around\r\nthe evolution of this one.\r\n',	5);

-- 2020-09-23 21:58:22
