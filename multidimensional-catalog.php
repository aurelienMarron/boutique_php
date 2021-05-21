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
        "discount"=> 0,
        "picture"=> "https://cdn-news.konbini.com/files/2019/10/paquetclope1.jpg?ratio=16:9&w=640",
    ],
    "tabac_a_rouler"=>[
        "name"=> "tabac à rouler",
        "price"=>6,
        "weight"=> 100,
        "discount"=> 0,
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
</ul>
        <img src='<?php echo $products["briquet"]["picture"] ?>' alt="" width="200"';/>
    </div>

    <div class="col">
<ul>
    <li>Nom:<?php echo $products["cigarettes"]["name"]?></li>
    <li>Prix:<?php echo $products["cigarettes"]["price"]?> euros</li>
    <li>Poids:<?php echo $products["cigarettes"]["weight"]?> grammes</li>
    <li>Reduction:<?php echo $products["cigarettes"]["discount"]?> %</li>
</ul>
        <img src='<?php echo $products["cigarettes"]["picture"] ?>' alt="" width="200"';/>
    </div>

    <div class="col">
<ul>
    <li>Nom:<?php echo $products["tabac_a_rouler"]["name"]?></li>
    <li>Prix:<?php echo $products["tabac_a_rouler"]["price"]?> euros</li>
    <li>Poids:<?php echo $products["tabac_a_rouler"]["weight"]?> grammes</li>
    <li>Reduction:<?php echo $products["tabac_a_rouler"]["discount"]?> %</li>
</ul>
        <img src='<?php echo $products["tabac_a_rouler"]["picture"] ?>' alt="" width="200"';/>
    </div>
</div>
</div>

<?php
echo "debut foreach" . "<br/>";
foreach($products as $product=>$liste_info){
    echo $product . "\n" . "<br/>" . "<br/>";
    foreach($liste_info as $info){
        echo $info . "\n" ."<br/>";
    }
}


echo "debut for" . "<br/>";
$keys=array_keys($products);
for($i=0; $i<count($products);$i++){
    echo $keys[$i]. "\n" . "<br/>" . "<br/>";
    foreach($products[$keys[$i]] as $key => $value){
        echo $key .":" . $value."<br/>";
    }
}

echo "debut while" . "<br/>";
$i=0;
while($i < count($products))
{
    $i++;
    echo $keys[$i]. "\n" . "<br/>" . "<br/>";
    foreach($products[$keys[$i]] as $key => $value){
        echo $key .":" . $value."<br/>";
    }
}

echo "debut while2" . "<br/>";
$index =0;
$index2=0;
while ($index < count($products)) {

    $keys =array_keys($products);
    $affichage = $keys[$index];
    echo $affichage. "\n" . "<br/>"."<br/>";
    $index++;
    while ($index2 < count($products[$affichage])) {

        $values = array_values($products[$affichage]);
        $affichage2 = $values[$index2];
        echo $affichage2 . "\n" . "<br/>" . "<br/>";
        $index2++;
    }
}

?>


</html>

<?php
include 'footer.php';
?>