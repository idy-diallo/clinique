/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  2022-02-09 08:27:23                      */
/*==============================================================*/


drop table if exists Administrateur;

drop table if exists AgentDeSante;

drop table if exists Analyse;

drop table if exists Antecedent;

drop table if exists Certificat;

drop table if exists CertificatAptitude;

drop table if exists CertificatMedicale;

drop table if exists Consultation;

drop table if exists Medicament;

drop table if exists Patient;

drop table if exists Prescription;

drop table if exists Radio;

drop table if exists Recette;

drop table if exists RendezVous;

drop table if exists Secretaire;

drop table if exists TraitemerntMedicamentaux;

drop table if exists Users;

drop table if exists Vaccin;

drop table if exists association12;

drop table if exists association20;

drop table if exists associer;

drop table if exists effectuer;

drop table if exists lier;

/*==============================================================*/
/* Table : Administrateur                                       */
/*==============================================================*/
create table Administrateur
(
   idUser               int not null,
   matriculeAd          int not null,
   primary key (idUser, matriculeAd)
);

/*==============================================================*/
/* Table : AgentDeSante                                         */
/*==============================================================*/
create table AgentDeSante
(
   idUser               int not null,
   matriculeMed         int not null,
   profile              varchar(254),
   primary key (idUser, matriculeMed)
);

/*==============================================================*/
/* Table : Analyse                                              */
/*==============================================================*/
create table Analyse
(
   numAnalyse           int not null,
   id                   int not null,
   typeAnalyse          int,
   observation          int,
   resultat             int,
   primary key (numAnalyse)
);

/*==============================================================*/
/* Table : Antecedent                                           */
/*==============================================================*/
create table Antecedent
(
   numAntecedent        int not null,
   idUser               int not null,
   numPatient           int not null,
   catAntecedent        varchar(254),
   description          varchar(254),
   primary key (numAntecedent)
);

/*==============================================================*/
/* Table : Certificat                                           */
/*==============================================================*/
create table Certificat
(
   numCert              int not null,
   commentCert          varchar(254),
   date                 datetime,
   primary key (numCert)
);

/*==============================================================*/
/* Table : CertificatAptitude                                   */
/*==============================================================*/
create table CertificatAptitude
(
   numCert              int not null,
   numCertApt           int not null,
   professionPatient    varchar(254),
   primary key (numCert, numCertApt)
);

/*==============================================================*/
/* Table : CertificatMedicale                                   */
/*==============================================================*/
create table CertificatMedicale
(
   numCert              int not null,
   numCertMed           int not null,
   nbrJourRepo          int,
   primary key (numCert, numCertMed)
);

/*==============================================================*/
/* Table : Consultation                                         */
/*==============================================================*/
create table Consultation
(
   numConsultation      int not null,
   numCert              int,
   idUser               int not null,
   numPatient           int not null,
   motifCons            varchar(254),
   histoireMaladie      varchar(254),
   taille               float,
   poids                float,
   tension              float,
   temperature          float,
   resumeSyndromique    varchar(254),
   diagnostique         varchar(254),
   evolution            varchar(254),
   primary key (numConsultation)
);

/*==============================================================*/
/* Table : Medicament                                           */
/*==============================================================*/
create table Medicament
(
   idMed                int not null,
   nomMed               varchar(254),
   posologie            varchar(254),
   primary key (idMed)
);

/*==============================================================*/
/* Table : Patient                                              */
/*==============================================================*/
create table Patient
(
   idUser               int not null,
   numPatient           int not null,
   dateNaissance        datetime,
   adresse              varchar(254),
   sexe                 varchar(254),
   age                  int,
   telephone            int,
   profession           varchar(254),
   primary key (idUser, numPatient)
);

/*==============================================================*/
/* Table : Prescription                                         */
/*==============================================================*/
create table Prescription
(
   id                   int not null,
   numConsultation      int not null,
   datePresc            datetime,
   primary key (id)
);

/*==============================================================*/
/* Table : Radio                                                */
/*==============================================================*/
create table Radio
(
   numRadio             int not null,
   id                   int not null,
   typeRadio            int,
   resultat             int,
   primary key (numRadio)
);

/*==============================================================*/
/* Table : Recette                                              */
/*==============================================================*/
create table Recette
(
   numRec               int not null,
   versementTicket      int,
   versementProduit     int,
   primary key (numRec)
);

/*==============================================================*/
/* Table : RendezVous                                           */
/*==============================================================*/
create table RendezVous
(
   numRDV               int not null,
   motifRV              varchar(254),
   dateRV               datetime,
   heureRV              varchar(254),
   etat                 bool,
   primary key (numRDV)
);

/*==============================================================*/
/* Table : Secretaire                                           */
/*==============================================================*/
create table Secretaire
(
   idUser               int not null,
   matriculeSec         int not null,
   primary key (idUser, matriculeSec)
);

/*==============================================================*/
/* Table : TraitemerntMedicamentaux                             */
/*==============================================================*/
create table TraitemerntMedicamentaux
(
   numOrd               int not null,
   id                   int not null,
   date                 datetime,
   primary key (numOrd)
);

/*==============================================================*/
/* Table : Users                                                */
/*==============================================================*/
create table Users
(
   idUser               int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   email                varchar(254),
   password             varchar(254),
   primary key (idUser)
);

/*==============================================================*/
/* Table : Vaccin                                               */
/*==============================================================*/
create table Vaccin
(
   idVaccin             int not null,
   id                   int not null,
   dateVaccin           datetime,
   description          varchar(254),
   primary key (idVaccin)
);

/*==============================================================*/
/* Table : association12                                        */
/*==============================================================*/
create table association12
(
   idUser               int not null,
   numPatient           int not null,
   numRec               int not null,
   primary key (idUser, numPatient, numRec)
);

/*==============================================================*/
/* Table : association20                                        */
/*==============================================================*/
create table association20
(
   numOrd               int not null,
   idMed                int not null,
   primary key (numOrd, idMed)
);

/*==============================================================*/
/* Table : associer                                             */
/*==============================================================*/
create table associer
(
   idUser               int not null,
   numPatient           int not null,
   numRDV               int not null,
   primary key (idUser, numPatient, numRDV)
);

/*==============================================================*/
/* Table : effectuer                                            */
/*==============================================================*/
create table effectuer
(
   idUser               int not null,
   matriculeMed         int not null,
   numConsultation      int not null,
   primary key (idUser, matriculeMed, numConsultation)
);

/*==============================================================*/
/* Table : lier                                                 */
/*==============================================================*/
create table lier
(
   idUser               int not null,
   matriculeMed         int not null,
   numRDV               int not null,
   primary key (idUser, matriculeMed, numRDV)
);

alter table Administrateur add constraint FK_Generalisation_7 foreign key (idUser)
      references Users (idUser) on delete restrict on update restrict;

alter table AgentDeSante add constraint FK_Generalisation_5 foreign key (idUser)
      references Users (idUser) on delete restrict on update restrict;

alter table Analyse add constraint FK_association17 foreign key (id)
      references Prescription (id) on delete restrict on update restrict;

alter table Antecedent add constraint FK_association10 foreign key (idUser, numPatient)
      references Patient (idUser, numPatient) on delete restrict on update restrict;

alter table CertificatAptitude add constraint FK_Generalisation_19 foreign key (numCert)
      references Certificat (numCert) on delete restrict on update restrict;

alter table CertificatMedicale add constraint FK_Generalisation_20 foreign key (numCert)
      references Certificat (numCert) on delete restrict on update restrict;

alter table Consultation add constraint FK_avoir foreign key (idUser, numPatient)
      references Patient (idUser, numPatient) on delete restrict on update restrict;

alter table Consultation add constraint FK_produire foreign key (numCert)
      references Certificat (numCert) on delete restrict on update restrict;

alter table Patient add constraint FK_Generalisation_6 foreign key (idUser)
      references Users (idUser) on delete restrict on update restrict;

alter table Prescription add constraint FK_faire foreign key (numConsultation)
      references Consultation (numConsultation) on delete restrict on update restrict;

alter table Radio add constraint FK_association19 foreign key (id)
      references Prescription (id) on delete restrict on update restrict;

alter table Secretaire add constraint FK_Generalisation_4 foreign key (idUser)
      references Users (idUser) on delete restrict on update restrict;

alter table TraitemerntMedicamentaux add constraint FK_association16 foreign key (id)
      references Prescription (id) on delete restrict on update restrict;

alter table Vaccin add constraint FK_association18 foreign key (id)
      references Prescription (id) on delete restrict on update restrict;

alter table association12 add constraint FK_association12 foreign key (idUser, numPatient)
      references Patient (idUser, numPatient) on delete restrict on update restrict;

alter table association12 add constraint FK_association12 foreign key (numRec)
      references Recette (numRec) on delete restrict on update restrict;

alter table association20 add constraint FK_association20 foreign key (idMed)
      references Medicament (idMed) on delete restrict on update restrict;

alter table association20 add constraint FK_association20 foreign key (numOrd)
      references TraitemerntMedicamentaux (numOrd) on delete restrict on update restrict;

alter table associer add constraint FK_associer foreign key (idUser, numPatient)
      references Patient (idUser, numPatient) on delete restrict on update restrict;

alter table associer add constraint FK_associer foreign key (numRDV)
      references RendezVous (numRDV) on delete restrict on update restrict;

alter table effectuer add constraint FK_effectuer foreign key (idUser, matriculeMed)
      references AgentDeSante (idUser, matriculeMed) on delete restrict on update restrict;

alter table effectuer add constraint FK_effectuer foreign key (numConsultation)
      references Consultation (numConsultation) on delete restrict on update restrict;

alter table lier add constraint FK_lier foreign key (idUser, matriculeMed)
      references AgentDeSante (idUser, matriculeMed) on delete restrict on update restrict;

alter table lier add constraint FK_lier foreign key (numRDV)
      references RendezVous (numRDV) on delete restrict on update restrict;

