<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Gilda+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carter+One&display=swap" rel="stylesheet">

</head>
<body>

<?php
// créer un lien vers mysql, toutes les valeurs iront dans la variable $conn
// $conn = mysqli_connect('localhost','marie','Za{D0204}m');
// sélectionner la base de données
// mysqli_select_db($conn, 'simplon_chaustore');
// choisir l'encodage entre serveur mysql et php
// mysqli_set_charset($conn,'utf8');
// $sql= 'select * from brand;'
// try
// {
require('bddConnect.php');
// }
// catch (Exception $e)
// {
        // die('Erreur : ' . $e->getMessage());
// }

// AFFICHER les couleurs
// $reponse = $bdd->query('SELECT * FROM color');
// while ($donnees = $reponse->fetch(PDO::FETCH_NUM)){
// echo $donnees[0]. " " .$donnees[1] . '<br />';
// }



?>
<div class="entete">
  <a class="chaustore" href="index.php"><h4>Chaustore</h4></a>
</div>
    <h1>Gestion de la boutique</h1>


      <!-- <form action="add_product/insert.php" method="post">
        <label for="color" Couleur></label>
        <input type="text" name="color" placeholher="Couleur" required/><br/>
      </form> -->


    <div id="choix_action">
      <form method="post" action="select.php">
        <input id="visualiser" type="submit" value="Visualiser">
      </form>

      <form method="post" action="add.php">
        <input id="ajouter" type="submit" value="Ajouter">
      </form>
      <form method="post" action="modify.php">
        <input id="modifier" type="submit" value="Modifier">
      </form>
      <form method="post" action="delete.php">
        <input id="supprimer" type="submit" value="Supprimer">
      </form>
    </div>
</body>
</html>
