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
![MCD](https://i.imgur.com/JxsjlJU.png)



---
## MLD du projet site adoption animaux
![MLD](https://i.imgur.com/FLRnO34.png)


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
        id_us      Int  Auto_increment  NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        prenom     Varchar (50) NOT NULL ,
        email      Varchar (200) NOT NULL ,
        password   Varchar (50) NOT NULL ,
        adresse    Varchar (200) NOT NULL ,
        adresse2   Varchar (200) NOT NULL ,
        codePostal Int NOT NULL ,
        tel        Int NOT NULL ,
        role       Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id_us)
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
        id_pet    Int  Auto_increment  NOT NULL ,
        nom       Varchar (50) NOT NULL ,
        naissance Date NOT NULL ,
        photo     Text NOT NULL ,
        des       Text NOT NULL ,
        adopter   Bool NOT NULL ,
        id_es     Int NOT NULL ,
        id_us     Int
	,CONSTRAINT Animal_PK PRIMARY KEY (id_pet)

	,CONSTRAINT Animal_Especes_FK FOREIGN KEY (id_es) REFERENCES Especes(id_es)
	,CONSTRAINT Animal_User0_FK FOREIGN KEY (id_us) REFERENCES User(id_us)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Accessoires
#------------------------------------------------------------

CREATE TABLE Accessoires(
        id_acc Int  Auto_increment  NOT NULL ,
        nom    Varchar (50) NOT NULL ,
        des    Varchar (50) NOT NULL ,
        img    Text NOT NULL ,
        prix   Int NOT NULL
	,CONSTRAINT Accessoires_PK PRIMARY KEY (id_acc)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Achat
#------------------------------------------------------------

CREATE TABLE Achat(
        id_acc Int NOT NULL ,
        id_us  Int NOT NULL
	,CONSTRAINT Achat_PK PRIMARY KEY (id_acc,id_us)

	,CONSTRAINT Achat_Accessoires_FK FOREIGN KEY (id_acc) REFERENCES Accessoires(id_acc)
	,CONSTRAINT Achat_User0_FK FOREIGN KEY (id_us) REFERENCES User(id_us)
)ENGINE=InnoDB;
```
