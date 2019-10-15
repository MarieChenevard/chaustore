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
    <a class="boutonRetour" href="index.php"><img src="retour.png" alt="retour à la page précédente" height=50px width=50px></a>
  </div>



  <h1>Que souhaitez-vous ajouter?</h1>

  <div id="choix">
    <form method="post" action="add_product.php">
      <input id="produit" type="submit" value="Produits">
    </form>
    <form method="post" action="add_color.php">
      <input id="couleur" type="submit" value="Couleurs">
    </form>
    <form method="post" action="add_brand.php">
      <input id="marque" type="submit" value="Marques">
    </form>
    <form method="post" action="add_size.php">
      <input id="taille" type="submit" value="Tailles">
    </form>
    <form method="post" action="add_category.php">
      <input id="categorie" type="submit" value="Catégories">
    </form>
</div>


</body>
</html>
