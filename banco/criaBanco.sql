DROP DATABASE IF EXISTS IFSP;
CREATE DATABASE IF NOT EXISTS IFSP;

USE IFSP;
CREATE TABLE Cidade(
	id     INT AUTO_INCREMENT,
	nome   VARCHAR(50),
    estado VARCHAR(02),
    PRIMARY KEY (id) );
CREATE TABLE Cliente(
	id 	      INT AUTO_INCREMENT,
    nome      VARCHAR(50) ,
    id_ci   INT,
    PRIMARY KEY (id),
    CONSTRAINT FK_ClienteCidade FOREIGN KEY (id_ci) REFERENCES Cidade(id) );
INSERT INTO Cidade VALUES
	(1, 'Birigui', 'SP'),
    (2, 'Bilac', 'SP'),
    (3, 'Betim', 'MG'),
	(4, 'Ipojuca', 'PE'),
	(5, 'Blumenau', 'SC');
    
SELECT * FROM Cidade WHERE estado = 'SP';

INSERT INTO Cliente VALUES
	(1, 'Aurora', 4),
    (2, 'Breno', 3),
    (3, 'Carolaine', 1),
    (4, 'Dalberto', 5),
    (5, 'Evellyn', 2);
    
SELECT * FROM Cliente WHERE id = 1;

UPDATE Cidade SET nome = 'Bauru' WHERE id = 1;

UPDATE Cliente SET nome = 'Cássio Stersi' WHERE id = 1;

UPDATE Cliente SET id_ci = 1 WHERE id_ci = 4;

DELETE FROM Cidade WHERE id = 4;

DELETE FROM Cliente WHERE id = 1;