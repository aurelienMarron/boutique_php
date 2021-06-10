<?php
require_once __DIR__. '/Client.php';


class ListeClients
{
public $clientArray=[];

public function __construct(){
    $bdd=new PDO('mysql:host=localhost;dbname=boutique_ilot_3;charset=utf8', 'Aurelien', 'Calambrit14');
    $clientArray=$bdd->query('SELECT * FROM customers');

    foreach($clientArray as $client){
        $a=new Client($client['first_name'],$client['last_name'],$client['adress'],$client['city'],$client['PC']);
        array_push($this->clientArray,$a);
    }
    $clientArray->fetchAll(Pdo::FETCH_ASSOC);
}
    public function displayListe(){
        foreach($this->clientArray as $client){
            $client->displayClient();
        }
    }


}