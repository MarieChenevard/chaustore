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
    <a class="boutonRetour" href="add.php"><img src="retour.png" alt="retour à la page précédente" 
    height=50px width=50px></a>
  </div>

  <h1>Ajoutez un produit</h1>

<?php
require('bddConnect.php');
if(!empty($_POST ['add_brand'])){
  $answer= $_POST['add_brand'];
  $bdd->exec("INSERT INTO `brand`(name)VALUES('$answer')");
  // var_dump($answer);
}
?>

<div class="listing">
  <form method="POST" action="add_brand.php">
    <label for="add_color">Ajoutez une marque</label>
    <input class="write" type="text" name="add_brand" id="add_brand" value="">
    <input class="add" type="submit" name="submit "value="Ajouter !">
  </form>
</div>

<?php
if(!empty($_POST ['add_color'])){
  $answer= $_POST['add_color'];
  $bdd->exec("INSERT INTO `brand`(name)VALUES('$answer')");
  // var_dump($answer);
}
?>

<div class="listing">
  <form method="POST" action="add_color.php">
    <label for="add_color">Ajoutez une couleur</label>
    <input class="write" type="text" name="add_color" id="add_color" value="">
    <input class="add" type="submit" name="submit "value="Ajouter !">
  </form>
</div>
</body>
</html>
