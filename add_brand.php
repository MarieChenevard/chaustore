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

  <h1>Ajoutez une marque</h1>

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
    <input class="write" type="text" name="add_brand" id="add_brand" value="">
    <input class="add" type="submit" name="submit "value="Ajouter !">
  </form>

<?php
$reponse = $bdd->query('SELECT `name` FROM brand');
while ($donnees = $reponse->fetch()){
echo $donnees['name'] . '<br />';
}
?>

</div>


</body>
</html>
