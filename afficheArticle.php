<?php
require_once __DIR__. '/Article.php';
require_once __DIR__. '/Animaux.php';

$banane = new Animaux('banane','from congo',120,'https://mapetiteassiette.com/wp-content/uploads/2019/05/shutterstock_553887610-e1557046359887-800x601.jpg',100,5,'oui','oui','oui');
$banane->displayArticle();

?>