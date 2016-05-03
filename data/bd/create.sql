/*create type groupe as enum(
	'visiteur', 'client', 'administrateur'
);

create type pays as enum(
  'France', 'United-States', 'United-Kingdom','Italy','Germany'
);

create type couleur as enum(
  'Bleu', 'Rouge', 'Jaune','Noir','Blanc'
);

create type etat as enum(
  'en préparation', 'envoyée', 'reçue','en attente de payement','annulée'
);*/

CREATE TABLE produit
( id	INTEGER primary key,
	idGroupe INTEGER,
	nom STRING,
	code STRING,
  marque STRING,
  urlimage STRING,
  description STRING,
  prix INTEGER,
  poids INTEGER,
  note INTEGER);

CREATE TABLE panier
( idPanier	INTEGER primary key,
	Contenu INTEGER);

CREATE TABLE utilisateur
( id	INTEGER primary key,
	nom STRING,
  prenom STRING
  adresse STRING,
  mail STRING,
  groupe STRING,
  dateNaissance STRING,
  telephone INTEGER,
  pays STRING,
  codePostal INTEGER,
  nom_utilisateur  STRING,
  mot_de_passe    STRING);

CREATE TABLE stock
( id	INTEGER primary key,
	pointure INTEGER,
  couleur STRING,
 	quantité INTEGER
	produit INTEGER);

 CREATE TABLE commande
 ( idcommande INTEGER	 primary key,
 	dateCommande STRING,
  etat STRING);
