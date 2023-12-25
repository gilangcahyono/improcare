-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 11:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `improcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'aliquid', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(2, 'saepe', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(3, 'quasi', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(4, 'laborum', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(5, 'consectetur', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(6, 'ducimus', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(7, 'modi', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(8, 'cupiditate', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(9, 'reiciendis', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(10, 'magni', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(11, 'mollitia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(12, 'quia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(13, 'magni', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(14, 'quia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(15, 'eum', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(16, 'et', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(17, 'hic', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(18, 'sint', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(19, 'quo', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(20, 'exercitationem', '2023-12-20 07:06:07', '2023-12-20 07:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `information`, `created_at`, `updated_at`) VALUES
(1, 'Dariati Dodo Saputra S.Pt', '0841 3845 3823', 'Ds. Villa No. 21, Banjarbaru 16096, Aceh', 'Repudiandae assumenda inventore accusamus. Quis est et voluptas placeat laborum.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(2, 'Irma Nuraini', '0393 4097 8529', 'Psr. Teuku Umar No. 994, Tangerang Selatan 97227, Jabar', 'Suscipit ratione aut quas cumque sit. Officia rerum est enim ut beatae.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(3, 'Omar Nababan', '0291 4544 2813', 'Jr. Jambu No. 736, Administrasi Jakarta Selatan 49998, Kepri', 'Aut possimus iusto quidem quam vitae reprehenderit. Iure dolorem nesciunt officia porro accusamus.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(4, 'Ade Cinta Suartini M.Ak', '0286 0899 6942', 'Kpg. Suryo Pranoto No. 959, Metro 34492, Malut', 'Omnis aut est quo eum. Vitae blanditiis consequatur occaecati. Veritatis quo accusamus ipsum qui.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(5, 'Hendri Hardiansyah M.Ak', '0270 9524 0022', 'Jln. Bakti No. 114, Lubuklinggau 47273, DIY', 'Omnis sit assumenda quia. Nisi sit et quia omnis voluptatum. Et qui voluptatibus eligendi enim.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(6, 'Marsudi Damanik', '(+62) 595 2381 007', 'Jr. Jamika No. 435, Tangerang Selatan 97850, Gorontalo', 'Aut facilis delectus repellat aut. Dignissimos inventore rerum et ut.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(7, 'Maras Lazuardi', '0634 0946 975', 'Ki. Abdullah No. 57, Tual 62823, Banten', 'Mollitia pariatur id non praesentium nostrum minima qui. Ratione quia voluptates rerum nesciunt.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(8, 'Dinda Suartini M.Kom.', '0883 1499 4072', 'Ki. Sutarjo No. 774, Banjarbaru 79212, Kalbar', 'Et distinctio natus deleniti aut ex. Et asperiores facere vitae est.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(9, 'Wardaya Nashiruddin M.M.', '(+62) 23 2465 3320', 'Jln. Yosodipuro No. 198, Bitung 40028, DKI', 'Qui facere nesciunt eius officiis nihil. Et omnis sequi magnam excepturi consequatur ratione sit.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(10, 'Ina Qori Usada S.H.', '024 7274 650', 'Jln. Bakaru No. 565, Tanjung Pinang 67653, NTB', 'Nam quidem temporibus consequuntur officiis error ut. Rem voluptatem error velit nostrum animi quo.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(11, 'Baktiono Winarno', '(+62) 534 6561 912', 'Gg. Bak Air No. 623, Denpasar 16362, Kalsel', 'Qui eos amet optio veniam. Culpa aut et autem non. Est id quia ab ipsam.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(12, 'Gantar Adinata Lazuardi', '(+62) 21 8458 264', 'Ki. Nanas No. 445, Lhokseumawe 60295, Pabar', 'Et dicta qui laboriosam quis animi non. Beatae et et sint nemo perferendis officiis ut.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(13, 'Puti Hartati', '0827 3609 857', 'Dk. Ters. Buah Batu No. 240, Bima 73907, Sulteng', 'Esse aut vitae corporis impedit iure aliquid nihil. Ratione repudiandae nisi impedit minus.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(14, 'Dimaz Sihotang S.IP', '(+62) 667 4513 0939', 'Jr. Cikutra Barat No. 999, Medan 79238, Kalbar', 'Voluptate ea nemo voluptate ut. Qui architecto fugiat ab ex sint.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(15, 'Irnanto Budiman S.Pd', '0751 8882 680', 'Dk. HOS. Cjokroaminoto (Pasirkaliki) No. 116, Pagar Alam 47939, Kalteng', 'Dolorem mollitia aut aspernatur sequi ut. Illum sed nam ut dicta.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(16, 'Mutia Raisa Lestari S.T.', '(+62) 925 2283 1998', 'Kpg. Achmad Yani No. 207, Solok 10209, Jabar', 'Ea et voluptatem perspiciatis voluptatibus provident. Sunt ipsum voluptatibus rerum id.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(17, 'Hamzah Zulkarnain', '0904 2915 3160', 'Ki. Suryo No. 992, Jayapura 97270, Sumbar', 'Nesciunt mollitia nihil aliquam ut cumque ad. Reiciendis enim voluptas quidem harum.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(18, 'Pangeran Sitorus', '(+62) 542 1988 905', 'Ki. Jagakarsa No. 369, Sungai Penuh 52658, Sulut', 'Ea delectus quae aut ut quas quaerat enim. Vel aspernatur et eligendi culpa.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(19, 'Tari Mandasari', '0817 471 183', 'Kpg. Villa No. 200, Kupang 58319, Kalsel', 'Ducimus reiciendis quia voluptate excepturi maiores. Perspiciatis nihil voluptate maxime.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(20, 'Cahyanto Widodo', '(+62) 660 0197 040', 'Dk. Monginsidi No. 834, Padangpanjang 27080, Pabar', 'Nemo in voluptate inventore iure. Sit enim possimus atque alias.', '2023-12-20 07:06:08', '2023-12-20 07:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `done` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `name`, `totalPrice`, `approved`, `done`, `created_at`, `updated_at`) VALUES
(1, 'INV1737138051688', 1613170, 0, 1, '2023-12-21 20:39:35', '2023-12-25 01:36:52'),
(2, 'INV3363535203726', 2890440, 1, 1, '2023-12-21 21:30:50', '2023-12-25 01:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `material_requests`
--

CREATE TABLE `material_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `sent` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `material_requests`
--

INSERT INTO `material_requests` (`id`, `invoice_id`, `user`, `request_type`, `customer`, `barcode`, `name`, `price`, `quantity`, `total`, `sent`, `created_at`, `updated_at`) VALUES
(1, 1, 'Muhammad Dava Irfansyah', 'Material Request', 'Mutia Raisa Lestari S.T.', '55355322', 'necessitatibus', 59716, 20, 1194320, 1, '2023-12-21 20:39:04', '2023-12-21 20:39:35'),
(2, 1, 'Muhammad Dava Irfansyah', 'Material Request', 'Puti Hartati', '56465365', 'assumenda earum', 41885, 10, 418850, 1, '2023-12-21 20:39:30', '2023-12-21 20:39:35'),
(3, 2, 'Muhammad Dava Irfansyah', 'Work Order', 'Irnanto Budiman S.Pd', '33474878', 'eius', 32116, 90, 2890440, 1, '2023-12-21 21:30:47', '2023-12-21 21:30:50');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_12_15_062858_create_products_table', 1),
(4, '2023_12_15_062933_create_categories_table', 1),
(5, '2023_12_15_062939_create_units_table', 1),
(6, '2023_12_15_085401_create_suppliers_table', 1),
(7, '2023_12_15_133930_create_customers_table', 1),
(8, '2023_12_16_121959_create_stock_ins_table', 1),
(9, '2023_12_16_122003_create_stock_outs_table', 1),
(10, '2023_12_17_065649_create_invoices_table', 1),
(11, '2023_12_18_043747_create_material_requests_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `barcode`, `name`, `price`, `stock`, `category`, `unit`, `supplier`, `image`, `created_at`, `updated_at`) VALUES
(1, '33361628', 'ab', 97445, 30, 'aspernatur', 'quae', 'aut', 'https://via.placeholder.com/640x480.png/008866?text=quisquam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(2, '55355322', 'necessitatibus', 59716, 45, 'fugiat', 'quia', 'facilis', 'https://via.placeholder.com/640x480.png/007788?text=ut', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(3, '82948825', 'a', 80935, 83, 'soluta', 'architecto', 'molestiae', 'https://via.placeholder.com/640x480.png/00cc00?text=quidem', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(4, '38301520', 'est voluptas et', 41097, 42, 'placeat', 'omnis', 'et', 'https://via.placeholder.com/640x480.png/000033?text=aut', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(5, '56465365', 'assumenda earum', 41885, 72, 'est', 'quia', 'dignissimos', 'https://via.placeholder.com/640x480.png/0066bb?text=qui', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(6, '83342530', 'quis voluptas accusantium', 3384, 12, 'expedita', 'debitis', 'autem', 'https://via.placeholder.com/640x480.png/00aa33?text=id', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(7, '33474878', 'eius', 32116, 65, 'nisi', 'eligendi', 'doloremque', 'https://via.placeholder.com/640x480.png/004477?text=ex', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(8, '83334221', 'magnam', 92476, 74, 'perspiciatis', 'repellat', 'laudantium', 'https://via.placeholder.com/640x480.png/009922?text=dignissimos', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(9, '15982988', 'quos autem', 52446, 40, 'ipsa', 'ad', 'laboriosam', 'https://via.placeholder.com/640x480.png/008866?text=velit', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(10, '46176943', 'alias', 96886, 72, 'dolores', 'eum', 'natus', 'https://via.placeholder.com/640x480.png/000000?text=et', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(11, '15590534', 'odio omnis', 43675, 96, 'aut', 'magnam', 'aspernatur', 'https://via.placeholder.com/640x480.png/007766?text=consequuntur', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(12, '28480167', 'maiores et sit', 43000, 23, 'aut', 'nesciunt', 'dolor', 'https://via.placeholder.com/640x480.png/004400?text=reiciendis', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(13, '44050863', 'pariatur', 93350, 72, 'et', 'libero', 'error', 'https://via.placeholder.com/640x480.png/0022dd?text=facilis', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(14, '79512213', 'ea', 65135, 85, 'ut', 'quo', 'rem', 'https://via.placeholder.com/640x480.png/00dddd?text=minus', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(15, '05994359', 'aut', 79365, 60, 'ea', 'asperiores', 'unde', 'https://via.placeholder.com/640x480.png/00aa77?text=deserunt', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(16, '08223081', 'rerum impedit sapiente', 48380, 20, 'quia', 'ut', 'cupiditate', 'https://via.placeholder.com/640x480.png/0077aa?text=quia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(17, '47285088', 'et optio ipsam', 74145, 97, 'ea', 'enim', 'error', 'https://via.placeholder.com/640x480.png/001199?text=nemo', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(18, '80294283', 'et beatae', 71529, 36, 'consequatur', 'repellat', 'quo', 'https://via.placeholder.com/640x480.png/0066dd?text=totam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(19, '42563617', 'maiores', 41961, 93, 'quis', 'itaque', 'quibusdam', 'https://via.placeholder.com/640x480.png/009900?text=expedita', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(20, '53470225', 'sunt tempore', 48502, 56, 'minus', 'atque', 'non', 'https://via.placeholder.com/640x480.png/0055ee?text=quae', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(21, '62327381', 'iure sunt', 94020, 89, 'soluta', 'quo', 'id', 'https://via.placeholder.com/640x480.png/0077ff?text=alias', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(22, '08897428', 'aut sapiente facilis', 32419, 43, 'deserunt', 'et', 'at', 'https://via.placeholder.com/640x480.png/008822?text=sit', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(23, '11215158', 'numquam', 29943, 22, 'dignissimos', 'deleniti', 'cumque', 'https://via.placeholder.com/640x480.png/002233?text=nemo', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(24, '60267436', 'sunt', 58396, 82, 'minima', 'est', 'quo', 'https://via.placeholder.com/640x480.png/00ee55?text=non', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(25, '22942845', 'qui', 85175, 50, 'doloremque', 'repellendus', 'odio', 'https://via.placeholder.com/640x480.png/00cc88?text=ipsam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(26, '49121520', 'adipisci quas', 87143, 48, 'aut', 'quia', 'omnis', 'https://via.placeholder.com/640x480.png/0066dd?text=expedita', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(27, '72394311', 'autem autem', 2688, 19, 'eos', 'consequatur', 'voluptatem', 'https://via.placeholder.com/640x480.png/00cccc?text=nostrum', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(28, '21948510', 'natus quam velit', 39232, 53, 'quidem', 'est', 'cum', 'https://via.placeholder.com/640x480.png/00ff55?text=magnam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(29, '99077167', 'ipsum totam rem', 72575, 97, 'ratione', 'dolorem', 'animi', 'https://via.placeholder.com/640x480.png/005511?text=voluptatem', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(30, '19244938', 'vel et', 42331, 63, 'aliquid', 'cupiditate', 'nobis', 'https://via.placeholder.com/640x480.png/0011ee?text=quo', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(31, '97551041', 'voluptate ipsam omnis', 45560, 43, 'dolorem', 'aut', 'eaque', 'https://via.placeholder.com/640x480.png/00dd33?text=quos', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(32, '60705631', 'quas', 73177, 94, 'maiores', 'est', 'nulla', 'https://via.placeholder.com/640x480.png/0022ee?text=doloremque', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(33, '40935270', 'dolores et nam', 46557, 43, 'quis', 'maiores', 'maxime', 'https://via.placeholder.com/640x480.png/0088aa?text=quia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(34, '79786768', 'corrupti', 30697, 50, 'minus', 'ipsam', 'quae', 'https://via.placeholder.com/640x480.png/0044bb?text=et', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(35, '36651993', 'id ea qui', 23787, 44, 'necessitatibus', 'maxime', 'nemo', 'https://via.placeholder.com/640x480.png/0011bb?text=alias', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(36, '81367115', 'inventore', 97941, 58, 'optio', 'provident', 'quidem', 'https://via.placeholder.com/640x480.png/00bbaa?text=doloribus', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(37, '61915510', 'amet dolorem', 78354, 54, 'aut', 'assumenda', 'expedita', 'https://via.placeholder.com/640x480.png/000077?text=ut', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(38, '88257372', 'qui vel', 46134, 76, 'vel', 'autem', 'quis', 'https://via.placeholder.com/640x480.png/000044?text=distinctio', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(39, '04029977', 'quis repellendus', 85700, 58, 'pariatur', 'nihil', 'velit', 'https://via.placeholder.com/640x480.png/00ff11?text=quasi', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(40, '94940961', 'aut', 64984, 19, 'velit', 'ab', 'iste', 'https://via.placeholder.com/640x480.png/002233?text=laboriosam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(41, '12714643', 'illo beatae fugit', 69424, 10, 'sit', 'quae', 'autem', 'https://via.placeholder.com/640x480.png/002266?text=ullam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(42, '10655252', 'ex', 11754, 90, 'quidem', 'explicabo', 'quisquam', 'https://via.placeholder.com/640x480.png/0055cc?text=quae', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(43, '92730359', 'et asperiores unde', 57796, 5, 'autem', 'molestiae', 'quaerat', 'https://via.placeholder.com/640x480.png/0066aa?text=et', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(44, '08612939', 'autem', 52143, 2, 'in', 'dolores', 'consectetur', 'https://via.placeholder.com/640x480.png/00aa22?text=doloribus', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(45, '27636411', 'architecto', 3886, 58, 'enim', 'deleniti', 'eum', 'https://via.placeholder.com/640x480.png/00ddaa?text=ex', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(46, '22531728', 'eius repudiandae', 58169, 50, 'possimus', 'molestiae', 'est', 'https://via.placeholder.com/640x480.png/0044bb?text=iusto', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(47, '25849370', 'tenetur mollitia', 3299, 21, 'voluptatum', 'laborum', 'commodi', 'https://via.placeholder.com/640x480.png/000011?text=voluptatibus', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(48, '41025321', 'suscipit', 80733, 24, 'est', 'ut', 'quis', 'https://via.placeholder.com/640x480.png/0022bb?text=et', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(49, '83015809', 'itaque impedit et', 83852, 59, 'unde', 'dolorem', 'commodi', 'https://via.placeholder.com/640x480.png/0099ff?text=officia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(50, '33162461', 'dolorem aspernatur hic', 65238, 74, 'occaecati', 'omnis', 'amet', 'https://via.placeholder.com/640x480.png/00dd55?text=soluta', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(51, '86024204', 'non', 28076, 71, 'nemo', 'repellat', 'vero', 'https://via.placeholder.com/640x480.png/00aaaa?text=possimus', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(52, '16914360', 'quas doloribus', 77877, 28, 'consequuntur', 'nobis', 'culpa', 'https://via.placeholder.com/640x480.png/0044bb?text=ut', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(53, '51618568', 'quo consequatur', 17318, 7, 'cum', 'totam', 'repudiandae', 'https://via.placeholder.com/640x480.png/00eebb?text=mollitia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(54, '03931882', 'eius', 6521, 34, 'perspiciatis', 'ipsum', 'repudiandae', 'https://via.placeholder.com/640x480.png/0044aa?text=sunt', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(55, '80297772', 'hic', 49603, 35, 'accusamus', 'quidem', 'itaque', 'https://via.placeholder.com/640x480.png/0044aa?text=eos', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(56, '21502651', 'impedit magni aut', 96909, 98, 'non', 'occaecati', 'corrupti', 'https://via.placeholder.com/640x480.png/007788?text=quia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(57, '43048175', 'cumque voluptatem officia', 54424, 32, 'officia', 'mollitia', 'veritatis', 'https://via.placeholder.com/640x480.png/005566?text=quo', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(58, '70672350', 'facere molestiae inventore', 95471, 72, 'aut', 'dolore', 'sapiente', 'https://via.placeholder.com/640x480.png/004477?text=molestiae', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(59, '60043115', 'dolores tenetur amet', 87158, 74, 'sit', 'temporibus', 'architecto', 'https://via.placeholder.com/640x480.png/007799?text=ullam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(60, '67605941', 'alias sint', 64926, 15, 'voluptatem', 'pariatur', 'ab', 'https://via.placeholder.com/640x480.png/0077dd?text=sit', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(61, '00408967', 'qui', 55827, 5, 'tempora', 'voluptatem', 'laboriosam', 'https://via.placeholder.com/640x480.png/003344?text=ex', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(62, '69388545', 'dolorum officiis', 61064, 42, 'odit', 'eligendi', 'ipsum', 'https://via.placeholder.com/640x480.png/0033cc?text=porro', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(63, '82561338', 'nihil', 21951, 58, 'voluptatem', 'doloremque', 'vitae', 'https://via.placeholder.com/640x480.png/0088ff?text=vel', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(64, '92847002', 'illo', 37243, 76, 'quia', 'ipsam', 'architecto', 'https://via.placeholder.com/640x480.png/0000aa?text=eum', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(65, '80431787', 'sit', 63461, 12, 'pariatur', 'ea', 'omnis', 'https://via.placeholder.com/640x480.png/00ffbb?text=voluptatem', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(66, '09789838', 'eaque inventore', 63193, 71, 'quis', 'optio', 'commodi', 'https://via.placeholder.com/640x480.png/00aa77?text=et', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(67, '04892052', 'sit sit minus', 28329, 15, 'modi', 'qui', 'optio', 'https://via.placeholder.com/640x480.png/00ddee?text=eos', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(68, '36048052', 'consequatur', 76891, 86, 'suscipit', 'vero', 'harum', 'https://via.placeholder.com/640x480.png/000022?text=amet', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(69, '09587687', 'veritatis amet voluptas', 51312, 59, 'nihil', 'nobis', 'hic', 'https://via.placeholder.com/640x480.png/00ee22?text=reiciendis', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(70, '37281199', 'sapiente pariatur aspernatur', 87931, 89, 'ratione', 'sed', 'assumenda', 'https://via.placeholder.com/640x480.png/005566?text=eum', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(71, '84377463', 'nihil', 96855, 68, 'eos', 'qui', 'explicabo', 'https://via.placeholder.com/640x480.png/008800?text=fugiat', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(72, '41916452', 'assumenda', 50914, 20, 'autem', 'expedita', 'dolor', 'https://via.placeholder.com/640x480.png/00bb55?text=fugiat', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(73, '01990911', 'perspiciatis ab', 22547, 98, 'quaerat', 'et', 'ab', 'https://via.placeholder.com/640x480.png/0044dd?text=distinctio', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(74, '37498481', 'recusandae nesciunt dolores', 82197, 14, 'quam', 'sed', 'dolorem', 'https://via.placeholder.com/640x480.png/0033ee?text=dolor', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(75, '64275901', 'vitae atque a', 11068, 13, 'eos', 'modi', 'nulla', 'https://via.placeholder.com/640x480.png/00ff44?text=natus', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(76, '44540715', 'quas enim et', 35380, 21, 'amet', 'sunt', 'autem', 'https://via.placeholder.com/640x480.png/002244?text=numquam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(77, '31508889', 'accusamus nihil', 97602, 75, 'fugit', 'non', 'eveniet', 'https://via.placeholder.com/640x480.png/001166?text=veniam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(78, '89507957', 'quasi', 69936, 100, 'quasi', 'molestiae', 'consequuntur', 'https://via.placeholder.com/640x480.png/0055dd?text=aliquid', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(79, '65516676', 'quia saepe ut', 67638, 100, 'neque', 'voluptates', 'dignissimos', 'https://via.placeholder.com/640x480.png/001122?text=quas', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(80, '44867195', 'eum', 27801, 64, 'unde', 'voluptatem', 'optio', 'https://via.placeholder.com/640x480.png/00cc44?text=dolorem', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(81, '09369115', 'atque dolore', 18749, 76, 'nam', 'aut', 'sit', 'https://via.placeholder.com/640x480.png/0099ee?text=dolor', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(82, '97150961', 'occaecati nam', 90836, 97, 'quos', 'hic', 'dolore', 'https://via.placeholder.com/640x480.png/004466?text=libero', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(83, '15138538', 'explicabo', 4085, 23, 'commodi', 'ipsam', 'sint', 'https://via.placeholder.com/640x480.png/008855?text=vitae', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(84, '04105640', 'repellat', 35851, 92, 'qui', 'sint', 'sint', 'https://via.placeholder.com/640x480.png/0044bb?text=a', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(85, '23280533', 'voluptatibus voluptatem', 22647, 84, 'culpa', 'asperiores', 'saepe', 'https://via.placeholder.com/640x480.png/00cc66?text=maxime', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(86, '68358792', 'officiis voluptate', 99088, 20, 'ut', 'nihil', 'perferendis', 'https://via.placeholder.com/640x480.png/004466?text=sapiente', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(87, '82969899', 'nobis sit temporibus', 96476, 11, 'quam', 'voluptas', 'odio', 'https://via.placeholder.com/640x480.png/00ffff?text=consequatur', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(88, '68286880', 'exercitationem autem', 6796, 34, 'et', 'nam', 'quia', 'https://via.placeholder.com/640x480.png/0022aa?text=quo', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(89, '83564291', 'voluptatem', 22232, 60, 'vitae', 'qui', 'est', 'https://via.placeholder.com/640x480.png/008855?text=vel', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(90, '73481195', 'rerum ipsum', 1640, 17, 'non', 'harum', 'cumque', 'https://via.placeholder.com/640x480.png/0000aa?text=accusantium', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(91, '20088859', 'consequatur', 42283, 36, 'magnam', 'consequatur', 'non', 'https://via.placeholder.com/640x480.png/0055aa?text=aut', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(92, '26176840', 'facilis omnis ea', 70576, 26, 'necessitatibus', 'possimus', 'qui', 'https://via.placeholder.com/640x480.png/003366?text=cupiditate', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(93, '03719275', 'debitis possimus odit', 34037, 14, 'recusandae', 'tempora', 'pariatur', 'https://via.placeholder.com/640x480.png/00ff66?text=cupiditate', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(94, '79813969', 'vel consequuntur neque', 46368, 45, 'velit', 'ut', 'illo', 'https://via.placeholder.com/640x480.png/0000aa?text=excepturi', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(95, '98111770', 'aut aliquid sed', 48278, 30, 'sit', 'quod', 'a', 'https://via.placeholder.com/640x480.png/00ff00?text=ut', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(96, '52200618', 'soluta nam', 64713, 78, 'cupiditate', 'recusandae', 'praesentium', 'https://via.placeholder.com/640x480.png/001122?text=quos', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(97, '02511429', 'ducimus', 98479, 53, 'occaecati', 'et', 'repellat', 'https://via.placeholder.com/640x480.png/0022ee?text=vero', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(98, '27191057', 'perferendis culpa praesentium', 52626, 15, 'placeat', 'voluptatum', 'perferendis', 'https://via.placeholder.com/640x480.png/00cc00?text=facere', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(99, '51205751', 'illum', 2572, 9, 'reiciendis', 'in', 'quam', 'https://via.placeholder.com/640x480.png/00cc99?text=expedita', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(100, '13150167', 'ut', 56768, 63, 'consequatur', 'quis', 'omnis', 'https://via.placeholder.com/640x480.png/00ccaa?text=provident', '2023-12-20 07:06:07', '2023-12-20 07:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `stock_ins`
--

CREATE TABLE `stock_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_ins`
--

INSERT INTO `stock_ins` (`id`, `barcode`, `product`, `total`, `supplier`, `information`, `created_at`, `updated_at`) VALUES
(1, '29158010', 'dolorem ratione quas', 11, 'sed', 'Ullam perferendis aut recusandae et. Architecto cumque maxime voluptatem officiis.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(2, '64949581', 'nesciunt est', 41, 'voluptates', 'Facere accusamus tempore ut praesentium. Tempora iure tempore aperiam.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(3, '11597926', 'quibusdam', 88, 'quia', 'Minus sunt rerum provident. Saepe inventore dolores voluptas. Ea reprehenderit quod enim dolor.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(4, '26608044', 'dolorem provident', 6, 'esse', 'Nostrum rerum illum et laudantium est. Vel omnis ipsum non. Sit iure libero deleniti ratione.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(5, '24488594', 'animi', 53, 'ut', 'Blanditiis possimus sit sapiente aut. Amet libero eaque perspiciatis sed nemo qui quidem.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(6, '61006157', 'eum in repellat', 37, 'id', 'Est porro culpa ut esse neque. Impedit et consequuntur minima vel veritatis fuga.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(7, '95780948', 'velit', 58, 'quibusdam', 'Ut maiores est eius. Architecto quia voluptas et eveniet est rerum minima.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(8, '89474686', 'officia recusandae', 59, 'sapiente', 'Nobis delectus nemo nihil eos. Doloribus accusantium sequi sunt.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(9, '55754415', 'aut dolor est', 99, 'cumque', 'Eum iure velit eveniet enim. Dolorem ab non aliquam pariatur.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(10, '57836850', 'ipsum accusantium', 80, 'amet', 'Qui est at illum incidunt sapiente vel dignissimos. Iste et iusto et.', '2023-12-20 07:06:08', '2023-12-20 07:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `stock_outs`
--

CREATE TABLE `stock_outs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_outs`
--

INSERT INTO `stock_outs` (`id`, `barcode`, `product`, `total`, `customer`, `information`, `created_at`, `updated_at`) VALUES
(1, '46057426', 'unde distinctio sed', 32, 'animi', 'Eos aut ea non quod omnis. Animi non sit non rerum.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(2, '35824688', 'ea et', 31, 'enim', 'Dolorum accusantium quae nesciunt et amet nesciunt. Et eum eos quibusdam molestiae.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(3, '65429266', 'laborum aperiam', 69, 'rem', 'Autem est quam nam ut voluptas doloremque. In id ab et dignissimos.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(4, '49270457', 'odio dolore eius', 4, 'dignissimos', 'Nam fugit nisi nam. Ipsa provident quia vel qui ut nihil. Est ex ipsum iure cupiditate voluptatem.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(5, '07717048', 'tenetur', 80, 'nemo', 'Consequatur consequatur modi sequi sed. Exercitationem aut aspernatur adipisci est corporis error.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(6, '98569816', 'dicta quas eveniet', 93, 'et', 'Dolore neque laudantium ipsam. Excepturi debitis dignissimos laborum sunt suscipit.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(7, '23081031', 'qui architecto', 57, 'blanditiis', 'Debitis in sed aspernatur sint at. Dignissimos necessitatibus excepturi incidunt nam.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(8, '20633431', 'occaecati ut', 22, 'consectetur', 'Impedit eum quasi consequatur aut et illum. Consequatur architecto id tenetur facere.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(9, '06603571', 'illo culpa', 48, 'quos', 'Autem aperiam minus nostrum. Facilis dicta accusamus modi quis. Nemo quam ut et quis voluptatum.', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(10, '64493275', 'mollitia', 29, 'dolores', 'Autem earum qui impedit totam. Rerum id nam incidunt qui ut. Eaque quidem maiores iure rem.', '2023-12-20 07:06:08', '2023-12-20 07:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `phone`, `address`, `information`, `created_at`, `updated_at`) VALUES
(1, 'Sari Anggraini', '(+62) 484 2169 577', 'Kpg. Pasteur No. 137, Sabang 53865, Kaltara', 'Harum ex autem doloremque atque in. Rem illum harum et. Iste asperiores amet ut amet est.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(2, 'Hasna Hariyah', '0516 1765 4699', 'Ds. Bhayangkara No. 962, Padangpanjang 49556, NTB', 'Hic et mollitia eos in. Tempora sunt iste placeat culpa saepe esse aut.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(3, 'Mumpuni Halim S.Farm', '(+62) 367 6027 968', 'Psr. Imam Bonjol No. 603, Mataram 15826, Bali', 'Et consequatur dolore est atque cumque. In fugit nihil quos repellendus perferendis error aliquid.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(4, 'Patricia Lalita Purwanti', '022 3938 8321', 'Ki. Veteran No. 851, Madiun 92406, Kepri', 'Sit voluptatem sed sed. Dolores cumque minus et doloremque voluptatem asperiores ex.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(5, 'Jessica Uyainah', '(+62) 272 5947 737', 'Dk. Wahidin Sudirohusodo No. 199, Banjarbaru 40480, Jateng', 'Omnis nostrum nostrum autem cupiditate. Illum dolorem voluptas dolores beatae error necessitatibus.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(6, 'Warsita Hidayanto', '(+62) 21 8584 0283', 'Jln. Baranang Siang No. 390, Tangerang 72837, Kalsel', 'Sit quia recusandae autem molestiae molestias minima. At et qui ad doloremque vero pariatur totam.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(7, 'Victoria Sudiati', '0439 0098 5738', 'Kpg. Sadang Serang No. 462, Banjarmasin 24666, Sumsel', 'Odio odit pariatur molestias quisquam dolor sit. Iure perferendis possimus soluta qui.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(8, 'Paulin Vanya Sudiati S.Pd', '0975 5538 2223', 'Jln. Bahagia  No. 948, Tasikmalaya 10050, Kalteng', 'Omnis earum quia non doloribus consequuntur. Sapiente facilis dicta porro harum.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(9, 'Maria Purwanti', '(+62) 351 9671 5838', 'Dk. Kusmanto No. 332, Makassar 47463, Bali', 'Omnis consequatur et eveniet quidem. Et praesentium hic ut. In ut laboriosam ad rerum sint.', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(10, 'Kayla Wirda Winarsih', '(+62) 604 8089 148', 'Psr. Babadak No. 266, Tebing Tinggi 54354, Bali', 'Ab assumenda amet vel. Minima ea ut saepe.', '2023-12-20 07:06:07', '2023-12-20 07:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'qui', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(2, 'laboriosam', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(3, 'animi', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(4, 'assumenda', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(5, 'quia', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(6, 'culpa', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(7, 'illo', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(8, 'voluptas', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(9, 'vitae', '2023-12-20 07:06:07', '2023-12-20 07:06:07'),
(10, 'reiciendis', '2023-12-20 07:06:07', '2023-12-20 07:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `password`, `information`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Dava Irfansyah', 'dava', '0252 7273 5629', '$2y$12$SZFhTktm64RvZ3BCb6EG.e5lS2h9QJdFvopcpXuV3bDrXTGvbAAM6', 'Qui ut provident autem quo adipisci.', 'Administrator', '2023-12-20 07:06:08', '2023-12-20 07:06:08'),
(2, 'Hilda Wahyuni', 'jamil', '0309 9431 7390', '$2y$12$NljAawc68iElaZukfAhMtuCfBmo31hxtxuNSlQgT6/7pj/m2Wa0wG', 'Sed repudiandae vero debitis aliquid quae quasi.', 'Operasional Manager', '2023-12-20 07:06:09', '2023-12-25 01:00:46'),
(3, 'Titin Puspita M.M.', 'kyulianti', '0202 0632 1580', '$2y$12$qwfpz9TbvoTZuFh1wFTL2e2tvFYQ4l5VrKGLoN2Rl1m1wYE7E99Bm', 'Nihil fuga qui repellendus doloremque.', 'Sales Manager', '2023-12-20 07:06:09', '2023-12-20 07:06:09'),
(4, 'Agus Ramadan', 'vicky49', '0625 5349 737', '$2y$12$gQzuyraSoiMmi.Nl5NdfhO1mQgPzPiZAcTwkXWCU1MF.Nq1IRTNvu', 'Mollitia numquam commodi a quia.', 'Service Operator', '2023-12-20 07:06:09', '2023-12-20 07:06:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `material_requests`
--
ALTER TABLE `material_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_barcode_unique` (`barcode`);

--
-- Indexes for table `stock_ins`
--
ALTER TABLE `stock_ins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_outs`
--
ALTER TABLE `stock_outs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `material_requests`
--
ALTER TABLE `material_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `stock_ins`
--
ALTER TABLE `stock_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stock_outs`
--
ALTER TABLE `stock_outs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
