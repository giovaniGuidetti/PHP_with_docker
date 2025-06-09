CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	idade INT NOT NULL,
	email VARCHAR(200) UNIQUE
);

CREATE TABLE notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(300) NOT NULL,
    created DATETIME NOT NULL,
    note TEXT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO users (nome, idade, email)
VALUES
('Irineu', 14, 'irineu@gmail.com'),
('Joana Silva', 28, 'joana.silva@email.com'),
('Carlos Mendes', 35, 'carlos.mendes@email.com'),
('Ana Costa', 22, 'anac@gmail.com');

INSERT INTO notes (user_id, title, created, note)
VALUES
(1, 'Primeira anotação', NOW(), 'Esta é a primeira anotação do usuário 1.'),
(2, 'Anotação importante', NOW(), 'Esta anotação é crítica para o projeto.'),
(1, 'Lembrete de reunião', NOW(), 'Reunião agendada para sexta-feira às 14h.'),
(3, 'Ideias para o sistema', NOW(), 'Adicionar suporte a múltiplos idiomas.'),
(2, 'Notas da aula', NOW(), 'Estudar SQL e modelagem relacional.');


SELECT * FROM users;
SELECT * FROM notes;