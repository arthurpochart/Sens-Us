CREATE DATABASE IF NOT EXISTS `sensus` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

use sensus;

create table administrateur
(
    AdminId int          not null primary key AUTO_INCREMENT,
    Nom     varchar(255) not null,
    Email   varchar(255) not null,
    Tel     varchar(255) not null
);

create table gestionnaire
(
    GestId int(45)      not null primary key AUTO_INCREMENT,
    RIB    varchar(255) not null,
    Nom    varchar(255) not null,
    Prenom varchar(255) not null,
    Email  varchar(255) not null,
    Mdp    varchar(255) not null,
    isAdmin tinyint(1)  not null
);

INSERT INTO `gestionnaire` (`GestId`, `RIB`, `Nom`, `Prenom`, `Email`, `Mdp`, `isAdmin`) VALUES
(1, "0123456789", "Sens'Us", "Sens'Cert", "sensus@gmail.com", "9cf95dacd226dcf43da376cdb6cbba7035218921", 0),
(2, "01234567891011", "Gammoudi", "Aymen", "aymen.gammoudi@gmail.com", "9cf95dacd226dcf43da376cdb6cbba7035218921", 0),
(3, "53218921", "Test", "Test", "test@test.com", "9cf95dacd226dcf43da376cdb6cbba7035218921", 0);


create table groupe
(
    GroupeId   int(45)      not null primary key AUTO_INCREMENT,
    NomGroupe  varchar(255) not null,
    SIRET      varchar(255) not null,
    Secteur    varchar(255) not null,
    Adresse    varchar(255) not null,
    Classement int(45)      not null,
    Code       varchar(255) not null,
    GestId     int(45)      null,
    constraint groupe_gestionnaire_GestId_fk
        foreign key (GestId) references gestionnaire (GestId)
            on update cascade on delete cascade
);
INSERT INTO `groupe` (`GroupeId`, `NomGroupe`, `SIRET`, `Secteur`, `Adresse`, `Classement`, `Code`, `GestId`) VALUES
(1, "Sens'Us", "5678934567890", "Informatique", "10 rue de Vanves 92130 Issy-les-Moulineaux", "0", "BtbRvnl7", "1"),
(2, "Nestle", "4278329923", "Chocolat", "92130 Issy-les-Moulineaux", "0", "Hjoe7zS2", "2"),
(3, "Test", "456789098762", "Testeur", "La ville du test", "100", "yzeS62Ha", "3");

create table membre
(
    MembreId int          not null primary key AUTO_INCREMENT,
    Nom      varchar(255) not null,
    Prenom   varchar(255) not null,
    Email    varchar(255) not null,
    Mdp      varchar(255) not null,
    GroupeId int          not null,
    GestId   int(45)      null,
    constraint membre_groupe_GestId_fk
        foreign key (GestId) references groupe (GestId),
    constraint membre_ibfk_1
        foreign key (GroupeId) references groupe (GroupeId)
            on update cascade on delete cascade
);

INSERT INTO `membre` (`MembreId`, `Nom`, `Prenom`, `Email`, `Mdp`, `GroupeId`, `GestId`) VALUES
(1, "Durant", "Kevin", "kevin.durant@gmail.com", "9cf95dacd226dcf43da376cdb6cbba7035218921", "1", "1"),
(2, "Chabchoub", "Yousra", "yousra.chabchoub@gmail.com", "9cf95dacd226dcf43da376cdb6cbba7035218921", "1", "1"),
(3, "Dupont", "Jean", "jean.dupont@gmail.com", "9cf95dacd226dcf43da376cdb6cbba7035218921", "2", "2");

create index ForeignGroup
    on membre (GroupeId);

create table faq 
(
  QuestionId int(11) NOT NULL primary key AUTO_INCREMENT,
  Question varchar(255) NOT NULL,
  Reponse varchar(255) NOT NULL
);

INSERT INTO `faq` (`QuestionId`, `Question`, `Reponse`) VALUES
(1, "Comment obtenir la Sens'Cert ?", "Contactez-nous à l'adresse contact.sens.us.2022@gmail.com, nous vous donnerons de plus ample informations."),
(2, "Pourquoi la Sens'Cert?", "La Sens'Cert est un gage de bien être et de qualité d'environnement."),
(3, "Quelles informations mettre en avant sur mon espace gestionnaire ?", "Nous vous conseillons de mettre en avant le niveau de micro-particules."),
(4, "Comment changer le statut d'une personne ?", "Rendez-vous sur votre espace gestionnaire, vous pouvez modifier le statut d'un membre."),
(5, "Etes-vous une association ?", "Non, nous sommes là pour l'argent avant tout."),
(6, "Mon capteur est inactif comment contacter un technicien ?", "Vous pouvez joindre un de nos responsables techniques au 181 712."),
(7, "Qui est Aymen ?", "La légende raconte qu'il/elle vogue sur les 7 mers en compagnie de son fidèle dodo gabonais.");

