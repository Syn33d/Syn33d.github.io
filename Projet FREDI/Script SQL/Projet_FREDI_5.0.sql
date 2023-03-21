CREATE DATABASE IF NOT EXISTS fredidb;

USE fredidb;

CREATE TABLE DEMANDEUR_REPRESENTANT_LEGAL(
   numDemandeur INT,
   adresseMail VARCHAR(50)  NOT NULL,
   nom VARCHAR(50) ,
   prenom VARCHAR(50) ,
   dateNaiss DATE,
   rue VARCHAR(50) ,
   cp VARCHAR(50) ,
   ville VARCHAR(50) ,
   mdp VARCHAR(50) , 
   transfert BOOLEAN,
   PRIMARY KEY(numDemandeur)
);

CREATE TABLE LIGNE_FRAIS_REPRESENTANT_LEGAL(
   numDemandeur INT,
   dateL DATE,
   numLigne VARCHAR(50) ,
   motif VARCHAR(50) ,
   trajet VARCHAR(50) ,
   coutTrajet DECIMAL(19,4),
   km DECIMAL(15,2)  ,
   coutPeage DECIMAL(19,4),
   coutRepas DECIMAL(19,4),
   coutHebergement DECIMAL(19,4),
   PRIMARY KEY(numDemandeur,dateL,numLigne),
   FOREIGN KEY(numDemandeur) REFERENCES DEMANDEUR_REPRESENTANT_LEGAL(numDemandeur)
);

CREATE TABLE LIGUE(
   numero VARCHAR(50) ,
   nom VARCHAR(50) ,
   sigle VARCHAR(50) ,
   president VARCHAR(50) ,
   rue VARCHAR(50) ,
   ville VARCHAR(50) ,
   cp VARCHAR(50) ,
   PRIMARY KEY(numero)
);

INSERT INTO LIGUE VALUES (45678,"Aiglon","AGL","Richard Holmes","543 Rue du Moulin","Toulon","83000"),(34690,"Le Joyaux","LJ","Martin Dubois","126 Rue du Bois Chantant","Marseille","13000"),(12547,"Sports & Plus","SP","Eloïse Guérin " ,"80 Rue du Vieux Chêne","Bordeaux","30072"),(76541,"Le sport au féminin","SF","Wendy Edmond","12 Rue du Citadin","Paris","70123");

CREATE TABLE ADHERENT(
   numeroLicence VARCHAR(50) ,
   prenom VARCHAR(50) ,
   nom VARCHAR(50) ,
   numero VARCHAR(50),
   PRIMARY KEY(numeroLicence),
   FOREIGN KEY(numero) REFERENCES LIGUE(numero)
);

CREATE TABLE ADHERENT_DEMANDEUR(
   numeroLicence VARCHAR(50) ,
   adresseMail VARCHAR(50) ,
   dateNaiss VARCHAR(50) ,
   rue VARCHAR(50) ,
   ville VARCHAR(50) ,
   cp VARCHAR(50) ,
   mdp VARCHAR(50) ,
   transfert BOOLEAN,
   FOREIGN KEY(numeroLicence) REFERENCES ADHERENT(numeroLicence)
);

CREATE TABLE LIGNE_FRAIS_ADHERENT(
   numeroLicence VARCHAR(50),
   dateL DATE,
   numLigne VARCHAR(50) ,
   motif VARCHAR(50) ,
   trajet VARCHAR(50) ,
   coutTrajet DECIMAL(19,4),
   km DECIMAL(15,2)  ,
   coutPeage DECIMAL(19,4),
   coutRepas DECIMAL(19,4),
   coutHebergement DECIMAL(19,4),
   PRIMARY KEY(numeroLicence,dateL,numLigne),
   FOREIGN KEY(numeroLicence) REFERENCES ADHERENT_DEMANDEUR(numeroLicence)
);

CREATE TABLE LIER(
   numeroLicence VARCHAR(50) ,
   numDemandeur INT,
   PRIMARY KEY(numeroLicence,numDemandeur),
   FOREIGN KEY (numDemandeur) REFERENCES DEMANDEUR_REPRESENTANT_LEGAL(numDemandeur),
   FOREIGN KEY(numeroLicence) REFERENCES ADHERENT(numeroLicence)
);


