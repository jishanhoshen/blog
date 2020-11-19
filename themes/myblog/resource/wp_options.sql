CREATE TABLE `blog_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blog_options` (`option_id`, `option_name`, `option_value`, `status`) VALUES
(1, 'siteurl', 'http://localhost/blog', 'yes'),
(2, 'home', 'http://localhost/blog', 'yes'),
(3, 'blogname', 'myblog', 'yes'),
(4, 'blogdescription', 'social media blog', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'jishanhoshenjibon@gmail.com', 'yes');