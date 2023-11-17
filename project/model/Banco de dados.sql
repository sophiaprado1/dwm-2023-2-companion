create schema `companion`;

use companion;

create table calendar(
	id integer not null auto_increment primary key,
    title varchar(45),
    color varchar(45),
    e_start datetime,
    e_end datetime
);

insert into calendar(title, color, e_start, e_end) values
("Evento 1", "#3575A2", "2023-10-17 10:00:00", "2023-10-17 12:00:00"),
("Evento 2", "#888888", "2023-10-18 10:00:00", "2023-10-21 10:00:00"),
("Evento 3", "#3575A2", "2023-10-19 10:00:00", "2023-10-20 10:00:00"),
("Evento 4", "#888888", "2023-10-20", "2023-10-20"),
("Evento 5", "#3575A2", "2023-10-21", "2023-10-21"),
("Evento 6", "#888888", "2023-10-10", "2023-10-11");

create table horarios(
	id integer not null auto_increment primary key,
    dia integer not null,
    periodo integer not null,
    hora integer not null,
    materia varchar(45) not null,
    turma varchar(45) not null,
    professor varchar(45) not null,
    sala varchar(45) not null,
    bloco varchar(45) not null
);

insert into horarios(dia, periodo, hora, materia, turma, professor, sala, bloco) values
(1, 1, 1, "Lógica de Programação", "Turma B", "Rafael", "Laboratório 110", "Bloco III"),
(2, 1, 1, "Empreendedorismo e Inovação", "Turma A", "Wosley", "Sala 207", "Bloco III"),
(3, 1, 1, "Lógica de Programação", "Turma A", "Juliana", "Laboratório 110", "Bloco III"),
(4, 1, 1, "Lógica de Programação", "Turma B", "Rafael", "Laboratório 110", "Bloco III"),
(4, 1, 1, "Introdução a Ciência da Computação", "Turma B", "Juliana", "Laboratório 104", "Bloco III"),
(5, 1, 1, "Lógica de Programação", "Turma A", "Juliana", "Laboratório 110", "Bloco III"),
(5, 1, 1, "Lógica de Programação", "Eng de Alimentos", "Prof. do Câmpus", "Laboratório 104", "Bloco III");

create table tipoDesc(
	id integer not null auto_increment primary key,
    descr varchar(45)
);

create table Contatos(
	id integer not null auto_increment primary key,
    tipo integer not null,
    posição varchar(45) not null,
    nome varchar(45) not null,
    telefone varchar(45),
    email varchar(45) not null
);

insert into tipoDesc(descr) values
("Centro Acadêmico"),
("Professores"),
("Coordenação"),
("Ouvidoria"),
("Secretaria Acadêmica");

ALTER TABLE Contatos ADD CONSTRAINT tipo FOREIGN KEY (tipo) REFERENCES tipoDesc(id);

insert into Contatos(tipo, posição, nome, telefone, email) values
("1", "Presidente", "Fulano", null, "fulano@mail.uft.edu.br"),
("2", "Professor", "Beutrano", null, "beutrano@mail.uft.edu.br");

create table users(
	id integer not null auto_increment primary key,
	nome varchar(45),
    usuario varchar(45),
    senha varchar(45),
    permissao integer);
    
insert into users(nome, usuario, senha, permissao) values
("Luiz", "LuFi1227", "senha", 0);
    
create table linksUteis(
	id integer not null auto_increment primary key,
    links varchar(50) not null,
    cores varchar(20) not null,
    titulo varchar(100) not null,
    descricao varchar(150) not null
);

insert into linksUteis(links, cores, titulo, descricao) values
("https://palmas.uft.edu.br/sisma/calendario/", "verde", "Calendário Acadêmico e Administrativo 2023", "Calendário Acadêmico e Administrativo 2023 para os cursos de Graduação e Pós-Graduação da UFT."),
("https://docs.uft.edu.br/share/s/g9rL9JhXTvqaJrYNErHbQQ", "azul", "Atualização do PPC de Ciência da Computação, Câmpus de Palmas (PPC na pág. 39 do PDF)", "Dispõe sobre a atualização do Projeto Pedagógico do Curso (PPC) de Bacharelado em Ciência da Computação, Câmpus de Palmas.")
;


update linksUteis set cores = "lightgreen" where cores = "verde"
update linksUteis set cores = "lightblue" where cores = "azul"

create table cardapioRU(
	id integer not null auto_increment primary key,
    dia integer not null,
    dataDia datetime,
    prato varchar(355),
    tipo binary
    );
    
insert into cardapioRU(dia, dataDia, prato, tipo) values
("1", "30/11/2023", "Arroz, feijão, carne e salada", 0);

select * from cardapioRU;

