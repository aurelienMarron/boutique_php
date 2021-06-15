<?php
require_once __DIR__. '/Animaux.php';
require_once __DIR__. '/database.php';
class Article
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $image;
    public $weight;
    public $quantity;
    public $available;

    public function __construct(int $id,string $name,string $descritpion,int $price,string $image,int $weight,int $quantity,bool $available){
        $this->id=$id;
        $this->name=$name;
        $this->description=$descritpion;
        $this->price=$price;
        $this->image=$image;
        $this->weight=$weight;
        $this->quantity=$quantity;
        $this->available=$available;
    }

    public function displayArticle(){

        echo '<ul>' . '<li>' . 'Id: ' . $this->id . '</li>';
        echo '<li>' . 'Name: ' . $this->name . '</li>';
        echo '<li>' . 'Description: ' . $this->description . '</li>';
        echo '<li>' . 'Prix: ' . $this->price . '</li>';
        echo '<li>' . 'Image: ' . '<img src=' . "$this->image" .' '.  'alt="" width="200">'. '</li>';
        echo '<li>' . 'Poids: ' . $this->weight . '</li>';
        echo '<li>' . 'Quantity: ' . $this->quantity . '</li>';
        echo '<li>' . 'Dispo: ' . $this->available . '</li></ul>'  ;

    }

}?>