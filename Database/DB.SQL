CREATE DATABASE Spice;
USE Spice;


---------------------------------------------
user table
---------------------------------------------

CREATE TABLE users (
    id INT(3) NOT NULL AUTO_INCREMENT,
    username VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    email VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    mypassword VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);


---------------------------------------------
products table
---------------------------------------------

CREATE TABLE `spice`.`products` (
    `id` INT(3) NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(200) NOT NULL , 
    `image` VARCHAR(200) NOT NULL , 
    `price` INT(3) NOT NULL , 
    `file` VARCHAR(200) NOT NULL , 
    `description` TEXT NOT NULL , 
    `status` INT(1) NOT NULL DEFAULT '1' , 
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;
