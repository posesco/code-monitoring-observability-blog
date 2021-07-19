# Creacion de la BD

DROP DATABASE IF EXISTS proyecto_ha;
CREATE DATABASE IF NOT EXISTS proyecto_ha character set utf8mb4;
USE proyecto_ha;

# Creacion de la tablas
CREATE TABLE IF NOT EXISTS usuarios (
 id INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 usuario VARCHAR (25) NOT NULL,
 email VARCHAR (25) NOT NULL UNIQUE,
 pass VARCHAR (255) NOT NULL,
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS entradas (
 id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 usuario_id INT (255) UNSIGNED NOT NULL,
 titulo VARCHAR (50) NOT NULL,
 descripcion MEDIUMTEXT,
 imagen VARCHAR (255),
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_E_U FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE = INNODB;

# Insercion de Datos

INSERT INTO usuarios (usuario, email, pass)
  VALUES ('admin', 'admin@admin.com', '$2y$04$mGlJQ5opPa.hZ/.LKPZCP.7/Y8P/gEUSFPwrWm/P6105D7cg.coM.');

INSERT INTO entradas(usuario_id, titulo, descripcion, imagen)
  VALUES (1,'Empresa SAS','Somos una agencia digital, especializada en desarrollo de software y aplicaciones web y móviles, con énfasis en diseño de interfaz y experiencia de usuario. Creemos que el futuro está en el mundo digital y le apostamos nuestra energia y talento en fortalecer la presencia de nuestros clientes en los diferentes soportes y dispositivos que la tecnología facilita para hacer más efectivo sus procesos operativos y más sencilla la relación con sus usuarios finales.','');
