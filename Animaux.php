<?php
require_once __DIR__. '/Article.php';

class Animaux extends Article
{
        public $vaccin;
        public $sterile;

public function __construct($name,$description,$price,$image,$weight,$quantity,$available,$vaccin,$sterile)
{
    $this->vaccin=$vaccin;
    $this->sterile=$sterile;
    parent::__construct($name, $description, $price, $image, $weight, $quantity, $available);

}
}