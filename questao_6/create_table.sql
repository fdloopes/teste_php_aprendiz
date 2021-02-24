/* Script de criação de tabelas */

DROP DATABASE basePaisEstado;
CREATE DATABASE basePaisEstado;
use basePaisEstado;

/* TABELA PAIS */
CREATE TABLE pais(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, nome_pais VARCHAR(255) NOT NULL);

/* TABELA ESTADO */
CREATE TABLE estado(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, nome_estado VARCHAR(255) NOT NULL, id_pais INT NOT NULL,CONSTRAINT fk_id_pais FOREIGN KEY(id_pais) REFERENCES pais(id));
