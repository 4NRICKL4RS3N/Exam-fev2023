create database takalo;
use takalo;

create table users
(
    idUser int primary key auto_increment,
    nom varchar(50),
    mail varchar(50),
    mdp varchar(25),
    etat ENUM('0','1')
);

create table category
(
    idCategory int primary key auto_increment,
    nom varchar(50)
);

create table objet
(
    idObjet int primary key auto_increment,
    idUser int,
    idCategory int,
    nom varchar(50),
    descri text,
    prix double,
    photo1 varchar(60),
    photo2 varchar(60),
    foreign key (idUser) references users(idUser),
    foreign key (idCategory) references category(idCategory)
);

create table echange
(
    idEchange int primary key auto_increment,
    idObjetTakalo int,
    idObjetUser int,
    HeureAjout datetime,
    HeureAccept datetime,
    Daty date,
    foreign key (idObjetTakalo) references objet(idObjet),
    foreign key (idObjetUser) references objet(idObjet)
);

insert into users values(null,'Teddy','teddy@gmail.com','1234','1');
insert into users values(null,'Anrick','anrick@gmail.com','1234','0');
insert into users values(null,'Santatra','gasy@gmail.com','1234','0');

insert into category values(null,'Sextoys');
insert into category values(null,'Electronic');
insert into category values(null,'High-Tech');
insert into category values(null,'Accessoire');

insert into objet values(null,2,4,'Sneakers',null,200000,'sneaker1','sneaker2');
insert into objet values(null,2,4,'T-Shirt',null,60000,'t-shirt1','t-shirt2');
insert into objet values(null,2,3,'I-PhoneX',null,2000000,'sneaker1','sneaker2');
insert into objet values(null,3,3,'Bicyclette',null,250000,'sneaker1','sneaker2');
insert into objet values(null,3,3,'Montre',null,100000,'sneaker1','sneaker2');

alter table echange drop column daty; 