create table administrateur
(
    AdminId int         not null
        primary key,
    Nom     varchar(45) not null,
    Email   varchar(45) not null,
    Tel     int         not null
);

create table gestionnaire
(
    GestId int(45)     not null
        primary key,
    RIB    int         not null,
    Nom    varchar(45) not null,
    Prenom varchar(45) not null,
    Email  int         not null,
    Hash   varchar(45) not null
);

create table groupe
(
    GroupId    int(45)     not null
        primary key,
    SIRET      varchar(45) not null,
    Secteur    varchar(45) not null,
    Adresse    varchar(45) not null,
    Classement int(45)     not null,
    Gestid     int(45)     null,
    constraint groupe_gestionnaire_GestId_fk
        foreign key (Gestid) references gestionnaire (GestId)
            on update cascade on delete cascade
);

create table membre
(
    MembreId int         not null
        primary key,
    Nom      int         not null,
    Prenom   int         not null,
    Email    int         not null,
    Hash     varchar(45) not null,
    GroupId  int         not null,
    GestId   int(45)     null,
    constraint membre_groupe_Gestid_fk
        foreign key (GestId) references groupe (Gestid),
    constraint membre_ibfk_1
        foreign key (GroupId) references groupe (GroupId)
            on update cascade on delete cascade
);

create index ForeignGroup
    on membre (GroupId);

