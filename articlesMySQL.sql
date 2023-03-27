CREATE DATABASE articles;

USE articles;

-- ▓▓▓▓▓▓▓▓▓▓ TABLE ▓▓▓▓▓▓▓▓▓▓

CREATE TABLE article (
	id_article INT NOT NULL auto_increment,
    nom_article VARCHAR(50) NOT NULL,
    contenu_article VARCHAR(255) NOT NULL,
    
    PRIMARY KEY (id_article)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
