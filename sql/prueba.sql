-- MySQL Script
-- Model: New Model    Version: 1.0

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema prueba
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema prueba
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `prueba` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `prueba` ;

-- -----------------------------------------------------
-- Table `prueba`.`pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`pregunta` (
  `pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `pregunta_descripcion` VARCHAR(500) NOT NULL COMMENT '',
  `pregunta_tipo` VARCHAR(6) NOT NULL COMMENT '',
  PRIMARY KEY (`pregunta_id`)  COMMENT '',
  UNIQUE INDEX `pregunta_id_UNIQUE` (`pregunta_id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`encuestado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`encuestado` (
  `encuestado_id` INT NOT NULL COMMENT '',
  `encuestado_nombres` VARCHAR(100) NOT NULL COMMENT '',
  `encuestado_apellidos` VARCHAR(100) NOT NULL COMMENT '',
  `encuestado_email` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`encuestado_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`encuesta` (
  `encuesta_id` INT NOT NULL COMMENT '',
  `encuesta_nombre` VARCHAR(100) NOT NULL COMMENT '',
  `encuesta_descripcion` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`encuesta_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`opsmu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`opsmu` (
  `opsmu_id` VARCHAR(20) NOT NULL COMMENT '',
  `opsmu_descripcion` MEDIUMTEXT NOT NULL COMMENT '',
  `opsmu_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`opsmu_id`)  COMMENT '',
  UNIQUE INDEX `opsmurb_id_UNIQUE` (`opsmu_id` ASC)  COMMENT '',
  INDEX `fk_opsmurb_pregunta1_idx` (`opsmu_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_opsmurb_pregunta1`
    FOREIGN KEY (`opsmu_pregunta_id`)
    REFERENCES `prueba`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`encuesta_has_pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`encuesta_has_pregunta` (
  `pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `encuesta_id` INT NOT NULL COMMENT '',
  INDEX `fk_encuesta_has_pregunta_pregunta1_idx` (`pregunta_id` ASC)  COMMENT '',
  INDEX `fk_encuesta_has_pregunta_encuesta1_idx` (`encuesta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_encuesta_has_pregunta_pregunta1`
    FOREIGN KEY (`pregunta_id`)
    REFERENCES `prueba`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encuesta_has_pregunta_encuesta1`
    FOREIGN KEY (`encuesta_id`)
    REFERENCES `prueba`.`encuesta` (`encuesta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`encuestado_has_encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`encuestado_has_encuesta` (
  `encuestado_id` INT NOT NULL COMMENT '',
  `encuesta_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`encuestado_id`, `encuesta_id`)  COMMENT '',
  INDEX `fk_encuestado_has_encuesta_encuesta1_idx` (`encuesta_id` ASC)  COMMENT '',
  INDEX `fk_encuestado_has_encuesta_encuestado1_idx` (`encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_encuestado_has_encuesta_encuestado1`
    FOREIGN KEY (`encuestado_id`)
    REFERENCES `prueba`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encuestado_has_encuesta_encuesta1`
    FOREIGN KEY (`encuesta_id`)
    REFERENCES `prueba`.`encuesta` (`encuesta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`ressmu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`ressmu` (
  `ressmu_encuestado_id` INT NOT NULL COMMENT '',
  `ressmu_opsmurb_id` VARCHAR(20) NOT NULL COMMENT '',
  INDEX `fk_ressmurb_encuestado1_idx` (`ressmu_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_ressmurb_opsmurb1_idx` (`ressmu_opsmurb_id` ASC)  COMMENT '',
  CONSTRAINT `fk_ressmurb_encuestado1`
    FOREIGN KEY (`ressmu_encuestado_id`)
    REFERENCES `prueba`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ressmurb_opsmurb1`
    FOREIGN KEY (`ressmu_opsmurb_id`)
    REFERENCES `prueba`.`opsmu` (`opsmu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`reseru`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`reseru` (
  `reseru_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `reseru_encuestado_id` INT NOT NULL COMMENT '',
  `reseru_valor` INT NOT NULL COMMENT '',
  INDEX `fk_reseru_pregunta1_idx` (`reseru_pregunta_id` ASC)  COMMENT '',
  INDEX `fk_reseru_encuestado1_idx` (`reseru_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_reseru_pregunta1`
    FOREIGN KEY (`reseru_pregunta_id`)
    REFERENCES `prueba`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reseru_encuestado1`
    FOREIGN KEY (`reseru_encuestado_id`)
    REFERENCES `prueba`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`respsu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`respsu` (
  `respsu_encuestado_id` INT NOT NULL COMMENT '',
  `respsu_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `respsu_id` VARCHAR(20) NULL COMMENT '',
  `respsu_comentario` MEDIUMTEXT NOT NULL COMMENT '',
  INDEX `fk_respsu_encuestado1_idx` (`respsu_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_respsu_pregunta1_idx` (`respsu_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_respsu_encuestado1`
    FOREIGN KEY (`respsu_encuestado_id`)
    REFERENCES `prueba`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respsu_pregunta1`
    FOREIGN KEY (`respsu_pregunta_id`)
    REFERENCES `prueba`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba`.`respfh`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba`.`respfh` (
  `respfh_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `respfh_encuestado_id` INT NOT NULL COMMENT '',
  `respfh_fecha` VARCHAR(10) NULL COMMENT '',
  `respfh_hora` VARCHAR(5) NULL COMMENT '',
  INDEX `fk_respfh_pregunta1_idx` (`respfh_pregunta_id` ASC)  COMMENT '',
  INDEX `fk_respfh_encuestado1_idx` (`respfh_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_respfh_pregunta1`
    FOREIGN KEY (`respfh_pregunta_id`)
    REFERENCES `prueba`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respfh_encuestado1`
    FOREIGN KEY (`respfh_encuestado_id`)
    REFERENCES `prueba`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smu_rb_1','¿Cual es su sabor de helado favorito?','smu_rb');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_1_1','Fresa','smu_rb_1');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_1_2','Chicle','smu_rb_1');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_1_3','Arequipe','smu_rb_1');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_1_4','Queso','smu_rb_1');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_1_5','Feijoa','smu_rb_1');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_1_6','Mani','smu_rb_1');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smu_s_2','¿Cual es su sabor de helado favorito?','smu_s');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_2_1','Fresa','smu_s_2');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_2_2','Chicle','smu_s_2');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_2_3','Arequipe','smu_s_2');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_2_4','Queso','smu_s_2');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_2_5','Feijoa','smu_s_2');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_2_6','Mani','smu_s_2');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smr_cb_3','¿Cuales son sus sabores de helado favoritos?','smr_cb');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_3_1','Fresa','smr_cb_3');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_3_2','Chicle','smr_cb_3');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_3_3','Arequipe','smr_cb_3');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_3_4','Queso','smr_cb_3');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_3_5','Feijoa','smr_cb_3');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_3_6','Mani','smr_cb_3');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smr_sm_4','¿Cuales son sus sabores de helado favoritos?','smr_sm');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_4_1','Fresa','smr_sm_4');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_4_2','Chicle','smr_sm_4');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_4_3','Arequipe','smr_sm_4');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_4_4','Queso','smr_sm_4');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_4_5','Feijoa','smr_sm_4');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_4_6','Mani','smr_sm_4');




INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_9','¿Que tan probable es que recomiende el helado de fresa?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psu_t_10','¿Cual es su marca de helado favorita?','psu_t');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psm_t_11','¿Cuales son sus tres marcas de helado?','psm_t');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_12','¿Que es lo que mas le gusta de su helado favorito?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('pfh_s_13','¿Cuando fue el ultimo dia y hora en comer su helado?','pfh_s');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psf_s_14','¿Cuando fue el ultimo dia en comer su helado?','psf_s');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psh_s_15','¿Cual es su hora favorita del dia para comer un helado?','psh_s');

INSERT INTO `encuesta`(`encuesta_id`, `encuesta_nombre`, `encuesta_descripcion`) VALUES ('1','Prueba','Pruebas');
INSERT INTO `encuestado`(`encuestado_id`, `encuestado_nombres`, `encuestado_apellidos`, `encuestado_email`) VALUES ('1','Luis Arturo','Zarate Ayala','luisarturo1989@gmail.com');
INSERT INTO `encuestado_has_encuesta`(`encuestado_id`, `encuesta_id`) VALUES ('1','1');
INSERT INTO `encuesta_has_pregunta`(`pregunta_id`, `encuesta_id`) VALUES ('smr_cb_3','1');
INSERT INTO `encuesta_has_pregunta`(`pregunta_id`, `encuesta_id`) VALUES ('smr_sm_4','1');
INSERT INTO `encuesta_has_pregunta`(`pregunta_id`, `encuesta_id`) VALUES ('smu_rb_1','1');
INSERT INTO `encuesta_has_pregunta`(`pregunta_id`, `encuesta_id`) VALUES ('smu_s_2','1');