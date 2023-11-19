-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 19. lis 2023, 22:20
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `cfd`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL CHECK (`rating` >= 0 and `rating` <= 5),
  `genre` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `rating`, `genre`, `director`, `release_date`, `duration`, `image_url`, `tags`) VALUES
(1, 'The Witcher', 'Fantasy series based on the book series by Andrzej Sapkowski.', 4.6, 'Fantasy', 'Various Directors', '2019-12-20', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/wmNOonCg7cwEpqKloMMXrnQ48Sf.jpg', 'fantasy, magic, monsters'),
(2, 'Money Heist', 'Spanish heist crime drama series.', 4.7, 'Crime', 'Álex Pina', '2017-05-02', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5nGYHAlJmxv7GsNeO3HBQUSaKub.jpg', 'heist, crime, suspense'),
(3, 'Ozark', 'Crime drama series about money laundering and criminal activities.', 4.5, 'Crime', 'Various Directors', '2017-07-21', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/foEJkjDiORCDj8afsSmzqq04rBE.jpg', 'crime, money laundering, thriller'),
(4, 'Bridgerton', 'Period drama series set in Regency-era London.', 4.3, 'Drama', 'Chris Van Dusen', '2020-12-25', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/sOAHEbew4TwNCf99WjqECj9ay2y.jpg', 'period drama, romance, scandal'),
(5, 'The Crown', 'Historical drama series about the reign of Queen Elizabeth II.', 4.4, 'Drama', 'Various Directors', '2016-11-04', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/w4KniGpOo9fLBWbGhV8W6wXGXrj.jpg', 'historical, royalty, drama'),
(6, 'Stranger Things', 'Science fiction horror series set in the 1980s.', 4.7, 'Science Fiction', 'The Duffer Brothers', '2016-07-15', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/49WJfeN0moxb9IPfGn8AIqMGskD.jpg', 'sci-fi, horror, supernatural'),
(8, 'Narcos', 'Crime drama series based on the history of drug cartels in Colombia.', 4.6, 'Crime', 'Various Directors', '2015-08-28', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rTmal9fDbwh5F0waol2hq35U4ah.jpg', 'crime, drug war, cartel'),
(9, 'Peaky Blinders', 'British crime drama series set in Birmingham, England.', 4.8, 'Crime', 'Various Directors', '2013-09-12', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/vUUqzWa2LnHIVqkaKVlVGkVcZIW.jpg', 'crime, drama, gangsters'),
(10, 'Breaking Bad', 'Crime drama series about a high school chemistry teacher turned methamphetamine manufacturer.', 4.9, 'Crime', 'Vince Gilligan', '2008-01-20', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/3xnWaLQjelJDDF7LT1WBo6f4BRe.jpg', 'crime, drama, methamphetamine'),
(11, 'Mindhunter', 'Crime thriller series about FBI agents studying and profiling serial killers.', 4.7, 'Crime', 'Joe Penhall', '2017-10-13', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fbKE87mojpIETWepSbD5Qt741fp.jpg', 'crime, thriller, serial killers'),
(12, 'The Mandalorian', 'Space Western series set in the Star Wars universe.', 4.8, 'Science Fiction', 'Jon Favreau', '2019-11-12', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6upwFpQr6XqQenoWZ9rFnjCUpTv.jpg', 'sci-fi, space western, star wars'),
(13, 'The Umbrella Academy', 'Superhero series about a dysfunctional family of adopted sibling superheroes.', 4.5, 'Action', 'Steve Blackman', '2019-02-15', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qhcwrnnCnN8NE1N6XXKHFmveJR9.jpg', 'superhero, action, dysfunctional family'),
(14, 'The Haunting of Hill House', 'Horror drama series about a haunted house and its effect on a family.', 4.6, 'Horror', 'Mike Flanagan', '2018-10-12', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/38PkhBGRQtmVx2drvPik3F42qHO.jpg', 'horror, drama, haunted house'),
(15, 'Lucifer', 'Urban fantasy series about the Devil who abandons Hell to run a nightclub in Los Angeles.', 4.5, 'Fantasy', 'Joe Henderson', '2016-01-25', NULL, 'https://www.themoviedb.org/t/p/original/lYMdzZNTS3aD0dNtxK2kunFVkbm.jpg', 'fantasy, crime, devil'),
(17, 'Sherlock', 'Modern adaptation of Sir Arthur Conan Doyle\'s Sherlock Holmes detective stories.', 4.8, 'Mystery', 'Mark Gatiss', '2010-07-25', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/7WTsnHkbA0FaG6R9twfFde0I9hl.jpg', 'mystery, detective, crime'),
(19, 'Daredevil', 'Superhero series about blind lawyer Matt Murdock who fights crime as Daredevil.', 4.6, 'Action', 'Drew Goddard', '2015-04-10', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/oCDBwSkntYamuw8VJIxMRCtDBmi.jpg', 'superhero, action, crime');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `role` varchar(255) DEFAULT 'user',
  `is_banned` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `role`, `is_banned`) VALUES
(39, 'a', '$2y$12$RZUQ4ab88/HWViqrgDA.6ezgL7q3yMue31DtQpz7cDXpc5qL8jAWe', 'adsasdd@asd.cz', '2023-11-19 02:07:26', 'admin', 0),
(41, 'ab', '$2y$12$5v1ipXrPDnIW62Mv9qju8uB5.XxFEhUNPWZg.5cuMDsWZdKdcfxkm', 'thesonny2794@seznam.cz', '2023-11-19 02:43:47', 'user', 0),
(42, 'JiriKokot', '$2y$12$vo7TqlzVcf/gSdwayTN8d.wOxdzprmA3EggzzCGYvPKbs0bt4EiqW', 'lipag91550@mugadget.com', '2023-11-19 14:51:18', 'user', 1);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
