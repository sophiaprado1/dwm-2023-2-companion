create schema `companion`;

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