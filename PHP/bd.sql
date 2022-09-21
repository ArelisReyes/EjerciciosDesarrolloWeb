CREATE TABLE FormularioContacto (
    DatosPersonalesID int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50),
    email varchar(50),
    telefono varchar(50),
    sitioWeb varchar(100),
    asunto varchar(50), 
    mensaje varchar(100)
);

