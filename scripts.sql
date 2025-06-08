USE app_db;

CREATE TABLE pessoas (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	idade INT NOT NULL,
	email VARCHAR(200)
);

INSERT INTO pessoas(nome, idade, email) VALUES('Irineu', 14, 'irineu@gmail.com');

INSERT INTO pessoas (nome, idade, email) VALUES ('Joana Silva', 28, 'joana.silva@email.com');

INSERT INTO pessoas (nome, idade, email) VALUES ('Carlos Mendes', 35, 'carlos.mendes@email.com');

INSERT INTO pessoas (nome, idade, email) VALUES ('Ana Costa', 22, 'anac@gmail.com');


SELECT * FROM pessoas;