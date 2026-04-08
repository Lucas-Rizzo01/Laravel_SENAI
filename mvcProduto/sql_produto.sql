create database produtoLaravel;
use produtoLaravel;

create table produtos(
	id int auto_increment primary key,
    nome varchar(100),
    quant int,
    valor varchar(100),
    created_at timestamp null,
    updated_at timestamp null
);

create table setores(
	id int auto_increment primary key,
    nome varchar(100),
    numCorredor int,
);

create table detalhesprodutos(
	id int auto_increment primary key,
    descricao varchar(255),
    tamanho varchar(100),
    peso double,
    created_at timestamp null,
    updated_at timestamp null    
);

ALTER TABLE produtos 
ADD COLUMN setor_id INT,
ADD CONSTRAINT fk_produtos_setores
FOREIGN KEY (setor_id) REFERENCES Setores(id);

ALTER TABLE produtos
ADD COLUMN detalhes_id INT,
ADD CONSTRAINT fk_produtos_detalhes
FOREIGN KEY (detalhes_id) REFERENCES detalhesprodutos(id);


ALTER TABLE Setores 
ADD COLUMN created_at TIMESTAMP NULL,
ADD COLUMN updated_at TIMESTAMP NULL;



select * from produtos;
select * from setores;
select * from detalhesprodutos;
