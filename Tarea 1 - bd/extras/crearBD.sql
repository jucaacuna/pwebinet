/*
No es necesario este script ya que se crea la BD desde el panel phpMyAdmin. Pero se deja aqui como referencia.
*/
CREATE DATABASE escuela;

USE escuela;

CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    edad INT,
    curso VARCHAR(255),
    email VARCHAR(255)
);

