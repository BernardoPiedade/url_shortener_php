DROP DATABASE IF EXISTS url_shortener;

CREATE DATABASE url_shortener;

USE url_shortener;

CREATE TABLE urls(
	id INT PRIMARY KEY AUTO_INCREMENT,
	url_original VARCHAR(255),
	url_short VARCHAR(255)
);
