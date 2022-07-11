# crud
create database crud;
use crud;

create table persona(
  codigo int auto_increment primary key,
  nombre varchar(100),
  edad int,
  signo varchar(20)
);

INSERT INTO persona(nombre, edad, materia) VALUES 
('antonio','34','matematicas'),
('tomas','22','ciencias'),
('javier','5','fisica')
