DROP DATABASE IF EXISTS testeCarefy;

CREATE DATABASE testeCarefy;

USE testeCarefy;

CREATE TABLE clientes(
    id int(11) NOT NULL AUTO_INCREMENT,
    nome varchar(50),
    data_criacao timestamp default current_timestamp(),
    data_alteracao timestamp default current_timestamp() on UPDATE current_timestamp(),
    PRIMARY KEY(id)
);

CREATE TABLE usuario(
    id int(11) NOT NULL AUTO_INCREMENT,
    nome varchar(50),
    email varchar(50),
    senha varchar(50),
    data_criacao timestamp default current_timestamp(),
    data_alteracao timestamp default current_timestamp() on UPDATE current_timestamp(),
    data_ultimo_acesso timestamp default current_timestamp() on UPDATE current_timestamp(),
    PRIMARY KEY(id),
    UNIQUE KEY(email)
);