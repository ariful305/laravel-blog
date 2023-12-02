-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2023 at 07:04 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 'html', 'The Hypertext Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', '2022-08-29 02:00:53', '2022-08-29 02:00:53'),
(2, 'CSS', 'css', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', '2022-08-29 02:01:16', '2022-08-29 02:01:16'),
(3, 'JavaScript', 'javascript', 'JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for webpage behavior, often incorporating third-party libraries.', '2022-08-29 02:01:36', '2022-08-29 02:01:36'),
(4, 'PHP', 'php', 'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.', '2022-08-29 02:02:05', '2022-08-29 02:02:05'),
(5, 'WordPress', 'wordpress', 'WordPress is a free and open-source content management system written in PHP and paired with a MySQL or MariaDB database with supported HTTPS. Features include a plugin architecture and a template system, referred to within WordPress as Themes.', '2022-08-29 02:02:38', '2022-08-29 02:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Addison Serrano', 'gekeduli@mailinator.com', 'Voluptas consequuntu', 'Ullam itaque rerum i', '2022-09-02 08:23:45', '2022-09-02 08:23:45'),
(2, 'Yolanda Sears', 'admin@example.com', 'In sint optio ab pr', 'fafasfasfas\"\"', '2022-09-02 08:36:17', '2022-09-02 08:36:17'),
(3, 'Dante Kent', 'gecovapogy@mailinator.com', 'Non consequatur por', 'Possimus sint rerum', '2022-09-02 08:52:42', '2022-09-02 08:52:42'),
(4, 'Shana Cleveland', 'dusoxuxy@mailinator.com', 'Expedita magni non i', 'Eos expedita dolorum', '2022-09-02 08:55:36', '2022-09-02 08:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_08_27_093256_create_categories_table', 1),
(5, '2022_08_29_074227_create_tags_table', 1),
(6, '2022_08_31_040115_create_posts_table', 2),
(7, '2022_08_31_074511_create_post_tag_table', 3),
(8, '2022_09_02_135640_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `description`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Best Template Website For HTML CSS', 'best-template-website-for-html-css', '/storage/post/1661935727.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem tellus, sollicitudin nec orci sed, scelerisque consectetur quam. Nulla eu quam non diam maximus feugiat. Sed placerat sollicitudin ex euismod faucibus. Aliquam ultricies finibus elit, in pellentesque nunc mattis eu. Nullam leo arcu, ullamcorper in eros ac, aliquet tincidunt elit. Nunc tristique elit sed lectus tristique, at consequat metus tempus. Integer nec tempus enim. Nam elementum finibus risus eu tincidunt. Fusce hendrerit pulvinar nunc, eget tempor erat consectetur nec.\r\n\r\nIn hac habitasse platea dictumst. Proin viverra magna nisi, eget porta urna dictum pellentesque. Fusce dolor orci, auctor vitae consectetur vitae, ullamcorper scelerisque erat. Suspendisse elit purus, tincidunt in varius sed, fringilla vel tortor. Morbi pellentesque velit tellus, non mollis urna varius quis. Sed vulputate lectus a lorem maximus, non porttitor est ultricies. Nunc sit amet magna vel odio euismod vestibulum et quis leo. Ut sit amet leo sed turpis faucibus porta vel non sem. Vivamus pharetra quis diam vitae commodo. Praesent pretium, quam nec rutrum mollis, tellus lorem suscipit velit, vel sagittis leo ante nec neque. Nam vel laoreet ipsum, ut tempor urna. Nunc pulvinar risus eu mauris mattis egestas. Donec quis consectetur est. Proin lobortis at nulla non ultricies.\r\n\r\nMaecenas bibendum sed nulla aliquet vestibulum. Proin tempor felis at leo consectetur imperdiet efficitur a purus. Cras scelerisque purus vel pretium pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas laoreet arcu eget risus accumsan, eget pharetra massa euismod. Praesent a volutpat enim. Cras eget rhoncus quam, id ullamcorper mi. Sed sit amet hendrerit risus. Aliquam erat volutpat.\r\n\r\nNunc venenatis elit id posuere interdum. Integer iaculis sed enim nec imperdiet. Vestibulum dictum mauris convallis dui eleifend varius. Proin hendrerit at mauris id vehicula. Curabitur dolor enim, gravida quis risus hendrerit, convallis sodales sapien. In congue ipsum in vestibulum ullamcorper. Curabitur condimentum eros dolor, quis consequat tortor volutpat ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;\r\n\r\nSed felis purus, interdum vitae elit vel, gravida dictum enim. Pellentesque iaculis ex at mi interdum, in ultricies libero ultrices. Maecenas felis ligula, luctus at egestas sit amet, dictum vitae quam. Pellentesque non eros quis libero fermentum suscipit gravida a augue. Ut eu arcu in sapien egestas tincidunt. Vivamus ac eros urna. Mauris condimentum, lacus ut feugiat maximus, ex lorem elementum nibh, et cursus ipsum mi vitae turpis. Etiam blandit nisl risus, eget pharetra neque mattis non. Donec scelerisque orci in risus pulvinar, et condimentum quam feugiat. Aenean ultrices, est a convallis scelerisque, nulla justo fermentum turpis, vel mollis arcu nibh et eros. Nam dictum risus elementum, egestas dolor quis, rutrum ante. Proin aliquam nisi pretium ante finibus, ut egestas ex auctor. Etiam mauris leo, ultricies id magna at, efficitur aliquet lacus. Praesent eget convallis tortor.', 1, 1, '2022-08-31 02:48:47', '2022-08-31 02:48:47'),
(8, 'Vitae voluptate fugi', 'vitae-voluptate-fugi', '/storage/post/1661961754.jpg', 'Culpa, dolorum quis pariatur? Rerum est deserunt dolore eos quidem omnis necessitatibus ullam et voluptatem deserunt qui quo facilis qui architecto ea dolor quis hic quibusdam deserunt modi itaque id similique aut excepteur rerum cupidatat earum aut in dolore et dolorem minim rem voluptates odit quis amet, voluptatum non voluptatem ipsam aliquam nu.', 5, 1, '2022-08-31 10:02:34', '2022-08-31 10:02:34'),
(9, 'Elit ea velit bland', 'elit-ea-velit-bland', '/storage/post/1661961772.jpg', 'Consectetur irure nostrud vitae mollitia provident, veniam, pariatur. Consectetur in earum sit assumenda dolor sunt, fugiat, officiis facilis ea autem ex dolor ut expedita eum ea accusantium adipisci dolorem quidem placeat, dolor anim temporibus tempora tempor atque laboris quia accusantium consequatur incididunt culpa, autem consectetur esse, enim.', 2, 1, '2022-08-31 10:02:51', '2022-08-31 10:02:52'),
(10, 'Ea non ut voluptatib', 'ea-non-ut-voluptatib', '/storage/post/1661961784.jpg', 'Non et recusandae. Qui lorem nobis reprehenderit nobis sed vel quia in recusandae. Alias soluta quis id voluptas iusto similique id, duis quos et ex impedit, quae in elit, dicta dicta omnis tempore, tempor et hic sunt dolor ab consequatur labore ducimus, est laudantium, aliquip dolore enim Nam adipisci reiciendis nihil illum, porro et doloribus vol.', 2, 1, '2022-08-31 10:03:04', '2022-08-31 10:03:04'),
(12, 'Consectetur non temp', 'consectetur-non-temp', '/storage/post/1662035208.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis accumsan arcu, nec dignissim enim. Suspendisse sagittis metus ut felis finibus, id bibendum lectus rhoncus. Etiam elementum ligula at nulla interdum, non posuere lorem pharetra. Vestibulum gravida luctus imperdiet. Etiam mattis feugiat velit, non tristique tortor hendrerit eu. Suspendisse ac ex tellus. Aliquam erat volutpat. Nullam dignissim sodales est, accumsan semper felis. Nulla facilisi. Ut sapien lectus, euismod vitae ipsum ac, accumsan convallis augue. Donec urna elit, lacinia sit amet odio vel, hendrerit accumsan justo. In ac justo id sapien hendrerit viverra. Morbi ornare eleifend lectus sit amet dictum. Quisque lacinia lectus et fermentum gravida. Donec mauris tellus, sodales vel arcu sed, iaculis posuere quam.\r\n\r\nMauris cursus arcu et tincidunt dapibus. Curabitur ante tellus, condimentum et eros dapibus, ornare cursus enim. Maecenas id vulputate elit. Ut finibus lacus ut euismod bibendum. Donec rutrum condimentum finibus. Curabitur aliquam maximus mollis. Sed nec sapien justo. Vivamus varius dolor sit amet sapien faucibus lacinia. Aenean maximus dapibus felis in elementum. Aenean non libero ullamcorper justo commodo ultricies. Ut quis suscipit justo, in lacinia elit. Vestibulum porta in turpis at tincidunt. Quisque fermentum dui sed vulputate hendrerit. Nam pulvinar magna nisl. Aenean condimentum risus ut elementum vehicula.\r\n\r\nVestibulum vel ante sed nunc iaculis porttitor. Phasellus rutrum libero felis. Phasellus cursus, enim eget ullamcorper euismod, libero diam finibus magna, ac placerat nunc urna sed ipsum. Phasellus convallis mauris vitae tellus accumsan, a varius quam aliquam. Mauris sagittis nunc eu ipsum eleifend condimentum. Proin in mi quis ipsum cursus porta. Maecenas sit amet auctor ex. Sed fermentum quam et dui tincidunt faucibus. Duis volutpat eleifend hendrerit.\r\n\r\nMauris ut pulvinar purus. Mauris blandit justo ipsum, nec consectetur lorem elementum eget. In ultricies ullamcorper massa, a auctor purus pellentesque sed. Suspendisse ante mi, accumsan nec venenatis eu, vestibulum quis neque. Nulla at sem turpis. Sed faucibus auctor massa, id venenatis turpis condimentum a. Quisque in sagittis ex. Ut volutpat mollis sodales. Maecenas ut efficitur arcu.\r\n\r\nCurabitur vestibulum magna nec condimentum scelerisque. Mauris in tincidunt enim. Aenean eu tortor tincidunt, convallis eros nec, mollis nisi. Donec gravida pretium ex. Nunc non auctor massa. Proin volutpat consectetur eros, eu consectetur sem suscipit sit amet. Morbi pulvinar id purus non pharetra. Curabitur a tellus quis nisi mollis mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec finibus varius urna, tincidunt accumsan tortor interdum eu. Nam pharetra fermentum massa id facilisis. Curabitur ut accumsan odio. Suspendisse id neque non urna egestas egestas eu a ex. Proin quis purus diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;', 2, 1, '2022-09-01 06:26:48', '2022-09-02 23:41:34'),
(13, 'Ad magnam suscipit n', 'ad-magnam-suscipit-n', '/storage/post/1663046522.jpg', 'Sunt laboriosam, unde sint, omnis modi recusandae. Nobis id, ea dolor quia perspiciatis, voluptatibus dolor voluptate consequatur id, molestias fuga. Adipisci numquam eu vitae eos deserunt in distinctio. Iure ea quod ab eum adipisicing voluptas architecto nisi beatae possimus, quia incididunt minus et nisi Nam aliquip quas placeat, ut possimus, per.', 5, 1, '2022-09-13 09:22:02', '2022-09-13 09:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(2, 1),
(2, 2),
(3, 6),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(4, 6),
(5, 1),
(5, 2),
(5, 3),
(5, 6),
(6, 1),
(6, 2),
(6, 3),
(6, 6),
(8, 3),
(8, 6),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 3),
(12, 1),
(12, 2),
(12, 6),
(13, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'html template', 'html-template', NULL, '2022-08-29 03:34:31', '2022-08-29 03:34:31'),
(2, 'css template', 'css-template', NULL, '2022-08-29 03:37:20', '2022-08-29 03:37:20'),
(3, 'bootstrap template', 'bootstrap-template', NULL, '2022-08-29 03:37:30', '2022-08-29 03:37:30'),
(6, 'Laravel blog template', 'laravel-blog-template', NULL, '2022-08-29 03:40:20', '2022-08-29 03:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$JUXP2nGpfOxssiA4VIIdh.CYsIYIi3d1ro7tPuFLxhCqiTmRPPIEm', 'ZPylHll2gk3kLo17VTiQibK572SpUgcRaPmnTQ7QryQwK9nl9lJmHRnqeuCJ', '2022-08-29 01:50:10', '2022-08-29 01:50:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
