CREATE DATABASE data_film;

USE data_film;
 
CREATE TABLE `film` (
  `id` INT NOT NULL auto_increment,
  `cover` VARCHAR(100),
  `title` VARCHAR(100),
  `genre` VARCHAR(100),
  `year` VARCHAR(4),
  `synopsis` VARCHAR(100),
  PRIMARY KEY  (`id`)
);