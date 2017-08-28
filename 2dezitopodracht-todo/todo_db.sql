-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 aug 2017 om 16:41
-- Serverversie: 10.1.25-MariaDB
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_01_172110_create_posts_table', 1),
(4, '2017_08_01_204400_create_todos_table', 2),
(5, '2017_08_02_104019_add_userid_to_todo', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Post One', 'this is the post body', '2017-08-01 15:27:49', '2017-08-01 15:27:49'),
(2, 'Post Two', 'This is post twowowowo', '2017-08-01 15:29:19', '2017-08-01 15:29:19'),
(3, 'Posty McPostface', 'Post post post', '2017-08-01 19:56:13', '2017-08-01 19:56:13');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `todos`
--

CREATE TABLE `todos` (
  `id` int(10) UNSIGNED NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `todos`
--

INSERT INTO `todos` (`id`, `completed`, `body`, `created_at`, `updated_at`, `user_id`) VALUES
(19, 1, 'test', '2017-08-02 08:30:44', '2017-08-02 08:30:46', 1),
(21, 0, 'arteaukloon todo', '2017-08-02 08:46:53', '2017-08-02 08:46:56', 2),
(24, 0, 'Test', '2017-08-02 09:36:30', '2017-08-02 09:36:30', 4),
(31, 1, 'Boeken lezen', '2017-08-04 12:34:58', '2017-08-04 12:35:01', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arteau', 'test@test.be', '$2y$10$oY6w6RdhC/JlVXrVrhj/suvaJxxO0SFk2ZdawkUecpuoOs.fW0ILi', 'MH2QxkCuP6llgkWUKLftZnbP93HdaRixnYdzjvcSwhrXjWfv5byhIINoct22', '2017-08-02 08:32:19', '2017-08-02 08:32:19'),
(2, 'ArteauKloon', 'arteaudemeester@gmail.com', '$2y$10$4tkXcXs9cmCOON4NIjLyUOe8.4kjs3m8JARU15ytbbWtJh7bXPTWa', 'bLIuDoJMZCIxoUWyBdsc55Go6UcwGbEZ6k1lJhIkdnNsm5IvhLNLIgTZ6ptM', '2017-08-02 08:46:34', '2017-08-02 08:46:34'),
(3, 'arteau', 'arteau@arteau.arteau', '$2y$10$4v4KTyvk8EeD.qx7Om/dD.7bpad2GoqmNaKmnA.d4.UI8TmpQ/fjy', 'DGpd8hqopbBrOKYqIOalpsL6ixON0HYE239zGkoVLzLy622wzII2d3HsH5q8', '2017-08-02 09:28:06', '2017-08-02 09:28:06'),
(4, 'test', 'test@test.test', '$2y$10$XobeWvEMELvNELmAN622p.629dL4PsCs7PutqkDvAT7M2Wt5V7Emq', 'ps4mVfcKYmacfDtf9F9sSOkmIjvJXjnI2DBcFsqFdJRnsOCNka4awcl2zEKV', '2017-08-02 09:36:25', '2017-08-02 09:36:25'),
(5, 'Ruth', 'ruth@ruth.ruth', '$2y$10$8pu4MsV5UdZ1BSSX29xfJ.qclvaOS/MYStS0TmPngDAL7R4pxiWOe', 'vwUllEUsQDr5vbAK0mkT3TiebURyPO9OOlqQljXEf0OxYWqLd0mxHJkOiVDG', '2017-08-04 12:34:52', '2017-08-04 12:34:52');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
