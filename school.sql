-- database 

-- table 

-- columns

Create Database `loginSystem`;

CREATE TABLE `USERS` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL , 
    `email` VARCHAR(200) NOT NULL , 
    `gender` CHAR(6) NOT NULL ,
    `dob` DATE NOT NULL,
    `age` TINYINT UNSIGNED DEFAULT 0
    );

INSERT INTO `USERS` (`name`,`email`,`gender`,`dob`,`age`) VALUES
('John Doe','john@gmail.com','male','1998-01-01' , 27),
('mary','mary@gmail.com','female','1998-05-01' , 26),
('Jame','jame@gmail.com','male','1998-08-01' , 23);

SELECT * FROM `USERS`;
SELECT `name`,`email`,`gender`,`dob`,`age` FROM `USERS`;
