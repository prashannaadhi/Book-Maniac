-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 05:04 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `ID` int(11) NOT NULL,
  `ISBN_number` varchar(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Edition` varchar(100) DEFAULT NULL,
  `Price` int(5) UNSIGNED NOT NULL,
  `Publication` varchar(100) DEFAULT NULL,
  `CoverPic` varchar(200) DEFAULT NULL,
  `SearchKey` varchar(225) NOT NULL,
  `Stock` int(2) DEFAULT '0',
  `Genre` varchar(10) NOT NULL DEFAULT 'arts',
  `Dtimes` int(100) NOT NULL DEFAULT '0',
  `Synopsis` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`ID`, `ISBN_number`, `Name`, `Author`, `Edition`, `Price`, `Publication`, `CoverPic`, `SearchKey`, `Stock`, `Genre`, `Dtimes`, `Synopsis`) VALUES
(1, 'ISBN_A1', 'ANYTHING IS POSSIBLE', 'ELIZABETH STROUT', '', 800, '', 'product_photo/arts/ISBN_A1.jpg', '', 4, 'arts', 10, 'Anything Is Possible is a 2017 novel of related stories by Elizabeth Strout. It returns to the fictional rural town of Amgash, Illinois, the protagonist\'s hometown in Strout\'s 2016 novel My Name Is Lucy Barton.'),
(2, 'ISBN_A2', 'DESIGNING TOGETHER', 'DAN M. BROWN', '', 520, '', 'product_photo/arts/ISBN_A2.jpg', '', 4, 'arts', 0, 'WHAT IS THE ONE THING not taught in design school, but is an essential survival skill for practicing designers? Working with other people. And yet, in every project, collaboration with other people is often the most difficult part.'),
(3, 'ISBN_A3', 'E-COMMERCE ESSENTIALS', 'K.C. LAUDON &amp; C.G. TRAVER', '', 1100, '', 'product_photo/arts/ISBN_A3.jpg', '', 4, 'arts', 0, 'Based on the authors\' market-leading E-Commerce. Business. Technology. Society., this brief book offers the same thought-provoking and current content but in a brief format. E-Commerce Essentials emphasizes the three major driving forces behind E-commerce—technology change, business development, and social issues—to provide a coherent conceptual framework for understanding the field.'),
(4, 'ISBN_A4', 'INSPIRED', 'MARTY CAGAN', '', 800, '', 'product_photo/arts/ISBN_A4.jpg', 'How To Create Products Customers Love', 4, 'arts', 0, 'Why do some products make the leap to greatness while others do not? Creating inspiring products begins with discovering a product that is valuable, usable, and feasible. If you can not do this, then it s not worth building anything. -- front flap.'),
(5, 'ISBN_A5', 'JOURNEY INTO EUROPE', 'AKBAR AHMED', '', 620, '', 'product_photo/arts/ISBN_A5.jpg', 'Islam, Immigration and Identity', 4, 'arts', 0, 'Tensions over Islam were escalating in Europe even before 9/11. Since then, repeated episodes of terrorism together with the refugee crisis have dramatically increased the divide between the majority population and Muslim communities, pushing the debate well beyond concerns over language and female dress. Meanwhile, the parallel rise of right-wing, nationalist political parties throughout the continent, often espousing anti-Muslim rhetoric, has shaken the foundation of the European Union to its very core.'),
(6, 'ISBN_A6', 'LANGUAGE ARTS', 'STEPHANIE KALLOS', '', 860, '', 'product_photo/arts/ISBN_A6.jpg', '', 4, 'arts', 0, 'The new novel from the best-selling author ofBroken for You spins the stories of a dedicated teacher, his enigmatic son, and a wartime survivor into an affecting tale of love, loss, and handwriting.'),
(7, 'ISBN_A7', 'THE WANDERER', 'ALAIN -FOURNIER', '', 145, 'DOUBLEDAY ANCHOR BOOKS', 'product_photo/arts/ISBN_A7.jpg', '', 4, 'arts', 0, 'Le Grand Meaulnes is the only novel by French author Alain-Fournier who was killed in the first month of World War I. It is somewhat biographical - especially the name of the heroine Yvonne, for whom he had a doomed infatuation in Paris.'),
(8, 'ISBN_A8', 'LIFE OF PI', 'YANN MARTEL', '', 800, '', 'product_photo/arts/ISBN_A8.jpg', '', 4, 'arts', 0, 'Life of Pi is a Canadian fantasy adventure novel by Yann Martel published in 2001. The protagonist is Piscine Molitor \"Pi\" Patel, an Indian boy from Pondicherry who explores issues of spirituality and practicality from an early age.'),
(9, 'ISBN_A9', 'MASTER OF DISASTER', 'C. LEHANE, M. FABIANI &amp;B. GUTTENTAG', '', 750, '', 'product_photo/arts/ISBN_A9.jpg', 'The Ten Commandments of Damage Control', 4, 'arts', 0, 'Twelve-year-old Henry Mosley decides that he and his pals Riley and Reed need to go on some earth-shaking adventures and make a name for themselves.'),
(10, 'ISBN_A10', 'SHADES OF BLACK', 'DAVID A. BAILEY ; SONIA BOYCE', '', 290, '', 'product_photo/arts/ISBN_A10.jpg', 'Assembling Black Arts in 1980s Britain', 4, 'arts', 0, 'In the 1980s—at the height of Thatcherism and in the wake of civil unrest and rioting in a number of British cities—the Black Arts Movement burst onto the British art scene with breathtaking intensity, changing the nature and perception of British culture irreversibly.'),
(11, 'ISBN_A11', 'THE ART OF SHAOLIN KUNG FU', 'WONG KIEW KIT', '', 560, '', 'product_photo/arts/ISBN_A11.jpg', 'The Secrets of Kung Fu for Self Defense, Health and Enlightenment', 1, 'arts', 1, 'This unique and vibrant book, by a celebrated Grandmaster, offers you a comprehensive and practical introduction to kung fu and all the other aspects of Shaolin wisdom. Entertaining and inspiring, it shows how kung fu and other Shaolin arts can bring you health, vitality and spiritual joy.'),
(12, 'ISBN_A12', 'THE PAPER TRAIL', 'ALEXANDER MONRO', '', 1500, '', 'product_photo/arts/ISBN_A12.jpg', 'An Unexpected History of the Worlds Greatest Invention', 4, 'arts', 9, 'A sweeping, richly detailed history that tells the fascinating story of how paper--the simple Chinese invention of two thousand years ago--wrapped itself around our world, humankind\'s most momentous ideas imprinted on its surface.'),
(13, 'ISBN_A13', 'TIME MANAGEMENT MANIFESTO', 'THOMAS B. DOWD II', '', 890, '', 'product_photo/arts/ISBN_A13.jpg', '', 4, 'arts', 0, 'Time management is a disciplined mindset to be able to live in the moment while working toward the future. It is all mental—it’s an attitude. Having control in your life is about commitment, routines, flexibility, adjustments, and planning. We create our own self-limitations. We say we’ll do tomorrow what we really want to do today. Eliminate what’s holding you back. “Time Management Manifesto” offers specific actions that will teach subscribers the following themes:\r\n• Manage your time, don’t let it manage you\r\n• Time management is required of all levels, in all positions\r\n• The benefits of managing professional time effectively spill into your personal space '),
(14, 'ISBN_A14', 'THE WIZARD OF OZ', 'PUFFIN CLASSICS', '', 550, 'PUFFIN CLASSICS', 'product_photo/arts/ISBN_A14.jpg', '', 4, 'arts', 0, 'Believing that the modern fairy tale no longer required \'a fearsome moral\' rendered by \'horrible and blood-curdling incidents\', L. Frank Baum (1856-1919) decided to create a world in which \'the wonderment and joy are retained and the heartaches and nightmares are left out\'.'),
(15, 'ISBN_A15', 'THE WOLF WILDER', 'KATHERINE RUDELL', '', 980, '', 'product_photo/arts/ISBN_A15.jpg', '', 4, 'arts', 0, 'Feodora and her mother live in the snowbound woods of Russia, in a house full of food and fireplaces. Ten minutes away, in a ruined chapel, lives a pack of wolves. Feodora\'s mother is a wolf wilder, and Feo is a wolf wilder in training. A wolf wilder is the opposite of an animal tamer: it is a person who teaches tamed animals to fend for themselves, and to fight and to run, and to be wary of humans.');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `ID` int(11) NOT NULL,
  `User` varchar(100) NOT NULL,
  `ISBN_number` varchar(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Edition` varchar(100) DEFAULT NULL,
  `Publication` varchar(100) DEFAULT NULL,
  `CoverPic` varchar(200) DEFAULT NULL,
  `SearchKey` varchar(225) NOT NULL,
  `Genre` varchar(10) NOT NULL DEFAULT 'arts',
  `Synopsis` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`ID`, `User`, `ISBN_number`, `Name`, `Author`, `Edition`, `Publication`, `CoverPic`, `SearchKey`, `Genre`, `Synopsis`, `time`) VALUES
(16, 'shailesh.adhikari98@gmail.com', 'ISBN_S22', 'Book Of the Human Mind', 'James mcDolles', 'Sixth', 'Oxford', 'product_photo/science/', '', 'science', '', '2018-02-19 14:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `literature`
--

CREATE TABLE `literature` (
  `ID` int(11) NOT NULL,
  `ISBN_number` varchar(10) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Author` varchar(200) NOT NULL,
  `Edition` varchar(100) DEFAULT NULL,
  `Price` int(5) UNSIGNED NOT NULL,
  `Publication` varchar(100) DEFAULT NULL,
  `CoverPic` varchar(225) DEFAULT NULL,
  `SearchKey` longtext,
  `Stock` int(2) DEFAULT '0',
  `Genre` varchar(10) NOT NULL DEFAULT 'literature',
  `Dtimes` int(100) NOT NULL,
  `Synopsis` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `literature`
--

INSERT INTO `literature` (`ID`, `ISBN_number`, `Name`, `Author`, `Edition`, `Price`, `Publication`, `CoverPic`, `SearchKey`, `Stock`, `Genre`, `Dtimes`, `Synopsis`) VALUES
(1, 'ISBN_L1', 'AWAKEN THE GIANT WITHIN', 'ANTHONY ROBBINS', '', 660, '', 'product_photo/literature/ISBN_L1.jpg', 'How to Take Immediate Control of Your Mental Emotional, Physical and Financial Destiny', 5, 'literature', 0, 'This book contains proven steps and strategies on how to shape your beliefs, and direct all actions towards increasing the quality of your life.'),
(2, 'ISBN_L2', 'AWAKEN', 'MEG CABOT', '', 455, '', 'product_photo/literature/ISBN_L2.jpg', 'The Abandon Novel', 5, 'literature', 0, 'Death has her in his clutches. She doesn\'t want him to let her go. Seventeen-year-old Pierce Oliviera knew by accepting the love of John Hayden, she\'d be forced to live forever in the one place she\'s always dreaded most: the Underworld. The sacrifice seemed worth it, though, because it meant she could be with the boy she loves.'),
(3, 'ISBN_L3', 'CHORITROHIN', 'SARATCHANDRA CHATTOPADHYA', '', 200, '', 'product_photo/literature/ISBN_L3.jpg', '', 5, 'literature', 10, 'The novel is set in Bengali society of the early 1900s. The story has four main women characters–two major, Savitri and Kiranmayi, and two minor, Surbala and Sarojini.'),
(4, 'ISBN_L4', 'DARKRER', 'EL JAMES', '', 800, '', 'product_photo/literature/ISBN_L4.jpg', 'Fifty Shade Darker As By Christian', 5, 'literature', 0, 'Daunted by the singular sexual tastes and dark secrets of the beautiful, tormented young entrepreneur Christian Grey, Anastasia Steele has broken off their relationship to start a new career with a Seattle publishing house. '),
(5, 'ISBN_L5', 'DRACULA', 'BRAM STOKER', '', 1000, '', 'product_photo/literature/ISBN_L5.jpg', '', 5, 'literature', 0, 'A rich selection of background and source materials is provided in three areas: Contexts includes probable inspirations for Dracula in the earlier works of James Malcolm Rymer and Emily Gerard.'),
(6, 'ISBN_L6', 'ELEVEN MINUTES', 'PAULO COELHO', '', 880, '', 'product_photo/literature/ISBN_L6.jpg', '', 5, 'literature', 0, 'Eleven Minutes is the story of Maria, a young girl from a Brazilian village, whose first innocent brushes with love leave her heartbroken. '),
(7, 'ISBN_L7', 'GOOD TO GREAT', 'JIM COLLINS', '', 890, '', 'product_photo/literature/ISBN_L7.png', 'Why some Companies Make the Leap and Others Dont', 5, 'literature', 0, 'To find the keys to greatness, Collins\'s 21-person research team read and coded 6,000 articles, generated more than 2,000 pages of interview transcripts and created 384 megabytes of computer data in a five-year project. The findings will surprise many readers and, quite frankly, upset others.'),
(8, 'ISBN_L8', 'A GAME OF THORNS', 'GEORGE R.R. MRTIN', '', 1500, '', 'product_photo/literature/ISBN_L8.jpg', '', 5, 'literature', 0, 'Magic, mystery, intrigue, romance, and adventure fill these pages and transport us to a world unlike any we have ever experienced. Already hailed as a classic, George R. R. Martin’s stunning series is destined to stand as one of the great achievements of imaginative fiction.'),
(9, 'ISBN_L9', 'GREY', 'EL JAMES', '', 650, '', 'product_photo/literature/ISBN_L9.jpg', '', 5, 'literature', 0, 'Christian Grey exercises control in all things; his world is neat, disciplined, and utterly empty—until the day that Anastasia Steele falls into his office, in a tangle of shapely limbs and tumbling brown hair. '),
(10, 'ISBN_L10', 'HALF GIRLFRIEND', 'CHETAN BHAGAT', '', 400, '', 'product_photo/literature/ISBN_L10.jpg', '', 5, 'literature', 0, ' Once upon a time, there was a Bihari boy called Madhav. He fell in love with a girl from Delhi called Riya. Madhav didn\'t speak English well. Riya did. Madhav wanted a relationship. Riya didn\'t. Riya just wanted friendship. Madhav didn\'t. Riya suggested a compromise. She agreed to be his half girlfriend. From the author of the blockbuster novels Five Point Someone, One Night @ the Call Center, The 3 Mistakes of My Life, 2 States and Revolution 2020 comes a simple and beautiful love story that will touch your heart and inspire you to chase your dreams. '),
(11, 'ISBN_L11', 'INHERITANCE THIEF', 'FRANCIS MAHON', '', 650, '', 'product_photo/literature/ISBN_L11.jpg', '', 5, 'literature', 0, ''),
(12, 'ISBN_L12', 'ONE INDIAN GIRL', 'CHETAN BHAGAT', '', 550, '', 'product_photo/literature/ISBN_L12.jpg', '', 5, 'literature', 0, 'Hi, I\'m Radhika Mehta and I\'m getting married this week. I work at Goldman Sachs, an investment bank. Thank you for reading my story. However, let me warn you.'),
(13, 'ISBN_L13', 'TUMHARE SAPANEY HUYA AAPNE', 'RABINDRA SINGH', '', 550, '', 'product_photo/literature/ISBN_L13.jpg', '', 5, 'literature', 0, 'It can’t be love . . .’ he thinks and immediately his heart protests. They are complete opposites! She’s a small town girl who takes admission in Delhi University (DU). An idealist, studies are her first priority. He’s a Delhi guy, seriously into youth politics in the DU. He fights to make his way. Student union elections are his first priority.'),
(14, '', 'TEEN GHUMTI', 'B.P KOIRALA', '', 900, '', 'product_photo/literature/ISBN_L14.jpg', '', 5, 'literature', 0, ''),
(15, 'ISBN_L15', 'THE ROAD', 'CORMAC McCARTHY', '', 780, '', 'product_photo/literature/ISBN_L15.jpg', '', 5, 'literature', 0, 'A father and his son walk alone through burned America. Nothing moves in the ravaged landscape save the ash on the wind. It is cold enough to crack stones, and when the snow falls it is gray.'),
(16, 'ISBN_L16', 'THE NOTEBOOK', 'NICHOLAS SPARKS', '', 890, '', 'product_photo/literature/ISBN_L16.jpg', '', 5, 'literature', 0, 'A man with a faded, well-worn notebook open in his lap. A woman experiencing a morning ritual she doesn\'t understand. Until he begins to read to her. An achingly tender story about the enduring power of love.'),
(17, 'ISBN_L17', 'THE NAME THEY GAVE US', 'ENERY LORD', '', 850, '', 'product_photo/literature/ISBN_L17.jpg', '', 5, 'literature', 0, 'Everything is going right for Lucy Hansson, until her mom’s cancer reappears. Just like that, Lucy breaks with all the constants in her life: her do-good boyfriend, her steady faith, even her longtime summer church camp job.'),
(18, 'ISBN_L18', 'THE ALCHEMIST', 'PAULO COELHO', '', 650, '', 'product_photo/literature/ISBN_L18.jpg', '', 5, 'literature', 0, 'The Alchemist is a novel by Brazilian author Paulo Coelho which was first published in 1988. Originally written in Portuguese, it became an international bestseller translated into some 70 languages as of 2016.'),
(19, 'ISBN_L19', 'SUMNIMA', 'B.P KOIRALA', '', 350, '', 'product_photo/literature/ISBN_L19.jpg', '', 5, 'literature', 0, 'Sumnima a famous Nepali novel by B P Koirala, a former Prime Minister of Nepal is about the painful complications that arise in a man-woman relationship. The story is about the powerful attraction that exists between a Brahmin boy and an ordinary girl. It deals with the conflict within the boy who also wishes to pursue spiritual salvation but is torn between his desire for this woman and his urge for spiritual emancipation. To surmount carnal desires is not possible for an ordinary mortal and the pleasures of the flesh have a place in life. The Brahmin boy is serious about his spiritual goals but succumbs to the charms of a lovely girl. '),
(20, 'ISBN_L20', 'SHIRIS KO PHUL', 'PARIJAT', '', 600, '', 'product_photo/literature/ISBN_L20.jpg', '', 5, 'literature', 0, 'Parijat was the nom de plume of Bishnu Kumari Waiba, a novelist, poet, and short story writer. Born in Darjeeling, India where she completed part of her schooling, she moved to Kathmandu, Nepal where she spent the rest of her life.'),
(21, 'ISBN_L24', 'RAKTA KUNDA', 'KRISHNA AABIRAL', '', 125, '', 'product_photo/literature/ISBN_L24.jpg', '', 5, 'literature', 0, 'Rakta Kunda meaning ‘pool of blood’ is a Nepali novel by journalist Krishna Abiral. Based on the accounts of real event that took place in the year 2001, precisely the Royal Massacre, the novel tries to describe and explain the context and the background as well as the activity that took place before, during and after the monstrous act.'),
(22, 'ISBN_L25', 'PALPASA CAFE', 'NARAYAN WAGLEY', '', 360, '', 'product_photo/literature/ISBN_L25.jpg', 'MADAN PRIZE WINNER', 5, 'literature', 0, 'Felicitated by Madan Purashkar in the year 2005, Palpasa Cafe, a novel by Narayan Wagle, is one stop for readers of all kinds and ages. The editor of Kantipur Daily, Wagle\'s novel is set during the 10-year-long Maoists insurgency in Nepal.\r\n'),
(23, 'ISBN_L26', 'PAGAL BASTI', 'SARU-BHAKTA', '', 285, '', 'product_photo/literature/ISBN_L26.jpg', '', 5, 'literature', 1, ''),
(24, 'ISBN_L27', 'ORIGIN', 'DAN BROWN', '', 890, '', 'product_photo/literature/ISBN_L27.jpg', '', 5, 'literature', 0, 'Robert Langdon, Harvard professor of symbology and religious iconology, arrives at the ultramodern Guggenheim Museum in Bilbao to attend a major announcement—the unveiling of a discovery that “will change the face of science forever.” The evening’s host is Edmond Kirsch, a forty-year-old billionaire and futurist whose dazzling high-tech inventions and audacious predictions have made him a renowned global figure.');

-- --------------------------------------------------------

--
-- Table structure for table `religious`
--

CREATE TABLE `religious` (
  `ID` int(11) NOT NULL,
  `ISBN_number` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Edition` varchar(100) DEFAULT NULL,
  `Price` int(5) UNSIGNED NOT NULL,
  `Publication` varchar(100) DEFAULT NULL,
  `CoverPic` varchar(200) DEFAULT NULL,
  `SearchKey` varchar(225) NOT NULL,
  `Stock` int(2) DEFAULT '0',
  `Genre` varchar(10) NOT NULL DEFAULT 'religious',
  `Dtimes` int(100) NOT NULL,
  `Synopsis` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religious`
--

INSERT INTO `religious` (`ID`, `ISBN_number`, `Name`, `Author`, `Edition`, `Price`, `Publication`, `CoverPic`, `SearchKey`, `Stock`, `Genre`, `Dtimes`, `Synopsis`) VALUES
(2, 'ISBN_R1', 'AN AUTHUMN JOURNEY', 'ANGELINA DAVENPORT', '', 950, '', 'product_photo/religious/ISBN_R1.jpg', 'A SPIRITUAL MEMORIE', 0, 'religious', 0, ''),
(3, 'ISBN_R2', 'BHAGAVAD GITA', 'SRI SRIMAD', '', 1800, '', 'product_photo/religious/ISBN_R2.jpg', 'A RELIGIOUS BOOK', 0, 'religious', 0, 'The Bhagavad Gita, often referred to as simply the Gita, is a 700 verse Hindu scripture in Sanskrit that is part of the Hindu epic Mahabharata.'),
(4, 'ISBN_R3', 'FOLLOWING THE LIGHT OF CHRIST', 'JOHN M. PONTIUS', '', 1600, '', 'product_photo/religious/ISBN_R3.jpg', '', 0, 'religious', 5, 'John M. Pontius brings to light simple ways to recognize and implement personal revelation in your life. Inside you\'ll find the grand keys that will help make receiving daily guidance, answers to prayers, and much more, accessible to everyone. With this book at your side, you\'ll be better prepared to prosper along your life\'s journey and accomplish the work the Lord has planned for you. '),
(5, 'ISBN_R4', 'INTRODUCTION TO ISLAM', 'COROLE HILLENBRAND', '', 1500, 'THAMES &amp; HUDSON', 'product_photo/religious/ISBN_R4.jpg', 'BELIEFS AND PRACTICES IN THE HISTORICAL PERSPECTIVES', 0, 'religious', 0, 'Carole Hillenbrand, long acknowledged as a preeminent authority on Islam, has now written a superb introduction to this great world religion, a book that promises to be the most lucid, nuanced text of its kind on the market. Beginning with the life of Muhammad, Hillenbrand firmly establishes in historical and global context the beliefs and ideals of Muslims and the branches and movements within the faith.'),
(6, 'ISBN_R5', 'HOLY SCRIPTURES - TRANSLATION', 'KATIE VANDENBERG', '', 950, '', 'product_photo/religious/ISBN_R5.jpg', '', 0, 'religious', 0, ''),
(7, 'ISBN_R6', 'THE LOTUS SUTRA', 'GENE REEVES', '', 1200, '', 'product_photo/religious/ISBN_R6.jpg', 'A COMTEMPORARY TRANSLATION OF A BUDDHIST CLASSIC', 0, 'religious', 1, 'The Lotus S?tra is one of the most popular and influential Mahayana sutras, and the basis on which the Tiantai, Tendai, Cheontae, and Nichiren schools of Buddhism were established.'),
(8, 'ISBN_R7', 'THE GOD DELUSION', 'RICHARD DAWKINS', '', 1200, '', 'product_photo/religious/ISBN_R7.jpg', '', 0, 'religious', 0, 'The God Delusion is a 2006 best-selling non-fiction book by English biologist Richard Dawkins, a professorial fellow at New College, Oxford and former holder of the Charles Simonyi Chair for the Public .'),
(9, 'ISBN_R8', 'JOURNEY INTO AMERICA', 'AKBAR AHMED', '', 1755, '', 'product_photo/religious/ISBN_R8.jpg', 'THE CHALLENGE OF ISLAM', 0, 'religious', 0, 'Nearly seven million Muslims live in the United States today, and their relations with non-Muslims are strained. Many Americans associate Islam with figures such as Osama bin Laden, and they worry about \"homegrown terrorists.\" To shed light on this increasingly important religious group and counter mutual distrust, renowned scholar Akbar Ahmed conducted the most comprehensive study to date of the American Muslim community.'),
(10, 'ISBN_R9', 'MAN ALIVE', 'PATRICK MORLEY', '', 665, '', 'product_photo/religious/ISBN_R9.jpg', 'BEST SELLING AURTHOR OF THE MAN IN THE MIRRORS', 0, 'religious', 1, 'Over the last four decades, I’ve met one-on-one with thousands of men. Most of them know that Jesus promised “a rich and satisfying life” (John 10:10), but too many are confused about what that looks like. In fact, I’d estimate that 90 percent of Christian men lead lukewarm, stagnant, defeated lives—and they hate it.'),
(11, 'ISBN_R11', 'THE ADI GRANTH', 'DR. ERNEST TRUMPP', '', 550, '', 'product_photo/religious/ISBN_R11.jpg', 'THE HOLY SCRICPUTER OF SIKHS', 0, 'religious', 0, 'The Adi Granth is the most sacred book of the Sikhs. Literally meaning the `First Book,\' it is also reverentially called the Granth Sahib and is regarded as the authoritative scriptural work. The compilation of the Adi Granth was done by the fifth Sikh guru, Arjan, in AD 1603 and contains, besides his own writings, the compositions of the four predecessors, the gurus, Nanak, Angad, Amardas and Ramdas. '),
(12, 'ISBN_R12', 'THE FAKINS', 'RUZBEH N. BHARUCHA', '', 1200, '', 'product_photo/religious/ISBN_R12.jpeg', '', 0, 'religious', 1, ''),
(13, 'ISBN_R13', 'THE PHENOMENON OF RELIGION', 'MOOJAN MOMEN', '', 1100, '', 'product_photo/religious/ISBN_R13.jpg', 'A THEMATIC APPROACH', 0, 'religious', 0, 'An innovative, thematic presentation of the role of religion in human society, from traditional cultures to the modern world, this comprehensive account will prove invaluable for students, experts or the interested general readers seeking an understanding of the nature and significance of diverse religious experience.'),
(14, 'ISBN_R10', 'OPENING THE QURAN', 'W.H. WANGNER', '', 900, '', 'product_photo/religious/ISBN_R10.jpg', 'INTRODUCING ISLAMS HOLY BOOK', 0, 'religious', 0, 'Opening the Qur\'an can be a bewildering experience to non-Muslim, English-speaking readers. Those who expect historical narratives, stories, or essays on morals are perplexed once they pass the beautiful first Surah, often shocked and then bogged down by Surah 2, and even offended by Surah 3’s strictures against nonbelievers.');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `ID` int(11) NOT NULL,
  `ISBN_number` varchar(10) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Author` varchar(225) NOT NULL,
  `Edition` varchar(100) DEFAULT NULL,
  `Price` int(5) UNSIGNED NOT NULL,
  `Publication` varchar(100) DEFAULT NULL,
  `CoverPic` varchar(200) DEFAULT NULL,
  `SearchKey` varchar(225) DEFAULT NULL,
  `Stock` int(2) DEFAULT '0',
  `Genre` varchar(10) NOT NULL DEFAULT 'science',
  `Dtimes` int(100) NOT NULL DEFAULT '0',
  `Synopsis` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`ID`, `ISBN_number`, `Name`, `Author`, `Edition`, `Price`, `Publication`, `CoverPic`, `SearchKey`, `Stock`, `Genre`, `Dtimes`, `Synopsis`) VALUES
(1, 'ISBN_S1', 'BASIC CHEMISTRY', 'TIMBERLAKE $amp; TIMBERLAKE', '', 425, '', 'product_photo/science/ISBN_S1.jpg', '', 0, 'science', 0, ' Basic Chemistry, Third Edition gives you the problem-solving tools and techniques you\'ll need to succeed in future chemistry courses and in the work force. In a clear, friendly writing style, Timberlake continues to make chemistry relevant and engaging. Her unique “Guide to Problem-Solving” strategy provides a visual, step-by-step plan that helps to solve a wide variety of problems.'),
(2, 'ISBN_S2', 'BASIC PHYSICS', 'KARL F. KUHN', 'SECOND', 550, 'WILEY', 'product_photo/science/ISBN_S2.jpg', '', 0, 'science', 0, 'The fast, easy way to master the fundamentals of physics\r\nHere is the most practical, complete, and easy-to-use guide available for understanding physics and the physical world. '),
(3, 'ISBN_S3', 'BULETPROOF WEB DESIGN', 'DAN CEDERHOLM', 'SECOND', 775, '', 'product_photo/science/ISBN_S3.jpg', '', 0, 'science', 0, 'No matter how visually appealing or content-packed a Web site may be, if it\'s not adaptable to a variety of situations and reaching the widest possible audience, it isn\'t really succeeding. In Bulletproof Web Desing, author and Web designer extraordinaire, Dan Cederholm outlines standards-based strategies for building designs that provide flexibility, readability, and user control--key components of every sucessful site.'),
(4, 'ISBN_S4', 'DIGITAL LOGIC & COMPUTER DESIGN', 'M. MORRIS MANOV', '', 525, 'PEARSON', 'product_photo/science/ISBN_S4.jpeg', 'ALWAYS LEARNING', 0, 'science', 0, 'This book presents the basic concepts used in the design and analysis of digital systems and introduces the principles of digital computer organization and design.'),
(5, 'ISBN_S5', 'DIGITAL LOGIC DESIGN', 'TAN TUCK CHOY &amp; AARYN', 'SECOND', 335, '', 'product_photo/science/ISBN_S5.jpg', '', 0, 'science', 1, ''),
(6, 'ISBN_S6', 'DISCRETE MATHEMATICS', 'ROWAN GARNIER &amp; JOHN TAYLOR', 'THIRD', 750, 'CRC PRESS', 'product_photo/science/ISBN_S6.jpg', 'PROOFS, STRUCTURES &amp; APPLICATIONS', 0, 'science', 1, 'Taking an approach to the subject that is suitable for a broad readership, Discrete Mathematics: Proofs, Structures, and Applications, Third Edition provides a rigorous yet accessible exposition of discrete mathematics, including the core mathematical foundation of computer science. '),
(7, 'ISBN_S7', 'EXTREME SCIENCE FRICTION', 'MIKE ASHLEY', '', 875, '', 'product_photo/science/ISBN_S7.jpg', 'NEW GENERATION FAR-FUTURE SF', 0, 'science', 0, 'The Mammoth Book of Extreme Science Fiction is a science fiction anthology edited by Mike Ashley, originally published in 2006 in the United Kingdom by Robinson, an imprint of Constable & Robinson Ltd.'),
(9, 'ISBN_S9', 'MEDICAL PHYSIOLOGY', 'GUYTON &amp; HALL', 'ELEVENTH', 3675, 'ELSEVIER', 'product_photo/science/ISBN_S9.jpg', '', 0, 'science', 0, 'All of the essential information you need from the world’s foremost medical physiology textbook – right in your pocket! '),
(11, 'ISBN_S11', 'THE HUNGER GAMES', 'SUZANNE COLLINS', '', 635, '', 'product_photo/science/ISBN_S11.jpg', 'NEW YORK TIMES BESTSELLING AUTHOR', 0, 'science', 0, 'The Hunger Games is a trilogy of young adult dystopian novels written by American novelist Suzanne Collins. The series is set in The Hunger Games universe, and follows young characters Katniss Everdeen and Peeta Mellark.'),
(12, 'ISBN_S12', 'TEXTBOOK OF MICROBIOLOGY', 'ANANTHANARAYAN &amp; PANIKER', 'NINTH', 1100, '', 'product_photo/science/ISBN_S12.jpg', '', 0, 'science', 1, 'In This New Edition, The Classic Textbook Has Been Relevant New Information And All Chapters Have Been Thoroughly Revised And Updated. It Contains Current Material On Hiv, Hepatitis Virus, Sars, Coronavirus, Bird Flud Virus And Many Of The New Agents Responsible For Human Infections. The Epidemological Patterns Have Been Redescribed And Updated.'),
(13, 'ISBN_S13', 'STATISTICS &amp; PROBABILITY', 'RENE R. BELENCINA , ELISA S. BACCAY &amp;EFREN B. MATEO', '2016', 425, 'CORE', 'product_photo/science/ISBN_S13.jpg', '', 0, 'science', 0, ''),
(14, 'ISBN_S14', 'ROBBINS BASIC PATHOLOGY', 'KUMAR , ABBAS &amp; ASTR', 'NINTH', 8000, 'ELSEVIER', 'product_photo/science/ISBN_S14.jpg', 'STUDY SMART WITH STUDENT CONSULT', 0, 'science', 0, 'Aimed at medical and other health science students, this book includes up-to-date coverage of such topics as AIDS, cell growth, control and repair, immunologic diseases, and modern genetic concepts. It also discusses diseases of the heart, blood vessels, pancreas, and nervous system.'),
(15, 'ISBN_S15', 'PRINCIPLE OF PHYSICS', 'GEARL WALKER, DAVID HALLIDAY &amp; ROBERT RESNICK', 'TENTH', 800, 'WILEY', 'product_photo/science/ISBN_S15.jpg', 'INTERNATIONAL STUDENT VERSION', 0, 'science', 0, 'The new edition of the best-selling, calculus-based introductory Physics text.\r\nRobust online homework system includes ALL end of chapter problems in the book plus more online\r\nChapters were restructured into modules based on a primary concept.'),
(16, 'ISBN_S16', 'PHP AND MySQL WEB DEVELOPMENT', 'L. WELLING &amp; L. THOMSON', 'FOURTH', 650, '', 'product_photo/science/ISBN_S16.jpg', '', 0, 'science', 0, 'PHP and MySQL Web Development teaches the reader to develop dynamic, secure, commercial Web sites. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `literature`
--
ALTER TABLE `literature`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ISBN_number` (`ISBN_number`);

--
-- Indexes for table `religious`
--
ALTER TABLE `religious`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ISBN_number` (`ISBN_number`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ISBN_number` (`ISBN_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arts`
--
ALTER TABLE `arts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `literature`
--
ALTER TABLE `literature`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `religious`
--
ALTER TABLE `religious`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `science`
--
ALTER TABLE `science`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
