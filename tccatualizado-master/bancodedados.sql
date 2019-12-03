-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

Create DATABASE Emprego;
USE Emprego;
CREATE TABLE Usuario (
Nome char(80),
CPF int PRIMARY KEY NOT NULL ,
RG int,
Telefone1 char(80),
Telefone2 char(80),
Email varchar(200),
DataNasc Date,
IdEnd int,
Senha varchar(1000),
IdTipo int,
Img varchar(1000)
);

CREATE TABLE Empresa (
CNPJ BigInt PRIMARY KEY NOT NULL ,
CPF int,
NomeEmpresa varchar(1000),
AreaAtua varchar(1000),
RazaoSoc varchar(100000),
Email char(80),
FOREIGN KEY(CPF) REFERENCES Usuario (CPF)
);

CREATE TABLE Endereço (
IdEnd int PRIMARY KEY NOT NULL AUTO_INCREMENT,
CEP int,
Rua varchar(200),
Cidade char(80),
Bairro char(80),
Estado char(80),
Numero int
);

CREATE TABLE TipoUso (
Descricao varchar(200),
IdTipo int PRIMARY KEY NOT NULL AUTO_INCREMENT
);

CREATE TABLE Experiencia (
NomeEmpresa varchar(200),
Cargo varchar(200),
Atividades varchar(100000),
NumCart int,
DataAdmi Date,
DataSaida Date
);

CREATE TABLE Formacao (
Instituicao varchar(200),
AreaFormacao varchar(200),
DataInicio Date,
DataTermino Date,
Descricao varchar(100000),
NumCart int
);

CREATE TABLE Candidato (
Turno char(80),
Cargo varchar(1000),
Arquivo varchar(1000),
CPF int,
Sexo char(80),
NumCart int PRIMARY KEY,
SerieCart int,
EstadoCart char(80),
FOREIGN KEY(CPF) REFERENCES Usuario (CPF)
);

CREATE TABLE Vagas (
AreaAtuacao varchar(1000),
NomeVaga varchar(1000),
Descricao varchar(100000),
Requisitos varchar(1000),
Turno varchar(200)
);

ALTER TABLE Usuario ADD FOREIGN KEY(IdEnd) REFERENCES Endereço (IdEnd);
ALTER TABLE Usuario ADD FOREIGN KEY(IdTipo) REFERENCES TipoUso (IdTipo);
ALTER TABLE Experiencia ADD FOREIGN KEY(NumCart) REFERENCES Candidato (NumCart);
ALTER TABLE Formacao ADD FOREIGN KEY(NumCart) REFERENCES Candidato (NumCart);
