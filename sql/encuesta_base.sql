-- MySQL Script generated by MySQL Workbench
-- 12/21/15 15:45:47
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema encuestas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema encuestas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `encuestas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `encuestas` ;

-- -----------------------------------------------------
-- Table `encuestas`.`pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`pregunta` (
  `pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `pregunta_descripcion` MEDIUMTEXT NOT NULL COMMENT '',
  `pregunta_tipo` VARCHAR(6) NOT NULL COMMENT '',
  PRIMARY KEY (`pregunta_id`)  COMMENT '',
  UNIQUE INDEX `pregunta_id_UNIQUE` (`pregunta_id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`rol` (
  `rol_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `rol_nombre` VARCHAR(50) NOT NULL COMMENT '',
  `rol_descripcion` VARCHAR(500) NOT NULL COMMENT '',
  PRIMARY KEY (`rol_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`encuestado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`encuestado` (
  `encuestado_id` INT NOT NULL COMMENT '',
  `encuestado_nombres` VARCHAR(100) NOT NULL COMMENT '',
  `encuestado_apellidos` VARCHAR(100) NOT NULL COMMENT '',
  `encuestado_email` VARCHAR(45) NOT NULL COMMENT '',
  `encuestado_password` VARCHAR(50) NOT NULL COMMENT '',
  `encuestado_rol_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`encuestado_id`)  COMMENT '',
  INDEX `fk_encuestado_rol_encuestado1_idx` (`encuestado_rol_id` ASC)  COMMENT '',
  CONSTRAINT `fk_encuestado_rol_encuestado1`
    FOREIGN KEY (`encuestado_rol_id`)
    REFERENCES `encuestas`.`rol` (`rol_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`encuesta` (
  `encuesta_id` INT NOT NULL COMMENT '',
  `encuesta_nombre` VARCHAR(100) NOT NULL COMMENT '',
  `encuesta_descripcion` LONGTEXT NOT NULL COMMENT '',
  `encuesta_page` VARCHAR(200) NOT NULL COMMENT '',
  PRIMARY KEY (`encuesta_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`opsmu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`opsmu` (
  `opsmu_id` VARCHAR(20) NOT NULL COMMENT '',
  `opsmu_descripcion` MEDIUMTEXT NOT NULL COMMENT '',
  `opsmu_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`opsmu_id`)  COMMENT '',
  UNIQUE INDEX `opsmurb_id_UNIQUE` (`opsmu_id` ASC)  COMMENT '',
  INDEX `fk_opsmurb_pregunta1_idx` (`opsmu_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_opsmurb_pregunta1`
    FOREIGN KEY (`opsmu_pregunta_id`)
    REFERENCES `encuestas`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`encuesta_has_pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`encuesta_has_pregunta` (
  `pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `encuesta_id` INT NOT NULL COMMENT '',
  INDEX `fk_encuesta_has_pregunta_pregunta1_idx` (`pregunta_id` ASC)  COMMENT '',
  INDEX `fk_encuesta_has_pregunta_encuesta1_idx` (`encuesta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_encuesta_has_pregunta_pregunta1`
    FOREIGN KEY (`pregunta_id`)
    REFERENCES `encuestas`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encuesta_has_pregunta_encuesta1`
    FOREIGN KEY (`encuesta_id`)
    REFERENCES `encuestas`.`encuesta` (`encuesta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`encuestado_has_encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`encuestado_has_encuesta` (
  `encuestado_id` INT NOT NULL COMMENT '',
  `encuesta_id` INT NOT NULL COMMENT '',
  `encuestado_has_encuesta_respuesta` INT(1) NOT NULL DEFAULT 0 COMMENT '',
  PRIMARY KEY (`encuestado_id`, `encuesta_id`)  COMMENT '',
  INDEX `fk_encuestado_has_encuesta_encuesta1_idx` (`encuesta_id` ASC)  COMMENT '',
  INDEX `fk_encuestado_has_encuesta_encuestado1_idx` (`encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_encuestado_has_encuesta_encuestado1`
    FOREIGN KEY (`encuestado_id`)
    REFERENCES `encuestas`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encuestado_has_encuesta_encuesta1`
    FOREIGN KEY (`encuesta_id`)
    REFERENCES `encuestas`.`encuesta` (`encuesta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`ressmu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`ressmu` (
  `ressmu_encuestado_id` INT NOT NULL COMMENT '',
  `ressmu_opsmurb_id` VARCHAR(20) NOT NULL COMMENT '',
  INDEX `fk_ressmurb_encuestado1_idx` (`ressmu_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_ressmurb_opsmurb1_idx` (`ressmu_opsmurb_id` ASC)  COMMENT '',
  CONSTRAINT `fk_ressmurb_encuestado1`
    FOREIGN KEY (`ressmu_encuestado_id`)
    REFERENCES `encuestas`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ressmurb_opsmurb1`
    FOREIGN KEY (`ressmu_opsmurb_id`)
    REFERENCES `encuestas`.`opsmu` (`opsmu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`reseru`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`reseru` (
  `reseru_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `reseru_encuestado_id` INT NOT NULL COMMENT '',
  `reseru_valor` INT NOT NULL COMMENT '',
  INDEX `fk_reseru_pregunta1_idx` (`reseru_pregunta_id` ASC)  COMMENT '',
  INDEX `fk_reseru_encuestado1_idx` (`reseru_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_reseru_pregunta1`
    FOREIGN KEY (`reseru_pregunta_id`)
    REFERENCES `encuestas`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reseru_encuestado1`
    FOREIGN KEY (`reseru_encuestado_id`)
    REFERENCES `encuestas`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`respsu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`respsu` (
  `respsu_encuestado_id` INT NOT NULL COMMENT '',
  `respsu_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `respsu_id` VARCHAR(20) NULL COMMENT '',
  `respsu_comentario` MEDIUMTEXT NOT NULL COMMENT '',
  INDEX `fk_respsu_encuestado1_idx` (`respsu_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_respsu_pregunta1_idx` (`respsu_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_respsu_encuestado1`
    FOREIGN KEY (`respsu_encuestado_id`)
    REFERENCES `encuestas`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respsu_pregunta1`
    FOREIGN KEY (`respsu_pregunta_id`)
    REFERENCES `encuestas`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`mmrrow`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`mmrrow` (
  `mmrrow_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrrow_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrrow_descripcion` MEDIUMTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`mmrrow_id`)  COMMENT '',
  INDEX `fk_mmrrow_pregunta1_idx` (`mmrrow_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_mmrrow_pregunta1`
    FOREIGN KEY (`mmrrow_pregunta_id`)
    REFERENCES `encuestas`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`opmmr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`opmmr` (
  `opmmr_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmr_descripcion` VARCHAR(45) NOT NULL COMMENT '',
  `opmmr_mmrrow_id` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`opmmr_id`)  COMMENT '',
  INDEX `fk_opmmr_mmrrow1_idx` (`opmmr_mmrrow_id` ASC)  COMMENT '',
  CONSTRAINT `fk_opmmr_mmrrow1`
    FOREIGN KEY (`opmmr_mmrrow_id`)
    REFERENCES `encuestas`.`mmrrow` (`mmrrow_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`resmmr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`resmmr` (
  `resmmr_opmmr_id` VARCHAR(20) NOT NULL COMMENT '',
  `resmmr_encuestado_id` INT NOT NULL COMMENT '',
  INDEX `fk_resmmr_opmmr1_idx` (`resmmr_opmmr_id` ASC)  COMMENT '',
  INDEX `fk_resmmr_encuestado1_idx` (`resmmr_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_resmmr_opmmr1`
    FOREIGN KEY (`resmmr_opmmr_id`)
    REFERENCES `encuestas`.`opmmr` (`opmmr_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resmmr_encuestado1`
    FOREIGN KEY (`resmmr_encuestado_id`)
    REFERENCES `encuestas`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`respfh`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`respfh` (
  `respfh_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `respfh_encuestado_id` INT NOT NULL COMMENT '',
  `respfh_fecha` VARCHAR(45) NULL COMMENT '',
  `respfh_hora` VARCHAR(45) NULL COMMENT '',
  INDEX `fk_respfh_pregunta1_idx` (`respfh_pregunta_id` ASC)  COMMENT '',
  INDEX `fk_respfh_encuestado1_idx` (`respfh_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_respfh_pregunta1`
    FOREIGN KEY (`respfh_pregunta_id`)
    REFERENCES `encuestas`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respfh_encuestado1`
    FOREIGN KEY (`respfh_encuestado_id`)
    REFERENCES `encuestas`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`mmrcol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`mmrcol` (
  `mmrcol_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrcol_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrcol_descripcion` VARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`mmrcol_id`)  COMMENT '',
  INDEX `fk_mmrcol_pregunta1_idx` (`mmrcol_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_mmrcol_pregunta1`
    FOREIGN KEY (`mmrcol_pregunta_id`)
    REFERENCES `encuestas`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`opmmrs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`opmmrs` (
  `opmmrs_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmrs_mmrcol_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmrs_mmrrow_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmrs_descripcion` VARCHAR(45) NOT NULL COMMENT '',
  INDEX `fk_opmmrs_mmrcol1_idx` (`opmmrs_mmrcol_id` ASC)  COMMENT '',
  INDEX `fk_opmmrs_mmrrow1_idx` (`opmmrs_mmrrow_id` ASC)  COMMENT '',
  PRIMARY KEY (`opmmrs_id`)  COMMENT '',
  CONSTRAINT `fk_opmmrs_mmrcol1`
    FOREIGN KEY (`opmmrs_mmrcol_id`)
    REFERENCES `encuestas`.`mmrcol` (`mmrcol_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_opmmrs_mmrrow1`
    FOREIGN KEY (`opmmrs_mmrrow_id`)
    REFERENCES `encuestas`.`mmrrow` (`mmrrow_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `encuestas`.`resmmrs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `encuestas`.`resmmrs` (
  `resmmrs_encuestado_id` INT NOT NULL COMMENT '',
  `resmmrs_opmmrs_id` VARCHAR(20) NOT NULL COMMENT '',
  INDEX `fk_resmmrs_encuestado1_idx` (`resmmrs_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_resmmrs_opmmrs1_idx` (`resmmrs_opmmrs_id` ASC)  COMMENT '',
  CONSTRAINT `fk_resmmrs_encuestado1`
    FOREIGN KEY (`resmmrs_encuestado_id`)
    REFERENCES `encuestas`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resmmrs_opmmrs1`
    FOREIGN KEY (`resmmrs_opmmrs_id`)
    REFERENCES `encuestas`.`opmmrs` (`opmmrs_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
