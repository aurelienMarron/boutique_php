<?php


class Client
{
public $first_name;
public $last_name;
public $adress;
public $city;
public $PC;

public function __construct(string $first_name,string $last_name, string $adress, string $city,int $PC){
    $this->first_name=$first_name;
    $this->last_name=$last_name;
    $this->adress=$adress;
    $this->city=$city;
    $this->PC=$PC;
}

public function displayClient(){
    echo '<ul>' . '<li>' . 'Name: ' . $this->last_name ." " . $this->first_name . '</li>';
    echo '<li>' . 'Adresse: ' . $this->adress . '</li>';
    echo '<li>' . 'Ville: ' . $this->city . '</li>';
    echo '<li>' . 'CP: ' . $this->PC . '</li>' . '</ul>';
}
}