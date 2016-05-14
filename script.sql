CREATE DATABASE app_acordes;
USE app_acordes;

CREATE TABLE rol (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) NOT NULL,
  PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
CREATE TABLE cuenta (
  id int(11) NOT NULL AUTO_INCREMENT,
  correo varchar(100) NOT NULL,
  contrasenia varchar(200) NOT NULL,
  PRIMARY KEY (id)
) DEFAULT CHARSET=utf8 ;


CREATE TABLE usuario (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  apodo varchar(50) NOT NULL,
  cuenta_id  int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (cuenta_id) REFERENCES cuenta (id) ON DELETE CASCADE ON UPDATE CASCADE
  ) DEFAULT CHARSET=utf8 ;

 

-- --------------------------------------------------------

CREATE TABLE usuario_rol (
  id int(11) NOT NULL AUTO_INCREMENT,
  rol_id int(11) NOT NULL,
  usuario_id int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (rol_id) REFERENCES rol (id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON DELETE CASCADE ON UPDATE CASCADE

) DEFAULT CHARSET=utf8 ;


-- ----------------------------------------------------------

INSERT INTO rol VALUES (1, 'administrador');
INSERT INTO rol VALUES (2, 'miembro');

INSERT INTO cuenta  VALUES (1, 'joseluisr@gmail.com', '12345');
INSERT INTO cuenta  VALUES (2, 'gabrielvargas@gmail.com', 'abcde');

INSERT INTO usuario VALUES (1, 'jose luis', 'rivera ibarra' , 'pollo', 1);
INSERT INTO usuario VALUES (2, 'gabriel fernando', 'vargas arias' , 'niche', 2);

  
INSERT INTO usuario_rol VALUES (1, 1, 1);
INSERT INTO usuario_rol VALUES (2, 2, 2);