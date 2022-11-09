CREATE DATABASE pw2;
USE pw2;

CREATE TABLE users(
    id int primary key auto_increment,
    name varchar(45),
    email varchar(100),
    password varchar(45),
    cpf char(11),
    img varchar(45)
);
INSERT INTO users (name, email, password, cpf, img) VALUES
('Marco Aurélio', 'mementomori@outlook.com', '2604121', '12345678900', 'img/user1.png'),
('Dom Pedro II', 'braganza@mail.com', 'corsarebaixado', '77777777777', 'img/user2.png'),
('Thomas Shelby', 'birmingham@outlook.com', 'cenoura', '59383771344', 'img/user3.png'),
('Silas Kando', 'etec@escola.com', 'etec', '66677722254', 'img/user4.png'),
('Napoleão Bonaparte', 'revolucao@outlook.com', '157cm', '11111111111', 'img/user5.png');