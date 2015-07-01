SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

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
-- Table `prueba2`.`opsmu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`opsmu` (
  `opsmu_id` VARCHAR(20) NOT NULL COMMENT '',
  `opsmu_descripcion` MEDIUMTEXT NOT NULL COMMENT '',
  `opsmu_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`opsmu_id`)  COMMENT '',
  UNIQUE INDEX `opsmurb_id_UNIQUE` (`opsmu_id` ASC)  COMMENT '',
  INDEX `fk_opsmurb_pregunta1_idx` (`opsmu_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_opsmurb_pregunta1`
    FOREIGN KEY (`opsmu_pregunta_id`)
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
-- Table `prueba2`.`ressmu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`ressmu` (
  `ressmu_encuestado_id` INT NOT NULL COMMENT '',
  `ressmu_opsmurb_id` VARCHAR(20) NOT NULL COMMENT '',
  INDEX `fk_ressmurb_encuestado1_idx` (`ressmu_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_ressmurb_opsmurb1_idx` (`ressmu_opsmurb_id` ASC)  COMMENT '',
  CONSTRAINT `fk_ressmurb_encuestado1`
    FOREIGN KEY (`ressmu_encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ressmurb_opsmurb1`
    FOREIGN KEY (`ressmu_opsmurb_id`)
    REFERENCES `prueba2`.`opsmu` (`opsmu_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`reseru`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`reseru` (
  `reseru_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `reseru_encuestado_id` INT NOT NULL COMMENT '',
  `reseru_valor` INT NOT NULL COMMENT '',
  INDEX `fk_reseru_pregunta1_idx` (`reseru_pregunta_id` ASC)  COMMENT '',
  INDEX `fk_reseru_encuestado1_idx` (`reseru_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_reseru_pregunta1`
    FOREIGN KEY (`reseru_pregunta_id`)
    REFERENCES `prueba2`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reseru_encuestado1`
    FOREIGN KEY (`reseru_encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`respsu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`respsu` (
  `respsu_encuestado_id` INT NOT NULL COMMENT '',
  `respsu_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `respsu_id` VARCHAR(20) NULL COMMENT '',
  `respsu_comentario` MEDIUMTEXT NOT NULL COMMENT '',
  INDEX `fk_respsu_encuestado1_idx` (`respsu_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_respsu_pregunta1_idx` (`respsu_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_respsu_encuestado1`
    FOREIGN KEY (`respsu_encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respsu_pregunta1`
    FOREIGN KEY (`respsu_pregunta_id`)
    REFERENCES `prueba2`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`mmrrow`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`mmrrow` (
  `mmrrow_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrrow_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrrow_descripcion` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`mmrrow_id`)  COMMENT '',
  INDEX `fk_mmrrow_pregunta1_idx` (`mmrrow_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_mmrrow_pregunta1`
    FOREIGN KEY (`mmrrow_pregunta_id`)
    REFERENCES `prueba2`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`opmmr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`opmmr` (
  `opmmr_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmr_descripcion` VARCHAR(45) NOT NULL COMMENT '',
  `opmmr_mmrrow_id` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`opmmr_id`)  COMMENT '',
  INDEX `fk_opmmr_mmrrow1_idx` (`opmmr_mmrrow_id` ASC)  COMMENT '',
  CONSTRAINT `fk_opmmr_mmrrow1`
    FOREIGN KEY (`opmmr_mmrrow_id`)
    REFERENCES `prueba2`.`mmrrow` (`mmrrow_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`resmmr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`resmmr` (
  `resmmr_opmmr_id` VARCHAR(20) NOT NULL COMMENT '',
  `resmmr_encuestado_id` INT NOT NULL COMMENT '',
  INDEX `fk_resmmr_opmmr1_idx` (`resmmr_opmmr_id` ASC)  COMMENT '',
  INDEX `fk_resmmr_encuestado1_idx` (`resmmr_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_resmmr_opmmr1`
    FOREIGN KEY (`resmmr_opmmr_id`)
    REFERENCES `prueba2`.`opmmr` (`opmmr_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resmmr_encuestado1`
    FOREIGN KEY (`resmmr_encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`respfh`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`respfh` (
  `respfh_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `respfh_encuestado_id` INT NOT NULL COMMENT '',
  `respfh_fecha` VARCHAR(45) NULL COMMENT '',
  `respfh_hora` VARCHAR(45) NULL COMMENT '',
  INDEX `fk_respfh_pregunta1_idx` (`respfh_pregunta_id` ASC)  COMMENT '',
  INDEX `fk_respfh_encuestado1_idx` (`respfh_encuestado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_respfh_pregunta1`
    FOREIGN KEY (`respfh_pregunta_id`)
    REFERENCES `prueba2`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respfh_encuestado1`
    FOREIGN KEY (`respfh_encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`mmrcol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`mmrcol` (
  `mmrcol_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrcol_pregunta_id` VARCHAR(20) NOT NULL COMMENT '',
  `mmrcol_descripcion` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`mmrcol_id`)  COMMENT '',
  INDEX `fk_mmrcol_pregunta1_idx` (`mmrcol_pregunta_id` ASC)  COMMENT '',
  CONSTRAINT `fk_mmrcol_pregunta1`
    FOREIGN KEY (`mmrcol_pregunta_id`)
    REFERENCES `prueba2`.`pregunta` (`pregunta_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`opmmrs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`opmmrs` (
  `opmmrs_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmrs_mmrcol_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmrs_mmrrow_id` VARCHAR(20) NOT NULL COMMENT '',
  `opmmrs_descripcion` VARCHAR(45) NOT NULL COMMENT '',
  INDEX `fk_opmmrs_mmrcol1_idx` (`opmmrs_mmrcol_id` ASC)  COMMENT '',
  INDEX `fk_opmmrs_mmrrow1_idx` (`opmmrs_mmrrow_id` ASC)  COMMENT '',
  PRIMARY KEY (`opmmrs_id`)  COMMENT '',
  CONSTRAINT `fk_opmmrs_mmrcol1`
    FOREIGN KEY (`opmmrs_mmrcol_id`)
    REFERENCES `prueba2`.`mmrcol` (`mmrcol_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_opmmrs_mmrrow1`
    FOREIGN KEY (`opmmrs_mmrrow_id`)
    REFERENCES `prueba2`.`mmrrow` (`mmrrow_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prueba2`.`resmmrs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prueba2`.`resmmrs` (
  `resmmrs_encuestado_id` INT NOT NULL COMMENT '',
  `resmmrs_opmmrs_id` VARCHAR(20) NOT NULL COMMENT '',
  INDEX `fk_resmmrs_encuestado1_idx` (`resmmrs_encuestado_id` ASC)  COMMENT '',
  INDEX `fk_resmmrs_opmmrs1_idx` (`resmmrs_opmmrs_id` ASC)  COMMENT '',
  CONSTRAINT `fk_resmmrs_encuestado1`
    FOREIGN KEY (`resmmrs_encuestado_id`)
    REFERENCES `prueba2`.`encuestado` (`encuestado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resmmrs_opmmrs1`
    FOREIGN KEY (`resmmrs_opmmrs_id`)
    REFERENCES `prueba2`.`opmmrs` (`opmmrs_id`)
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

INSERT INTO `encuesta`(`encuesta_id`, `encuesta_nombre`, `encuesta_descripcion`) VALUES ('1','Prueba','Pruebas');
INSERT INTO `encuestado`(`encuestado_id`, `encuestado_nombres`, `encuestado_apellidos`, `encuestado_email`) VALUES ('1','Luis Arturo','Zarate Ayala','luisarturo1989@gmail.com');
INSERT INTO `encuestado_has_encuesta`(`encuestado_id`, `encuesta_id`) VALUES ('1','1');