CREATE DATABASE IF NOT EXISTS curso_php_mysql ;

CREATE TABLE 'personas' (email VARCHAR(30) NOT NULL PRIMARY KEY, nombre VARCHAR(15), apellido VARCHAR(15), edad INT) ;

INSERT INTO `personas` (`email`, `nombre`, `apellido`, `edad`) VALUES ('sicher2001@gmail.com', 'Matias', 'Sicher', '21');
INSERT INTO `personas` (`email`, `nombre`, `apellido`, `edad`) VALUES ('mateo@gmail.com', 'Mateo', 'Gutierrez', '15');
INSERT INTO `personas` (`email`, `nombre`, `apellido`, `edad`) VALUES ('pedro@gmail.com', 'Pedro', 'Sicher', '35');
INSERT INTO `personas` (`email`, `nombre`, `apellido`, `edad`) VALUES ('martin@gmail.com', 'Martin', 'Sicher', '55');
INSERT INTO `personas` (`email`, `nombre`, `apellido`, `edad`) VALUES ('sol@gmail.com', 'Sol', 'Sicher', '19');
INSERT INTO `personas` (`email`, `nombre`, `apellido`, `edad`) VALUES ('ezequiel@gmail.com', 'Ezequiel', 'Sicher', '16');
 
SELECT * FROM `personas` ;

SELECT * FROM `personas` WHERE nombre = "Matias" ;

SELECT * FROM `personas` WHERE edad <= '21' ;