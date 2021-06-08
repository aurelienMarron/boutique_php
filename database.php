<?php
function bddconnect(){
    return   new PDO('mysql:host=localhost;dbname=boutique_ilot_3;charset=utf8', 'Aurelien', 'Calambrit14');
}



function affiche_nom_produit(){
    $bdd=bddconnect();
$nom_produit = $bdd->query('SELECT products.name FROM products');
return $nom_produit->fetchAll(Pdo::FETCH_ASSOC);}




function produitenrupture(){
    $bdd=bddconnect();
$produit_rupture = $bdd->query('SELECT `products`.`name`, `products`.`quantity` FROM `products` WHERE `products`.`quantity` = 0');
return $produit_rupture->fetchAll(Pdo::FETCH_ASSOC);}



function totalcmd(){
    $bdd=bddconnect();
 $numero_totalcmd = $bdd->query('SELECT orders.number, SUM(products.price*order_product.quantity) as total_commande
FROM products
INNER JOIN order_product on products.id = order_product.product_id
INNER JOIN orders on orders.id = order_product.order_id
GROUP BY orders.number
');
while($donnees=$numero_totalcmd->fetch())
{
   echo '<br>' .'le total de la commande' . $donnees['number'] . 'est de ' . $donnees['total_commande'];
}}







?>