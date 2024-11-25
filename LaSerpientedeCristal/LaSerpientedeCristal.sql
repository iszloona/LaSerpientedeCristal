CREATE DATABASE laserpientedecristal_bd;
USE laserpientedecristal_bd;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15),
    documento VARCHAR(20) NOT NULL
);

CREATE TABLE quartos (
    id_quarto INT AUTO_INCREMENT PRIMARY KEY,
    numero INT NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    preco_quarto DECIMAL(10, 2) NOT NULL
);

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_clientefk INT NOT NULL,
    id_quartofk INT NOT NULL,
    data_checkin DATE NOT NULL,
    data_checkout DATE NOT NULL,
    FOREIGN KEY (id_clientefk) REFERENCES cliente(id_cliente) ON DELETE NO ACTION,
    FOREIGN KEY (id_quartofk) REFERENCES quartos(id_quarto) ON DELETE NO ACTION
);

INSERT INTO cliente (nome, email, telefone, documento) 
VALUES 
('João Silva', 'joao.silva@email.com', '11987654321', '12345678900'),
('Maria Oliveira', 'maria.oliveira@email.com', '11976543210', '98765432100'),
('Carlos Pereira', 'carlos.pereira@email.com', '11965432109', '11223344556');

INSERT INTO quartos (numero, tipo, preco_quarto) 
VALUES 
(101, 'Simples', 150.00),
(102, 'Luxo', 250.00),
(103, 'Suíte Master', 400.00);

-- Ajuste os IDs de referência para os valores corretos gerados automaticamente.
INSERT INTO reservas (id_clientefk, id_quartofk, data_checkin, data_checkout) 
VALUES 
(1, 1, '2024-12-01', '2024-12-05'),
(2, 2, '2024-12-10', '2024-12-15'),
(3, 3, '2024-12-20', '2024-12-25');

SELECT 
    r.id AS id_reserva,
    q.tipo AS tipo_quarto,
    c.id_cliente AS id_cliente,
    c.nome AS nome_cliente
FROM 
    reservas AS r
INNER JOIN cliente AS c ON r.id_clientefk = c.id_cliente
INNER JOIN quartos AS q ON r.id_quartofk = q.id_quarto;

CREATE VIEW view_reservas AS
SELECT 
    r.id AS id_reserva,
    q.tipo AS tipo_quarto,
    c.id_cliente AS id_cliente,
    c.nome AS nome_cliente
FROM 
    reservas AS r
INNER JOIN cliente AS c ON r.id_clientefk = c.id_cliente
INNER JOIN quartos AS q ON r.id_quartofk = q.id_quarto;

SELECT * FROM view_reservas;

ALTER TABLE reservas
MODIFY COLUMN id_clientefk INT NULL;

ALTER TABLE reservas
MODIFY COLUMN id_quartofk INT NULL;

