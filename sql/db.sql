CREATE DATABASE registration_db;

CREATE TABLE registrants (
    id INT(11) AUTO_INCREMENT PRIMARY KRY,
    first_name VARCHAR(50) NOT NULL,
    username VARCHAR(60) NOT NULL,
    email VARCHAR(50) NO NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password)
VALUES ('ADMIN', '');