CREATE DATABASE futbol5;

USE futbol5;


CREATE TABLE Clientes (
    idCliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL

);

CREATE TABLE Canchas (
    idCancha INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(255),
    descripcionImagen VARCHAR(255),
    imagen VARCHAR(255),
    gps POINT -- Para una futura implementacion: nos gustaria guardar la ubicacion de cada cancha para luego desplegar un mapa en el frontend.
);

CREATE TABLE Reservas (
    id_reserva INT PRIMARY KEY AUTO_INCREMENT,
    idCliente INT,
    idCancha INT,
    fecha_reserva DATE NOT NULL,
    horario ENUM('16:00-17:00','17:00-18:00','18:00-19:00','19:00-20:00','20:00-21:00','21:00-22:00','22:00-23:00') NOT NULL, 
    FOREIGN KEY (idCliente) REFERENCES Clientes(idCliente),
    FOREIGN KEY (idCancha) REFERENCES Canchas(idCancha)
);
