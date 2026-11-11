
CREATE DATABASE IF NOT EXISTS evaluacion_web;
USE evaluacion_web;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria VARCHAR(60) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

INSERT INTO productos (nombre, categoria, precio) VALUES
('Mouse inalambrico', 'Accesorios', 65.00),
('Teclado mecanico', 'Accesorios', 180.00),
('Monitor 24 pulgadas', 'Pantallas', 620.00),
('Memoria USB 64 GB', 'Almacenamiento', 38.00),
('Audifonos Bluetooth', 'Accesorios', 95.00);
