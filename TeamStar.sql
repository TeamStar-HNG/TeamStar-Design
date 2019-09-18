-- CREATE DATABASE teamstar;
CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `firstname` varchar(50) NOT NULL,
 `lastname` varchar(50) NOT NULL,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(250) NOT NULL,
 `created_at` timestamp NOT NULL,
 PRIMARY KEY (`id`)
 );