-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 14. pro 2023, 22:04
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
-- Struktura tabulky `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `movie_id`, `comment_text`, `created_at`) VALUES
(8, 39, 1, 'ad', '2023-11-28 22:07:31'),
(9, 39, 8, 'TOP', '2023-11-28 22:48:00'),
(10, 39, 2, '?', '2023-11-28 22:50:10'),
(11, 44, 1, 'teststt', '2023-12-04 19:58:48'),
(12, 39, 1, 'qe', '2023-12-09 19:09:32');

-- --------------------------------------------------------

--
-- Struktura tabulky `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `contact_form`
--

INSERT INTO `contact_form` (`id`, `username`, `subject`, `message`, `submission_time`) VALUES
(10, 'a', 'Technický problém', 'Nenačítá něco', '2023-12-14 21:03:59');

-- --------------------------------------------------------

--
-- Struktura tabulky `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `czech_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `rating`, `genre`, `director`, `release_date`, `duration`, `image_url`, `tags`, `czech_name`) VALUES
(1, 'The Witcher', '\nThe Witcher je epický fantasy televizní seriál založený na stejnojmenné knižní sérii od polského spisovatele Andrzeje Sapkowského. Hlavní postavou je Geralt z Rivia, lovec příšer a mutovaný bojovník, který putuje temným světem plným magie, intrik a nebezpečí. Seriál vypráví nejen jeho dobrodružství, ale také propojuje osudy dalších postav, včetně kouzelnice Yennefer a princezny Ciri. S vynikajícími hereckými výkony, vizuálním ohromením a komplexním příběhem se \"The Witcher\" stal fenoménem mezi milovníky fantasy a dobrodružství po celém světě.', 5, 'Fantasy', 'Various Directors', '2019-12-20', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/wmNOonCg7cwEpqKloMMXrnQ48Sf.jpg', 'fantasy, magic, monsters', 'Zaklínač'),
(2, 'Money Heist', 'Money Heist (La Casa de Papel) je španělský kriminální thriller, jenž vzdoruje konvenčním žánrovým normám. Sleduje chytrý plán na loupež Španělské královské mincovny, kde skupina zlodějů pod vedením Tajemníka a Profesora vytváří napínavý příběh plný nečekaných zvratů. Seriál se vyznačuje složitými postavami, každá s vlastní motivací, což přidává hloubku a emocionální napětí. Výtvarné režijní prvky a důmyslná dramaturgie přitahují diváky do spletité sítě lží, intrik a vzrušujícího kriminálního dobrodružství, což z \"Money Heist\" činí jedinečný a nezapomenutelný televizní zážitek.', 5, 'Crime', 'Álex Pina', '2017-05-02', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/5nGYHAlJmxv7GsNeO3HBQUSaKub.jpg', 'heist, crime, suspense', 'Papírový dům'),
(3, 'Ozark', 'Ozark je intenzivní kriminální dramatik, který odhaluje temné odstíny rodinného života uprostřed nebezpečného světa praní špinavých peněz. Sledujeme Byrdovu rodinu, která, nucena se přestěhovat do Ozark Mountains, se ocitá v síti nekompromisního zločinu. Seriál se vyznačuje složitým dějem, kde se rodinné loajality střetávají s nekompromisním světem zločinu. Skvělé herecké výkony, napínavé intriky a nekompromisní atmosféra tvoří \"Ozark\" nejen jedinečným kriminálním dramatem, ale také poutavým pohledem na lidskou povahu v extrémních situacích.', 5, 'Crime', 'Various Directors', '2017-07-21', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/foEJkjDiORCDj8afsSmzqq04rBE.jpg', 'crime, money laundering, thriller', 'Ozark'),
(4, 'Bridgerton', 'Bridgerton je kouzelný historický dramatik, který oživuje Regency-éru Londýna prostřednictvím okouzlujících příběhů o lásce, intrikách a společenských hrách. Seriál sleduje životy aristokratické rodiny Bridgertonů a nabízí pohled do světa společenských konvencí a romantických zápletek. Luxusní kostýmy, vizuální nádhera a elegantní režie spojené se špičkovým obsazením činí \"Bridgerton\" výjimečným. Kombinuje dobovou atmosféru s moderními prvky, vytvářející nezapomenutelný televizní zážitek plný vášní a tajemství.', 4, 'Drama', 'Chris Van Dusen', '2020-12-25', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/sOAHEbew4TwNCf99WjqECj9ay2y.jpg', 'period drama, romance, scandal', 'Bridgertonovi'),
(5, 'The Crown', 'The Crown je vzrušující historický dramatik, který detailně mapuje klíčové momenty ve vládě britské královny Alžběty II. S působivým zpracováním a věrností historickým událostem podává tento seriál poutavý pohled do života a povinností britské královské rodiny. Skvělé herecké výkony, detailní rekvizity a nádherné kostýmy spojené s promyšleným scénářem tvoří nejen podmanivý pohled na události 20. století, ale také unikátní skvost, který zaujme diváky všech generací. \"The Crown\" je korunou televizního umění, zanechávající nevymazatelný dojem o historii britské monarchie.', 4, 'Drama', 'Various Directors', '2016-11-04', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/w4KniGpOo9fLBWbGhV8W6wXGXrj.jpg', 'historical, royalty, drama', 'Koruna'),
(6, 'Stranger Things', 'Stranger Things je fascinující vědeckofantastický hororový seriál, který nás vtahuje do podivuhodného světa 80. let plného tajemství a nadpřirozených událostí. Sledujeme skupinu dětí, které se snaží rozluštit záhadu zmizení svého přítele a setkávají se s paranormálními silami. S jedinečným mixem nostalgie, vynikající hudby a dojemného příběhu tvoří \"Stranger Things\" nezapomenutelný zážitek. Skvěle napsaný scénář a výborné herecké výkony dělají z tohoto seriálu jedno z nejvýraznějších děl moderní televize.', 5, 'Science Fiction', 'The Duffer Brothers', '2016-07-15', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/49WJfeN0moxb9IPfGn8AIqMGskD.jpg', 'sci-fi, horror, supernatural', 'Stranger Things'),
(8, 'Narcos', 'Narcos je napínavý kriminální dramatik, který nás vtahuje do nebezpečného světa drogových kartelů v Kolumbii. Seriál sleduje vzestup a pád jednoho z nejmocnějších drogových lordů v historii, Pablo Escobara, a agenty DEA, kteří jej stíhají. S vynikající kombinací autentických událostí, dramatického napětí a působivých výkonů vytváří \"Narcos\" intenzivní podívanou. Kromě skvělého zpracování kriminálních událostí nabízí také pohled na sociální a politické dopady drogového obchodu. \"Narcos\" je nekompromisní, strhující a nezapomenutelný pohled na temnou stránku války proti drogám.', 5, 'Crime', 'Various Directors', '2015-08-28', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rTmal9fDbwh5F0waol2hq35U4ah.jpg', 'crime, drug war, cartel', 'Narcos'),
(9, 'Peaky Blinders', 'Peaky Blinders je neuvěřitelně poutavý kriminální dramatik, který nás vtahuje do světa gangsterského Birminghamu po první světové válce. Sledujeme vzestup a intriky Shelbyho rodiny, která vede zločinnou organizaci Peaky Blinders. S výrazným stylem, brilantním scénářem a charismatickým výkonem Cillianna Murphyho v roli Tommyho Shelbyho vytváří \"Peaky Blinders\" jedinečnou atmosféru. Seriál exceluje v kombinaci historických prvků s dramatem a umocňuje ho vynikající hudba a vizuální zpracování. Každá sezóna je emocionální jízdou plnou nečekaných zvratů a výjimečných postav. \"Peaky Blinders\" je skvostná a nesmírně návyková podívaná.', 5, 'Crime', 'Various Directors', '2013-09-12', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/vUUqzWa2LnHIVqkaKVlVGkVcZIW.jpg', 'crime, drama, gangsters', 'Peaky blinders'),
(10, 'Breaking Bad', 'Breaking Bad je geniální kriminální dramatik, který nás vtahuje do temného světa výroby metamfetaminu a ztráty morálky. Seriál sleduje transformaci středoškolského chemika Waltera Whitea v nelítostného drogového magnáta, přičemž nešetří napětím a psychologickou hloubkou postav. Skvěle napsaný scénář, brilantní herecké výkony, a nekompromisní vykreslení rozkladu lidské morálky dělají z \"Breaking Bad\" jedno z nejvýraznějších děl moderní televize. S každým odvážným krokem Waltera Whitea do temnoty se stavíme tváří v tvář etickým dilematům, což z tohoto seriálu činí nezapomenutelnou a provokativní podívanou.', 5, 'Crime', 'Vince Gilligan', '2008-01-20', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/3xnWaLQjelJDDF7LT1WBo6f4BRe.jpg', 'crime, drama, methamphetamine', 'Perníkový táta'),
(11, 'Mindhunter', 'Mindhunter je provokativní kriminální thriller, který nás zasazuje do světa FBI, kde agenti Holden Ford a Bill Tench se společně s psycholožkou Wendy Carr snaží proniknout do mysli sériových vrahů. Seriál se zakládá na skutečných událostech a knihách, sleduje vývoj metody profilování zločinců a vytváření konceptu sériového vrahování. S vynikajícím výkonem herců, tajemným napětím a psychologickým hloubkám postav nabízí \"Mindhunter\" unikátní pohled na temné stránky lidské psychiky a zločinu. Každá sezóna je sofistikovaným puzením k proniknutí do hlubin temné duše.', 5, 'Crime', 'Joe Penhall', '2017-10-13', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fbKE87mojpIETWepSbD5Qt741fp.jpg', 'crime, thriller, serial killers', 'Lovci myšlenek'),
(12, 'The Mandalorian', 'The Mandalorian je epický sci-fi western, který nás vtahuje do rozlehlého vesmíru Star Wars. Sleduje osamělého a tajemného lovce odměn, známého jako Mandalorian, v jeho dobrodružství v odloučených koutech galaxie. S výjimečným vizuálním zpracováním, poutavým příběhem a kultovní postavou, dítětem Grogu (Baby Yoda), \"The Mandalorian\" oslovuje fanoušky novým způsobem. Každá epizoda přináší kombinaci akce, humoru a dojemné mezilidské dynamiky, což činí tento seriál jedním z nejpopulárnějších a vzrušujících v universu Star Wars.', 5, 'Science Fiction', 'Jon Favreau', '2019-11-12', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6upwFpQr6XqQenoWZ9rFnjCUpTv.jpg', 'sci-fi, space western, star wars', 'Mandolorian'),
(13, 'The Umbrella Academy', 'The Umbrella Academy je neotřelý a fantastický superhrdinský seriál, který oživuje koncept nadpřirozeně nadaných adoptovaných sourozenců. Každý z nich má jedinečné schopnosti, což tvoří nekonvenční tým superhrdinů. Seriál kombinuje bohatý vizuální styl, úžasné postavy a nečekané zvraty v příběhu. S hudebními motivy, originálním zpracováním a směsicí žánrů od sci-fi po drama přináší \"The Umbrella Academy\" vzrušující a podmanivý pohled na dysfunkční rodinu superhrdinů, kteří se snaží rozluštit tajemství své minulosti a zabránit apokalyptickým událostem.', 5, 'Action', 'Steve Blackman', '2019-02-15', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qhcwrnnCnN8NE1N6XXKHFmveJR9.jpg', 'superhero, action, dysfunctional family', 'Akademie deštníků'),
(14, 'The Haunting of Hill House', 'The Haunting of Hill House je působivý hororový dramatik, který nás vtahuje do temné historie rodiny Crain a jejich traumatizujícího pobytu v oduševnělém sídle Hill House. Seriál zdůrazňuje jak psychologické, tak nadpřirozené prvky, nabízí vysoce kvalitní scénář, vynikající režii a dojemné herecké výkony. Skrz kruhovou kompozici a nečekané zvraty v příběhu vytváří \"The Haunting of Hill House\" zlověstnou atmosféru, která zanechává diváka s intenzivními emocemi a dojmy. Kombinuje hrůzu s hloubkou postav a vytváří jedinečný hororový zážitek.', 5, 'Horror', 'Mike Flanagan', '2018-10-12', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/38PkhBGRQtmVx2drvPik3F42qHO.jpg', 'horror, drama, haunted house', 'Strašení v domě na kopci'),
(15, 'Lucifer', 'Lucifer je fascinující urban fantasy, která přináší neotřelý pohled na legendární postavu Ďábla. Sledujeme Lucifera Morningstara, který opouští pekelný trůn, aby prozkoumal lidský svět v Los Angeles. Seriál kombinuje detektivní prvky s nadpřirozeným, vytvářející unikátní mix mysteriózního dramatu a sarkastického humoru. Tom Ellis exceluje v roli Lucifera, přinášející charisma a vtip, což dodává seriálu jedinečný šmrnc. \"Lucifer\" oslovuje nejen fanoušky nadpřirozena, ale i ty, kteří ocení filozofické otázky o dobru a zlu.', 5, 'Fantasy', 'Joe Henderson', '2016-01-25', NULL, 'https://www.themoviedb.org/t/p/original/lYMdzZNTS3aD0dNtxK2kunFVkbm.jpg', 'fantasy, crime, devil', 'Lucifer'),
(17, 'Sherlock', '\nSherlock je moderní adaptace legendárních příběhů o Sherlocku Holmesovi, která přesouvá slavného detektiva do současného Londýna. Benedict Cumberbatch vytváří vynikající portrét Sherlocka, a Martin Freeman jako John Watson přináší do série vtip a laskavost. S vynikajícím scénářem, rychlým tempem a brilantním vykreslením detektivních hádanek nabízí \"Sherlock\" osvěžující a moderní pohled na klasický žánr. S pečlivým zpracováním postav a poutavými zápletkami zůstává seriál věrný duchu původních příběhů od Arthura Conana Doylea, což činí \"Sherlock\" nejlepším současným zpracováním Sherlocka Holmese.', 5, 'Mystery', 'Mark Gatiss', '2010-07-25', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/7WTsnHkbA0FaG6R9twfFde0I9hl.jpg', 'mystery, detective, crime', 'Sherlock'),
(19, 'Daredevil', 'Daredevil je temný a akční superhrdinský seriál, který přináší nekompromisní pohled na svět Matta Murdocka, slepého právníka, který se stává nočním ochráncem svého rodného Hell\'s Kitchen. Charlie Cox vyniká v roli Daredevila, což přispívá k hloubce postavy a výrazné atmosféře seriálu. S výborným choreografickým zpracováním bojových scén, taktickým využitím zvuků a vynikajícím výkonem Vincenta D\'Onofria jako Kingpina nabízí \"Daredevil\" věrné a poutavé ztvárnění klasického komiksového hrdiny. Seriál se vyznačuje komplexními postavami, morálními dilematy a temnou, realistickou atmosférou, což ho činí výjimečným v žánru superhrdinovských adaptací.', 1, 'Action', 'Drew Goddard', '2015-04-10', NULL, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/oCDBwSkntYamuw8VJIxMRCtDBmi.jpg', 'superhero, action, crime', 'Daredevil');

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
(44, 'b', '$2y$12$8B2HpJEXiLZ.Wt3n4E7yPuf46r07UKbBXiwOeS9QSb6mBkpRLJznm', 'adsasd@asdsdsd.cz', '2023-11-26 16:26:47', 'user', 0),
(50, 'Test', '$2y$12$wtkT2B5Zy78nD4AmPg8rJuzXujYpTQtFbURcA8erJVmO32BIpQdsK', 'test@test.cz', '2023-12-04 02:39:48', 'user', 1),
(51, 'aadadadadadad', '$2y$12$bS92T7kRdO66XMzIrf0sd.UPyPvG.hTpDu7zZVyiuX5I1.kPwQLKK', 'wevifsa9ada583@dabeixin.com', '2023-12-09 21:05:33', 'user', 0);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexy pro tabulku `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pro tabulku `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pro tabulku `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pro tabulku `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
