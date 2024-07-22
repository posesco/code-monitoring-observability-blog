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

/* user: admin pass:admin */
INSERT INTO users (user, email, pass)
  VALUES ('admin', 'admin@admin.com', '$2y$04$NIsR1mY0Fb9Ycwy6gzDTO.ZDfsB6skhDO4/jeAhnzQBtuySCAwpQ6');

INSERT INTO entries(user_id, title, description, image)
  VALUES 
  (1, 'Restaurante Sabor del Mar', 'Restaurante Sabor del Mar se especializa en ofrecer los mejores platos de mariscos frescos en un ambiente elegante y relajante. Nuestro menú incluye desde ceviches frescos hasta exquisitos platillos gourmet con mariscos.', ''),
  (1, 'Agencia de Viajes Aventura', 'Agencia de Viajes Aventura ofrece paquetes turísticos únicos para quienes buscan explorar destinos exóticos y emocionantes. Nuestro equipo de expertos te ayudará a planificar cada detalle de tu viaje para una experiencia inolvidable.', ''),
  (1, 'Gimnasio Fitness Plus', 'Gimnasio Fitness Plus es tu destino para alcanzar tus metas de salud y condición física. Ofrecemos una amplia gama de equipos modernos, clases grupales y entrenadores personales altamente capacitados.', ''),
  (1, 'Taller de Cerámica Arte y Diseño', 'En el Taller de Cerámica Arte y Diseño, enseñamos la belleza de la cerámica a través de clases y talleres para todos los niveles. Ven a explorar tu creatividad y llevarte a casa piezas únicas hechas a mano.', ''),
  (1, 'Centro de Belleza Estilo Chic', 'Centro de Belleza Estilo Chic ofrece servicios completos de peluquería, estética y bienestar. Desde cortes de cabello y coloración hasta tratamientos faciales y masajes, nuestro objetivo es resaltar tu belleza y hacerte sentir renovado.', ''),
  (1, 'Escuela de Música Armonía', 'Escuela de Música Armonía proporciona educación musical de alta calidad para estudiantes de todas las edades. Ofrecemos clases de diversos instrumentos y canto, adaptadas a cada nivel y estilo musical.', ''),
  (1, 'Consultora de Marketing Digital Innovate', 'Consultora de Marketing Digital Innovate se dedica a ayudar a empresas a aumentar su presencia online a través de estrategias personalizadas de marketing digital. Desde SEO hasta campañas en redes sociales, estamos aquí para potenciar tu marca.', ''),
  (1, 'Veterinaria AnimalCare', 'Veterinaria AnimalCare ofrece atención médica integral para tus mascotas. Nuestro equipo de veterinarios está comprometido con el bienestar de los animales, brindando desde consultas de rutina hasta emergencias.', ''),
  (1, 'Servicios de Mudanza Rápida y Segura', 'Servicios de Mudanza Rápida y Segura garantiza una transición sin estrés para tu mudanza. Nos encargamos de todos los detalles logísticos para que tu mudanza sea eficiente y segura.', ''),
  (1, 'Cine y Entretenimiento StarLight', 'Cine y Entretenimiento StarLight ofrece una experiencia cinematográfica de primer nivel con proyecciones de las últimas películas en un ambiente moderno y confortable. Además, disfruta de nuestras promociones especiales y eventos temáticos.', '');

