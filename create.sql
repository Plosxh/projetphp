create type groupe as enum(
	'visiteur', 'client', 'administrateur');

create type pays as enum(
  'France', 'United-States', 'United-Kingdom','Italy','Germany');
  create type couleur as enum(
  'Bleu', 'Rouge', 'Jaune','Noir','Blanc');
  create type etat as enum(
  'en préparation', 'envoyée', 'reçue','en attente de payement','annulée');

CREATE TABLE produit
( id	NUMBER(4) primary key,
	code NUMBER(4),
  marque varchar(15),
  urlimage varchar(60),
  description varchar(60),
  prix NUMBER(3,2),
  poids NUMBER(4),
  note NUMBER(1,1));

CREATE TABLE panier
( idPanier	numeric(4) primary key,
	Contenu numeric(1));

CREATE TABLE utilisateur
( id	numeric(4) primary key NOT NULL ,
	nom varchar(15),
  prenom varchar(15),
  adresse varchar(60),
  mail varchar(60),
  groupe groupe,
  dateNaissance date,
  telephone numeric(10),
  pays pays,
  codePostal numeric(5),
  nom_utilisateur  varchar(32)  NOT NULL,
  mot_de_passe     char(40)     NOT NULL,
  UNIQUE KEY nom_utilisateur (nom_utilisateur),
  UNIQUE KEY adresse_email (adresse_email),
  KEY mot_de_passe (mot_de_passe));

CREATE TABLE stock
( id	numeric(4) primary key,
	pointure numeric(2),
  couleur couleur,
 quantité numeric(4));

 CREATE TABLE commande
 ( idcommande numeric(4)	 primary key,
 	dateCommande date,
  etat etat);
