CREATE DATABASE estoque;

USE estoque;

CREATE TABLE fornecedor
(
cnpj numeric(14) primary key not null,
nome_fantasia varchar(30) not null,
categoria varchar(30),
endereco varchar(30),
telefone numeric(11),
email varchar(25)
)