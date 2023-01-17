DROP database if exists airvibes;
CREATE database if not exists airvibes;
use airvibes ;
        


        

        
CREATE TABLE Article
(
  idArticle INT          NOT NULL AUTO_INCREMENT,
  titre     VARCHAR(50)  NOT NULL,
  libelle   VARCHAR(500) NOT NULL,
  date      DATE     NOT NULL,
  PRIMARY KEY (idArticle)
);

CREATE TABLE commenter
(
  idVisiteur INT          NOT NULL,
  idArticle  INT          NOT NULL,
  libelle    VARCHAR(500) NULL    
);

CREATE TABLE conseille
(
  idConseiller INT NOT NULL,
  idVisiteur   INT NOT NULL
);

CREATE TABLE Conseiller
(
  idConseiller    INT          NOT NULL AUTO_INCREMENT,
  nom             VARCHAR(50)  NOT NULL,
  prenom          VARCHAR(50)  NOT NULL,
  emailConseiller VARCHAR(120) NOT NULL,
  mdpConseiller   VARCHAR(15)  NOT NULL,
  PRIMARY KEY (idConseiller)
);

CREATE TABLE demander
(
  idVisiteur   INT         NOT NULL,
  idConseiller INT         NOT NULL,
  demande      BOOLEAN     NOT NULL,
  libelle      VARCHAR(50) NULL    
);

CREATE TABLE ecrire
(
  idConseiller INT NOT NULL,
  idArticle    INT NOT NULL
);

CREATE TABLE Partenaire
(
  IdPartenaire  INT          NOT NULL AUTO_INCREMENT,
  nomPartenaire VARCHAR(50)  NOT NULL,
  libelle       VARCHAR(120) NOT NULL,
  PRIMARY KEY (IdPartenaire)
);

CREATE TABLE payer
(
  idVisiteur INT NOT NULL,
  idVoyage   INT NOT NULL
);

CREATE TABLE proposer
(
  idVoyage     INT NOT NULL,
  IdPartenaire INT NOT NULL
);

CREATE TABLE Visiteur
(
  idVisiteur     INT          NOT NULL AUTO_INCREMENT,
  nom            VARCHAR(50)  NOT NULL,
  prenom         VARCHAR(50)  NOT NULL,
  age            INT          NOT NULL,
  genre          BOOLEAN      NOT NULL,
  adressePostale VARCHAR(300) NOT NULL,
  codePostale    VARCHAR(6)   NOT NULL,
  emailVisiteur  VARCHAR(120) NOT NULL,
  mdpVisiteur    VARCHAR(15)  NOT NULL,
  PRIMARY KEY (idVisiteur)
);

CREATE TABLE Voyage
(
  idVoyage  INT          NOT NULL AUTO_INCREMENT,
  nomVoyage VARCHAR(50)  NOT NULL,
  libelle   VARCHAR(120) NOT NULL,
  prix      FLOAT        NULL    ,
  PRIMARY KEY (idVoyage)
);

ALTER TABLE payer
  ADD CONSTRAINT FK_Visiteur_TO_payer
    FOREIGN KEY (idVisiteur)
    REFERENCES Visiteur (idVisiteur);

ALTER TABLE payer
  ADD CONSTRAINT FK_Voyage_TO_payer
    FOREIGN KEY (idVoyage)
    REFERENCES Voyage (idVoyage);

ALTER TABLE proposer
  ADD CONSTRAINT FK_Voyage_TO_proposer
    FOREIGN KEY (idVoyage)
    REFERENCES Voyage (idVoyage);

ALTER TABLE proposer
  ADD CONSTRAINT FK_Partenaire_TO_proposer
    FOREIGN KEY (IdPartenaire)
    REFERENCES Partenaire (IdPartenaire);

ALTER TABLE conseille
  ADD CONSTRAINT FK_Conseiller_TO_conseille
    FOREIGN KEY (idConseiller)
    REFERENCES Conseiller (idConseiller);

ALTER TABLE demander
  ADD CONSTRAINT FK_Visiteur_TO_demander
    FOREIGN KEY (idVisiteur)
    REFERENCES Visiteur (idVisiteur);

ALTER TABLE demander
  ADD CONSTRAINT FK_Conseiller_TO_demander
    FOREIGN KEY (idConseiller)
    REFERENCES Conseiller (idConseiller);

ALTER TABLE conseille
  ADD CONSTRAINT FK_Visiteur_TO_conseille
    FOREIGN KEY (idVisiteur)
    REFERENCES Visiteur (idVisiteur);

ALTER TABLE ecrire
  ADD CONSTRAINT FK_Conseiller_TO_ecrire
    FOREIGN KEY (idConseiller)
    REFERENCES Conseiller (idConseiller);

ALTER TABLE ecrire
  ADD CONSTRAINT FK_Article_TO_ecrire
    FOREIGN KEY (idArticle)
    REFERENCES Article (idArticle);

ALTER TABLE commenter
  ADD CONSTRAINT FK_Visiteur_TO_commenter
    FOREIGN KEY (idVisiteur)
    REFERENCES Visiteur (idVisiteur);

ALTER TABLE commenter
  ADD CONSTRAINT FK_Article_TO_commenter
    FOREIGN KEY (idArticle)
    REFERENCES Article (idArticle);

        
      