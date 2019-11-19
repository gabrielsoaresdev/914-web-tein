/*DROP DATABASE db_webquiz;*/
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
    qnt_questoes int,
    tempo_sec int
);
