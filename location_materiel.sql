CREATE TABLE membre (
    id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    civilite ENUM('Mr', 'Mme') NOT NULL,
    ville VARCHAR(255) NOT NULL,
    code_postal VARCHAR(10) NOT NULL,
    adresse TEXT NOT NULL,
    statut ENUM('admin', 'client') NOT NULL DEFAULT 'client'
);

CREATE TABLE produit (
    id INT PRIMARY KEY AUTO_INCREMENT,
    reference VARCHAR(50) NOT NULL UNIQUE,
    categorie VARCHAR(100) NOT NULL,
    focale VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    description TEXT,
    photo VARCHAR(255),
    prix DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);