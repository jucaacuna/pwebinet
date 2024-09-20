CREATE DATABASE futbol5;

USE futbol5;


CREATE TABLE Clientes (
    ciCliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) UNIQUE NOT NULL
);

CREATE TABLE Canchas (
    idCancha INT PRIMARY KEY AUTO_INCREMENT, ##--debe ser menor a 11
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(255),
    gps POINT
);

CREATE TABLE Reservas (
    id_reserva INT PRIMARY KEY AUTO_INCREMENT,
    ciCliente INT,
    idCancha INT,
    fecha_reserva DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    FOREIGN KEY (ciCliente) REFERENCES Clientes(ciCliente),
    FOREIGN KEY (idCancha) REFERENCES Canchas(idCancha)
);
