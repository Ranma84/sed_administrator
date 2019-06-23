
CREATE TABLE sed_areas
(
	id_area              INTEGER NOT NULL,
	nombre               VARCHAR(50) NOT NULL,
	estado               CHAR(1) NOT NULL,
	id_empresa           INTEGER NOT NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL
);



CREATE UNIQUE INDEX XPKsed_areas ON sed_areas
(
	id_area,
	id_empresa
);



ALTER TABLE sed_areas
ADD PRIMARY KEY (id_area,id_empresa);



CREATE INDEX XIF1sed_areas ON sed_areas
(
	id_empresa
);



CREATE TABLE sed_cargos
(
	id_cargo             INTEGER NOT NULL,
	nombre               VARCHAR(50) NULL,
	plazas               INTEGER NULL,
	estado               CHAR(1) NULL,
	id_empresa           INTEGER NOT NULL,
	id_area              INTEGER NULL,
	id_dpto              INTEGER NULL,
	id_nivel             INTEGER NULL
);



CREATE UNIQUE INDEX XPKsed_cargos ON sed_cargos
(
	id_cargo,
	id_empresa
);



ALTER TABLE sed_cargos
ADD PRIMARY KEY (id_cargo,id_empresa);



CREATE INDEX XIF1sed_cargos ON sed_cargos
(
	id_empresa
);



CREATE INDEX XIF2sed_cargos ON sed_cargos
(
	id_area,
	id_empresa
);



CREATE INDEX XIF3sed_cargos ON sed_cargos
(
	id_dpto,
	id_empresa
);



CREATE INDEX XIF4sed_cargos ON sed_cargos
(
	id_nivel,
	id_empresa
);



CREATE TABLE sed_competencia_cargo
(
	estado               CHAR(1) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_cargo             INTEGER NOT NULL,
	id_empresa           INTEGER NOT NULL,
	id_competencia       INTEGER NOT NULL
);



CREATE UNIQUE INDEX XPKsed_competencia_cargo ON sed_competencia_cargo
(
	id_cargo,
	id_competencia,
	id_empresa
);



ALTER TABLE sed_competencia_cargo
ADD PRIMARY KEY (id_cargo,id_competencia,id_empresa);



CREATE INDEX XIF1sed_competencia_cargo ON sed_competencia_cargo
(
	id_cargo,
	id_empresa
);



CREATE INDEX XIF2sed_competencia_cargo ON sed_competencia_cargo
(
	id_competencia,
	id_empresa
);



CREATE TABLE sed_competencias
(
	id_competencia       INTEGER NOT NULL,
	nombre               VARCHAR(50) NULL,
	fec_ingreso          DATETIME NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	estado               CHAR(1) NULL,
	definicion           VARCHAR(1000) NULL,
	id_empresa           INTEGER NOT NULL,
	id_tipo_competencia  INTEGER NULL,
	inverso              CHAR(1) NULL
);



CREATE UNIQUE INDEX XPKsed_competencias ON sed_competencias
(
	id_competencia,
	id_empresa
);



ALTER TABLE sed_competencias
ADD PRIMARY KEY (id_competencia,id_empresa);



CREATE INDEX XIF1sed_competencias ON sed_competencias
(
	id_empresa
);



CREATE INDEX XIF2sed_competencias ON sed_competencias
(
	id_tipo_competencia,
	id_empresa
);



CREATE TABLE sed_departamentos
(
	id_dpto              INTEGER NOT NULL,
	nombre               VARCHAR(50) NULL,
	estado               CHAR(1) NOT NULL,
	id_area              INTEGER NULL,
	id_empresa           INTEGER NOT NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NOT NULL,
	user_modificacion    VARCHAR(20) NULL
);



CREATE UNIQUE INDEX XPKsed_departamentos ON sed_departamentos
(
	id_dpto,
	id_empresa
);



ALTER TABLE sed_departamentos
ADD PRIMARY KEY (id_dpto,id_empresa);



CREATE INDEX XIF1sed_departamentos ON sed_departamentos
(
	id_area,
	id_empresa
);



CREATE INDEX XIF2sed_departamentos ON sed_departamentos
(
	id_empresa
);



CREATE TABLE sed_empleado
(
	id_empleado          INTEGER NOT NULL,
	nombres              VARCHAR(50) NULL,
	apellidos            VARCHAR(50) NULL,
	ruc_ced              VARCHAR(20) NULL,
	fec_nacimiento       DATE NULL,
	fec_ingreso          DATETIME NOT NULL,
	fec_baja             DATE NULL,
	estado               CHAR(1) NULL,
	id_empresa           INTEGER NOT NULL,
	id_jefe              INTEGER NULL,
	fec_alta             DATE NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	user_ingreso         VARCHAR(20) NULL
);



CREATE UNIQUE INDEX XPKsed_empleado ON sed_empleado
(
	id_empleado,
	id_empresa
);



ALTER TABLE sed_empleado
ADD PRIMARY KEY (id_empleado,id_empresa);



CREATE INDEX XIF1sed_empleado ON sed_empleado
(
	id_empresa
);



CREATE TABLE sed_empresa
(
	id_empresa           INTEGER NOT NULL,
	nombre_comercial     VARCHAR(100) NOT NULL,
	descripcion          VARCHAR(200) NULL,
	ced_ruc              VARCHAR(20) NULL,
	direccion            VARCHAR(200) NULL,
	fec_ingreso          DATETIME NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	user_modificacion    VARCHAR(20) NULL
);



CREATE UNIQUE INDEX XPKsed_empresa ON sed_empresa
(
	id_empresa
);



ALTER TABLE sed_empresa
ADD PRIMARY KEY (id_empresa);



CREATE TABLE sed_empxcambios
(
	estado               CHAR(1) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_empleado          INTEGER NOT NULL,
	id_empresa           INTEGER NOT NULL,
	id_area              INTEGER NOT NULL,
	id_dpto              INTEGER NOT NULL,
	id_cargo             INTEGER NOT NULL
);



CREATE UNIQUE INDEX XPKsed_empxcambios ON sed_empxcambios
(
	id_empresa,
	id_area,
	id_dpto,
	id_cargo,
	id_empleado
);



ALTER TABLE sed_empxcambios
ADD PRIMARY KEY (id_empresa,id_area,id_dpto,id_cargo,id_empleado);



CREATE INDEX XIF1sed_empxcambios ON sed_empxcambios
(
	id_empleado,
	id_empresa
);



CREATE INDEX XIF2sed_empxcambios ON sed_empxcambios
(
	id_area,
	id_empresa
);



CREATE INDEX XIF3sed_empxcambios ON sed_empxcambios
(
	id_dpto,
	id_empresa
);



CREATE INDEX XIF4sed_empxcambios ON sed_empxcambios
(
	id_cargo,
	id_empresa
);



CREATE TABLE sed_escalas
(
	id_escala            INTEGER NOT NULL,
	nombre               VARCHAR(20) NULL,
	valor                INTEGER NULL,
	estado               CHAR(1) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NOT NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_empresa           INTEGER NOT NULL
);



CREATE UNIQUE INDEX XPKsed_escalas ON sed_escalas
(
	id_escala,
	id_empresa
);



ALTER TABLE sed_escalas
ADD PRIMARY KEY (id_escala,id_empresa);



CREATE INDEX XIF1sed_escalas ON sed_escalas
(
	id_empresa
);



CREATE TABLE sed_eval_360
(
	estado               CHAR(1) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_evaluador         INTEGER NOT NULL,
	id_empresa           INTEGER NOT NULL,
	id_evaluado          INTEGER NOT NULL,
	id_periodo           INTEGER NOT NULL,
	tipo_evaluado        CHAR(1) NULL
);



CREATE UNIQUE INDEX XPKsed_eval_360 ON sed_eval_360
(
	id_periodo,
	id_evaluador,
	id_evaluado,
	id_empresa
);



ALTER TABLE sed_eval_360
ADD PRIMARY KEY (id_periodo,id_evaluador,id_evaluado,id_empresa);



CREATE INDEX XIF1sed_eval_360 ON sed_eval_360
(
	id_evaluador,
	id_empresa
);



CREATE INDEX XIF2sed_eval_360 ON sed_eval_360
(
	id_evaluado,
	id_empresa
);



CREATE INDEX XIF3sed_eval_360 ON sed_eval_360
(
	id_periodo,
	id_empresa
);



CREATE TABLE sed_evaluacion
(
	comentario           VARCHAR(500) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_periodo_detalle   INTEGER NOT NULL,
	id_periodo           INTEGER NOT NULL,
	id_empresa           INTEGER NOT NULL,
	id_evaluado          INTEGER NOT NULL,
	id_evaluador         INTEGER NOT NULL,
	eval_360             CHAR(1) NOT NULL
);



CREATE UNIQUE INDEX XPKsed_evaluacion ON sed_evaluacion
(
	id_periodo_detalle,
	id_periodo,
	id_empresa,
	id_evaluado,
	id_evaluador
);



ALTER TABLE sed_evaluacion
ADD PRIMARY KEY (id_periodo_detalle,id_periodo,id_empresa,id_evaluado,id_evaluador);



CREATE INDEX XIF1sed_evaluacion ON sed_evaluacion
(
	id_periodo_detalle,
	id_periodo,
	id_empresa
);



CREATE INDEX XIF2sed_evaluacion ON sed_evaluacion
(
	id_evaluado,
	id_empresa
);



CREATE INDEX XIF3sed_evaluacion ON sed_evaluacion
(
	id_evaluador,
	id_empresa
);



CREATE TABLE sed_evaluacion_detalle
(
	logro_real           DECIMAL(8,2) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_escala            INTEGER NULL,
	id_empresa           INTEGER NOT NULL,
	id_periodo_detalle   INTEGER NOT NULL,
	id_periodo           INTEGER NOT NULL,
	id_evaluado          INTEGER NOT NULL,
	id_evaluador         INTEGER NOT NULL,
	id_competencia       INTEGER NOT NULL,
	comentario           VARCHAR(200) NULL,
	logro_ponderado      DECIMAL(8,2) NULL,
	puntaje_ponderado    DECIMAL(8,2) NULL
);



CREATE UNIQUE INDEX XPKsed_evaluacion_detalle ON sed_evaluacion_detalle
(
	id_empresa,
	id_periodo_detalle,
	id_periodo,
	id_evaluado,
	id_evaluador,
	id_competencia
);



ALTER TABLE sed_evaluacion_detalle
ADD PRIMARY KEY (id_empresa,id_periodo_detalle,id_periodo,id_evaluado,id_evaluador,id_competencia);



CREATE INDEX XIF1sed_evaluacion_detalle ON sed_evaluacion_detalle
(
	id_escala,
	id_empresa
);



CREATE INDEX XIF2sed_evaluacion_detalle ON sed_evaluacion_detalle
(
	id_periodo_detalle,
	id_periodo,
	id_empresa,
	id_evaluado,
	id_evaluador
);



CREATE INDEX XIF3sed_evaluacion_detalle ON sed_evaluacion_detalle
(
	id_competencia,
	id_empresa
);



CREATE TABLE sed_niveles
(
	id_nivel             INTEGER NOT NULL,
	nombre               VARCHAR(50) NULL,
	estado               CHAR(1) NULL,
	id_empresa           INTEGER NOT NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     CHAR(18) NULL,
	user_modificacion    VARCHAR(20) NULL
);



CREATE UNIQUE INDEX XPKsed_niveles ON sed_niveles
(
	id_nivel,
	id_empresa
);



ALTER TABLE sed_niveles
ADD PRIMARY KEY (id_nivel,id_empresa);



CREATE INDEX XIF1sed_niveles ON sed_niveles
(
	id_empresa
);



CREATE TABLE sed_pdi
(
	id_pdi               INTEGER NOT NULL,
	periocidad           CHAR(1) NULL,
	mejora               VARCHAR(200) NULL,
	accion               VARCHAR(500) NULL,
	tipo                 CHAR(1) NULL,
	fec_inicio           DATE NULL,
	fec_fin              DATE NULL,
	presupuesto          CHAR(1) NULL,
	resultado            VARCHAR(2000) NULL,
	observaciones        VARCHAR(2000) NULL,
	avance               INTEGER NULL,
	fec_ingreso          DATE NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_empresa           INTEGER NOT NULL,
	id_periodo_detalle   INTEGER NULL,
	id_periodo           INTEGER NULL,
	id_evaluado          INTEGER NULL,
	id_competencia       INTEGER NULL,
	id_evaluador         INTEGER NULL,
	id_mentor            INTEGER NULL
);



CREATE UNIQUE INDEX XPKsed_pdi ON sed_pdi
(
	id_pdi,
	id_empresa
);



ALTER TABLE sed_pdi
ADD PRIMARY KEY (id_pdi,id_empresa);



CREATE INDEX XIF1sed_pdi ON sed_pdi
(
	id_empresa,
	id_periodo_detalle,
	id_periodo,
	id_evaluado,
	id_competencia,
	id_evaluador
);



CREATE INDEX XIF2sed_pdi ON sed_pdi
(
	id_mentor,
	id_empresa
);



CREATE TABLE sed_periodos
(
	id_periodo           INTEGER NOT NULL,
	anio                 INTEGER NULL,
	descripcion          VARCHAR(100) NULL,
	estado               CHAR(1) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_empresa           INTEGER NOT NULL
);



CREATE UNIQUE INDEX XPKsed_periodos ON sed_periodos
(
	id_periodo,
	id_empresa
);



ALTER TABLE sed_periodos
ADD PRIMARY KEY (id_periodo,id_empresa);



CREATE INDEX XIF1sed_periodos ON sed_periodos
(
	id_empresa
);



CREATE TABLE sed_periodos_detalle
(
	secuencia            INTEGER NOT NULL,
	fecha_inicio         DATE NULL,
	fecha_fin            DATE NULL,
	estado               CHAR(1) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NOT NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_periodo           INTEGER NOT NULL,
	id_empresa           INTEGER NOT NULL
);



CREATE UNIQUE INDEX XPKsed_periodos_detalle ON sed_periodos_detalle
(
	id_periodo,
	secuencia,
	id_empresa
);



ALTER TABLE sed_periodos_detalle
ADD PRIMARY KEY (id_periodo,secuencia,id_empresa);



CREATE INDEX XIF1sed_periodos_detalle ON sed_periodos_detalle
(
	id_periodo,
	id_empresa
);



CREATE TABLE sed_tipos_competencias
(
	id_tipo_competencia  INTEGER NOT NULL,
	nombre               VARCHAR(50) NULL,
	estado               CHAR(1) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NULL,
	fec_modificacion     DATETIME NOT NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_empresa           INTEGER NOT NULL
);



CREATE UNIQUE INDEX XPKsed_tipos_competencias ON sed_tipos_competencias
(
	id_tipo_competencia,
	id_empresa
);



ALTER TABLE sed_tipos_competencias
ADD PRIMARY KEY (id_tipo_competencia,id_empresa);



CREATE INDEX XIF1sed_tipos_competencias ON sed_tipos_competencias
(
	id_empresa
);



CREATE TABLE sed_usuarios
(
	id_usuario           VARCHAR(20) NOT NULL,
	clave                VARCHAR(50) NULL,
	fec_ingreso          DATETIME NOT NULL,
	user_ingreso         VARCHAR(20) NOT NULL,
	fec_modificacion     DATETIME NULL,
	user_modificacion    VARCHAR(20) NULL,
	id_empresa           INTEGER NOT NULL,
	id_empleado          INTEGER NULL,
	estado               CHAR(1) NULL
);



CREATE UNIQUE INDEX XPKsed_usuarios ON sed_usuarios
(
	id_usuario,
	id_empresa
);



ALTER TABLE sed_usuarios
ADD PRIMARY KEY (id_usuario,id_empresa);



CREATE INDEX XIF1sed_usuarios ON sed_usuarios
(
	id_empresa
);



CREATE INDEX XIF2sed_usuarios ON sed_usuarios
(
	id_empleado,
	id_empresa
);



ALTER TABLE sed_areas
ADD FOREIGN KEY R_1 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_cargos
ADD FOREIGN KEY R_4 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_cargos
ADD FOREIGN KEY R_5 (id_area, id_empresa) REFERENCES sed_areas (id_area, id_empresa);



ALTER TABLE sed_cargos
ADD FOREIGN KEY R_6 (id_dpto, id_empresa) REFERENCES sed_departamentos (id_dpto, id_empresa);



ALTER TABLE sed_cargos
ADD FOREIGN KEY R_8 (id_nivel, id_empresa) REFERENCES sed_niveles (id_nivel, id_empresa);



ALTER TABLE sed_competencia_cargo
ADD FOREIGN KEY R_21 (id_cargo, id_empresa) REFERENCES sed_cargos (id_cargo, id_empresa);



ALTER TABLE sed_competencia_cargo
ADD FOREIGN KEY R_22 (id_competencia, id_empresa) REFERENCES sed_competencias (id_competencia, id_empresa);



ALTER TABLE sed_competencias
ADD FOREIGN KEY R_19 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_competencias
ADD FOREIGN KEY R_20 (id_tipo_competencia, id_empresa) REFERENCES sed_tipos_competencias (id_tipo_competencia, id_empresa);



ALTER TABLE sed_departamentos
ADD FOREIGN KEY R_2 (id_area, id_empresa) REFERENCES sed_areas (id_area, id_empresa);



ALTER TABLE sed_departamentos
ADD FOREIGN KEY R_3 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_empleado
ADD FOREIGN KEY R_9 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_empxcambios
ADD FOREIGN KEY R_14 (id_empleado, id_empresa) REFERENCES sed_empleado (id_empleado, id_empresa);



ALTER TABLE sed_empxcambios
ADD FOREIGN KEY R_15 (id_area, id_empresa) REFERENCES sed_areas (id_area, id_empresa);



ALTER TABLE sed_empxcambios
ADD FOREIGN KEY R_16 (id_dpto, id_empresa) REFERENCES sed_departamentos (id_dpto, id_empresa);



ALTER TABLE sed_empxcambios
ADD FOREIGN KEY R_17 (id_cargo, id_empresa) REFERENCES sed_cargos (id_cargo, id_empresa);



ALTER TABLE sed_escalas
ADD FOREIGN KEY R_25 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_eval_360
ADD FOREIGN KEY R_28 (id_evaluador, id_empresa) REFERENCES sed_empleado (id_empleado, id_empresa);



ALTER TABLE sed_eval_360
ADD FOREIGN KEY R_29 (id_evaluado, id_empresa) REFERENCES sed_empleado (id_empleado, id_empresa);



ALTER TABLE sed_eval_360
ADD FOREIGN KEY R_30 (id_periodo, id_empresa) REFERENCES sed_periodos (id_periodo, id_empresa);



ALTER TABLE sed_evaluacion
ADD FOREIGN KEY R_31 (id_periodo, id_periodo_detalle, id_empresa) REFERENCES sed_periodos_detalle (id_periodo, secuencia, id_empresa);



ALTER TABLE sed_evaluacion
ADD FOREIGN KEY R_32 (id_evaluado, id_empresa) REFERENCES sed_empleado (id_empleado, id_empresa);



ALTER TABLE sed_evaluacion
ADD FOREIGN KEY R_33 (id_evaluador, id_empresa) REFERENCES sed_empleado (id_empleado, id_empresa);



ALTER TABLE sed_evaluacion_detalle
ADD FOREIGN KEY R_34 (id_escala, id_empresa) REFERENCES sed_escalas (id_escala, id_empresa);



ALTER TABLE sed_evaluacion_detalle
ADD FOREIGN KEY R_35 (id_periodo_detalle, id_periodo, id_empresa, id_evaluado, id_evaluador) REFERENCES sed_evaluacion (id_periodo_detalle, id_periodo, id_empresa, id_evaluado, id_evaluador);



ALTER TABLE sed_evaluacion_detalle
ADD FOREIGN KEY R_36 (id_competencia, id_empresa) REFERENCES sed_competencias (id_competencia, id_empresa);



ALTER TABLE sed_niveles
ADD FOREIGN KEY R_7 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_pdi
ADD FOREIGN KEY R_37 (id_empresa, id_periodo_detalle, id_periodo, id_evaluado, id_evaluador, id_competencia) REFERENCES sed_evaluacion_detalle (id_empresa, id_periodo_detalle, id_periodo, id_evaluado, id_evaluador, id_competencia);



ALTER TABLE sed_pdi
ADD FOREIGN KEY R_38 (id_mentor, id_empresa) REFERENCES sed_empleado (id_empleado, id_empresa);



ALTER TABLE sed_periodos
ADD FOREIGN KEY R_26 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_periodos_detalle
ADD FOREIGN KEY R_27 (id_periodo, id_empresa) REFERENCES sed_periodos (id_periodo, id_empresa);



ALTER TABLE sed_tipos_competencias
ADD FOREIGN KEY R_18 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_usuarios
ADD FOREIGN KEY R_23 (id_empresa) REFERENCES sed_empresa (id_empresa);



ALTER TABLE sed_usuarios
ADD FOREIGN KEY R_24 (id_empleado, id_empresa) REFERENCES sed_empleado (id_empleado, id_empresa);


DROP TABLE IF EXISTS `groups`;

#
# Table structure for table 'groups'
#

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table 'groups'
#

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
     (1,'admin','Administrator'),
     (2,'members','General User');



DROP TABLE IF EXISTS `users`;

#
# Table structure for table 'users'
#

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `uc_email` UNIQUE (`email`),
  CONSTRAINT `uc_activation_selector` UNIQUE (`activation_selector`),
  CONSTRAINT `uc_forgotten_password_selector` UNIQUE (`forgotten_password_selector`),
  CONSTRAINT `uc_remember_selector` UNIQUE (`remember_selector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


#
# Dumping data for table 'users'
#

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
     ('1','127.0.0.1','administrator','$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');


DROP TABLE IF EXISTS `users_groups`;

#
# Table structure for table 'users_groups'
#

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
     (1,1,1),
     (2,1,2);


DROP TABLE IF EXISTS `login_attempts`;

#
# Table structure for table 'login_attempts'
#

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

