CREATE DATABASE IF NOT EXISTS knihovna;
USE knihovna;

CREATE TABLE IF NOT EXISTS knihy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazev VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    rok INT NOT NULL
);

INSERT INTO knihy (nazev, autor, rok) VALUES
('1984', 'George Orwell', 1949),
('Malý princ', 'Antoine de Saint-Exupéry', 1943),
('Kronika ptáčka na klíček', 'Haruki Murakami', 1994);