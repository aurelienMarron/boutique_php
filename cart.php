<?php
if (!is_numeric($_POST["quantite"]) or !is_int((int)$_POST["quantite"]) or $_POST["quantite"]===0){
        header('Location:http://localhost/boutique_php/redirection.php',true,301);
    exit();
    }

include 'my-functions.php';
$poidsCommande=0;
$coutcommande=totalCommande(displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]),$_POST["quantite"]);
$montant_fraisdeport=0;
$megaTotal=$coutcommande+$montant_fraisdeport;
$nomproduit=$_POST["nom_produit"];
$_POST["choix_transporteur"]="nondefini";
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
        <th><?php echo displayDicountedPrice($_POST["prix_produit"],$_POST["discount_produit"]);?></th>
        <th><?php echo $_POST["quantite"];?></th>
        <th><?php echo $coutcommande;?></th>
    </tr>
    <tr>
        <th scope="row"></th>
        <th></th>
        <th>TOTAL HT</th>
        <th><?php echo priceExludingVAT($coutcommande);?></th>
    </tr>
    <tr>
        <th scope="row"></th>
        <th></th>
        <th>Montant TVA</th>
        <th><?php echo coutdelaTVA($coutcommande,priceExludingVAT($coutcommande));?></th>
    </tr>
    <tr><th><p>CHOIX DU TRANSPORTEUR</p></th>
    <th><form method="post" action="cart.php">
            <label>
                <select name="choix_transporteur">
            <option value="ups">UPS</option>
            <option value="chronoposte">Chronoposte</option>
        </select>
                <input type="hidden" name="nom_produit" value="<?php echo $nomproduit;?>">
                <input type="hidden" name="prix_produit" value="<?php echo $_POST["prix_produit"];?>">
                <input type="hidden" name="discount_produit" value="<?php echo $_POST["discount_produit"];?>">
                <input type="hidden" name="poids_produit" value="<?php echo $_POST["weight"];?>">
                <input type="hidden" name="quantite" value="<?php echo $_POST["quantite"];?>">
            </label>

        </th>
        <th><button type="submit" class="btn btn-dark btn-outline-light">VALIDER</button></th></form>
    </tr>

    <tr>
        <th scope="row"></th>
        <th></th>
        <th>FRAIS DE PORT</th>
        <th><?php
            if($_POST["choix_transporteur"]==="nondefini"){
                echo " ";
            }
            elseif($_POST["choix_transporteur"]==="ups"){
                 echo $montant_fraisdeport=fraisdeport_ups($coutcommande);

                }
            elseif($_POST["choix_transporteur"]==="chronoposte"){
                echo $montant_fraisdeport=fraisdeport_chronopost($coutcommande);

            }
        ?> </th>
    </tr>

    <tr>
        <th scope="row"></th>
        <th></th>
        <th>TOTAL TTC</th>
        <th><?php if($_POST["choix_transporteur"]==="ups"){
                echo $coutcommande+fraisdeport_ups($coutcommande);

            }
            elseif($_POST["choix_transporteur"]==="chronoposte"){
                echo $coutcommande+fraisdeport_chronopost($coutcommande);

            }?></th>
    </tr>


</body>
<a href="multidimensional-catalog.php">&laquo; Retour au formulaire</a>

</html>