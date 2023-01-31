-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 Oca 2023, 09:19:13
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `trapp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bonuses`
--

CREATE TABLE `bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `type` enum('daily','monthly','weekly') NOT NULL,
  `min_point` int(11) NOT NULL,
  `max_point` int(11) NOT NULL,
  `fix_tl` int(11) NOT NULL,
  `min_tl` int(11) NOT NULL,
  `bonus_tl` int(11) NOT NULL,
  `multiplier` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `bonuses`
--

INSERT INTO `bonuses` (`id`, `project_id`, `type`, `min_point`, `max_point`, `fix_tl`, `min_tl`, `bonus_tl`, `multiplier`, `start_date`, `end_date`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 2, 'monthly', 825, 1074, 0, 1650, 50, 25, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:34:58'),
(2, 2, 'monthly', 1075, 1124, 0, 2150, 0, 0, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(3, 2, 'monthly', 1125, 1374, 1000, 2250, 50, 25, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(4, 2, 'monthly', 1375, 1424, 1000, 2750, 0, 0, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(5, 2, 'monthly', 1425, 1674, 2000, 2900, 50, 25, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(6, 2, 'monthly', 1675, 1724, 2000, 3500, 0, 0, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(7, 2, 'monthly', 1725, 1974, 3000, 3700, 200, 25, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(8, 2, 'monthly', 1975, 2024, 4000, 5700, 0, 0, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(9, 2, 'monthly', 2025, 2274, 4000, 5900, 200, 25, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(10, 2, 'monthly', 2275, 2324, 4000, 7900, 0, 0, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(11, 2, 'monthly', 2325, 2500, 5000, 8100, 200, 25, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 15:44:47'),
(12, 1, 'monthly', 50, 59, 250, 1000, 25, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(13, 1, 'monthly', 60, 69, 500, 2000, 50, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(14, 1, 'monthly', 70, 79, 750, 3000, 100, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(15, 1, 'monthly', 80, 89, 1000, 4000, 100, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(16, 1, 'monthly', 90, 99, 1250, 5000, 125, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(17, 1, 'monthly', 100, 109, 1500, 9000, 125, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(18, 1, 'monthly', 110, 119, 1750, 12000, 150, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(19, 1, 'monthly', 120, 129, 2000, 14000, 150, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(20, 1, 'monthly', 130, 139, 2500, 15500, 150, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(21, 1, 'monthly', 140, 149, 3000, 18000, 250, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(22, 1, 'monthly', 150, 159, 3500, 22000, 350, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(23, 1, 'monthly', 160, 169, 3750, 25500, 350, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(24, 1, 'monthly', 170, 179, 4000, 30000, 350, 1, '2022-06-01', NULL, 'active', NULL, '2022-08-19 16:15:22', '2022-12-20 12:35:23'),
(25, 1, 'monthly', 180, 189, 4500, 15500, 150, 1, '2022-06-01', NULL, 'passive', NULL, '2022-08-19 16:15:22', '2022-12-20 15:40:41'),
(26, 1, 'monthly', 190, 199, 1750, 12000, 150, 1, '2022-06-01', NULL, 'passive', NULL, '2022-08-19 16:15:22', '2022-12-20 15:40:44'),
(27, 1, 'monthly', 200, 210, 2000, 14000, 150, 1, '2022-06-01', NULL, 'passive', NULL, '2022-08-19 16:15:22', '2022-12-20 15:40:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calendars`
--

CREATE TABLE `calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('event','interview','meeting','working_day') NOT NULL,
  `users` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `color` text DEFAULT NULL,
  `text_color` text DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `files`
--

INSERT INTO `files` (`id`, `user_id`, `title`, `file`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 1, 'deneme', '63b43d2e4c5ff.diz', 'passive', NULL, '2023-01-03 17:35:26', '2023-01-03 17:35:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `human_resources`
--

CREATE TABLE `human_resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `source` enum('facebook','instagram','whatsapp','career','sms','referer','billboard','phone','google_form','google_ads','facebook_evomiles_potential','facebook_triooz_potential','facebook_evomiles_messenger','facebook_triooz_messenger') NOT NULL,
  `source_date` date NOT NULL,
  `language_level` enum('no','a1-a2','b1-b2','c1-c2','native') NOT NULL,
  `position` enum('positive','negative','neutral') NOT NULL,
  `position_condition` enum('work_hours','sgk','salary','home_office','distance_and_service','out_of_city','language_insufficient','doesent_speak_german','black_list','didnt_attend','just_recieved_information','not_thinking_of_sales') DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `notes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`notes`)),
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `human_resources`
--

INSERT INTO `human_resources` (`id`, `phone`, `name`, `surname`, `source`, `source_date`, `language_level`, `position`, `position_condition`, `added_by`, `owner_id`, `notes`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(2, '+90 (532) 391-1449', 'Eren', 'Çağlı', 'instagram', '2023-01-02', 'c1-c2', 'negative', 'work_hours', 1, 7, NULL, 'passive', NULL, '2023-01-02 15:44:15', '2023-01-03 15:08:27'),
(3, '+90 (545) 277-2946', 'Eren', 'Çağlı', 'instagram', '2023-01-05', 'b1-b2', 'neutral', 'work_hours', 1, 7, '[{\"created_at\":\"2023-01-04 13:50:45\",\"added_by\":\"1\",\"note\":\"zsfsfsf\",\"type\":\"message\",\"date\":\"2023-01-04\"}]', 'active', NULL, '2023-01-04 13:50:34', '2023-01-04 13:51:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_12_06_142039_create_user_details_table', 1),
(4, '2022_12_06_142517_create_user_groups_table', 1),
(5, '2022_12_06_143036_create_projects_table', 1),
(6, '2022_12_06_143052_create_offices_table', 1),
(7, '2022_12_07_105745_create_sales_table', 2),
(8, '2022_12_07_110036_create_products_table', 2),
(9, '2022_12_12_141755_create_todos_table', 3),
(10, '2022_12_20_084514_create_bonuses_table', 4),
(11, '2022_12_20_155633_create_files_table', 5),
(12, '2022_12_21_074906_create_calendars_table', 6),
(13, '2022_12_27_084643_create_offdays_table', 7),
(15, '2022_12_28_154116_create_targets_table', 8),
(17, '2023_01_02_105221_create_human_resources_table', 9),
(18, '2023_01_03_161927_create_pauses_table', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `offdays`
--

CREATE TABLE `offdays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` enum('date','datetime') NOT NULL,
  `date_type` enum('yearly','marriage','death','free','birth') DEFAULT NULL,
  `date` date NOT NULL,
  `movements` text DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `offices`
--

INSERT INTO `offices` (`id`, `title`, `address`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 'Brandium Residence', 'Küçükbakkalköy Mahallesi Dudullu Caddesi No:23 Brandium Residance R2 Blok K:29 D:, D:266, 34750 Ataşehir/İstanbul', 'active', NULL, '2022-12-06 17:49:53', '2022-12-28 16:13:00'),
(2, 'Kuriş Kule', 'Cevizli, D-100 Güney Yanyolu, No:2, Kat:11, 34865 Kartal/İstanbul', 'active', NULL, '2022-12-06 17:50:22', '2022-12-23 16:56:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pauses`
--

CREATE TABLE `pauses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `title`, `name`, `point`, `project_id`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 'Mivolta', 'Strom', '1', 1, 'active', NULL, '2022-12-07 15:05:46', '2022-12-28 09:38:31'),
(2, 'Mivolta', 'Gas', '1', 1, 'active', NULL, '2022-12-07 15:05:46', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `preffered_counter` enum('quantity','point') DEFAULT NULL,
  `type` enum('sale','normal') NOT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `preffered_counter`, `type`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 'Mivolta', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, 'quantity', 'sale', 'active', NULL, '2022-12-06 17:51:31', '2022-12-27 08:29:44'),
(2, 'ABO', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, 'point', 'sale', 'active', NULL, '2022-12-06 17:51:31', '2022-12-23 19:57:13'),
(3, 'Fast ABO', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, 'quantity', 'sale', 'active', NULL, '2022-12-06 17:51:31', '2022-12-23 19:57:16'),
(4, 'Immobilie', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, 'quantity', 'sale', 'active', NULL, '2022-12-06 17:51:31', '2022-12-23 19:57:11'),
(5, 'Spafoni', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, NULL, 'normal', 'active', NULL, '2022-12-06 17:51:31', NULL),
(6, 'Ofis Hizmetleri', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, NULL, 'normal', 'active', NULL, '2022-12-06 17:51:31', NULL),
(7, 'Yönetim', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, NULL, 'normal', 'active', NULL, '2022-12-06 17:51:31', NULL),
(8, 'Kalite Kontrol', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', NULL, 'quantity', 'sale', 'active', NULL, '2022-12-06 17:51:31', '2022-12-13 18:32:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `point` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `office_id`, `project_id`, `product_id`, `point`, `quantity`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(14, 1, 1, 1, 1, '1', '1', 'active', '{\"iban_verify\":true,\"sms_verify\":false,\"customer_phone\":null}', '2023-01-04 00:00:00', '2023-01-04 10:27:05'),
(15, 1, 1, 1, 1, '15', '15', 'active', '{\"iban_verify\":true,\"sms_verify\":false,\"customer_phone\":null}', '2022-11-01 00:00:00', '2023-01-04 10:27:05'),
(16, 1, 1, 1, 1, '1', '1', 'passive', '{\"iban_verify\":true,\"sms_verify\":true,\"customer_phone\":null}', '2023-01-04 13:45:02', '2023-01-04 13:46:17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `targets`
--

CREATE TABLE `targets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('team','project','user') NOT NULL,
  `office_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `target_type` enum('point','quantity') NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `target` int(11) NOT NULL,
  `target_status` enum('completed','not_completed','continues','not_started') DEFAULT NULL,
  `target_status_date` datetime DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `targets`
--

INSERT INTO `targets` (`id`, `type`, `office_id`, `project_id`, `user_id`, `target_type`, `start_date`, `end_date`, `target`, `target_status`, `target_status_date`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 'project', NULL, 1, NULL, 'quantity', '2023-01-01', '2023-01-31', 1000, 'continues', '2023-01-03 18:33:10', 'active', NULL, '2023-01-03 18:31:11', '2023-01-03 18:33:10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `expire_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `todo_status` enum('completed','not_completed','in_progress') NOT NULL DEFAULT 'in_progress',
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `email`, `phone`, `password`, `last_seen`, `remember_token`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 'Eren', 'Çağlı', 'erencagli', 'erencagliz@hotmail.com', '5452772946', '$2y$10$NF4XBbU2.oXqy6SmD2oYiOfD6hzxN9DG1J0xfC24OrTi4jACqSRcO', '2023-01-31 08:18:44', 'hOMFSfDiCSbdpDeYwetcPxoqvlzPgxN7ijo7eeoZ9X3HRxBtVSNYNaWzw84S', 'active', NULL, '2022-12-06 19:24:14', '2023-01-31 11:18:44'),
(2, 'İbrahim', 'Yılmaz', 'ibrahimyilmaz', NULL, '5452772946', '$2y$10$rMbklfUwOTjkCw4/0SzJVuRT0.hXpqnWukHDxEHfqwyyqEhRQoQBu', '2022-12-01 09:18:26', NULL, 'active', NULL, '2022-12-07 19:45:02', '2022-12-27 13:43:18'),
(7, 'Rukiye', 'Kurt', 'rukiyekurt', NULL, '5452772946', '$2y$10$IY9cOzvj5T.blgTwi0aOf.8SWHBLJoI5cA1ckM6sIuTJUKuCBXDby', '2022-12-01 09:18:26', NULL, 'active', NULL, '2022-12-12 15:43:59', '2023-01-02 15:34:49');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `identity` varchar(255) DEFAULT NULL,
  `work_start_date` date DEFAULT NULL,
  `work_end_date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `password`, `image`, `project_id`, `group_id`, `office_id`, `birthdate`, `identity`, `work_start_date`, `work_end_date`, `address`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 1, '123', 'triooz_63aaf6488bd04.jpg', 1, 1, 1, '2004-05-03', '25250074410', '2020-10-10', NULL, 'Esatpaşa Mh, Başkomutan Cd, Yapraklı Sk, Ağa Apt (18), Daire 4', 'active', '[]', '2022-12-06 19:25:41', '2023-01-03 13:21:05'),
(2, 2, '123', 'triooz_63aaf6769a7be.jpg', 1, 1, 1, '1989-05-24', '25096060110', '2018-03-09', NULL, 'Cevizli, D-100 Güney Yanyolu, NO:2, KAT:11, Kartal / İstanbul', 'active', '[]', '2022-12-06 19:25:41', '2022-12-27 13:43:18'),
(5, 7, '123', 'triooz_63aaf680be6d9.jpg', 2, 4, 1, '2022-12-01', '25250074410', '2022-12-13', NULL, 'Cevizli, D-100 Güney Yanyolu, NO:2, KAT:11, Kartal / İstanbul', 'active', '[]', '2022-12-12 15:43:59', '2023-01-02 15:34:49');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_groups`
--

CREATE TABLE `user_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `permissions` text NOT NULL DEFAULT '\'[]\'',
  `status` enum('active','pending','passive') NOT NULL DEFAULT 'pending',
  `custom` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `user_groups`
--

INSERT INTO `user_groups` (`id`, `title`, `description`, `permissions`, `status`, `custom`, `created_at`, `updated_at`) VALUES
(1, 'Personel', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', '{\"login_access\":true,\"dashboard_view\":true,\"my_sales_view\":true,\"all_sales_view\":true,\"teams_view\":true,\"calendar_view\":true,\"users_listing_view\":true,\"user_groups_listing_view\":true,\"add_sale_for_everyone_view\":true,\"add_sale_for_team_view\":true,\"pending_sales_for_everyone_view\":true,\"pending_sales_for_team_view\":true,\"bonuses_view\":true,\"files_view\":true,\"offices_view\":true,\"projects_view\":true,\"offdays_view\":true,\"products_view\":true,\"reporting_view\":true,\"targets_view\":true,\"human_resources_view\":true,\"add_sale_access\":true,\"pauses_view\":true,\"my_bonus_view\":true}', 'active', NULL, '2022-12-06 17:58:11', '2023-01-04 11:33:53'),
(2, 'Takım Lideri', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', '[]', 'active', NULL, '2022-12-06 17:58:20', '2023-01-04 10:42:27'),
(3, 'Proje Müdürü', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', '[]', 'active', NULL, '2022-12-06 17:58:31', '2023-01-04 10:34:26'),
(4, 'İnsan Kaynakları', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', '[]', 'active', NULL, '2022-12-06 19:27:41', '2023-01-04 10:34:28'),
(7, 'Kalite Kontrol', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', '[]', 'active', NULL, '2022-12-20 10:27:48', '2023-01-04 10:34:29');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `human_resources`
--
ALTER TABLE `human_resources`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `offdays`
--
ALTER TABLE `offdays`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pauses`
--
ALTER TABLE `pauses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_details_user_id_unique` (`user_id`);

--
-- Tablo için indeksler `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `human_resources`
--
ALTER TABLE `human_resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `offdays`
--
ALTER TABLE `offdays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `pauses`
--
ALTER TABLE `pauses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `targets`
--
ALTER TABLE `targets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
