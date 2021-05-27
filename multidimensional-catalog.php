<?php
include 'header.php';
include 'my-functions.php';

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
<li>Prix:<?php formatPrice( $products["briquet"]["price"])?> euros</li>
        <li>PrixHT: <?php formatPrice(priceExludingVAT($products["briquet"]["price"])) ;?> HT</li>
<li>Poids:<?php echo $products["briquet"]["weight"]?> grammes</li>
<li>Reduction:<?php echo $products["briquet"]["discount"]?> %</li>
        <li>Prix remisé:<?php formatPrice(displayDicountedPrice($products["briquet"]["price"],$products["briquet"]["discount"]));?></li>
</ul>
        <img src='<?php echo $products["briquet"]["picture"] ?>' alt="" width="200"';/>
        <form method="post" action="cart.php">
        <label>
            <input type="number" name="quantité" placeholder="Combien t'en veux?" min="0">
        </label>
        <button type="submit" class="btn btn-dark btn-outline-light">Passe ta commande</button>
        </form>
    </div>

    <div class="col">
<ul>
    <li>Nom:<?php echo $products["cigarettes"]["name"]?></li>
    <li>Prix:<?php formatPrice($products["cigarettes"]["price"])?> euros</li>
    <li>PrixHT: <?php formatPrice(priceExludingVAT($products["cigarettes"]["price"])) ;?> HT</li>
    <li>Poids:<?php echo $products["cigarettes"]["weight"]?> grammes</li>
    <li>Reduction:<?php echo $products["cigarettes"]["discount"]?> %</li>
    <li>Prix remisé:<?php formatPrice(displayDicountedPrice($products["cigarettes"]["price"],$products["cigarettes"]["discount"]));?></li>
</ul>
        <img src='<?php echo $products["cigarettes"]["picture"] ?>' alt="" width="200"';/>
        <form method="post" action="cart.php">
        <label>
            <input type="number" name="quantité" placeholder="Combien t'en veux?" min="0">
        </label>
        <button type="submit" class="btn btn-dark btn-outline-light">Passe ta commande</button>
        </form>
    </div>

    <div class="col">
<ul>
    <li>Nom:<?php echo $products["tabac_a_rouler"]["name"]?></li>
    <li>Prix:<?php formatPrice($products["tabac_a_rouler"]["price"])?> euros</li>
    <li>PrixHT: <?php formatPrice(priceExludingVAT($products["tabac_a_rouler"]["price"])) ;?> HT</li>
    <li>Poids:<?php echo $products["tabac_a_rouler"]["weight"]?> grammes</li>
    <li>Reduction:<?php echo $products["tabac_a_rouler"]["discount"]?> %</li>
    <li>Prix remisé:<?php formatPrice(displayDicountedPrice($products["tabac_a_rouler"]["price"],$products["tabac_a_rouler"]["discount"]));?></li>
</ul>
        <img src='<?php echo $products["tabac_a_rouler"]["picture"] ?>' alt="" width="200"';/>
        <form method="post" action="cart.php">
        <label>
            <input type="number" name="quantité" placeholder="Combien t'en veux?" min="0">
        </label>
        <button type="submit" class="btn btn-dark btn-outline-light">Passe ta commande</button>
        </form>
    </div>
</div>
</div>



<?php
echo "<h2>debut foreach</h2>" . "<br/>";
foreach($products as $product=>$liste_info){
    echo $product . "\n" . "<br/>" . "<br/>";
    foreach($liste_info as $info){
        echo $info . "\n" ."<br/>";
    }
}


echo "<h2>debut for</h2>" . "<br/>";
$keys=array_keys($products);
for($i=0; $i<count($products);$i++){
    echo $keys[$i]. "\n" . "<br/>" . "<br/>";
    foreach($products[$keys[$i]] as $key => $value){
        echo $key .":" . $value."<br/>";
    }
}

echo "<h2>for avec mise en page</h2>";
$keys=array_keys($products); ?>
<div class="container">
    <div class="row">
<?php for($index=0; $index<count($products);$index++){ ?>
<div class="col">
        <ul><?php echo $keys[$index] .":" ."<br/>";?>
        <li><?php echo "name: " . $products[$keys[$index]]["name"]. "<br/>";?></li>
     <li><?php formatPrice($products[$keys[$index]]["price"]) . "<br/>";?></li>
     <li><?php echo "poids: ".$products[$keys[$index]]["weight"] . "<br/>";?></li>
        <li><?php echo "remise: ".$products[$keys[$index]]["discount"] . "<br/>";?></li></ul>
        <?php echo '<img src="'.$products[$keys[$index]]["picture"].'" alt="" width="200">'. "<br/>";?>
</div>
    <?php } ?> </div></div>



<?php echo "<h2>debut while</h2>"  . "<br/>";
$i=0;
while($i < count($products))
{
    echo $keys[$i]. "\n" . "<br/>" . "<br/>";

    foreach($products[$keys[$i]] as $key => $value){
        echo "aze/";
        echo $keys[$i]. "\n" ;
        echo $key .":" . $value."<br/>";

    }$i++;
}
?>



 <?php echo "<h2>debut while3</h2>" . "<br/>";

$keys=array_keys($products);
$values=array_values($products);

$index=0;?>
<div class="container">
    <div class="row">
<?php while ($index < count($products)) {?>

    <div class="col">
        <ul><?php echo $keys[$index] .":" ."<br/>";?>
        <li><?php echo "name: " . $products[$keys[$index]]["name"]. "<br/>";?></li>
     <li><?php formatPrice($products[$keys[$index]]["price"]) . "<br/>";?></li>
     <li><?php echo "poids: ".$products[$keys[$index]]["weight"] . "<br/>";?></li>
        <li><?php echo "remise: ".$products[$keys[$index]]["discount"] . "<br/>";?></li></ul>
        <?php echo '<img src="'.$products[$keys[$index]]["picture"].'" alt="" width="200">'. "<br/>";?>
    </div>
    <?php $index ++;
}
     ?></div></div>


<?php echo "<h2>debut do while</h2>" . "<br/>";
$keys=array_keys($products);
$index=0;
?>
<div class="container">
    <div class="row">
<?php do{ ?>

    <div class="col">
        <ul><li><?php echo "name: " . $products[$keys[$index]]["name"]. "<br/>";?></li>
    <li><?php formatPrice($products[$keys[$index]]["price"]) . "<br/>";?></li>
    <li><?php echo "poids: ".$products[$keys[$index]]["weight"] . "<br/>";?></li>
            <li><?php echo "remise: ".$products[$keys[$index]]["discount"] . "<br/>";?></li></ul>
    <?php echo '<img src="'.$products[$keys[$index]]["picture"].'" alt="" width="200">'. "<br/>";?>
    </div>
    <?php
    $index++;
}while ($index < count($products));
?></div></div>


</html>

<?php
include 'footer.php';
?>