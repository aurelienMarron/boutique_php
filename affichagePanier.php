<?php
require_once __DIR__. '/Panier.php';
require_once __DIR__. '/database.php';

var_dump($_POST['info_produit']);

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