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
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_78','6');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_79','¿Existe una base de datos de configuración (CMDB) debidamente actualizada?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_80','¿Se encuentran debidamente registrados todos los elementos de configuración en la CMDB (hardware, software, documentación, personal de soporte, módulo de software, etc.)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_81','¿El sistema de gestión de la configuración permite fácilmente evaluar el impacto de los cambios propuestos?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_82','¿El sistema de gestión de la configuración es actualizado durante el ciclo de los cambios ejecutados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_83','¿El área de TI cuenta con una Biblioteca definitiva de medios- DML donde se almacena las licencias, versiones definitivas y aprobadas de todo el software de los elementos de configuración?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_84','¿La DML se encuentra en un lugar seguro y su acceso es controlado de forma lógica y física?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_85','¿Hay planes claros y compresibles de la versión e implantación para minimizar el impacto sobre la operación de los servicios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_86','¿Se tiene definido el rol del Gestor de implementación y Versión?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_87','¿Existen herramientas o procesos definidos para la distribución y actualización de software?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_88','¿Está definido el proceso de gestión del cambio y el rol del gestor del cambio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_89','¿Existe comité del cambio que evalúa el impacto del cambio y hace toda la gestión de control del mismo?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_90','¿Los cambios están categorizados (Estándar, normal, emergencia)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_91','¿Los cambios son registrados y revisados por el comité en un formato estándar?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_92','¿El comité evalúa el impacto de los cambios y la relación con otros?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_93','¿El comité del cambio exige autorización de las ventanas de mantenimiento de las áreas del negocio para la ejecución de los cambios, con el fin de coordinar las actividades, de tal forma que afecten lo menos posible la operación?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_94','¿El proceso de gestión del cambio esta diseñado y planeado en relación con la implementación y versión, con los procesos de activos de servicio y gestión de la configuración?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_95','¿Al comité del cambio asiste los expertos de cada área para evaluar el impacto y riesgos de lo cambios a ejecutar?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_96','¿Se exige que los cambios tengan planes de retorno (rollback)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_97','¿El gestor o comité de cambio filtra los cambios que han sido rechazados, incompletos o en revisión?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_98','¿Para cualquier cambio de servicios o infraestructura, se obtiene una autorización formal de la autoridad de cambio, que puede ser un rol, persona o grupo de personas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_99','¿Se realiza una revisión post implementación de los cambios realizados para validar que el cambio haya logrado sus objetivos y no existan efectos secundarios inesperados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_100','¿Se tienen definidos indicadores clave de rendimiento (KPI's) para la gestión del cambio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_101','¿Existe cultura de Gestión del Cambio a lo largo de la organización, donde no este permitidos los cambios no autorizados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_102','¿Se cuenta con procesos de pruebas para la implementación de los componentes de servicios próximos a entrar en ambiente de producción?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_103','¿Si se cumple con los criterios de aceptación de servicio, se realiza una validación del rendimiento del servicio para el cumplimiento de los acuerdos de niveles de servicio, una vez puesto en producción?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_104','¿Para el despliegue de un servicio nuevo se evalúa previamente la preparación y disponibilidad de los recursos (humanos, tecnológicos, stakeholders, etc)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_105','¿Los componentes son probados aisladamente para validar que son entregados según las especificaciones para generar los resultados esperados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_106','¿Se tiene registro de la evidencia de pruebas de los componentes y servicios?','eru_rb');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('7','Transición de los Servicios TI - Cuantitativa','Esta encuesta ITIL evalúa las actividades de la fase de transición para los servicios de tecnologías de información','transicion_cuantitativa.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_79','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_80','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_81','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_82','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_83','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_84','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_85','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_86','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_87','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_88','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_89','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_90','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_91','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_92','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_93','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_94','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_95','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_96','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_97','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_98','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_99','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_100','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_101','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_102','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_103','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_104','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_105','7');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_106','7');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_107','¿Existe una base de datos de configuración (CMDB) debidamente actualizada?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_108','¿Se encuentran debidamente registrados todos los elementos de configuración en la CMDB (hardware, software, documentación, personal de soporte, módulo de software, etc.)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_109','¿El sistema de gestión de la configuración permite fácilmente evaluar el impacto de los cambios propuestos?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_110','¿El sistema de gestión de la configuración es actualizado durante el ciclo de los cambios ejecutados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_111','¿El área de TI cuenta con una Biblioteca definitiva de medios- DML donde se almacena las licencias, versiones definitivas y aprobadas de todo el software de los elementos de configuración?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_112','¿La DML se encuentra en un lugar seguro y su acceso es controlado de forma lógica y física?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_113','¿Hay planes claros y compresibles de la versión e implantación para minimizar el impacto sobre la operación de los servicios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_114','¿Se tiene definido el rol del Gestor de implementación y Versión?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_115','¿Existen herramientas o procesos definidos para la distribución y actualización de software?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_116','¿Está definido el proceso de gestión del cambio y el rol del gestor del cambio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_117','¿Existe comité del cambio que evalúa el impacto del cambio y hace toda la gestión de control del mismo?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_118','¿Los cambios están categorizados (Estándar, normal, emergencia)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_119','¿Los cambios son registrados y revisados por el comité en un formato estándar?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_120','¿El comité evalúa el impacto de los cambios y la relación con otros?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_121','¿El comité del cambio exige autorización de las ventanas de mantenimiento de las áreas del negocio para la ejecución de los cambios, con el fin de coordinar las actividades, de tal forma que afecten lo menos posible la operación?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_122','¿El proceso de gestión del cambio esta diseñado y planeado en relación con la implementación y versión, con los procesos de activos de servicio y gestión de la configuración?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_123','¿Al comité del cambio asiste los expertos de cada área para evaluar el impacto y riesgos de lo cambios a ejecutar?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_124','¿Se exige que los cambios tengan planes de retorno (rollback)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_125','¿El gestor o comité de cambio filtra los cambios que han sido rechazados, incompletos o en revisión?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_126','¿Para cualquier cambio de servicios o infraestructura, se obtiene una autorización formal de la autoridad de cambio, que puede ser un rol, persona o grupo de personas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_127','¿Se realiza una revisión post implementación de los cambios realizados para validar que el cambio haya logrado sus objetivos y no existan efectos secundarios inesperados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_128','¿Se tienen definidos indicadores clave de rendimiento (KPI's) para la gestión del cambio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_129','¿Existe cultura de Gestión del Cambio a lo largo de la organización, donde no este permitidos los cambios no autorizados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_130','¿Se cuenta con procesos de pruebas para la implementación de los componentes de servicios próximos a entrar en ambiente de producción?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_131','¿Si se cumple con los criterios de aceptación de servicio, se realiza una validación del rendimiento del servicio para el cumplimiento de los acuerdos de niveles de servicio, una vez puesto en producción?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_132','¿Para el despliegue de un servicio nuevo se evalúa previamente la preparación y disponibilidad de los recursos (humanos, tecnológicos, stakeholders, etc)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_133','¿Los componentes son probados aisladamente para validar que son entregados según las especificaciones para generar los resultados esperados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_134','¿Se tiene registro de la evidencia de pruebas de los componentes y servicios?','psc_ta');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('8','Transición de los Servicios TI - Cualitativa','Esta encuesta ITIL evalúa las actividades de la fase de transición para los servicios de tecnologías de información','transicion_cualitativa.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_107','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_108','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_109','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_110','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_111','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_112','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_113','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_114','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_115','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_116','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_117','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_118','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_119','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_120','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_121','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_122','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_123','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_124','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_125','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_126','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_127','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_128','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_129','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_130','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_131','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_132','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_133','8');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_134','8');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_135','Activos del Servicio y Gestión de la Configuración','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_135_1','mmr_rb_135','¿Existe una base de datos de configuración (CMDB) debidamente actualizada?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_1_1','Nada Factible','mmr_rb_135_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_1_2','Poco Factible','mmr_rb_135_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_1_3','Algo Factible','mmr_rb_135_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_1_4','Factible','mmr_rb_135_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_1_5','Bastante Factible','mmr_rb_135_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_1_6','Muy Factible','mmr_rb_135_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_135_2','mmr_rb_135','¿Se encuentran debidamente registrados todos los elementos de configuración en la CMDB (hardware, software, documentación, personal de soporte, módulo de software, etc.)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_2_1','Nada Factible','mmr_rb_135_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_2_2','Poco Factible','mmr_rb_135_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_2_3','Algo Factible','mmr_rb_135_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_2_4','Factible','mmr_rb_135_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_2_5','Bastante Factible','mmr_rb_135_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_2_6','Muy Factible','mmr_rb_135_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_135_3','mmr_rb_135','¿El sistema de gestión de la configuración permite fácilmente evaluar el impacto de los cambios propuestos?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_3_1','Nada Factible','mmr_rb_135_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_3_2','Poco Factible','mmr_rb_135_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_3_3','Algo Factible','mmr_rb_135_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_3_4','Factible','mmr_rb_135_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_3_5','Bastante Factible','mmr_rb_135_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_3_6','Muy Factible','mmr_rb_135_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_135_4','mmr_rb_135','¿El sistema de gestión de la configuración es actualizado durante el ciclo de los cambios ejecutados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_4_1','Nada Factible','mmr_rb_135_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_4_2','Poco Factible','mmr_rb_135_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_4_3','Algo Factible','mmr_rb_135_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_4_4','Factible','mmr_rb_135_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_4_5','Bastante Factible','mmr_rb_135_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_4_6','Muy Factible','mmr_rb_135_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_135_5','mmr_rb_135','¿El área de TI cuenta con una Biblioteca definitiva de medios- DML donde se almacena las licencias, versiones definitivas y aprobadas de todo el software de los elementos de configuración?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_5_1','Nada Factible','mmr_rb_135_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_5_2','Poco Factible','mmr_rb_135_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_5_3','Algo Factible','mmr_rb_135_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_5_4','Factible','mmr_rb_135_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_5_5','Bastante Factible','mmr_rb_135_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_5_6','Muy Factible','mmr_rb_135_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_135_6','mmr_rb_135','¿La DML se encuentra en un lugar seguro y su acceso es controlado de forma lógica y física?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_6_1','Nada Factible','mmr_rb_135_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_6_2','Poco Factible','mmr_rb_135_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_6_3','Algo Factible','mmr_rb_135_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_6_4','Factible','mmr_rb_135_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_6_5','Bastante Factible','mmr_rb_135_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_135_6_6','Muy Factible','mmr_rb_135_6');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_136','Gestión de implementación y versión','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_136_1','mmr_rb_136','¿Hay planes claros y compresibles de la versión e implantación para minimizar el impacto sobre la operación de los servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_1_1','Nada Factible','mmr_rb_136_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_1_2','Poco Factible','mmr_rb_136_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_1_3','Algo Factible','mmr_rb_136_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_1_4','Factible','mmr_rb_136_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_1_5','Bastante Factible','mmr_rb_136_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_1_6','Muy Factible','mmr_rb_136_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_136_2','mmr_rb_136','¿Se tiene definido el rol del Gestor de implementación y Versión?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_2_1','Nada Factible','mmr_rb_136_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_2_2','Poco Factible','mmr_rb_136_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_2_3','Algo Factible','mmr_rb_136_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_2_4','Factible','mmr_rb_136_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_2_5','Bastante Factible','mmr_rb_136_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_2_6','Muy Factible','mmr_rb_136_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_136_3','mmr_rb_136','¿Existen herramientas o procesos definidos para la distribución y actualización de software?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_3_1','Nada Factible','mmr_rb_136_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_3_2','Poco Factible','mmr_rb_136_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_3_3','Algo Factible','mmr_rb_136_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_3_4','Factible','mmr_rb_136_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_3_5','Bastante Factible','mmr_rb_136_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_136_3_6','Muy Factible','mmr_rb_136_3');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_137','Gestión de cambio','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_1','mmr_rb_137','¿Está definido el proceso de gestión del cambio y el rol del gestor del cambio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_1_1','Nada Factible','mmr_rb_137_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_1_2','Poco Factible','mmr_rb_137_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_1_3','Algo Factible','mmr_rb_137_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_1_4','Factible','mmr_rb_137_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_1_5','Bastante Factible','mmr_rb_137_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_1_6','Muy Factible','mmr_rb_137_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_2','mmr_rb_137','¿Existe comité del cambio que evalúa el impacto del cambio y hace toda la gestión de control del mismo?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_2_1','Nada Factible','mmr_rb_137_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_2_2','Poco Factible','mmr_rb_137_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_2_3','Algo Factible','mmr_rb_137_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_2_4','Factible','mmr_rb_137_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_2_5','Bastante Factible','mmr_rb_137_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_2_6','Muy Factible','mmr_rb_137_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_3','mmr_rb_137','¿Los cambios están categorizados (Estándar, normal, emergencia)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_3_1','Nada Factible','mmr_rb_137_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_3_2','Poco Factible','mmr_rb_137_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_3_3','Algo Factible','mmr_rb_137_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_3_4','Factible','mmr_rb_137_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_3_5','Bastante Factible','mmr_rb_137_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_3_6','Muy Factible','mmr_rb_137_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_4','mmr_rb_137','¿Los cambios son registrados y revisados por el comité en un formato estándar?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_4_1','Nada Factible','mmr_rb_137_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_4_2','Poco Factible','mmr_rb_137_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_4_3','Algo Factible','mmr_rb_137_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_4_4','Factible','mmr_rb_137_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_4_5','Bastante Factible','mmr_rb_137_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_4_6','Muy Factible','mmr_rb_137_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_5','mmr_rb_137','¿El comité evalúa el impacto de los cambios y la relación con otros?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_5_1','Nada Factible','mmr_rb_137_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_5_2','Poco Factible','mmr_rb_137_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_5_3','Algo Factible','mmr_rb_137_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_5_4','Factible','mmr_rb_137_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_5_5','Bastante Factible','mmr_rb_137_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_5_6','Muy Factible','mmr_rb_137_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_6','mmr_rb_137','¿El comité del cambio exige autorización de las ventanas de mantenimiento de las áreas del negocio para la ejecución de los cambios, con el fin de coordinar las actividades, de tal forma que afecten lo menos posible la operación?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_6_1','Nada Factible','mmr_rb_137_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_6_2','Poco Factible','mmr_rb_137_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_6_3','Algo Factible','mmr_rb_137_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_6_4','Factible','mmr_rb_137_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_6_5','Bastante Factible','mmr_rb_137_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_6_6','Muy Factible','mmr_rb_137_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_7','mmr_rb_137','¿El proceso de gestión del cambio esta diseñado y planeado en relación con la implementación y versión, con los procesos de activos de servicio y gestión de la configuración?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_7_1','Nada Factible','mmr_rb_137_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_7_2','Poco Factible','mmr_rb_137_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_7_3','Algo Factible','mmr_rb_137_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_7_4','Factible','mmr_rb_137_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_7_5','Bastante Factible','mmr_rb_137_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_7_6','Muy Factible','mmr_rb_137_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_8','mmr_rb_137','¿Al comité del cambio asiste los expertos de cada área para evaluar el impacto y riesgos de lo cambios a ejecutar?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_8_1','Nada Factible','mmr_rb_137_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_8_2','Poco Factible','mmr_rb_137_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_8_3','Algo Factible','mmr_rb_137_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_8_4','Factible','mmr_rb_137_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_8_5','Bastante Factible','mmr_rb_137_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_8_6','Muy Factible','mmr_rb_137_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_9','mmr_rb_137','¿Se exige que los cambios tengan planes de retorno (rollback)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_9_1','Nada Factible','mmr_rb_137_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_9_2','Poco Factible','mmr_rb_137_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_9_3','Algo Factible','mmr_rb_137_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_9_4','Factible','mmr_rb_137_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_9_5','Bastante Factible','mmr_rb_137_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_9_6','Muy Factible','mmr_rb_137_9');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_10','mmr_rb_137','¿El gestor o comité de cambio filtra los cambios que han sido rechazados, incompletos o en revisión?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_10_1','Nada Factible','mmr_rb_137_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_10_2','Poco Factible','mmr_rb_137_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_10_3','Algo Factible','mmr_rb_137_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_10_4','Factible','mmr_rb_137_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_10_5','Bastante Factible','mmr_rb_137_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_10_6','Muy Factible','mmr_rb_137_10');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_11','mmr_rb_137','¿Para cualquier cambio de servicios o infraestructura, se obtiene una autorización formal de la autoridad de cambio, que puede ser un rol, persona o grupo de personas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_11_1','Nada Factible','mmr_rb_137_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_11_2','Poco Factible','mmr_rb_137_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_11_3','Algo Factible','mmr_rb_137_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_11_4','Factible','mmr_rb_137_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_11_5','Bastante Factible','mmr_rb_137_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_11_6','Muy Factible','mmr_rb_137_11');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_12','mmr_rb_137','¿Se realiza una revisión post implementación de los cambios realizados para validar que el cambio haya logrado sus objetivos y no existan efectos secundarios inesperados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_12_1','Nada Factible','mmr_rb_137_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_12_2','Poco Factible','mmr_rb_137_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_12_3','Algo Factible','mmr_rb_137_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_12_4','Factible','mmr_rb_137_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_12_5','Bastante Factible','mmr_rb_137_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_12_6','Muy Factible','mmr_rb_137_12');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_13','mmr_rb_137','¿Se tienen definidos indicadores clave de rendimiento (KPI's) para la gestión del cambio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_13_1','Nada Factible','mmr_rb_137_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_13_2','Poco Factible','mmr_rb_137_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_13_3','Algo Factible','mmr_rb_137_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_13_4','Factible','mmr_rb_137_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_13_5','Bastante Factible','mmr_rb_137_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_13_6','Muy Factible','mmr_rb_137_13');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_137_14','mmr_rb_137','¿Existe cultura de Gestión del Cambio a lo largo de la organización, donde no este permitidos los cambios no autorizados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_14_1','Nada Factible','mmr_rb_137_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_14_2','Poco Factible','mmr_rb_137_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_14_3','Algo Factible','mmr_rb_137_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_14_4','Factible','mmr_rb_137_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_14_5','Bastante Factible','mmr_rb_137_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_137_14_6','Muy Factible','mmr_rb_137_14');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_138','Pruebas','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_138_1','mmr_rb_138','¿Se cuenta con procesos de pruebas para la implementación de los componentes de servicios próximos a entrar en ambiente de producción?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_1_1','Nada Factible','mmr_rb_138_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_1_2','Poco Factible','mmr_rb_138_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_1_3','Algo Factible','mmr_rb_138_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_1_4','Factible','mmr_rb_138_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_1_5','Bastante Factible','mmr_rb_138_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_1_6','Muy Factible','mmr_rb_138_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_138_2','mmr_rb_138','¿Si se cumple con los criterios de aceptación de servicio, se realiza una validación del rendimiento del servicio para el cumplimiento de los acuerdos de niveles de servicio, una vez puesto en producción?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_2_1','Nada Factible','mmr_rb_138_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_2_2','Poco Factible','mmr_rb_138_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_2_3','Algo Factible','mmr_rb_138_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_2_4','Factible','mmr_rb_138_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_2_5','Bastante Factible','mmr_rb_138_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_2_6','Muy Factible','mmr_rb_138_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_138_3','mmr_rb_138','¿Para el despliegue de un servicio nuevo se evalúa previamente la preparación y disponibilidad de los recursos (humanos, tecnológicos, stakeholders, etc)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_3_1','Nada Factible','mmr_rb_138_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_3_2','Poco Factible','mmr_rb_138_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_3_3','Algo Factible','mmr_rb_138_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_3_4','Factible','mmr_rb_138_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_3_5','Bastante Factible','mmr_rb_138_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_3_6','Muy Factible','mmr_rb_138_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_138_4','mmr_rb_138','¿Los componentes son probados aisladamente para validar que son entregados según las especificaciones para generar los resultados esperados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_4_1','Nada Factible','mmr_rb_138_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_4_2','Poco Factible','mmr_rb_138_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_4_3','Algo Factible','mmr_rb_138_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_4_4','Factible','mmr_rb_138_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_4_5','Bastante Factible','mmr_rb_138_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_4_6','Muy Factible','mmr_rb_138_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_138_5','mmr_rb_138','¿Se tiene registro de la evidencia de pruebas de los componentes y servicios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_5_1','Nada Factible','mmr_rb_138_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_5_2','Poco Factible','mmr_rb_138_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_5_3','Algo Factible','mmr_rb_138_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_5_4','Factible','mmr_rb_138_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_5_5','Bastante Factible','mmr_rb_138_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_138_5_6','Muy Factible','mmr_rb_138_5');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('9','Transición de los Servicios TI - Cuantitativa Version 2','Esta encuesta ITIL evalúa las actividades de la fase de transición para los servicios de tecnologías de información','transicion_cuantitativa_v2.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_135','9');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_136','9');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_137','9');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_138','9');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_139','¿Existe una Base de Datos única para el registro de Incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_140','¿Existe un identificador único para cada incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_141','¿La documentación registrada de Incidentes esta estandarizada (Ej.: Descripción, Información, historial)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_142','¿Existe un único punto de contacto para el reporte de todos los incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_143','¿Todos los incidentes son reportados al único punto de contacto?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_144','¿Los medios de acceso al único punto de contacto están al alcance de todos los usuarios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_145','¿Todos los incidentes son registrados con su elemento de Configuración?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_146','¿Las inconsistencias de la CMDB son detectadas y reportadas a Configuration Management?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_147','¿Esta identificada claramente la información o campos mínimos requeridos para el registro de un incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_148','¿Está disponible la herramienta de gestión de llamadas por medio Web para que los usuarios finales hagan su propio registro y consultas de incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_149','¿Los usuarios finales conocen y realizan su propio registro de incidentes por medio Web (40% óptimo)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_150','¿Se controla la duplicidad de registro de incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_151','¿El reporte de Incidentes por medio e-mail se realiza a través de un formulario predefinido?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_152','¿Todos los incidentes que no son detectados automáticamente son registrados en la herramienta de gestión a través del Service Desk?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_153','¿Los eventos automáticos registrados que no afectan o degradan el servicio (no son incidentes) son reportados a Operación management para su solución?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_154','¿Los SLA's de los servicios prestados están claramente definidos y entendidos por los diferentes grupos de soporte?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_155','¿Los SLA's están parametrizados correctamente en la herramienta de gestión?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_156','¿Todos los incidentes están relacionados con el Servicio afectado y su nivel de servicio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_157','¿La categoría del registro es seleccionada correctamente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_158','¿El árbol de clasificación de incidentes está definido y parametrizados en la herramienta (según el estándar)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_159','¿El único punto de contacto conoce el estándar de clasificación y lo utiliza correctamente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_160','¿El único punto de contacto define la prioridad del incidente basado en el impacto al negocio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_161','¿Se asignan las prioridades con una matriz de Impacto / Urgencia?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_162','¿Los grupos solucionadores están identificados y registrados en la herramienta de gestión junto con sus alcances?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_163','¿Los alcances de cada grupo solucionador son claros para el único punto de contacto y para el grupo de IM?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_164','¿Están definidos los Checklist para los incidentes frecuentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_165','¿Están definidas las plantillas de documentación para los incidentes frecuentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_166','¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_167','¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_168','¿En la herramienta de gestión se realiza la relación de incidentes con errores conocidos o problemas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_169','¿Existe una Base de datos de FAQs con acceso a todo el personal del proceso de incidentes y Usuarios Autorizados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_170','¿Se notifica al proceso de problemas la existencia de un posible problema (Incidente con Causa Raíz desconocida o Incidente Crítico)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_171','¿Existe una herramienta de control remoto para el único punto de contacto?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_172','¿El grupo de IM soluciona requerimientos de Reset o desbloqueo de password?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_173','¿Se realiza correlación de llamadas de usuario con incidentes de plataforma?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_174','¿Para incidentes críticos la notificación al nivel solucionador se realiza telefónicamente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_175','¿Los incidentes se atienden por orden de prioridad ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_176','¿Se realiza la actualización continua de la historia del incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_177','¿El único punto de contacto mantiene informado al cliente sobre el progreso de la solución (Cambio de Estado, Cambio de grupo solucionador, cambio en tiempo estimado de solución)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_178','¿El estado registrado del incidente refleja la situación actual del mismo?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_179','¿Si es requerido, el único punto de contacto re-evalúa el impacto y prioridad asignada acorde con los SLA's?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_180','¿El único punto de contacto realiza un monitoreo continuo a la solución del incidente y notifica al Incidente Manager incumplimiento en los tiempos de solución según los SLA's?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_181','¿El Inicident Manager vigila el cumplimiento de los tiempos de solución de los incidentes según los SLA's?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_182','¿Los especialistas notifican y registran nuevos problemas encontrados y son asignados al proceso correspondiente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_183','¿El 2 nivel de soporte realiza el escalamiento a 3 nivel de soporte cuando es requerido?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_184','¿Siempre existe una verificación de Incidentes pasados con el mismo Síntoma o relación con un error conocido o problema?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_185','¿Existe una matriz de Escalamiento funcional y jerárquico con sus responsables y tiempos definidos?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_186','¿Está definido el ciclo de vida de un incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_187','¿La documentación de la solución contiene todas las instrucciones ejecutadas para la recuperación del incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_188','¿Los n-niveles solucionadores notifican al único punto de contacto cuando realizan la recuperación del incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_189','¿Se notifica al n-nivel del escalamiento jerárquico alcanzado sobre la solución del incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_190','¿Se realiza una re-clasificación del incidente cuando sea requerido?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_191','¿La fecha registrada de solución está acorde con la fecha de la implementación de la solución?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_192','¿Una solución temporal que restaure el servicio resuelve el incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_193','¿Existen procedimientos para la solución de un incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_194','¿Se categoriza el motivo del cierre (Código de Cierre)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_195','¿Se verifica la correcta documentación del incidente en cuanto a (Categoría, Clasificación, Descripción, Elemento de Configuración, SLA, Prioridad, Solución, Código de Cierre)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_196','¿Se identifican los casos que son FAQs?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_197','¿Se identifican nuevas plantillas para documentación de Incidentes y se solicita su creación?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_198','¿Se notifica al service Desk cuando el incidente queda pendiente de una acción de por parte de él?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_199','¿Los reportes de gestión son divulgados al Cliente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_200','¿El Incidente Manager detecta y escala fallas del proceso?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_201','¿Se notifica al usuario el cierre del incidente ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_202','¿Los cambios en los alcances de los servicios son notificados a los usuario finales?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_203','¿Los analistas de primer nivel realizan el seguimiento a todos los incidentes desde el registro hasta el cierre?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_204','¿El cierre de todos los incidentes es realizado con autorización del Incident Manager?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_205','¿Existe un Dueño de Proceso de Incident Management?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_206','¿Esta identificado el rol Administrador de Incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_207','¿Están identificados los grupos y especialistas solucionadores para todos los servicios soportados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_208','¿Está documentada la Matriz de Escalamiento funcional (por Impacto, con Tiempos escalamiento entre niveles) para el proceso de IM?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_209','¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_210','¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_211','¿Están identificados los Usuarios Autorizados por Servicio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_212','¿Están identificados los usuarios VIP's dentro de la organización del cliente y documentados en la herramienta de gestión?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_213','¿Las responsabilidades de cada rol están definidas y son conocidas por cada persona involucrada?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_214','¿El Administrador de Incidentes está entrenado en el proceso de Administración de Incidentes y los procesos relacionados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_215','¿Los analistas y especialistas están entrenados en el proceso de administración de incidentes y los procesos relacionados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_216','¿Existen métricas de productividad individual para los roles Administrador de Incidentes, Especialistas y Analistas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_217','¿El porcentaje de asignación a la administración de incidentes es evaluado para cada rol?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_218','¿Existe un plan de carrera para cada rol ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_219','¿El personal de administración de incidentes está motivado?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_220','¿Se realizan reuniones quincenales con el grupo de IM y los especialistas para dar retroalimentación de la operación de administración de Incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_221','¿Existen métricas de productividad individual para el rol de Administración de Incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_222','¿Se tienen reuniones periódicas para revisar las métricas que existen actualmente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_223','¿Se analiza la carga laboral para los roles del proceso de Administración de Incidentes regularmente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_224','¿Se tienen estadísticas por número de incidentes identificados mensualmente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_225','¿Se tienen estadísticas por número total de incidentes abiertos?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_226','¿Se tienen estadísticas por número de incidentes cerrados mensualmente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_227','¿Se tienen estadísticas por número de incidentes escalados con su owner?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_228','¿Se tienen estadísticas por número de Requerimientos de Cambios creados por el Administrador de Incidentes para ser evaluados por el Administrador de Cambios?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_229','¿Se tienen estadísticas por porcentaje de incidentes que fueron evitados por cumplimiento de labores proactivas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_230','¿Se trazan metas y objetivos para el proceso de Administración de Incidentes?','eru_rb');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('10','Operación de los servicios IT (Actividades) Cauntitativa','Esta encuesta ITIL evalúa las actividades de la fase de operación para los servicios de tecnologías de información de los servicios','operacion_cuantitativa_actividades.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_139','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_140','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_141','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_142','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_143','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_144','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_145','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_146','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_147','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_148','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_149','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_150','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_151','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_152','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_153','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_154','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_155','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_156','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_157','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_158','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_159','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_160','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_161','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_162','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_163','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_164','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_165','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_166','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_167','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_168','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_169','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_170','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_171','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_172','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_173','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_174','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_175','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_176','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_177','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_178','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_179','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_180','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_181','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_182','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_183','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_184','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_185','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_186','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_187','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_188','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_189','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_190','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_191','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_192','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_193','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_194','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_195','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_196','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_197','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_198','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_199','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_200','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_201','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_202','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_203','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_204','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_205','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_206','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_207','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_208','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_209','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_210','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_211','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_212','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_213','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_214','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_215','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_216','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_217','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_218','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_219','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_220','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_221','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_222','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_223','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_224','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_225','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_226','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_227','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_228','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_229','10');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_230','10');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_231','Detección y Registro','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_1','mmr_rb_231','¿Existe una Base de Datos única para el registro de Incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_1_1','Nada Factible','mmr_rb_231_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_1_2','Poco Factible','mmr_rb_231_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_1_3','Algo Factible','mmr_rb_231_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_1_4','Factible','mmr_rb_231_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_1_5','Bastante Factible','mmr_rb_231_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_1_6','Muy Factible','mmr_rb_231_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_2','mmr_rb_231','¿Existe un identificador único para cada incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_2_1','Nada Factible','mmr_rb_231_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_2_2','Poco Factible','mmr_rb_231_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_2_3','Algo Factible','mmr_rb_231_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_2_4','Factible','mmr_rb_231_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_2_5','Bastante Factible','mmr_rb_231_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_2_6','Muy Factible','mmr_rb_231_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_3','mmr_rb_231','¿La documentación registrada de Incidentes esta estandarizada (Ej.: Descripción, Información, historial)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_3_1','Nada Factible','mmr_rb_231_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_3_2','Poco Factible','mmr_rb_231_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_3_3','Algo Factible','mmr_rb_231_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_3_4','Factible','mmr_rb_231_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_3_5','Bastante Factible','mmr_rb_231_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_3_6','Muy Factible','mmr_rb_231_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_4','mmr_rb_231','¿Existe un único punto de contacto para el reporte de todos los incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_4_1','Nada Factible','mmr_rb_231_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_4_2','Poco Factible','mmr_rb_231_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_4_3','Algo Factible','mmr_rb_231_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_4_4','Factible','mmr_rb_231_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_4_5','Bastante Factible','mmr_rb_231_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_4_6','Muy Factible','mmr_rb_231_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_5','mmr_rb_231','¿Todos los incidentes son reportados al único punto de contacto?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_5_1','Nada Factible','mmr_rb_231_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_5_2','Poco Factible','mmr_rb_231_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_5_3','Algo Factible','mmr_rb_231_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_5_4','Factible','mmr_rb_231_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_5_5','Bastante Factible','mmr_rb_231_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_5_6','Muy Factible','mmr_rb_231_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_6','mmr_rb_231','¿Los medios de acceso al único punto de contacto están al alcance de todos los usuarios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_6_1','Nada Factible','mmr_rb_231_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_6_2','Poco Factible','mmr_rb_231_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_6_3','Algo Factible','mmr_rb_231_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_6_4','Factible','mmr_rb_231_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_6_5','Bastante Factible','mmr_rb_231_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_6_6','Muy Factible','mmr_rb_231_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_7','mmr_rb_231','¿Todos los incidentes son registrados con su elemento de Configuración?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_7_1','Nada Factible','mmr_rb_231_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_7_2','Poco Factible','mmr_rb_231_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_7_3','Algo Factible','mmr_rb_231_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_7_4','Factible','mmr_rb_231_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_7_5','Bastante Factible','mmr_rb_231_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_7_6','Muy Factible','mmr_rb_231_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_8','mmr_rb_231','¿Las inconsistencias de la CMDB son detectadas y reportadas a Configuration Management?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_8_1','Nada Factible','mmr_rb_231_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_8_2','Poco Factible','mmr_rb_231_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_8_3','Algo Factible','mmr_rb_231_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_8_4','Factible','mmr_rb_231_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_8_5','Bastante Factible','mmr_rb_231_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_8_6','Muy Factible','mmr_rb_231_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_9','mmr_rb_231','¿Esta identificada claramente la información o campos mínimos requeridos para el registro de un incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_9_1','Nada Factible','mmr_rb_231_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_9_2','Poco Factible','mmr_rb_231_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_9_3','Algo Factible','mmr_rb_231_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_9_4','Factible','mmr_rb_231_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_9_5','Bastante Factible','mmr_rb_231_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_9_6','Muy Factible','mmr_rb_231_9');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_10','mmr_rb_231','¿Está disponible la herramienta de gestión de llamadas por medio Web para que los usuarios finales hagan su propio registro y consultas de incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_10_1','Nada Factible','mmr_rb_231_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_10_2','Poco Factible','mmr_rb_231_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_10_3','Algo Factible','mmr_rb_231_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_10_4','Factible','mmr_rb_231_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_10_5','Bastante Factible','mmr_rb_231_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_10_6','Muy Factible','mmr_rb_231_10');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_11','mmr_rb_231','¿Los usuarios finales conocen y realizan su propio registro de incidentes por medio Web (40% óptimo)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_11_1','Nada Factible','mmr_rb_231_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_11_2','Poco Factible','mmr_rb_231_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_11_3','Algo Factible','mmr_rb_231_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_11_4','Factible','mmr_rb_231_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_11_5','Bastante Factible','mmr_rb_231_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_11_6','Muy Factible','mmr_rb_231_11');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_12','mmr_rb_231','¿Se controla la duplicidad de registro de incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_12_1','Nada Factible','mmr_rb_231_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_12_2','Poco Factible','mmr_rb_231_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_12_3','Algo Factible','mmr_rb_231_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_12_4','Factible','mmr_rb_231_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_12_5','Bastante Factible','mmr_rb_231_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_12_6','Muy Factible','mmr_rb_231_12');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_13','mmr_rb_231','¿El reporte de Incidentes por medio e-mail se realiza a través de un formulario predefinido?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_13_1','Nada Factible','mmr_rb_231_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_13_2','Poco Factible','mmr_rb_231_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_13_3','Algo Factible','mmr_rb_231_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_13_4','Factible','mmr_rb_231_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_13_5','Bastante Factible','mmr_rb_231_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_13_6','Muy Factible','mmr_rb_231_13');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_14','mmr_rb_231','¿Todos los incidentes que no son detectados automáticamente son registrados en la herramienta de gestión a través del Service Desk?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_14_1','Nada Factible','mmr_rb_231_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_14_2','Poco Factible','mmr_rb_231_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_14_3','Algo Factible','mmr_rb_231_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_14_4','Factible','mmr_rb_231_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_14_5','Bastante Factible','mmr_rb_231_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_14_6','Muy Factible','mmr_rb_231_14');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_231_15','mmr_rb_231','¿Los eventos automáticos registrados que no afectan o degradan el servicio (no son incidentes) son reportados a Operación management para su solución?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_15_1','Nada Factible','mmr_rb_231_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_15_2','Poco Factible','mmr_rb_231_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_15_3','Algo Factible','mmr_rb_231_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_15_4','Factible','mmr_rb_231_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_15_5','Bastante Factible','mmr_rb_231_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_231_15_6','Muy Factible','mmr_rb_231_15');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_232','Clasificación y Soporte Inicial','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_1','mmr_rb_232','Los SLA's de los servicios prestados están claramente definidos y entendidos por los diferentes grupos de soporte');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_1_1','Nada Factible','mmr_rb_232_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_1_2','Poco Factible','mmr_rb_232_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_1_3','Algo Factible','mmr_rb_232_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_1_4','Factible','mmr_rb_232_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_1_5','Bastante Factible','mmr_rb_232_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_1_6','Muy Factible','mmr_rb_232_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_2','mmr_rb_232','Los SLA's están parametrizados correctamente en la herramienta de gestión');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_2_1','Nada Factible','mmr_rb_232_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_2_2','Poco Factible','mmr_rb_232_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_2_3','Algo Factible','mmr_rb_232_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_2_4','Factible','mmr_rb_232_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_2_5','Bastante Factible','mmr_rb_232_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_2_6','Muy Factible','mmr_rb_232_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_3','mmr_rb_232','Todos los incidentes están relacionados con el Servicio afectado y su nivel de servicio');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_3_1','Nada Factible','mmr_rb_232_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_3_2','Poco Factible','mmr_rb_232_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_3_3','Algo Factible','mmr_rb_232_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_3_4','Factible','mmr_rb_232_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_3_5','Bastante Factible','mmr_rb_232_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_3_6','Muy Factible','mmr_rb_232_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_4','mmr_rb_232','La categoría del registro es seleccionada correctamente');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_4_1','Nada Factible','mmr_rb_232_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_4_2','Poco Factible','mmr_rb_232_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_4_3','Algo Factible','mmr_rb_232_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_4_4','Factible','mmr_rb_232_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_4_5','Bastante Factible','mmr_rb_232_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_4_6','Muy Factible','mmr_rb_232_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_5','mmr_rb_232','El árbol de clasificación de incidentes está definido y parametrizados en la herramienta (según el estándar)');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_5_1','Nada Factible','mmr_rb_232_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_5_2','Poco Factible','mmr_rb_232_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_5_3','Algo Factible','mmr_rb_232_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_5_4','Factible','mmr_rb_232_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_5_5','Bastante Factible','mmr_rb_232_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_5_6','Muy Factible','mmr_rb_232_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_6','mmr_rb_232','El único punto de contacto conoce el estándar de clasificación y lo utiliza correctamente');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_6_1','Nada Factible','mmr_rb_232_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_6_2','Poco Factible','mmr_rb_232_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_6_3','Algo Factible','mmr_rb_232_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_6_4','Factible','mmr_rb_232_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_6_5','Bastante Factible','mmr_rb_232_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_6_6','Muy Factible','mmr_rb_232_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_7','mmr_rb_232','¿El único punto de contacto define la prioridad del incidente basado en el impacto al negocio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_7_1','Nada Factible','mmr_rb_232_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_7_2','Poco Factible','mmr_rb_232_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_7_3','Algo Factible','mmr_rb_232_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_7_4','Factible','mmr_rb_232_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_7_5','Bastante Factible','mmr_rb_232_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_7_6','Muy Factible','mmr_rb_232_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_8','mmr_rb_232','¿Se asignan las prioridades con una matriz de Impacto / Urgencia?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_8_1','Nada Factible','mmr_rb_232_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_8_2','Poco Factible','mmr_rb_232_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_8_3','Algo Factible','mmr_rb_232_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_8_4','Factible','mmr_rb_232_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_8_5','Bastante Factible','mmr_rb_232_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_8_6','Muy Factible','mmr_rb_232_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_9','mmr_rb_232','¿Los grupos solucionadores están identificados y registrados en la herramienta de gestión junto con sus alcances?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_9_1','Nada Factible','mmr_rb_232_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_9_2','Poco Factible','mmr_rb_232_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_9_3','Algo Factible','mmr_rb_232_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_9_4','Factible','mmr_rb_232_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_9_5','Bastante Factible','mmr_rb_232_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_9_6','Muy Factible','mmr_rb_232_9');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_10','mmr_rb_232','¿Los alcances de cada grupo solucionador son claros para el único punto de contacto y para el grupo de IM?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_10_1','Nada Factible','mmr_rb_232_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_10_2','Poco Factible','mmr_rb_232_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_10_3','Algo Factible','mmr_rb_232_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_10_4','Factible','mmr_rb_232_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_10_5','Bastante Factible','mmr_rb_232_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_10_6','Muy Factible','mmr_rb_232_10');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_11','mmr_rb_232','¿Están definidos los Checklist para los incidentes frecuentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_11_1','Nada Factible','mmr_rb_232_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_11_2','Poco Factible','mmr_rb_232_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_11_3','Algo Factible','mmr_rb_232_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_11_4','Factible','mmr_rb_232_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_11_5','Bastante Factible','mmr_rb_232_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_11_6','Muy Factible','mmr_rb_232_11');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_12','mmr_rb_232','¿Están definidas las plantillas de documentación para los incidentes frecuentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_12_1','Nada Factible','mmr_rb_232_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_12_2','Poco Factible','mmr_rb_232_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_12_3','Algo Factible','mmr_rb_232_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_12_4','Factible','mmr_rb_232_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_12_5','Bastante Factible','mmr_rb_232_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_12_6','Muy Factible','mmr_rb_232_12');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_13','mmr_rb_232','¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_13_1','Nada Factible','mmr_rb_232_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_13_2','Poco Factible','mmr_rb_232_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_13_3','Algo Factible','mmr_rb_232_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_13_4','Factible','mmr_rb_232_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_13_5','Bastante Factible','mmr_rb_232_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_13_6','Muy Factible','mmr_rb_232_13');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_14','mmr_rb_232','¿En la herramienta de gestión se realiza la relación de incidentes con errores conocidos o problemas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_14_1','Nada Factible','mmr_rb_232_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_14_2','Poco Factible','mmr_rb_232_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_14_3','Algo Factible','mmr_rb_232_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_14_4','Factible','mmr_rb_232_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_14_5','Bastante Factible','mmr_rb_232_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_14_6','Muy Factible','mmr_rb_232_14');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_15','mmr_rb_232','¿Existe una Base de datos de FAQs con acceso a todo el personal del proceso de incidentes y Usuarios Autorizados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_15_1','Nada Factible','mmr_rb_232_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_15_2','Poco Factible','mmr_rb_232_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_15_3','Algo Factible','mmr_rb_232_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_15_4','Factible','mmr_rb_232_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_15_5','Bastante Factible','mmr_rb_232_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_15_6','Muy Factible','mmr_rb_232_15');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_16','mmr_rb_232','¿Se notifica al proceso de problemas la existencia de un posible problema (Incidente con Causa Raíz desconocida o Incidente Crítico)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_16_1','Nada Factible','mmr_rb_232_16');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_16_2','Poco Factible','mmr_rb_232_16');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_16_3','Algo Factible','mmr_rb_232_16');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_16_4','Factible','mmr_rb_232_16');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_16_5','Bastante Factible','mmr_rb_232_16');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_16_6','Muy Factible','mmr_rb_232_16');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_17','mmr_rb_232','¿Existe una herramienta de control remoto para el único punto de contacto?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_17_1','Nada Factible','mmr_rb_232_17');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_17_2','Poco Factible','mmr_rb_232_17');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_17_3','Algo Factible','mmr_rb_232_17');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_17_4','Factible','mmr_rb_232_17');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_17_5','Bastante Factible','mmr_rb_232_17');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_17_6','Muy Factible','mmr_rb_232_17');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_18','mmr_rb_232','¿El grupo de IM soluciona requerimientos de Reset o desbloqueo de password?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_18_1','Nada Factible','mmr_rb_232_18');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_18_2','Poco Factible','mmr_rb_232_18');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_18_3','Algo Factible','mmr_rb_232_18');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_18_4','Factible','mmr_rb_232_18');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_18_5','Bastante Factible','mmr_rb_232_18');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_18_6','Muy Factible','mmr_rb_232_18');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_232_19','mmr_rb_232','¿Se realiza correlación de llamadas de usuario con incidentes de plataforma?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_19_1','Nada Factible','mmr_rb_232_19');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_19_2','Poco Factible','mmr_rb_232_19');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_19_3','Algo Factible','mmr_rb_232_19');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_19_4','Factible','mmr_rb_232_19');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_19_5','Bastante Factible','mmr_rb_232_19');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_232_19_6','Muy Factible','mmr_rb_232_19');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_233','Investigación y Diagnóstico','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_1','mmr_rb_233','¿Para incidentes críticos la notificación al nivel solucionador se realiza telefónicamente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_1_1','Nada Factible','mmr_rb_233_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_1_2','Poco Factible','mmr_rb_233_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_1_3','Algo Factible','mmr_rb_233_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_1_4','Factible','mmr_rb_233_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_1_5','Bastante Factible','mmr_rb_233_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_1_6','Muy Factible','mmr_rb_233_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_2','mmr_rb_233','¿Los incidentes se atienden por orden de prioridad?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_2_1','Nada Factible','mmr_rb_233_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_2_2','Poco Factible','mmr_rb_233_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_2_3','Algo Factible','mmr_rb_233_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_2_4','Factible','mmr_rb_233_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_2_5','Bastante Factible','mmr_rb_233_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_2_6','Muy Factible','mmr_rb_233_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_3','mmr_rb_233','¿Se realiza la actualización continua de la historia del incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_3_1','Nada Factible','mmr_rb_233_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_3_2','Poco Factible','mmr_rb_233_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_3_3','Algo Factible','mmr_rb_233_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_3_4','Factible','mmr_rb_233_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_3_5','Bastante Factible','mmr_rb_233_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_3_6','Muy Factible','mmr_rb_233_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_4','mmr_rb_233','¿El único punto de contacto mantiene informado al cliente sobre el progreso de la solución (Cambio de Estado, Cambio de grupo solucionador, cambio en tiempo estimado de solución)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_4_1','Nada Factible','mmr_rb_233_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_4_2','Poco Factible','mmr_rb_233_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_4_3','Algo Factible','mmr_rb_233_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_4_4','Factible','mmr_rb_233_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_4_5','Bastante Factible','mmr_rb_233_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_4_6','Muy Factible','mmr_rb_233_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_5','mmr_rb_233','¿El estado registrado del incidente refleja la situación actual del mismo?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_5_1','Nada Factible','mmr_rb_233_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_5_2','Poco Factible','mmr_rb_233_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_5_3','Algo Factible','mmr_rb_233_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_5_4','Factible','mmr_rb_233_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_5_5','Bastante Factible','mmr_rb_233_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_5_6','Muy Factible','mmr_rb_233_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_6','mmr_rb_233','¿Si es requerido, el único punto de contacto re-evalúa el impacto y prioridad asignada acorde con los SLA's?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_6_1','Nada Factible','mmr_rb_233_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_6_2','Poco Factible','mmr_rb_233_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_6_3','Algo Factible','mmr_rb_233_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_6_4','Factible','mmr_rb_233_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_6_5','Bastante Factible','mmr_rb_233_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_6_6','Muy Factible','mmr_rb_233_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_7','mmr_rb_233','¿El único punto de contacto realiza un monitoreo continuo a la solución del incidente y notifica al Incidente Manager incumplimiento en los tiempos de solución según los SLA's?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_7_1','Nada Factible','mmr_rb_233_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_7_2','Poco Factible','mmr_rb_233_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_7_3','Algo Factible','mmr_rb_233_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_7_4','Factible','mmr_rb_233_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_7_5','Bastante Factible','mmr_rb_233_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_7_6','Muy Factible','mmr_rb_233_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_8','mmr_rb_233','¿El Inicident Manager vigila el cumplimiento de los tiempos de solución de los incidentes según los SLA's?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_8_1','Nada Factible','mmr_rb_233_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_8_2','Poco Factible','mmr_rb_233_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_8_3','Algo Factible','mmr_rb_233_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_8_4','Factible','mmr_rb_233_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_8_5','Bastante Factible','mmr_rb_233_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_8_6','Muy Factible','mmr_rb_233_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_9','mmr_rb_233','¿Los especialistas notifican y registran nuevos problemas encontrados y son asignados al proceso correspondiente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_9_1','Nada Factible','mmr_rb_233_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_9_2','Poco Factible','mmr_rb_233_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_9_3','Algo Factible','mmr_rb_233_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_9_4','Factible','mmr_rb_233_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_9_5','Bastante Factible','mmr_rb_233_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_9_6','Muy Factible','mmr_rb_233_9');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_10','mmr_rb_233','¿El 2 nivel de soporte realiza el escalamiento a 3 nivel de soporte cuando es requerido?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_10_1','Nada Factible','mmr_rb_233_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_10_2','Poco Factible','mmr_rb_233_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_10_3','Algo Factible','mmr_rb_233_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_10_4','Factible','mmr_rb_233_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_10_5','Bastante Factible','mmr_rb_233_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_10_6','Muy Factible','mmr_rb_233_10');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_11','mmr_rb_233','¿Siempre existe una verificación de Incidentes pasados con el mismo Síntoma o relación con un error conocido o problema?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_11_1','Nada Factible','mmr_rb_233_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_11_2','Poco Factible','mmr_rb_233_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_11_3','Algo Factible','mmr_rb_233_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_11_4','Factible','mmr_rb_233_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_11_5','Bastante Factible','mmr_rb_233_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_11_6','Muy Factible','mmr_rb_233_11');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_12','mmr_rb_233','¿Existe una matriz de Escalamiento funcional y jerárquico con sus responsables y tiempos definidos?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_12_1','Nada Factible','mmr_rb_233_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_12_2','Poco Factible','mmr_rb_233_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_12_3','Algo Factible','mmr_rb_233_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_12_4','Factible','mmr_rb_233_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_12_5','Bastante Factible','mmr_rb_233_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_12_6','Muy Factible','mmr_rb_233_12');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_233_13','mmr_rb_233','¿Está definido el ciclo de vida de un incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_13_1','Nada Factible','mmr_rb_233_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_13_2','Poco Factible','mmr_rb_233_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_13_3','Algo Factible','mmr_rb_233_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_13_4','Factible','mmr_rb_233_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_13_5','Bastante Factible','mmr_rb_233_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_233_13_6','Muy Factible','mmr_rb_233_13');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_234','Resolver el incidente y recuperar el servicio','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_234_1','mmr_rb_234','¿La documentación de la solución contiene todas las instrucciones ejecutadas para la recuperación del incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_1_1','Nada Factible','mmr_rb_234_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_1_2','Poco Factible','mmr_rb_234_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_1_3','Algo Factible','mmr_rb_234_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_1_4','Factible','mmr_rb_234_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_1_5','Bastante Factible','mmr_rb_234_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_1_6','Muy Factible','mmr_rb_234_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_234_2','mmr_rb_234','¿Los n-niveles solucionadores notifican al único punto de contacto cuando realizan la recuperación del incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_2_1','Nada Factible','mmr_rb_234_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_2_2','Poco Factible','mmr_rb_234_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_2_3','Algo Factible','mmr_rb_234_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_2_4','Factible','mmr_rb_234_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_2_5','Bastante Factible','mmr_rb_234_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_2_6','Muy Factible','mmr_rb_234_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_234_3','mmr_rb_234','¿Se notifica al n-nivel del escalamiento jerárquico alcanzado sobre la solución del incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_3_1','Nada Factible','mmr_rb_234_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_3_2','Poco Factible','mmr_rb_234_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_3_3','Algo Factible','mmr_rb_234_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_3_4','Factible','mmr_rb_234_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_3_5','Bastante Factible','mmr_rb_234_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_3_6','Muy Factible','mmr_rb_234_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_234_4','mmr_rb_234','¿Se realiza una re-clasificación del incidente cuando sea requerido?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_4_1','Nada Factible','mmr_rb_234_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_4_2','Poco Factible','mmr_rb_234_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_4_3','Algo Factible','mmr_rb_234_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_4_4','Factible','mmr_rb_234_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_4_5','Bastante Factible','mmr_rb_234_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_4_6','Muy Factible','mmr_rb_234_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_234_5','mmr_rb_234','¿La fecha registrada de solución está acorde con la fecha de la implementación de la solución?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_5_1','Nada Factible','mmr_rb_234_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_5_2','Poco Factible','mmr_rb_234_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_5_3','Algo Factible','mmr_rb_234_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_5_4','Factible','mmr_rb_234_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_5_5','Bastante Factible','mmr_rb_234_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_5_6','Muy Factible','mmr_rb_234_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_234_6','mmr_rb_234','¿Una solución temporal que restaure el servicio resuelve el incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_6_1','Nada Factible','mmr_rb_234_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_6_2','Poco Factible','mmr_rb_234_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_6_3','Algo Factible','mmr_rb_234_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_6_4','Factible','mmr_rb_234_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_6_5','Bastante Factible','mmr_rb_234_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_6_6','Muy Factible','mmr_rb_234_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_234_7','mmr_rb_234','¿Existen procedimientos para la solución de un incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_7_1','Nada Factible','mmr_rb_234_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_7_2','Poco Factible','mmr_rb_234_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_7_3','Algo Factible','mmr_rb_234_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_7_4','Factible','mmr_rb_234_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_7_5','Bastante Factible','mmr_rb_234_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_234_7_6','Muy Factible','mmr_rb_234_7');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_235','Confirmación y Cierre','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_235_1','mmr_rb_235','¿Se categoriza el motivo del cierre (Código de Cierre)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_1_1','Nada Factible','mmr_rb_235_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_1_2','Poco Factible','mmr_rb_235_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_1_3','Algo Factible','mmr_rb_235_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_1_4','Factible','mmr_rb_235_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_1_5','Bastante Factible','mmr_rb_235_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_1_6','Muy Factible','mmr_rb_235_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_235_2','mmr_rb_235','¿Se verifica la correcta documentación del incidente en cuanto a (Categoría, Clasificación, Descripción, Elemento de Configuración, SLA, Prioridad, Solución, Código de Cierre)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_2_1','Nada Factible','mmr_rb_235_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_2_2','Poco Factible','mmr_rb_235_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_2_3','Algo Factible','mmr_rb_235_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_2_4','Factible','mmr_rb_235_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_2_5','Bastante Factible','mmr_rb_235_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_2_6','Muy Factible','mmr_rb_235_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_235_3','mmr_rb_235','¿Se identifican los casos que son FAQs?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_3_1','Nada Factible','mmr_rb_235_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_3_2','Poco Factible','mmr_rb_235_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_3_3','Algo Factible','mmr_rb_235_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_3_4','Factible','mmr_rb_235_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_3_5','Bastante Factible','mmr_rb_235_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_3_6','Muy Factible','mmr_rb_235_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_235_4','mmr_rb_235','¿Se identifican nuevas plantillas para documentación de Incidentes y se solicita su creación?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_4_1','Nada Factible','mmr_rb_235_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_4_2','Poco Factible','mmr_rb_235_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_4_3','Algo Factible','mmr_rb_235_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_4_4','Factible','mmr_rb_235_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_4_5','Bastante Factible','mmr_rb_235_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_235_4_6','Muy Factible','mmr_rb_235_4');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_236','Apropiamiento, Seguimiento y Comunicación','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_236_1','mmr_rb_236','¿Se notifica al service Desk cuando el incidente queda pendiente de una acción de por parte de él?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_1_1','Nada Factible','mmr_rb_236_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_1_2','Poco Factible','mmr_rb_236_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_1_3','Algo Factible','mmr_rb_236_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_1_4','Factible','mmr_rb_236_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_1_5','Bastante Factible','mmr_rb_236_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_1_6','Muy Factible','mmr_rb_236_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_236_2','mmr_rb_236','¿Los reportes de gestión son divulgados al Cliente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_2_1','Nada Factible','mmr_rb_236_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_2_2','Poco Factible','mmr_rb_236_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_2_3','Algo Factible','mmr_rb_236_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_2_4','Factible','mmr_rb_236_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_2_5','Bastante Factible','mmr_rb_236_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_2_6','Muy Factible','mmr_rb_236_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_236_3','mmr_rb_236','¿El Incidente Manager detecta y escala fallas del proceso?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_3_1','Nada Factible','mmr_rb_236_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_3_2','Poco Factible','mmr_rb_236_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_3_3','Algo Factible','mmr_rb_236_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_3_4','Factible','mmr_rb_236_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_3_5','Bastante Factible','mmr_rb_236_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_3_6','Muy Factible','mmr_rb_236_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_236_4','mmr_rb_236','¿Se notifica al usuario el cierre del incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_4_1','Nada Factible','mmr_rb_236_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_4_2','Poco Factible','mmr_rb_236_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_4_3','Algo Factible','mmr_rb_236_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_4_4','Factible','mmr_rb_236_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_4_5','Bastante Factible','mmr_rb_236_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_4_6','Muy Factible','mmr_rb_236_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_236_5','mmr_rb_236','¿Los cambios en los alcances de los servicios son notificados a los usuario finales?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_5_1','Nada Factible','mmr_rb_236_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_5_2','Poco Factible','mmr_rb_236_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_5_3','Algo Factible','mmr_rb_236_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_5_4','Factible','mmr_rb_236_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_5_5','Bastante Factible','mmr_rb_236_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_5_6','Muy Factible','mmr_rb_236_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_236_6','mmr_rb_236','¿Los analistas de primer nivel realizan el seguimiento a todos los incidentes desde el registro hasta el cierre?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_6_1','Nada Factible','mmr_rb_236_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_6_2','Poco Factible','mmr_rb_236_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_6_3','Algo Factible','mmr_rb_236_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_6_4','Factible','mmr_rb_236_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_6_5','Bastante Factible','mmr_rb_236_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_6_6','Muy Factible','mmr_rb_236_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_236_7','mmr_rb_236','¿El cierre de todos los incidentes es realizado con autorización del Incident Manager?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_7_1','Nada Factible','mmr_rb_236_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_7_2','Poco Factible','mmr_rb_236_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_7_3','Algo Factible','mmr_rb_236_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_7_4','Factible','mmr_rb_236_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_7_5','Bastante Factible','mmr_rb_236_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_236_7_6','Muy Factible','mmr_rb_236_7');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_237','Organización','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_1','mmr_rb_237','¿Existe un Dueño de Proceso de Incident Management?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_1_1','Nada Factible','mmr_rb_237_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_1_2','Poco Factible','mmr_rb_237_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_1_3','Algo Factible','mmr_rb_237_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_1_4','Factible','mmr_rb_237_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_1_5','Bastante Factible','mmr_rb_237_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_1_6','Muy Factible','mmr_rb_237_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_2','mmr_rb_237','¿Esta identificado el rol Administrador de Incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_2_1','Nada Factible','mmr_rb_237_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_2_2','Poco Factible','mmr_rb_237_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_2_3','Algo Factible','mmr_rb_237_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_2_4','Factible','mmr_rb_237_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_2_5','Bastante Factible','mmr_rb_237_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_2_6','Muy Factible','mmr_rb_237_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_3','mmr_rb_237','¿Están identificados los grupos y especialistas solucionadores para todos los servicios soportados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_3_1','Nada Factible','mmr_rb_237_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_3_2','Poco Factible','mmr_rb_237_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_3_3','Algo Factible','mmr_rb_237_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_3_4','Factible','mmr_rb_237_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_3_5','Bastante Factible','mmr_rb_237_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_3_6','Muy Factible','mmr_rb_237_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_4','mmr_rb_237','¿Está documentada la Matriz de Escalamiento funcional (por Impacto, con Tiempos escalamiento entre niveles) para el proceso de IM?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_4_1','Nada Factible','mmr_rb_237_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_4_2','Poco Factible','mmr_rb_237_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_4_3','Algo Factible','mmr_rb_237_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_4_4','Factible','mmr_rb_237_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_4_5','Bastante Factible','mmr_rb_237_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_4_6','Muy Factible','mmr_rb_237_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_5','mmr_rb_237','¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_5_1','Nada Factible','mmr_rb_237_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_5_2','Poco Factible','mmr_rb_237_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_5_3','Algo Factible','mmr_rb_237_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_5_4','Factible','mmr_rb_237_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_5_5','Bastante Factible','mmr_rb_237_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_5_6','Muy Factible','mmr_rb_237_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_6','mmr_rb_237','¿Están identificados los Usuarios Autorizados por Servicio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_6_1','Nada Factible','mmr_rb_237_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_6_2','Poco Factible','mmr_rb_237_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_6_3','Algo Factible','mmr_rb_237_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_6_4','Factible','mmr_rb_237_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_6_5','Bastante Factible','mmr_rb_237_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_6_6','Muy Factible','mmr_rb_237_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_7','mmr_rb_237','¿Están identificados los usuarios VIP's dentro de la organización del cliente y documentados en la herramienta de gestión?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_7_1','Nada Factible','mmr_rb_237_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_7_2','Poco Factible','mmr_rb_237_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_7_3','Algo Factible','mmr_rb_237_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_7_4','Factible','mmr_rb_237_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_7_5','Bastante Factible','mmr_rb_237_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_7_6','Muy Factible','mmr_rb_237_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_8','mmr_rb_237','¿Las responsabilidades de cada rol están definidas y son conocidas por cada persona involucrada?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_8_1','Nada Factible','mmr_rb_237_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_8_2','Poco Factible','mmr_rb_237_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_8_3','Algo Factible','mmr_rb_237_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_8_4','Factible','mmr_rb_237_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_8_5','Bastante Factible','mmr_rb_237_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_8_6','Muy Factible','mmr_rb_237_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_9','mmr_rb_237','¿El Administrador de Incidentes está entrenado en el proceso de Administración de Incidentes y los procesos relacionados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_9_1','Nada Factible','mmr_rb_237_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_9_2','Poco Factible','mmr_rb_237_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_9_3','Algo Factible','mmr_rb_237_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_9_4','Factible','mmr_rb_237_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_9_5','Bastante Factible','mmr_rb_237_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_9_6','Muy Factible','mmr_rb_237_9');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_10','mmr_rb_237','¿Los analistas y especialistas están entrenados en el proceso de administración de incidentes y los procesos relacionados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_10_1','Nada Factible','mmr_rb_237_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_10_2','Poco Factible','mmr_rb_237_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_10_3','Algo Factible','mmr_rb_237_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_10_4','Factible','mmr_rb_237_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_10_5','Bastante Factible','mmr_rb_237_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_10_6','Muy Factible','mmr_rb_237_10');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_11','mmr_rb_237','¿Existen métricas de productividad individual para los roles Administrador de Incidentes, Especialistas y Analistas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_11_1','Nada Factible','mmr_rb_237_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_11_2','Poco Factible','mmr_rb_237_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_11_3','Algo Factible','mmr_rb_237_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_11_4','Factible','mmr_rb_237_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_11_5','Bastante Factible','mmr_rb_237_11');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_11_6','Muy Factible','mmr_rb_237_11');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_12','mmr_rb_237','¿El porcentaje de asignación a la administración de incidentes es evaluado para cada rol?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_12_1','Nada Factible','mmr_rb_237_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_12_2','Poco Factible','mmr_rb_237_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_12_3','Algo Factible','mmr_rb_237_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_12_4','Factible','mmr_rb_237_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_12_5','Bastante Factible','mmr_rb_237_12');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_12_6','Muy Factible','mmr_rb_237_12');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_13','mmr_rb_237','¿Existe un plan de carrera para cada rol?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_13_1','Nada Factible','mmr_rb_237_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_13_2','Poco Factible','mmr_rb_237_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_13_3','Algo Factible','mmr_rb_237_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_13_4','Factible','mmr_rb_237_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_13_5','Bastante Factible','mmr_rb_237_13');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_13_6','Muy Factible','mmr_rb_237_13');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_14','mmr_rb_237','¿El personal de administración de incidentes está motivado?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_14_1','Nada Factible','mmr_rb_237_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_14_2','Poco Factible','mmr_rb_237_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_14_3','Algo Factible','mmr_rb_237_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_14_4','Factible','mmr_rb_237_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_14_5','Bastante Factible','mmr_rb_237_14');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_14_6','Muy Factible','mmr_rb_237_14');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_237_15','mmr_rb_237','¿Se realizan reuniones quincenales con el grupo de IM y los especialistas para dar retroalimentación de la operación de administración de Incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_15_1','Nada Factible','mmr_rb_237_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_15_2','Poco Factible','mmr_rb_237_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_15_3','Algo Factible','mmr_rb_237_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_15_4','Factible','mmr_rb_237_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_15_5','Bastante Factible','mmr_rb_237_15');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_237_15_6','Muy Factible','mmr_rb_237_15');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_238','Métricas y Reportes','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_1','mmr_rb_238','¿Existen métricas de productividad individual para el rol de Administración de Incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_1_1','Nada Factible','mmr_rb_238_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_1_2','Poco Factible','mmr_rb_238_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_1_3','Algo Factible','mmr_rb_238_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_1_4','Factible','mmr_rb_238_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_1_5','Bastante Factible','mmr_rb_238_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_1_6','Muy Factible','mmr_rb_238_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_2','mmr_rb_238','¿Se tienen reuniones periódicas para revisar las métricas que existen actualmente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_2_1','Nada Factible','mmr_rb_238_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_2_2','Poco Factible','mmr_rb_238_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_2_3','Algo Factible','mmr_rb_238_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_2_4','Factible','mmr_rb_238_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_2_5','Bastante Factible','mmr_rb_238_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_2_6','Muy Factible','mmr_rb_238_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_3','mmr_rb_238','¿Se analiza la carga laboral para los roles del proceso de Administración de Incidentes regularmente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_3_1','Nada Factible','mmr_rb_238_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_3_2','Poco Factible','mmr_rb_238_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_3_3','Algo Factible','mmr_rb_238_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_3_4','Factible','mmr_rb_238_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_3_5','Bastante Factible','mmr_rb_238_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_3_6','Muy Factible','mmr_rb_238_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_4','mmr_rb_238','¿Se tienen estadísticas por número de incidentes identificados mensualmente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_4_1','Nada Factible','mmr_rb_238_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_4_2','Poco Factible','mmr_rb_238_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_4_3','Algo Factible','mmr_rb_238_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_4_4','Factible','mmr_rb_238_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_4_5','Bastante Factible','mmr_rb_238_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_4_6','Muy Factible','mmr_rb_238_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_5','mmr_rb_238','¿Se tienen estadísticas por número total de incidentes abiertos?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_5_1','Nada Factible','mmr_rb_238_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_5_2','Poco Factible','mmr_rb_238_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_5_3','Algo Factible','mmr_rb_238_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_5_4','Factible','mmr_rb_238_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_5_5','Bastante Factible','mmr_rb_238_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_5_6','Muy Factible','mmr_rb_238_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_6','mmr_rb_238','¿Se tienen estadísticas por número de incidentes cerrados mensualmente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_6_1','Nada Factible','mmr_rb_238_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_6_2','Poco Factible','mmr_rb_238_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_6_3','Algo Factible','mmr_rb_238_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_6_4','Factible','mmr_rb_238_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_6_5','Bastante Factible','mmr_rb_238_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_6_6','Muy Factible','mmr_rb_238_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_7','mmr_rb_238','¿Se tienen estadísticas por número de incidentes escalados con su owner?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_7_1','Nada Factible','mmr_rb_238_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_7_2','Poco Factible','mmr_rb_238_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_7_3','Algo Factible','mmr_rb_238_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_7_4','Factible','mmr_rb_238_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_7_5','Bastante Factible','mmr_rb_238_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_7_6','Muy Factible','mmr_rb_238_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_8','mmr_rb_238','¿Se tienen estadísticas por número de Requerimientos de Cambios creados por el Administrador de Incidentes para ser evaluados por el Administrador de Cambios?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_8_1','Nada Factible','mmr_rb_238_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_8_2','Poco Factible','mmr_rb_238_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_8_3','Algo Factible','mmr_rb_238_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_8_4','Factible','mmr_rb_238_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_8_5','Bastante Factible','mmr_rb_238_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_8_6','Muy Factible','mmr_rb_238_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_9','mmr_rb_238','¿Se tienen estadísticas por porcentaje de incidentes que fueron evitados por cumplimiento de labores proactivas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_9_1','Nada Factible','mmr_rb_238_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_9_2','Poco Factible','mmr_rb_238_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_9_3','Algo Factible','mmr_rb_238_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_9_4','Factible','mmr_rb_238_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_9_5','Bastante Factible','mmr_rb_238_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_9_6','Muy Factible','mmr_rb_238_9');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_238_10','mmr_rb_238','¿Se trazan metas y objetivos para el proceso de Administración de Incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_10_1','Nada Factible','mmr_rb_238_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_10_2','Poco Factible','mmr_rb_238_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_10_3','Algo Factible','mmr_rb_238_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_10_4','Factible','mmr_rb_238_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_10_5','Bastante Factible','mmr_rb_238_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_238_10_6','Muy Factible','mmr_rb_238_10');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('11','Operación de los servicios IT (Actividades) Cauntitativa version 2','Esta encuesta ITIL evalúa las actividades de la fase de operación para los servicios de tecnologías de información de los servicios','operacion_cuantitativa_actividades_v2.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_231','11');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_232','11');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_233','11');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_234','11');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_235','11');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_236','11');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_237','11');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_238','11');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_239','¿Existe una Base de Datos única para el registro de Incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_240','¿Existe un identificador único para cada incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_241','¿La documentación registrada de Incidentes esta estandarizada (Ej.: Descripción, Información, historial)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_242','¿Existe un único punto de contacto para el reporte de todos los incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_243','¿Todos los incidentes son reportados al único punto de contacto?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_244','¿Los medios de acceso al único punto de contacto están al alcance de todos los usuarios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_245','¿Todos los incidentes son registrados con su elemento de Configuración?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_246','¿Las inconsistencias de la CMDB son detectadas y reportadas a Configuration Management?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_247','¿Esta identificada claramente la información o campos mínimos requeridos para el registro de un incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_248','¿Está disponible la herramienta de gestión de llamadas por medio Web para que los usuarios finales hagan su propio registro y consultas de incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_249','¿Los usuarios finales conocen y realizan su propio registro de incidentes por medio Web (40% óptimo)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_250','¿Se controla la duplicidad de registro de incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_251','¿El reporte de Incidentes por medio e-mail se realiza a través de un formulario predefinido?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_252','¿Todos los incidentes que no son detectados automáticamente son registrados en la herramienta de gestión a través del Service Desk?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_253','¿Los eventos automáticos registrados que no afectan o degradan el servicio (no son incidentes) son reportados a Operación management para su solución?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_254','¿Los SLA's de los servicios prestados están claramente definidos y entendidos por los diferentes grupos de soporte?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_255','¿Los SLA's están parametrizados correctamente en la herramienta de gestión?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_256','¿Todos los incidentes están relacionados con el Servicio afectado y su nivel de servicio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_257','¿La categoría del registro es seleccionada correctamente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_258','¿El árbol de clasificación de incidentes está definido y parametrizados en la herramienta (según el estándar)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_259','¿El único punto de contacto conoce el estándar de clasificación y lo utiliza correctamente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_260','¿El único punto de contacto define la prioridad del incidente basado en el impacto al negocio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_261','¿Se asignan las prioridades con una matriz de Impacto / Urgencia?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_262','¿Los grupos solucionadores están identificados y registrados en la herramienta de gestión junto con sus alcances?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_263','¿Los alcances de cada grupo solucionador son claros para el único punto de contacto y para el grupo de IM?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_264','¿Están definidos los Checklist para los incidentes frecuentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_265','¿Están definidas las plantillas de documentación para los incidentes frecuentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_266','¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_267','¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_268','¿En la herramienta de gestión se realiza la relación de incidentes con errores conocidos o problemas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_269','¿Existe una Base de datos de FAQs con acceso a todo el personal del proceso de incidentes y Usuarios Autorizados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_270','¿Se notifica al proceso de problemas la existencia de un posible problema (Incidente con Causa Raíz desconocida o Incidente Crítico)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_271','¿Existe una herramienta de control remoto para el único punto de contacto?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_272','¿El grupo de IM soluciona requerimientos de Reset o desbloqueo de password?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_273','¿Se realiza correlación de llamadas de usuario con incidentes de plataforma?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_274','¿Para incidentes críticos la notificación al nivel solucionador se realiza telefónicamente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_275','¿Los incidentes se atienden por orden de prioridad ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_276','¿Se realiza la actualización continua de la historia del incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_277','¿El único punto de contacto mantiene informado al cliente sobre el progreso de la solución (Cambio de Estado, Cambio de grupo solucionador, cambio en tiempo estimado de solución)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_278','¿El estado registrado del incidente refleja la situación actual del mismo?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_279','¿Si es requerido, el único punto de contacto re-evalúa el impacto y prioridad asignada acorde con los SLA's?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_280','¿El único punto de contacto realiza un monitoreo continuo a la solución del incidente y notifica al Incidente Manager incumplimiento en los tiempos de solución según los SLA's?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_281','¿El Inicident Manager vigila el cumplimiento de los tiempos de solución de los incidentes según los SLA's?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_282','¿Los especialistas notifican y registran nuevos problemas encontrados y son asignados al proceso correspondiente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_283','¿El 2 nivel de soporte realiza el escalamiento a 3 nivel de soporte cuando es requerido?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_284','¿Siempre existe una verificación de Incidentes pasados con el mismo Síntoma o relación con un error conocido o problema?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_285','¿Existe una matriz de Escalamiento funcional y jerárquico con sus responsables y tiempos definidos?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_286','¿Está definido el ciclo de vida de un incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_287','¿La documentación de la solución contiene todas las instrucciones ejecutadas para la recuperación del incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_288','¿Los n-niveles solucionadores notifican al único punto de contacto cuando realizan la recuperación del incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_289','¿Se notifica al n-nivel del escalamiento jerárquico alcanzado sobre la solución del incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_290','¿Se realiza una re-clasificación del incidente cuando sea requerido?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_291','¿La fecha registrada de solución está acorde con la fecha de la implementación de la solución?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_292','¿Una solución temporal que restaure el servicio resuelve el incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_293','¿Existen procedimientos para la solución de un incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_294','¿Se categoriza el motivo del cierre (Código de Cierre)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_295','¿Se verifica la correcta documentación del incidente en cuanto a (Categoría, Clasificación, Descripción, Elemento de Configuración, SLA, Prioridad, Solución, Código de Cierre)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_296','¿Se identifican los casos que son FAQs?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_297','¿Se identifican nuevas plantillas para documentación de Incidentes y se solicita su creación?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_298','¿Se notifica al service Desk cuando el incidente queda pendiente de una acción de por parte de él?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_299','¿Los reportes de gestión son divulgados al Cliente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_300','¿El Incidente Manager detecta y escala fallas del proceso?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_301','¿Se notifica al usuario el cierre del incidente ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_302','¿Los cambios en los alcances de los servicios son notificados a los usuario finales?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_303','¿Los analistas de primer nivel realizan el seguimiento a todos los incidentes desde el registro hasta el cierre?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_304','¿El cierre de todos los incidentes es realizado con autorización del Incident Manager?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_305','¿Existe un Dueño de Proceso de Incident Management?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_306','¿Esta identificado el rol Administrador de Incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_307','¿Están identificados los grupos y especialistas solucionadores para todos los servicios soportados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_308','¿Está documentada la Matriz de Escalamiento funcional (por Impacto, con Tiempos escalamiento entre niveles) para el proceso de IM?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_309','¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_310','¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_311','¿Están identificados los Usuarios Autorizados por Servicio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_312','¿Están identificados los usuarios VIP's dentro de la organización del cliente y documentados en la herramienta de gestión?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_313','¿Las responsabilidades de cada rol están definidas y son conocidas por cada persona involucrada?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_314','¿El Administrador de Incidentes está entrenado en el proceso de Administración de Incidentes y los procesos relacionados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_315','¿Los analistas y especialistas están entrenados en el proceso de administración de incidentes y los procesos relacionados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_316','¿Existen métricas de productividad individual para los roles Administrador de Incidentes, Especialistas y Analistas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_317','¿El porcentaje de asignación a la administración de incidentes es evaluado para cada rol?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_318','¿Existe un plan de carrera para cada rol ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_319','¿El personal de administración de incidentes está motivado?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_320','¿Se realizan reuniones quincenales con el grupo de IM y los especialistas para dar retroalimentación de la operación de administración de Incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_321','¿Existen métricas de productividad individual para el rol de Administración de Incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_322','¿Se tienen reuniones periódicas para revisar las métricas que existen actualmente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_323','¿Se analiza la carga laboral para los roles del proceso de Administración de Incidentes regularmente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_324','¿Se tienen estadísticas por número de incidentes identificados mensualmente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_325','¿Se tienen estadísticas por número total de incidentes abiertos?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_326','¿Se tienen estadísticas por número de incidentes cerrados mensualmente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_327','¿Se tienen estadísticas por número de incidentes escalados con su owner?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_328','¿Se tienen estadísticas por número de Requerimientos de Cambios creados por el Administrador de Incidentes para ser evaluados por el Administrador de Cambios?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_329','¿Se tienen estadísticas por porcentaje de incidentes que fueron evitados por cumplimiento de labores proactivas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_330','¿Se trazan metas y objetivos para el proceso de Administración de Incidentes?','psc_ta');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('12','Operación de los servicios IT (Actividades) Cualitativa','Esta encuesta ITIL evalúa las actividades de la fase de operación para los servicios de tecnologías de información de los servicios','operacion_cualitativa_actividades.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_239','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_240','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_241','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_242','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_243','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_244','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_245','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_246','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_247','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_248','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_249','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_250','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_251','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_252','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_253','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_254','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_255','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_256','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_257','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_258','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_259','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_260','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_261','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_262','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_263','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_264','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_265','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_266','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_267','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_268','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_269','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_270','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_271','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_272','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_273','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_274','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_275','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_276','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_277','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_278','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_279','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_280','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_281','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_282','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_283','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_284','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_285','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_286','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_287','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_288','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_289','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_290','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_291','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_292','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_293','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_294','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_295','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_296','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_297','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_298','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_299','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_300','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_301','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_302','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_303','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_304','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_305','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_306','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_307','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_308','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_309','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_310','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_311','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_312','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_313','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_314','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_315','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_316','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_317','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_318','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_319','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_320','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_321','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_322','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_323','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_324','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_325','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_326','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_327','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_328','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_329','12');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_330','12');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_331','¿El proceso de service Desk reporta todos los incidentes de forma manual o automática?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_332','¿El service Desk suministra todos los detalles básicos de los incidentes reportados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_333','¿Asigna el impacto y la prioridad inicial a los incidentes que son escalados al grupo de Incident Management?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_334','¿El service Desk realiza una investigación inicial del incidente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_335','¿El service Desk monitorea y escala los incidentes al grupo de Incident Management?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_336','¿El grupo de service Desk cierra y actualiza el registro de los incidentes solucionados por el grupo de Incident Management?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_337','¿El service Desk mantiene informado al cliente acerca de los escalamientos que realiza al proceso de Incident Management?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_338','¿El service Desk realiza un soporte de primer nivel de los incidentes reportados?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_339','¿Existe un proceso formal de RFC para la solución de un Incidente (Cambio Urgente) cuando es requerido?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_340','¿El grupo de IM asigna al proceso de Cambios los requerimientos de Cambio (RFC) solicitados por el usuario para su gestión?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_341','¿El proceso de cambios Notifica al proceso de Administración de Incidentes la programación y ejecución de los cambios solicitados sean urgentes o estándar?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_342','¿Los incidentes causados por cambios implementados son relacionados con el registro de Cambio?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_343','¿En el comité de evaluación de cambios críticos se encuentra el Administrador de Incidentes involucrado?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_344','¿Los registros de cambio creados a partir de una llamada de servicio son relacionados con el registro de llamada correspondiente?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_345','¿Todos los elementos de configuración se encuentran en la base de datos de configuración (CMDB)?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_346','¿Todos los incidentes están relacionados con su correspondiente elemento de configuración?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_347','¿Las inconsistencias encontradas en la CMDB por proceso de Administración de Incidentes son reportadas a la administración de Configuración?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_348','¿La base de datos de personas se encuentra actualizada?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_349','¿Las personas registradas en la CMDB están relacionadas con sus elementos de configuración?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_350','¿Todo nuevo error conocido es reportado al proceso de Administración de Incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_351','¿Existe una base de datos de Errores conocidos y Problemas - KEDB?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_352','¿Todos los errores conocidos contienen una Solución temporal registrada con acceso al proceso de IM?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_353','¿El proceso de Administración de incidentes genera reportes de tendencias para el análisis de problemas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_354','¿Los incidentes críticos son escalados a la Administración de Problemas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_355','¿Los incidentes con causa raíz desconocida son escalados a la Administración de Problemas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_356','¿Las soluciones temporales son suministradas siempre por la Administración de Problemas?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_357','¿Los registros de incidentes se relacionan con los registros de problemas si el incidente corresponde a un Error Conocido o Problema en la infraestructura soportada?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_358','¿Se cuenta con un sistema de gestión del servicio de conocimiento o base de datos de conocimiento para incidentes y soluciones conocidos?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_359','¿La base de datos de conocimiento se mantiene actualizada con los incidentes que se presentan?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_360','¿El grupo de Incident Management escala al grupo de Release todos los reportes y logs de error de los usuarios finales por la implementación de un nuevo release?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_361','¿El grupo de Incident Management chequea que las implementaciones realizadas por Release sean exitosas ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_362','¿El proceso de availability Management vela por revisar y avisar acerca de pobres diagnósticos en una incidencia, herramientas, scripts, procedimientos que nos son claros para subir un servicio o procedimientos de escalamiento que no son claros?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_363','¿El proceso de Incident Management entrega información al proceso de Availability acerca de la disponibilidad de los niveles de servicio pactados en los SLA's ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_364','¿Los tiempos muertos de indisponibilidad de un servicio son tratados en conjunto con el proceso de Availability para que este sea menor e impacte menos al usuario?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_365','¿El proceso de Incident Management proporciona un índice de desempeño al proceso de Capacity, monitoreando los incidentes cuando estos aparecen?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_366','¿El proceso de Capacity proporciona información relacionada con las herramientas de diagnóstico como modelos y scripts de la simulación para solucionar incidentes?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_367','¿El proceso de Incident Management asegura que los incidentes son solucionados dentro de los niveles de capacidad mencionados en los SLA's?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_368','¿El proceso de Incident Management proporciona al proceso de capacidad información acerca de la relación de capacidad de incidentes. Por ejemplo: listados no disponibles debido a la escasez de impresoras, o información no almacenada en discos ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_369','¿El grupo de Continuity Management entrega planes de continuidad del negocio (BCP) al proceso de Incident Management?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_370','¿El proceso de Incident Management se acoge a los lineamientos que tiene el BCP?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_371','¿La cantidad de tiempo, esfuerzo y el dinero que se gasta en resolver un incidente proporcionando a su vez Workarounds es registrado en la herramienta en donde se encuentran registrados estos?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_372','¿El proceso de IM proporciona reportes que permiten al grupo de niveles de servicio revisar objetivamente y regularmente los SLA's pactados ?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_373','¿El proceso de IM retroalimenta al proceso de Service Level Management acerca de inconsistencias, incumplimientos o acuerdos no alcanzables de los SLA's, OLA's y UCs?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_374','¿El proceso de seguridad especifica mediante un documento al proceso de Incident Management las medidas para prevenir incidentes de seguridad?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_375','¿El proceso de Security trabaja en conjunto con el proceso de Incident Management para resolver incidentes de Seguridad?','eru_rb');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('eru_rb_376','¿El proceso de Incident management conoce las políticas del manejo de incidentes de seguridad?','eru_rb');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('13','Operación de los servicios IT (Relación entre procesos) Cauntitativa','Esta encuesta ITIL evalúa las actividades de la fase de operación para los servicios de tecnologías de información de los servicios','operacion_cuantitativa_procesos.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_331','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_332','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_333','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_334','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_335','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_336','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_337','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_338','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_339','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_340','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_341','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_342','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_343','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_344','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_345','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_346','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_347','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_348','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_349','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_350','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_351','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_352','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_353','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_354','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_355','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_356','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_357','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_358','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_359','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_360','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_361','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_362','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_363','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_364','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_365','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_366','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_367','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_368','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_369','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_370','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_371','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_372','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_373','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_374','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_375','13');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('eru_rb_376','13');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_377','¿El proceso de service Desk reporta todos los incidentes de forma manual o automática?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_378','¿El service Desk suministra todos los detalles básicos de los incidentes reportados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_379','¿Asigna el impacto y la prioridad inicial a los incidentes que son escalados al grupo de Incident Management?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_380','¿El service Desk realiza una investigación inicial del incidente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_380','¿El service Desk monitorea y escala los incidentes al grupo de Incident Management?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_381','¿El grupo de service Desk cierra y actualiza el registro de los incidentes solucionados por el grupo de Incident Management?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_382','¿El service Desk mantiene informado al cliente acerca de los escalamientos que realiza al proceso de Incident Management?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_383','¿El service Desk realiza un soporte de primer nivel de los incidentes reportados?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_384','¿Existe un proceso formal de RFC para la solución de un Incidente (Cambio Urgente) cuando es requerido?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_385','¿El grupo de IM asigna al proceso de Cambios los requerimientos de Cambio (RFC) solicitados por el usuario para su gestión?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_386','¿El proceso de cambios Notifica al proceso de Administración de Incidentes la programación y ejecución de los cambios solicitados sean urgentes o estándar?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_387','¿Los incidentes causados por cambios implementados son relacionados con el registro de Cambio?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_388','¿En el comité de evaluación de cambios críticos se encuentra el Administrador de Incidentes involucrado?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_389','¿Los registros de cambio creados a partir de una llamada de servicio son relacionados con el registro de llamada correspondiente?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_390','¿Todos los elementos de configuración se encuentran en la base de datos de configuración (CMDB)?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_391','¿Todos los incidentes están relacionados con su correspondiente elemento de configuración?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_392','¿Las inconsistencias encontradas en la CMDB por proceso de Administración de Incidentes son reportadas a la administración de Configuración?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_393','¿La base de datos de personas se encuentra actualizada?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_394','¿Las personas registradas en la CMDB están relacionadas con sus elementos de configuración?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_395','¿Todo nuevo error conocido es reportado al proceso de Administración de Incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_396','¿Existe una base de datos de Errores conocidos y Problemas - KEDB?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_397','¿Todos los errores conocidos contienen una Solución temporal registrada con acceso al proceso de IM?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_398','¿El proceso de Administración de incidentes genera reportes de tendencias para el análisis de problemas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_399','¿Los incidentes críticos son escalados a la Administración de Problemas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_400','¿Los incidentes con causa raíz desconocida son escalados a la Administración de Problemas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_401','¿Las soluciones temporales son suministradas siempre por la Administración de Problemas?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_402','¿Los registros de incidentes se relacionan con los registros de problemas si el incidente corresponde a un Error Conocido o Problema en la infraestructura soportada?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_403','¿Se cuenta con un sistema de gestión del servicio de conocimiento o base de datos de conocimiento para incidentes y soluciones conocidos?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_404','¿La base de datos de conocimiento se mantiene actualizada con los incidentes que se presentan?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_405','¿El grupo de Incident Management escala al grupo de Release todos los reportes y logs de error de los usuarios finales por la implementación de un nuevo release?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_406','¿El grupo de Incident Management chequea que las implementaciones realizadas por Release sean exitosas ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_407','¿El proceso de availability Management vela por revisar y avisar acerca de pobres diagnósticos en una incidencia, herramientas, scripts, procedimientos que nos son claros para subir un servicio o procedimientos de escalamiento que no son claros?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_408','¿El proceso de Incident Management entrega información al proceso de Availability acerca de la disponibilidad de los niveles de servicio pactados en los SLA's ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_409','¿Los tiempos muertos de indisponibilidad de un servicio son tratados en conjunto con el proceso de Availability para que este sea menor e impacte menos al usuario?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_410','¿El proceso de Incident Management proporciona un índice de desempeño al proceso de Capacity, monitoreando los incidentes cuando estos aparecen?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_411','¿El proceso de Capacity proporciona información relacionada con las herramientas de diagnóstico como modelos y scripts de la simulación para solucionar incidentes?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_412','¿El proceso de Incident Management asegura que los incidentes son solucionados dentro de los niveles de capacidad mencionados en los SLA's?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_413','¿El proceso de Incident Management proporciona al proceso de capacidad información acerca de la relación de capacidad de incidentes. Por ejemplo: listados no disponibles debido a la escasez de impresoras, o información no almacenada en discos ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_414','¿El grupo de Continuity Management entrega planes de continuidad del negocio (BCP) al proceso de Incident Management?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_415','¿El proceso de Incident Management se acoge a los lineamientos que tiene el BCP?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_416','¿La cantidad de tiempo, esfuerzo y el dinero que se gasta en resolver un incidente proporcionando a su vez Workarounds es registrado en la herramienta en donde se encuentran registrados estos?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_417','¿El proceso de IM proporciona reportes que permiten al grupo de niveles de servicio revisar objetivamente y regularmente los SLA's pactados ?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_418','¿El proceso de IM retroalimenta al proceso de Service Level Management acerca de inconsistencias, incumplimientos o acuerdos no alcanzables de los SLA's, OLA's y UCs?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_419','¿El proceso de seguridad especifica mediante un documento al proceso de Incident Management las medidas para prevenir incidentes de seguridad?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_420','¿El proceso de Security trabaja en conjunto con el proceso de Incident Management para resolver incidentes de Seguridad?','psc_ta');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('psc_ta_421','¿El proceso de Incident management conoce las políticas del manejo de incidentes de seguridad?','psc_ta');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('14','Operación de los servicios IT (Relación entre procesos) Caulitativa','Esta encuesta ITIL evalúa las actividades de la fase de operación para los servicios de tecnologías de información de los servicios','operacion_cualitativa_procesos.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_377','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_378','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_379','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_380','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_380','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_381','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_382','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_383','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_384','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_385','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_386','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_387','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_388','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_389','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_390','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_391','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_392','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_393','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_394','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_395','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_396','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_397','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_398','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_399','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_400','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_401','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_402','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_403','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_404','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_405','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_406','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_407','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_408','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_409','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_410','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_411','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_412','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_413','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_414','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_415','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_416','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_417','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_418','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_419','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_420','14');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('psc_ta_421','14');INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_422','Service Desk','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_1','mmr_rb_422','¿El proceso de service Desk reporta todos los incidentes de forma manual o automática?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_1_1','Nada Factible','mmr_rb_422_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_1_2','Poco Factible','mmr_rb_422_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_1_3','Algo Factible','mmr_rb_422_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_1_4','Factible','mmr_rb_422_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_1_5','Bastante Factible','mmr_rb_422_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_1_6','Muy Factible','mmr_rb_422_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_2','mmr_rb_422','¿El service Desk suministra todos los detalles básicos de los incidentes reportados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_2_1','Nada Factible','mmr_rb_422_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_2_2','Poco Factible','mmr_rb_422_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_2_3','Algo Factible','mmr_rb_422_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_2_4','Factible','mmr_rb_422_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_2_5','Bastante Factible','mmr_rb_422_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_2_6','Muy Factible','mmr_rb_422_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_3','mmr_rb_422','¿Asigna el impacto y la prioridad inicial a los incidentes que son escalados al grupo de Incident Management?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_3_1','Nada Factible','mmr_rb_422_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_3_2','Poco Factible','mmr_rb_422_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_3_3','Algo Factible','mmr_rb_422_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_3_4','Factible','mmr_rb_422_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_3_5','Bastante Factible','mmr_rb_422_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_3_6','Muy Factible','mmr_rb_422_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_4','mmr_rb_422','¿El service Desk realiza una investigación inicial del incidente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_4_1','Nada Factible','mmr_rb_422_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_4_2','Poco Factible','mmr_rb_422_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_4_3','Algo Factible','mmr_rb_422_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_4_4','Factible','mmr_rb_422_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_4_5','Bastante Factible','mmr_rb_422_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_4_6','Muy Factible','mmr_rb_422_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_5','mmr_rb_422','¿El service Desk monitorea y escala los incidentes al grupo de Incident Management?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_5_1','Nada Factible','mmr_rb_422_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_5_2','Poco Factible','mmr_rb_422_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_5_3','Algo Factible','mmr_rb_422_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_5_4','Factible','mmr_rb_422_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_5_5','Bastante Factible','mmr_rb_422_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_5_6','Muy Factible','mmr_rb_422_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_6','mmr_rb_422','¿El grupo de service Desk cierra y actualiza el registro de los incidentes solucionados por el grupo de Incident Management?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_6_1','Nada Factible','mmr_rb_422_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_6_2','Poco Factible','mmr_rb_422_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_6_3','Algo Factible','mmr_rb_422_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_6_4','Factible','mmr_rb_422_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_6_5','Bastante Factible','mmr_rb_422_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_6_6','Muy Factible','mmr_rb_422_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_7','mmr_rb_422','¿El service Desk mantiene informado al cliente acerca de los escalamientos que realiza al proceso de Incident Management?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_7_1','Nada Factible','mmr_rb_422_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_7_2','Poco Factible','mmr_rb_422_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_7_3','Algo Factible','mmr_rb_422_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_7_4','Factible','mmr_rb_422_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_7_5','Bastante Factible','mmr_rb_422_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_7_6','Muy Factible','mmr_rb_422_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_422_8','mmr_rb_422','¿El service Desk realiza un soporte de primer nivel de los incidentes reportados?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_8_1','Nada Factible','mmr_rb_422_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_8_2','Poco Factible','mmr_rb_422_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_8_3','Algo Factible','mmr_rb_422_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_8_4','Factible','mmr_rb_422_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_8_5','Bastante Factible','mmr_rb_422_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_422_8_6','Muy Factible','mmr_rb_422_8');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_423','Change Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_423_1','mmr_rb_423','¿Existe un proceso formal de RFC para la solución de un Incidente (Cambio Urgente) cuando es requerido?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_1_1','Nada Factible','mmr_rb_423_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_1_2','Poco Factible','mmr_rb_423_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_1_3','Algo Factible','mmr_rb_423_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_1_4','Factible','mmr_rb_423_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_1_5','Bastante Factible','mmr_rb_423_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_1_6','Muy Factible','mmr_rb_423_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_423_2','mmr_rb_423','¿El grupo de IM asigna al proceso de Cambios los requerimientos de Cambio (RFC) solicitados por el usuario para su gestión?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_2_1','Nada Factible','mmr_rb_423_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_2_2','Poco Factible','mmr_rb_423_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_2_3','Algo Factible','mmr_rb_423_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_2_4','Factible','mmr_rb_423_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_2_5','Bastante Factible','mmr_rb_423_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_2_6','Muy Factible','mmr_rb_423_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_423_3','mmr_rb_423','¿El proceso de cambios Notifica al proceso de Administración de Incidentes la programación y ejecución de los cambios solicitados sean urgentes o estándar?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_3_1','Nada Factible','mmr_rb_423_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_3_2','Poco Factible','mmr_rb_423_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_3_3','Algo Factible','mmr_rb_423_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_3_4','Factible','mmr_rb_423_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_3_5','Bastante Factible','mmr_rb_423_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_3_6','Muy Factible','mmr_rb_423_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_423_4','mmr_rb_423','¿Los incidentes causados por cambios implementados son relacionados con el registro de Cambio?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_4_1','Nada Factible','mmr_rb_423_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_4_2','Poco Factible','mmr_rb_423_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_4_3','Algo Factible','mmr_rb_423_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_4_4','Factible','mmr_rb_423_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_4_5','Bastante Factible','mmr_rb_423_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_4_6','Muy Factible','mmr_rb_423_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_423_5','mmr_rb_423','¿En el comité de evaluación de cambios críticos se encuentra el Administrador de Incidentes involucrado?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_5_1','Nada Factible','mmr_rb_423_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_5_2','Poco Factible','mmr_rb_423_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_5_3','Algo Factible','mmr_rb_423_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_5_4','Factible','mmr_rb_423_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_5_5','Bastante Factible','mmr_rb_423_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_5_6','Muy Factible','mmr_rb_423_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_423_6','mmr_rb_423','¿Los registros de cambio creados a partir de una llamada de servicio son relacionados con el registro de llamada correspondiente?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_6_1','Nada Factible','mmr_rb_423_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_6_2','Poco Factible','mmr_rb_423_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_6_3','Algo Factible','mmr_rb_423_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_6_4','Factible','mmr_rb_423_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_6_5','Bastante Factible','mmr_rb_423_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_423_6_6','Muy Factible','mmr_rb_423_6');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_424','Configuration Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_424_1','mmr_rb_424','¿Todos los elementos de configuración se encuentran en la base de datos de configuración (CMDB)?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_1_1','Nada Factible','mmr_rb_424_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_1_2','Poco Factible','mmr_rb_424_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_1_3','Algo Factible','mmr_rb_424_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_1_4','Factible','mmr_rb_424_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_1_5','Bastante Factible','mmr_rb_424_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_1_6','Muy Factible','mmr_rb_424_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_424_2','mmr_rb_424','¿Todos los incidentes están relacionados con su correspondiente elemento de configuración?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_2_1','Nada Factible','mmr_rb_424_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_2_2','Poco Factible','mmr_rb_424_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_2_3','Algo Factible','mmr_rb_424_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_2_4','Factible','mmr_rb_424_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_2_5','Bastante Factible','mmr_rb_424_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_2_6','Muy Factible','mmr_rb_424_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_424_3','mmr_rb_424','¿Las inconsistencias encontradas en la CMDB por proceso de Administración de Incidentes son reportadas a la administración de Configuración?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_3_1','Nada Factible','mmr_rb_424_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_3_2','Poco Factible','mmr_rb_424_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_3_3','Algo Factible','mmr_rb_424_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_3_4','Factible','mmr_rb_424_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_3_5','Bastante Factible','mmr_rb_424_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_3_6','Muy Factible','mmr_rb_424_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_424_4','mmr_rb_424','¿La base de datos de personas se encuentra actualizada?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_4_1','Nada Factible','mmr_rb_424_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_4_2','Poco Factible','mmr_rb_424_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_4_3','Algo Factible','mmr_rb_424_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_4_4','Factible','mmr_rb_424_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_4_5','Bastante Factible','mmr_rb_424_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_4_6','Muy Factible','mmr_rb_424_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_424_5','mmr_rb_424','¿Las personas registradas en la CMDB están relacionadas con sus elementos de configuración?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_5_1','Nada Factible','mmr_rb_424_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_5_2','Poco Factible','mmr_rb_424_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_5_3','Algo Factible','mmr_rb_424_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_5_4','Factible','mmr_rb_424_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_5_5','Bastante Factible','mmr_rb_424_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_424_5_6','Muy Factible','mmr_rb_424_5');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_425','Problem Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_1','mmr_rb_425','¿Todo nuevo error conocido es reportado al proceso de Administración de Incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_1_1','Nada Factible','mmr_rb_425_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_1_2','Poco Factible','mmr_rb_425_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_1_3','Algo Factible','mmr_rb_425_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_1_4','Factible','mmr_rb_425_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_1_5','Bastante Factible','mmr_rb_425_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_1_6','Muy Factible','mmr_rb_425_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_2','mmr_rb_425','¿Existe una base de datos de Errores conocidos y Problemas - KEDB?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_2_1','Nada Factible','mmr_rb_425_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_2_2','Poco Factible','mmr_rb_425_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_2_3','Algo Factible','mmr_rb_425_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_2_4','Factible','mmr_rb_425_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_2_5','Bastante Factible','mmr_rb_425_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_2_6','Muy Factible','mmr_rb_425_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_3','mmr_rb_425','¿Todos los errores conocidos contienen una Solución temporal registrada con acceso al proceso de IM?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_3_1','Nada Factible','mmr_rb_425_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_3_2','Poco Factible','mmr_rb_425_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_3_3','Algo Factible','mmr_rb_425_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_3_4','Factible','mmr_rb_425_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_3_5','Bastante Factible','mmr_rb_425_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_3_6','Muy Factible','mmr_rb_425_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_4','mmr_rb_425','¿El proceso de Administración de incidentes genera reportes de tendencias para el análisis de problemas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_4_1','Nada Factible','mmr_rb_425_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_4_2','Poco Factible','mmr_rb_425_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_4_3','Algo Factible','mmr_rb_425_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_4_4','Factible','mmr_rb_425_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_4_5','Bastante Factible','mmr_rb_425_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_4_6','Muy Factible','mmr_rb_425_4');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_5','mmr_rb_425','¿Los incidentes críticos son escalados a la Administración de Problemas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_5_1','Nada Factible','mmr_rb_425_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_5_2','Poco Factible','mmr_rb_425_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_5_3','Algo Factible','mmr_rb_425_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_5_4','Factible','mmr_rb_425_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_5_5','Bastante Factible','mmr_rb_425_5');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_5_6','Muy Factible','mmr_rb_425_5');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_6','mmr_rb_425','¿Los incidentes con causa raíz desconocida son escalados a la Administración de Problemas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_6_1','Nada Factible','mmr_rb_425_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_6_2','Poco Factible','mmr_rb_425_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_6_3','Algo Factible','mmr_rb_425_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_6_4','Factible','mmr_rb_425_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_6_5','Bastante Factible','mmr_rb_425_6');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_6_6','Muy Factible','mmr_rb_425_6');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_7','mmr_rb_425','¿Las soluciones temporales son suministradas siempre por la Administración de Problemas?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_7_1','Nada Factible','mmr_rb_425_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_7_2','Poco Factible','mmr_rb_425_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_7_3','Algo Factible','mmr_rb_425_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_7_4','Factible','mmr_rb_425_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_7_5','Bastante Factible','mmr_rb_425_7');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_7_6','Muy Factible','mmr_rb_425_7');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_8','mmr_rb_425','¿Los registros de incidentes se relacionan con los registros de problemas si el incidente corresponde a un Error Conocido o Problema en la infraestructura soportada?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_8_1','Nada Factible','mmr_rb_425_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_8_2','Poco Factible','mmr_rb_425_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_8_3','Algo Factible','mmr_rb_425_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_8_4','Factible','mmr_rb_425_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_8_5','Bastante Factible','mmr_rb_425_8');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_8_6','Muy Factible','mmr_rb_425_8');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_9','mmr_rb_425','¿Se cuenta con un sistema de gestión del servicio de conocimiento o base de datos de conocimiento para incidentes y soluciones conocidos?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_9_1','Nada Factible','mmr_rb_425_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_9_2','Poco Factible','mmr_rb_425_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_9_3','Algo Factible','mmr_rb_425_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_9_4','Factible','mmr_rb_425_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_9_5','Bastante Factible','mmr_rb_425_9');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_9_6','Muy Factible','mmr_rb_425_9');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_425_10','mmr_rb_425','¿La base de datos de conocimiento se mantiene actualizada con los incidentes que se presentan?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_10_1','Nada Factible','mmr_rb_425_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_10_2','Poco Factible','mmr_rb_425_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_10_3','Algo Factible','mmr_rb_425_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_10_4','Factible','mmr_rb_425_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_10_5','Bastante Factible','mmr_rb_425_10');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_425_10_6','Muy Factible','mmr_rb_425_10');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_426','Release Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_426_1','mmr_rb_426','¿El grupo de Incident Management escala al grupo de Release todos los reportes y logs de error de los usuarios finales por la implementación de un nuevo release?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_1_1','Nada Factible','mmr_rb_426_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_1_2','Poco Factible','mmr_rb_426_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_1_3','Algo Factible','mmr_rb_426_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_1_4','Factible','mmr_rb_426_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_1_5','Bastante Factible','mmr_rb_426_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_1_6','Muy Factible','mmr_rb_426_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_426_2','mmr_rb_426','¿El grupo de Incident Management chequea que las implementaciones realizadas por Release sean exitosas ?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_2_1','Nada Factible','mmr_rb_426_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_2_2','Poco Factible','mmr_rb_426_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_2_3','Algo Factible','mmr_rb_426_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_2_4','Factible','mmr_rb_426_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_2_5','Bastante Factible','mmr_rb_426_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_426_2_6','Muy Factible','mmr_rb_426_2');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_427','Availability Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_427_1','mmr_rb_427','¿El proceso de availability Management vela por revisar y avisar acerca de pobres diagnósticos en una incidencia, herramientas, scripts, procedimientos que nos son claros para subir un servicio o procedimientos de escalamiento que no son claros?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_1_1','Nada Factible','mmr_rb_427_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_1_2','Poco Factible','mmr_rb_427_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_1_3','Algo Factible','mmr_rb_427_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_1_4','Factible','mmr_rb_427_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_1_5','Bastante Factible','mmr_rb_427_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_1_6','Muy Factible','mmr_rb_427_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_427_2','mmr_rb_427','¿El proceso de Incident Management entrega información al proceso de Availability acerca de la disponibilidad de los niveles de servicio pactados en los SLA's ?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_2_1','Nada Factible','mmr_rb_427_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_2_2','Poco Factible','mmr_rb_427_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_2_3','Algo Factible','mmr_rb_427_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_2_4','Factible','mmr_rb_427_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_2_5','Bastante Factible','mmr_rb_427_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_2_6','Muy Factible','mmr_rb_427_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_427_3','mmr_rb_427','¿Los tiempos muertos de indisponibilidad de un servicio son tratados en conjunto con el proceso de Availability para que este sea menor e impacte menos al usuario?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_3_1','Nada Factible','mmr_rb_427_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_3_2','Poco Factible','mmr_rb_427_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_3_3','Algo Factible','mmr_rb_427_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_3_4','Factible','mmr_rb_427_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_3_5','Bastante Factible','mmr_rb_427_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_427_3_6','Muy Factible','mmr_rb_427_3');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_428','Capacity Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_428_1','mmr_rb_428','¿El proceso de Incident Management proporciona un índice de desempeño al proceso de Capacity, monitoreando los incidentes cuando estos aparecen?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_1_1','Nada Factible','mmr_rb_428_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_1_2','Poco Factible','mmr_rb_428_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_1_3','Algo Factible','mmr_rb_428_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_1_4','Factible','mmr_rb_428_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_1_5','Bastante Factible','mmr_rb_428_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_1_6','Muy Factible','mmr_rb_428_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_428_2','mmr_rb_428','¿El proceso de Capacity proporciona información relacionada con las herramientas de diagnóstico como modelos y scripts de la simulación para solucionar incidentes?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_2_1','Nada Factible','mmr_rb_428_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_2_2','Poco Factible','mmr_rb_428_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_2_3','Algo Factible','mmr_rb_428_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_2_4','Factible','mmr_rb_428_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_2_5','Bastante Factible','mmr_rb_428_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_2_6','Muy Factible','mmr_rb_428_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_428_3','mmr_rb_428','¿El proceso de Incident Management asegura que los incidentes son solucionados dentro de los niveles de capacidad mencionados en los SLA's?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_3_1','Nada Factible','mmr_rb_428_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_3_2','Poco Factible','mmr_rb_428_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_3_3','Algo Factible','mmr_rb_428_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_3_4','Factible','mmr_rb_428_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_3_5','Bastante Factible','mmr_rb_428_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_3_6','Muy Factible','mmr_rb_428_3');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_428_4','mmr_rb_428','¿El proceso de Incident Management proporciona al proceso de capacidad información acerca de la relación de capacidad de incidentes. Por ejemplo: listados no disponibles debido a la escasez de impresoras, o información no almacenada en discos ?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_4_1','Nada Factible','mmr_rb_428_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_4_2','Poco Factible','mmr_rb_428_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_4_3','Algo Factible','mmr_rb_428_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_4_4','Factible','mmr_rb_428_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_4_5','Bastante Factible','mmr_rb_428_4');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_428_4_6','Muy Factible','mmr_rb_428_4');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_429','Continuity Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_429_1','mmr_rb_429','¿El grupo de Continuity Management entrega planes de continuidad del negocio (BCP) al proceso de Incident Management?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_1_1','Nada Factible','mmr_rb_429_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_1_2','Poco Factible','mmr_rb_429_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_1_3','Algo Factible','mmr_rb_429_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_1_4','Factible','mmr_rb_429_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_1_5','Bastante Factible','mmr_rb_429_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_1_6','Muy Factible','mmr_rb_429_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_429_2','mmr_rb_429','¿El proceso de Incident Management se acoge a los lineamientos que tiene el BCP?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_2_1','Nada Factible','mmr_rb_429_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_2_2','Poco Factible','mmr_rb_429_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_2_3','Algo Factible','mmr_rb_429_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_2_4','Factible','mmr_rb_429_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_2_5','Bastante Factible','mmr_rb_429_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_429_2_6','Muy Factible','mmr_rb_429_2');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_430','Financial Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_430_1','mmr_rb_430','¿La cantidad de tiempo, esfuerzo y el dinero que se gasta en resolver un incidente proporcionando a su vez Workarounds es registrado en la herramienta en donde se encuentran registrados estos?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_430_1_1','Nada Factible','mmr_rb_430_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_430_1_2','Poco Factible','mmr_rb_430_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_430_1_3','Algo Factible','mmr_rb_430_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_430_1_4','Factible','mmr_rb_430_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_430_1_5','Bastante Factible','mmr_rb_430_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_430_1_6','Muy Factible','mmr_rb_430_1');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_431','Service level Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_431_1','mmr_rb_431','¿El proceso de IM proporciona reportes que permiten al grupo de niveles de servicio revisar objetivamente y regularmente los SLA's pactados ?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_1_1','Nada Factible','mmr_rb_431_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_1_2','Poco Factible','mmr_rb_431_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_1_3','Algo Factible','mmr_rb_431_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_1_4','Factible','mmr_rb_431_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_1_5','Bastante Factible','mmr_rb_431_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_1_6','Muy Factible','mmr_rb_431_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_431_2','mmr_rb_431','¿El proceso de IM retroalimenta al proceso de Service Level Management acerca de inconsistencias, incumplimientos o acuerdos no alcanzables de los SLA's, OLA's y UCs?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_2_1','Nada Factible','mmr_rb_431_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_2_2','Poco Factible','mmr_rb_431_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_2_3','Algo Factible','mmr_rb_431_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_2_4','Factible','mmr_rb_431_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_2_5','Bastante Factible','mmr_rb_431_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_431_2_6','Muy Factible','mmr_rb_431_2');
INSERT INTO pregunta (pregunta_id, pregunta_descripcion, pregunta_tipo) VALUES ('mmr_rb_432','Security Management','mmr_rb');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_432_1','mmr_rb_432','¿El proceso de seguridad especifica mediante un documento al proceso de Incident Management las medidas para prevenir incidentes de seguridad?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_1_1','Nada Factible','mmr_rb_432_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_1_2','Poco Factible','mmr_rb_432_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_1_3','Algo Factible','mmr_rb_432_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_1_4','Factible','mmr_rb_432_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_1_5','Bastante Factible','mmr_rb_432_1');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_1_6','Muy Factible','mmr_rb_432_1');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_432_2','mmr_rb_432','¿El proceso de Security trabaja en conjunto con el proceso de Incident Management para resolver incidentes de Seguridad?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_2_1','Nada Factible','mmr_rb_432_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_2_2','Poco Factible','mmr_rb_432_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_2_3','Algo Factible','mmr_rb_432_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_2_4','Factible','mmr_rb_432_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_2_5','Bastante Factible','mmr_rb_432_2');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_2_6','Muy Factible','mmr_rb_432_2');
INSERT INTO mmrrow(mmrrow_id, mmrrow_pregunta_id, mmrrow_descripcion) VALUES ('mmr_rb_432_3','mmr_rb_432','¿El proceso de Incident management conoce las políticas del manejo de incidentes de seguridad?');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_3_1','Nada Factible','mmr_rb_432_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_3_2','Poco Factible','mmr_rb_432_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_3_3','Algo Factible','mmr_rb_432_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_3_4','Factible','mmr_rb_432_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_3_5','Bastante Factible','mmr_rb_432_3');
INSERT INTO opmmr(opmmr_id, opmmr_descripcion, opmmr_mmrrow_id) VALUES ('mmr_rb_432_3_6','Muy Factible','mmr_rb_432_3');
INSERT INTO encuesta(encuesta_id, encuesta_nombre, encuesta_descripcion, encuesta_page) VALUES ('15','Operación de los servicios IT (Relación entre procesos) Cuantitativa','Esta encuesta ITIL evalúa las actividades de la fase de operación para los servicios de tecnologías de información de los servicios','operacion_cuantitativa_procesos_v2.php');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_422','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_423','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_424','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_425','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_426','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_427','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_428','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_429','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_430','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_431','15');
INSERT INTO encuesta_has_pregunta(pregunta_id, encuesta_id) VALUES ('mmr_rb_432','15');
INSERT INTO encuestado (encuestado_id, encuestado_nombres, encuestado_apellidos, encuestado_email, encuestado_password) VALUES ('7','Luis Arturo','Zarate Ayala','luisarturo1989@gmail.com','827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','1');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','2');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','3');
INSERT INTO encuestado_has_encuesta(encuestado_id, encuesta_id) VALUES ('7','4');