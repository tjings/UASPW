-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 03:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

DROP DATABASE IF EXISTS uas;
CREATE DATABASE IF NOT EXISTS uas;
USE uas;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` varchar(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `is_booked` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `id_ruangan`, `is_booked`) VALUES
('A1', 1, 0),
('A2', 1, 0),
('A3', 1, 0),
('A4', 1, 0),
('A5', 1, 0),
('B1', 1, 0),
('B2', 1, 0),
('B3', 1, 0),
('B4', 1, 0),
('B5', 1, 0),
('C1', 1, 0),
('C2', 1, 0),
('C3', 1, 0),
('C4', 1, 0),
('C5', 1, 0),
('D1', 1, 0),
('D2', 1, 0),
('D3', 1, 0),
('D4', 1, 0),
('D5', 1, 0),
('E1', 1, 0),
('E2', 1, 0),
('E3', 1, 0),
('E4', 1, 0),
('E5', 1, 0),
('A1', 2, 0),
('A2', 2, 0),
('A3', 2, 0),
('A4', 2, 0),
('A5', 2, 0),
('B1', 2, 0),
('B2', 2, 0),
('B3', 2, 0),
('B4', 2, 0),
('B5', 2, 0),
('C1', 2, 0),
('C2', 2, 0),
('C3', 2, 0),
('C4', 2, 0),
('C5', 2, 0),
('D1', 2, 0),
('D2', 2, 0),
('D3', 2, 0),
('D4', 2, 0),
('D5', 2, 0),
('E1', 2, 0),
('E2', 2, 0),
('E3', 2, 0),
('E4', 2, 0),
('E5', 2, 0),
('A1', 3, 0),
('A2', 3, 0),
('A3', 3, 0),
('A4', 3, 0),
('A5', 3, 0),
('B1', 3, 0),
('B2', 3, 0),
('B3', 3, 0),
('B4', 3, 0),
('B5', 3, 0),
('C1', 3, 0),
('C2', 3, 0),
('C3', 3, 0),
('C4', 3, 0),
('C5', 3, 0),
('D1', 3, 0),
('D2', 3, 0),
('D3', 3, 0),
('D4', 3, 0),
('D5', 3, 0),
('E1', 3, 0),
('E2', 3, 0),
('E3', 3, 0),
('E4', 3, 0),
('E5', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `pict` varchar(255) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama_user`, `tanggal_lahir`, `role`, `pict`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2000-01-01', 'admin', NULL),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', '2000-01-01', 'user',NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id_movie` int(11) NOT NULL,
  `nama_movie` varchar(255) NOT NULL,
  `genre_movie` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `minimal_usia` varchar(11) NOT NULL,
  `release_date` date NOT NULL,
  `waktu_film` time NOT NULL,
  `poster_movie` varchar(255) DEFAULT NULL,
  `harga_movie` int(11) NOT NULL,
  `trailer` varchar(255),
  `id_ruangan` int(11) NOT NULL,
  `is_released` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--
INSERT INTO `movies` VALUES
(1, 'Naruto Shippuden: The Last', 'Fantasy', 'Naruto adalah sebuah film.', '10', '2020-01-01', '02:00:02', 'assets/posters/naruto.jpg', 75000, 'https://www.youtube.com/embed/tA3yE4_t6SY', 1, 1),
(2, 'Scoob!', 'Animation, Adventure, Comedy', 'Scooby and the gang face their most challenging mystery ever: a plot to unleash the ghost dog Cerberus upon the world. As they race to stop this dogpocalypse, the gang discovers that Scooby has an epic destiny greater than anyone imagined.', 'PG', '2020-05-15', '01:34:00', 'assets/posters/scoob.jpg', 45000, 'https://www.youtube.com/embed/GzlEnS7MmUo', 1, 1),
(3, 'Extraction', 'Action, Thriller ', 'Tyler Rake, a fearless black market mercenary, embarks on the most deadly extraction of his career when he\'s enlisted to rescue the kidnapped son of an imprisoned international crime lord.', 'R', '2020-04-24', '01:56:00', 'assets/posters/extraction.jpg\r\n', 45000, 'https://www.youtube.com/embed/L6P3nI6VnlY', 1, 1),
(4, 'Mulan', 'Action, Adventure, Drama', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 'PG-13', '2020-07-24', '01:55:00', 'assets/posters/mulan2020.jpg', 45000, "https://www.youtube.com/embed/KK8FHdFluOQ", 1, 0),
(5, 'Fantasy Island', 'Adventure, Fantasy, Horror ', 'When the owner and operator of a luxurious island invites a collection of guests to live out their most elaborate fantasies in relative seclusion, chaos quickly descends.', 'PG-13', '2020-02-14', '01:49:00', 'assets/posters/fantasyisland.jpg', 45000, "https://www.youtube.com/embed/a6O30nJ02PU", 1, 1),
(6, 'Milea: Suara dari Dilan', ' Drama, Romance ', 'Milea made the decision to part with Dilan as a warning for Dilan to stay away from the motorcycle gang. But the parting which had been only a bluff for Milea became a parting that lasted until they graduated from college and grew up.', '13+', '2020-02-13', '01:42:00', 'assets/posters/milea.jpg', 45000, "https://www.youtube.com/embed/C2yFJaXmdQs", 2, 1),
(7, 'Birds of Prey: And the Fantabulous Emancipation of One Harley Quinn', 'Action, Adventure, Crime ', 'After splitting with the Joker, Harley Quinn joins superheroes Black Canary, Huntress and Renee Montoya to save a young girl from an evil crime lord.', 'R', '2020-02-07', '01:49:00', 'assets/posters/harliquin.jpg', 45000, "https://www.youtube.com/embed/kGM4uYZzfu0", 1, 1),
(8, 'Sonic the Hedgehog', 'Action, Adventure, Comedy ', 'After discovering a small, blue, fast hedgehog, a small-town police officer must help him defeat an evil genius who wants to do experiments on him.', 'PG', '2020-02-14', '01:39:00', 'assets/posters/sonic.jpg', 45000, "https://www.youtube.com/embed/szby7ZHLnkA", 1, 1),
(9, 'Parasite', 'Comedy, Drama, Thriller ', 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.', 'R', '2019-11-08', '02:12:00', 'assets/posters/parasite.jpg', 45000, "https://www.youtube.com/embed/SEUXfv87Wpk", 2, 1),
(10, 'Avengers: Endgame', 'Action, Adventure, Drama ', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', 'PG-13', '2019-04-26', '03:01:00', 'assets/posters/endgame.jpg', 55000, "https://www.youtube.com/embed/TcMBFSGVi1c", 3, 1),
(11, 'Spider-Man: Far from Home', 'Action, Adventure, Sci-Fi ', 'Following the events of Avengers: Endgame (2019), Spider-Man must step up to take on new threats in a world that has changed forever.', 'PG-13', '2019-07-02', '02:09:00', 'assets/posters/spidey2019.jpg', 55000, "https://www.youtube.com/embed/Nt9L1jCKGnE", 3, 1),
(12, 'Bad Boys For Life', 'Action, Comedy, Crime ', 'Miami detectives Mike Lowrey and Marcus Burnett must face off against a mother-and-son pair of drug lords who wreak vengeful havoc on their city.', 'R', '2020-01-17', '02:04:00', 'assets/posters/bbfl.jpg', 45000, "https://www.youtube.com/embed/jKCj3XuPG8M", 1, 1),
(13, 'Gretel & Hansel', 'Fantasy, Horror, Mystery ', 'A long time ago in a distant fairy tale countryside, a young girl leads her little brother into a dark wood in desperate search of food and work, only to stumble upon a nexus of terrifying evil.', 'PG-13', '2020-01-31', '01:27:00', 'assets/posters/hansgret.jpg', 45000, "https://www.youtube.com/embed/QZblQLhKcZQ", 1, 1),
(14, 'Ip Man 4: The Finale', 'Action, Biography, Drama', 'The Kung Fu master travels to the U.S. where his student has upset the local martial arts community by opening a Wing Chun school.', 'Unrated', '2019-12-30', '01:47:00', 'assets/posters/ip4.jpg', 40000, "https://www.youtube.com/embed/LNaIewXwLHs", 2, 1),
(15, 'The Turning', 'Drama, Horror, Mystery', 'A young governess is hired by a man who has become responsible for his young nephew and niece after their parents\' deaths. A modern take on Henry James\' novella \"The Turn of the Screw.\"', 'PG-13', '2020-01-24', '01:34:00', 'assets/posters/thurning.jpg', 40000, "https://www.youtube.com/embed/VqCpR19iBpc", 2, 1),
(16, 'Brahms: The Boy II', 'Drama, Horror, Mystery', 'After a family moves into the Heelshire Mansion, their young son soon makes friends with a life-like doll called Brahms.', 'PG-13', '2020-02-21', '01:26:00', 'assets/posters/boy2.jpg', 42000, "https://www.youtube.com/embed/ytxEldPKnyA", 3, 1),
(17, 'Star Wars: Episode IX - The Rise of Skywalker', 'Action, Adventure, Fantasy ', 'The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.', 'PG-13', '2019-12-20', '02:22:00', 'assets/posters/skywalker.jpg', 45000, "https://www.youtube.com/embed/8Qn_spdM5Zg", 2, 1),
(18, 'Dolittle', ' Adventure, Comedy, Family', 'A physician who can talk to animals embarks on an adventure to find a legendary island with a young apprentice and a crew of strange pets.', 'PG', '2020-01-17', '01:41:00', 'assets/posters/dolittle.jpg', 42000, "https://www.youtube.com/embed/FEf412bSPLs", 2, 1),
(19, 'The Invisible Man', 'Horror, Mystery, Sci-Fi', 'When Cecilia\'s abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see.', 'R', '2020-02-28', '02:04:00', 'assets/posters/cecilia.jpg', 45000, "https://www.youtube.com/embed/Pso0Aj_cTh0", 2, 1),
(20, 'The Grudge', 'Horror, Mystery', 'A house is cursed by a vengeful ghost that dooms those who enter it with a violent death.', 'R', '2020-01-03', '01:34:00', 'assets/posters/grudge.jpg', 42000, "https://www.youtube.com/embed/Oo_c5lu0W0k", 2, 1),
(21, 'Guns Akimbo', 'Action, Comedy', 'A guy relies on his newly-acquired gladiator skills to save his ex-girlfriend from kidnappers.', 'R', '2020-02-28', '01:38:00', 'assets/posters/danielrad.jpg', 38000, "https://www.youtube.com/embed/JggpSpqxS6I", 3, 1),
(22, 'Danur 3: Sunyaruri', 'Horror', 'After years of being friendly with her little ghosts, a girl begins to feel that she must have a normal life like other girls. Especially, now she has a boyfriend, but she doesn\'t tell him about her ability to see ghosts.', '13+', '2019-09-26', '01:30:00', 'assets/posters/danur3.jpg', 40000, "https://www.youtube.com/embed/9EsGdyVx6HM", 3, 1),
(23, 'Charlie\'s Angels', 'Action, Adventure, Comedy ', 'When a young systems engineer blows the whistle on a dangerous technology, Charlie\'s Angels are called into action, putting their lives on the line to protect us all.', 'PG-13', '2019-11-15', '01:58:00', 'assets/posters/charlies.jpg', 45000, "https://www.youtube.com/embed/voYLots_ZOg", 3, 1),
(24, 'Jumanji: The Next Level', 'Action, Adventure, Comedy ', 'In Jumanji: The Next Level, the gang is back but the game has changed. As they return to rescue one of their own, the players will have to brave parts unknown from arid deserts to snowy mountains, to escape the world\'s most dangerous game.', 'PG-13', '2019-12-13', '02:03:00', 'assets/posters/jumanji20.jpg', 45000, "https://www.youtube.com/embed/rBxcF-r9Ibs", 3, 1),
(25, 'Frozen II', 'Animation, Adventure, Comedy ', 'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa\'s powers in order to save their kingdom.', 'PG', '2019-11-22', '01:43:00', 'assets/posters/frozen2.jpg', 45000, "https://www.youtube.com/embed/bwzLiQZDw2I", 3, 1),
(26, 'Terminator: Dark Fate', 'Action, Adventure, Sci-Fi', 'An augmented human and Sarah Connor must stop an advanced liquid Terminator from hunting down a young girl, whose fate is critical to the human race.', 'R', '2019-11-01', '02:08:00', 'assets/posters/terminator20.jpg', 45000, "https://www.youtube.com/embed/jCyEX6u-Yhs", 1, 1),
(27, 'The Boy', 'Horror, Mystery, Thriller ', 'An American nanny is shocked that her new English family\'s boy is actually a life-sized doll. After she violates a list of strict rules, disturbing events make her believe that the doll is really alive.', 'PG-13', '2016-01-22', '01:37:00', 'assets/posters/boy1.jpg', 45000, "https://www.youtube.com/embed/XGbB9UQ6r1g", 1, 1),
(28, 'The Assent', 'Horror, Thriller', 'After a series of disturbing supernatural events in his home, Joel, a young single father, comes to suspect that his young son may be possessed.', 'R', '2020-01-10', '01:33:00', 'assets/posters/assent.jpg', 42000, "https://www.youtube.com/embed/r23TBcYxNnM", 3, 1),
(29, 'Flu', 'Action, Drama, Sci-Fi ', 'Chaos ensues when a lethal, airborne virus infects the population of a South Korean city less than 20 kilometers from Seoul.', 'Not Rated', '2013-08-15', '02:02:00', 'assets/posters/flu2013.jpg', 42000, "https://www.youtube.com/embed/1BvKZMg2LjU", 2, 1),
(30, 'Gundala ', 'Action, Adventure, Drama', 'Indonesia\'s preeminent comic book superhero and his alter ego Sancaka enter the cinematic universe to battle the wicked Pengkor and his diabolical squad of orphan assassins.', '13+', '2019-08-29', '02:03:00', 'assets/posters/gundala.jpg', 38000, "https://www.youtube.com/embed/8rauD1vxMCw", 1, 1),
(31, '21 Bridges', 'Action, Crime, Drama', 'An embattled NYPD detective is thrust into a citywide manhunt for a pair of cop killers after uncovering a massive and unexpected conspiracy.', 'R', '2019-11-22', '01:39:00', 'assets/posters/21brid.jpg', 42000, "https://www.youtube.com/embed/BVZDhunTrYA", 3, 1),
(32, 'Maleficent: Mistress of Evil', 'Adventure, Family, Fantasy', 'Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies and dark new forces at play.', 'PG', '2019-10-18', '01:59:00', 'assets/posters/malekutuk.jpg', 45000, "https://www.youtube.com/embed/n0OFH4xpPr4", 2, 1);


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_kursi` varchar(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(255) DEFAULT NULL,
  `lebar_ruangan` int(11) NOT NULL,
  `panjang_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`, `lebar_ruangan`, `panjang_ruangan`) VALUES
(1, 'Alpha', 5, 5),
(2, 'Beta', 5, 5),
(3, 'Gamma', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`,`id_ruangan`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_kursi` (`id_kursi`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `kursi_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`);

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id_movie`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
