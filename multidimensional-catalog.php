<?php
include 'header.php';

$products = [
    "briquet" =>[
        "name"=>"briquet",
        "price"=> 2,
        "weight"=> 10,
        "discount"=> 10,
        "picture"=> "https://www.tabacdubassigny.fr/images/contenu/briquet.jpg",
    ],
    "cigarettes" =>[
        "name"=> "cigarettes",
        "price"=> 10,
        "weight"=> 50,
        "discount"=> null,
        "picture"=> "https://cdn-news.konbini.com/files/2019/10/paquetclope1.jpg?ratio=16:9&w=640",
    ],
    "tabac_a_rouler"=>[
        "name"=> "tabac à rouler",
        "price"=>6,
        "weight"=> 100,
        "discount"=> null,
        "picture"=> "https://i.ytimg.com/vi/aW9jzMXCEbo/hqdefault.jpg",
    ],
];
?>

<html lang="fr">
<div class="container">
<div class="row">
    <div class="col">
    <ul>
    <li>Nom:<?php echo $products["briquet"]["name"]?></li>
<li>Prix:<?php echo $products["briquet"]["price"]?> euros</li>
<li>Poids:<?php echo $products["briquet"]["weight"]?> grammes</li>
<li>Reduction:<?php echo $products["briquet"]["discount"]?> %</li>
<?php echo '<img src="'.$products["briquet"]["picture"].'" alt="" width="200">';?>
</ul>
    </div>
    <div class="col">
<ul>
    <li>Nom:<?php echo $products["cigarettes"]["name"]?></li>
    <li>Prix:<?php echo $products["cigarettes"]["price"]?> euros</li>
    <li>Poids:<?php echo $products["cigarettes"]["weight"]?> grammes</li>
    <li>Reduction:<?php echo $products["cigarettes"]["discount"]?> %</li>
    <?php echo '<img src="'.$products["cigarettes"]["picture"].'" alt="" width="200">';?>
</ul>
    </div>
    <div class="col">
<ul>
    <li>Nom:<?php echo $products["tabac_a_rouler"]["name"]?></li>
    <li>Prix:<?php echo $products["tabac_a_rouler"]["price"]?> euros</li>
    <li>Poids:<?php echo $products["tabac_a_rouler"]["weight"]?> grammes</li>
    <li>Reduction:<?php echo $products["tabac_a_rouler"]["discount"]?> %</li>
    <?php echo '<img src="'.$products["tabac_a_rouler"]["picture"].'" alt="" width="200">';?>
</ul>
    </div>
</div>
</div>

</html>

<?php
include 'footer.php';
?>