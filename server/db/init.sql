CREATE TABLE IF NOT EXISTS users (
 id INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 user VARCHAR (25) NOT NULL,
 email VARCHAR (50) NOT NULL UNIQUE,
 pass VARCHAR (255) NOT NULL,
 date DATETIME DEFAULT CURRENT_TIMESTAMP
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS entries (
 id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 user_id INT (255) UNSIGNED NOT NULL,
 title VARCHAR (50) NOT NULL,
 description MEDIUMTEXT,
 image VARCHAR (255),
 date DATETIME DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_E_U FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE = INNODB;

INSERT INTO users (user, email, pass)
  VALUES ('admin', 'admin@admin.com', '$2y$04$mGlJQ5opPa.hZ/.LKPZCP.7/Y8P/gEUSFPwrWm/P6105D7cg.coM.');

INSERT INTO entries(user_id, title, description, image)
  VALUES (1,'Empresa SAS','Somos una agencia digital, especializada en desarrollo de software y aplicaciones web y móviles, con énfasis en diseño de interfaz y experiencia de usuario. Creemos que el futuro está en el mundo digital y le apostamos nuestra energia y talento en fortalecer la presencia de nuestros clientes en los diferentes soportes y dispositivos que la tecnología facilita para hacer más efectivo sus procesos operativos y más sencilla la relación con sus usuarios finales.',''),
  (1, 'Tienda de Ropa XYZ', 'En Tienda de Ropa XYZ nos dedicamos a ofrecer lo mejor en moda para toda la familia. Contamos con una amplia variedad de prendas de alta calidad y a precios accesibles. Nuestro objetivo es que cada cliente encuentre su estilo ideal y se sienta cómodo con nuestras colecciones.', ''),
  (1, 'Cafetería Dulce Aroma', 'Cafetería Dulce Aroma es el lugar perfecto para disfrutar de un buen café en un ambiente acogedor. Ofrecemos una gran selección de bebidas, desde los clásicos espressos hasta innovadores frappés. Además, puedes acompañar tu bebida con nuestras deliciosas pastas y postres caseros.', ''),
  (1, 'Consultoría Financiera ABC', 'En Consultoría Financiera ABC brindamos asesoramiento personalizado para ayudar a nuestros clientes a tomar las mejores decisiones en sus inversiones y finanzas personales. Contamos con un equipo de expertos con años de experiencia en el sector financiero.', ''),
  (1, 'Estudio de Yoga Zen', 'Estudio de Yoga Zen es un espacio dedicado a la práctica del yoga y la meditación. Ofrecemos clases para todos los niveles, desde principiantes hasta avanzados, con el objetivo de promover el bienestar físico y mental de nuestros estudiantes.', ''),
  (1, 'Librería Mundo de Letras', 'Librería Mundo de Letras es el lugar ideal para los amantes de la lectura. Contamos con una extensa colección de libros de diferentes géneros y para todas las edades. Nuestro personal está siempre dispuesto a ayudar y a recomendar lecturas que se ajusten a tus intereses.', '');

