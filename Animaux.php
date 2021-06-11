<?php
require_once __DIR__. '/Article.php';

class Animaux extends Article
{
        private $vaccin;
        public $sterile;
        private $poilu;

public function __construct($name,$description,$price,$image,$weight,$quantity,$available,string $vaccin,string $sterile)
{
    $this->vaccin=$vaccin;
    $this->sterile=$sterile;
    parent::__construct($name, $description, $price, $image, $weight, $quantity, $available);

}

public function getVaccin(){
    return $this->vaccin;
}

public function setPoilu($poilu){
    $this->poilu=$poilu;
}

    public function getPoilu(){
        return $this->poilu;}

    public function displayAnimaux(){

        echo '<ul>' . '<li>' . 'Name: ' . $this->name . '</li>';
        echo '<li>' . 'Description: ' . $this->description . '</li>';
        echo '<li>' . 'Prix: ' . $this->price . '</li>';
        echo '<li>' . 'Image: ' . '<img src=' . "$this->image" .' '. 'alt="" width="200">'. '</li>';
        echo '<li>' . 'Poids: ' . $this->weight . '</li>';
        echo '<li>' . 'Quantity: ' . $this->quantity . '</li>';
        echo '<li>' . 'Dispo: ' . $this->available . '</li>';
        echo '<li>' . 'Vacciné?: ' . $this->vaccin . '</li>' ;
        echo '<li>' . 'Stérilisé: ' . $this->sterile . '</li>' . '</ul>';

    }
}