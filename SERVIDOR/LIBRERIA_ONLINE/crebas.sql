/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     16/8/2024 20:35:23                           */
/*==============================================================*/


drop table if exists Libro;

drop table if exists Paginas;

/*==============================================================*/
/* Table: Libro                                                 */
/*==============================================================*/
create table Libro
(
   idLibro              int not null,
   nombre               varchar(120),
   imagen               varchar(255),
   ruta                 varchar(455),
   calificacion         int,
   eliminacion          bool,
   primary key (idLibro)
);

/*==============================================================*/
/* Table: Paginas                                               */
/*==============================================================*/
create table Paginas
(
   idLibro              int,
   idPaginas            int,
   paginasTotal         int,
   paginaAcual          int
);

alter table Paginas add constraint FK_Tiene foreign key (idLibro)
      references Libro (idLibro) on delete restrict on update restrict;

