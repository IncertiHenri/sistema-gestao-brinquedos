CREATE DATABASE sistema_gestao_brinquedos;

USE sistema_gestao_brinquedos;

CREATE TABLE brinquedos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
categoria VARCHAR(100) NOT NULL,
faixa_etaria VARCHAR(100) NOT NULL,
preco FLOAT NOT NULL,
quantidade_estoque INT NOT NULL
);