DROP DATABASE IF EXISTS SWDControl;

CREATE DATABASE SWDControl;
USE SWDControl;

-- DROP TABLE IF EXISTS derechos;
-- CREATE TABLE derechos(

-- );
DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
IDUSUARIO INT UNSIGNED AUTO_INCREMENT,
USUARIO VARCHAR(50) NOT NULL,
PASS VARCHAR(20) NOT NULL,
ACTIVO TINYINT(1) DEFAULT 1,
TIEALTA DATETIME DEFAULT NULL,
TIEMODI DATETIME DEFAULT NULL,
USUALTA INT UNSIGNED DEFAULT '0',
USUMODI INT UNSIGNED DEFAULT '0' ,
-- IDDERECHO UNSIGNED UNSIGNED INT DEFAULT (0) FOREIGN KEY REFERENCES () 
PRIMARY KEY (IDUSUARIO)
);
DROP TABLE IF EXISTS empresas;
CREATE TABLE empresas(
IDEMPRESA INT UNSIGNED AUTO_INCREMENT,
EMPRESA VARCHAR(80) NOT NULL,
ACTIVO TINYINT(1) DEFAULT 1,
TIEALTA DATETIME DEFAULT NULL,
TIEMODI DATETIME DEFAULT NULL,
USUALTA INT UNSIGNED DEFAULT '0',
USUMODI INT UNSIGNED DEFAULT '0' ,
PRIMARY KEY (IDEMPRESA)
);
DROP TABLE IF EXISTS solicitante;
CREATE TABLE solicitante(
IDSOLICITANTE INT UNSIGNED AUTO_INCREMENT,
IDEMPRESA INT UNSIGNED NOT NULL,
ACTIVO TINYINT(1) DEFAULT 1,
EMAIL VARCHAR(255) NOT NULL,
TIEALTA DATETIME DEFAULT NULL,
TIEMODI DATETIME DEFAULT NULL,
USUALTA INT UNSIGNED DEFAULT '0',
USUMODI INT UNSIGNED DEFAULT '0' ,
PRIMARY KEY (IDSOLICITANTE)
);
DROP TABLE IF EXISTS pendientes;
CREATE TABLE pendientes(
    IDPENDIENTE INT UNSIGNED AUTO_INCREMENT,
    IDUSUARIO INT UNSIGNED NOT NULL,
    TIPOPENDIENTE INT UNSIGNED NOT NULL DEFAULT 1,
    FECHAINI DATETIME DEFAULT '0',
    FECHAFIN DATETIME DEFAULT '0',
    ACTIVO TINYINT(1) DEFAULT 1,
    EMAIL VARCHAR(255) NOT NULL,
    TIEALTA DATETIME DEFAULT NULL,
    TIEMODI DATETIME DEFAULT NULL,
    USUALTA INT UNSIGNED DEFAULT '0',
    USUMODI INT UNSIGNED DEFAULT '0' ,
    PRIMARY KEY (IDPENDIENTE)
);

------------------------FUNCIONES------------------
-- DROP FUNCTION LOGIN;
-- DELIMITER //
-- CREATE FUNCTION login(USUARIO VARCHAR(50),CONTRA VARCHAR(20)) RETURNS int DETERMINISTIC
--     BEGIN
--         DECLARE IDUSU INT;
--         SELECT idusuario INTO IDUSU FROM usuarios t WHERE USUARIO=T.USUARIO AND PASS=CONTRA;
--         IF IDUSU IS NULL THEN 
--            SET IDUSU=-1;
--         END IF;
--        RETURN IDUSU;
--     END//
-- DELIMITER ;
-- SELECT login('admin','adminA');
-- SELECT idusuario FROM usuarios t WHERE USUARIO='ADNMIN' AND PASS='ADMIN';
------------------------Procedimientos almacenados------------------
------------------------INSERTS------------------
INSERT INTO USUARIOS(usuario,pass,activo) VALUES ('ADMIN',"Admin",1);
