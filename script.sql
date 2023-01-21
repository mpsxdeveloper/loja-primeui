CREATE DATABASE loja;

USE loja;

CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL, 
    email VARCHAR(45) NOT NULL,
    senha VARCHAR(40) NOT NULL,
    nascimento DATE NOT NULL,
    ok VARCHAR(1) NOT NULL DEFAULT 'N',
    PRIMARY KEY(id),
    UNIQUE(email)
);

CREATE TABLE categorias ( 
   id INT NOT NULL AUTO_INCREMENT,
   descricao VARCHAR(30) NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(descricao)
);

CREATE TABLE subcategorias (
   id INT NOT NULL AUTO_INCREMENT,
   descricao VARCHAR(30) NOT NULL,
   categoria_id INT NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(descricao),
   FOREIGN KEY(categoria_id) REFERENCES categorias(id)
);

CREATE TABLE itens (
   id INT NOT NULL AUTO_INCREMENT,
   descricao VARCHAR(30) NOT NULL,
   subcategoria_id INT NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(descricao),
   FOREIGN KEY(subcategoria_id) REFERENCES subcategorias(id)
);

CREATE TABLE produtos (
   id INT NOT NULL AUTO_INCREMENT,
   descricao VARCHAR(45) NOT NULL,
   imagem VARCHAR(64) NOT NULL DEFAULT 'nopicture.jpg',
   usuario_id INT NOT NULL,
   categoria_id INT NOT NULL,
   subcategoria_id INT NOT NULL,
   item_id INT NOT NULL,
   preco INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
   FOREIGN KEY(categoria_id) REFERENCES categorias(id),
   FOREIGN KEY(subcategoria_id) REFERENCES subcategorias(id),
   FOREIGN KEY(item_id) REFERENCES subcategorias(id)
);