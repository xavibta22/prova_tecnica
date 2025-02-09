CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    direccion VARCHAR(255),
    dni VARCHAR(50),
    telefono VARCHAR(50)
);

INSERT INTO personas (nombre, direccion, dni, telefono) VALUES 
('Juan Pérez', 'Calle 123', '12345678A', '600123456'),
('Ana Gómez', 'Avenida 456', '87654321B', '699987654');