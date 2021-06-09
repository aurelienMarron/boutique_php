<?php
include 'database.php';



creation_produit($_POST["name"],$_POST["description"],$_POST["price"],$_POST["weight"],$_POST["image"],$_POST["quantity"],$_POST["available"],$_POST["categorie_id"]);
?>

<html lang="fr">

<ul>
    <li>Nom: <?php echo $_POST['name']?></li>
    <li>Description:<?php echo $_POST['description']?> </li>
    <li>Prix:<?php echo $_POST['price']?></li>
    <li>weight:<?php echo $_POST['weight']?></li>
    <li><?php echo $_POST['image']?></li>
    <li>quantity:<?php echo $_POST['quantity']?></li>
    <li>Available:<?php echo $_POST['available']?></li>
    <li>Categorie id:<?php echo $_POST['categorie_id']?></li>

</ul>








</html>
