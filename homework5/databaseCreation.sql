create database taskmanager;

create table user(
id bigint PRIMARY KEY AUTO_INCREMENT,
name varchar(100) not null,
surname varchar(100),
isLogged bool,
birthdate date,
lastLogin date,
email varchar(200),
pass varchar(200)
); 

create table task(
id bigint PRIMARY KEY AUTO_INCREMENT,
taskHeader text not null,
taskText text not null,
userId bigint,
isCompleted bool,
creationDate date not null,
complitionDate date,
deadlineDate date not null
);