<?php
require_once __DIR__. '/Catalog.php';
require_once __DIR__. '/Article.php';
require_once __DIR__. '/Animaux.php';
require_once __DIR__. '/Panier.php';


//$catalogueproduits=new Catalog();
//$catalogueproduits->displayCat();

$panier=new Panier();
$panier->add(1);
$panier->add(1);
$panier->displayPanier();
$panier->update(1,10);
$panier->displayPanier();
$panier->add(2);
$panier->displayPanier();
$panier->delete(2);
$panier->displayPanier();
?>