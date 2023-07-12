-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 13.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `added_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `description`, `category_id`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Naruto vol.1', 'masashi kishomoto', 'serial pertama dari naruto', 1, 1, NULL, NULL),
(2, 'Naruto vol.2', 'masashi kishomoto', 'Serial kedua dari seri naruto', 1, 1, NULL, NULL),
(3, 'Akuntansi Pengantar 1', 'Supardi', 'Buku utama jurusan akuntansi', 4, 1, NULL, NULL),
(4, 'Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu', 'Samsulhadi', 'Buku pengetahuan klinis kedokteran', 4, 1, NULL, NULL),
(5, 'Bangsa gagal ; Mencari identitas kebangsaan', 'Nasruddin Anshoriy', 'Sebuah bacaan bertama pencarian identitas', 4, 1, NULL, NULL),
(6, 'Buku Ajar Tumbuh Kembang Remaja & Permasalahanya', 'Soetjiningsih', 'Buku psikologi remaja yang cocok dibaca sebagai refrensi', 5, 1, NULL, NULL),
(7, 'Harry potter : Deathly Hollow', 'J.K. Rowling', 'Seri buku terakhir harry potter', 6, 1, NULL, NULL),
(8, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'Sebuah kisah petualangan magis tentang seorang anak yatim piatu bernama Harry Potter yang menemukan bahwa dia sebenarnya adalah seorang penyihir terkenal di dunia sihir.', 6, 1, NULL, NULL),
(9, 'The Hobbi', 'J.R.R. Tolkien', 'Sebuah cerita tentang seorang hobbit bernama Bilbo Baggins yang terlibat dalam petualangan epik untuk merebut kembali Kerajaan Dwarf yang hilang dari cengkeraman naga.', 6, 1, NULL, NULL),
(10, 'A Game of Thrones', 'George R.R. Martin', 'Dalam dunia fantasi yang kompleks, buku ini mengikuti perang antar keluarga bangsawan untuk merebut takhta besi, dengan intrik politik, kekuatan supernatural, dan pengkhianatan yang melibatkan karakter yang kaya dan kompleks.', 6, 1, NULL, NULL),
(11, 'The Name of the Wind', 'Patrick Rothfuss', 'Buku pertama dalam seri \"The Kingkiller Chronicle\" yang mengisahkan tentang Kvothe, seorang musisi dan penyihir jenius yang berjuang untuk mencari kebenaran di balik legenda dan mitos yang mengelilingi dirinya.', 2, 1, NULL, NULL),
(12, 'The Lies of Locke Lamora', 'Scott Lynch', 'Sebuah kisah tentang sekelompok pencuri ulung di kota Camorr yang cerdik, dengan intrik politik dan aksi taruhan tinggi yang menguji kelicikan mereka', 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `book_categories`
--

INSERT INTO `book_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'komik', '2023-07-12 01:58:08', '2023-07-12 01:58:08'),
(2, 'sci fi', '2023-07-12 01:58:12', '2023-07-12 01:58:12'),
(3, 'romance', '2023-07-12 01:58:15', '2023-07-12 01:58:15'),
(4, 'education', '2023-07-12 01:58:23', '2023-07-12 01:58:23'),
(5, 'Filsuf', '2023-07-12 02:02:26', '2023-07-12 02:02:26'),
(6, 'Aksi', '2023-07-12 02:02:31', '2023-07-12 02:02:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_issues`
--

CREATE TABLE `book_issues` (
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `available_status` tinyint(4) NOT NULL DEFAULT 1,
  `added_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `book_issues`
--

INSERT INTO `book_issues` (`issue_id`, `book_id`, `available_status`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, NULL, NULL),
(2, 1, 1, 1, NULL, NULL),
(3, 1, 1, 1, NULL, NULL),
(4, 1, 1, 1, NULL, NULL),
(5, 1, 1, 1, NULL, NULL),
(6, 1, 1, 1, NULL, NULL),
(7, 1, 1, 1, NULL, NULL),
(8, 1, 1, 1, NULL, NULL),
(9, 1, 1, 1, NULL, NULL),
(10, 1, 1, 1, NULL, NULL),
(11, 2, 0, 1, NULL, NULL),
(12, 2, 1, 1, NULL, NULL),
(13, 2, 1, 1, NULL, NULL),
(14, 2, 1, 1, NULL, NULL),
(15, 2, 1, 1, NULL, NULL),
(16, 2, 1, 1, NULL, NULL),
(17, 2, 1, 1, NULL, NULL),
(18, 2, 1, 1, NULL, NULL),
(19, 2, 1, 1, NULL, NULL),
(20, 2, 1, 1, NULL, NULL),
(21, 2, 1, 1, NULL, NULL),
(22, 2, 1, 1, NULL, NULL),
(23, 2, 1, 1, NULL, NULL),
(24, 2, 1, 1, NULL, NULL),
(25, 2, 1, 1, NULL, NULL),
(26, 2, 1, 1, NULL, NULL),
(27, 2, 1, 1, NULL, NULL),
(28, 2, 1, 1, NULL, NULL),
(29, 2, 1, 1, NULL, NULL),
(30, 2, 1, 1, NULL, NULL),
(31, 2, 1, 1, NULL, NULL),
(32, 2, 1, 1, NULL, NULL),
(33, 2, 1, 1, NULL, NULL),
(34, 2, 1, 1, NULL, NULL),
(35, 3, 1, 1, NULL, NULL),
(36, 3, 1, 1, NULL, NULL),
(37, 3, 1, 1, NULL, NULL),
(38, 3, 1, 1, NULL, NULL),
(39, 3, 1, 1, NULL, NULL),
(40, 3, 1, 1, NULL, NULL),
(41, 3, 1, 1, NULL, NULL),
(42, 3, 1, 1, NULL, NULL),
(43, 3, 1, 1, NULL, NULL),
(44, 3, 1, 1, NULL, NULL),
(45, 3, 1, 1, NULL, NULL),
(46, 3, 1, 1, NULL, NULL),
(47, 3, 1, 1, NULL, NULL),
(48, 3, 1, 1, NULL, NULL),
(49, 3, 1, 1, NULL, NULL),
(50, 3, 1, 1, NULL, NULL),
(51, 3, 1, 1, NULL, NULL),
(52, 3, 1, 1, NULL, NULL),
(53, 3, 1, 1, NULL, NULL),
(54, 3, 1, 1, NULL, NULL),
(55, 4, 0, 1, NULL, NULL),
(56, 4, 1, 1, NULL, NULL),
(57, 5, 1, 1, NULL, NULL),
(58, 5, 1, 1, NULL, NULL),
(59, 5, 1, 1, NULL, NULL),
(60, 5, 1, 1, NULL, NULL),
(61, 5, 1, 1, NULL, NULL),
(62, 5, 1, 1, NULL, NULL),
(63, 5, 1, 1, NULL, NULL),
(64, 5, 1, 1, NULL, NULL),
(65, 5, 1, 1, NULL, NULL),
(66, 5, 1, 1, NULL, NULL),
(67, 5, 1, 1, NULL, NULL),
(68, 5, 1, 1, NULL, NULL),
(69, 5, 1, 1, NULL, NULL),
(70, 5, 1, 1, NULL, NULL),
(71, 5, 1, 1, NULL, NULL),
(72, 5, 1, 1, NULL, NULL),
(73, 5, 1, 1, NULL, NULL),
(74, 5, 1, 1, NULL, NULL),
(75, 5, 1, 1, NULL, NULL),
(76, 5, 1, 1, NULL, NULL),
(77, 5, 1, 1, NULL, NULL),
(78, 5, 1, 1, NULL, NULL),
(79, 5, 1, 1, NULL, NULL),
(80, 6, 1, 1, NULL, NULL),
(81, 6, 1, 1, NULL, NULL),
(82, 7, 1, 1, NULL, NULL),
(83, 7, 1, 1, NULL, NULL),
(84, 8, 1, 1, NULL, NULL),
(85, 8, 1, 1, NULL, NULL),
(86, 8, 1, 1, NULL, NULL),
(87, 8, 1, 1, NULL, NULL),
(88, 8, 1, 1, NULL, NULL),
(89, 8, 1, 1, NULL, NULL),
(90, 8, 1, 1, NULL, NULL),
(91, 9, 1, 1, NULL, NULL),
(92, 9, 1, 1, NULL, NULL),
(93, 9, 1, 1, NULL, NULL),
(94, 9, 1, 1, NULL, NULL),
(95, 9, 1, 1, NULL, NULL),
(96, 10, 1, 1, NULL, NULL),
(97, 10, 1, 1, NULL, NULL),
(98, 10, 1, 1, NULL, NULL),
(99, 10, 1, 1, NULL, NULL),
(100, 10, 1, 1, NULL, NULL),
(101, 11, 1, 1, NULL, NULL),
(102, 11, 1, 1, NULL, NULL),
(103, 11, 1, 1, NULL, NULL),
(104, 11, 1, 1, NULL, NULL),
(105, 12, 1, 1, NULL, NULL),
(106, 12, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_issue_logs`
--

CREATE TABLE `book_issue_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_issue_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `issue_by` int(10) UNSIGNED NOT NULL,
  `issued_at` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `book_issue_logs`
--

INSERT INTO `book_issue_logs` (`id`, `book_issue_id`, `student_id`, `issue_by`, `issued_at`, `return_time`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, '2023-07-12 09:16', '0', NULL, NULL),
(2, 1, 2, 1, '2023-07-12 09:16', '0', NULL, NULL),
(3, 4, 3, 1, '2023-07-12 09:16', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `branches`
--

INSERT INTO `branches` (`id`, `branch`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', '2023-07-12 01:58:39', '2023-07-12 01:58:39'),
(2, 'Teknik Sipil', '2023-07-12 01:58:45', '2023-07-12 01:58:45'),
(3, 'Sistem Informatika', '2023-07-12 01:58:55', '2023-07-12 01:58:55'),
(4, 'Ekonomi', '2023-07-12 01:59:02', '2023-07-12 01:59:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `issue_logs`
--

CREATE TABLE `issue_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_27_095343_create_books_table', 1),
(5, '2020_11_27_095406_create_branches_table', 1),
(6, '2020_11_27_095436_create_categories_table', 1),
(7, '2020_11_27_095452_create_issues_table', 1),
(8, '2020_11_27_095506_create_issue_logs_table', 1),
(9, '2020_11_27_095530_create_logs_table', 1),
(10, '2020_11_27_095545_create_students_table', 1),
(11, '2020_11_27_095628_create_student_categories_table', 1),
(12, '2020_11_27_095847_create_book_categories_table', 1),
(13, '2020_11_27_095955_create_book_issues_table', 1),
(14, '2020_11_27_100146_create_book_issue_logs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT 0,
  `rejected` tinyint(4) NOT NULL DEFAULT 0,
  `category` int(10) UNSIGNED NOT NULL,
  `roll_num` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` tinyint(4) NOT NULL DEFAULT 0,
  `year` int(10) UNSIGNED NOT NULL,
  `books_issued` tinyint(4) NOT NULL DEFAULT 0,
  `email_id` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `approved`, `rejected`, `category`, `roll_num`, `branch`, `year`, `books_issued`, `email_id`, `created_at`, `updated_at`) VALUES
(1, 'rayhan', 'Pratama', 0, 0, 0, '1', 0, 2, 0, 'rayhandika4@gmail.com', NULL, NULL),
(2, 'Ramadhani', 'Asri', 1, 0, 5, '23', 1, 4, 2, 'ramadhani4@gmail.com', NULL, NULL),
(3, 'Azami', 'Akari', 1, 0, 5, '4', 2, 1, 1, 'azamiakari4@gmail.com', NULL, NULL),
(4, 'Somnu', 'Azramus', 1, 0, 5, '15', 4, 1, 0, 'somnus_nimbus@gmail.com', NULL, NULL),
(5, 'Daud', 'Firmansyah', 0, 0, 6, '8', 3, 4, 0, 'DaudFirman@gmail.com', NULL, NULL),
(6, 'andrean', 'ficasso', 0, 0, 6, '9', 3, 2, 0, 'ficasso22@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_categories`
--

CREATE TABLE `student_categories` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_allowed` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `student_categories`
--

INSERT INTO `student_categories` (`cat_id`, `category`, `max_allowed`, `created_at`, `updated_at`) VALUES
(5, 'S1', 2000, NULL, NULL),
(6, 'Karyawan', 1000, NULL, NULL),
(7, 'D3', 22222, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verification_status` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `verification_status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin2', NULL, NULL, 0, '$2y$10$vpTBXpD6JmrJP4Rk/5eToukCI//Gygz8ECppOLdjncHetxsgsP4cS', NULL, '2023-07-12 01:56:55', '2023-07-12 01:56:55'),
(2, NULL, 'gaebolg', NULL, NULL, 0, '$2y$10$Qhc/3miuGE09BgOO6q7dbOwV0jKfWbutyBS0WfDZD3Xyes5qrdlXS', NULL, '2023-07-12 02:43:30', '2023-07-12 02:43:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indeks untuk tabel `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `book_issues`
--
ALTER TABLE `book_issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indeks untuk tabel `book_issue_logs`
--
ALTER TABLE `book_issue_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `issue_logs`
--
ALTER TABLE `issue_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indeks untuk tabel `student_categories`
--
ALTER TABLE `student_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `book_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `book_issues`
--
ALTER TABLE `book_issues`
  MODIFY `issue_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `book_issue_logs`
--
ALTER TABLE `book_issue_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `issue_logs`
--
ALTER TABLE `issue_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `student_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `student_categories`
--
ALTER TABLE `student_categories`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
