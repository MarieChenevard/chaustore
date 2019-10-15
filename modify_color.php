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
    <a class="boutonRetour" href="modify.php"><img src="retour.png" alt="retour à la page précédente" height=50px width=50px></a>
  </div>

  <h1>Modifiez une couleur</h1>

<?php

require('bddConnect.php');

if(!empty($_POST ['modify_color'])){
  $answer= $_POST['modify_color'];
  $bdd->exec(" `color`(name)VALUES('$answer')");

  UPDATE color SET name='Black' WHERE name='Noir';

}

?>


<div class="listing">
  <form method="POST" action="modify_color.php">
    <select name="modify_color">
      <option value="">--Choisissez une couleur à modifier--</option>

</select>

    </select>

  </form>

  <form method="POST" action="modify_color.php">
    <input class="write" type="text" name="modify_color" id="modify_color" value="">
    <input class="add" type="submit" name="submit "value="Ajouter !">
  </form>

?>



<?php
$reponse = $bdd->query('SELECT `name` FROM color');
while ($donnees = $reponse->fetch()){
echo $donnees['name'] . '<br />';
}


?>

</div>


</body>
</html>
