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
    Mdp    varchar(255) not null
);

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

create index ForeignGroup
    on membre (GroupeId);

create table faq 
(
  QuestionId int(11) NOT NULL,
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

ALTER TABLE `faq`
  ADD PRIMARY KEY (`QuestionId`);

ALTER TABLE `faq`
  MODIFY `QuestionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;