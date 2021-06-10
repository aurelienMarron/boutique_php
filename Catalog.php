<?php
require_once __DIR__. '/Article.php';

class Catalog
{
public $articleArray=[];



public function __construct(){
    $bdd=new PDO('mysql:host=localhost;dbname=boutique_ilot_3;charset=utf8', 'Aurelien', 'Calambrit14');
    $articleArray=$bdd->query('SELECT * FROM products');


    foreach($articleArray as $article){
        $a=new Article($article['name'],$article['description'],$article['price'],$article['image'],$article['weight'],$article['quantity'],$article['available']);
        array_push($this->articleArray,$a);
    }
    $articleArray->fetchAll(Pdo::FETCH_ASSOC);
}

public function displayCat(){
    foreach($this->articleArray as $article){
        $article->displayArticle();
    }
}

}