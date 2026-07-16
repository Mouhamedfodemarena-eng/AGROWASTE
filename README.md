CREATE DATABASE agrowaste;
USE agrowaste;

CREATE TABLE utilisateurs (

id INT AUTO_INCREMENT PRIMARY KEY,

nom VARCHAR(100) NOT NULL,

prenom VARCHAR(100) NOT NULL,

email VARCHAR(150) UNIQUE NOT NULL,

telephone VARCHAR(20),

mot_de_passe VARCHAR(255) NOT NULL,

role ENUM('producteur','acheteur','admin') NOT NULL,

date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE recoltes(

id INT AUTO_INCREMENT PRIMARY KEY,

utilisateur_id INT,

produit ENUM('Oignon','Pomme de terre'),

quantite DECIMAL(10,2),

prix DECIMAL(10,2),

description TEXT,

date_recolte DATE,

FOREIGN KEY(utilisateur_id)
REFERENCES utilisateurs(id)

);

CREATE TABLE commandes(

id INT AUTO_INCREMENT PRIMARY KEY,

acheteur_id INT,

recolte_id INT,

quantite DECIMAL(10,2),

statut ENUM('En attente','Acceptée','Livrée','Annulée'),

date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

FOREIGN KEY(acheteur_id)
REFERENCES utilisateurs(id),

FOREIGN KEY(recolte_id)
REFERENCES recoltes(id)

);