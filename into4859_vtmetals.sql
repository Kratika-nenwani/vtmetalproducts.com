-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 28, 2024 at 01:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `into4859_vtmetals`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `image7` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `images`, `image`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `created_at`, `updated_at`) VALUES
(2, 'Modular Kitchen', '<p>Crafted to meet the diverse demands of modern kitchens, our modular solutions redefine convenience and style. Specifically designed to be seamlessly integrating into any space for a tailored fit. Our kitchen ensures durability,longevity and maintains hygiene. As your trusted provider of premium kitchen solutions, we offer a range of categories tailored to your needs. From sleek cabinets to versatile countertops, our modular panels offer unparalleled versatility and flexibility, effortlessly transforming your kitchen dreams into reality.&nbsp;</p>', '[\"1714479951.jpg\",\"1714479951.jpg\",\"1714479951.jpg\",\"1714479951.jpg\",\"1714480019.jpg\"]', '1714479951.jpg', '1714479951.jpg', '1714479951.jpg', '1714479951.png', '1714479951.jpg', '1714480019.jpg', '1714479951.jpg', '1714479951.jpg', '2024-03-27 06:18:19', '2024-04-30 12:26:59'),
(3, 'Automobile Parts', '<p>Our automobile parts are engineered to meet diverse industry demands, presenting distinct advantages over conventional manufacturing. With flexibility at the forefront, these components seamlessly integrate, streamlining production processes for optimal efficiency. As your trusted partner in premium automotive solutions, we offer a comprehensive range of categories tailored to your specific requirements. Handpicked for their unmatched versatility and precision, our modular parts empower you to realize your automotive vision effortlessly.</p>', '[\"1714480065.jpg\",\"1714480102.webp\",\"1714480102.jpg\",\"1714480065.jpg\",\"1714480065.jpg\"]', '1714480065.jpg', '1714480065.webp', '1714480065.webp', '1714480065.webp', '1714480065.jpg', '1714480102.jpg', '1714480102.webp', '', '2024-03-27 06:18:45', '2024-04-30 12:28:22'),
(4, 'Pharma Equipments', '<p>Our pharmacy equipment is meticulously designed to address the unique challenges of the pharmaceutical industry, surpassing conventional methods with ease. Engineered for flexibility, our modular solutions seamlessly integrate into pharmacy workflows, ensuring efficiency at every stage. As your trusted partner in pharmaceutical solutions, we offer a diverse range of equipment tailored to meet the specific needs of pharmacies. From precision dispensing to state-of-the-art compounding machinery, our equipment provides unparalleled versatility, empowering pharmacies to transform their vision into reality effortlessly. With us, innovation meets reliability, driving excellence in pharmaceutical care.</p>', '[\"1714480146.jpg\",\"1714480146.webp\",\"1714480146.jpg\",\"1714480146.jpg\",\"1714480146.jpg\"]', '1714480146.png', '1714480146.jpg', '1714480146.jpg', '1714480146.jpg', '1714480146.jpg', '1714480146.webp', '1714480146.webp', '', '2024-03-27 06:20:09', '2024-04-30 12:29:06'),
(5, 'Lockers', '<p>Our lockers are meticulously crafted to meet diverse industry demands, surpassing traditional storage methods with unparalleled versatility. Flexibility defines our locker systems, seamlessly adapting to your evolving needs. As your trusted provider of premium metal solutions, we offer a comprehensive range of locker categories, each tailored to cater to your unique requirements. From sleek designs to robust security features, our lockers effortlessly transform your storage vision into reality, ensuring seamless organization and peace of mind.</p>', '[\"1714480178.avif\", \"1714480178.jpg\", \"1714480178.webp\",\"1714480178.jpg\",\"1714480195.webp\",\"1714480195.avif\"]\n', '1714480178.avif', '1714480178.jpg', '1714480178.webp', '1714480178.jpg', '1714480178.jpg', '1714480195.webp', '1714480195.avif', '', '2024-03-27 06:20:33', '2024-04-30 12:29:55'),
(9, 'Tanks', '<p>Precisely engineered, our tanks offer superior solutions to industry challenges, eclipsing conventional methods. Versatile and adaptable, they seamlessly cater to diverse requirements, ensuring efficiency throughout. As your trusted provider of premium storage solutions, we offer a diverse range of tank categories meticulously tailored to your needs. From industrial to commercial applications, our tanks deliver unmatched flexibility and reliability, transforming your storage needs into effortless reality.</p>', '[\"1714480241.jpg\",\"1714480241.webp\",\"1714480241.jpg\",\"1714480241.jpg\",\"1714480241.jpg\"]', '1714480241.jpeg', '1714480241.jpg', '1714480241.webp', '1714480241.webp', '1714480241.webp', '1714480241.jpg', '', '', '2024-03-27 06:22:06', '2024-04-30 12:30:41'),
(10, 'Almirahs', '<p>Crafting almirahs to perfection, we address diverse needs with our modular solutions. Built for seamless integration, our almirah panels offer unparalleled flexibility, effortlessly adapting to your space. Revolutionizing the storage landscape, modular almirahs offer a dynamic solution to diverse organizational needs. Seamlessly integrating into any space, these panels are meticulously engineered for unparalleled flexibility, enabling effortless customization to suit individual preferences. From sleek designs to robust structures, our almirahs combine versatility and durability. Experience the ease of bringing your storage visions to life with our meticulously engineered panels.</p>', '[\"1713503451.png\",\"1714480406.webp\",\"1714480406.jpg\",\"1714480406.jpg\",\"1714480406.jpg\",\"1714480350.jpg\"]', '1713503451.png', '1714480406.jpg', '1714480406.jpg', '1714480406.jpg', '1714480406.jpeg', '1714480406.webp', '1714480350.jpg', '', '2024-03-27 06:22:39', '2024-04-30 12:33:26'),
(11, 'Storage Racks', '<p>Our storage racks are engineered to tackle diverse challenges in storage solutions. Built for versatility, they seamlessly adapt to your space, optimizing efficiency without compromising on strength. Crafted with precision, our racks effortlessly accommodate various storage needs, from warehouses to retail spaces. As your trusted provider of premium storage solutions, we offer a range of rack categories tailored to fit your specific requirements. With unparalleled flexibility and reliability, our racks transform your storage vision into a tangible reality, streamlining your operations with ease and precision.</p>', '[\"1711620986.png\",\"1714480438.jpeg\",\"1714480438.jpg\",\"1714480438.jpg\",\"1714480438.jpg\"]', '1711620986.png', '1714480438.jpg', '1714480438.jpg', '1714480438.jpg', '1714480438.jpeg', '1714480438.webp', '', '', '2024-03-27 06:23:19', '2024-04-30 12:33:58'),
(12, 'Commercial Kitchens', '<p>In the realm of commercial kitchens it stands out as the ultimate solution. Designed to tackle diverse challenges with finesse, they offer a myriad of advantages over traditional building methods. Their inherent flexibility ensures seamless integration, streamlining processes and enhancing efficiency. As your dedicated provider of premium metal solutions, we offer a tailored range of categories to meet your specific needs. From walls to ceilings, our panels are chosen for their unmatched versatility, effortlessly bringing your culinary vision to life. Experience the ease of transformation with our modular panels – the cornerstone of modern kitchen innovation.</p>', '[\"1711616733.png\",\"1714480473.jpg\",\"1714480473.jpg\"]', '1711616733.png', '1714480473.jpg', '1714480473.jpg', '1714480473.jpg', '1714480473.jpeg', '1714480473.webp', '', '', '2024-03-27 06:24:00', '2024-09-18 04:37:13'),
(13, 'Mess Tables', '<p>Crafted to meet the evolving needs of modern workplaces, our mess tables redefine versatility in dining solutions. Engineered with precision, these tables seamlessly adapt to diverse environments, ensuring efficiency without compromise. From compact designs for cozy settings to expansive configurations for bustling cafeterias, our tables offer flexibility tailored to your space requirements. As your reliable partner in premium furniture solutions, we prioritize functionality and style, delivering tables that effortlessly blend aesthetics with functionality. Elevate your dining experience with our mess tables: where adaptability meets innovation.</p>', '[\"1714480516.png\",\"1714480516.webp\",\"1714480516.jpg\",\"1714480516.webp\"]', '1714480516.png', '1714480516.webp', '1714480516.jpg', '1714480516.webp', '1714480516.webp', '1714480516.webp', '1714480516.png', '', '2024-03-27 06:24:36', '2024-04-30 12:35:16'),
(14, 'Hoppers', '<p>Crafted to conquer industry challenges, our hoppers redefine efficiency. Flexibility is intrinsic, ensuring seamless integration into your processes. They are typically funnel-shaped with a wide opening at the top and a narrow opening at the bottom, allowing for efficient loading and controlled discharge of materials. Our hoppers stand out for their unparalleled adaptability and versatility, effortlessly translating your ideas into tangible results. Experience innovation in motion with hoppers designed to elevate your operations, delivering precision and reliability every step of the way.</p><p>&nbsp;</p><p>&nbsp;</p>', '[\"1711621034.png\",\"1711621034.png\",\"1713503661.png\",\"1713503661.png\",\"1713503661.png\"]', '1711621034.png', '1711621034.png', '1713503661.png', '1713503661.png', '1713503661.png', '', '', '', '2024-03-27 06:24:55', '2024-09-18 04:37:35'),
(16, 'Podium', '<p>Our podiums are designed to meet diverse industry demands, surpassing traditional construction methods with ease. Flexibility is inherent in our design philosophy, ensuring seamless integration . As your premier provider of top-tier podium solutions, we offer a comprehensive range tailored to your precise specifications. Our podiums stand out for their unparalleled versatility, providing the perfect platform to elevate your events and presentations. From concept to realization, we\'re here to turn your vision into a tangible reality, effortlessly.</p>', '[\"1714480570.jpg\",\"1711617020.jpg\",\"1714480570.jpg\",\"1714480570.jpg\",\"1714480570.jpg\"]', '1711617020.png', '1714480570.png', '1714480570.webp', '1714480570.jpg', '1714480570.webp', '1714480570.webp', '', '', '2024-03-28 03:40:20', '2024-04-30 12:36:10'),
(17, 'Fire/Flush Doors', '<p>Our fire and flush doors stand as the pinnacle of innovation in modern construction, offering unmatched reliability and safety. Designed to surpass industry standards, they provide robust protection against fire hazards while seamlessly blending into any architectural vision. From sleek flush finishes to rigorous fire-rated performance, these doors epitomize versatility, addressing diverse project needs with effortless precision. With our expertise, you can trust in doors that not only meet but exceed expectations, elevating both safety and aesthetics in equal measure.</p>', '[\"1714480610.jpg\",\"1714480610.jpg\",\"1714480610.jpg\",\"1714480610.jpg\",\"1714480610.jpg\",\"1714480610.jpg\"]', '1714480610.jpg', '1714480610.jpg', '1714480610.webp', '1714480610.avif', '1714480610.jpg', '1714480610.jpg', '1714480610.jpg', '1714480610.webp', '2024-03-28 03:42:05', '2024-04-30 12:36:50'),
(18, 'Name Plates', '<p>Crafted to elevate your space, our nameplates are meticulously designed to meet diverse needs, surpassing traditional options. Engineered for seamless integration, our nameplates effortlessly blend into any environment, enhancing both aesthetics and functionality. From sleek minimalist designs to intricate custom creations, we offer a wide range of options to suit your unique requirements. With unparalleled versatility and precision, our nameplates are more than just identifiers—they\'re statements of style and sophistication, reflecting your brand\'s identity with elegance and flair. Experience the difference with our premium nameplate solutions, where innovation meets excellence.</p>', '[\"1714480660.jpg\",\"1714480660.jpg\",\"1714480660.jpg\",\"1714480660.jpg\",\"1714480660.jpg\"]', '1714480660.jpg', '1714480660.jpg', '1714480660.jpg', '1714480660.jpg', '1714480660.jpg', '1714480660.jpg', '1714480660.jpg', '1714480660.jpg', '2024-03-28 03:42:37', '2024-04-30 12:37:40'),
(20, 'Signages', '<p>Our signages are crafted to meet diverse industry demands, revolutionizing traditional signage methods with unparalleled versatility and flexibility. These Signages serve as visual communication tools, conveying messages, information, and branding to a wide audience. From guiding visitors through facilities to promoting products and services, these signages are engineered for seamless integration. Our modular sign panels streamline processes, ensuring efficient installation and maintenance. As your trusted provider of premium signage solutions, we offer a comprehensive range of categories tailored to your unique requirements.&nbsp;</p>', '[\"1714480697.jpg\",\"1714480697.jpg\",\"1714480697.jpg\",\"1714480697.jpg\",\"1714480697.jpg\"]', '1714480697.jpg', '1714480697.jpg', '1714480697.jpg', '1714480697.jpg', '1714480697.jpg', '1714480697.jpg', '1714480697.jpg', '', '2024-03-29 02:19:41', '2024-04-30 12:38:17'),
(21, 'Machine Covers', '<p>Our machine covers&nbsp; meet diverse industrial challenges, surpassing traditional enclosures with their adaptable design. Flexibility is ingrained in every panel, seamlessly integrating into any machinery setup for optimized protection. As your premier provider of metal solutions, we offer a comprehensive range of machine cover categories, each tailored to unique operational needs. Our covers ensure seamless operation while safeguarding your machinery investments. With unparalleled versatility and a commitment to excellence, we turn your machine protection needs into a seamless reality.</p>', '[\"1714480715.jpg\",\"1714480742.jpg\"]', '1714480715.jpg', '1714480715.jpg', '1714480742.jpg', '1714480742.jpg', '1714480742.jpg', '1714480742.jpg', '', '', '2024-03-29 05:00:13', '2024-04-30 12:39:02'),
(29, 'test', '<p>test</p>', '[\"1726644023_66ea7f37ab66e.jpg\",\"1726644023_66ea7f37ac031.jpg\",\"1726648775_66ea91c75e6eb.jpg\",\"1726648775_66ea91c75e921.jpg\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-18 01:48:49', '2024-09-18 01:48:49'),
(30, 'test', '<p>test</p>', '[\"1726644023_66ea7f37ab66e.jpg\",\"1726644023_66ea7f37ac031.jpg\",\"1726648775_66ea91c75e6eb.jpg\",\"1726648775_66ea91c75e921.jpg\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-18 01:50:23', '2024-09-18 03:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `image7` varchar(255) DEFAULT NULL,
  `image8` varchar(255) DEFAULT NULL,
  `image9` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `description`, `image`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `created_at`, `updated_at`) VALUES
(3, '<h3>Kitchen</h3>', '1712750653.png', '1712750653.png', '1712750653.png', '1712750653.png', '1712750653.png', '1712750653.jpg', '1712750653.png', '1712750653.png', '1712750653.png', '1712750653.png', '2024-04-10 06:34:13', '2024-04-10 06:34:13'),
(4, '<h3>Automobile Parts</h3>', '1712821253.png', '1712821254.png', '1712821254.jpg', '1712750724.png', '1712750724.png', '1712750724.png', '1712750724.jpg', '1712750724.png', '1712750724.png', '1712750724.jpg', '2024-04-10 06:35:24', '2024-04-11 07:40:54'),
(5, '<h3>Pharmacy</h3>', '1712750785.jpg', '1712750785.png', '1712750785.png', '1712750785.png', '1712750785.png', '1712750785.png', '1712750785.png', '1712750785.png', '1712750785.png', '1712750785.png', '2024-04-10 06:36:25', '2024-04-10 06:36:25'),
(6, '<h3>Signages</h3>', '1712750843.jpg', '1712750843.png', '1712750843.png', '1712750843.png', '1712750843.png', '1712750843.png', '1712750843.png', '1712750843.png', '1712750843.jpg', '1712750843.jpg', '2024-04-10 06:37:23', '2024-04-10 06:37:23'),
(7, '<h3>Almirahs</h3>', '1712750894.png', '1712750894.png', '1712750894.png', '1712750894.png', '1712750894.png', '1712750894.jpg', '1712750894.jpg', '1712750894.jpg', '1712750894.jpg', '1712750894.png', '2024-04-10 06:38:14', '2024-04-10 06:38:14'),
(8, '<h3>Commercial Kitchens</h3>', '1712750953.png', '1712750953.png', '1712750953.jpg', '1712750953.png', '1712750953.jpg', '1712750953.jpg', '1712750953.png', '1712750953.jpg', '1712750953.png', '1712750953.png', '2024-04-10 06:39:13', '2024-04-10 06:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_27_094305_create_categories_table', 2),
(7, '2024_03_28_073248_add_column_categories_table', 3),
(8, '2024_03_28_104518_create_panels_table', 4),
(9, '2024_03_28_111916_add_column_panels_table', 5),
(10, '2024_03_28_123208_create_queries_table', 6),
(11, '2024_04_10_130225_create_images_table', 7),
(12, '2024_04_16_055122_create_videos_table', 8),
(13, '2024_04_18_110006_add_column_categories_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `panels`
--

CREATE TABLE `panels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `fname`, `lname`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test@gmail.com', '1234567890', 'testing', 'qwertyuio', '2024-09-02 10:35:56', '2024-09-02 10:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gaurav joshi', 'gaurav192003joshi@gmail.com', NULL, '$2y$10$rPQaocfAwNFk1K63gtLZJ..IErUNMLW9o4kMJr4Ve9Xc7IawU7M9W', NULL, '2024-03-21 02:31:19', '2024-03-21 02:31:19'),
(2, 'aayush patidar', 'aayushpatidar04@gmail.com', NULL, '$2y$10$rhQPqLqBSJfXm2lR7Norf.PE2aUX7cO9z6EcvV6OZBgAEW7R5gVQe', NULL, '2024-04-08 12:31:17', '2024-04-08 12:31:17'),
(3, 'aditya', 'aditya@gmail.com', NULL, '$2y$10$GA0sVsoK0Z7dJREFeW5ZS.xrFfL0afaIkwfevC3XKzL5IJIg78V1i', NULL, '2024-06-10 05:24:20', '2024-06-10 05:24:20'),
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$elTCxPN8AdWM.ic8CNRcAuu6Cfpi/hzTWO392zUB84yGzoXeMsJKq', NULL, '2024-08-28 05:21:11', '2024-08-28 05:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `iframe1` longtext NOT NULL,
  `iframe2` longtext DEFAULT NULL,
  `iframe3` longtext DEFAULT NULL,
  `iframe4` longtext DEFAULT NULL,
  `iframe5` longtext DEFAULT NULL,
  `iframe6` longtext DEFAULT NULL,
  `iframe7` longtext DEFAULT NULL,
  `iframe8` longtext DEFAULT NULL,
  `iframe9` longtext DEFAULT NULL,
  `iframe10` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `panels`
--
ALTER TABLE `panels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `panels`
--
ALTER TABLE `panels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
