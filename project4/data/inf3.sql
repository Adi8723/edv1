CREATE DATABASE IF NOT EXISTS inf3;


USE inf3;

CREATE TABLE IF NOT EXISTS personen
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    anrede VARCHAR(30) NOT NULL,
    vorname VARCHAR(30) NOT NULL,
    nachname VARCHAR(30) NOT NULL,
    ort VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    passwort VARCHAR(50) NOT NULL
)DEFAULT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci';