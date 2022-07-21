CREATE DATABASE IF NOT EXISTS loja;
USE loja;

CREATE OR REPLACE TABLE jogos(
    id int (11) PRIMARY KEY AUTO_INCREMENT,
    nome varchar(55) NOT NULL,
    foto longtext NOT NULL,
    descricao text NOT NULL,
    lancamento date NOT NULL,
    critica int (2) NOT NULL,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE OR REPLACE TABLE login(
    id int (11) PRIMARY KEY AUTO_INCREMENT,
    email varchar(250) NOT NULL unique,
    senha varchar(255) NOT NULL,
    created_at TIMESTAMP NOT NULL default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO login(email, senha) VALUES ('admin@loja.com.br', md5('admin@123'));