-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema capricieux_miraikorai
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema capricieux_miraikorai
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `capricieux_miraikorai` DEFAULT CHARACTER SET utf8 ;
USE `capricieux_miraikorai` ;

-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`INFORMATION`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`INFORMATION` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `publishment_date` DATETIME NOT NULL,
  `detail` VARCHAR(150) CHARACTER SET 'utf8' NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`HISTORY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`HISTORY` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `publishment_date` DATETIME NOT NULL,
  `flag_emphasizing` TINYINT(1) NOT NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`BLOG`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`BLOG` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `publishment_date` DATETIME NOT NULL,
  `content` MEDIUMTEXT CHARACTER SET 'utf8' NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`BLOG_IMAGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`BLOG_IMAGE` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_id` INT UNSIGNED NOT NULL,
  `order_no` INT NOT NULL,
  `caption` VARCHAR(30) CHARACTER SET 'utf8' NULL,
  `image_url` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`, `blog_id`),
  INDEX `blog_id_idx` (`blog_id` ASC),
  CONSTRAINT `BLOG_IMAGE.BLOG`
    FOREIGN KEY (`blog_id`)
    REFERENCES `capricieux_miraikorai`.`BLOG` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`STAGE_PLACE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`STAGE_PLACE` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `access` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `attention` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `official_url` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`STAGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`STAGE` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `detail` VARCHAR(200) CHARACTER SET 'utf8' NULL,
  `publishment_date` DATETIME NOT NULL,
  `open_date` DATETIME NULL,
  `start_date` DATETIME NULL,
  `place` INT UNSIGNED NULL,
  `presented_by` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `ticket_detail` VARCHAR(300) CHARACTER SET 'utf8' NULL,
  `book_url` VARCHAR(200) CHARACTER SET 'utf8' NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `stage_place.id_idx` (`place` ASC),
  CONSTRAINT `STAGE.STAGE_PLACE`
    FOREIGN KEY (`place`)
    REFERENCES `capricieux_miraikorai`.`STAGE_PLACE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`STAGE_IMAGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`STAGE_IMAGE` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `stage_id` INT UNSIGNED NOT NULL,
  `order_no` INT UNSIGNED NOT NULL,
  `caption` VARCHAR(30) CHARACTER SET 'utf8' NULL,
  `image_url` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`, `stage_id`),
  INDEX `stage_id_idx` (`stage_id` ASC),
  CONSTRAINT `STAGE_IMAGE.STAGE`
    FOREIGN KEY (`stage_id`)
    REFERENCES `capricieux_miraikorai`.`STAGE` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`STAGE_STAGES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`STAGE_STAGES` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `stage_id` INT UNSIGNED NOT NULL,
  `order_no` INT UNSIGNED NOT NULL,
  `title` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `conductor_name` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `pianist_name` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`, `stage_id`),
  INDEX `stage.id_idx` (`stage_id` ASC),
  CONSTRAINT `STAGE_STAGES.STAGE`
    FOREIGN KEY (`stage_id`)
    REFERENCES `capricieux_miraikorai`.`STAGE` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`STAGE_SONG`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`STAGE_SONG` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `suite` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `lyric_by` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `song_by` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `arranged_by` VARCHAR(100) CHARACTER SET 'utf8' NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `capricieux_miraikorai`.`STAGE_STAGES_SONGS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`STAGE_STAGES_SONGS` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `stages_id` INT UNSIGNED NOT NULL,
  `order_no` INT UNSIGNED NOT NULL,
  `song_id` INT UNSIGNED NOT NULL,
  `timestamp_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp_updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`, `stages_id`),
  INDEX `stage_song.id_idx` (`song_id` ASC),
  INDEX `stage_stages.id_idx` (`stages_id` ASC),
  CONSTRAINT `STAGE_STAGES_SONGS.STAGE_SONG`
    FOREIGN KEY (`song_id`)
    REFERENCES `capricieux_miraikorai`.`STAGE_SONG` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `STAGE_STAGES_SONGS.STAGE_STAGES`
    FOREIGN KEY (`stages_id`)
    REFERENCES `capricieux_miraikorai`.`STAGE_STAGES` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

USE `capricieux_miraikorai` ;

-- -----------------------------------------------------
-- Placeholder table for view `capricieux_miraikorai`.`view1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `capricieux_miraikorai`.`view1` (`id` INT);

-- -----------------------------------------------------
--  routine1
-- -----------------------------------------------------

DELIMITER $$
USE `capricieux_miraikorai`$$
$$

DELIMITER ;

-- -----------------------------------------------------
-- View `capricieux_miraikorai`.`view1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `capricieux_miraikorai`.`view1`;
USE `capricieux_miraikorai`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
