SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+08:00";

CREATE TABLE 'cca' (
    `id` int(11) NOT NULL,
    `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `first_club` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `second_club` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `third_club` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `total_cca` int(11) COLLATE utf8_unicode_ci NOT NULL,
    `modified` DATETIME NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE 'cca' (
    `id` int(11) NOT NULL,
    `oauth_uid` varchar(255) COLLATE latin1_swedish_ci NOT NULL,
    `first_club` varchar(255) COLLATE latin1_swedish_ci NOT NULL,
    `second_club` varchar(255) COLLATE latin1_swedish_ci NOT NULL,
    `third_club` varchar(255) COLLATE latin1_swedish_ci NOT NULL,
    `total_cca` int(11) COLLATE latin1_swedish_ci NOT NULL,
    `modified` DATETIME NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

ALTER TABLE `cca`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

latin1_swedish_ci
ALTER DATABASE users CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE tablename CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

ALTER DATABASE users CHARACTER SET latin1 COLLATE latin1_swedish_ci;
ALTER TABLE users CONVERT TO CHARACTER SET latin1 COLLATE latin1_swedish_ci;