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
  <div class="entete">
    <a class="chaustore" href="index.php"><h4>Chaustore</h4></a>
    <a class="boutonRetour" href="select.php"><img src="retour.png" alt="retour à la page précédente" height=50px width=50px></a>
  </div>

  <h1>Voici le listing de vos produits référencés</h1>

<?php

require('bddConnect.php');
?>
<div class="listing">

<?php
$reponse = $bdd->query('SELECT * FROM product');
while ($donnees = $reponse->fetch()){
echo $donnees['id'] ." " . $donnees['name'] . " " . $donnees['price'] ." " . $donnees['gender'] .
 '<br />';

}
?>

</div>
</html>
