CREATE DATABASE GestionnaireFut;

USE GestionnaireFut;
CREATE TABLE Nationalities(
   id INT AUTO_INCREMENT,
   name VARCHAR(250) NOT NULL UNIQUE,
   flag VARCHAR(250) NOT NULL UNIQUE,
   PRIMARY KEY(id)
);

CREATE TABLE Clubs(
   id INT AUTO_INCREMENT,
   name VARCHAR(250) NOT NULL UNIQUE,
   logo VARCHAR(250) NOT NULL UNIQUE,
   PRIMARY KEY(id),


);

CREATE TABLE Details_players(
   id INT AUTO_INCREMENT,
   pace INT NOT NULL,
   shooting INT NOT NULL,
   passing INT NOT NULL,
   dribbling INT NOT NULL,
   defending INT NOT NULL,
   physical INT NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE Details_GKs(
   id INT AUTO_INCREMENT,
   diving INT NOT NULL,
   handling INT NOT NULL,
   kicking INT NOT NULL,
   reflexes INT NOT NULL,
   speed INT NOT NULL,
   positioning INT NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE Players(
   id INT AUTO_INCREMENT,
   name VARCHAR(250) NOT NULL,
   rating INT NOT NULL,
   position_player ENUM('GK', 'CB', 'LB', 'RB', 'CDM', 'CM', 'CAM', 'RM', 'LM', 'RW', 'LW', 'ST') NOT NULL,
   photo VARCHAR(250) NOT NULL,
   id_nationality INT NOT NULL,
   id_club INT,
   id_detail_gk INT,
   id_detail_player INT,
   PRIMARY KEY(id),
   FOREIGN KEY(id_nationality) REFERENCES Nationalities(id),
   FOREIGN KEY(id_club) REFERENCES Clubs(id),
   FOREIGN KEY(id_detail_gk) REFERENCES Detail_GKs(id),
   FOREIGN KEY(id_detail_player) REFERENCES Detail_players(id)
);

