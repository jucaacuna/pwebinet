CREATE DATABASE futbol5;

USE futbol5;


CREATE TABLE Clientes (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(20)
);

CREATE TABLE Canchas (
    id_cancha INT PRIMARY KEY AUTO_INCREMENT, ##--debe ser menor a 11
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(255),
    ubicacion VARCHAR(100) ##--podriamos poner una georeferenciacion con algun mapa.
);

CREATE TABLE Reservas (
    id_reserva INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    id_cancha INT,
    fecha_reserva DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    estado ENUM('pendiente', 'confirmada', 'cancelada') NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente),
    FOREIGN KEY (id_cancha) REFERENCES Canchas(id_cancha)
);

CREATE TABLE Horarios_Disponibles (
    id_horario INT PRIMARY KEY AUTO_INCREMENT,
    dia_semana ENUM('lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo') NOT NULL,
    hora_apertura TIME NOT NULL,
    hora_cierre TIME NOT NULL
);


CREATE TABLE Canchas_Horarios (
    id_cancha INT,
    id_horario INT,
    PRIMARY KEY(id_cancha, id_horario),
    FOREIGN KEY (id_cancha) REFERENCES Canchas(id_cancha),
    FOREIGN KEY (id_horario) REFERENCES Horarios_Disponibles(id_horario)
);