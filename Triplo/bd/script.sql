CREATE DATABASE IF NOT EXISTS loja;
USE loja;

CREATE OR REPLACE TABLE jogos(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    nome varchar(55) NOT NULL,
    foto longtext NOT NULL,
    descricao longtext NOT NULL,
    tipo varchar(30) NOT NULL,
    req longtext NOT NULL,
    lancamento DATE,
    critica int NOT NULL,
    preco decimal (7,2) not null,
    link text NOT NULL,
    destaque ENUM('Sim', 'Não'),
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- create or replace table index(
--     id int primary key auto_increment,
--     fb1 longtext NOT NULL,
--     fb2 longtext NOT NULL,
--     fb3 longtext NOT NULL,
--     fb4 longtext NOT NULL,
--     f1 longtext NOT NULL,
--     f2 longtext NOT NULL,
--     f3 longtext NOT NULL,
--     f4 longtext NOT NULL,
--     f5 longtext NOT NULL,
--     f6 longtext NOT NULL,
--     f7 longtext NOT NULL,
--     f8 longtext NOT NULL,
--     f9 longtext NOT NULL,
--     f10 longtext NOT NULL,
--     f11 longtext NOT NULL,
--     f12 longtext NOT NULL,
--     created_at TIMESTAMP not null default CURRENT_TIMESTAMP 
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


create or replace table cliente(
    id int primary key auto_increment,
    nome varchar (250) not null,
    email varchar(250) not null unique,
    senha varchar(255) not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE OR REPLACE TABLE login(
    id int PRIMARY KEY AUTO_INCREMENT,
    email varchar(250) NOT NULL unique,
    senha varchar(255) NOT NULL,
    created_at TIMESTAMP NOT NULL default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO login(email, senha) VALUES ('admin@triplo.com', md5('admin@123'));