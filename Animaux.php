<?php


class Animaux extends Article
{
        public $vaccin;
        public $sterile;

public function __construct($vaccin,$sterile)
{
    $this->vaccin=$vaccin;
    $this->sterile=$sterile;
    parent::__construct($this->name, $this->description, $this->price, $this->image, $this->weight, $this->quantity, $this->available);

}
}