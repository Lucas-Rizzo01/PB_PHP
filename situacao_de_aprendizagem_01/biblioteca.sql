create database biblioteca;
use biblioteca;

create table livros(
	ID integer auto_increment primary key,
    TITULO varchar(255),
    AUTOR varchar(255),
    ANO_PUBLICACAO date,
    EDITORA varchar(255)
);

select * from livros;