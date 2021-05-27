<?php
include 'my-functions.php';
?>

<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
            name="viewport"
            content="width=
    , initial-scale=1.0"
    />
    <title>Tableau commande</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
            crossorigin="anonymous"
    />
</head>
<body>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Produit</th>
        <th scope="col">Prix unitaire</th>
        <th scope="col">Quantité</th>
        <th scope="col">Total</th>
    </tr>
    </thead>
    <tr>
        <th scope="row"><?php echo $_POST["nom_produit"];?></th>
        <th><?php formatPrice(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]));?></th>
        <th><?php echo $_POST["quantite"];?></th>
        <th><?php formatPrice(totalCommande(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]),$_POST["quantite"]));?></th>
    </tr>
    <tr>
        <th scope="row"></th>
        <th></th>
        <th>TOTAL HT</th>
        <th><?php formatPrice(priceExludingVAT(totalCommande(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]),$_POST["quantite"])));?></th>
    </tr>
    <tr>
        <th scope="row"></th>
        <th></th>
        <th>TVA</th>
        <th>20%</th>
    </tr>
    <tr>
        <th scope="row"></th>
        <th></th>
        <th>TOTAL TTC</th>
        <th><?php formatPrice(totalCommande(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]),$_POST["quantite"]));?></th>
    </tr>


</body>
<a href="multidimensional-catalog.php">&laquo; Retour au formulaire</a>

</html>