<?php
    die();
?>

CREATE DATABASE clover
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci
;

USE clover;

CREATE TABLE clovers (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);

CREATE TABLE deeds (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    act VARCHAR(1000),
    recipient VARCHAR(255),
    age SMALLINT(2),
    location VARCHAR(1000),
    affect VARCHAR(1000),
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);

CREATE USER 'clover'@'%' IDENTIFIED BY 'Cl4v2r';
GRANT ALL PRIVILEGES ON clover.* TO 'clover'@'%' WITH GRANT OPTION;
