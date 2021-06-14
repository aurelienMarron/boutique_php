<?php

include 'helpers.php';



$bdd= new PDO('mysql:host=localhost;dbname=boutique_ilot_3;charset=utf8', 'Aurelien', 'Calambrit14');

function callquery($query){
    global $bdd;
    $produit = $bdd->query($query);
    return $produit->fetchAll(Pdo::FETCH_ASSOC);}

function info_produit(){
    $query='SELECT * FROM products';
    return callquery($query);
}


function affiche_nom_produit(){
    $query='SELECT products.name FROM products';
return callquery($query);}




function produitenrupture(){
    $query='SELECT `products`.`name`, `products`.`quantity` FROM `products` WHERE `products`.`quantity` = 0';
return callquery($query);}



function totalcmd(){
    $query='SELECT orders.number, SUM(products.price*order_product.quantity) as total_commande
FROM products
INNER JOIN order_product on products.id = order_product.product_id
INNER JOIN orders on orders.id = order_product.order_id
GROUP BY orders.number
';
 return callquery($query);
}

function nbrcmdparclient(){
    $query='SELECT customers.first_name, customers.last_name, 
COUNT(orders.customer_id) as nombre_de_commande
FROM customers
LEFT JOIN orders on orders.customer_id=customers.id
GROUP BY customers.first_name, customers.last_name
ORDER BY customers.first_name DESC';
    return callquery($query);
}



function creation_produit($name,$description,$price,$weight,$image,$quantity,$available,$categorie_id,$vaccin,$sterile){
    global $bdd;
    $req=$bdd->prepare('INSERT INTO products(name,description,price,weight,image,quantity,available,categorie_id,vaccin,sterile) 
VALUES ( :name,:description,:price,:weight,:image,:quantity,:available,:categorie_id,:vaccin,:sterile)');
    $req->execute(array(
        'name'=>$name,
        'description'=>$description,
        'price'=>$price,
        'weight'=>$weight,
        'image'=>$image,
        'quantity'=>$quantity,
        'available'=>$available,
        'categorie_id'=>$categorie_id,
    'vaccin'=>$vaccin,
        'sterile'=>$sterile));
    echo $name .  ' a bien été ajouté';
    $req->closeCursor();
}







?>