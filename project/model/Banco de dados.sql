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
