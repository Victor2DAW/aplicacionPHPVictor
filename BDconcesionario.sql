
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;
	

DROP TABLE IF EXISTS vehiculos;

CREATE TABLE vehiculos 
(
		Modelo varchar(20) primary key, 
		Motor varchar(20), 
		Color varchar(20), 
		Combustible varchar(20), 
		Precio int, 
		Marca varchar(20)
);

SELECT * FROM vehiculos;
