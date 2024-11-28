CREATE DATABASE CunocDB;
USE CunocDB;

CREATE TABLE Carrera (
    id_carrera INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE Datos (
    id_datos INT AUTO_INCREMENT PRIMARY KEY,
    primer_nombre VARCHAR(100) NOT NULL,
    segundo_nombre VARCHAR(100),
    primer_apellido VARCHAR(100) NOT NULL,
    segundo_apellido VARCHAR(100),
    email VARCHAR(100) UNIQUE NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE Estudiante (
    id_estudiante INT AUTO_INCREMENT PRIMARY KEY,
    id_datos INT NOT NULL,
    id_carrera INT NOT NULL,
    carnet VARCHAR(9) UNIQUE NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE,
    FOREIGN KEY (id_datos) REFERENCES Datos(id_datos),
    FOREIGN KEY (id_carrera) REFERENCES Carrera(id_carrera)
);

CREATE TABLE Asesor (
    id_asesor INT AUTO_INCREMENT PRIMARY KEY,
    id_datos INT NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE,
    FOREIGN KEY (id_datos) REFERENCES Datos(id_datos)
);

CREATE TABLE Tesis (
    id_tesis INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE,
    estado VARCHAR(50) NOT NULL DEFAULT 'En progreso',
    id_estudiante INT NOT NULL,
    id_asesor INT NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE,
    FOREIGN KEY (id_estudiante) REFERENCES Estudiante(id_estudiante),
    FOREIGN KEY (id_asesor) REFERENCES Asesor(id_asesor)
);

CREATE TABLE Avances (
    id_avance INT AUTO_INCREMENT PRIMARY KEY,
    descripcion TEXT NOT NULL,
    fecha DATE NOT NULL,
    id_tesis INT NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE,
    FOREIGN KEY (id_tesis) REFERENCES Tesis(id_tesis)
);

CREATE TABLE Incidentes (
    id_incidente INT AUTO_INCREMENT PRIMARY KEY,
    descripcion TEXT NOT NULL,
    fecha DATE NOT NULL,
    id_tesis INT NOT NULL,
    activo BOOLEAN NOT NULL DEFAULT TRUE,
    FOREIGN KEY (id_tesis) REFERENCES Tesis(id_tesis)
);
