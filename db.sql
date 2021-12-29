use db;

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

