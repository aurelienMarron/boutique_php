<?php
include 'header.php';

$briquet=[
    "name"=>"briquet",
    "price"=> 2,
    "weight"=> 10,
    "discount"=> 10,
    "picture"=> "https://www.tabacdubassigny.fr/images/contenu/briquet.jpg",
];

$cigarettes=[
    "name"=> "cigarettes",
    "price"=> 10,
    "weight"=> 50,
    "discount"=> null,
    "picture"=> "https://cdn-news.konbini.com/files/2019/10/paquetclope1.jpg?ratio=16:9&w=640",
];

$tabac_a_rouler=[
    "name"=> "tabac à rouler",
    "price"=>6,
    "weight"=> 100,
    "discount"=> null,
    "picture"=> "https://i.ytimg.com/vi/aW9jzMXCEbo/hqdefault.jpg",
];

?>


<html lang="fr">
<ul>
    <li>Nom:<?php echo $briquet["name"]?></li>
    <li>Prix:<?php echo $briquet["price"]?> euros</li>
    <li>Poids:<?php echo $briquet["weight"]?> grammes</li>
    <li>Reduction:<?php echo $briquet["discount"]?> %</li>
    <?php echo '<img src="'.$briquet["picture"].'" alt="" width="200">';?>
</ul>

<ul>
    <li>Nom:<?php echo $cigarettes["name"]?></li>
    <li>Prix:<?php echo $cigarettes["price"]?> euros</li>
    <li>Poids:<?php echo $cigarettes["weight"]?> grammes</li>
    <li>Reduction:<?php echo $cigarettes["discount"]?> %</li>
    <?php echo '<img src="'.$cigarettes["picture"].'" alt="" width="200">';?>
</ul>

<ul>
    <li>Nom:<?php echo $tabac_a_rouler["name"]?></li>
    <li>Prix:<?php echo $tabac_a_rouler["price"]?> euros</li>
    <li>Poids:<?php echo $tabac_a_rouler["weight"]?> grammes</li>
    <li>Reduction:<?php echo $tabac_a_rouler["discount"]?> %</li>
    <?php echo '<img src="'.$tabac_a_rouler["picture"].'" alt="" width="200">';?>
</ul>
</html>

<?php
include 'footer.php';
?>