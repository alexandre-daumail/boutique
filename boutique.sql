/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  23/02/2022 16:47:17                      */
/*==============================================================*/


drop table if exists ARTICLE;

drop table if exists COMMANDE;

drop table if exists COMMENTAIRE;

drop table if exists DROIT;

drop table if exists OFFRE;

drop table if exists PAIEMENT;

drop table if exists UTILISATEUR;

/*==============================================================*/
/* Table : ARTICLE                                              */
/*==============================================================*/
create table ARTICLE
(
   ID_ARTICLE           int not null,
   ID_COMMANDE          int,
   ID_OFFRE             int not null,
   NOM                  varchar(80),
   DESCRIPTION          text,
   ASCENSION            varchar(255),
   DECLINAISON          varchar(255),
   PRIX                 float(8,2),
   primary key (ID_ARTICLE)
);

/*==============================================================*/
/* Table : COMMANDE                                             */
/*==============================================================*/
create table COMMANDE
(
   ID_COMMANDE          int not null,
   ID_PAIEMENT          int,
   ID_UTILISATEUR       int,
   DATE_COMMANDE        datetime,
   DATE_LIVRAISON       date,
   STATUT               int,
   primary key (ID_COMMANDE)
);

/*==============================================================*/
/* Table : COMMENTAIRE                                          */
/*==============================================================*/
create table COMMENTAIRE
(
   ID_COMMENTAIRE       int not null,
   ID_UTILISATEUR       int not null,
   COMMENTAIRE          text,
   primary key (ID_COMMENTAIRE)
);

/*==============================================================*/
/* Table : DROIT                                                */
/*==============================================================*/
create table DROIT
(
   ID_DROIT             int not null,
   NOM                  varchar(80),
   primary key (ID_DROIT)
);

/*==============================================================*/
/* Table : OFFRE                                                */
/*==============================================================*/
create table OFFRE
(
   ID_OFFRE             int not null,
   NOM_OFFRE            varchar(255),
   DESCRIPTION          text,
   PRIX                 float(8,2),
   primary key (ID_OFFRE)
);

/*==============================================================*/
/* Table : PAIEMENT                                             */
/*==============================================================*/
create table PAIEMENT
(
   ID_PAIEMENT          int not null,
   NUMERO_CARTE         varchar(255),
   NOM_CARTE            varchar(80),
   DATE_EXPIRATION      date,
   primary key (ID_PAIEMENT)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   ID_UTILISATEUR       int not null,
   ID_DROIT             int not null,
   ID_PAIEMENT          int not null,
   NOM_ARTICLE          varchar(255),
   PRENOM               varchar(255),
   CIVILITE             varchar(255),
   NAISSANCE            date,
   CODE_POSTAL          varchar(10),
   EMAIL                varchar(255),
   VILLE                varchar(255),
   TELEPHONE            varchar(10),
   ADRESSE              varchar(255),
   LOGIN                varchar(255),
   MOT_DE_PASSE         varchar(255),
   primary key (ID_UTILISATEUR)
);

alter table ARTICLE add constraint FK_CONCERNE foreign key (ID_OFFRE)
      references OFFRE (ID_OFFRE) on delete restrict on update restrict;

alter table ARTICLE add constraint FK_CONTENIR foreign key (ID_COMMANDE)
      references COMMANDE (ID_COMMANDE) on delete restrict on update restrict;

alter table COMMANDE add constraint FK_PAYER foreign key (ID_PAIEMENT)
      references PAIEMENT (ID_PAIEMENT) on delete restrict on update restrict;

alter table COMMANDE add constraint FK_RECEVOIR foreign key (ID_UTILISATEUR)
      references UTILISATEUR (ID_UTILISATEUR) on delete restrict on update restrict;

alter table COMMENTAIRE add constraint FK_POSTER foreign key (ID_UTILISATEUR)
      references UTILISATEUR (ID_UTILISATEUR) on delete restrict on update restrict;

alter table UTILISATEUR add constraint FK_CHOISIR foreign key (ID_PAIEMENT)
      references PAIEMENT (ID_PAIEMENT) on delete restrict on update restrict;

alter table UTILISATEUR add constraint FK_POSSEDER foreign key (ID_DROIT)
      references DROIT (ID_DROIT) on delete restrict on update restrict;

