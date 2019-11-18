CREATE DATABASE db_webquiz;
USE db_webquiz;

CREATE TABLE participantes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idade int,
    peso int,
    freq_cardiaca_bpm int,
    altura decimal (4,2),
    curso VARCHAR(30),
    nivel int,
);

CREATE TABLE questoes (
    par_id int,
    numero int,
    acertou boolean,
    tempo_sec int,
    FOREIGN KEY (par_id) REFERENCES participantes(id)
);