<?php
require_once __DIR__. '/Catalog.php';
require_once __DIR__. '/Article.php';
require_once __DIR__. '/Animaux.php';



$catalogueproduits=new Catalog();
$catalogueproduits->displayCat();


?>