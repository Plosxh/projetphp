<!DOCTYPE html> <!-- .php ou  .html ??-->
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>Création nouveau client</title>
</head>

<body>
  <header>
      <h1>Entreprise <br/><br/>Création d'un compte client</h1>
  </header>

  <form method="get" action="nouveauClient.php"> <!-- vers quel fichier on renvoie ici ?-->
    <fieldset id="txt">
      <legend>Vos coordonnées</legend>
        <label for="prenom" class="coordonnees">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required/><br/>
        <label for="nom" class="coordonnees">Nom :</label>
        <input type="text" name="nom" id="nom" required/><br/>
        <label for="email" class="coordonnees">Email :</label>
        <input type="email" name="email" id="email" required/><br/>
    </fieldset>
    <fieldset id="pub">
      <legend>Voulez-vous recevoir nos publicités ?</legend>
        <input type="radio" name="pub" value="yes" id="YesPub"/>
        <label for="YesPub">oui</label>
        <input type="radio" name="pub" value="no" id="NoPub"/>
        <label for="NoPub">non</label>
    </fieldset>

    <p>
      <input type="submit" value="Enregistrer">
    </p>
