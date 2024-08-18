CREATE DATABASE `db_crud`;

USE `db_crud`;

CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama` varchar(255) NOT NULL,
    `umur` int(11) NOT NULL,
    PRIMARY KEY (`id`)
);