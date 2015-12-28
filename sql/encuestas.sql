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
  `encuestado_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
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
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_5','Evalue las siguientes preguntas','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_5_1','mmr_rb_5','¿Que tan Importante es su Educacion?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_1_1','Nada Importante','mmr_rb_5_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_1_2','Poco Importante','mmr_rb_5_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_1_3','Importante','mmr_rb_5_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_1_4','Bastante Importante','mmr_rb_5_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_1_5','Muy Importante','mmr_rb_5_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_5_2','mmr_rb_5','¿Que tan Importante es su Familia?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_2_1','Nada Importante','mmr_rb_5_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_2_2','Poco Importante','mmr_rb_5_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_2_3','Importante','mmr_rb_5_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_2_4','Bastante Importante','mmr_rb_5_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_2_5','Muy Importante','mmr_rb_5_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_5_3','mmr_rb_5','¿Que tan Importante es su Religion?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_3_1','Nada Importante','mmr_rb_5_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_3_2','Poco Importante','mmr_rb_5_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_3_3','Importante','mmr_rb_5_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_3_4','Bastante Importante','mmr_rb_5_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_3_5','Muy Importante','mmr_rb_5_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_5_4','mmr_rb_5','¿Que tan Importante es su Ejercicio Fisico?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_4_1','Nada Importante','mmr_rb_5_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_4_2','Poco Importante','mmr_rb_5_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_4_3','Importante','mmr_rb_5_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_4_4','Bastante Importante','mmr_rb_5_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_5_4_5','Muy Importante','mmr_rb_5_4');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_cb_6','¿Cuales sabores de helado son los favoritos para cada miembro de su familia?','mmr_cb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_cb_6_1','mmr_cb_6','Papa');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_1_1','Arequipe','mmr_cb_6_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_1_2','Fresa','mmr_cb_6_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_1_3','Chicle','mmr_cb_6_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_1_4','Coco','mmr_cb_6_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_1_5','Queso','mmr_cb_6_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_cb_6_2','mmr_cb_6','Mama');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_2_1','Arequipe','mmr_cb_6_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_2_2','Fresa','mmr_cb_6_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_2_3','Chicle','mmr_cb_6_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_2_4','Coco','mmr_cb_6_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_2_5','Queso','mmr_cb_6_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_cb_6_3','mmr_cb_6','Hermana');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_3_1','Arequipe','mmr_cb_6_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_3_2','Fresa','mmr_cb_6_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_3_3','Chicle','mmr_cb_6_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_3_4','Coco','mmr_cb_6_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_6_3_5','Queso','mmr_cb_6_3');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_s_7','Segun los siguientes sabores de helados seleccione el tipo de textura y sabor que prefiere','mmr_s');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_7_1','mmr_s_7','Arequipe');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_7_2','mmr_s_7','Fresa');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_7_3','mmr_s_7','Chicle');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_7_4','mmr_s_7','Coco');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_7_5','mmr_s_7','Queso');
INSERT INTO mmrcol(mmrcol_id, mmrcol_pregunta_id, mmrcol_descripcion) VALUES ('mmr_s_7_1','mmr_s_7','textura');
INSERT INTO mmrcol(mmrcol_id, mmrcol_pregunta_id, mmrcol_descripcion) VALUES ('mmr_s_7_2','mmr_s_7','sabor');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_1_1_1','mmr_s_7_1','mmr_s_7_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_1_1_2','mmr_s_7_1','mmr_s_7_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_1_1_3','mmr_s_7_1','mmr_s_7_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_1_2_1','mmr_s_7_1','mmr_s_7_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_1_2_2','mmr_s_7_1','mmr_s_7_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_1_2_3','mmr_s_7_1','mmr_s_7_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_2_1_1','mmr_s_7_2','mmr_s_7_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_2_1_2','mmr_s_7_2','mmr_s_7_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_2_1_3','mmr_s_7_2','mmr_s_7_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_2_2_1','mmr_s_7_2','mmr_s_7_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_2_2_2','mmr_s_7_2','mmr_s_7_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_2_2_3','mmr_s_7_2','mmr_s_7_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_3_1_1','mmr_s_7_3','mmr_s_7_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_3_1_2','mmr_s_7_3','mmr_s_7_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_3_1_3','mmr_s_7_3','mmr_s_7_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_3_2_1','mmr_s_7_3','mmr_s_7_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_3_2_2','mmr_s_7_3','mmr_s_7_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_3_2_3','mmr_s_7_3','mmr_s_7_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_4_1_1','mmr_s_7_4','mmr_s_7_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_4_1_2','mmr_s_7_4','mmr_s_7_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_4_1_3','mmr_s_7_4','mmr_s_7_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_4_2_1','mmr_s_7_4','mmr_s_7_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_4_2_2','mmr_s_7_4','mmr_s_7_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_4_2_3','mmr_s_7_4','mmr_s_7_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_5_1_1','mmr_s_7_5','mmr_s_7_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_5_1_2','mmr_s_7_5','mmr_s_7_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_5_1_3','mmr_s_7_5','mmr_s_7_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_5_2_1','mmr_s_7_5','mmr_s_7_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_5_2_2','mmr_s_7_5','mmr_s_7_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_7_5_2_3','mmr_s_7_5','mmr_s_7_2','Agridulce');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_9','¿Que tan probable es que recomiende el helado de fresa?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psu_t_10','¿Cual es su marca de helado favorita?','psu_t');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psm_t_11','¿Cuales son sus tres marcas de helado?','psm_t');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_12','¿Que es lo que mas le gusta de su helado favorito?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('pfh_s_13','¿Cuando fue el ultimo dia y hora en comer su helado?','pfh_s');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psf_s_14','¿Cuando fue el ultimo dia en comer su helado?','psf_s');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psh_s_15','¿Cual es su hora favorita del dia para comer un helado?','psh_s');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('1','Encuesta Helados 1','Esta es una encuesta de helados 1','prueba.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smu_rb_1','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smu_s_2','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smr_cb_3','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smr_sm_4','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_5','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_cb_6','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_s_7','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_9','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psu_t_10','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psm_t_11','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_12','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('pfh_s_13','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psf_s_14','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psh_s_15','1');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smu_rb_16','¿Cual es su sabor de helado favorito?','smu_rb');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_16_1','Fresa','smu_rb_16');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_16_2','Chicle','smu_rb_16');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_16_3','Arequipe','smu_rb_16');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_16_4','Queso','smu_rb_16');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_16_5','Feijoa','smu_rb_16');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_rb_16_6','Mani','smu_rb_16');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smu_s_17','¿Cual es su sabor de helado favorito?','smu_s');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_17_1','Fresa','smu_s_17');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_17_2','Chicle','smu_s_17');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_17_3','Arequipe','smu_s_17');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_17_4','Queso','smu_s_17');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_17_5','Feijoa','smu_s_17');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smu_s_17_6','Mani','smu_s_17');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smr_cb_18','¿Cuales son sus sabores de helado favoritos?','smr_cb');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_18_1','Fresa','smr_cb_18');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_18_2','Chicle','smr_cb_18');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_18_3','Arequipe','smr_cb_18');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_18_4','Queso','smr_cb_18');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_18_5','Feijoa','smr_cb_18');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_cb_18_6','Mani','smr_cb_18');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('smr_sm_19','¿Cuales son sus sabores de helado favoritos?','smr_sm');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_19_1','Fresa','smr_sm_19');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_19_2','Chicle','smr_sm_19');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_19_3','Arequipe','smr_sm_19');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_19_4','Queso','smr_sm_19');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_19_5','Feijoa','smr_sm_19');
INSERT INTO opsmu (opsmu_id, opsmu_descripcion, opsmu_pregunta_id) VALUES ('smr_sm_19_6','Mani','smr_sm_19');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_20','Evalue las siguientes preguntas','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_20_1','mmr_rb_20','¿Que tan Importante es su Educacion?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_1_1','Nada Importante','mmr_rb_20_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_1_2','Poco Importante','mmr_rb_20_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_1_3','Importante','mmr_rb_20_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_1_4','Bastante Importante','mmr_rb_20_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_1_5','Muy Importante','mmr_rb_20_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_20_2','mmr_rb_20','¿Que tan Importante es su Familia?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_2_1','Nada Importante','mmr_rb_20_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_2_2','Poco Importante','mmr_rb_20_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_2_3','Importante','mmr_rb_20_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_2_4','Bastante Importante','mmr_rb_20_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_2_5','Muy Importante','mmr_rb_20_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_20_3','mmr_rb_20','¿Que tan Importante es su Religion?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_3_1','Nada Importante','mmr_rb_20_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_3_2','Poco Importante','mmr_rb_20_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_3_3','Importante','mmr_rb_20_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_3_4','Bastante Importante','mmr_rb_20_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_3_5','Muy Importante','mmr_rb_20_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_20_4','mmr_rb_20','¿Que tan Importante es su Ejercicio Fisico?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_4_1','Nada Importante','mmr_rb_20_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_4_2','Poco Importante','mmr_rb_20_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_4_3','Importante','mmr_rb_20_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_4_4','Bastante Importante','mmr_rb_20_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_20_4_5','Muy Importante','mmr_rb_20_4');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_cb_21','¿Cuales sabores de helado son los favoritos para cada miembro de su familia?','mmr_cb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_cb_21_1','mmr_cb_21','Papa');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_1_1','Arequipe','mmr_cb_21_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_1_2','Fresa','mmr_cb_21_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_1_3','Chicle','mmr_cb_21_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_1_4','Coco','mmr_cb_21_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_1_5','Queso','mmr_cb_21_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_cb_21_2','mmr_cb_21','Mama');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_2_1','Arequipe','mmr_cb_21_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_2_2','Fresa','mmr_cb_21_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_2_3','Chicle','mmr_cb_21_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_2_4','Coco','mmr_cb_21_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_2_5','Queso','mmr_cb_21_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_cb_21_3','mmr_cb_21','Hermana');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_3_1','Arequipe','mmr_cb_21_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_3_2','Fresa','mmr_cb_21_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_3_3','Chicle','mmr_cb_21_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_3_4','Coco','mmr_cb_21_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_cb_21_3_5','Queso','mmr_cb_21_3');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_s_22','Segun los siguientes sabores de helados seleccione el tipo de textura y sabor que prefiere','mmr_s');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_22_1','mmr_s_22','Arequipe');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_22_2','mmr_s_22','Fresa');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_22_3','mmr_s_22','Chicle');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_22_4','mmr_s_22','Coco');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_s_22_5','mmr_s_22','Queso');
INSERT INTO mmrcol(mmrcol_id, mmrcol_pregunta_id, mmrcol_descripcion) VALUES ('mmr_s_22_1','mmr_s_22','textura');
INSERT INTO mmrcol(mmrcol_id, mmrcol_pregunta_id, mmrcol_descripcion) VALUES ('mmr_s_22_2','mmr_s_22','sabor');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_1_1_1','mmr_s_22_1','mmr_s_22_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_1_1_2','mmr_s_22_1','mmr_s_22_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_1_1_3','mmr_s_22_1','mmr_s_22_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_1_2_1','mmr_s_22_1','mmr_s_22_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_1_2_2','mmr_s_22_1','mmr_s_22_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_1_2_3','mmr_s_22_1','mmr_s_22_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_2_1_1','mmr_s_22_2','mmr_s_22_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_2_1_2','mmr_s_22_2','mmr_s_22_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_2_1_3','mmr_s_22_2','mmr_s_22_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_2_2_1','mmr_s_22_2','mmr_s_22_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_2_2_2','mmr_s_22_2','mmr_s_22_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_2_2_3','mmr_s_22_2','mmr_s_22_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_3_1_1','mmr_s_22_3','mmr_s_22_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_3_1_2','mmr_s_22_3','mmr_s_22_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_3_1_3','mmr_s_22_3','mmr_s_22_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_3_2_1','mmr_s_22_3','mmr_s_22_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_3_2_2','mmr_s_22_3','mmr_s_22_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_3_2_3','mmr_s_22_3','mmr_s_22_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_4_1_1','mmr_s_22_4','mmr_s_22_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_4_1_2','mmr_s_22_4','mmr_s_22_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_4_1_3','mmr_s_22_4','mmr_s_22_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_4_2_1','mmr_s_22_4','mmr_s_22_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_4_2_2','mmr_s_22_4','mmr_s_22_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_4_2_3','mmr_s_22_4','mmr_s_22_2','Agridulce');	
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_5_1_1','mmr_s_22_5','mmr_s_22_1','Liso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_5_1_2','mmr_s_22_5','mmr_s_22_1','Rugoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_5_1_3','mmr_s_22_5','mmr_s_22_1','Esponjoso');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_5_2_1','mmr_s_22_5','mmr_s_22_2','Dulce');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_5_2_2','mmr_s_22_5','mmr_s_22_2','Amargo');
INSERT INTO opmmrs(opmmrs_id, opmmrs_mmrrow_id, opmmrs_mmrcol_id, opmmrs_descripcion) VALUES ('mmr_s_22_5_2_3','mmr_s_22_5','mmr_s_22_2','Agridulce');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_24','¿Que tan probable es que recomiende el helado de fresa?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psu_t_25','¿Cual es su marca de helado favorita?','psu_t');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psm_t_26','¿Cuales son sus tres marcas de helado?','psm_t');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_27','¿Que es lo que mas le gusta de su helado favorito?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('pfh_s_28','¿Cuando fue el ultimo dia y hora en comer su helado?','pfh_s');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psf_s_29','¿Cuando fue el ultimo dia en comer su helado?','psf_s');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psh_s_30','¿Cual es su hora favorita del dia para comer un helado?','psh_s');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('2','Encuesta Helados 2','Esta es una encuesta de helados 2','prueba2.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smu_rb_16','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smu_s_17','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smr_cb_18','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('smr_sm_19','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_20','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_cb_21','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_s_22','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_24','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psu_t_25','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psm_t_26','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_27','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('pfh_s_28','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psf_s_29','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psh_s_30','2');
INSERT INTO rol(rol_id, rol_nombre, rol_descripcion) VALUES ('1','Administrador','Representa el administrador de la aplicacion');
INSERT INTO rol(rol_id, rol_nombre, rol_descripcion) VALUES ('2','Invitado','Representa un invitado a contestar la encuesta');
INSERT INTO encuestado (encuestado_id, encuestado_nombres, encuestado_apellidos, encuestado_email, encuestado_password, encuestado_rol_id) VALUES ('1','Luis Arturo','Zarate Ayala','luisarturo1989@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','1');
INSERT INTO encuestado (encuestado_id, encuestado_nombres, encuestado_apellidos, encuestado_email, encuestado_password, encuestado_rol_id) VALUES ('2','Juan Luis','Rubio Sanchez','juanluis.rubio@udima.es','827ccb0eea8a706c4c34a16891f84e7b','2');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('1','1');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('2','1');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('1','2');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('2','2');
