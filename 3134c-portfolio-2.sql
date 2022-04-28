CREATE DATABASE info;

CREATE TABLE info.customers (
	customer_id INT(11),
	first_name VARCHAR (255),
	last_name VARCHAR (255),
	phone VARCHAR (255),
	email VARCHAR (255),
	street VARCHAR (255),
	city VARCHAR (255),
	state VARCHAR (255),
	zip_code VARCHAR (255),
    PRIMARY KEY(customer_id)
);

INSERT INTO info.customers(customer_id, first_name, last_name, phone, email, street, city, state, zip_code) VALUES(0, 'Jordan','Davis',NULL,'jordavis1998@gmail.com','8817 Dunes Ct. ','Kissimmee','FL',34747);
INSERT INTO info.customers(customer_id, first_name, last_name, phone, email, street, city, state, zip_code) VALUES(1, 'Olivia','Davis',NULL,'omdavis39@gmail.com','101 Jones St. ','Gainesville','FL',32601);
INSERT INTO info.customers(customer_id, first_name, last_name, phone, email, street, city, state, zip_code) VALUES(2, 'Tiffany','Hendrix',NULL,'1tiff@gmail.com','345 Dixie Ave N. ','Bremen','GA',30110);
INSERT INTO info.customers(customer_id, first_name, last_name, phone, email, street, city, state, zip_code) VALUES(3, 'Dana','Davis',NULL,'judsond506@lonza.com','2338 Troy Blvd. ','Troy','AL',24901);
INSERT INTO info.customers(customer_id, first_name, last_name, phone, email, street, city, state, zip_code) VALUES(4, 'Elle','Woods','(916) 381-6003','binga@harvard.edu','3000 Bark Trail ','Beverly Hills','CA',90210);