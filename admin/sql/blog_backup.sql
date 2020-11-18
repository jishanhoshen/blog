DROP TABLE backup_db;

CREATE TABLE `backup_db` (
  `backup_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO backup_db VALUES("1","blog_backup2020-11-18_17.38.38.sql","2020-11-18 17:38:38","1");
INSERT INTO backup_db VALUES("2","blog_backup2020-11-18_17.40.57.sql","2020-11-18 17:40:57","1");
INSERT INTO backup_db VALUES("3","blog_backup2020-11-18_18.35.02.sql","2020-11-18 18:35:02","1");
INSERT INTO backup_db VALUES("4","blog_backup2020-11-18_18.37.46.sql","2020-11-18 18:37:46","1");
INSERT INTO backup_db VALUES("5","blog_backup2020-11-18_18.39.02.sql","2020-11-18 18:39:02","1");
INSERT INTO backup_db VALUES("6","blog_backup2020-11-18_18.42.16.sql","2020-11-18 18:42:16","1");



DROP TABLE blog_options;

CREATE TABLE `blog_options` (
  `option_id` bigint(20) unsigned NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO blog_options VALUES("1","siteurl","http://localhost/blog/","yes");
INSERT INTO blog_options VALUES("2","home","http://localhost/blog/","yes");
INSERT INTO blog_options VALUES("3","blogname","myblog","yes");
INSERT INTO blog_options VALUES("4","blogdescription","social bolg","yes");
INSERT INTO blog_options VALUES("5","users_can_register","0","yes");
INSERT INTO blog_options VALUES("6","admin_email","jishanhoshenjibon@gmail.com","yes");



DROP TABLE post;

CREATE TABLE `post` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `postTime` varchar(10) NOT NULL,
  `postTitle` varchar(50) NOT NULL,
  `postPara1` text NOT NULL,
  `postPara2` text NOT NULL,
  `postPara3` text NOT NULL,
  `postImage1` varchar(20) NOT NULL,
  `postImage2` varchar(20) NOT NULL,
  `postImage3` varchar(20) NOT NULL,
  `postImage4` varchar(20) NOT NULL,
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;




DROP TABLE postreview;

CREATE TABLE `postreview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postId` int(11) NOT NULL,
  `unlikeStatus` int(11) NOT NULL,
  `unlikeCount` int(11) NOT NULL,
  `wowStatus` int(11) NOT NULL,
  `wowCount` int(11) NOT NULL,
  `angryStatus` int(11) NOT NULL,
  `angryCount` int(11) NOT NULL,
  `hahaStatus` int(11) NOT NULL,
  `hahaCount` int(11) NOT NULL,
  `loveStatus` int(11) NOT NULL,
  `loveCount` int(11) NOT NULL,
  `likeStatus` int(11) NOT NULL,
  `likeCount` int(11) NOT NULL,
  `commentCount` int(11) NOT NULL,
  `shareCount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO postreview VALUES("1","1","1","2","1","5","0","0","1","5","1","5","1","12","36","3");
INSERT INTO postreview VALUES("2","2","1","2","1","5","0","0","0","0","0","0","1","23","21","1");
INSERT INTO postreview VALUES("3","3","1","2","1","5","0","0","1","5","0","0","1","43","10","4");
INSERT INTO postreview VALUES("4","4","1","6","1","5","1","2","1","5","0","0","1","5","3","8");



DROP TABLE thememood;

CREATE TABLE `thememood` (
  `themeName` varchar(30) NOT NULL,
  `themeMood` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO thememood VALUES("myblog","light");



DROP TABLE user;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `displayName` varchar(30) NOT NULL,
  `profile` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO user VALUES("1","jackson","Keith	Jackson","profile1.jpg");
INSERT INTO user VALUES("2","oliver","madeleine oliver","profile2.jpg");
INSERT INTO user VALUES("3","ogden","richard	ogden","profile3.jpg");
INSERT INTO user VALUES("4","murray","grace	murray","profile4.jpg");
INSERT INTO user VALUES("5","hart","kylie	hart","profile5.jpg");



-- blog_backup2020-11-18_18.42.16.sql 

