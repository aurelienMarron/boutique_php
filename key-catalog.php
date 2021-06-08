<?php
include 'header.php';
include 'my-functions.php';
include 'database.php';
$donnees=[];


$briquet=[
    "name"=>"briquet",
    "price"=> 2.00,
    "weight"=> 10,
    "discount"=> 10,
    "picture"=> "https://www.tabacdubassigny.fr/images/contenu/briquet.jpg",
];

$cigarettes=[
    "name"=> "cigarettes",
    "price"=> 10.00,
    "weight"=> 50,
    "discount"=> null,
    "picture"=> "https://cdn-news.konbini.com/files/2019/10/paquetclope1.jpg?ratio=16:9&w=640",
];

$tabac_a_rouler=[
    "name"=> "tabac à rouler",
    "price"=>6.00,
    "weight"=> 100,
    "discount"=> null,
    "picture"=> "https://i.ytimg.com/vi/aW9jzMXCEbo/hqdefault.jpg",
];

?>


<html lang="fr">
<ul>
    <li>Nom:<?php echo $briquet["name"]?></li>
    <li>Prix: <?php formatPrice($briquet["price"])?></li>
    <li>PrixHT: <?php formatPrice(priceExludingVAT($briquet["price"])) ;?> HT</li>
    <li>Poids:<?php echo $briquet["weight"]?> grammes</li>
    <li>Reduction:<?php echo $briquet["discount"]?> %</li>
    <li>Prix remisé:<?php formatPrice(displayDicountedPrice($briquet["price"],$briquet["discount"]));?></li>
    <?php echo '<img src="'.$briquet["picture"].'" alt="" width="200">';?>
</ul>

<ul>
    <li>Nom:<?php echo $cigarettes["name"]?></li>
    <li>Prix: <?php formatPrice($cigarettes["price"])?></li>
    <li>PrixHT: <?php formatPrice(priceExludingVAT($cigarettes["price"])) ;?> HT</li>
    <li>Poids:<?php echo $cigarettes["weight"]?> grammes</li>
    <li>Reduction:<?php echo $cigarettes["discount"]?> %</li>
    <li>Prix remisé:<?php formatPrice(displayDicountedPrice($cigarettes["price"],$cigarettes["discount"]));?></li>
    <?php echo '<img src="'.$cigarettes["picture"].'" alt="" width="200">';?>
</ul>

<ul>
    <li>Nom:<?php echo $tabac_a_rouler["name"]?></li>
    <li>Prix: <?php formatPrice($tabac_a_rouler["price"])?></li>
    <li>PrixHT: <?php formatPrice(priceExludingVAT($tabac_a_rouler["price"])) ;?> HT</li>
    <li>Poids:<?php echo $tabac_a_rouler["weight"]?> grammes</li>
    <li>Reduction:<?php echo $tabac_a_rouler["discount"]?> %</li>
    <li>Prix remisé:<?php formatPrice(displayDicountedPrice($tabac_a_rouler["price"],$tabac_a_rouler["discount"]));?></li>
    <?php echo '<img src="'.$tabac_a_rouler["picture"].'" alt="" width="200">';?>
</ul>

<?php

foreach(affiche_nom_produit() as $produit){
   echo $produit['name'] . '<br>';
}


foreach(produitenrupture()as $produit){
    echo '<br>' . $produit['name'] . ' est en rupture' . '<br>';
}


totalcmd();
?>
</html>

<?php
include 'footer.php';
?>