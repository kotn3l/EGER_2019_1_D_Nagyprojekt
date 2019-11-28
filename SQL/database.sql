CREATE SCHEMA `kviz` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `kviz`.`users` (
   `id` INT NOT NULL AUTO_INCREMENT ,
   `username` VARCHAR(20) NOT NULL ,
   `password` INT(10) NOT NULL );
