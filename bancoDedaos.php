<?php

/*

CREATE TABLE alunos -> Criamos a tabela 
AUTO_INCREMENT -> Gera um ID automaticamente
PRIMARY_KEY -> Serve para indentificar que sera um elemento unico
VARCHAR -> Tamanho maximo do texto de entrada 
DROP TABLE alunos -> Faz a exclusão da tabela
DROP DATABASE escola -> Exclui o banco e suas tabelas 
ALTER TABLE alunos ADD email -> Adiciona a coluna email na tabela alunos
ALTER TABLE alunos MODIFY idade TINYINT -> Modifica a coluna idade
ALTER TABLE alunos RENAME COLUMN curso TO curso_nome -> Altera o nome da coluna curso para curso_nome
ALTER TABLER alunos DROP COLUMN email -> Exclui a coluna email da tabela alunos


TIPOS DE DADOS NUMERICOS

TINYINT - 1 byte | -128 a  127 | 0 a 255
SMALLINT - 2 byte | -32.768 a  32.767 | 0 a 65.535
MEDIUMINT - 3 byte | -8.388.698 a  8.388.697 | 0 a 16.777.215
INT - 4 byte | -2.147.483.648 a  2.147.483.647 | 0 a 4.294.967.295
BIGINT - 8 byte | -9.223.372.036.854.775.808 a  9.223.372.036.854.775.807 | 0 a 18.446.744.073.709.551.615

DECIMAL(p,s) - Numeros com precisão decimal - 10.50,12.75
FLOAT - Numeros decimais imprecisos 3.1415
DOUBLE - Precisão dupla 123456.78

TIPOS DE DADOS TEXTO

CHAR - Texto fixo, sempre com n caracteres EX: "Sim" preenche espaços extras
VARCHAR - Texto variavel até n caracteres EX: nomes, cidades
TEXT - Texto longo , até 64k caracteres, ideal para descrições e artigos

TIPOS DE DADOS DATAS

DATE - Data no formato AAAA-MM-DD Ex: 2025-04-25
DATETIME - Data e hora completas Ex: 2025-04-25 15:30:00
TIMESTAMP - Data/hora com fusio Horario automatico Ex:  2025-04-25 15:30:00 - SP
TIME - Hora apenas Ex: 15:30:00 
YEAR - Ano apenas Ex: 2025

TIPOS DE DADOS CHAVES 

Chave Primaria - Indentifica de forma unica cada linha em uma tabela. Valores devem ser unicos e não nulos

CREATE TABLE alunos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100);
)

Chave Estrangeira - Cria relacionamentos conectando tabelas refrenciando a chave primaria da outra

CREATE TABLE clientes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100);
)

CREATE TABLE pedidos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT;
    // ADICIONANDO CHAVE ESTRANGEIRA
    FOREIGN KEY (client_id) REFERENCES clientes(id)
)


CHave unica - Garante valores unicos, permite valores nulos, diferente da chave primaria

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE;
)

Chave composta - Formar uma unica chave, usado para junções de tabelas

CREATE TABLE itens_pedido (
    pedido_id INT, 
    produto INT,
    quantidade INT,
    PRIMARY KEY(pedido_id, produto_id);
    
    )

ADICIONANDO CHAVES EM TABELAS EXISTENTES

CHAVE PRIMARIA

ALTER TABLE tabela ADD PRIMARY KEY (Coluna);

CHAVE ESTRANGEIRA

ALTER TABLE tabela ADD CONSTRAINT fk_nome FOREIGN KEY (
    coluna_estrangeira
) REFERENCES outra_tabela(
    coluna_referenciada
);

CHAVE UNICA

ALTER TABLE tabela ADD UNIQUE(coluna);
*/