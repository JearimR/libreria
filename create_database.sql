-- Crear la base de datos LIBRERIA
CREATE DATABASE LIBRERIA;

-- Usar la base de datos LIBRERIA
USE LIBRERIA;

-- Crear la tabla USUARIOS
CREATE TABLE USUARIOS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    dirección VARCHAR(255) NOT NULL,
    teléfono VARCHAR(20)
);

-- Crear la tabla LIBROS
CREATE TABLE LIBROS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    título VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    cantidad INT NOT NULL
);

-- Crear la tabla CARRITO
CREATE TABLE CARRITO (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_usuario INT NOT NULL,
    ID_libro INT NOT NULL,
    cantidad INT NOT NULL,
    monto_total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (ID_usuario) REFERENCES USUARIOS(ID),
    FOREIGN KEY (ID_libro) REFERENCES LIBROS(ID)
);

-- Insertar datos de prueba en la tabla USUARIOS
INSERT INTO USUARIOS (nombre, email, contraseña, dirección, teléfono)
VALUES 
    ('Juan Pérez', 'juan@example.com', '123456', 'Calle Falsa 123', '987654321'),
    ('María López', 'maria@example.com', 'abcdef', 'Avenida Siempre Viva 742', '123456789');

-- Insertar datos de prueba en la tabla LIBROS
INSERT INTO LIBROS (título, autor, precio, cantidad)
VALUES 
    ('El Quijote', 'Miguel de Cervantes', 19.99, 10),
    ('Cien años de soledad', 'Gabriel García Márquez', 24.99, 5),
    ('1984', 'George Orwell', 14.99, 8),
    ('Donde los árboles cantan', 'Laura Gallego', 18.50, 15);

-- Insertar datos de prueba en la tabla CARRITO
INSERT INTO CARRITO (ID_usuario, ID_libro, cantidad, monto_total)
VALUES 
    (1, 1, 2, 39.98),
    (2, 3, 1, 14.99);
