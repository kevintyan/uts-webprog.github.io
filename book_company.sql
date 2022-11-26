-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 09:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `synopsis` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `publisher_id`, `title`, `author`, `year`, `synopsis`, `image`) VALUES
('B001', 'P002', 'Classroom of the Elite', 'Shogo Kinugasa', 2015, 'It focuses on everyday life of the highest-level high school and there are highly intelligent students in the school including the protagonist Kiyotaka Ayanokoji. Each class fights with others with a variety of mind games. The following story, which started from 2020, begins after Kiyotaka and his classmates go to the second grade.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Classroom-of-the-Elite.jpg'),
('B002', 'P001', 'My Youth Romantic Comedy Is Wrong, As I Expected', 'Wataru Watari', 2011, 'It depicts the high school life of the pessimistic boy Hachiman Hikigaya and his school service club members including the heroine Yukino Yukinoshita.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/My-Youth-Romantic-Comedy-Is-Wrong-As-I-Expected.jpg'),
('B003', 'P003', 'Overlord', 'Kugane Maruyama', 2012, 'Shosetsuka ni Naro from 2012. Momonga, the player of VRMMORPG (Virtual Reality Massively Multiplayer Online Role Playing Game) named YGGDRASIL, finds out he is transported to the different world from YGGDRASIL as the game character called Ainz Ooal Gown.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Overlord.jpg'),
('B004', 'P001', 'Goblin Slayer', 'Kumo Kagyu', 2016, 'The main character Goblin Slayer is the soldier who takes his life on hunting goblins. The manga and anime adaptions have been made for its popularity.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Goblin-Slayer.jpg'),
('B005', 'P002', 'Didnt I Say To Make My Abilities Average In The Next Life?!', 'FUNA', 2016, 'A high school girl Misato is killed in a traffic accident and is born again in the parallel world as a teenage girl named Adele. She finds out that she has a much more powerful abilities than average while she asks to make her abilities just average.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Didn%E2%80%99t-I-Say-To-Make-My-Abilities-Average-In-The-Next-Life.jpg'),
('B006', 'P003', 'Katanagatari (Sword Tale)', 'Nisio Isin', 2007, 'The historical story is set in the fictional Japan around the Edo period. The protagonist Shichika Yasuri begins his journey to collect the 12 legendary swords fighting the owners and other enemies.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Katanagatari.jpg'),
('B007', 'P003', 'The Rising of the Shield Hero', 'Aneko Yusagi', 2012, 'The university student Naofumi Iwatani is suddenly transported to the fantasy world and given a role as the Shield Hero. There are three other heroes in the same situation, but they have offensive weapons such as sword, lance and arrow. The Shield Hero manages to fight enemies with the defensive shield.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/The-Rising-of-the-Shield-Hero.jpg'),
('B008', 'P001', 'Arifureta: From Commonplace to Worlds Strongest', 'Ryo Shirakome', 2013, 'A nerdy high school boy Hajime Nagumo is summoned to the fantasy world with his classmates. He is represented as an antihero or dark hero in the story.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Arifureta-From-Commonplace-to-World%E2%80%99s-Strongest.jpg'),
('B009', 'P002', 'Spice and Wolf', 'Isuna Hasekura', 2006, 'The setting is the fictional world that is inspired by the medieval Europe and the story focuses on the two main characters. A traveling merchant Kraft Lawrence encounters various incidents on his trip with the wolf personified Holo who looks like a human-wolf hybrid.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Spice-and-Wolf.jpg'),
('B010', 'P001', 'Death March to the Parallel World Rhapsody', 'Hiro Ainana', 2013, 'A 29 years old gaming programmer named Ichiro Suzuki works too hard and has a nap in the office. He wakes up to become aware that he is in the of the role-playing game that he is making.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Death-March-to-the-Parallel-World-Rhapsody.jpg'),
('B011', 'P002', 'That Time I Got Reincarnated as a Slime', 'Fuse', 2014, 'Main characters are reborn in the different fictional world as a human, but the protagonist of That Time I Got Reincarnated as a Slime is Reincarnated as a slime named Rimuru.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/That-Time-I-Got-Reincarnated-as-a-Slime.jpg'),
('B012', 'P003', 'Is It Wrong to Try to Pick Up Girls in a Dungeon?', 'Fujino Omori', 2013, 'The setting is the fantasy world Orario where there are lots of underground labyrinth known as Dungeon. The main character Bell visits Dungeons to live from day to day and get stronger, and then he falls in love with the powerful swordswoman Ais.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Is-It-Wrong-to-Try-to-Pick-Up-Girls-in-a-Dungeon.jpg'),
('B013', 'P001', 'The Irregular at Magic High School', 'Kana Ishida', 2008, 'The ongoing sci-fi novel has the theme of magic in the fictional Japan. The story centers on the two students in First High School: the brother Tatsuya and his little sister Miyuki.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/The-Irregular-at-Magic-High-School.jpg'),
('B014', 'P001', 'Zaregoto Series', 'Nisio Isin', 2002, 'The main character “I” and his friend Timo Kunagiza meet a variety of unique characters and get involved in lots of incidents.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Decapitation-Kubikiri-Cycle.jpg'),
('B015', 'P003', 'Konosuba: Gods Blessing on This Wonderful World!', 'Natsume Akatsuki', 2012, 'The Isekai comedy light novel, which can be also looked on as the Naro genre, features the 4 main characters: Kazuma, Aqua, Darkness and Megumin. Kazuma, who dies in an accident when he is a high schooler, is sent to the fantasy world with the goddess Aqua.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Konosuba-God%E2%80%99s-Blessing-on-This-Wonderful-World.jpg'),
('B016', 'P003', 'Toradora!', 'Yuyuko Takemiya', 2006, 'In the story, everyday and romance of the high schoolers Ryuji, Taiga and their friends with comedy. On the other hand, they have lots of problems in their lives such as family problems of the heroine Taiga.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Toradora.jpg'),
('B017', 'P001', 'Kinos Journey -the Beautiful World-', 'Keiichi Sigsawa', 2000, 'The adventure novel focuses on a teen girl named Kino who travels around the world with a talking motorcycle named Hermes. She visits a variety of fictional counties that have unique customs and social systems. Each episode stands alone, which has a kind of allegoricalness.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Kino%E2%80%99s-Journey-the-Beautiful-World-.jpg'),
('B018', 'P002', 'No Game No Life', 'Yu Kamiya', 2012, 'It follows 18-year-old boy named Sora and his 11 years old sister-in-law named Shiro, who are undefeated gamers with high intelligence. They are transported to Isekai (another world) and fight various unique games there.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/No-Game-No-Life.jpg'),
('B019', 'P001', 'Rascal Does Not Dream of Bunny Girl Senpai', 'Hajime Kamoshida', 2014, 'the first title of the recent popular light novel series published from 2014. In the story, lots of strange supernatural events happen around the main character Sakuta and people around him including his family and classmates. Those things are often caused by their psychological problems.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Rascal-Does-Not-Dream-of-Bunny-Girl-Senpai.jpg'),
('B020', 'P003', 'Re:ZERO -Starting Life in Another World-', 'Tappei Nagatsuki', 2012, 'Re:Zero -Starting Life in Another World- is set in the parallel world where the main character Subaru Natsuki is sent for any reason. He is transported to another world but is not granted any powerful ability while a main character of many Isekai light novels gets something special.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Re-ZERO-Starting-Life-in-Another-World-.jpg'),
('B021', 'P002', 'Spice and Wolf', 'Isuna Hasekura', 2006, 'The setting is the fictional world that is inspired by the medieval Europe and the story focuses on the two main characters. A traveling merchant Kraft Lawrence encounters various incidents on his trip with the wolf personified Holo who looks like a human-wolf hybrid.', 'https://jw-webmagazine.com/wp-content/uploads/2020/07/Spice-and-Wolf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book__categories`
--

CREATE TABLE `book__categories` (
  `bc_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book__categories`
--

INSERT INTO `book__categories` (`bc_id`, `book_id`, `category_id`) VALUES
('BC001', 'B001', 'C004'),
('BC002', 'B002', 'C003'),
('BC003', 'B003', 'C005'),
('BC004', 'B004', 'C001'),
('BC005', 'B005', 'C002'),
('BC006', 'B006', 'C001'),
('BC007', 'B007', 'C002'),
('BC008', 'B008', 'C003'),
('BC009', 'B009', 'C004'),
('BC010', 'B010', 'C005'),
('BC011', 'B011', 'C001'),
('BC012', 'B012', 'C003'),
('BC013', 'B013', 'C001'),
('BC014', 'B014', 'C002'),
('BC015', 'B015', 'C004'),
('BC016', 'B016', 'C005'),
('BC017', 'B017', 'C002'),
('BC018', 'B018', 'C001'),
('BC019', 'B019', 'C003'),
('BC020', 'B020', 'C003'),
('BC021', 'B021', 'C005'),
('BC022', 'B019', 'C004'),
('BC023', 'B020', 'C005');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
('C001', 'Comedy'),
('C002', 'Adventure'),
('C003', 'Romance'),
('C004', 'Drama'),
('C005', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_25_160905_create_categories_table', 1),
(6, '2022_11_25_164116_create_publishers_table', 1),
(7, '2022_11_25_170957_create_books_table', 1),
(8, '2022_11_25_173746_create_book_category_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `name`, `address`, `phone`, `email`, `image`) VALUES
('P001', 'Penerbit Haru', 'Jl. Sulawesi No.17, Nurmanan, Mangkujayan, Ponorogo, Jawa Timur', '(0352) 481444', 'penerbitharu@gmail.com', 'http://www.penerbitharu.com/upload/logo.png'),
('P002', 'Penerbit Gramedia Pustaka Utama', 'Gedung Kompas Gramedia Lantai 5, Jl. Palmerah Barat 29-37. Jakarta 10270', '(021) 5347710', 'customercare@gramedia.com', 'https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2022/02/02083934/Gramedia-World-Karawang.png'),
('P003', 'Penerbit Erlangga', 'Jl. H. Baping Raya No. 100 Ciracas Jakarta 13740', '(021) 8717006', 'support@erlangga.co.id', 'https://upload.wikimedia.org/wikipedia/id/5/5b/Esis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`);

--
-- Indexes for table `book__categories`
--
ALTER TABLE `book__categories`
  ADD PRIMARY KEY (`bc_id`),
  ADD KEY `book__categories_book_id_foreign` (`book_id`),
  ADD KEY `book__categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);

--
-- Constraints for table `book__categories`
--
ALTER TABLE `book__categories`
  ADD CONSTRAINT `book__categories_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `book__categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
