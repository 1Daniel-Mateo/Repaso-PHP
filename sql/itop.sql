create database itop;
use itop;

create table envio(
	idTrasaccion int(40) not null auto_increment primary key,
    nombre varchar(40) not null, 
    centro varchar(40) not null,
    dereccion varchar(40) not null
);

create table aparato(
    idActivo int(40) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NSerial varchar(20) not null,
    placa int not null,
    descripElemento varchar(60) not null,
    marca varchar(40) not null,
    modelo varchar(40) not null,
    descripAdicional varchar(60) not null
);

create table entrega(
    identrega  int(40) not null auto_increment primary key,
    codigo varchar(40) not null,
    revision int not null,
    fecha date not null, 
    observaciones varchar(40) not null
);

create table resivido(
	idResivo int(40) not null auto_increment primary key,
    nombre varchar(40) not null, 
    centro varchar(40) not null,
    dereccion varchar(40) not null
);

create table persona(
	idtransaccion int(40) not null auto_increment primary key,
    nombre varchar(20) not null,
    cargo varchar(20) not null,
    telefono int(10) not null,
    fechaYhora datetime not null
);

create table documento(
    idDocumento int(40) not null auto_increment primary key,
    documento varchar(40) not null,
    fecha date not null, 
    vigencia date not null
);




