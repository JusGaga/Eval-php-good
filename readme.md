# Projet Site adoptions animaux
---

## Descriptions du projets

Le projet consiste à réaliser un site, à base de Php, pour adopter des animaux.

Nous devons réaliser ce projet en méthode agile.

Nous avons eu quelques lignes directrices telles que:

* Connection / Deconnection

(Gérer la connexion déconnexion grâce aux sessions)

* Enregistrement de compte

(Gérer l'enregistrement de compte)

* Panel admin

(Gérez un pannel administratif qui vous permettra d'ajouter les animaux ou accessoires que vous pouvez acheter ou adopter.)

* Gestion Utilisateur

(Permettre à l'utilisateur de pouvoir modifier son profil et voir également ses adoptions et ses achats)

---
## MCD du projet site adoption animaux
![MCD](https://user-images.githubusercontent.com/59624625/155018275-28d68dca-1857-49c8-8f94-de933c224899.png)



---
## MLD du projet site adoption animaux
![MLD](https://user-images.githubusercontent.com/59624625/155018339-65d096d3-6c50-45f5-89b0-5cf16455bbbb.png)

---

## Script Base de données
```sql=
#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id_us       Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        prenom      Varchar (50) NOT NULL ,
        email       Varchar (200) NOT NULL ,
        password    Varchar (250) NOT NULL ,
        adresse     Varchar (250) NOT NULL ,
        adresse2    Varchar (250) NOT NULL ,
        code_postal Int NOT NULL ,
        telephone   Int NOT NULL ,
        role        Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id_us)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        id_b        Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        description Text NOT NULL ,
        img         Text NOT NULL ,
        prix        Int NOT NULL ,
        quantity    Int NOT NULL
	,CONSTRAINT Produit_PK PRIMARY KEY (id_b)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Especes
#------------------------------------------------------------

CREATE TABLE Especes(
        id_es Int  Auto_increment  NOT NULL ,
        nom   Varchar (50) NOT NULL
	,CONSTRAINT Especes_PK PRIMARY KEY (id_es)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal
#------------------------------------------------------------

CREATE TABLE Animal(
        id_pet         Int  Auto_increment  NOT NULL ,
        nom            Varchar (50) NOT NULL ,
        date_naissance Date NOT NULL ,
        photo          Text NOT NULL ,
        description    Text NOT NULL ,
        est_adopter    Bool NOT NULL ,
        id_us          Int ,
        id_es          Int NOT NULL
	,CONSTRAINT Animal_PK PRIMARY KEY (id_pet)

	,CONSTRAINT Animal_User_FK FOREIGN KEY (id_us) REFERENCES User(id_us)
	,CONSTRAINT Animal_Especes0_FK FOREIGN KEY (id_es) REFERENCES Especes(id_es)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Races
#------------------------------------------------------------

CREATE TABLE Races(
        id_race Int  Auto_increment  NOT NULL ,
        nom     Varchar (50) NOT NULL ,
        id_es   Int
	,CONSTRAINT Races_PK PRIMARY KEY (id_race)

	,CONSTRAINT Races_Especes_FK FOREIGN KEY (id_es) REFERENCES Especes(id_es)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Achat
#------------------------------------------------------------

CREATE TABLE Achat(
        id_b  Int NOT NULL ,
        id_us Int NOT NULL
	,CONSTRAINT Achat_PK PRIMARY KEY (id_b,id_us)

	,CONSTRAINT Achat_Produit_FK FOREIGN KEY (id_b) REFERENCES Produit(id_b)
	,CONSTRAINT Achat_User0_FK FOREIGN KEY (id_us) REFERENCES User(id_us)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: est2
#------------------------------------------------------------

CREATE TABLE est2(
        id_race Int NOT NULL ,
        id_pet  Int NOT NULL
	,CONSTRAINT est2_PK PRIMARY KEY (id_race,id_pet)

	,CONSTRAINT est2_Races_FK FOREIGN KEY (id_race) REFERENCES Races(id_race)
	,CONSTRAINT est2_Animal0_FK FOREIGN KEY (id_pet) REFERENCES Animal(id_pet)
)ENGINE=InnoDB;


```
