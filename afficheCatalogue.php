<?php
require_once __DIR__. '/Catalog.php';
require_once __DIR__. '/Article.php';
require_once __DIR__. '/Animaux.php';
require_once __DIR__. '/Panier.php';


//$catalogueproduits=new Catalog();
//$catalogueproduits->displayCat();

$panier=new Panier();
$panier->add(1);
$panier->displayPanier();


?>