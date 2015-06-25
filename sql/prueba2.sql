SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema prueba2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema prueba2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `prueba2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `prueba2` ;

-- -----------------------------------------------------
-- Table `prueba2`.`pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`pregunta` (
  `pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `pregunta_descripcion` VARCHAR(500) NOT NULL COMMENT '',
  `pregunta_tipo` VARCHAR(6) NOT NULL COMMENT '',
  PRIMARY KEY (`pregunta_id`)  COMMENT '',
  UNIQUE INDEX `pregunta_id_UNIQUE` (`pregunta_id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`encuestado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`encuestado` (
  `encuestado_id` INT NOT NULL COMMENT '',
  `encuestado_nombres` VARCHAR(100) NOT NULL COMMENT '',
  `encuestado_apellidos` VARCHAR(100) NOT NULL COMMENT '',
  `encuestado_email` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`encuestado_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`encuesta` (
  `encuesta_id` INT NOT NULL COMMENT '',
  `encuesta_nombre` VARCHAR(100) NOT NULL COMMENT '',
  `encuesta_descripcion` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`encuesta_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`opsmurb`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`opsmurb` (
  `opsmurb_id` VARCHAR(20) NOT NULL COMMENT '',
  `opsmurb_descripcion` MEDIUMTEXT NOT NULL COMMENT '',
  `opsmurb_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`opsmurb_id`)  COMMENT '',
  UNIQUE INDEX `opsmurb_id_UNIQUE` (`opsmurb_id` ASC)  COMMENT '',
  INDEX `fk_opsmurb_pregunta1_idx` (`opsmurb_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_opsmurb_pregunta1`
    FOREIGN KEY (`opsmurb_pregunta_id`)
    REFERENCES `prueba2`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`encuesta_has_pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`encuesta_has_pregunta` (
  `pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `encuesta_id` INT NOT NULL COMMENT '',
  INDEX `fk_encuesta_has_pregunta_pregunta1_idx` (`pregunta_id` ASC)  COMMENT '',
  INDEX `fk_encuesta_has_pregunta_encuesta1_idx` (`encuesta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_encuesta_has_pregunta_pregunta1`
    FOREIGN KEY (`pregunta_id`)
    REFERENCES `prueba2`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encuesta_has_pregunta_encuesta1`
    FOREIGN KEY (`encuesta_id`)
    REFERENCES `prueba2`.`encuesta` (`encuesta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`encuestado_has_encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`encuestado_has_encuesta` (
  `encuestado_id` INT NOT NULL COMMENT '',
  `encuesta_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`encuestado_id`, `encuesta_id`)  COMMENT '',
  INDEX `fk_encuestado_has_encuesta_encuesta1_idx` (`encuesta_id` ASC)  COMMENT '',
  INDEX `fk_encuestado_has_encuesta_encuestado1_idx` (`encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_encuestado_has_encuesta_encuestado1`
    FOREIGN KEY (`encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encuestado_has_encuesta_encuesta1`
    FOREIGN KEY (`encuesta_id`)
    REFERENCES `prueba2`.`encuesta` (`encuesta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`ressmurb`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`ressmurb` (
  `ressmurb_encuestado_id` INT NOT NULL COMMENT '',
  `ressmurb_opsmurb_id` VARCHAR(20) NOT NULL COMMENT '',
  INDEX `fk_ressmurb_encuestado1_idx` (`ressmurb_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_ressmurb_opsmurb1_idx` (`ressmurb_opsmurb_id` ASC)  COMMENT '',
  CONSTRAINT `fk_ressmurb_encuestado1`
    FOREIGN KEY (`ressmurb_encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ressmurb_opsmurb1`
    FOREIGN KEY (`ressmurb_opsmurb_id`)
    REFERENCES `prueba2`.`opsmurb` (`opsmurb_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smu_rb_1','¿Cual es su sabor de helado favorito?','smu_rb');
INSERT INTO opsmurb (opsmurb_id, opsmurb_descripcion, opsmurb_pregunta_id) VALUES ('smu_rb_1_1','Fresa','smu_rb_1');
INSERT INTO opsmurb (opsmurb_id, opsmurb_descripcion, opsmurb_pregunta_id) VALUES ('smu_rb_1_2','Chicle','smu_rb_1');
INSERT INTO opsmurb (opsmurb_id, opsmurb_descripcion, opsmurb_pregunta_id) VALUES ('smu_rb_1_3','Arequipe','smu_rb_1');
INSERT INTO opsmurb (opsmurb_id, opsmurb_descripcion, opsmurb_pregunta_id) VALUES ('smu_rb_1_4','Queso','smu_rb_1');
INSERT INTO opsmurb (opsmurb_id, opsmurb_descripcion, opsmurb_pregunta_id) VALUES ('smu_rb_1_5','Feijoa','smu_rb_1');
INSERT INTO opsmurb (opsmurb_id, opsmurb_descripcion, opsmurb_pregunta_id) VALUES ('smu_rb_1_6','Mani','smu_rb_1');













