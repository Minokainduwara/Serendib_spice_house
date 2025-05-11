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


INSERT INTO `products` (`id`, `name`, `image`, `price`, `file`, `description`, `status`, `created_at`) VALUES (NULL, 'Cinnamon Stick Bulk Package', 'cinnamon.jpeg', '20', 'file.pdf', 'Enjoy the true cinnamon flavor from our Ceylon Cinnamon Stick Bulk Package, filled with 5kg of the best cinnamon sticks being sourced directly from our plantations. Each stick is made from real Ceylon cinnamon (Cinnamomum verum / Cinnamomum zeylanicum), assuring that you receive only the best spice.', '1', current_timestamp()), (NULL, 'Pepper', 'pepper.jpeg', '10', 'file2.pdf', 'Discover the powerful flavor that comes from Sri Lankan Black Pepper, available in bulk. These little, dried berries from the Piper nigrum vine are completely selected to assure the greatest quality and strongest flavor.', '1', current_timestamp())
