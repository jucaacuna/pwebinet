CREATE DATABASE futbol5;

USE futbol5;


CREATE TABLE Clientes (
    idCliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) UNIQUE NOT NULL
);

CREATE TABLE Canchas (
    idCancha INT PRIMARY KEY AUTO_INCREMENT, ##--debe ser menor a 11
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(255),
    imagen VARCHAR(255),
    gps POINT
);

CREATE TABLE Reservas (
    id_reserva INT PRIMARY KEY AUTO_INCREMENT,
    idCliente INT,
    idCancha INT,
    fecha_reserva DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES Clientes(idCliente),
    FOREIGN KEY (idCancha) REFERENCES Canchas(idCancha)
);
