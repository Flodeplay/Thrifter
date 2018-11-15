-- MySQL Script generated by MySQL Workbench
-- Thu Nov 15 11:52:08 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Thrifter
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Thrifter
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Thrifter` DEFAULT CHARACTER SET utf8 ;
USE `Thrifter` ;

-- -----------------------------------------------------
-- Table `Thrifter`.`u_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`u_users` (
  `u_id` INT NOT NULL AUTO_INCREMENT,
  `u_username` VARCHAR(16) NOT NULL,
  `u_email` VARCHAR(255) NOT NULL,
  `u_pwd` VARCHAR(56) NOT NULL,
  `u_surname` VARCHAR(35) NOT NULL,
  `u_forename` VARCHAR(35) NOT NULL,
  `u_birthdate` DATE NOT NULL,
  `u_zipcode` VARCHAR(10) NOT NULL,
  `u_image` VARCHAR(20) NULL,
  `u_phonenumber` VARCHAR(20) NULL,
  `u_description` VARCHAR(200) NULL,
  `u_createtime` TIMESTAMP(1) NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`),
  UNIQUE INDEX `u_username_UNIQUE` (`u_username` ASC),
  UNIQUE INDEX `u_e-mail_UNIQUE` (`u_email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`col_colors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`col_colors` (
  `col_id` INT NOT NULL AUTO_INCREMENT,
  `col_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`col_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`b_brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`b_brands` (
  `b_id` INT NOT NULL AUTO_INCREMENT,
  `b_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`b_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`g_genders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`g_genders` (
  `g_id` INT NOT NULL AUTO_INCREMENT,
  `g_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`g_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`ca_categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`ca_categories` (
  `ca_id` INT NOT NULL AUTO_INCREMENT,
  `ca_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ca_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`con_conditions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`con_conditions` (
  `con_id` INT NOT NULL AUTO_INCREMENT,
  `con_description` VARCHAR(45) NULL,
  PRIMARY KEY (`con_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`s_sizes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`s_sizes` (
  `s_id` INT NOT NULL AUTO_INCREMENT,
  `s_unittype` VARCHAR(45) NULL,
  `s_value` VARCHAR(45) NULL,
  PRIMARY KEY (`s_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`p_post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`p_post` (
  `p_id` INT NOT NULL AUTO_INCREMENT,
  `p_title` VARCHAR(40) NOT NULL,
  `p_price` SMALLINT(10000) NOT NULL,
  `p_image` VARCHAR(60) NOT NULL,
  `p_createtime` TIMESTAMP(1) NULL DEFAULT CURRENT_TIMESTAMP,
  `p_u_user` INT NOT NULL,
  `p_col_color` INT NOT NULL,
  `p_b_brand` INT NOT NULL,
  `p_g_gender` INT NOT NULL,
  `p_con_condition` INT NOT NULL,
  `p_ca_category` INT NOT NULL,
  `s_sizes_s_id` INT NOT NULL,
  PRIMARY KEY (`p_id`),
  INDEX `fk_p_post_u_users_idx` (`p_u_user` ASC),
  INDEX `fk_p_post_co_color1_idx` (`p_col_color` ASC),
  INDEX `fk_p_post_b_brands1_idx` (`p_b_brand` ASC),
  INDEX `fk_p_post_g_genders1_idx` (`p_g_gender` ASC),
  INDEX `fk_p_post_ca_categories1_idx` (`p_ca_category` ASC),
  INDEX `fk_p_post_con_condition1_idx` (`p_con_condition` ASC),
  INDEX `fk_p_post_s_sizes1_idx` (`s_sizes_s_id` ASC),
  CONSTRAINT `fk_p_u_user`
    FOREIGN KEY (`p_u_user`)
    REFERENCES `Thrifter`.`u_users` (`u_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_co_color1`
    FOREIGN KEY (`p_col_color`)
    REFERENCES `Thrifter`.`col_colors` (`col_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_b_brands1`
    FOREIGN KEY (`p_b_brand`)
    REFERENCES `Thrifter`.`b_brands` (`b_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_g_genders1`
    FOREIGN KEY (`p_g_gender`)
    REFERENCES `Thrifter`.`g_genders` (`g_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_ca_categories1`
    FOREIGN KEY (`p_ca_category`)
    REFERENCES `Thrifter`.`ca_categories` (`ca_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_con_condition1`
    FOREIGN KEY (`p_con_condition`)
    REFERENCES `Thrifter`.`con_conditions` (`con_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_p_post_s_sizes1`
    FOREIGN KEY (`s_sizes_s_id`)
    REFERENCES `Thrifter`.`s_sizes` (`s_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`f_favorites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`f_favorites` (
  `f_u_user` INT NOT NULL,
  `f_p_post` INT NOT NULL,
  INDEX `fk_f_favorites_u_users1_idx` (`f_u_user` ASC),
  PRIMARY KEY (`f_u_user`),
  INDEX `fk_f_favorites_p_post1_idx` (`f_p_post` ASC),
  CONSTRAINT `fk_f_favorites_u_users1`
    FOREIGN KEY (`f_u_user`)
    REFERENCES `Thrifter`.`u_users` (`u_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_f_favorites_p_post1`
    FOREIGN KEY (`f_p_post`)
    REFERENCES `Thrifter`.`p_post` (`p_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`sca_SizeCategories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`sca_SizeCategories` (
  `s_sizes_s_id` INT NOT NULL,
  `ca_categories_ca_id` INT NOT NULL,
  PRIMARY KEY (`s_sizes_s_id`, `ca_categories_ca_id`),
  INDEX `fk_s_sizes_has_ca_categories_ca_categories1_idx` (`ca_categories_ca_id` ASC),
  INDEX `fk_s_sizes_has_ca_categories_s_sizes1_idx` (`s_sizes_s_id` ASC),
  CONSTRAINT `fk_s_sizes_has_ca_categories_s_sizes1`
    FOREIGN KEY (`s_sizes_s_id`)
    REFERENCES `Thrifter`.`s_sizes` (`s_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_s_sizes_has_ca_categories_ca_categories1`
    FOREIGN KEY (`ca_categories_ca_id`)
    REFERENCES `Thrifter`.`ca_categories` (`ca_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Thrifter`.`a_assets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Thrifter`.`a_assets` (
  `a_id` INT NOT NULL,
  `a_p_post` INT NOT NULL,
  PRIMARY KEY (`a_id`),
  INDEX `fk_a_assets_p_post1_idx` (`a_p_post` ASC),
  CONSTRAINT `fk_a_assets_p_post1`
    FOREIGN KEY (`a_p_post`)
    REFERENCES `Thrifter`.`p_post` (`p_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
