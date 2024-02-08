-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2024 at 05:17 PM
-- Server version: 8.0.36
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alsharfa_admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'if you need in future add to role',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@server.com', NULL, '$2y$10$E0UrX.LpHgFGv15WP8VUIOsfU9rwgQrYZLvLqKn7LU0IOdBEhRBay', 'admin', NULL, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(2, 'Dr. Sammy Daugherty DDS', 'ryan.mazie@example.net', NULL, '$2y$10$4fH13mFUtoTOHT3pe1lCuOgeeLCr7v7jjlJAuag5c6XOciuuESTk2', 'staff', NULL, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(3, 'Clemmie Schumm', 'langworth.elouise@example.net', NULL, '$2y$10$P.tFQ5JVokZU59MQagQlAeeKS8V9AJMIUeTix0Aool5hpY6XAp1Y6', 'staff', NULL, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(4, 'Eddie Hermiston', 'heaney.marisa@example.org', NULL, '$2y$10$i5wN27bmV.BaOmcS7DAAX.xWR5cvSYy1gJktaEkqWeQEfvkgjn6bi', 'staff', NULL, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(5, 'Mario Baumbach', 'kane.schmeler@example.net', NULL, '$2y$10$wtouIXt3mmNqaXOKUS9LKuoTd3RUCBuHqrUl78fiJw0aGPCvR1v8.', 'staff', NULL, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(6, 'Devante Rempel', 'mekhi.oconnell@example.com', NULL, '$2y$10$E4gLMgWZV2TamTxj0DDb4eT5ytHS2BI6eKqN0LXeaCWOdC/ghJyna', 'staff', NULL, '2024-02-04 08:30:25', '2024-02-04 08:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint UNSIGNED NOT NULL,
  `district_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` int DEFAULT NULL,
  `paid` int DEFAULT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `district_id`, `name`, `email`, `phone`, `address`, `due`, `paid`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 7, 'Gladys Lind', 'murray.tobin@crist.net', '+13343423896', '95994 Arno Keys Suite 444\nPort Jadeshire, RI 33868', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(2, 63, 'Edmund Corkery', 'alia25@cremin.com', '865-432-1915', '3898 Stacy Estates\nPort Gustave, MO 90538-1499', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(3, 53, 'Stephanie Friesen', 'bmitchell@gmail.com', '+1-212-841-9003', '63368 Hertha Squares\nMurraychester, MA 70359', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(4, 41, 'Prof. Adrian Sporer', 'swiegand@hotmail.com', '+1-541-356-9092', '562 Treutel Loaf\nChristiansenchester, NV 27014', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(5, 27, 'Tremaine Legros IV', 'cody.parker@yahoo.com', '(425) 499-3094', '41036 Little Dale\nSouth Doraton, SC 16707', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(6, 11, 'Alena Williamson', 'eliezer.bernhard@deckow.com', '1-657-956-3901', '41033 Skiles Manors\nGradychester, OR 55193-3958', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(7, 1, 'Prof. Ross Schamberger IV', 'eking@zulauf.com', '+1-586-398-1110', '9959 Adams Mission Apt. 304\nClarissaport, MS 47205', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(8, 61, 'Miss Mellie Maggio DDS', 'pturcotte@howell.com', '414.510.4658', '7273 Crist Row Suite 876\nPort Cheyanneberg, MO 84050', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(9, 21, 'Miss Christina Pfannerstill V', 'estefania.dach@hotmail.com', '1-559-914-8927', '830 Destany Hill\nWest Kendallton, MN 07212-5247', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(10, 56, 'Samson Marquardt', 'mschroeder@yahoo.com', '(507) 683-5845', '638 Sipes Mountains Apt. 223\nEmelyburgh, KY 97541-7174', NULL, NULL, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `district_id` bigint UNSIGNED NOT NULL,
  `agent_id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` mediumtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Processing',
  `contract_price` int NOT NULL,
  `paid` int DEFAULT NULL,
  `due` int DEFAULT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `district_id`, `agent_id`, `first_name`, `last_name`, `email`, `phone`, `dob`, `passport_no`, `nid_no`, `address`, `note`, `description`, `status`, `contract_price`, `paid`, `due`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 11, 8, 'Chandler', 'Wilderman', 'bartholome.hyatt@example.org', '+15637738076', '1972-11-20', NULL, '8380335965', '50514 Zoe Freeway Suite 018\nWest Rosastad, OK 93208-3722', 'Molestiae tempore ipsum est possimus.', 'Voluptatem consequatur molestiae et error dicta. Velit architecto facilis officiis ut voluptas enim. Fugit sit ut minus nisi asperiores.', 'Success', 6675, 3136, 1216, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(2, 54, 10, 'Jeanne', 'Bergstrom', 'dare.joshuah@example.net', '980.646.3945', '1976-08-31', '1752451058', NULL, '767 Fritz Parkway\nRobertsstad, WV 01052', 'Veritatis reprehenderit libero non illo suscipit.', 'Sed et eaque corrupti sed quo. Repudiandae doloremque nam quisquam eaque vel unde. Dolore esse corporis quaerat reprehenderit nisi error. Fugit perspiciatis ex et enim repellat quaerat unde.', 'Success', 9245, 6502, 7374, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(3, 45, 4, 'Tito', 'Murray', 'lavonne.senger@example.net', '1-641-980-8441', '1977-04-19', NULL, NULL, '8218 Muhammad Brook\nTonitown, VT 19346', 'Sed molestiae quidem placeat dolorem nobis officia sunt.', 'Doloribus omnis praesentium temporibus sequi corporis ut placeat. Necessitatibus quis est repellendus velit sint id rem. Ipsa modi illo deserunt cum. Qui qui rerum dolorum ea dicta quia.', 'Processing', 6819, 7534, 6027, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(4, 12, 10, 'Mina', 'Hayes', 'fkirlin@example.org', '631-722-0854', '1989-11-26', NULL, '4621880290', '721 Nicolas Manor Apt. 348\nO\'Harashire, AZ 04581', 'Dolores non eius fuga ut sed at consequatur.', 'Dolorum porro et placeat excepturi. Sapiente ut enim expedita est sequi dolores. Nesciunt non omnis rerum enim necessitatibus neque.', 'Failed', 4173, 1204, 2020, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(5, 42, 3, 'Delta', 'Dicki', 'creola.price@example.com', '586-746-8852', '1983-09-02', '4787716548', NULL, '3141 Fadel Fields Suite 511\nEast Judy, WV 81013', 'Sit laudantium repudiandae maxime dolores.', 'Sit voluptates veniam dolores iste. Exercitationem ut corporis debitis veritatis sequi delectus voluptates. Est et illum nesciunt in doloribus incidunt a.', 'Failed', 2253, 6036, 1154, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(6, 42, 4, 'Eli', 'Hoppe', 'eugenia31@example.org', '435.698.1428', '2006-06-07', NULL, NULL, '883 Duncan Plains\nLake Litzy, IN 73709', 'Non quis sint unde veritatis modi.', 'Et autem quam deleniti quaerat consequatur provident laudantium. Sed ut rerum totam eveniet velit. Aut in sunt voluptatem. Officiis repudiandae aspernatur quae dolore omnis temporibus.', 'Failed', 5189, 2990, 8948, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(7, 7, 5, 'Leonie', 'Brakus', 'xpaucek@example.com', '385-301-5183', '1980-12-30', '4169532920', '6934063213', '176 Bosco Cape Apt. 950\nLindatown, MD 49201', 'Quia ea dolorum totam excepturi nisi officiis enim.', 'Quibusdam nihil enim numquam culpa nulla porro voluptatibus. Dolorem provident ab repellendus vitae modi eveniet aspernatur. Illo veritatis reiciendis voluptate qui incidunt hic.', 'Failed', 5536, 4737, 3554, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(8, 28, 2, 'Carolyne', 'Dietrich', 'ricky96@example.net', '1-234-836-3590', '1972-12-11', NULL, NULL, '98754 Treutel Motorway\nWest Edfurt, WV 08754', 'Molestiae odit eligendi nostrum eum.', 'Qui mollitia consequatur atque est et ipsam. Beatae consequatur in dolores exercitationem est. Recusandae alias fuga beatae aliquid possimus. Quas accusamus consequatur quam molestias enim qui. Sunt quis omnis doloremque ducimus assumenda inventore consequatur.', 'Failed', 7718, 94, 6440, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(9, 21, 1, 'Garry', 'Grant', 'velma31@example.org', '(518) 743-8527', '2006-01-07', NULL, NULL, '49973 Metz Lodge\nAidenton, VA 56810-0113', 'Reprehenderit ut perferendis ut tempora adipisci quia odio.', 'Quis eum voluptas numquam nobis deleniti distinctio modi. Sint porro adipisci incidunt quidem fugiat voluptatum aut impedit. Possimus molestiae provident nisi eum non sed. Magni consequatur laborum vel excepturi saepe amet occaecati enim.', 'Failed', 3797, 889, 4756, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(10, 39, 4, 'Conrad', 'Goodwin', 'hessel.humberto@example.org', '(914) 537-2754', '1994-10-03', NULL, '5064270973', '2329 Dibbert Route Apt. 633\nWeberland, MA 95985', 'Distinctio vero magni consectetur sed.', 'Perspiciatis debitis et deserunt rerum ut. Numquam nisi earum voluptas libero quo et. Sequi ut atque cum dolore sed commodi earum.', 'Failed', 3276, 2652, 433, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(11, 16, 10, 'Kamron', 'Braun', 'lkoch@example.org', '202.953.3457', '2014-03-27', '5208194048', '8860671152', '23116 Timmy Island Suite 894\nWest Lucienneton, IL 91446-6576', 'Quo non nulla repellendus praesentium.', 'Sit et dolorem impedit officiis. Unde id ut dolor laboriosam laudantium quibusdam. Omnis accusamus incidunt corrupti voluptatibus autem corrupti.', 'Success', 1480, 3306, 6890, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(12, 1, 10, 'Domingo', 'Howell', 'rosenbaum.veda@example.org', '458-421-0794', '2022-01-19', '4942015982', '1091643455', '6009 Thompson Well\nNew Bryonview, ND 56953-7486', 'Alias ut dolor repellendus ullam cum voluptatem quo.', 'Assumenda aliquam iste ut et voluptatibus rerum fugit cumque. Ex repudiandae quam qui quod eveniet. Et aut rerum vel minima dolor cum. Delectus rerum ratione unde voluptatem.', 'Processing', 4741, 9851, 3249, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(13, 29, 7, 'Ludwig', 'Lowe', 'arch.heathcote@example.org', '+1.629.664.1779', '2005-04-28', NULL, NULL, '87976 Goldner Locks\nSouth Khalil, NJ 69452', 'Tempore doloremque illum neque doloribus.', 'Quo temporibus at commodi expedita fugit aspernatur. Non doloremque minima ut aspernatur ut dolore. Et vero laudantium dolorum rem et.', 'Success', 9292, 9175, 6315, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(14, 47, 10, 'Melany', 'Keeling', 'bridget87@example.org', '1-240-880-3085', '2010-12-21', NULL, NULL, '2064 Helena Cove\nEast Mohammadfurt, NY 38438', 'Et quas non provident nemo et ducimus.', 'Sunt nesciunt quibusdam unde omnis similique. Fugit fuga vero vero a. Placeat sit et ab quia et ratione ipsa.', 'Success', 7972, 1619, 651, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(15, 29, 1, 'Chet', 'Bins', 'bmurphy@example.net', '+1 (262) 567-1693', '1997-04-12', NULL, '3385074383', '625 Hermina Plain Suite 729\nSouth Lois, KS 69936-7679', 'Ex consequatur nobis et a dolorem cupiditate ex.', 'Aut amet explicabo laudantium aut. Et sed iste amet quaerat ut. Placeat facere magnam voluptatum blanditiis ea deleniti doloribus.', 'Failed', 2670, 8062, 7851, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(16, 63, 7, 'Shyann', 'Boehm', 'lavinia.bode@example.net', '1-669-824-2273', '1985-10-05', NULL, '1397258425', '160 Shields Divide Apt. 383\nHeidenreichport, VT 53205-1920', 'Est illum voluptate et.', 'Doloremque neque error autem optio vel. Autem commodi inventore ut facilis quibusdam praesentium. Dolorum est vero consequatur magni.', 'Processing', 4617, 3251, 4245, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(17, 47, 4, 'Tommie', 'Blanda', 'odessa84@example.org', '586.616.5509', '1985-11-10', '7360876983', '6733817368', '265 Bartell Pike Suite 528\nNorth Darlene, AZ 91005', 'Deleniti minus at corrupti sed qui unde.', 'Autem totam magni aut aperiam eligendi accusantium minima assumenda. Velit autem quo nam et et. Autem reprehenderit quos voluptatem animi neque quia. Veniam commodi magnam nemo porro et.', 'Failed', 2201, 1697, 1280, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(18, 6, 3, 'Newton', 'Johns', 'dbahringer@example.org', '+1-223-768-1386', '1989-07-19', NULL, NULL, '2003 Ankunding Spurs\nNikoberg, AZ 25005', 'Tempore hic et sint expedita ea qui et.', 'Omnis pariatur voluptas incidunt incidunt. Pariatur nesciunt voluptas velit est. Magni eaque id non minima. Iste et tempora quo nobis.', 'Success', 9111, 5526, 2630, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(19, 58, 4, 'Mozelle', 'Wolff', 'elenor.conn@example.org', '+1-865-636-8919', '1993-01-02', '9542859121', NULL, '2788 Hackett Mall Suite 146\nSouth Jedville, CA 67547-8989', 'A corporis quam necessitatibus illo dolores.', 'Eius minus et doloribus quia. Illo officia voluptatem reprehenderit id.', 'Failed', 1048, 1972, 489, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(20, 54, 8, 'Anne', 'Murray', 'zulauf.manley@example.com', '201.480.5374', '1979-09-29', '3248642507', NULL, '235 Tad Mountains Apt. 381\nEdwinfort, NE 47709', 'Atque possimus veniam et qui perferendis qui reprehenderit.', 'Delectus velit aspernatur doloribus aliquid asperiores enim dolores. Magnam sit sit non ut alias molestiae quo. Quibusdam iure aut et quod. Corrupti consequatur ipsum ut fugit vel.', 'Failed', 3225, 9888, 8887, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(21, 4, 6, 'Donnie', 'Block', 'alysha04@example.org', '+1-313-486-1010', '2022-04-02', '7155947558', NULL, '15772 Johns Locks Apt. 496\nHirthefurt, OK 51013', 'Aliquam sed ratione consequuntur et placeat.', 'Consequatur iste natus et in. Eos qui blanditiis quidem quia. Excepturi repudiandae ut eveniet natus voluptatem est ut. Hic molestiae iusto minima omnis ipsum.', 'Failed', 4678, 42, 9024, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(22, 58, 6, 'Katelin', 'Luettgen', 'mschulist@example.com', '786.497.7057', '1994-02-02', NULL, '7311985134', '2774 Littel Garden Apt. 541\nEulaborough, NC 10029', 'Qui at et cumque voluptatem velit nemo dolore blanditiis.', 'Voluptatum animi quis dicta dolores quia voluptatibus saepe aut. Quas cumque ea illum quisquam. Ea est qui deserunt ab impedit voluptatem fugiat. Et aliquid harum sed id dolorem facilis neque. Eum qui nesciunt adipisci fugit amet aliquam quis.', 'Success', 4979, 1386, 5571, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(23, 28, 2, 'Cassandra', 'Moen', 'ryan.walker@example.org', '+1-901-761-3723', '2012-02-16', NULL, NULL, '670 Shayna Key\nLake Sibyl, KS 28327', 'Ea officiis voluptatem inventore.', 'Ad autem quaerat quis laudantium. Excepturi quasi rerum et aut quidem. Omnis modi ducimus fugit veniam beatae.', 'Success', 6394, 3528, 4428, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(24, 27, 4, 'Elenora', 'McClure', 'luigi.harris@example.org', '1-248-556-5671', '1997-08-22', NULL, '1871223731', '830 Eden Row Apt. 768\nEast Rosie, NH 07361-4385', 'Officia asperiores aut libero corporis atque eius.', 'Aut blanditiis voluptas tenetur ducimus rerum. Ea sit vero dolorem maiores enim iure numquam quisquam. Laborum accusantium et iusto qui. Ut nemo est veritatis repellat.', 'Failed', 1348, 1527, 3724, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(25, 37, 10, 'Candace', 'Heathcote', 'jedediah97@example.org', '+1-704-424-7146', '2007-07-22', NULL, NULL, '199 Sydney Forks Suite 389\nAlekchester, NM 39489-0521', 'Similique dolorum harum consequuntur omnis et voluptate veritatis.', 'Hic fuga ut eos qui consequatur nostrum adipisci quae. Asperiores asperiores quia dolores saepe repudiandae. Voluptatum sit omnis ratione debitis sequi ducimus sint. Odit praesentium voluptates fugiat aut corrupti qui.', 'Success', 9211, 9690, 3045, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(26, 22, 9, 'Wiley', 'Keebler', 'rafaela88@example.org', '442-723-5379', '2012-05-09', NULL, '3176800225', '66747 Eichmann Ridges\nJanisborough, NM 33165', 'Cupiditate et deleniti expedita est praesentium.', 'Molestiae harum ducimus cumque repudiandae occaecati. Accusamus possimus veniam et. Velit officiis eum eius sunt velit non. Culpa iure nihil dolorem similique exercitationem molestias est.', 'Failed', 4799, 6660, 3976, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(27, 42, 5, 'Palma', 'Bosco', 'kozey.geraldine@example.com', '+1.559.226.1907', '1990-07-23', NULL, '9587655447', '4599 Melody Plains\nLake Deshawnchester, VA 72281', 'Provident eveniet blanditiis aspernatur quisquam quia consectetur.', 'Aut ea iusto vel velit cupiditate eligendi doloremque. Culpa sed quia quis aperiam voluptas blanditiis ea quia. Voluptatem dolorum qui ut est ut. Aut aliquid sit mollitia illo ducimus temporibus.', 'Processing', 4568, 5453, 906, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(28, 34, 4, 'Eloise', 'Cremin', 'lang.blair@example.org', '650.538.9614', '2004-01-30', NULL, '0564736011', '204 Flo Prairie\nLake Danielletown, PA 60547-7957', 'Quo quo deleniti consequatur qui voluptate maiores.', 'Consectetur possimus minus eos quisquam. Rerum ab ut fugit quia vel distinctio. Sunt est iusto ea cum quas totam in. Dolores deserunt voluptatem excepturi omnis et voluptas ex eos.', 'Success', 7572, 1096, 6343, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(29, 46, 2, 'Andrew', 'Ullrich', 'fblock@example.org', '+1.678.895.2603', '2019-06-04', NULL, NULL, '3847 Stracke Keys Apt. 985\nChamplinland, WY 65359', 'Et quo dolorem labore.', 'Nisi officia odio voluptatem. Et repellat possimus necessitatibus non tempora voluptas expedita error. Sit consequuntur facilis ex quos vitae natus placeat placeat. Aliquam labore voluptatem aut.', 'Success', 1736, 8430, 8172, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(30, 25, 4, 'Angeline', 'Daniel', 'osinski.amira@example.com', '+18564061161', '2021-11-29', NULL, '4638661353', '2577 Batz Terrace\nMannville, NV 84010-0588', 'Cupiditate ut eum et eveniet soluta.', 'Consequuntur aut culpa unde cupiditate quia ut doloribus quam. Qui qui adipisci alias tempore voluptatem ut. Qui delectus qui quia officia non quaerat. Dolor nostrum unde quod sapiente magni. Eaque voluptatem quo et nostrum.', 'Success', 9107, 3210, 141, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(31, 48, 9, 'Willie', 'Torphy', 'adeline03@example.org', '1-617-644-2183', '1984-12-06', '5582057685', NULL, '1512 Ricky Dale Apt. 552\nGaylordfurt, VT 01443', 'Nostrum enim nostrum qui libero et autem.', 'Aut a et doloribus et. Distinctio doloribus nostrum nisi labore reprehenderit est sed. Ullam quia iste iste ut voluptatem aut est. Consectetur nisi ut quisquam voluptate mollitia expedita nihil.', 'Success', 6920, 2312, 840, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(32, 20, 2, 'Euna', 'O\'Conner', 'foster87@example.org', '757.585.7562', '2006-03-03', '7079384292', '5802949286', '8675 Little Roads\nHermannchester, ND 13521', 'Accusamus aut ut ut consequatur sint.', 'Deserunt repudiandae qui enim atque officia distinctio illo quia. Omnis corporis ipsum saepe nisi qui ipsa. Repellat vel necessitatibus dolorem aut adipisci. Suscipit voluptas sequi iste enim porro repudiandae quis.', 'Processing', 1548, 6362, 8588, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(33, 28, 7, 'Leonard', 'Johnson', 'wgutkowski@example.net', '+1-763-243-1119', '2005-07-21', '8181494533', NULL, '582 Nitzsche Dale\nRippinborough, IN 94689', 'Nihil id dignissimos consectetur in.', 'Ex voluptatem error libero adipisci eos voluptas nesciunt. Aliquid adipisci eos inventore saepe.', 'Success', 4430, 3090, 22, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(34, 52, 5, 'Margot', 'Reichert', 'keegan08@example.com', '+12402504651', '1992-05-06', '0114883801', '6267981894', '7362 Oliver Mountains Apt. 399\nEast Margarettamouth, MS 27882', 'Consequatur cum dolorem magnam quisquam inventore ad mollitia.', 'Perferendis labore est unde repellat aliquid. Est odit est quidem. Ipsam aut nihil optio ut magni architecto quo.', 'Processing', 5303, 5593, 8327, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(35, 33, 6, 'Teresa', 'Batz', 'zreichel@example.net', '1-973-488-5592', '1991-09-22', NULL, '8137278758', '6901 Schroeder Hills Suite 942\nNorth Jazmynborough, DE 97085', 'Natus autem et aut consequatur ullam.', 'Ipsam vero ea sapiente impedit reprehenderit odio. Blanditiis officiis qui et consectetur. Iste quasi aut iure cum.', 'Failed', 3646, 3539, 5973, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(36, 25, 3, 'Arden', 'Towne', 'frami.maximillian@example.net', '+1-209-349-1243', '1977-07-04', '9186483193', '5992711926', '3504 Breitenberg Trace Suite 958\nFadelside, LA 43747', 'Ab aperiam similique fugiat enim distinctio.', 'Sunt officia dolorem voluptas ipsum est sed facere. Excepturi praesentium id non. Iste sit aperiam unde amet aut aut. Explicabo dolore error nemo.', 'Failed', 4828, 3543, 7623, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(37, 44, 5, 'Rachael', 'Jacobs', 'charlene.schowalter@example.com', '843-243-6064', '2007-11-19', '7710648202', NULL, '421 Breana Creek\nBlaisemouth, MN 04549-1517', 'Dolor atque placeat et aut incidunt.', 'Voluptas quo ipsam dolore non consectetur maiores. Et rerum est suscipit error. Iste eos id consectetur quo consequuntur et. Et quibusdam omnis voluptatem nostrum.', 'Success', 8508, 9699, 991, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(38, 60, 9, 'Jevon', 'Ferry', 'arlo07@example.org', '+1-559-461-2928', '1980-03-18', '7237557639', '0757023102', '7965 Elsa Extension\nCormiermouth, NM 23270', 'Ea libero fugiat nesciunt molestiae sint.', 'Fuga debitis aperiam consequatur. Dicta nisi minus facere minima. Totam omnis dignissimos omnis sit. Accusantium ea perspiciatis quasi a reprehenderit.', 'Failed', 2091, 7799, 3723, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(39, 52, 9, 'Domenic', 'McCullough', 'greenfelder.noble@example.org', '+1-561-825-7251', '1996-04-26', '5810214534', '3545189739', '529 Grimes Overpass Apt. 322\nAracelymouth, ME 91302-1676', 'Voluptatum dolorum earum odit eos consequatur aperiam.', 'Fuga magnam nihil accusantium dolor perspiciatis qui. Porro enim suscipit molestias aut similique. Quia reiciendis impedit commodi facilis quis. Nisi odio laudantium fuga nihil consequuntur.', 'Success', 1042, 8356, 7703, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(40, 12, 7, 'Alessia', 'Torp', 'hoppe.casimer@example.org', '1-240-974-0888', '2018-06-17', '7511756665', '5766373881', '1757 Aylin Hills Suite 942\nUptonside, WY 52740', 'Quaerat qui totam facilis modi eum numquam.', 'Sunt explicabo sit adipisci magnam. Praesentium accusamus sit sed sed voluptate dolor quod. Distinctio provident sit animi recusandae enim dolorum quia.', 'Failed', 9329, 1115, 5541, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(41, 23, 3, 'Reagan', 'Konopelski', 'stark.austyn@example.org', '925-426-2127', '1996-02-14', NULL, NULL, '293 Bosco Plaza\nEast Angelinaton, NV 84190-4550', 'At libero tempora temporibus quibusdam.', 'Aliquid animi molestiae sint. Et soluta nihil voluptatem odio amet iusto. Aut natus vel tempora qui iure.', 'Failed', 6927, 2804, 7649, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(42, 2, 3, 'Clay', 'Boehm', 'gillian.boyle@example.com', '+1-281-518-4776', '1998-10-22', '2402230734', NULL, '6218 Austin Loaf Apt. 632\nKayaberg, AL 76866-3741', 'Ab porro repellat et corrupti aperiam aut sint.', 'Est consequatur impedit molestiae cupiditate modi harum sunt nostrum. Consequatur distinctio optio aut soluta dignissimos odio. Quasi itaque molestias doloribus libero officiis et. Assumenda ducimus dolores molestiae provident quis libero vel aspernatur. Alias itaque nulla inventore nemo ipsum.', 'Processing', 7062, 5088, 3272, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(43, 5, 9, 'Sigurd', 'Conroy', 'gottlieb.bethany@example.net', '423-959-7494', '1977-10-23', NULL, NULL, '447 Hartmann Trafficway\nMustafastad, PA 41249', 'Officia aperiam mollitia voluptatem laborum.', 'Corrupti iusto non rerum non. Dolorem tenetur perferendis tempora tempore occaecati. Deserunt aperiam omnis possimus aut blanditiis dolores.', 'Success', 2620, 2943, 2748, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(44, 60, 4, 'Tania', 'Herzog', 'jaden95@example.org', '+1 (213) 571-3788', '1972-05-25', '3465163766', '4936662533', '22563 Waters Curve Suite 640\nKeeblerton, MI 60231-0222', 'Reiciendis iusto nostrum voluptatem totam ea veritatis.', 'Rerum quae et enim ducimus quasi et. Molestias illum qui et esse porro est. Nihil qui velit velit in aut deleniti. Minus corporis voluptas debitis.', 'Success', 2079, 6825, 5348, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(45, 59, 8, 'Earl', 'Schimmel', 'turcotte.unique@example.net', '(445) 553-5422', '2007-04-20', '4945227429', NULL, '9626 Katlynn View\nAishachester, VA 59500-8686', 'Consequuntur tempora autem nihil ut autem alias.', 'Cumque ea voluptatem fugiat quibusdam corrupti id. Repudiandae ex cum porro. Id ut excepturi iure beatae qui.', 'Failed', 4817, 7469, 1117, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(46, 4, 3, 'Herman', 'Nikolaus', 'rutherford.flo@example.com', '(847) 353-4905', '2015-03-26', NULL, NULL, '14647 Hintz Road Apt. 488\nWildermanmouth, WI 57031', 'Recusandae voluptas ipsa eum enim.', 'Quibusdam eum et aliquid ut repellendus numquam. Vero delectus quia excepturi voluptatem atque enim. Eaque distinctio possimus et blanditiis consectetur. Quo accusantium explicabo natus.', 'Success', 9475, 6021, 5955, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(47, 5, 9, 'Candido', 'Jacobs', 'kenton35@example.com', '815-732-2204', '2015-03-23', '6522761645', '4946838723', '6351 Bogan Orchard Apt. 648\nEugeniabury, MO 30669-1889', 'Nam accusamus et consectetur qui omnis.', 'Et rerum incidunt repellat quam dolorem dicta. Eos veniam est voluptates quas at. Amet ratione aspernatur excepturi enim repudiandae enim non. Dignissimos voluptatem eaque fugit qui ea quibusdam.', 'Success', 1362, 3527, 6406, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(48, 19, 2, 'Yasmine', 'Ebert', 'xwiegand@example.com', '(360) 452-8251', '2021-11-11', '4495395388', NULL, '62338 Aurelie Knolls Apt. 152\nRunteton, NE 35587', 'Voluptatem repellat in ut consequuntur unde voluptas deserunt sequi.', 'Cupiditate dolorem nemo hic recusandae. Praesentium id culpa excepturi aut quisquam totam est vel. Labore aut sunt quia enim. Eos dolores fuga error sed similique.', 'Processing', 2179, 7258, 6137, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(49, 55, 2, 'Jo', 'Wolf', 'felicia.mann@example.com', '+1.703.622.6107', '2015-05-26', '1167226744', NULL, '71743 Ted Hill\nNew Cheyanne, CA 66094', 'Itaque adipisci deserunt rerum vitae.', 'Vero id asperiores reiciendis dignissimos fugit quia nihil. Officia ut aut qui. Facilis iste et ex a vitae.', 'Failed', 9158, 3458, 5042, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(50, 32, 9, 'Adriel', 'D\'Amore', 'lisette70@example.org', '+1-380-987-6886', '1970-10-05', NULL, NULL, '529 Rath Skyway\nLake Kristofer, OK 93685', 'Ea iste odit nesciunt blanditiis delectus.', 'Consectetur reiciendis explicabo ea sed iste sit. Velit qui ab ea deserunt ullam culpa necessitatibus. Facere non sunt aut rerum laboriosam nulla odit. Optio et quis ut eos libero saepe officiis tenetur.', 'Failed', 7075, 1918, 6218, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(51, 23, 4, 'Joshua', 'Hoeger', 'americo.little@example.net', '(412) 944-5089', '2021-06-24', '0173601059', NULL, '297 Krajcik Ferry Suite 521\nWest Estel, VT 23052-7072', 'Quod dolorum similique similique iure.', 'Nemo rerum voluptatem ut porro explicabo eos similique. Sed velit eum quae doloremque aut eligendi iste. Blanditiis necessitatibus maxime laudantium similique accusantium et. Commodi aliquam qui ducimus et voluptatem.', 'Processing', 3851, 3051, 3132, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(52, 48, 10, 'Jaylen', 'McKenzie', 'jcremin@example.com', '313.584.0352', '1994-08-05', NULL, NULL, '13095 Ashtyn Knoll\nLibbyfort, AL 57271', 'Iste reiciendis unde sit ipsum mollitia aut commodi dolor.', 'Esse et sunt autem fugit dolore eveniet. Reprehenderit aut ut eveniet rerum perspiciatis illum in consectetur. Facilis veritatis ut odit eveniet molestiae exercitationem enim. Et excepturi nesciunt in et eos reiciendis.', 'Failed', 2024, 6728, 4066, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(53, 53, 6, 'Arlo', 'Parker', 'randall93@example.net', '+15204992589', '1971-10-25', '7336321786', NULL, '87114 Wilkinson Island Apt. 130\nJacobiland, AK 17909-9192', 'Eius in id optio vitae dolorem accusamus error praesentium.', 'Facere sed facilis asperiores in sed esse. Voluptates neque in dolores.', 'Success', 7905, 6705, 4583, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(54, 10, 6, 'Maxime', 'Fahey', 'kayla75@example.org', '337-282-1337', '1979-01-12', '2585326765', '3290819037', '783 Wolff Avenue\nNew Eldredstad, MT 53159-5737', 'Perspiciatis natus doloremque minima.', 'Ducimus est amet debitis ipsum quidem. Et qui velit et quod dolorum architecto.', 'Processing', 1128, 1257, 1607, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(55, 15, 4, 'Jarvis', 'Leannon', 'hahn.vicente@example.net', '+1-207-912-9404', '1978-06-16', NULL, NULL, '529 Tamia Brooks Suite 466\nFinnstad, AK 21484-1806', 'Est excepturi dolore reiciendis reprehenderit aut non quam vitae.', 'Ut eum enim voluptatum voluptatem id quod. Nam iste voluptas voluptas qui deserunt. Quo a laboriosam velit.', 'Processing', 5197, 3211, 2170, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(56, 39, 5, 'Ryann', 'Schultz', 'josiah.smith@example.com', '361-368-7190', '2003-08-09', '8750799962', NULL, '97384 Heathcote Underpass Apt. 838\nMadysonhaven, NH 30371', 'Eos sunt esse eos inventore earum distinctio.', 'Eveniet unde temporibus commodi. Enim voluptatem veritatis numquam amet est. Voluptas iste illum sed earum.', 'Success', 5703, 1073, 5038, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(57, 52, 9, 'Gabriel', 'Hackett', 'melyna.bergstrom@example.org', '1-331-767-8277', '1996-08-12', '8237575503', NULL, '64139 Brakus Mall Apt. 071\nJewellstad, SC 94202', 'Ex ea aut cum adipisci corporis optio placeat.', 'Illum repudiandae voluptatem aliquam nihil sed. Excepturi non quisquam eos non. Architecto dignissimos fugiat consequatur fuga.', 'Processing', 7131, 1501, 2625, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(58, 17, 7, 'Francisca', 'Howell', 'cremin.lily@example.org', '+1-503-607-3548', '2002-11-23', NULL, '4165562076', '576 Bauch Parkway Suite 595\nNorth Reed, CA 89666', 'Ipsa adipisci quam sint et repudiandae vel dolor.', 'Recusandae consequatur nostrum iusto doloremque quia et. Reprehenderit omnis soluta officiis. Sequi iste quis et at. Sint totam porro velit consectetur totam quia.', 'Processing', 5684, 87, 4491, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(59, 22, 6, 'Ole', 'Howe', 'lrodriguez@example.org', '223.355.1139', '1994-07-15', '9587253174', '1698563730', '545 Delilah Views\nLake Lucio, IN 28711', 'Minima rerum quisquam sapiente magnam consequatur.', 'Ea cupiditate provident nam pariatur et. Sed eos quia libero quis ipsum. Aperiam eveniet molestias excepturi vel magnam libero ut. Assumenda est velit consequatur voluptates.', 'Processing', 9989, 5962, 9319, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(60, 15, 9, 'Kira', 'Frami', 'stoltenberg.lysanne@example.org', '+1-956-999-6025', '1992-03-01', NULL, '5972026951', '54173 Reed Throughway\nFlaviebury, KY 40327', 'Qui rerum quia consequuntur.', 'Eos quia adipisci enim consequatur. In quaerat corrupti laboriosam occaecati. Omnis exercitationem iure nihil sit maxime dolorem possimus perspiciatis. Fugiat reprehenderit iste tenetur incidunt similique distinctio.', 'Processing', 7320, 8805, 4120, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(61, 14, 9, 'Chloe', 'Hickle', 'cmckenzie@example.org', '650-798-5882', '1974-07-10', NULL, NULL, '83368 Kristy Glens Apt. 915\nDickensport, IL 70161', 'Pariatur et et consequuntur qui voluptas impedit voluptatem.', 'Laboriosam reprehenderit ea porro quas. Quo sed quia est et repellendus. Nesciunt quia alias molestiae et qui corporis. Quos dolor ad praesentium et id.', 'Success', 3013, 7402, 4450, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(62, 47, 2, 'Selena', 'Aufderhar', 'estel.lehner@example.com', '201-795-3282', '1970-01-27', '2293479353', NULL, '18318 Merritt Islands\nPort Janessashire, MA 48665', 'Et odio soluta neque facilis doloremque ab.', 'Nisi excepturi et sint ipsa aliquid iste. Inventore autem nesciunt ut quia est. Eum officia consequatur sit magni voluptatibus.', 'Processing', 5982, 4999, 4592, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(63, 54, 1, 'Celia', 'Runolfsdottir', 'stroman.elouise@example.org', '+1-435-626-7193', '1972-07-02', NULL, '7761018691', '5611 Morar Views\nEast Allen, DC 18275', 'Id maxime id excepturi recusandae praesentium.', 'Voluptatem illum temporibus sed aut quia doloribus. A esse sunt omnis quisquam praesentium accusamus suscipit.', 'Success', 9993, 7439, 4762, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(64, 49, 7, 'Nathaniel', 'Lemke', 'murl38@example.net', '(351) 253-3205', '2011-10-13', NULL, '6200929193', '23935 Kristoffer Court Apt. 991\nEast Abbie, TN 49673-1022', 'Voluptatem recusandae aut animi dolorem.', 'Labore perspiciatis molestias sed voluptatem nobis laudantium nemo aut. Sint quo harum magnam labore iusto. Quia temporibus eveniet enim optio mollitia soluta labore sunt. Dolorem sed quos similique architecto optio.', 'Success', 5966, 6727, 172, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(65, 56, 2, 'Idella', 'Schneider', 'ldietrich@example.net', '+1 (860) 486-2336', '1977-05-08', NULL, NULL, '3464 Nella Crossing Apt. 596\nPort Amelie, NJ 09927', 'Magnam porro magni quibusdam laboriosam distinctio non reprehenderit.', 'Sit omnis iure rerum sed ullam. Distinctio voluptatem quis voluptas et est. Et eum vel ratione qui.', 'Processing', 9532, 5948, 2417, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(66, 52, 9, 'Eleanora', 'Bartell', 'shields.olga@example.net', '603-742-4213', '2022-09-23', NULL, NULL, '968 Beer Glen Suite 646\nPort Koreyport, MS 35250', 'Illo autem molestiae qui sit.', 'Et nihil asperiores repellendus quis ex hic ut. Consequatur quia est qui ut.', 'Success', 7221, 3917, 857, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(67, 18, 7, 'Richie', 'Jerde', 'lucie81@example.net', '+19129590493', '2023-04-08', NULL, NULL, '87231 Darren Road Apt. 466\nPort Reannashire, WI 75792-7330', 'Nam eos officiis id et sed iure.', 'Qui sed voluptatum doloremque rerum optio earum. Impedit sint maxime praesentium voluptas tempora. Deleniti rerum nemo in asperiores et. Inventore necessitatibus aut eligendi itaque.', 'Failed', 8015, 2423, 1669, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(68, 37, 7, 'Vaughn', 'Parker', 'penelope.goyette@example.com', '1-775-535-3257', '2019-09-04', NULL, '0172800228', '365 Katelyn Falls Suite 571\nRennermouth, VA 74936', 'Iusto et officiis est id autem.', 'Labore molestiae et necessitatibus nisi est ducimus. Facilis numquam ratione rerum tenetur voluptatem delectus. Commodi molestiae voluptatem aperiam ad corrupti quis.', 'Success', 1478, 6602, 7829, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(69, 51, 5, 'Lourdes', 'Fahey', 'erna.simonis@example.net', '689.474.7621', '1983-01-10', NULL, NULL, '70577 Alvina Falls\nAlexaneburgh, VA 54753-4478', 'Eius non assumenda at tempora totam.', 'Tempora ipsam omnis nobis officia aut molestiae. Ullam et nisi voluptate eos veniam dolores. Sed repudiandae repudiandae aliquid tenetur fugit cumque ea.', 'Failed', 5464, 8438, 9147, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(70, 36, 10, 'Alda', 'Schoen', 'harber.kolby@example.net', '+1 (225) 588-0028', '2013-05-05', '8070882529', '7890766057', '4798 Mayer Squares\nZulaufton, AR 90237', 'Unde saepe consequatur voluptatibus suscipit distinctio ipsam fugit.', 'Veniam explicabo omnis velit explicabo delectus ipsum. Corporis consequatur corrupti itaque quia non. Aut culpa quaerat sed. Voluptas adipisci enim quibusdam quibusdam accusamus.', 'Processing', 8746, 1811, 5186, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(71, 33, 2, 'Kamille', 'Fahey', 'kcole@example.com', '+1.463.356.9307', '1995-11-22', '3235219723', NULL, '573 Kub Lane Apt. 103\nEast Randiborough, NH 15882', 'Cum libero impedit velit.', 'Est nisi ut unde. Neque sed magni earum voluptatum labore praesentium repudiandae. Est sit quia id adipisci. Blanditiis in facilis facere sit iure amet molestiae voluptates.', 'Processing', 2285, 6714, 6080, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(72, 49, 9, 'Mariane', 'Fadel', 'alvera.feest@example.com', '+1-630-674-5111', '1985-01-17', NULL, '0886867541', '5941 Kaylah Station\nNitzscheview, UT 81271', 'Non pariatur dolores ea ut excepturi atque.', 'Praesentium aut quos sed neque. Non eum quae dolor sed blanditiis et esse impedit. Veritatis totam dolores debitis sapiente quo.', 'Failed', 5599, 7316, 5690, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(73, 45, 6, 'Viola', 'Williamson', 'vincenza.runolfsson@example.com', '+1.847.792.6237', '2008-10-21', '5300780879', NULL, '866 Pacocha Crest\nBethelside, ID 53672', 'Occaecati voluptate consectetur impedit aut omnis.', 'Esse dolore commodi est magni dolorem. Et provident doloremque voluptas voluptatum sit natus. Repellendus mollitia alias voluptas porro provident aspernatur recusandae esse. Veniam dolor error nulla voluptatem ullam.', 'Failed', 4076, 5582, 6112, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(74, 27, 6, 'Markus', 'Streich', 'cleveland.ferry@example.org', '+1 (785) 262-3072', '2003-04-11', NULL, '3464998589', '67600 Conroy Ville Apt. 689\nWest Ignacio, NC 95759', 'Dolorem vero non optio aut blanditiis.', 'Cumque nostrum animi nisi iste. Adipisci qui asperiores ab velit architecto. Labore et ut voluptates hic. Eligendi necessitatibus voluptatum iure quam omnis in qui.', 'Processing', 1132, 3789, 4544, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(75, 18, 8, 'May', 'Abshire', 'lesch.felix@example.com', '631.322.4751', '2013-04-06', '6082424311', NULL, '22646 Gorczany Shores Apt. 771\nCruickshankfort, MT 32709', 'Vitae id vitae voluptatem id nisi nisi.', 'At accusamus officiis qui. Officiis sapiente provident nam non porro. Ipsam doloribus eligendi consequatur fugiat quia animi. Explicabo minus aut quasi ex.', 'Processing', 7913, 4624, 4680, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(76, 5, 1, 'Edwin', 'Ebert', 'eveum@example.org', '+19734878241', '2011-07-10', NULL, NULL, '75946 Earnest Curve Suite 132\nPort Rileybury, WV 53902', 'Voluptates omnis placeat aut qui.', 'Similique eos quia velit. Nihil et eaque et iusto modi itaque placeat. Totam voluptatem tenetur ex sint quae aut.', 'Success', 1344, 8274, 5242, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(77, 41, 5, 'Susie', 'Ziemann', 'boberbrunner@example.net', '951.678.5112', '2001-07-19', NULL, NULL, '690 Jackson Pass Apt. 922\nDelaneyport, MS 28496', 'Dignissimos quaerat natus veritatis voluptatem amet quis esse.', 'Voluptatem iste corrupti cum. Expedita non eos suscipit iure harum sed nihil. Corrupti quam rerum error ea qui. Quos doloribus autem eos incidunt quae sit illum.', 'Failed', 5107, 1064, 4345, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(78, 9, 10, 'Effie', 'Bruen', 'keebler.ulises@example.net', '262.313.5182', '2001-08-11', NULL, NULL, '404 Zboncak Meadows Suite 061\nPort Llewellynfurt, IA 75047-1629', 'Cumque animi atque ut non culpa.', 'Enim sed voluptates iste in. Excepturi deleniti aut ut sit sunt. Fuga sed ad omnis repellendus consequatur facere consequatur.', 'Processing', 3980, 1480, 4417, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(79, 2, 10, 'Lennie', 'Kozey', 'asha10@example.net', '712.442.8568', '1992-05-30', '8390671033', NULL, '277 Jermain Track Suite 833\nGorczanyport, NE 76405', 'At fuga temporibus aut magnam.', 'Incidunt fuga voluptatem voluptate non vel. Autem qui est incidunt iste temporibus rem molestias. Sit sit non ipsum omnis natus qui et.', 'Success', 7601, 3443, 2538, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(80, 29, 10, 'Hayden', 'Feeney', 'owhite@example.com', '+1-417-691-4740', '2019-02-25', '1201549065', '5766661922', '635 Morissette Common Apt. 074\nSatterfieldport, MD 55598-4886', 'Occaecati vel aut labore ut suscipit excepturi.', 'Animi provident molestiae recusandae nemo. Iste nihil itaque consequatur enim mollitia id quibusdam. Autem aliquid sunt velit nesciunt praesentium facere tenetur eum.', 'Failed', 8171, 3547, 9201, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(81, 30, 1, 'Nicholaus', 'Medhurst', 'kylee.harber@example.org', '469-277-0794', '1975-04-17', '6260283056', NULL, '261 Zola Mission\nHartmannside, AZ 30102-2208', 'Eos recusandae ullam quidem provident aspernatur delectus architecto consequatur.', 'In qui ad rerum eligendi quo rem. Hic sit ut vero quis provident aliquam molestiae quia. Est magnam sapiente perferendis quis.', 'Processing', 1612, 8082, 6026, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(82, 15, 10, 'Joana', 'Wiza', 'jana38@example.com', '1-228-575-8286', '2005-03-13', '4239740925', NULL, '5489 Glover Route\nShieldston, AR 69597', 'Qui corporis veniam sint quas.', 'Ea ut sint ut quisquam. Reiciendis saepe laudantium consequatur quis dolorem natus aut. Iusto nam eum culpa quos sint recusandae sunt enim.', 'Failed', 7224, 2537, 6648, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(83, 63, 8, 'Shaniya', 'Cruickshank', 'hoconnell@example.net', '910-496-8758', '2001-01-19', '6278414600', NULL, '67663 Shayna Throughway\nSouth Brisa, TX 68521', 'Nisi ratione sit eveniet doloremque quis sapiente.', 'Eum praesentium explicabo debitis quae nostrum maiores veniam. Consequatur et incidunt dolorem tempora et. Tenetur sed quam animi repellendus non quos. Voluptatem suscipit est delectus ut.', 'Failed', 2751, 6379, 9290, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(84, 17, 6, 'Prudence', 'Farrell', 'ebergnaum@example.net', '(480) 297-3099', '1980-03-18', '8838370468', '0326572985', '75632 Harber Crossroad Suite 023\nTysontown, ME 12736', 'Et necessitatibus molestias asperiores inventore aut.', 'Qui aut eos dolores ut officia veniam eum. Rerum voluptatum tempore quod quo explicabo aut.', 'Failed', 2204, 7338, 7074, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(85, 15, 4, 'Jennifer', 'Quigley', 'dfritsch@example.com', '623-248-3514', '2007-02-04', '4185157124', NULL, '779 Evalyn Flat Apt. 650\nSouth Lucastown, TX 15801-8152', 'Et corrupti ut saepe quia soluta optio.', 'Ut id et nihil delectus et ex quis. Porro atque qui consectetur harum inventore quam aut.', 'Failed', 7696, 4892, 5182, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(86, 43, 6, 'Vergie', 'Cummerata', 'rfahey@example.net', '332-227-1606', '1972-03-15', '3434235238', '4192972726', '165 Harvey Isle Apt. 332\nEdwinfurt, MO 47052-8241', 'Deserunt quam recusandae nulla exercitationem sit sit maxime.', 'Deserunt aspernatur architecto exercitationem eum sapiente quis necessitatibus. Est et fugit quae vitae reiciendis quas dolorum. Numquam accusantium recusandae repudiandae consequatur ratione. Voluptates ab praesentium doloremque a officiis ut cumque. Vitae id maxime placeat laudantium iusto voluptatem soluta enim.', 'Processing', 8263, 937, 2407, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(87, 17, 7, 'Holly', 'Anderson', 'malvina54@example.org', '+1.360.265.4702', '2006-11-23', '6254698544', NULL, '93115 Wiza Radial Apt. 665\nNew Keelyshire, WI 59536-2659', 'Aliquam sed in esse quo.', 'Dolor ab sit qui iste. Quam impedit esse velit quia cupiditate. Pariatur quam laboriosam possimus deleniti sed dolor fugiat. Voluptates et est et eaque consequatur aspernatur nisi.', 'Success', 7518, 59, 122, 1, 1, '2024-02-04 08:30:25', '2024-02-04 08:30:25'),
(88, 7, 4, 'Thelma', 'Green', 'runte.antonia@example.com', '651.726.4737', '2008-01-18', '8092308453', NULL, '5996 Marlon Junctions\nJordaneport, FL 06976', 'Culpa nisi corrupti culpa molestias.', 'Doloremque ut laborum nesciunt perspiciatis saepe. Laborum velit est aspernatur quo rerum et. Hic officiis unde autem. Sed minima voluptatem neque.', 'Processing', 1118, 9124, 7978, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(89, 14, 9, 'Ayden', 'Harvey', 'tanner.hyatt@example.net', '+1-972-585-4272', '2013-02-20', '3662996555', NULL, '104 Marisa Lake Suite 677\nWest Gilestown, LA 85472', 'Sed velit eum delectus dolores consequatur.', 'Quasi ut tempora maxime dolor. Id est atque asperiores aut error tenetur fugit. Est sed blanditiis magni voluptatum repudiandae eos aut. Totam dignissimos beatae consequatur voluptate consequatur.', 'Processing', 6866, 1416, 7278, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(90, 59, 9, 'Paula', 'Koch', 'hziemann@example.net', '+1-442-557-1819', '2006-08-14', '5559423060', '1798918189', '38255 Lavinia Flats Apt. 702\nEast Lane, NY 76743', 'Hic fugit dolorum iure eius iure facere.', 'Aliquam consequatur enim provident qui temporibus illo culpa sunt. Blanditiis sunt autem illo veniam amet quo id. Eos vel voluptatem molestiae quisquam.', 'Processing', 4236, 434, 1803, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(91, 21, 8, 'Narciso', 'Grady', 'gfranecki@example.org', '+1-407-847-7498', '1980-05-28', NULL, NULL, '453 Hamill Forges\nDibbertshire, UT 52956', 'Enim at veritatis possimus sint cum consectetur.', 'Et ab eveniet adipisci recusandae nemo. Eveniet eaque est sed enim illo tempore. Ullam nihil cumque mollitia tenetur quaerat eum dolorum. Ut ut magni est ipsa aut veritatis est.', 'Failed', 8520, 4519, 6317, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(92, 14, 2, 'Maybell', 'Breitenberg', 'jakubowski.darby@example.net', '+14703601722', '1981-02-05', '8150697898', '4214008214', '46094 Crona Plains Suite 779\nNew Margotshire, OR 82406', 'Nihil consequatur minus libero deserunt possimus et rerum.', 'Commodi suscipit corrupti sit ipsum. Cumque ipsa vitae expedita. Quaerat omnis id et laboriosam autem aut. Sint modi itaque et consectetur quasi.', 'Failed', 3214, 8615, 9766, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(93, 32, 8, 'Ruthe', 'Lesch', 'marks.kayley@example.com', '+1.986.478.9291', '2001-04-17', NULL, NULL, '93682 Jennyfer Ford Suite 847\nRippinborough, WY 64460-2442', 'Sint voluptatibus voluptate maxime quia ducimus in animi excepturi.', 'Nihil sed aliquid culpa facilis. Inventore assumenda nam eligendi recusandae vel. Incidunt quia eos excepturi sapiente consequatur.', 'Success', 9843, 4953, 3736, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(94, 38, 2, 'Dana', 'Hills', 'gideon98@example.net', '248.854.7624', '2008-06-15', '7760352626', '3795273303', '6161 Renner Locks Suite 479\nPort Rey, LA 26705', 'Sit minus rerum dolores accusamus et sed.', 'Voluptatem earum sit reiciendis perspiciatis adipisci quam ea ducimus. Fugit voluptates est quae quia labore occaecati. Ducimus omnis nulla quam quis et non quia eum.', 'Processing', 2698, 9701, 487, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(95, 40, 2, 'Russ', 'Block', 'ujaskolski@example.net', '858.907.6439', '1990-08-15', '3190296194', NULL, '3908 Sylvia Valley\nEast Marlene, MA 88350', 'Delectus ea eos totam tenetur.', 'Provident molestiae provident tempore incidunt excepturi animi asperiores. Qui quisquam repellat ea. Iusto laborum officia omnis.', 'Success', 2544, 6063, 8034, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(96, 4, 4, 'Fernando', 'Hammes', 'kuphal.virginia@example.net', '+1-657-202-2980', '2001-07-21', NULL, NULL, '60353 Marjolaine Loop\nNorth Madisenland, NC 30127-7189', 'Cumque sunt voluptas illo nihil officia optio voluptatem blanditiis.', 'In error impedit voluptatem quaerat eius nobis magni. Earum nisi officia libero sunt voluptates. Quia doloribus accusamus maiores ipsa aut quaerat distinctio. Quasi suscipit est aperiam qui in ea nam.', 'Failed', 7784, 9193, 9336, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(97, 42, 1, 'Ike', 'O\'Hara', 'korey.stoltenberg@example.net', '+1.225.816.3736', '1981-07-21', NULL, NULL, '748 Bailee Hills Apt. 887\nKeeblerstad, SC 40538', 'Pariatur velit alias suscipit sit.', 'Ipsum fugit voluptates non incidunt placeat. Nam nobis mollitia nihil et aliquam blanditiis. Aspernatur est enim deleniti nemo fugiat.', 'Success', 2191, 4801, 6619, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(98, 35, 9, 'Arvel', 'Schinner', 'aschroeder@example.com', '1-458-665-9961', '2005-08-13', '5139330647', NULL, '755 Jerde Rest Suite 188\nWest Ada, SC 97361', 'Doloribus est dolores assumenda aut quia ut rerum.', 'Perspiciatis dolores occaecati rerum in quae omnis. Unde praesentium praesentium autem velit cumque voluptatem. Ullam incidunt veritatis voluptatem delectus maiores. Exercitationem molestiae quos quo.', 'Processing', 1457, 2409, 4005, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(99, 21, 7, 'Rasheed', 'Orn', 'pascale00@example.net', '603-332-2978', '1985-04-14', NULL, NULL, '76358 Toy Neck Apt. 094\nFaheychester, WY 37426-4249', 'Consectetur ab esse quia aliquam.', 'Eos commodi ea eum ut. Aut natus quae rem ducimus enim. Omnis est fugit fuga enim. Laboriosam eligendi magnam magni quo et ipsa repellat veniam.', 'Success', 2294, 1339, 1453, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26'),
(100, 40, 9, 'Declan', 'Schinner', 'jacobson.vance@example.org', '934-741-9379', '1992-02-08', NULL, NULL, '7375 Metz Bypass\nSouth Wayneport, CO 66247', 'Sed modi nisi ducimus et reprehenderit culpa modi suscipit.', 'Omnis consectetur est autem accusantium expedita natus totam. Cum eum qui sequi deserunt pariatur dicta. Corporis consequatur autem aut et et voluptatibus dolore.', 'Processing', 5803, 2866, 7746, 1, 1, '2024-02-04 08:30:26', '2024-02-04 08:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bagerhat', NULL, NULL),
(2, 'Bandarban', NULL, NULL),
(3, 'Barguna', NULL, NULL),
(4, 'Barisal', NULL, NULL),
(5, 'Bhola', NULL, NULL),
(6, 'Bogura', NULL, NULL),
(7, 'Brahmanbaria', NULL, NULL),
(8, 'Chandpur', NULL, NULL),
(9, 'Chapainawabganj', NULL, NULL),
(10, 'Chattogram', NULL, NULL),
(11, 'Chuadanga', NULL, NULL),
(12, 'Comilla', NULL, NULL),
(13, 'Cox\'s Bazar', NULL, NULL),
(14, 'Dhaka', NULL, NULL),
(15, 'Dinajpur', NULL, NULL),
(16, 'Faridpur', NULL, NULL),
(17, 'Gaibandha', NULL, NULL),
(18, 'Gazipur', NULL, NULL),
(19, 'Gopalganj', NULL, NULL),
(20, 'Habiganj', NULL, NULL),
(21, 'Jamalpur', NULL, NULL),
(22, 'Jessore', NULL, NULL),
(23, 'Jhalokathi', NULL, NULL),
(24, 'Jhalokathi', NULL, NULL),
(25, 'Jhenaidah', NULL, NULL),
(26, 'Joypurhat', NULL, NULL),
(27, 'Khagrachari', NULL, NULL),
(28, 'Khulna', NULL, NULL),
(29, 'Kurigram', NULL, NULL),
(30, 'Kushtia', NULL, NULL),
(31, 'Lakshmipur', NULL, NULL),
(32, 'Lalmonirhat', NULL, NULL),
(33, 'Magura', NULL, NULL),
(34, 'Manikganj', NULL, NULL),
(35, 'Madaripur', NULL, NULL),
(36, 'Meherpur', NULL, NULL),
(37, 'Moulvibazar', NULL, NULL),
(38, 'Munshiganj', NULL, NULL),
(39, 'Mymensingh', NULL, NULL),
(40, 'Nakhon Nayok', NULL, NULL),
(41, 'Narail', NULL, NULL),
(42, 'Narayanganj', NULL, NULL),
(43, 'Narsingdi', NULL, NULL),
(44, 'Nakhon Nayok', NULL, NULL),
(45, 'Netrokona', NULL, NULL),
(46, 'Nilphamari', NULL, NULL),
(47, 'Noakhali', NULL, NULL),
(48, 'Pabna', NULL, NULL),
(49, 'Panchagarh', NULL, NULL),
(50, 'Patuakhali', NULL, NULL),
(51, 'Rajbari', NULL, NULL),
(52, 'Rajshahi', NULL, NULL),
(53, 'Rangamati', NULL, NULL),
(54, 'Rangpur', NULL, NULL),
(55, 'Satkhira', NULL, NULL),
(56, 'Satkhira', NULL, NULL),
(57, 'Sherpur', NULL, NULL),
(58, 'Shariatpur', NULL, NULL),
(59, 'Sirajganj', NULL, NULL),
(60, 'Sylhet', NULL, NULL),
(61, 'Sunamganj', NULL, NULL),
(62, 'Tangail', NULL, NULL),
(63, 'Thakurgaon', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'you can save location of document.',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documentable_id` int NOT NULL,
  `documentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'you can save location of image',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageable_id` int NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `base_path`, `type`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 'default.png', 'default.png', 'default.png', 1, 'App\\Models\\Admin', '2024-02-04 08:30:25', '2024-02-04 08:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_03_070319_create_admins_table', 1),
(5, '2021_01_03_071922_create_images_table', 1),
(6, '2021_12_11_083348_create_documents_table', 1),
(7, '2023_12_11_080422_create_districts_table', 1),
(8, '2023_12_11_080423_create_agents_table', 1),
(9, '2024_01_24_053205_create_clients_table', 1);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `header_top_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_one` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_two` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_top_title`, `description_one`, `description_two`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'FREE SHIPPING ON ORDERS $75+ (EXCLUDES CANADA) U.S. POLO ASSN. COVID-19 STATEMENT', 'About Us Careers Affiliate Program International Store Locator Contact Us FAQs Shipping Information Return Information Privacy Policy Size Guides Shop Wish Lists My Account Preference Center Search Student Discount Military Discount', '© 2021 U.S. Polo Assn.. All Rights Reserved.<br>NOT AFFILIATED WITH POLO RALPH LAUREN CORP.<br>Address: 206 Webb Smith Drive Colfax, LA 71417<br>Phone Number: (855) 361-5553 Powered by Shopify', 1, 1, 1, '2021-01-17 12:51:46', '2021-01-22 05:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`),
  ADD UNIQUE KEY `agents_phone_unique` (`phone`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
