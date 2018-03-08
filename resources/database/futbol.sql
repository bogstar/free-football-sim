-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2015 at 08:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `futbol`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`article_id` int(11) NOT NULL,
  `article_title` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `article_content` text COLLATE utf8_bin,
  `article_author` varchar(128) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`article_id`, `article_title`, `article_content`, `article_author`) VALUES
(1, 'Article Title 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo orci nec purus tincidunt, apretium tortor porttitor. Fusce ante ligula, maximus id nulla sit amet, tincidunt sodales tellus.Etiam mattis mi non scelerisque eleifend. Proin posuere turpis id mi congue, aliquet congue purusvenenatis. Suspendisse facilisis lacus at quam elementum, ut rutrum nibh rutrum. Cras et purus commodomassa convallis sagittis. Nam ultrices, purus vel volutpat efficitur, nunc nunc faucibus sapien, atfaucibus augue neque cursus tortor. Cras dapibus, sem sed egestas molestie, mauris nunc hendrerit augue, at facilisis odio purus tincidunt metus. Fusce ultricies ligula vel eros efficitur, ac pellentesque tortor suscipit. Sed condimentum massa at luctus viverra. Ut lacus ligula, pharetra quis consectetur et, posuere ac eros. Nulla vel dictum massa. Integer vulputate, ipsum id viverra convallis, nisl neque malesuada turpis, at vehicula tellus sem nec dui. Morbi bibendum ligula sit amet mauris ornare, ut mattis velit maximus. Phasellus id dapibus ligula, vitae ullamcorper tortor.', 'Author Bogomil 1.12.2014.'),
(2, 'Article Title 2', 'Donec porta, mauris eget sollicitudin feugiat, sem dui ultrices odio, sit amet interdum arcu dolor ut nunc. Ut in nisl posuere, blandit lectus id, semper ante. Cras tellus magna, hendrerit at dignissim vel, fringilla nec orci. Praesent in lacinia lectus. In non nunc accumsan, auctor ipsum id, iaculis nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis elit arcu, sed rhoncus felis venenatis in. Nulla laoreet auctor ligula vel congue. Donec vel fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu lacinia neque. Vivamus sit amet congue erat. Duis egestas metus est, ac ultricies tellus rutrum eu.', 'Article footer 2'),
(3, 'Article Title 3', 'Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.', 'Ivanich');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
`id_player` int(11) NOT NULL,
  `player_name` varchar(64) DEFAULT NULL,
  `player_birthdate` date DEFAULT NULL,
  `player_birthplace` varchar(64) DEFAULT NULL,
  `player_height` float DEFAULT NULL,
  `player_playing_pos` enum('Goalkeeper','Defender','Midfielder','Forward') DEFAULT NULL,
  `player_image` varchar(64) DEFAULT NULL,
  `id_team` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id_player`, `player_name`, `player_birthdate`, `player_birthplace`, `player_height`, `player_playing_pos`, `player_image`, `id_team`) VALUES
(1, 'Ivan Vargić', '1987-03-15', 'Đakovo, Croatia', 1.92, 'Goalkeeper', 'vargic', 1),
(2, 'Ivan Tomećak', '1989-12-07', 'Zagreb, Croatia', 1.76, 'Defender', 'tomecak', 1),
(3, 'Marko Lešković', '1991-04-27', 'Našice, Croatia', 1.88, 'Defender', 'leskovic', 1),
(4, 'Matej Mitrović', '1993-11-10', 'Požega, Croatia', 1.87, 'Defender', 'mitrovic', 1),
(5, 'Marko Vešović', '1991-08-28', 'Titograd, Montenegro', 1.77, 'Defender', 'vesovic', 1),
(6, 'Mato Jajalo', '1988-05-25', 'Jajce, BIH', 1.81, 'Midfielder', 'jajalo', 1),
(7, 'Ivan Močinić', '1993-04-30', 'Rijeka, Croatia', 1.8, 'Midfielder', 'mocinic', 1),
(8, 'Anas Sharbini', '1987-02-21', 'Rijeka, Croatia', 1.81, 'Midfielder', 'sharbini', 1),
(9, 'Moisés Lima Magalhães', '1988-04-07', 'Belo Horizonte, Brazil', 1.84, 'Midfielder', 'moises', 1),
(10, 'Vedran Jugović', '1989-10-10', 'Osijek, Croatia', 1.78, 'Midfielder', 'jugovic', 1),
(11, 'Andrej Kramarić', '1991-07-19', 'Zagreb, Croatia', 1.8, 'Forward', 'kramaric', 1),
(12, 'Zoran Nižić', '1989-10-11', 'Split, Croatia', 1.95, 'Defender', 'nizic', 2),
(13, 'Goran Milović', '1989-01-29', 'Split, Croatia', 1.95, 'Defender', 'milovic', 2),
(14, 'Mario Maloča', '1989-05-04', 'Zagreb, Croatia', 1.9, 'Defender', 'maloca', 2),
(15, 'Tino-Sven Sušić', '1992-02-13', 'Sarajevo, BIH', 1.86, 'Midfielder', 'susic', 2),
(16, 'Avdija Vršajević', '1986-03-06', 'Tešanj, BIH', 1.82, 'Defender', 'vrsajevic', 2),
(17, 'Nikola Vlašić', '1997-10-04', 'Split, Croatia', 1.78, 'Midfielder', 'vlasic', 2),
(18, 'Jean Evrard Kouassi', '1994-09-25', 'N''Damien, Côte d''Ivoire', 1.74, 'Forward', 'kouassi', 2),
(19, 'Mislav Anđelković', '1988-04-22', 'Dubrovnik, Croatia', 1.79, 'Midfielder', 'andelkovic', 2),
(20, 'Sandro Gotal', '1991-09-09', 'Bregenz, Austria', 1.85, 'Forward', 'gotal', 2),
(21, 'Lovre Kalinić', '1990-04-03', 'Split, Croatia', 2.01, 'Goalkeeper', 'kalinic', 2),
(22, 'Anton Maglica', '1991-11-11', 'Brćko, BIH', 1.81, 'Forward', 'maglica', 2),
(23, 'Eduardo Dos Reis Carvalho', '1982-09-19', 'Mirandela, Portugal', 1.87, 'Goalkeeper', 'eduardo', 3),
(24, 'Ivo Daniel Ferreira Mendonça Pinto', '1990-01-07', 'Lourosa, Portugal', 1.84, 'Defender', 'pinto', 3),
(25, 'Jozo Šimunović', '1994-08-04', 'Zagreb, Croatia', 1.9, 'Defender', 'simunovic', 3),
(26, 'Jérémy Taravel', '1987-04-17', 'Vincennes, France', 1.91, 'Defender', 'taravel', 3),
(27, 'Josip Pivarić', '1989-01-30', 'Zagreb, Croatia', 1.76, 'Defender', 'pivaric', 3),
(28, 'Marcelo Brozović', '1992-11-16', 'Zagreb, Croatia', 1.8, 'Midfielder', 'brozovic', 3),
(29, 'Ognjen Vukojević', '1983-12-20', 'Bjelovar, Croatia', 1.83, 'Midfielder', 'vukojevic', 3),
(30, 'Domagoj Antolić', '1990-06-30', 'Zagreb, Croatia', 1.8, 'Midfielder', 'antolic', 3),
(31, 'El Arbi Hillel Soudani', '1987-11-25', 'Chlef, Algeria', 1.77, 'Forward', 'soudani', 3),
(32, 'Ángelo José Henríquez Iturra', '1994-04-13', 'Santiago, Chile', 1.81, 'Forward', 'henriquez', 3),
(33, 'Wilson Bruno Naval da Costa Eduardo', '1990-06-08', 'Pedras Rubras, Portugal', 1.76, 'Forward', 'wilson', 3),
(34, 'Iker Casillas Fernández', '1981-05-20', 'Madrid, Spain', 1.85, 'Goalkeeper', 'iker', 4),
(35, 'Marcelo Vieira da Silva', '1988-05-12', 'Río de Janeiro, Brazil', 1.74, 'Defender', 'marcelo', 4),
(36, 'Sergio Ramos García', '1986-03-30', 'Camas, Spain', 1.83, 'Defender', 'ramos', 4),
(37, 'Képler Laveran Lima Ferreira', '1983-02-26', 'Maceió, Brazil', 1.88, 'Defender', 'pepe', 4),
(38, 'Daniel Carvajal Ramos', '1992-01-11', 'Leganés, Spain', 1.73, 'Defender', 'carvajal', 4),
(39, 'Francisco Román Alarcón', '1992-04-21', 'Benalmádena, Spain', 1.76, 'Midfielder', 'isco', 4),
(40, 'Toni Kroos', '1990-01-04', 'Greifswald, Germany', 1.82, 'Midfielder', 'kroos', 4),
(41, 'Luka Modrić', '1985-09-09', 'Zadar, Croatia', 1.74, 'Midfielder', 'modric', 4),
(42, 'James Rodríguez', '1991-07-12', 'Cucuta, Columbia', 1.8, 'Midfielder', 'james', 4),
(43, 'Cristiano Ronaldo Dos Santos', '1985-02-05', 'Funchal, Portugal', 1.85, 'Forward', 'cr7', 4),
(44, 'Karim Benzema', '1987-12-19', 'Lyon, France', 1.87, 'Forward', 'benzema', 4),
(45, 'Jordi Alba', '1989-03-21', 'L''Hospitalet, Spain', 1.65, 'Defender', 'alba', 5),
(46, 'Dani Alves', '1983-05-06', 'Juazeiro, Brazil', 1.75, 'Defender', 'alves', 5),
(47, 'Claudio Bravo', '1983-04-13', 'Viluco, Chile', 1.85, 'Goalkeeper', 'bravo', 5),
(48, 'Sergio Busquets', '1988-07-16', 'Sabadell, Spain', 1.89, 'Midfielder', 'busquets', 5),
(49, 'Javier Mascherano', '1984-07-08', 'San Lorenzo, Argentina', 1.71, 'Midfielder', 'mascherano', 5),
(50, 'Jérémy Mathieu', '1983-10-29', 'Luxeuil-les-Bains, France', 1.9, 'Defender', 'mathieu', 5),
(51, 'Lionel Messi', '1987-07-24', 'Rosario, Santa Fe, Argentina', 1.69, 'Forward', 'messi', 5),
(52, 'Neymar', '1992-02-05', 'Mogi das Cruzes, Brazil', 1.74, 'Forward', 'neymar', 5),
(53, 'Gerard Piqué', '1987-02-02', 'Barcelona, Spain', 1.92, 'Midfielder', 'pique', 5),
(54, 'Luis Suárez', '1987-01-24', 'Salto, Uruguay', 1.81, 'Forward', 'suarez', 5),
(55, 'Xavi', '1980-01-25', 'Terrassa, Spain', 1.7, 'Midfielder', 'xavi', 5),
(56, 'Xabi Alonso', '1981-11-25', 'Tolosa, Spain', 1.83, 'Midfielder', 'alonso', 6),
(57, 'Mehdi Benatia', '1987-04-17', 'Courcouronnes, France', 1.89, 'Defender', 'benatia', 6),
(58, 'Juan Bernat', '1993-03-01', 'Cullera, Spain', 1.72, 'Defender', 'bernat', 6),
(59, 'Jérôme Boateng', '1988-09-03', 'Berlin, Germany', 1.92, 'Defender', 'boateng', 6),
(60, 'Pierre Højbjerg', '1995-08-05', 'Copenhagen, Denmark', 1.85, 'Midfielder', 'hojbjerg', 6),
(61, 'Robert Lewandowski', '1988-08-21', 'Warsaw, Poland', 1.84, 'Forward', 'lewandowski', 6),
(62, 'Manuel Neuer', '1986-03-27', 'Gelsenkirchen, Germany', 1.93, 'Goalkeeper', 'neuer', 6),
(63, 'Rafinha', '1985-09-07', 'Londrina, Brazil', 1.71, 'Defender', 'rafinha', 6),
(64, 'Franck Ribéry', '1983-04-07', 'Boulogne-sur-Mer, France', 1.7, 'Forward', 'ribery', 6),
(65, 'Arjen Robben', '1984-01-23', 'Bedum, Netherlands', 1.8, 'Forward', 'robben', 6),
(66, 'Sebastian Rode', '1990-10-11', 'Seeheim-Jugenheim, Germany', 1.79, 'Midfielder', 'rode', 6),
(67, 'Serge Aurier', '1992-12-24', 'Ouragahio, Côte d''Ivoire', 1.75, 'Defender', 'aurier', 7),
(68, 'Edinson Cavani', '1987-02-14', 'Salto, Uruguay', 1.88, 'Forward', 'cavani', 7),
(69, 'Lucas Digne', '1993-07-20', 'Meaux, France', 1.78, 'Defender', 'digne', 7),
(70, 'Zlatan Ibrahimović', '1981-10-03', 'Malmö, Sweden', 1.95, 'Forward', 'ibrahimovic', 7),
(71, 'Lucas Moura', '1992-08-13', 'São Paulo, Brazil', 1.73, 'Forward', 'lucas', 7),
(72, 'David Luiz', '1987-04-22', 'Diadema, Brazil', 1.89, 'Defender', 'luiz\r\n', 7),
(73, 'Blaise Matuidi', '1987-04-09', 'Toulouse, France', 1.75, 'Midfielder', 'matuidi', 7),
(74, 'Thiago Motta', '1982-08-20', 'São Bernardo do Campo, Brazil', 1.87, 'Midfielder', 'motta', 7),
(75, 'Javier Pastore', '1989-06-20', 'Córdoba, Argentina', 1.87, 'Midfielder', 'pastore', 7),
(76, 'Thiago Silva', '1984-09-22', 'Rio de Janeiro, Brazil', 1.82, 'Defender', 'silva', 7),
(77, 'Salvatore Sirigu', '1987-01-12', 'Nuoro, Italy', 1.92, 'Goalkeeper', 'sirigu', 7);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id_team` int(11) NOT NULL,
  `team_name` varchar(64) DEFAULT NULL,
  `team_full_name` varchar(128) DEFAULT NULL,
  `team_logo` varchar(64) DEFAULT NULL,
  `team_year_founded` int(11) DEFAULT NULL,
  `team_stadium` varchar(64) DEFAULT NULL,
  `team_president` varchar(64) DEFAULT NULL,
  `team_manager` varchar(64) DEFAULT NULL,
  `team_league` varchar(64) DEFAULT NULL,
  `team_website` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `team_name`, `team_full_name`, `team_logo`, `team_year_founded`, `team_stadium`, `team_president`, `team_manager`, `team_league`, `team_website`) VALUES
(1, 'Rijeka', 'HNK Rijeka', 'rijeka', 1946, 'Kantrida', 'Damir Mišković', 'Matjaž Kek', '1.HNL', 'http://www.nk-rijeka.hr/'),
(2, 'Hajduk', 'HNK Hajduk Split', 'hajduk', 1911, 'Poljud', 'Marin Brbić', 'Igor Tudor', '1.HNL', 'http://www.hajduk.hr/'),
(3, 'Dinamo', 'GNK Dinamo Zagreb', 'dinamo', 1911, 'Maksimir', 'Zdravko Mamić', 'Zoran Mamić', '1.HNL', 'http://www.gnkdinamo.hr/'),
(4, 'RealMadrid', 'Real Madrid Club de Fútbol', 'realmadrid', 1902, 'Santiago Bernabéu', 'Florentino Pérez', 'Carlo Ancelotti', 'La Liga', 'http://www.realmadrid.com/'),
(5, 'Barcelona', 'Futbol Club Barcelona', 'barcelona', 1899, 'Camp Nou', 'Josep Maria Bartomeu', 'Luis Enrique', 'La Liga', 'http://www.fcbarcelona.com/'),
(6, 'Bayern', 'Fußball-Club Bayern München e. V.', 'bayern', 1900, 'Allianz Arena', 'Karl Hopfner', 'Pep Guardiola', 'Bundesliga', 'http://www.fcbayern.de/en/'),
(7, 'PSG', 'Paris Saint-Germain Football Club', 'psg', 1970, 'Parc des Princes', 'Nasser Al-Khelaifi', 'Laurent Blanc', 'Ligue 1', 'http://www.psg.fr/'),
(8, '1234567890123456789012345678901234567890123456789012345678901234', '12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678', '1234567890123456789012345678901234567890123456789012345678901234', 1994, '1234567890123456789012345678901234567890123456789012345678901234', '1234567890123456789012345678901234567890123456789012345678901234', '1234567890123456789012345678901234567890123456789012345678901234', '1234567890123456789012345678901234567890123456789012345678901234', '12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `user_username` varchar(32) DEFAULT NULL,
  `user_password` varchar(128) DEFAULT NULL,
  `user_rights` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_username`, `user_password`, `user_rights`) VALUES
(1, 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
 ADD PRIMARY KEY (`id_player`), ADD KEY `fk_team_player` (`id_team`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `player`
--
ALTER TABLE `player`
ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `team` (`id_team`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
