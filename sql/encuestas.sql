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

INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_1','¿Hay Relación entre los planes de negocio y las estrategias de los servicios de TI?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_2','¿Existe definición y documentación de la cartera de servicios?','eru_rb');
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
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('1','Estrategia para los servicios IT Cauntitativa','Esta encuesta ITIL evalúa las actividades de la fase de estrategía para los servicios de tecnologí;as de información de los servicios','estrategia_cuantitativa.php');
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
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_22','¿Existe definición y documentación de la cartera de servicios?','psc_ta');
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
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('2','Estrategia para los servicios IT Cualitativa','Esta encuesta ITIL registra una descripción de cada una de las actividades de la fase de estrategía para los servicios de tecnologías de información de los servicios','estrategia_cualitativa.php');
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
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_40','2');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_41','Gestión del portafolio de servicios','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_1','mmr_rb_41','¿Hay Relación entre los planes de negocio y las estrategias de los servicios de TI?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_1_1','Nada Factible','mmr_rb_41_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_1_2','Poco Factible','mmr_rb_41_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_1_3','Algo Factible','mmr_rb_41_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_1_4','Factible','mmr_rb_41_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_1_5','Bastante Factible','mmr_rb_41_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_1_6','Muy Factible','mmr_rb_41_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_2','mmr_rb_41','¿Existe definición y documentación de la cartera de servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_2_1','Nada Factible','mmr_rb_41_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_2_2','Poco Factible','mmr_rb_41_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_2_3','Algo Factible','mmr_rb_41_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_2_4','Factible','mmr_rb_41_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_2_5','Bastante Factible','mmr_rb_41_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_2_6','Muy Factible','mmr_rb_41_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_3','mmr_rb_41','¿Se tienen definidos los objetivos y expectativas de desempeño hacia el servicio de los clientes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_3_1','Nada Factible','mmr_rb_41_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_3_2','Poco Factible','mmr_rb_41_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_3_3','Algo Factible','mmr_rb_41_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_3_4','Factible','mmr_rb_41_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_3_5','Bastante Factible','mmr_rb_41_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_3_6','Muy Factible','mmr_rb_41_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_4','mmr_rb_41','¿Se identifican, seleccionan y priorizan oportunidades de servicio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_4_1','Nada Factible','mmr_rb_41_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_4_2','Poco Factible','mmr_rb_41_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_4_3','Algo Factible','mmr_rb_41_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_4_4','Factible','mmr_rb_41_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_4_5','Bastante Factible','mmr_rb_41_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_4_6','Muy Factible','mmr_rb_41_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_5','mmr_rb_41','¿Se evalúan con frecuencia el cumplimiento de los objetivos de los servicios de TI?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_5_1','Nada Factible','mmr_rb_41_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_5_2','Poco Factible','mmr_rb_41_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_5_3','Algo Factible','mmr_rb_41_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_5_4','Factible','mmr_rb_41_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_5_5','Bastante Factible','mmr_rb_41_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_5_6','Muy Factible','mmr_rb_41_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_6','mmr_rb_41','¿La cartera de servicios esta asociadas a las áreas funcionales del negocio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_6_1','Nada Factible','mmr_rb_41_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_6_2','Poco Factible','mmr_rb_41_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_6_3','Algo Factible','mmr_rb_41_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_6_4','Factible','mmr_rb_41_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_6_5','Bastante Factible','mmr_rb_41_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_6_6','Muy Factible','mmr_rb_41_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_7','mmr_rb_41','¿Existe clasificación de tipos de proveedores por servicio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_7_1','Nada Factible','mmr_rb_41_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_7_2','Poco Factible','mmr_rb_41_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_7_3','Algo Factible','mmr_rb_41_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_7_4','Factible','mmr_rb_41_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_7_5','Bastante Factible','mmr_rb_41_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_7_6','Muy Factible','mmr_rb_41_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_8','mmr_rb_41','¿Está definido el Portafolio de Servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_8_1','Nada Factible','mmr_rb_41_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_8_2','Poco Factible','mmr_rb_41_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_8_3','Algo Factible','mmr_rb_41_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_8_4','Factible','mmr_rb_41_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_8_5','Bastante Factible','mmr_rb_41_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_8_6','Muy Factible','mmr_rb_41_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_41_9','mmr_rb_41','¿Los retos, riesgos y factores críticos de éxito de los procesos están documentados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_9_1','Nada Factible','mmr_rb_41_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_9_2','Poco Factible','mmr_rb_41_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_9_3','Algo Factible','mmr_rb_41_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_9_4','Factible','mmr_rb_41_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_9_5','Bastante Factible','mmr_rb_41_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_41_9_6','Muy Factible','mmr_rb_41_9');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_42','Gestión Financiera','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_42_1','mmr_rb_42','¿Se realiza un adecuado manejo de costos y riesgos asociados a la cartera de servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_1_1','Nada Factible','mmr_rb_42_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_1_2','Poco Factible','mmr_rb_42_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_1_3','Algo Factible','mmr_rb_42_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_1_4','Factible','mmr_rb_42_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_1_5','Bastante Factible','mmr_rb_42_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_1_6','Muy Factible','mmr_rb_42_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_42_2','mmr_rb_42','¿Existe planeación y control de presupuesto para la prestación de los servicios de TI?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_2_1','Nada Factible','mmr_rb_42_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_2_2','Poco Factible','mmr_rb_42_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_2_3','Algo Factible','mmr_rb_42_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_2_4','Factible','mmr_rb_42_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_2_5','Bastante Factible','mmr_rb_42_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_2_6','Muy Factible','mmr_rb_42_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_42_3','mmr_rb_42','¿Existe centro de costos asignados a las áreas del negocio para la prestación de los servicios o se realiza cobros por los servicios de TI (Asignación costo / incidente)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_3_1','Nada Factible','mmr_rb_42_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_3_2','Poco Factible','mmr_rb_42_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_3_3','Algo Factible','mmr_rb_42_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_3_4','Factible','mmr_rb_42_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_3_5','Bastante Factible','mmr_rb_42_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_3_6','Muy Factible','mmr_rb_42_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_42_4','mmr_rb_42','¿Dentro del servicio, hay clasificadores que designan el propósito final del costo (Capital/operacional, Directo/indirecto, Fijo/variable, Unidades de coste, Recurso humano/equipos)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_4_1','Nada Factible','mmr_rb_42_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_4_2','Poco Factible','mmr_rb_42_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_4_3','Algo Factible','mmr_rb_42_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_4_4','Factible','mmr_rb_42_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_4_5','Bastante Factible','mmr_rb_42_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_4_6','Muy Factible','mmr_rb_42_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_42_5','mmr_rb_42','¿Existe una implementación del procesos de gestión financiera de los servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_5_1','Nada Factible','mmr_rb_42_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_5_2','Poco Factible','mmr_rb_42_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_5_3','Algo Factible','mmr_rb_42_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_5_4','Factible','mmr_rb_42_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_5_5','Bastante Factible','mmr_rb_42_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_42_5_6','Muy Factible','mmr_rb_42_5');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_43','Gestión de la demanda','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_43_1','mmr_rb_43','¿Con frecuencia se evalúa el estado de la demanda de los servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_1_1','Nada Factible','mmr_rb_43_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_1_2','Poco Factible','mmr_rb_43_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_1_3','Algo Factible','mmr_rb_43_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_1_4','Factible','mmr_rb_43_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_1_5','Bastante Factible','mmr_rb_43_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_1_6','Muy Factible','mmr_rb_43_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_43_2','mmr_rb_43','¿Hay una definición clara de las áreas usuarias versus servicios prestados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_2_1','Nada Factible','mmr_rb_43_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_2_2','Poco Factible','mmr_rb_43_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_2_3','Algo Factible','mmr_rb_43_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_2_4','Factible','mmr_rb_43_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_2_5','Bastante Factible','mmr_rb_43_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_2_6','Muy Factible','mmr_rb_43_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_43_3','mmr_rb_43','¿Permanentemente se realiza análisis de patrones de actividades del negocio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_3_1','Nada Factible','mmr_rb_43_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_3_2','Poco Factible','mmr_rb_43_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_3_3','Algo Factible','mmr_rb_43_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_3_4','Factible','mmr_rb_43_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_3_5','Bastante Factible','mmr_rb_43_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_3_6','Muy Factible','mmr_rb_43_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_43_4','mmr_rb_43','¿Con frecuencia se identifican, seleccionan y priorizan oportunidades de servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_4_1','Nada Factible','mmr_rb_43_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_4_2','Poco Factible','mmr_rb_43_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_4_3','Algo Factible','mmr_rb_43_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_4_4','Factible','mmr_rb_43_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_4_5','Bastante Factible','mmr_rb_43_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_4_6','Muy Factible','mmr_rb_43_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_43_5','mmr_rb_43','¿Los servicios se priorizan de acuerdo al activos estratégico de la organización?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_5_1','Nada Factible','mmr_rb_43_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_5_2','Poco Factible','mmr_rb_43_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_5_3','Algo Factible','mmr_rb_43_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_5_4','Factible','mmr_rb_43_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_5_5','Bastante Factible','mmr_rb_43_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_5_6','Muy Factible','mmr_rb_43_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_43_6','mmr_rb_43','¿Existe la definición del rol de atención al cliente que evalúa permanentemente la satisfacción y necesidades de las áreas usuarias?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_6_1','Nada Factible','mmr_rb_43_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_6_2','Poco Factible','mmr_rb_43_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_6_3','Algo Factible','mmr_rb_43_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_6_4','Factible','mmr_rb_43_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_6_5','Bastante Factible','mmr_rb_43_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_43_6_6','Muy Factible','mmr_rb_43_6');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('3','Estrategia para los servicios IT Cauntitativa Version 2','Esta encuesta ITIL evalúa las actividades de la fase de estrategía para los servicios de tecnologías de información de los servicios V2','estrategia_cuantitativa_v2.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_41','3');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_42','3');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_43','3');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_44','¿Existe una base de datos de proveedores y contratos?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_45','¿Está definido el procesos de selección y contratación de servicios de TI?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_46','¿Se realiza un procesos de seguimiento y medición del comportamiento de los proveedores basados en métricas de desempeño?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_47','¿Los proveedores se categorizan por valor de importancia contra riesgo e impacto (estratégicos, tácticos, mecánica, operacionales)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_48','¿El proceso de compras está alineado con la estrategia, procesos, términos estándar y condiciones de los abastecimientos corporativos ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_49','¿Existen métricas definidas para medir la eficiencia de los procesos de servicio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_50','¿Se implementan medidas proactivas para mejorar el rendimiento de los servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_51','¿Se tiene definido un plan de capacidad que refleje las necesidades actuales y futuras?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_52','¿La planeación tecnológica se realiza basados en la capacidad actual y futura de los servicios de TI?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_53','¿Se lleva un registro y se realiza análisis del monitoreo del rendimiento de los servicios, para asegurar una capacidad adecuada de TI para alcanzar los niveles de servicio satisfactorio de los clientes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_54','¿Está definido y documentado la máxima capacidad actual de cada componente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_55','¿Los planes de continuidad y recuperación de servicios de TI están documentados, actualizados y probados','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_56','¿Se realiza con frecuencia un análisis de riesgos e impacto del negocio para asegurar que los planes de continuidad permitan mantener la operación del mismo?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_57','¿Se asesora a las demás áreas del negocio sobre gestión del riesgo y asuntos relacionados con la continuidad y recuperación?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_58','¿Existe presupuesto asignado a los planes de continuidad?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_59','¿Existe un plan de comunicación, educación, concientización y entrenamientos del plan de continuidad hacia las áreas?','eru_rb');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('4','Diseño de los Servicios TI - Cuantitativa','Esta encuesta ITIL evalúa las actividades de la fase de diseño para los servicios de tecnologías de información','disenio_cuantitativa.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_44','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_45','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_46','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_47','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_48','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_49','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_50','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_51','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_52','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_53','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_54','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_55','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_56','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_57','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_58','4');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_59','4');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_60','Gestión de los proveedores','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_60_1','mmr_rb_60','¿Existe una base de datos de proveedores y contratos?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_1_1','Nada Factible','mmr_rb_60_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_1_2','Poco Factible','mmr_rb_60_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_1_3','Algo Factible','mmr_rb_60_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_1_4','Factible','mmr_rb_60_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_1_5','Bastante Factible','mmr_rb_60_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_1_6','Muy Factible','mmr_rb_60_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_60_2','mmr_rb_60','¿Está definido el procesos de selección y contratación de servicios de TI?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_2_1','Nada Factible','mmr_rb_60_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_2_2','Poco Factible','mmr_rb_60_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_2_3','Algo Factible','mmr_rb_60_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_2_4','Factible','mmr_rb_60_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_2_5','Bastante Factible','mmr_rb_60_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_2_6','Muy Factible','mmr_rb_60_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_60_3','mmr_rb_60','¿Se realiza un procesos de seguimiento y medición del comportamiento de los proveedores basados en métricas de desempeño?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_3_1','Nada Factible','mmr_rb_60_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_3_2','Poco Factible','mmr_rb_60_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_3_3','Algo Factible','mmr_rb_60_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_3_4','Factible','mmr_rb_60_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_3_5','Bastante Factible','mmr_rb_60_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_3_6','Muy Factible','mmr_rb_60_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_60_4','mmr_rb_60','¿Los proveedores se categorizan por valor de importancia contra riesgo e impacto (estratégicos, tácticos, mecánica, operacionales)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_4_1','Nada Factible','mmr_rb_60_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_4_2','Poco Factible','mmr_rb_60_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_4_3','Algo Factible','mmr_rb_60_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_4_4','Factible','mmr_rb_60_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_4_5','Bastante Factible','mmr_rb_60_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_4_6','Muy Factible','mmr_rb_60_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_60_5','mmr_rb_60','¿El proceso de compras está alineado con la estrategia, procesos, términos estándar y condiciones de los abastecimientos corporativos?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_5_1','Nada Factible','mmr_rb_60_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_5_2','Poco Factible','mmr_rb_60_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_5_3','Algo Factible','mmr_rb_60_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_5_4','Factible','mmr_rb_60_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_5_5','Bastante Factible','mmr_rb_60_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_60_5_6','Muy Factible','mmr_rb_60_5');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_61','Gestión de la capacidad','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_61_1','mmr_rb_61','¿Existen métricas definidas para medir la eficiencia de los procesos de servicio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_1_1','Nada Factible','mmr_rb_61_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_1_2','Poco Factible','mmr_rb_61_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_1_3','Algo Factible','mmr_rb_61_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_1_4','Factible','mmr_rb_61_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_1_5','Bastante Factible','mmr_rb_61_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_1_6','Muy Factible','mmr_rb_61_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_61_2','mmr_rb_61','¿Se implementan medidas proactivas para mejorar el rendimiento de los servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_2_1','Nada Factible','mmr_rb_61_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_2_2','Poco Factible','mmr_rb_61_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_2_3','Algo Factible','mmr_rb_61_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_2_4','Factible','mmr_rb_61_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_2_5','Bastante Factible','mmr_rb_61_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_2_6','Muy Factible','mmr_rb_61_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_61_3','mmr_rb_61','¿Se tiene definido un plan de capacidad que refleje las necesidades actuales y futuras?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_3_1','Nada Factible','mmr_rb_61_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_3_2','Poco Factible','mmr_rb_61_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_3_3','Algo Factible','mmr_rb_61_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_3_4','Factible','mmr_rb_61_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_3_5','Bastante Factible','mmr_rb_61_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_3_6','Muy Factible','mmr_rb_61_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_61_4','mmr_rb_61','¿La planeación tecnológica se realiza basados en la capacidad actual y futura de los servicios de TI?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_4_1','Nada Factible','mmr_rb_61_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_4_2','Poco Factible','mmr_rb_61_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_4_3','Algo Factible','mmr_rb_61_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_4_4','Factible','mmr_rb_61_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_4_5','Bastante Factible','mmr_rb_61_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_4_6','Muy Factible','mmr_rb_61_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_61_5','mmr_rb_61','¿Se lleva un registro y se realiza análisis del monitoreo del rendimiento de los servicios, para asegurar una capacidad adecuada de TI para alcanzar los niveles de servicio satisfactorio de los clientes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_5_1','Nada Factible','mmr_rb_61_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_5_2','Poco Factible','mmr_rb_61_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_5_3','Algo Factible','mmr_rb_61_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_5_4','Factible','mmr_rb_61_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_5_5','Bastante Factible','mmr_rb_61_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_5_6','Muy Factible','mmr_rb_61_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_61_6','mmr_rb_61','¿Está definido y documentado la máxima capacidad actual de cada componente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_6_1','Nada Factible','mmr_rb_61_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_6_2','Poco Factible','mmr_rb_61_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_6_3','Algo Factible','mmr_rb_61_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_6_4','Factible','mmr_rb_61_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_6_5','Bastante Factible','mmr_rb_61_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_61_6_6','Muy Factible','mmr_rb_61_6');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_62','Gestión  de la continuidad de los servicios de TI','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_62_1','mmr_rb_62','¿Los planes de continuidad y recuperación de servicios de TI están documentados, actualizados y probados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_1_1','Nada Factible','mmr_rb_62_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_1_2','Poco Factible','mmr_rb_62_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_1_3','Algo Factible','mmr_rb_62_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_1_4','Factible','mmr_rb_62_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_1_5','Bastante Factible','mmr_rb_62_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_1_6','Muy Factible','mmr_rb_62_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_62_2','mmr_rb_62','¿Se realiza con frecuencia un análisis de riesgos e impacto del negocio para asegurar que los planes de continuidad permitan mantener la operación del mismo ?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_2_1','Nada Factible','mmr_rb_62_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_2_2','Poco Factible','mmr_rb_62_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_2_3','Algo Factible','mmr_rb_62_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_2_4','Factible','mmr_rb_62_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_2_5','Bastante Factible','mmr_rb_62_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_2_6','Muy Factible','mmr_rb_62_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_62_3','mmr_rb_62','¿Se asesora a las demás áreas del negocio sobre gestión del riesgo y asuntos relacionados con la continuidad y recuperación?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_3_1','Nada Factible','mmr_rb_62_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_3_2','Poco Factible','mmr_rb_62_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_3_3','Algo Factible','mmr_rb_62_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_3_4','Factible','mmr_rb_62_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_3_5','Bastante Factible','mmr_rb_62_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_3_6','Muy Factible','mmr_rb_62_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_62_4','mmr_rb_62','¿Existe presupuesto asignado a los planes de continuidad?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_4_1','Nada Factible','mmr_rb_62_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_4_2','Poco Factible','mmr_rb_62_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_4_3','Algo Factible','mmr_rb_62_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_4_4','Factible','mmr_rb_62_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_4_5','Bastante Factible','mmr_rb_62_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_4_6','Muy Factible','mmr_rb_62_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_62_5','mmr_rb_62','¿Existe un plan de comunicación, educación, concientización y entrenamientos del plan de continuidad hacia las áreas ?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_5_1','Nada Factible','mmr_rb_62_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_5_2','Poco Factible','mmr_rb_62_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_5_3','Algo Factible','mmr_rb_62_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_5_4','Factible','mmr_rb_62_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_5_5','Bastante Factible','mmr_rb_62_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_62_5_6','Muy Factible','mmr_rb_62_5');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('5','Diseño de los Servicios TI - Cuantitativa Version 2','Esta encuesta ITIL evalúa las actividades de la fase de diseño para los servicios de tecnologías de información','disenio_cuantitativa_v2.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_60','5');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_61','5');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_62','5');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_63','¿Existe una base de datos de proveedores y contratos?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_64','¿Está definido el procesos de selección y contratación de servicios de TI?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_65','¿Se realiza un procesos de seguimiento y medición del comportamiento de los proveedores basados en métricas de desempeño?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_66','¿Los proveedores se categorizan por valor de importancia contra riesgo e impacto (estratégicos, tácticos, mecánica, operacionales)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_67','¿El proceso de compras está alineado con la estrategia, procesos, términos estándar y condiciones de los abastecimientos corporativos?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_68','¿Existen métricas definidas para medir la eficiencia de los procesos de servicio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_69','¿Se implementan medidas proactivas para mejorar el rendimiento de los servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_70','¿Se tiene definido un plan de capacidad que refleje las necesidades actuales y futuras 1?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_71','¿La planeación tecnológica se realiza basados en la capacidad actual y futura de los servicios de TI ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_72','¿Se lleva un registro y se realiza análisis del monitoreo del rendimiento de los servicios, para asegurar una capacidad adecuada de TI para alcanzar los niveles de servicio satisfactorio de los clientes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_73','¿Está definido y documentado la máxima capacidad actual de cada componente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_74','¿Los planes de continuidad y recuperación de servicios de TI están documentados, actualizados y probados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_75','¿Se realiza con frecuencia un análisis de riesgos e impacto del negocio para asegurar que los planes de continuidad permitan mantener la operación del mismo?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_76','¿Se asesora a las demás áreas del negocio sobre gestión del riesgo y asuntos relacionados con la continuidad y recuperación?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_77','¿Existe presupuesto asignado a los planes de continuidad ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_78','¿Existe un plan de comunicación, educación, concientización y entrenamientos del plan de continuidad hacia las áreas?','psc_ta');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('6','Diseño de los Servicios TI - Cuantitativa','Esta encuesta ITIL evalúa las actividades de la fase de diseño para los servicios de tecnologías de información','disenio_cualitativa.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_63','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_64','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_65','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_66','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_67','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_68','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_69','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_70','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_71','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_72','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_73','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_74','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_75','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_76','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_77','6');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_78','6');
INSERT INTO encuestado (encuestado_id, encuestado_nombres, encuestado_apellidos, encuestado_email, encuestado_password) VALUES ('7','Luis Arturo','Zarate Ayala','luisarturo1989@gmail.com','827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','1');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','2');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','3');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','4');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','5');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','6');