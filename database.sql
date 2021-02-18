CREATE DATABASE IF NOT EXISTS trucorpdb;
USE trucorpdb;
CREATE TABLE users (
	id int NOT NULL PRIMARY KEY,
	nama varchar (255) NOT NULL,
	kantor varchar (255) NOT NULL
	);

INSERT INTO users (id, nama, kantor)
VALUES
(1, 'Steven', 'yeet'),
(2, 'Jose', 'copet');
