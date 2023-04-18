--
-- Database: `357-project`
--

DROP DATABASE IF EXISTS `357-project`;
CREATE DATABASE IF NOT EXISTS `357-project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `357-project`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `username` TINYTEXT NOT NULL UNIQUE,
    `password` TINYTEXT NOT NULL
);

--
-- Table structure for table `rules`
--
DROP TABLE IF EXISTS `rules`;
CREATE TABLE IF NOT EXISTS `rules` (
  `id` INT(7) PRIMARY KEY,
  `longitude` VARCHAR(20) DEFAULT NULL,
  `latitude` VARCHAR(20) DEFAULT NULL,
  `descr` LONGTEXT DEFAULT NULL,
  `area` TINYTEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Load data for table `rules`
--
LOAD DATA INFILE 'C:\\xampp\\htdocs\\357-Project\\app\\db\\rules.csv'
INTO TABLE rules
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 ROWS;