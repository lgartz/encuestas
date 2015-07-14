-- MySQL Script generated by MySQL Workbench
-- 07/06/15 15:05:17
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
  `pregunta_descripcion` VARCHAR(500) NOT NULL COMMENT '',
  `pregunta_tipo` VARCHAR(6) NOT NULL COMMENT '',
  PRIMARY KEY (`pregunta_id`)  COMMENT '',
  UNIQUE INDEX `pregunta_id_UNIQUE` (`pregunta_id` ASC)  COMMENT '')
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
  PRIMARY KEY (`encuestado_id`)  COMMENT '')
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
  `mmrrow_descripcion` VARCHAR(45) NOT NULL COMMENT '',
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
  `mmrcol_descripcion` VARCHAR(45) NOT NULL COMMENT '',
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

INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_1','¿Hay Relación entre los planes de negocio y las estrategias de los servicios de TI?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_2','¿Existe definici&oacute;n y documentaci&oacute;n de la cartera de servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_3','¿Se tienen definidos los objetivos y expectativas de desempeño hacia el servicio de los clientes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_4','¿Se identifican, seleccionan y priorizan oportunidades de servicio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_5','¿Se evalúan con frecuencia el cumplimiento de los objetivos de los servicios de TI?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_6','¿La cartera de servicios esta asociadas a las áreas funcionales del negocio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_7','¿Existe clasificación de tipos de proveedores por servicio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_8','¿Está definido el Portafolio de Servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_9','¿Los retos, riesgos y factores críticos de éxito de los procesos están documentados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_10','¿Se realiza un adecuado manejo de costos y riesgos asociados a la cartera de servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_11','¿Existe planeación y control de presupuesto para la prestación de los servicios de TI?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_12','¿Existe centro de costos asignados a las áreas del negocio para la prestación de los servicios o se realiza cobros por los servicios de TI (Asignación costo / incidente)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_13','¿Dentro del servicio, hay clasificadores que designan el propósito final del costo (Capital/operacional, Directo/indirecto, Fijo/variable, Unidades de coste, Recurso humano/equipos)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_14','¿Existe una implementación del procesos de gestión financiera de los servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_15','¿Con frecuencia se evalúa el estado de la demanda de los servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_16','¿Hay una definición clara de las áreas usuarias versus servicios prestados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_17','¿Permanentemente se realiza análisis de patrones de actividades del negocio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_18','¿Con frecuencia se identifican, seleccionan y priorizan oportunidades de servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_19','¿Los servicios se priorizan de acuerdo al activos estratégico de la organización?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_20','¿Existe la definición del rol de atención al cliente que evalúa permanentemente la satisfacción y necesidades de las áreas usuarias?','eru_rb');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('1','Estrategia para los servicios IT Cauntitativa','Esta encuesta ITIL eval&uacute;a las actividades de la fase de estrateg&iacute;a para los servicios de tecnolog&iacute;as de informaci&oacute;n de los servicios','estrategia_cuantitativa.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_1','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_2','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_3','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_4','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_5','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_6','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_7','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_8','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_9','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_10','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_11','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_12','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_13','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_14','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_15','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_16','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_17','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_18','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_19','1');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_20','1');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_21','¿Hay Relación entre los planes de negocio y las estrategias de los servicios de TI?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_22','¿Existe definici&oacute;n y documentaci&oacute;n de la cartera de servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_23','¿Se tienen definidos los objetivos y expectativas de desempeño hacia el servicio de los clientes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_24','¿Se identifican, seleccionan y priorizan oportunidades de servicio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_25','¿Se evalúan con frecuencia el cumplimiento de los objetivos de los servicios de TI?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_26','¿La cartera de servicios esta asociadas a las áreas funcionales del negocio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_27','¿Existe clasificación de tipos de proveedores por servicio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_28','¿Está definido el Portafolio de Servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_29','¿Los retos, riesgos y factores críticos de éxito de los procesos están documentados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_30','¿Se realiza un adecuado manejo de costos y riesgos asociados a la cartera de servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_31','¿Existe planeación y control de presupuesto para la prestación de los servicios de TI?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_32','¿Existe centro de costos asignados a las áreas del negocio para la prestación de los servicios o se realiza cobros por los servicios de TI (Asignación costo / incidente)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_33','¿Dentro del servicio, hay clasificadores que designan el propósito final del costo (Capital/operacional, Directo/indirecto, Fijo/variable, Unidades de coste, Recurso humano/equipos)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_34','¿Existe una implementación del procesos de gestión financiera de los servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_35','¿Con frecuencia se evalúa el estado de la demanda de los servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_36','¿Hay una definición clara de las áreas usuarias versus servicios prestados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_37','¿Permanentemente se realiza análisis de patrones de actividades del negocio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_38','¿Con frecuencia se identifican, seleccionan y priorizan oportunidades de servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_39','¿Los servicios se priorizan de acuerdo al activos estratégico de la organización?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_40','¿Existe la definición del rol de atención al cliente que evalúa permanentemente la satisfacción y necesidades de las áreas usuarias?','psc_ta');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('2','Estrategia para los servicios IT Cualitativa','Esta encuesta ITIL registra una descripci&oacute;n de cada una de las actividades de la fase de estrateg&iacute;a para los servicios de tecnolog&iacute;as de informaci&oacute;n de los servicios','estrategia_cualitativa.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_21','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_22','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_23','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_24','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_25','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_26','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_27','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_28','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_29','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_30','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_31','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_32','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_33','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_34','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_35','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_36','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_37','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_38','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_39','2');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_40','2');
INSERT INTO encuestado (encuestado_id, encuestado_nombres, encuestado_apellidos, encuestado_email, encuestado_password) VALUES ('7','Luis Arturo','Zarate Ayala','luisarturo1989@gmail.com','827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','1');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','2');